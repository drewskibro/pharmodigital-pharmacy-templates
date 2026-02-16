<?php
/**
 * ACF Field Registration for Home Page
 * @package Easy_Pharmacy_Theme
 */
if (!defined('ABSPATH')) exit;

// Helper to create a text field
function ep_text($key, $label, $name, $default = '', $instructions = '') {
    return array('key' => $key, 'label' => $label, 'name' => $name, 'type' => 'text', 'default_value' => $default, 'instructions' => $instructions);
}
// Helper to create a textarea field
function ep_textarea($key, $label, $name, $default = '', $rows = 3, $instructions = '') {
    return array('key' => $key, 'label' => $label, 'name' => $name, 'type' => 'textarea', 'default_value' => $default, 'rows' => $rows, 'instructions' => $instructions);
}
// Helper to create a URL field
function ep_url($key, $label, $name, $default = '', $instructions = '') {
    return array('key' => $key, 'label' => $label, 'name' => $name, 'type' => 'url', 'default_value' => $default, 'instructions' => $instructions);
}
// Helper to create an image field
function ep_image($key, $label, $name, $instructions = '') {
    return array('key' => $key, 'label' => $label, 'name' => $name, 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium', 'instructions' => $instructions);
}
// Helper to create a tab
function ep_tab($key, $label) {
    return array('key' => $key, 'label' => $label, 'type' => 'tab');
}

function easy_pharmacy_register_home_fields() {
    if (!function_exists('acf_add_local_field_group')) return;

    $p = 'field_home_'; // prefix

    acf_add_local_field_group(array(
        'key' => 'group_home_page',
        'title' => 'Home Page Content',
        'fields' => array(

            // === HERO ===
            ep_tab($p.'hero_tab', 'Hero Section'),
            ep_text($p.'hero_badge_text', 'Location Badge', 'hero_badge_text', 'Serving Ashford, Chertsey & Surrounds'),
            ep_text($p.'hero_title_line_1', 'Headline Line 1 (Purple)', 'hero_title_line_1', 'Lose Weight.'),
            ep_text($p.'hero_title_line_2', 'Headline Line 2 (Italic)', 'hero_title_line_2', 'Travel Safe.'),
            ep_text($p.'hero_title_line_3', 'Headline Line 3 (Purple)', 'hero_title_line_3', 'Live Better.'),
            ep_textarea($p.'hero_description', 'Description', 'hero_description', 'Clinically proven weight loss treatments, expert support, discreet delivery. Plus travel health, hair loss treatment, and full pharmacy services across Ashford & Kent.'),
            ep_text($p.'hero_primary_cta_text', 'Primary Button Text', 'hero_primary_cta_text', 'Start Your Journey'),
            ep_url($p.'hero_primary_cta_link', 'Primary Button Link', 'hero_primary_cta_link'),
            ep_text($p.'hero_secondary_cta_text', 'Secondary Button Text', 'hero_secondary_cta_text', 'Popular Treatments'),
            ep_text($p.'hero_secondary_cta_link', 'Secondary Button Link', 'hero_secondary_cta_link', '#treatments', 'URL or anchor (e.g. #treatments)'),
            array(
                'key' => $p.'hero_trust_indicators', 'label' => 'Trust Indicators', 'name' => 'hero_trust_indicators',
                'type' => 'repeater', 'min' => 0, 'max' => 5, 'layout' => 'table', 'button_label' => 'Add Indicator',
                'sub_fields' => array(
                    array('key' => $p.'hero_trust_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'),
                ),
            ),
            ep_textarea($p.'hero_testimonial_quote', 'Hero Testimonial Quote', 'hero_testimonial_quote', "Thank you so much for your weight loss service. I've tried everything over the years. With your help, I've finally managed to lose 6 stones!", 3, 'Do not include quotation marks.'),
            ep_text($p.'hero_testimonial_author', 'Testimonial Author', 'hero_testimonial_author', 'Ashford Patient'),
            ep_text($p.'hero_testimonial_result', 'Testimonial Result Badge', 'hero_testimonial_result', '6 Stone Lost'),
            ep_image($p.'hero_image', 'Hero Image', 'hero_image', 'Main hero image. Recommended: 800x1000px.'),
            ep_text($p.'hero_caption_label', 'Image Caption Label', 'hero_caption_label', 'Easy Pharmacy'),
            ep_text($p.'hero_caption_title', 'Image Caption Title', 'hero_caption_title', 'Your Health, Reimagined.'),
            ep_text($p.'hero_google_rating', 'Google Rating Score', 'hero_google_rating', '4.7'),
            ep_text($p.'hero_review_count', 'Review Count Text', 'hero_review_count', 'Based on 300+ reviews'),
            ep_text($p.'hero_google_location', 'Google Location', 'hero_google_location', 'Ashford, UK'),
            ep_url($p.'hero_reviews_link', 'Reviews Page Link', 'hero_reviews_link'),

            // === STATS ===
            ep_tab($p.'stats_tab', 'Stats Bar'),
            array(
                'key' => $p.'stats_items', 'label' => 'Stats', 'name' => 'stats_items',
                'type' => 'repeater', 'min' => 0, 'max' => 6, 'layout' => 'table', 'button_label' => 'Add Stat',
                'sub_fields' => array(
                    array('key' => $p.'stat_icon', 'label' => 'Icon Class', 'name' => 'icon_class', 'type' => 'text', 'instructions' => 'e.g. fas fa-users', 'wrapper' => array('width' => '30')),
                    array('key' => $p.'stat_number', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array('width' => '35')),
                    array('key' => $p.'stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array('width' => '35')),
                ),
            ),

            // === TREATMENTS ===
            ep_tab($p.'treatments_tab', 'Treatments'),
            ep_text($p.'treatments_badge', 'Section Badge', 'treatments_badge_text', 'Trusted by thousands in Ashford & Chertsey'),
            ep_text($p.'treatments_title', 'Section Title', 'treatments_title', 'Our Most Popular Treatments'),
            ep_textarea($p.'treatments_desc', 'Section Description', 'treatments_description', 'Comprehensive healthcare solutions tailored to your needs, delivered discreetly to your door.', 2),
            array(
                'key' => $p.'treatments_cards', 'label' => 'Treatment Cards', 'name' => 'treatments_cards',
                'type' => 'repeater', 'min' => 0, 'max' => 6, 'layout' => 'block', 'button_label' => 'Add Treatment',
                'sub_fields' => array(
                    ep_image($p.'treatment_img', 'Image', 'image'),
                    ep_text($p.'treatment_title', 'Title', 'title'),
                    ep_url($p.'treatment_link', 'Link', 'link'),
                ),
            ),

            // === PHARMACIST ===
            ep_tab($p.'pharmacist_tab', 'Pharmacist'),
            ep_text($p.'pharmacist_badge', 'Section Badge', 'pharmacist_badge_text', 'Your Local Expert'),
            ep_text($p.'pharmacist_name', 'Name', 'pharmacist_name', 'Meet Dilip Modhvadia'),
            ep_text($p.'pharmacist_role', 'Role', 'pharmacist_role', 'Lead Pharmacist & Independent Prescriber'),
            ep_textarea($p.'pharmacist_bio', 'Bio', 'pharmacist_bio', 'With over 15 years of experience, Dilip leads our clinical team dedicated to providing personalized, accessible healthcare in Ashford. As an Independent Prescriber, he oversees our service to ensure you receive safe, effective treatments without the wait.', 4),
            ep_textarea($p.'pharmacist_quote', 'Quote', 'pharmacist_quote', "My goal is to make expert healthcare accessible to everyone in Ashford. Whether you're starting a weight loss journey or need health advice, our team is here to support you every step of the way with honest, professional care delivered to your door.", 4, 'Do not include quotation marks.'),
            ep_image($p.'pharmacist_image', 'Photo', 'pharmacist_image', 'Recommended: 600x750px.'),
            ep_url($p.'pharmacist_video', 'Video Embed URL', 'pharmacist_video_url', '', 'YouTube embed URL e.g. https://www.youtube.com/embed/VIDEO_ID'),
            ep_text($p.'pharmacist_video_label', 'Video Label', 'pharmacist_video_label', 'Watch Welcome Message'),
            ep_text($p.'pharmacist_exp_num', 'Experience Number', 'pharmacist_experience_number', '15+'),
            ep_text($p.'pharmacist_exp_label', 'Experience Label', 'pharmacist_experience_label', 'Years Experience'),
            array(
                'key' => $p.'pharmacist_creds', 'label' => 'Credentials', 'name' => 'pharmacist_credentials',
                'type' => 'repeater', 'min' => 0, 'max' => 5, 'layout' => 'table', 'button_label' => 'Add Credential',
                'sub_fields' => array(
                    array('key' => $p.'pharm_cred_icon', 'label' => 'Icon', 'name' => 'icon_class', 'type' => 'text', 'instructions' => 'e.g. fas fa-certificate', 'wrapper' => array('width' => '40')),
                    array('key' => $p.'pharm_cred_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text', 'wrapper' => array('width' => '60')),
                ),
            ),
            ep_text($p.'pharmacist_cta_text', 'CTA Text', 'pharmacist_cta_text', 'Start Your Online Consultation'),
            ep_url($p.'pharmacist_cta_link', 'CTA Link', 'pharmacist_cta_link'),

            // === HOW IT WORKS ===
            ep_tab($p.'hiw_tab', 'How It Works'),
            ep_text($p.'hiw_badge', 'Section Badge', 'hiw_badge_text', 'Simple & Fast'),
            ep_text($p.'hiw_title', 'Title', 'hiw_title', 'How It Works'),
            ep_textarea($p.'hiw_desc', 'Description', 'hiw_description', "Getting started with Easy Pharmacy is simple. From consultation to delivery, we've made healthcare accessible.", 2),
            array(
                'key' => $p.'hiw_steps', 'label' => 'Steps', 'name' => 'hiw_steps',
                'type' => 'repeater', 'min' => 0, 'max' => 5, 'layout' => 'block', 'button_label' => 'Add Step',
                'sub_fields' => array(
                    ep_text($p.'hiw_step_icon', 'Icon Class', 'icon_class', '', 'e.g. fas fa-laptop-medical'),
                    ep_text($p.'hiw_step_title', 'Title', 'title'),
                    ep_textarea($p.'hiw_step_desc', 'Description', 'description', '', 2),
                    ep_text($p.'hiw_step_time_icon', 'Time Icon', 'time_icon', '', 'e.g. fas fa-clock'),
                    ep_text($p.'hiw_step_time', 'Time Text', 'time_text', '', 'e.g. 2 minutes, Same day'),
                ),
            ),
            ep_text($p.'hiw_cta_text', 'CTA Text', 'hiw_cta_text', 'Start Your Journey Now'),
            ep_url($p.'hiw_cta_link', 'CTA Link', 'hiw_cta_link'),
            array(
                'key' => $p.'hiw_badges', 'label' => 'Trust Badges', 'name' => 'hiw_trust_badges',
                'type' => 'repeater', 'min' => 0, 'max' => 6, 'layout' => 'table', 'button_label' => 'Add Badge',
                'instructions' => 'Regulatory badges (MHRA, GPhC, PCI, ICO)',
                'sub_fields' => array(
                    ep_image($p.'hiw_badge_img', 'Image', 'image'),
                    ep_text($p.'hiw_badge_alt', 'Alt Text', 'alt_text'),
                ),
            ),

            // === SWITCHING PROVIDER ===
            ep_tab($p.'switching_tab', 'Switching Provider'),
            ep_text($p.'switching_badge', 'Section Badge', 'switching_badge_text', '50+ Patients Switched This Month'),
            ep_text($p.'switching_title_1', 'Title Line 1', 'switching_title_line_1', 'Frustrated with Your Current'),
            ep_text($p.'switching_title_g', 'Title Gradient Part', 'switching_title_gradient', 'Weight Loss Provider?'),
            ep_textarea($p.'switching_desc', 'Description', 'switching_description', "Tired of waiting weeks for prescriptions? Fed up with chatbots instead of real pharmacists? Join hundreds who've switched to Easy Pharmacy for faster service, genuine support, and premium care you can trust.", 3),
            array(
                'key' => $p.'switching_features', 'label' => 'Features', 'name' => 'switching_features',
                'type' => 'repeater', 'min' => 0, 'max' => 4, 'layout' => 'block', 'button_label' => 'Add Feature',
                'sub_fields' => array(
                    ep_image($p.'sw_feat_img', 'Image', 'image'),
                    ep_text($p.'sw_feat_title', 'Title', 'title'),
                    ep_textarea($p.'sw_feat_desc', 'Description', 'description', '', 2),
                ),
            ),
            array(
                'key' => $p.'switching_trust', 'label' => 'Trust Stats', 'name' => 'switching_trust_items',
                'type' => 'repeater', 'min' => 0, 'max' => 4, 'layout' => 'table', 'button_label' => 'Add Stat',
                'sub_fields' => array(
                    array('key' => $p.'sw_trust_icon', 'label' => 'Icon', 'name' => 'icon_class', 'type' => 'text', 'wrapper' => array('width' => '30')),
                    array('key' => $p.'sw_trust_num', 'label' => 'Number', 'name' => 'number', 'type' => 'text', 'wrapper' => array('width' => '35')),
                    array('key' => $p.'sw_trust_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array('width' => '35')),
                ),
            ),
            ep_text($p.'switching_cta1_text', 'Primary CTA', 'switching_primary_cta_text', 'Switch to Easy Pharmacy'),
            ep_url($p.'switching_cta1_link', 'Primary CTA Link', 'switching_primary_cta_link'),
            ep_text($p.'switching_cta2_text', 'Secondary CTA', 'switching_secondary_cta_text', 'Speak to Our Team'),
            ep_text($p.'switching_cta2_link', 'Secondary CTA Link', 'switching_secondary_cta_link', 'tel:01784255222', 'Use tel: for phone (e.g. tel:01784255222)'),
            ep_image($p.'switching_image', 'Section Image', 'switching_image', 'Recommended: 800x1000px'),
            ep_text($p.'switching_rating', 'Rating Score', 'switching_rating_score', '4.7'),
            ep_text($p.'switching_rating_count', 'Rating Count', 'switching_rating_count', 'Based on 300+ reviews'),
            ep_text($p.'switching_patients', 'Patients Stat', 'switching_patients_stat', '5,000+'),
            ep_text($p.'switching_location', 'Location Text', 'switching_location_stat', 'Ashford'),

            // === SLIDER BANNER ===
            ep_tab($p.'revslider_tab', 'Slider Banner'),
            array('key' => $p.'revslider_use', 'label' => 'Use Revolution Slider?', 'name' => 'revslider_use_shortcode', 'type' => 'true_false', 'default_value' => 0, 'ui' => 1, 'instructions' => 'Enable to use a Rev Slider shortcode instead of placeholder.'),
            ep_text($p.'revslider_sc', 'Shortcode', 'revslider_shortcode', '[rev_slider alias="home-hero"]', 'Only used if toggle above is ON.'),
            ep_image($p.'revslider_img', 'Placeholder Image', 'revslider_image'),
            ep_text($p.'revslider_badge', 'Badge Text', 'revslider_badge_text', 'Yellow Fever Approved'),
            ep_text($p.'revslider_title', 'Title', 'revslider_title', 'Protect Your Adventures Across the Globe'),
            ep_textarea($p.'revslider_subtitle', 'Subtitle', 'revslider_subtitle', 'From yellow fever to malaria prevention, get expert travel vaccinations at Easy Pharmacy', 2),
            ep_text($p.'revslider_cta_text', 'CTA Text', 'revslider_primary_cta_text', 'Book Travel Clinic'),
            ep_text($p.'revslider_cta_link', 'CTA Link', 'revslider_primary_cta_link', '#travel-clinic'),
            ep_text($p.'revslider_secondary', 'Secondary Text', 'revslider_secondary_text', 'Serving Ashford, Chertsey and beyond'),

            // === SAFE & SECURE ===
            ep_tab($p.'safe_tab', 'Safe & Secure'),
            ep_text($p.'safe_badge', 'Section Badge', 'safe_badge_text', 'GPhC Registered Pharmacy'),
            ep_text($p.'safe_title', 'Title (before gradient)', 'safe_title', 'Safe and'),
            ep_text($p.'safe_title_g', 'Title Gradient Word', 'safe_title_gradient', 'Secure'),
            ep_textarea($p.'safe_desc', 'Description', 'safe_description', "Your safety is our top priority. We're fully regulated and inspected to ensure the highest standards of care.", 2),
            array(
                'key' => $p.'safe_features', 'label' => 'Trust Features', 'name' => 'safe_features',
                'type' => 'repeater', 'min' => 0, 'max' => 4, 'layout' => 'block', 'button_label' => 'Add Feature',
                'sub_fields' => array(
                    ep_text($p.'safe_f_icon', 'Icon', 'icon_class', '', 'e.g. fas fa-shield-halved'),
                    ep_text($p.'safe_f_title', 'Title', 'title'),
                    ep_textarea($p.'safe_f_desc', 'Description', 'description', '', 2),
                ),
            ),
            ep_text($p.'safe_co_reg', 'Company Reg Number', 'safe_company_reg', '06703027'),
            ep_text($p.'safe_gphc', 'GPhC Pharmacy Number', 'safe_gphc_number', '1091169'),
            ep_text($p.'safe_super_name', 'Superintendent Name', 'safe_superintendent_name', 'Dilip Modhvadia'),
            ep_text($p.'safe_super_gphc', 'Superintendent GPhC', 'safe_superintendent_gphc', '2050606'),
            ep_url($p.'safe_verify_url', 'Verify URL', 'safe_verify_url', 'https://www.pharmacyregulation.org/registers/pharmacy/1091169'),
            ep_text($p.'safe_verify_note', 'Verify Note', 'safe_verify_note', 'The GPhC is the official body that regulates and inspects all pharmacies in the UK'),

            // === HEALTH HUB ===
            ep_tab($p.'healthhub_tab', 'Health Hub'),
            ep_text($p.'hh_badge', 'Section Badge', 'healthhub_badge_text', 'Expert Advice'),
            ep_text($p.'hh_title', 'Title (before gradient)', 'healthhub_title', 'Latest from the'),
            ep_text($p.'hh_title_g', 'Title Gradient', 'healthhub_title_gradient', 'Health Hub'),
            ep_url($p.'hh_view_all', 'View All Link', 'healthhub_view_all_link'),
            array(
                'key' => $p.'hh_articles', 'label' => 'Articles', 'name' => 'healthhub_articles',
                'type' => 'repeater', 'min' => 0, 'max' => 4, 'layout' => 'block', 'button_label' => 'Add Article',
                'sub_fields' => array(
                    ep_image($p.'hh_art_img', 'Image', 'image'),
                    ep_text($p.'hh_art_badge', 'Category', 'badge_text', '', 'e.g. Weight Loss, Travel Health'),
                    ep_text($p.'hh_art_title', 'Title', 'title'),
                    ep_textarea($p.'hh_art_excerpt', 'Excerpt', 'excerpt', '', 2),
                    ep_url($p.'hh_art_link', 'Link', 'link'),
                ),
            ),

            // === LOCATION ===
            ep_tab($p.'location_tab', 'Location'),
            ep_image($p.'loc_map', 'Map Image', 'location_map_image', 'Static map screenshot.'),
            ep_text($p.'loc_badge', 'Section Badge', 'location_badge_text', 'Visit Us'),
            ep_text($p.'loc_title', 'Title (before gradient)', 'location_title', 'Find'),
            ep_text($p.'loc_title_g', 'Title Gradient', 'location_title_gradient', 'Easy Pharmacy'),
            ep_image($p.'loc_photo', 'Pharmacy Photo', 'location_pharmacy_image'),
            ep_textarea($p.'loc_address', 'Address', 'location_address', "123 High Street\nAshford, Surrey\nTW15 1AB", 3, 'Each line on a new line.'),
            ep_url($p.'loc_directions', 'Directions URL', 'location_directions_url', 'https://www.google.com/maps/dir/?api=1&destination=51.4340,-0.4668'),
            array(
                'key' => $p.'loc_hours', 'label' => 'Opening Hours', 'name' => 'location_hours',
                'type' => 'repeater', 'min' => 0, 'max' => 7, 'layout' => 'table', 'button_label' => 'Add Row',
                'sub_fields' => array(
                    array('key' => $p.'loc_h_day', 'label' => 'Day(s)', 'name' => 'day', 'type' => 'text', 'wrapper' => array('width' => '35')),
                    array('key' => $p.'loc_h_time', 'label' => 'Hours', 'name' => 'time', 'type' => 'text', 'wrapper' => array('width' => '40')),
                    array('key' => $p.'loc_h_closed', 'label' => 'Closed?', 'name' => 'is_closed', 'type' => 'true_false', 'ui' => 1, 'wrapper' => array('width' => '25')),
                ),
            ),
            ep_text($p.'loc_phone', 'Phone', 'location_phone', '01784 255 222'),
            array('key' => $p.'loc_email', 'label' => 'Email', 'name' => 'location_email', 'type' => 'email', 'default_value' => 'hello@easypharmacy.co.uk'),
            ep_textarea($p.'loc_parking', 'Parking Info', 'location_parking_info', 'Free customer parking available directly outside the pharmacy.', 2),
            ep_text($p.'loc_cta_text', 'CTA Text', 'location_primary_cta_text', 'Book an Appointment'),
            ep_url($p.'loc_cta_link', 'CTA Link', 'location_primary_cta_link'),

            // === TESTIMONIALS ===
            ep_tab($p.'testimonials_tab', 'Testimonials'),
            ep_text($p.'test_badge', 'Section Badge', 'testimonials_badge_text', 'Real Transformations'),
            ep_text($p.'test_title_1', 'Title', 'testimonials_title_start', 'Real Results.'),
            ep_text($p.'test_title_g', 'Title Gradient', 'testimonials_title_gradient', 'Lasting Health.'),
            ep_textarea($p.'test_desc', 'Description', 'testimonials_description', 'See how our patients across Ashford have transformed their health with our personalised care.', 2),
            ep_textarea($p.'test_disclaimer', 'Disclaimer', 'testimonials_disclaimer', 'The results below are from real Easy Pharmacy patients. Individual results may vary.', 2),
            array(
                'key' => $p.'test_cards', 'label' => 'Testimonial Cards', 'name' => 'testimonials_cards',
                'type' => 'repeater', 'min' => 0, 'max' => 6, 'layout' => 'block', 'button_label' => 'Add Testimonial',
                'sub_fields' => array(
                    array('key' => $p.'tc_size', 'label' => 'Size', 'name' => 'card_size', 'type' => 'select', 'choices' => array('large' => 'Large', 'medium' => 'Medium'), 'default_value' => 'medium'),
                    array('key' => $p.'tc_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'instructions' => 'Use <strong>bold</strong> for key phrases.'),
                    ep_text($p.'tc_name', 'Author Name', 'author_name'),
                    ep_text($p.'tc_initials', 'Initials', 'author_initials', '', 'e.g. PF, GP'),
                    ep_text($p.'tc_service', 'Service', 'service', '', 'e.g. Travel Clinic'),
                    array(
                        'key' => $p.'tc_highlights', 'label' => 'Highlights', 'name' => 'highlights',
                        'type' => 'repeater', 'min' => 0, 'max' => 4, 'layout' => 'table', 'button_label' => 'Add Highlight',
                        'sub_fields' => array(
                            array('key' => $p.'tc_hl_icon', 'label' => 'Icon', 'name' => 'icon_class', 'type' => 'text', 'wrapper' => array('width' => '40')),
                            array('key' => $p.'tc_hl_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text', 'wrapper' => array('width' => '60')),
                        ),
                    ),
                ),
            ),
            ep_text($p.'test_cta_title', 'CTA Title', 'testimonials_cta_title', 'Trusted by 10,000+ Ashford Customers'),
            ep_textarea($p.'test_cta_text', 'CTA Text', 'testimonials_cta_text', 'No waiting lists. No hidden fees. Just expert, local healthcare you can rely on.', 2),
            ep_text($p.'test_cta_rating', 'CTA Rating', 'testimonials_cta_rating', '4.9'),
            ep_text($p.'test_cta_label', 'CTA Rating Label', 'testimonials_cta_label', 'Google Rating'),

            // === STICKY CTA ===
            ep_tab($p.'sticky_tab', 'Sticky CTA'),
            ep_text($p.'sticky_title', 'Title', 'sticky_cta_title', 'Ready to Transform Your Health?'),
            ep_text($p.'sticky_subtitle', 'Subtitle', 'sticky_cta_subtitle', 'Book your consultation today'),
            ep_text($p.'sticky_btn_text', 'Button Text', 'sticky_cta_primary_text', 'Book Now'),
            ep_url($p.'sticky_btn_link', 'Button Link', 'sticky_cta_primary_link'),
            ep_text($p.'sticky_phone', 'Phone Number', 'sticky_cta_phone', '01784 255 222'),

        ),
        'location' => array(array(array(
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'page-templates/page-home.php',
        ))),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array('the_content'),
        'active' => true,
    ));
}
add_action('acf/init', 'easy_pharmacy_register_home_fields');
