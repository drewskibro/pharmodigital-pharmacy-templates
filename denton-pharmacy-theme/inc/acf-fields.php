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
                'key'           => 'field_dp_hero_badge_title',
                'label'         => 'Badge Title',
                'name'          => 'hero_badge_title',
                'type'          => 'text',
                'default_value' => 'Your Local Denton Pharmacy',
            ),
            array(
                'key'           => 'field_dp_hero_badge_subtitle',
                'label'         => 'Badge Subtitle',
                'name'          => 'hero_badge_subtitle',
                'type'          => 'text',
                'default_value' => 'Serving Denton, Manchester & Beyond',
            ),
            array(
                'key'           => 'field_dp_hero_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'hero_badge_text',
                'type'          => 'text',
                'default_value' => 'Trusted by 5,000+ Patients',
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
                'key'           => 'field_dp_hero_description',
                'label'         => 'Hero Description',
                'name'          => 'hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Expert pharmacy services from your local Denton team. Clinically-led weight loss, travel vaccinations, and NHS care — with free delivery across Manchester.',
            ),
            array(
                'key'           => 'field_dp_hero_cta_primary_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'hero_cta_primary_text',
                'type'          => 'text',
                'default_value' => 'Start Your Journey',
            ),
            array(
                'key'           => 'field_dp_hero_cta_secondary_text',
                'label'         => 'Secondary CTA Text',
                'name'          => 'hero_cta_secondary_text',
                'type'          => 'text',
                'default_value' => 'Popular Treatments',
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
                'key'           => 'field_dp_nhs_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'nhs_badge_text',
                'type'          => 'text',
                'default_value' => 'NHS Services',
            ),
            array(
                'key'           => 'field_dp_nhs_title',
                'label'         => 'Title',
                'name'          => 'nhs_title',
                'type'          => 'text',
                'default_value' => 'Your NHS Community Pharmacy',
            ),
            array(
                'key'           => 'field_dp_nhs_description',
                'label'         => 'Description',
                'name'          => 'nhs_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Free NHS services for eligible patients. From prescriptions to consultations, we provide trusted NHS care right here in Denton.',
            ),
            array(
                'key'           => 'field_dp_nhs_bottom_title',
                'label'         => 'Bottom Title',
                'name'          => 'nhs_bottom_title',
                'type'          => 'text',
                'default_value' => 'Need help with NHS services?',
            ),
            array(
                'key'           => 'field_dp_nhs_bottom_description',
                'label'         => 'Bottom Description',
                'name'          => 'nhs_bottom_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Our friendly team is here to help you access the NHS services you\'re entitled to. Call us or pop in for advice.',
            ),
            array(
                'key'          => 'field_dp_nhs_cards',
                'label'        => 'NHS Cards',
                'name'         => 'nhs_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Card',
                'instructions' => 'Leave empty to use the 6 default NHS service cards.',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_dp_nhs_card_colour',
                        'label'         => 'Card Colour',
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
                    ),
                    array(
                        'key'           => 'field_dp_nhs_card_icon',
                        'label'         => 'Card Icon',
                        'name'          => 'card_icon',
                        'type'          => 'text',
                        'default_value' => 'prescription',
                        'instructions'  => 'SVG icon key: prescription, delivery, repeat, pharmacyfirst, newmedicine, flu',
                    ),
                    array(
                        'key'   => 'field_dp_nhs_card_badge',
                        'label' => 'Card Badge',
                        'name'  => 'card_badge',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_dp_nhs_card_title',
                        'label' => 'Card Title',
                        'name'  => 'card_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_dp_nhs_card_description',
                        'label' => 'Card Description',
                        'name'  => 'card_description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'           => 'field_dp_nhs_card_button_text',
                        'label'         => 'Button Text',
                        'name'          => 'card_button_text',
                        'type'          => 'text',
                        'default_value' => 'Learn More',
                    ),
                    array(
                        'key'   => 'field_dp_nhs_card_url',
                        'label' => 'Card URL',
                        'name'  => 'card_url',
                        'type'  => 'url',
                    ),
                    array(
                        'key'          => 'field_dp_nhs_card_items',
                        'label'        => 'Card Items',
                        'name'         => 'card_items',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Item',
                        'sub_fields'   => array(
                            array(
                                'key'   => 'field_dp_nhs_card_item_text',
                                'label' => 'Item Text',
                                'name'  => 'item_text',
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
                'default_value' => 'Comprehensive healthcare solutions tailored to your needs, delivered discreetly to your door.',
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
                'key'           => 'field_dp_pharmacist_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'pharmacist_badge_text',
                'type'          => 'text',
                'default_value' => 'Your Local Expert',
            ),
            array(
                'key'           => 'field_dp_pharmacist_name',
                'label'         => 'Pharmacist Name',
                'name'          => 'pharmacist_name',
                'type'          => 'text',
                'default_value' => 'Meet Ahmed Al-Liabi',
            ),
            array(
                'key'           => 'field_dp_pharmacist_role',
                'label'         => 'Pharmacist Role',
                'name'          => 'pharmacist_role',
                'type'          => 'text',
                'default_value' => 'Lead Pharmacist & Independent Prescriber',
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
                'default_value' => 'Ready to Start Your Health Journey?',
            ),
            // Subtitle
            array(
                'key'           => 'field_dp_home_sticky_cta_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'sticky_cta_subtitle',
                'type'          => 'text',
                'default_value' => 'Book your appointment today — no waiting lists, no hidden fees.',
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
}
add_action( 'acf/init', 'dp_register_acf_field_groups' );
