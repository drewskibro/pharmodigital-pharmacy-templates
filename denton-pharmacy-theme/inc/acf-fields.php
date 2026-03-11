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
            array( 'key' => 'field_dp_wl_results_badge', 'label' => 'Badge Text', 'name' => 'wl_results_badge', 'type' => 'text', 'default_value' => 'MEDICAL WEIGHT LOSS' ),
            array( 'key' => 'field_dp_wl_results_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'wl_results_title_highlight', 'type' => 'text', 'default_value' => 'Mounjaro & Wegovy' ),
            array( 'key' => 'field_dp_wl_results_title', 'label' => 'Title (after highlight)', 'name' => 'wl_results_title', 'type' => 'text', 'default_value' => 'results in Denton' ),
            array( 'key' => 'field_dp_wl_results_description', 'label' => 'Description', 'name' => 'wl_results_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Denton patients using Mounjaro or Wegovy lose an average of 10-15% of their body weight in 12 months with our personalised programmes.' ),
            array( 'key' => 'field_dp_wl_results_card1_number', 'label' => 'Card 1 — Number', 'name' => 'wl_results_card1_number', 'type' => 'text', 'default_value' => '4.7/5' ),
            array( 'key' => 'field_dp_wl_results_card1_label', 'label' => 'Card 1 — Label', 'name' => 'wl_results_card1_label', 'type' => 'text', 'default_value' => 'Patient satisfaction' ),
            array( 'key' => 'field_dp_wl_results_card1_sublabel', 'label' => 'Card 1 — Sublabel', 'name' => 'wl_results_card1_sublabel', 'type' => 'text', 'default_value' => 'Based on verified reviews' ),
            array( 'key' => 'field_dp_wl_results_featured_badge', 'label' => 'Featured Card — Badge', 'name' => 'wl_results_featured_badge', 'type' => 'text', 'default_value' => 'Most Important' ),
            array( 'key' => 'field_dp_wl_results_featured_number', 'label' => 'Featured Card — Number', 'name' => 'wl_results_featured_number', 'type' => 'text', 'default_value' => '10-15%' ),
            array( 'key' => 'field_dp_wl_results_featured_label', 'label' => 'Featured Card — Label', 'name' => 'wl_results_featured_label', 'type' => 'text', 'default_value' => 'Average weight loss' ),
            array( 'key' => 'field_dp_wl_results_featured_sublabel', 'label' => 'Featured Card — Sublabel', 'name' => 'wl_results_featured_sublabel', 'type' => 'text', 'default_value' => 'In 12 months' ),
            array( 'key' => 'field_dp_wl_results_card3_number', 'label' => 'Card 3 — Number', 'name' => 'wl_results_card3_number', 'type' => 'text', 'default_value' => '500+' ),
            array( 'key' => 'field_dp_wl_results_card3_label', 'label' => 'Card 3 — Label', 'name' => 'wl_results_card3_label', 'type' => 'text', 'default_value' => 'Patients Helped' ),
            array( 'key' => 'field_dp_wl_results_card3_sublabel', 'label' => 'Card 3 — Sublabel', 'name' => 'wl_results_card3_sublabel', 'type' => 'text', 'default_value' => 'Denton & surrounding areas' ),
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
            array( 'key' => 'field_dp_wl_features_description', 'label' => 'Description', 'name' => 'wl_features_description', 'type' => 'text', 'default_value' => 'Real face-to-face support. Expert guidance. Proven results.' ),
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
    // D7. Weight Loss — Calculator Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_dp_wl_calculator',
        'title'    => 'Weight Loss — Calculator Section',
        'fields'   => array(
            array( 'key' => 'field_dp_wl_calculator_badge', 'label' => 'Badge Text', 'name' => 'wl_calculator_badge', 'type' => 'text', 'default_value' => 'WEIGHT LOSS CALCULATOR' ),
            array( 'key' => 'field_dp_wl_calculator_title', 'label' => 'Title', 'name' => 'wl_calculator_title', 'type' => 'text', 'default_value' => 'See how much you could lose' ),
            array( 'key' => 'field_dp_wl_calculator_description', 'label' => 'Description', 'name' => 'wl_calculator_description', 'type' => 'text', 'default_value' => 'Enter your details below for an instant estimate based on clinical data' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 406,
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
            array( 'key' => 'field_dp_wl_testimonials_description', 'label' => 'Description', 'name' => 'wl_testimonials_description', 'type' => 'text', 'default_value' => 'See how our patients have transformed their lives with medical weight loss' ),
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
            array( 'key' => 'field_dp_th_trust_2', 'label' => 'Trust Badge 2', 'name' => 'th_trust_2', 'type' => 'text', 'default_value' => 'All Travel Vaccinations' ),
            array( 'key' => 'field_dp_th_trust_3', 'label' => 'Trust Badge 3', 'name' => 'th_trust_3', 'type' => 'text', 'default_value' => 'Expert Travel Advice' ),
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
                    array( 'key' => 'field_dp_th_step_meta_icon', 'label' => 'Meta Icon', 'name' => 'meta_icon', 'type' => 'text', 'instructions' => 'Font Awesome class.', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_dp_th_step_meta_text', 'label' => 'Meta Text', 'name' => 'meta_text', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
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
            array( 'key' => 'field_dp_ew_trust_2', 'label' => 'Trust Item 2', 'name' => 'ew_trust_2', 'type' => 'text', 'default_value' => 'Same-day available' ),
            array( 'key' => 'field_dp_ew_trust_3', 'label' => 'Trust Item 3', 'name' => 'ew_trust_3', 'type' => 'text', 'default_value' => 'From £40 per ear' ),
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
        ),
        'location'              => $ew_location,
        'menu_order'            => 609,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );
}
add_action( 'acf/init', 'dp_register_acf_field_groups' );
