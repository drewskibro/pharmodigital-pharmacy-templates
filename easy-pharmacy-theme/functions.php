<?php
/**
 * Easy Pharmacy Theme functions and definitions
 *
 * @package Easy_Pharmacy_Theme
 */

// Theme setup
function easy_pharmacy_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'easy-pharmacy-theme'),
        'footer'  => __('Footer Menu', 'easy-pharmacy-theme'),
    ));
}
add_action('after_setup_theme', 'easy_pharmacy_setup');

// ACF Field Registrations
require_once get_template_directory() . '/inc/acf-fields-home.php';

// Enqueue styles and scripts
function easy_pharmacy_enqueue_assets() {
    $theme_uri = get_template_directory_uri();

    // Google Fonts
    wp_enqueue_style(
        'easy-pharmacy-google-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;700;800;900&family=Syne:wght@400;600;700;800&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'easy-pharmacy-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // Global styles (always loaded)
    wp_enqueue_style(
        'easy-pharmacy-globals',
        $theme_uri . '/assets/css/globals.css',
        array('easy-pharmacy-google-fonts', 'easy-pharmacy-font-awesome'),
        '1.0.0'
    );

    // Theme stylesheet
    wp_enqueue_style(
        'easy-pharmacy-style',
        get_stylesheet_uri(),
        array('easy-pharmacy-globals'),
        '1.0.0'
    );

    // Conditionally enqueue page-specific CSS based on page template
    $template_css_map = array(
        'page-templates/page-book-appointment.php'  => 'book-appointment',
        'page-templates/page-ear-wax-removal.php'   => 'ear-wax-removal',
        'page-templates/page-hair-loss.php'          => 'hair-loss',
        'page-templates/page-hepatitis.php'          => 'hepatitis',
        'page-templates/page-rabies.php'             => 'rabies',
        'page-templates/page-switch-provider.php'    => 'switch-provider',
        'page-templates/page-team.php'               => 'team',
        'page-templates/page-travel-brazil.php'      => 'travel-brazil',
        'page-templates/page-travel-cape-verde.php'  => 'travel-cape-verde',
        'page-templates/page-travel-health.php'      => 'travel-health',
        'page-templates/page-travel-india.php'       => 'travel-india',
        'page-templates/page-travel-kenya.php'       => 'travel-kenya',
        'page-templates/page-travel-thailand.php'    => 'travel-thailand',
        'page-templates/page-travel-vietnam.php'     => 'travel-vietnam',
        'page-templates/page-typhoid.php'            => 'typhoid',
        'page-templates/page-weight-loss.php'        => 'weight-loss',
        'page-templates/page-yellow-fever.php'       => 'yellow-fever',
    );

    foreach ($template_css_map as $template => $css_name) {
        if (is_page_template($template)) {
            wp_enqueue_style(
                'easy-pharmacy-' . $css_name,
                $theme_uri . '/assets/css/' . $css_name . '.css',
                array('easy-pharmacy-globals'),
                '1.0.0'
            );
            break;
        }
    }

    // Conditionally enqueue page-specific JS based on page template
    $template_js_map = array(
        'page-templates/page-book-appointment.php'  => 'book-appointment',
        'page-templates/page-ear-wax-removal.php'   => 'ear-wax-removal',
        'page-templates/page-hair-loss.php'          => 'hair-loss',
        'page-templates/page-hepatitis.php'          => 'hepatitis',
        'page-templates/page-rabies.php'             => 'rabies',
        'page-templates/page-travel-health.php'      => 'travel-health',
        'page-templates/page-travel-brazil.php'      => 'travel-health',
        'page-templates/page-travel-cape-verde.php'  => 'travel-health',
        'page-templates/page-travel-kenya.php'       => 'travel-health',
        'page-templates/page-travel-vietnam.php'     => 'travel-health',
        'page-templates/page-weight-loss.php'        => 'weight-loss',
        'page-templates/page-yellow-fever.php'       => 'yellow-fever',
    );

    foreach ($template_js_map as $template => $js_name) {
        if (is_page_template($template)) {
            wp_enqueue_script(
                'easy-pharmacy-' . $js_name,
                $theme_uri . '/assets/js/' . $js_name . '.js',
                array(),
                '1.0.0',
                true
            );
            break;
        }
    }
}
add_action('wp_enqueue_scripts', 'easy_pharmacy_enqueue_assets');

// Add preconnect for Google Fonts
function easy_pharmacy_resource_hints($urls, $relation_type) {
    if ($relation_type === 'preconnect') {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
        );
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'easy_pharmacy_resource_hints', 10, 2);
