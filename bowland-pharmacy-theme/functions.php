<?php
/**
 * Bowland Pharmacy Theme Functions
 *
 * @package Bowland_Pharmacy
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BOWLAND_PHARMACY_VERSION', filemtime( get_theme_file_path( 'assets/css/globals.css' ) ) );
define( 'BOWLAND_PHARMACY_DIR', get_template_directory() );
define( 'BOWLAND_PHARMACY_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function bowland_pharmacy_setup() {
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
        'primary'         => __( 'Primary Menu', 'bowland-pharmacy' ),
        'footer-services' => __( 'Footer Services', 'bowland-pharmacy' ),
        'footer-links'    => __( 'Footer Quick Links', 'bowland-pharmacy' ),
    ) );

    add_image_size( 'medium-large', 720, 9999, false );
    add_image_size( 'treatment-card', 480, 640, true );
    add_image_size( 'health-hub-featured', 800, 600, true );
    add_image_size( 'health-hub-card', 600, 400, true );
    add_image_size( 'pharmacist-photo', 600, 750, true );
}
add_action( 'after_setup_theme', 'bowland_pharmacy_setup' );

/**
 * Add custom "Medium Large" image size to the editor dropdown.
 */
function bowland_pharmacy_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'medium-large' => __( 'Medium Large (720px)', 'bowland-pharmacy' ),
    ) );
}
add_filter( 'image_size_names_choose', 'bowland_pharmacy_custom_image_sizes' );

/**
 * Enqueue Global Styles & Scripts
 */
function bowland_pharmacy_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'bowland-google-fonts',
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
        'bowland-globals',
        BOWLAND_PHARMACY_URI . '/assets/css/globals.css',
        array( 'font-awesome' ),
        BOWLAND_PHARMACY_VERSION
    );

    // Navigation CSS — three-tier Bowland nav
    wp_enqueue_style(
        'bowland-nav',
        BOWLAND_PHARMACY_URI . '/assets/css/bowland-nav.css',
        array( 'bowland-globals' ),
        filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/bowland-nav.css' )
    );

    // Theme stylesheet (style.css - mostly metadata)
    wp_enqueue_style(
        'bowland-style',
        get_stylesheet_uri(),
        array( 'bowland-globals' ),
        BOWLAND_PHARMACY_VERSION
    );

    // Page-specific CSS
    if ( is_page_template( 'page-templates/page-weight-loss.php' ) ) {
        wp_enqueue_style( 'bowland-weight-loss', BOWLAND_PHARMACY_URI . '/assets/css/weight-loss.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-weight-loss-js', BOWLAND_PHARMACY_URI . '/assets/js/weight-loss.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/weight-loss.js' ), true );
        wp_enqueue_style( 'bowland-mj-calc', BOWLAND_PHARMACY_URI . '/assets/css/mounjaro-calculator.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-mj-calc-js', BOWLAND_PHARMACY_URI . '/assets/js/mounjaro-calculator.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-travel-health.php' ) ) {
        wp_enqueue_style( 'bowland-travel-health', BOWLAND_PHARMACY_URI . '/assets/css/travel-health.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-travel-health-js', BOWLAND_PHARMACY_URI . '/assets/js/travel-health.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-health-hub.php' ) || is_home() || is_category() || is_tag() || is_archive() ) {
        wp_enqueue_style( 'bowland-blog', BOWLAND_PHARMACY_URI . '/assets/css/blog.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-blog-js', BOWLAND_PHARMACY_URI . '/assets/js/blog.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_single() ) {
        wp_enqueue_style( 'bowland-blog', BOWLAND_PHARMACY_URI . '/assets/css/blog.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-blog-js', BOWLAND_PHARMACY_URI . '/assets/js/blog.js', array(), BOWLAND_PHARMACY_VERSION, true );
        wp_enqueue_style( 'bowland-mj-calc', BOWLAND_PHARMACY_URI . '/assets/css/mounjaro-calculator.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-mj-calc-js', BOWLAND_PHARMACY_URI . '/assets/js/mounjaro-calculator.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-nhs-services.php' ) ) {
        wp_enqueue_style( 'bowland-nhs-services', BOWLAND_PHARMACY_URI . '/assets/css/nhs-services.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
    }

    if ( is_page_template( 'page-templates/page-book-appointment.php' ) ) {
        wp_enqueue_style( 'bowland-book-appointment', BOWLAND_PHARMACY_URI . '/assets/css/book-appointment.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-book-appointment-js', BOWLAND_PHARMACY_URI . '/assets/js/book-appointment.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-team.php' ) ) {
        wp_enqueue_style( 'bowland-team', BOWLAND_PHARMACY_URI . '/assets/css/team.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-team-js', BOWLAND_PHARMACY_URI . '/assets/js/team.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-ear-wax-removal.php' ) ) {
        wp_enqueue_style( 'bowland-ear-wax', BOWLAND_PHARMACY_URI . '/assets/css/ear-wax-removal.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/ear-wax-removal.css' ) );
        wp_enqueue_script( 'bowland-ear-wax-js', BOWLAND_PHARMACY_URI . '/assets/js/ear-wax-removal.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/ear-wax-removal.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-pharmacy-first.php' ) ) {
        wp_enqueue_style( 'bowland-pharmacy-first', BOWLAND_PHARMACY_URI . '/assets/css/pharmacy-first.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/pharmacy-first.css' ) );
        wp_enqueue_script( 'bowland-pharmacy-first-js', BOWLAND_PHARMACY_URI . '/assets/js/pharmacy-first.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/pharmacy-first.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-nhs-prescriptions.php' ) ) {
        wp_enqueue_style( 'bowland-nhs-prescriptions', BOWLAND_PHARMACY_URI . '/assets/css/nhs-prescriptions.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/nhs-prescriptions.css' ) );
        wp_enqueue_script( 'bowland-nhs-prescriptions-js', BOWLAND_PHARMACY_URI . '/assets/js/nhs-prescriptions.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/nhs-prescriptions.js' ), true );
    }

    if ( is_page_template( array( 'page-templates/page-blister-packs.php', 'page-templates/page-contraception.php', 'page-templates/page-flu-vaccination.php', 'page-templates/page-covid-vaccination.php' ) ) ) {
        wp_enqueue_style( 'bowland-blister-packs', BOWLAND_PHARMACY_URI . '/assets/css/blister-packs.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/blister-packs.css' ) );
        wp_enqueue_script( 'bowland-blister-packs-js', BOWLAND_PHARMACY_URI . '/assets/js/blister-packs.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/blister-packs.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-blood-testing.php' ) ) {
        wp_enqueue_style( 'bowland-blood-testing', BOWLAND_PHARMACY_URI . '/assets/css/blood-testing.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/blood-testing.css' ) );
        wp_enqueue_script( 'bowland-blood-testing-js', BOWLAND_PHARMACY_URI . '/assets/js/blood-testing.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/blood-testing.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-hair-loss.php' ) ) {
        wp_enqueue_style( 'bowland-hair-loss', BOWLAND_PHARMACY_URI . '/assets/css/hair-loss.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-hair-loss-js', BOWLAND_PHARMACY_URI . '/assets/js/hair-loss.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-switch-provider.php' ) ) {
        wp_enqueue_style( 'bowland-switch-provider', BOWLAND_PHARMACY_URI . '/assets/css/switch-provider.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-switch-provider-js', BOWLAND_PHARMACY_URI . '/assets/js/switch-provider.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-prices.php' ) ) {
        wp_enqueue_style( 'bowland-prices', BOWLAND_PHARMACY_URI . '/assets/css/prices.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/prices.css' ) );
        wp_enqueue_script( 'bowland-prices-js', BOWLAND_PHARMACY_URI . '/assets/js/prices.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/prices.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-contact.php' ) ) {
        wp_enqueue_style( 'bowland-contact', BOWLAND_PHARMACY_URI . '/assets/css/contact.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        wp_enqueue_script( 'bowland-contact-js', BOWLAND_PHARMACY_URI . '/assets/js/contact.js', array(), BOWLAND_PHARMACY_VERSION, true );
        wp_localize_script( 'bowland-contact-js', 'bpContactAjax', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
        ) );
    }

    if ( is_page_template( 'page-templates/page-privacy-policy.php' ) ) {
        wp_enqueue_style( 'bowland-legal', BOWLAND_PHARMACY_URI . '/assets/css/legal.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/legal.css' ) );
    }

    if ( is_page_template( 'page-templates/page-nhs-prescriptions-register.php' ) ) {
        wp_enqueue_style( 'bowland-npreg', BOWLAND_PHARMACY_URI . '/assets/css/nhs-prescriptions-register.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/nhs-prescriptions-register.css' ) );
        wp_enqueue_script( 'bowland-npreg-js', BOWLAND_PHARMACY_URI . '/assets/js/nhs-prescriptions-register.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/nhs-prescriptions-register.js' ), true );
        wp_localize_script( 'bowland-npreg-js', 'bpNpregAjax', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
        ) );
    }

    // Vaccination pages
    if ( is_page_template( 'page-templates/page-rabies.php' ) ) {
        wp_enqueue_style( 'bowland-rabies', BOWLAND_PHARMACY_URI . '/assets/css/rabies.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/rabies.css' ) );
        wp_enqueue_script( 'bowland-rabies-js', BOWLAND_PHARMACY_URI . '/assets/js/rabies.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/rabies.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-yellow-fever.php' ) ) {
        wp_enqueue_style( 'bowland-yellow-fever', BOWLAND_PHARMACY_URI . '/assets/css/yellow-fever.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/yellow-fever.css' ) );
        wp_enqueue_script( 'bowland-yellow-fever-js', BOWLAND_PHARMACY_URI . '/assets/js/yellow-fever.js', array(), BOWLAND_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-typhoid.php' ) ) {
        wp_enqueue_style( 'bowland-typhoid', BOWLAND_PHARMACY_URI . '/assets/css/typhoid.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/typhoid.css' ) );
        wp_enqueue_script( 'bowland-typhoid-js', BOWLAND_PHARMACY_URI . '/assets/js/typhoid.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/typhoid.js' ), true );
    }

    // Travel destination pages
    $travel_destinations = array( 'brazil', 'kenya', 'vietnam', 'india', 'thailand', 'cape-verde' );
    foreach ( $travel_destinations as $destination ) {
        if ( is_page_template( 'page-templates/page-travel-' . $destination . '.php' ) ) {
            wp_enqueue_style( 'bowland-travel-' . $destination, BOWLAND_PHARMACY_URI . '/assets/css/travel-' . $destination . '.css', array( 'bowland-globals' ), BOWLAND_PHARMACY_VERSION );
        }
    }

    // Private vaccinations (private vaccine page programme)
    if ( is_page_template( 'page-templates/page-chickenpox.php' ) ) {
        wp_enqueue_style( 'bowland-chickenpox', BOWLAND_PHARMACY_URI . '/assets/css/chickenpox.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/chickenpox.css' ) );
        wp_enqueue_script( 'bowland-chickenpox-js', BOWLAND_PHARMACY_URI . '/assets/js/chickenpox.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/chickenpox.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-shingles.php' ) ) {
        wp_enqueue_style( 'bowland-shingles', BOWLAND_PHARMACY_URI . '/assets/css/shingles.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/shingles.css' ) );
        wp_enqueue_script( 'bowland-shingles-js', BOWLAND_PHARMACY_URI . '/assets/js/shingles.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/shingles.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-meningitis-b.php' ) ) {
        wp_enqueue_style( 'bowland-meningitis-b', BOWLAND_PHARMACY_URI . '/assets/css/meningitis-b.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/meningitis-b.css' ) );
        wp_enqueue_script( 'bowland-meningitis-b-js', BOWLAND_PHARMACY_URI . '/assets/js/meningitis-b.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/meningitis-b.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-meningitis-acwy.php' ) ) {
        wp_enqueue_style( 'bowland-meningitis-acwy', BOWLAND_PHARMACY_URI . '/assets/css/meningitis-acwy.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/meningitis-acwy.css' ) );
        wp_enqueue_script( 'bowland-meningitis-acwy-js', BOWLAND_PHARMACY_URI . '/assets/js/meningitis-acwy.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/meningitis-acwy.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-mmr.php' ) ) {
        wp_enqueue_style( 'bowland-mmr', BOWLAND_PHARMACY_URI . '/assets/css/mmr.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/mmr.css' ) );
        wp_enqueue_script( 'bowland-mmr-js', BOWLAND_PHARMACY_URI . '/assets/js/mmr.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/mmr.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-hpv.php' ) ) {
        wp_enqueue_style( 'bowland-hpv', BOWLAND_PHARMACY_URI . '/assets/css/hpv.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/hpv.css' ) );
        wp_enqueue_script( 'bowland-hpv-js', BOWLAND_PHARMACY_URI . '/assets/js/hpv.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/hpv.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-corporate.php' ) ) {
        wp_enqueue_style( 'bowland-corporate', BOWLAND_PHARMACY_URI . '/assets/css/corporate.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/corporate.css' ) );
        wp_enqueue_script( 'bowland-corporate-js', BOWLAND_PHARMACY_URI . '/assets/js/corporate.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/corporate.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-cholera.php' ) ) {
        wp_enqueue_style( 'bowland-cholera', BOWLAND_PHARMACY_URI . '/assets/css/cholera.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/cholera.css' ) );
        wp_enqueue_script( 'bowland-cholera-js', BOWLAND_PHARMACY_URI . '/assets/js/cholera.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/cholera.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-chikungunya.php' ) ) {
        wp_enqueue_style( 'bowland-chikungunya', BOWLAND_PHARMACY_URI . '/assets/css/chikungunya.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/chikungunya.css' ) );
        wp_enqueue_script( 'bowland-chikungunya-js', BOWLAND_PHARMACY_URI . '/assets/js/chikungunya.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/chikungunya.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-dengue.php' ) ) {
        wp_enqueue_style( 'bowland-dengue', BOWLAND_PHARMACY_URI . '/assets/css/dengue.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/dengue.css' ) );
        wp_enqueue_script( 'bowland-dengue-js', BOWLAND_PHARMACY_URI . '/assets/js/dengue.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/dengue.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-dtp.php' ) ) {
        wp_enqueue_style( 'bowland-dtp', BOWLAND_PHARMACY_URI . '/assets/css/dtp.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/dtp.css' ) );
        wp_enqueue_script( 'bowland-dtp-js', BOWLAND_PHARMACY_URI . '/assets/js/dtp.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/dtp.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-hepatitisa.php' ) ) {
        wp_enqueue_style( 'bowland-hepatitisa', BOWLAND_PHARMACY_URI . '/assets/css/hepatitisa.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/hepatitisa.css' ) );
        wp_enqueue_script( 'bowland-hepatitisa-js', BOWLAND_PHARMACY_URI . '/assets/js/hepatitisa.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/hepatitisa.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-hepatitisb.php' ) ) {
        wp_enqueue_style( 'bowland-hepatitisb', BOWLAND_PHARMACY_URI . '/assets/css/hepatitisb.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/hepatitisb.css' ) );
        wp_enqueue_script( 'bowland-hepatitisb-js', BOWLAND_PHARMACY_URI . '/assets/js/hepatitisb.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/hepatitisb.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-japaneseencephalitis.php' ) ) {
        wp_enqueue_style( 'bowland-japaneseencephalitis', BOWLAND_PHARMACY_URI . '/assets/css/japaneseencephalitis.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/japaneseencephalitis.css' ) );
        wp_enqueue_script( 'bowland-japaneseencephalitis-js', BOWLAND_PHARMACY_URI . '/assets/js/japaneseencephalitis.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/japaneseencephalitis.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-malaria.php' ) ) {
        wp_enqueue_style( 'bowland-malaria', BOWLAND_PHARMACY_URI . '/assets/css/malaria.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/malaria.css' ) );
        wp_enqueue_script( 'bowland-malaria-js', BOWLAND_PHARMACY_URI . '/assets/js/malaria.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/malaria.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-pneumonia.php' ) ) {
        wp_enqueue_style( 'bowland-pneumonia', BOWLAND_PHARMACY_URI . '/assets/css/pneumonia.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/pneumonia.css' ) );
        wp_enqueue_script( 'bowland-pneumonia-js', BOWLAND_PHARMACY_URI . '/assets/js/pneumonia.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/pneumonia.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-tbe.php' ) ) {
        wp_enqueue_style( 'bowland-tbe', BOWLAND_PHARMACY_URI . '/assets/css/tbe.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/tbe.css' ) );
        wp_enqueue_script( 'bowland-tbe-js', BOWLAND_PHARMACY_URI . '/assets/js/tbe.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/tbe.js' ), true );
    }

    if ( is_page_template( 'page-templates/page-whoopingcough.php' ) ) {
        wp_enqueue_style( 'bowland-whoopingcough', BOWLAND_PHARMACY_URI . '/assets/css/whoopingcough.css', array( 'bowland-globals' ), filemtime( BOWLAND_PHARMACY_DIR . '/assets/css/whoopingcough.css' ) );
        wp_enqueue_script( 'bowland-whoopingcough-js', BOWLAND_PHARMACY_URI . '/assets/js/whoopingcough.js', array(), filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/whoopingcough.js' ), true );
    }

    // Navigation JS — three-tier Bowland nav, loaded on all pages in footer
    wp_enqueue_script(
        'bowland-nav-js',
        BOWLAND_PHARMACY_URI . '/assets/js/bowland-nav.js',
        array(),
        BOWLAND_PHARMACY_VERSION,
        true
    );

    // Video Modal JS - Vimeo player modal, loaded on all pages in footer
    wp_enqueue_script(
        'bowland-video-modal',
        BOWLAND_PHARMACY_URI . '/assets/js/video-modal.js',
        array(),
        BOWLAND_PHARMACY_VERSION,
        true
    );

    // Location map JS — geo-anchored parking callouts via Web Mercator
    wp_enqueue_script(
        'bowland-location-map',
        BOWLAND_PHARMACY_URI . '/assets/js/location-map.js',
        array(),
        filemtime( BOWLAND_PHARMACY_DIR . '/assets/js/location-map.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'bowland_pharmacy_scripts' );

/**
 * ACF Includes
 */
if ( file_exists( BOWLAND_PHARMACY_DIR . '/inc/acf-options.php' ) ) {
    require_once BOWLAND_PHARMACY_DIR . '/inc/acf-options.php';
}

if ( file_exists( BOWLAND_PHARMACY_DIR . '/inc/acf-fields.php' ) ) {
    require_once BOWLAND_PHARMACY_DIR . '/inc/acf-fields.php';
}

if ( file_exists( BOWLAND_PHARMACY_DIR . '/inc/location-parking-autofill.php' ) ) {
    require_once BOWLAND_PHARMACY_DIR . '/inc/location-parking-autofill.php';
}

/**
 * Helper: Get option field with fallback
 *
 * CRITICAL: Uses strict === null || === '' checks.
 * Never change to empty(), !$value, or ?: ternary — ACF true_false
 * fields return integer 0 for "No" which would be treated as falsy.
 */
function bp_option( $field_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $field_name, 'option' );
        if ( $value === null || $value === '' ) {
            return $default;
        }
        return $value;
    }
    return $default;
}

/**
 * Helper: Get page field with fallback
 *
 * CRITICAL: Uses strict === null || === '' checks.
 * Never change to empty(), !$value, or ?: ternary — ACF true_false
 * fields return integer 0 for "No" which would be treated as falsy.
 */
function bp_field( $field_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $field_name );
        if ( $value === null || $value === '' ) {
            return $default;
        }
        return $value;
    }
    return $default;
}

/**
 * Helper: Ensure Font Awesome icon class has a style prefix.
 * Users often enter just "fa-file-medical" but FA6 requires "fas fa-file-medical".
 * This auto-prefixes "fas " (solid) when no style prefix is present.
 */
function bp_fa_class( $icon_class ) {
    $icon_class = trim( $icon_class );
    if ( empty( $icon_class ) ) {
        return '';
    }
    // Already has a Font Awesome style prefix — return as-is
    if ( preg_match( '/^(fas|far|fab|fal|fad|fat|fass|fasr|fasl|fa-solid|fa-regular|fa-brands|fa-light|fa-duotone|fa-thin|fa-sharp)\s/', $icon_class ) ) {
        return $icon_class;
    }
    // Just the icon name (e.g. "fa-file-medical") — add solid prefix
    if ( strpos( $icon_class, 'fa-' ) === 0 ) {
        return 'fas ' . $icon_class;
    }
    return $icon_class;
}

/**
 * Helper: Get the pharmacy logo URL
 */
function bp_logo_url() {
    $custom_logo = bp_option( 'pharmacy_logo' );
    if ( $custom_logo ) {
        // ACF image field with return_format 'id' returns an attachment ID
        if ( is_numeric( $custom_logo ) ) {
            return wp_get_attachment_image_url( $custom_logo, 'full' );
        }
        return is_array( $custom_logo ) ? $custom_logo['url'] : $custom_logo;
    }
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id ) {
        return wp_get_attachment_image_url( $custom_logo_id, 'full' );
    }
    return get_template_directory_uri() . '/assets/images/logo.svg';
}

function bp_footer_logo_url() {
    $footer_logo = bp_option( 'pharmacy_footer_logo' );
    if ( $footer_logo ) {
        if ( is_numeric( $footer_logo ) ) {
            return wp_get_attachment_image_url( $footer_logo, 'full' );
        }
        return is_array( $footer_logo ) ? $footer_logo['url'] : $footer_logo;
    }
    return bp_logo_url();
}

/**
 * Helper: Get pharmacy name
 */
function bp_pharmacy_name() {
    return bp_option( 'pharmacy_name', 'Bowland Pharmacy' );
}

/**
 * Helper: Get pharmacy phone
 */
function bp_phone() {
    return bp_option( 'pharmacy_phone', '0161 998 7114' );
}

/**
 * Helper: Get phone link (digits only)
 */
function bp_phone_link() {
    $phone = bp_phone();
    return preg_replace( '/[^0-9+]/', '', $phone );
}

/**
 * Helper: Get booking URL
 */
function bp_booking_url() {
    $page = bp_option( 'booking_page' );
    if ( $page ) {
        return get_permalink( $page );
    }
    return home_url( '/book-appointment/' );
}

/**
 * Register widget areas
 */
function bowland_pharmacy_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'bowland-pharmacy' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'bowland_pharmacy_widgets_init' );

/**
 * Custom excerpt length
 */
function bowland_pharmacy_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'bowland_pharmacy_excerpt_length' );

/**
 * Custom excerpt more
 */
function bowland_pharmacy_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'bowland_pharmacy_excerpt_more' );

/**
 * Add page slug as body class
 */
function bowland_pharmacy_body_classes( $classes ) {
    if ( is_page() ) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'bowland_pharmacy_body_classes' );

/**
 * Force Classic Editor for pages using Bowland Pharmacy templates.
 *
 * ACF field groups work best with the Classic Editor for template-driven pages.
 * This disables the Block Editor (Gutenberg) for any page using one of our
 * custom page templates, giving a clean ACF-only editing experience.
 */
function bowland_pharmacy_disable_gutenberg_for_templates( $use_block_editor, $post ) {
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
add_filter( 'use_block_editor_for_post', 'bowland_pharmacy_disable_gutenberg_for_templates', 10, 2 );

/**
 * Theme Activation: Create default Health Hub categories and set permalink structure.
 *
 * Runs once when the theme is first activated. Creates the standard pharmacy
 * content categories so they appear immediately in the post editor, and sets
 * the permalink structure to /health-hub/post-slug/ for clean blog URLs.
 */
function bowland_pharmacy_activation() {
    // Pre-create standard pharmacy blog categories
    $default_categories = array(
        'Weight Loss'      => 'weight-loss',
        'Travel Health'    => 'travel-health',
        'Ear Wax Removal'  => 'ear-wax-removal',
        'Hair Loss'        => 'hair-loss',
        'Pharmacy Advice'  => 'pharmacy-advice',
    );

    foreach ( $default_categories as $name => $slug ) {
        if ( ! term_exists( $name, 'category' ) ) {
            wp_insert_term( $name, 'category', array( 'slug' => $slug ) );
        }
    }

    // Set permalink structure: /health-hub/post-slug/
    update_option( 'permalink_structure', '/health-hub/%postname%/' );
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'bowland_pharmacy_activation' );

/**
 * Ensure permalink structure stays set to /health-hub/%postname%/.
 *
 * The after_switch_theme hook only fires once. If rewrite rules are lost
 * (plugin flush, WP update, Kinsta deploy), posts return 404. This checks
 * on init and flushes when the structure drifts or when rules are empty.
 * A transient prevents flushing on every page load.
 */
function bowland_pharmacy_ensure_permalinks() {
    $desired = '/health-hub/%postname%/';

    // If the permalink option itself was changed, fix it immediately.
    if ( get_option( 'permalink_structure' ) !== $desired ) {
        update_option( 'permalink_structure', $desired );
        flush_rewrite_rules();
        return;
    }

    // If rewrite rules are empty (cleared by plugin/update/deploy), regenerate.
    // Use a transient so we only check once per hour, not every request.
    if ( false === get_transient( 'bp_rewrite_rules_ok' ) ) {
        $rules = get_option( 'rewrite_rules' );
        if ( empty( $rules ) ) {
            flush_rewrite_rules();
        }
        set_transient( 'bp_rewrite_rules_ok', 1, HOUR_IN_SECONDS );
    }
}
add_action( 'init', 'bowland_pharmacy_ensure_permalinks' );

/**
 * Output structured data (JSON-LD) for single blog posts.
 *
 * Generates MedicalWebPage schema with author, reviewer, publisher,
 * and FAQPage schema when FAQ fields are populated.
 */
function bowland_pharmacy_post_schema() {
    if ( ! is_single() || get_post_type() !== 'post' ) {
        return;
    }

    $post_id   = get_the_ID();
    $permalink = get_permalink( $post_id );
    $title     = get_the_title( $post_id );
    $excerpt   = get_the_excerpt( $post_id );

    // Dates
    $date_published = get_the_date( 'c', $post_id );
    $date_modified  = get_the_modified_date( 'c', $post_id );

    // Featured image
    $image_url = get_the_post_thumbnail_url( $post_id, 'large' );

    // Author
    $author_name = get_the_author();
    $author_role = bp_option( 'default_author_role', 'Lead Pharmacist' );

    // Reviewer (superintendent pharmacist)
    $reviewer_name = bp_option( 'superintendent_pharmacist', 'Ahmed Al-Liabi' );
    $reviewer_gphc = bp_option( 'superintendent_gphc_number', '2208502' );
    $reviewer_url  = bp_option( 'gphc_verify_url', '' );

    // Publisher
    $pharmacy_name = bp_pharmacy_name();
    $logo_url      = bp_logo_url();

    // Build MedicalWebPage schema
    $schema = array(
        '@context'      => 'https://schema.org',
        '@type'         => 'MedicalWebPage',
        'headline'      => $title,
        'description'   => $excerpt,
        'url'           => $permalink,
        'datePublished' => $date_published,
        'dateModified'  => $date_modified,
        'author'        => array(
            '@type'     => 'Person',
            'name'      => $author_name,
            'jobTitle'  => $author_role,
        ),
        'reviewedBy'    => array(
            '@type'     => 'Person',
            'name'      => $reviewer_name,
            'jobTitle'  => 'Superintendent Pharmacist',
        ),
        'publisher'     => array(
            '@type' => 'Organization',
            'name'  => $pharmacy_name,
        ),
        'mainEntityOfPage' => array(
            '@type' => 'WebPage',
            '@id'   => $permalink,
        ),
    );

    if ( $image_url ) {
        $schema['image'] = $image_url;
    }

    if ( $logo_url ) {
        $schema['publisher']['logo'] = array(
            '@type' => 'ImageObject',
            'url'   => $logo_url,
        );
    }

    if ( $reviewer_gphc ) {
        $schema['reviewedBy']['identifier'] = array(
            '@type'    => 'PropertyValue',
            'name'     => 'GPhC Registration Number',
            'value'    => $reviewer_gphc,
        );
    }

    if ( $reviewer_url ) {
        $schema['reviewedBy']['url'] = $reviewer_url;
    }

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";

    // FAQ schema (if FAQs exist on this post)
    if ( function_exists( 'get_field' ) ) {
        $faqs = get_field( 'post_faqs', $post_id );
        if ( ! empty( $faqs ) ) {
            $faq_entities = array();
            foreach ( $faqs as $faq ) {
                if ( ! empty( $faq['question'] ) && ! empty( $faq['answer'] ) ) {
                    $faq_entities[] = array(
                        '@type'          => 'Question',
                        'name'           => $faq['question'],
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text'  => wp_strip_all_tags( $faq['answer'] ),
                        ),
                    );
                }
            }
            if ( ! empty( $faq_entities ) ) {
                $faq_schema = array(
                    '@context'   => 'https://schema.org',
                    '@type'      => 'FAQPage',
                    'mainEntity' => $faq_entities,
                );
                echo '<script type="application/ld+json">' . wp_json_encode( $faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
            }
        }
    }
}
add_action( 'wp_head', 'bowland_pharmacy_post_schema' );

/**
 * Auto-generate a Table of Contents for single blog posts.
 *
 * Parses all <h2> and <h3> headings in the post content, injects anchor
 * IDs onto each heading, and prepends a TOC card. Headings that already
 * have an id attribute are reused. The TOC is collapsible on mobile.
 *
 * Can be disabled per-post via the "show_table_of_contents" ACF field.
 */
function bowland_pharmacy_add_toc( $content ) {
    if ( ! is_single() || get_post_type() !== 'post' ) {
        return $content;
    }

    // Check per-post toggle (default: show)
    if ( function_exists( 'get_field' ) ) {
        $show_toc = get_field( 'show_table_of_contents' );
        // ACF true_false returns 0 for "No" — only skip when explicitly disabled
        if ( $show_toc === 0 || $show_toc === false ) {
            return $content;
        }
    }

    // Find all h2 and h3 headings
    if ( ! preg_match_all( '/<(h[23])((?:\s[^>]*)?)>(.*?)<\/\1>/is', $content, $matches, PREG_SET_ORDER ) ) {
        return $content;
    }

    // Need at least 2 headings for a TOC to be useful
    if ( count( $matches ) < 2 ) {
        return $content;
    }

    $toc_items  = array();
    $used_slugs = array();

    foreach ( $matches as $match ) {
        $tag        = $match[1]; // h2 or h3
        $attrs      = $match[2];
        $heading    = $match[3];
        $plain_text = wp_strip_all_tags( $heading );

        // Check if heading already has an id
        if ( preg_match( '/\bid=["\']([^"\']+)["\']/i', $attrs, $id_match ) ) {
            $slug = $id_match[1];
        } else {
            // Generate a slug from heading text
            $slug = sanitize_title( $plain_text );
            if ( empty( $slug ) ) {
                $slug = 'section';
            }
        }

        // Ensure unique slugs
        $original_slug = $slug;
        $counter = 2;
        while ( in_array( $slug, $used_slugs, true ) ) {
            $slug = $original_slug . '-' . $counter;
            $counter++;
        }
        $used_slugs[] = $slug;

        $toc_items[] = array(
            'tag'   => $tag,
            'slug'  => $slug,
            'text'  => $plain_text,
        );

        // Inject id attribute onto the heading in the content
        if ( preg_match( '/\bid=["\']/', $attrs ) ) {
            // Already has an id — replace it
            $new_attrs = preg_replace( '/\bid=["\'][^"\']*["\']/i', 'id="' . esc_attr( $slug ) . '"', $attrs );
        } else {
            // Add id attribute
            $new_attrs = ' id="' . esc_attr( $slug ) . '"' . $attrs;
        }

        $new_heading = '<' . $tag . $new_attrs . '>' . $heading . '</' . $tag . '>';
        $content     = str_replace( $match[0], $new_heading, $content );
    }

    // Build the TOC HTML
    $toc  = '<nav class="article-toc" aria-label="Table of Contents">' . "\n";
    $toc .= '  <button class="article-toc-toggle" aria-expanded="true">' . "\n";
    $toc .= '    <span class="article-toc-toggle-icon"><i class="fas fa-list-ul"></i></span>' . "\n";
    $toc .= '    <span class="article-toc-toggle-label">In This Article</span>' . "\n";
    $toc .= '    <span class="article-toc-toggle-chevron"><i class="fas fa-chevron-up"></i></span>' . "\n";
    $toc .= '  </button>' . "\n";
    $toc .= '  <ol class="article-toc-list">' . "\n";

    foreach ( $toc_items as $item ) {
        $indent_class = $item['tag'] === 'h3' ? ' class="article-toc-sub"' : '';
        $toc .= '    <li' . $indent_class . '><a href="#' . esc_attr( $item['slug'] ) . '">' . esc_html( $item['text'] ) . '</a></li>' . "\n";
    }

    $toc .= '  </ol>' . "\n";
    $toc .= '</nav>' . "\n";

    return $toc . $content;
}
add_filter( 'the_content', 'bowland_pharmacy_add_toc', 8 );

/**
 * Consultation Closer — appended to the end of single blog post content.
 *
 * Mirrors the "Clinically Reviewed" block at the top of the article but
 * flipped for conversion: pharmacist photo + credentials on the left,
 * personal CTA on the right, compliance pills below.
 *
 * Runs at priority 12 so it appears after the TOC (priority 8) and after
 * shortcode processing (priority 11 default).
 */
function bowland_pharmacy_add_consultation_closer( $content ) {
    if ( ! is_single() || get_post_type() !== 'post' ) {
        return $content;
    }

    // Reviewer / pharmacist data (same fallback chain as single.php)
    $reviewer_name = bp_option( 'superintendent_pharmacist', 'Ahmed Al-Liabi' );
    $reviewer_gphc = bp_option( 'superintendent_gphc_number', '2208502' );
    $author_role   = bp_option( 'default_author_role', 'Lead Pharmacist' );
    $pharmacy_name = bp_pharmacy_name();
    $pharmacy_town = bp_option( 'pharmacy_town', 'Wythenshawe' );
    $booking_url   = bp_booking_url();
    $phone         = bp_phone();
    $phone_link    = bp_phone_link();
    $first_name    = explode( ' ', $reviewer_name )[0];

    // Reviewer avatar: post field → pharmacist option → empty
    $reviewer_avatar = '';
    if ( function_exists( 'get_field' ) ) {
        $reviewer_photo_id = get_field( 'reviewer_photo' );
        if ( $reviewer_photo_id ) {
            $reviewer_avatar = wp_get_attachment_image_url( $reviewer_photo_id, 'thumbnail' );
        }
    }
    if ( empty( $reviewer_avatar ) ) {
        $pharmacist_image = bp_option( 'pharmacist_image' );
        if ( $pharmacist_image ) {
            $reviewer_avatar = is_numeric( $pharmacist_image )
                ? wp_get_attachment_image_url( $pharmacist_image, 'thumbnail' )
                : ( is_array( $pharmacist_image ) ? $pharmacist_image['url'] : $pharmacist_image );
        }
    }

    // Build the HTML
    $avatar_html = '';
    if ( $reviewer_avatar ) {
        $avatar_html = '<img src="' . esc_url( $reviewer_avatar ) . '" alt="' . esc_attr( $reviewer_name ) . '" class="article-closer-avatar" />';
    }

    $gphc_html = '';
    if ( $reviewer_gphc ) {
        $gphc_html = '<span class="article-closer-pharmacist-gphc"><i class="fas fa-shield-halved"></i> GPhC: ' . esc_html( $reviewer_gphc ) . '</span>';
    }

    $closer  = '<div class="article-closer-card">';
    $closer .= '  <div class="article-closer-header">';
    $closer .= '    <i class="fas fa-calendar-check"></i>';
    $closer .= '    <span>Your Next Step</span>';
    $closer .= '  </div>';
    $closer .= '  <div class="article-closer-body">';
    $closer .= '    <div class="article-closer-pharmacist">';
    $closer .= '      ' . $avatar_html;
    $closer .= '      <div class="article-closer-pharmacist-info">';
    $closer .= '        <span class="article-closer-pharmacist-label">Clinically reviewed by</span>';
    $closer .= '        <span class="article-closer-pharmacist-name">' . esc_html( $reviewer_name ) . '</span>';
    $closer .= '        <span class="article-closer-pharmacist-role">' . esc_html( $author_role ) . ' &middot; Independent Prescriber</span>';
    $closer .= '        ' . $gphc_html;
    $closer .= '      </div>';
    $closer .= '    </div>';
    $closer .= '    <div class="article-closer-action">';
    $closer .= '      <p class="article-closer-title">Ready to take the next step?</p>';
    $closer .= '      <p class="article-closer-description">Book your consultation with ' . esc_html( $pharmacy_name ) . ' in ' . esc_html( $pharmacy_town ) . '. Same-day and next-day appointments usually available.</p>';
    $closer .= '      <div class="article-closer-buttons">';
    $closer .= '        <a href="' . esc_url( $booking_url ) . '" class="cta-button primary-cta article-closer-book">';
    $closer .= '          Book a Consultation';
    $closer .= '          <i class="fas fa-arrow-right"></i>';
    $closer .= '        </a>';
    $closer .= '        <a href="tel:' . esc_attr( $phone_link ) . '" class="article-closer-phone">';
    $closer .= '          <i class="fas fa-phone"></i>';
    $closer .= '          ' . esc_html( $phone );
    $closer .= '        </a>';
    $closer .= '      </div>';
    $closer .= '    </div>';
    $closer .= '  </div>';
    $closer .= '  <div class="article-closer-trust">';
    $closer .= '    <span class="article-closer-trust-item"><i class="fas fa-check-circle"></i> Same-Day Appointments</span>';
    $closer .= '    <span class="article-closer-trust-item"><i class="fas fa-check-circle"></i> No GP Referral Needed</span>';
    $closer .= '    <span class="article-closer-trust-item"><i class="fas fa-check-circle"></i> Face-to-Face Consultations</span>';
    $closer .= '  </div>';
    $closer .= '</div>';
    $closer .= '<div class="article-closer-compliance">';
    $closer .= '  <span class="article-closer-compliance-pill"><i class="fas fa-shield-halved"></i> GPhC Registered Pharmacy</span>';
    $closer .= '  <span class="article-closer-compliance-pill"><i class="fas fa-pills"></i> Prescription-Only Medicine</span>';
    $closer .= '  <span class="article-closer-compliance-pill"><i class="fas fa-user-doctor"></i> Clinical Criteria Apply</span>';
    $closer .= '</div>';

    return $content . "\n" . $closer;
}
add_filter( 'the_content', 'bowland_pharmacy_add_consultation_closer', 12 );

/**
 * Vimeo Video Shortcode — [vimeo url="..." title="..."]
 *
 * Renders a styled thumbnail card with play button inside blog post content.
 * Clicking the card opens the global video modal (video-modal.js).
 *
 * Fetches the Vimeo thumbnail via oEmbed API and caches it for 7 days.
 *
 * Attributes:
 *   url   — (required) Vimeo video URL
 *   title — (optional) Caption below the video card
 */
function bowland_pharmacy_vimeo_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'url'   => '',
        'title' => '',
    ), $atts, 'vimeo' );

    $url = esc_url( $atts['url'] );
    if ( empty( $url ) ) {
        return '';
    }

    // Extract video ID for cache key
    $video_id = '';
    if ( preg_match( '/vimeo\.com\/(\d+)/', $url, $m ) ) {
        $video_id = $m[1];
    } elseif ( preg_match( '/player\.vimeo\.com\/video\/(\d+)/', $url, $m ) ) {
        $video_id = $m[1];
    }

    if ( empty( $video_id ) ) {
        return '';
    }

    // Fetch thumbnail via Vimeo oEmbed, cached for 7 days
    $transient_key = 'bp_vimeo_thumb_' . $video_id;
    $thumbnail_url = get_transient( $transient_key );

    if ( false === $thumbnail_url ) {
        $oembed_url = 'https://vimeo.com/api/oembed.json?url=' . rawurlencode( $url ) . '&width=960';
        $response   = wp_remote_get( $oembed_url, array( 'timeout' => 5 ) );

        if ( ! is_wp_error( $response ) && 200 === wp_remote_retrieve_response_code( $response ) ) {
            $data = json_decode( wp_remote_retrieve_body( $response ), true );
            if ( ! empty( $data['thumbnail_url'] ) ) {
                $thumbnail_url = $data['thumbnail_url'];
            }
        }

        // Cache even empty result to avoid repeated failed requests
        if ( empty( $thumbnail_url ) ) {
            $thumbnail_url = '';
        }
        set_transient( $transient_key, $thumbnail_url, 7 * DAY_IN_SECONDS );
    }

    // Build the card
    $title_attr = ! empty( $atts['title'] ) ? $atts['title'] : 'Play video';

    ob_start();
    ?>
    <div class="vimeo-embed-card" onclick="openVideoModal('<?php echo esc_attr( $url ); ?>')" role="button" tabindex="0" aria-label="<?php echo esc_attr( $title_attr ); ?>" onkeydown="if(event.key==='Enter')openVideoModal('<?php echo esc_attr( $url ); ?>')">
        <div class="vimeo-embed-thumbnail">
            <?php if ( $thumbnail_url ) : ?>
                <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $title_attr ); ?>" loading="lazy" />
            <?php endif; ?>
            <div class="vimeo-embed-overlay">
                <div class="vimeo-embed-play">
                    <i class="fas fa-play"></i>
                </div>
            </div>
        </div>
        <?php if ( ! empty( $atts['title'] ) ) : ?>
            <div class="vimeo-embed-caption">
                <i class="fas fa-video"></i>
                <span><?php echo esc_html( $atts['title'] ); ?></span>
            </div>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'vimeo', 'bowland_pharmacy_vimeo_shortcode' );

/**
 * Mounjaro Weight Loss Calculator Shortcode — [mounjaro_calculator]
 *
 * Interactive calculator for blog posts showing projected weight loss
 * based on SURMOUNT-1 clinical trial data (tirzepatide 15 mg).
 *
 * Attributes:
 *   cta_url  — (optional) CTA button URL. Defaults to booking page.
 *   cta_text — (optional) CTA button text. Defaults to "Check Your Eligibility".
 */
function bowland_pharmacy_mounjaro_calculator_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'cta_url'  => '',
        'cta_text' => 'Check Your Eligibility',
    ), $atts, 'mounjaro_calculator' );

    $cta_url = $atts['cta_url'] ? esc_url( $atts['cta_url'] ) : esc_url( bp_booking_url() );

    ob_start();
    ?>
    <div class="mj-calc" id="mj-calc">
        <div class="mj-calc-header">
            <div class="mj-calc-badge">
                <i class="fas fa-bolt"></i>
                Takes 10 Seconds
            </div>
            <h3 class="mj-calc-title">How Much Could <span class="mj-calc-title-accent">You</span> Lose?</h3>
            <p class="mj-calc-subtitle">Enter your weight below &mdash; results are instant and private</p>
        </div>

        <div class="mj-calc-form">
            <div class="mj-calc-input-group">
                <label class="mj-calc-label" for="mj-calc-weight">Enter your current weight</label>
                <div class="mj-calc-unit-toggle" role="radiogroup" aria-label="Weight unit">
                    <button type="button" class="mj-calc-unit active" data-unit="kg" aria-pressed="true">kg</button>
                    <button type="button" class="mj-calc-unit" data-unit="st" aria-pressed="false">stone</button>
                    <button type="button" class="mj-calc-unit" data-unit="lbs" aria-pressed="false">lbs</button>
                </div>
                <div class="mj-calc-weight-fields">
                    <div class="mj-calc-field mj-calc-field-kg active">
                        <input type="number" id="mj-calc-weight" class="mj-calc-input" placeholder="e.g. 95" min="40" max="300" inputmode="decimal" />
                        <span class="mj-calc-input-suffix">kg</span>
                    </div>
                    <div class="mj-calc-field mj-calc-field-st">
                        <input type="number" class="mj-calc-input mj-calc-st" placeholder="e.g. 14" min="6" max="47" inputmode="numeric" />
                        <span class="mj-calc-input-suffix">st</span>
                        <input type="number" class="mj-calc-input mj-calc-st-lbs" placeholder="0" min="0" max="13" inputmode="numeric" />
                        <span class="mj-calc-input-suffix">lbs</span>
                    </div>
                    <div class="mj-calc-field mj-calc-field-lbs">
                        <input type="number" class="mj-calc-input" placeholder="e.g. 210" min="88" max="660" inputmode="numeric" />
                        <span class="mj-calc-input-suffix">lbs</span>
                    </div>
                </div>
            </div>

            <button type="button" class="mj-calc-submit" id="mj-calc-submit">
                <i class="fas fa-calculator"></i>
                Calculate My Results
            </button>
        </div>

        <div class="mj-calc-results" id="mj-calc-results" aria-live="polite">
            <div class="mj-calc-results-header">
                <div class="mj-calc-results-eyebrow">Your Projected Transformation</div>
                <div class="mj-calc-results-headline">
                    <span class="mj-calc-highlight" id="mj-calc-total-loss">&mdash;</span>
                </div>
                <div class="mj-calc-results-weight-row">
                    <span class="mj-calc-from-weight"><i class="fas fa-arrow-down"></i> <span id="mj-calc-from">&mdash;</span></span>
                    <span class="mj-calc-arrow">&rarr;</span>
                    <span class="mj-calc-to-weight"><i class="fas fa-check-circle"></i> <span id="mj-calc-to">&mdash;</span></span>
                </div>
                <p class="mj-calc-results-subtext">Based on the average 20.9% total body weight reduction in the SURMOUNT-1 trial (72 weeks, tirzepatide 15&nbsp;mg)</p>
            </div>

            <div class="mj-calc-timeline">
                <div class="mj-calc-timeline-item" data-week="12">
                    <span class="mj-calc-timeline-week">3 Months</span>
                    <div class="mj-calc-timeline-value" id="mj-calc-w12">&mdash;</div>
                    <div class="mj-calc-timeline-sublabel">lighter</div>
                </div>
                <div class="mj-calc-timeline-item" data-week="24">
                    <span class="mj-calc-timeline-week">6 Months</span>
                    <div class="mj-calc-timeline-value" id="mj-calc-w24">&mdash;</div>
                    <div class="mj-calc-timeline-sublabel">lighter</div>
                </div>
                <div class="mj-calc-timeline-item mj-calc-timeline-featured" data-week="72">
                    <div class="mj-calc-timeline-peak"><i class="fas fa-crown"></i> Your Goal</div>
                    <span class="mj-calc-timeline-week">18 Months</span>
                    <div class="mj-calc-timeline-value" id="mj-calc-w72">&mdash;</div>
                    <div class="mj-calc-timeline-sublabel">lighter</div>
                </div>
            </div>

            <div class="mj-calc-proof-bar">
                <i class="fas fa-check-circle"></i>
                <span><strong>91% of patients</strong> on Mounjaro lost clinically significant weight &mdash; SURMOUNT-1 Trial</span>
            </div>

            <a href="<?php echo $cta_url; ?>" class="mj-calc-cta">
                <?php echo esc_html( $atts['cta_text'] ); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <p class="mj-calc-disclaimer">
            <i class="fas fa-info-circle"></i>
            Results shown are estimates based on average outcomes from the SURMOUNT-1 clinical trial (tirzepatide 15&nbsp;mg, 72-week data). Individual results may vary significantly. Weight loss depends on adherence to treatment, diet, exercise, and individual metabolic factors. This calculator is for informational purposes only and does not constitute medical advice. Always consult a qualified healthcare professional before starting any weight loss treatment.
        </p>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'mounjaro_calculator', 'bowland_pharmacy_mounjaro_calculator_shortcode' );

/**
 * Contact Form AJAX Handler
 *
 * Processes the contact form submission via admin-ajax.php,
 * validates inputs, checks honeypot + nonce, and sends email via wp_mail().
 */
function bp_contact_form_handler() {
    // Verify nonce
    if ( ! isset( $_POST['bp_contact_nonce'] ) || ! wp_verify_nonce( $_POST['bp_contact_nonce'], 'bp_contact_form_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed. Please refresh the page and try again.' ) );
    }

    // Honeypot check
    if ( ! empty( $_POST['contact_website'] ) ) {
        wp_send_json_error( array( 'message' => 'Spam detected.' ) );
    }

    // Sanitise inputs
    $name    = sanitize_text_field( $_POST['contact_name'] ?? '' );
    $email   = sanitize_email( $_POST['contact_email'] ?? '' );
    $phone   = sanitize_text_field( $_POST['contact_phone'] ?? '' );
    $subject = sanitize_text_field( $_POST['contact_subject'] ?? '' );
    $message = sanitize_textarea_field( $_POST['contact_message'] ?? '' );

    // Validate required fields
    if ( empty( $name ) || empty( $email ) || empty( $subject ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    // Build email
    $to      = bp_option( 'pharmacy_email', 'info@bowlandpharmacy.co.uk' );
    $subject_line = '[' . bp_pharmacy_name() . ' Website] ' . $subject . ' from ' . $name;

    $body  = "New contact form submission from " . home_url() . "\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    if ( $phone ) {
        $body .= "Phone: " . $phone . "\n";
    }
    $body .= "Subject: " . $subject . "\n\n";
    $body .= "Message:\n" . $message . "\n";

    $headers = array(
        'From: ' . bp_pharmacy_name() . ' <wordpress@' . wp_parse_url( home_url(), PHP_URL_HOST ) . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail( $to, $subject_line, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Thank you! Your message has been sent successfully. We\'ll get back to you within 24 hours.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Sorry, there was an error sending your message. Please call us on ' . bp_phone() . ' instead.' ) );
    }
}
add_action( 'wp_ajax_bp_contact_form', 'bp_contact_form_handler' );
add_action( 'wp_ajax_nopriv_bp_contact_form', 'bp_contact_form_handler' );


/**
 * NHS Prescription Registration AJAX Handler
 *
 * Mirrors bp_contact_form_handler: nonce + honeypot, sanitises everything,
 * validates required fields, posts the body to pharmacy_email via wp_mail().
 * Replies are JSON for the JS in nhs-prescriptions-register.js to render
 * inline success/error state.
 */
function bp_npreg_form_handler() {
    if ( ! isset( $_POST['bp_npreg_nonce'] ) || ! wp_verify_nonce( $_POST['bp_npreg_nonce'], 'bp_npreg_form_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed. Please refresh the page and try again.' ) );
    }

    if ( ! empty( $_POST['npreg_website'] ) ) {
        wp_send_json_error( array( 'message' => 'Spam detected.' ) );
    }

    // Sanitise
    $name             = sanitize_text_field( $_POST['npreg_name'] ?? '' );
    $dob              = sanitize_text_field( $_POST['npreg_dob'] ?? '' );
    $phone            = sanitize_text_field( $_POST['npreg_phone'] ?? '' );
    $email            = sanitize_email( $_POST['npreg_email'] ?? '' );
    $address          = sanitize_textarea_field( $_POST['npreg_address'] ?? '' );
    $postcode         = sanitize_text_field( $_POST['npreg_postcode'] ?? '' );
    $nhs_number       = preg_replace( '/\s+/', '', sanitize_text_field( $_POST['npreg_nhs_number'] ?? '' ) );
    $gp_practice      = sanitize_text_field( $_POST['npreg_gp_practice'] ?? '' );
    $exemption        = sanitize_text_field( $_POST['npreg_exemption'] ?? '' );
    $collection       = sanitize_text_field( $_POST['npreg_collection'] ?? '' );
    $order_management = sanitize_text_field( $_POST['npreg_order_management'] ?? '' );
    $medication       = sanitize_textarea_field( $_POST['npreg_medication'] ?? '' );
    $scr_consent      = ! empty( $_POST['npreg_scr_consent'] );
    $referral         = sanitize_text_field( $_POST['npreg_referral'] ?? '' );
    $comments         = sanitize_textarea_field( $_POST['npreg_comments'] ?? '' );

    // Validate required
    $required = array(
        'Full name'                            => $name,
        'Date of birth'                        => $dob,
        'Phone number'                         => $phone,
        'Email address'                        => $email,
        'Home address'                         => $address,
        'Postcode'                             => $postcode,
        'NHS number'                           => $nhs_number,
        'GP practice name'                     => $gp_practice,
        'Prescription exemption'               => $exemption,
        'Prescription collection preference'   => $collection,
        'Medication list'                      => $medication,
    );
    foreach ( $required as $field_label => $value ) {
        if ( $value === '' ) {
            wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
        }
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    if ( ! preg_match( '/^\d{10}$/', $nhs_number ) ) {
        wp_send_json_error( array( 'message' => 'Please enter your 10-digit NHS number.' ) );
    }

    if ( ! $scr_consent ) {
        wp_send_json_error( array( 'message' => 'Please tick the Summary Care Record consent box to continue.' ) );
    }

    if ( empty( $order_management ) ) {
        wp_send_json_error( array( 'message' => 'Please confirm you understand you will need to order your own repeat prescriptions.' ) );
    }

    // Human-readable exemption / collection / order labels for the email body
    $exemption_labels = array(
        'pay' => 'I pay for my prescriptions (£9.90 per item)',
        'A'   => 'A — Aged 60 or over / under 16',
        'B'   => 'B — Aged 16–18 in full-time education',
        'D'   => 'D — Maternity Exemption Certificate (MatEx)',
        'E'   => 'E — Medical Exemption Certificate (MedEx)',
        'F'   => 'F — Prescription Prepayment Certificate (PPC)',
        'W'   => 'W — HRT Prescription Prepayment Certificate',
        'G'   => 'G — Ministry of Defence exemption',
        'L'   => 'L — HC2 certificate (full help)',
        'H'   => 'H — Income Support or income-related ESA',
        'K'   => "K — Income-based Jobseeker's Allowance",
        'M'   => 'M — Tax Credit exemption certificate',
        'S'   => 'S — Pension Credit Guarantee Credit',
        'U'   => 'U — Universal Credit (meets criteria)',
    );
    $collection_labels = array(
        'collect'  => 'Patient will collect from the pharmacy',
        'delivery' => 'Patient would like home delivery',
    );
    $order_labels = array(
        'acknowledged' => 'Acknowledged — patient will order their own repeat prescriptions (NHS app or surgery)',
    );
    $referral_labels = array(
        'social'  => 'Social Media (Facebook / Instagram)',
        'leaflet' => 'Leaflet Drop',
        'wom'     => 'Word of Mouth',
        'other'   => 'Other',
    );

    $exemption_display  = $exemption_labels[ $exemption ] ?? $exemption;
    $collection_display = $collection_labels[ $collection ] ?? $collection;
    $order_display      = $order_labels[ $order_management ] ?? $order_management;
    $referral_display   = $referral ? ( $referral_labels[ $referral ] ?? $referral ) : '';

    $to           = bp_option( 'pharmacy_email', 'info@bowlandpharmacy.co.uk' );
    $subject_line = '[' . bp_pharmacy_name() . '] New NHS Prescription Registration from ' . $name;

    $body  = "New NHS prescription registration via " . home_url( '/nominate-bowland-pharmacy/' ) . "\n";
    $body .= str_repeat( '=', 60 ) . "\n\n";

    $body .= "PERSONAL DETAILS\n" . str_repeat( '-', 60 ) . "\n";
    $body .= "Name:           " . $name . "\n";
    $body .= "Date of birth:  " . $dob . "\n";
    $body .= "Phone:          " . $phone . "\n";
    $body .= "Email:          " . $email . "\n";
    $body .= "Address:        " . $address . "\n";
    $body .= "Postcode:       " . $postcode . "\n";
    $body .= "NHS number:     " . $nhs_number . "\n\n";

    $body .= "GP DETAILS\n" . str_repeat( '-', 60 ) . "\n";
    $body .= "GP practice:    " . $gp_practice . "\n\n";

    $body .= "PRESCRIPTION PREFERENCES\n" . str_repeat( '-', 60 ) . "\n";
    $body .= "Exemption:      " . $exemption_display . "\n";
    $body .= "Collection:     " . $collection_display . "\n";
    $body .= "Order mgmt:     " . $order_display . "\n";
    $body .= "Medication:\n" . $medication . "\n\n";

    $body .= "CONSENT\n" . str_repeat( '-', 60 ) . "\n";
    $body .= "Summary Care Record access consent: YES\n\n";

    if ( $referral_display || $comments ) {
        $body .= "ADDITIONAL INFORMATION\n" . str_repeat( '-', 60 ) . "\n";
        if ( $referral_display ) {
            $body .= "How they heard about us: " . $referral_display . "\n";
        }
        if ( $comments ) {
            $body .= "Other comments:\n" . $comments . "\n";
        }
    }

    $headers = array(
        'From: ' . bp_pharmacy_name() . ' <wordpress@' . wp_parse_url( home_url(), PHP_URL_HOST ) . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail( $to, $subject_line, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array(
            'message' => 'Thank you for registering with ' . bp_pharmacy_name() . '. We will be in touch within 1 working day to confirm your registration.',
        ) );
    } else {
        wp_send_json_error( array(
            'message' => 'Sorry, there was an error sending your registration. Please call us on ' . bp_phone() . ' instead.',
        ) );
    }
}
add_action( 'wp_ajax_bp_npreg_form', 'bp_npreg_form_handler' );
add_action( 'wp_ajax_nopriv_bp_npreg_form', 'bp_npreg_form_handler' );
