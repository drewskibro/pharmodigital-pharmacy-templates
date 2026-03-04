<?php
/**
 * ACF Field Groups Configuration
 *
 * Registers all Advanced Custom Fields field groups for the Easy Pharmacy
 * WordPress theme, including options page fields, home page fields,
 * blog post fields, and the flexible content page builder.
 *
 * Field names match EXACTLY what the template-parts expect via ep_field().
 *
 * @package EasyPharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register all ACF field groups.
 */
function ep_register_acf_field_groups() {

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
        'key'      => 'group_ep_branding',
        'title'    => 'Pharmacy Branding',
        'fields'   => array(
            array(
                'key'           => 'field_ep_pharmacy_name',
                'label'         => 'Pharmacy Name',
                'name'          => 'pharmacy_name',
                'type'          => 'text',
                'default_value' => 'Easy Pharmacy',
            ),
            array(
                'key'           => 'field_ep_pharmacy_logo',
                'label'         => 'Pharmacy Logo',
                'name'          => 'pharmacy_logo',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload your pharmacy logo. Recommended: SVG or PNG with transparent background, at least 200px wide.',
            ),
            array(
                'key'           => 'field_ep_footer_tagline',
                'label'         => 'Footer Tagline',
                'name'          => 'footer_tagline',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Your trusted local pharmacy providing expert healthcare, weight loss treatments, travel vaccinations, and more.',
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
    // A2. Contact & Location
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_contact_location',
        'title'    => 'Contact & Location',
        'fields'   => array(
            array(
                'key'           => 'field_ep_pharmacy_phone',
                'label'         => 'Pharmacy Phone',
                'name'          => 'pharmacy_phone',
                'type'          => 'text',
                'default_value' => '01784 255 222',
            ),
            array(
                'key'           => 'field_ep_pharmacy_email',
                'label'         => 'Pharmacy Email',
                'name'          => 'pharmacy_email',
                'type'          => 'email',
                'default_value' => 'hello@easypharmacy.co.uk',
            ),
            array(
                'key'           => 'field_ep_pharmacy_address_line_1',
                'label'         => 'Address Line 1',
                'name'          => 'pharmacy_address_line_1',
                'type'          => 'text',
                'default_value' => '123 High Street',
            ),
            array(
                'key'           => 'field_ep_pharmacy_address_line_2',
                'label'         => 'Address Line 2',
                'name'          => 'pharmacy_address_line_2',
                'type'          => 'text',
                'default_value' => 'Ashford, Surrey',
            ),
            array(
                'key'           => 'field_ep_pharmacy_address_line_3',
                'label'         => 'Postcode',
                'name'          => 'pharmacy_address_line_3',
                'type'          => 'text',
                'default_value' => 'TW15 1AB',
            ),
            array(
                'key'           => 'field_ep_pharmacy_directions_url',
                'label'         => 'Google Maps Directions URL',
                'name'          => 'pharmacy_directions_url',
                'type'          => 'url',
                'default_value' => 'https://www.google.com/maps/dir/?api=1&destination=51.4340,-0.4668',
            ),
            array(
                'key'           => 'field_ep_pharmacy_parking',
                'label'         => 'Parking Info',
                'name'          => 'pharmacy_parking',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Free customer parking available directly outside the pharmacy.',
            ),
            array(
                'key'           => 'field_ep_pharmacy_town',
                'label'         => 'Pharmacy Town (short)',
                'name'          => 'pharmacy_town',
                'type'          => 'text',
                'default_value' => 'Ashford',
                'instructions'  => 'Used in trust badges and location references.',
            ),
            array(
                'key'           => 'field_ep_booking_page',
                'label'         => 'Booking Page',
                'name'          => 'booking_page',
                'type'          => 'post_object',
                'post_type'     => array( 'page' ),
                'return_format' => 'id',
                'allow_null'    => 1,
            ),
            array(
                'key'           => 'field_ep_patients_treated',
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
        'key'      => 'group_ep_opening_hours',
        'title'    => 'Opening Hours',
        'fields'   => array(
            array(
                'key'           => 'field_ep_hours_weekday',
                'label'         => 'Weekday Hours',
                'name'          => 'hours_weekday',
                'type'          => 'text',
                'default_value' => '9:00am – 6:00pm',
            ),
            array(
                'key'           => 'field_ep_hours_saturday',
                'label'         => 'Saturday Hours',
                'name'          => 'hours_saturday',
                'type'          => 'text',
                'default_value' => '9:00am – 1:00pm',
            ),
            array(
                'key'           => 'field_ep_hours_sunday',
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
    // A4. Registration & Compliance
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_registration',
        'title'    => 'Registration & Compliance',
        'fields'   => array(
            array(
                'key'           => 'field_ep_gphc_registration',
                'label'         => 'GPhC Pharmacy Number',
                'name'          => 'gphc_registration',
                'type'          => 'text',
                'default_value' => '1091169',
            ),
            array(
                'key'           => 'field_ep_company_registration',
                'label'         => 'Company Registration',
                'name'          => 'company_registration',
                'type'          => 'text',
                'default_value' => '06703027',
            ),
            array(
                'key'           => 'field_ep_established_year',
                'label'         => 'Established Year',
                'name'          => 'established_year',
                'type'          => 'text',
                'default_value' => '2008',
            ),
            array(
                'key'           => 'field_ep_superintendent_pharmacist',
                'label'         => 'Superintendent Pharmacist',
                'name'          => 'superintendent_pharmacist',
                'type'          => 'text',
                'default_value' => 'Dilip Modhvadia',
            ),
            array(
                'key'           => 'field_ep_superintendent_gphc_number',
                'label'         => 'Superintendent GPhC Number',
                'name'          => 'superintendent_gphc_number',
                'type'          => 'text',
                'default_value' => '2050606',
            ),
            array(
                'key'   => 'field_ep_gphc_verify_url',
                'label' => 'GPhC Verify URL',
                'name'  => 'gphc_verify_url',
                'type'  => 'url',
            ),
            array(
                'key'           => 'field_ep_reviewer_profile_url',
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
    // A5. Social Media
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_social_media',
        'title'    => 'Social Media',
        'fields'   => array(
            array(
                'key'   => 'field_ep_social_facebook',
                'label' => 'Facebook URL',
                'name'  => 'social_facebook',
                'type'  => 'url',
            ),
            array(
                'key'   => 'field_ep_social_instagram',
                'label' => 'Instagram URL',
                'name'  => 'social_instagram',
                'type'  => 'url',
            ),
            array(
                'key'   => 'field_ep_social_twitter',
                'label' => 'Twitter URL',
                'name'  => 'social_twitter',
                'type'  => 'url',
            ),
            array(
                'key'   => 'field_ep_social_linkedin',
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
    // A6. Google Rating
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_google_rating',
        'title'    => 'Google Rating',
        'fields'   => array(
            array(
                'key'           => 'field_ep_google_rating',
                'label'         => 'Google Rating',
                'name'          => 'google_rating',
                'type'          => 'number',
                'default_value' => 4.9,
                'min'           => 0,
                'max'           => 5,
                'step'          => 0.1,
            ),
            array(
                'key'           => 'field_ep_google_review_count',
                'label'         => 'Google Review Count',
                'name'          => 'google_review_count',
                'type'          => 'text',
                'default_value' => '300+',
            ),
            array(
                'key'          => 'field_ep_google_review_url',
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
        'menu_order'            => 50,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // A7. Location Images (Options)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_location_images',
        'title'    => 'Location Images',
        'fields'   => array(
            array(
                'key'           => 'field_ep_location_map_image',
                'label'         => 'Map Image',
                'name'          => 'location_map_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a static map image or screenshot of your location on Google Maps.',
            ),
            array(
                'key'           => 'field_ep_location_store_image',
                'label'         => 'Storefront Photo',
                'name'          => 'location_store_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a photo of your pharmacy storefront.',
            ),
            array(
                'key'           => 'field_ep_location_google_maps_embed',
                'label'         => 'Google Maps Embed URL',
                'name'          => 'location_google_maps_embed',
                'type'          => 'url',
                'instructions'  => 'Optional. Paste a Google Maps embed URL here. If left blank, a map will be generated automatically from your address. To get an embed URL: go to Google Maps → find your location → click Share → Embed a map → copy the src URL from the iframe code.',
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
    // A8. Navigation Menu
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_nav_top_level',
        'title'    => 'Top-Level Menu Items',
        'fields'   => array(
            // --- Weight Loss ---
            array(
                'key'          => 'field_ep_nav_weight_loss_tab',
                'label'        => 'Weight Loss',
                'type'         => 'tab',
            ),
            array(
                'key'           => 'field_ep_nav_weight_loss_show',
                'label'         => 'Show in Menu',
                'name'          => 'nav_weight_loss_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_ep_nav_weight_loss_label',
                'label'         => 'Menu Label',
                'name'          => 'nav_weight_loss_label',
                'type'          => 'text',
                'default_value' => 'Weight Loss',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_weight_loss_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),
            array(
                'key'           => 'field_ep_nav_weight_loss_url',
                'label'         => 'Page Link',
                'name'          => 'nav_weight_loss_url',
                'type'          => 'page_link',
                'post_type'     => array( 'page' ),
                'allow_null'    => 1,
                'instructions'  => 'Select the Weight Loss page. Leave blank to use /weight-loss/ slug.',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_weight_loss_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),

            // --- Travel Health ---
            array(
                'key'          => 'field_ep_nav_travel_health_tab',
                'label'        => 'Travel Health',
                'type'         => 'tab',
            ),
            array(
                'key'           => 'field_ep_nav_travel_health_show',
                'label'         => 'Show in Menu',
                'name'          => 'nav_travel_health_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_ep_nav_travel_health_label',
                'label'         => 'Menu Label',
                'name'          => 'nav_travel_health_label',
                'type'          => 'text',
                'default_value' => 'Travel Health',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_travel_health_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),
            array(
                'key'           => 'field_ep_nav_travel_health_url',
                'label'         => 'Page Link',
                'name'          => 'nav_travel_health_url',
                'type'          => 'page_link',
                'post_type'     => array( 'page' ),
                'allow_null'    => 1,
                'instructions'  => 'Select the Travel Health page. Leave blank to use /travel-health/ slug.',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_travel_health_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),

            // --- Ear Wax Removal ---
            array(
                'key'          => 'field_ep_nav_ear_wax_tab',
                'label'        => 'Ear Wax Removal',
                'type'         => 'tab',
            ),
            array(
                'key'           => 'field_ep_nav_ear_wax_show',
                'label'         => 'Show in Menu',
                'name'          => 'nav_ear_wax_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_ep_nav_ear_wax_label',
                'label'         => 'Menu Label',
                'name'          => 'nav_ear_wax_label',
                'type'          => 'text',
                'default_value' => 'Ear Wax Removal',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_ear_wax_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),
            array(
                'key'           => 'field_ep_nav_ear_wax_url',
                'label'         => 'Page Link',
                'name'          => 'nav_ear_wax_url',
                'type'          => 'page_link',
                'post_type'     => array( 'page' ),
                'allow_null'    => 1,
                'instructions'  => 'Select the Ear Wax Removal page. Leave blank to use /ear-wax-removal/ slug.',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_ear_wax_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),

            // --- Hair Loss ---
            array(
                'key'          => 'field_ep_nav_hair_loss_tab',
                'label'        => 'Hair Loss',
                'type'         => 'tab',
            ),
            array(
                'key'           => 'field_ep_nav_hair_loss_show',
                'label'         => 'Show in Menu',
                'name'          => 'nav_hair_loss_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_ep_nav_hair_loss_label',
                'label'         => 'Menu Label',
                'name'          => 'nav_hair_loss_label',
                'type'          => 'text',
                'default_value' => 'Hair Loss',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_hair_loss_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),
            array(
                'key'           => 'field_ep_nav_hair_loss_url',
                'label'         => 'Page Link',
                'name'          => 'nav_hair_loss_url',
                'type'          => 'page_link',
                'post_type'     => array( 'page' ),
                'allow_null'    => 1,
                'instructions'  => 'Select the Hair Loss page. Leave blank to use /hair-loss/ slug.',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_hair_loss_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),

            // --- Health Hub ---
            array(
                'key'          => 'field_ep_nav_health_hub_tab',
                'label'        => 'Health Hub',
                'type'         => 'tab',
            ),
            array(
                'key'           => 'field_ep_nav_health_hub_show',
                'label'         => 'Show in Menu',
                'name'          => 'nav_health_hub_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_ep_nav_health_hub_label',
                'label'         => 'Menu Label',
                'name'          => 'nav_health_hub_label',
                'type'          => 'text',
                'default_value' => 'Health Hub',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_health_hub_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),
            array(
                'key'           => 'field_ep_nav_health_hub_url',
                'label'         => 'Page Link',
                'name'          => 'nav_health_hub_url',
                'type'          => 'page_link',
                'post_type'     => array( 'page' ),
                'allow_null'    => 1,
                'instructions'  => 'Select the Health Hub page. Leave blank to use /health-hub/ slug.',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_health_hub_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),

            // --- About ---
            array(
                'key'          => 'field_ep_nav_about_tab',
                'label'        => 'About',
                'type'         => 'tab',
            ),
            array(
                'key'           => 'field_ep_nav_about_show',
                'label'         => 'Show in Menu',
                'name'          => 'nav_about_show',
                'type'          => 'true_false',
                'default_value' => 1,
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_ep_nav_about_label',
                'label'         => 'Menu Label',
                'name'          => 'nav_about_label',
                'type'          => 'text',
                'default_value' => 'About',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_about_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
            ),
            array(
                'key'           => 'field_ep_nav_about_url',
                'label'         => 'Page Link',
                'name'          => 'nav_about_url',
                'type'          => 'page_link',
                'post_type'     => array( 'page' ),
                'allow_null'    => 1,
                'instructions'  => 'Select the About/Team page. Leave blank to use /team/ slug.',
                'conditional_logic' => array( array( array(
                    'field'    => 'field_ep_nav_about_show',
                    'operator' => '==',
                    'value'    => '1',
                ) ) ),
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
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // A9. Navigation — Dropdown Sub-Links
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_nav_dropdowns',
        'title'    => 'Dropdown Sub-Links',
        'fields'   => array(
            array(
                'key'          => 'field_ep_nav_dd_info',
                'label'        => '',
                'type'         => 'message',
                'message'      => 'Configure the links that appear inside each dropdown menu. Each sub-link has a label, icon (Font Awesome class), and a page link. Leave page link blank to use the default slug.<br><br><strong>Important:</strong> If you leave a repeater empty (no rows), the theme will use sensible built-in defaults. Only add rows if you want to override the defaults.<br><br><strong>Tip:</strong> Make sure you add links to the correct column — e.g. vaccination pages (Yellow Fever, Hepatitis, etc.) go under "Vaccinations Links", NOT under "Popular Destinations". Travel destination pages (Thailand, Kenya, etc.) go under "Popular Destinations".',
            ),

            // --- Weight Loss Dropdown ---
            array(
                'key'          => 'field_ep_nav_dd_wl_tab',
                'label'        => 'Weight Loss Dropdown',
                'type'         => 'tab',
            ),
            // Treatments column
            array(
                'key'           => 'field_ep_nav_dd_wl_treatments',
                'label'         => 'Treatments Links',
                'name'          => 'nav_dd_wl_treatments',
                'type'          => 'repeater',
                'instructions'  => 'Weight loss medication pages only (e.g. Wegovy, Mounjaro, Saxenda, Orlistat). Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Treatment Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_wl_t_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_wl_t_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'instructions'  => 'e.g. fas fa-syringe',
                        'default_value' => 'fas fa-syringe',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_wl_t_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),
            // Support column
            array(
                'key'           => 'field_ep_nav_dd_wl_support',
                'label'         => 'Support Links',
                'name'          => 'nav_dd_wl_support',
                'type'          => 'repeater',
                'instructions'  => 'Supporting/informational pages (e.g. How It Works, Switch Provider, Pricing, FAQs). Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Support Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_wl_s_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_wl_s_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-circle-info',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_wl_s_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),

            // --- Travel Health Dropdown ---
            array(
                'key'          => 'field_ep_nav_dd_th_tab',
                'label'        => 'Travel Health Dropdown',
                'type'         => 'tab',
            ),
            // Vaccinations column
            array(
                'key'           => 'field_ep_nav_dd_th_vaccinations',
                'label'         => 'Vaccinations Links',
                'name'          => 'nav_dd_th_vaccinations',
                'type'          => 'repeater',
                'instructions'  => 'Vaccination/immunisation pages ONLY (e.g. Yellow Fever, Typhoid, Hepatitis A & B, Rabies, Cholera). Do NOT add travel destination pages here — those go in "Popular Destinations" below. Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Vaccination Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_th_v_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_th_v_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-syringe',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_th_v_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),
            // Malaria Prevention column
            array(
                'key'           => 'field_ep_nav_dd_th_malaria',
                'label'         => 'Malaria Prevention Links',
                'name'          => 'nav_dd_th_malaria',
                'type'          => 'repeater',
                'instructions'  => 'Malaria prevention/medication pages only (e.g. Malarone, Doxycycline, Malaria Advice). Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Malaria Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_th_m_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_th_m_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-pills',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_th_m_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),
            // Resources column
            array(
                'key'           => 'field_ep_nav_dd_th_resources',
                'label'         => 'Resources Links',
                'name'          => 'nav_dd_th_resources',
                'type'          => 'repeater',
                'instructions'  => 'General travel health resources (e.g. Travel Checklist, Book Appointment). Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Resource Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_th_r_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_th_r_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-clipboard-check',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_th_r_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),
            // Destinations
            array(
                'key'           => 'field_ep_nav_dd_th_destinations',
                'label'         => 'Popular Destinations',
                'name'          => 'nav_dd_th_destinations',
                'type'          => 'repeater',
                'instructions'  => 'Country-specific travel destination pages (e.g. Thailand, India, Kenya, Cape Verde). Each entry needs a country name, flag image URL, and page link. Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 12,
                'layout'        => 'table',
                'button_label'  => 'Add Destination',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_th_d_name',
                        'label'         => 'Country Name',
                        'name'          => 'name',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_th_d_flag',
                        'label'         => 'Flag Image URL',
                        'name'          => 'flag_url',
                        'type'          => 'url',
                        'instructions'  => 'e.g. https://flagcdn.com/w40/th.png',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_th_d_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),

            // --- Ear Wax Removal Dropdown ---
            array(
                'key'          => 'field_ep_nav_dd_ew_tab',
                'label'        => 'Ear Wax Dropdown',
                'type'         => 'tab',
            ),
            // Services column
            array(
                'key'           => 'field_ep_nav_dd_ew_services',
                'label'         => 'Services Links',
                'name'          => 'nav_dd_ew_services',
                'type'          => 'repeater',
                'instructions'  => 'Ear wax removal service pages (e.g. Microsuction, Ear Irrigation, Ear Health Check). Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Service Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_ew_sv_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_ew_sv_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-stethoscope',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_ew_sv_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),
            // Information column
            array(
                'key'           => 'field_ep_nav_dd_ew_info',
                'label'         => 'Information Links',
                'name'          => 'nav_dd_ew_info',
                'type'          => 'repeater',
                'instructions'  => 'Ear wax informational pages (e.g. Symptoms, Pricing, Book Now). Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Info Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_ew_i_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_ew_i_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-circle-info',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_ew_i_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),

            // --- Hair Loss Dropdown ---
            array(
                'key'          => 'field_ep_nav_dd_hl_tab',
                'label'        => 'Hair Loss Dropdown',
                'type'         => 'tab',
            ),
            // Treatments column
            array(
                'key'           => 'field_ep_nav_dd_hl_treatments',
                'label'         => 'Treatments Links',
                'name'          => 'nav_dd_hl_treatments',
                'type'          => 'repeater',
                'instructions'  => 'Hair loss treatment/medication pages (e.g. Finasteride, Minoxidil, Combination Therapy). Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Treatment Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_hl_t_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_hl_t_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-pills',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_hl_t_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
                ),
            ),
            // Support column
            array(
                'key'           => 'field_ep_nav_dd_hl_support',
                'label'         => 'Support Links',
                'name'          => 'nav_dd_hl_support',
                'type'          => 'repeater',
                'instructions'  => 'Hair loss support/informational pages (e.g. Free Consultation, Results, FAQs). Leave empty to use built-in defaults.',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Support Link',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_nav_dd_hl_s_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_hl_s_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-user-doctor',
                    ),
                    array(
                        'key'           => 'field_ep_nav_dd_hl_s_url',
                        'label'         => 'Page Link',
                        'name'          => 'url',
                        'type'          => 'page_link',
                        'post_type'     => array( 'page' ),
                        'allow_null'    => 1,
                    ),
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
        'menu_order'            => 10,
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
        'key'      => 'group_ep_home_hero',
        'title'    => 'Hero Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_hero_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'hero_badge_text',
                'type'          => 'text',
                'default_value' => 'Serving Ashford, Chertsey & Surrounds',
                'instructions'  => 'Small badge text above the headline.',
            ),
            array(
                'key'           => 'field_ep_hero_title_line_1',
                'label'         => 'Headline Line 1',
                'name'          => 'hero_title_line_1',
                'type'          => 'text',
                'default_value' => 'Lose Weight.',
            ),
            array(
                'key'           => 'field_ep_hero_title_line_2',
                'label'         => 'Headline Line 2',
                'name'          => 'hero_title_line_2',
                'type'          => 'text',
                'default_value' => 'Travel Safe.',
            ),
            array(
                'key'           => 'field_ep_hero_title_line_3',
                'label'         => 'Headline Line 3',
                'name'          => 'hero_title_line_3',
                'type'          => 'text',
                'default_value' => 'Live Better.',
            ),
            array(
                'key'           => 'field_ep_hero_description',
                'label'         => 'Description',
                'name'          => 'hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Clinically proven weight loss treatments, expert support, discreet delivery. Plus travel health, hair loss treatment, and full pharmacy services across Ashford & Kent.',
            ),
            array(
                'key'           => 'field_ep_hero_cta_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Start Your Journey',
            ),
            array(
                'key'          => 'field_ep_hero_cta_url',
                'label'        => 'Primary CTA URL',
                'name'         => 'hero_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to default to /weight-loss/',
            ),
            array(
                'key'           => 'field_ep_hero_secondary_cta_text',
                'label'         => 'Secondary CTA Text',
                'name'          => 'hero_secondary_cta_text',
                'type'          => 'text',
                'default_value' => 'Popular Treatments',
            ),
            array(
                'key'           => 'field_ep_hero_secondary_cta_url',
                'label'         => 'Secondary CTA URL',
                'name'          => 'hero_secondary_cta_url',
                'type'          => 'text',
                'default_value' => '#treatments',
                'instructions'  => 'Use #treatments to scroll to treatments section, or enter a full URL.',
            ),
            array(
                'key'           => 'field_ep_hero_trust_1',
                'label'         => 'Trust Indicator 1',
                'name'          => 'hero_trust_1',
                'type'          => 'text',
                'default_value' => 'GPhC Registered',
            ),
            array(
                'key'           => 'field_ep_hero_trust_2',
                'label'         => 'Trust Indicator 2',
                'name'          => 'hero_trust_2',
                'type'          => 'text',
                'default_value' => 'UK Licensed Meds',
            ),
            array(
                'key'           => 'field_ep_hero_trust_3',
                'label'         => 'Trust Indicator 3',
                'name'          => 'hero_trust_3',
                'type'          => 'text',
                'default_value' => 'Local Ashford Service',
            ),
            array(
                'key'           => 'field_ep_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'hero_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload the main hero image (right column). Recommended: at least 800x1000px.',
            ),
            array(
                'key'           => 'field_ep_hero_testimonial_quote',
                'label'         => 'Testimonial Quote',
                'name'          => 'hero_testimonial_quote',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Thank you so much for your weight loss service. I\'ve tried everything over the years. With your help, I\'ve finally managed to lose 6 stones!',
            ),
            array(
                'key'           => 'field_ep_hero_testimonial_author',
                'label'         => 'Testimonial Author',
                'name'          => 'hero_testimonial_author',
                'type'          => 'text',
                'default_value' => 'Ashford Patient',
            ),
            array(
                'key'           => 'field_ep_hero_testimonial_result',
                'label'         => 'Testimonial Result Badge',
                'name'          => 'hero_testimonial_result',
                'type'          => 'text',
                'default_value' => '6 Stone Lost',
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
        'menu_order'            => 0,
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
    // B2. Stats Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_stats',
        'title'    => 'Stats Bar',
        'fields'   => array(
            array(
                'key'          => 'field_ep_stats',
                'label'        => 'Stats',
                'name'         => 'stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'instructions' => 'Leave empty to use defaults (5,000+ Patients, 4.7 Google Rating, 15+ Years, GPhC Registered, Free Delivery).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_stat_icon',
                        'label'         => 'Icon',
                        'name'          => 'stat_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-star',
                        'instructions'  => 'Font Awesome class, e.g. fa-users, fa-star',
                    ),
                    array(
                        'key'   => 'field_ep_stat_number',
                        'label' => 'Number',
                        'name'  => 'stat_number',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_stat_label',
                        'label' => 'Label',
                        'name'  => 'stat_label',
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
        ),
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B3. Treatments Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_treatments',
        'title'    => 'Treatments Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_treatments_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'treatments_badge_text',
                'type'          => 'text',
                'default_value' => 'Trusted by thousands in Ashford & Chertsey',
            ),
            array(
                'key'           => 'field_ep_treatments_title',
                'label'         => 'Title',
                'name'          => 'treatments_title',
                'type'          => 'text',
                'default_value' => 'Our Most Popular Treatments',
            ),
            array(
                'key'           => 'field_ep_treatments_description',
                'label'         => 'Description',
                'name'          => 'treatments_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Comprehensive healthcare solutions tailored to your needs, delivered discreetly to your door.',
            ),
            array(
                'key'          => 'field_ep_treatments',
                'label'        => 'Treatments',
                'name'         => 'treatments',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Treatment',
                'instructions' => 'Add your 5 treatment cards with images. Leave empty to use defaults (no images).',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_treatment_title',
                        'label' => 'Treatment Title',
                        'name'  => 'treatment_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_treatment_image',
                        'label'         => 'Treatment Image',
                        'name'          => 'treatment_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                        'instructions'  => 'Upload an image for this treatment card. Recommended: 600x400px.',
                    ),
                    array(
                        'key'   => 'field_ep_treatment_url',
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
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B4. Pharmacist Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_pharmacist',
        'title'    => 'Pharmacist Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_pharmacist_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'pharmacist_badge_text',
                'type'          => 'text',
                'default_value' => 'Your Local Expert',
            ),
            array(
                'key'           => 'field_ep_pharmacist_name',
                'label'         => 'Pharmacist Name',
                'name'          => 'pharmacist_name',
                'type'          => 'text',
                'default_value' => 'Meet Dilip Modhvadia',
            ),
            array(
                'key'           => 'field_ep_pharmacist_role',
                'label'         => 'Pharmacist Role',
                'name'          => 'pharmacist_role',
                'type'          => 'text',
                'default_value' => 'Lead Pharmacist & Independent Prescriber',
            ),
            array(
                'key'           => 'field_ep_pharmacist_bio',
                'label'         => 'Pharmacist Bio',
                'name'          => 'pharmacist_bio',
                'type'          => 'textarea',
                'rows'          => 4,
                'default_value' => 'With over 15 years of experience, Dilip leads our clinical team dedicated to providing personalized, accessible healthcare in Ashford. As an Independent Prescriber, he oversees our service to ensure you receive safe, effective treatments without the wait.',
            ),
            array(
                'key'           => 'field_ep_pharmacist_quote',
                'label'         => 'Pharmacist Quote',
                'name'          => 'pharmacist_quote',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => '"My goal is to make expert healthcare accessible to everyone in Ashford. Whether you\'re starting a weight loss journey or need health advice, our team is here to support you every step of the way with honest, professional care delivered to your door."',
            ),
            array(
                'key'           => 'field_ep_pharmacist_experience_years',
                'label'         => 'Experience (Number)',
                'name'          => 'pharmacist_experience_years',
                'type'          => 'text',
                'default_value' => '15+',
            ),
            array(
                'key'           => 'field_ep_pharmacist_experience_label',
                'label'         => 'Experience Label',
                'name'          => 'pharmacist_experience_label',
                'type'          => 'text',
                'default_value' => 'Years Experience',
            ),
            array(
                'key'           => 'field_ep_pharmacist_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'pharmacist_cta_text',
                'type'          => 'text',
                'default_value' => 'Start Your Online Consultation',
            ),
            array(
                'key'          => 'field_ep_pharmacist_cta_url',
                'label'        => 'CTA Button URL',
                'name'         => 'pharmacist_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to default to the booking page.',
            ),
            array(
                'key'          => 'field_ep_pharmacist_video_url',
                'label'        => 'Video URL',
                'name'         => 'pharmacist_video_url',
                'type'         => 'url',
                'instructions' => 'YouTube or Vimeo URL. Leave blank to hide the play button overlay.',
            ),
            array(
                'key'           => 'field_ep_pharmacist_video_label',
                'label'         => 'Video Button Label',
                'name'          => 'pharmacist_video_label',
                'type'          => 'text',
                'default_value' => 'Watch Welcome Message',
            ),
            array(
                'key'           => 'field_ep_pharmacist_image',
                'label'         => 'Pharmacist Photo',
                'name'          => 'pharmacist_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a professional photo. Recommended: 600x750px portrait.',
            ),
            array(
                'key'          => 'field_ep_pharmacist_credentials',
                'label'        => 'Credentials',
                'name'         => 'pharmacist_credentials',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Credential',
                'instructions' => 'Leave empty to use defaults (GPhC Registered, Independent Prescriber, Weight Loss Specialist).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_credential_icon',
                        'label'         => 'Icon',
                        'name'          => 'credential_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-certificate',
                        'instructions'  => 'Font Awesome icon class',
                    ),
                    array(
                        'key'   => 'field_ep_credential_text',
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
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B5. How It Works Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_how_it_works',
        'title'    => 'How It Works Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_hiw_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'hiw_badge_text',
                'type'          => 'text',
                'default_value' => 'Simple & Fast',
            ),
            array(
                'key'           => 'field_ep_hiw_title',
                'label'         => 'Title',
                'name'          => 'hiw_title',
                'type'          => 'text',
                'default_value' => 'How It Works',
            ),
            array(
                'key'           => 'field_ep_hiw_description',
                'label'         => 'Description',
                'name'          => 'hiw_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Getting started with Easy Pharmacy is simple. From consultation to delivery, we\'ve made healthcare accessible.',
            ),
            array(
                'key'           => 'field_ep_hiw_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'hiw_cta_text',
                'type'          => 'text',
                'default_value' => 'Start Your Journey Now',
            ),
            array(
                'key'          => 'field_ep_hiw_cta_url',
                'label'        => 'CTA Button URL',
                'name'         => 'hiw_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to default to the booking page.',
            ),
            array(
                'key'          => 'field_ep_hiw_steps',
                'label'        => 'Steps',
                'name'         => 'hiw_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',
                'instructions' => 'Leave empty to use defaults (Book Online, Speak to Dilip, Receive Treatment).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_step_icon',
                        'label'         => 'Step Icon',
                        'name'          => 'step_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-circle',
                        'instructions'  => 'Font Awesome icon, e.g. fa-laptop-medical',
                    ),
                    array(
                        'key'   => 'field_ep_step_title',
                        'label' => 'Step Title',
                        'name'  => 'step_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_step_description',
                        'label' => 'Step Description',
                        'name'  => 'step_description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'           => 'field_ep_step_time_icon',
                        'label'         => 'Time Icon',
                        'name'          => 'step_time_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-clock',
                    ),
                    array(
                        'key'          => 'field_ep_step_time',
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
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B6. Switching Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_switching',
        'title'    => 'Switching Provider Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_switching_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'switching_badge_text',
                'type'          => 'text',
                'default_value' => '50+ Patients Switched This Month',
            ),
            array(
                'key'           => 'field_ep_switching_title_start',
                'label'         => 'Title (first line)',
                'name'          => 'switching_title_start',
                'type'          => 'text',
                'default_value' => 'Frustrated with Your Current',
            ),
            array(
                'key'           => 'field_ep_switching_title_highlight',
                'label'         => 'Title (highlighted text)',
                'name'          => 'switching_title_highlight',
                'type'          => 'text',
                'default_value' => 'Weight Loss Provider?',
            ),
            array(
                'key'           => 'field_ep_switching_description',
                'label'         => 'Description',
                'name'          => 'switching_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Tired of waiting weeks for prescriptions? Fed up with chatbots instead of real pharmacists? Join hundreds who\'ve switched to Easy Pharmacy for faster service, genuine support, and premium care you can trust.',
            ),
            array(
                'key'           => 'field_ep_switching_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'switching_cta_text',
                'type'          => 'text',
                'default_value' => 'Switch to Easy Pharmacy',
            ),
            array(
                'key'          => 'field_ep_switching_cta_url',
                'label'        => 'CTA Button URL',
                'name'         => 'switching_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to default to /switch-provider/',
            ),
            array(
                'key'           => 'field_ep_switching_image',
                'label'         => 'Section Image',
                'name'          => 'switching_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Image for the right column. Recommended: 800x600px.',
            ),
            array(
                'key'           => 'field_ep_switching_feature_1_image',
                'label'         => 'Feature 1 Image (Same-Day Prescriptions)',
                'name'          => 'switching_feature_1_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'library'       => 'all',
                'instructions'  => 'Image for the first feature box. Recommended: 120x120px.',
            ),
            array(
                'key'           => 'field_ep_switching_feature_2_image',
                'label'         => 'Feature 2 Image (Real Pharmacist Support)',
                'name'          => 'switching_feature_2_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'library'       => 'all',
                'instructions'  => 'Image for the second feature box. Recommended: 120x120px.',
            ),
            array(
                'key'           => 'field_ep_switching_feature_3_image',
                'label'         => 'Feature 3 Image (Premium Discreet Packaging)',
                'name'          => 'switching_feature_3_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'library'       => 'all',
                'instructions'  => 'Image for the third feature box. Recommended: 120x120px.',
            ),
            array(
                'key'          => 'field_ep_switching_features',
                'label'        => 'Features (Advanced Override)',
                'name'         => 'switching_features',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Feature',
                'instructions' => 'Only use this if you want to fully override the default features above. Leave empty to use defaults with the images set above.',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_switching_feature_title',
                        'label' => 'Feature Title',
                        'name'  => 'feature_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_switching_feature_description',
                        'label' => 'Feature Description',
                        'name'  => 'feature_description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'           => 'field_ep_switching_feature_image',
                        'label'         => 'Feature Image',
                        'name'          => 'feature_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),
                ),
            ),
            // Trust Stats — the 3 stat boxes below the features
            array(
                'key'          => 'field_ep_switching_trust_stats_tab',
                'label'        => 'Trust Stats',
                'type'         => 'tab',
            ),
            array(
                'key'          => 'field_ep_switching_trust_stats_info',
                'label'        => '',
                'type'         => 'message',
                'message'      => 'Configure the 3 trust stat boxes that appear below the feature cards (e.g. "50+ Switched Monthly", "4.7/5 Google Rating", "24h Delivery Time"). Leave fields blank to use built-in defaults.',
            ),
            // Stat 1
            array(
                'key'           => 'field_ep_switching_trust_1_icon',
                'label'         => 'Stat 1 — Icon',
                'name'          => 'switching_trust_1_icon',
                'type'          => 'text',
                'instructions'  => 'Font Awesome class, e.g. fas fa-user-group',
                'default_value' => 'fas fa-user-group',
            ),
            array(
                'key'           => 'field_ep_switching_trust_1_value',
                'label'         => 'Stat 1 — Value',
                'name'          => 'switching_trust_1_value',
                'type'          => 'text',
                'instructions'  => 'The big number/text, e.g. "50+"',
                'default_value' => '50+',
            ),
            array(
                'key'           => 'field_ep_switching_trust_1_label',
                'label'         => 'Stat 1 — Label',
                'name'          => 'switching_trust_1_label',
                'type'          => 'text',
                'instructions'  => 'Description below the value, e.g. "Switched Monthly"',
                'default_value' => 'Switched Monthly',
            ),
            // Stat 2
            array(
                'key'           => 'field_ep_switching_trust_2_icon',
                'label'         => 'Stat 2 — Icon',
                'name'          => 'switching_trust_2_icon',
                'type'          => 'text',
                'instructions'  => 'Font Awesome class, e.g. fas fa-star',
                'default_value' => 'fas fa-star',
            ),
            array(
                'key'           => 'field_ep_switching_trust_2_value',
                'label'         => 'Stat 2 — Value',
                'name'          => 'switching_trust_2_value',
                'type'          => 'text',
                'instructions'  => 'The big number/text, e.g. "4.7/5"',
                'default_value' => '4.7/5',
            ),
            array(
                'key'           => 'field_ep_switching_trust_2_label',
                'label'         => 'Stat 2 — Label',
                'name'          => 'switching_trust_2_label',
                'type'          => 'text',
                'instructions'  => 'Description below the value, e.g. "Google Rating"',
                'default_value' => 'Google Rating',
            ),
            // Stat 3
            array(
                'key'           => 'field_ep_switching_trust_3_icon',
                'label'         => 'Stat 3 — Icon',
                'name'          => 'switching_trust_3_icon',
                'type'          => 'text',
                'instructions'  => 'Font Awesome class, e.g. fas fa-truck-fast',
                'default_value' => 'fas fa-truck-fast',
            ),
            array(
                'key'           => 'field_ep_switching_trust_3_value',
                'label'         => 'Stat 3 — Value',
                'name'          => 'switching_trust_3_value',
                'type'          => 'text',
                'instructions'  => 'The big number/text, e.g. "24h"',
                'default_value' => '24h',
            ),
            array(
                'key'           => 'field_ep_switching_trust_3_label',
                'label'         => 'Stat 3 — Label',
                'name'          => 'switching_trust_3_label',
                'type'          => 'text',
                'instructions'  => 'Description below the value, e.g. "Delivery Time"',
                'default_value' => 'Delivery Time',
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
        'menu_order'            => 50,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B7. Travel Banner / RevSlider Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_revslider',
        'title'    => 'Travel Banner Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_revslider_alias',
                'label'         => 'Revolution Slider Alias',
                'name'          => 'revslider_alias',
                'type'          => 'text',
                'default_value' => 'home-hero',
                'instructions'  => 'If Revolution Slider plugin is active, enter the slider alias. Otherwise the placeholder below is shown.',
            ),
            array(
                'key'           => 'field_ep_revslider_placeholder_image',
                'label'         => 'Banner Backdrop Image',
                'name'          => 'revslider_placeholder_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a full-width backdrop image for the travel banner. Recommended: 1920x800px landscape.',
            ),
            array(
                'key'           => 'field_ep_revslider_placeholder_badge',
                'label'         => 'Badge Text',
                'name'          => 'revslider_placeholder_badge',
                'type'          => 'text',
                'default_value' => 'Yellow Fever Approved',
            ),
            array(
                'key'           => 'field_ep_revslider_placeholder_title',
                'label'         => 'Title',
                'name'          => 'revslider_placeholder_title',
                'type'          => 'text',
                'default_value' => 'Protect Your Adventures Across the Globe',
            ),
            array(
                'key'           => 'field_ep_revslider_placeholder_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'revslider_placeholder_subtitle',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'From yellow fever to malaria prevention, get expert travel vaccinations at Easy Pharmacy',
            ),
            array(
                'key'           => 'field_ep_revslider_placeholder_cta_text',
                'label'         => 'Primary CTA Text',
                'name'          => 'revslider_placeholder_cta_text',
                'type'          => 'text',
                'default_value' => 'Book Travel Clinic',
            ),
            array(
                'key'          => 'field_ep_revslider_placeholder_cta_url',
                'label'        => 'Primary CTA URL',
                'name'         => 'revslider_placeholder_cta_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to default to booking page.',
            ),
            array(
                'key'           => 'field_ep_revslider_placeholder_secondary_text',
                'label'         => 'Secondary Link Text',
                'name'          => 'revslider_placeholder_secondary_text',
                'type'          => 'text',
                'default_value' => 'Serving Ashford, Chertsey and beyond',
            ),
            array(
                'key'           => 'field_ep_revslider_placeholder_secondary_url',
                'label'         => 'Secondary Link URL',
                'name'          => 'revslider_placeholder_secondary_url',
                'type'          => 'text',
                'default_value' => '#location',
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
        'menu_order'            => 55,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B8. Safe & Secure Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_safe_secure',
        'title'    => 'Safe & Secure Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_safe_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'safe_badge_text',
                'type'          => 'text',
                'default_value' => 'GPhC Registered Pharmacy',
            ),
            array(
                'key'           => 'field_ep_safe_title_start',
                'label'         => 'Title (first part)',
                'name'          => 'safe_title_start',
                'type'          => 'text',
                'default_value' => 'Safe and',
            ),
            array(
                'key'           => 'field_ep_safe_title_highlight',
                'label'         => 'Title (highlighted text)',
                'name'          => 'safe_title_highlight',
                'type'          => 'text',
                'default_value' => 'Secure',
            ),
            array(
                'key'           => 'field_ep_safe_description',
                'label'         => 'Description',
                'name'          => 'safe_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Your safety is our top priority. We\'re fully regulated and inspected to ensure the highest standards of care.',
            ),
            array(
                'key'          => 'field_ep_safe_features',
                'label'        => 'Trust Features',
                'name'         => 'safe_features',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Feature',
                'instructions' => 'Leave empty to use defaults.',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_safe_feature_icon',
                        'label'         => 'Icon',
                        'name'          => 'feature_icon',
                        'type'          => 'text',
                        'default_value' => 'fa-shield-halved',
                        'instructions'  => 'Font Awesome icon class',
                    ),
                    array(
                        'key'   => 'field_ep_safe_feature_title',
                        'label' => 'Title',
                        'name'  => 'feature_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_safe_feature_description',
                        'label' => 'Description',
                        'name'  => 'feature_description',
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
        'menu_order'            => 60,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B9. Health Hub Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_health_hub',
        'title'    => 'Health Hub Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_healthhub_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'healthhub_badge_text',
                'type'          => 'text',
                'default_value' => 'Expert Advice',
            ),
            array(
                'key'           => 'field_ep_healthhub_title_start',
                'label'         => 'Title (first part)',
                'name'          => 'healthhub_title_start',
                'type'          => 'text',
                'default_value' => 'Latest from the',
            ),
            array(
                'key'           => 'field_ep_healthhub_title_highlight',
                'label'         => 'Title (highlighted text)',
                'name'          => 'healthhub_title_highlight',
                'type'          => 'text',
                'default_value' => 'Health Hub',
            ),
            array(
                'key'           => 'field_ep_healthhub_view_all_text',
                'label'         => 'View All Link Text',
                'name'          => 'healthhub_view_all_text',
                'type'          => 'text',
                'default_value' => 'View all articles',
            ),
            array(
                'key'          => 'field_ep_healthhub_view_all_url',
                'label'        => 'View All Link URL',
                'name'         => 'healthhub_view_all_url',
                'type'         => 'url',
                'instructions' => 'Leave blank to default to /health-hub/',
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
        'menu_order'            => 65,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B10. Location Section (page-level overrides)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_location',
        'title'    => 'Location Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_location_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'location_badge_text',
                'type'          => 'text',
                'default_value' => 'Visit Us',
            ),
            array(
                'key'           => 'field_ep_location_title_start',
                'label'         => 'Title (first part)',
                'name'          => 'location_title_start',
                'type'          => 'text',
                'default_value' => 'Find',
            ),
            array(
                'key'          => 'field_ep_location_title_highlight',
                'label'        => 'Title (highlighted text)',
                'name'         => 'location_title_highlight',
                'type'         => 'text',
                'instructions' => 'Leave blank to use pharmacy name.',
            ),
            array(
                'key'           => 'field_ep_page_location_map_image',
                'label'         => 'Map Background Image',
                'name'          => 'location_map_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a static map image or screenshot of your location on Google Maps. This appears as the full-width background behind the location card. Overrides the global setting on the Contact &amp; Location options page.',
            ),
            array(
                'key'           => 'field_ep_page_location_pharmacy_image',
                'label'         => 'Pharmacy / Area Image',
                'name'          => 'location_pharmacy_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload an image to display inside the location card above the details (e.g. an aerial view or storefront photo). Overrides the global setting on the Contact &amp; Location options page.',
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
        'menu_order'            => 70,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B11. Testimonials Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_testimonials',
        'title'    => 'Testimonials Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_testimonials_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'testimonials_badge_text',
                'type'          => 'text',
                'default_value' => 'Real Transformations',
            ),
            array(
                'key'           => 'field_ep_testimonials_title_start',
                'label'         => 'Title (first part)',
                'name'          => 'testimonials_title_start',
                'type'          => 'text',
                'default_value' => 'Real Results.',
            ),
            array(
                'key'           => 'field_ep_testimonials_title_highlight',
                'label'         => 'Title (highlighted text)',
                'name'          => 'testimonials_title_highlight',
                'type'          => 'text',
                'default_value' => 'Lasting Health.',
            ),
            array(
                'key'           => 'field_ep_testimonials_description',
                'label'         => 'Description',
                'name'          => 'testimonials_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'See how our patients across Ashford have transformed their health with our personalised care.',
            ),
            array(
                'key'           => 'field_ep_testimonials_disclaimer',
                'label'         => 'Disclaimer Text',
                'name'          => 'testimonials_disclaimer',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'The results below are from real Easy Pharmacy patients. Individual results may vary.',
            ),
            array(
                'key'           => 'field_ep_testimonials_cta_title',
                'label'         => 'CTA Card Title',
                'name'          => 'testimonials_cta_title',
                'type'          => 'text',
                'default_value' => 'Trusted by 10,000+ Ashford Customers',
            ),
            array(
                'key'           => 'field_ep_testimonials_cta_text',
                'label'         => 'CTA Card Text',
                'name'          => 'testimonials_cta_text',
                'type'          => 'text',
                'default_value' => 'No waiting lists. No hidden fees. Just expert, local healthcare you can rely on.',
            ),
            array(
                'key'          => 'field_ep_testimonials',
                'label'        => 'Testimonials',
                'name'         => 'testimonials',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Testimonial',
                'instructions' => 'Leave empty to use the 3 default testimonials.',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_testimonial_name',
                        'label' => 'Patient Name',
                        'name'  => 'testimonial_name',
                        'type'  => 'text',
                    ),
                    array(
                        'key'          => 'field_ep_testimonial_service',
                        'label'        => 'Service',
                        'name'         => 'testimonial_service',
                        'type'         => 'text',
                        'instructions' => 'e.g. Travel Clinic, Weight Loss, Ear Wax Removal',
                    ),
                    array(
                        'key'   => 'field_ep_testimonial_quote',
                        'label' => 'Quote',
                        'name'  => 'testimonial_quote',
                        'type'  => 'textarea',
                        'rows'  => 3,
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
        'menu_order'            => 80,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // B13. Quick Book Section (after How It Works)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_quick_book',
        'title'    => 'Quick Book Section',
        'fields'   => array(
            array( 'key' => 'field_ep_qb_badge', 'label' => 'Badge Text', 'name' => 'qb_badge_text', 'type' => 'text', 'default_value' => 'Book Online' ),
            array( 'key' => 'field_ep_qb_title_1', 'label' => 'Title Line 1', 'name' => 'qb_title_line_1', 'type' => 'text', 'default_value' => 'Ready to' ),
            array( 'key' => 'field_ep_qb_title_2', 'label' => 'Title Line 2 (gradient)', 'name' => 'qb_title_line_2', 'type' => 'text', 'default_value' => 'Get Started?' ),
            array( 'key' => 'field_ep_qb_desc', 'label' => 'Description', 'name' => 'qb_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Choose your service and book a time that works for you. Our expert team is ready to help — whether it\'s a face-to-face consultation or a quick prescription pickup.' ),
            array( 'key' => 'field_ep_qb_trust_1', 'label' => 'Trust Check 1', 'name' => 'qb_trust_1', 'type' => 'text', 'default_value' => 'Same-day appointments often available' ),
            array( 'key' => 'field_ep_qb_trust_2', 'label' => 'Trust Check 2', 'name' => 'qb_trust_2', 'type' => 'text', 'default_value' => 'GPhC registered pharmacy' ),
            array( 'key' => 'field_ep_qb_trust_3', 'label' => 'Trust Check 3', 'name' => 'qb_trust_3', 'type' => 'text', 'default_value' => 'Free parking on site' ),
            array( 'key' => 'field_ep_qb_trust_4', 'label' => 'Trust Check 4', 'name' => 'qb_trust_4', 'type' => 'text', 'default_value' => 'No obligation — cancel anytime' ),
            array( 'key' => 'field_ep_qb_card_heading', 'label' => 'Card Heading', 'name' => 'qb_card_heading', 'type' => 'text', 'default_value' => 'Book Your Visit' ),
            array( 'key' => 'field_ep_qb_card_available', 'label' => 'Card Availability Text', 'name' => 'qb_card_available', 'type' => 'text', 'default_value' => 'Same-day appointments available' ),
            array( 'key' => 'field_ep_qb_card_svc_label', 'label' => 'Card Services Label', 'name' => 'qb_card_services_label', 'type' => 'text', 'default_value' => 'Choose a service to get started:' ),
            array(
                'key'        => 'field_ep_qb_card_services',
                'label'      => 'Card Quick Services',
                'name'       => 'qb_card_services',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_qb_card_svc_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-weight-scale', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe' ),
                    array( 'key' => 'field_ep_qb_card_svc_name', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_ep_qb_card_cta', 'label' => 'Card CTA Text', 'name' => 'qb_card_cta_text', 'type' => 'text', 'default_value' => 'View All Services' ),
            array( 'key' => 'field_ep_qb_card_hours', 'label' => 'Card Hours Text', 'name' => 'qb_card_hours', 'type' => 'text', 'default_value' => 'Mon–Fri: 9am – 6pm' ),
            array( 'key' => 'field_ep_qb_card_confirm', 'label' => 'Card Confirmation Text', 'name' => 'qb_card_confirm', 'type' => 'text', 'default_value' => 'Instant confirmation' ),
            array( 'key' => 'field_ep_qb_card_badge', 'label' => 'Floating Badge Text', 'name' => 'qb_card_floating_badge', 'type' => 'text', 'default_value' => 'Free Parking Available' ),
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
        'menu_order'            => 55,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // C. BLOG POST FIELDS
    // =========================================================================

    acf_add_local_field_group( array(
        'key'      => 'group_ep_blog_post',
        'title'    => 'Blog Post Fields',
        'fields'   => array(
            array(
                'key'   => 'field_ep_reading_time',
                'label' => 'Reading Time (minutes)',
                'name'  => 'reading_time',
                'type'  => 'number',
                'min'   => 1,
                'step'  => 1,
            ),
            array(
                'key'   => 'field_ep_article_author',
                'label' => 'Article Author',
                'name'  => 'article_author',
                'type'  => 'text',
            ),
            array(
                'key'           => 'field_ep_author_avatar',
                'label'         => 'Author Avatar',
                'name'          => 'author_photo',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'instructions'  => 'Upload a profile photo for the post author. Used in the hero and the Clinically Reviewed Content block.',
            ),
            array(
                'key'           => 'field_ep_reviewer_avatar',
                'label'         => 'Reviewer Avatar',
                'name'          => 'reviewer_photo',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'instructions'  => 'Optional override for the reviewer photo. Leave blank to use the pharmacist image from Pharmacy Settings.',
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
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // C1b. TABLE OF CONTENTS TOGGLE
    // =========================================================================

    acf_add_local_field_group( array(
        'key'      => 'group_ep_post_toc',
        'title'    => 'Table of Contents',
        'fields'   => array(
            array(
                'key'           => 'field_ep_show_toc',
                'label'         => 'Show Table of Contents',
                'name'          => 'show_table_of_contents',
                'type'          => 'true_false',
                'instructions'  => 'Display an auto-generated table of contents at the top of the article. Requires at least 2 headings (H2/H3) in the post content.',
                'default_value' => 1,
                'ui'            => 1,
                'ui_on_text'    => 'Show',
                'ui_off_text'   => 'Hide',
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
        'menu_order'            => 0,
        'position'              => 'side',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // C2. PILLAR / CLUSTER CONTENT STRATEGY
    // =========================================================================

    acf_add_local_field_group( array(
        'key'      => 'group_ep_pillar_cluster',
        'title'    => 'Content Cluster (Pillar & Cluster Posts)',
        'fields'   => array(
            array(
                'key'           => 'field_ep_is_pillar_post',
                'label'         => 'Is this a Pillar Post?',
                'name'          => 'is_pillar_post',
                'type'          => 'true_false',
                'instructions'  => 'Enable this if this post is a pillar (main guide). You can then select its supporting cluster posts below.',
                'default_value' => 0,
                'ui'            => 1,
                'ui_on_text'    => 'Yes',
                'ui_off_text'   => 'No',
            ),
            array(
                'key'               => 'field_ep_cluster_posts',
                'label'             => 'Cluster Posts',
                'name'              => 'cluster_posts',
                'type'              => 'relationship',
                'instructions'      => 'Select the supporting cluster posts that relate to this pillar post. They will appear in a dedicated section on this page, and each cluster post will show a link back to this pillar.',
                'post_type'         => array( 'post' ),
                'filters'           => array( 'search', 'taxonomy' ),
                'return_format'     => 'id',
                'min'               => 0,
                'max'               => '',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_ep_is_pillar_post',
                            'operator' => '==',
                            'value'    => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key'           => 'field_ep_cluster_section_title',
                'label'         => 'Cluster Section Title',
                'name'          => 'cluster_section_title',
                'type'          => 'text',
                'instructions'  => 'Heading shown above the cluster posts on this page.',
                'default_value' => 'In This Series',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_ep_is_pillar_post',
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
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // C3. FAQ SECTION (Per-Post Accordion)
    // =========================================================================

    acf_add_local_field_group( array(
        'key'      => 'group_ep_post_faq',
        'title'    => 'FAQ Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_post_faq_title',
                'label'         => 'FAQ Section Title',
                'name'          => 'post_faq_title',
                'type'          => 'text',
                'default_value' => 'Frequently Asked Questions',
            ),
            array(
                'key'          => 'field_ep_post_faqs',
                'label'        => 'FAQs',
                'name'         => 'post_faqs',
                'type'         => 'repeater',
                'instructions' => 'Add question and answer pairs. These will display as an accordion and generate FAQPage schema for rich search results.',
                'min'          => 0,
                'max'          => 20,
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_post_faq_question',
                        'label' => 'Question',
                        'name'  => 'question',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_post_faq_answer',
                        'label' => 'Answer',
                        'name'  => 'answer',
                        'type'  => 'wysiwyg',
                        'tabs'  => 'all',
                        'toolbar' => 'basic',
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
        'menu_order'            => 2,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // D. FLEXIBLE CONTENT BUILDER (Custom Page Template)
    // =========================================================================

    acf_add_local_field_group( array(
        'key'      => 'group_ep_flexible_content',
        'title'    => 'Page Builder',
        'fields'   => array(
            array(
                'key'          => 'field_ep_page_sections',
                'label'        => 'Page Sections',
                'name'         => 'page_sections',
                'type'         => 'flexible_content',
                'button_label' => 'Add Section',
                'layouts'      => array(

                    // Layout: Hero
                    'layout_ep_hero' => array(
                        'key'        => 'layout_ep_hero',
                        'name'       => 'hero',
                        'label'      => 'Hero',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_ep_fc_hero_badge_text',
                                'label' => 'Badge Text',
                                'name'  => 'badge_text',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_fc_hero_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_fc_hero_description',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 3,
                            ),
                            array(
                                'key'   => 'field_ep_fc_hero_cta_text',
                                'label' => 'CTA Text',
                                'name'  => 'cta_text',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_fc_hero_cta_url',
                                'label' => 'CTA URL',
                                'name'  => 'cta_url',
                                'type'  => 'url',
                            ),
                            array(
                                'key'           => 'field_ep_fc_hero_image',
                                'label'         => 'Image',
                                'name'          => 'image',
                                'type'          => 'image',
                                'return_format' => 'array',
                                'preview_size'  => 'medium',
                                'library'       => 'all',
                            ),
                        ),
                    ),

                    // Layout: Stats Bar
                    'layout_ep_stats_bar' => array(
                        'key'        => 'layout_ep_stats_bar',
                        'name'       => 'stats_bar',
                        'label'      => 'Stats Bar',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'          => 'field_ep_fc_stats',
                                'label'        => 'Stats',
                                'name'         => 'stats',
                                'type'         => 'repeater',
                                'layout'       => 'table',
                                'button_label' => 'Add Stat',
                                'sub_fields'   => array(
                                    array(
                                        'key'   => 'field_ep_fc_stat_icon',
                                        'label' => 'Icon',
                                        'name'  => 'stat_icon',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_stat_number',
                                        'label' => 'Number',
                                        'name'  => 'stat_number',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_stat_label',
                                        'label' => 'Label',
                                        'name'  => 'stat_label',
                                        'type'  => 'text',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Layout: Text Block
                    'layout_ep_text_block' => array(
                        'key'        => 'layout_ep_text_block',
                        'name'       => 'text_block',
                        'label'      => 'Text Block',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'          => 'field_ep_fc_text_content',
                                'label'        => 'Content',
                                'name'         => 'content',
                                'type'         => 'wysiwyg',
                                'tabs'         => 'all',
                                'toolbar'      => 'full',
                                'media_upload' => 1,
                            ),
                        ),
                    ),

                    // Layout: Image + Text
                    'layout_ep_image_text' => array(
                        'key'        => 'layout_ep_image_text',
                        'name'       => 'image_text',
                        'label'      => 'Image + Text',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_ep_fc_imgtext_image',
                                'label'         => 'Image',
                                'name'          => 'image',
                                'type'          => 'image',
                                'return_format' => 'array',
                                'preview_size'  => 'medium',
                                'library'       => 'all',
                            ),
                            array(
                                'key'   => 'field_ep_fc_imgtext_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'          => 'field_ep_fc_imgtext_content',
                                'label'        => 'Content',
                                'name'         => 'content',
                                'type'         => 'wysiwyg',
                                'tabs'         => 'all',
                                'toolbar'      => 'full',
                                'media_upload' => 1,
                            ),
                            array(
                                'key'           => 'field_ep_fc_imgtext_position',
                                'label'         => 'Image Position',
                                'name'          => 'image_position',
                                'type'          => 'select',
                                'choices'       => array(
                                    'left'  => 'Left',
                                    'right' => 'Right',
                                ),
                                'default_value' => 'left',
                            ),
                        ),
                    ),

                    // Layout: CTA Banner
                    'layout_ep_cta_banner' => array(
                        'key'        => 'layout_ep_cta_banner',
                        'name'       => 'cta_banner',
                        'label'      => 'CTA Banner',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_ep_fc_cta_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_fc_cta_description',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 3,
                            ),
                            array(
                                'key'   => 'field_ep_fc_cta_text',
                                'label' => 'CTA Text',
                                'name'  => 'cta_text',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_fc_cta_url',
                                'label' => 'CTA URL',
                                'name'  => 'cta_url',
                                'type'  => 'url',
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
                    'value'    => 'page-templates/page-custom.php',
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

    // =========================================================================
    // E. EAR WAX REMOVAL PAGE FIELDS
    // =========================================================================

    // -------------------------------------------------------------------------
    // E1. Ear Wax — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_hero',
        'title'    => 'Ear Wax — Hero Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_hero_badge',
                'label'         => 'Badge Text',
                'name'          => 'ew_hero_badge',
                'type'          => 'text',
                'default_value' => 'SAME-DAY MICROSUCTION AVAILABLE',
                'instructions'  => 'Small badge text above the hero title.',
            ),
            array(
                'key'           => 'field_ep_ew_hero_title_highlight',
                'label'         => 'Title — Highlighted Line',
                'name'          => 'ew_hero_title_highlight',
                'type'          => 'text',
                'default_value' => 'Professional Ear Wax Removal',
                'instructions'  => 'Displayed in gradient text.',
            ),
            array(
                'key'           => 'field_ep_ew_hero_title_line2',
                'label'         => 'Title — Second Line',
                'name'          => 'ew_hero_title_line2',
                'type'          => 'text',
                'default_value' => 'in Ashford',
            ),
            array(
                'key'           => 'field_ep_ew_hero_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'ew_hero_subtitle',
                'type'          => 'text',
                'default_value' => 'Expert microsuction by Jignasa Modhvadia and our specialist team',
            ),
            array(
                'key'           => 'field_ep_ew_hero_description',
                'label'         => 'Description',
                'name'          => 'ew_hero_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Safe, effective ear wax removal using advanced microsuction technology. Same-day appointments available. Guaranteed results with complimentary follow-up within 7 days if needed.',
            ),
            array(
                'key'           => 'field_ep_ew_hero_cta_url',
                'label'         => 'CTA Button URL',
                'name'          => 'ew_hero_cta_url',
                'type'          => 'url',
                'instructions'  => 'Leave blank to use the default booking page.',
            ),
            array(
                'key'           => 'field_ep_ew_hero_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'ew_hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Book Your Appointment',
            ),
            array(
                'key'           => 'field_ep_ew_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'ew_hero_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Main hero image. Recommended: portrait orientation, at least 800×1000px.',
            ),
            array(
                'key'           => 'field_ep_ew_hero_image_alt',
                'label'         => 'Hero Image Alt Text',
                'name'          => 'ew_hero_image_alt',
                'type'          => 'text',
                'default_value' => 'Friendly older patient satisfied after ear wax removal treatment',
            ),
            array(
                'key'           => 'field_ep_ew_price_label',
                'label'         => 'Price Badge — Label',
                'name'          => 'ew_price_label',
                'type'          => 'text',
                'default_value' => 'Starting From',
            ),
            array(
                'key'           => 'field_ep_ew_price_amount',
                'label'         => 'Price Badge — Amount',
                'name'          => 'ew_price_amount',
                'type'          => 'text',
                'default_value' => '£20',
            ),
            array(
                'key'           => 'field_ep_ew_price_sub',
                'label'         => 'Price Badge — Subtext',
                'name'          => 'ew_price_sub',
                'type'          => 'text',
                'default_value' => 'per ear · max £50',
            ),
            array(
                'key'           => 'field_ep_ew_trust_1',
                'label'         => 'Trust Item 1',
                'name'          => 'ew_trust_1',
                'type'          => 'text',
                'default_value' => 'GPhC Registered',
            ),
            array(
                'key'           => 'field_ep_ew_trust_2',
                'label'         => 'Trust Item 2',
                'name'          => 'ew_trust_2',
                'type'          => 'text',
                'default_value' => 'Same-day available',
            ),
            array(
                'key'           => 'field_ep_ew_trust_3',
                'label'         => 'Trust Item 3',
                'name'          => 'ew_trust_3',
                'type'          => 'text',
                'default_value' => 'From £20 per ear',
            ),
            array(
                'key'           => 'field_ep_ew_hero_testimonial_text',
                'label'         => 'Hero Testimonial — Quote',
                'name'          => 'ew_hero_testimonial_text',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => '"The difference was immediate—I could hear clearly again. Professional, gentle, and highly effective."',
            ),
            array(
                'key'           => 'field_ep_ew_hero_testimonial_avatar',
                'label'         => 'Hero Testimonial — Avatar',
                'name'          => 'ew_hero_testimonial_avatar',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'thumbnail',
                'library'       => 'all',
            ),
            array(
                'key'           => 'field_ep_ew_hero_testimonial_name',
                'label'         => 'Hero Testimonial — Name',
                'name'          => 'ew_hero_testimonial_name',
                'type'          => 'text',
                'default_value' => 'Sarah M.',
            ),
            array(
                'key'           => 'field_ep_ew_hero_testimonial_location',
                'label'         => 'Hero Testimonial — Location',
                'name'          => 'ew_hero_testimonial_location',
                'type'          => 'text',
                'default_value' => 'Ashford Patient',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-ear-wax-removal.php',
                ),
            ),
        ),
        'menu_order'            => 0,
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
    // E2. Ear Wax — Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_stats',
        'title'    => 'Ear Wax — Stats Bar',
        'fields'   => array(
            array(
                'key'          => 'field_ep_ew_stats',
                'label'        => 'Stats',
                'name'         => 'ew_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'instructions' => 'Leave empty to use defaults (GPhC, 5,000+ Patients, 95% Success, 30 min, Same Day).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_ew_stat_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-star',
                        'instructions'  => 'Full Font Awesome class, e.g. fas fa-users',
                    ),
                    array(
                        'key'   => 'field_ep_ew_stat_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_stat_label',
                        'label' => 'Label',
                        'name'  => 'label',
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
                    'value'    => 'page-templates/page-ear-wax-removal.php',
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
    // E3. Ear Wax — Symptoms Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_symptoms',
        'title'    => 'Ear Wax — Symptoms Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_symptoms_badge',
                'label'         => 'Badge Text',
                'name'          => 'ew_symptoms_badge',
                'type'          => 'text',
                'default_value' => 'COMMON SYMPTOMS',
            ),
            array(
                'key'           => 'field_ep_ew_symptoms_title',
                'label'         => 'Title',
                'name'          => 'ew_symptoms_title',
                'type'          => 'text',
                'default_value' => 'Is Ear Wax Affecting Your Daily Life?',
            ),
            array(
                'key'           => 'field_ep_ew_symptoms_description',
                'label'         => 'Description',
                'name'          => 'ew_symptoms_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => "Don't let blocked ears hold you back. Recognise these common symptoms?",
            ),
            array(
                'key'          => 'field_ep_ew_symptoms',
                'label'        => 'Symptoms',
                'name'         => 'ew_symptoms',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Symptom',
                'instructions' => 'Leave empty to use 6 default symptom cards.',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_ew_symptom_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-ear-listen',
                        'instructions'  => 'Full Font Awesome class.',
                    ),
                    array(
                        'key'   => 'field_ep_ew_symptom_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_symptom_description',
                        'label' => 'Description',
                        'name'  => 'description',
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
                    'value'    => 'page-templates/page-ear-wax-removal.php',
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
    // E4. Ear Wax — Team Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_team',
        'title'    => 'Ear Wax — Team Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_team_badge',
                'label'         => 'Badge Text',
                'name'          => 'ew_team_badge',
                'type'          => 'text',
                'default_value' => 'OUR TEAM',
            ),
            array(
                'key'           => 'field_ep_ew_team_title',
                'label'         => 'Title',
                'name'          => 'ew_team_title',
                'type'          => 'text',
                'default_value' => 'Meet Your Ashford Ear Care Specialists',
            ),
            array(
                'key'           => 'field_ep_ew_team_description',
                'label'         => 'Description',
                'name'          => 'ew_team_description',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => "As Ashford's dedicated ear care practice, we've helped thousands of local residents resolve their ear wax problems. We offer professional, face-to-face care with convenient access and free parking.",
            ),
            array(
                'key'          => 'field_ep_ew_team_members',
                'label'        => 'Team Members',
                'name'         => 'ew_team_members',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Team Member',
                'instructions' => 'Leave empty to use default team (Jignasa Modhvadia & Baljender Nagi).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_ew_team_image',
                        'label'         => 'Photo',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),
                    array(
                        'key'   => 'field_ep_ew_team_name',
                        'label' => 'Name',
                        'name'  => 'name',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_team_role',
                        'label' => 'Role',
                        'name'  => 'role',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_team_bio',
                        'label' => 'Bio',
                        'name'  => 'bio',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'           => 'field_ep_ew_team_badge_text',
                        'label'         => 'Badge Text',
                        'name'          => 'badge_text',
                        'type'          => 'text',
                        'instructions'  => 'e.g. "Since 2019" or "Level 3 Technician"',
                    ),
                    array(
                        'key'           => 'field_ep_ew_team_badge_style',
                        'label'         => 'Badge Style',
                        'name'          => 'badge_style',
                        'type'          => 'select',
                        'choices'       => array(
                            'green'  => 'Green',
                            'purple' => 'Purple',
                        ),
                        'default_value' => 'green',
                    ),
                    array(
                        'key'          => 'field_ep_ew_team_tags',
                        'label'        => 'Skill Tags',
                        'name'         => 'tags',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Tag',
                        'sub_fields'   => array(
                            array(
                                'key'   => 'field_ep_ew_team_tag',
                                'label' => 'Tag',
                                'name'  => 'tag',
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
                    'value'    => 'page-templates/page-ear-wax-removal.php',
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
    // E5. Ear Wax — Comparison Table
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_comparison',
        'title'    => 'Ear Wax — Comparison Table',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_compare_badge',
                'label'         => 'Badge Text',
                'name'          => 'ew_compare_badge',
                'type'          => 'text',
                'default_value' => 'TREATMENT COMPARISON',
            ),
            array(
                'key'           => 'field_ep_ew_compare_title',
                'label'         => 'Title',
                'name'          => 'ew_compare_title',
                'type'          => 'text',
                'default_value' => 'How Our Treatment Compares',
            ),
            array(
                'key'           => 'field_ep_ew_compare_description',
                'label'         => 'Description',
                'name'          => 'ew_compare_description',
                'type'          => 'text',
                'default_value' => 'See why microsuction is the gold standard for ear wax removal in Ashford',
            ),
            array(
                'key'           => 'field_ep_ew_compare_col_1_heading',
                'label'         => 'Column 1 Heading (Highlighted)',
                'name'          => 'ew_compare_col_1_heading',
                'type'          => 'text',
                'default_value' => 'Our Microsuction',
            ),
            array(
                'key'           => 'field_ep_ew_compare_col_2_heading',
                'label'         => 'Column 2 Heading',
                'name'          => 'ew_compare_col_2_heading',
                'type'          => 'text',
                'default_value' => 'Traditional Syringing',
            ),
            array(
                'key'           => 'field_ep_ew_compare_col_3_heading',
                'label'         => 'Column 3 Heading',
                'name'          => 'ew_compare_col_3_heading',
                'type'          => 'text',
                'default_value' => 'At-Home Remedies',
            ),
            array(
                'key'          => 'field_ep_ew_comparison_rows',
                'label'        => 'Comparison Rows',
                'name'         => 'ew_comparison_rows',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Row',
                'instructions' => 'Leave empty to use 8 default rows.',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_ew_compare_feature',
                        'label' => 'Feature',
                        'name'  => 'feature',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_compare_microsuction',
                        'label' => 'Microsuction',
                        'name'  => 'microsuction',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_compare_syringing',
                        'label' => 'Syringing',
                        'name'  => 'syringing',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_compare_home_remedies',
                        'label' => 'Home Remedies',
                        'name'  => 'home_remedies',
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
                    'value'    => 'page-templates/page-ear-wax-removal.php',
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
    // E6. Ear Wax — Process Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_process',
        'title'    => 'Ear Wax — Process (How It Works)',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_process_badge',
                'label'         => 'Badge Text',
                'name'          => 'ew_process_badge',
                'type'          => 'text',
                'default_value' => 'HOW IT WORKS',
            ),
            array(
                'key'           => 'field_ep_ew_process_title',
                'label'         => 'Title',
                'name'          => 'ew_process_title',
                'type'          => 'text',
                'default_value' => 'Our Professional Ear Wax Removal Process',
            ),
            array(
                'key'           => 'field_ep_ew_process_description',
                'label'         => 'Description',
                'name'          => 'ew_process_description',
                'type'          => 'text',
                'default_value' => 'Simple, effective treatment in three easy steps',
            ),
            array(
                'key'          => 'field_ep_ew_process_steps',
                'label'        => 'Steps',
                'name'         => 'ew_process_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',
                'instructions' => 'Leave empty to use 3 default steps (Assessment, Treatment, Aftercare).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_ew_step_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-clipboard-check',
                        'instructions'  => 'Full Font Awesome class.',
                    ),
                    array(
                        'key'   => 'field_ep_ew_step_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_step_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'          => 'field_ep_ew_step_time',
                        'label'        => 'Time Label',
                        'name'         => 'time',
                        'type'         => 'text',
                        'instructions' => 'e.g. "10 minutes". Leave blank to hide.',
                    ),
                    array(
                        'key'          => 'field_ep_ew_step_badge',
                        'label'        => 'Badge Text',
                        'name'         => 'badge',
                        'type'         => 'text',
                        'instructions' => 'e.g. "Free 7-day follow-up". Leave blank to hide.',
                    ),
                    array(
                        'key'           => 'field_ep_ew_step_image',
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
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-ear-wax-removal.php',
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

    // -------------------------------------------------------------------------
    // E7. Ear Wax — Pricing Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_pricing',
        'title'    => 'Ear Wax — Pricing Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_pricing_badge',
                'label'         => 'Badge Text',
                'name'          => 'ew_pricing_badge',
                'type'          => 'text',
                'default_value' => 'TRANSPARENT PRICING',
            ),
            array(
                'key'           => 'field_ep_ew_pricing_title',
                'label'         => 'Title',
                'name'          => 'ew_pricing_title',
                'type'          => 'text',
                'default_value' => 'Simple, Transparent Pricing',
            ),
            array(
                'key'           => 'field_ep_ew_pricing_description',
                'label'         => 'Description',
                'name'          => 'ew_pricing_description',
                'type'          => 'text',
                'default_value' => 'No hidden fees. No surprises. Just clear, professional ear care.',
            ),
            array(
                'key'          => 'field_ep_ew_pricing',
                'label'        => 'Pricing Cards',
                'name'         => 'ew_pricing',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Pricing Card',
                'instructions' => 'Leave empty to use defaults (Consultation £10, Microsuction £20/ear).',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_ew_price_is_featured',
                        'label'         => 'Featured?',
                        'name'          => 'is_featured',
                        'type'          => 'true_false',
                        'default_value' => 0,
                        'ui'            => 1,
                        'instructions'  => 'Featured card gets a highlighted border and "Most Popular" badge.',
                    ),
                    array(
                        'key'           => 'field_ep_ew_price_badge_text',
                        'label'         => 'Badge Text',
                        'name'          => 'badge_text',
                        'type'          => 'text',
                        'default_value' => 'MOST POPULAR',
                        'instructions'  => 'Only shown on featured cards.',
                    ),
                    array(
                        'key'           => 'field_ep_ew_price_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-clipboard-list',
                        'instructions'  => 'Full Font Awesome class.',
                    ),
                    array(
                        'key'   => 'field_ep_ew_price_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'          => 'field_ep_ew_price_amount_val',
                        'label'        => 'Price (number only)',
                        'name'         => 'price',
                        'type'         => 'text',
                        'instructions' => 'Just the number, e.g. "20". The £ sign is added automatically.',
                    ),
                    array(
                        'key'          => 'field_ep_ew_price_per_text',
                        'label'        => 'Per Text',
                        'name'         => 'per_text',
                        'type'         => 'text',
                        'instructions' => 'e.g. "per ear". Leave blank if not needed.',
                    ),
                    array(
                        'key'           => 'field_ep_ew_price_button_text',
                        'label'         => 'Button Text',
                        'name'          => 'button_text',
                        'type'          => 'text',
                        'default_value' => 'Book Now',
                    ),
                    array(
                        'key'          => 'field_ep_ew_price_guarantee',
                        'label'        => 'Guarantee Text',
                        'name'         => 'guarantee_text',
                        'type'         => 'text',
                        'instructions' => 'e.g. "Satisfaction Guaranteed". Only shown on featured cards.',
                    ),
                    array(
                        'key'          => 'field_ep_ew_price_features',
                        'label'        => 'Features',
                        'name'         => 'features',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Feature',
                        'sub_fields'   => array(
                            array(
                                'key'   => 'field_ep_ew_price_feature',
                                'label' => 'Feature',
                                'name'  => 'feature',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key'           => 'field_ep_ew_value_1',
                'label'         => 'Value Item 1',
                'name'          => 'ew_value_1',
                'type'          => 'text',
                'default_value' => 'No Hidden Fees',
            ),
            array(
                'key'           => 'field_ep_ew_value_2',
                'label'         => 'Value Item 2',
                'name'          => 'ew_value_2',
                'type'          => 'text',
                'default_value' => 'Same-Day Available',
            ),
            array(
                'key'           => 'field_ep_ew_value_3',
                'label'         => 'Value Item 3',
                'name'          => 'ew_value_3',
                'type'          => 'text',
                'default_value' => 'All Payment Methods',
            ),
            array(
                'key'           => 'field_ep_ew_value_4',
                'label'         => 'Value Item 4',
                'name'          => 'ew_value_4',
                'type'          => 'text',
                'default_value' => 'Free Follow-Up',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-ear-wax-removal.php',
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

    // -------------------------------------------------------------------------
    // E8. Ear Wax — Testimonials Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_testimonials',
        'title'    => 'Ear Wax — Testimonials Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_testimonials_badge',
                'label'         => 'Badge Text',
                'name'          => 'ew_testimonials_badge',
                'type'          => 'text',
                'default_value' => 'PATIENT TESTIMONIALS',
            ),
            array(
                'key'           => 'field_ep_ew_testimonials_title',
                'label'         => 'Title',
                'name'          => 'ew_testimonials_title',
                'type'          => 'text',
                'default_value' => 'Hear What Our Ashford Patients Say',
            ),
            array(
                'key'           => 'field_ep_ew_testimonials_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'ew_testimonials_subtitle',
                'type'          => 'text',
                'default_value' => "Join thousands of satisfied patients who've experienced immediate relief",
            ),
            array(
                'key'          => 'field_ep_ew_testimonials',
                'label'        => 'Testimonials',
                'name'         => 'ew_testimonials',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Testimonial',
                'instructions' => 'Leave empty to use 3 default testimonials.',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_ew_testimonial_avatar',
                        'label'         => 'Avatar',
                        'name'          => 'avatar',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),
                    array(
                        'key'   => 'field_ep_ew_testimonial_author',
                        'label' => 'Author Name',
                        'name'  => 'author',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_testimonial_quote',
                        'label' => 'Quote',
                        'name'  => 'quote',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-ear-wax-removal.php',
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

    // -------------------------------------------------------------------------
    // E9. Ear Wax — FAQ Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_faq',
        'title'    => 'Ear Wax — FAQ Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_faq_badge',
                'label'         => 'Badge Text',
                'name'          => 'ew_faq_badge',
                'type'          => 'text',
                'default_value' => 'FREQUENTLY ASKED QUESTIONS',
            ),
            array(
                'key'           => 'field_ep_ew_faq_title',
                'label'         => 'Title',
                'name'          => 'ew_faq_title',
                'type'          => 'text',
                'default_value' => 'Frequently Asked Questions - Ear Wax Removal Ashford',
            ),
            array(
                'key'          => 'field_ep_ew_faqs',
                'label'        => 'FAQs',
                'name'         => 'ew_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'instructions' => 'Leave empty to use 6 default FAQs.',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_ew_faq_question',
                        'label' => 'Question',
                        'name'  => 'question',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_ew_faq_answer',
                        'label' => 'Answer',
                        'name'  => 'answer',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-ear-wax-removal.php',
                ),
            ),
        ),
        'menu_order'            => 80,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // E10. Ear Wax — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ew_cta',
        'title'    => 'Ear Wax — Final CTA Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_ew_cta_badge_1',
                'label'         => 'Badge 1',
                'name'          => 'ew_cta_badge_1',
                'type'          => 'text',
                'default_value' => 'From £20 per ear',
            ),
            array(
                'key'           => 'field_ep_ew_cta_badge_2',
                'label'         => 'Badge 2',
                'name'          => 'ew_cta_badge_2',
                'type'          => 'text',
                'default_value' => 'Same-day available',
            ),
            array(
                'key'           => 'field_ep_ew_cta_badge_3',
                'label'         => 'Badge 3',
                'name'          => 'ew_cta_badge_3',
                'type'          => 'text',
                'default_value' => 'Free 7-day follow-up',
            ),
            array(
                'key'           => 'field_ep_ew_cta_title',
                'label'         => 'Title',
                'name'          => 'ew_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready to hear clearly again?',
            ),
            array(
                'key'           => 'field_ep_ew_cta_description',
                'label'         => 'Description',
                'name'          => 'ew_cta_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Book your ear wax removal appointment at our Ashford clinic today. Expert microsuction treatment with guaranteed results.',
            ),
            array(
                'key'           => 'field_ep_ew_cta_button_text',
                'label'         => 'Button Text',
                'name'          => 'ew_cta_button_text',
                'type'          => 'text',
                'default_value' => 'Book Appointment Online',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-ear-wax-removal.php',
                ),
            ),
        ),
        'menu_order'            => 90,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // F. SWITCH PROVIDER PAGE FIELDS
    // =========================================================================

    // -------------------------------------------------------------------------
    // F1. Switch Provider — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_sp_hero',
        'title'    => 'Switch Provider — Hero Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_sp_hero_badge',
                'label'         => 'Badge Text',
                'name'          => 'sp_hero_badge',
                'type'          => 'text',
                'default_value' => 'SWITCH TO EASY PHARMACY',
            ),
            array(
                'key'           => 'field_ep_sp_hero_title_line1',
                'label'         => 'Title Line 1 (gradient)',
                'name'          => 'sp_hero_title_line1',
                'type'          => 'text',
                'default_value' => 'Frustrated with',
            ),
            array(
                'key'           => 'field_ep_sp_hero_title_line2',
                'label'         => 'Title Line 2 (dark)',
                'name'          => 'sp_hero_title_line2',
                'type'          => 'text',
                'default_value' => 'Your Current',
            ),
            array(
                'key'           => 'field_ep_sp_hero_title_line3',
                'label'         => 'Title Line 3 (gradient)',
                'name'          => 'sp_hero_title_line3',
                'type'          => 'text',
                'default_value' => 'Weight Loss Provider?',
            ),
            array(
                'key'           => 'field_ep_sp_hero_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'sp_hero_subtitle',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Switch to Easy Pharmacy for expert care, transparent pricing, and ongoing pharmacist support. No waiting lists.',
            ),
            array(
                'key'           => 'field_ep_sp_hero_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'sp_hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Start Your Switch Today',
            ),
            array(
                'key'           => 'field_ep_sp_hero_cta_url',
                'label'         => 'CTA Button URL',
                'name'          => 'sp_hero_cta_url',
                'type'          => 'text',
                'default_value' => '#comparison',
            ),
            array(
                'key'           => 'field_ep_sp_hero_trust_1',
                'label'         => 'Trust Pill 1',
                'name'          => 'sp_hero_trust_1',
                'type'          => 'text',
                'default_value' => 'Zero gap in treatment',
            ),
            array(
                'key'           => 'field_ep_sp_hero_trust_2',
                'label'         => 'Trust Pill 2',
                'name'          => 'sp_hero_trust_2',
                'type'          => 'text',
                'default_value' => 'Same Day Appointments',
            ),
            array(
                'key'           => 'field_ep_sp_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'sp_hero_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a hero image. Default: stock photo of patient with pharmacist.',
            ),
            array(
                'key'           => 'field_ep_sp_hero_image_alt',
                'label'         => 'Hero Image Alt Text',
                'name'          => 'sp_hero_image_alt',
                'type'          => 'text',
                'default_value' => 'Happy patient consulting with pharmacist',
            ),
            array(
                'key'           => 'field_ep_sp_hero_price_label',
                'label'         => 'Price Badge Label',
                'name'          => 'sp_hero_price_label',
                'type'          => 'text',
                'default_value' => 'From',
            ),
            array(
                'key'           => 'field_ep_sp_hero_price_amount',
                'label'         => 'Price Badge Amount',
                'name'          => 'sp_hero_price_amount',
                'type'          => 'text',
                'default_value' => '£125/mo',
            ),
            array(
                'key'           => 'field_ep_sp_hero_price_note',
                'label'         => 'Price Badge Note',
                'name'          => 'sp_hero_price_note',
                'type'          => 'text',
                'default_value' => 'All-inclusive',
            ),
            array(
                'key'           => 'field_ep_sp_hero_testimonial_text',
                'label'         => 'Testimonial Quote',
                'name'          => 'sp_hero_testimonial_text',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => '"I travel 40 miles every month to see Dilip... he\'s that good. Would never go anywhere else."',
            ),
            array(
                'key'           => 'field_ep_sp_hero_testimonial_name',
                'label'         => 'Testimonial Author',
                'name'          => 'sp_hero_testimonial_name',
                'type'          => 'text',
                'default_value' => 'Ashford Patient',
            ),
            array(
                'key'           => 'field_ep_sp_hero_testimonial_result',
                'label'         => 'Testimonial Result Badge',
                'name'          => 'sp_hero_testimonial_result',
                'type'          => 'text',
                'default_value' => '4 Stone Lost',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-switch-provider.php',
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
    // F2. Switch Provider — Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_sp_stats',
        'title'    => 'Switch Provider — Stats Bar',
        'fields'   => array(
            array(
                'key'           => 'field_ep_sp_stats',
                'label'         => 'Stats',
                'name'          => 'sp_stats',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 6,
                'layout'        => 'table',
                'button_label'  => 'Add Stat',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_sp_stats_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'icon',
                        'type'          => 'text',
                        'default_value' => 'fas fa-star',
                    ),
                    array(
                        'key'           => 'field_ep_sp_stats_number',
                        'label'         => 'Number',
                        'name'          => 'number',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_sp_stats_label',
                        'label'         => 'Label',
                        'name'          => 'label',
                        'type'          => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-switch-provider.php',
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
    // F3. Switch Provider — Comparison Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_sp_comparison',
        'title'    => 'Switch Provider — Comparison Section',
        'fields'   => array(
            // Header
            array(
                'key'           => 'field_ep_sp_compare_badge',
                'label'         => 'Section Badge',
                'name'          => 'sp_compare_badge',
                'type'          => 'text',
                'default_value' => 'THE EASY PHARMACY DIFFERENCE',
            ),
            array(
                'key'           => 'field_ep_sp_compare_title',
                'label'         => 'Section Title',
                'name'          => 'sp_compare_title',
                'type'          => 'text',
                'default_value' => 'Compare Your Options',
            ),
            array(
                'key'           => 'field_ep_sp_compare_description',
                'label'         => 'Section Description',
                'name'          => 'sp_compare_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'See the difference face-to-face care makes for your weight loss journey',
            ),
            // Card 1: Problem
            array( 'key' => 'field_ep_sp_card1_tab', 'label' => 'Card 1: National Providers', 'type' => 'tab' ),
            array( 'key' => 'field_ep_sp_card1_icon', 'label' => 'Icon Class', 'name' => 'sp_card1_icon', 'type' => 'text', 'default_value' => 'fas fa-laptop' ),
            array( 'key' => 'field_ep_sp_card1_badge', 'label' => 'Badge', 'name' => 'sp_card1_badge', 'type' => 'text', 'default_value' => 'ONLINE ONLY' ),
            array( 'key' => 'field_ep_sp_card1_title', 'label' => 'Title', 'name' => 'sp_card1_title', 'type' => 'text', 'default_value' => 'National Providers' ),
            array( 'key' => 'field_ep_sp_card1_subtitle', 'label' => 'Subtitle', 'name' => 'sp_card1_subtitle', 'type' => 'text', 'default_value' => 'Remote-only weight loss services' ),
            array( 'key' => 'field_ep_sp_card1_price', 'label' => 'Price', 'name' => 'sp_card1_price', 'type' => 'text', 'default_value' => '£250+' ),
            array( 'key' => 'field_ep_sp_card1_price_period', 'label' => 'Price Period', 'name' => 'sp_card1_price_period', 'type' => 'text', 'default_value' => '/month' ),
            array( 'key' => 'field_ep_sp_card1_price_note', 'label' => 'Price Note', 'name' => 'sp_card1_price_note', 'type' => 'text', 'default_value' => 'Plus hidden consultation fees' ),
            array( 'key' => 'field_ep_sp_card1_footer', 'label' => 'Footer Text', 'name' => 'sp_card1_footer', 'type' => 'text', 'default_value' => 'What you\'re leaving behind' ),
            array(
                'key'           => 'field_ep_sp_card1_features',
                'label'         => 'Negative Features',
                'name'          => 'sp_card1_features',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 8,
                'layout'        => 'table',
                'button_label'  => 'Add Feature',
                'sub_fields'    => array(
                    array( 'key' => 'field_ep_sp_card1_f_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            // Card 2: Easy Pharmacy
            array( 'key' => 'field_ep_sp_card2_tab', 'label' => 'Card 2: Easy Pharmacy', 'type' => 'tab' ),
            array( 'key' => 'field_ep_sp_card2_recommended', 'label' => 'Recommended Badge', 'name' => 'sp_card2_recommended', 'type' => 'text', 'default_value' => 'RECOMMENDED' ),
            array( 'key' => 'field_ep_sp_card2_icon', 'label' => 'Icon Class', 'name' => 'sp_card2_icon', 'type' => 'text', 'default_value' => 'fas fa-heart-pulse' ),
            array( 'key' => 'field_ep_sp_card2_badge', 'label' => 'Badge', 'name' => 'sp_card2_badge', 'type' => 'text', 'default_value' => 'ASHFORD BASED' ),
            array( 'key' => 'field_ep_sp_card2_title', 'label' => 'Title', 'name' => 'sp_card2_title', 'type' => 'text', 'default_value' => 'Easy Pharmacy' ),
            array( 'key' => 'field_ep_sp_card2_subtitle', 'label' => 'Subtitle', 'name' => 'sp_card2_subtitle', 'type' => 'text', 'default_value' => 'Face-to-face weight loss care' ),
            array( 'key' => 'field_ep_sp_card2_price', 'label' => 'Price', 'name' => 'sp_card2_price', 'type' => 'text', 'default_value' => 'From £125' ),
            array( 'key' => 'field_ep_sp_card2_price_period', 'label' => 'Price Period', 'name' => 'sp_card2_price_period', 'type' => 'text', 'default_value' => '/month' ),
            array( 'key' => 'field_ep_sp_card2_price_note', 'label' => 'Price Note', 'name' => 'sp_card2_price_note', 'type' => 'text', 'default_value' => 'All-inclusive with face-to-face support' ),
            array( 'key' => 'field_ep_sp_card2_cta_text', 'label' => 'CTA Button Text', 'name' => 'sp_card2_cta_text', 'type' => 'text', 'default_value' => 'Make The Switch' ),
            array(
                'key'           => 'field_ep_sp_card2_features',
                'label'         => 'Positive Features',
                'name'          => 'sp_card2_features',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 8,
                'layout'        => 'table',
                'button_label'  => 'Add Feature',
                'sub_fields'    => array(
                    array( 'key' => 'field_ep_sp_card2_f_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            // Card 3: Benefits
            array( 'key' => 'field_ep_sp_card3_tab', 'label' => 'Card 3: Benefits', 'type' => 'tab' ),
            array( 'key' => 'field_ep_sp_card3_icon', 'label' => 'Icon Class', 'name' => 'sp_card3_icon', 'type' => 'text', 'default_value' => 'fas fa-trophy' ),
            array( 'key' => 'field_ep_sp_card3_badge', 'label' => 'Badge', 'name' => 'sp_card3_badge', 'type' => 'text', 'default_value' => 'YOUR BENEFITS' ),
            array( 'key' => 'field_ep_sp_card3_title', 'label' => 'Title', 'name' => 'sp_card3_title', 'type' => 'text', 'default_value' => 'What You Gain' ),
            array( 'key' => 'field_ep_sp_card3_subtitle', 'label' => 'Subtitle', 'name' => 'sp_card3_subtitle', 'type' => 'text', 'default_value' => 'The Easy Pharmacy advantage' ),
            array( 'key' => 'field_ep_sp_card3_value_title', 'label' => 'Value Title', 'name' => 'sp_card3_value_title', 'type' => 'text', 'default_value' => 'Better Value' ),
            array( 'key' => 'field_ep_sp_card3_value_subtitle', 'label' => 'Value Subtitle', 'name' => 'sp_card3_value_subtitle', 'type' => 'text', 'default_value' => 'Competitive pricing' ),
            array( 'key' => 'field_ep_sp_card3_cta_text', 'label' => 'CTA Button Text', 'name' => 'sp_card3_cta_text', 'type' => 'text', 'default_value' => 'Learn More' ),
            array(
                'key'           => 'field_ep_sp_card3_features',
                'label'         => 'Benefit Features',
                'name'          => 'sp_card3_features',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 8,
                'layout'        => 'table',
                'button_label'  => 'Add Feature',
                'sub_fields'    => array(
                    array( 'key' => 'field_ep_sp_card3_f_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-switch-provider.php',
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
    // F4. Switch Provider — Social Proof Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_sp_social',
        'title'    => 'Switch Provider — Social Proof',
        'fields'   => array(
            // Rating Badge fields
            array( 'key' => 'field_ep_sp_social_rating_score', 'label' => 'Rating Score', 'name' => 'sp_social_rating_score', 'type' => 'text', 'default_value' => '4.7', 'instructions' => 'Google rating number. Falls back to global Google Rating option.' ),
            array( 'key' => 'field_ep_sp_social_rating_count', 'label' => 'Rating Count Text', 'name' => 'sp_social_rating_count', 'type' => 'text', 'default_value' => 'Based on 300+ reviews' ),
            array( 'key' => 'field_ep_sp_social_rating_location', 'label' => 'Rating Location', 'name' => 'sp_social_rating_location', 'type' => 'text', 'default_value' => 'Ashford, UK' ),
            // Text content
            array( 'key' => 'field_ep_sp_social_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'sp_social_eyebrow', 'type' => 'text', 'default_value' => 'TRUSTED BY ASHFORD' ),
            array( 'key' => 'field_ep_sp_social_headline', 'label' => 'Headline', 'name' => 'sp_social_headline', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Join hundreds of Ashford patients who\'ve already made the switch' ),
            array( 'key' => 'field_ep_sp_social_subtext', 'label' => 'Subtext', 'name' => 'sp_social_subtext', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Trusted local pharmacy with expert weight loss, travel health, and microsuction services' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-switch-provider.php',
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
    // F5. Switch Provider — Evidence Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_sp_evidence',
        'title'    => 'Switch Provider — Evidence Section',
        'fields'   => array(
            array( 'key' => 'field_ep_sp_evidence_badge', 'label' => 'Badge Text', 'name' => 'sp_evidence_badge', 'type' => 'text', 'default_value' => 'PROVEN RESULTS' ),
            array( 'key' => 'field_ep_sp_evidence_title_line1', 'label' => 'Title Line 1 (gradient)', 'name' => 'sp_evidence_title_line1', 'type' => 'text', 'default_value' => 'Real data.' ),
            array( 'key' => 'field_ep_sp_evidence_title_line2', 'label' => 'Title Line 2 (dark)', 'name' => 'sp_evidence_title_line2', 'type' => 'text', 'default_value' => 'Real results.' ),
            array( 'key' => 'field_ep_sp_evidence_subtitle', 'label' => 'Subtitle', 'name' => 'sp_evidence_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Evidence-based care with measurable outcomes from hundreds of Ashford patients' ),
            array(
                'key'           => 'field_ep_sp_evidence_cards',
                'label'         => 'Evidence Cards',
                'name'          => 'sp_evidence_cards',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 9,
                'layout'        => 'block',
                'button_label'  => 'Add Evidence Card',
                'sub_fields'    => array(
                    array( 'key' => 'field_ep_sp_ev_number', 'label' => 'Stat Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'field_ep_sp_ev_label', 'label' => 'Stat Label', 'name' => 'label', 'type' => 'text' ),
                    array( 'key' => 'field_ep_sp_ev_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-switch-provider.php',
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
    // F6. Switch Provider — Process Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_sp_process',
        'title'    => 'Switch Provider — How To Switch',
        'fields'   => array(
            array( 'key' => 'field_ep_sp_process_badge', 'label' => 'Badge Text', 'name' => 'sp_process_badge', 'type' => 'text', 'default_value' => 'HOW TO SWITCH' ),
            array( 'key' => 'field_ep_sp_process_title_line1', 'label' => 'Title Line 1 (gradient)', 'name' => 'sp_process_title_line1', 'type' => 'text', 'default_value' => 'Make The Switch' ),
            array( 'key' => 'field_ep_sp_process_title_line2', 'label' => 'Title Line 2 (dark)', 'name' => 'sp_process_title_line2', 'type' => 'text', 'default_value' => ' in 2026' ),
            array( 'key' => 'field_ep_sp_process_description', 'label' => 'Description', 'name' => 'sp_process_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Start the new year with better support and better value. Switch to Easy Pharmacy in under 5 minutes.' ),
            array(
                'key'           => 'field_ep_sp_process_steps',
                'label'         => 'Process Steps',
                'name'          => 'sp_process_steps',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 6,
                'layout'        => 'block',
                'button_label'  => 'Add Step',
                'instructions'  => 'Each step shows as a numbered tab and a content card with image.',
                'sub_fields'    => array(
                    array( 'key' => 'field_ep_sp_ps_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-calendar-check' ),
                    array( 'key' => 'field_ep_sp_ps_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_sp_ps_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_ep_sp_ps_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'library' => 'all' ),
                    array( 'key' => 'field_ep_sp_ps_badge', 'label' => 'Floating Badge Text', 'name' => 'badge', 'type' => 'text', 'instructions' => 'Optional badge overlaying image, e.g. "No Hassle"' ),
                ),
            ),
            // What's Included box
            array( 'key' => 'field_ep_sp_included_tab', 'label' => 'What\'s Included Box', 'type' => 'tab' ),
            array( 'key' => 'field_ep_sp_included_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'sp_included_eyebrow', 'type' => 'text', 'default_value' => 'Access to your own member concierge' ),
            array( 'key' => 'field_ep_sp_included_title', 'label' => 'Title', 'name' => 'sp_included_title', 'type' => 'text', 'default_value' => 'What\'s Included' ),
            array(
                'key'           => 'field_ep_sp_included_items',
                'label'         => 'Included Items',
                'name'          => 'sp_included_items',
                'type'          => 'repeater',
                'min'           => 0,
                'max'           => 10,
                'layout'        => 'table',
                'button_label'  => 'Add Item',
                'sub_fields'    => array(
                    array( 'key' => 'field_ep_sp_ii_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_ep_sp_included_cta_text', 'label' => 'CTA Button Text', 'name' => 'sp_included_cta_text', 'type' => 'text', 'default_value' => 'Register Now' ),
            array( 'key' => 'field_ep_sp_included_cta_url', 'label' => 'CTA Button URL', 'name' => 'sp_included_cta_url', 'type' => 'text', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-switch-provider.php',
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

    // -------------------------------------------------------------------------
    // F7. Switch Provider — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_sp_cta',
        'title'    => 'Switch Provider — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_ep_sp_cta_title_line1', 'label' => 'Title Line 1', 'name' => 'sp_cta_title_line1', 'type' => 'text', 'default_value' => 'Ready to Make' ),
            array( 'key' => 'field_ep_sp_cta_title_line2', 'label' => 'Title Line 2', 'name' => 'sp_cta_title_line2', 'type' => 'text', 'default_value' => ' the Switch?' ),
            array( 'key' => 'field_ep_sp_cta_description', 'label' => 'Description', 'name' => 'sp_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Join hundreds of Ashford patients who\'ve chosen local, expert care over faceless online providers.' ),
            array( 'key' => 'field_ep_sp_cta_button_text', 'label' => 'CTA Button Text', 'name' => 'sp_cta_button_text', 'type' => 'text', 'default_value' => 'Start Your Switch Today' ),
            array( 'key' => 'field_ep_sp_cta_check_1', 'label' => 'Check 1', 'name' => 'sp_cta_check_1', 'type' => 'text', 'default_value' => 'No waiting list' ),
            array( 'key' => 'field_ep_sp_cta_check_2', 'label' => 'Check 2', 'name' => 'sp_cta_check_2', 'type' => 'text', 'default_value' => 'Same-day approval' ),
            array( 'key' => 'field_ep_sp_cta_check_3', 'label' => 'Check 3', 'name' => 'sp_cta_check_3', 'type' => 'text', 'default_value' => 'Transparent pricing' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-switch-provider.php',
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

    // -------------------------------------------------------------------------
    // F8. Switch Provider — Weight Loss Banner Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_sp_banner',
        'title'    => 'Switch Provider — Weight Loss Banner',
        'fields'   => array(
            array(
                'key'           => 'field_ep_sp_banner_image',
                'label'         => 'Banner Backdrop Image',
                'name'          => 'sp_banner_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'library'       => 'all',
                'instructions'  => 'Upload a full-width backdrop image. Recommended: 1920x800px landscape.',
            ),
            array( 'key' => 'field_ep_sp_banner_badge', 'label' => 'Badge Text', 'name' => 'sp_banner_badge', 'type' => 'text', 'default_value' => 'CLINICALLY SUPERVISED PROGRAMS' ),
            array( 'key' => 'field_ep_sp_banner_title', 'label' => 'Title', 'name' => 'sp_banner_title', 'type' => 'text', 'default_value' => 'Transform Your Life with Medical Weight Loss' ),
            array( 'key' => 'field_ep_sp_banner_subtitle', 'label' => 'Subtitle', 'name' => 'sp_banner_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Safe, effective weight loss programs with expert clinical support across Ashford, Chertsey, and Walton-on-Thames' ),
            array( 'key' => 'field_ep_sp_banner_cta_text', 'label' => 'Primary CTA Text', 'name' => 'sp_banner_cta_text', 'type' => 'text', 'default_value' => 'Start Your Journey' ),
            array( 'key' => 'field_ep_sp_banner_cta_url', 'label' => 'Primary CTA URL', 'name' => 'sp_banner_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to default to booking page.' ),
            array( 'key' => 'field_ep_sp_banner_secondary_text', 'label' => 'Secondary Link Text', 'name' => 'sp_banner_secondary_text', 'type' => 'text', 'default_value' => 'Serving Ashford, Chertsey & Walton' ),
            array( 'key' => 'field_ep_sp_banner_secondary_url', 'label' => 'Secondary Link URL', 'name' => 'sp_banner_secondary_url', 'type' => 'text', 'default_value' => '#location' ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/page-switch-provider.php',
                ),
            ),
        ),
        'menu_order'            => 35,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // G. WEIGHT LOSS PAGE FIELDS
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
    // G1. Weight Loss — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_hero',
        'title'    => 'Weight Loss — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_hero_badge', 'label' => 'Badge Text', 'name' => 'wl_hero_badge', 'type' => 'text', 'default_value' => 'MEDICAL WEIGHT LOSS' ),
            array( 'key' => 'field_ep_wl_hero_title_line_1', 'label' => 'Title Line 1 (gradient)', 'name' => 'wl_hero_title_line_1', 'type' => 'text', 'default_value' => 'Mounjaro & Wegovy' ),
            array( 'key' => 'field_ep_wl_hero_title_line_2', 'label' => 'Title Line 2 (accent)', 'name' => 'wl_hero_title_line_2', 'type' => 'text', 'default_value' => 'weight loss' ),
            array( 'key' => 'field_ep_wl_hero_title_line_3', 'label' => 'Title Line 3 (gradient)', 'name' => 'wl_hero_title_line_3', 'type' => 'text', 'default_value' => 'that works when diets have failed' ),
            array( 'key' => 'field_ep_wl_hero_description', 'label' => 'Description', 'name' => 'wl_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Prescription Mounjaro and Wegovy (GLP-1 treatments) with expert guidance and face-to-face support right here in Ashford. No remote consultations—real care from someone who knows your name.' ),
            array( 'key' => 'field_ep_wl_hero_cta_text', 'label' => 'Primary CTA Text', 'name' => 'wl_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_ep_wl_hero_cta_url', 'label' => 'Primary CTA URL', 'name' => 'wl_hero_cta_url', 'type' => 'text', 'default_value' => '#calculator', 'instructions' => 'URL or anchor like #calculator. Leave blank for booking page.' ),
            array( 'key' => 'field_ep_wl_hero_testimonial_quote', 'label' => 'Testimonial Quote', 'name' => 'wl_hero_testimonial_quote', 'type' => 'textarea', 'rows' => 2, 'default_value' => '"I travel 40 miles every month to see Dilip for my weight loss consultations—he\'s that good. Would never go anywhere else."' ),
            array( 'key' => 'field_ep_wl_hero_testimonial_name', 'label' => 'Testimonial Author', 'name' => 'wl_hero_testimonial_name', 'type' => 'text', 'default_value' => 'Ashford Patient' ),
            array( 'key' => 'field_ep_wl_hero_result_badge', 'label' => 'Result Badge Text', 'name' => 'wl_hero_result_badge', 'type' => 'text', 'default_value' => 'Real Results' ),
            array(
                'key'           => 'field_ep_wl_hero_image_1',
                'label'         => 'Hero Image 1 (top left)',
                'name'          => 'wl_hero_image_1',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 600x700px portrait.',
            ),
            array(
                'key'           => 'field_ep_wl_hero_image_2',
                'label'         => 'Hero Image 2 (top right)',
                'name'          => 'wl_hero_image_2',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 600x700px portrait.',
            ),
            array(
                'key'           => 'field_ep_wl_hero_image_3',
                'label'         => 'Hero Image 3 (bottom wide)',
                'name'          => 'wl_hero_image_3',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 800x600px landscape.',
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G2. Weight Loss — Social Proof Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_social',
        'title'    => 'Weight Loss — Social Proof Section',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_social_number', 'label' => 'Stat Number', 'name' => 'wl_social_number', 'type' => 'text', 'default_value' => '4.7' ),
            array( 'key' => 'field_ep_wl_social_label', 'label' => 'Stat Label', 'name' => 'wl_social_label', 'type' => 'text', 'default_value' => 'Google Rating' ),
            array( 'key' => 'field_ep_wl_social_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'wl_social_eyebrow', 'type' => 'text', 'default_value' => 'TRUSTED BY ASHFORD' ),
            array( 'key' => 'field_ep_wl_social_headline', 'label' => 'Headline', 'name' => 'wl_social_headline', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Join hundreds of Ashford patients who\'ve already made the switch' ),
            array( 'key' => 'field_ep_wl_social_subtext', 'label' => 'Subtext', 'name' => 'wl_social_subtext', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Real people, real results. Our patients lose an average of 10-15% body weight in 12 months with Mounjaro and Wegovy treatment.' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 41,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G3. Weight Loss — Results Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_results',
        'title'    => 'Weight Loss — Results Section',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_results_badge', 'label' => 'Badge Text', 'name' => 'wl_results_badge', 'type' => 'text', 'default_value' => 'MEDICAL WEIGHT LOSS' ),
            array( 'key' => 'field_ep_wl_results_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'wl_results_title_highlight', 'type' => 'text', 'default_value' => 'Mounjaro & Wegovy' ),
            array( 'key' => 'field_ep_wl_results_title', 'label' => 'Title (after highlight)', 'name' => 'wl_results_title', 'type' => 'text', 'default_value' => 'results in Ashford' ),
            array( 'key' => 'field_ep_wl_results_description', 'label' => 'Description', 'name' => 'wl_results_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Ashford patients using Mounjaro or Wegovy lose an average of 10-15% of their body weight in 12 months with our personalised programmes.' ),
            array( 'key' => 'field_ep_wl_results_card1_number', 'label' => 'Card 1 — Number', 'name' => 'wl_results_card1_number', 'type' => 'text', 'default_value' => '4.7/5' ),
            array( 'key' => 'field_ep_wl_results_card1_label', 'label' => 'Card 1 — Label', 'name' => 'wl_results_card1_label', 'type' => 'text', 'default_value' => 'Patient satisfaction' ),
            array( 'key' => 'field_ep_wl_results_card1_sublabel', 'label' => 'Card 1 — Sublabel', 'name' => 'wl_results_card1_sublabel', 'type' => 'text', 'default_value' => 'Based on verified reviews' ),
            array( 'key' => 'field_ep_wl_results_featured_badge', 'label' => 'Featured Card — Badge', 'name' => 'wl_results_featured_badge', 'type' => 'text', 'default_value' => 'Most Important' ),
            array( 'key' => 'field_ep_wl_results_featured_number', 'label' => 'Featured Card — Number', 'name' => 'wl_results_featured_number', 'type' => 'text', 'default_value' => '10-15%' ),
            array( 'key' => 'field_ep_wl_results_featured_label', 'label' => 'Featured Card — Label', 'name' => 'wl_results_featured_label', 'type' => 'text', 'default_value' => 'Average weight loss' ),
            array( 'key' => 'field_ep_wl_results_featured_sublabel', 'label' => 'Featured Card — Sublabel', 'name' => 'wl_results_featured_sublabel', 'type' => 'text', 'default_value' => 'In 12 months' ),
            array( 'key' => 'field_ep_wl_results_card3_number', 'label' => 'Card 3 — Number', 'name' => 'wl_results_card3_number', 'type' => 'text', 'default_value' => '500+' ),
            array( 'key' => 'field_ep_wl_results_card3_label', 'label' => 'Card 3 — Label', 'name' => 'wl_results_card3_label', 'type' => 'text', 'default_value' => 'Patients Helped' ),
            array( 'key' => 'field_ep_wl_results_card3_sublabel', 'label' => 'Card 3 — Sublabel', 'name' => 'wl_results_card3_sublabel', 'type' => 'text', 'default_value' => 'Ashford & surrounding areas' ),
            array( 'key' => 'field_ep_wl_results_disclaimer', 'label' => 'Disclaimer', 'name' => 'wl_results_disclaimer', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Results vary by individual. Weight loss depends on adherence to treatment, lifestyle changes, and individual metabolism.' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 42,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G4. Weight Loss — CTA Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_cta_bar',
        'title'    => 'Weight Loss — CTA Bar',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_cta_bar_title', 'label' => 'Title', 'name' => 'wl_cta_bar_title', 'type' => 'text', 'default_value' => 'Ready to transform your health?' ),
            array( 'key' => 'field_ep_wl_cta_bar_subtitle', 'label' => 'Subtitle', 'name' => 'wl_cta_bar_subtitle', 'type' => 'text', 'default_value' => 'Book your consultation with Dilip today' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 43,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G5. Weight Loss — Features Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_features',
        'title'    => 'Weight Loss — Features Section',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_features_badge', 'label' => 'Badge Text', 'name' => 'wl_features_badge', 'type' => 'text', 'default_value' => 'Why Choose Us' ),
            array( 'key' => 'field_ep_wl_features_description', 'label' => 'Description', 'name' => 'wl_features_description', 'type' => 'text', 'default_value' => 'Real face-to-face support. Expert guidance. Proven results.' ),
            array(
                'key'           => 'field_ep_wl_features_image',
                'label'         => 'Image',
                'name'          => 'wl_features_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 600x700px portrait.',
            ),
            array( 'key' => 'field_ep_wl_features_image_alt', 'label' => 'Image Alt Text', 'name' => 'wl_features_image_alt', 'type' => 'text', 'default_value' => 'Weight loss success patient' ),
            array( 'key' => 'field_ep_wl_features_rating_text', 'label' => 'Rating Badge Text', 'name' => 'wl_features_rating_text', 'type' => 'text', 'default_value' => '4.7/5' ),
            array( 'key' => 'field_ep_wl_features_reviews_text', 'label' => 'Reviews Badge Text', 'name' => 'wl_features_reviews_text', 'type' => 'text', 'default_value' => '300+ Google Reviews' ),
            array(
                'key'        => 'field_ep_wl_features',
                'label'      => 'Feature Cards',
                'name'       => 'wl_features',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'button_label' => 'Add Feature',
                'sub_fields' => array(
                    array( 'key' => 'field_ep_wl_features_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-check', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_wl_features_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '70' ) ),
                    array( 'key' => 'field_ep_wl_features_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 44,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G6. Weight Loss — Banner (RevSlider fallback, inline)
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_banner',
        'title'    => 'Weight Loss — Banner Section',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_revslider_shortcode', 'label' => 'Revolution Slider Shortcode', 'name' => 'wl_revslider_shortcode', 'type' => 'text', 'instructions' => 'e.g. [rev_slider alias="weight-loss-hero"]. Leave blank for static fallback.' ),
            array(
                'key'           => 'field_ep_wl_banner_image',
                'label'         => 'Banner Backdrop Image',
                'name'          => 'wl_banner_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Recommended: 1920x800px landscape.',
            ),
            array( 'key' => 'field_ep_wl_banner_badge', 'label' => 'Badge Text', 'name' => 'wl_banner_badge', 'type' => 'text', 'default_value' => 'Medical Weight Loss' ),
            array( 'key' => 'field_ep_wl_banner_title', 'label' => 'Title', 'name' => 'wl_banner_title', 'type' => 'text', 'default_value' => 'Transform Your Health with Mounjaro & Wegovy' ),
            array( 'key' => 'field_ep_wl_banner_subtitle', 'label' => 'Subtitle', 'name' => 'wl_banner_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Prescription weight loss treatment with expert face-to-face support in Ashford' ),
            array( 'key' => 'field_ep_wl_banner_cta_text', 'label' => 'CTA Text', 'name' => 'wl_banner_cta_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_ep_wl_banner_cta_url', 'label' => 'CTA URL', 'name' => 'wl_banner_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page.' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 45,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G7. Weight Loss — Journey Steps
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_journey',
        'title'    => 'Weight Loss — Journey Steps',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_journey_badge', 'label' => 'Badge Text', 'name' => 'wl_journey_badge', 'type' => 'text', 'default_value' => 'HOW WE SUPPORT YOU' ),
            array( 'key' => 'field_ep_wl_journey_title_highlight', 'label' => 'Title Highlight (gradient)', 'name' => 'wl_journey_title_highlight', 'type' => 'text', 'default_value' => 'lasting weight loss' ),
            array( 'key' => 'field_ep_wl_journey_description', 'label' => 'Description', 'name' => 'wl_journey_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'A structured, evidence-based approach with regular face-to-face support every step of the way.' ),
            array(
                'key'        => 'field_ep_wl_journey_steps',
                'label'      => 'Journey Steps',
                'name'       => 'wl_journey_steps',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'button_label' => 'Add Step',
                'sub_fields' => array(
                    array( 'key' => 'field_ep_wl_journey_step_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'e.g. fas fa-calendar-check', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_wl_journey_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '70' ) ),
                    array( 'key' => 'field_ep_wl_journey_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'field_ep_wl_journey_step_meta_icon', 'label' => 'Meta Icon', 'name' => 'meta_icon', 'type' => 'text', 'default_value' => 'fas fa-clock', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_wl_journey_step_meta_text', 'label' => 'Meta Text', 'name' => 'meta_text', 'type' => 'text', 'wrapper' => array( 'width' => '70' ) ),
                    array(
                        'key'           => 'field_ep_wl_journey_step_image',
                        'label'         => 'Step Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                        'instructions'  => 'Recommended: 600x500px.',
                    ),
                    array( 'key' => 'field_ep_wl_journey_step_floating_badge', 'label' => 'Floating Badge Text', 'name' => 'floating_badge', 'type' => 'text', 'instructions' => 'Optional. e.g. "Same Day"' ),
                    array( 'key' => 'field_ep_wl_journey_step_floating_badge_icon', 'label' => 'Floating Badge Icon', 'name' => 'floating_badge_icon', 'type' => 'text', 'instructions' => 'e.g. fas fa-bolt', 'default_value' => 'fas fa-bolt' ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 46,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G9. Weight Loss — FAQ Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_faq',
        'title'    => 'Weight Loss — FAQ Section',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_faq_badge', 'label' => 'Badge Text', 'name' => 'wl_faq_badge', 'type' => 'text', 'default_value' => 'FREQUENTLY ASKED QUESTIONS' ),
            array( 'key' => 'field_ep_wl_faq_title', 'label' => 'Title', 'name' => 'wl_faq_title', 'type' => 'text', 'default_value' => 'Your questions answered' ),
            array( 'key' => 'field_ep_wl_faq_description', 'label' => 'Description', 'name' => 'wl_faq_description', 'type' => 'text', 'default_value' => 'Get answers to the most common weight loss questions' ),
            array(
                'key'        => 'field_ep_wl_faqs',
                'label'      => 'FAQ Items',
                'name'       => 'wl_faqs',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 12,
                'button_label' => 'Add FAQ',
                'sub_fields' => array(
                    array( 'key' => 'field_ep_wl_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_ep_wl_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 4 ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 48,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G10. Weight Loss — Testimonials Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_testimonials',
        'title'    => 'Weight Loss — Testimonials Section',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_testimonials_badge', 'label' => 'Badge Text', 'name' => 'wl_testimonials_badge', 'type' => 'text', 'default_value' => 'SUCCESS STORIES' ),
            array( 'key' => 'field_ep_wl_testimonials_title', 'label' => 'Title', 'name' => 'wl_testimonials_title', 'type' => 'text', 'default_value' => 'Real Ashford success stories' ),
            array( 'key' => 'field_ep_wl_testimonials_description', 'label' => 'Description', 'name' => 'wl_testimonials_description', 'type' => 'text', 'default_value' => 'See how our patients have transformed their lives with medical weight loss' ),
            array(
                'key'        => 'field_ep_wl_testimonials',
                'label'      => 'Testimonials',
                'name'       => 'wl_testimonials',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'button_label' => 'Add Testimonial',
                'sub_fields' => array(
                    array( 'key' => 'field_ep_wl_testimonial_weight', 'label' => 'Weight Lost (short)', 'name' => 'weight_lost_short', 'type' => 'text', 'instructions' => 'e.g. 6st', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_wl_testimonial_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'instructions' => 'e.g. 6 Stone Lost', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'field_ep_wl_testimonial_author', 'label' => 'Author', 'name' => 'author', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'field_ep_wl_testimonial_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 49,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // G11. Weight Loss — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_wl_final_cta',
        'title'    => 'Weight Loss — Final CTA Section',
        'fields'   => array(
            array( 'key' => 'field_ep_wl_final_cta_title', 'label' => 'Title', 'name' => 'wl_final_cta_title', 'type' => 'text', 'default_value' => 'Ready to start your weight loss journey?' ),
            array( 'key' => 'field_ep_wl_final_cta_description', 'label' => 'Description', 'name' => 'wl_final_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Join 500+ Ashford residents who\'ve transformed their lives with medical weight loss. Book your consultation with Dilip today.' ),
        ),
        'location'              => $wl_location,
        'menu_order'            => 50,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );
    // =========================================================================
    // H. TRAVEL HEALTH PAGE FIELDS
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
    // H1. Travel Health — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_hero',
        'title'    => 'Travel Health — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_ep_th_hero_badge', 'label' => 'Badge Text', 'name' => 'th_hero_badge', 'type' => 'text', 'default_value' => 'TRAVEL HEALTH SERVICES' ),
            array( 'key' => 'field_ep_th_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'th_hero_title_line1', 'type' => 'text', 'default_value' => "Ashford's Leading" ),
            array( 'key' => 'field_ep_th_hero_title_highlight', 'label' => 'Title Highlight', 'name' => 'th_hero_title_highlight', 'type' => 'text', 'default_value' => 'Travel Clinic' ),
            array( 'key' => 'field_ep_th_hero_description', 'label' => 'Description', 'name' => 'th_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Expert travel jabs Ashford and health advice for your next adventure. Book your appointment at our Ashford travel clinic with Dilip.' ),
            array( 'key' => 'field_ep_th_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'th_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Appointment' ),
            array( 'key' => 'field_ep_th_hero_cta_url', 'label' => 'CTA Button URL', 'name' => 'th_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_ep_th_trust_1', 'label' => 'Trust Badge 1', 'name' => 'th_trust_1', 'type' => 'text', 'default_value' => 'Yellow Fever Centre' ),
            array( 'key' => 'field_ep_th_trust_2', 'label' => 'Trust Badge 2', 'name' => 'th_trust_2', 'type' => 'text', 'default_value' => 'All Travel Vaccinations' ),
            array( 'key' => 'field_ep_th_trust_3', 'label' => 'Trust Badge 3', 'name' => 'th_trust_3', 'type' => 'text', 'default_value' => 'Expert Travel Advice' ),
        ),
        'location'              => $th_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H2. Travel Health — Stats Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_stats',
        'title'    => 'Travel Health — Stats Bar',
        'fields'   => array(
            array(
                'key'          => 'field_ep_th_stats',
                'label'        => 'Stats',
                'name'         => 'th_stats',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_th_stat_image', 'label' => 'Image', 'name' => 'image', 'type' => 'url', 'instructions' => 'URL of stat image/icon.', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_th_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-shield-virus. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-shield-virus', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_th_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_th_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H3. Travel Health — Why Choose Us
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_why',
        'title'    => 'Travel Health — Why Choose Us',
        'fields'   => array(
            array( 'key' => 'field_ep_th_why_badge', 'label' => 'Badge Text', 'name' => 'th_why_badge', 'type' => 'text', 'default_value' => 'WHY CHOOSE US' ),
            array( 'key' => 'field_ep_th_why_title_highlight', 'label' => 'Title Highlight', 'name' => 'th_why_title_highlight', 'type' => 'text', 'default_value' => 'Why choose our' ),
            array( 'key' => 'field_ep_th_why_title_rest', 'label' => 'Title Rest', 'name' => 'th_why_title_rest', 'type' => 'text', 'default_value' => 'Ashford travel clinic?' ),
            array( 'key' => 'field_ep_th_why_description', 'label' => 'Description', 'name' => 'th_why_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Expert care, flexible appointments, and comprehensive travel health services all under one roof.' ),
            array(
                'key'          => 'field_ep_th_why_cards',
                'label'        => 'Why Cards',
                'name'         => 'th_why_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Card',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_th_why_card_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_th_why_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_th_why_card_subtitle', 'label' => 'Subtitle', 'name' => 'subtitle', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_th_why_card_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url', 'wrapper' => array( 'width' => '20' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H4. Travel Health — Banner / RevSlider Fallback
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_banner',
        'title'    => 'Travel Health — Banner Section',
        'fields'   => array(
            array( 'key' => 'field_ep_th_banner_image', 'label' => 'Banner Image', 'name' => 'th_banner_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'instructions' => 'Background image for the banner.' ),
            array( 'key' => 'field_ep_th_banner_badge', 'label' => 'Badge Text', 'name' => 'th_banner_badge', 'type' => 'text', 'default_value' => 'Yellow Fever Approved' ),
            array( 'key' => 'field_ep_th_banner_title', 'label' => 'Title', 'name' => 'th_banner_title', 'type' => 'text', 'default_value' => 'Protect Your Adventures Across the Globe' ),
            array( 'key' => 'field_ep_th_banner_subtitle', 'label' => 'Subtitle', 'name' => 'th_banner_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'From yellow fever to malaria prevention, get expert travel vaccinations at Easy Pharmacy' ),
            array( 'key' => 'field_ep_th_banner_cta_text', 'label' => 'CTA Text', 'name' => 'th_banner_cta_text', 'type' => 'text', 'default_value' => 'Book Travel Clinic' ),
            array( 'key' => 'field_ep_th_banner_secondary_text', 'label' => 'Secondary Text', 'name' => 'th_banner_secondary_text', 'type' => 'text', 'default_value' => 'Serving Ashford, Chertsey and beyond' ),
        ),
        'location'              => $th_location,
        'menu_order'            => 15,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H5. Travel Health — Popular Destinations
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_destinations',
        'title'    => 'Travel Health — Popular Destinations',
        'fields'   => array(
            array( 'key' => 'field_ep_th_destinations_badge', 'label' => 'Badge Text', 'name' => 'th_destinations_badge', 'type' => 'text', 'default_value' => 'POPULAR DESTINATIONS' ),
            array( 'key' => 'field_ep_th_destinations_title_highlight', 'label' => 'Title Highlight', 'name' => 'th_destinations_title_highlight', 'type' => 'text', 'default_value' => 'Travelling to' ),
            array( 'key' => 'field_ep_th_destinations_title_rest', 'label' => 'Title Rest', 'name' => 'th_destinations_title_rest', 'type' => 'text', 'default_value' => 'these destinations?' ),
            array(
                'key'          => 'field_ep_th_destinations',
                'label'        => 'Destinations',
                'name'         => 'th_destinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 12,
                'button_label' => 'Add Destination',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_th_dest_name', 'label' => 'Country Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_th_dest_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'field_ep_th_dest_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url', 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H6. Travel Health — Services
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_services',
        'title'    => 'Travel Health — Services',
        'fields'   => array(
            array( 'key' => 'field_ep_th_services_badge', 'label' => 'Badge Text', 'name' => 'th_services_badge', 'type' => 'text', 'default_value' => 'COMPREHENSIVE TRAVEL HEALTH' ),
            array( 'key' => 'field_ep_th_services_title_highlight', 'label' => 'Title Highlight', 'name' => 'th_services_title_highlight', 'type' => 'text', 'default_value' => 'Everything you need' ),
            array( 'key' => 'field_ep_th_services_title_rest', 'label' => 'Title Rest', 'name' => 'th_services_title_rest', 'type' => 'text', 'default_value' => 'for safe travel' ),
            array( 'key' => 'field_ep_th_services_description', 'label' => 'Description', 'name' => 'th_services_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'From expert consultations to all vaccinations and official certificates' ),
            array(
                'key'          => 'field_ep_th_services',
                'label'        => 'Services',
                'name'         => 'th_services',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 8,
                'button_label' => 'Add Service',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_th_svc_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_th_svc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_th_svc_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_th_svc_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 25,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H7. Travel Health — Vaccinations Grid
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_vaccinations',
        'title'    => 'Travel Health — Vaccinations Grid',
        'fields'   => array(
            array( 'key' => 'field_ep_th_vaccines_badge', 'label' => 'Badge Text', 'name' => 'th_vaccines_badge', 'type' => 'text', 'default_value' => 'ALL VACCINATIONS' ),
            array( 'key' => 'field_ep_th_vaccines_title_highlight', 'label' => 'Title Highlight', 'name' => 'th_vaccines_title_highlight', 'type' => 'text', 'default_value' => 'Available' ),
            array( 'key' => 'field_ep_th_vaccines_title_rest', 'label' => 'Title Rest', 'name' => 'th_vaccines_title_rest', 'type' => 'text', 'default_value' => 'Vaccinations' ),
            array(
                'key'          => 'field_ep_th_vaccinations',
                'label'        => 'Vaccinations',
                'name'         => 'th_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 20,
                'button_label' => 'Add Vaccination',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_th_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_th_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_th_vax_featured', 'label' => 'Featured?', 'name' => 'is_featured', 'type' => 'true_false', 'default_value' => 0, 'ui' => 1, 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_th_vax_badge', 'label' => 'Badge Text', 'name' => 'badge', 'type' => 'text', 'instructions' => 'Optional badge e.g. "Official Centre".', 'wrapper' => array( 'width' => '25' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H8. Travel Health — Process / How It Works
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_process',
        'title'    => 'Travel Health — How It Works',
        'fields'   => array(
            array( 'key' => 'field_ep_th_process_badge', 'label' => 'Badge Text', 'name' => 'th_process_badge', 'type' => 'text', 'default_value' => 'HOW IT WORKS' ),
            array( 'key' => 'field_ep_th_process_title_highlight', 'label' => 'Title Highlight', 'name' => 'th_process_title_highlight', 'type' => 'text', 'default_value' => 'Your travel clinic' ),
            array( 'key' => 'field_ep_th_process_title_rest', 'label' => 'Title Rest', 'name' => 'th_process_title_rest', 'type' => 'text', 'default_value' => 'Ashford journey' ),
            array(
                'key'          => 'field_ep_th_process_steps',
                'label'        => 'Process Steps',
                'name'         => 'th_process_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 6,
                'button_label' => 'Add Step',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_th_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_th_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array( 'width' => '70' ) ),
                    array( 'key' => 'field_ep_th_step_image', 'label' => 'Step Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_th_step_icon_image', 'label' => 'Icon Image', 'name' => 'icon_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'thumbnail', 'instructions' => 'Upload a custom icon image (e.g. passport). Falls back to icon class.', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_th_step_icon', 'label' => 'Icon Class (fallback)', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class if no icon image. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-passport', 'placeholder' => 'fas fa-passport', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_th_step_meta_icon', 'label' => 'Meta Icon', 'name' => 'meta_icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-clock', 'placeholder' => 'fas fa-clock', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_th_step_meta_text', 'label' => 'Meta Text', 'name' => 'meta_text', 'type' => 'text', 'wrapper' => array( 'width' => '15' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 35,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H10. Travel Health — FAQ Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_faq',
        'title'    => 'Travel Health — FAQ Section',
        'fields'   => array(
            array( 'key' => 'field_ep_th_faq_badge', 'label' => 'Badge Text', 'name' => 'th_faq_badge', 'type' => 'text', 'default_value' => 'FREQUENTLY ASKED QUESTIONS' ),
            array( 'key' => 'field_ep_th_faq_title_highlight', 'label' => 'Title Highlight', 'name' => 'th_faq_title_highlight', 'type' => 'text', 'default_value' => 'Travel health' ),
            array( 'key' => 'field_ep_th_faq_title_rest', 'label' => 'Title Rest', 'name' => 'th_faq_title_rest', 'type' => 'text', 'default_value' => 'questions answered' ),
            array(
                'key'          => 'field_ep_th_faqs',
                'label'        => 'FAQs',
                'name'         => 'th_faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 12,
                'button_label' => 'Add FAQ',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_th_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                    array( 'key' => 'field_ep_th_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array( 'width' => '60' ) ),
                ),
            ),
        ),
        'location'              => $th_location,
        'menu_order'            => 45,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // H11. Travel Health — Final CTA Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_th_cta',
        'title'    => 'Travel Health — Final CTA Section',
        'fields'   => array(
            array( 'key' => 'field_ep_th_cta_badge_1', 'label' => 'Badge 1', 'name' => 'th_cta_badge_1', 'type' => 'text', 'default_value' => 'Yellow Fever Centre' ),
            array( 'key' => 'field_ep_th_cta_badge_2', 'label' => 'Badge 2', 'name' => 'th_cta_badge_2', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_ep_th_cta_badge_3', 'label' => 'Badge 3', 'name' => 'th_cta_badge_3', 'type' => 'text', 'default_value' => 'Same Day Service' ),
            array( 'key' => 'field_ep_th_cta_title', 'label' => 'Title', 'name' => 'th_cta_title', 'type' => 'text', 'default_value' => 'Ready to protect your travels?' ),
            array( 'key' => 'field_ep_th_cta_description', 'label' => 'Description', 'name' => 'th_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => "Don't let health worries spoil your adventure. Book your comprehensive travel health consultation with Easy Pharmacy Ashford today." ),
            array( 'key' => 'field_ep_th_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'th_cta_primary_text', 'type' => 'text', 'default_value' => 'Book Travel Health Appointment' ),
            array( 'key' => 'field_ep_th_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'th_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_ep_th_cta_check_1', 'label' => 'Check 1', 'name' => 'th_cta_check_1', 'type' => 'text', 'default_value' => 'Flexible appointments' ),
            array( 'key' => 'field_ep_th_cta_check_2', 'label' => 'Check 2', 'name' => 'th_cta_check_2', 'type' => 'text', 'default_value' => 'Expert advice' ),
            array( 'key' => 'field_ep_th_cta_check_3', 'label' => 'Check 3', 'name' => 'th_cta_check_3', 'type' => 'text', 'default_value' => 'Official certificates' ),
        ),
        'location'              => $th_location,
        'menu_order'            => 50,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // I. THAILAND TRAVEL PAGE FIELDS
    // =========================================================================
    $td_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-travel-thailand.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // I1. Thailand — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_td_hero',
        'title'    => 'Thailand — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_ep_td_hero_badge', 'label' => 'Badge Text', 'name' => 'td_hero_badge', 'type' => 'text', 'default_value' => 'THAILAND TRAVEL HEALTH' ),
            array( 'key' => 'field_ep_td_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'td_hero_title_line1', 'type' => 'text', 'default_value' => 'Travel Vaccinations for' ),
            array( 'key' => 'field_ep_td_hero_title_highlight', 'label' => 'Title Highlight (Country)', 'name' => 'td_hero_title_highlight', 'type' => 'text', 'default_value' => 'Thailand' ),
            array( 'key' => 'field_ep_td_hero_description', 'label' => 'Description', 'name' => 'td_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Expert advice and vaccinations for your Thailand adventure. Get protected before you travel with Ashford's trusted travel health specialists." ),
            array( 'key' => 'field_ep_td_hero_cta_text', 'label' => 'CTA Text', 'name' => 'td_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Thailand Consultation' ),
            array( 'key' => 'field_ep_td_hero_cta_url', 'label' => 'CTA URL', 'name' => 'td_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'              => $td_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I2. Thailand — Quick Info Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_td_stats',
        'title'    => 'Thailand — Quick Info Bar',
        'fields'   => array(
            array(
                'key'          => 'field_ep_td_stats',
                'label'        => 'Stats',
                'name'         => 'td_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_td_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_td_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_td_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                ),
            ),
        ),
        'location'              => $td_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I3. Thailand — Recommended Vaccinations
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_td_vaccines',
        'title'    => 'Thailand — Recommended Vaccinations',
        'fields'   => array(
            array( 'key' => 'field_ep_td_vaccines_title', 'label' => 'Title', 'name' => 'td_vaccines_title', 'type' => 'text', 'default_value' => 'Protect yourself in Thailand' ),
            array( 'key' => 'field_ep_td_vaccines_desc', 'label' => 'Description', 'name' => 'td_vaccines_description', 'type' => 'text', 'default_value' => 'These vaccinations are recommended for most travellers to Thailand' ),
            array(
                'key'          => 'field_ep_td_vaccinations',
                'label'        => 'Vaccinations',
                'name'         => 'td_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add Vaccination',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_td_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_td_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_td_vax_badge_color', 'label' => 'Badge Colour', 'name' => 'badge_color', 'type' => 'select', 'choices' => array( 'purple' => 'Purple (Essential/Recommended)', 'gray' => 'Grey (Consider/Rural)' ), 'default_value' => 'purple', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_td_vax_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'default_value' => 'Recommended', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_td_vax_short', 'label' => 'Short Description', 'name' => 'short_desc', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_ep_td_vax_desc', 'label' => 'Full Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $td_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I4. Thailand — Malaria Information
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_td_malaria',
        'title'    => 'Thailand — Malaria Information',
        'fields'   => array(
            array( 'key' => 'field_ep_td_malaria_image', 'label' => 'Image', 'name' => 'td_malaria_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_td_malaria_badge_text', 'label' => 'Image Badge Text', 'name' => 'td_malaria_badge_text', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_ep_td_malaria_badge', 'label' => 'Section Badge', 'name' => 'td_malaria_badge', 'type' => 'text', 'default_value' => 'MOSQUITO-BORNE DISEASES' ),
            array( 'key' => 'field_ep_td_malaria_title', 'label' => 'Title', 'name' => 'td_malaria_title', 'type' => 'text', 'default_value' => 'Malaria & Dengue Risks in Thailand' ),
            array( 'key' => 'field_ep_td_malaria_intro', 'label' => 'Intro Text', 'name' => 'td_malaria_intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'While malaria risk is low in most tourist areas, Dengue fever is common nationwide. Our pharmacists will check your specific itinerary and advise on prevention.' ),
            array(
                'key'          => 'field_ep_td_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'td_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Risk Item',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_td_risk_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-check-circle', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_td_risk_level', 'label' => 'Risk Level', 'name' => 'risk_level', 'type' => 'select', 'choices' => array( 'low-risk' => 'Low Risk (Green)', 'high-risk' => 'High Risk (Red)' ), 'default_value' => 'low-risk', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_td_risk_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_td_risk_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'              => $td_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I5. Thailand — Health Advice
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_td_health',
        'title'    => 'Thailand — Health Advice',
        'fields'   => array(
            array( 'key' => 'field_ep_td_health_badge', 'label' => 'Badge Text', 'name' => 'td_health_badge', 'type' => 'text', 'default_value' => 'HEALTH ADVICE' ),
            array( 'key' => 'field_ep_td_health_title', 'label' => 'Title', 'name' => 'td_health_title', 'type' => 'text', 'default_value' => 'Stay healthy in Thailand' ),
            array( 'key' => 'field_ep_td_health_subtitle', 'label' => 'Subtitle', 'name' => 'td_health_subtitle', 'type' => 'text', 'default_value' => 'Essential tips for a safe tropical adventure' ),
            array(
                'key'          => 'field_ep_td_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'td_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Tip',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_td_tip_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-glass-water', 'placeholder' => 'fas fa-glass-water', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_td_tip_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_td_tip_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_td_tip_image', 'label' => 'Background Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'              => $td_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // I6. Thailand — Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_td_cta',
        'title'    => 'Thailand — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_ep_td_cta_title', 'label' => 'Title', 'name' => 'td_cta_title', 'type' => 'text', 'default_value' => 'Ready for your Thailand adventure?' ),
            array( 'key' => 'field_ep_td_cta_description', 'label' => 'Description', 'name' => 'td_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your Thailand travel health consultation at our Ashford clinic. Get expert advice and all recommended vaccinations in one visit.' ),
            array( 'key' => 'field_ep_td_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'td_cta_primary_text', 'type' => 'text', 'default_value' => 'Book Thailand Consultation' ),
            array( 'key' => 'field_ep_td_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'td_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_ep_td_cta_check_1', 'label' => 'Check 1', 'name' => 'td_cta_check_1', 'type' => 'text', 'default_value' => 'Travel Ready' ),
            array( 'key' => 'field_ep_td_cta_check_2', 'label' => 'Check 2', 'name' => 'td_cta_check_2', 'type' => 'text', 'default_value' => 'Expert Thailand Advice' ),
            array( 'key' => 'field_ep_td_cta_check_3', 'label' => 'Check 3', 'name' => 'td_cta_check_3', 'type' => 'text', 'default_value' => 'All Vaccines Available' ),
        ),
        'location'              => $td_location,
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );
    // =========================================================================
    // J. KENYA TRAVEL PAGE FIELDS
    // =========================================================================
    $ke_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-travel-kenya.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // J1. Kenya — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ke_hero',
        'title'    => 'Kenya — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_ep_ke_hero_badge', 'label' => 'Badge Text', 'name' => 'ke_hero_badge', 'type' => 'text', 'default_value' => 'KENYA TRAVEL HEALTH' ),
            array( 'key' => 'field_ep_ke_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'ke_hero_title_line1', 'type' => 'text', 'default_value' => 'Travel Vaccinations for' ),
            array( 'key' => 'field_ep_ke_hero_title_highlight', 'label' => 'Title Highlight (Country)', 'name' => 'ke_hero_title_highlight', 'type' => 'text', 'default_value' => 'Kenya' ),
            array( 'key' => 'field_ep_ke_hero_description', 'label' => 'Description', 'name' => 'ke_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Expert advice and vaccinations for your Kenya safari or holiday. Yellow Fever, Malaria, and more. Get protected with Ashford's specialists." ),
            array( 'key' => 'field_ep_ke_hero_cta_text', 'label' => 'CTA Text', 'name' => 'ke_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Kenya Consultation' ),
            array( 'key' => 'field_ep_ke_hero_cta_url', 'label' => 'CTA URL', 'name' => 'ke_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'              => $ke_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J2. Kenya — Quick Info Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ke_stats',
        'title'    => 'Kenya — Quick Info Bar',
        'fields'   => array(
            array(
                'key'          => 'field_ep_ke_stats',
                'label'        => 'Stats',
                'name'         => 'ke_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_ke_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_ke_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_ke_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                ),
            ),
        ),
        'location'              => $ke_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J3. Kenya — Recommended Vaccinations
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ke_vaccines',
        'title'    => 'Kenya — Recommended Vaccinations',
        'fields'   => array(
            array( 'key' => 'field_ep_ke_vaccines_title', 'label' => 'Title', 'name' => 'ke_vaccines_title', 'type' => 'text', 'default_value' => 'Protect yourself in Kenya' ),
            array( 'key' => 'field_ep_ke_vaccines_desc', 'label' => 'Description', 'name' => 'ke_vaccines_description', 'type' => 'text', 'default_value' => 'These vaccinations are recommended for most travellers to Kenya' ),
            array(
                'key'          => 'field_ep_ke_vaccinations',
                'label'        => 'Vaccinations',
                'name'         => 'ke_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add Vaccination',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_ke_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_ke_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_ke_vax_badge_color', 'label' => 'Badge Colour', 'name' => 'badge_color', 'type' => 'select', 'choices' => array( 'purple' => 'Purple (Essential/Recommended)', 'gray' => 'Grey (Consider/Rural)' ), 'default_value' => 'purple', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_ke_vax_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'default_value' => 'Essential', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_ke_vax_short', 'label' => 'Short Description', 'name' => 'short_desc', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_ep_ke_vax_desc', 'label' => 'Full Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $ke_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J4. Kenya — Malaria Information
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ke_malaria',
        'title'    => 'Kenya — Malaria Information',
        'fields'   => array(
            array( 'key' => 'field_ep_ke_malaria_image', 'label' => 'Image', 'name' => 'ke_malaria_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_ke_malaria_badge_text', 'label' => 'Image Badge Text', 'name' => 'ke_malaria_badge_text', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_ep_ke_malaria_badge', 'label' => 'Section Badge', 'name' => 'ke_malaria_badge', 'type' => 'text', 'default_value' => 'HIGH RISK AREA' ),
            array( 'key' => 'field_ep_ke_malaria_title', 'label' => 'Title', 'name' => 'ke_malaria_title', 'type' => 'text', 'default_value' => 'Malaria Risk in Kenya' ),
            array( 'key' => 'field_ep_ke_malaria_intro', 'label' => 'Intro Text', 'name' => 'ke_malaria_intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Malaria risk is high throughout most of Kenya, including safari parks. Antimalarials are usually recommended.' ),
            array(
                'key'          => 'field_ep_ke_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'ke_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Risk Item',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_ke_risk_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-exclamation-triangle', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_ke_risk_level', 'label' => 'Risk Level', 'name' => 'risk_level', 'type' => 'select', 'choices' => array( 'low-risk' => 'Low Risk (Green)', 'high-risk' => 'High Risk (Red)' ), 'default_value' => 'high-risk', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_ke_risk_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_ke_risk_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'              => $ke_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J5. Kenya — Health Advice
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ke_health',
        'title'    => 'Kenya — Health Advice',
        'fields'   => array(
            array( 'key' => 'field_ep_ke_health_badge', 'label' => 'Badge Text', 'name' => 'ke_health_badge', 'type' => 'text', 'default_value' => 'HEALTH ADVICE' ),
            array( 'key' => 'field_ep_ke_health_title', 'label' => 'Title', 'name' => 'ke_health_title', 'type' => 'text', 'default_value' => 'Stay healthy in Kenya' ),
            array( 'key' => 'field_ep_ke_health_subtitle', 'label' => 'Subtitle', 'name' => 'ke_health_subtitle', 'type' => 'text', 'default_value' => 'Essential tips for a safe safari' ),
            array(
                'key'          => 'field_ep_ke_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'ke_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Tip',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_ke_tip_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-glass-water', 'placeholder' => 'fas fa-glass-water', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_ke_tip_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_ke_tip_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_ke_tip_image', 'label' => 'Background Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'              => $ke_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // J6. Kenya — Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_ke_cta',
        'title'    => 'Kenya — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_ep_ke_cta_title', 'label' => 'Title', 'name' => 'ke_cta_title', 'type' => 'text', 'default_value' => 'Ready for your Kenya safari?' ),
            array( 'key' => 'field_ep_ke_cta_description', 'label' => 'Description', 'name' => 'ke_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your travel health consultation at our Ashford clinic. Get expert advice and all recommended vaccinations in one visit.' ),
            array( 'key' => 'field_ep_ke_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'ke_cta_primary_text', 'type' => 'text', 'default_value' => 'Book Kenya Consultation' ),
            array( 'key' => 'field_ep_ke_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'ke_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_ep_ke_cta_check_1', 'label' => 'Check 1', 'name' => 'ke_cta_check_1', 'type' => 'text', 'default_value' => 'Travel Ready' ),
            array( 'key' => 'field_ep_ke_cta_check_2', 'label' => 'Check 2', 'name' => 'ke_cta_check_2', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_ep_ke_cta_check_3', 'label' => 'Check 3', 'name' => 'ke_cta_check_3', 'type' => 'text', 'default_value' => 'All Vaccines' ),
        ),
        'location'              => $ke_location,
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // K. INDIA TRAVEL PAGE FIELDS
    // =========================================================================
    $in_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-travel-india.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // K1. India — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_in_hero',
        'title'    => 'India — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_ep_in_hero_badge', 'label' => 'Badge Text', 'name' => 'in_hero_badge', 'type' => 'text', 'default_value' => 'INDIA TRAVEL HEALTH' ),
            array( 'key' => 'field_ep_in_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'in_hero_title_line1', 'type' => 'text', 'default_value' => 'Travel Vaccinations for' ),
            array( 'key' => 'field_ep_in_hero_title_highlight', 'label' => 'Title Highlight (Country)', 'name' => 'in_hero_title_highlight', 'type' => 'text', 'default_value' => 'India' ),
            array( 'key' => 'field_ep_in_hero_description', 'label' => 'Description', 'name' => 'in_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Expert advice and vaccinations for your India journey. Get protected before you travel with Ashford's trusted travel health specialists." ),
            array( 'key' => 'field_ep_in_hero_cta_text', 'label' => 'CTA Text', 'name' => 'in_hero_cta_text', 'type' => 'text', 'default_value' => 'Book India Consultation' ),
            array( 'key' => 'field_ep_in_hero_cta_url', 'label' => 'CTA URL', 'name' => 'in_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'              => $in_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K2. India — Quick Info Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_in_stats',
        'title'    => 'India — Quick Info Bar',
        'fields'   => array(
            array(
                'key'          => 'field_ep_in_stats',
                'label'        => 'Stats',
                'name'         => 'in_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_in_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_in_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_in_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                ),
            ),
        ),
        'location'              => $in_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K3. India — Recommended Vaccinations
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_in_vaccines',
        'title'    => 'India — Recommended Vaccinations',
        'fields'   => array(
            array( 'key' => 'field_ep_in_vaccines_title', 'label' => 'Title', 'name' => 'in_vaccines_title', 'type' => 'text', 'default_value' => 'Protect yourself in India' ),
            array( 'key' => 'field_ep_in_vaccines_desc', 'label' => 'Description', 'name' => 'in_vaccines_description', 'type' => 'text', 'default_value' => 'These vaccinations are recommended for most travellers to India' ),
            array(
                'key'          => 'field_ep_in_vaccinations',
                'label'        => 'Vaccinations',
                'name'         => 'in_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add Vaccination',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_in_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_in_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_in_vax_badge_color', 'label' => 'Badge Colour', 'name' => 'badge_color', 'type' => 'select', 'choices' => array( 'purple' => 'Purple (Essential/Recommended)', 'gray' => 'Grey (Consider/Rural)' ), 'default_value' => 'purple', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_in_vax_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'default_value' => 'Essential', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_in_vax_short', 'label' => 'Short Description', 'name' => 'short_desc', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_ep_in_vax_desc', 'label' => 'Full Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $in_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K4. India — Malaria Information
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_in_malaria',
        'title'    => 'India — Malaria Information',
        'fields'   => array(
            array( 'key' => 'field_ep_in_malaria_image', 'label' => 'Image', 'name' => 'in_malaria_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_in_malaria_badge_text', 'label' => 'Image Badge Text', 'name' => 'in_malaria_badge_text', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_ep_in_malaria_badge', 'label' => 'Section Badge', 'name' => 'in_malaria_badge', 'type' => 'text', 'default_value' => 'MOSQUITO-BORNE DISEASES' ),
            array( 'key' => 'field_ep_in_malaria_title', 'label' => 'Title', 'name' => 'in_malaria_title', 'type' => 'text', 'default_value' => 'Malaria & Dengue Risks in India' ),
            array( 'key' => 'field_ep_in_malaria_intro', 'label' => 'Intro Text', 'name' => 'in_malaria_intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Malaria risk varies across India. Dengue fever is also a significant risk nationwide. Our pharmacists will check your specific itinerary and advise on prevention.' ),
            array(
                'key'          => 'field_ep_in_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'in_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Risk Item',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_in_risk_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-check-circle', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_in_risk_level', 'label' => 'Risk Level', 'name' => 'risk_level', 'type' => 'select', 'choices' => array( 'low-risk' => 'Low Risk (Green)', 'high-risk' => 'High Risk (Red)' ), 'default_value' => 'low-risk', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_in_risk_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_in_risk_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'              => $in_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K5. India — Health Advice
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_in_health',
        'title'    => 'India — Health Advice',
        'fields'   => array(
            array( 'key' => 'field_ep_in_health_badge', 'label' => 'Badge Text', 'name' => 'in_health_badge', 'type' => 'text', 'default_value' => 'HEALTH ADVICE' ),
            array( 'key' => 'field_ep_in_health_title', 'label' => 'Title', 'name' => 'in_health_title', 'type' => 'text', 'default_value' => 'Stay healthy in India' ),
            array( 'key' => 'field_ep_in_health_subtitle', 'label' => 'Subtitle', 'name' => 'in_health_subtitle', 'type' => 'text', 'default_value' => 'Essential tips for a safe journey' ),
            array(
                'key'          => 'field_ep_in_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'in_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Tip',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_in_tip_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-glass-water', 'placeholder' => 'fas fa-glass-water', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_in_tip_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_in_tip_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_in_tip_image', 'label' => 'Background Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'              => $in_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // K6. India — Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_in_cta',
        'title'    => 'India — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_ep_in_cta_title', 'label' => 'Title', 'name' => 'in_cta_title', 'type' => 'text', 'default_value' => 'Ready for your India adventure?' ),
            array( 'key' => 'field_ep_in_cta_description', 'label' => 'Description', 'name' => 'in_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your India travel health consultation at our Ashford clinic. Get expert advice and all recommended vaccinations in one visit.' ),
            array( 'key' => 'field_ep_in_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'in_cta_primary_text', 'type' => 'text', 'default_value' => 'Book India Consultation' ),
            array( 'key' => 'field_ep_in_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'in_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_ep_in_cta_check_1', 'label' => 'Check 1', 'name' => 'in_cta_check_1', 'type' => 'text', 'default_value' => 'Travel Ready' ),
            array( 'key' => 'field_ep_in_cta_check_2', 'label' => 'Check 2', 'name' => 'in_cta_check_2', 'type' => 'text', 'default_value' => 'Expert India Advice' ),
            array( 'key' => 'field_ep_in_cta_check_3', 'label' => 'Check 3', 'name' => 'in_cta_check_3', 'type' => 'text', 'default_value' => 'All Vaccines Available' ),
        ),
        'location'              => $in_location,
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // L. CAPE VERDE TRAVEL PAGE FIELDS
    // =========================================================================
    $cv_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-travel-cape-verde.php',
            ),
        ),
    );

    // -------------------------------------------------------------------------
    // L1. Cape Verde — Hero Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_cv_hero',
        'title'    => 'Cape Verde — Hero Section',
        'fields'   => array(
            array( 'key' => 'field_ep_cv_hero_badge', 'label' => 'Badge Text', 'name' => 'cv_hero_badge', 'type' => 'text', 'default_value' => 'CAPE VERDE TRAVEL HEALTH' ),
            array( 'key' => 'field_ep_cv_hero_title_line1', 'label' => 'Title Line 1', 'name' => 'cv_hero_title_line1', 'type' => 'text', 'default_value' => 'Travel Vaccinations for' ),
            array( 'key' => 'field_ep_cv_hero_title_highlight', 'label' => 'Title Highlight (Country)', 'name' => 'cv_hero_title_highlight', 'type' => 'text', 'default_value' => 'Cape Verde' ),
            array( 'key' => 'field_ep_cv_hero_description', 'label' => 'Description', 'name' => 'cv_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Expert advice and vaccinations for your Cape Verde holiday. Get protected before you travel with Ashford's trusted travel health specialists." ),
            array( 'key' => 'field_ep_cv_hero_cta_text', 'label' => 'CTA Text', 'name' => 'cv_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_ep_cv_hero_cta_url', 'label' => 'CTA URL', 'name' => 'cv_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'              => $cv_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // L2. Cape Verde — Quick Info Bar
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_cv_stats',
        'title'    => 'Cape Verde — Quick Info Bar',
        'fields'   => array(
            array(
                'key'          => 'field_ep_cv_stats',
                'label'        => 'Stats',
                'name'         => 'cv_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_cv_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe. The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_cv_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
                    array( 'key' => 'field_ep_cv_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '40' ) ),
                ),
            ),
        ),
        'location'              => $cv_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // L3. Cape Verde — Recommended Vaccinations
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_cv_vaccines',
        'title'    => 'Cape Verde — Recommended Vaccinations',
        'fields'   => array(
            array( 'key' => 'field_ep_cv_vaccines_title', 'label' => 'Title', 'name' => 'cv_vaccines_title', 'type' => 'text', 'default_value' => 'Protect yourself in Cape Verde' ),
            array( 'key' => 'field_ep_cv_vaccines_desc', 'label' => 'Description', 'name' => 'cv_vaccines_description', 'type' => 'text', 'default_value' => 'These vaccinations are recommended for most travellers to Cape Verde' ),
            array(
                'key'          => 'field_ep_cv_vaccinations',
                'label'        => 'Vaccinations',
                'name'         => 'cv_vaccinations',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 10,
                'button_label' => 'Add Vaccination',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_cv_vax_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-syringe', 'placeholder' => 'fas fa-syringe', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_cv_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_cv_vax_badge_color', 'label' => 'Badge Colour', 'name' => 'badge_color', 'type' => 'select', 'choices' => array( 'purple' => 'Purple (Essential/Recommended)', 'gray' => 'Grey (Consider/Certificate)' ), 'default_value' => 'purple', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_cv_vax_badge_text', 'label' => 'Badge Text', 'name' => 'badge_text', 'type' => 'text', 'default_value' => 'Essential', 'wrapper' => array( 'width' => '15' ) ),
                    array( 'key' => 'field_ep_cv_vax_short', 'label' => 'Short Description', 'name' => 'short_desc', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
                    array( 'key' => 'field_ep_cv_vax_desc', 'label' => 'Full Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $cv_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // L4. Cape Verde — Malaria Information
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_cv_malaria',
        'title'    => 'Cape Verde — Malaria Information',
        'fields'   => array(
            array( 'key' => 'field_ep_cv_malaria_image', 'label' => 'Image', 'name' => 'cv_malaria_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_cv_malaria_badge_text', 'label' => 'Image Badge Text', 'name' => 'cv_malaria_badge_text', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_ep_cv_malaria_badge', 'label' => 'Section Badge', 'name' => 'cv_malaria_badge', 'type' => 'text', 'default_value' => 'MOSQUITO RISKS' ),
            array( 'key' => 'field_ep_cv_malaria_title', 'label' => 'Title', 'name' => 'cv_malaria_title', 'type' => 'text', 'default_value' => 'Malaria & Dengue in Cape Verde' ),
            array( 'key' => 'field_ep_cv_malaria_intro', 'label' => 'Intro Text', 'name' => 'cv_malaria_intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Malaria risk is generally low but present on Santiago island. Dengue fever and Zika virus are also risks. Bite avoidance is essential.' ),
            array(
                'key'          => 'field_ep_cv_malaria_risks',
                'label'        => 'Risk Items',
                'name'         => 'cv_malaria_risks',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Risk Item',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_cv_risk_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-check-circle', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_cv_risk_level', 'label' => 'Risk Level', 'name' => 'risk_level', 'type' => 'select', 'choices' => array( 'low-risk' => 'Low Risk (Green)', 'high-risk' => 'High Risk (Red)' ), 'default_value' => 'low-risk', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_cv_risk_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_cv_risk_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '35' ) ),
                ),
            ),
        ),
        'location'              => $cv_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // L5. Cape Verde — Health Advice
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_cv_health',
        'title'    => 'Cape Verde — Health Advice',
        'fields'   => array(
            array( 'key' => 'field_ep_cv_health_badge', 'label' => 'Badge Text', 'name' => 'cv_health_badge', 'type' => 'text', 'default_value' => 'HEALTH ADVICE' ),
            array( 'key' => 'field_ep_cv_health_title', 'label' => 'Title', 'name' => 'cv_health_title', 'type' => 'text', 'default_value' => 'Stay healthy in Cape Verde' ),
            array( 'key' => 'field_ep_cv_health_subtitle', 'label' => 'Subtitle', 'name' => 'cv_health_subtitle', 'type' => 'text', 'default_value' => 'Essential tips for a safe trip' ),
            array(
                'key'          => 'field_ep_cv_health_tips',
                'label'        => 'Health Tips',
                'name'         => 'cv_health_tips',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 0,
                'max'          => 4,
                'button_label' => 'Add Tip',
                'sub_fields'   => array(
                    array( 'key' => 'field_ep_cv_tip_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'The "fas" prefix is added automatically if omitted.', 'default_value' => 'fas fa-glass-water', 'placeholder' => 'fas fa-glass-water', 'wrapper' => array( 'width' => '20' ) ),
                    array( 'key' => 'field_ep_cv_tip_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_cv_tip_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
                    array( 'key' => 'field_ep_cv_tip_image', 'label' => 'Background Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'wrapper' => array( 'width' => '30' ) ),
                ),
            ),
        ),
        'location'              => $cv_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // -------------------------------------------------------------------------
    // L6. Cape Verde — Final CTA
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_cv_cta',
        'title'    => 'Cape Verde — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_ep_cv_cta_title', 'label' => 'Title', 'name' => 'cv_cta_title', 'type' => 'text', 'default_value' => 'Ready for Cape Verde?' ),
            array( 'key' => 'field_ep_cv_cta_description', 'label' => 'Description', 'name' => 'cv_cta_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your travel health consultation at our Ashford clinic. Get expert advice and all recommended vaccinations in one visit.' ),
            array( 'key' => 'field_ep_cv_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'cv_cta_primary_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
            array( 'key' => 'field_ep_cv_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'cv_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_ep_cv_cta_check_1', 'label' => 'Check 1', 'name' => 'cv_cta_check_1', 'type' => 'text', 'default_value' => 'Travel Ready' ),
            array( 'key' => 'field_ep_cv_cta_check_2', 'label' => 'Check 2', 'name' => 'cv_cta_check_2', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_ep_cv_cta_check_3', 'label' => 'Check 3', 'name' => 'cv_cta_check_3', 'type' => 'text', 'default_value' => 'All Vaccines' ),
        ),
        'location'              => $cv_location,
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // M. YELLOW FEVER VACCINATION PAGE FIELDS  (yf_ prefix)
    // =========================================================================

    $yf_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-yellow-fever.php',
            ),
        ),
    );

    // ── M1. Hero ──────────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_hero',
        'title'    => 'Yellow Fever — Hero',
        'fields'   => array(
            array( 'key' => 'field_ep_yf_parent_url', 'label' => 'Breadcrumb Parent URL', 'name' => 'yf_parent_url', 'type' => 'text', 'default_value' => '/travel-health/', 'instructions' => 'Relative path to the parent page shown in the breadcrumb (e.g. /travel-health/). This is NOT the current page URL.' ),
            array( 'key' => 'field_ep_yf_hero_label', 'label' => 'Hero Label', 'name' => 'yf_hero_label', 'type' => 'text', 'default_value' => 'OFFICIAL YELLOW FEVER CENTRE' ),
            array( 'key' => 'field_ep_yf_hero_title', 'label' => 'Hero Title', 'name' => 'yf_hero_title', 'type' => 'text', 'default_value' => 'Yellow Fever Vaccination Service in Ashford' ),
            array( 'key' => 'field_ep_yf_hero_description', 'label' => 'Hero Description', 'name' => 'yf_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'We are an official NHS Yellow Fever Vaccination Centre. Get your vaccination and International Certificate of Vaccination (ICVP) at Easy Pharmacy Ashford.' ),
            array( 'key' => 'field_ep_yf_hero_image', 'label' => 'Hero Background Image', 'name' => 'yf_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'instructions' => 'Background image for the hero section. Recommended size: 1600x900px.' ),
            array( 'key' => 'field_ep_yf_hero_cta_text', 'label' => 'Hero CTA Text', 'name' => 'yf_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Yellow Fever Vaccination' ),
            array( 'key' => 'field_ep_yf_hero_cta_url', 'label' => 'Hero CTA URL', 'name' => 'yf_hero_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array(
                'key'        => 'field_ep_yf_hero_badges',
                'label'      => 'Hero Badges',
                'name'       => 'yf_hero_badges',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_hero_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── M2. Certification ─────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_cert',
        'title'    => 'Yellow Fever — Certification',
        'fields'   => array(
            array( 'key' => 'field_ep_yf_cert_badge', 'label' => 'Section Badge', 'name' => 'yf_cert_badge', 'type' => 'text', 'default_value' => 'OFFICIAL CENTRE' ),
            array( 'key' => 'field_ep_yf_cert_title', 'label' => 'Title', 'name' => 'yf_cert_title', 'type' => 'text', 'default_value' => 'Designated Yellow Fever Vaccination Centre' ),
            array( 'key' => 'field_ep_yf_cert_desc', 'label' => 'Description', 'name' => 'yf_cert_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Authorised to administer yellow fever vaccinations and issue international certificates' ),
            array( 'key' => 'field_ep_yf_cert_image', 'label' => 'Pharmacist Image', 'name' => 'yf_cert_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_yf_cert_nametag_name', 'label' => 'Name Tag — Name', 'name' => 'yf_cert_nametag_name', 'type' => 'text', 'default_value' => 'Dilip Sherathia' ),
            array( 'key' => 'field_ep_yf_cert_nametag_role', 'label' => 'Name Tag — Role', 'name' => 'yf_cert_nametag_role', 'type' => 'text', 'default_value' => 'Lead Pharmacist & Yellow Fever Specialist' ),
            array( 'key' => 'field_ep_yf_cert_highlight', 'label' => 'Highlight Badge Text', 'name' => 'yf_cert_highlight', 'type' => 'text', 'default_value' => 'NHS Designated Yellow Fever Centre' ),
            array( 'key' => 'field_ep_yf_cert_subtitle', 'label' => 'Subtitle', 'name' => 'yf_cert_subtitle', 'type' => 'text', 'default_value' => 'Why Choose Our Centre' ),
            array( 'key' => 'field_ep_yf_cert_text', 'label' => 'Body Text', 'name' => 'yf_cert_text', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'As an officially designated Yellow Fever Vaccination Centre, we are authorised by NaTHNaC to administer the Stamaril vaccine and issue the International Certificate of Vaccination or Prophylaxis (ICVP). Our lead pharmacist has specialist training in travel health.' ),
            array( 'key' => 'field_ep_yf_cert_cta_url', 'label' => 'CTA URL', 'name' => 'yf_cert_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array(
                'key'        => 'field_ep_yf_cert_features',
                'label'      => 'Features',
                'name'       => 'yf_cert_features',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_cert_feat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fa-certificate', 'instructions' => 'Font Awesome class, e.g. fa-certificate' ),
                    array( 'key' => 'field_ep_yf_cert_feat_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_cert_feat_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
            array( 'key' => 'field_ep_yf_cert_callout_badge', 'label' => 'Callout Badge', 'name' => 'yf_cert_callout_badge', 'type' => 'text', 'default_value' => 'IMPORTANT' ),
            array( 'key' => 'field_ep_yf_cert_callout_title', 'label' => 'Callout Title', 'name' => 'yf_cert_callout_title', 'type' => 'text', 'default_value' => '10-Day Validity Rule' ),
            array( 'key' => 'field_ep_yf_cert_callout_text', 'label' => 'Callout Text', 'name' => 'yf_cert_callout_text', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Your yellow fever certificate becomes valid 10 days after vaccination. Please ensure you are vaccinated at least 10 days before entering a country that requires proof of vaccination.' ),
            array( 'key' => 'field_ep_yf_cert_callout_note', 'label' => 'Callout Note', 'name' => 'yf_cert_callout_note', 'type' => 'text', 'default_value' => 'Once valid, the certificate provides lifelong proof of vaccination.' ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── M3. Stats Bar ─────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_stats',
        'title'    => 'Yellow Fever — Stats Bar',
        'fields'   => array(
            array(
                'key'        => 'field_ep_yf_stats',
                'label'      => 'Stats',
                'name'       => 'yf_stats',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_stat_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fa-certificate', 'instructions' => 'Font Awesome class' ),
                    array( 'key' => 'field_ep_yf_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── M4. About Yellow Fever ────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_about',
        'title'    => 'Yellow Fever — About the Disease',
        'fields'   => array(
            array( 'key' => 'field_ep_yf_about_badge', 'label' => 'Section Badge', 'name' => 'yf_about_badge', 'type' => 'text', 'default_value' => 'ABOUT THE DISEASE' ),
            array( 'key' => 'field_ep_yf_about_title', 'label' => 'Title', 'name' => 'yf_about_title', 'type' => 'text', 'default_value' => 'What is Yellow Fever?' ),
            array( 'key' => 'field_ep_yf_about_desc', 'label' => 'Description', 'name' => 'yf_about_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'A serious viral infection spread by mosquitoes in tropical regions' ),
            array( 'key' => 'field_ep_yf_about_image', 'label' => 'Image', 'name' => 'yf_about_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array(
                'key'        => 'field_ep_yf_about_cards',
                'label'      => 'Info Cards',
                'name'       => 'yf_about_cards',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_about_card_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fa-virus', 'instructions' => 'Font Awesome class' ),
                    array( 'key' => 'field_ep_yf_about_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_about_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
            array( 'key' => 'field_ep_yf_about_callout_badge', 'label' => 'Callout Badge', 'name' => 'yf_about_callout_badge', 'type' => 'text', 'default_value' => 'SERIOUS RISK' ),
            array( 'key' => 'field_ep_yf_about_callout_title', 'label' => 'Callout Title', 'name' => 'yf_about_callout_title', 'type' => 'text', 'default_value' => 'Up to 50% Fatality Rate in Severe Cases' ),
            array( 'key' => 'field_ep_yf_about_callout_text', 'label' => 'Callout Text', 'name' => 'yf_about_callout_text', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Yellow Fever can be fatal. There is no antiviral treatment. Vaccination provides the best protection and is required for entry to many countries. A single dose gives lifelong protection for most travellers.' ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 15,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── M5. Who Needs Vaccination ─────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_needs',
        'title'    => 'Yellow Fever — Who Needs Vaccination',
        'fields'   => array(
            array( 'key' => 'field_ep_yf_needs_badge', 'label' => 'Section Badge', 'name' => 'yf_needs_badge', 'type' => 'text', 'default_value' => 'WHO NEEDS VACCINATION' ),
            array( 'key' => 'field_ep_yf_needs_title', 'label' => 'Title', 'name' => 'yf_needs_title', 'type' => 'text', 'default_value' => 'Do You Need the Yellow Fever Vaccine?' ),
            array( 'key' => 'field_ep_yf_needs_desc', 'label' => 'Description', 'name' => 'yf_needs_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Required or recommended depending on your destination' ),
            array(
                'key'        => 'field_ep_yf_needs_cards',
                'label'      => 'Cards',
                'name'       => 'yf_needs_cards',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 4,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_needs_card_type', 'label' => 'Type', 'name' => 'type', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended' ), 'default_value' => 'required' ),
                    array( 'key' => 'field_ep_yf_needs_card_badge', 'label' => 'Badge Text', 'name' => 'badge', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_needs_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_needs_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'        => 'field_ep_yf_needs_card_items',
                        'label'      => 'Checklist Items',
                        'name'       => 'items',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'min'        => 0,
                        'max'        => 6,
                        'sub_fields' => array(
                            array( 'key' => 'field_ep_yf_needs_item_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
            array( 'key' => 'field_ep_yf_needs_info', 'label' => 'Info Note', 'name' => 'yf_needs_info', 'type' => 'text', 'default_value' => "Not sure if you need the vaccine? Book a consultation and we'll check your destination requirements." ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── M6. Risk Countries ────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_risk',
        'title'    => 'Yellow Fever — Risk Countries',
        'fields'   => array(
            array( 'key' => 'field_ep_yf_risk_badge', 'label' => 'Section Badge', 'name' => 'yf_risk_badge', 'type' => 'text', 'default_value' => 'RISK COUNTRIES' ),
            array( 'key' => 'field_ep_yf_risk_title', 'label' => 'Title', 'name' => 'yf_risk_title', 'type' => 'text', 'default_value' => 'Yellow Fever Risk Countries' ),
            array( 'key' => 'field_ep_yf_risk_desc', 'label' => 'Description', 'name' => 'yf_risk_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Yellow Fever is found in tropical regions of Africa and South America. Check if your destination requires vaccination.' ),
            array(
                'key'        => 'field_ep_yf_risk_stats',
                'label'      => 'Stats Boxes',
                'name'       => 'yf_risk_stats',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 4,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_risk_stat_num', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_risk_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_risk_stat_sub', 'label' => 'Sub Text', 'name' => 'sub', 'type' => 'text' ),
                ),
            ),
            array(
                'key'        => 'field_ep_yf_risk_zones',
                'label'      => 'Risk Zones',
                'name'       => 'yf_risk_zones',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 4,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_risk_zone_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
                    array( 'key' => 'field_ep_yf_risk_zone_image_url', 'label' => 'Image URL (fallback)', 'name' => 'image_url', 'type' => 'url', 'instructions' => 'Used if no image uploaded.' ),
                    array( 'key' => 'field_ep_yf_risk_zone_type', 'label' => 'Type (CSS class)', 'name' => 'type', 'type' => 'select', 'choices' => array( 'africa' => 'Africa', 'america' => 'South America' ), 'default_value' => 'africa' ),
                    array( 'key' => 'field_ep_yf_risk_zone_emoji', 'label' => 'Emoji', 'name' => 'emoji', 'type' => 'text', 'instructions' => 'Globe emoji for the card icon' ),
                    array( 'key' => 'field_ep_yf_risk_zone_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_risk_zone_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'        => 'field_ep_yf_risk_zone_countries',
                        'label'      => 'Countries',
                        'name'       => 'countries',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'min'        => 0,
                        'max'        => 20,
                        'sub_fields' => array(
                            array( 'key' => 'field_ep_yf_risk_country_name', 'label' => 'Country Name', 'name' => 'name', 'type' => 'text' ),
                        ),
                    ),
                    array( 'key' => 'field_ep_yf_risk_zone_note', 'label' => 'Note', 'name' => 'note', 'type' => 'text', 'instructions' => 'e.g. "+ 26 more African countries with risk areas"' ),
                ),
            ),
            array( 'key' => 'field_ep_yf_risk_callout_title', 'label' => 'Callout Title', 'name' => 'yf_risk_callout_title', 'type' => 'text', 'default_value' => 'Not Sure About Your Destination?' ),
            array( 'key' => 'field_ep_yf_risk_callout_text', 'label' => 'Callout Text', 'name' => 'yf_risk_callout_text', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Yellow Fever requirements change regularly. Our pharmacist will check the latest country-by-country requirements and advise whether you need the vaccine for your specific trip.' ),
            array(
                'key'        => 'field_ep_yf_risk_callout_badges',
                'label'      => 'Callout Badges',
                'name'       => 'yf_risk_callout_badges',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_risk_cb_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_ep_yf_risk_footer_text', 'label' => 'Footer Info Text', 'name' => 'yf_risk_footer_text', 'type' => 'text', 'default_value' => "Unsure about your destination? We'll check the latest requirements for you." ),
            array( 'key' => 'field_ep_yf_risk_cta_url', 'label' => 'Footer CTA URL', 'name' => 'yf_risk_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 25,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── M7. Appointment Details ───────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_details',
        'title'    => 'Yellow Fever — Appointment Details',
        'fields'   => array(
            array( 'key' => 'field_ep_yf_details_badge', 'label' => 'Section Badge', 'name' => 'yf_details_badge', 'type' => 'text', 'default_value' => 'YOUR APPOINTMENT' ),
            array( 'key' => 'field_ep_yf_details_title', 'label' => 'Title', 'name' => 'yf_details_title', 'type' => 'text', 'default_value' => 'What to Expect at Your Appointment' ),
            array( 'key' => 'field_ep_yf_details_desc', 'label' => 'Description', 'name' => 'yf_details_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Simple, straightforward vaccination process at our Ashford clinic' ),
            array( 'key' => 'field_ep_yf_details_image', 'label' => 'Hero Image', 'name' => 'yf_details_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array(
                'key'        => 'field_ep_yf_details',
                'label'      => 'Detail Cards',
                'name'       => 'yf_details',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 8,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_detail_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fa-syringe', 'instructions' => 'Font Awesome class' ),
                    array( 'key' => 'field_ep_yf_detail_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_detail_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── M8. FAQ ───────────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_faq',
        'title'    => 'Yellow Fever — FAQ',
        'fields'   => array(
            array( 'key' => 'field_ep_yf_faq_badge', 'label' => 'Section Badge', 'name' => 'yf_faq_badge', 'type' => 'text', 'default_value' => 'YELLOW FEVER FAQs' ),
            array( 'key' => 'field_ep_yf_faq_title', 'label' => 'Title', 'name' => 'yf_faq_title', 'type' => 'text', 'default_value' => 'Common Questions' ),
            array( 'key' => 'field_ep_yf_faq_desc', 'label' => 'Description', 'name' => 'yf_faq_desc', 'type' => 'text', 'default_value' => 'Everything you need to know about Yellow Fever vaccination' ),
            array(
                'key'        => 'field_ep_yf_faqs',
                'label'      => 'FAQs',
                'name'       => 'yf_faqs',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 10,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_ep_yf_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 35,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── M9. Final CTA ─────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_yf_cta',
        'title'    => 'Yellow Fever — Final CTA',
        'fields'   => array(
            array(
                'key'        => 'field_ep_yf_cta_badges',
                'label'      => 'CTA Badges',
                'name'       => 'yf_cta_badges',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_ep_yf_cta_title', 'label' => 'Title', 'name' => 'yf_cta_title', 'type' => 'text', 'default_value' => 'Get your Yellow Fever vaccination and certificate' ),
            array( 'key' => 'field_ep_yf_cta_desc', 'label' => 'Description', 'name' => 'yf_cta_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your Yellow Fever vaccination at our official centre in Ashford. Certificate issued on the day.' ),
            array( 'key' => 'field_ep_yf_cta_primary_text', 'label' => 'Primary CTA Text', 'name' => 'yf_cta_primary_text', 'type' => 'text', 'default_value' => 'Book Vaccination' ),
            array( 'key' => 'field_ep_yf_cta_primary_url', 'label' => 'Primary CTA URL', 'name' => 'yf_cta_primary_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array(
                'key'        => 'field_ep_yf_cta_checks',
                'label'      => 'Trust Checks',
                'name'       => 'yf_cta_checks',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_yf_cta_check_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $yf_location,
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =============================================
    // N — RABIES VACCINATION PAGE
    // =============================================
    $rab_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-rabies.php',
            ),
        ),
    );

    // ── N1. Hero ─────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_hero',
        'title'    => 'Rabies — Hero',
        'fields'   => array(
            array( 'key' => 'field_ep_rab_name', 'label' => 'Vaccine Name', 'name' => 'vaccine_name', 'type' => 'text', 'default_value' => 'Rabies' ),
            array( 'key' => 'field_ep_rab_parent_url', 'label' => 'Breadcrumb Parent URL', 'name' => 'vaccine_parent_url', 'type' => 'text', 'default_value' => '/travel-health/', 'instructions' => 'Relative path to the parent page shown in the breadcrumb (e.g. /travel-health/). This is NOT the current page URL.' ),
            array( 'key' => 'field_ep_rab_hero_label', 'label' => 'Hero Label', 'name' => 'vaccine_hero_label', 'type' => 'text', 'default_value' => 'TRAVEL HEALTH PROTECTION' ),
            array( 'key' => 'field_ep_rab_hero_title', 'label' => 'Hero Title', 'name' => 'vaccine_hero_title', 'type' => 'text', 'default_value' => 'Rabies Vaccination Service in Ashford' ),
            array( 'key' => 'field_ep_rab_hero_desc', 'label' => 'Hero Description', 'name' => 'vaccine_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Protect yourself against rabies with our expert travel health service. Essential for travel to high-risk areas in Asia, Africa, and South America.' ),
            array( 'key' => 'field_ep_rab_hero_image', 'label' => 'Hero Background Image', 'name' => 'vaccine_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'instructions' => 'Background image for the hero section. Recommended size: 1600x900px.' ),
            array( 'key' => 'field_ep_rab_cta_text', 'label' => 'CTA Button Text', 'name' => 'vaccine_cta_text', 'type' => 'text', 'default_value' => 'Book Rabies Vaccination' ),
            array( 'key' => 'field_ep_rab_cta_url', 'label' => 'CTA Button URL', 'name' => 'vaccine_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_ep_rab_phone', 'label' => 'Phone (digits)', 'name' => 'vaccine_phone', 'type' => 'text', 'default_value' => '01784255222' ),
            array( 'key' => 'field_ep_rab_phone_display', 'label' => 'Phone (display)', 'name' => 'vaccine_phone_display', 'type' => 'text', 'default_value' => 'Call 01784 255 222' ),
            array(
                'key'        => 'field_ep_rab_hero_badges',
                'label'      => 'Hero Badges',
                'name'       => 'vaccine_hero_badges',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_hero_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N2. Protection Section ───────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_protect',
        'title'    => 'Rabies — Protection',
        'fields'   => array(
            array( 'key' => 'field_ep_rab_protect_badge', 'label' => 'Badge Text', 'name' => 'vaccine_protect_badge', 'type' => 'text', 'default_value' => 'ESSENTIAL PROTECTION' ),
            array( 'key' => 'field_ep_rab_protect_title', 'label' => 'Title', 'name' => 'vaccine_protect_title', 'type' => 'text', 'default_value' => 'Understanding Rabies Risk' ),
            array( 'key' => 'field_ep_rab_protect_desc', 'label' => 'Description', 'name' => 'vaccine_protect_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'A serious viral infection spread by infected animals' ),
            array( 'key' => 'field_ep_rab_protect_image', 'label' => 'Image', 'name' => 'vaccine_protect_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_rab_protect_image_alt', 'label' => 'Image Alt Text', 'name' => 'vaccine_protect_image_alt', 'type' => 'text', 'default_value' => 'Travel health consultation for rabies' ),
            array( 'key' => 'field_ep_rab_protect_nametag_name', 'label' => 'Name Tag — Name', 'name' => 'vaccine_protect_nametag_name', 'type' => 'text', 'default_value' => 'Expert Care' ),
            array( 'key' => 'field_ep_rab_protect_nametag_role', 'label' => 'Name Tag — Role', 'name' => 'vaccine_protect_nametag_role', 'type' => 'text', 'default_value' => 'Travel Health Team' ),
            array( 'key' => 'field_ep_rab_protect_highlight', 'label' => 'Highlight Text', 'name' => 'vaccine_protect_highlight', 'type' => 'text', 'default_value' => 'Recommended for High-Risk Areas' ),
            array( 'key' => 'field_ep_rab_protect_subtitle', 'label' => 'Subtitle', 'name' => 'vaccine_protect_subtitle', 'type' => 'text', 'default_value' => 'Why Vaccination is Critical' ),
            array( 'key' => 'field_ep_rab_protect_text', 'label' => 'Body Text', 'name' => 'vaccine_protect_text', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Rabies is a viral infection of the brain and nerves. It is almost always fatal once symptoms appear. Vaccination provides vital protection and simplifies treatment if you are bitten or scratched by an animal abroad.' ),
            array(
                'key'        => 'field_ep_rab_protect_features',
                'label'      => 'Features',
                'name'       => 'vaccine_protect_features',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_protect_feat_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe' ),
                    array( 'key' => 'field_ep_rab_protect_feat_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_rab_protect_feat_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N3. Stats Bar ────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_stats',
        'title'    => 'Rabies — Stats Bar',
        'fields'   => array(
            array(
                'key'        => 'field_ep_rab_stats',
                'label'      => 'Stats',
                'name'       => 'vaccine_stats',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_stat_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe' ),
                    array( 'key' => 'field_ep_rab_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'field_ep_rab_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N4. About Section ────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_about',
        'title'    => 'Rabies — About',
        'fields'   => array(
            array( 'key' => 'field_ep_rab_about_badge', 'label' => 'Badge Text', 'name' => 'vaccine_about_badge', 'type' => 'text', 'default_value' => 'KNOW THE RISKS' ),
            array( 'key' => 'field_ep_rab_about_title', 'label' => 'Title', 'name' => 'vaccine_about_title', 'type' => 'text', 'default_value' => 'What is Rabies?' ),
            array( 'key' => 'field_ep_rab_about_desc', 'label' => 'Description', 'name' => 'vaccine_about_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Understanding transmission and prevention' ),
            array( 'key' => 'field_ep_rab_about_image', 'label' => 'Image', 'name' => 'vaccine_about_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_rab_about_image_alt', 'label' => 'Image Alt Text', 'name' => 'vaccine_about_image_alt', 'type' => 'text', 'default_value' => 'Stray dog in travel destination' ),
            array(
                'key'        => 'field_ep_rab_about_cards',
                'label'      => 'Info Cards',
                'name'       => 'vaccine_about_cards',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_about_card_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-virus' ),
                    array( 'key' => 'field_ep_rab_about_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_rab_about_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
            array( 'key' => 'field_ep_rab_callout_badge', 'label' => 'Callout Badge', 'name' => 'vaccine_callout_badge', 'type' => 'text', 'default_value' => 'CRITICAL WARNING' ),
            array( 'key' => 'field_ep_rab_callout_title', 'label' => 'Callout Title', 'name' => 'vaccine_callout_title', 'type' => 'text', 'default_value' => '100% Fatal Once Symptoms Appear' ),
            array( 'key' => 'field_ep_rab_callout_text', 'label' => 'Callout Text', 'name' => 'vaccine_callout_text', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Rabies is almost always fatal once symptoms develop. Vaccination is your best defence. If you are bitten or scratched by an animal abroad, seek medical help immediately, even if you have been vaccinated.' ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 15,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N5. Who Needs Vaccination ────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_needs',
        'title'    => 'Rabies — Who Needs Vaccination',
        'fields'   => array(
            array( 'key' => 'field_ep_rab_needs_badge', 'label' => 'Badge Text', 'name' => 'vaccine_needs_badge', 'type' => 'text', 'default_value' => 'WHO NEEDS VACCINATION' ),
            array( 'key' => 'field_ep_rab_needs_title', 'label' => 'Title', 'name' => 'vaccine_needs_title', 'type' => 'text', 'default_value' => 'Should you get vaccinated?' ),
            array( 'key' => 'field_ep_rab_needs_desc', 'label' => 'Description', 'name' => 'vaccine_needs_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Recommended for many travellers to risk areas' ),
            array(
                'key'        => 'field_ep_rab_needs_cards',
                'label'      => 'Needs Cards',
                'name'       => 'vaccine_needs_cards',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 4,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_needs_card_type', 'label' => 'Type', 'name' => 'type', 'type' => 'select', 'choices' => array( 'recommended' => 'Recommended', 'consider' => 'Consider' ), 'default_value' => 'recommended' ),
                    array( 'key' => 'field_ep_rab_needs_card_badge', 'label' => 'Badge', 'name' => 'badge', 'type' => 'text' ),
                    array( 'key' => 'field_ep_rab_needs_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_rab_needs_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'        => 'field_ep_rab_needs_card_items',
                        'label'      => 'Checklist Items',
                        'name'       => 'items',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'min'        => 0,
                        'max'        => 6,
                        'sub_fields' => array(
                            array( 'key' => 'field_ep_rab_needs_item_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N6. Risk Zones ───────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_risk',
        'title'    => 'Rabies — Risk Zones',
        'fields'   => array(
            array( 'key' => 'field_ep_rab_risk_badge', 'label' => 'Badge Text', 'name' => 'vaccine_risk_badge', 'type' => 'text', 'default_value' => 'GLOBAL RISK ZONES' ),
            array( 'key' => 'field_ep_rab_risk_title', 'label' => 'Title', 'name' => 'vaccine_risk_title', 'type' => 'text', 'default_value' => 'Where is Rabies found?' ),
            array( 'key' => 'field_ep_rab_risk_desc', 'label' => 'Description', 'name' => 'vaccine_risk_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Rabies is present on all continents except Antarctica, but over 95% of human deaths occur in Asia and Africa.' ),
            array(
                'key'        => 'field_ep_rab_risk_zones',
                'label'      => 'Risk Zones',
                'name'       => 'vaccine_risk_zones',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 4,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_risk_zone_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
                    array( 'key' => 'field_ep_rab_risk_zone_level', 'label' => 'Risk Level', 'name' => 'level', 'type' => 'select', 'choices' => array( 'high' => 'High', 'moderate' => 'Moderate' ), 'default_value' => 'high' ),
                    array( 'key' => 'field_ep_rab_risk_zone_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-exclamation-triangle' ),
                    array( 'key' => 'field_ep_rab_risk_zone_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_rab_risk_zone_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'        => 'field_ep_rab_risk_zone_countries',
                        'label'      => 'Countries',
                        'name'       => 'countries',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'min'        => 0,
                        'max'        => 20,
                        'sub_fields' => array(
                            array( 'key' => 'field_ep_rab_risk_country_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
            array( 'key' => 'field_ep_rab_risk_footer', 'label' => 'Footer Text', 'name' => 'vaccine_risk_footer', 'type' => 'text', 'default_value' => "Unsure about your destination? We'll check the latest risk data for you." ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 25,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N7. Vaccination Details ──────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_details',
        'title'    => 'Rabies — Vaccination Details',
        'fields'   => array(
            array( 'key' => 'field_ep_rab_details_badge', 'label' => 'Badge Text', 'name' => 'vaccine_details_badge', 'type' => 'text', 'default_value' => 'VACCINATION DETAILS' ),
            array( 'key' => 'field_ep_rab_details_title', 'label' => 'Title', 'name' => 'vaccine_details_title', 'type' => 'text', 'default_value' => 'What to expect at your appointment' ),
            array( 'key' => 'field_ep_rab_details_desc', 'label' => 'Description', 'name' => 'vaccine_details_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Simple, straightforward vaccination process at our Ashford clinic' ),
            array(
                'key'        => 'field_ep_rab_details',
                'label'      => 'Detail Cards',
                'name'       => 'vaccine_details',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 8,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_detail_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe' ),
                    array( 'key' => 'field_ep_rab_detail_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_rab_detail_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N8. FAQ ──────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_faq',
        'title'    => 'Rabies — FAQ',
        'fields'   => array(
            array( 'key' => 'field_ep_rab_faq_badge', 'label' => 'Badge Text', 'name' => 'vaccine_faq_badge', 'type' => 'text', 'default_value' => 'RABIES FAQs' ),
            array( 'key' => 'field_ep_rab_faq_title', 'label' => 'Title', 'name' => 'vaccine_faq_title', 'type' => 'text', 'default_value' => 'Common Questions' ),
            array(
                'key'        => 'field_ep_rab_faqs',
                'label'      => 'FAQs',
                'name'       => 'vaccine_faqs',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 10,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_ep_rab_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 35,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── N9. Final CTA ────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_rab_cta',
        'title'    => 'Rabies — Final CTA',
        'fields'   => array(
            array(
                'key'        => 'field_ep_rab_cta_badges',
                'label'      => 'CTA Badges',
                'name'       => 'vaccine_cta_badges',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_rab_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_ep_rab_cta_title', 'label' => 'Title', 'name' => 'vaccine_cta_title', 'type' => 'text', 'default_value' => 'Protect your health while travelling' ),
            array( 'key' => 'field_ep_rab_cta_desc', 'label' => 'Description', 'name' => 'vaccine_cta_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your Rabies vaccination with our expert team today. Quick, convenient, and professional service in Ashford.' ),
        ),
        'location'              => $rab_location,
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =============================================
    // P — TYPHOID VACCINATION PAGE
    // =============================================
    $typ_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-typhoid.php',
            ),
        ),
    );

    // ── P1. Hero ─────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_typ_hero',
        'title'    => 'Typhoid — Hero',
        'fields'   => array(
            array( 'key' => 'field_ep_typ_name', 'label' => 'Vaccine Name', 'name' => 'vaccine_name', 'type' => 'text', 'default_value' => 'Typhoid' ),
            array( 'key' => 'field_ep_typ_parent_url', 'label' => 'Breadcrumb Parent URL', 'name' => 'vaccine_parent_url', 'type' => 'text', 'default_value' => '/travel-health/', 'instructions' => 'Relative path to the parent page shown in the breadcrumb (e.g. /travel-health/). This is NOT the current page URL.' ),
            array( 'key' => 'field_ep_typ_hero_label', 'label' => 'Hero Label', 'name' => 'vaccine_hero_label', 'type' => 'text', 'default_value' => 'TRAVEL HEALTH PROTECTION' ),
            array( 'key' => 'field_ep_typ_hero_title', 'label' => 'Hero Title', 'name' => 'vaccine_hero_title', 'type' => 'text', 'default_value' => 'Typhoid Vaccination Service in Ashford' ),
            array( 'key' => 'field_ep_typ_hero_desc', 'label' => 'Hero Description', 'name' => 'vaccine_hero_description', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Protect yourself against typhoid fever with our expert travel health service. Available as a single injection or oral capsules.' ),
            array( 'key' => 'field_ep_typ_hero_image', 'label' => 'Hero Background Image', 'name' => 'vaccine_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'instructions' => 'Background image for the hero section. Recommended size: 1600x900px.' ),
            array( 'key' => 'field_ep_typ_cta_text', 'label' => 'CTA Button Text', 'name' => 'vaccine_cta_text', 'type' => 'text', 'default_value' => 'Book Typhoid Vaccination' ),
            array( 'key' => 'field_ep_typ_cta_url', 'label' => 'CTA Button URL', 'name' => 'vaccine_cta_url', 'type' => 'url', 'instructions' => 'Leave blank to use booking page URL.' ),
            array( 'key' => 'field_ep_typ_phone', 'label' => 'Phone (digits)', 'name' => 'vaccine_phone', 'type' => 'text', 'default_value' => '01784255222' ),
            array( 'key' => 'field_ep_typ_phone_display', 'label' => 'Phone (display)', 'name' => 'vaccine_phone_display', 'type' => 'text', 'default_value' => 'Call 01784 255 222' ),
            array(
                'key'        => 'field_ep_typ_hero_badges',
                'label'      => 'Hero Badges',
                'name'       => 'vaccine_hero_badges',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_typ_hero_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $typ_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── P2. Protection Section ───────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_typ_protect',
        'title'    => 'Typhoid — Protection',
        'fields'   => array(
            array( 'key' => 'field_ep_typ_protect_badge', 'label' => 'Badge Text', 'name' => 'vaccine_protect_badge', 'type' => 'text', 'default_value' => 'ESSENTIAL PROTECTION' ),
            array( 'key' => 'field_ep_typ_protect_title', 'label' => 'Title', 'name' => 'vaccine_protect_title', 'type' => 'text', 'default_value' => 'Safe & Effective Typhoid Prevention' ),
            array( 'key' => 'field_ep_typ_protect_desc', 'label' => 'Description', 'name' => 'vaccine_protect_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Choose the vaccination method that suits you best' ),
            array( 'key' => 'field_ep_typ_protect_image', 'label' => 'Image', 'name' => 'vaccine_protect_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_typ_protect_image_alt', 'label' => 'Image Alt Text', 'name' => 'vaccine_protect_image_alt', 'type' => 'text', 'default_value' => 'Travel health consultation' ),
            array( 'key' => 'field_ep_typ_protect_nametag_name', 'label' => 'Name Tag — Name', 'name' => 'vaccine_protect_nametag_name', 'type' => 'text', 'default_value' => 'Expert Advice' ),
            array( 'key' => 'field_ep_typ_protect_nametag_role', 'label' => 'Name Tag — Role', 'name' => 'vaccine_protect_nametag_role', 'type' => 'text', 'default_value' => 'Travel Health Team' ),
            array( 'key' => 'field_ep_typ_protect_highlight', 'label' => 'Highlight Text', 'name' => 'vaccine_protect_highlight', 'type' => 'text', 'default_value' => 'Recommended for High-Risk Areas' ),
            array( 'key' => 'field_ep_typ_protect_subtitle', 'label' => 'Subtitle', 'name' => 'vaccine_protect_subtitle', 'type' => 'text', 'default_value' => 'Two Ways to Protect Yourself' ),
            array( 'key' => 'field_ep_typ_protect_text', 'label' => 'Body Text', 'name' => 'vaccine_protect_text', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Typhoid fever is a serious bacterial infection spread through contaminated food and water. We offer both the single-dose injection and the oral capsule course, giving you flexibility in how you get protected.' ),
            array(
                'key'        => 'field_ep_typ_protect_features',
                'label'      => 'Features',
                'name'       => 'vaccine_protect_features',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_typ_protect_feat_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe' ),
                    array( 'key' => 'field_ep_typ_protect_feat_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_typ_protect_feat_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $typ_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── P3. Stats Bar ────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_typ_stats',
        'title'    => 'Typhoid — Stats Bar',
        'fields'   => array(
            array(
                'key'        => 'field_ep_typ_stats',
                'label'      => 'Stats',
                'name'       => 'vaccine_stats',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_typ_stat_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-shield-halved' ),
                    array( 'key' => 'field_ep_typ_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'field_ep_typ_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $typ_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── P4. About Section ────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_typ_about',
        'title'    => 'Typhoid — About',
        'fields'   => array(
            array( 'key' => 'field_ep_typ_about_badge', 'label' => 'Badge Text', 'name' => 'vaccine_about_badge', 'type' => 'text', 'default_value' => 'ABOUT THE DISEASE' ),
            array( 'key' => 'field_ep_typ_about_title', 'label' => 'Title', 'name' => 'vaccine_about_title', 'type' => 'text', 'default_value' => 'What is Typhoid Fever?' ),
            array( 'key' => 'field_ep_typ_about_desc', 'label' => 'Description', 'name' => 'vaccine_about_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'A bacterial infection that can be serious if not treated' ),
            array( 'key' => 'field_ep_typ_about_image', 'label' => 'Image', 'name' => 'vaccine_about_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
            array( 'key' => 'field_ep_typ_about_image_alt', 'label' => 'Image Alt Text', 'name' => 'vaccine_about_image_alt', 'type' => 'text', 'default_value' => 'Street food market in Asia' ),
            array(
                'key'        => 'field_ep_typ_about_cards',
                'label'      => 'Info Cards',
                'name'       => 'vaccine_about_cards',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_typ_about_card_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-bacteria' ),
                    array( 'key' => 'field_ep_typ_about_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_typ_about_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $typ_location,
        'menu_order'            => 15,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── P5. Who Needs Vaccination ────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_typ_needs',
        'title'    => 'Typhoid — Who Needs Vaccination',
        'fields'   => array(
            array( 'key' => 'field_ep_typ_needs_badge', 'label' => 'Badge Text', 'name' => 'vaccine_needs_badge', 'type' => 'text', 'default_value' => 'WHO NEEDS VACCINATION' ),
            array( 'key' => 'field_ep_typ_needs_title', 'label' => 'Title', 'name' => 'vaccine_needs_title', 'type' => 'text', 'default_value' => 'Should you get vaccinated?' ),
            array( 'key' => 'field_ep_typ_needs_desc', 'label' => 'Description', 'name' => 'vaccine_needs_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Vaccination is recommended for travellers visiting high-risk areas' ),
            array(
                'key'        => 'field_ep_typ_needs_cards',
                'label'      => 'Needs Cards',
                'name'       => 'vaccine_needs_cards',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 4,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_typ_needs_card_type', 'label' => 'Type', 'name' => 'type', 'type' => 'select', 'choices' => array( 'recommended' => 'Recommended', 'consider' => 'Consider' ), 'default_value' => 'recommended' ),
                    array( 'key' => 'field_ep_typ_needs_card_badge', 'label' => 'Badge', 'name' => 'badge', 'type' => 'text' ),
                    array( 'key' => 'field_ep_typ_needs_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_typ_needs_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'        => 'field_ep_typ_needs_card_items',
                        'label'      => 'Checklist Items',
                        'name'       => 'items',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'min'        => 0,
                        'max'        => 6,
                        'sub_fields' => array(
                            array( 'key' => 'field_ep_typ_needs_item_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
        ),
        'location'              => $typ_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── P6. Risk Zones ───────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_typ_risk',
        'title'    => 'Typhoid — Risk Zones',
        'fields'   => array(
            array( 'key' => 'field_ep_typ_risk_badge', 'label' => 'Badge Text', 'name' => 'vaccine_risk_badge', 'type' => 'text', 'default_value' => 'GLOBAL RISK ZONES' ),
            array( 'key' => 'field_ep_typ_risk_title', 'label' => 'Title', 'name' => 'vaccine_risk_title', 'type' => 'text', 'default_value' => 'Where is Typhoid found?' ),
            array( 'key' => 'field_ep_typ_risk_desc', 'label' => 'Description', 'name' => 'vaccine_risk_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Typhoid is found worldwide but is most common in areas with poor sanitation and hygiene.' ),
            array(
                'key'        => 'field_ep_typ_risk_zones',
                'label'      => 'Risk Zones',
                'name'       => 'vaccine_risk_zones',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 4,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_typ_risk_zone_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
                    array( 'key' => 'field_ep_typ_risk_zone_level', 'label' => 'Risk Level', 'name' => 'level', 'type' => 'select', 'choices' => array( 'asia' => 'Asia (amber)', 'africa' => 'Africa (purple)' ), 'default_value' => 'asia' ),
                    array( 'key' => 'field_ep_typ_risk_zone_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-globe-asia' ),
                    array( 'key' => 'field_ep_typ_risk_zone_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_typ_risk_zone_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array(
                        'key'        => 'field_ep_typ_risk_zone_countries',
                        'label'      => 'Countries',
                        'name'       => 'countries',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'min'        => 0,
                        'max'        => 20,
                        'sub_fields' => array(
                            array( 'key' => 'field_ep_typ_risk_country_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                        ),
                    ),
                ),
            ),
            array( 'key' => 'field_ep_typ_risk_footer', 'label' => 'Footer Text', 'name' => 'vaccine_risk_footer', 'type' => 'text', 'default_value' => "Unsure about your destination? We'll check the latest risk data for you." ),
        ),
        'location'              => $typ_location,
        'menu_order'            => 25,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── P7. FAQ ──────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_typ_faq',
        'title'    => 'Typhoid — FAQ',
        'fields'   => array(
            array( 'key' => 'field_ep_typ_faq_badge', 'label' => 'Badge Text', 'name' => 'vaccine_faq_badge', 'type' => 'text', 'default_value' => 'TYPHOID FAQs' ),
            array( 'key' => 'field_ep_typ_faq_title', 'label' => 'Title', 'name' => 'vaccine_faq_title', 'type' => 'text', 'default_value' => 'Common Questions' ),
            array(
                'key'        => 'field_ep_typ_faqs',
                'label'      => 'FAQs',
                'name'       => 'vaccine_faqs',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 10,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_typ_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_ep_typ_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $typ_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── P8. Final CTA ────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_typ_cta',
        'title'    => 'Typhoid — Final CTA',
        'fields'   => array(
            array(
                'key'        => 'field_ep_typ_cta_badges',
                'label'      => 'CTA Badges',
                'name'       => 'vaccine_cta_badges',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_typ_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_ep_typ_cta_title', 'label' => 'Title', 'name' => 'vaccine_cta_title', 'type' => 'text', 'default_value' => 'Protect your health while travelling' ),
            array( 'key' => 'field_ep_typ_cta_desc', 'label' => 'Description', 'name' => 'vaccine_cta_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your typhoid vaccination with our expert team today. Quick, convenient, and professional service in Ashford.' ),
        ),
        'location'              => $typ_location,
        'menu_order'            => 35,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ════════════════════════════════════════════════════════════════════════
    // R. HEPATITIS PAGE FIELDS
    // ════════════════════════════════════════════════════════════════════════

    $hep_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-hepatitis.php',
            ),
        ),
    );

    // ── R1. Hero ─────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_hep_hero',
        'title'    => 'Hepatitis — Hero',
        'fields'   => array(
            array( 'key' => 'field_ep_hep_hero_image', 'label' => 'Hero Background Image', 'name' => 'vaccine_hero_image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium', 'instructions' => 'Background image for the hero section. Recommended size: 1600x900px.' ),
        ),
        'location'              => $hep_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ════════════════════════════════════════════════════════════════════════
    // Q. BOOK APPOINTMENT PAGE FIELDS
    // ════════════════════════════════════════════════════════════════════════

    $book_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-book-appointment.php',
            ),
        ),
    );

    // ── Q1. Hero ────────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_hero',
        'title'    => 'Book Appointment — Hero',
        'fields'   => array(
            array( 'key' => 'field_ep_book_hero_badge', 'label' => 'Badge Text', 'name' => 'book_hero_badge', 'type' => 'text', 'default_value' => 'ONLINE BOOKING AVAILABLE' ),
            array( 'key' => 'field_ep_book_hero_title', 'label' => 'Title (HTML allowed)', 'name' => 'book_hero_title', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book Your <br /><span class="gradient-text">Appointment</span>', 'instructions' => 'HTML allowed for line breaks and gradient text spans.' ),
            array( 'key' => 'field_ep_book_hero_desc', 'label' => 'Description', 'name' => 'book_hero_description', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Choose your service below and find a time that suits you with our expert Ashford team. Same-day appointments often available.' ),
            array( 'key' => 'field_ep_book_hero_cta_text', 'label' => 'CTA Button Text', 'name' => 'book_hero_cta_text', 'type' => 'text', 'default_value' => 'Book Now' ),
            array(
                'key'        => 'field_ep_book_hero_trust',
                'label'      => 'Trust Pills',
                'name'       => 'book_hero_trust_pills',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_book_hero_trust_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-check-circle' ),
                    array( 'key' => 'field_ep_book_hero_trust_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q1b. Quick Book Card ──────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_qb',
        'title'    => 'Book Appointment — Quick Book Card',
        'fields'   => array(
            array( 'key' => 'field_ep_book_qb_heading', 'label' => 'Heading', 'name' => 'book_qb_heading', 'type' => 'text', 'default_value' => 'Book Your Visit' ),
            array( 'key' => 'field_ep_book_qb_available', 'label' => 'Availability Text', 'name' => 'book_qb_available_text', 'type' => 'text', 'default_value' => 'Same-day appointments available' ),
            array( 'key' => 'field_ep_book_qb_services_label', 'label' => 'Services Label', 'name' => 'book_qb_services_label', 'type' => 'text', 'default_value' => 'Choose a service to get started:' ),
            array(
                'key'        => 'field_ep_book_qb_services',
                'label'      => 'Quick Services',
                'name'       => 'book_qb_services',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_book_qb_svc_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-weight-scale', 'instructions' => 'Font Awesome class, e.g. fas fa-syringe' ),
                    array( 'key' => 'field_ep_book_qb_svc_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                ),
            ),
            array( 'key' => 'field_ep_book_qb_cta_text', 'label' => 'CTA Button Text', 'name' => 'book_qb_cta_text', 'type' => 'text', 'default_value' => 'View Available Times' ),
            array( 'key' => 'field_ep_book_qb_hours', 'label' => 'Hours Text', 'name' => 'book_qb_hours', 'type' => 'text', 'default_value' => 'Mon–Fri: 9am – 6pm' ),
            array( 'key' => 'field_ep_book_qb_confirm', 'label' => 'Confirmation Text', 'name' => 'book_qb_confirm_text', 'type' => 'text', 'default_value' => 'Instant confirmation' ),
            array( 'key' => 'field_ep_book_qb_badge', 'label' => 'Floating Badge Text', 'name' => 'book_qb_floating_badge', 'type' => 'text', 'default_value' => 'Free Parking Available' ),
        ),
        'location'              => $book_location,
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q2. How It Works ────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_process',
        'title'    => 'Book Appointment — How It Works',
        'fields'   => array(
            array( 'key' => 'field_ep_book_process_title', 'label' => 'Title', 'name' => 'book_process_title', 'type' => 'text', 'default_value' => 'How It Works' ),
            array(
                'key'        => 'field_ep_book_process_steps',
                'label'      => 'Steps',
                'name'       => 'book_process_steps',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 5,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_book_process_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-hand-pointer' ),
                    array( 'key' => 'field_ep_book_process_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_book_process_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q3. Stats Bar ───────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_stats',
        'title'    => 'Book Appointment — Stats Bar',
        'fields'   => array(
            array(
                'key'        => 'field_ep_book_stats',
                'label'      => 'Stats',
                'name'       => 'book_stats',
                'type'       => 'repeater',
                'layout'     => 'table',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_book_stat_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-clock' ),
                    array( 'key' => 'field_ep_book_stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                    array( 'key' => 'field_ep_book_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 10,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q4. Priority Services ───────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_services',
        'title'    => 'Book Appointment — Priority Services',
        'fields'   => array(
            array( 'key' => 'field_ep_book_services_badge', 'label' => 'Badge Text', 'name' => 'book_services_badge', 'type' => 'text', 'default_value' => 'PRIORITY SERVICES' ),
            array( 'key' => 'field_ep_book_services_title', 'label' => 'Title', 'name' => 'book_services_title', 'type' => 'text', 'default_value' => 'Most Popular Services' ),
            array(
                'key'        => 'field_ep_book_priority_services',
                'label'      => 'Services',
                'name'       => 'book_priority_services',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_book_ps_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-weight-scale' ),
                    array( 'key' => 'field_ep_book_ps_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_book_ps_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_ep_book_ps_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text', 'instructions' => 'e.g. £125' ),
                    array( 'key' => 'field_ep_book_ps_price_label', 'label' => 'Price Label', 'name' => 'price_label', 'type' => 'text', 'instructions' => 'e.g. / month starting price' ),
                    array( 'key' => 'field_ep_book_ps_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'medium' ),
                    array( 'key' => 'field_ep_book_ps_popular', 'label' => 'Show POPULAR Badge', 'name' => 'popular', 'type' => 'true_false', 'default_value' => 0 ),
                    array( 'key' => 'field_ep_book_ps_refund', 'label' => 'Refund Badge Text', 'name' => 'refund_text', 'type' => 'text', 'instructions' => 'Leave blank to hide. e.g. Refundable with 2+ vaccines' ),
                    array( 'key' => 'field_ep_book_ps_btn', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text', 'default_value' => 'Book Consultation' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 15,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q5. Additional Services ─────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_additional',
        'title'    => 'Book Appointment — Additional Services',
        'fields'   => array(
            array( 'key' => 'field_ep_book_add_badge', 'label' => 'Badge Text', 'name' => 'book_additional_badge', 'type' => 'text', 'default_value' => 'ESSENTIAL HEALTHCARE' ),
            array( 'key' => 'field_ep_book_add_title', 'label' => 'Title', 'name' => 'book_additional_title', 'type' => 'text', 'default_value' => 'Everyday Health Services' ),
            array(
                'key'        => 'field_ep_book_additional_services',
                'label'      => 'Services',
                'name'       => 'book_additional_services',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_book_as_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fas fa-syringe' ),
                    array( 'key' => 'field_ep_book_as_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                    array( 'key' => 'field_ep_book_as_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                    array( 'key' => 'field_ep_book_as_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text', 'instructions' => 'e.g. £15 or VARIES' ),
                    array( 'key' => 'field_ep_book_as_btn', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text', 'default_value' => 'Book Service' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 20,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q6. Amelia Booking Widget ───────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_amelia',
        'title'    => 'Book Appointment — Booking Widget',
        'fields'   => array(
            array( 'key' => 'field_ep_book_amelia_title', 'label' => 'Title', 'name' => 'book_amelia_title', 'type' => 'text', 'default_value' => 'Select Your Appointment Time' ),
            array( 'key' => 'field_ep_book_amelia_desc', 'label' => 'Description', 'name' => 'book_amelia_description', 'type' => 'text', 'default_value' => 'Choose a convenient time with our Ashford healthcare team' ),
            array( 'key' => 'field_ep_book_amelia_shortcode', 'label' => 'Amelia Shortcode', 'name' => 'book_amelia_shortcode', 'type' => 'text', 'default_value' => '[ameliabooking]', 'instructions' => 'The Amelia booking plugin shortcode to embed. e.g. [ameliabooking] or [ameliabooking category=1]' ),
        ),
        'location'              => $book_location,
        'menu_order'            => 25,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q7. Testimonials ────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_testimonials',
        'title'    => 'Book Appointment — Testimonials',
        'fields'   => array(
            array( 'key' => 'field_ep_book_testi_title', 'label' => 'Title', 'name' => 'book_testimonials_title', 'type' => 'text', 'default_value' => 'What Our Patients Say' ),
            array(
                'key'        => 'field_ep_book_testimonials',
                'label'      => 'Testimonials',
                'name'       => 'book_testimonials',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 6,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_book_testi_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'textarea', 'rows' => 3 ),
                    array( 'key' => 'field_ep_book_testi_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                    array( 'key' => 'field_ep_book_testi_service', 'label' => 'Service', 'name' => 'service', 'type' => 'text', 'instructions' => 'e.g. Travel Health Patient' ),
                    array( 'key' => 'field_ep_book_testi_avatar', 'label' => 'Avatar', 'name' => 'avatar', 'type' => 'image', 'return_format' => 'id', 'preview_size' => 'thumbnail' ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 30,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q8. FAQ ─────────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_faq',
        'title'    => 'Book Appointment — FAQ',
        'fields'   => array(
            array( 'key' => 'field_ep_book_faq_badge', 'label' => 'Badge Text', 'name' => 'book_faq_badge', 'type' => 'text', 'default_value' => 'EVERYTHING YOU NEED TO KNOW' ),
            array( 'key' => 'field_ep_book_faq_title', 'label' => 'Title', 'name' => 'book_faq_title', 'type' => 'text', 'default_value' => 'Common Questions' ),
            array( 'key' => 'field_ep_book_faq_desc', 'label' => 'Description', 'name' => 'book_faq_description', 'type' => 'text', 'default_value' => 'Clear answers about our services, location, and team to help you book with confidence.' ),
            array(
                'key'        => 'field_ep_book_faqs',
                'label'      => 'FAQs',
                'name'       => 'book_faqs',
                'type'       => 'repeater',
                'layout'     => 'block',
                'min'        => 0,
                'max'        => 10,
                'sub_fields' => array(
                    array( 'key' => 'field_ep_book_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                    array( 'key' => 'field_ep_book_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 3 ),
                ),
            ),
        ),
        'location'              => $book_location,
        'menu_order'            => 35,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── Q9. Final CTA ───────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_book_cta',
        'title'    => 'Book Appointment — Final CTA',
        'fields'   => array(
            array( 'key' => 'field_ep_book_cta_title', 'label' => 'Title', 'name' => 'book_cta_title', 'type' => 'text', 'default_value' => 'Need Help Booking?' ),
            array( 'key' => 'field_ep_book_cta_desc', 'label' => 'Description', 'name' => 'book_cta_description', 'type' => 'text', 'default_value' => 'Our friendly Ashford team is here to answer your questions' ),
            array( 'key' => 'field_ep_book_cta_hours', 'label' => 'Hours Text', 'name' => 'book_cta_hours', 'type' => 'text', 'default_value' => 'Mon-Fri: 9am-6pm' ),
        ),
        'location'              => $book_location,
        'menu_order'            => 40,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ═══════════════════════════════════════════════════════════════════════
    // S — HEALTH HUB PAGE
    // ═══════════════════════════════════════════════════════════════════════

    $hh_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-health-hub.php',
            ),
        ),
    );

    // ── S1. Hero ──────────────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_hh_hero',
        'title'    => 'Health Hub — Hero',
        'fields'   => array(
            array(
                'key'           => 'field_ep_hh_badge_text',
                'label'         => 'Badge Text',
                'name'          => 'hh_badge_text',
                'type'          => 'text',
                'default_value' => 'HEALTH HUB',
            ),
            array(
                'key'           => 'field_ep_hh_hero_title',
                'label'         => 'Hero Title',
                'name'          => 'hh_hero_title',
                'type'          => 'textarea',
                'rows'          => 3,
                'new_lines'     => '',
                'instructions'  => 'Supports <span class="gradient-text">highlighted text</span> for gradient effect.',
                'default_value' => 'Expert insights on weight loss, travel health, and <span class="gradient-text">living your healthiest life</span>',
            ),
        ),
        'location'              => $hh_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── S2. CTA Section ──────────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_hh_cta',
        'title'    => 'Health Hub — CTA Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_hh_cta_title',
                'label'         => 'CTA Title',
                'name'          => 'hh_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready to Transform Your Health?',
            ),
            array(
                'key'           => 'field_ep_hh_cta_description',
                'label'         => 'CTA Description',
                'name'          => 'hh_cta_description',
                'type'          => 'text',
                'default_value' => 'Expert advice from pharmacists you can trust',
            ),
            array(
                'key'           => 'field_ep_hh_cta_text',
                'label'         => 'CTA Button Text',
                'name'          => 'hh_cta_text',
                'type'          => 'text',
                'default_value' => 'Explore Our Services',
            ),
            array(
                'key'           => 'field_ep_hh_cta_url',
                'label'         => 'CTA Button URL',
                'name'          => 'hh_cta_url',
                'type'          => 'text',
                'instructions'  => 'Leave blank to default to booking page.',
                'default_value' => '',
            ),
        ),
        'location'              => $hh_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── S3. Social Proof Section ──────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_hh_social_proof',
        'title'    => 'Health Hub — Social Proof / Google Rating',
        'fields'   => array(
            array(
                'key'           => 'field_ep_hh_social_rating_score',
                'label'         => 'Rating Score',
                'name'          => 'hh_social_rating_score',
                'type'          => 'text',
                'instructions'  => 'Leave blank to use global Google Rating from Pharmacy Settings.',
                'default_value' => '',
            ),
            array(
                'key'           => 'field_ep_hh_social_rating_count',
                'label'         => 'Rating Count Text',
                'name'          => 'hh_social_rating_count',
                'type'          => 'text',
                'default_value' => 'Based on 300+ reviews',
            ),
            array(
                'key'           => 'field_ep_hh_social_rating_location',
                'label'         => 'Rating Location',
                'name'          => 'hh_social_rating_location',
                'type'          => 'text',
                'instructions'  => 'Leave blank to use global Pharmacy Town.',
                'default_value' => '',
            ),
            array(
                'key'           => 'field_ep_hh_social_eyebrow',
                'label'         => 'Eyebrow Text',
                'name'          => 'hh_social_eyebrow',
                'type'          => 'text',
                'default_value' => 'TRUSTED BY ASHFORD',
            ),
            array(
                'key'           => 'field_ep_hh_social_headline',
                'label'         => 'Headline',
                'name'          => 'hh_social_headline',
                'type'          => 'text',
                'default_value' => 'Join hundreds of Ashford patients who\'ve already made the switch',
            ),
            array(
                'key'           => 'field_ep_hh_social_subtext',
                'label'         => 'Subtext',
                'name'          => 'hh_social_subtext',
                'type'          => 'textarea',
                'rows'          => 2,
                'new_lines'     => '',
                'default_value' => 'Expert health advice backed by real clinical experience and outstanding patient reviews',
            ),
        ),
        'location'              => $hh_location,
        'menu_order'            => 2,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // ── S4. In-Grid CTA Card ───────────────────────────────────────────────
    acf_add_local_field_group( array(
        'key'      => 'group_ep_hh_grid_cta',
        'title'    => 'Health Hub — In-Grid CTA Card',
        'fields'   => array(
            array(
                'key'           => 'field_ep_hh_grid_cta_title',
                'label'         => 'Card Title',
                'name'          => 'hh_grid_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready to Book Your Consultation?',
            ),
            array(
                'key'           => 'field_ep_hh_grid_cta_text',
                'label'         => 'Card Subtext',
                'name'          => 'hh_grid_cta_text',
                'type'          => 'text',
                'default_value' => 'Same-day appointments available · No GP referral needed',
            ),
            array(
                'key'           => 'field_ep_hh_grid_cta_button',
                'label'         => 'Button Text',
                'name'          => 'hh_grid_cta_button',
                'type'          => 'text',
                'default_value' => 'Check Availability',
            ),
            array(
                'key'           => 'field_ep_hh_grid_cta_url',
                'label'         => 'Button URL',
                'name'          => 'hh_grid_cta_url',
                'type'          => 'text',
                'instructions'  => 'Leave blank to default to booking page.',
                'default_value' => '',
            ),
        ),
        'location'              => $hh_location,
        'menu_order'            => 3,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // S — Reviewer Profile Page
    // =========================================================================

    $rp_location = array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-reviewer-profile.php',
            ),
        ),
    );

    // S1 — Reviewer Profile: Hero
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_hero',
        'title'                 => 'Reviewer Profile — Hero',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_profile_image',
                'label'         => 'Profile Photo',
                'name'          => 'rp_profile_image',
                'type'          => 'image',
                'return_format' => 'id',
                'preview_size'  => 'medium',
                'instructions'  => 'Large, high-quality headshot. Falls back to Pharmacy Settings pharmacist image.',
            ),
            array(
                'key'           => 'field_ep_rp_name',
                'label'         => 'Full Name',
                'name'          => 'rp_name',
                'type'          => 'text',
                'default_value' => 'Dilip Modhvadia',
            ),
            array(
                'key'           => 'field_ep_rp_title',
                'label'         => 'Job Title',
                'name'          => 'rp_title',
                'type'          => 'text',
                'default_value' => 'Lead Pharmacist & Independent Prescriber',
            ),
            array(
                'key'           => 'field_ep_rp_gphc_number',
                'label'         => 'GPhC Number',
                'name'          => 'rp_gphc_number',
                'type'          => 'text',
                'default_value' => '2050606',
            ),
            array(
                'key'           => 'field_ep_rp_linkedin_url',
                'label'         => 'LinkedIn URL',
                'name'          => 'rp_linkedin_url',
                'type'          => 'url',
                'default_value' => 'https://uk.linkedin.com/in/dilip-modhvadia-60394a137',
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // S2 — Reviewer Profile: Bio
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_bio',
        'title'                 => 'Reviewer Profile — Bio',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_bio',
                'label'         => 'Biography',
                'name'          => 'rp_bio',
                'type'          => 'textarea',
                'rows'          => 6,
                'default_value' => 'With over 15 years of experience, Dilip leads our clinical team across Ashford, Chertsey, and Walton-on-Thames. As an Independent Prescriber, he specialises in weight loss treatment, travel health, and ear wax removal—the services most patients wish they\'d accessed sooner. His approach is straightforward: no GP referral needed, no waiting lists, and treatment plans built around your life, not a system designed to make you wait.',
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // S2b — Reviewer Profile: Highlight Card
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_highlight',
        'title'                 => 'Reviewer Profile — Highlight Card',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_highlight_number',
                'label'         => 'Big Number',
                'name'          => 'rp_highlight_number',
                'type'          => 'text',
                'instructions'  => 'The large stat shown at the top of the card, e.g. "15+", "20+", "10K".',
                'default_value' => '15+',
            ),
            array(
                'key'           => 'field_ep_rp_highlight_label',
                'label'         => 'Number Label',
                'name'          => 'rp_highlight_label',
                'type'          => 'text',
                'instructions'  => 'Text below the big number, e.g. "Years of Clinical Experience".',
                'default_value' => 'Years of Clinical Experience',
            ),
            array(
                'key'           => 'field_ep_rp_highlight_stats',
                'label'         => 'Quick Stats',
                'name'          => 'rp_highlight_stats',
                'type'          => 'repeater',
                'layout'        => 'block',
                'button_label'  => 'Add Stat',
                'min'           => 1,
                'max'           => 5,
                'instructions'  => 'Short facts shown below the divider. Each needs a Font Awesome icon class and a short text.',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_rp_highlight_stat_icon',
                        'label'         => 'Icon Class',
                        'name'          => 'highlight_stat_icon',
                        'type'          => 'text',
                        'instructions'  => 'Font Awesome icon class without "fas", e.g. "fa-map-marker-alt", "fa-user-group".',
                        'default_value' => 'fa-check',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_ep_rp_highlight_stat_text',
                        'label'         => 'Text',
                        'name'          => 'highlight_stat_text',
                        'type'          => 'text',
                        'instructions'  => 'e.g. "3 locations across Surrey"',
                        'wrapper'       => array( 'width' => '70' ),
                    ),
                ),
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // S2c — Reviewer Profile: Team Members (highlight card)
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_team',
        'title'                 => 'Reviewer Profile — Team Members',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_team_label',
                'label'         => 'Team Label',
                'name'          => 'rp_team_label',
                'type'          => 'text',
                'instructions'  => 'Text shown below the avatar stack, e.g. "Your Clinical Team".',
                'default_value' => 'Your Clinical Team',
            ),
            array(
                'key'           => 'field_ep_rp_team_members',
                'label'         => 'Team Members',
                'name'          => 'rp_team_members',
                'type'          => 'repeater',
                'layout'        => 'block',
                'button_label'  => 'Add Team Member',
                'min'           => 0,
                'max'           => 4,
                'instructions'  => 'Colleagues who appear alongside the lead pharmacist. Their photos display as overlapping avatars on the highlight card.',
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_rp_team_member_name',
                        'label'         => 'Name',
                        'name'          => 'team_member_name',
                        'type'          => 'text',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_ep_rp_team_member_role',
                        'label'         => 'Role',
                        'name'          => 'team_member_role',
                        'type'          => 'text',
                        'instructions'  => 'e.g. "Pharmacy Technician"',
                        'wrapper'       => array( 'width' => '30' ),
                    ),
                    array(
                        'key'           => 'field_ep_rp_team_member_photo',
                        'label'         => 'Photo',
                        'name'          => 'team_member_photo',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'thumbnail',
                        'wrapper'       => array( 'width' => '40' ),
                    ),
                ),
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // S2d — Reviewer Profile: Social Proof (Google Rating)
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_social_proof',
        'title'                 => 'Reviewer Profile — Social Proof',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_social_rating_score',
                'label'         => 'Rating Score',
                'name'          => 'rp_social_rating_score',
                'type'          => 'text',
                'instructions'  => 'Leave blank to pull from Pharmacy Settings > Branding > Google Rating.',
                'default_value' => '',
            ),
            array(
                'key'           => 'field_ep_rp_social_rating_count',
                'label'         => 'Rating Count Text',
                'name'          => 'rp_social_rating_count',
                'type'          => 'text',
                'default_value' => 'Based on 300+ reviews',
            ),
            array(
                'key'           => 'field_ep_rp_social_rating_location',
                'label'         => 'Rating Location',
                'name'          => 'rp_social_rating_location',
                'type'          => 'text',
                'instructions'  => 'Leave blank to auto-generate from Pharmacy Settings town.',
                'default_value' => '',
            ),
            array(
                'key'           => 'field_ep_rp_social_eyebrow',
                'label'         => 'Eyebrow Text',
                'name'          => 'rp_social_eyebrow',
                'type'          => 'text',
                'default_value' => '',
                'instructions'  => 'e.g. "TRUSTED BY ASHFORD". Leave blank to auto-generate from town name.',
            ),
            array(
                'key'           => 'field_ep_rp_social_headline',
                'label'         => 'Headline',
                'name'          => 'rp_social_headline',
                'type'          => 'text',
                'default_value' => '',
                'instructions'  => 'Leave blank for default: "Your health, guided by one of [town]\'s most experienced pharmacists".',
            ),
            array(
                'key'           => 'field_ep_rp_social_subtext',
                'label'         => 'Subtext',
                'name'          => 'rp_social_subtext',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Over 15 years of clinical experience, hundreds of 5-star reviews, and a commitment to face-to-face care that puts you first.',
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 2,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // S3 — Reviewer Profile: Specialisms
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_specialisms',
        'title'                 => 'Reviewer Profile — Specialisms',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_specialisms',
                'label'         => 'Specialisms',
                'name'          => 'rp_specialisms',
                'type'          => 'repeater',
                'layout'        => 'block',
                'button_label'  => 'Add Specialism',
                'max'           => 10,
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_rp_specialism_title',
                        'label'         => 'Specialism Title',
                        'name'          => 'specialism_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_rp_specialism_detail',
                        'label'         => 'Detail / Subtitle',
                        'name'          => 'specialism_detail',
                        'type'          => 'text',
                        'instructions'  => 'e.g. "Mounjaro, Wegovy, Saxenda"',
                    ),
                ),
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 2,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // S4 — Reviewer Profile: Qualifications
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_qualifications',
        'title'                 => 'Reviewer Profile — Qualifications',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_qualifications',
                'label'         => 'Qualifications',
                'name'          => 'rp_qualifications',
                'type'          => 'repeater',
                'layout'        => 'block',
                'button_label'  => 'Add Qualification',
                'max'           => 15,
                'sub_fields'    => array(
                    array(
                        'key'           => 'field_ep_rp_qual_name',
                        'label'         => 'Qualification Name',
                        'name'          => 'qual_name',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_ep_rp_qual_institution',
                        'label'         => 'Institution',
                        'name'          => 'qual_institution',
                        'type'          => 'text',
                        'instructions'  => 'Leave blank if not applicable.',
                    ),
                ),
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 3,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // S5 — Reviewer Profile: Lead Magnet
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_leadmagnet',
        'title'                 => 'Reviewer Profile — Newsletter Signup',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_lm_heading',
                'label'         => 'Heading',
                'name'          => 'rp_lm_heading',
                'type'          => 'text',
                'default_value' => 'Get Expert Health Advice Delivered to Your Inbox',
            ),
            array(
                'key'           => 'field_ep_rp_lm_subheading',
                'label'         => 'Subheading',
                'name'          => 'rp_lm_subheading',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Latest treatment updates, health tips, and appointment availability—no spam, just useful information.',
            ),
            array(
                'key'           => 'field_ep_rp_lm_button_text',
                'label'         => 'Button Text',
                'name'          => 'rp_lm_button_text',
                'type'          => 'text',
                'default_value' => 'Subscribe',
            ),
            array(
                'key'           => 'field_ep_rp_lm_disclaimer',
                'label'         => 'Disclaimer Text',
                'name'          => 'rp_lm_disclaimer',
                'type'          => 'text',
                'default_value' => 'Opt out at any time by clicking the unsubscribe link or by contacting us.',
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 4,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // S6 — Reviewer Profile: CTA
    acf_add_local_field_group( array(
        'key'                   => 'group_ep_rp_cta',
        'title'                 => 'Reviewer Profile — Final CTA',
        'fields'                => array(
            array(
                'key'           => 'field_ep_rp_cta_title',
                'label'         => 'CTA Title',
                'name'          => 'rp_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready to Book a Consultation?',
            ),
            array(
                'key'           => 'field_ep_rp_cta_description',
                'label'         => 'CTA Description',
                'name'          => 'rp_cta_description',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Speak directly with Dilip and our clinical team — no waiting lists, no referrals needed.',
            ),
            array(
                'key'           => 'field_ep_rp_cta_button_text',
                'label'         => 'CTA Button Text',
                'name'          => 'rp_cta_button_text',
                'type'          => 'text',
                'default_value' => 'Book an Appointment',
            ),
            array(
                'key'           => 'field_ep_rp_cta_button_url',
                'label'         => 'CTA Button URL',
                'name'          => 'rp_cta_button_url',
                'type'          => 'url',
                'instructions'  => 'Leave blank to default to booking page.',
            ),
        ),
        'location'              => $rp_location,
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

}
add_action( 'acf/init', 'ep_register_acf_field_groups' );
