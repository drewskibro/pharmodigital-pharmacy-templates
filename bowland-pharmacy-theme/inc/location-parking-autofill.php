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
function bp_regex_google_maps( $text, array &$result ) {
    // Preferred: !3d<lat>!4d<lng> — the actual place coords embedded in
    // Google's `data=` blob. Matches what right-clicking the place on
    // Google Maps gives you.
    if ( $result['coords'] === '' && preg_match( '#!3d(-?\d+\.\d+)!4d(-?\d+\.\d+)#', $text, $m ) ) {
        $result['coords'] = $m[1] . ',' . $m[2];
    }

    // Fallback: @lat,lng,zoom — viewport centre of the shared map view.
    // Usually off from the actual place by a few metres, so only used if
    // the !3d/!4d pair isn't present.
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
        $title = preg_replace( '#\s+-\s+Google Maps\s*$#i', '', $title );
        $result['label'] = trim( $title );
    }

    // Static-map center= fallback for coords (lowest priority)
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
function bp_parse_google_maps_url( $url ) {
    $result = array( 'label' => '', 'coords' => '' );
    if ( empty( $url ) ) {
        return $result;
    }

    // First pass: regex the URL string. Works for full /place/.../@lat,lng URLs.
    bp_regex_google_maps( $url, $result );
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
        bp_regex_google_maps( $final_url, $result );
    }

    $body = wp_remote_retrieve_body( $response );
    if ( $body ) {
        bp_regex_google_maps( $body, $result );
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
const BP_PARKING_FINGERPRINT_OPTION = 'bp_parking_callouts_fingerprints';

function bp_parking_fingerprints_get() {
    $stored = get_option( BP_PARKING_FINGERPRINT_OPTION, array() );
    return is_array( $stored ) ? $stored : array();
}

function bp_parking_fingerprints_save( array $fingerprints ) {
    update_option( BP_PARKING_FINGERPRINT_OPTION, $fingerprints, false );
}

/**
 * After ACF saves the options page, diff each parking row's URL against
 * its stored fingerprint. If the URL changed (or there's no fingerprint
 * yet), re-parse and overwrite the label + coords from Google Maps.
 * If the URL is unchanged, leave the row alone.
 */
/**
 * Parse the pharmacy's own Google Maps share link and write its coords
 * into location_center_coords. Uses the same fingerprint trick as the
 * callouts so manual edits survive unless the URL changes.
 */
function bp_autofill_pharmacy_center( $post_id ) {
    $url = trim( (string) get_field( 'location_pharmacy_maps_url', $post_id ) );
    if ( $url === '' ) {
        return;
    }

    $fingerprints = bp_parking_fingerprints_get();
    $last_url     = isset( $fingerprints['__pharmacy__'] ) ? (string) $fingerprints['__pharmacy__'] : '';
    $cur_coords   = trim( (string) get_field( 'location_center_coords', $post_id ) );

    if ( $url === $last_url && $cur_coords !== '' ) {
        error_log( '[bp_autofill] pharmacy skip (url unchanged, coords present)' );
        return;
    }

    $parsed = bp_parse_google_maps_url( $url );
    error_log( '[bp_autofill] pharmacy parsed coords=' . $parsed['coords'] );

    if ( ! empty( $parsed['coords'] ) ) {
        $ok = update_field( 'field_bp_location_center_coords', $parsed['coords'], 'option' );
        error_log( '[bp_autofill] pharmacy center write: ' . var_export( $ok, true ) );
        $fingerprints['__pharmacy__'] = $url;
        bp_parking_fingerprints_save( $fingerprints );
    }
}

function bp_autofill_parking_callouts( $post_id ) {
    // Only option-page saves. Skip posts/pages/users/terms.
    if ( is_numeric( $post_id ) ) {
        return;
    }

    error_log( '[bp_autofill] hook fired with post_id: ' . var_export( $post_id, true ) );

    // --- Pharmacy centre coords: parse from the pharmacy Google Maps link ---
    bp_autofill_pharmacy_center( $post_id );

    $callouts = get_field( 'location_parking_callouts', $post_id );
    if ( ! is_array( $callouts ) ) {
        error_log( '[bp_autofill] no callouts found for post_id ' . $post_id );
        return;
    }

    error_log( '[bp_autofill] rows: ' . count( $callouts ) );

    $fingerprints = bp_parking_fingerprints_get();

    foreach ( $callouts as $i => $row ) {
        $url        = isset( $row['destination_url'] ) ? trim( (string) $row['destination_url'] ) : '';
        $last_url   = isset( $fingerprints[ $i ] ) ? (string) $fingerprints[ $i ] : '';
        $cur_label  = isset( $row['label'] ) ? trim( (string) $row['label'] ) : '';
        $cur_coords = isset( $row['coords'] ) ? trim( (string) $row['coords'] ) : '';

        error_log( '[bp_autofill] row ' . $i . ' url=' . $url . ' last=' . $last_url . ' label=' . $cur_label . ' coords=' . $cur_coords );

        if ( $url === '' ) {
            if ( $last_url !== '' ) {
                $fingerprints[ $i ] = '';
            }
            continue;
        }

        // Re-parse when the URL changed OR when label/coords are empty (editor
        // cleared them manually to force a refresh). Fingerprint alone isn't
        // enough because we want empty cells to always refill.
        if ( $url === $last_url && $cur_label !== '' && $cur_coords !== '' ) {
            error_log( '[bp_autofill] row ' . $i . ' skip (url unchanged, label+coords present)' );
            continue;
        }

        $parsed = bp_parse_google_maps_url( $url );
        error_log( '[bp_autofill] row ' . $i . ' parsed label=' . $parsed['label'] . ' coords=' . $parsed['coords'] );

        // Only record the fingerprint if we actually pulled something useful out
        // of the URL; otherwise leave it so the editor can retry on the next save.
        if ( ! empty( $parsed['label'] ) || ! empty( $parsed['coords'] ) ) {
            // Write directly to the sub-fields by field key. On the options
            // page, update_field() on the whole repeater by name returns
            // false; update_sub_field() with the key path is the reliable
            // ACF-sanctioned way to patch individual cells.
            $row_index = $i + 1; // ACF sub-field rows are 1-indexed.
            if ( ! empty( $parsed['label'] ) ) {
                $ok_label = update_sub_field(
                    array( 'field_bp_location_parking_callouts', $row_index, 'field_bp_location_callout_label' ),
                    $parsed['label'],
                    'option'
                );
                error_log( '[bp_autofill] row ' . $i . ' label write: ' . var_export( $ok_label, true ) );
            }
            if ( ! empty( $parsed['coords'] ) ) {
                $ok_coords = update_sub_field(
                    array( 'field_bp_location_parking_callouts', $row_index, 'field_bp_location_callout_coords' ),
                    $parsed['coords'],
                    'option'
                );
                error_log( '[bp_autofill] row ' . $i . ' coords write: ' . var_export( $ok_coords, true ) );
            }
            $fingerprints[ $i ] = $url;
        }
    }

    // Trim fingerprint array to the number of rows so deleted rows drop off.
    $fingerprints = array_slice( $fingerprints, 0, count( $callouts ) );

    bp_parking_fingerprints_save( $fingerprints );
}
add_action( 'acf/save_post', 'bp_autofill_parking_callouts', 20 );
