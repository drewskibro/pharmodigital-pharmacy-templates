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
}
add_action( 'acf/init', 'ep_register_acf_field_groups' );
