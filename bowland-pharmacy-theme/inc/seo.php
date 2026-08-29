<?php
/**
 * Technical SEO helpers for Bowland Pharmacy.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Convert a human-readable time to the HH:MM form required by Schema.org.
 */
function bowland_pharmacy_schema_time( $value ) {
    $value = strtolower( trim( (string) $value ) );
    if ( ! preg_match( '/^(\d{1,2})(?::(\d{2}))?\s*(am|pm)?$/', $value, $matches ) ) {
        return '';
    }

    $hour     = (int) $matches[1];
    $minute   = isset( $matches[2] ) && '' !== $matches[2] ? (int) $matches[2] : 0;
    $meridian = isset( $matches[3] ) ? $matches[3] : '';

    if ( $minute > 59 || $hour > 23 || ( $meridian && ( $hour < 1 || $hour > 12 ) ) ) {
        return '';
    }

    if ( 'am' === $meridian && 12 === $hour ) {
        $hour = 0;
    } elseif ( 'pm' === $meridian && $hour < 12 ) {
        $hour += 12;
    }

    return sprintf( '%02d:%02d', $hour, $minute );
}

/**
 * Parse a configured opening-hours range.
 */
function bowland_pharmacy_schema_time_range( $value ) {
    $value = strtolower( trim( wp_strip_all_tags( (string) $value ) ) );
    if ( '' === $value || false !== strpos( $value, 'closed' ) ) {
        return array();
    }

    $parts = preg_split( '/\s*(?:–|—|-|\bto\b)\s*/u', $value, 2 );
    if ( 2 !== count( $parts ) ) {
        return array();
    }

    $opens  = bowland_pharmacy_schema_time( $parts[0] );
    $closes = bowland_pharmacy_schema_time( $parts[1] );

    return $opens && $closes ? array( $opens, $closes ) : array();
}

/**
 * Build opening-hours specifications from the same ACF options shown on-site.
 */
function bowland_pharmacy_opening_hours_schema() {
    $definitions = array(
        array(
            'days'  => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
            'hours' => bp_option( 'hours_weekday', '9:00am – 6:00pm' ),
        ),
        array(
            'days'  => array( 'Saturday' ),
            'hours' => bp_option( 'hours_saturday', 'Closed' ),
        ),
        array(
            'days'  => array( 'Sunday' ),
            'hours' => bp_option( 'hours_sunday', 'Closed' ),
        ),
    );

    $specifications = array();
    foreach ( $definitions as $definition ) {
        $range = bowland_pharmacy_schema_time_range( $definition['hours'] );
        if ( empty( $range ) ) {
            continue;
        }

        $specifications[] = array(
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => $definition['days'],
            'opens'     => $range[0],
            'closes'    => $range[1],
        );
    }

    return $specifications;
}

/**
 * Build the canonical Pharmacy entity from editable site settings.
 */
function bowland_pharmacy_local_business_schema() {
    $home_url = trailingslashit( home_url( '/' ) );
    $gphc     = bp_option( 'gphc_registration', '1089163' );
    $gphc_url = bp_option( 'gphc_register_url' );
    if ( ! $gphc_url && $gphc ) {
        $gphc_url = 'https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/' . rawurlencode( $gphc );
    }

    $same_as = array_filter( array(
        bp_option( 'social_facebook' ),
        bp_option( 'social_instagram' ),
        bp_option( 'social_twitter' ),
        bp_option( 'location_pharmacy_maps_url' ),
        $gphc_url,
    ) );

    $schema = array(
        '@type'       => 'Pharmacy',
        '@id'         => $home_url . '#organization',
        'name'        => bp_pharmacy_name(),
        'url'         => $home_url,
        'description' => 'Community pharmacy providing NHS and private healthcare services in Wythenshawe, Manchester.',
        'telephone'   => bp_phone(),
        'email'       => bp_option( 'pharmacy_email', 'info@bowlandpharmacy.co.uk' ),
        'address'     => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => bp_option( 'pharmacy_address_line_1', '52 Bowland Road' ),
            'addressLocality' => bp_option( 'pharmacy_town', 'Wythenshawe' ),
            'addressRegion'   => 'Greater Manchester',
            'postalCode'      => bp_option( 'pharmacy_address_line_3', 'M23 1JX' ),
            'addressCountry'  => 'GB',
        ),
        'openingHoursSpecification' => bowland_pharmacy_opening_hours_schema(),
    );

    $logo_url = bp_logo_url();
    if ( $logo_url ) {
        $schema['logo']  = $logo_url;
        $schema['image'] = $logo_url;
    }

    $coords = array_map( 'trim', explode( ',', bp_option( 'location_center_coords', '53.393361,-2.283273' ) ) );
    if ( 2 === count( $coords ) && is_numeric( $coords[0] ) && is_numeric( $coords[1] ) ) {
        $schema['geo'] = array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => (float) $coords[0],
            'longitude' => (float) $coords[1],
        );
    }

    if ( $gphc ) {
        $schema['identifier'] = array(
            '@type' => 'PropertyValue',
            'name'  => 'GPhC Pharmacy Registration Number',
            'value' => $gphc,
        );
    }

    if ( $same_as ) {
        $schema['sameAs'] = array_values( array_unique( $same_as ) );
    }

    return $schema;
}

/**
 * Enrich Yoast's graph and link the WebSite and WebPage to the Pharmacy entity.
 */
function bowland_pharmacy_filter_yoast_schema_graph( $graph ) {
    $business = bowland_pharmacy_local_business_schema();
    $found    = false;

    foreach ( $graph as $index => $piece ) {
        $piece_id    = isset( $piece['@id'] ) ? $piece['@id'] : '';
        $piece_types = isset( $piece['@type'] ) ? (array) $piece['@type'] : array();

        if ( $business['@id'] === $piece_id || ( in_array( 'Organization', $piece_types, true ) && home_url( '/' ) === ( isset( $piece['url'] ) ? $piece['url'] : '' ) ) ) {
            if ( ! empty( $piece['sameAs'] ) ) {
                $business['sameAs'] = array_values( array_unique( array_merge( (array) $piece['sameAs'], isset( $business['sameAs'] ) ? $business['sameAs'] : array() ) ) );
            }
            if ( ! empty( $piece['logo'] ) ) {
                $business['logo'] = $piece['logo'];
            }
            if ( ! empty( $piece['image'] ) ) {
                $business['image'] = $piece['image'];
            }
            $graph[ $index ] = array_merge( $piece, $business );
            $found = true;
        }

        if ( in_array( 'WebSite', $piece_types, true ) ) {
            $graph[ $index ]['publisher'] = array( '@id' => $business['@id'] );
        }

        if ( in_array( 'WebPage', $piece_types, true ) ) {
            $graph[ $index ]['about'] = array( '@id' => $business['@id'] );
        }
    }

    if ( ! $found ) {
        $graph[] = $business;
    }

    return $graph;
}
add_filter( 'wpseo_schema_graph', 'bowland_pharmacy_filter_yoast_schema_graph', 20 );

/**
 * Encode schema for safe embedding in an HTML script element.
 */
function bowland_pharmacy_encode_schema( $schema ) {
    return wp_json_encode(
        $schema,
        JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE
    );
}

/**
 * Output standalone JSON-LD when Yoast is unavailable.
 */
function bowland_pharmacy_output_local_business_schema() {
    if ( defined( 'WPSEO_VERSION' ) || function_exists( 'YoastSEO' ) ) {
        return;
    }

    if ( ! is_front_page() && ! is_page( 'contact' ) ) {
        return;
    }

    $schema = bowland_pharmacy_local_business_schema();
    $schema = array_merge( array( '@context' => 'https://schema.org' ), $schema );
    echo '<script type="application/ld+json">' . bowland_pharmacy_encode_schema( $schema ) . '</script>' . "\n";
}
add_action( 'wp_head', 'bowland_pharmacy_output_local_business_schema', 30 );

/**
 * Resolve the default WordPress sample page once for redirect and sitemap use.
 */
function bowland_pharmacy_sample_page_id() {
    $sample_page = get_page_by_path( 'sample-page', OBJECT, 'page' );
    return $sample_page instanceof WP_Post ? (int) $sample_page->ID : 0;
}

/**
 * Redirect the indexed default sample page to the pharmacy homepage.
 */
function bowland_pharmacy_redirect_sample_page() {
    if ( is_page( 'sample-page' ) ) {
        wp_safe_redirect( home_url( '/' ), 301, 'Bowland Pharmacy' );
        exit;
    }
}
add_action( 'template_redirect', 'bowland_pharmacy_redirect_sample_page', 1 );

/**
 * Exclude the sample page from the WordPress core sitemap.
 */
function bowland_pharmacy_exclude_sample_page_from_core_sitemap( $args, $post_type ) {
    if ( 'page' !== $post_type ) {
        return $args;
    }

    $sample_page_id = bowland_pharmacy_sample_page_id();
    if ( $sample_page_id ) {
        $excluded = isset( $args['post__not_in'] ) ? (array) $args['post__not_in'] : array();
        $excluded[] = $sample_page_id;
        $args['post__not_in'] = array_values( array_unique( array_map( 'intval', $excluded ) ) );
    }

    return $args;
}
add_filter( 'wp_sitemaps_posts_query_args', 'bowland_pharmacy_exclude_sample_page_from_core_sitemap', 10, 2 );

/**
 * Exclude the sample page from Yoast's sitemap.
 */
function bowland_pharmacy_exclude_sample_page_from_yoast_sitemap( $excluded_ids ) {
    $sample_page_id = bowland_pharmacy_sample_page_id();
    if ( $sample_page_id ) {
        $excluded_ids[] = $sample_page_id;
    }

    return array_values( array_unique( array_map( 'intval', $excluded_ids ) ) );
}
add_filter( 'wpseo_exclude_from_sitemap_by_post_ids', 'bowland_pharmacy_exclude_sample_page_from_yoast_sitemap' );
