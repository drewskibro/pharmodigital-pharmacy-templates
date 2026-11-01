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
            'title'       => 'Contact Us, Ashton Road, Denton M34 3EX | Denton Pharmacy',
            'description' => 'Denton Pharmacy on Ashton Road, Denton, Manchester M34 3EX. Opening hours, free customer parking nearby and directions. Call 0161 336 2548.',
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
            'streetAddress'   => dp_option( 'pharmacy_address_line_1', '14 Ashton Road' ),
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

    $schema['parentOrganization'] = array( '@id' => 'https://at-health.co.uk/#organization' );

    return $schema;
}

/**
 * AT Health Ltd, the company that owns the pharmacy. The same @id is used on
 * Wilmslow Pharmacy and MNC Travel Clinic, so search engines can join the sites.
 */
function denton_pharmacy_owner_schema() {
    return array(
        '@type'      => 'Organization',
        '@id'        => 'https://at-health.co.uk/#organization',
        'name'       => 'AT Health',
        'legalName'  => 'AT Health Ltd',
        'url'        => 'https://at-health.co.uk/',
        'identifier' => array(
            '@type'      => 'PropertyValue',
            'propertyID' => 'Companies House',
            'name'       => 'Company number, England and Wales',
            'value'      => '14519140',
        ),
        'sameAs'     => array( 'https://find-and-update.company-information.service.gov.uk/company/14519140' ),
    );
}

/**
 * The Superintendent Pharmacist. Uses the @id Yoast already gives Ahmed's author
 * record, so the post author and the Superintendent are one person.
 */
function denton_pharmacy_superintendent_id() {
    return trailingslashit( home_url( '/' ) ) . '#/schema/person/6e821815e24ba4ec964c52022ef19947';
}

function denton_pharmacy_superintendent_schema() {
    return array(
        '@type'         => 'Person',
        '@id'           => denton_pharmacy_superintendent_id(),
        'name'          => 'Ahmed Nizar Al-Liabi',
        'alternateName' => 'Ahmed Al-Liabi',
        'jobTitle'      => 'Superintendent Pharmacist',
        'identifier'    => array(
            '@type'      => 'PropertyValue',
            'propertyID' => 'GPhC',
            'name'       => 'GPhC pharmacist registration number',
            'value'      => '2208502',
        ),
        'sameAs'        => array( 'https://www.pharmacyregulation.org/registers/pharmacist/2208502' ),
        'url'           => home_url( '/team/' ),
        'worksFor'      => array( '@id' => 'https://at-health.co.uk/#organization' ),
    );
}

/**
 * Other registered pharmacists on /team/. Nobody without a GPhC number on the
 * page is marked up, so first-name-only staff cards add nothing.
 */
function denton_pharmacy_team_people_schema() {
    if ( ! is_page( 'team' ) ) {
        return array();
    }
    $people = array();
    // Meet the Team rows (page field team_members). Only a registered pharmacist
    // shown with a full name and a GPhC number becomes a Person.
    $rows = function_exists( 'get_field' ) ? get_field( 'team_members' ) : array();
    foreach ( (array) $rows as $row ) {
        $people[] = array(
            'name' => isset( $row['name'] ) ? $row['name'] : '',
            'role' => isset( $row['role'] ) ? $row['role'] : '',
            'gphc' => isset( $row['gphc_number'] ) ? $row['gphc_number'] : '',
        );
    }
    $out      = array();
    $business = trailingslashit( home_url( '/' ) ) . '#organization';
    foreach ( $people as $p ) {
        $gphc = preg_replace( '/[^0-9]/', '', (string) $p['gphc'] );
        $name = trim( wp_strip_all_tags( (string) $p['name'] ) );
        if ( '' === $gphc || '2208502' === $gphc || false === strpos( $name, ' ' ) ) {
            continue; // Ahmed is added separately; first names alone are skipped.
        }
        $out[] = array(
            '@type'      => 'Person',
            '@id'        => home_url( '/team/' ) . '#' . sanitize_title( $name ),
            'name'       => $name,
            'jobTitle'   => trim( wp_strip_all_tags( (string) $p['role'] ) ),
            'identifier' => array(
                '@type'      => 'PropertyValue',
                'propertyID' => 'GPhC',
                'name'       => 'GPhC pharmacist registration number',
                'value'      => $gphc,
            ),
            'sameAs'     => array( 'https://www.pharmacyregulation.org/registers/pharmacist/' . $gphc ),
            'worksFor'   => array( '@id' => $business ),
        );
    }
    return $out;
}

/**
 * A Service record on each service page. The name is the page's own title, so
 * it never says more than the page does. No price: prices change, and a stale
 * price here would be one more place to update.
 */
function denton_pharmacy_service_schema() {
    if ( ! is_page() ) {
        return null;
    }
    $service_templates = array(
        'page-blister-packs.php', 'page-blood-testing.php', 'page-chickenpox.php',
        'page-chikungunya.php', 'page-cholera.php', 'page-contraception.php',
        'page-corporate.php', 'page-covid-vaccination.php', 'page-dengue.php',
        'page-dtp.php', 'page-ear-wax-removal.php', 'page-flu-vaccination.php',
        'page-hair-loss.php', 'page-hepatitis-b-occupational.php', 'page-hepatitisa.php',
        'page-hepatitisb.php', 'page-hpv.php', 'page-japaneseencephalitis.php',
        'page-malaria.php', 'page-meningitis-acwy.php', 'page-meningitis-b.php',
        'page-mmr.php', 'page-nhs-prescriptions.php', 'page-pharmacy-first.php',
        'page-pneumonia.php', 'page-rabies.php', 'page-shingles.php', 'page-tbe.php',
        'page-travel-health.php', 'page-typhoid.php', 'page-weight-loss.php',
        'page-whoopingcough.php', 'page-yellow-fever.php',
    );
    if ( ! in_array( basename( (string) get_page_template_slug() ), $service_templates, true ) ) {
        return null;
    }
    $url = get_permalink();
    return array(
        '@type'            => 'Service',
        '@id'              => $url . '#service',
        'name'             => wp_strip_all_tags( get_the_title() ),
        'url'              => $url,
        'provider'         => array( '@id' => trailingslashit( home_url( '/' ) ) . '#organization' ),
        'mainEntityOfPage' => array( '@id' => $url ),
    );
}

/**
 * Enrich Yoast's graph and link the WebSite and WebPage to the Pharmacy entity.
 */
function denton_pharmacy_filter_yoast_schema_graph( $graph ) {
    $business = denton_pharmacy_local_business_schema();
    $found    = false;
    $person_found = false;

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

        if ( in_array( 'Person', $piece_types, true ) && denton_pharmacy_superintendent_id() === $piece_id ) {
            $graph[ $index ] = array_merge( $piece, denton_pharmacy_superintendent_schema() );
            $person_found    = true;
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

    $graph[] = denton_pharmacy_owner_schema();

    if ( ! $person_found && is_page( 'team' ) ) {
        $graph[] = denton_pharmacy_superintendent_schema();
    }

    foreach ( denton_pharmacy_team_people_schema() as $person ) {
        $graph[] = $person;
    }

    $service = denton_pharmacy_service_schema();
    if ( $service ) {
        $graph[] = $service;
    }

    return $graph;
}
add_filter( 'wpseo_schema_graph', 'denton_pharmacy_filter_yoast_schema_graph', 20 );

/**
 * Encode schema for safe embedding in an HTML script element.
 */
function denton_pharmacy_encode_schema( $schema ) {
    return wp_json_encode(
        $schema,
        JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE
    );
}

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
    echo '<script type="application/ld+json">' . denton_pharmacy_encode_schema( $schema ) . '</script>' . "\n";
}
add_action( 'wp_head', 'denton_pharmacy_output_local_business_schema', 30 );

/**
 * Resolve the default WordPress sample page once for redirect and sitemap use.
 */
function denton_pharmacy_sample_page_id() {
    $sample_page = get_page_by_path( 'sample-page', OBJECT, 'page' );
    return $sample_page instanceof WP_Post ? (int) $sample_page->ID : 0;
}

/**
 * Redirect the indexed default sample page to the pharmacy homepage.
 */
function denton_pharmacy_redirect_sample_page() {
    if ( is_page( 'sample-page' ) ) {
        wp_safe_redirect( home_url( '/' ), 301, 'Denton Pharmacy' );
        exit;
    }
}
add_action( 'template_redirect', 'denton_pharmacy_redirect_sample_page', 1 );

/**
 * Exclude the sample page from the WordPress core sitemap.
 */
function denton_pharmacy_exclude_sample_page_from_core_sitemap( $args, $post_type ) {
    if ( 'page' !== $post_type ) {
        return $args;
    }

    $sample_page_id = denton_pharmacy_sample_page_id();
    if ( $sample_page_id ) {
        $excluded = isset( $args['post__not_in'] ) ? (array) $args['post__not_in'] : array();
        $excluded[] = $sample_page_id;
        $args['post__not_in'] = array_values( array_unique( array_map( 'intval', $excluded ) ) );
    }

    return $args;
}
add_filter( 'wp_sitemaps_posts_query_args', 'denton_pharmacy_exclude_sample_page_from_core_sitemap', 10, 2 );

/**
 * Exclude the sample page from Yoast's sitemap.
 */
function denton_pharmacy_exclude_sample_page_from_yoast_sitemap( $excluded_ids ) {
    $sample_page_id = denton_pharmacy_sample_page_id();
    if ( $sample_page_id ) {
        $excluded_ids[] = $sample_page_id;
    }

    return array_values( array_unique( array_map( 'intval', $excluded_ids ) ) );
}
add_filter( 'wpseo_exclude_from_sitemap_by_post_ids', 'denton_pharmacy_exclude_sample_page_from_yoast_sitemap' );
