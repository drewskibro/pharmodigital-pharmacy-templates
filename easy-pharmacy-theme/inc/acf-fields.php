<?php
/**
 * ACF Field Groups Configuration
 *
 * Registers all Advanced Custom Fields field groups for the Easy Pharmacy
 * WordPress theme, including options page fields, home page fields,
 * blog post fields, and the flexible content page builder.
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
                'required'      => 0,
            ),
            array(
                'key'           => 'field_ep_pharmacy_logo',
                'label'         => 'Pharmacy Logo',
                'name'          => 'pharmacy_logo',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),
            array(
                'key'           => 'field_ep_footer_tagline',
                'label'         => 'Footer Tagline',
                'name'          => 'footer_tagline',
                'type'          => 'textarea',
                'rows'          => 3,
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
                'key'           => 'field_ep_address_line_1',
                'label'         => 'Address Line 1',
                'name'          => 'address_line_1',
                'type'          => 'text',
                'default_value' => '123 High Street',
            ),
            array(
                'key'           => 'field_ep_address_line_2',
                'label'         => 'Address Line 2',
                'name'          => 'address_line_2',
                'type'          => 'text',
                'default_value' => 'Ashford, Surrey TW15 1AB',
            ),
            array(
                'key'   => 'field_ep_google_maps_url',
                'label' => 'Google Maps URL',
                'name'  => 'google_maps_url',
                'type'  => 'url',
            ),
            array(
                'key'  => 'field_ep_parking_info',
                'label' => 'Parking Info',
                'name'  => 'parking_info',
                'type'  => 'textarea',
                'rows'  => 3,
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
                'label'         => 'Hours Weekday (Short)',
                'name'          => 'hours_weekday',
                'type'          => 'text',
                'default_value' => 'Mon-Fri: 9am-6pm',
            ),
            array(
                'key'           => 'field_ep_hours_weekend',
                'label'         => 'Hours Weekend (Short)',
                'name'          => 'hours_weekend',
                'type'          => 'text',
                'default_value' => 'Sat: 9am-1pm',
            ),
            array(
                'key'           => 'field_ep_hours_weekday_detail',
                'label'         => 'Hours Weekday (Detail)',
                'name'          => 'hours_weekday_detail',
                'type'          => 'text',
                'default_value' => 'Mon – Fri: 9:00am – 6:00pm',
            ),
            array(
                'key'           => 'field_ep_hours_saturday_detail',
                'label'         => 'Hours Saturday (Detail)',
                'name'          => 'hours_saturday_detail',
                'type'          => 'text',
                'default_value' => 'Saturday: 9:00am – 1:00pm',
            ),
            array(
                'key'           => 'field_ep_hours_sunday_detail',
                'label'         => 'Hours Sunday (Detail)',
                'name'          => 'hours_sunday_detail',
                'type'          => 'text',
                'default_value' => 'Sunday: Closed',
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
                'key'           => 'field_ep_gphc_pharmacy_number',
                'label'         => 'GPhC Pharmacy Number',
                'name'          => 'gphc_pharmacy_number',
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
                'key'           => 'field_ep_gphc_pharmacist_number',
                'label'         => 'GPhC Pharmacist Number',
                'name'          => 'gphc_pharmacist_number',
                'type'          => 'text',
                'default_value' => '2050606',
            ),
            array(
                'key'           => 'field_ep_superintendent_pharmacist',
                'label'         => 'Superintendent Pharmacist',
                'name'          => 'superintendent_pharmacist',
                'type'          => 'text',
                'default_value' => 'Dilip Modhvadia',
            ),
            array(
                'key'   => 'field_ep_gphc_verify_url',
                'label' => 'GPhC Verify URL',
                'name'  => 'gphc_verify_url',
                'type'  => 'url',
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
                'default_value' => 4.7,
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
                'key'           => 'field_ep_google_rating_label',
                'label'         => 'Google Rating Label',
                'name'          => 'google_rating_label',
                'type'          => 'text',
                'default_value' => 'Excellent',
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
                'label'         => 'Hero Badge Text',
                'name'          => 'hero_badge_text',
                'type'          => 'text',
                'default_value' => 'Serving Ashford, Chertsey & Surrounds',
            ),
            array(
                'key'           => 'field_ep_hero_title_line_1',
                'label'         => 'Hero Title Line 1',
                'name'          => 'hero_title_line_1',
                'type'          => 'text',
                'default_value' => 'Lose Weight.',
            ),
            array(
                'key'           => 'field_ep_hero_title_line_2',
                'label'         => 'Hero Title Line 2',
                'name'          => 'hero_title_line_2',
                'type'          => 'text',
                'default_value' => 'Travel Safe.',
            ),
            array(
                'key'           => 'field_ep_hero_title_line_3',
                'label'         => 'Hero Title Line 3',
                'name'          => 'hero_title_line_3',
                'type'          => 'text',
                'default_value' => 'Live Better.',
            ),
            array(
                'key'   => 'field_ep_hero_description',
                'label' => 'Hero Description',
                'name'  => 'hero_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),
            array(
                'key'           => 'field_ep_hero_cta_text',
                'label'         => 'Hero CTA Text',
                'name'          => 'hero_cta_text',
                'type'          => 'text',
                'default_value' => 'Start Your Journey',
            ),
            array(
                'key'   => 'field_ep_hero_cta_url',
                'label' => 'Hero CTA URL',
                'name'  => 'hero_cta_url',
                'type'  => 'url',
            ),
            array(
                'key'   => 'field_ep_hero_secondary_cta_text',
                'label' => 'Hero Secondary CTA Text',
                'name'  => 'hero_secondary_cta_text',
                'type'  => 'text',
            ),
            array(
                'key'           => 'field_ep_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'hero_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),
            array(
                'key'   => 'field_ep_hero_testimonial_quote',
                'label' => 'Hero Testimonial Quote',
                'name'  => 'hero_testimonial_quote',
                'type'  => 'textarea',
                'rows'  => 2,
            ),
            array(
                'key'   => 'field_ep_hero_testimonial_author',
                'label' => 'Hero Testimonial Author',
                'name'  => 'hero_testimonial_author',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_hero_testimonial_result',
                'label' => 'Hero Testimonial Result',
                'name'  => 'hero_testimonial_result',
                'type'  => 'text',
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
        'title'    => 'Stats Section',
        'fields'   => array(
            array(
                'key'          => 'field_ep_stats',
                'label'        => 'Stats',
                'name'         => 'stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_stat_icon',
                        'label' => 'Icon',
                        'name'  => 'stat_icon',
                        'type'  => 'text',
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
                'key'   => 'field_ep_treatments_badge',
                'label' => 'Treatments Badge',
                'name'  => 'treatments_badge',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_treatments_title',
                'label' => 'Treatments Title',
                'name'  => 'treatments_title',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_treatments_description',
                'label' => 'Treatments Description',
                'name'  => 'treatments_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),
            array(
                'key'          => 'field_ep_treatments',
                'label'        => 'Treatments',
                'name'         => 'treatments',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Treatment',
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
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
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
                'key'   => 'field_ep_pharmacist_badge',
                'label' => 'Pharmacist Badge',
                'name'  => 'pharmacist_badge',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_pharmacist_name',
                'label' => 'Pharmacist Name',
                'name'  => 'pharmacist_name',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_pharmacist_role',
                'label' => 'Pharmacist Role',
                'name'  => 'pharmacist_role',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_pharmacist_bio',
                'label' => 'Pharmacist Bio',
                'name'  => 'pharmacist_bio',
                'type'  => 'textarea',
                'rows'  => 4,
            ),
            array(
                'key'   => 'field_ep_pharmacist_quote',
                'label' => 'Pharmacist Quote',
                'name'  => 'pharmacist_quote',
                'type'  => 'textarea',
                'rows'  => 3,
            ),
            array(
                'key'           => 'field_ep_pharmacist_image',
                'label'         => 'Pharmacist Image',
                'name'          => 'pharmacist_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),
            array(
                'key'   => 'field_ep_pharmacist_video_url',
                'label' => 'Pharmacist Video URL',
                'name'  => 'pharmacist_video_url',
                'type'  => 'url',
            ),
            array(
                'key'   => 'field_ep_pharmacist_experience_years',
                'label' => 'Pharmacist Experience (Years)',
                'name'  => 'pharmacist_experience_years',
                'type'  => 'text',
            ),
            array(
                'key'          => 'field_ep_pharmacist_credentials',
                'label'        => 'Pharmacist Credentials',
                'name'         => 'pharmacist_credentials',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Credential',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_credential_icon',
                        'label' => 'Icon',
                        'name'  => 'credential_icon',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_credential_text',
                        'label' => 'Text',
                        'name'  => 'credential_text',
                        'type'  => 'text',
                    ),
                ),
            ),
            array(
                'key'   => 'field_ep_pharmacist_cta_text',
                'label' => 'Pharmacist CTA Text',
                'name'  => 'pharmacist_cta_text',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_pharmacist_cta_url',
                'label' => 'Pharmacist CTA URL',
                'name'  => 'pharmacist_cta_url',
                'type'  => 'url',
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
                'key'   => 'field_ep_how_it_works_badge',
                'label' => 'How It Works Badge',
                'name'  => 'how_it_works_badge',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_how_it_works_title',
                'label' => 'How It Works Title',
                'name'  => 'how_it_works_title',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_how_it_works_description',
                'label' => 'How It Works Description',
                'name'  => 'how_it_works_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),
            array(
                'key'          => 'field_ep_how_it_works_steps',
                'label'        => 'Steps',
                'name'         => 'how_it_works_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_step_icon',
                        'label' => 'Step Icon',
                        'name'  => 'step_icon',
                        'type'  => 'text',
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
                        'key'   => 'field_ep_step_time',
                        'label' => 'Step Time',
                        'name'  => 'step_time',
                        'type'  => 'text',
                    ),
                ),
            ),
            array(
                'key'   => 'field_ep_how_it_works_cta_text',
                'label' => 'CTA Text',
                'name'  => 'how_it_works_cta_text',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_how_it_works_cta_url',
                'label' => 'CTA URL',
                'name'  => 'how_it_works_cta_url',
                'type'  => 'url',
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
        'title'    => 'Switching Section',
        'fields'   => array(
            array(
                'key'   => 'field_ep_switching_badge',
                'label' => 'Switching Badge',
                'name'  => 'switching_badge',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_switching_title',
                'label' => 'Switching Title',
                'name'  => 'switching_title',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_switching_description',
                'label' => 'Switching Description',
                'name'  => 'switching_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),
            array(
                'key'          => 'field_ep_switching_features',
                'label'        => 'Switching Features',
                'name'         => 'switching_features',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Feature',
                'sub_fields'   => array(
                    array(
                        'key'           => 'field_ep_switching_feature_image',
                        'label'         => 'Feature Image',
                        'name'          => 'feature_image',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),
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
                ),
            ),
            array(
                'key'          => 'field_ep_switching_trust_stats',
                'label'        => 'Trust Stats',
                'name'         => 'switching_trust_stats',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Trust Stat',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_trust_icon',
                        'label' => 'Icon',
                        'name'  => 'trust_icon',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_trust_number',
                        'label' => 'Number',
                        'name'  => 'trust_number',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_trust_label',
                        'label' => 'Label',
                        'name'  => 'trust_label',
                        'type'  => 'text',
                    ),
                ),
            ),
            array(
                'key'           => 'field_ep_switching_image',
                'label'         => 'Switching Image',
                'name'          => 'switching_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
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
    // B7. Safe & Secure Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_safe_secure',
        'title'    => 'Safe & Secure Section',
        'fields'   => array(
            array(
                'key'   => 'field_ep_safe_badge',
                'label' => 'Safe Badge',
                'name'  => 'safe_badge',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_safe_title',
                'label' => 'Safe Title',
                'name'  => 'safe_title',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_safe_description',
                'label' => 'Safe Description',
                'name'  => 'safe_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),
            array(
                'key'          => 'field_ep_safe_features',
                'label'        => 'Safe Features',
                'name'         => 'safe_features',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Feature',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_ep_safe_feature_icon',
                        'label' => 'Feature Icon',
                        'name'  => 'feature_icon',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_safe_feature_title',
                        'label' => 'Feature Title',
                        'name'  => 'feature_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_safe_feature_description',
                        'label' => 'Feature Description',
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
    // B8. Location Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_location',
        'title'    => 'Location Section',
        'fields'   => array(
            array(
                'key'           => 'field_ep_location_map_image',
                'label'         => 'Location Map Image',
                'name'          => 'location_map_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),
            array(
                'key'           => 'field_ep_location_pharmacy_image',
                'label'         => 'Location Pharmacy Image',
                'name'          => 'location_pharmacy_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
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
    // B9. Testimonials Section
    // -------------------------------------------------------------------------
    acf_add_local_field_group( array(
        'key'      => 'group_ep_home_testimonials',
        'title'    => 'Testimonials Section',
        'fields'   => array(
            array(
                'key'   => 'field_ep_testimonials_title',
                'label' => 'Testimonials Title',
                'name'  => 'testimonials_title',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_testimonials_description',
                'label' => 'Testimonials Description',
                'name'  => 'testimonials_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),
            array(
                'key'          => 'field_ep_testimonials',
                'label'        => 'Testimonials',
                'name'         => 'testimonials',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Testimonial',
                'sub_fields'   => array(
                    array(
                        'key'     => 'field_ep_testimonial_type',
                        'label'   => 'Testimonial Type',
                        'name'    => 'testimonial_type',
                        'type'    => 'select',
                        'choices' => array(
                            'large'  => 'Large',
                            'medium' => 'Medium',
                        ),
                        'default_value' => 'medium',
                    ),
                    array(
                        'key'   => 'field_ep_testimonial_name',
                        'label' => 'Name',
                        'name'  => 'testimonial_name',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_testimonial_initials',
                        'label' => 'Initials',
                        'name'  => 'testimonial_initials',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_testimonial_service',
                        'label' => 'Service',
                        'name'  => 'testimonial_service',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_ep_testimonial_quote',
                        'label' => 'Quote',
                        'name'  => 'testimonial_quote',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'          => 'field_ep_testimonial_highlights',
                        'label'        => 'Highlights',
                        'name'         => 'testimonial_highlights',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Highlight',
                        'sub_fields'   => array(
                            array(
                                'key'   => 'field_ep_highlight_icon',
                                'label' => 'Icon',
                                'name'  => 'icon',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_highlight_text',
                                'label' => 'Text',
                                'name'  => 'text',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key'   => 'field_ep_testimonials_cta_title',
                'label' => 'Testimonials CTA Title',
                'name'  => 'testimonials_cta_title',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_ep_testimonials_cta_rating',
                'label' => 'Testimonials CTA Rating',
                'name'  => 'testimonials_cta_rating',
                'type'  => 'text',
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
                                'key'          => 'field_ep_fc_stats_bar_stats',
                                'label'        => 'Stats',
                                'name'         => 'stats',
                                'type'         => 'repeater',
                                'layout'       => 'table',
                                'button_label' => 'Add Stat',
                                'sub_fields'   => array(
                                    array(
                                        'key'   => 'field_ep_fc_stats_bar_stat_icon',
                                        'label' => 'Icon',
                                        'name'  => 'stat_icon',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_stats_bar_stat_number',
                                        'label' => 'Number',
                                        'name'  => 'stat_number',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_stats_bar_stat_label',
                                        'label' => 'Label',
                                        'name'  => 'stat_label',
                                        'type'  => 'text',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Layout: Treatments Grid
                    'layout_ep_treatments_grid' => array(
                        'key'        => 'layout_ep_treatments_grid',
                        'name'       => 'treatments_grid',
                        'label'      => 'Treatments Grid',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_ep_fc_treatments_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_fc_treatments_description',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 3,
                            ),
                            array(
                                'key'          => 'field_ep_fc_treatments_repeater',
                                'label'        => 'Treatments',
                                'name'         => 'treatments',
                                'type'         => 'repeater',
                                'layout'       => 'block',
                                'button_label' => 'Add Treatment',
                                'sub_fields'   => array(
                                    array(
                                        'key'   => 'field_ep_fc_treatment_title',
                                        'label' => 'Treatment Title',
                                        'name'  => 'treatment_title',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'           => 'field_ep_fc_treatment_image',
                                        'label'         => 'Treatment Image',
                                        'name'          => 'treatment_image',
                                        'type'          => 'image',
                                        'return_format' => 'array',
                                        'preview_size'  => 'thumbnail',
                                        'library'       => 'all',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_treatment_url',
                                        'label' => 'Treatment URL',
                                        'name'  => 'treatment_url',
                                        'type'  => 'url',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Layout: Pharmacist
                    'layout_ep_pharmacist' => array(
                        'key'        => 'layout_ep_pharmacist',
                        'name'       => 'pharmacist',
                        'label'      => 'Pharmacist',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_ep_fc_pharmacist_name',
                                'label' => 'Name',
                                'name'  => 'name',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_fc_pharmacist_role',
                                'label' => 'Role',
                                'name'  => 'role',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_ep_fc_pharmacist_bio',
                                'label' => 'Bio',
                                'name'  => 'bio',
                                'type'  => 'textarea',
                                'rows'  => 4,
                            ),
                            array(
                                'key'   => 'field_ep_fc_pharmacist_quote',
                                'label' => 'Quote',
                                'name'  => 'quote',
                                'type'  => 'textarea',
                                'rows'  => 3,
                            ),
                            array(
                                'key'           => 'field_ep_fc_pharmacist_image',
                                'label'         => 'Image',
                                'name'          => 'image',
                                'type'          => 'image',
                                'return_format' => 'array',
                                'preview_size'  => 'medium',
                                'library'       => 'all',
                            ),
                            array(
                                'key'          => 'field_ep_fc_pharmacist_credentials',
                                'label'        => 'Credentials',
                                'name'         => 'credentials',
                                'type'         => 'repeater',
                                'layout'       => 'table',
                                'button_label' => 'Add Credential',
                                'sub_fields'   => array(
                                    array(
                                        'key'   => 'field_ep_fc_pharmacist_cred_icon',
                                        'label' => 'Icon',
                                        'name'  => 'credential_icon',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_pharmacist_cred_text',
                                        'label' => 'Text',
                                        'name'  => 'credential_text',
                                        'type'  => 'text',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Layout: How It Works
                    'layout_ep_how_it_works' => array(
                        'key'        => 'layout_ep_how_it_works',
                        'name'       => 'how_it_works',
                        'label'      => 'How It Works',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_ep_fc_how_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'          => 'field_ep_fc_how_steps',
                                'label'        => 'Steps',
                                'name'         => 'steps',
                                'type'         => 'repeater',
                                'layout'       => 'block',
                                'button_label' => 'Add Step',
                                'sub_fields'   => array(
                                    array(
                                        'key'   => 'field_ep_fc_how_step_icon',
                                        'label' => 'Step Icon',
                                        'name'  => 'step_icon',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_how_step_title',
                                        'label' => 'Step Title',
                                        'name'  => 'step_title',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_how_step_description',
                                        'label' => 'Step Description',
                                        'name'  => 'step_description',
                                        'type'  => 'textarea',
                                        'rows'  => 2,
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_how_step_time',
                                        'label' => 'Step Time',
                                        'name'  => 'step_time',
                                        'type'  => 'text',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Layout: Testimonials
                    'layout_ep_testimonials' => array(
                        'key'        => 'layout_ep_testimonials',
                        'name'       => 'testimonials',
                        'label'      => 'Testimonials',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_ep_fc_testimonials_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'          => 'field_ep_fc_testimonials_repeater',
                                'label'        => 'Testimonials',
                                'name'         => 'testimonials',
                                'type'         => 'repeater',
                                'layout'       => 'block',
                                'button_label' => 'Add Testimonial',
                                'sub_fields'   => array(
                                    array(
                                        'key'   => 'field_ep_fc_testimonial_name',
                                        'label' => 'Name',
                                        'name'  => 'testimonial_name',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_testimonial_quote',
                                        'label' => 'Quote',
                                        'name'  => 'testimonial_quote',
                                        'type'  => 'textarea',
                                        'rows'  => 3,
                                    ),
                                    array(
                                        'key'   => 'field_ep_fc_testimonial_service',
                                        'label' => 'Service',
                                        'name'  => 'testimonial_service',
                                        'type'  => 'text',
                                    ),
                                ),
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
                            array(
                                'key'           => 'field_ep_fc_cta_background_color',
                                'label'         => 'Background Color',
                                'name'          => 'background_color',
                                'type'          => 'color_picker',
                                'default_value' => '#1e3a5f',
                            ),
                        ),
                    ),

                    // Layout: Location Map
                    'layout_ep_location_map' => array(
                        'key'        => 'layout_ep_location_map',
                        'name'       => 'location_map',
                        'label'      => 'Location Map',
                        'display'    => 'block',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_ep_fc_location_map_image',
                                'label'         => 'Map Image',
                                'name'          => 'map_image',
                                'type'          => 'image',
                                'return_format' => 'array',
                                'preview_size'  => 'medium',
                                'library'       => 'all',
                            ),
                            array(
                                'key'           => 'field_ep_fc_location_pharmacy_image',
                                'label'         => 'Pharmacy Image',
                                'name'          => 'pharmacy_image',
                                'type'          => 'image',
                                'return_format' => 'array',
                                'preview_size'  => 'medium',
                                'library'       => 'all',
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
                                'key'     => 'field_ep_fc_imgtext_image_position',
                                'label'   => 'Image Position',
                                'name'    => 'image_position',
                                'type'    => 'select',
                                'choices' => array(
                                    'left'  => 'Left',
                                    'right' => 'Right',
                                ),
                                'default_value' => 'left',
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
}
add_action( 'acf/init', 'ep_register_acf_field_groups' );
