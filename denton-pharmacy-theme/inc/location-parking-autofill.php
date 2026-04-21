<?php
/**
 * Parking Hotspots — auto-fill from Google Maps URL.
 *
 * When an editor pastes a Google Maps share link into the
 * `location_parking_callouts[].destination_url` field and leaves the
 * label or coordinates empty, parse the URL and fill them in on save.
 *
 * Supported formats:
 *  - Full URL: https://www.google.com/maps/place/NAME/@lat,lng,zoom/...
 *  - Short:    https://maps.app.goo.gl/xxxx   (redirect followed)
 *  - Short:    https://goo.gl/maps/xxxx       (redirect followed)
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Run regex probes against a URL or HTML body, filling the $result array
 * in place. Safe to call multiple times on different sources.
 */
function dp_regex_google_maps( $text, array &$result ) {
    // @lat,lng pattern (with optional trailing ,zoom)
    if ( $result['coords'] === '' && preg_match( '#@(-?\d+\.\d+),(-?\d+\.\d+)#', $text, $m ) ) {
        $result['coords'] = $m[1] . ',' . $m[2];
    }

    // /place/NAME/  — path segment. Stop at the next /, @ or ?
    if ( $result['label'] === '' && preg_match( '#/place/([^/@?]+)#', $text, $m ) ) {
        $name = rawurldecode( $m[1] );
        $name = str_replace( '+', ' ', $name );
        $result['label'] = trim( $name );
    }

    // og:title fallback (only present in HTML bodies)
    if ( $result['label'] === '' && preg_match( '#<meta\s+[^>]*property=["\']og:title["\'][^>]*content=["\']([^"\']+)["\']#i', $text, $m ) ) {
        $title = html_entity_decode( $m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8' );
        // Google sometimes appends " - Google Maps" — strip it
        $title = preg_replace( '#\s+-\s+Google Maps\s*$#i', '', $title );
        $result['label'] = trim( $title );
    }

    // Static-map center= fallback for coords
    if ( $result['coords'] === '' && preg_match( '#center=(-?\d+\.\d+)(?:%2C|,)(-?\d+\.\d+)#i', $text, $m ) ) {
        $result['coords'] = $m[1] . ',' . $m[2];
    }
}

/**
 * Parse a Google Maps URL and return its label + coordinates.
 * Follows redirects for short links (maps.app.goo.gl, goo.gl/maps).
 *
 * @param string $url
 * @return array{label:string, coords:string}
 */
function dp_parse_google_maps_url( $url ) {
    $result = array( 'label' => '', 'coords' => '' );
    if ( empty( $url ) ) {
        return $result;
    }

    // First pass: regex the URL string. Works for full /place/.../@lat,lng URLs.
    dp_regex_google_maps( $url, $result );
    if ( $result['label'] !== '' && $result['coords'] !== '' ) {
        return $result;
    }

    // Short link or partial match — expand by fetching, then regex the
    // final URL AND the response body.
    $response = wp_remote_get( $url, array(
        'redirection' => 5,
        'timeout'     => 12,
        'sslverify'   => true,
        'user-agent'  => 'Mozilla/5.0 (compatible; DentonPharmacy/1.0; +https://dentonpharmacy.co.uk)',
    ) );

    if ( is_wp_error( $response ) ) {
        return $result;
    }

    // Try to read the final URL after redirects (WP_HTTP_Requests_Response).
    $final_url = '';
    if ( ! empty( $response['http_response'] ) ) {
        $obj = $response['http_response']->get_response_object();
        if ( $obj && ! empty( $obj->url ) ) {
            $final_url = $obj->url;
        }
    }
    if ( $final_url ) {
        dp_regex_google_maps( $final_url, $result );
    }

    $body = wp_remote_retrieve_body( $response );
    if ( $body ) {
        dp_regex_google_maps( $body, $result );
    }

    return $result;
}

/**
 * Fingerprints option — tracks the last URL that was successfully
 * parsed for each parking row (keyed by the row's label+coords pair,
 * falling back to row index).
 *
 * On save we compare the currently-saved URL against the stored
 * fingerprint; if they differ we re-parse and overwrite label + coords,
 * then update the fingerprint. If they match we leave everything alone
 * so the editor's manual tweaks to name/description survive.
 */
const DP_PARKING_FINGERPRINT_OPTION = 'dp_parking_callouts_fingerprints';

function dp_parking_fingerprints_get() {
    $stored = get_option( DP_PARKING_FINGERPRINT_OPTION, array() );
    return is_array( $stored ) ? $stored : array();
}

function dp_parking_fingerprints_save( array $fingerprints ) {
    update_option( DP_PARKING_FINGERPRINT_OPTION, $fingerprints, false );
}

/**
 * After ACF saves the options page, diff each parking row's URL against
 * its stored fingerprint. If the URL changed (or there's no fingerprint
 * yet), re-parse and overwrite the label + coords from Google Maps.
 * If the URL is unchanged, leave the row alone.
 */
function dp_autofill_parking_callouts( $post_id ) {
    // Only option-page saves. Skip posts/pages/users/terms.
    if ( is_numeric( $post_id ) ) {
        return;
    }

    $callouts = get_field( 'location_parking_callouts', $post_id );
    if ( ! is_array( $callouts ) ) {
        return;
    }

    $fingerprints = dp_parking_fingerprints_get();
    $changed      = false;

    foreach ( $callouts as $i => $row ) {
        $url        = isset( $row['destination_url'] ) ? trim( (string) $row['destination_url'] ) : '';
        $last_url   = isset( $fingerprints[ $i ] ) ? (string) $fingerprints[ $i ] : '';

        if ( $url === '' ) {
            // Row has no URL; clear its fingerprint slot so a later paste re-parses.
            if ( $last_url !== '' ) {
                $fingerprints[ $i ] = '';
            }
            continue;
        }

        if ( $url === $last_url ) {
            // URL unchanged — respect any manual edits made to label/desc/coords.
            continue;
        }

        $parsed = dp_parse_google_maps_url( $url );

        // Only record the fingerprint if we actually pulled something useful out
        // of the URL; otherwise leave it so the editor can retry on the next save.
        if ( ! empty( $parsed['label'] ) || ! empty( $parsed['coords'] ) ) {
            if ( ! empty( $parsed['label'] ) ) {
                $callouts[ $i ]['label'] = $parsed['label'];
            }
            if ( ! empty( $parsed['coords'] ) ) {
                $callouts[ $i ]['coords'] = $parsed['coords'];
            }
            $fingerprints[ $i ] = $url;
            $changed            = true;
        }
    }

    // Trim fingerprint array to the number of rows so deleted rows drop off.
    $fingerprints = array_slice( $fingerprints, 0, count( $callouts ) );

    if ( $changed ) {
        remove_action( 'acf/save_post', 'dp_autofill_parking_callouts', 20 );
        update_field( 'location_parking_callouts', $callouts, $post_id );
        add_action( 'acf/save_post', 'dp_autofill_parking_callouts', 20 );
    }

    dp_parking_fingerprints_save( $fingerprints );
}
add_action( 'acf/save_post', 'dp_autofill_parking_callouts', 20 );
