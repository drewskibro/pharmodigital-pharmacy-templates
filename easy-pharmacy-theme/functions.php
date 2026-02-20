<?php
/**
 * Easy Pharmacy Theme Functions
 *
 * @package Easy_Pharmacy
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'EASY_PHARMACY_VERSION', '1.0.0' );
define( 'EASY_PHARMACY_DIR', get_template_directory() );
define( 'EASY_PHARMACY_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function easy_pharmacy_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary'         => __( 'Primary Menu', 'easy-pharmacy' ),
        'footer-services' => __( 'Footer Services', 'easy-pharmacy' ),
        'footer-links'    => __( 'Footer Quick Links', 'easy-pharmacy' ),
    ) );

    add_image_size( 'treatment-card', 600, 400, true );
    add_image_size( 'health-hub-featured', 800, 600, true );
    add_image_size( 'health-hub-card', 600, 400, true );
    add_image_size( 'pharmacist-photo', 600, 750, true );
}
add_action( 'after_setup_theme', 'easy_pharmacy_setup' );

/**
 * Enqueue Global Styles & Scripts
 */
function easy_pharmacy_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'easy-pharmacy-google-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;700;800;900&family=Syne:wght@400;600;700;800&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // Global CSS
    wp_enqueue_style(
        'easy-pharmacy-globals',
        EASY_PHARMACY_URI . '/assets/css/globals.css',
        array( 'font-awesome' ),
        EASY_PHARMACY_VERSION
    );

    // Theme stylesheet (style.css - mostly metadata)
    wp_enqueue_style(
        'easy-pharmacy-style',
        get_stylesheet_uri(),
        array( 'easy-pharmacy-globals' ),
        EASY_PHARMACY_VERSION
    );

    // Page-specific CSS
    if ( is_page_template( 'page-templates/page-weight-loss.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-weight-loss', EASY_PHARMACY_URI . '/assets/css/weight-loss.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-weight-loss-js', EASY_PHARMACY_URI . '/assets/js/weight-loss.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-travel-health.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-travel-health', EASY_PHARMACY_URI . '/assets/css/travel-health.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-travel-health-js', EASY_PHARMACY_URI . '/assets/js/travel-health.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-health-hub.php' ) || is_home() || is_category() || is_tag() || is_archive() ) {
        wp_enqueue_style( 'easy-pharmacy-blog', EASY_PHARMACY_URI . '/assets/css/blog.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-blog-js', EASY_PHARMACY_URI . '/assets/js/blog.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_single() ) {
        wp_enqueue_style( 'easy-pharmacy-blog', EASY_PHARMACY_URI . '/assets/css/blog.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
    }

    if ( is_page_template( 'page-templates/page-book-appointment.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-book-appointment', EASY_PHARMACY_URI . '/assets/css/book-appointment.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-book-appointment-js', EASY_PHARMACY_URI . '/assets/js/book-appointment.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-team.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-team', EASY_PHARMACY_URI . '/assets/css/team.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
    }

    if ( is_page_template( 'page-templates/page-ear-wax-removal.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-ear-wax', EASY_PHARMACY_URI . '/assets/css/ear-wax-removal.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-ear-wax-js', EASY_PHARMACY_URI . '/assets/js/ear-wax-removal.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-hair-loss.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-hair-loss', EASY_PHARMACY_URI . '/assets/css/hair-loss.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-hair-loss-js', EASY_PHARMACY_URI . '/assets/js/hair-loss.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-switch-provider.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-switch-provider', EASY_PHARMACY_URI . '/assets/css/switch-provider.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
    }

    // Vaccination pages
    if ( is_page_template( 'page-templates/page-rabies.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-rabies', EASY_PHARMACY_URI . '/assets/css/rabies.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-rabies-js', EASY_PHARMACY_URI . '/assets/js/rabies.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-hepatitis.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-hepatitis', EASY_PHARMACY_URI . '/assets/css/hepatitis.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-hepatitis-js', EASY_PHARMACY_URI . '/assets/js/hepatitis.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-yellow-fever.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-yellow-fever', EASY_PHARMACY_URI . '/assets/css/yellow-fever.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-yellow-fever-js', EASY_PHARMACY_URI . '/assets/js/yellow-fever.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-typhoid.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-typhoid', EASY_PHARMACY_URI . '/assets/css/typhoid.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
    }

    // Travel destination pages
    $travel_destinations = array( 'brazil', 'kenya', 'vietnam', 'india', 'thailand', 'cape-verde' );
    foreach ( $travel_destinations as $destination ) {
        if ( is_page_template( 'page-templates/page-travel-' . $destination . '.php' ) ) {
            wp_enqueue_style( 'easy-pharmacy-travel-' . $destination, EASY_PHARMACY_URI . '/assets/css/travel-' . $destination . '.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        }
    }

    // Mega Menu JS - loaded on all pages in footer
    wp_enqueue_script(
        'easy-pharmacy-mega-menu',
        EASY_PHARMACY_URI . '/assets/js/mega-menu.js',
        array(),
        EASY_PHARMACY_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'easy_pharmacy_scripts' );

/**
 * ACF Includes
 */
if ( file_exists( EASY_PHARMACY_DIR . '/inc/acf-options.php' ) ) {
    require_once EASY_PHARMACY_DIR . '/inc/acf-options.php';
}

if ( file_exists( EASY_PHARMACY_DIR . '/inc/acf-fields.php' ) ) {
    require_once EASY_PHARMACY_DIR . '/inc/acf-fields.php';
}

/**
 * Helper: Get option field with fallback
 */
function ep_option( $field_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $field_name, 'option' );
        return $value ? $value : $default;
    }
    return $default;
}

/**
 * Helper: Get page field with fallback
 */
function ep_field( $field_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $field_name );
        return $value ? $value : $default;
    }
    return $default;
}

/**
 * Helper: Get the pharmacy logo URL
 */
function ep_logo_url() {
    $custom_logo = ep_option( 'pharmacy_logo' );
    if ( $custom_logo ) {
        return is_array( $custom_logo ) ? $custom_logo['url'] : $custom_logo;
    }
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id ) {
        return wp_get_attachment_image_url( $custom_logo_id, 'full' );
    }
    return EASY_PHARMACY_URI . '/assets/images/logo.svg';
}

/**
 * Helper: Get pharmacy name
 */
function ep_pharmacy_name() {
    return ep_option( 'pharmacy_name', 'Easy Pharmacy' );
}

/**
 * Helper: Get pharmacy phone
 */
function ep_phone() {
    return ep_option( 'pharmacy_phone', '01784 255 222' );
}

/**
 * Helper: Get phone link (digits only)
 */
function ep_phone_link() {
    $phone = ep_phone();
    return preg_replace( '/[^0-9+]/', '', $phone );
}

/**
 * Helper: Get booking URL
 */
function ep_booking_url() {
    $page = ep_option( 'booking_page' );
    if ( $page ) {
        return get_permalink( $page );
    }
    return home_url( '/book-appointment/' );
}

/**
 * Register widget areas
 */
function easy_pharmacy_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'easy-pharmacy' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'easy_pharmacy_widgets_init' );

/**
 * Custom excerpt length
 */
function easy_pharmacy_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'easy_pharmacy_excerpt_length' );

/**
 * Custom excerpt more
 */
function easy_pharmacy_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'easy_pharmacy_excerpt_more' );

/**
 * Add page slug as body class
 */
function easy_pharmacy_body_classes( $classes ) {
    if ( is_page() ) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'easy_pharmacy_body_classes' );

/**
 * Force Classic Editor for pages using Easy Pharmacy templates.
 *
 * ACF field groups work best with the Classic Editor for template-driven pages.
 * This disables the Block Editor (Gutenberg) for any page using one of our
 * custom page templates, giving a clean ACF-only editing experience.
 */
function easy_pharmacy_disable_gutenberg_for_templates( $use_block_editor, $post ) {
    if ( empty( $post->ID ) ) {
        return $use_block_editor;
    }

    $template = get_page_template_slug( $post->ID );

    // All our custom page templates live in page-templates/
    if ( $template && strpos( $template, 'page-templates/' ) === 0 ) {
        return false;
    }

    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post', 'easy_pharmacy_disable_gutenberg_for_templates', 10, 2 );
