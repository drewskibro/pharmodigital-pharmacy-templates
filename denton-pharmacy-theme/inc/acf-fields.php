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
}
add_action( 'acf/init', 'dp_register_acf_field_groups' );
