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

define( 'EASY_PHARMACY_VERSION', filemtime( __FILE__ ) );
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

    add_image_size( 'medium-large', 720, 9999, false );
    add_image_size( 'treatment-card', 600, 400, true );
    add_image_size( 'health-hub-featured', 800, 600, true );
    add_image_size( 'health-hub-card', 600, 400, true );
    add_image_size( 'pharmacist-photo', 600, 750, true );
}
add_action( 'after_setup_theme', 'easy_pharmacy_setup' );

/**
 * Add custom "Medium Large" image size to the editor dropdown.
 */
function easy_pharmacy_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'medium-large' => __( 'Medium Large (720px)', 'easy-pharmacy' ),
    ) );
}
add_filter( 'image_size_names_choose', 'easy_pharmacy_custom_image_sizes' );

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

    // Home page scroll reveal animations
    if ( is_page_template( 'page-templates/page-home.php' ) ) {
        wp_enqueue_script( 'easy-pharmacy-home-animations', EASY_PHARMACY_URI . '/assets/js/home-animations.js', array(), EASY_PHARMACY_VERSION, true );
    }

    // Page-specific CSS
    if ( is_page_template( 'page-templates/page-weight-loss.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-weight-loss', EASY_PHARMACY_URI . '/assets/css/weight-loss.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-weight-loss-js', EASY_PHARMACY_URI . '/assets/js/weight-loss.js', array(), EASY_PHARMACY_VERSION, true );
        wp_enqueue_style( 'easy-pharmacy-blog', EASY_PHARMACY_URI . '/assets/css/blog.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-blog-js', EASY_PHARMACY_URI . '/assets/js/blog.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-travel-health.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-travel-health', EASY_PHARMACY_URI . '/assets/css/travel-health.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-travel-health-js', EASY_PHARMACY_URI . '/assets/js/travel-health.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-travel-thailand.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-travel-thailand', EASY_PHARMACY_URI . '/assets/css/travel-thailand.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
    }

    if ( is_page_template( 'page-templates/page-health-hub.php' ) || is_home() || is_category() || is_tag() || is_archive() ) {
        wp_enqueue_style( 'easy-pharmacy-blog', EASY_PHARMACY_URI . '/assets/css/blog.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-blog-js', EASY_PHARMACY_URI . '/assets/js/blog.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_single() ) {
        wp_enqueue_style( 'easy-pharmacy-blog', EASY_PHARMACY_URI . '/assets/css/blog.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-blog-js', EASY_PHARMACY_URI . '/assets/js/blog.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-book-appointment.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-book-appointment', EASY_PHARMACY_URI . '/assets/css/book-appointment.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-book-appointment-js', EASY_PHARMACY_URI . '/assets/js/book-appointment.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-booking-confirmed.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-booking-confirmed', EASY_PHARMACY_URI . '/assets/css/booking-confirmed.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
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
        wp_enqueue_script( 'easy-pharmacy-switch-provider-js', EASY_PHARMACY_URI . '/assets/js/switch-provider.js', array(), EASY_PHARMACY_VERSION, true );
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
        wp_enqueue_script( 'easy-pharmacy-typhoid-js', EASY_PHARMACY_URI . '/assets/js/typhoid.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-malaria.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-malaria', EASY_PHARMACY_URI . '/assets/css/malaria.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-malaria-js', EASY_PHARMACY_URI . '/assets/js/malaria.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-reviewer-profile.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-reviewer-profile', EASY_PHARMACY_URI . '/assets/css/reviewer-profile.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
    }

    if ( is_page_template( 'page-templates/page-smoking-cessation.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-smoking-cessation', EASY_PHARMACY_URI . '/assets/css/smoking-cessation.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-smoking-cessation-js', EASY_PHARMACY_URI . '/assets/js/smoking-cessation.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-altitude-sickness.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-altitude-sickness', EASY_PHARMACY_URI . '/assets/css/altitude-sickness.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-altitude-sickness-js', EASY_PHARMACY_URI . '/assets/js/altitude-sickness.js', array(), EASY_PHARMACY_VERSION, true );
    }

    if ( is_page_template( 'page-templates/page-b12-injections.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-b12-injections', EASY_PHARMACY_URI . '/assets/css/b12-injections.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
        wp_enqueue_script( 'easy-pharmacy-b12-injections-js', EASY_PHARMACY_URI . '/assets/js/b12-injections.js', array(), EASY_PHARMACY_VERSION, true );
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

    // Video Modal JS - Vimeo player modal, loaded on all pages in footer
    wp_enqueue_script(
        'easy-pharmacy-video-modal',
        EASY_PHARMACY_URI . '/assets/js/video-modal.js',
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
        if ( $value === null || $value === '' ) {
            return $default;
        }
        return $value;
    }
    return $default;
}

/**
 * Helper: Get page field with fallback
 */
function ep_field( $field_name, $default = '' ) {
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
function ep_fa_class( $icon_class ) {
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
function ep_logo_url() {
    $logo_id = ep_option( 'pharmacy_logo' );
    if ( $logo_id ) {
        return wp_get_attachment_image_url( $logo_id, 'full' );
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

/**
 * Theme Activation: Create default Health Hub categories and set permalink structure.
 *
 * Runs once when the theme is first activated. Creates the standard pharmacy
 * content categories so they appear immediately in the post editor, and sets
 * the permalink structure to /health-hub/post-slug/ for clean blog URLs.
 */
function easy_pharmacy_activation() {
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
add_action( 'after_switch_theme', 'easy_pharmacy_activation' );

/**
 * Ensure permalink structure stays set to /health-hub/%postname%/.
 *
 * The after_switch_theme hook only fires once. If rewrite rules are lost
 * (plugin flush, WP update, Kinsta deploy), posts return 404. This checks
 * on init and flushes when the structure drifts or when rules are empty.
 * A transient prevents flushing on every page load.
 */
function easy_pharmacy_ensure_permalinks() {
    $desired = '/health-hub/%postname%/';

    // If the permalink option itself was changed, fix it immediately.
    if ( get_option( 'permalink_structure' ) !== $desired ) {
        update_option( 'permalink_structure', $desired );
        flush_rewrite_rules();
        return;
    }

    // If rewrite rules are empty (cleared by plugin/update/deploy), regenerate.
    // Use a transient so we only check once per hour, not every request.
    if ( false === get_transient( 'ep_rewrite_rules_ok' ) ) {
        $rules = get_option( 'rewrite_rules' );
        if ( empty( $rules ) ) {
            flush_rewrite_rules();
        }
        set_transient( 'ep_rewrite_rules_ok', 1, HOUR_IN_SECONDS );
    }
}
add_action( 'init', 'easy_pharmacy_ensure_permalinks' );

/**
 * Output structured data (JSON-LD) for single blog posts.
 *
 * Generates MedicalWebPage schema with author, reviewer, publisher,
 * and FAQPage schema when FAQ fields are populated.
 */
function easy_pharmacy_post_schema() {
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
    $author_role = ep_option( 'default_author_role', 'Lead Pharmacist' );

    // Reviewer (superintendent pharmacist)
    $reviewer_name = ep_option( 'superintendent_pharmacist', 'Dilip Modhvadia' );
    $reviewer_gphc = ep_option( 'superintendent_gphc_number', '' );
    $reviewer_url  = ep_option( 'gphc_verify_url', '' );

    // Publisher
    $pharmacy_name = ep_pharmacy_name();
    $logo_url      = ep_logo_url();

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
add_action( 'wp_head', 'easy_pharmacy_post_schema' );

/**
 * Auto-generate a Table of Contents for single blog posts.
 *
 * Parses all <h2> and <h3> headings in the post content, injects anchor
 * IDs onto each heading, and prepends a TOC card. Headings that already
 * have an id attribute are reused. The TOC is collapsible on mobile.
 *
 * Can be disabled per-post via the "show_table_of_contents" ACF field.
 */
function easy_pharmacy_add_toc( $content ) {
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
add_filter( 'the_content', 'easy_pharmacy_add_toc', 8 );

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
function easy_pharmacy_add_consultation_closer( $content ) {
    if ( ! is_single() || get_post_type() !== 'post' ) {
        return $content;
    }

    // Reviewer / pharmacist data (same fallback chain as single.php)
    $reviewer_name = ep_option( 'superintendent_pharmacist', 'Dilip Modhvadia' );
    $reviewer_gphc = ep_option( 'superintendent_gphc_number', '2050606' );
    $author_role   = ep_option( 'default_author_role', 'Lead Pharmacist' );
    $pharmacy_name = ep_pharmacy_name();
    $pharmacy_town = ep_option( 'pharmacy_town', 'Ashford' );
    $booking_url   = ep_booking_url();
    $phone         = ep_phone();
    $phone_link    = ep_phone_link();
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
        $pharmacist_image = ep_option( 'pharmacist_image' );
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
    $closer .= '        <span class="article-closer-pharmacist-label">Your consultation with</span>';
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
    $closer .= '          Book with ' . esc_html( $first_name );
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
add_filter( 'the_content', 'easy_pharmacy_add_consultation_closer', 12 );

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
function easy_pharmacy_vimeo_shortcode( $atts ) {
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
    $transient_key = 'ep_vimeo_thumb_' . $video_id;
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
add_shortcode( 'vimeo', 'easy_pharmacy_vimeo_shortcode' );

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
function easy_pharmacy_mounjaro_calculator_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'cta_url'  => '',
        'cta_text' => 'Check Your Eligibility',
    ), $atts, 'mounjaro_calculator' );

    $cta_url = $atts['cta_url'] ? esc_url( $atts['cta_url'] ) : esc_url( ep_booking_url() );

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
                    <span class="mj-calc-highlight" id="mj-calc-total-loss">—</span>
                </div>
                <div class="mj-calc-results-weight-row">
                    <span class="mj-calc-from-weight"><i class="fas fa-arrow-down"></i> <span id="mj-calc-from">—</span></span>
                    <span class="mj-calc-arrow">→</span>
                    <span class="mj-calc-to-weight"><i class="fas fa-check-circle"></i> <span id="mj-calc-to">—</span></span>
                </div>
                <p class="mj-calc-results-subtext">Based on the average 20.9% total body weight reduction in the SURMOUNT-1 trial (72 weeks, tirzepatide 15&nbsp;mg)</p>
            </div>

            <div class="mj-calc-timeline">
                <div class="mj-calc-timeline-item" data-week="12">
                    <span class="mj-calc-timeline-week">3 Months</span>
                    <div class="mj-calc-timeline-value" id="mj-calc-w12">—</div>
                    <div class="mj-calc-timeline-sublabel">lighter</div>
                </div>
                <div class="mj-calc-timeline-item" data-week="24">
                    <span class="mj-calc-timeline-week">6 Months</span>
                    <div class="mj-calc-timeline-value" id="mj-calc-w24">—</div>
                    <div class="mj-calc-timeline-sublabel">lighter</div>
                </div>
                <div class="mj-calc-timeline-item mj-calc-timeline-featured" data-week="72">
                    <div class="mj-calc-timeline-peak"><i class="fas fa-crown"></i> Your Goal</div>
                    <span class="mj-calc-timeline-week">18 Months</span>
                    <div class="mj-calc-timeline-value" id="mj-calc-w72">—</div>
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
add_shortcode( 'mounjaro_calculator', 'easy_pharmacy_mounjaro_calculator_shortcode' );

