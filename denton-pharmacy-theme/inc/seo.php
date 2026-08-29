<?php
/**
 * Technical SEO helpers for Denton Pharmacy.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Return controlled metadata for high-intent pages.
 */
function denton_pharmacy_get_page_seo_data() {
    if ( ! is_page() ) {
        return array();
    }

    $slug = get_post_field( 'post_name', get_queried_object_id() );
    $pages = array(
        'contact' => array(
            'title'       => 'Contact Denton Pharmacy | Opening Hours and Directions',
            'description' => 'Contact Denton Pharmacy for opening hours, directions, parking and help with NHS or private pharmacy services. Call or send our local team a message today.',
        ),
        'nominate-denton-pharmacy' => array(
            'title'       => 'Nominate Denton Pharmacy for NHS Prescriptions and Delivery',
            'description' => 'Nominate Denton Pharmacy for NHS prescriptions, repeat ordering and local delivery. Complete our secure online registration form to get started today.',
        ),
        'book-appointment' => array(
            'title'       => 'Book a Pharmacy Appointment in Denton | Denton Pharmacy',
            'description' => 'Book Denton Pharmacy for travel vaccinations, ear wax removal, blood tests, weight loss and other pharmacy services. Choose an appointment online today.',
        ),
    );

    return isset( $pages[ $slug ] ) ? $pages[ $slug ] : array();
}

/**
 * Apply a complete WordPress document title for controlled pages.
 */
function denton_pharmacy_filter_document_title( $title ) {
    $seo_data = denton_pharmacy_get_page_seo_data();
    return ! empty( $seo_data['title'] ) ? $seo_data['title'] : $title;
}
add_filter( 'pre_get_document_title', 'denton_pharmacy_filter_document_title', 20 );

/**
 * Keep Yoast output aligned with the controlled title.
 */
function denton_pharmacy_filter_yoast_title( $title ) {
    return denton_pharmacy_filter_document_title( $title );
}
add_filter( 'wpseo_title', 'denton_pharmacy_filter_yoast_title', 20 );

/**
 * Add descriptions through Yoast when it is active.
 */
function denton_pharmacy_filter_yoast_description( $description ) {
    $seo_data = denton_pharmacy_get_page_seo_data();
    return ! empty( $seo_data['description'] ) ? $seo_data['description'] : $description;
}
add_filter( 'wpseo_metadesc', 'denton_pharmacy_filter_yoast_description', 20 );

/**
 * Output descriptions when no supported SEO plugin is active.
 */
function denton_pharmacy_output_meta_description() {
    if ( defined( 'WPSEO_VERSION' ) || function_exists( 'YoastSEO' ) ) {
        return;
    }

    $seo_data = denton_pharmacy_get_page_seo_data();
    if ( ! empty( $seo_data['description'] ) ) {
        echo '<meta name="description" content="' . esc_attr( $seo_data['description'] ) . '" />' . "\n";
    }
}
add_action( 'wp_head', 'denton_pharmacy_output_meta_description', 2 );

/**
 * Convert a human-readable time to the HH:MM form required by Schema.org.
 */
function denton_pharmacy_schema_time( $value ) {
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
function denton_pharmacy_schema_time_range( $value ) {
    $value = strtolower( trim( wp_strip_all_tags( (string) $value ) ) );
    if ( '' === $value || false !== strpos( $value, 'closed' ) ) {
        return array();
    }

    $parts = preg_split( '/\s*(?:–|—|-|\bto\b)\s*/u', $value, 2 );
    if ( 2 !== count( $parts ) ) {
        return array();
    }

    $opens  = denton_pharmacy_schema_time( $parts[0] );
    $closes = denton_pharmacy_schema_time( $parts[1] );

    return $opens && $closes ? array( $opens, $closes ) : array();
}

/**
 * Build opening-hours specifications from the same ACF options shown on-site.
 */
function denton_pharmacy_opening_hours_schema() {
    $definitions = array(
        array(
            'days'  => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
            'hours' => dp_option( 'hours_weekday', '9:00am – 5:30pm' ),
        ),
        array(
            'days'  => array( 'Saturday' ),
            'hours' => dp_option( 'hours_saturday', 'Closed' ),
        ),
        array(
            'days'  => array( 'Sunday' ),
            'hours' => dp_option( 'hours_sunday', 'Closed' ),
        ),
    );

    $specifications = array();
    foreach ( $definitions as $definition ) {
        $range = denton_pharmacy_schema_time_range( $definition['hours'] );
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
function denton_pharmacy_local_business_schema() {
    $home_url = trailingslashit( home_url( '/' ) );
    $gphc     = dp_option( 'gphc_registration', '1033447' );
    $gphc_url = dp_option( 'gphc_register_url' );
    if ( ! $gphc_url && $gphc ) {
        $gphc_url = 'https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/' . rawurlencode( $gphc );
    }

    $same_as = array_filter( array(
        dp_option( 'social_facebook' ),
        dp_option( 'social_instagram' ),
        dp_option( 'social_twitter' ),
        dp_option( 'location_pharmacy_maps_url' ),
        $gphc_url,
    ) );

    $schema = array(
        '@type'       => 'Pharmacy',
        '@id'         => $home_url . '#organization',
        'name'        => dp_pharmacy_name(),
        'url'         => $home_url,
        'description' => 'Community pharmacy providing NHS and private healthcare services in Denton, Manchester.',
        'telephone'   => dp_phone(),
        'email'       => dp_option( 'pharmacy_email', 'info@dentonpharmacy.co.uk' ),
        'address'     => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => dp_option( 'pharmacy_address_line_1', '14-16 Ashton Road' ),
            'addressLocality' => dp_option( 'pharmacy_town', 'Denton' ),
            'addressRegion'   => 'Greater Manchester',
            'postalCode'      => dp_option( 'pharmacy_address_line_3', 'M34 3EX' ),
            'addressCountry'  => 'GB',
        ),
        'openingHoursSpecification' => denton_pharmacy_opening_hours_schema(),
    );

    $logo_url = dp_logo_url();
    if ( $logo_url ) {
        $schema['logo']  = $logo_url;
        $schema['image'] = $logo_url;
    }

    $coords = array_map( 'trim', explode( ',', dp_option( 'location_center_coords', '53.4557,-2.1120' ) ) );
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
function denton_pharmacy_filter_yoast_schema_graph( $graph ) {
    $business = denton_pharmacy_local_business_schema();
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
add_filter( 'wpseo_schema_graph', 'denton_pharmacy_filter_yoast_schema_graph', 20 );

/**
 * Output standalone JSON-LD when Yoast is unavailable.
 */
function denton_pharmacy_output_local_business_schema() {
    if ( defined( 'WPSEO_VERSION' ) || function_exists( 'YoastSEO' ) ) {
        return;
    }

    if ( ! is_front_page() && ! is_page( 'contact' ) ) {
        return;
    }

    $schema = denton_pharmacy_local_business_schema();
    $schema = array_merge( array( '@context' => 'https://schema.org' ), $schema );
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'denton_pharmacy_output_local_business_schema', 30 );
