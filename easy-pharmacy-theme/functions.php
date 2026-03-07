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

    if ( is_page_template( 'page-templates/page-reviewer-profile.php' ) ) {
        wp_enqueue_style( 'easy-pharmacy-reviewer-profile', EASY_PHARMACY_URI . '/assets/css/reviewer-profile.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
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

