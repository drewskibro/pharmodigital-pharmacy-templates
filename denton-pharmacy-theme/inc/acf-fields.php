<?php
/**
 * ACF Field Groups Configuration
 *
 * Registers all Advanced Custom Fields field groups for the Denton Pharmacy
 * WordPress theme, including options page fields, home page fields,
 * blog post fields, and the flexible content page builder.
 *
 * Field names match EXACTLY what the template-parts expect via dp_field().
 *
 * @package DentonPharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register all ACF field groups.
 */
function dp_register_acf_field_groups() {

    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    // =========================================================================
    // A. OPTIONS PAGE FIELDS
    // =========================================================================

    // -------------------------------------------------------------------------
    // A1. Pharmacy Branding
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_branding',
        'title'    => 'Pharmacy Branding',
        'fields'   => array(
            array(
                'key'           => 'field_dp_brand_name',
                'label'         => 'Pharmacy Name',
                'name'          => 'pharmacy_name',
                'type'          => 'text',
                'default_value' => 'Denton Pharmacy',
            ),
            array(
                'key'           => 'field_dp_brand_logo',
                'label'         => 'Pharmacy Logo',
                'name'          => 'pharmacy_logo',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload your pharmacy logo. Recommended: SVG or PNG with transparent background, at least 200px wide.',
            ),
            array(
                'key'           => 'field_dp_brand_tagline',
                'label'         => 'Footer Tagline',
                'name'          => 'footer_tagline',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Your trusted local pharmacy in Denton, Manchester — providing expert healthcare, weight loss treatments, travel vaccinations, and more.',
            ),
            array(
                'key'           => 'field_dp_brand_trust_bar_item_1',
                'label'         => 'Trust Bar — Item 1',
                'name'          => 'trust_bar_item_1',
                'type'          => 'text',
                'default_value' => 'GPhC Registered',
                'instructions'  => 'First trust item shown in the navigation trust bar.',
            ),
            array(
                'key'           => 'field_dp_brand_trust_bar_item_2',
                'label'         => 'Trust Bar — Item 2',
                'name'          => 'trust_bar_item_2',
                'type'          => 'text',
                'default_value' => 'NHS Partner',
                'instructions'  => 'Second trust item shown in the navigation trust bar.',
            ),
            array(
                'key'           => 'field_dp_brand_google_rating',
                'label'         => 'Google Rating',
                'name'          => 'google_rating',
                'type'          => 'number',
                'default_value' => 4.9,
                'min'           => 0,
                'max'           => 5,
                'step'          => 0.1,
            ),
            array(
                'key'           => 'field_dp_brand_google_review_count',
                'label'         => 'Google Review Count',
                'name'          => 'google_review_count',
                'type'          => 'text',
                'default_value' => '300+',
            ),
            array(
                'key'          => 'field_dp_brand_google_review_url',
                'label'        => 'Google Review URL',
                'name'         => 'google_review_url',
                'type'         => 'url',
                'instructions' => 'Link to your Google Business reviews page.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'branding',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // A2. Contact
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_contact',
        'title'    => 'Contact Details',
        'fields'   => array(
            array(
                'key'           => 'field_dp_contact_phone',
                'label'         => 'Pharmacy Phone',
                'name'          => 'pharmacy_phone',
                'type'          => 'text',
                'default_value' => '0161 336 2548',
            ),
            array(
                'key'           => 'field_dp_contact_email',
                'label'         => 'Pharmacy Email',
                'name'          => 'pharmacy_email',
                'type'          => 'email',
                'default_value' => 'info@dentonpharmacy.co.uk',
            ),
            array(
                'key'           => 'field_dp_contact_address_line_1',
                'label'         => 'Address Line 1',
                'name'          => 'pharmacy_address_line_1',
                'type'          => 'text',
                'default_value' => '14-16 Ashton Road',
            ),
            array(
                'key'           => 'field_dp_contact_address_line_2',
                'label'         => 'Address Line 2',
                'name'          => 'pharmacy_address_line_2',
                'type'          => 'text',
                'default_value' => 'Denton, Manchester',
            ),
            array(
                'key'           => 'field_dp_contact_address_line_3',
                'label'         => 'Postcode',
                'name'          => 'pharmacy_address_line_3',
                'type'          => 'text',
                'default_value' => 'M34 3EX',
            ),
            array(
                'key'           => 'field_dp_contact_town',
                'label'         => 'Pharmacy Town (short)',
                'name'          => 'pharmacy_town',
                'type'          => 'text',
                'default_value' => 'Denton',
                'instructions'  => 'Used in trust badges and location references.',
            ),
            array(
                'key'           => 'field_dp_contact_patients_treated',
                'label'         => 'Patients Treated (stat)',
                'name'          => 'patients_treated',
                'type'          => 'text',
                'default_value' => '5,000+',
                'instructions'  => 'Displayed in trust badges across the site.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'contact-location',
                ),
            ),
        ),
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // A3. Opening Hours
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hours',
        'title'    => 'Opening Hours',
        'fields'   => array(
            array(
                'key'           => 'field_dp_hours_weekday',
                'label'         => 'Weekday Hours',
                'name'          => 'hours_weekday',
                'type'          => 'text',
                'default_value' => '9:00am – 6:00pm',
            ),
            array(
                'key'           => 'field_dp_hours_saturday',
                'label'         => 'Saturday Hours',
                'name'          => 'hours_saturday',
                'type'          => 'text',
                'default_value' => '9:00am – 1:00pm',
            ),
            array(
                'key'           => 'field_dp_hours_sunday',
                'label'         => 'Sunday Hours',
                'name'          => 'hours_sunday',
                'type'          => 'text',
                'default_value' => 'Closed',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'contact-location',
                ),
            ),
        ),
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // A4. Location
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_location',
        'title'    => 'Location',
        'fields'   => array(
            array(
                'key'           => 'field_dp_location_map_image',
                'label'         => 'Map Image',
                'name'          => 'location_map_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a static map image or screenshot of your location on Google Maps.',
            ),
            array(
                'key'           => 'field_dp_location_store_image',
                'label'         => 'Storefront Photo',
                'name'          => 'location_store_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a photo of your pharmacy storefront.',
            ),
            array(
                'key'           => 'field_dp_location_google_maps_embed',
                'label'         => 'Google Maps Embed URL',
                'name'          => 'location_google_maps_embed',
                'type'          => 'url',
                'instructions'  => 'Optional. Paste a Google Maps embed URL here. If left blank, a map will be generated automatically from your address. To get an embed URL: go to Google Maps → find your location → click Share → Embed a map → copy the src URL from the iframe code.',
            ),
            array(
                'key'           => 'field_dp_location_directions_url',
                'label'         => 'Google Maps Directions URL',
                'name'          => 'pharmacy_directions_url',
                'type'          => 'url',
                'default_value' => 'https://www.google.com/maps/dir/?api=1&destination=53.4554,-2.1128',
            ),
            array(
                'key'           => 'field_dp_location_parking',
                'label'         => 'Parking Info',
                'name'          => 'pharmacy_parking',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Free customer parking available nearby.',
            ),

            // --- Pharmacy pin icon (overrides the default Swiss cross) ---
            array(
                'key'           => 'field_dp_location_pin_icon',
                'label'         => 'Pharmacy Pin Icon',
                'name'          => 'location_pin_icon',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'library'       => 'all',
                'instructions'  => 'Optional. PNG or SVG with transparent background — renders inside the navy disc on the map. If empty, a default medical cross is used. Best: square, at least 128×128, with generous padding so it breathes inside the disc.',
            ),

            // --- Map centre coordinates (used to drop Google's default red pin) ---
            array(
                'key'           => 'field_dp_location_center_coords',
                'label'         => 'Map Centre Coordinates (lat,lng)',
                'name'          => 'location_center_coords',
                'type'          => 'text',
                'default_value' => '53.4557,-2.1120',
                'placeholder'   => '53.4557,-2.1120',
                'instructions'  => 'Latitude,longitude of the pharmacy (no spaces). Used to centre the embedded map without showing Google\'s default red pin. Get from Google Maps → right-click the pharmacy → copy coordinates.',
            ),
            array(
                'key'           => 'field_dp_location_zoom',
                'label'         => 'Map Zoom',
                'name'          => 'location_zoom',
                'type'          => 'number',
                'min'           => 10,
                'max'           => 20,
                'default_value' => 17,
                'instructions'  => '15 = neighbourhood, 17 = street, 19 = building.',
            ),

            // --- Map overlay: parking callouts (up to 2) ---
            // Dots are geo-anchored by lat,lng via Web Mercator math in JS —
            // no fiddly %-based positioning. Move the map centre or change
            // the zoom and the dots follow automatically.
            array(
                'key'          => 'field_dp_location_parking_callouts',
                'label'        => 'Parking Hotspots',
                'name'         => 'location_parking_callouts',
                'type'         => 'repeater',
                'min'          => 0,
                'max'          => 2,
                'layout'       => 'block',
                'button_label' => 'Add parking hotspot',
                'instructions' => 'Add up to 2 nearby parking hotspots. Each dot is placed on the map from real lat,lng coordinates. Click opens Google Maps directions in a new tab.',
                'sub_fields'   => array(
                    array(
                        'key'         => 'field_dp_location_callout_label',
                        'label'       => 'Label',
                        'name'        => 'label',
                        'type'        => 'text',
                        'placeholder' => 'e.g. Ashton Road Car Park',
                    ),
                    array(
                        'key'         => 'field_dp_location_callout_description',
                        'label'       => 'Short description',
                        'name'        => 'description',
                        'type'        => 'text',
                        'placeholder' => 'e.g. 2 min walk · Free after 6pm',
                    ),
                    array(
                        'key'          => 'field_dp_location_callout_coords',
                        'label'        => 'Coordinates (lat,lng)',
                        'name'         => 'coords',
                        'type'         => 'text',
                        'placeholder'  => '53.4563,-2.1142',
                        'instructions' => 'Right-click the parking on Google Maps and click the coordinates that appear — they copy to your clipboard. Paste here.',
                    ),
                    array(
                        'key'           => 'field_dp_location_callout_anchor',
                        'label'         => 'Card direction',
                        'name'          => 'anchor',
                        'type'          => 'select',
                        'choices'       => array(
                            'ne' => 'Up & right',
                            'nw' => 'Up & left',
                            'se' => 'Down & right',
                            'sw' => 'Down & left',
                        ),
                        'default_value' => 'ne',
                        'instructions'  => 'Where the floating label card sits relative to the dot.',
                    ),
                    array(
                        'key'          => 'field_dp_location_callout_url',
                        'label'        => 'Google Maps URL',
                        'name'         => 'destination_url',
                        'type'         => 'url',
                        'placeholder'  => 'https://www.google.com/maps/dir/?api=1&destination=...',
                        'instructions' => 'Clicking the hotspot opens this in a new tab. Easiest: find the parking on Google Maps → Share → Copy link. If empty, a search URL is generated from the coordinates.',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'contact-location',
                ),
            ),
        ),
        'menu_order'            => 25,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // A5. Registration & Compliance
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_compliance',
        'title'    => 'Registration & Compliance',
        'fields'   => array(
            array(
                'key'           => 'field_dp_compliance_gphc',
                'label'         => 'GPhC Pharmacy Number',
                'name'          => 'gphc_registration',
                'type'          => 'text',
                'default_value' => '1033447',
            ),
            array(
                'key'           => 'field_dp_compliance_gphc_url',
                'label'         => 'GPhC Register URL (override)',
                'name'          => 'gphc_register_url',
                'type'          => 'url',
                'instructions'  => 'Leave blank to auto-build from the pharmacy number above. Only fill in if you need to override the default.',
            ),
            array(
                'key'           => 'field_dp_compliance_company_reg',
                'label'         => 'Company Registration',
                'name'          => 'company_registration',
                'type'          => 'text',
                'default_value' => '14519140',
            ),
            array(
                'key'           => 'field_dp_compliance_established_year',
                'label'         => 'Established Year',
                'name'          => 'established_year',
                'type'          => 'text',
                'default_value' => '2009',
            ),
            array(
                'key'           => 'field_dp_compliance_superintendent',
                'label'         => 'Superintendent Pharmacist',
                'name'          => 'superintendent_pharmacist',
                'type'          => 'text',
                'default_value' => 'Ahmed Al-Liabi',
            ),
            array(
                'key'           => 'field_dp_compliance_superintendent_gphc',
                'label'         => 'Superintendent GPhC Number',
                'name'          => 'superintendent_gphc_number',
                'type'          => 'text',
                'default_value' => '2208502',
            ),
            array(
                'key'   => 'field_dp_compliance_gphc_verify_url',
                'label' => 'GPhC Verify URL',
                'name'  => 'gphc_verify_url',
                'type'  => 'url',
            ),
            array(
                'key'           => 'field_dp_compliance_reviewer_profile_url',
                'label'         => 'Reviewer Profile Page URL',
                'name'          => 'reviewer_profile_url',
                'type'          => 'url',
                'instructions'  => 'Link to the superintendent pharmacist\'s profile page (shown in the Clinically Reviewed Content block on blog posts).',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'registration-compliance',
                ),
            ),
        ),
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // A6. Social Media
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_social',
        'title'    => 'Social Media',
        'fields'   => array(
            array(
                'key'   => 'field_dp_social_facebook',
                'label' => 'Facebook URL',
                'name'  => 'social_facebook',
                'type'  => 'url',
            ),
            array(
                'key'   => 'field_dp_social_instagram',
                'label' => 'Instagram URL',
                'name'  => 'social_instagram',
                'type'  => 'url',
            ),
            array(
                'key'   => 'field_dp_social_twitter',
                'label' => 'Twitter URL',
                'name'  => 'social_twitter',
                'type'  => 'url',
            ),
            array(
                'key'   => 'field_dp_social_linkedin',
                'label' => 'LinkedIn URL',
                'name'  => 'social_linkedin',
                'type'  => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'social-media',
                ),
            ),
        ),
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // A7. Booking
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_booking',
        'title'    => 'Booking Settings',
        'fields'   => array(
            array(
                'key'           => 'field_dp_booking_page',
                'label'         => 'Booking Page',
                'name'          => 'booking_page',
                'type'          => 'post_object',
                'post_type'     => array( 'page' ),
                'return_format' => 'id',
                'allow_null'    => 1,
            ),
            array(
                'key'           => 'field_dp_booking_cta_text',
                'label'         => 'Booking CTA Text',
                'name'          => 'booking_cta_text',
                'type'          => 'text',
                'default_value' => 'Book a Consultation',
                'instructions'  => 'Default call-to-action text used on booking buttons across the site.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'contact-location',
                ),
            ),
        ),
        'menu_order'            => 50,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );
    // =========================================================================
    // A8. NAVIGATION MENU ITEMS
    // =========================================================================
    acf_add_local_field_group( array(
        'key'      => 'group_dp_nav_items',
        'title'    => 'Navigation Menu Items',
        'fields'   => array(
            // ── Home ──
            array(
                'key'           => 'field_dp_nav_home_show',
                'label'         => 'Show Home',
                'name'          => 'nav_home_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_dp_nav_home_label',
                'label'         => 'Home Label',
                'name'          => 'nav_home_label',
                'type'          => 'text',
                'default_value' => 'Home',
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_home_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            array(
                'key'          => 'field_dp_nav_home_url',
                'label'        => 'Home Page',
                'name'         => 'nav_home_url',
                'type'         => 'page_link',
                'post_type'    => array( 'page' ),
                'allow_null'   => 1,
                'instructions' => 'Leave blank to link to the site homepage.',
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_home_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            // ── Weight Loss ──
            array(
                'key'           => 'field_dp_nav_wl_show',
                'label'         => 'Show Weight Loss',
                'name'          => 'nav_weight_loss_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_dp_nav_wl_label',
                'label'         => 'Weight Loss Label',
                'name'          => 'nav_weight_loss_label',
                'type'          => 'text',
                'default_value' => 'Weight Loss',
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_wl_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            array(
                'key'        => 'field_dp_nav_wl_url',
                'label'      => 'Weight Loss Page',
                'name'       => 'nav_weight_loss_url',
                'type'       => 'page_link',
                'post_type'  => array( 'page' ),
                'allow_null' => 1,
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_wl_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            // ── Travel Health ──
            array(
                'key'           => 'field_dp_nav_th_show',
                'label'         => 'Show Travel Health',
                'name'          => 'nav_travel_health_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_dp_nav_th_label',
                'label'         => 'Travel Health Label',
                'name'          => 'nav_travel_health_label',
                'type'          => 'text',
                'default_value' => 'Travel',
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_th_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            array(
                'key'        => 'field_dp_nav_th_url',
                'label'      => 'Travel Health Page',
                'name'       => 'nav_travel_health_url',
                'type'       => 'page_link',
                'post_type'  => array( 'page' ),
                'allow_null' => 1,
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_th_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            // ── Services ──
            array(
                'key'           => 'field_dp_nav_sv_show',
                'label'         => 'Show Services',
                'name'          => 'nav_services_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_dp_nav_sv_label',
                'label'         => 'Services Label',
                'name'          => 'nav_services_label',
                'type'          => 'text',
                'default_value' => 'Services',
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_sv_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            array(
                'key'        => 'field_dp_nav_sv_url',
                'label'      => 'Services Page',
                'name'       => 'nav_services_url',
                'type'       => 'page_link',
                'post_type'  => array( 'page' ),
                'allow_null' => 1,
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_sv_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            // ── Hub ──
            array(
                'key'           => 'field_dp_nav_hh_show',
                'label'         => 'Show Hub',
                'name'          => 'nav_hub_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_dp_nav_hh_label',
                'label'         => 'Hub Label',
                'name'          => 'nav_hub_label',
                'type'          => 'text',
                'default_value' => 'Hub',
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_hh_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
            array(
                'key'        => 'field_dp_nav_hh_url',
                'label'      => 'Hub Page',
                'name'       => 'nav_hub_url',
                'type'       => 'page_link',
                'post_type'  => array( 'page' ),
                'allow_null' => 1,
                'conditional_logic' => array( array( array( 'field' => 'field_dp_nav_hh_show', 'operator' => '==', 'value' => '1' ) ) ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'navigation',
                ),
            ),
        ),
        'menu_order'            => 60,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // A9. NAVIGATION DROPDOWN SUB-LINKS
    // =========================================================================
    acf_add_local_field_group( array(
        'key'      => 'group_dp_nav_dropdowns',
        'title'    => 'Navigation Dropdown Sub-links',
        'fields'   => array(
            // ── Weight Loss Dropdown ──
            array(
                'key'          => 'field_dp_nav_dd_wl_links',
                'label'        => 'Weight Loss Dropdown Links',
                'name'         => 'nav_dd_wl_links',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Link',
                'instructions' => 'Leave empty to use the default links (GLP-1 Treatments, Personal Support, Free Consultation).',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_nav_dd_wl_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_nav_dd_wl_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_nav_dd_wl_icon',  'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'e.g. fas fa-syringe', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_nav_dd_wl_url',   'label' => 'Page', 'name' => 'url', 'type' => 'page_link', 'post_type' => array( 'page' ), 'allow_null' => 1, 'wrapper' => array( 'width' => '25' ) ),
                ),
            ),
            // ── Travel Services Dropdown ──
            array(
                'key'          => 'field_dp_nav_dd_th_services',
                'label'        => 'Travel Services Dropdown Links',
                'name'         => 'nav_dd_th_services',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Link',
                'instructions' => 'Leave empty to use the defaults (All Vaccinations, Yellow Fever Centre, Travel Advice).',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_nav_dd_th_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_nav_dd_th_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_nav_dd_th_icon',  'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'e.g. fas fa-shield-virus', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_nav_dd_th_url',   'label' => 'Page', 'name' => 'url', 'type' => 'page_link', 'post_type' => array( 'page' ), 'allow_null' => 1, 'wrapper' => array( 'width' => '25' ) ),
                ),
            ),
            // ── Travel Destinations ──
            array(
                'key'          => 'field_dp_nav_dd_th_dests',
                'label'        => 'Travel Destinations',
                'name'         => 'nav_dd_th_destinations',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 8,
                'button_label' => 'Add Destination',
                'instructions' => 'Leave empty to use defaults (Thailand, India, Vietnam, Kenya, Brazil, Cape Verde).',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_nav_dd_th_dest_name', 'label' => 'Country', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_nav_dd_th_dest_flag', 'label' => 'Flag URL', 'name' => 'flag_url', 'type' => 'url', 'instructions' => 'e.g. https://flagcdn.com/w40/th.png', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'field_dp_nav_dd_th_dest_url',  'label' => 'Page', 'name' => 'url', 'type' => 'page_link', 'post_type' => array( 'page' ), 'allow_null' => 1, 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
            // ── Services Dropdown ──
            array(
                'key'          => 'field_dp_nav_dd_sv_links',
                'label'        => 'Services Dropdown Links',
                'name'         => 'nav_dd_services_links',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Link',
                'instructions' => 'Leave empty to use defaults (NHS Prescriptions, Ear Wax Removal, Pharmacy First, Blood Testing).',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_nav_dd_sv_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_nav_dd_sv_desc',  'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_nav_dd_sv_icon',  'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'e.g. fas fa-stethoscope', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_nav_dd_sv_url',   'label' => 'Page', 'name' => 'url', 'type' => 'page_link', 'post_type' => array( 'page' ), 'allow_null' => 1, 'wrapper' => array( 'width' => '25' ) ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'navigation',
                ),
            ),
        ),
        'menu_order'            => 70,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );
    // =========================================================================
    // B. HOME PAGE FIELDS
    // =========================================================================

    // -------------------------------------------------------------------------
    // B1. Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_hero',
        'title'    => 'Home — Hero Section',
        'fields'   => array(
            array(
                'key'           => 'field_dp_hero_badge_text',
                'label'         => 'Location Badge Text',
                'name'          => 'hero_badge_text',
                'type'          => 'text',
                'default_value' => 'Serving Denton, Manchester & Beyond',
            ),
            array(
                'key'           => 'field_dp_hero_title',
                'label'         => 'Hero Title',
                'name'          => 'hero_title',
                'type'          => 'text',
                'default_value' => 'Lose Weight. <br><em class="hero-accent-text">Travel Safe.</em><br>Get NHS Care.',
                'instructions'  => 'Supports <br>, <em>, and <span> tags for styling.',
            ),
            array(
                'key'           => 'field_dp_hero_title_line_1',
                'label'         => 'Hero Title — Line 1',
                'name'          => 'hero_title_line_1',
                'type'          => 'text',
                'default_value' => 'Lose Weight.',
                'instructions'  => 'First line of the rotating hero headline.',
            ),
            array(
                'key'           => 'field_dp_hero_title_line_3',
                'label'         => 'Hero Title — Line 3',
                'name'          => 'hero_title_line_3',
                'type'          => 'text',
                'default_value' => 'Get NHS Care.',
                'instructions'  => 'Third line of the rotating hero headline.',
            ),
            array(
                'key'          => 'field_dp_hero_rotate_phrases',
                'label'        => 'Hero Rotating Phrases',
                'name'         => 'hero_rotate_phrases',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add Phrase',
                'instructions' => 'Middle rotating line of the hero headline.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_hero_rotate_phrase', 'label' => 'Phrase', 'name' => 'phrase', 'type' => 'text' ),
                ),
            ),
            array(
                'key'          => 'field_dp_hero_nhs_pills',
                'label'        => 'Hero NHS Pills',
                'name'         => 'hero_nhs_pills',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Pill',
                'instructions' => 'NHS accent strip pills shown above the hero headline.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_hero_nhs_pill_icon', 'label' => 'Icon', 'name' => 'pill_icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-heart' ),
                    array( 'key' => 'field_dp_hero_nhs_pill_link', 'label' => 'Link', 'name' => 'pill_link', 'type' => 'link', 'return_format' => 'array', 'instructions' => 'Pill label + URL + target. Leave URL blank to render as a non-clickable badge.' ),
                ),
            ),
            array(
                'key'           => 'field_dp_hero_description',
                'label'         => 'Hero Description',
                'name'          => 'hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Expert pharmacy services from your local Denton team. Clinically-led weight loss, travel vaccinations, and NHS care — with free delivery across Manchester.',
            ),
            array(
                'key'          => 'field_dp_hero_cta_primary',
                'label'        => 'Primary CTA',
                'name'         => 'hero_cta_primary',
                'type'         => 'link',
                'instructions' => 'Text, URL and target for the primary button.',
                'return_format' => 'array',
            ),
            array(
                'key'          => 'field_dp_hero_cta_secondary',
                'label'        => 'Secondary CTA',
                'name'         => 'hero_cta_secondary',
                'type'         => 'link',
                'instructions' => 'Text, URL and target for the secondary button.',
                'return_format' => 'array',
            ),
            array(
                'key'          => 'field_dp_hero_trust_indicators',
                'label'        => 'Trust Indicators',
                'name'         => 'hero_trust_indicators',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 3,
                'button_label' => 'Add Trust Indicator',
                'instructions' => 'The trust pills shown below the CTA buttons (e.g. GPhC Registered, UK Licensed, NHS & Private).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_hero_trust_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-shield-halved',
                        'instructions'  => 'Font Awesome class, e.g. fas fa-shield-halved',
                    ),
                    array(
                        'key'           => 'field_dp_hero_trust_text',
                        'label'         => 'Text',
                        'name'          => 'text',
                        'type'          => 'text',
                        'default_value' => '',
                    ),
                ),
            ),
            array(
                'key'           => 'field_dp_hero_testimonial_quote',
                'label'         => 'Testimonial Quote',
                'name'          => 'hero_testimonial_quote',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Incredible service from start to finish. Lost 6 stone with their support — couldn\'t recommend more!',
            ),
            array(
                'key'           => 'field_dp_hero_testimonial_author',
                'label'         => 'Testimonial Author',
                'name'          => 'hero_testimonial_author',
                'type'          => 'text',
                'default_value' => 'Sarah M.',
            ),
            array(
                'key'           => 'field_dp_hero_testimonial_result',
                'label'         => 'Testimonial Result Badge',
                'name'          => 'hero_testimonial_result',
                'type'          => 'text',
                'default_value' => '6 Stone Lost',
            ),
            array(
                'key'           => 'field_dp_hero_caption_title',
                'label'         => 'Image Caption Title',
                'name'          => 'hero_caption_title',
                'type'          => 'text',
                'default_value' => 'Your Health, Reimagined.',
                'instructions'  => 'Text shown on the overlay card inside the hero image.',
            ),
            // --- Google Rating Card ---
            array(
                'key'           => 'field_dp_hero_rating_label',
                'label'         => 'Rating Card Label',
                'name'          => 'hero_rating_label',
                'type'          => 'text',
                'default_value' => 'Google Rating',
            ),
            array(
                'key'           => 'field_dp_hero_rating_stars',
                'label'         => 'Rating Stars',
                'name'          => 'hero_rating_stars',
                'type'          => 'number',
                'default_value' => 5,
                'min'           => 1,
                'max'           => 5,
                'step'          => 1,
                'instructions'  => 'Number of stars to display (1–5).',
            ),
            array(
                'key'           => 'field_dp_hero_rating_count_label',
                'label'         => 'Rating Review Text',
                'name'          => 'hero_rating_count_label',
                'type'          => 'text',
                'default_value' => 'Based on 300+ reviews',
                'instructions'  => 'Full text shown below the stars, e.g. "Based on 300+ reviews".',
            ),
            array(
                'key'           => 'field_dp_hero_rating_link_text',
                'label'         => 'Rating Link Text',
                'name'          => 'hero_rating_link_text',
                'type'          => 'text',
                'default_value' => 'View Reviews',
                'instructions'  => 'Text for the review link. URL is set in Pharmacy Settings → Branding.',
            ),
            array(
                'key'           => 'field_dp_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'hero_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload the main hero image (right column). Recommended: at least 800x1000px.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 100,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
        'hide_on_screen'        => array(
            'the_content',
            'excerpt',
            'discussion',
            'comments',
            'featured_image',
        ),
    ) );

    // -------------------------------------------------------------------------
    // B2. Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_stats',
        'title'    => 'Home — Stats Bar',
        'fields'   => array(
            // Stat 1
            array(
                'key'           => 'field_dp_stats_1_icon',
                'label'         => 'Stat 1 Icon',
                'name'          => 'stats_1_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-users',
                'instructions'  => 'Font Awesome class, e.g. fas fa-users',
            ),
            array(
                'key'           => 'field_dp_stats_1_number',
                'label'         => 'Stat 1 Number',
                'name'          => 'stats_1_number',
                'type'          => 'text',
                'default_value' => '5,000+',
            ),
            array(
                'key'           => 'field_dp_stats_1_label',
                'label'         => 'Stat 1 Label',
                'name'          => 'stats_1_label',
                'type'          => 'text',
                'default_value' => 'Patients Treated',
            ),
            // Stat 2
            array(
                'key'           => 'field_dp_stats_2_icon',
                'label'         => 'Stat 2 Icon',
                'name'          => 'stats_2_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-star',
                'instructions'  => 'Font Awesome class, e.g. fas fa-users',
            ),
            array(
                'key'           => 'field_dp_stats_2_number',
                'label'         => 'Stat 2 Number',
                'name'          => 'stats_2_number',
                'type'          => 'text',
                'default_value' => '4.7',
            ),
            array(
                'key'           => 'field_dp_stats_2_label',
                'label'         => 'Stat 2 Label',
                'name'          => 'stats_2_label',
                'type'          => 'text',
                'default_value' => 'Google Rating',
            ),
            // Stat 3
            array(
                'key'           => 'field_dp_stats_3_icon',
                'label'         => 'Stat 3 Icon',
                'name'          => 'stats_3_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-award',
                'instructions'  => 'Font Awesome class, e.g. fas fa-users',
            ),
            array(
                'key'           => 'field_dp_stats_3_number',
                'label'         => 'Stat 3 Number',
                'name'          => 'stats_3_number',
                'type'          => 'text',
                'default_value' => '15+',
            ),
            array(
                'key'           => 'field_dp_stats_3_label',
                'label'         => 'Stat 3 Label',
                'name'          => 'stats_3_label',
                'type'          => 'text',
                'default_value' => 'Years Experience',
            ),
            // Stat 4
            array(
                'key'           => 'field_dp_stats_4_icon',
                'label'         => 'Stat 4 Icon',
                'name'          => 'stats_4_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-shield-halved',
                'instructions'  => 'Font Awesome class, e.g. fas fa-users',
            ),
            array(
                'key'           => 'field_dp_stats_4_number',
                'label'         => 'Stat 4 Number',
                'name'          => 'stats_4_number',
                'type'          => 'text',
                'default_value' => 'GPhC',
            ),
            array(
                'key'           => 'field_dp_stats_4_label',
                'label'         => 'Stat 4 Label',
                'name'          => 'stats_4_label',
                'type'          => 'text',
                'default_value' => 'Fully Registered',
            ),
            // Stat 5
            array(
                'key'           => 'field_dp_stats_5_icon',
                'label'         => 'Stat 5 Icon',
                'name'          => 'stats_5_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-truck-fast',
                'instructions'  => 'Font Awesome class, e.g. fas fa-users',
            ),
            array(
                'key'           => 'field_dp_stats_5_number',
                'label'         => 'Stat 5 Number',
                'name'          => 'stats_5_number',
                'type'          => 'text',
                'default_value' => 'Free',
            ),
            array(
                'key'           => 'field_dp_stats_5_label',
                'label'         => 'Stat 5 Label',
                'name'          => 'stats_5_label',
                'type'          => 'text',
                'default_value' => 'Discreet Delivery',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 110,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B3. NHS Services
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_nhs',
        'title'    => 'Home — NHS Services',
        'fields'   => array(
            array(
                'key'           => 'field_dp_nhs_show_badge',
                'label'         => 'Show Section Badge',
                'name'          => 'nhs_show_badge',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
                'ui_on_text'    => 'Show',
                'ui_off_text'   => 'Hide',
            ),
            array(
                'key'           => 'field_dp_nhs_badge_text',
                'label'         => 'Section Badge',
                'name'          => 'nhs_badge_text',
                'type'          => 'text',
                'default_value' => 'NHS Services',
            ),
            array(
                'key'           => 'field_dp_nhs_title',
                'label'         => 'Section Title',
                'name'          => 'nhs_title',
                'type'          => 'text',
                'default_value' => 'Free NHS Healthcare Services',
            ),
            array(
                'key'           => 'field_dp_nhs_description',
                'label'         => 'Section Description',
                'name'          => 'nhs_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Free NHS services for eligible patients. From prescriptions to health checks, we are here to support your wellbeing.',
            ),
            array(
                'key'          => 'field_dp_nhs_cards',
                'label'        => 'NHS Service Cards',
                'name'         => 'nhs_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_nhs_card_colour',
                        'label'         => 'Colour',
                        'name'          => 'card_colour',
                        'type'          => 'select',
                        'choices'       => array(
                            'blue'   => 'Blue',
                            'green'  => 'Green',
                            'purple' => 'Purple',
                            'orange' => 'Orange',
                            'pink'   => 'Pink',
                            'cyan'   => 'Cyan',
                        ),
                        'default_value' => 'blue',
                        'wrapper'       => array( 'width' => '50' ),
                    ),
                    array(
                        'key'           => 'field_dp_nhs_card_icon',
                        'label'         => 'Icon',
                        'name'          => 'card_icon',
                        'type'          => 'select',
                        'choices'       => array(
                            'prescription'  => 'Prescription',
                            'delivery'      => 'Delivery',
                            'repeat'        => 'Repeat',
                            'pharmacyfirst' => 'Pharmacy First',
                            'newmedicine'   => 'New Medicine',
                            'flu'           => 'Flu',
                            'blister'       => 'Blister Pack',
                        ),
                        'default_value' => 'prescription',
                        'wrapper'       => array( 'width' => '50' ),
                    ),
                    array(
                        'key'     => 'field_dp_nhs_card_badge',
                        'label'   => 'Badge',
                        'name'    => 'card_badge',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '50' ),
                    ),
                    array(
                        'key'     => 'field_dp_nhs_card_title',
                        'label'   => 'Title',
                        'name'    => 'card_title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '50' ),
                    ),
                    array(
                        'key'  => 'field_dp_nhs_card_desc',
                        'label' => 'Description',
                        'name' => 'card_desc',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                    array(
                        'key'     => 'field_dp_nhs_card_item_1',
                        'label'   => 'Bullet 1',
                        'name'    => 'card_item_1',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '33' ),
                    ),
                    array(
                        'key'     => 'field_dp_nhs_card_item_2',
                        'label'   => 'Bullet 2',
                        'name'    => 'card_item_2',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '33' ),
                    ),
                    array(
                        'key'     => 'field_dp_nhs_card_item_3',
                        'label'   => 'Bullet 3',
                        'name'    => 'card_item_3',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '34' ),
                    ),
                    array(
                        'key'           => 'field_dp_nhs_card_link',
                        'label'         => 'Card Button',
                        'name'          => 'card_link',
                        'type'          => 'link',
                        'instructions'  => 'Text, URL and target for the card button.',
                        'return_format' => 'array',
                    ),
                ),
            ),
            array(
                'key'           => 'field_dp_nhs_bottom_title',
                'label'         => 'Bottom CTA — Title',
                'name'          => 'nhs_bottom_title',
                'type'          => 'text',
                'default_value' => 'Your NHS services, under one roof',
            ),
            array(
                'key'           => 'field_dp_nhs_bottom_description',
                'label'         => 'Bottom CTA — Description',
                'name'          => 'nhs_bottom_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'No appointment needed for most services. Walk in or call us.',
            ),
            array(
                'key'           => 'field_dp_nhs_bottom_cta_text',
                'label'         => 'Bottom CTA — Visit Button Text',
                'name'          => 'nhs_bottom_cta_text',
                'type'          => 'text',
                'default_value' => 'Visit Us in Denton',
            ),
            array(
                'key'          => 'field_dp_nhs_cta_chips',
                'label'        => 'Bottom CTA — Trust Chips',
                'name'         => 'nhs_cta_chips',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Chip',
                'instructions' => 'Leave empty to use defaults (GPhC Registered, Walk-Ins Welcome, Free NHS Services).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_nhs_chip_icon',
                        'label'         => 'Icon',
                        'name'          => 'chip_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-shield-halved',
                        'instructions'  => 'Font Awesome icon class',
                    ),
                    array(
                        'key'   => 'field_dp_nhs_chip_text',
                        'label' => 'Text',
                        'name'  => 'chip_text',
                        'type'  => 'text',
                    ),
                ),
            ),
            array(
                'key'          => 'field_dp_nhs_bottom_checks',
                'label'        => 'Bottom CTA — Trust Checks',
                'name'         => 'nhs_bottom_checks',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Check',
                'instructions' => 'Leave empty to use defaults (No referral needed, Same-day service, Open 6 days a week).',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_dp_nhs_check_text',
                        'label' => 'Text',
                        'name'  => 'check_text',
                        'type'  => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-nhs-services.php',
                ),
            ),
        ),
        'menu_order'            => 120,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B4. Treatments
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_treatments',
        'title'    => 'Home — Treatments',
        'fields'   => array(
            array(
                'key'           => 'field_dp_treatments_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'treatments_badge_text',
                'type'          => 'text',
                'default_value' => 'Trusted by thousands in Denton & Manchester',
            ),
            array(
                'key'           => 'field_dp_treatments_title',
                'label'         => 'Title',
                'name'          => 'treatments_title',
                'type'          => 'text',
                'default_value' => 'Our Most Popular Treatments',
            ),
            array(
                'key'           => 'field_dp_treatments_description',
                'label'         => 'Description',
                'name'          => 'treatments_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Expert-led treatments and NHS services at your local pharmacy.',
            ),
            array(
                'key'          => 'field_dp_treatments_cards',
                'label'        => 'Treatment Cards',
                'name'         => 'treatments_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Treatment',
                'instructions' => 'Add your treatment cards with images. Leave empty to use defaults.',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_dp_treatment_title',
                        'label' => 'Treatment Title',
                        'name'  => 'treatment_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'          => 'field_dp_treatment_subtitle',
                        'label'        => 'Short Subtitle',
                        'name'         => 'treatment_subtitle',
                        'type'         => 'text',
                        'instructions' => '2-3 words shown below the title (e.g. "GLP-1 treatments").',
                    ),
                    array(
                        'key'           => 'field_dp_treatment_image',
                        'label'         => 'Treatment Image',
                        'name'          => 'treatment_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                        'instructions'  => 'Recommended: 600x400px.',
                    ),
                    array(
                        'key'   => 'field_dp_treatment_url',
                        'label' => 'Treatment URL',
                        'name'  => 'treatment_url',
                        'type'  => 'url',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 130,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B5. Pharmacist
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_pharmacist',
        'title'    => 'Home — Pharmacist',
        'fields'   => array(
            array(
                'key'           => 'field_dp_pharmacist_section_title',
                'label'         => 'Section Title',
                'name'          => 'pharmacist_section_title',
                'type'          => 'text',
                'default_value' => 'Meet Your Clinical Team',
                'instructions'  => 'Main heading above the pharmacist card.',
            ),
            array(
                'key'           => 'field_dp_pharmacist_section_subtitle',
                'label'         => 'Section Subtitle',
                'name'          => 'pharmacist_section_subtitle',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Every consultation is led by a qualified, GPhC-registered prescriber from our clinical team.',
                'instructions'  => 'Short description below the section title.',
            ),
            array(
                'key'           => 'field_dp_pharmacist_eyebrow_text',
                'label'         => 'Eyebrow Text',
                'name'          => 'pharmacist_eyebrow_text',
                'type'          => 'text',
                'default_value' => 'Led by',
                'instructions'  => 'Small text above the pharmacist name (e.g. "Led by", "Your consultation with").',
            ),
            array(
                'key'           => 'field_dp_pharmacist_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'pharmacist_badge_text',
                'type'          => 'text',
                'default_value' => 'Your Local Experts',
            ),
            array(
                'key'           => 'field_dp_pharmacist_name',
                'label'         => 'Pharmacist Name',
                'name'          => 'pharmacist_name',
                'type'          => 'text',
                'default_value' => 'Ahmed Al-Liabi',
            ),
            array(
                'key'           => 'field_dp_pharmacist_role',
                'label'         => 'Pharmacist Role',
                'name'          => 'pharmacist_role',
                'type'          => 'text',
                'default_value' => 'Lead Pharmacist · Independent Prescriber',
            ),
            array(
                'key'           => 'field_dp_pharmacist_bio',
                'label'         => 'Pharmacist Bio',
                'name'          => 'pharmacist_bio',
                'type'          => 'textarea',
                'rows'          => 4,
                'default_value' => 'With over 15 years of experience, Ahmed leads our clinical team providing personalised, accessible healthcare in Denton. As an Independent Prescriber, he ensures you receive safe, effective treatments without the wait.',
            ),
            array(
                'key'           => 'field_dp_pharmacist_quote',
                'label'         => 'Pharmacist Quote',
                'name'          => 'pharmacist_quote',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => '"My goal is to make expert healthcare accessible to everyone in Denton — honest, professional care delivered to your door."',
            ),
            array(
                'key'           => 'field_dp_pharmacist_experience_years',
                'label'         => 'Experience (Number)',
                'name'          => 'pharmacist_experience_years',
                'type'          => 'text',
                'default_value' => '15+',
            ),
            array(
                'key'           => 'field_dp_pharmacist_experience_label',
                'label'         => 'Experience Label',
                'name'          => 'pharmacist_experience_label',
                'type'          => 'text',
                'default_value' => 'Years Experience',
            ),
            array(
                'key'           => 'field_dp_pharmacist_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'pharmacist_cta_text',
                'type'          => 'text',
                'default_value' => 'Start Your Online Consultation',
            ),
            array(
                'key'          => 'field_dp_pharmacist_cta_url',
                'label'        => 'CTA Button URL',
                'name'         => 'pharmacist_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to default to the booking page.',
            ),
            array(
                'key'          => 'field_dp_pharmacist_video_url',
                'label'        => 'Video URL',
                'name'         => 'pharmacist_video_url',
                'type'         => 'url',
                'instructions' => 'Vimeo URL. Leave blank to hide the play button overlay.',
            ),
            array(
                'key'           => 'field_dp_pharmacist_video_label',
                'label'         => 'Video Button Label',
                'name'          => 'pharmacist_video_label',
                'type'          => 'text',
                'default_value' => 'Watch Welcome Message',
            ),
            array(
                'key'           => 'field_dp_pharmacist_photo',
                'label'         => 'Pharmacist Photo',
                'name'          => 'pharmacist_photo',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a professional photo. Recommended: 600x750px portrait.',
            ),
            array(
                'key'          => 'field_dp_pharmacist_trust_checks',
                'label'        => 'Trust Checks',
                'name'         => 'pharmacist_trust_checks',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Check',
                'instructions' => 'Leave empty to use defaults (Same-Day Appointments, No GP Referral Needed, Face-to-Face Consultations).',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_dp_pharmacist_trust_check_text',
                        'label' => 'Text',
                        'name'  => 'check_text',
                        'type'  => 'text',
                    ),
                ),
            ),
            array(
                'key'          => 'field_dp_pharmacist_credentials',
                'label'        => 'Credentials',
                'name'         => 'pharmacist_credentials',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Credential',
                'instructions' => 'Leave empty to use defaults (GPhC Registered, Independent Prescriber, Weight Loss Specialist).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_credential_icon',
                        'label'         => 'Icon',
                        'name'          => 'credential_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-certificate',
                        'instructions'  => 'Font Awesome icon class',
                    ),
                    array(
                        'key'   => 'field_dp_credential_text',
                        'label' => 'Text',
                        'name'  => 'credential_text',
                        'type'  => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-weight-loss.php',
                ),
            ),
        ),
        'menu_order'            => 140,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B6. How It Works
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_hiw',
        'title'    => 'Home — How It Works',
        'fields'   => array(
            array(
                'key'           => 'field_dp_hiw_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'hiw_badge_text',
                'type'          => 'text',
                'default_value' => 'Simple & Fast',
            ),
            array(
                'key'           => 'field_dp_hiw_title',
                'label'         => 'Title',
                'name'          => 'hiw_title',
                'type'          => 'text',
                'default_value' => 'How It Works',
            ),
            array(
                'key'           => 'field_dp_hiw_description',
                'label'         => 'Description',
                'name'          => 'hiw_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Getting started with Denton Pharmacy is simple. From consultation to delivery, we\'ve made healthcare accessible.',
            ),
            array(
                'key'           => 'field_dp_hiw_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'hiw_cta_text',
                'type'          => 'text',
                'default_value' => 'Start Your Journey Now',
            ),
            array(
                'key'          => 'field_dp_hiw_cta_url',
                'label'        => 'CTA Button URL',
                'name'         => 'hiw_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to default to the booking page.',
            ),
            array(
                'key'          => 'field_dp_hiw_steps',
                'label'        => 'Steps',
                'name'         => 'hiw_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',
                'instructions' => 'Leave empty to use defaults (Book Online, Speak to Ahmed, Receive Treatment).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_hiw_step_icon',
                        'label'         => 'Step Icon',
                        'name'          => 'step_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-circle',
                        'instructions'  => 'Font Awesome icon, e.g. fa-laptop-medical',
                    ),
                    array(
                        'key'   => 'field_dp_hiw_step_title',
                        'label' => 'Step Title',
                        'name'  => 'step_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_dp_hiw_step_description',
                        'label' => 'Step Description',
                        'name'  => 'step_description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'           => 'field_dp_hiw_step_time_icon',
                        'label'         => 'Time Icon',
                        'name'          => 'step_time_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-clock',
                    ),
                    array(
                        'key'          => 'field_dp_hiw_step_time',
                        'label'        => 'Time Label',
                        'name'         => 'step_time',
                        'type'         => 'text',
                        'instructions' => 'e.g. "2 minutes", "Same day", "24h delivery"',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-nhs-services.php',
                ),
            ),
        ),
        'menu_order'            => 150,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B7. Switching Provider
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_switching',
        'title'    => 'Home — Switching Provider',
        'fields'   => array(
            array(
                'key'           => 'field_dp_switching_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'switching_badge_text',
                'type'          => 'text',
                'default_value' => '50+ Patients Switched This Month',
            ),
            array(
                'key'           => 'field_dp_switching_title',
                'label'         => 'Title',
                'name'          => 'switching_title',
                'type'          => 'text',
                'default_value' => 'Frustrated with Your Current <span class="gradient-text">Weight Loss Provider?</span>',
                'instructions'  => 'Supports <span> and <br> for styling.',
            ),
            array(
                'key'           => 'field_dp_switching_description',
                'label'         => 'Description',
                'name'          => 'switching_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Tired of waiting weeks for prescriptions? Fed up with impersonal online-only services? At Denton Pharmacy, you get real pharmacist support, same-day prescriptions, and premium discreet delivery — all from a trusted local pharmacy.',
            ),
            array(
                'key'           => 'field_dp_switching_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'switching_cta_text',
                'type'          => 'text',
                'default_value' => 'Switch to Denton Pharmacy',
            ),
            // Feature 1
            array(
                'key'           => 'field_dp_switching_f1_icon',
                'label'         => 'Feature 1 — Icon',
                'name'          => 'switching_feature_1_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-file-signature',
            ),
            array(
                'key'           => 'field_dp_switching_f1_title',
                'label'         => 'Feature 1 — Title',
                'name'          => 'switching_feature_1_title',
                'type'          => 'text',
                'default_value' => 'Same-Day Prescriptions',
            ),
            array(
                'key'           => 'field_dp_switching_f1_desc',
                'label'         => 'Feature 1 — Description',
                'name'          => 'switching_feature_1_desc',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'No more waiting weeks for approval. Our pharmacist reviews and approves your prescription the same day you consult with us.',
            ),
            // Feature 2
            array(
                'key'           => 'field_dp_switching_f2_icon',
                'label'         => 'Feature 2 — Icon',
                'name'          => 'switching_feature_2_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-user-doctor',
            ),
            array(
                'key'           => 'field_dp_switching_f2_title',
                'label'         => 'Feature 2 — Title',
                'name'          => 'switching_feature_2_title',
                'type'          => 'text',
                'default_value' => 'Real Pharmacist Support',
            ),
            array(
                'key'           => 'field_dp_switching_f2_desc',
                'label'         => 'Feature 2 — Description',
                'name'          => 'switching_feature_2_desc',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Speak with Ahmed and our Denton team directly. No chatbots, no call centres — just real, qualified healthcare professionals.',
            ),
            // Feature 3
            array(
                'key'           => 'field_dp_switching_f3_icon',
                'label'         => 'Feature 3 — Icon',
                'name'          => 'switching_feature_3_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-box-open',
            ),
            array(
                'key'           => 'field_dp_switching_f3_title',
                'label'         => 'Feature 3 — Title',
                'name'          => 'switching_feature_3_title',
                'type'          => 'text',
                'default_value' => 'Premium Discreet Packaging',
            ),
            array(
                'key'           => 'field_dp_switching_f3_desc',
                'label'         => 'Feature 3 — Description',
                'name'          => 'switching_feature_3_desc',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Your medication arrives in our signature packaging — discreet, secure, and delivered free within 24 hours.',
            ),
            // Trust Stat 1
            array(
                'key'           => 'field_dp_switching_t1_icon',
                'label'         => 'Trust Stat 1 — Icon',
                'name'          => 'switching_trust_1_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-user-group',
            ),
            array(
                'key'           => 'field_dp_switching_t1_value',
                'label'         => 'Trust Stat 1 — Value',
                'name'          => 'switching_trust_1_value',
                'type'          => 'text',
                'default_value' => '50+',
            ),
            array(
                'key'           => 'field_dp_switching_t1_label',
                'label'         => 'Trust Stat 1 — Label',
                'name'          => 'switching_trust_1_label',
                'type'          => 'text',
                'default_value' => 'Switched Monthly',
            ),
            // Trust Stat 2
            array(
                'key'           => 'field_dp_switching_t2_icon',
                'label'         => 'Trust Stat 2 — Icon',
                'name'          => 'switching_trust_2_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-star',
            ),
            array(
                'key'           => 'field_dp_switching_t2_value',
                'label'         => 'Trust Stat 2 — Value',
                'name'          => 'switching_trust_2_value',
                'type'          => 'text',
                'default_value' => '4.7/5',
            ),
            array(
                'key'           => 'field_dp_switching_t2_label',
                'label'         => 'Trust Stat 2 — Label',
                'name'          => 'switching_trust_2_label',
                'type'          => 'text',
                'default_value' => 'Google Rating',
            ),
            // Trust Stat 3
            array(
                'key'           => 'field_dp_switching_t3_icon',
                'label'         => 'Trust Stat 3 — Icon',
                'name'          => 'switching_trust_3_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-truck-fast',
            ),
            array(
                'key'           => 'field_dp_switching_t3_value',
                'label'         => 'Trust Stat 3 — Value',
                'name'          => 'switching_trust_3_value',
                'type'          => 'text',
                'default_value' => '24h',
            ),
            array(
                'key'           => 'field_dp_switching_t3_label',
                'label'         => 'Trust Stat 3 — Label',
                'name'          => 'switching_trust_3_label',
                'type'          => 'text',
                'default_value' => 'Delivery Time',
            ),
            // Section Image
            array(
                'key'           => 'field_dp_switching_image',
                'label'         => 'Section Image',
                'name'          => 'switching_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Image for the right column. Recommended: 800x600px.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 160,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B8. Travel Banner / RevSlider
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_revslider',
        'title'    => 'Home — Travel Banner',
        'fields'   => array(
            array(
                'key'           => 'field_dp_revslider_alias',
                'label'         => 'Revolution Slider Alias',
                'name'          => 'revslider_alias',
                'type'          => 'text',
                'default_value' => 'home-hero',
                'instructions'  => 'If Revolution Slider plugin is active, enter the slider alias. Otherwise the placeholder below is shown.',
            ),
            array(
                'key'           => 'field_dp_revslider_placeholder_image',
                'label'         => 'Banner Backdrop Image',
                'name'          => 'revslider_placeholder_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a full-width backdrop image. Recommended: 1920x800px.',
            ),
            array(
                'key'           => 'field_dp_revslider_placeholder_badge',
                'label'         => 'Badge Text',
                'name'          => 'revslider_placeholder_badge',
                'type'          => 'text',
                'default_value' => 'Yellow Fever Approved',
            ),
            array(
                'key'           => 'field_dp_revslider_placeholder_title',
                'label'         => 'Title',
                'name'          => 'revslider_placeholder_title',
                'type'          => 'text',
                'default_value' => 'Protect Your Adventures Across the Globe',
            ),
            array(
                'key'           => 'field_dp_revslider_placeholder_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'revslider_placeholder_subtitle',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'From yellow fever to malaria prevention, get expert travel vaccinations at Denton Pharmacy',
            ),
            array(
                'key'           => 'field_dp_revslider_placeholder_cta_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'revslider_placeholder_cta_text',
                'type'          => 'text',
                'default_value' => 'Book Travel Clinic',
            ),
            array(
                'key'           => 'field_dp_revslider_placeholder_cta_url',
                'label'         => 'Primary CTA URL',
                'name'          => 'revslider_placeholder_cta_url',
                'type'          => 'url',
                'instructions'  => 'Leave blank to use the global booking URL, or enter a custom URL.',
                'default_value' => '',
            ),
            array(
                'key'           => 'field_dp_revslider_placeholder_secondary_text',
                'label'         => 'Secondary Link Text',
                'name'          => 'revslider_placeholder_secondary_text',
                'type'          => 'text',
                'default_value' => 'Serving Denton, Manchester and beyond',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 170,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B9. Safe & Secure
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_home_safe',
        'title'    => 'Home — Safe & Secure',
        'fields'   => array(
            array(
                'key'           => 'field_dp_safe_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'safe_badge_text',
                'type'          => 'text',
                'default_value' => 'GPhC Registered Pharmacy',
            ),
            array(
                'key'           => 'field_dp_safe_title_start',
                'label'         => 'Title (first part)',
                'name'          => 'safe_title_start',
                'type'          => 'text',
                'default_value' => 'Safe and',
            ),
            array(
                'key'           => 'field_dp_safe_title_highlight',
                'label'         => 'Title (highlighted text)',
                'name'          => 'safe_title_highlight',
                'type'          => 'text',
                'default_value' => 'Secure',
            ),
            array(
                'key'           => 'field_dp_safe_description',
                'label'         => 'Description',
                'name'          => 'safe_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Your safety is our top priority. We are a fully registered and inspected pharmacy, dispensing only genuine, UK-licensed medications from trusted pharmaceutical suppliers.',
            ),
            array(
                'key'           => 'field_dp_safe_verify_link_text',
                'label'         => 'Verify Link Text',
                'name'          => 'safe_verify_link_text',
                'type'          => 'text',
                'default_value' => 'Verify Our Registration',
            ),
            array(
                'key'           => 'field_dp_safe_verify_note',
                'label'         => 'Verify Note',
                'name'          => 'safe_verify_note',
                'type'          => 'text',
                'default_value' => 'The GPhC is the official body that regulates and inspects all pharmacies in the UK',
            ),
            array(
                'key'          => 'field_dp_safe_features',
                'label'        => 'Trust Features',
                'name'         => 'safe_features',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Feature',
                'instructions' => 'Leave empty to use defaults (Registered UK Pharmacy, Fully Inspected, Approved Treatments).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_safe_feature_icon',
                        'label'         => 'Icon',
                        'name'          => 'feature_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-shield-halved',
                        'instructions'  => 'Font Awesome icon class',
                    ),
                    array(
                        'key'   => 'field_dp_safe_feature_title',
                        'label' => 'Title',
                        'name'  => 'feature_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_dp_safe_feature_desc',
                        'label' => 'Description',
                        'name'  => 'feature_desc',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 180,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    /*  ───────────────────────────────────────────────
     *  B10 — Home: Health Hub
     *  ─────────────────────────────────────────────── */
    acf_add_local_field_group( array(
        'key'    => 'group_dp_home_healthhub',
        'title'  => 'Home — Health Hub Section',
        'fields' => array(
            // Badge text
            array(
                'key'           => 'field_dp_home_healthhub_badge',
                'label'         => 'Badge Text',
                'name'          => 'healthhub_badge_text',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
            ),
            // Title start
            array(
                'key'           => 'field_dp_home_healthhub_title_start',
                'label'         => 'Title Start',
                'name'          => 'healthhub_title_start',
                'type'          => 'text',
                'default_value' => 'Latest from the',
            ),
            // Title highlight
            array(
                'key'           => 'field_dp_home_healthhub_title_highlight',
                'label'         => 'Title Highlight',
                'name'          => 'healthhub_title_highlight',
                'type'          => 'text',
                'default_value' => 'Health Hub',
            ),
            // View all URL
            array(
                'key'           => 'field_dp_home_healthhub_view_all_url',
                'label'         => 'View All URL',
                'name'          => 'healthhub_view_all_url',
                'type'          => 'url',
                'default_value' => '',
                'instructions'  => 'URL for the "View all articles" link. Defaults to /health-hub/.',
            ),
            // View all link text
            array(
                'key'           => 'field_dp_home_healthhub_view_all_text',
                'label'         => 'View All Link Text',
                'name'          => 'healthhub_view_all_text',
                'type'          => 'text',
                'default_value' => 'View all articles',
            ),
            // Read article link text
            array(
                'key'           => 'field_dp_home_healthhub_read_article_text',
                'label'         => 'Read Article Link Text',
                'name'          => 'healthhub_read_article_text',
                'type'          => 'text',
                'default_value' => 'Read Article',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 190,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    /*  ───────────────────────────────────────────────
     *  B11 — Home: Location
     *  ─────────────────────────────────────────────── */
    acf_add_local_field_group( array(
        'key'    => 'group_dp_home_location',
        'title'  => 'Home — Location Section',
        'fields' => array(
            // Badge text
            array(
                'key'           => 'field_dp_home_location_badge',
                'label'         => 'Badge Text',
                'name'          => 'location_badge_text',
                'type'          => 'text',
                'default_value' => 'Visit Us',
            ),
            // Title start
            array(
                'key'           => 'field_dp_home_location_title_start',
                'label'         => 'Title Start',
                'name'          => 'location_title_start',
                'type'          => 'text',
                'default_value' => 'Find',
            ),
            // Title highlight
            array(
                'key'           => 'field_dp_home_location_title_highlight',
                'label'         => 'Title Highlight',
                'name'          => 'location_title_highlight',
                'type'          => 'text',
                'default_value' => '',
                'instructions'  => 'Defaults to the pharmacy name if left blank.',
            ),
            // Map image (page-level override)
            array(
                'key'           => 'field_dp_home_location_map_image',
                'label'         => 'Map Image',
                'name'          => 'location_map_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Optional static map image. Overrides the Google Maps embed.',
            ),
            // Pharmacy storefront image (page-level override)
            array(
                'key'           => 'field_dp_home_location_pharmacy_image',
                'label'         => 'Pharmacy Image',
                'name'          => 'location_pharmacy_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Optional storefront photo for the info card.',
            ),
            // CTA primary button text
            array(
                'key'           => 'field_dp_home_location_cta_primary_text',
                'label'         => 'CTA Primary Button Text',
                'name'          => 'location_cta_primary_text',
                'type'          => 'text',
                'default_value' => 'Book an Appointment',
            ),
            // CTA secondary button text
            array(
                'key'           => 'field_dp_home_location_cta_secondary_text',
                'label'         => 'CTA Secondary Button Text',
                'name'          => 'location_cta_secondary_text',
                'type'          => 'text',
                'default_value' => 'Call Us',
            ),
            // Get Directions link text
            array(
                'key'           => 'field_dp_home_location_directions_text',
                'label'         => 'Get Directions Link Text',
                'name'          => 'location_directions_text',
                'type'          => 'text',
                'default_value' => 'Get Directions',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-nhs-services.php',
                ),
            ),
        ),
        'menu_order'            => 200,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    /*  ───────────────────────────────────────────────
     *  B12 — Home: Testimonials
     *  ─────────────────────────────────────────────── */
    acf_add_local_field_group( array(
        'key'    => 'group_dp_home_testimonials',
        'title'  => 'Home — Testimonials Section',
        'fields' => array(
            // Badge text
            array(
                'key'           => 'field_dp_home_testimonials_badge',
                'label'         => 'Badge Text',
                'name'          => 'testimonials_badge_text',
                'type'          => 'text',
                'default_value' => 'Real Transformations',
            ),
            // Title start
            array(
                'key'           => 'field_dp_home_testimonials_title_start',
                'label'         => 'Title Start',
                'name'          => 'testimonials_title_start',
                'type'          => 'text',
                'default_value' => 'Real Results.',
            ),
            // Title highlight
            array(
                'key'           => 'field_dp_home_testimonials_title_highlight',
                'label'         => 'Title Highlight',
                'name'          => 'testimonials_title_highlight',
                'type'          => 'text',
                'default_value' => 'Lasting Health.',
            ),
            // Description
            array(
                'key'           => 'field_dp_home_testimonials_description',
                'label'         => 'Description',
                'name'          => 'testimonials_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'See how our patients across Denton have transformed their health with our personalised care.',
            ),
            // Disclaimer
            array(
                'key'           => 'field_dp_home_testimonials_disclaimer',
                'label'         => 'Disclaimer',
                'name'          => 'testimonials_disclaimer',
                'type'          => 'text',
                'default_value' => 'The results below are from real Denton Pharmacy patients. Individual results may vary.',
            ),
            // Verified label (large card)
            array(
                'key'           => 'field_dp_home_testimonials_verified_label',
                'label'         => 'Verified Label (Large Card)',
                'name'          => 'testimonials_verified_label',
                'type'          => 'text',
                'default_value' => 'Verified Patient',
            ),
            // Verified label (small cards)
            array(
                'key'           => 'field_dp_home_testimonials_verified_label_short',
                'label'         => 'Verified Label (Small Cards)',
                'name'          => 'testimonials_verified_label_short',
                'type'          => 'text',
                'default_value' => 'Verified',
            ),
            // Transparency label
            array(
                'key'           => 'field_dp_home_testimonials_transparency_label',
                'label'         => 'Transparency Label',
                'name'          => 'testimonials_transparency_label',
                'type'          => 'text',
                'default_value' => 'Transparency Note:',
            ),
            // CTA title
            array(
                'key'           => 'field_dp_home_testimonials_cta_title',
                'label'         => 'CTA Card Title',
                'name'          => 'testimonials_cta_title',
                'type'          => 'text',
                'default_value' => 'Trusted by 10,000+ Denton Customers',
            ),
            // CTA text
            array(
                'key'           => 'field_dp_home_testimonials_cta_text',
                'label'         => 'CTA Card Text',
                'name'          => 'testimonials_cta_text',
                'type'          => 'text',
                'default_value' => 'No waiting lists. No hidden fees. Just expert, local healthcare you can rely on.',
            ),
            // Testimonials repeater
            array(
                'key'        => 'field_dp_home_testimonials_repeater',
                'label'      => 'Testimonials',
                'name'       => 'testimonials',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'button_label' => 'Add Testimonial',
                'sub_fields' => array(
                    // Name
                    array(
                        'key'   => 'field_dp_home_testimonials_name',
                        'label' => 'Patient Name',
                        'name'  => 'testimonial_name',
                        'type'  => 'text',
                    ),
                    // Service
                    array(
                        'key'   => 'field_dp_home_testimonials_service',
                        'label' => 'Service',
                        'name'  => 'testimonial_service',
                        'type'  => 'text',
                    ),
                    // Quote
                    array(
                        'key'   => 'field_dp_home_testimonials_quote',
                        'label' => 'Quote',
                        'name'  => 'testimonial_quote',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),
                    // Highlights (nested repeater)
                    array(
                        'key'          => 'field_dp_home_testimonials_highlights',
                        'label'        => 'Highlights',
                        'name'         => 'testimonial_highlights',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'min'          => 0,
                        'max'          => 4,
                        'button_label' => 'Add Highlight',
                        'instructions' => 'Icon + label pills shown beneath the quote (best for the large/first card).',
                        'sub_fields'   => array(
                            array(
                                'key'           => 'field_dp_home_testimonials_highlight_icon',
                                'label'         => 'Icon',
                                'name'          => 'highlight_icon',
                                'type'          => 'text',
                                'default_value' => 'fa-check',
                                'instructions'  => 'Font Awesome icon class, e.g. fa-calendar-check',
                            ),
                            array(
                                'key'   => 'field_dp_home_testimonials_highlight_text',
                                'label' => 'Text',
                                'name'  => 'highlight_text',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                    // Checklist (nested repeater)
                    array(
                        'key'          => 'field_dp_home_testimonials_checklist',
                        'label'        => 'Checklist',
                        'name'         => 'testimonial_checklist',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'min'          => 0,
                        'max'          => 4,
                        'button_label' => 'Add Checklist Item',
                        'instructions' => 'Green check items shown beneath the quote (best for medium cards).',
                        'sub_fields'   => array(
                            array(
                                'key'   => 'field_dp_home_testimonials_checklist_text',
                                'label' => 'Text',
                                'name'  => 'checklist_text',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 210,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    /*  ───────────────────────────────────────────────
     *  B13 — Home: Sticky CTA
     *  ─────────────────────────────────────────────── */
    acf_add_local_field_group( array(
        'key'    => 'group_dp_home_sticky_cta',
        'title'  => 'Home — Sticky CTA Section',
        'fields' => array(
            // Title
            array(
                'key'           => 'field_dp_home_sticky_cta_title',
                'label'         => 'Title',
                'name'          => 'sticky_cta_title',
                'type'          => 'text',
                'default_value' => 'Your neighbourhood pharmacy, clinically led',
            ),
            // Subtitle
            array(
                'key'           => 'field_dp_home_sticky_cta_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'sticky_cta_subtitle',
                'type'          => 'text',
                'default_value' => 'Expert care, just around the corner',
            ),
            // Book button text
            array(
                'key'           => 'field_dp_home_sticky_cta_button_text',
                'label'         => 'Book Button Text',
                'name'          => 'sticky_cta_button_text',
                'type'          => 'text',
                'default_value' => 'Book Now',
            ),
            // Trust chip text
            array(
                'key'           => 'field_dp_home_sticky_cta_trust_text',
                'label'         => 'Trust Chip Text',
                'name'          => 'sticky_cta_trust_text',
                'type'          => 'text',
                'default_value' => 'GPhC Registered',
            ),
            // Call button mobile text
            array(
                'key'           => 'field_dp_home_sticky_cta_call_text',
                'label'         => 'Call Button Mobile Text',
                'name'          => 'sticky_cta_call_text',
                'type'          => 'text',
                'default_value' => 'Call Us',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-home.php',
                ),
            ),
        ),
        'menu_order'            => 220,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // C-SERIES: BLOG / HEALTH HUB FIELDS
    // =========================================================================

    // -------------------------------------------------------------------------
    // C1. Blog Post Fields
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'    => 'group_dp_blog_post',
        'title'  => 'Blog — Post Fields',
        'fields' => array(
            array(
                'key'           => 'field_dp_blog_reading_time',
                'label'         => 'Reading Time (minutes)',
                'name'          => 'reading_time',
                'type'          => 'number',
                'instructions'  => 'Leave blank to auto-calculate from word count.',
                'default_value' => '',
                'min'           => 1,
                'max'           => 60,
            ),
            array(
                'key'           => 'field_dp_blog_article_author',
                'label'         => 'Article Author',
                'name'          => 'article_author',
                'type'          => 'text',
                'instructions'  => 'Override the default WP author name for this post.',
            ),
            array(
                'key'           => 'field_dp_blog_author_photo',
                'label'         => 'Author Photo',
                'name'          => 'author_photo',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'instructions'  => 'Override the author avatar for this post. Falls back to pharmacist image.',
            ),
            array(
                'key'           => 'field_dp_blog_reviewer_photo',
                'label'         => 'Reviewer Photo',
                'name'          => 'reviewer_photo',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'instructions'  => 'Override the reviewer avatar for this post. Falls back to pharmacist image.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'post',
                ),
            ),
        ),
        'menu_order'            => 300,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // C1b. Table of Contents (sidebar)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'    => 'group_dp_post_toc',
        'title'  => 'Table of Contents',
        'fields' => array(
            array(
                'key'           => 'field_dp_post_show_toc',
                'label'         => 'Show Table of Contents',
                'name'          => 'show_table_of_contents',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
                'instructions'  => 'Auto-generated from H2/H3 headings. Disable to hide the TOC on this post.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'post',
                ),
            ),
        ),
        'menu_order'            => 310,
        'position'              => 'side',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // C2. Pillar / Cluster
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'    => 'group_dp_pillar_cluster',
        'title'  => 'Blog — Pillar / Cluster',
        'fields' => array(
            array(
                'key'           => 'field_dp_blog_is_pillar',
                'label'         => 'Is Pillar Post?',
                'name'          => 'is_pillar_post',
                'type'          => 'true_false',
                'default_value' => 0,
                'ui'            => 1,
                'instructions'  => 'Mark this as a pillar post to link cluster articles below.',
            ),
            array(
                'key'               => 'field_dp_blog_cluster_posts',
                'label'             => 'Cluster Posts',
                'name'              => 'cluster_posts',
                'type'              => 'relationship',
                'post_type'         => array( 'post' ),
                'filters'           => array( 'search', 'taxonomy' ),
                'return_format'     => 'id',
                'min'               => 0,
                'max'               => 20,
                'instructions'      => 'Select posts that belong to this pillar content series.',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_dp_blog_is_pillar',
                            'operator' => '==',
                            'value'    => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key'               => 'field_dp_blog_cluster_title',
                'label'             => 'Cluster Section Title',
                'name'              => 'cluster_section_title',
                'type'              => 'text',
                'default_value'     => 'In This Series',
                'instructions'      => 'Heading above the cluster articles grid on pillar posts.',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_dp_blog_is_pillar',
                            'operator' => '==',
                            'value'    => '1',
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'post',
                ),
            ),
        ),
        'menu_order'            => 320,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // C3. Post FAQs
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'    => 'group_dp_post_faq',
        'title'  => 'Blog — FAQs',
        'fields' => array(
            array(
                'key'           => 'field_dp_post_faq_title',
                'label'         => 'FAQ Section Title',
                'name'          => 'post_faq_title',
                'type'          => 'text',
                'default_value' => 'Frequently Asked Questions',
            ),
            array(
                'key'          => 'field_dp_post_faqs',
                'label'        => 'FAQs',
                'name'         => 'post_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'min'          => 0,
                'max'          => 20,
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_dp_post_faq_question',
                        'label' => 'Question',
                        'name'  => 'question',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_dp_post_faq_answer',
                        'label' => 'Answer',
                        'name'  => 'answer',
                        'type'  => 'wysiwyg',
                        'tabs'  => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 0,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'post',
                ),
            ),
        ),
        'menu_order'            => 330,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // D-SERIES: WEIGHT LOSS PAGE FIELDS
    // =========================================================================

    $wl_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-weight-loss.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // C2. Health Hub — Category Cards
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hh_cats',
        'title'    => 'Health Hub — Category Cards',
        'fields'   => array(
            array( 'key' => 'field_dp_hh_cats_title', 'label' => 'Section Title', 'name' => 'hh_cats_title', 'type' => 'text', 'default_value' => 'What brings you here today?' ),
            array( 'key' => 'field_dp_hh_cats_description', 'label' => 'Section Description', 'name' => 'hh_cats_description', 'type' => 'text', 'default_value' => 'Start with the health topic that matters most to you right now' ),
            array(
                'key'        => 'field_dp_hh_category_cards',
                'label'      => 'Category Cards',
                'name'       => 'hh_category_cards',
                'type'       => 'repeater',
                'min'        => 0,
                'max'        => 4,
                'layout'     => 'block',
                'sub_fields' => array(
                    array( 'key' => 'field_dp_hh_cat_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_hh_cat_label', 'label' => 'Label Badge', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '30' ), 'instructions' => 'Uppercase category label (e.g. WEIGHT LOSS)' ),
                    array( 'key' => 'field_dp_hh_cat_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_hh_cat_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_dp_hh_cat_image', 'label' => 'Background Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'instructions' => 'Portrait-oriented lifestyle image. Recommended: 600x750px.' ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-health-hub.php',
                ),
            ),
        ),
        'menu_order'            => 160,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D1. Weight Loss — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_hero',
        'title'    => 'Weight Loss — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_hero_badge', 'label' => 'Badge Text', 'name' => 'wl_hero_badge', 'type' => 'text', 'default_value' => 'MEDICAL WEIGHT LOSS' ),
            array( 'key' => 'field_dp_wl_hero_title_line_1', 'label' => 'Title Line 1 (gradient)', 'name' => 'wl_hero_title_line_1', 'type' => 'text', 'default_value' => 'Lose Weight.' ),
            array( 'key' => 'field_dp_wl_hero_title_line_2', 'label' => 'Title Line 2 (accent)', 'name' => 'wl_hero_title_line_2', 'type' => 'text', 'default_value' => 'Feel Amazing.' ),
            array( 'key' => 'field_dp_wl_hero_title_line_3', 'label' => 'Title Line 3 (gradient)', 'name' => 'wl_hero_title_line_3', 'type' => 'text', 'default_value' => 'Start Today.' ),
            array( 'key' => 'field_dp_wl_hero_description', 'label' => 'Description', 'name' => 'wl_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Prescription Mounjaro and Wegovy (GLP-1 treatments) with expert guidance and face-to-face support right here in Denton. No remote consultations — real care from someone who knows your name.' ),
            array( 'key' => 'field_dp_wl_hero_cta_text', 'label' => 'Primary CTA Text', 'name' => 'wl_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_dp_wl_hero_cta_url', 'label' => 'Primary CTA URL', 'name' => 'wl_hero_cta_url', 'type' => 'text', 'default_value' => '', 'instructions' => 'URL or anchor like #calculator. Leave blank for booking page.' ),
            array( 'key' => 'field_dp_wl_hero_testimonial_quote', 'label' => 'Testimonial Quote', 'name' => 'wl_hero_testimonial_quote', 'type' => 'textarea', 'rows' => 2, 'default_value' => '"Ahmed really takes the time to understand your goals. I\'ve lost 3 stone in 6 months and feel like a different person."' ),
            array( 'key' => 'field_dp_wl_hero_testimonial_name', 'label' => 'Testimonial Author', 'name' => 'wl_hero_testimonial_name', 'type' => 'text', 'default_value' => 'Denton Patient' ),
            array( 'key' => 'field_dp_wl_hero_testimonial_location', 'label' => 'Testimonial Location', 'name' => 'wl_hero_testimonial_location', 'type' => 'text', 'default_value' => 'Denton' ),
            array( 'key' => 'field_dp_wl_hero_result_badge', 'label' => 'Result Badge Text', 'name' => 'wl_hero_result_badge', 'type' => 'text', 'default_value' => 'Real Results' ),
            array(
                'key'           => 'field_dp_wl_hero_image_1',
                'label'         => 'Hero Image 1 (top left)',
                'name'          => 'wl_hero_image_1',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 600x700px portrait.',
            ),
            array(
                'key'           => 'field_dp_wl_hero_image_2',
                'label'         => 'Hero Image 2 (top right)',
                'name'          => 'wl_hero_image_2',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 600x700px portrait.',
            ),
            array(
                'key'           => 'field_dp_wl_hero_image_3',
                'label'         => 'Hero Image 3 (bottom wide)',
                'name'          => 'wl_hero_image_3',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 800x600px landscape.',
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 400,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D1b. Weight Loss — Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_stats',
        'title'    => 'Weight Loss — Stats Bar',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_stat_1_number', 'label' => 'Stat 1 — Number', 'name' => 'wl_stat_1_number', 'type' => 'text', 'default_value' => '4.7', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_wl_stat_1_label', 'label' => 'Stat 1 — Label', 'name' => 'wl_stat_1_label', 'type' => 'text', 'default_value' => 'Google Rating', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_wl_stat_2_number', 'label' => 'Stat 2 — Number', 'name' => 'wl_stat_2_number', 'type' => 'text', 'default_value' => '300+', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_wl_stat_2_label', 'label' => 'Stat 2 — Label', 'name' => 'wl_stat_2_label', 'type' => 'text', 'default_value' => 'Patients Helped', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_wl_stat_3_number', 'label' => 'Stat 3 — Number', 'name' => 'wl_stat_3_number', 'type' => 'text', 'default_value' => 'GPhC', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_wl_stat_3_label', 'label' => 'Stat 3 — Label', 'name' => 'wl_stat_3_label', 'type' => 'text', 'default_value' => 'Fully Registered', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_wl_stat_4_number', 'label' => 'Stat 4 — Number', 'name' => 'wl_stat_4_number', 'type' => 'text', 'default_value' => '30+', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_wl_stat_4_label', 'label' => 'Stat 4 — Label', 'name' => 'wl_stat_4_label', 'type' => 'text', 'default_value' => 'Years Experience', 'wrapper' => array( 'width' => '50' ) ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 400,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D2. Weight Loss — Social Proof Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_social',
        'title'    => 'Weight Loss — Social Proof Section',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_social_number', 'label' => 'Stat Number', 'name' => 'wl_social_number', 'type' => 'text', 'default_value' => '4.7' ),
            array( 'key' => 'field_dp_wl_social_label', 'label' => 'Stat Label', 'name' => 'wl_social_label', 'type' => 'text', 'default_value' => 'Google Rating' ),
            array( 'key' => 'field_dp_wl_social_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'wl_social_eyebrow', 'type' => 'text', 'default_value' => 'TRUSTED BY DENTON' ),
            array( 'key' => 'field_dp_wl_social_headline', 'label' => 'Headline', 'name' => 'wl_social_headline', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Join hundreds of Denton patients who\'ve already made the switch' ),
            array( 'key' => 'field_dp_wl_social_subtext', 'label' => 'Subtext', 'name' => 'wl_social_subtext', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Real people, real results. Our patients lose an average of 10-15% body weight in 12 months with Mounjaro and Wegovy treatment.' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 401,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D3. Weight Loss — Results Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_results',
        'title'    => 'Weight Loss — Results Section',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_results_badge', 'label' => 'Badge Text', 'name' => 'wl_results_badge', 'type' => 'text', 'default_value' => 'REAL RESULTS' ),
            array( 'key' => 'field_dp_wl_results_title', 'label' => 'Title', 'name' => 'wl_results_title', 'type' => 'text', 'default_value' => 'Real Mounjaro & Wegovy results in Denton' ),
            array( 'key' => 'field_dp_wl_results_description', 'label' => 'Description', 'name' => 'wl_results_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Denton patients using Mounjaro or Wegovy lose an average of 10-15% of their body weight in 12 months with our personalised programmes.' ),
            array( 'key' => 'field_dp_wl_results_card1_number', 'label' => 'Card 1 — Number', 'name' => 'wl_results_card1_number', 'type' => 'text', 'default_value' => '4.7/5' ),
            array( 'key' => 'field_dp_wl_results_card1_label', 'label' => 'Card 1 — Label', 'name' => 'wl_results_card1_label', 'type' => 'text', 'default_value' => 'Patient satisfaction' ),
            array( 'key' => 'field_dp_wl_results_card1_sublabel', 'label' => 'Card 1 — Sublabel', 'name' => 'wl_results_card1_sublabel', 'type' => 'text', 'default_value' => 'Based on verified reviews' ),
            array( 'key' => 'field_dp_wl_results_featured_badge', 'label' => 'Featured Card — Badge', 'name' => 'wl_results_featured_badge', 'type' => 'text', 'default_value' => 'Most Important' ),
            array( 'key' => 'field_dp_wl_results_featured_number', 'label' => 'Featured Card — Number', 'name' => 'wl_results_featured_number', 'type' => 'text', 'default_value' => '10-15%' ),
            array( 'key' => 'field_dp_wl_results_featured_label', 'label' => 'Featured Card — Label', 'name' => 'wl_results_featured_label', 'type' => 'text', 'default_value' => 'Average weight loss' ),
            array( 'key' => 'field_dp_wl_results_featured_sublabel', 'label' => 'Featured Card — Sublabel', 'name' => 'wl_results_featured_sublabel', 'type' => 'text', 'default_value' => 'In 12 months' ),
            array( 'key' => 'field_dp_wl_results_card3_number', 'label' => 'Card 3 — Number', 'name' => 'wl_results_card3_number', 'type' => 'text', 'default_value' => '300+' ),
            array( 'key' => 'field_dp_wl_results_card3_label', 'label' => 'Card 3 — Label', 'name' => 'wl_results_card3_label', 'type' => 'text', 'default_value' => 'Denton residents' ),
            array( 'key' => 'field_dp_wl_results_card3_sublabel', 'label' => 'Card 3 — Sublabel', 'name' => 'wl_results_card3_sublabel', 'type' => 'text', 'default_value' => 'Successfully helped' ),
            array( 'key' => 'field_dp_wl_results_disclaimer', 'label' => 'Disclaimer', 'name' => 'wl_results_disclaimer', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Results vary by individual. Weight loss depends on adherence to treatment, lifestyle changes, and individual metabolism.' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 402,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D4. Weight Loss — CTA Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_cta_bar',
        'title'    => 'Weight Loss — CTA Bar',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_cta_bar_title', 'label' => 'Title', 'name' => 'wl_cta_bar_title', 'type' => 'text', 'default_value' => 'Ready to transform your health?' ),
            array( 'key' => 'field_dp_wl_cta_bar_subtitle', 'label' => 'Subtitle', 'name' => 'wl_cta_bar_subtitle', 'type' => 'text', 'default_value' => 'Book your consultation with Ahmed today' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 403,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D5. Weight Loss — Features Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_features',
        'title'    => 'Weight Loss — Features Section',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_features_badge', 'label' => 'Badge Text', 'name' => 'wl_features_badge', 'type' => 'text', 'default_value' => 'Why Choose Us' ),
            array( 'key' => 'field_dp_wl_features_title_field', 'label' => 'Title', 'name' => 'wl_features_title', 'type' => 'text', 'default_value' => 'The Denton Pharmacy Difference' ),
            array( 'key' => 'field_dp_wl_features_description', 'label' => 'Description', 'name' => 'wl_features_description', 'type' => 'text', 'default_value' => 'Real face-to-face support. Expert guidance. Proven results.' ),
            array( 'key' => 'field_dp_wl_features_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'wl_features_cta_primary_text', 'type' => 'text', 'default_value' => 'Start Your Journey' ),
            array( 'key' => 'field_dp_wl_features_cta_secondary_text', 'label' => 'Secondary CTA Text', 'name' => 'wl_features_cta_secondary_text', 'type' => 'text', 'default_value' => 'Call Us' ),
            array(
                'key'          => 'field_dp_wl_features_credentials',
                'label'        => 'Credentials',
                'name'         => 'wl_features_credentials',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Credential',
                'instructions' => 'Leave empty to use defaults (GPhC Registered, Independent Prescriber, 30+ Years).',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_wl_feat_cred_icon', 'label' => 'Icon', 'name' => 'cred_icon', 'type' => 'text', 'default_value' => 'fa-shield-halved' ),
                    array( 'key' => 'field_dp_wl_feat_cred_text', 'label' => 'Text', 'name' => 'cred_text', 'type' => 'text' ),
                ),
            ),
            array(
                'key'           => 'field_dp_wl_features_image',
                'label'         => 'Image',
                'name'          => 'wl_features_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 600x700px portrait.',
            ),
            array( 'key' => 'field_dp_wl_features_image_alt', 'label' => 'Image Alt Text', 'name' => 'wl_features_image_alt', 'type' => 'text', 'default_value' => 'Weight loss success patient' ),
            array( 'key' => 'field_dp_wl_features_rating_text', 'label' => 'Rating Badge Text', 'name' => 'wl_features_rating_text', 'type' => 'text', 'default_value' => '4.7/5' ),
            array( 'key' => 'field_dp_wl_features_reviews_text', 'label' => 'Reviews Badge Text', 'name' => 'wl_features_reviews_text', 'type' => 'text', 'default_value' => '300+ Google Reviews' ),
            array( 'key' => 'field_dp_wl_features_view_reviews_text', 'label' => 'View Reviews Link Text', 'name' => 'wl_features_view_reviews_text', 'type' => 'text', 'default_value' => 'View Reviews' ),
            array( 'key' => 'field_dp_wl_features_reviews_label', 'label' => 'Reviews Label (after count)', 'name' => 'wl_features_reviews_label', 'type' => 'text', 'default_value' => 'reviews' ),
            array(
                'key'          => 'field_dp_wl_features',
                'label'        => 'Feature Cards',
                'name'         => 'wl_features',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Feature',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_wl_features_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-check', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_wl_features_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '70' ) ),
                    array( 'key' => 'field_dp_wl_features_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 404,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D6. Weight Loss — Journey Steps
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_journey',
        'title'    => 'Weight Loss — Journey Steps',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_journey_badge', 'label' => 'Badge Text', 'name' => 'wl_journey_badge', 'type' => 'text', 'default_value' => 'HOW WE SUPPORT YOU' ),
            array( 'key' => 'field_dp_wl_journey_title', 'label' => 'Title (plain text fallback)', 'name' => 'wl_journey_title', 'type' => 'text', 'default_value' => 'Your path to lasting weight loss', 'instructions' => 'Used as a single-line title. Leave blank to use the split title fields below.' ),
            array( 'key' => 'field_dp_wl_journey_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'wl_journey_title_highlight', 'type' => 'text', 'default_value' => 'Your Path To' ),
            array( 'key' => 'field_dp_wl_journey_title_line2', 'label' => 'Title Line 2 (accent)', 'name' => 'wl_journey_title_line2', 'type' => 'text', 'default_value' => ' Lasting Weight Loss' ),
            array( 'key' => 'field_dp_wl_journey_description', 'label' => 'Description', 'name' => 'wl_journey_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'A structured, evidence-based approach with regular face-to-face support every step of the way.' ),
            array(
                'key'          => 'field_dp_wl_journey_steps',
                'label'        => 'Journey Steps',
                'name'         => 'wl_journey_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Step',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_wl_journey_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
                    array( 'key' => 'field_dp_wl_journey_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array( 'width' => '50' ) ),
                    array(
                        'key'           => 'field_dp_wl_journey_step_image',
                        'label'         => 'Step Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'instructions'  => 'Recommended: 600x500px.',
                    ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 405,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );


    // -------------------------------------------------------------------------
    // D8. Weight Loss — FAQ Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_faq',
        'title'    => 'Weight Loss — FAQ Section',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_faq_badge', 'label' => 'Badge Text', 'name' => 'wl_faq_badge', 'type' => 'text', 'default_value' => 'FREQUENTLY ASKED QUESTIONS' ),
            array( 'key' => 'field_dp_wl_faq_title', 'label' => 'Title', 'name' => 'wl_faq_title', 'type' => 'text', 'default_value' => 'Your questions answered' ),
            array( 'key' => 'field_dp_wl_faq_description', 'label' => 'Description', 'name' => 'wl_faq_description', 'type' => 'text', 'default_value' => 'Get answers to the most common weight loss questions' ),
            array(
                'key'          => 'field_dp_wl_faqs',
                'label'        => 'FAQ Items',
                'name'         => 'wl_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 12,
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_wl_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_wl_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 4 ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 407,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D9. Weight Loss — Testimonials Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_testimonials',
        'title'    => 'Weight Loss — Testimonials Section',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_testimonials_badge', 'label' => 'Badge Text', 'name' => 'wl_testimonials_badge', 'type' => 'text', 'default_value' => 'SUCCESS STORIES' ),
            array( 'key' => 'field_dp_wl_testimonials_title', 'label' => 'Title', 'name' => 'wl_testimonials_title', 'type' => 'text', 'default_value' => 'Real Denton success stories' ),
            array( 'key' => 'field_dp_wl_testimonials_title_start', 'label' => 'Title Start (split)', 'name' => 'wl_testimonials_title_start', 'type' => 'text', 'default_value' => 'Real Results.' ),
            array( 'key' => 'field_dp_wl_testimonials_title_highlight', 'label' => 'Title Highlight (split)', 'name' => 'wl_testimonials_title_highlight', 'type' => 'text', 'default_value' => 'Lasting Health.' ),
            array( 'key' => 'field_dp_wl_testimonials_description', 'label' => 'Description', 'name' => 'wl_testimonials_description', 'type' => 'text', 'default_value' => 'See how our patients have transformed their lives with medical weight loss' ),
            array( 'key' => 'field_dp_wl_testimonials_disclaimer', 'label' => 'Disclaimer', 'name' => 'wl_testimonials_disclaimer', 'type' => 'text', 'default_value' => 'The results below are from real Denton Pharmacy patients. Individual results may vary.' ),
            array( 'key' => 'field_dp_wl_testimonials_cta_title', 'label' => 'CTA Card Title', 'name' => 'wl_testimonials_cta_title', 'type' => 'text', 'default_value' => 'Trusted by 5,000+ Denton Patients' ),
            array( 'key' => 'field_dp_wl_testimonials_cta_text', 'label' => 'CTA Card Text', 'name' => 'wl_testimonials_cta_text', 'type' => 'text', 'default_value' => 'No waiting lists. No hidden fees. Just expert, local weight loss support you can rely on.' ),
            array( 'key' => 'field_dp_wl_testimonials_cta_rating_label', 'label' => 'CTA Rating Label', 'name' => 'wl_testimonials_cta_rating_label', 'type' => 'text', 'default_value' => 'Google Rating' ),
            array( 'key' => 'field_dp_wl_testimonials_verified_label', 'label' => 'Verified Label (full)', 'name' => 'wl_testimonials_verified_label', 'type' => 'text', 'default_value' => 'Verified Patient' ),
            array( 'key' => 'field_dp_wl_testimonials_verified_label_short', 'label' => 'Verified Label (short)', 'name' => 'wl_testimonials_verified_label_short', 'type' => 'text', 'default_value' => 'Verified' ),
            array( 'key' => 'field_dp_wl_testimonials_transparency_label', 'label' => 'Transparency Label', 'name' => 'wl_testimonials_transparency_label', 'type' => 'text', 'default_value' => 'Transparency Note:' ),
            array(
                'key'          => 'field_dp_wl_testimonials',
                'label'        => 'Testimonials',
                'name'         => 'wl_testimonials',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Testimonial',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_wl_testimonial_weight', 'label' => 'Weight Lost (short)', 'name' => 'weight_lost_short', 'type' => 'text', 'instructions' => 'e.g. 6st', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_wl_testimonial_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'instructions' => 'e.g. 6 Stone Lost', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'field_dp_wl_testimonial_author', 'label' => 'Author', 'name' => 'author', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'field_dp_wl_testimonial_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 408,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // D10. Weight Loss — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_final_cta',
        'title'    => 'Weight Loss — Final CTA Section',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_final_cta_title', 'label' => 'Title', 'name' => 'wl_final_cta_title', 'type' => 'text', 'default_value' => 'Ready to start your weight loss journey?' ),
            array( 'key' => 'field_dp_wl_final_cta_description', 'label' => 'Description', 'name' => 'wl_final_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Join 500+ Denton residents who\'ve transformed their lives with medical weight loss. Book your consultation with Ahmed today.' ),
            array( 'key' => 'field_dp_wl_final_cta_button_text', 'label' => 'Primary Button Text', 'name' => 'wl_final_cta_button_text', 'type' => 'text', 'default_value' => 'Book Your Consultation' ),
            array(
                'key'          => 'field_dp_wl_final_cta_badges',
                'label'        => 'Trust Badges',
                'name'         => 'wl_final_cta_badges',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Badge',
                'instructions' => 'Leave empty to use defaults.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_wl_final_badge_icon', 'label' => 'Icon', 'name' => 'badge_icon', 'type' => 'text', 'default_value' => 'fa-shield-halved' ),
                    array( 'key' => 'field_dp_wl_final_badge_text', 'label' => 'Text', 'name' => 'badge_text', 'type' => 'text' ),
                ),
            ),
            array(
                'key'          => 'field_dp_wl_final_cta_checks',
                'label'        => 'Trust Checks',
                'name'         => 'wl_final_cta_checks',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Check',
                'instructions' => 'Leave empty to use defaults.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_wl_final_check_text', 'label' => 'Text', 'name' => 'check_text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 409,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // E-SERIES: TRAVEL HEALTH PAGE FIELDS
    // =========================================================================

    $th_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-travel-health.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // E1. Travel Health — Hero Section (Pattern B Dark)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_hero',
        'title'    => 'Travel Health — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_dp_th_hero_badge', 'label' => 'Badge Text', 'name' => 'th_hero_badge', 'type' => 'text', 'default_value' => 'TRAVEL HEALTH SERVICES' ),
            array( 'key' => 'field_dp_th_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'th_hero_title_line1', 'type' => 'text', 'default_value' => 'Denton\'s Leading' ),
            array( 'key' => 'field_dp_th_hero_title_line2', 'label' => 'Title Line 2 (accent)', 'name' => 'th_hero_title_line2', 'type' => 'text', 'default_value' => 'Travel Clinic' ),
            array( 'key' => 'field_dp_th_hero_title_line3', 'label' => 'Title Line 3 (italic)', 'name' => 'th_hero_title_line3', 'type' => 'text', 'default_value' => 'Fly Happy.', 'instructions' => 'Third headline line in italic style. Leave blank to hide.' ),
            array( 'key' => 'field_dp_th_hero_description', 'label' => 'Description', 'name' => 'th_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Expert travel vaccinations and health advice for your next adventure. Book your appointment at our Denton travel clinic with Ahmed.' ),
            array( 'key' => 'field_dp_th_hero_cta_text', 'label' => 'Primary CTA Text', 'name' => 'th_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Appointment' ),
            array( 'key' => 'field_dp_th_hero_cta_url', 'label' => 'Primary CTA URL', 'name' => 'th_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use the booking page.' ),
            array(
                'key'           => 'field_dp_th_hero_bg_image',
                'label'         => 'Background Image',
                'name'          => 'th_hero_bg_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Full-width hero background. Recommended: 1920x900px.',
            ),
            array( 'key' => 'field_dp_th_trust_1', 'label' => 'Trust Badge 1', 'name' => 'th_trust_1', 'type' => 'text', 'default_value' => 'Yellow Fever Centre' ),
            array( 'key' => 'field_dp_th_trust_1_icon', 'label' => 'Trust Badge 1 — Icon', 'name' => 'th_trust_1_icon', 'type' => 'text', 'default_value' => 'fas fa-shield-virus', 'instructions' => 'Font Awesome class, e.g. fas fa-shield-virus' ),
            array( 'key' => 'field_dp_th_trust_2', 'label' => 'Trust Badge 2', 'name' => 'th_trust_2', 'type' => 'text', 'default_value' => 'All Travel Vaccinations' ),
            array( 'key' => 'field_dp_th_trust_2_icon', 'label' => 'Trust Badge 2 — Icon', 'name' => 'th_trust_2_icon', 'type' => 'text', 'default_value' => 'fas fa-syringe', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe' ),
            array( 'key' => 'field_dp_th_trust_3', 'label' => 'Trust Badge 3', 'name' => 'th_trust_3', 'type' => 'text', 'default_value' => 'Expert Travel Advice' ),
            array( 'key' => 'field_dp_th_trust_3_icon', 'label' => 'Trust Badge 3 — Icon', 'name' => 'th_trust_3_icon', 'type' => 'text', 'default_value' => 'fas fa-user-doctor', 'instructions' => 'Font Awesome class, e.g. fas fa-user-doctor' ),
            array( 'key' => 'field_dp_th_hero_float_badge_label', 'label' => 'Floating Badge — Label', 'name' => 'th_hero_float_badge_label', 'type' => 'text', 'default_value' => 'OFFICIAL', 'instructions' => 'Small uppercase label on the floating image badge.' ),
            array( 'key' => 'field_dp_th_hero_float_badge_text', 'label' => 'Floating Badge — Text', 'name' => 'th_hero_float_badge_text', 'type' => 'text', 'default_value' => 'Yellow Fever Centre' ),
            array( 'key' => 'field_dp_th_hero_testimonial_quote', 'label' => 'Hero Testimonial — Quote', 'name' => 'th_hero_testimonial_quote', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Ahmed was brilliant — explained everything clearly and made the whole family feel at ease before our trip to Kenya.' ),
            array( 'key' => 'field_dp_th_hero_testimonial_author', 'label' => 'Hero Testimonial — Author', 'name' => 'th_hero_testimonial_author', 'type' => 'text', 'default_value' => 'Denton Patient' ),
            array( 'key' => 'field_dp_th_hero_testimonial_dest', 'label' => 'Hero Testimonial — Destination', 'name' => 'th_hero_testimonial_destination', 'type' => 'text', 'default_value' => 'Kenya', 'instructions' => 'Destination badge (e.g. Kenya, Thailand). Leave blank to hide.' ),
        ),
        'location'              => $th_location,
        'menu_order'            => 500,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E2. Travel Health — Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_stats',
        'title'    => 'Travel Health — Stats Bar',
        'fields'   => array(
            array( 'key' => 'field_dp_th_stat_1_icon', 'label' => 'Stat 1 — Icon', 'name' => 'th_stat_1_icon', 'type' => 'text', 'default_value' => 'fas fa-shield-virus', 'instructions' => 'Font Awesome class.', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'field_dp_th_stat_1_number', 'label' => 'Stat 1 — Number', 'name' => 'th_stat_1_number', 'type' => 'text', 'default_value' => 'Official', 'wrapper' => array( 'width' => '35' ) ),
            array( 'key' => 'field_dp_th_stat_1_label', 'label' => 'Stat 1 — Label', 'name' => 'th_stat_1_label', 'type' => 'text', 'default_value' => 'Yellow Fever Centre', 'wrapper' => array( 'width' => '35' ) ),
            array( 'key' => 'field_dp_th_stat_2_icon', 'label' => 'Stat 2 — Icon', 'name' => 'th_stat_2_icon', 'type' => 'text', 'default_value' => 'fas fa-passport', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'field_dp_th_stat_2_number', 'label' => 'Stat 2 — Number', 'name' => 'th_stat_2_number', 'type' => 'text', 'default_value' => '1,000+', 'wrapper' => array( 'width' => '35' ) ),
            array( 'key' => 'field_dp_th_stat_2_label', 'label' => 'Stat 2 — Label', 'name' => 'th_stat_2_label', 'type' => 'text', 'default_value' => 'Travellers Protected', 'wrapper' => array( 'width' => '35' ) ),
            array( 'key' => 'field_dp_th_stat_3_icon', 'label' => 'Stat 3 — Icon', 'name' => 'th_stat_3_icon', 'type' => 'text', 'default_value' => 'fas fa-award', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'field_dp_th_stat_3_number', 'label' => 'Stat 3 — Number', 'name' => 'th_stat_3_number', 'type' => 'text', 'default_value' => '15+', 'wrapper' => array( 'width' => '35' ) ),
            array( 'key' => 'field_dp_th_stat_3_label', 'label' => 'Stat 3 — Label', 'name' => 'th_stat_3_label', 'type' => 'text', 'default_value' => 'Years Experience', 'wrapper' => array( 'width' => '35' ) ),
            array( 'key' => 'field_dp_th_stat_4_icon', 'label' => 'Stat 4 — Icon', 'name' => 'th_stat_4_icon', 'type' => 'text', 'default_value' => 'fas fa-shield-halved', 'wrapper' => array( 'width' => '30' ) ),
            array( 'key' => 'field_dp_th_stat_4_number', 'label' => 'Stat 4 — Number', 'name' => 'th_stat_4_number', 'type' => 'text', 'default_value' => 'GPhC', 'wrapper' => array( 'width' => '35' ) ),
            array( 'key' => 'field_dp_th_stat_4_label', 'label' => 'Stat 4 — Label', 'name' => 'th_stat_4_label', 'type' => 'text', 'default_value' => 'Registered', 'wrapper' => array( 'width' => '35' ) ),
        ),
        'location'              => $th_location,
        'menu_order'            => 501,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E3. Travel Health — Services Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_services',
        'title'    => 'Travel Health — Services Section',
        'fields'   => array(
            array( 'key' => 'field_dp_th_services_badge', 'label' => 'Badge Text', 'name' => 'th_services_badge', 'type' => 'text', 'default_value' => 'COMPREHENSIVE TRAVEL HEALTH' ),
            array( 'key' => 'field_dp_th_services_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'th_services_title_highlight', 'type' => 'text', 'default_value' => 'Everything you need' ),
            array( 'key' => 'field_dp_th_services_title_rest', 'label' => 'Title (after highlight)', 'name' => 'th_services_title_rest', 'type' => 'text', 'default_value' => 'for safe travel' ),
            array( 'key' => 'field_dp_th_services_description', 'label' => 'Description', 'name' => 'th_services_description', 'type' => 'text', 'default_value' => 'From expert consultations to all vaccinations and official certificates' ),
            array(
                'key'          => 'field_dp_th_services',
                'label'        => 'Service Cards',
                'name'         => 'th_services',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 8,
                'button_label' => 'Add Service',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_th_svc_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_th_svc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '70' ) ),
                    array( 'key' => 'field_dp_th_svc_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'           => 'field_dp_th_svc_image',
                        'label'         => 'Card Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'instructions'  => 'Recommended: 600x400px.',
                    ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 502,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E4. Travel Health — Vaccinations Grid
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_vaccinations',
        'title'    => 'Travel Health — Vaccinations Grid',
        'fields'   => array(
            array( 'key' => 'field_dp_th_vaccines_badge', 'label' => 'Badge Text', 'name' => 'th_vaccines_badge', 'type' => 'text', 'default_value' => 'ALL VACCINATIONS' ),
            array( 'key' => 'field_dp_th_vaccines_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'th_vaccines_title_highlight', 'type' => 'text', 'default_value' => 'Available' ),
            array( 'key' => 'field_dp_th_vaccines_title_rest', 'label' => 'Title (after highlight)', 'name' => 'th_vaccines_title_rest', 'type' => 'text', 'default_value' => 'Vaccinations' ),
            array(
                'key'          => 'field_dp_th_vaccinations',
                'label'        => 'Vaccinations',
                'name'         => 'th_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 20,
                'button_label' => 'Add Vaccination',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_th_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class.', 'default_value' => 'fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_th_vax_name', 'label' => 'Vaccination Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array(
                        'key'           => 'field_dp_th_vax_featured',
                        'label'         => 'Featured?',
                        'name'          => 'is_featured',
                        'type'          => 'true_false',
                        'default_value' => 0,
                        'ui'            => 1,
                        'instructions'  => 'Yellow gradient card styling.',
                        'wrapper'       => array( 'width' => '15' ),
                    ),
                    array( 'key' => 'field_dp_th_vax_badge', 'label' => 'Badge Text', 'name' => 'badge', 'type' => 'text', 'instructions' => 'Optional, e.g. "Official Centre".', 'wrapper' => array( 'width' => '15' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 503,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E5. Travel Health — Why Choose Us
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_why',
        'title'    => 'Travel Health — Why Choose Us',
        'fields'   => array(
            array( 'key' => 'field_dp_th_why_badge', 'label' => 'Badge Text', 'name' => 'th_why_badge', 'type' => 'text', 'default_value' => 'WHY CHOOSE US' ),
            array( 'key' => 'field_dp_th_why_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'th_why_title_highlight', 'type' => 'text', 'default_value' => 'Why choose our' ),
            array( 'key' => 'field_dp_th_why_title_rest', 'label' => 'Title (after highlight)', 'name' => 'th_why_title_rest', 'type' => 'text', 'default_value' => 'Denton travel clinic?' ),
            array(
                'key'           => 'field_dp_th_why_image',
                'label'         => 'Pharmacist Image',
                'name'          => 'th_why_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Portrait photo. Recommended: 600x700px. Falls back to global pharmacist image.',
            ),
            array( 'key' => 'field_dp_th_why_image_alt', 'label' => 'Image Alt Text', 'name' => 'th_why_image_alt', 'type' => 'text', 'default_value' => 'Expert pharmacist at Denton Pharmacy' ),
            array( 'key' => 'field_dp_th_why_badge_number', 'label' => 'Experience Badge — Number', 'name' => 'th_why_badge_number', 'type' => 'text', 'default_value' => '15+ Years' ),
            array( 'key' => 'field_dp_th_why_badge_label', 'label' => 'Experience Badge — Label', 'name' => 'th_why_badge_label', 'type' => 'text', 'default_value' => 'Experience' ),
            array(
                'key'          => 'field_dp_th_why_cards',
                'label'        => 'Feature Cards',
                'name'         => 'th_why_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Feature',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_th_why_card_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class.', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_th_why_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '70' ) ),
                    array( 'key' => 'field_dp_th_why_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 504,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E6. Travel Health — Process Steps
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_process',
        'title'    => 'Travel Health — Process Steps',
        'fields'   => array(
            array( 'key' => 'field_dp_th_process_badge', 'label' => 'Badge Text', 'name' => 'th_process_badge', 'type' => 'text', 'default_value' => 'HOW IT WORKS' ),
            array( 'key' => 'field_dp_th_process_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'th_process_title_highlight', 'type' => 'text', 'default_value' => 'Your travel clinic' ),
            array( 'key' => 'field_dp_th_process_title_rest', 'label' => 'Title (after highlight)', 'name' => 'th_process_title_rest', 'type' => 'text', 'default_value' => 'Denton journey' ),
            array(
                'key'          => 'field_dp_th_process_steps',
                'label'        => 'Process Steps',
                'name'         => 'th_process_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Step',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_th_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
                    array( 'key' => 'field_dp_th_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array( 'width' => '50' ) ),
                    array( 'key' => 'field_dp_th_step_icon', 'label' => 'Step Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Large icon. Font Awesome class, e.g. fas fa-calendar-check', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_th_step_meta_icon', 'label' => 'Meta Icon', 'name' => 'meta_icon', 'type' => 'text', 'instructions' => 'Small icon in meta pill. Font Awesome class.', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_th_step_meta_text', 'label' => 'Meta Text', 'name' => 'meta_text', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'field_dp_th_step_floating_badge', 'label' => 'Floating Badge Text', 'name' => 'floating_badge', 'type' => 'text', 'instructions' => 'Optional. Shows as an overlay badge on the step image. Leave blank to hide.', 'wrapper' => array( 'width' => '70' ) ),
                    array(
                        'key'           => 'field_dp_th_step_image',
                        'label'         => 'Step Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'instructions'  => 'Recommended: 600x500px.',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 505,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E7. Travel Health — Popular Destinations
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_destinations',
        'title'    => 'Travel Health — Popular Destinations',
        'fields'   => array(
            array( 'key' => 'field_dp_th_destinations_badge', 'label' => 'Badge Text', 'name' => 'th_destinations_badge', 'type' => 'text', 'default_value' => 'POPULAR DESTINATIONS' ),
            array( 'key' => 'field_dp_th_destinations_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'th_destinations_title_highlight', 'type' => 'text', 'default_value' => 'Travelling to' ),
            array( 'key' => 'field_dp_th_destinations_title_rest', 'label' => 'Title (after highlight)', 'name' => 'th_destinations_title_rest', 'type' => 'text', 'default_value' => 'these destinations?' ),
            array(
                'key'          => 'field_dp_th_destinations',
                'label'        => 'Destinations',
                'name'         => 'th_destinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 12,
                'button_label' => 'Add Destination',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_th_dest_name', 'label' => 'Destination Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array(
                        'key'           => 'field_dp_th_dest_image',
                        'label'         => 'Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'instructions'  => 'Recommended: 400x500px portrait.',
                        'wrapper'       => array( 'width' => '40' ),
                    ),
                    array( 'key' => 'field_dp_th_dest_url', 'label' => 'Link URL', 'name' => 'url', 'type' => 'url', 'instructions' => 'Link to destination-specific travel page.', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 506,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E8. Travel Health — FAQ Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_faq',
        'title'    => 'Travel Health — FAQ Section',
        'fields'   => array(
            array( 'key' => 'field_dp_th_faq_badge', 'label' => 'Badge Text', 'name' => 'th_faq_badge', 'type' => 'text', 'default_value' => 'FREQUENTLY ASKED QUESTIONS' ),
            array( 'key' => 'field_dp_th_faq_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'th_faq_title_highlight', 'type' => 'text', 'default_value' => 'Travel health' ),
            array( 'key' => 'field_dp_th_faq_title_rest', 'label' => 'Title (after highlight)', 'name' => 'th_faq_title_rest', 'type' => 'text', 'default_value' => 'questions answered' ),
            array(
                'key'          => 'field_dp_th_faqs',
                'label'        => 'FAQs',
                'name'         => 'th_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 20,
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_th_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_th_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 4 ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 507,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E9. Travel Health — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_th_final_cta',
        'title'    => 'Travel Health — Final CTA Section',
        'fields'   => array(
            array( 'key' => 'field_dp_th_cta_badge_1', 'label' => 'Badge 1', 'name' => 'th_cta_badge_1', 'type' => 'text', 'default_value' => 'Yellow Fever Centre' ),
            array( 'key' => 'field_dp_th_cta_badge_2', 'label' => 'Badge 2', 'name' => 'th_cta_badge_2', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_dp_th_cta_badge_3', 'label' => 'Badge 3', 'name' => 'th_cta_badge_3', 'type' => 'text', 'default_value' => 'Same Day Service' ),
            array( 'key' => 'field_dp_th_cta_title', 'label' => 'Title', 'name' => 'th_cta_title', 'type' => 'text', 'default_value' => 'Ready to protect your travels?' ),
            array( 'key' => 'field_dp_th_cta_description', 'label' => 'Description', 'name' => 'th_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Don\'t let health worries spoil your adventure. Book your comprehensive travel health consultation with Denton Pharmacy today.' ),
            array( 'key' => 'field_dp_th_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'th_cta_primary_text', 'type' => 'text', 'default_value' => 'Book Travel Health Appointment' ),
            array( 'key' => 'field_dp_th_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'th_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use the booking page.' ),
            array( 'key' => 'field_dp_th_cta_check_1', 'label' => 'Check Item 1', 'name' => 'th_cta_check_1', 'type' => 'text', 'default_value' => 'Flexible appointments' ),
            array( 'key' => 'field_dp_th_cta_check_2', 'label' => 'Check Item 2', 'name' => 'th_cta_check_2', 'type' => 'text', 'default_value' => 'Expert advice' ),
            array( 'key' => 'field_dp_th_cta_check_3', 'label' => 'Check Item 3', 'name' => 'th_cta_check_3', 'type' => 'text', 'default_value' => 'Official certificates' ),
        ),
        'location'              => $th_location,
        'menu_order'            => 508,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // F-SERIES: EAR WAX REMOVAL PAGE FIELDS
    // =========================================================================

    $ew_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-ear-wax-removal.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // F1. Ear Wax — Hero Section (Pattern A Light)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_hero',
        'title'    => 'Ear Wax — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_hero_badge', 'label' => 'Badge Text', 'name' => 'ew_hero_badge', 'type' => 'text', 'default_value' => 'SAME-DAY MICROSUCTION AVAILABLE' ),
            array( 'key' => 'field_dp_ew_hero_title_highlight', 'label' => 'Title — Highlighted Line', 'name' => 'ew_hero_title_highlight', 'type' => 'text', 'default_value' => 'Professional Ear Wax Removal', 'instructions' => 'Displayed in gradient text.' ),
            array( 'key' => 'field_dp_ew_hero_title_rest', 'label' => 'Title — Second Line', 'name' => 'ew_hero_title_rest', 'type' => 'text', 'default_value' => 'in Denton' ),
            array( 'key' => 'field_dp_ew_hero_subtitle', 'label' => 'Subtitle', 'name' => 'ew_hero_subtitle', 'type' => 'text', 'default_value' => 'Expert microsuction by Ahmed and our specialist team at Denton Pharmacy' ),
            array( 'key' => 'field_dp_ew_hero_description', 'label' => 'Description', 'name' => 'ew_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Safe, effective ear wax removal using advanced microsuction technology. Same-day appointments available. Guaranteed results with complimentary follow-up within 7 days if needed.' ),
            array( 'key' => 'field_dp_ew_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'ew_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Your Appointment' ),
            array( 'key' => 'field_dp_ew_hero_cta_url', 'label' => 'CTA Button URL', 'name' => 'ew_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use the default booking page.' ),
            array(
                'key'           => 'field_dp_ew_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'ew_hero_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Main hero image. Recommended: portrait orientation, at least 800×1000px.',
            ),
            array( 'key' => 'field_dp_ew_hero_image_alt', 'label' => 'Hero Image Alt Text', 'name' => 'ew_hero_image_alt', 'type' => 'text', 'default_value' => 'Professional ear wax removal at Denton Pharmacy' ),
            array( 'key' => 'field_dp_ew_price_label', 'label' => 'Price Badge — Label', 'name' => 'ew_price_label', 'type' => 'text', 'default_value' => 'Starting From' ),
            array( 'key' => 'field_dp_ew_price_amount', 'label' => 'Price Badge — Amount', 'name' => 'ew_price_amount', 'type' => 'text', 'default_value' => '£40' ),
            array( 'key' => 'field_dp_ew_price_sub', 'label' => 'Price Badge — Subtext', 'name' => 'ew_price_sub', 'type' => 'text', 'default_value' => 'per ear' ),
            array( 'key' => 'field_dp_ew_trust_1', 'label' => 'Trust Item 1', 'name' => 'ew_trust_1', 'type' => 'text', 'default_value' => 'GPhC Registered' ),
            array( 'key' => 'field_dp_ew_trust_1_icon', 'label' => 'Trust Item 1 — Icon', 'name' => 'ew_trust_1_icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle', 'instructions' => 'Font Awesome class, e.g. fas fa-check-circle' ),
            array( 'key' => 'field_dp_ew_trust_2', 'label' => 'Trust Item 2', 'name' => 'ew_trust_2', 'type' => 'text', 'default_value' => 'Same-day available' ),
            array( 'key' => 'field_dp_ew_trust_2_icon', 'label' => 'Trust Item 2 — Icon', 'name' => 'ew_trust_2_icon', 'type' => 'text', 'default_value' => 'fas fa-clock', 'instructions' => 'Font Awesome class, e.g. fas fa-clock' ),
            array( 'key' => 'field_dp_ew_trust_3', 'label' => 'Trust Item 3', 'name' => 'ew_trust_3', 'type' => 'text', 'default_value' => 'From £40 per ear' ),
            array( 'key' => 'field_dp_ew_trust_3_icon', 'label' => 'Trust Item 3 — Icon', 'name' => 'ew_trust_3_icon', 'type' => 'text', 'default_value' => 'fas fa-tag', 'instructions' => 'Font Awesome class, e.g. fas fa-tag' ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 600,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
        'hide_on_screen'        => array( 'the_content', 'excerpt', 'discussion', 'comments', 'featured_image' ),
    ) );

    // -------------------------------------------------------------------------
    // F2. Ear Wax — Stats Bar (individual fields, not repeater)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_stats',
        'title'    => 'Ear Wax — Stats Bar',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_stat_1_icon', 'label' => 'Stat 1 — Icon', 'name' => 'ew_stat_1_icon', 'type' => 'text', 'default_value' => 'fas fa-tag', 'instructions' => 'Full Font Awesome class.' ),
            array( 'key' => 'field_dp_ew_stat_1_number', 'label' => 'Stat 1 — Number', 'name' => 'ew_stat_1_number', 'type' => 'text', 'default_value' => '£40' ),
            array( 'key' => 'field_dp_ew_stat_1_label', 'label' => 'Stat 1 — Label', 'name' => 'ew_stat_1_label', 'type' => 'text', 'default_value' => 'Per Ear' ),
            array( 'key' => 'field_dp_ew_stat_2_icon', 'label' => 'Stat 2 — Icon', 'name' => 'ew_stat_2_icon', 'type' => 'text', 'default_value' => 'fas fa-clock' ),
            array( 'key' => 'field_dp_ew_stat_2_number', 'label' => 'Stat 2 — Number', 'name' => 'ew_stat_2_number', 'type' => 'text', 'default_value' => '30 mins' ),
            array( 'key' => 'field_dp_ew_stat_2_label', 'label' => 'Stat 2 — Label', 'name' => 'ew_stat_2_label', 'type' => 'text', 'default_value' => 'Treatment Time' ),
            array( 'key' => 'field_dp_ew_stat_3_icon', 'label' => 'Stat 3 — Icon', 'name' => 'ew_stat_3_icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle' ),
            array( 'key' => 'field_dp_ew_stat_3_number', 'label' => 'Stat 3 — Number', 'name' => 'ew_stat_3_number', 'type' => 'text', 'default_value' => '95%+' ),
            array( 'key' => 'field_dp_ew_stat_3_label', 'label' => 'Stat 3 — Label', 'name' => 'ew_stat_3_label', 'type' => 'text', 'default_value' => 'Success Rate' ),
            array( 'key' => 'field_dp_ew_stat_4_icon', 'label' => 'Stat 4 — Icon', 'name' => 'ew_stat_4_icon', 'type' => 'text', 'default_value' => 'fas fa-calendar-check' ),
            array( 'key' => 'field_dp_ew_stat_4_number', 'label' => 'Stat 4 — Number', 'name' => 'ew_stat_4_number', 'type' => 'text', 'default_value' => 'Same Day' ),
            array( 'key' => 'field_dp_ew_stat_4_label', 'label' => 'Stat 4 — Label', 'name' => 'ew_stat_4_label', 'type' => 'text', 'default_value' => 'Appointments' ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 601,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // F3. Ear Wax — Symptoms Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_symptoms',
        'title'    => 'Ear Wax — Symptoms Section',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_symptoms_badge', 'label' => 'Badge Text', 'name' => 'ew_symptoms_badge', 'type' => 'text', 'default_value' => 'COMMON SYMPTOMS' ),
            array( 'key' => 'field_dp_ew_symptoms_title', 'label' => 'Title', 'name' => 'ew_symptoms_title', 'type' => 'text', 'default_value' => 'Is Ear Wax Affecting Your Daily Life?' ),
            array( 'key' => 'field_dp_ew_symptoms_description', 'label' => 'Description', 'name' => 'ew_symptoms_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Don\'t let blocked ears hold you back. Recognise these common symptoms?' ),
            array(
                'key'          => 'field_dp_ew_symptoms',
                'label'        => 'Symptoms',
                'name'         => 'ew_symptoms',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Symptom',
                'instructions' => 'Leave empty to use 6 default symptom cards.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ew_symptom_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-ear-listen', 'instructions' => 'Full Font Awesome class.' ),
                    array( 'key' => 'field_dp_ew_symptom_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_symptom_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 602,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // F4. Ear Wax — Team Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_team',
        'title'    => 'Ear Wax — Team Section',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_team_badge', 'label' => 'Badge Text', 'name' => 'ew_team_badge', 'type' => 'text', 'default_value' => 'OUR TEAM' ),
            array( 'key' => 'field_dp_ew_team_title', 'label' => 'Title', 'name' => 'ew_team_title', 'type' => 'text', 'default_value' => 'Meet Your Denton Ear Care Specialists' ),
            array( 'key' => 'field_dp_ew_team_description', 'label' => 'Description', 'name' => 'ew_team_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'As Denton\'s dedicated ear care practice, we\'ve helped thousands of local residents resolve their ear wax problems. We offer professional, face-to-face care with convenient access and parking nearby.' ),
            array(
                'key'          => 'field_dp_ew_team_members',
                'label'        => 'Team Members',
                'name'         => 'ew_team_members',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Team Member',
                'instructions' => 'Leave empty to use default team (Ahmed Al-Liabi & Jignasa Modhvadia).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_ew_team_image',
                        'label'         => 'Photo',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),
                    array( 'key' => 'field_dp_ew_team_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_team_role', 'label' => 'Role', 'name' => 'role', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_team_bio', 'label' => 'Bio', 'name' => 'bio', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'field_dp_ew_team_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'instructions' => 'e.g. "Since 2019" or "Level 3 Technician"' ),
                    array(
                        'key'           => 'field_dp_ew_team_badge_style',
                        'label'         => 'Badge Style',
                        'name'          => 'badge_style',
                        'type'          => 'select',
                        'choices'       => array( 'green' => 'Green', 'purple' => 'Purple', 'blue' => 'Blue' ),
                        'default_value' => 'green',
                    ),
                    array(
                        'key'          => 'field_dp_ew_team_tags',
                        'label'        => 'Skill Tags',
                        'name'         => 'tags',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Tag',
                        'sub_fields'   => array(
                            array( 'key' => 'field_dp_ew_team_tag', 'label' => 'Tag', 'name' => 'tag', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 603,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // F5. Ear Wax — Comparison Table
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_comparison',
        'title'    => 'Ear Wax — Comparison Table',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_compare_badge', 'label' => 'Badge Text', 'name' => 'ew_compare_badge', 'type' => 'text', 'default_value' => 'TREATMENT COMPARISON' ),
            array( 'key' => 'field_dp_ew_compare_title', 'label' => 'Title', 'name' => 'ew_compare_title', 'type' => 'text', 'default_value' => 'How Our Treatment Compares' ),
            array( 'key' => 'field_dp_ew_compare_description', 'label' => 'Description', 'name' => 'ew_compare_description', 'type' => 'text', 'default_value' => 'See why microsuction is the gold standard for ear wax removal in Denton' ),
            array( 'key' => 'field_dp_ew_compare_col_1_heading', 'label' => 'Column 1 Heading (Highlighted)', 'name' => 'ew_compare_col_1_heading', 'type' => 'text', 'default_value' => 'Denton Pharmacy' ),
            array( 'key' => 'field_dp_ew_compare_col_2_heading', 'label' => 'Column 2 Heading', 'name' => 'ew_compare_col_2_heading', 'type' => 'text', 'default_value' => 'Traditional Syringing' ),
            array( 'key' => 'field_dp_ew_compare_col_3_heading', 'label' => 'Column 3 Heading', 'name' => 'ew_compare_col_3_heading', 'type' => 'text', 'default_value' => 'At-Home Remedies' ),
            array(
                'key'          => 'field_dp_ew_comparison_rows',
                'label'        => 'Comparison Rows',
                'name'         => 'ew_comparison_rows',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Row',
                'instructions' => 'Leave empty to use 8 default rows.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ew_compare_feature', 'label' => 'Feature', 'name' => 'feature', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_compare_microsuction', 'label' => 'Microsuction', 'name' => 'microsuction', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_compare_syringing', 'label' => 'Syringing', 'name' => 'syringing', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_compare_home_remedies', 'label' => 'Home Remedies', 'name' => 'home_remedies', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 604,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // F6. Ear Wax — Process Section (How It Works)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_process',
        'title'    => 'Ear Wax — Process (How It Works)',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_process_badge', 'label' => 'Badge Text', 'name' => 'ew_process_badge', 'type' => 'text', 'default_value' => 'HOW IT WORKS' ),
            array( 'key' => 'field_dp_ew_process_title', 'label' => 'Title', 'name' => 'ew_process_title', 'type' => 'text', 'default_value' => 'Our Professional Ear Wax Removal Process' ),
            array( 'key' => 'field_dp_ew_process_description', 'label' => 'Description', 'name' => 'ew_process_description', 'type' => 'text', 'default_value' => 'Simple, effective treatment in three easy steps' ),
            array(
                'key'          => 'field_dp_ew_process_steps',
                'label'        => 'Steps',
                'name'         => 'ew_process_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',
                'instructions' => 'Leave empty to use 3 default steps (Assessment, Treatment, Aftercare).',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ew_step_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-clipboard-check', 'instructions' => 'Full Font Awesome class.' ),
                    array( 'key' => 'field_dp_ew_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_step_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'field_dp_ew_step_time', 'label' => 'Time Label', 'name' => 'time', 'type' => 'text', 'instructions' => 'e.g. "10 minutes". Leave blank to hide.' ),
                    array( 'key' => 'field_dp_ew_step_badge', 'label' => 'Badge Text', 'name' => 'badge', 'type' => 'text', 'instructions' => 'e.g. "Free 7-day follow-up". Leave blank to hide.' ),
                    array(
                        'key'           => 'field_dp_ew_step_image',
                        'label'         => 'Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),
                ),
            ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 605,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // F7. Ear Wax — Pricing Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_pricing',
        'title'    => 'Ear Wax — Pricing Section',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_pricing_badge', 'label' => 'Badge Text', 'name' => 'ew_pricing_badge', 'type' => 'text', 'default_value' => 'TRANSPARENT PRICING' ),
            array( 'key' => 'field_dp_ew_pricing_title', 'label' => 'Title', 'name' => 'ew_pricing_title', 'type' => 'text', 'default_value' => 'Simple, Transparent Pricing' ),
            array( 'key' => 'field_dp_ew_pricing_description', 'label' => 'Description', 'name' => 'ew_pricing_description', 'type' => 'text', 'default_value' => 'No hidden fees. No surprises. Just clear, professional ear care.' ),
            array(
                'key'          => 'field_dp_ew_pricing',
                'label'        => 'Pricing Cards',
                'name'         => 'ew_pricing',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Pricing Card',
                'instructions' => 'Leave empty to use defaults (Consultation £10, Microsuction £40/ear).',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ew_price_is_featured', 'label' => 'Featured?', 'name' => 'is_featured', 'type' => 'true_false', 'default_value' => 0, 'ui' => 1, 'instructions' => 'Featured card gets a highlighted border and "Most Popular" badge.' ),
                    array( 'key' => 'field_dp_ew_price_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'default_value' => 'MOST POPULAR', 'instructions' => 'Only shown on featured cards.' ),
                    array( 'key' => 'field_dp_ew_price_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-clipboard-list', 'instructions' => 'Full Font Awesome class.' ),
                    array( 'key' => 'field_dp_ew_price_amount_val', 'label' => 'Price', 'name' => 'price', 'type' => 'text', 'instructions' => 'Just the number, e.g. "40". The £ sign is added automatically.' ),
                    array( 'key' => 'field_dp_ew_price_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_price_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_dp_ew_price_callout', 'label' => 'Callout Text', 'name' => 'callout', 'type' => 'text', 'instructions' => 'e.g. "Free follow-up within 7 days if needed". Leave blank to hide.' ),
                    array( 'key' => 'field_dp_ew_price_button_text', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text', 'default_value' => 'Book Now' ),
                ),
            ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 606,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // F8. Ear Wax — Testimonials Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_testimonials',
        'title'    => 'Ear Wax — Testimonials Section',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_testimonials_badge', 'label' => 'Badge Text', 'name' => 'ew_testimonials_badge', 'type' => 'text', 'default_value' => 'PATIENT TESTIMONIALS' ),
            array( 'key' => 'field_dp_ew_testimonials_title', 'label' => 'Title', 'name' => 'ew_testimonials_title', 'type' => 'text', 'default_value' => 'Hear What Our Denton Patients Say' ),
            array(
                'key'          => 'field_dp_ew_testimonials',
                'label'        => 'Testimonials',
                'name'         => 'ew_testimonials',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Testimonial',
                'instructions' => 'Leave empty to use 3 default testimonials.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ew_testimonial_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'field_dp_ew_testimonial_author', 'label' => 'Author Name', 'name' => 'author', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 607,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // F9. Ear Wax — FAQ Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_faq',
        'title'    => 'Ear Wax — FAQ Section',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_faq_badge', 'label' => 'Badge Text', 'name' => 'ew_faq_badge', 'type' => 'text', 'default_value' => 'FREQUENTLY ASKED QUESTIONS' ),
            array( 'key' => 'field_dp_ew_faq_title', 'label' => 'Title', 'name' => 'ew_faq_title', 'type' => 'text', 'default_value' => 'Frequently Asked Questions — Ear Wax Removal Denton' ),
            array(
                'key'          => 'field_dp_ew_faqs',
                'label'        => 'FAQs',
                'name'         => 'ew_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'instructions' => 'Leave empty to use 6 default FAQs.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ew_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_ew_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 608,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // F10. Ear Wax — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_ew_cta',
        'title'    => 'Ear Wax — Final CTA Section',
        'fields'   => array(
            array( 'key' => 'field_dp_ew_cta_badge_1', 'label' => 'Badge 1', 'name' => 'ew_cta_badge_1', 'type' => 'text', 'default_value' => 'From £40 per ear' ),
            array( 'key' => 'field_dp_ew_cta_badge_2', 'label' => 'Badge 2', 'name' => 'ew_cta_badge_2', 'type' => 'text', 'default_value' => 'Same-day available' ),
            array( 'key' => 'field_dp_ew_cta_badge_3', 'label' => 'Badge 3', 'name' => 'ew_cta_badge_3', 'type' => 'text', 'default_value' => 'Free 7-day follow-up' ),
            array( 'key' => 'field_dp_ew_cta_title', 'label' => 'Title', 'name' => 'ew_cta_title', 'type' => 'text', 'default_value' => 'Ready to hear clearly again?' ),
            array( 'key' => 'field_dp_ew_cta_description', 'label' => 'Description', 'name' => 'ew_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your ear wax removal appointment at our Denton clinic today. Expert microsuction treatment with guaranteed results.' ),
            array( 'key' => 'field_dp_ew_cta_primary_url', 'label' => 'CTA URL', 'name' => 'ew_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use the booking page.' ),
            array( 'key' => 'field_dp_ew_cta_button_text', 'label' => 'Button Text', 'name' => 'ew_cta_button_text', 'type' => 'text', 'default_value' => 'Book Appointment Online' ),
            array( 'key' => 'field_dp_ew_cta_check_1', 'label' => 'Trust Check 1', 'name' => 'ew_cta_check_1', 'type' => 'text', 'default_value' => 'No referral needed' ),
            array( 'key' => 'field_dp_ew_cta_check_2', 'label' => 'Trust Check 2', 'name' => 'ew_cta_check_2', 'type' => 'text', 'default_value' => 'Expert microsuction' ),
            array( 'key' => 'field_dp_ew_cta_check_3', 'label' => 'Trust Check 3', 'name' => 'ew_cta_check_3', 'type' => 'text', 'default_value' => 'Same-day appointments' ),
        ),
        'location'              => $ew_location,
        'menu_order'            => 609,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // G-SERIES: HAIR LOSS PAGE FIELDS
    // =========================================================================

    $hl_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-hair-loss.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // G1. Hair Loss — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hl_hero',
        'title'    => 'Hair Loss — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_dp_hairloss_hero_badge', 'label' => 'Badge Text', 'name' => 'hl_hero_badge', 'type' => 'text', 'default_value' => 'HAIR LOSS TREATMENT' ),
            array( 'key' => 'field_dp_hairloss_hero_title_line1', 'label' => 'Title — First Line', 'name' => 'hl_hero_title_line1', 'type' => 'text', 'default_value' => 'Regrow Your Confidence with' ),
            array( 'key' => 'field_dp_hairloss_hero_title_highlight', 'label' => 'Title — Highlighted', 'name' => 'hl_hero_title_highlight', 'type' => 'text', 'default_value' => 'Expert Hair Loss Treatment', 'instructions' => 'Displayed in gradient text.' ),
            array( 'key' => 'field_dp_hairloss_hero_description', 'label' => 'Description', 'name' => 'hl_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Clinically proven treatments including Finasteride and Minoxidil. Face-to-face consultations with our GPhC-registered pharmacist in Denton.' ),
            array( 'key' => 'field_dp_hairloss_feature_1', 'label' => 'Feature 1', 'name' => 'hl_feature_1', 'type' => 'text', 'default_value' => 'Prescription treatments (Finasteride)' ),
            array( 'key' => 'field_dp_hairloss_feature_2', 'label' => 'Feature 2', 'name' => 'hl_feature_2', 'type' => 'text', 'default_value' => 'Over-the-counter solutions (Minoxidil)' ),
            array( 'key' => 'field_dp_hairloss_feature_3', 'label' => 'Feature 3', 'name' => 'hl_feature_3', 'type' => 'text', 'default_value' => 'Personalised treatment plans' ),
            array( 'key' => 'field_dp_hairloss_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'hl_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_dp_hairloss_hero_cta_url', 'label' => 'CTA Button URL', 'name' => 'hl_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use the default booking page.' ),
            array(
                'key'           => 'field_dp_hairloss_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'hl_hero_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Main hero image. Recommended: portrait, at least 800×1000px.',
            ),
            array( 'key' => 'field_dp_hairloss_hero_image_alt', 'label' => 'Hero Image Alt Text', 'name' => 'hl_hero_image_alt', 'type' => 'text', 'default_value' => 'Hair loss treatment' ),
            array( 'key' => 'field_dp_hairloss_hero_caption', 'label' => 'Hero Image Caption', 'name' => 'hl_hero_caption', 'type' => 'text', 'default_value' => 'Real results from our patients' ),
        ),
        'location'              => $hl_location,
        'menu_order'            => 700,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
        'hide_on_screen'        => array( 'the_content', 'excerpt', 'discussion', 'comments', 'featured_image' ),
    ) );

    // -------------------------------------------------------------------------
    // G2. Hair Loss — Stats Bar (individual fields)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hl_stats',
        'title'    => 'Hair Loss — Stats Bar',
        'fields'   => array(
            array( 'key' => 'field_dp_hairloss_stat_1_icon', 'label' => 'Stat 1 — Icon', 'name' => 'hl_stat_1_icon', 'type' => 'text', 'default_value' => 'fas fa-users', 'instructions' => 'Full Font Awesome class.' ),
            array( 'key' => 'field_dp_hairloss_stat_1_number', 'label' => 'Stat 1 — Number', 'name' => 'hl_stat_1_number', 'type' => 'text', 'default_value' => '500+' ),
            array( 'key' => 'field_dp_hairloss_stat_1_label', 'label' => 'Stat 1 — Label', 'name' => 'hl_stat_1_label', 'type' => 'text', 'default_value' => 'Patients Treated' ),
            array( 'key' => 'field_dp_hairloss_stat_2_icon', 'label' => 'Stat 2 — Icon', 'name' => 'hl_stat_2_icon', 'type' => 'text', 'default_value' => 'fas fa-certificate' ),
            array( 'key' => 'field_dp_hairloss_stat_2_number', 'label' => 'Stat 2 — Number', 'name' => 'hl_stat_2_number', 'type' => 'text', 'default_value' => 'GPhC' ),
            array( 'key' => 'field_dp_hairloss_stat_2_label', 'label' => 'Stat 2 — Label', 'name' => 'hl_stat_2_label', 'type' => 'text', 'default_value' => 'Registered' ),
            array( 'key' => 'field_dp_hairloss_stat_3_icon', 'label' => 'Stat 3 — Icon', 'name' => 'hl_stat_3_icon', 'type' => 'text', 'default_value' => 'fas fa-calendar-check' ),
            array( 'key' => 'field_dp_hairloss_stat_3_number', 'label' => 'Stat 3 — Number', 'name' => 'hl_stat_3_number', 'type' => 'text', 'default_value' => '6-12 Months' ),
            array( 'key' => 'field_dp_hairloss_stat_3_label', 'label' => 'Stat 3 — Label', 'name' => 'hl_stat_3_label', 'type' => 'text', 'default_value' => 'Typical Results' ),
            array( 'key' => 'field_dp_hairloss_stat_4_icon', 'label' => 'Stat 4 — Icon', 'name' => 'hl_stat_4_icon', 'type' => 'text', 'default_value' => 'fas fa-star' ),
            array( 'key' => 'field_dp_hairloss_stat_4_number', 'label' => 'Stat 4 — Number', 'name' => 'hl_stat_4_number', 'type' => 'text', 'default_value' => '4.7&#9733;' ),
            array( 'key' => 'field_dp_hairloss_stat_4_label', 'label' => 'Stat 4 — Label', 'name' => 'hl_stat_4_label', 'type' => 'text', 'default_value' => 'Average Rating' ),
        ),
        'location'              => $hl_location,
        'menu_order'            => 701,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G3. Hair Loss — Treatment Options (Results/Features)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hl_treatments',
        'title'    => 'Hair Loss — Treatment Options',
        'fields'   => array(
            array( 'key' => 'field_dp_hairloss_treatments_badge', 'label' => 'Badge Text', 'name' => 'hl_treatments_badge', 'type' => 'text', 'default_value' => 'PRESCRIPTION & OTC' ),
            array( 'key' => 'field_dp_hairloss_treatments_title_line1', 'label' => 'Title — First Part', 'name' => 'hl_treatments_title_line1', 'type' => 'text', 'default_value' => 'Our' ),
            array( 'key' => 'field_dp_hairloss_treatments_title_highlight', 'label' => 'Title — Highlighted', 'name' => 'hl_treatments_title_highlight', 'type' => 'text', 'default_value' => 'Hair Loss Treatments' ),
            array( 'key' => 'field_dp_hairloss_treatments_description', 'label' => 'Description', 'name' => 'hl_treatments_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Clinically proven treatments prescribed and monitored by our GPhC-registered pharmacist at Denton Pharmacy.' ),
            array(
                'key'          => 'field_dp_hairloss_treatments',
                'label'        => 'Treatment Cards',
                'name'         => 'hl_treatments',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Treatment',
                'instructions' => 'Leave empty to use defaults (Finasteride & Minoxidil).',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_hairloss_treat_is_featured', 'label' => 'Featured?', 'name' => 'is_featured', 'type' => 'true_false', 'default_value' => 0, 'ui' => 1 ),
                    array( 'key' => 'field_dp_hairloss_treat_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text' ),
                    array(
                        'key'           => 'field_dp_hairloss_treat_badge_type',
                        'label'         => 'Badge Type',
                        'name'          => 'badge_type',
                        'type'          => 'select',
                        'choices'       => array( 'prescription' => 'Prescription', 'otc' => 'OTC' ),
                        'default_value' => 'prescription',
                    ),
                    array(
                        'key'           => 'field_dp_hairloss_treat_image',
                        'label'         => 'Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),
                    array( 'key' => 'field_dp_hairloss_treat_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_hairloss_treat_subtitle', 'label' => 'Subtitle', 'name' => 'subtitle', 'type' => 'text' ),
                    array( 'key' => 'field_dp_hairloss_treat_how', 'label' => 'How It Works', 'name' => 'how_it_works', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'          => 'field_dp_hairloss_treat_results',
                        'label'        => 'Results',
                        'name'         => 'results',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Result',
                        'sub_fields'   => array(
                            array( 'key' => 'field_dp_hairloss_treat_result_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                        ),
                    ),
                    array( 'key' => 'field_dp_hairloss_treat_duration', 'label' => 'Duration', 'name' => 'duration', 'type' => 'text' ),
                    array( 'key' => 'field_dp_hairloss_treat_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                    array( 'key' => 'field_dp_hairloss_treat_button', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text', 'default_value' => 'Book Now' ),
                ),
            ),
        ),
        'location'              => $hl_location,
        'menu_order'            => 702,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G4. Hair Loss — Team / Expertise
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hl_team',
        'title'    => 'Hair Loss — Team / Expertise',
        'fields'   => array(
            array( 'key' => 'field_dp_hairloss_team_badge', 'label' => 'Badge Text', 'name' => 'hl_team_badge', 'type' => 'text', 'default_value' => 'YOUR SPECIALISTS' ),
            array( 'key' => 'field_dp_hairloss_team_title', 'label' => 'Title', 'name' => 'hl_team_title', 'type' => 'text', 'default_value' => 'Meet Your Denton Hair Loss Experts' ),
            array( 'key' => 'field_dp_hairloss_team_description', 'label' => 'Description', 'name' => 'hl_team_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Our experienced pharmacists provide personalised hair loss consultations with discretion and care. Get expert advice and ongoing support at your local Denton pharmacy.' ),
            array(
                'key'          => 'field_dp_hairloss_team_members',
                'label'        => 'Team Members',
                'name'         => 'hl_team_members',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Team Member',
                'instructions' => 'Leave empty to use default team (Ahmed Al-Liabi & Jignasa Modhvadia).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_hairloss_team_image',
                        'label'         => 'Photo',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),
                    array( 'key' => 'field_dp_hairloss_team_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                    array( 'key' => 'field_dp_hairloss_team_role', 'label' => 'Role', 'name' => 'role', 'type' => 'text' ),
                    array( 'key' => 'field_dp_hairloss_team_bio', 'label' => 'Bio', 'name' => 'bio', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'field_dp_hairloss_team_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'instructions' => 'e.g. "Since 2019" or "Hair Loss Specialist"' ),
                    array(
                        'key'           => 'field_dp_hairloss_team_badge_style',
                        'label'         => 'Badge Style',
                        'name'          => 'badge_style',
                        'type'          => 'select',
                        'choices'       => array( 'green' => 'Green', 'purple' => 'Purple', 'blue' => 'Blue' ),
                        'default_value' => 'green',
                    ),
                    array(
                        'key'          => 'field_dp_hairloss_team_tags',
                        'label'        => 'Skill Tags',
                        'name'         => 'tags',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Tag',
                        'sub_fields'   => array(
                            array( 'key' => 'field_dp_hairloss_team_tag', 'label' => 'Tag', 'name' => 'tag', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
        ),
        'location'              => $hl_location,
        'menu_order'            => 703,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G5. Hair Loss — Process / Journey
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hl_process',
        'title'    => 'Hair Loss — Process / Journey',
        'fields'   => array(
            array( 'key' => 'field_dp_hairloss_process_badge', 'label' => 'Badge Text', 'name' => 'hl_process_badge', 'type' => 'text', 'default_value' => 'HOW IT WORKS' ),
            array( 'key' => 'field_dp_hairloss_process_title_line1', 'label' => 'Title — First Part', 'name' => 'hl_process_title_line1', 'type' => 'text', 'default_value' => 'Your Hair Loss Treatment' ),
            array( 'key' => 'field_dp_hairloss_process_title_highlight', 'label' => 'Title — Highlighted', 'name' => 'hl_process_title_highlight', 'type' => 'text', 'default_value' => 'Journey' ),
            array(
                'key'          => 'field_dp_hairloss_process_steps',
                'label'        => 'Steps',
                'name'         => 'hl_process_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',
                'instructions' => 'Leave empty to use 4 default steps.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_hairloss_step_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-calendar-check', 'instructions' => 'Full Font Awesome class.' ),
                    array( 'key' => 'field_dp_hairloss_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_hairloss_step_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_dp_hairloss_step_time', 'label' => 'Time Badge', 'name' => 'time_badge', 'type' => 'text', 'instructions' => 'e.g. "15-20 minutes". Leave blank to hide.' ),
                ),
            ),
            array( 'key' => 'field_dp_hairloss_process_cta_text', 'label' => 'CTA Button Text', 'name' => 'hl_process_cta_text', 'type' => 'text', 'default_value' => 'Start Your Journey' ),
        ),
        'location'              => $hl_location,
        'menu_order'            => 704,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G6. Hair Loss — FAQ Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hl_faq',
        'title'    => 'Hair Loss — FAQ Section',
        'fields'   => array(
            array( 'key' => 'field_dp_hairloss_faq_badge', 'label' => 'Badge Text', 'name' => 'hl_faq_badge', 'type' => 'text', 'default_value' => 'COMMON QUESTIONS' ),
            array( 'key' => 'field_dp_hairloss_faq_title_line1', 'label' => 'Title — First Part', 'name' => 'hl_faq_title_line1', 'type' => 'text', 'default_value' => 'Hair Loss Treatment' ),
            array( 'key' => 'field_dp_hairloss_faq_title_highlight', 'label' => 'Title — Highlighted', 'name' => 'hl_faq_title_highlight', 'type' => 'text', 'default_value' => 'FAQs' ),
            array(
                'key'          => 'field_dp_hairloss_faqs',
                'label'        => 'FAQs',
                'name'         => 'hl_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'instructions' => 'Leave empty to use 6 default FAQs.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_hairloss_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_hairloss_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $hl_location,
        'menu_order'            => 705,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G7. Hair Loss — Testimonials Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hl_testimonials',
        'title'    => 'Hair Loss — Testimonials Section',
        'fields'   => array(
            array( 'key' => 'field_dp_hairloss_testimonials_badge', 'label' => 'Badge Text', 'name' => 'hl_testimonials_badge', 'type' => 'text', 'default_value' => 'PATIENT STORIES' ),
            array( 'key' => 'field_dp_hairloss_testimonials_title', 'label' => 'Title', 'name' => 'hl_testimonials_title', 'type' => 'text', 'default_value' => 'Hear From Our Denton Patients' ),
            array(
                'key'          => 'field_dp_hairloss_testimonials',
                'label'        => 'Testimonials',
                'name'         => 'hl_testimonials',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Testimonial',
                'instructions' => 'Leave empty to use 3 default testimonials.',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_hairloss_testimonial_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'field_dp_hairloss_testimonial_author', 'label' => 'Author Name', 'name' => 'author', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $hl_location,
        'menu_order'            => 706,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G8. Hair Loss — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_hl_cta',
        'title'    => 'Hair Loss — Final CTA Section',
        'fields'   => array(
            array( 'key' => 'field_dp_hairloss_cta_title', 'label' => 'Title', 'name' => 'hl_cta_title', 'type' => 'text', 'default_value' => 'Ready to Start Your Hair Regrowth Journey?' ),
            array( 'key' => 'field_dp_hairloss_cta_description', 'label' => 'Description', 'name' => 'hl_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book a confidential consultation with our GPhC-registered pharmacist in Denton' ),
            array( 'key' => 'field_dp_hairloss_cta_button_text', 'label' => 'Button Text', 'name' => 'hl_cta_button_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_dp_hairloss_cta_url', 'label' => 'CTA URL', 'name' => 'hl_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use the booking page.' ),
        ),
        'location'              => $hl_location,
        'menu_order'            => 707,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // H. SWITCH PROVIDER PAGE FIELDS
    // =========================================================================

    $sp_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-switch-provider.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // H1. Switch Provider — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_sp_hero',
        'title'    => 'Switch Provider — Hero Section',
        'fields'   => array(
            array(
                'key'           => 'field_dp_switch_hero_badge',
                'label'         => 'Badge Text',
                'name'          => 'sp_hero_badge',
                'type'          => 'text',
                'default_value' => 'SWITCH TO DENTON PHARMACY',
            ),
            array(
                'key'           => 'field_dp_switch_hero_title_line1',
                'label'         => 'Title Line 1 (gradient)',
                'name'          => 'sp_hero_title_line1',
                'type'          => 'text',
                'default_value' => 'Frustrated with',
            ),
            array(
                'key'           => 'field_dp_switch_hero_title_line2',
                'label'         => 'Title Line 2 (accent)',
                'name'          => 'sp_hero_title_line2',
                'type'          => 'text',
                'default_value' => 'Your Current',
            ),
            array(
                'key'           => 'field_dp_switch_hero_title_line3',
                'label'         => 'Title Line 3 (gradient)',
                'name'          => 'sp_hero_title_line3',
                'type'          => 'text',
                'default_value' => 'Weight Loss Provider?',
            ),
            array(
                'key'           => 'field_dp_switch_hero_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'sp_hero_subtitle',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Switch to Denton Pharmacy for expert care, transparent pricing, and ongoing pharmacist support. No waiting lists.',
            ),
            array( 'key' => 'field_dp_switch_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'sp_hero_cta_text', 'type' => 'text', 'default_value' => 'Start Your Switch Today' ),
            array( 'key' => 'field_dp_switch_hero_cta_url', 'label' => 'CTA Button URL', 'name' => 'sp_hero_cta_url', 'type' => 'text', 'default_value' => '#comparison' ),
            array( 'key' => 'field_dp_switch_hero_trust_1', 'label' => 'Trust Pill 1', 'name' => 'sp_hero_trust_1', 'type' => 'text', 'default_value' => 'Zero gap in treatment' ),
            array( 'key' => 'field_dp_switch_hero_trust_1_icon', 'label' => 'Trust Pill 1 — Icon', 'name' => 'sp_hero_trust_1_icon', 'type' => 'text', 'default_value' => 'fas fa-bolt', 'instructions' => 'Font Awesome class, e.g. fas fa-bolt' ),
            array( 'key' => 'field_dp_switch_hero_trust_2', 'label' => 'Trust Pill 2', 'name' => 'sp_hero_trust_2', 'type' => 'text', 'default_value' => 'Same Day Appointments' ),
            array( 'key' => 'field_dp_switch_hero_trust_2_icon', 'label' => 'Trust Pill 2 — Icon', 'name' => 'sp_hero_trust_2_icon', 'type' => 'text', 'default_value' => 'fas fa-calendar-check', 'instructions' => 'Font Awesome class, e.g. fas fa-calendar-check' ),
            array( 'key' => 'field_dp_switch_hero_trust_3', 'label' => 'Trust Pill 3', 'name' => 'sp_hero_trust_3', 'type' => 'text', 'default_value' => 'Face-to-Face Care' ),
            array( 'key' => 'field_dp_switch_hero_trust_3_icon', 'label' => 'Trust Pill 3 — Icon', 'name' => 'sp_hero_trust_3_icon', 'type' => 'text', 'default_value' => 'fas fa-user-doctor', 'instructions' => 'Font Awesome class, e.g. fas fa-user-doctor' ),
            array(
                'key'           => 'field_dp_switch_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'sp_hero_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a hero image. Default: stock photo of patient with pharmacist.',
            ),
            array( 'key' => 'field_dp_switch_hero_image_alt', 'label' => 'Hero Image Alt Text', 'name' => 'sp_hero_image_alt', 'type' => 'text', 'default_value' => '' ),
            array( 'key' => 'field_dp_switch_hero_price_label', 'label' => 'Price Badge Label', 'name' => 'sp_hero_price_label', 'type' => 'text', 'default_value' => 'From' ),
            array( 'key' => 'field_dp_switch_hero_price_amount', 'label' => 'Price Badge Amount', 'name' => 'sp_hero_price_amount', 'type' => 'text', 'default_value' => '£125/mo' ),
            array( 'key' => 'field_dp_switch_hero_price_note', 'label' => 'Price Badge Note', 'name' => 'sp_hero_price_note', 'type' => 'text', 'default_value' => 'All-inclusive' ),
            array(
                'key'           => 'field_dp_switch_hero_testimonial_text',
                'label'         => 'Testimonial Quote',
                'name'          => 'sp_hero_testimonial_text',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => '"Ahmed genuinely cares about your progress. The face-to-face support makes all the difference."',
            ),
            array( 'key' => 'field_dp_switch_hero_testimonial_name', 'label' => 'Testimonial Author', 'name' => 'sp_hero_testimonial_name', 'type' => 'text', 'default_value' => 'Denton Patient' ),
            array( 'key' => 'field_dp_switch_hero_testimonial_result', 'label' => 'Testimonial Result Badge', 'name' => 'sp_hero_testimonial_result', 'type' => 'text', 'default_value' => '3 Stone Lost' ),
        ),
        'location'              => $sp_location,
        'menu_order'            => 800,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H2. Switch Provider — Stats Bar (individual fields × 4)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_sp_stats',
        'title'    => 'Switch Provider — Stats Bar',
        'fields'   => array(
            // Stat 1
            array( 'key' => 'field_dp_switch_stat_1_icon', 'label' => 'Stat 1 Icon', 'name' => 'sp_stat_1_icon', 'type' => 'text', 'default_value' => 'fa-weight-scale', 'instructions' => 'Font Awesome class, e.g. fa-weight-scale' ),
            array( 'key' => 'field_dp_switch_stat_1_number', 'label' => 'Stat 1 Number', 'name' => 'sp_stat_1_number', 'type' => 'text', 'default_value' => '2.5st' ),
            array( 'key' => 'field_dp_switch_stat_1_label', 'label' => 'Stat 1 Label', 'name' => 'sp_stat_1_label', 'type' => 'text', 'default_value' => 'Avg Loss' ),
            // Stat 2
            array( 'key' => 'field_dp_switch_stat_2_icon', 'label' => 'Stat 2 Icon', 'name' => 'sp_stat_2_icon', 'type' => 'text', 'default_value' => 'fa-users' ),
            array( 'key' => 'field_dp_switch_stat_2_number', 'label' => 'Stat 2 Number', 'name' => 'sp_stat_2_number', 'type' => 'text', 'default_value' => 'Hundreds' ),
            array( 'key' => 'field_dp_switch_stat_2_label', 'label' => 'Stat 2 Label', 'name' => 'sp_stat_2_label', 'type' => 'text', 'default_value' => 'Patients Switched' ),
            // Stat 3
            array( 'key' => 'field_dp_switch_stat_3_icon', 'label' => 'Stat 3 Icon', 'name' => 'sp_stat_3_icon', 'type' => 'text', 'default_value' => 'fa-star' ),
            array( 'key' => 'field_dp_switch_stat_3_number', 'label' => 'Stat 3 Number', 'name' => 'sp_stat_3_number', 'type' => 'text', 'default_value' => '4.9/5' ),
            array( 'key' => 'field_dp_switch_stat_3_label', 'label' => 'Stat 3 Label', 'name' => 'sp_stat_3_label', 'type' => 'text', 'default_value' => 'Google Rating' ),
            // Stat 4
            array( 'key' => 'field_dp_switch_stat_4_icon', 'label' => 'Stat 4 Icon', 'name' => 'sp_stat_4_icon', 'type' => 'text', 'default_value' => 'fa-location-dot' ),
            array( 'key' => 'field_dp_switch_stat_4_number', 'label' => 'Stat 4 Number', 'name' => 'sp_stat_4_number', 'type' => 'text', 'default_value' => 'Denton' ),
            array( 'key' => 'field_dp_switch_stat_4_label', 'label' => 'Stat 4 Label', 'name' => 'sp_stat_4_label', 'type' => 'text', 'default_value' => 'Based Care' ),
        ),
        'location'              => $sp_location,
        'menu_order'            => 801,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H3. Switch Provider — Comparison Section (3-card grid)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_sp_comparison',
        'title'    => 'Switch Provider — Comparison Section',
        'fields'   => array(
            // Header
            array( 'key' => 'field_dp_switch_compare_badge', 'label' => 'Section Badge', 'name' => 'sp_compare_badge', 'type' => 'text', 'default_value' => 'THE DENTON PHARMACY DIFFERENCE' ),
            array( 'key' => 'field_dp_switch_compare_title', 'label' => 'Section Title', 'name' => 'sp_compare_title', 'type' => 'text', 'default_value' => 'Compare Your Options' ),
            array( 'key' => 'field_dp_switch_compare_description', 'label' => 'Section Description', 'name' => 'sp_compare_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'See the difference face-to-face care makes for your weight loss journey' ),
            // Card 1: Problem
            array( 'key' => 'field_dp_switch_card1_tab', 'label' => 'Card 1: National Providers', 'type' => 'tab' ),
            array( 'key' => 'field_dp_switch_card1_icon', 'label' => 'Icon Class', 'name' => 'sp_card1_icon', 'type' => 'text', 'default_value' => 'fas fa-laptop' ),
            array( 'key' => 'field_dp_switch_card1_badge', 'label' => 'Badge', 'name' => 'sp_card1_badge', 'type' => 'text', 'default_value' => 'ONLINE ONLY' ),
            array( 'key' => 'field_dp_switch_card1_title', 'label' => 'Title', 'name' => 'sp_card1_title', 'type' => 'text', 'default_value' => 'National Providers' ),
            array( 'key' => 'field_dp_switch_card1_subtitle', 'label' => 'Subtitle', 'name' => 'sp_card1_subtitle', 'type' => 'text', 'default_value' => 'Remote-only weight loss services' ),
            array( 'key' => 'field_dp_switch_card1_price', 'label' => 'Price', 'name' => 'sp_card1_price', 'type' => 'text', 'default_value' => '£250+' ),
            array( 'key' => 'field_dp_switch_card1_price_period', 'label' => 'Price Period', 'name' => 'sp_card1_price_period', 'type' => 'text', 'default_value' => '/month' ),
            array( 'key' => 'field_dp_switch_card1_price_note', 'label' => 'Price Note', 'name' => 'sp_card1_price_note', 'type' => 'text', 'default_value' => 'Plus hidden consultation fees' ),
            array( 'key' => 'field_dp_switch_card1_footer', 'label' => 'Footer Text', 'name' => 'sp_card1_footer', 'type' => 'text', 'default_value' => 'What you\'re leaving behind' ),
            array(
                'key'           => 'field_dp_switch_card1_features',
                'label'         => 'Negative Features',
                'name'          => 'sp_card1_features',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 8,
                'layout'        => 'table',
                'button_label'  => 'Add Feature',
                'sub_fields'    => array(
                    array( 'key' => 'field_dp_switch_card1_f_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            // Card 2: Denton Pharmacy
            array( 'key' => 'field_dp_switch_card2_tab', 'label' => 'Card 2: Denton Pharmacy', 'type' => 'tab' ),
            array( 'key' => 'field_dp_switch_card2_recommended', 'label' => 'Recommended Badge', 'name' => 'sp_card2_recommended', 'type' => 'text', 'default_value' => 'RECOMMENDED' ),
            array( 'key' => 'field_dp_switch_card2_icon', 'label' => 'Icon Class', 'name' => 'sp_card2_icon', 'type' => 'text', 'default_value' => 'fas fa-heart-pulse' ),
            array( 'key' => 'field_dp_switch_card2_badge', 'label' => 'Badge', 'name' => 'sp_card2_badge', 'type' => 'text', 'default_value' => 'DENTON BASED' ),
            array( 'key' => 'field_dp_switch_card2_title', 'label' => 'Title', 'name' => 'sp_card2_title', 'type' => 'text', 'default_value' => 'Denton Pharmacy' ),
            array( 'key' => 'field_dp_switch_card2_subtitle', 'label' => 'Subtitle', 'name' => 'sp_card2_subtitle', 'type' => 'text', 'default_value' => 'Face-to-face weight loss care' ),
            array( 'key' => 'field_dp_switch_card2_price', 'label' => 'Price', 'name' => 'sp_card2_price', 'type' => 'text', 'default_value' => 'From £125' ),
            array( 'key' => 'field_dp_switch_card2_price_period', 'label' => 'Price Period', 'name' => 'sp_card2_price_period', 'type' => 'text', 'default_value' => '/month' ),
            array( 'key' => 'field_dp_switch_card2_price_note', 'label' => 'Price Note', 'name' => 'sp_card2_price_note', 'type' => 'text', 'default_value' => 'All-inclusive with face-to-face support' ),
            array( 'key' => 'field_dp_switch_card2_cta_text', 'label' => 'CTA Button Text', 'name' => 'sp_card2_cta_text', 'type' => 'text', 'default_value' => 'Make The Switch' ),
            array(
                'key'           => 'field_dp_switch_card2_features',
                'label'         => 'Positive Features',
                'name'          => 'sp_card2_features',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 8,
                'layout'        => 'table',
                'button_label'  => 'Add Feature',
                'sub_fields'    => array(
                    array( 'key' => 'field_dp_switch_card2_f_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            // Card 3: Benefits
            array( 'key' => 'field_dp_switch_card3_tab', 'label' => 'Card 3: Benefits', 'type' => 'tab' ),
            array( 'key' => 'field_dp_switch_card3_icon', 'label' => 'Icon Class', 'name' => 'sp_card3_icon', 'type' => 'text', 'default_value' => 'fas fa-trophy' ),
            array( 'key' => 'field_dp_switch_card3_badge', 'label' => 'Badge', 'name' => 'sp_card3_badge', 'type' => 'text', 'default_value' => 'YOUR BENEFITS' ),
            array( 'key' => 'field_dp_switch_card3_title', 'label' => 'Title', 'name' => 'sp_card3_title', 'type' => 'text', 'default_value' => 'What You Gain' ),
            array( 'key' => 'field_dp_switch_card3_subtitle', 'label' => 'Subtitle', 'name' => 'sp_card3_subtitle', 'type' => 'text', 'default_value' => 'The Denton Pharmacy advantage' ),
            array( 'key' => 'field_dp_switch_card3_value_title', 'label' => 'Value Title', 'name' => 'sp_card3_value_title', 'type' => 'text', 'default_value' => 'Better Value' ),
            array( 'key' => 'field_dp_switch_card3_value_subtitle', 'label' => 'Value Subtitle', 'name' => 'sp_card3_value_subtitle', 'type' => 'text', 'default_value' => 'Competitive pricing' ),
            array( 'key' => 'field_dp_switch_card3_cta_text', 'label' => 'CTA Button Text', 'name' => 'sp_card3_cta_text', 'type' => 'text', 'default_value' => 'Meet the Team' ),
            array(
                'key'           => 'field_dp_switch_card3_features',
                'label'         => 'Benefit Features',
                'name'          => 'sp_card3_features',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 8,
                'layout'        => 'table',
                'button_label'  => 'Add Feature',
                'sub_fields'    => array(
                    array( 'key' => 'field_dp_switch_card3_f_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $sp_location,
        'menu_order'            => 802,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H4. Switch Provider — Evidence / Comparison Detail Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_sp_evidence',
        'title'    => 'Switch Provider — Evidence Section',
        'fields'   => array(
            array( 'key' => 'field_dp_switch_evidence_badge', 'label' => 'Badge Text', 'name' => 'sp_evidence_badge', 'type' => 'text', 'default_value' => 'PROVEN RESULTS' ),
            array( 'key' => 'field_dp_switch_evidence_title_line1', 'label' => 'Title Line 1 (gradient)', 'name' => 'sp_evidence_title_line1', 'type' => 'text', 'default_value' => 'Real data.' ),
            array( 'key' => 'field_dp_switch_evidence_title_line2', 'label' => 'Title Line 2 (accent)', 'name' => 'sp_evidence_title_line2', 'type' => 'text', 'default_value' => 'Real results.' ),
            array( 'key' => 'field_dp_switch_evidence_subtitle', 'label' => 'Subtitle', 'name' => 'sp_evidence_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Evidence-based care with measurable outcomes from hundreds of Denton patients' ),
            array(
                'key'           => 'field_dp_switch_evidence_cards',
                'label'         => 'Evidence Cards',
                'name'          => 'sp_evidence_cards',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 9,
                'layout'        => 'block',
                'button_label'  => 'Add Evidence Card',
                'sub_fields'    => array(
                    array( 'key' => 'field_dp_switch_ev_number', 'label' => 'Stat Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'field_dp_switch_ev_label', 'label' => 'Stat Label', 'name' => 'label', 'type' => 'text' ),
                    array( 'key' => 'field_dp_switch_ev_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $sp_location,
        'menu_order'            => 803,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H5. Switch Provider — Benefits Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_sp_benefits',
        'title'    => 'Switch Provider — Benefits Section',
        'fields'   => array(
            array( 'key' => 'field_dp_switch_benefits_badge', 'label' => 'Badge Text', 'name' => 'sp_benefits_badge', 'type' => 'text', 'default_value' => 'WHY SWITCH' ),
            array( 'key' => 'field_dp_switch_benefits_title_line1', 'label' => 'Title Line 1 (gradient)', 'name' => 'sp_benefits_title_line1', 'type' => 'text', 'default_value' => 'The Benefits of' ),
            array( 'key' => 'field_dp_switch_benefits_title_line2', 'label' => 'Title Line 2 (accent)', 'name' => 'sp_benefits_title_line2', 'type' => 'text', 'default_value' => ' Switching' ),
            array( 'key' => 'field_dp_switch_benefits_description', 'label' => 'Description', 'name' => 'sp_benefits_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Discover why patients across Greater Manchester are choosing Denton Pharmacy for their weight loss care' ),
            array(
                'key'           => 'field_dp_switch_benefits',
                'label'         => 'Benefit Cards',
                'name'          => 'sp_benefits',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 9,
                'layout'        => 'block',
                'button_label'  => 'Add Benefit',
                'sub_fields'    => array(
                    array( 'key' => 'field_dp_switch_benefit_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle', 'instructions' => 'Font Awesome class, e.g. fas fa-user-doctor' ),
                    array( 'key' => 'field_dp_switch_benefit_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_switch_benefit_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $sp_location,
        'menu_order'            => 804,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H5b. Switch Provider — Social Proof Band
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_sp_band',
        'title'    => 'Switch Provider — Social Proof Band',
        'fields'   => array(
            array(
                'key'           => 'field_dp_sp_band_image',
                'label'         => 'Background Image',
                'name'          => 'sp_band_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Full-width lifestyle image. Recommended: 1920x800px.',
            ),
            array( 'key' => 'field_dp_sp_band_stat_number', 'label' => 'Stat Number', 'name' => 'sp_band_stat_number', 'type' => 'text', 'default_value' => '95%' ),
            array( 'key' => 'field_dp_sp_band_stat_label', 'label' => 'Stat Label', 'name' => 'sp_band_stat_label', 'type' => 'text', 'default_value' => 'of patients recommend switching to Denton Pharmacy' ),
            array( 'key' => 'field_dp_sp_band_quote', 'label' => 'Testimonial Quote', 'name' => 'sp_band_quote', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'I was with a national provider for months and felt like just a number. Switching to Ahmed at Denton Pharmacy changed everything — real face-to-face care, no waiting lists, and I\'ve lost 3 stone in 4 months.' ),
            array( 'key' => 'field_dp_sp_band_author', 'label' => 'Author Name', 'name' => 'sp_band_author', 'type' => 'text', 'default_value' => 'Sarah M.' ),
            array( 'key' => 'field_dp_sp_band_location', 'label' => 'Author Subtitle', 'name' => 'sp_band_location', 'type' => 'text', 'default_value' => 'Switched from National Provider' ),
            array( 'key' => 'field_dp_sp_band_result', 'label' => 'Result Badge', 'name' => 'sp_band_result', 'type' => 'text', 'default_value' => '3 Stone Lost', 'instructions' => 'Leave blank to hide.' ),
        ),
        'location'              => $sp_location,
        'menu_order'            => 555,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // H6. Switch Provider — Process Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_sp_process',
        'title'    => 'Switch Provider — How To Switch',
        'fields'   => array(
            array( 'key' => 'field_dp_switch_process_badge', 'label' => 'Badge Text', 'name' => 'sp_process_badge', 'type' => 'text', 'default_value' => 'HOW TO SWITCH' ),
            array( 'key' => 'field_dp_switch_process_title_line1', 'label' => 'Title Line 1 (gradient)', 'name' => 'sp_process_title_line1', 'type' => 'text', 'default_value' => 'Make The Switch' ),
            array( 'key' => 'field_dp_switch_process_title_line2', 'label' => 'Title Line 2 (accent)', 'name' => 'sp_process_title_line2', 'type' => 'text', 'default_value' => ' Today' ),
            array( 'key' => 'field_dp_switch_process_description', 'label' => 'Description', 'name' => 'sp_process_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Switch to Denton Pharmacy in under 5 minutes. Better support, better value, better results.' ),
            array(
                'key'           => 'field_dp_switch_process_steps',
                'label'         => 'Process Steps',
                'name'          => 'sp_process_steps',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 6,
                'layout'        => 'block',
                'button_label'  => 'Add Step',
                'instructions'  => 'Each step shows as a numbered tab and a content card with optional image.',
                'sub_fields'    => array(
                    array( 'key' => 'field_dp_switch_ps_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_switch_ps_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_dp_switch_ps_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'library' => 'all' ),
                ),
            ),
            // What's Included box
            array( 'key' => 'field_dp_switch_included_tab', 'label' => 'What\'s Included Box', 'type' => 'tab' ),
            array( 'key' => 'field_dp_switch_included_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'sp_included_eyebrow', 'type' => 'text', 'default_value' => 'Your complete switching package' ),
            array( 'key' => 'field_dp_switch_included_title', 'label' => 'Title', 'name' => 'sp_included_title', 'type' => 'text', 'default_value' => 'What\'s Included' ),
            array(
                'key'           => 'field_dp_switch_included_items',
                'label'         => 'Included Items',
                'name'          => 'sp_included_items',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Item',
                'sub_fields'    => array(
                    array( 'key' => 'field_dp_switch_ii_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_dp_switch_included_cta_text', 'label' => 'CTA Button Text', 'name' => 'sp_included_cta_text', 'type' => 'text', 'default_value' => 'Start Your Switch' ),
            array( 'key' => 'field_dp_switch_included_cta_url', 'label' => 'CTA Button URL', 'name' => 'sp_included_cta_url', 'type' => 'text', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'              => $sp_location,
        'menu_order'            => 805,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H7. Switch Provider — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_sp_cta',
        'title'    => 'Switch Provider — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_dp_switch_cta_title_line1', 'label' => 'Title Line 1', 'name' => 'sp_cta_title_line1', 'type' => 'text', 'default_value' => 'Ready to Make' ),
            array( 'key' => 'field_dp_switch_cta_title_line2', 'label' => 'Title Line 2', 'name' => 'sp_cta_title_line2', 'type' => 'text', 'default_value' => ' the Switch?' ),
            array( 'key' => 'field_dp_switch_cta_description', 'label' => 'Description', 'name' => 'sp_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Join hundreds of patients who\'ve chosen local, expert care over faceless online providers.' ),
            array( 'key' => 'field_dp_switch_cta_button_text', 'label' => 'CTA Button Text', 'name' => 'sp_cta_button_text', 'type' => 'text', 'default_value' => 'Start Your Switch Today' ),
            array( 'key' => 'field_dp_switch_cta_check_1', 'label' => 'Check 1', 'name' => 'sp_cta_check_1', 'type' => 'text', 'default_value' => 'No waiting list' ),
            array( 'key' => 'field_dp_switch_cta_check_2', 'label' => 'Check 2', 'name' => 'sp_cta_check_2', 'type' => 'text', 'default_value' => 'Same-day approval' ),
            array( 'key' => 'field_dp_switch_cta_check_3', 'label' => 'Check 3', 'name' => 'sp_cta_check_3', 'type' => 'text', 'default_value' => 'Transparent pricing' ),
        ),
        'location'              => $sp_location,
        'menu_order'            => 806,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // I. BOOK APPOINTMENT PAGE FIELDS
    // =========================================================================

    $book_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-book-appointment.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // I1. Book Appointment — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_hero',
        'title'    => 'Book Appointment — Hero',
        'fields'   => array(
            array( 'key' => 'field_dp_book_hero_badge', 'label' => 'Badge Text', 'name' => 'book_hero_badge', 'type' => 'text', 'default_value' => 'ONLINE BOOKING AVAILABLE' ),
            array( 'key' => 'field_dp_book_hero_title', 'label' => 'Title (HTML allowed)', 'name' => 'book_hero_title', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book Your <br /><span class="gradient-text">Appointment</span>', 'instructions' => 'HTML allowed for line breaks and gradient text spans.' ),
            array( 'key' => 'field_dp_book_hero_desc', 'label' => 'Description', 'name' => 'book_hero_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Choose your service below and find a time that suits you with our expert Denton team. Same-day appointments often available.' ),
            array( 'key' => 'field_dp_book_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'book_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Now' ),
            array( 'key' => 'field_dp_book_hero_image', 'label' => 'Hero Image', 'name' => 'book_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'instructions' => 'Image for the rotated card. Falls back to pharmacist photo from options.' ),
            array( 'key' => 'field_dp_book_hero_quote', 'label' => 'Testimonial Quote', 'name' => 'book_hero_quote', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Booking was so easy and Ahmed was fantastic. I was seen on time and the advice was excellent.' ),
            array( 'key' => 'field_dp_book_hero_quote_name', 'label' => 'Testimonial Name', 'name' => 'book_hero_quote_name', 'type' => 'text', 'default_value' => 'Sarah J.' ),
            array( 'key' => 'field_dp_book_hero_quote_badge', 'label' => 'Testimonial Badge', 'name' => 'book_hero_quote_badge', 'type' => 'text', 'default_value' => 'Verified Patient' ),
            array(
                'key'        => 'field_dp_book_hero_trust',
                'label'      => 'Trust Pills',
                'name'       => 'book_hero_trust_pills',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_dp_book_hero_trust_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle' ),
                    array( 'key' => 'field_dp_book_hero_trust_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 900,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I2. Book Appointment — How It Works
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_process',
        'title'    => 'Book Appointment — How It Works',
        'fields'   => array(
            array( 'key' => 'field_dp_book_process_title', 'label' => 'Title', 'name' => 'book_process_title', 'type' => 'text', 'default_value' => 'How It Works' ),
            array(
                'key'        => 'field_dp_book_process_steps',
                'label'      => 'Steps',
                'name'       => 'book_process_steps',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_dp_book_process_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-hand-pointer' ),
                    array( 'key' => 'field_dp_book_process_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_book_process_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 901,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I3. Book Appointment — Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_stats',
        'title'    => 'Book Appointment — Stats Bar',
        'fields'   => array(
            array(
                'key'        => 'field_dp_book_stats',
                'label'      => 'Stats',
                'name'       => 'book_stats',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_dp_book_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-clock' ),
                    array( 'key' => 'field_dp_book_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'field_dp_book_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 902,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I4. Book Appointment — Priority Services
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_services',
        'title'    => 'Book Appointment — Priority Services',
        'fields'   => array(
            array( 'key' => 'field_dp_book_services_badge', 'label' => 'Badge Text', 'name' => 'book_services_badge', 'type' => 'text', 'default_value' => 'MOST POPULAR' ),
            array( 'key' => 'field_dp_book_services_title', 'label' => 'Title', 'name' => 'book_services_title', 'type' => 'text', 'default_value' => 'Featured Services' ),
            array(
                'key'        => 'field_dp_book_priority_services',
                'label'      => 'Services',
                'name'       => 'book_priority_services',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_dp_book_ps_badge', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'instructions' => 'e.g. Most Popular. Leave blank to hide badge.' ),
                    array( 'key' => 'field_dp_book_ps_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-weight-scale' ),
                    array( 'key' => 'field_dp_book_ps_icon_color', 'label' => 'Icon Color', 'name' => 'icon_color', 'type' => 'select', 'choices' => array( '' => 'Default (Blue)', 'teal' => 'Teal', 'purple' => 'Purple' ), 'default_value' => '' ),
                    array( 'key' => 'field_dp_book_ps_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_book_ps_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_dp_book_ps_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text', 'instructions' => 'e.g. £125' ),
                    array( 'key' => 'field_dp_book_ps_price_label', 'label' => 'Price Label', 'name' => 'price_label', 'type' => 'text', 'instructions' => 'e.g. / month starting price' ),
                    array( 'key' => 'field_dp_book_ps_refund', 'label' => 'Refund Badge Text', 'name' => 'refund_text', 'type' => 'text', 'instructions' => 'Leave blank to hide. e.g. Refundable with 2+ vaccines' ),
                    array( 'key' => 'field_dp_book_ps_btn', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 903,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I5. Book Appointment — Additional Services
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_additional',
        'title'    => 'Book Appointment — Additional Services',
        'fields'   => array(
            array( 'key' => 'field_dp_book_add_badge', 'label' => 'Badge Text', 'name' => 'book_additional_badge', 'type' => 'text', 'default_value' => 'ESSENTIAL HEALTHCARE' ),
            array( 'key' => 'field_dp_book_add_title', 'label' => 'Title', 'name' => 'book_additional_title', 'type' => 'text', 'default_value' => 'Everyday Health Services' ),
            array(
                'key'        => 'field_dp_book_additional_services',
                'label'      => 'Services',
                'name'       => 'book_additional_services',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_dp_book_as_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe' ),
                    array( 'key' => 'field_dp_book_as_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_book_as_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_dp_book_as_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text', 'instructions' => 'e.g. £15 or VARIES' ),
                    array( 'key' => 'field_dp_book_as_btn', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text', 'default_value' => 'Book Service' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 904,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I6. Book Appointment — Amelia Booking Widget
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_amelia',
        'title'    => 'Book Appointment — Booking Widget',
        'fields'   => array(
            array( 'key' => 'field_dp_book_amelia_title', 'label' => 'Title', 'name' => 'book_amelia_title', 'type' => 'text', 'default_value' => 'Select Your Appointment Time' ),
            array( 'key' => 'field_dp_book_amelia_desc', 'label' => 'Description', 'name' => 'book_amelia_description', 'type' => 'text', 'default_value' => 'Choose a convenient time with our Denton healthcare team' ),
            array( 'key' => 'field_dp_book_amelia_shortcode', 'label' => 'Amelia Shortcode', 'name' => 'book_amelia_shortcode', 'type' => 'text', 'default_value' => '[ameliabooking]', 'instructions' => 'The Amelia booking plugin shortcode to embed. e.g. [ameliabooking] or [ameliabooking category=1]' ),
        ),
        'location'              => $book_location,
        'menu_order'            => 905,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I7. Book Appointment — Testimonials
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_testimonials',
        'title'    => 'Book Appointment — Testimonials',
        'fields'   => array(
            array( 'key' => 'field_dp_book_testi_title', 'label' => 'Title', 'name' => 'book_testimonials_title', 'type' => 'text', 'default_value' => 'What Our Patients Say' ),
            array(
                'key'        => 'field_dp_book_testimonials',
                'label'      => 'Testimonials',
                'name'       => 'book_testimonials',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_dp_book_testi_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'field_dp_book_testi_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                    array( 'key' => 'field_dp_book_testi_service', 'label' => 'Service', 'name' => 'service', 'type' => 'text', 'instructions' => 'e.g. Travel Health Patient' ),
                    array( 'key' => 'field_dp_book_testi_avatar', 'label' => 'Avatar', 'name' => 'avatar', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'thumbnail' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 906,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I8. Book Appointment — FAQ
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_faq',
        'title'    => 'Book Appointment — FAQ',
        'fields'   => array(
            array( 'key' => 'field_dp_book_faq_badge', 'label' => 'Badge Text', 'name' => 'book_faq_badge', 'type' => 'text', 'default_value' => 'EVERYTHING YOU NEED TO KNOW' ),
            array( 'key' => 'field_dp_book_faq_title', 'label' => 'Title', 'name' => 'book_faq_title', 'type' => 'text', 'default_value' => 'Common Questions' ),
            array( 'key' => 'field_dp_book_faq_desc', 'label' => 'Description', 'name' => 'book_faq_description', 'type' => 'text', 'default_value' => 'Clear answers about our services, location, and team to help you book with confidence.' ),
            array(
                'key'        => 'field_dp_book_faqs',
                'label'      => 'FAQs',
                'name'       => 'book_faqs',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 10,
                'sub_fields' => array(
                    array( 'key' => 'field_dp_book_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_book_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 907,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I9. Book Appointment — Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_book_cta',
        'title'    => 'Book Appointment — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_dp_book_cta_title', 'label' => 'Title', 'name' => 'book_cta_title', 'type' => 'text', 'default_value' => 'Need Help Booking?' ),
            array( 'key' => 'field_dp_book_cta_desc', 'label' => 'Description', 'name' => 'book_cta_description', 'type' => 'text', 'default_value' => 'Our friendly Denton team is here to answer your questions' ),
            array( 'key' => 'field_dp_book_cta_hours', 'label' => 'Hours Text', 'name' => 'book_cta_hours', 'type' => 'text', 'default_value' => 'Mon-Fri: 9am-6pm' ),
        ),
        'location'              => $book_location,
        'menu_order'            => 908,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // SERIES J: TEAM PAGE (J1–J5)
    // =========================================================================
    $team_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-team.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // J1. Team — Hero
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_team_hero',
        'title'    => 'Team — Hero',
        'fields'   => array(
            array( 'key' => 'field_dp_team_hero_badge', 'label' => 'Badge Text', 'name' => 'team_hero_badge', 'type' => 'text', 'default_value' => 'MEET THE EXPERTS' ),
            array( 'key' => 'field_dp_team_hero_title1', 'label' => 'Title Line 1', 'name' => 'team_hero_title_line1', 'type' => 'text', 'default_value' => 'Your Health,' ),
            array( 'key' => 'field_dp_team_hero_highlight', 'label' => 'Title Highlight', 'name' => 'team_hero_title_highlight', 'type' => 'text', 'default_value' => 'Our Passion', 'instructions' => 'Displayed with gradient text effect' ),
            array( 'key' => 'field_dp_team_hero_desc', 'label' => 'Description', 'name' => 'team_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'We are a dedicated team of experienced clinicians committed to the health of Denton. Combining over 15 years of expertise with a modern, personal approach to care.' ),
        ),
        'location'              => $team_location,
        'menu_order'            => 1000,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J2. Team — Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_team_stats',
        'title'    => 'Team — Stats Bar',
        'fields'   => array(
            array(
                'key'        => 'field_dp_team_stats',
                'label'      => 'Stats',
                'name'       => 'team_stats',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 6,
                'button_label' => 'Add Stat',
                'sub_fields' => array(
                    array( 'key' => 'field_dp_team_stat_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fa-calendar-check', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_team_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_team_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'              => $team_location,
        'menu_order'            => 1001,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J3. Team — Team Members
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_team_members',
        'title'    => 'Team — Team Members',
        'fields'   => array(
            array(
                'key'        => 'field_dp_team_members',
                'label'      => 'Team Members',
                'name'       => 'team_members',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 10,
                'button_label' => 'Add Team Member',
                'sub_fields' => array(
                    array( 'key' => 'field_dp_team_member_image', 'label' => 'Photo', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
                    array( 'key' => 'field_dp_team_member_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                    array( 'key' => 'field_dp_team_member_role', 'label' => 'Role', 'name' => 'role', 'type' => 'text' ),
                    array( 'key' => 'field_dp_team_member_gphc', 'label' => 'GPhC Number', 'name' => 'gphc_number', 'type' => 'text', 'instructions' => 'GPhC registration number (e.g. 2208502). Auto-builds the verify link URL.' ),
                    array( 'key' => 'field_dp_team_member_gphc_url', 'label' => 'GPhC Verify URL', 'name' => 'gphc_url', 'type' => 'url', 'instructions' => 'Override verify link URL. Use for non-pharmacist staff (e.g. https://www.pharmacyregulation.org/registers).' ),
                    array( 'key' => 'field_dp_team_member_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'instructions' => 'Overlay badge on photo, e.g. Lead Pharmacist' ),
                    array(
                        'key'     => 'field_dp_team_member_badge_type',
                        'label'   => 'Badge Type',
                        'name'    => 'badge_type',
                        'type'    => 'select',
                        'choices' => array(
                            'founder'  => 'Founder (gradient)',
                            'director' => 'Director (white)',
                            'senior'   => 'Senior (glassmorphic)',
                        ),
                        'default_value' => 'founder',
                    ),
                    array(
                        'key'        => 'field_dp_team_member_creds',
                        'label'      => 'Credentials',
                        'name'       => 'credentials',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'min'        => 0,
                        'max'        => 5,
                        'button_label' => 'Add Credential',
                        'sub_fields' => array(
                            array( 'key' => 'field_dp_team_member_cred', 'label' => 'Credential', 'name' => 'credential', 'type' => 'text' ),
                        ),
                    ),
                    array( 'key' => 'field_dp_team_member_bio', 'label' => 'Bio', 'name' => 'bio', 'type' => 'textarea', 'rows' => 3 ),
                    array(
                        'key'        => 'field_dp_team_member_specs',
                        'label'      => 'Specialties',
                        'name'       => 'specialties',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'min'        => 0,
                        'max'        => 6,
                        'button_label' => 'Add Specialty',
                        'sub_fields' => array(
                            array( 'key' => 'field_dp_team_member_spec', 'label' => 'Specialty', 'name' => 'specialty', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
        ),
        'location'              => $team_location,
        'menu_order'            => 1002,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J4. Team — Values
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_team_values',
        'title'    => 'Team — Values',
        'fields'   => array(
            array( 'key' => 'field_dp_team_values_badge', 'label' => 'Badge Text', 'name' => 'team_values_badge', 'type' => 'text', 'default_value' => 'OUR PHILOSOPHY' ),
            array( 'key' => 'field_dp_team_values_title', 'label' => 'Title', 'name' => 'team_values_title', 'type' => 'text', 'default_value' => 'What Drives Us' ),
            array( 'key' => 'field_dp_team_values_desc', 'label' => 'Description', 'name' => 'team_values_description', 'type' => 'text', 'default_value' => 'The principles that guide every consultation' ),
            array(
                'key'        => 'field_dp_team_values',
                'label'      => 'Values',
                'name'       => 'team_values',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'button_label' => 'Add Value',
                'sub_fields' => array(
                    array( 'key' => 'field_dp_team_value_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fa-heart' ),
                    array( 'key' => 'field_dp_team_value_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_team_value_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $team_location,
        'menu_order'            => 1003,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J5. Team — Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_team_cta',
        'title'    => 'Team — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_dp_team_cta_badge1', 'label' => 'Badge 1', 'name' => 'team_cta_badge_1', 'type' => 'text', 'default_value' => '15+ Years Experience' ),
            array( 'key' => 'field_dp_team_cta_badge2', 'label' => 'Badge 2', 'name' => 'team_cta_badge_2', 'type' => 'text', 'default_value' => 'GPhC Registered' ),
            array( 'key' => 'field_dp_team_cta_badge3', 'label' => 'Badge 3', 'name' => 'team_cta_badge_3', 'type' => 'text', 'default_value' => 'Patient-First Care' ),
            array( 'key' => 'field_dp_team_cta_title', 'label' => 'Title', 'name' => 'team_cta_title', 'type' => 'text', 'default_value' => 'Experience the Denton Pharmacy Difference' ),
            array( 'key' => 'field_dp_team_cta_desc', 'label' => 'Description', 'name' => 'team_cta_description', 'type' => 'text', 'default_value' => 'Book your consultation with our experienced Denton team today. Personal care, professional expertise.' ),
            array( 'key' => 'field_dp_team_cta_url', 'label' => 'CTA URL', 'name' => 'team_cta_url', 'type' => 'url', 'default_value' => '/book-appointment/' ),
            array( 'key' => 'field_dp_team_cta_btn', 'label' => 'CTA Button Text', 'name' => 'team_cta_button_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_dp_team_cta_trust1', 'label' => 'Trust Item 1', 'name' => 'team_cta_trust_1', 'type' => 'text', 'default_value' => 'Expert team' ),
            array( 'key' => 'field_dp_team_cta_trust2', 'label' => 'Trust Item 2', 'name' => 'team_cta_trust_2', 'type' => 'text', 'default_value' => 'Same-day appointments' ),
            array( 'key' => 'field_dp_team_cta_trust3', 'label' => 'Trust Item 3', 'name' => 'team_cta_trust_3', 'type' => 'text', 'default_value' => '15+ years serving Denton' ),
        ),
        'location'              => $team_location,
        'menu_order'            => 1004,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );
    // =========================================================================
    // SERIES K: VACCINATION PAGES (K1–K10)
    // K1–K9 shared across Rabies, Hepatitis, Typhoid (vaccine_* fields)
    // K10 for Yellow Fever only (yf_* fields)
    // =========================================================================
    $vaccine_location = array(
        array(
            array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-rabies.php' ),
        ),
        array(
            array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-hepatitis.php' ),
        ),
        array(
            array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-typhoid.php' ),
        ),
    );

    $yf_location = array(
        array(
            array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-yellow-fever.php' ),
        ),
    );

    // -------------------------------------------------------------------------
    // K1. Vaccination — Hero
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_hero',
        'title'    => 'Vaccination — Hero',
        'fields'   => array(
            array( 'key' => 'field_dp_vaccine_name', 'label' => 'Vaccine Name', 'name' => 'vaccine_name', 'type' => 'text', 'instructions' => 'e.g. Rabies, Hepatitis, Typhoid' ),
            array( 'key' => 'field_dp_vaccine_parent_url', 'label' => 'Parent Page URL', 'name' => 'vaccine_parent_url', 'type' => 'url', 'default_value' => '/travel-health/' ),
            array( 'key' => 'field_dp_vaccine_hero_image', 'label' => 'Hero Background Image', 'name' => 'vaccine_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_vaccine_hero_label', 'label' => 'Hero Label', 'name' => 'vaccine_hero_label', 'type' => 'text', 'default_value' => 'TRAVEL HEALTH PROTECTION' ),
            array( 'key' => 'field_dp_vaccine_hero_title', 'label' => 'Hero Title', 'name' => 'vaccine_hero_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_hero_desc', 'label' => 'Hero Description', 'name' => 'vaccine_hero_description', 'type' => 'textarea', 'rows' => 3 ),
            array( 'key' => 'field_dp_vaccine_cta_url', 'label' => 'CTA URL', 'name' => 'vaccine_cta_url', 'type' => 'url', 'default_value' => '/book-appointment/' ),
            array( 'key' => 'field_dp_vaccine_cta_text', 'label' => 'CTA Button Text', 'name' => 'vaccine_cta_text', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_phone', 'label' => 'Phone (digits)', 'name' => 'vaccine_phone', 'type' => 'text', 'default_value' => '01613362548' ),
            array( 'key' => 'field_dp_vaccine_phone_display', 'label' => 'Phone (display)', 'name' => 'vaccine_phone_display', 'type' => 'text', 'default_value' => 'Call 0161 336 2548' ),
            array(
                'key'          => 'field_dp_vaccine_hero_badges',
                'label'        => 'Hero Badges',
                'name'         => 'vaccine_hero_badges',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 5,
                'button_label' => 'Add Badge',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_hero_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1100,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K2. Vaccination — Protection Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_protect',
        'title'    => 'Vaccination — Protection',
        'fields'   => array(
            array( 'key' => 'field_dp_vaccine_protect_badge', 'label' => 'Badge Text', 'name' => 'vaccine_protect_badge', 'type' => 'text', 'default_value' => 'ESSENTIAL PROTECTION' ),
            array( 'key' => 'field_dp_vaccine_protect_title', 'label' => 'Title', 'name' => 'vaccine_protect_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_protect_desc', 'label' => 'Description', 'name' => 'vaccine_protect_desc', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_protect_image', 'label' => 'Image', 'name' => 'vaccine_protect_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_vaccine_protect_image_alt', 'label' => 'Image Alt', 'name' => 'vaccine_protect_image_alt', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_protect_nametag_name', 'label' => 'Nametag Name', 'name' => 'vaccine_protect_nametag_name', 'type' => 'text', 'default_value' => 'Expert Care' ),
            array( 'key' => 'field_dp_vaccine_protect_nametag_role', 'label' => 'Nametag Role', 'name' => 'vaccine_protect_nametag_role', 'type' => 'text', 'default_value' => 'Travel Health Team' ),
            array( 'key' => 'field_dp_vaccine_protect_highlight', 'label' => 'Highlight Text', 'name' => 'vaccine_protect_highlight', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_protect_subtitle', 'label' => 'Subtitle', 'name' => 'vaccine_protect_subtitle', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_protect_text', 'label' => 'Body Text', 'name' => 'vaccine_protect_text', 'type' => 'textarea', 'rows' => 4 ),
            array(
                'key'          => 'field_dp_vaccine_protect_features',
                'label'        => 'Features',
                'name'         => 'vaccine_protect_features',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Feature',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_pf_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class' ),
                    array( 'key' => 'field_dp_vaccine_pf_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_pf_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1101,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K3. Vaccination — Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_stats',
        'title'    => 'Vaccination — Stats Bar',
        'fields'   => array(
            array(
                'key'          => 'field_dp_vaccine_stats',
                'label'        => 'Stats',
                'name'         => 'vaccine_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_stat_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_vaccine_stat_num', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_vaccine_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1102,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K4. Vaccination — About Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_about',
        'title'    => 'Vaccination — About',
        'fields'   => array(
            array( 'key' => 'field_dp_vaccine_about_badge', 'label' => 'Badge Text', 'name' => 'vaccine_about_badge', 'type' => 'text', 'default_value' => 'KNOW THE RISKS' ),
            array( 'key' => 'field_dp_vaccine_about_title', 'label' => 'Title', 'name' => 'vaccine_about_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_about_desc', 'label' => 'Description', 'name' => 'vaccine_about_desc', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_about_image', 'label' => 'Image', 'name' => 'vaccine_about_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_vaccine_about_image_alt', 'label' => 'Image Alt', 'name' => 'vaccine_about_image_alt', 'type' => 'text' ),
            array(
                'key'          => 'field_dp_vaccine_about_cards',
                'label'        => 'Info Cards',
                'name'         => 'vaccine_about_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_ac_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_ac_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_ac_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
            array( 'key' => 'field_dp_vaccine_callout_badge', 'label' => 'Callout Badge', 'name' => 'vaccine_callout_badge', 'type' => 'text', 'default_value' => 'CRITICAL WARNING' ),
            array( 'key' => 'field_dp_vaccine_callout_title', 'label' => 'Callout Title', 'name' => 'vaccine_callout_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_callout_text', 'label' => 'Callout Text', 'name' => 'vaccine_callout_text', 'type' => 'textarea', 'rows' => 3 ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1103,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K5. Vaccination — Who Needs It
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_needs',
        'title'    => 'Vaccination — Who Needs It',
        'fields'   => array(
            array( 'key' => 'field_dp_vaccine_needs_badge', 'label' => 'Badge Text', 'name' => 'vaccine_needs_badge', 'type' => 'text', 'default_value' => 'WHO NEEDS VACCINATION' ),
            array( 'key' => 'field_dp_vaccine_needs_title', 'label' => 'Title', 'name' => 'vaccine_needs_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_needs_desc', 'label' => 'Description', 'name' => 'vaccine_needs_desc', 'type' => 'text' ),
            array(
                'key'          => 'field_dp_vaccine_needs_cards',
                'label'        => 'Needs Cards',
                'name'         => 'vaccine_needs_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_nc_type', 'label' => 'Type', 'name' => 'type', 'type' => 'select', 'choices' => array( 'recommended' => 'Recommended (green)', 'consider' => 'Consider (amber)', 'required' => 'Required (red)' ), 'default_value' => 'recommended' ),
                    array( 'key' => 'field_dp_vaccine_nc_badge', 'label' => 'Badge', 'name' => 'badge', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_nc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_nc_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'          => 'field_dp_vaccine_nc_items',
                        'label'        => 'Checklist Items',
                        'name'         => 'items',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'min'          => 0,
                        'max'          => 6,
                        'button_label' => 'Add Item',
                        'sub_fields'   => array(
                            array( 'key' => 'field_dp_vaccine_nc_item_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1104,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K6. Vaccination — Risk Zones
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_risk',
        'title'    => 'Vaccination — Risk Zones',
        'fields'   => array(
            array( 'key' => 'field_dp_vaccine_risk_badge', 'label' => 'Badge Text', 'name' => 'vaccine_risk_badge', 'type' => 'text', 'default_value' => 'GLOBAL RISK ZONES' ),
            array( 'key' => 'field_dp_vaccine_risk_title', 'label' => 'Title', 'name' => 'vaccine_risk_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_risk_desc', 'label' => 'Description', 'name' => 'vaccine_risk_desc', 'type' => 'textarea', 'rows' => 2 ),
            array(
                'key'          => 'field_dp_vaccine_risk_zones',
                'label'        => 'Risk Zones',
                'name'         => 'vaccine_risk_zones',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Zone',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_rz_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
                    array( 'key' => 'field_dp_vaccine_rz_level', 'label' => 'Risk Level', 'name' => 'level', 'type' => 'select', 'choices' => array( 'high' => 'High (red)', 'moderate' => 'Moderate (amber)', 'asia' => 'Asia (amber)', 'africa' => 'Africa (blue)' ), 'default_value' => 'high' ),
                    array( 'key' => 'field_dp_vaccine_rz_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_rz_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_rz_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'          => 'field_dp_vaccine_rz_countries',
                        'label'        => 'Countries',
                        'name'         => 'countries',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'min'          => 0,
                        'max'          => 12,
                        'button_label' => 'Add Country',
                        'sub_fields'   => array(
                            array( 'key' => 'field_dp_vaccine_rz_country', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
            array( 'key' => 'field_dp_vaccine_risk_footer', 'label' => 'Footer Text', 'name' => 'vaccine_risk_footer', 'type' => 'text' ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1105,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K7. Vaccination — Details
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_details',
        'title'    => 'Vaccination — Details',
        'fields'   => array(
            array( 'key' => 'field_dp_vaccine_details_badge', 'label' => 'Badge Text', 'name' => 'vaccine_details_badge', 'type' => 'text', 'default_value' => 'VACCINATION DETAILS' ),
            array( 'key' => 'field_dp_vaccine_details_title', 'label' => 'Title', 'name' => 'vaccine_details_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_details_desc', 'label' => 'Description', 'name' => 'vaccine_details_desc', 'type' => 'text' ),
            array(
                'key'          => 'field_dp_vaccine_details',
                'label'        => 'Detail Cards',
                'name'         => 'vaccine_details',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 8,
                'button_label' => 'Add Detail',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_det_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_det_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_det_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1106,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K8. Vaccination — FAQ
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_faq',
        'title'    => 'Vaccination — FAQ',
        'fields'   => array(
            array( 'key' => 'field_dp_vaccine_faq_badge', 'label' => 'Badge Text', 'name' => 'vaccine_faq_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_faq_title', 'label' => 'Title', 'name' => 'vaccine_faq_title', 'type' => 'text', 'default_value' => 'Common Questions' ),
            array(
                'key'          => 'field_dp_vaccine_faqs',
                'label'        => 'FAQs',
                'name'         => 'vaccine_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_vaccine_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1107,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K9. Vaccination — Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_vaccine_cta',
        'title'    => 'Vaccination — Final CTA',
        'fields'   => array(
            array(
                'key'          => 'field_dp_vaccine_cta_badges',
                'label'        => 'CTA Badges',
                'name'         => 'vaccine_cta_badges',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 5,
                'button_label' => 'Add Badge',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_vaccine_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_dp_vaccine_cta_title', 'label' => 'Title', 'name' => 'vaccine_cta_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_vaccine_cta_desc', 'label' => 'Description', 'name' => 'vaccine_cta_desc', 'type' => 'textarea', 'rows' => 2 ),
        ),
        'location'              => $vaccine_location,
        'menu_order'            => 1108,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K10. Yellow Fever — All Sections (yf_* fields)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_hero',
        'title'    => 'Yellow Fever — Hero',
        'fields'   => array(
            array( 'key' => 'field_dp_yf_parent_url', 'label' => 'Parent Page URL', 'name' => 'yf_parent_url', 'type' => 'url', 'default_value' => '/travel-health/' ),
            array( 'key' => 'field_dp_yf_hero_image', 'label' => 'Hero Background Image', 'name' => 'yf_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_yf_hero_label', 'label' => 'Hero Label', 'name' => 'yf_hero_label', 'type' => 'text', 'default_value' => 'OFFICIAL YELLOW FEVER CENTRE' ),
            array( 'key' => 'field_dp_yf_hero_title', 'label' => 'Hero Title', 'name' => 'yf_hero_title', 'type' => 'text', 'default_value' => 'Yellow Fever Vaccination Service in Denton' ),
            array( 'key' => 'field_dp_yf_hero_desc', 'label' => 'Hero Description', 'name' => 'yf_hero_description', 'type' => 'textarea', 'rows' => 3 ),
            array( 'key' => 'field_dp_yf_hero_cta_url', 'label' => 'CTA URL', 'name' => 'yf_hero_cta_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_yf_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'yf_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Yellow Fever Vaccination' ),
            array(
                'key'          => 'field_dp_yf_hero_badges',
                'label'        => 'Hero Badges',
                'name'         => 'yf_hero_badges',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 5,
                'button_label' => 'Add Badge',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_hero_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1200,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_cert',
        'title'    => 'Yellow Fever — Certification',
        'fields'   => array(
            array( 'key' => 'field_dp_yf_cert_badge', 'label' => 'Badge Text', 'name' => 'yf_cert_badge', 'type' => 'text', 'default_value' => 'OFFICIAL CENTRE' ),
            array( 'key' => 'field_dp_yf_cert_title', 'label' => 'Title', 'name' => 'yf_cert_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_cert_desc', 'label' => 'Description', 'name' => 'yf_cert_desc', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_cert_image', 'label' => 'Image', 'name' => 'yf_cert_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_yf_cert_nametag_name', 'label' => 'Nametag Name', 'name' => 'yf_cert_nametag_name', 'type' => 'text', 'default_value' => 'Ahmed Al-Liabi' ),
            array( 'key' => 'field_dp_yf_cert_nametag_role', 'label' => 'Nametag Role', 'name' => 'yf_cert_nametag_role', 'type' => 'text', 'default_value' => 'Lead Pharmacist & Yellow Fever Specialist' ),
            array( 'key' => 'field_dp_yf_cert_highlight', 'label' => 'Highlight Text', 'name' => 'yf_cert_highlight', 'type' => 'text', 'default_value' => 'NHS Designated Yellow Fever Centre' ),
            array( 'key' => 'field_dp_yf_cert_subtitle', 'label' => 'Subtitle', 'name' => 'yf_cert_subtitle', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_cert_text', 'label' => 'Body Text', 'name' => 'yf_cert_text', 'type' => 'textarea', 'rows' => 4 ),
            array(
                'key'          => 'field_dp_yf_cert_features',
                'label'        => 'Features',
                'name'         => 'yf_cert_features',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Feature',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_cf_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_cf_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_cf_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
            array( 'key' => 'field_dp_yf_cert_cta_url', 'label' => 'CTA URL', 'name' => 'yf_cert_cta_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_yf_cert_cta_text', 'label' => 'CTA Button Text', 'name' => 'yf_cert_cta_text', 'type' => 'text', 'default_value' => 'Book Yellow Fever Vaccination' ),
            array( 'key' => 'field_dp_yf_cert_callout_badge', 'label' => 'Callout Badge', 'name' => 'yf_cert_callout_badge', 'type' => 'text', 'default_value' => 'IMPORTANT' ),
            array( 'key' => 'field_dp_yf_cert_callout_title', 'label' => 'Callout Title', 'name' => 'yf_cert_callout_title', 'type' => 'text', 'default_value' => '10-Day Validity Rule' ),
            array( 'key' => 'field_dp_yf_cert_callout_text', 'label' => 'Callout Text', 'name' => 'yf_cert_callout_text', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_yf_cert_callout_note', 'label' => 'Callout Note', 'name' => 'yf_cert_callout_note', 'type' => 'text' ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1201,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_stats',
        'title'    => 'Yellow Fever — Stats Bar',
        'fields'   => array(
            array(
                'key'          => 'field_dp_yf_stats',
                'label'        => 'Stats',
                'name'         => 'yf_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_stat_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_yf_stat_num', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_yf_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1202,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_about',
        'title'    => 'Yellow Fever — About',
        'fields'   => array(
            array( 'key' => 'field_dp_yf_about_badge', 'label' => 'Badge Text', 'name' => 'yf_about_badge', 'type' => 'text', 'default_value' => 'ABOUT THE DISEASE' ),
            array( 'key' => 'field_dp_yf_about_title', 'label' => 'Title', 'name' => 'yf_about_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_about_desc', 'label' => 'Description', 'name' => 'yf_about_desc', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_about_image', 'label' => 'Image', 'name' => 'yf_about_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array(
                'key'          => 'field_dp_yf_about_cards',
                'label'        => 'Info Cards',
                'name'         => 'yf_about_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_ac_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_ac_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_ac_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
            array( 'key' => 'field_dp_yf_about_callout_badge', 'label' => 'Callout Badge', 'name' => 'yf_about_callout_badge', 'type' => 'text', 'default_value' => 'SERIOUS RISK' ),
            array( 'key' => 'field_dp_yf_about_callout_title', 'label' => 'Callout Title', 'name' => 'yf_about_callout_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_about_callout_text', 'label' => 'Callout Text', 'name' => 'yf_about_callout_text', 'type' => 'textarea', 'rows' => 3 ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1203,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_needs',
        'title'    => 'Yellow Fever — Who Needs It',
        'fields'   => array(
            array( 'key' => 'field_dp_yf_needs_badge', 'label' => 'Badge Text', 'name' => 'yf_needs_badge', 'type' => 'text', 'default_value' => 'WHO NEEDS VACCINATION' ),
            array( 'key' => 'field_dp_yf_needs_title', 'label' => 'Title', 'name' => 'yf_needs_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_needs_desc', 'label' => 'Description', 'name' => 'yf_needs_desc', 'type' => 'text' ),
            array(
                'key'          => 'field_dp_yf_needs_cards',
                'label'        => 'Needs Cards',
                'name'         => 'yf_needs_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_nc_type', 'label' => 'Type', 'name' => 'type', 'type' => 'select', 'choices' => array( 'required' => 'Required (red)', 'recommended' => 'Recommended (amber)' ), 'default_value' => 'required' ),
                    array( 'key' => 'field_dp_yf_nc_badge', 'label' => 'Badge', 'name' => 'badge', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_nc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_nc_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'          => 'field_dp_yf_nc_items',
                        'label'        => 'Checklist Items',
                        'name'         => 'items',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'min'          => 0,
                        'max'          => 6,
                        'button_label' => 'Add Item',
                        'sub_fields'   => array(
                            array( 'key' => 'field_dp_yf_nc_item_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
            array( 'key' => 'field_dp_yf_needs_info', 'label' => 'Info Text', 'name' => 'yf_needs_info', 'type' => 'text' ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1204,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_risk',
        'title'    => 'Yellow Fever — Risk Countries',
        'fields'   => array(
            array( 'key' => 'field_dp_yf_risk_badge', 'label' => 'Badge Text', 'name' => 'yf_risk_badge', 'type' => 'text', 'default_value' => 'RISK COUNTRIES' ),
            array( 'key' => 'field_dp_yf_risk_title', 'label' => 'Title', 'name' => 'yf_risk_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_risk_desc', 'label' => 'Description', 'name' => 'yf_risk_desc', 'type' => 'textarea', 'rows' => 2 ),
            array(
                'key'          => 'field_dp_yf_risk_stats',
                'label'        => 'Risk Stats',
                'name'         => 'yf_risk_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_rs_num', 'label' => 'Number', 'name' => 'num', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_rs_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_rs_sub', 'label' => 'Subtitle', 'name' => 'sub', 'type' => 'text' ),
                ),
            ),
            array(
                'key'          => 'field_dp_yf_risk_zones',
                'label'        => 'Risk Zones',
                'name'         => 'yf_risk_zones',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Zone',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_rz_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
                    array( 'key' => 'field_dp_yf_rz_level', 'label' => 'Region', 'name' => 'level', 'type' => 'select', 'choices' => array( 'africa' => 'Africa (amber)', 'america' => 'Americas (blue)' ), 'default_value' => 'africa' ),
                    array( 'key' => 'field_dp_yf_rz_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_rz_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_rz_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_dp_yf_rz_note', 'label' => 'Note', 'name' => 'note', 'type' => 'text' ),
                    array(
                        'key'          => 'field_dp_yf_rz_countries',
                        'label'        => 'Countries',
                        'name'         => 'countries',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'min'          => 0,
                        'max'          => 12,
                        'button_label' => 'Add Country',
                        'sub_fields'   => array(
                            array( 'key' => 'field_dp_yf_rz_country', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
            array( 'key' => 'field_dp_yf_risk_callout_title', 'label' => 'Callout Title', 'name' => 'yf_risk_callout_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_risk_callout_text', 'label' => 'Callout Text', 'name' => 'yf_risk_callout_text', 'type' => 'textarea', 'rows' => 2 ),
            array(
                'key'          => 'field_dp_yf_risk_callout_badges',
                'label'        => 'Callout Badges',
                'name'         => 'yf_risk_callout_badges',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Badge',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_rcb_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_dp_yf_risk_footer_text', 'label' => 'Footer Text', 'name' => 'yf_risk_footer_text', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_risk_cta_url', 'label' => 'CTA URL', 'name' => 'yf_risk_cta_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_yf_risk_cta_text', 'label' => 'CTA Button Text', 'name' => 'yf_risk_cta_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1205,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_details',
        'title'    => 'Yellow Fever — Details',
        'fields'   => array(
            array( 'key' => 'field_dp_yf_details_badge', 'label' => 'Badge Text', 'name' => 'yf_details_badge', 'type' => 'text', 'default_value' => 'YOUR APPOINTMENT' ),
            array( 'key' => 'field_dp_yf_details_title', 'label' => 'Title', 'name' => 'yf_details_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_details_desc', 'label' => 'Description', 'name' => 'yf_details_desc', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_details_hero_image', 'label' => 'Hero Image', 'name' => 'yf_details_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array(
                'key'          => 'field_dp_yf_details',
                'label'        => 'Detail Cards',
                'name'         => 'yf_details',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 8,
                'button_label' => 'Add Detail',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_det_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_det_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_det_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1206,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_faq',
        'title'    => 'Yellow Fever — FAQ',
        'fields'   => array(
            array( 'key' => 'field_dp_yf_faq_badge', 'label' => 'Badge Text', 'name' => 'yf_faq_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_faq_title', 'label' => 'Title', 'name' => 'yf_faq_title', 'type' => 'text', 'default_value' => 'Common Questions' ),
            array( 'key' => 'field_dp_yf_faq_desc', 'label' => 'Description', 'name' => 'yf_faq_desc', 'type' => 'text' ),
            array(
                'key'          => 'field_dp_yf_faqs',
                'label'        => 'FAQs',
                'name'         => 'yf_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_yf_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1207,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_dp_yf_cta',
        'title'    => 'Yellow Fever — Final CTA',
        'fields'   => array(
            array(
                'key'          => 'field_dp_yf_cta_badges',
                'label'        => 'CTA Badges',
                'name'         => 'yf_cta_badges',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 5,
                'button_label' => 'Add Badge',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_dp_yf_cta_title', 'label' => 'Title', 'name' => 'yf_cta_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_yf_cta_desc', 'label' => 'Description', 'name' => 'yf_cta_desc', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_yf_cta_url', 'label' => 'CTA URL', 'name' => 'yf_cta_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_yf_cta_button_text', 'label' => 'CTA Button Text', 'name' => 'yf_cta_button_text', 'type' => 'text', 'default_value' => 'Book Vaccination' ),
            array(
                'key'          => 'field_dp_yf_cta_checks',
                'label'        => 'CTA Checkmarks',
                'name'         => 'yf_cta_checks',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 5,
                'button_label' => 'Add Check',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_yf_cta_check_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 1208,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L. TRAVEL DESTINATION PAGE FIELDS
    // =========================================================================

    // Thailand, Brazil, Vietnam share the same td_* field names (page-level, so each stores its own values).
    $td_location = array(
        array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-travel-thailand.php' ) ),
        array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-travel-brazil.php' ) ),
        array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-travel-vietnam.php' ) ),
    );

    $ke_location = array(
        array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-travel-kenya.php' ) ),
    );

    $in_location = array(
        array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-travel-india.php' ) ),
    );

    // Helper: standard field group options.
    $fg_opts = array(
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    );

    // -------------------------------------------------------------------------
    // L1. Thailand / Brazil / Vietnam — Hero
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_td_hero',
        'title'      => 'Travel Destination — Hero Section',
        'fields'     => array(
            array( 'key' => 'field_dp_td_hero_badge', 'label' => 'Badge Text', 'name' => 'td_hero_badge', 'type' => 'text', 'default_value' => 'THAILAND TRAVEL HEALTH' ),
            array( 'key' => 'field_dp_td_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'td_hero_title_line1', 'type' => 'text', 'default_value' => 'Travel Vaccinations for' ),
            array( 'key' => 'field_dp_td_hero_title_highlight', 'label' => 'Title Highlight (Country)', 'name' => 'td_hero_title_highlight', 'type' => 'text', 'default_value' => 'Thailand' ),
            array( 'key' => 'field_dp_td_hero_description', 'label' => 'Description', 'name' => 'td_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Expert advice and vaccinations for your Thailand adventure. Get protected before you travel with Denton's trusted travel health specialists." ),
            array( 'key' => 'field_dp_td_hero_cta_text', 'label' => 'CTA Text', 'name' => 'td_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Thailand Consultation' ),
            array( 'key' => 'field_dp_td_hero_cta_url', 'label' => 'CTA URL', 'name' => 'td_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'   => $td_location,
        'menu_order' => 1300,
    ) ) );

    // -------------------------------------------------------------------------
    // L1. Thailand / Brazil / Vietnam — Quick Info Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_td_stats',
        'title'      => 'Travel Destination — Quick Info Bar',
        'fields'     => array(
            array(
                'key'          => 'field_dp_td_stats',
                'label'        => 'Stats',
                'name'         => 'td_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_td_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_td_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_td_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                ),
            ),
        ),
        'location'   => $td_location,
        'menu_order' => 1305,
    ) ) );

    // -------------------------------------------------------------------------
    // L1. Thailand / Brazil / Vietnam — Recommended Vaccinations
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_td_vaccines',
        'title'      => 'Travel Destination — Recommended Vaccinations',
        'fields'     => array(
            array( 'key' => 'field_dp_td_vaccines_title', 'label' => 'Title', 'name' => 'td_vaccines_title', 'type' => 'text', 'default_value' => 'Protect yourself in Thailand' ),
            array( 'key' => 'field_dp_td_vaccines_desc', 'label' => 'Description', 'name' => 'td_vaccines_description', 'type' => 'text', 'default_value' => 'These vaccinations are recommended for most travellers to Thailand' ),
            array(
                'key'          => 'field_dp_td_vaccinations',
                'label'        => 'Vaccinations',
                'name'         => 'td_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add Vaccination',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_td_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_td_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_td_vax_badge_color', 'label' => 'Badge Colour', 'name' => 'badge_color', 'type' => 'select', 'choices' => array( 'blue' => 'Blue (Essential/Recommended)', 'gray' => 'Grey (Consider/Rural)' ), 'default_value' => 'blue', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_td_vax_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'default_value' => 'Recommended', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_td_vax_short', 'label' => 'Short Description', 'name' => 'short_desc', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_td_vax_desc', 'label' => 'Full Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'   => $td_location,
        'menu_order' => 1310,
    ) ) );

    // -------------------------------------------------------------------------
    // L1. Thailand / Brazil / Vietnam — Malaria Information
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_td_malaria',
        'title'      => 'Travel Destination — Malaria Information',
        'fields'     => array(
            array( 'key' => 'field_dp_td_malaria_image', 'label' => 'Image', 'name' => 'td_malaria_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_td_malaria_badge_text', 'label' => 'Image Badge Text', 'name' => 'td_malaria_badge_text', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_dp_td_malaria_badge', 'label' => 'Section Badge', 'name' => 'td_malaria_badge', 'type' => 'text', 'default_value' => 'MOSQUITO-BORNE DISEASES' ),
            array( 'key' => 'field_dp_td_malaria_title', 'label' => 'Title', 'name' => 'td_malaria_title', 'type' => 'text', 'default_value' => 'Malaria & Dengue Risks in Thailand' ),
            array( 'key' => 'field_dp_td_malaria_intro', 'label' => 'Intro Text', 'name' => 'td_malaria_intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'While malaria risk is low in most tourist areas, Dengue fever is common nationwide. Our pharmacists will check your specific itinerary and advise on prevention.' ),
            array(
                'key'          => 'field_dp_td_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'td_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Risk Item',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_td_risk_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-check-circle', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_td_risk_level', 'label' => 'Risk Level', 'name' => 'risk_level', 'type' => 'select', 'choices' => array( 'low-risk' => 'Low Risk (Green)', 'high-risk' => 'High Risk (Red)' ), 'default_value' => 'low-risk', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_td_risk_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_td_risk_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'   => $td_location,
        'menu_order' => 1320,
    ) ) );

    // -------------------------------------------------------------------------
    // L1. Thailand / Brazil / Vietnam — Health Advice
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_td_health',
        'title'      => 'Travel Destination — Health Advice',
        'fields'     => array(
            array( 'key' => 'field_dp_td_health_badge', 'label' => 'Badge Text', 'name' => 'td_health_badge', 'type' => 'text', 'default_value' => 'HEALTH ADVICE' ),
            array( 'key' => 'field_dp_td_health_title', 'label' => 'Title', 'name' => 'td_health_title', 'type' => 'text', 'default_value' => 'Stay healthy in Thailand' ),
            array( 'key' => 'field_dp_td_health_subtitle', 'label' => 'Subtitle', 'name' => 'td_health_subtitle', 'type' => 'text', 'default_value' => 'Essential tips for a safe tropical adventure' ),
            array(
                'key'          => 'field_dp_td_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'td_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Tip',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_td_tip_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-glass-water', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_td_tip_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_td_tip_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_td_tip_image', 'label' => 'Background Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'   => $td_location,
        'menu_order' => 1330,
    ) ) );

    // -------------------------------------------------------------------------
    // L1. Thailand / Brazil / Vietnam — Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_td_cta',
        'title'      => 'Travel Destination — Final CTA',
        'fields'     => array(
            array( 'key' => 'field_dp_td_cta_title', 'label' => 'Title', 'name' => 'td_cta_title', 'type' => 'text', 'default_value' => 'Ready for your Thailand adventure?' ),
            array( 'key' => 'field_dp_td_cta_description', 'label' => 'Description', 'name' => 'td_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your Thailand travel health consultation at our Denton clinic. Get expert advice and all recommended vaccinations in one visit.' ),
            array( 'key' => 'field_dp_td_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'td_cta_primary_text', 'type' => 'text', 'default_value' => 'Book Thailand Consultation' ),
            array( 'key' => 'field_dp_td_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'td_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_dp_td_cta_check_1', 'label' => 'Check 1', 'name' => 'td_cta_check_1', 'type' => 'text', 'default_value' => 'Travel Ready' ),
            array( 'key' => 'field_dp_td_cta_check_2', 'label' => 'Check 2', 'name' => 'td_cta_check_2', 'type' => 'text', 'default_value' => 'Expert Thailand Advice' ),
            array( 'key' => 'field_dp_td_cta_check_3', 'label' => 'Check 3', 'name' => 'td_cta_check_3', 'type' => 'text', 'default_value' => 'All Vaccines Available' ),
        ),
        'location'   => $td_location,
        'menu_order' => 1340,
    ) ) );

    // -------------------------------------------------------------------------
    // L2. Kenya — Hero
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_ke_hero',
        'title'      => 'Kenya — Hero Section',
        'fields'     => array(
            array( 'key' => 'field_dp_ke_hero_badge', 'label' => 'Badge Text', 'name' => 'ke_hero_badge', 'type' => 'text', 'default_value' => 'KENYA TRAVEL HEALTH' ),
            array( 'key' => 'field_dp_ke_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'ke_hero_title_line1', 'type' => 'text', 'default_value' => 'Travel Vaccinations for' ),
            array( 'key' => 'field_dp_ke_hero_title_highlight', 'label' => 'Title Highlight (Country)', 'name' => 'ke_hero_title_highlight', 'type' => 'text', 'default_value' => 'Kenya' ),
            array( 'key' => 'field_dp_ke_hero_description', 'label' => 'Description', 'name' => 'ke_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Expert advice and vaccinations for your Kenya safari or holiday. Yellow Fever, Malaria, and more. Get protected with Denton's specialists." ),
            array( 'key' => 'field_dp_ke_hero_cta_text', 'label' => 'CTA Text', 'name' => 'ke_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Kenya Consultation' ),
            array( 'key' => 'field_dp_ke_hero_cta_url', 'label' => 'CTA URL', 'name' => 'ke_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'   => $ke_location,
        'menu_order' => 1400,
    ) ) );

    // L2. Kenya — Quick Info Bar
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_ke_stats',
        'title'      => 'Kenya — Quick Info Bar',
        'fields'     => array(
            array(
                'key'          => 'field_dp_ke_stats',
                'label'        => 'Stats',
                'name'         => 'ke_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ke_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_ke_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_ke_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                ),
            ),
        ),
        'location'   => $ke_location,
        'menu_order' => 1405,
    ) ) );

    // L2. Kenya — Recommended Vaccinations
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_ke_vaccines',
        'title'      => 'Kenya — Recommended Vaccinations',
        'fields'     => array(
            array( 'key' => 'field_dp_ke_vaccines_title', 'label' => 'Title', 'name' => 'ke_vaccines_title', 'type' => 'text', 'default_value' => 'Protect yourself in Kenya' ),
            array( 'key' => 'field_dp_ke_vaccines_desc', 'label' => 'Description', 'name' => 'ke_vaccines_description', 'type' => 'text', 'default_value' => 'These vaccinations are recommended for most travellers to Kenya' ),
            array(
                'key'          => 'field_dp_ke_vaccinations',
                'label'        => 'Vaccinations',
                'name'         => 'ke_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add Vaccination',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ke_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_ke_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_ke_vax_badge_color', 'label' => 'Badge Colour', 'name' => 'badge_color', 'type' => 'select', 'choices' => array( 'blue' => 'Blue (Essential/Recommended)', 'gray' => 'Grey (Consider/Rural)' ), 'default_value' => 'blue', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_ke_vax_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'default_value' => 'Recommended', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_ke_vax_short', 'label' => 'Short Description', 'name' => 'short_desc', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_ke_vax_desc', 'label' => 'Full Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'   => $ke_location,
        'menu_order' => 1410,
    ) ) );

    // L2. Kenya — Malaria Information
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_ke_malaria',
        'title'      => 'Kenya — Malaria Information',
        'fields'     => array(
            array( 'key' => 'field_dp_ke_malaria_image', 'label' => 'Image', 'name' => 'ke_malaria_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_ke_malaria_badge_text', 'label' => 'Image Badge Text', 'name' => 'ke_malaria_badge_text', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_dp_ke_malaria_badge', 'label' => 'Section Badge', 'name' => 'ke_malaria_badge', 'type' => 'text', 'default_value' => 'HIGH RISK AREA' ),
            array( 'key' => 'field_dp_ke_malaria_title', 'label' => 'Title', 'name' => 'ke_malaria_title', 'type' => 'text', 'default_value' => 'Malaria Risk in Kenya' ),
            array( 'key' => 'field_dp_ke_malaria_intro', 'label' => 'Intro Text', 'name' => 'ke_malaria_intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Malaria risk is high throughout most of Kenya, including safari parks. Antimalarials are usually recommended.' ),
            array( 'key' => 'field_dp_ke_malaria_cta_text', 'label' => 'CTA Button Text', 'name' => 'ke_malaria_cta_text', 'type' => 'text', 'default_value' => 'Check Your Risk', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_ke_malaria_cta_url', 'label' => 'CTA Button URL', 'name' => 'ke_malaria_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use the booking page URL.', 'wrapper' => array( 'width' => '50' ) ),
            array(
                'key'          => 'field_dp_ke_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'ke_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Risk Item',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ke_risk_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_ke_risk_level', 'label' => 'Risk Level', 'name' => 'risk_level', 'type' => 'select', 'choices' => array( 'low-risk' => 'Low Risk (Green)', 'high-risk' => 'High Risk (Red)' ), 'default_value' => 'low-risk', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_ke_risk_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_ke_risk_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'   => $ke_location,
        'menu_order' => 1420,
    ) ) );

    // L2. Kenya — Health Advice
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_ke_health',
        'title'      => 'Kenya — Health Advice',
        'fields'     => array(
            array( 'key' => 'field_dp_ke_health_badge', 'label' => 'Badge Text', 'name' => 'ke_health_badge', 'type' => 'text', 'default_value' => 'HEALTH ADVICE' ),
            array( 'key' => 'field_dp_ke_health_title', 'label' => 'Title', 'name' => 'ke_health_title', 'type' => 'text', 'default_value' => 'Stay healthy in Kenya' ),
            array( 'key' => 'field_dp_ke_health_subtitle', 'label' => 'Subtitle', 'name' => 'ke_health_subtitle', 'type' => 'text', 'default_value' => 'Essential tips for a safe safari' ),
            array(
                'key'          => 'field_dp_ke_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'ke_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Tip',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_ke_tip_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-glass-water', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_ke_tip_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_ke_tip_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_ke_tip_image', 'label' => 'Background Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'   => $ke_location,
        'menu_order' => 1430,
    ) ) );

    // L2. Kenya — Final CTA
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_ke_cta',
        'title'      => 'Kenya — Final CTA',
        'fields'     => array(
            array( 'key' => 'field_dp_ke_cta_title', 'label' => 'Title', 'name' => 'ke_cta_title', 'type' => 'text', 'default_value' => 'Ready for your Kenya safari?' ),
            array( 'key' => 'field_dp_ke_cta_description', 'label' => 'Description', 'name' => 'ke_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your travel health consultation at our Denton clinic. Get expert advice and all recommended vaccinations in one visit.' ),
            array( 'key' => 'field_dp_ke_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'ke_cta_primary_text', 'type' => 'text', 'default_value' => 'Book Kenya Consultation' ),
            array( 'key' => 'field_dp_ke_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'ke_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_dp_ke_cta_check_1', 'label' => 'Check 1', 'name' => 'ke_cta_check_1', 'type' => 'text', 'default_value' => 'Travel Ready' ),
            array( 'key' => 'field_dp_ke_cta_check_2', 'label' => 'Check 2', 'name' => 'ke_cta_check_2', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_dp_ke_cta_check_3', 'label' => 'Check 3', 'name' => 'ke_cta_check_3', 'type' => 'text', 'default_value' => 'All Vaccines' ),
        ),
        'location'   => $ke_location,
        'menu_order' => 1440,
    ) ) );

    // -------------------------------------------------------------------------
    // L3. India — Hero
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_in_hero',
        'title'      => 'India — Hero Section',
        'fields'     => array(
            array( 'key' => 'field_dp_in_hero_badge', 'label' => 'Badge Text', 'name' => 'in_hero_badge', 'type' => 'text', 'default_value' => 'INDIA TRAVEL HEALTH' ),
            array( 'key' => 'field_dp_in_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'in_hero_title_line1', 'type' => 'text', 'default_value' => 'Travel Vaccinations for' ),
            array( 'key' => 'field_dp_in_hero_title_highlight', 'label' => 'Title Highlight (Country)', 'name' => 'in_hero_title_highlight', 'type' => 'text', 'default_value' => 'India' ),
            array( 'key' => 'field_dp_in_hero_description', 'label' => 'Description', 'name' => 'in_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Expert advice and vaccinations for your India journey. Get protected before you travel with Denton's trusted travel health specialists." ),
            array( 'key' => 'field_dp_in_hero_cta_text', 'label' => 'CTA Text', 'name' => 'in_hero_cta_text', 'type' => 'text', 'default_value' => 'Book India Consultation' ),
            array( 'key' => 'field_dp_in_hero_cta_url', 'label' => 'CTA URL', 'name' => 'in_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'   => $in_location,
        'menu_order' => 1500,
    ) ) );

    // L3. India — Quick Info Bar
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_in_stats',
        'title'      => 'India — Quick Info Bar',
        'fields'     => array(
            array(
                'key' => 'field_dp_in_stats', 'label' => 'Stats', 'name' => 'in_stats', 'type' => 'repeater', 'layout' => 'table', 'min' => 0, 'max' => 4, 'button_label' => 'Add Stat',
                'sub_fields' => array(
                    array( 'key' => 'field_dp_in_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_in_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_in_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                ),
            ),
        ),
        'location'   => $in_location,
        'menu_order' => 1505,
    ) ) );

    // L3. India — Recommended Vaccinations
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_in_vaccines',
        'title'      => 'India — Recommended Vaccinations',
        'fields'     => array(
            array( 'key' => 'field_dp_in_vaccines_title', 'label' => 'Title', 'name' => 'in_vaccines_title', 'type' => 'text', 'default_value' => 'Protect yourself in India' ),
            array( 'key' => 'field_dp_in_vaccines_desc', 'label' => 'Description', 'name' => 'in_vaccines_description', 'type' => 'text', 'default_value' => 'These vaccinations are recommended for most travellers to India' ),
            array(
                'key' => 'field_dp_in_vaccinations', 'label' => 'Vaccinations', 'name' => 'in_vaccinations', 'type' => 'repeater', 'layout' => 'block', 'min' => 0, 'max' => 10, 'button_label' => 'Add Vaccination',
                'sub_fields' => array(
                    array( 'key' => 'field_dp_in_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_in_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_in_vax_badge_color', 'label' => 'Badge Colour', 'name' => 'badge_color', 'type' => 'select', 'choices' => array( 'blue' => 'Blue (Essential/Recommended)', 'gray' => 'Grey (Consider/Rural)' ), 'default_value' => 'blue', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_in_vax_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'default_value' => 'Recommended', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_dp_in_vax_short', 'label' => 'Short Description', 'name' => 'short_desc', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_in_vax_desc', 'label' => 'Full Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'   => $in_location,
        'menu_order' => 1510,
    ) ) );

    // L3. India — Malaria Information
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_in_malaria',
        'title'      => 'India — Malaria Information',
        'fields'     => array(
            array( 'key' => 'field_dp_in_malaria_image', 'label' => 'Image', 'name' => 'in_malaria_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_in_malaria_badge_text', 'label' => 'Image Badge Text', 'name' => 'in_malaria_badge_text', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_dp_in_malaria_badge', 'label' => 'Section Badge', 'name' => 'in_malaria_badge', 'type' => 'text', 'default_value' => 'MOSQUITO-BORNE DISEASES' ),
            array( 'key' => 'field_dp_in_malaria_title', 'label' => 'Title', 'name' => 'in_malaria_title', 'type' => 'text', 'default_value' => 'Malaria & Dengue Risks in India' ),
            array( 'key' => 'field_dp_in_malaria_intro', 'label' => 'Intro Text', 'name' => 'in_malaria_intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Malaria risk varies across India. Dengue fever is also a significant risk nationwide. Our pharmacists will check your specific itinerary and advise on prevention.' ),
            array( 'key' => 'field_dp_in_malaria_cta_text', 'label' => 'CTA Button Text', 'name' => 'in_malaria_cta_text', 'type' => 'text', 'default_value' => 'Check Your Risk', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_dp_in_malaria_cta_url', 'label' => 'CTA Button URL', 'name' => 'in_malaria_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use the booking page URL.', 'wrapper' => array( 'width' => '50' ) ),
            array(
                'key' => 'field_dp_in_malaria_risks', 'label' => 'Risk Items', 'name' => 'in_malaria_risks', 'type' => 'repeater', 'layout' => 'block', 'min' => 0, 'max' => 4, 'button_label' => 'Add Risk Item',
                'sub_fields' => array(
                    array( 'key' => 'field_dp_in_risk_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_in_risk_level', 'label' => 'Risk Level', 'name' => 'risk_level', 'type' => 'select', 'choices' => array( 'low-risk' => 'Low Risk (Green)', 'high-risk' => 'High Risk (Red)' ), 'default_value' => 'low-risk', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_in_risk_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_in_risk_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'   => $in_location,
        'menu_order' => 1520,
    ) ) );

    // L3. India — Health Advice
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_in_health',
        'title'      => 'India — Health Advice',
        'fields'     => array(
            array( 'key' => 'field_dp_in_health_badge', 'label' => 'Badge Text', 'name' => 'in_health_badge', 'type' => 'text', 'default_value' => 'HEALTH ADVICE' ),
            array( 'key' => 'field_dp_in_health_title', 'label' => 'Title', 'name' => 'in_health_title', 'type' => 'text', 'default_value' => 'Stay healthy in India' ),
            array( 'key' => 'field_dp_in_health_subtitle', 'label' => 'Subtitle', 'name' => 'in_health_subtitle', 'type' => 'text', 'default_value' => 'Essential tips for a safe journey' ),
            array(
                'key' => 'field_dp_in_health_tips', 'label' => 'Health Tips', 'name' => 'in_health_tips', 'type' => 'repeater', 'layout' => 'block', 'min' => 0, 'max' => 4, 'button_label' => 'Add Tip',
                'sub_fields' => array(
                    array( 'key' => 'field_dp_in_tip_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-glass-water', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_in_tip_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_in_tip_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_in_tip_image', 'label' => 'Background Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'   => $in_location,
        'menu_order' => 1530,
    ) ) );

    // L3. India — Final CTA
    acf_add_local_field_group( array_merge( $fg_opts, array(
        'key'        => 'group_dp_in_cta',
        'title'      => 'India — Final CTA',
        'fields'     => array(
            array( 'key' => 'field_dp_in_cta_title', 'label' => 'Title', 'name' => 'in_cta_title', 'type' => 'text', 'default_value' => 'Ready for your India adventure?' ),
            array( 'key' => 'field_dp_in_cta_description', 'label' => 'Description', 'name' => 'in_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your India travel health consultation at our Denton clinic. Get expert advice and all recommended vaccinations in one visit.' ),
            array( 'key' => 'field_dp_in_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'in_cta_primary_text', 'type' => 'text', 'default_value' => 'Book India Consultation' ),
            array( 'key' => 'field_dp_in_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'in_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_dp_in_cta_check_1', 'label' => 'Check 1', 'name' => 'in_cta_check_1', 'type' => 'text', 'default_value' => 'Travel Ready' ),
            array( 'key' => 'field_dp_in_cta_check_2', 'label' => 'Check 2', 'name' => 'in_cta_check_2', 'type' => 'text', 'default_value' => 'Expert India Advice' ),
            array( 'key' => 'field_dp_in_cta_check_3', 'label' => 'Check 3', 'name' => 'in_cta_check_3', 'type' => 'text', 'default_value' => 'All Vaccines Available' ),
        ),
        'location'   => $in_location,
        'menu_order' => 1540,
    ) ) );

    // =========================================================================
    // M. NHS SERVICES PAGE FIELDS
    // =========================================================================

    // -------------------------------------------------------------------------
    // M1. NHS Services — Hero & Stats
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_nhs_hero',
        'title'    => 'NHS Services — Hero & Stats',
        'fields'   => array(
            // --- Badge ---
            array(
                'key'           => 'field_dp_nhs_hero_badge_icon',
                'label'         => 'Badge Icon',
                'name'          => 'nhs_hero_badge_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-notes-medical',
                'instructions'  => 'Font Awesome class.',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_badge_title',
                'label'         => 'Badge Title',
                'name'          => 'nhs_hero_badge_title',
                'type'          => 'text',
                'default_value' => 'NHS Community Pharmacy',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_badge_subtitle',
                'label'         => 'Badge Subtitle',
                'name'          => 'nhs_hero_badge_subtitle',
                'type'          => 'text',
                'default_value' => 'Free Services for Eligible Patients',
                'wrapper'       => array( 'width' => '33' ),
            ),

            // --- Title (3 lines) ---
            array(
                'key'           => 'field_dp_nhs_hero_title',
                'label'         => 'Hero Title Line 1',
                'name'          => 'nhs_hero_title',
                'type'          => 'text',
                'default_value' => 'Your NHS',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_title_accent',
                'label'         => 'Hero Title Line 2 (Italic)',
                'name'          => 'nhs_hero_title_accent',
                'type'          => 'text',
                'default_value' => 'Pharmacy',
                'instructions'  => 'Displayed in italic serif font.',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_title_line3',
                'label'         => 'Hero Title Line 3',
                'name'          => 'nhs_hero_title_line3',
                'type'          => 'text',
                'default_value' => 'in Denton',
                'wrapper'       => array( 'width' => '33' ),
            ),

            // --- Description ---
            array(
                'key'           => 'field_dp_nhs_hero_description',
                'label'         => 'Hero Description',
                'name'          => 'nhs_hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Free NHS prescriptions, Pharmacy First consultations, and flu vaccinations for eligible patients. Expert care from your local community pharmacy.',
            ),

            // --- CTA ---
            array(
                'key'           => 'field_dp_nhs_hero_cta_text',
                'label'         => 'Hero CTA Text',
                'name'          => 'nhs_hero_cta_text',
                'type'          => 'text',
                'default_value' => 'View NHS Services',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_cta_url',
                'label'         => 'Hero CTA URL',
                'name'          => 'nhs_hero_cta_url',
                'type'          => 'url',
                'instructions'  => 'Leave blank to use booking page URL.',
                'wrapper'       => array( 'width' => '50' ),
            ),

            // --- Hero Image ---
            array(
                'key'           => 'field_dp_nhs_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'nhs_hero_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Falls back to pharmacist image from Pharmacy Settings.',
            ),
            array(
                'key'           => 'field_dp_nhs_hero_caption_label',
                'label'         => 'Image Caption Label',
                'name'          => 'nhs_hero_caption_label',
                'type'          => 'text',
                'default_value' => 'NHS Services',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_caption_title',
                'label'         => 'Image Caption Title',
                'name'          => 'nhs_hero_caption_title',
                'type'          => 'text',
                'default_value' => 'Free for Eligible Patients',
                'wrapper'       => array( 'width' => '50' ),
            ),

            // --- Trust Indicators ---
            array(
                'key'           => 'field_dp_nhs_hero_trust_1_icon',
                'label'         => 'Trust 1 Icon',
                'name'          => 'nhs_hero_trust_1_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-check-circle',
                'wrapper'       => array( 'width' => '25' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_trust_1_text',
                'label'         => 'Trust 1 Text',
                'name'          => 'nhs_hero_trust_1_text',
                'type'          => 'text',
                'default_value' => 'NHS Approved',
                'wrapper'       => array( 'width' => '25' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_trust_2_icon',
                'label'         => 'Trust 2 Icon',
                'name'          => 'nhs_hero_trust_2_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-shield-halved',
                'wrapper'       => array( 'width' => '25' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_trust_2_text',
                'label'         => 'Trust 2 Text',
                'name'          => 'nhs_hero_trust_2_text',
                'type'          => 'text',
                'default_value' => 'GPhC Registered',
                'wrapper'       => array( 'width' => '25' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_trust_3_icon',
                'label'         => 'Trust 3 Icon',
                'name'          => 'nhs_hero_trust_3_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-star',
                'wrapper'       => array( 'width' => '25' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_trust_3_text',
                'label'         => 'Trust 3 Text',
                'name'          => 'nhs_hero_trust_3_text',
                'type'          => 'text',
                'default_value' => '4.7★ Rated',
                'wrapper'       => array( 'width' => '25' ),
            ),

            // --- Rating Badge ---
            array(
                'key'           => 'field_dp_nhs_hero_rating_score',
                'label'         => 'Rating Score',
                'name'          => 'nhs_hero_rating_score',
                'type'          => 'text',
                'instructions'  => 'Leave blank to use Google Rating from Pharmacy Settings.',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_rating_count',
                'label'         => 'Rating Count',
                'name'          => 'nhs_hero_rating_count',
                'type'          => 'text',
                'default_value' => '89',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_hero_rating_location',
                'label'         => 'Rating Location',
                'name'          => 'nhs_hero_rating_location',
                'type'          => 'text',
                'instructions'  => 'Leave blank to use location from Pharmacy Settings.',
                'wrapper'       => array( 'width' => '33' ),
            ),

            // Stats
            array(
                'key'           => 'field_dp_nhs_stat_1_icon',
                'label'         => 'Stat 1 Icon',
                'name'          => 'nhs_stat_1_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-prescription',
                'instructions'  => 'Font Awesome class. The "fas" prefix is added automatically if omitted.',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_1_number',
                'label'         => 'Stat 1 Number',
                'name'          => 'nhs_stat_1_number',
                'type'          => 'text',
                'default_value' => '10,000+',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_1_label',
                'label'         => 'Stat 1 Label',
                'name'          => 'nhs_stat_1_label',
                'type'          => 'text',
                'default_value' => 'NHS Prescriptions',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_2_icon',
                'label'         => 'Stat 2 Icon',
                'name'          => 'nhs_stat_2_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-user-nurse',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_2_number',
                'label'         => 'Stat 2 Number',
                'name'          => 'nhs_stat_2_number',
                'type'          => 'text',
                'default_value' => 'Free',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_2_label',
                'label'         => 'Stat 2 Label',
                'name'          => 'nhs_stat_2_label',
                'type'          => 'text',
                'default_value' => 'Pharmacy First',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_3_icon',
                'label'         => 'Stat 3 Icon',
                'name'          => 'nhs_stat_3_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-syringe',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_3_number',
                'label'         => 'Stat 3 Number',
                'name'          => 'nhs_stat_3_number',
                'type'          => 'text',
                'default_value' => '1,500+',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_3_label',
                'label'         => 'Stat 3 Label',
                'name'          => 'nhs_stat_3_label',
                'type'          => 'text',
                'default_value' => 'Flu Vaccinations',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_4_icon',
                'label'         => 'Stat 4 Icon',
                'name'          => 'nhs_stat_4_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-truck-fast',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_4_number',
                'label'         => 'Stat 4 Number',
                'name'          => 'nhs_stat_4_number',
                'type'          => 'text',
                'default_value' => 'Free',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_4_label',
                'label'         => 'Stat 4 Label',
                'name'          => 'nhs_stat_4_label',
                'type'          => 'text',
                'default_value' => 'Home Delivery',
                'wrapper'       => array( 'width' => '33' ),
            ),
            // Stat 5
            array(
                'key'           => 'field_dp_nhs_stat_5_icon',
                'label'         => 'Stat 5 Icon',
                'name'          => 'nhs_stat_5_icon',
                'type'          => 'text',
                'default_value' => 'fas fa-clock',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_5_number',
                'label'         => 'Stat 5 Number',
                'name'          => 'nhs_stat_5_number',
                'type'          => 'text',
                'default_value' => 'Same Day',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_nhs_stat_5_label',
                'label'         => 'Stat 5 Label',
                'name'          => 'nhs_stat_5_label',
                'type'          => 'text',
                'default_value' => 'Collection',
                'wrapper'       => array( 'width' => '33' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-nhs-services.php',
                ),
            ),
        ),
        'menu_order'            => 1700,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L1: TRAVEL THAILAND — Hero
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_thai_hero',
        'title'  => 'L1 — Thailand: Hero',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_thai_hero_badge',
                'label'         => 'Badge Text',
                'name'          => 'td_hero_badge',
                'type'          => 'text',
                'default_value' => 'THAILAND TRAVEL HEALTH',
            ),
            array(
                'key'           => 'field_dp_travel_thai_hero_title_line1',
                'label'         => 'Title Line 1',
                'name'          => 'td_hero_title_line1',
                'type'          => 'text',
                'default_value' => 'Travel Vaccinations for',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_hero_highlight',
                'label'         => 'Title Highlight',
                'name'          => 'td_hero_title_highlight',
                'type'          => 'text',
                'default_value' => 'Thailand',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_hero_desc',
                'label'         => 'Description',
                'name'          => 'td_hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Expert advice and vaccinations for your Thailand adventure. Get protected before you travel with Denton\'s trusted travel health specialists.',
            ),
            array(
                'key'           => 'field_dp_travel_thai_hero_cta_text',
                'label'         => 'CTA Text',
                'name'          => 'td_hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Book Thailand Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_hero_cta_url',
                'label'         => 'CTA URL',
                'name'          => 'td_hero_cta_url',
                'type'          => 'url',
                'wrapper'       => array( 'width' => '50' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-thailand.php',
                ),
            ),
        ),
        'menu_order'            => 1800,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L1: TRAVEL THAILAND — Stats Bar
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_thai_stats',
        'title'  => 'L1 — Thailand: Stats Bar',
        'fields' => array(
            array(
                'key'          => 'field_dp_travel_thai_stats',
                'label'        => 'Stats',
                'name'         => 'td_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_thai_stat_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'instructions'  => 'Font Awesome class, e.g. fas fa-syringe',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_thai_stat_number',
                        'label'         => 'Number',
                        'name'          => 'number',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_thai_stat_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '40' ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-thailand.php',
                ),
            ),
        ),
        'menu_order'            => 1810,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L1: TRAVEL THAILAND — Vaccinations
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_thai_vaccines',
        'title'  => 'L1 — Thailand: Vaccinations',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_thai_vaccines_title',
                'label'         => 'Section Title',
                'name'          => 'td_vaccines_title',
                'type'          => 'text',
                'default_value' => 'Protect yourself in Thailand',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_vaccines_desc',
                'label'         => 'Section Description',
                'name'          => 'td_vaccines_description',
                'type'          => 'text',
                'default_value' => 'These vaccinations are recommended for most travellers to Thailand',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_thai_vaccinations',
                'label'        => 'Vaccination Cards',
                'name'         => 'td_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Vaccination',
                'max'          => 8,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_thai_vax_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_thai_vax_name',
                        'label'   => 'Vaccine Name',
                        'name'    => 'name',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_thai_vax_badge_color',
                        'label'        => 'Badge Colour',
                        'name'         => 'badge_color',
                        'type'         => 'select',
                        'choices'      => array( 'purple' => 'Purple', 'gray' => 'Gray' ),
                        'default_value' => 'purple',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_thai_vax_badge_text',
                        'label'   => 'Badge Text',
                        'name'    => 'badge_text',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_thai_vax_short',
                        'label'   => 'Short Description',
                        'name'    => 'short_desc',
                        'type'    => 'text',
                    ),
                    array(
                        'key'     => 'field_dp_travel_thai_vax_desc',
                        'label'   => 'Full Description',
                        'name'    => 'description',
                        'type'    => 'textarea',
                        'rows'    => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-thailand.php',
                ),
            ),
        ),
        'menu_order'            => 1820,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L1: TRAVEL THAILAND — Malaria Section
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_thai_malaria',
        'title'  => 'L1 — Thailand: Malaria & Dengue',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_thai_malaria_image',
                'label'         => 'Section Image',
                'name'          => 'td_malaria_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
            ),
            array(
                'key'           => 'field_dp_travel_thai_malaria_badge_text',
                'label'         => 'Image Badge Text',
                'name'          => 'td_malaria_badge_text',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_malaria_badge',
                'label'         => 'Section Badge',
                'name'          => 'td_malaria_badge',
                'type'          => 'text',
                'default_value' => 'MOSQUITO-BORNE DISEASES',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_malaria_title',
                'label'         => 'Title',
                'name'          => 'td_malaria_title',
                'type'          => 'text',
                'default_value' => 'Malaria & Dengue Risks in Thailand',
            ),
            array(
                'key'           => 'field_dp_travel_thai_malaria_intro',
                'label'         => 'Introduction',
                'name'          => 'td_malaria_intro',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'While malaria risk is low in most tourist areas, Dengue fever is common nationwide. Our pharmacists will check your specific itinerary and advise on prevention.',
            ),
            array(
                'key'          => 'field_dp_travel_thai_malaria_cta_text',
                'label'        => 'CTA Button Text',
                'name'         => 'td_malaria_cta_text',
                'type'         => 'text',
                'default_value' => 'Check Your Risk',
                'wrapper'      => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_thai_malaria_cta_url',
                'label'        => 'CTA Button URL',
                'name'         => 'td_malaria_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to use the booking page URL.',
                'wrapper'      => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_thai_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'td_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Risk Item',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_thai_risk_level',
                        'label'        => 'Risk Level',
                        'name'         => 'risk_level',
                        'type'         => 'select',
                        'choices'      => array( 'low-risk' => 'Low Risk', 'high-risk' => 'High Risk' ),
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_thai_risk_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_thai_risk_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '50' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_thai_risk_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-thailand.php',
                ),
            ),
        ),
        'menu_order'            => 1830,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L1: TRAVEL THAILAND — Health Tips
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_thai_health',
        'title'  => 'L1 — Thailand: Health Tips',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_thai_health_badge',
                'label'         => 'Badge Text',
                'name'          => 'td_health_badge',
                'type'          => 'text',
                'default_value' => 'HEALTH ADVICE',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_health_title',
                'label'         => 'Title',
                'name'          => 'td_health_title',
                'type'          => 'text',
                'default_value' => 'Stay healthy in Thailand',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_health_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'td_health_subtitle',
                'type'          => 'text',
                'default_value' => 'Essential tips for a safe tropical adventure',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'          => 'field_dp_travel_thai_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'td_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Tip',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_thai_tip_image',
                        'label'         => 'Background Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                    ),
                    array(
                        'key'          => 'field_dp_travel_thai_tip_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '33' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_thai_tip_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '33' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_thai_tip_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-thailand.php',
                ),
            ),
        ),
        'menu_order'            => 1840,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L1: TRAVEL THAILAND — Final CTA
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_thai_cta',
        'title'  => 'L1 — Thailand: Final CTA',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_thai_cta_title',
                'label'         => 'Title',
                'name'          => 'td_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready for your Thailand adventure?',
            ),
            array(
                'key'           => 'field_dp_travel_thai_cta_desc',
                'label'         => 'Description',
                'name'          => 'td_cta_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Book your Thailand travel health consultation at our Denton clinic. Get expert advice and all recommended vaccinations in one visit.',
            ),
            array(
                'key'           => 'field_dp_travel_thai_cta_primary_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'td_cta_primary_text',
                'type'          => 'text',
                'default_value' => 'Book Thailand Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'   => 'field_dp_travel_thai_cta_primary_url',
                'label' => 'Primary CTA URL',
                'name'  => 'td_cta_primary_url',
                'type'  => 'url',
                'wrapper' => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_cta_check_1',
                'label'         => 'Check 1',
                'name'          => 'td_cta_check_1',
                'type'          => 'text',
                'default_value' => 'Travel Ready',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_cta_check_2',
                'label'         => 'Check 2',
                'name'          => 'td_cta_check_2',
                'type'          => 'text',
                'default_value' => 'Expert Thailand Advice',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_thai_cta_check_3',
                'label'         => 'Check 3',
                'name'          => 'td_cta_check_3',
                'type'          => 'text',
                'default_value' => 'All Vaccines Available',
                'wrapper'       => array( 'width' => '33' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-thailand.php',
                ),
            ),
        ),
        'menu_order'            => 1850,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L2: TRAVEL VIETNAM — Hero
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_viet_hero',
        'title'  => 'L2 — Vietnam: Hero',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_viet_hero_badge',
                'label'         => 'Badge Text',
                'name'          => 'td_hero_badge',
                'type'          => 'text',
                'default_value' => 'VIETNAM TRAVEL HEALTH',
            ),
            array(
                'key'           => 'field_dp_travel_viet_hero_title_line1',
                'label'         => 'Title Line 1',
                'name'          => 'td_hero_title_line1',
                'type'          => 'text',
                'default_value' => 'Travel Vaccinations for',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_hero_highlight',
                'label'         => 'Title Highlight',
                'name'          => 'td_hero_title_highlight',
                'type'          => 'text',
                'default_value' => 'Vietnam',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_hero_desc',
                'label'         => 'Description',
                'name'          => 'td_hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Expert advice and vaccinations for your Vietnam adventure. Get protected before you travel with Denton\'s trusted travel health specialists.',
            ),
            array(
                'key'           => 'field_dp_travel_viet_hero_cta_text',
                'label'         => 'CTA Text',
                'name'          => 'td_hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Book Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_hero_cta_url',
                'label'         => 'CTA URL',
                'name'          => 'td_hero_cta_url',
                'type'          => 'url',
                'wrapper'       => array( 'width' => '50' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-vietnam.php',
                ),
            ),
        ),
        'menu_order'            => 1900,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L2: TRAVEL VIETNAM — Stats Bar
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_viet_stats',
        'title'  => 'L2 — Vietnam: Stats Bar',
        'fields' => array(
            array(
                'key'          => 'field_dp_travel_viet_stats',
                'label'        => 'Stats',
                'name'         => 'td_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_viet_stat_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'instructions'  => 'Font Awesome class, e.g. fas fa-syringe',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_viet_stat_number',
                        'label'         => 'Number',
                        'name'          => 'number',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_viet_stat_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '40' ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-vietnam.php',
                ),
            ),
        ),
        'menu_order'            => 1910,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L2: TRAVEL VIETNAM — Vaccinations
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_viet_vaccines',
        'title'  => 'L2 — Vietnam: Vaccinations',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_viet_vaccines_title',
                'label'         => 'Section Title',
                'name'          => 'td_vaccines_title',
                'type'          => 'text',
                'default_value' => 'Protect yourself in Vietnam',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_vaccines_desc',
                'label'         => 'Section Description',
                'name'          => 'td_vaccines_description',
                'type'          => 'text',
                'default_value' => 'These vaccinations are recommended for most travellers to Vietnam',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_viet_vaccinations',
                'label'        => 'Vaccination Cards',
                'name'         => 'td_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Vaccination',
                'max'          => 8,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_viet_vax_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_viet_vax_name',
                        'label'   => 'Vaccine Name',
                        'name'    => 'name',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_viet_vax_badge_color',
                        'label'        => 'Badge Colour',
                        'name'         => 'badge_color',
                        'type'         => 'select',
                        'choices'      => array( 'purple' => 'Purple', 'gray' => 'Gray' ),
                        'default_value' => 'purple',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_viet_vax_badge_text',
                        'label'   => 'Badge Text',
                        'name'    => 'badge_text',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_viet_vax_short',
                        'label'   => 'Short Description',
                        'name'    => 'short_desc',
                        'type'    => 'text',
                    ),
                    array(
                        'key'     => 'field_dp_travel_viet_vax_desc',
                        'label'   => 'Full Description',
                        'name'    => 'description',
                        'type'    => 'textarea',
                        'rows'    => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-vietnam.php',
                ),
            ),
        ),
        'menu_order'            => 1920,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L2: TRAVEL VIETNAM — Malaria Section
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_viet_malaria',
        'title'  => 'L2 — Vietnam: Malaria & Dengue',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_viet_malaria_image',
                'label'         => 'Section Image',
                'name'          => 'td_malaria_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
            ),
            array(
                'key'           => 'field_dp_travel_viet_malaria_badge_text',
                'label'         => 'Image Badge Text',
                'name'          => 'td_malaria_badge_text',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_malaria_badge',
                'label'         => 'Section Badge',
                'name'          => 'td_malaria_badge',
                'type'          => 'text',
                'default_value' => 'MOSQUITO RISKS',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_malaria_title',
                'label'         => 'Title',
                'name'          => 'td_malaria_title',
                'type'          => 'text',
                'default_value' => 'Malaria & Dengue in Vietnam',
            ),
            array(
                'key'           => 'field_dp_travel_viet_malaria_intro',
                'label'         => 'Introduction',
                'name'          => 'td_malaria_intro',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Malaria risk is low in major cities and coastal resorts but present in rural areas. Dengue fever is a risk nationwide.',
            ),
            array(
                'key'          => 'field_dp_travel_viet_malaria_cta_text',
                'label'        => 'CTA Button Text',
                'name'         => 'td_malaria_cta_text',
                'type'         => 'text',
                'default_value' => 'Check Your Risk',
                'wrapper'      => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_viet_malaria_cta_url',
                'label'        => 'CTA Button URL',
                'name'         => 'td_malaria_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to use the booking page URL.',
                'wrapper'      => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_viet_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'td_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Risk Item',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_viet_risk_level',
                        'label'        => 'Risk Level',
                        'name'         => 'risk_level',
                        'type'         => 'select',
                        'choices'      => array( 'low-risk' => 'Low Risk', 'high-risk' => 'High Risk' ),
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_viet_risk_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_viet_risk_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '50' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_viet_risk_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-vietnam.php',
                ),
            ),
        ),
        'menu_order'            => 1930,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L2: TRAVEL VIETNAM — Health Tips
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_viet_health',
        'title'  => 'L2 — Vietnam: Health Tips',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_viet_health_badge',
                'label'         => 'Badge Text',
                'name'          => 'td_health_badge',
                'type'          => 'text',
                'default_value' => 'HEALTH ADVICE',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_health_title',
                'label'         => 'Title',
                'name'          => 'td_health_title',
                'type'          => 'text',
                'default_value' => 'Stay healthy in Vietnam',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_health_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'td_health_subtitle',
                'type'          => 'text',
                'default_value' => 'Essential tips for a safe trip',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'          => 'field_dp_travel_viet_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'td_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Tip',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_viet_tip_image',
                        'label'         => 'Background Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                    ),
                    array(
                        'key'          => 'field_dp_travel_viet_tip_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '33' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_viet_tip_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '33' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_viet_tip_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-vietnam.php',
                ),
            ),
        ),
        'menu_order'            => 1940,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L2: TRAVEL VIETNAM — Final CTA
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_viet_cta',
        'title'  => 'L2 — Vietnam: Final CTA',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_viet_cta_title',
                'label'         => 'Title',
                'name'          => 'td_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready for Vietnam?',
            ),
            array(
                'key'           => 'field_dp_travel_viet_cta_desc',
                'label'         => 'Description',
                'name'          => 'td_cta_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Book your travel health consultation at our Denton clinic. Get expert advice and all recommended vaccinations in one visit.',
            ),
            array(
                'key'           => 'field_dp_travel_viet_cta_primary_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'td_cta_primary_text',
                'type'          => 'text',
                'default_value' => 'Book Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'   => 'field_dp_travel_viet_cta_primary_url',
                'label' => 'Primary CTA URL',
                'name'  => 'td_cta_primary_url',
                'type'  => 'url',
                'wrapper' => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_cta_check_1',
                'label'         => 'Check 1',
                'name'          => 'td_cta_check_1',
                'type'          => 'text',
                'default_value' => 'Travel Ready',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_cta_check_2',
                'label'         => 'Check 2',
                'name'          => 'td_cta_check_2',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_viet_cta_check_3',
                'label'         => 'Check 3',
                'name'          => 'td_cta_check_3',
                'type'          => 'text',
                'default_value' => 'All Vaccines',
                'wrapper'       => array( 'width' => '33' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-vietnam.php',
                ),
            ),
        ),
        'menu_order'            => 1950,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );
    // =========================================================================
    // L3: TRAVEL KENYA — Hero
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_ken_hero',
        'title'  => 'L3 — Kenya: Hero',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_ken_hero_badge',
                'label'         => 'Badge Text',
                'name'          => 'ke_hero_badge',
                'type'          => 'text',
                'default_value' => 'KENYA TRAVEL HEALTH',
            ),
            array(
                'key'           => 'field_dp_travel_ken_hero_title_line1',
                'label'         => 'Title Line 1',
                'name'          => 'ke_hero_title_line1',
                'type'          => 'text',
                'default_value' => 'Travel Vaccinations for',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_hero_highlight',
                'label'         => 'Title Highlight',
                'name'          => 'ke_hero_title_highlight',
                'type'          => 'text',
                'default_value' => 'Kenya',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_hero_desc',
                'label'         => 'Description',
                'name'          => 'ke_hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Expert advice and vaccinations for your Kenya safari or holiday. Yellow Fever, Malaria, and more. Get protected with Denton\'s specialists.',
            ),
            array(
                'key'           => 'field_dp_travel_ken_hero_cta_text',
                'label'         => 'CTA Text',
                'name'          => 'ke_hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Book Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_hero_cta_url',
                'label'         => 'CTA URL',
                'name'          => 'ke_hero_cta_url',
                'type'          => 'url',
                'wrapper'       => array( 'width' => '50' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-kenya.php',
                ),
            ),
        ),
        'menu_order'            => 2000,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L3: TRAVEL KENYA — Stats Bar
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_ken_stats',
        'title'  => 'L3 — Kenya: Stats Bar',
        'fields' => array(
            array(
                'key'          => 'field_dp_travel_ken_stats',
                'label'        => 'Stats',
                'name'         => 'ke_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_ken_stat_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'instructions'  => 'Font Awesome class, e.g. fas fa-syringe',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_ken_stat_number',
                        'label'         => 'Number',
                        'name'          => 'number',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_ken_stat_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '40' ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-kenya.php',
                ),
            ),
        ),
        'menu_order'            => 2010,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L3: TRAVEL KENYA — Vaccinations
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_ken_vaccines',
        'title'  => 'L3 — Kenya: Vaccinations',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_ken_vaccines_title',
                'label'         => 'Section Title',
                'name'          => 'ke_vaccines_title',
                'type'          => 'text',
                'default_value' => 'Protect yourself in Kenya',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_vaccines_desc',
                'label'         => 'Section Description',
                'name'          => 'ke_vaccines_description',
                'type'          => 'text',
                'default_value' => 'These vaccinations are recommended for most travellers to Kenya',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_ken_vaccinations',
                'label'        => 'Vaccination Cards',
                'name'         => 'ke_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Vaccination',
                'max'          => 8,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_ken_vax_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_ken_vax_name',
                        'label'   => 'Vaccine Name',
                        'name'    => 'name',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_ken_vax_badge_color',
                        'label'        => 'Badge Colour',
                        'name'         => 'badge_color',
                        'type'         => 'select',
                        'choices'      => array( 'purple' => 'Purple', 'gray' => 'Gray' ),
                        'default_value' => 'purple',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_ken_vax_badge_text',
                        'label'   => 'Badge Text',
                        'name'    => 'badge_text',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_ken_vax_short',
                        'label'   => 'Short Description',
                        'name'    => 'short_desc',
                        'type'    => 'text',
                    ),
                    array(
                        'key'     => 'field_dp_travel_ken_vax_desc',
                        'label'   => 'Full Description',
                        'name'    => 'description',
                        'type'    => 'textarea',
                        'rows'    => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-kenya.php',
                ),
            ),
        ),
        'menu_order'            => 2020,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L3: TRAVEL KENYA — Malaria Section
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_ken_malaria',
        'title'  => 'L3 — Kenya: Malaria',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_ken_malaria_image',
                'label'         => 'Section Image',
                'name'          => 'ke_malaria_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
            ),
            array(
                'key'           => 'field_dp_travel_ken_malaria_badge_text',
                'label'         => 'Image Badge Text',
                'name'          => 'ke_malaria_badge_text',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_malaria_badge',
                'label'         => 'Section Badge',
                'name'          => 'ke_malaria_badge',
                'type'          => 'text',
                'default_value' => 'HIGH RISK AREA',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_malaria_title',
                'label'         => 'Title',
                'name'          => 'ke_malaria_title',
                'type'          => 'text',
                'default_value' => 'Malaria Risk in Kenya',
            ),
            array(
                'key'           => 'field_dp_travel_ken_malaria_intro',
                'label'         => 'Introduction',
                'name'          => 'ke_malaria_intro',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Malaria risk is high throughout most of Kenya, including safari parks. Antimalarials are usually recommended.',
            ),
            array(
                'key'          => 'field_dp_travel_ken_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'ke_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Risk Item',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_ken_risk_level',
                        'label'        => 'Risk Level',
                        'name'         => 'risk_level',
                        'type'         => 'select',
                        'choices'      => array( 'low-risk' => 'Low Risk', 'high-risk' => 'High Risk' ),
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_ken_risk_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_ken_risk_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '50' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_ken_risk_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-kenya.php',
                ),
            ),
        ),
        'menu_order'            => 2030,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L3: TRAVEL KENYA — Health Tips
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_ken_health',
        'title'  => 'L3 — Kenya: Health Tips',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_ken_health_badge',
                'label'         => 'Badge Text',
                'name'          => 'ke_health_badge',
                'type'          => 'text',
                'default_value' => 'HEALTH ADVICE',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_health_title',
                'label'         => 'Title',
                'name'          => 'ke_health_title',
                'type'          => 'text',
                'default_value' => 'Stay healthy in Kenya',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_health_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'ke_health_subtitle',
                'type'          => 'text',
                'default_value' => 'Essential tips for a safe safari',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'          => 'field_dp_travel_ken_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'ke_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Tip',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_ken_tip_image',
                        'label'         => 'Background Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                    ),
                    array(
                        'key'          => 'field_dp_travel_ken_tip_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '33' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_ken_tip_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '33' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_ken_tip_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-kenya.php',
                ),
            ),
        ),
        'menu_order'            => 2040,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L3: TRAVEL KENYA — Final CTA
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_ken_cta',
        'title'  => 'L3 — Kenya: Final CTA',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_ken_cta_title',
                'label'         => 'Title',
                'name'          => 'ke_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready for your Kenya safari?',
            ),
            array(
                'key'           => 'field_dp_travel_ken_cta_desc',
                'label'         => 'Description',
                'name'          => 'ke_cta_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Book your travel health consultation at our Denton clinic. Get expert advice and all recommended vaccinations in one visit.',
            ),
            array(
                'key'           => 'field_dp_travel_ken_cta_primary_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'ke_cta_primary_text',
                'type'          => 'text',
                'default_value' => 'Book Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'   => 'field_dp_travel_ken_cta_primary_url',
                'label' => 'Primary CTA URL',
                'name'  => 'ke_cta_primary_url',
                'type'  => 'url',
                'wrapper' => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_cta_check_1',
                'label'         => 'Check 1',
                'name'          => 'ke_cta_check_1',
                'type'          => 'text',
                'default_value' => 'Travel Ready',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_cta_check_2',
                'label'         => 'Check 2',
                'name'          => 'ke_cta_check_2',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_ken_cta_check_3',
                'label'         => 'Check 3',
                'name'          => 'ke_cta_check_3',
                'type'          => 'text',
                'default_value' => 'All Vaccines',
                'wrapper'       => array( 'width' => '33' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-kenya.php',
                ),
            ),
        ),
        'menu_order'            => 2050,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L4: TRAVEL BRAZIL — Hero
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_braz_hero',
        'title'  => 'L4 — Brazil: Hero',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_braz_hero_badge',
                'label'         => 'Badge Text',
                'name'          => 'td_hero_badge',
                'type'          => 'text',
                'default_value' => 'BRAZIL TRAVEL HEALTH',
            ),
            array(
                'key'           => 'field_dp_travel_braz_hero_title_line1',
                'label'         => 'Title Line 1',
                'name'          => 'td_hero_title_line1',
                'type'          => 'text',
                'default_value' => 'Travel Vaccinations for',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_hero_highlight',
                'label'         => 'Title Highlight',
                'name'          => 'td_hero_title_highlight',
                'type'          => 'text',
                'default_value' => 'Brazil',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_hero_desc',
                'label'         => 'Description',
                'name'          => 'td_hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Expert advice and vaccinations for your Brazil trip. Yellow Fever, Dengue, and more. Get protected with Denton\'s specialists.',
            ),
            array(
                'key'           => 'field_dp_travel_braz_hero_cta_text',
                'label'         => 'CTA Text',
                'name'          => 'td_hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Book Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_hero_cta_url',
                'label'         => 'CTA URL',
                'name'          => 'td_hero_cta_url',
                'type'          => 'url',
                'wrapper'       => array( 'width' => '50' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-brazil.php',
                ),
            ),
        ),
        'menu_order'            => 2100,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L4: TRAVEL BRAZIL — Stats Bar
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_braz_stats',
        'title'  => 'L4 — Brazil: Stats Bar',
        'fields' => array(
            array(
                'key'          => 'field_dp_travel_braz_stats',
                'label'        => 'Stats',
                'name'         => 'td_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_braz_stat_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'instructions'  => 'Font Awesome class, e.g. fas fa-syringe',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_braz_stat_number',
                        'label'         => 'Number',
                        'name'          => 'number',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_braz_stat_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '40' ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-brazil.php',
                ),
            ),
        ),
        'menu_order'            => 2110,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L4: TRAVEL BRAZIL — Vaccinations
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_braz_vaccines',
        'title'  => 'L4 — Brazil: Vaccinations',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_braz_vaccines_title',
                'label'         => 'Section Title',
                'name'          => 'td_vaccines_title',
                'type'          => 'text',
                'default_value' => 'Protect yourself in Brazil',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_vaccines_desc',
                'label'         => 'Section Description',
                'name'          => 'td_vaccines_description',
                'type'          => 'text',
                'default_value' => 'These vaccinations are recommended for most travellers to Brazil',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_braz_vaccinations',
                'label'        => 'Vaccination Cards',
                'name'         => 'td_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Vaccination',
                'max'          => 8,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_braz_vax_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_braz_vax_name',
                        'label'   => 'Vaccine Name',
                        'name'    => 'name',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_braz_vax_badge_color',
                        'label'        => 'Badge Colour',
                        'name'         => 'badge_color',
                        'type'         => 'select',
                        'choices'      => array( 'purple' => 'Purple', 'gray' => 'Gray' ),
                        'default_value' => 'purple',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_braz_vax_badge_text',
                        'label'   => 'Badge Text',
                        'name'    => 'badge_text',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_braz_vax_short',
                        'label'   => 'Short Description',
                        'name'    => 'short_desc',
                        'type'    => 'text',
                    ),
                    array(
                        'key'     => 'field_dp_travel_braz_vax_desc',
                        'label'   => 'Full Description',
                        'name'    => 'description',
                        'type'    => 'textarea',
                        'rows'    => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-brazil.php',
                ),
            ),
        ),
        'menu_order'            => 2120,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L4: TRAVEL BRAZIL — Malaria Section
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_braz_malaria',
        'title'  => 'L4 — Brazil: Malaria & Dengue',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_braz_malaria_image',
                'label'         => 'Section Image',
                'name'          => 'td_malaria_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
            ),
            array(
                'key'           => 'field_dp_travel_braz_malaria_badge_text',
                'label'         => 'Image Badge Text',
                'name'          => 'td_malaria_badge_text',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_malaria_badge',
                'label'         => 'Section Badge',
                'name'          => 'td_malaria_badge',
                'type'          => 'text',
                'default_value' => 'MOSQUITO RISKS',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_malaria_title',
                'label'         => 'Title',
                'name'          => 'td_malaria_title',
                'type'          => 'text',
                'default_value' => 'Malaria & Dengue in Brazil',
            ),
            array(
                'key'           => 'field_dp_travel_braz_malaria_intro',
                'label'         => 'Introduction',
                'name'          => 'td_malaria_intro',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Malaria risk is high in the Amazon basin. Dengue fever is a risk nationwide. Zika and Chikungunya are also present.',
            ),
            array(
                'key'          => 'field_dp_travel_braz_malaria_cta_text',
                'label'        => 'CTA Button Text',
                'name'         => 'td_malaria_cta_text',
                'type'         => 'text',
                'default_value' => 'Check Your Risk',
                'wrapper'      => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_braz_malaria_cta_url',
                'label'        => 'CTA Button URL',
                'name'         => 'td_malaria_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to use the booking page URL.',
                'wrapper'      => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_braz_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'td_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Risk Item',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_braz_risk_level',
                        'label'        => 'Risk Level',
                        'name'         => 'risk_level',
                        'type'         => 'select',
                        'choices'      => array( 'low-risk' => 'Low Risk', 'high-risk' => 'High Risk' ),
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_braz_risk_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_braz_risk_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '50' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_braz_risk_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-brazil.php',
                ),
            ),
        ),
        'menu_order'            => 2130,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L4: TRAVEL BRAZIL — Health Tips
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_braz_health',
        'title'  => 'L4 — Brazil: Health Tips',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_braz_health_badge',
                'label'         => 'Badge Text',
                'name'          => 'td_health_badge',
                'type'          => 'text',
                'default_value' => 'HEALTH ADVICE',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_health_title',
                'label'         => 'Title',
                'name'          => 'td_health_title',
                'type'          => 'text',
                'default_value' => 'Stay healthy in Brazil',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_health_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'td_health_subtitle',
                'type'          => 'text',
                'default_value' => 'Essential tips for a safe trip',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'          => 'field_dp_travel_braz_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'td_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Tip',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_braz_tip_image',
                        'label'         => 'Background Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                    ),
                    array(
                        'key'          => 'field_dp_travel_braz_tip_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '33' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_braz_tip_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '33' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_braz_tip_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-brazil.php',
                ),
            ),
        ),
        'menu_order'            => 2140,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L4: TRAVEL BRAZIL — Final CTA
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_braz_cta',
        'title'  => 'L4 — Brazil: Final CTA',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_braz_cta_title',
                'label'         => 'Title',
                'name'          => 'td_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready for Brazil?',
            ),
            array(
                'key'           => 'field_dp_travel_braz_cta_desc',
                'label'         => 'Description',
                'name'          => 'td_cta_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Book your travel health consultation at our Denton clinic. Get expert advice and all recommended vaccinations in one visit.',
            ),
            array(
                'key'           => 'field_dp_travel_braz_cta_primary_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'td_cta_primary_text',
                'type'          => 'text',
                'default_value' => 'Book Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'   => 'field_dp_travel_braz_cta_primary_url',
                'label' => 'Primary CTA URL',
                'name'  => 'td_cta_primary_url',
                'type'  => 'url',
                'wrapper' => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_cta_check_1',
                'label'         => 'Check 1',
                'name'          => 'td_cta_check_1',
                'type'          => 'text',
                'default_value' => 'Travel Ready',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_cta_check_2',
                'label'         => 'Check 2',
                'name'          => 'td_cta_check_2',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_braz_cta_check_3',
                'label'         => 'Check 3',
                'name'          => 'td_cta_check_3',
                'type'          => 'text',
                'default_value' => 'All Vaccines',
                'wrapper'       => array( 'width' => '33' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-brazil.php',
                ),
            ),
        ),
        'menu_order'            => 2150,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L5: TRAVEL CAPE VERDE — Hero
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_cv_hero',
        'title'  => 'L5 — Cape Verde: Hero',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_cv_hero_badge',
                'label'         => 'Badge Text',
                'name'          => 'cv_hero_badge',
                'type'          => 'text',
                'default_value' => 'CAPE VERDE TRAVEL HEALTH',
            ),
            array(
                'key'           => 'field_dp_travel_cv_hero_title_line1',
                'label'         => 'Title Line 1',
                'name'          => 'cv_hero_title_line1',
                'type'          => 'text',
                'default_value' => 'Travel Vaccinations for',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_hero_highlight',
                'label'         => 'Title Highlight',
                'name'          => 'cv_hero_title_highlight',
                'type'          => 'text',
                'default_value' => 'Cape Verde',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_hero_desc',
                'label'         => 'Description',
                'name'          => 'cv_hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Expert advice and vaccinations for your Cape Verde holiday. Get protected before you travel with Denton\'s trusted travel health specialists.',
            ),
            array(
                'key'           => 'field_dp_travel_cv_hero_cta_text',
                'label'         => 'CTA Text',
                'name'          => 'cv_hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Book Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_hero_cta_url',
                'label'         => 'CTA URL',
                'name'          => 'cv_hero_cta_url',
                'type'          => 'url',
                'wrapper'       => array( 'width' => '50' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-cape-verde.php',
                ),
            ),
        ),
        'menu_order'            => 2200,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L5: TRAVEL CAPE VERDE — Stats Bar
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_cv_stats',
        'title'  => 'L5 — Cape Verde: Stats Bar',
        'fields' => array(
            array(
                'key'          => 'field_dp_travel_cv_stats',
                'label'        => 'Stats',
                'name'         => 'cv_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_cv_stat_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'instructions'  => 'Font Awesome class, e.g. fas fa-syringe',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_cv_stat_number',
                        'label'         => 'Number',
                        'name'          => 'number',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_dp_travel_cv_stat_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '40' ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-cape-verde.php',
                ),
            ),
        ),
        'menu_order'            => 2210,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L5: TRAVEL CAPE VERDE — Vaccinations
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_cv_vaccines',
        'title'  => 'L5 — Cape Verde: Vaccinations',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_cv_vaccines_title',
                'label'         => 'Section Title',
                'name'          => 'cv_vaccines_title',
                'type'          => 'text',
                'default_value' => 'Protect yourself in Cape Verde',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_vaccines_desc',
                'label'         => 'Section Description',
                'name'          => 'cv_vaccines_description',
                'type'          => 'text',
                'default_value' => 'These vaccinations are recommended for most travellers to Cape Verde',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'          => 'field_dp_travel_cv_vaccinations',
                'label'        => 'Vaccination Cards',
                'name'         => 'cv_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Vaccination',
                'max'          => 8,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_cv_vax_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_cv_vax_name',
                        'label'   => 'Vaccine Name',
                        'name'    => 'name',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_cv_vax_badge_color',
                        'label'        => 'Badge Colour',
                        'name'         => 'badge_color',
                        'type'         => 'select',
                        'choices'      => array( 'purple' => 'Purple', 'gray' => 'Gray' ),
                        'default_value' => 'purple',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_cv_vax_badge_text',
                        'label'   => 'Badge Text',
                        'name'    => 'badge_text',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_cv_vax_short',
                        'label'   => 'Short Description',
                        'name'    => 'short_desc',
                        'type'    => 'text',
                    ),
                    array(
                        'key'     => 'field_dp_travel_cv_vax_desc',
                        'label'   => 'Full Description',
                        'name'    => 'description',
                        'type'    => 'textarea',
                        'rows'    => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-cape-verde.php',
                ),
            ),
        ),
        'menu_order'            => 2220,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L5: TRAVEL CAPE VERDE — Malaria Section
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_cv_malaria',
        'title'  => 'L5 — Cape Verde: Malaria & Dengue',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_cv_malaria_image',
                'label'         => 'Section Image',
                'name'          => 'cv_malaria_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
            ),
            array(
                'key'           => 'field_dp_travel_cv_malaria_image_alt',
                'label'         => 'Image Alt Text',
                'name'          => 'cv_malaria_image_alt',
                'type'          => 'text',
                'default_value' => 'Cape Verde landscape',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_malaria_badge_text',
                'label'         => 'Image Badge Text',
                'name'          => 'cv_malaria_badge_text',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_malaria_badge',
                'label'         => 'Section Badge',
                'name'          => 'cv_malaria_badge',
                'type'          => 'text',
                'default_value' => 'MOSQUITO RISKS',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_malaria_title',
                'label'         => 'Title',
                'name'          => 'cv_malaria_title',
                'type'          => 'text',
                'default_value' => 'Malaria & Dengue in Cape Verde',
            ),
            array(
                'key'           => 'field_dp_travel_cv_malaria_intro',
                'label'         => 'Introduction',
                'name'          => 'cv_malaria_intro',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Malaria risk is generally low but present on Santiago island. Dengue fever and Zika virus are also risks. Bite avoidance is essential.',
            ),
            array(
                'key'          => 'field_dp_travel_cv_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'cv_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Risk Item',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'          => 'field_dp_travel_cv_risk_level',
                        'label'        => 'Risk Level',
                        'name'         => 'risk_level',
                        'type'         => 'select',
                        'choices'      => array( 'low-risk' => 'Low Risk', 'high-risk' => 'High Risk' ),
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'          => 'field_dp_travel_cv_risk_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '25' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_cv_risk_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '50' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_cv_risk_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_malaria_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'cv_malaria_cta_text',
                'type'          => 'text',
                'default_value' => 'Check Your Risk',
            ),
            array(
                'key'   => 'field_dp_travel_cv_malaria_cta_url',
                'label' => 'CTA Button URL',
                'name'  => 'cv_malaria_cta_url',
                'type'  => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-cape-verde.php',
                ),
            ),
        ),
        'menu_order'            => 2230,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L5: TRAVEL CAPE VERDE — Health Tips
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_cv_health',
        'title'  => 'L5 — Cape Verde: Health Tips',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_cv_health_badge',
                'label'         => 'Badge Text',
                'name'          => 'cv_health_badge',
                'type'          => 'text',
                'default_value' => 'HEALTH ADVICE',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_health_title',
                'label'         => 'Title',
                'name'          => 'cv_health_title',
                'type'          => 'text',
                'default_value' => 'Stay healthy in Cape Verde',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_health_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'cv_health_subtitle',
                'type'          => 'text',
                'default_value' => 'Essential tips for a safe trip',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'          => 'field_dp_travel_cv_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'cv_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Tip',
                'max'          => 4,
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_travel_cv_tip_image',
                        'label'         => 'Background Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                    ),
                    array(
                        'key'          => 'field_dp_travel_cv_tip_icon',
                        'label'        => 'Icon',
                        'name'         => 'icon',
                        'type'         => 'text',
                        'instructions' => 'Font Awesome class',
                        'wrapper'      => array( 'width' => '33' ),
                    ),
                    array(
                        'key'     => 'field_dp_travel_cv_tip_title',
                        'label'   => 'Title',
                        'name'    => 'title',
                        'type'    => 'text',
                        'wrapper' => array( 'width' => '33' ),
                    ),
                    array(
                        'key'  => 'field_dp_travel_cv_tip_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-cape-verde.php',
                ),
            ),
        ),
        'menu_order'            => 2240,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L5: TRAVEL CAPE VERDE — Final CTA
    // =========================================================================
    acf_add_local_field_group( array(
        'key'    => 'group_dp_travel_cv_cta',
        'title'  => 'L5 — Cape Verde: Final CTA',
        'fields' => array(
            array(
                'key'           => 'field_dp_travel_cv_cta_title',
                'label'         => 'Title',
                'name'          => 'cv_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready for Cape Verde?',
            ),
            array(
                'key'           => 'field_dp_travel_cv_cta_desc',
                'label'         => 'Description',
                'name'          => 'cv_cta_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Book your travel health consultation at our Denton clinic. Get expert advice and all recommended vaccinations in one visit.',
            ),
            array(
                'key'           => 'field_dp_travel_cv_cta_primary_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'cv_cta_primary_text',
                'type'          => 'text',
                'default_value' => 'Book Consultation',
                'wrapper'       => array( 'width' => '50' ),
            ),
            array(
                'key'   => 'field_dp_travel_cv_cta_primary_url',
                'label' => 'Primary CTA URL',
                'name'  => 'cv_cta_primary_url',
                'type'  => 'url',
                'wrapper' => array( 'width' => '50' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_cta_check_1',
                'label'         => 'Check 1',
                'name'          => 'cv_cta_check_1',
                'type'          => 'text',
                'default_value' => 'Travel Ready',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_cta_check_2',
                'label'         => 'Check 2',
                'name'          => 'cv_cta_check_2',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
                'wrapper'       => array( 'width' => '33' ),
            ),
            array(
                'key'           => 'field_dp_travel_cv_cta_check_3',
                'label'         => 'Check 3',
                'name'          => 'cv_cta_check_3',
                'type'          => 'text',
                'default_value' => 'All Vaccines',
                'wrapper'       => array( 'width' => '33' ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-travel-cape-verde.php',
                ),
            ),
        ),
        'menu_order'            => 2250,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // N. PHARMACY FIRST PAGE FIELDS
    // =========================================================================

    // ── N1. Hero ──────────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_pf_hero',
        'title'  => 'Pharmacy First — Hero',
        'fields' => array(
            array( 'key' => 'field_dp_pf_hero_badge', 'label' => 'Badge Text', 'name' => 'pf_hero_badge', 'type' => 'text', 'default_value' => 'NHS PHARMACY FIRST SERVICE' ),
            array( 'key' => 'field_dp_pf_hero_title_highlight', 'label' => 'Title (Gradient)', 'name' => 'pf_hero_title_highlight', 'type' => 'text', 'default_value' => 'Free NHS Treatment' ),
            array( 'key' => 'field_dp_pf_hero_title_rest', 'label' => 'Title (Rest)', 'name' => 'pf_hero_title_rest', 'type' => 'text', 'default_value' => 'in Denton' ),
            array( 'key' => 'field_dp_pf_hero_description', 'label' => 'Description', 'name' => 'pf_hero_description', 'type' => 'textarea', 'rows' => 3 ),
            array( 'key' => 'field_dp_pf_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'pf_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Pharmacy First Visit' ),
            array( 'key' => 'field_dp_pf_hero_cta_url', 'label' => 'CTA Button URL', 'name' => 'pf_hero_cta_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_pf_hero_image', 'label' => 'Hero Image', 'name' => 'pf_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_dp_pf_hero_image_alt', 'label' => 'Hero Image Alt', 'name' => 'pf_hero_image_alt', 'type' => 'text' ),
            array( 'key' => 'field_dp_pf_price_label', 'label' => 'Price Label', 'name' => 'pf_price_label', 'type' => 'text', 'default_value' => 'NHS Service' ),
            array( 'key' => 'field_dp_pf_price_amount', 'label' => 'Price Amount', 'name' => 'pf_price_amount', 'type' => 'text', 'default_value' => 'FREE' ),
            array( 'key' => 'field_dp_pf_price_sub', 'label' => 'Price Subtext', 'name' => 'pf_price_sub', 'type' => 'text', 'default_value' => 'no charge to you' ),
            array( 'key' => 'field_dp_pf_trust_1', 'label' => 'Trust Pill 1', 'name' => 'pf_trust_1', 'type' => 'text', 'default_value' => 'NHS Funded' ),
            array( 'key' => 'field_dp_pf_trust_1_icon', 'label' => 'Trust Pill 1 — Icon', 'name' => 'pf_trust_1_icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle', 'instructions' => 'Font Awesome class, e.g. fas fa-check-circle' ),
            array( 'key' => 'field_dp_pf_trust_2', 'label' => 'Trust Pill 2', 'name' => 'pf_trust_2', 'type' => 'text', 'default_value' => 'No GP Appointment Needed' ),
            array( 'key' => 'field_dp_pf_trust_2_icon', 'label' => 'Trust Pill 2 — Icon', 'name' => 'pf_trust_2_icon', 'type' => 'text', 'default_value' => 'fas fa-calendar-check', 'instructions' => 'Font Awesome class, e.g. fas fa-calendar-check' ),
            array( 'key' => 'field_dp_pf_trust_3', 'label' => 'Trust Pill 3', 'name' => 'pf_trust_3', 'type' => 'text', 'default_value' => 'Same-Day Treatment' ),
            array( 'key' => 'field_dp_pf_trust_3_icon', 'label' => 'Trust Pill 3 — Icon', 'name' => 'pf_trust_3_icon', 'type' => 'text', 'default_value' => 'fas fa-clock', 'instructions' => 'Font Awesome class, e.g. fas fa-clock' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-pharmacy-first.php',
                ),
            ),
        ),
        'menu_order'            => 2300,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N2. Stats Bar ─────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_pf_stats',
        'title'  => 'Pharmacy First — Stats Bar',
        'fields' => array(
            array( 'key' => 'field_dp_pf_stat_1_icon', 'label' => 'Stat 1 Icon', 'name' => 'pf_stat_1_icon', 'type' => 'text', 'default_value' => 'fas fa-sterling-sign' ),
            array( 'key' => 'field_dp_pf_stat_1_number', 'label' => 'Stat 1 Number', 'name' => 'pf_stat_1_number', 'type' => 'text', 'default_value' => 'FREE' ),
            array( 'key' => 'field_dp_pf_stat_1_label', 'label' => 'Stat 1 Label', 'name' => 'pf_stat_1_label', 'type' => 'text', 'default_value' => 'No Cost to You' ),
            array( 'key' => 'field_dp_pf_stat_2_icon', 'label' => 'Stat 2 Icon', 'name' => 'pf_stat_2_icon', 'type' => 'text', 'default_value' => 'fas fa-list-check' ),
            array( 'key' => 'field_dp_pf_stat_2_number', 'label' => 'Stat 2 Number', 'name' => 'pf_stat_2_number', 'type' => 'text', 'default_value' => '7' ),
            array( 'key' => 'field_dp_pf_stat_2_label', 'label' => 'Stat 2 Label', 'name' => 'pf_stat_2_label', 'type' => 'text', 'default_value' => 'Conditions Treated' ),
            array( 'key' => 'field_dp_pf_stat_3_icon', 'label' => 'Stat 3 Icon', 'name' => 'pf_stat_3_icon', 'type' => 'text', 'default_value' => 'fas fa-user-doctor' ),
            array( 'key' => 'field_dp_pf_stat_3_number', 'label' => 'Stat 3 Number', 'name' => 'pf_stat_3_number', 'type' => 'text', 'default_value' => 'No GP' ),
            array( 'key' => 'field_dp_pf_stat_3_label', 'label' => 'Stat 3 Label', 'name' => 'pf_stat_3_label', 'type' => 'text', 'default_value' => 'Appointment Needed' ),
            array( 'key' => 'field_dp_pf_stat_4_icon', 'label' => 'Stat 4 Icon', 'name' => 'pf_stat_4_icon', 'type' => 'text', 'default_value' => 'fas fa-clock' ),
            array( 'key' => 'field_dp_pf_stat_4_number', 'label' => 'Stat 4 Number', 'name' => 'pf_stat_4_number', 'type' => 'text', 'default_value' => 'Same Day' ),
            array( 'key' => 'field_dp_pf_stat_4_label', 'label' => 'Stat 4 Label', 'name' => 'pf_stat_4_label', 'type' => 'text', 'default_value' => 'Treatment Available' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-pharmacy-first.php',
                ),
            ),
        ),
        'menu_order'            => 2301,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N3. Conditions Grid ───────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_pf_conditions',
        'title'  => 'Pharmacy First — Conditions',
        'fields' => array(
            array( 'key' => 'field_dp_pf_conditions_badge', 'label' => 'Badge Text', 'name' => 'pf_conditions_badge', 'type' => 'text', 'default_value' => 'CONDITIONS WE TREAT' ),
            array( 'key' => 'field_dp_pf_conditions_title', 'label' => 'Section Title', 'name' => 'pf_conditions_title', 'type' => 'text', 'default_value' => '7 Common Conditions Treated Free' ),
            array( 'key' => 'field_dp_pf_conditions_desc', 'label' => 'Description', 'name' => 'pf_conditions_description', 'type' => 'textarea', 'rows' => 2 ),
            array(
                'key'          => 'field_dp_pf_conditions',
                'label'        => 'Conditions',
                'name'         => 'pf_conditions',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Condition',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_pf_cond_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_pf_cond_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_pf_cond_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_pf_cond_tag', 'label' => 'Tag (optional)', 'name' => 'tag', 'type' => 'text', 'wrapper' => array( 'width' => '15' ) ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-pharmacy-first.php',
                ),
            ),
        ),
        'menu_order'            => 2302,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N4. Process + Eligibility ─────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_pf_process',
        'title'  => 'Pharmacy First — Process & Eligibility',
        'fields' => array(
            array( 'key' => 'field_dp_pf_process_badge', 'label' => 'Badge Text', 'name' => 'pf_process_badge', 'type' => 'text', 'default_value' => 'HOW IT WORKS' ),
            array( 'key' => 'field_dp_pf_process_title', 'label' => 'Section Title', 'name' => 'pf_process_title', 'type' => 'text', 'default_value' => 'Three Simple Steps to Free Treatment' ),
            array( 'key' => 'field_dp_pf_process_desc', 'label' => 'Description', 'name' => 'pf_process_description', 'type' => 'text' ),
            array(
                'key'           => 'field_dp_pf_process_image',
                'label'         => 'Lifestyle Image',
                'name'          => 'pf_process_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Portrait lifestyle image (e.g. pharmacist consultation). Recommended: 800x1000px. Falls back to global pharmacist image.',
            ),
            array(
                'key'          => 'field_dp_pf_process_steps',
                'label'        => 'Steps',
                'name'         => 'pf_process_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_pf_step_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_pf_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_dp_pf_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '50' ) ),
                ),
            ),
            array( 'key' => 'field_dp_pf_eligibility_title', 'label' => 'Eligibility Title', 'name' => 'pf_eligibility_title', 'type' => 'text', 'default_value' => 'Who Is Eligible?' ),
            array( 'key' => 'field_dp_pf_eligibility_text', 'label' => 'Eligibility Text', 'name' => 'pf_eligibility_text', 'type' => 'textarea', 'rows' => 3 ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-pharmacy-first.php',
                ),
            ),
        ),
        'menu_order'            => 2303,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N5. FAQ ───────────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_pf_faq',
        'title'  => 'Pharmacy First — FAQ',
        'fields' => array(
            array( 'key' => 'field_dp_pf_faq_badge', 'label' => 'Badge Text', 'name' => 'pf_faq_badge', 'type' => 'text', 'default_value' => 'FREQUENTLY ASKED QUESTIONS' ),
            array( 'key' => 'field_dp_pf_faq_title', 'label' => 'Section Title', 'name' => 'pf_faq_title', 'type' => 'text', 'default_value' => 'Pharmacy First — Your Questions Answered' ),
            array(
                'key'          => 'field_dp_pf_faqs',
                'label'        => 'FAQs',
                'name'         => 'pf_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_pf_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_pf_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-pharmacy-first.php',
                ),
            ),
        ),
        'menu_order'            => 2304,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N6. Final CTA ─────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_pf_cta',
        'title'  => 'Pharmacy First — Final CTA',
        'fields' => array(
            array( 'key' => 'field_dp_pf_cta_badge_1', 'label' => 'Badge 1', 'name' => 'pf_cta_badge_1', 'type' => 'text', 'default_value' => 'Free NHS Service' ),
            array( 'key' => 'field_dp_pf_cta_badge_2', 'label' => 'Badge 2', 'name' => 'pf_cta_badge_2', 'type' => 'text', 'default_value' => 'No GP Needed' ),
            array( 'key' => 'field_dp_pf_cta_badge_3', 'label' => 'Badge 3', 'name' => 'pf_cta_badge_3', 'type' => 'text', 'default_value' => 'GPhC Registered' ),
            array( 'key' => 'field_dp_pf_cta_title', 'label' => 'Title', 'name' => 'pf_cta_title', 'type' => 'text', 'default_value' => 'Get Free NHS Treatment Today' ),
            array( 'key' => 'field_dp_pf_cta_desc', 'label' => 'Description', 'name' => 'pf_cta_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_pf_cta_primary_url', 'label' => 'CTA URL', 'name' => 'pf_cta_primary_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_pf_cta_button_text', 'label' => 'CTA Button Text', 'name' => 'pf_cta_button_text', 'type' => 'text', 'default_value' => 'Book Pharmacy First Visit' ),
            array( 'key' => 'field_dp_pf_cta_check_1', 'label' => 'Trust Check 1', 'name' => 'pf_cta_check_1', 'type' => 'text', 'default_value' => 'No referral needed' ),
            array( 'key' => 'field_dp_pf_cta_check_2', 'label' => 'Trust Check 2', 'name' => 'pf_cta_check_2', 'type' => 'text', 'default_value' => '7 conditions treated free' ),
            array( 'key' => 'field_dp_pf_cta_check_3', 'label' => 'Trust Check 3', 'name' => 'pf_cta_check_3', 'type' => 'text', 'default_value' => 'Same-day appointments' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-pharmacy-first.php',
                ),
            ),
        ),
        'menu_order'            => 2305,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // N.2 NHS PRESCRIPTIONS PAGE FIELDS
    // All fields intentionally have NO default_value — content is seeded in DB.
    // =========================================================================
    $np_location = array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-nhs-prescriptions.php' ) ) );

    // Hero
    acf_add_local_field_group( array(
        'key'    => 'group_dp_np_hero',
        'title'  => 'NHS Prescriptions — Hero',
        'fields' => array(
            array( 'key' => 'field_dp_np_hero_badge', 'label' => 'Badge Text', 'name' => 'np_hero_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_hero_title_accent', 'label' => 'Title (Gradient)', 'name' => 'np_hero_title_accent', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_hero_title_rest', 'label' => 'Title (Rest)', 'name' => 'np_hero_title_rest', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_hero_description', 'label' => 'Description', 'name' => 'np_hero_description', 'type' => 'textarea', 'rows' => 3 ),
            array( 'key' => 'field_dp_np_hero_cta_primary', 'label' => 'Primary CTA', 'name' => 'np_hero_cta_primary', 'type' => 'link', 'return_format' => 'array' ),
            array( 'key' => 'field_dp_np_hero_cta_secondary', 'label' => 'Secondary CTA', 'name' => 'np_hero_cta_secondary', 'type' => 'link', 'return_format' => 'array' ),
            array( 'key' => 'field_dp_np_hero_trust_pills', 'label' => 'Trust Pills', 'name' => 'np_hero_trust_pills', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Pill', 'sub_fields' => array(
                array( 'key' => 'field_dp_np_hero_trust_pill_icon', 'label' => 'Icon (FA class)', 'name' => 'icon', 'type' => 'text' ),
                array( 'key' => 'field_dp_np_hero_trust_pill_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
            ) ),
            array( 'key' => 'field_dp_np_hero_card_label', 'label' => 'Info Card — Label', 'name' => 'np_hero_card_label', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_hero_card_price', 'label' => 'Info Card — Price/Amount', 'name' => 'np_hero_card_price', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_hero_card_sub', 'label' => 'Info Card — Sub-text', 'name' => 'np_hero_card_sub', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_hero_card_checks', 'label' => 'Info Card — Check Items', 'name' => 'np_hero_card_checks', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Check', 'sub_fields' => array(
                array( 'key' => 'field_dp_np_hero_card_check_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
            ) ),
        ),
        'location' => $np_location,
        'menu_order' => 2400, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    // Eligibility Grid
    acf_add_local_field_group( array(
        'key'    => 'group_dp_np_elig',
        'title'  => 'NHS Prescriptions — Who\'s Eligible',
        'fields' => array(
            array( 'key' => 'field_dp_np_elig_badge', 'label' => 'Badge Text', 'name' => 'np_elig_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_elig_title', 'label' => 'Section Title', 'name' => 'np_elig_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_elig_description', 'label' => 'Description', 'name' => 'np_elig_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_np_elig_items', 'label' => 'Eligibility Items', 'name' => 'np_elig_items', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Item', 'sub_fields' => array(
                array( 'key' => 'field_dp_np_elig_item_icon', 'label' => 'Icon (FA class)', 'name' => 'icon', 'type' => 'text' ),
                array( 'key' => 'field_dp_np_elig_item_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_dp_np_elig_item_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ) ),
        ),
        'location' => $np_location,
        'menu_order' => 2401, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    // Process Steps
    acf_add_local_field_group( array(
        'key'    => 'group_dp_np_process',
        'title'  => 'NHS Prescriptions — How It Works',
        'fields' => array(
            array( 'key' => 'field_dp_np_process_badge', 'label' => 'Badge Text', 'name' => 'np_process_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_process_title', 'label' => 'Section Title', 'name' => 'np_process_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_process_description', 'label' => 'Description', 'name' => 'np_process_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_np_process_steps', 'label' => 'Steps', 'name' => 'np_process_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step', 'sub_fields' => array(
                array( 'key' => 'field_dp_np_process_step_icon', 'label' => 'Icon (FA class)', 'name' => 'icon', 'type' => 'text' ),
                array( 'key' => 'field_dp_np_process_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_dp_np_process_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ) ),
        ),
        'location' => $np_location,
        'menu_order' => 2402, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    // FAQ
    acf_add_local_field_group( array(
        'key'    => 'group_dp_np_faq',
        'title'  => 'NHS Prescriptions — FAQ',
        'fields' => array(
            array( 'key' => 'field_dp_np_faq_badge', 'label' => 'Badge Text', 'name' => 'np_faq_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_faq_title', 'label' => 'Section Title', 'name' => 'np_faq_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_faqs', 'label' => 'FAQs', 'name' => 'np_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ', 'sub_fields' => array(
                array( 'key' => 'field_dp_np_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_dp_np_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
            ) ),
        ),
        'location' => $np_location,
        'menu_order' => 2403, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    // Final CTA
    acf_add_local_field_group( array(
        'key'    => 'group_dp_np_cta',
        'title'  => 'NHS Prescriptions — Final CTA',
        'fields' => array(
            array( 'key' => 'field_dp_np_cta_title', 'label' => 'Title', 'name' => 'np_cta_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_np_cta_description', 'label' => 'Description', 'name' => 'np_cta_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_np_cta_primary', 'label' => 'Primary CTA', 'name' => 'np_cta_primary', 'type' => 'link', 'return_format' => 'array' ),
            array( 'key' => 'field_dp_np_cta_secondary', 'label' => 'Secondary CTA', 'name' => 'np_cta_secondary', 'type' => 'link', 'return_format' => 'array' ),
            array( 'key' => 'field_dp_np_cta_badges', 'label' => 'Trust Badges', 'name' => 'np_cta_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge', 'sub_fields' => array(
                array( 'key' => 'field_dp_np_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
            ) ),
        ),
        'location' => $np_location,
        'menu_order' => 2404, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    // =========================================================================
    // N.3 BLISTER PACKS PAGE FIELDS
    // All fields intentionally have NO default_value — content is seeded in DB.
    // =========================================================================
    $bp_location = array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-blister-packs.php' ) ) );

    acf_add_local_field_group( array(
        'key'    => 'group_dp_bp_hero',
        'title'  => 'Blister Packs — Hero',
        'fields' => array(
            array( 'key' => 'field_dp_bp_hero_badge', 'label' => 'Badge Text', 'name' => 'bp_hero_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_hero_title_accent', 'label' => 'Title (Gradient)', 'name' => 'bp_hero_title_accent', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_hero_title_rest', 'label' => 'Title (Rest)', 'name' => 'bp_hero_title_rest', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_hero_description', 'label' => 'Description', 'name' => 'bp_hero_description', 'type' => 'textarea', 'rows' => 3 ),
            array( 'key' => 'field_dp_bp_hero_cta_primary', 'label' => 'Primary CTA', 'name' => 'bp_hero_cta_primary', 'type' => 'link', 'return_format' => 'array' ),
            array( 'key' => 'field_dp_bp_hero_cta_secondary', 'label' => 'Secondary CTA', 'name' => 'bp_hero_cta_secondary', 'type' => 'link', 'return_format' => 'array' ),
            array( 'key' => 'field_dp_bp_hero_trust_pills', 'label' => 'Trust Pills', 'name' => 'bp_hero_trust_pills', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Pill', 'sub_fields' => array(
                array( 'key' => 'field_dp_bp_hero_trust_pill_icon', 'label' => 'Icon (FA class)', 'name' => 'icon', 'type' => 'text' ),
                array( 'key' => 'field_dp_bp_hero_trust_pill_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
            ) ),
            array( 'key' => 'field_dp_bp_hero_card_label', 'label' => 'Info Card — Label', 'name' => 'bp_hero_card_label', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_hero_card_price', 'label' => 'Info Card — Price/Amount', 'name' => 'bp_hero_card_price', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_hero_card_sub', 'label' => 'Info Card — Sub-text', 'name' => 'bp_hero_card_sub', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_hero_card_checks', 'label' => 'Info Card — Check Items', 'name' => 'bp_hero_card_checks', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Check', 'sub_fields' => array(
                array( 'key' => 'field_dp_bp_hero_card_check_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
            ) ),
        ),
        'location' => $bp_location,
        'menu_order' => 2500, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    acf_add_local_field_group( array(
        'key'    => 'group_dp_bp_elig',
        'title'  => 'Blister Packs — Who It\'s For',
        'fields' => array(
            array( 'key' => 'field_dp_bp_elig_badge', 'label' => 'Badge Text', 'name' => 'bp_elig_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_elig_title', 'label' => 'Section Title', 'name' => 'bp_elig_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_elig_description', 'label' => 'Description', 'name' => 'bp_elig_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_bp_elig_items', 'label' => 'Benefit / Eligibility Items', 'name' => 'bp_elig_items', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Item', 'sub_fields' => array(
                array( 'key' => 'field_dp_bp_elig_item_icon', 'label' => 'Icon (FA class)', 'name' => 'icon', 'type' => 'text' ),
                array( 'key' => 'field_dp_bp_elig_item_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_dp_bp_elig_item_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ) ),
        ),
        'location' => $bp_location,
        'menu_order' => 2501, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    acf_add_local_field_group( array(
        'key'    => 'group_dp_bp_process',
        'title'  => 'Blister Packs — How It Works',
        'fields' => array(
            array( 'key' => 'field_dp_bp_process_badge', 'label' => 'Badge Text', 'name' => 'bp_process_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_process_title', 'label' => 'Section Title', 'name' => 'bp_process_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_process_description', 'label' => 'Description', 'name' => 'bp_process_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_bp_process_steps', 'label' => 'Steps', 'name' => 'bp_process_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step', 'sub_fields' => array(
                array( 'key' => 'field_dp_bp_process_step_icon', 'label' => 'Icon (FA class)', 'name' => 'icon', 'type' => 'text' ),
                array( 'key' => 'field_dp_bp_process_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_dp_bp_process_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ) ),
        ),
        'location' => $bp_location,
        'menu_order' => 2502, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    acf_add_local_field_group( array(
        'key'    => 'group_dp_bp_faq',
        'title'  => 'Blister Packs — FAQ',
        'fields' => array(
            array( 'key' => 'field_dp_bp_faq_badge', 'label' => 'Badge Text', 'name' => 'bp_faq_badge', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_faq_title', 'label' => 'Section Title', 'name' => 'bp_faq_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_faqs', 'label' => 'FAQs', 'name' => 'bp_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ', 'sub_fields' => array(
                array( 'key' => 'field_dp_bp_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_dp_bp_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
            ) ),
        ),
        'location' => $bp_location,
        'menu_order' => 2503, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    acf_add_local_field_group( array(
        'key'    => 'group_dp_bp_cta',
        'title'  => 'Blister Packs — Final CTA',
        'fields' => array(
            array( 'key' => 'field_dp_bp_cta_title', 'label' => 'Title', 'name' => 'bp_cta_title', 'type' => 'text' ),
            array( 'key' => 'field_dp_bp_cta_description', 'label' => 'Description', 'name' => 'bp_cta_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_bp_cta_primary', 'label' => 'Primary CTA', 'name' => 'bp_cta_primary', 'type' => 'link', 'return_format' => 'array' ),
            array( 'key' => 'field_dp_bp_cta_secondary', 'label' => 'Secondary CTA', 'name' => 'bp_cta_secondary', 'type' => 'link', 'return_format' => 'array' ),
            array( 'key' => 'field_dp_bp_cta_badges', 'label' => 'Trust Badges', 'name' => 'bp_cta_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge', 'sub_fields' => array(
                array( 'key' => 'field_dp_bp_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
            ) ),
        ),
        'location' => $bp_location,
        'menu_order' => 2504, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top', 'instruction_placement' => 'label', 'active' => true,
    ) );

    // =========================================================================
    // O. BLOOD TESTING PAGE FIELDS
    // =========================================================================

    // ── O1. Hero ─────────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_bt_hero',
        'title'  => 'Blood Testing — Hero',
        'fields' => array(
            array( 'key' => 'field_dp_bt_hero_badge', 'label' => 'Badge Text', 'name' => 'bt_hero_badge', 'type' => 'text', 'default_value' => 'PRIVATE BLOOD TESTING SERVICE' ),
            array( 'key' => 'field_dp_bt_hero_title_highlight', 'label' => 'Title (Gradient)', 'name' => 'bt_hero_title_highlight', 'type' => 'text', 'default_value' => 'Private Blood Testing' ),
            array( 'key' => 'field_dp_bt_hero_title_rest', 'label' => 'Title (Rest)', 'name' => 'bt_hero_title_rest', 'type' => 'text', 'default_value' => 'in Denton' ),
            array( 'key' => 'field_dp_bt_hero_description', 'label' => 'Description', 'name' => 'bt_hero_description', 'type' => 'textarea', 'rows' => 3 ),
            array( 'key' => 'field_dp_bt_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'bt_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Blood Test' ),
            array( 'key' => 'field_dp_bt_hero_cta_url', 'label' => 'CTA Button URL', 'name' => 'bt_hero_cta_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_bt_price_label', 'label' => 'Card Label', 'name' => 'bt_price_label', 'type' => 'text', 'default_value' => 'Private Blood Testing' ),
            array( 'key' => 'field_dp_bt_price_amount', 'label' => 'Card Amount', 'name' => 'bt_price_amount', 'type' => 'text', 'default_value' => 'FROM £39' ),
            array( 'key' => 'field_dp_bt_price_sub', 'label' => 'Card Sub-text', 'name' => 'bt_price_sub', 'type' => 'text', 'default_value' => 'per test panel' ),
            array( 'key' => 'field_dp_bt_trust_1', 'label' => 'Trust Pill 1', 'name' => 'bt_trust_1', 'type' => 'text', 'default_value' => 'Fast Results' ),
            array( 'key' => 'field_dp_bt_trust_1_icon', 'label' => 'Trust Pill 1 — Icon', 'name' => 'bt_trust_1_icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle', 'instructions' => 'Font Awesome class, e.g. fas fa-check-circle' ),
            array( 'key' => 'field_dp_bt_trust_2', 'label' => 'Trust Pill 2', 'name' => 'bt_trust_2', 'type' => 'text', 'default_value' => 'No GP Referral Needed' ),
            array( 'key' => 'field_dp_bt_trust_2_icon', 'label' => 'Trust Pill 2 — Icon', 'name' => 'bt_trust_2_icon', 'type' => 'text', 'default_value' => 'fas fa-calendar-check', 'instructions' => 'Font Awesome class, e.g. fas fa-calendar-check' ),
            array( 'key' => 'field_dp_bt_trust_3', 'label' => 'Trust Pill 3', 'name' => 'bt_trust_3', 'type' => 'text', 'default_value' => 'Professional Phlebotomy' ),
            array( 'key' => 'field_dp_bt_trust_3_icon', 'label' => 'Trust Pill 3 — Icon', 'name' => 'bt_trust_3_icon', 'type' => 'text', 'default_value' => 'fas fa-clock', 'instructions' => 'Font Awesome class, e.g. fas fa-clock' ),
            array( 'key' => 'field_dp_bt_float_number', 'label' => 'Floating Badge Number', 'name' => 'bt_float_number', 'type' => 'text', 'default_value' => '20+' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-blood-testing.php',
                ),
            ),
        ),
        'menu_order'            => 2400,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── O2. Stats Bar ────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_bt_stats',
        'title'  => 'Blood Testing — Stats Bar',
        'fields' => array(
            array( 'key' => 'field_dp_bt_stat_1_icon',   'label' => 'Stat 1 Icon',   'name' => 'bt_stat_1_icon',   'type' => 'text', 'default_value' => 'fas fa-vials' ),
            array( 'key' => 'field_dp_bt_stat_1_number', 'label' => 'Stat 1 Number', 'name' => 'bt_stat_1_number', 'type' => 'text', 'default_value' => '20+' ),
            array( 'key' => 'field_dp_bt_stat_1_label',  'label' => 'Stat 1 Label',  'name' => 'bt_stat_1_label',  'type' => 'text', 'default_value' => 'Tests Available' ),
            array( 'key' => 'field_dp_bt_stat_2_icon',   'label' => 'Stat 2 Icon',   'name' => 'bt_stat_2_icon',   'type' => 'text', 'default_value' => 'fas fa-sterling-sign' ),
            array( 'key' => 'field_dp_bt_stat_2_number', 'label' => 'Stat 2 Number', 'name' => 'bt_stat_2_number', 'type' => 'text', 'default_value' => 'From £39' ),
            array( 'key' => 'field_dp_bt_stat_2_label',  'label' => 'Stat 2 Label',  'name' => 'bt_stat_2_label',  'type' => 'text', 'default_value' => 'Per Panel' ),
            array( 'key' => 'field_dp_bt_stat_3_icon',   'label' => 'Stat 3 Icon',   'name' => 'bt_stat_3_icon',   'type' => 'text', 'default_value' => 'fas fa-user-doctor' ),
            array( 'key' => 'field_dp_bt_stat_3_number', 'label' => 'Stat 3 Number', 'name' => 'bt_stat_3_number', 'type' => 'text', 'default_value' => 'No GP' ),
            array( 'key' => 'field_dp_bt_stat_3_label',  'label' => 'Stat 3 Label',  'name' => 'bt_stat_3_label',  'type' => 'text', 'default_value' => 'Referral Needed' ),
            array( 'key' => 'field_dp_bt_stat_4_icon',   'label' => 'Stat 4 Icon',   'name' => 'bt_stat_4_icon',   'type' => 'text', 'default_value' => 'fas fa-clock' ),
            array( 'key' => 'field_dp_bt_stat_4_number', 'label' => 'Stat 4 Number', 'name' => 'bt_stat_4_number', 'type' => 'text', 'default_value' => '2-5 Days' ),
            array( 'key' => 'field_dp_bt_stat_4_label',  'label' => 'Stat 4 Label',  'name' => 'bt_stat_4_label',  'type' => 'text', 'default_value' => 'For Results' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-blood-testing.php',
                ),
            ),
        ),
        'menu_order'            => 2401,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── O3. Tests Grid ───────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_bt_tests',
        'title'  => 'Blood Testing — Tests Grid',
        'fields' => array(
            array( 'key' => 'field_dp_bt_tests_badge', 'label' => 'Badge Text', 'name' => 'bt_tests_badge', 'type' => 'text', 'default_value' => 'OUR BLOOD TESTS' ),
            array( 'key' => 'field_dp_bt_tests_title', 'label' => 'Section Title', 'name' => 'bt_tests_title', 'type' => 'text', 'default_value' => 'Available Blood Test Panels' ),
            array( 'key' => 'field_dp_bt_tests_description', 'label' => 'Section Description', 'name' => 'bt_tests_description', 'type' => 'textarea', 'rows' => 2 ),
            array(
                'key'          => 'field_dp_bt_tests_repeater',
                'label'        => 'Test Panels',
                'name'         => 'bt_tests',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Test Panel',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_bt_test_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-vial', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_bt_test_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_bt_test_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_dp_bt_test_tag', 'label' => 'Tag (optional)', 'name' => 'tag', 'type' => 'text', 'wrapper' => array( 'width' => '15' ) ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-blood-testing.php',
                ),
            ),
        ),
        'menu_order'            => 2402,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── O4. Process & Who It's For ───────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_bt_process',
        'title'  => 'Blood Testing — Process & Eligibility',
        'fields' => array(
            array( 'key' => 'field_dp_bt_process_badge', 'label' => 'Badge Text', 'name' => 'bt_process_badge', 'type' => 'text', 'default_value' => 'HOW IT WORKS' ),
            array( 'key' => 'field_dp_bt_process_title', 'label' => 'Section Title', 'name' => 'bt_process_title', 'type' => 'text', 'default_value' => 'Three Simple Steps to Your Results' ),
            array( 'key' => 'field_dp_bt_process_desc', 'label' => 'Section Description', 'name' => 'bt_process_description', 'type' => 'text', 'default_value' => 'No GP referral needed — just walk in or book online' ),
            array(
                'key'          => 'field_dp_bt_process_steps',
                'label'        => 'Steps',
                'name'         => 'bt_process_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',
                'max'          => 3,
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_bt_step_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_dp_bt_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_bt_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '50' ) ),
                ),
            ),
            array( 'key' => 'field_dp_bt_eligibility_title', 'label' => 'Eligibility Title', 'name' => 'bt_eligibility_title', 'type' => 'text', 'default_value' => 'Who Is Blood Testing For?' ),
            array( 'key' => 'field_dp_bt_eligibility_text', 'label' => 'Eligibility Text', 'name' => 'bt_eligibility_text', 'type' => 'textarea', 'rows' => 4 ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-blood-testing.php',
                ),
            ),
        ),
        'menu_order'            => 2403,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── O5. FAQ ──────────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_bt_faq',
        'title'  => 'Blood Testing — FAQ',
        'fields' => array(
            array( 'key' => 'field_dp_bt_faq_badge', 'label' => 'Badge Text', 'name' => 'bt_faq_badge', 'type' => 'text', 'default_value' => 'FREQUENTLY ASKED QUESTIONS' ),
            array( 'key' => 'field_dp_bt_faq_title', 'label' => 'Section Title', 'name' => 'bt_faq_title', 'type' => 'text', 'default_value' => 'Blood Testing — Your Questions Answered' ),
            array(
                'key'          => 'field_dp_bt_faq_repeater',
                'label'        => 'FAQs',
                'name'         => 'bt_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_bt_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_bt_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-blood-testing.php',
                ),
            ),
        ),
        'menu_order'            => 2404,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── O6. Final CTA ────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'    => 'group_dp_bt_cta',
        'title'  => 'Blood Testing — Final CTA',
        'fields' => array(
            array( 'key' => 'field_dp_bt_cta_badge_1', 'label' => 'Badge 1', 'name' => 'bt_cta_badge_1', 'type' => 'text', 'default_value' => 'Professional Phlebotomy' ),
            array( 'key' => 'field_dp_bt_cta_badge_2', 'label' => 'Badge 2', 'name' => 'bt_cta_badge_2', 'type' => 'text', 'default_value' => 'Confidential Results' ),
            array( 'key' => 'field_dp_bt_cta_badge_3', 'label' => 'Badge 3', 'name' => 'bt_cta_badge_3', 'type' => 'text', 'default_value' => 'No Referral' ),
            array( 'key' => 'field_dp_bt_cta_title', 'label' => 'Title', 'name' => 'bt_cta_title', 'type' => 'text', 'default_value' => 'Book Your Blood Test in Denton Today' ),
            array( 'key' => 'field_dp_bt_cta_desc', 'label' => 'Description', 'name' => 'bt_cta_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_bt_cta_primary_url', 'label' => 'CTA URL', 'name' => 'bt_cta_primary_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_bt_cta_button_text', 'label' => 'CTA Button Text', 'name' => 'bt_cta_button_text', 'type' => 'text', 'default_value' => 'Book Online' ),
            array( 'key' => 'field_dp_bt_cta_check_1', 'label' => 'Trust Check 1', 'name' => 'bt_cta_check_1', 'type' => 'text', 'default_value' => 'No referral needed' ),
            array( 'key' => 'field_dp_bt_cta_check_2', 'label' => 'Trust Check 2', 'name' => 'bt_cta_check_2', 'type' => 'text', 'default_value' => 'Results in 2-5 days' ),
            array( 'key' => 'field_dp_bt_cta_check_3', 'label' => 'Trust Check 3', 'name' => 'bt_cta_check_3', 'type' => 'text', 'default_value' => 'GPhC registered' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-blood-testing.php',
                ),
            ),
        ),
        'menu_order'            => 2405,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // N. CONTACT PAGE FIELDS
    // =========================================================================

    // -------------------------------------------------------------------------
    // N1. Contact Hero
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'    => 'group_dp_contact_hero',
        'title'  => 'Contact — Hero',
        'fields' => array(
            array( 'key' => 'field_dp_contact_hero_badge', 'label' => 'Badge Text', 'name' => 'contact_hero_badge', 'type' => 'text', 'default_value' => 'GET IN TOUCH' ),
            array( 'key' => 'field_dp_contact_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'contact_hero_title_line1', 'type' => 'text', 'default_value' => 'Contact' ),
            array( 'key' => 'field_dp_contact_hero_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'contact_hero_title_highlight', 'type' => 'text', 'default_value' => '' ),
            array( 'key' => 'field_dp_contact_hero_description', 'label' => 'Description', 'name' => 'contact_hero_description', 'type' => 'textarea', 'rows' => 3 ),
            array( 'key' => 'field_dp_contact_hero_image', 'label' => 'Hero Image', 'name' => 'contact_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'instructions' => 'Storefront or pharmacy photo. Falls back to Location Store Image from Pharmacy Settings.' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-contact.php',
                ),
            ),
        ),
        'menu_order'            => 2500,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // N2. Contact Form
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'    => 'group_dp_contact_form',
        'title'  => 'Contact — Form Settings',
        'fields' => array(
            array( 'key' => 'field_dp_contact_form_badge', 'label' => 'Section Badge', 'name' => 'contact_form_badge', 'type' => 'text', 'default_value' => 'SEND A MESSAGE' ),
            array( 'key' => 'field_dp_contact_form_heading', 'label' => 'Form Heading', 'name' => 'contact_form_heading', 'type' => 'text', 'default_value' => 'How Can We Help?' ),
            array( 'key' => 'field_dp_contact_form_description', 'label' => 'Form Description', 'name' => 'contact_form_description', 'type' => 'textarea', 'rows' => 2 ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-contact.php',
                ),
            ),
        ),
        'menu_order'            => 2510,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // N3. Contact FAQ
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'    => 'group_dp_contact_faq',
        'title'  => 'Contact — FAQ',
        'fields' => array(
            array( 'key' => 'field_dp_contact_faq_badge', 'label' => 'Section Badge', 'name' => 'contact_faq_badge', 'type' => 'text', 'default_value' => 'COMMON QUESTIONS' ),
            array( 'key' => 'field_dp_contact_faq_title', 'label' => 'Section Title', 'name' => 'contact_faq_title', 'type' => 'text', 'default_value' => 'Frequently Asked Questions' ),
            array(
                'key'          => 'field_dp_contact_faqs',
                'label'        => 'FAQs',
                'name'         => 'contact_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array( 'key' => 'field_dp_contact_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_dp_contact_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-contact.php',
                ),
            ),
        ),
        'menu_order'            => 2520,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // N4. Contact Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'    => 'group_dp_contact_cta',
        'title'  => 'Contact — Final CTA',
        'fields' => array(
            array( 'key' => 'field_dp_contact_cta_badge_1', 'label' => 'Badge 1', 'name' => 'contact_cta_badge_1', 'type' => 'text', 'default_value' => 'GPhC Registered' ),
            array( 'key' => 'field_dp_contact_cta_badge_2', 'label' => 'Badge 2', 'name' => 'contact_cta_badge_2', 'type' => 'text', 'default_value' => 'Same-Day Appointments' ),
            array( 'key' => 'field_dp_contact_cta_badge_3', 'label' => 'Badge 3', 'name' => 'contact_cta_badge_3', 'type' => 'text', 'default_value' => 'Free Parking' ),
            array( 'key' => 'field_dp_contact_cta_title', 'label' => 'Title', 'name' => 'contact_cta_title', 'type' => 'text', 'default_value' => '' ),
            array( 'key' => 'field_dp_contact_cta_desc', 'label' => 'Description', 'name' => 'contact_cta_description', 'type' => 'textarea', 'rows' => 2 ),
            array( 'key' => 'field_dp_contact_cta_url', 'label' => 'CTA URL', 'name' => 'contact_cta_url', 'type' => 'url' ),
            array( 'key' => 'field_dp_contact_cta_button_text', 'label' => 'CTA Button Text', 'name' => 'contact_cta_button_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_dp_contact_cta_check_1', 'label' => 'Trust Check 1', 'name' => 'contact_cta_check_1', 'type' => 'text', 'default_value' => 'No referral needed' ),
            array( 'key' => 'field_dp_contact_cta_check_2', 'label' => 'Trust Check 2', 'name' => 'contact_cta_check_2', 'type' => 'text', 'default_value' => 'Expert guidance' ),
            array( 'key' => 'field_dp_contact_cta_check_3', 'label' => 'Trust Check 3', 'name' => 'contact_cta_check_3', 'type' => 'text', 'default_value' => '15+ years serving Denton' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-contact.php',
                ),
            ),
        ),
        'menu_order'            => 2530,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

}
add_action( 'acf/init', 'dp_register_acf_field_groups' );
