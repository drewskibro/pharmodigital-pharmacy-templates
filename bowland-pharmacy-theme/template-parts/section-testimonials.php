<?php
/**
 * Template Part: Testimonials Section
 *
 * Asymmetric grid with 3 testimonial cards (1 large + 2 medium) and
 * a CTA card. Uses an ACF repeater when available, falling back to
 * hardcoded Bowland Pharmacy patient testimonials.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section header fields ---
$badge_text        = bp_field( 'testimonials_badge_text', 'Real Transformations' );
$title_start       = bp_field( 'testimonials_title_start', 'Real Results.' );
$title_highlight   = bp_field( 'testimonials_title_highlight', 'Lasting Health.' );
$description       = bp_field( 'testimonials_description', 'See how our patients across Wythenshawe have transformed their health with our personalised care.' );
$disclaimer        = bp_field( 'testimonials_disclaimer', 'The results below are from real Bowland Pharmacy patients. Individual results may vary.' );
$verified_label_lg = bp_field( 'testimonials_verified_label', 'Verified Patient' );
$verified_label_sm = bp_field( 'testimonials_verified_label_short', 'Verified' );
$transparency_label = bp_field( 'testimonials_transparency_label', 'Transparency Note:' );

// --- CTA card fields ---
$cta_title  = bp_field( 'testimonials_cta_title', 'Trusted by 10,000+ Bowland Customers' );
$cta_text   = bp_field( 'testimonials_cta_text', 'No waiting lists. No hidden fees. Just expert, local healthcare you can rely on.' );
$rating     = bp_option( 'google_rating', '4.9' );

// --- Allowed HTML for default testimonial highlight spans ---
$allowed_highlight_tags = array(
    'span' => array( 'class' => array() ),
);

// --- Default testimonials (fallback only — populate via ACF for production) ---
// Real Google Reviews from Bowland Pharmacy patients.
$default_testimonials = array(
    array(
        'name'       => 'Michelle P.',
        'service'    => 'NHS Prescriptions',
        'quote'      => 'I had many issues in the past with other pharmacies that got things wrong. <span class="testimonial-highlight">Using Bowland Pharmacy puts my mind at ease</span>.',
        'highlights' => array(
            array( 'icon' => 'fa-shield-halved', 'text' => 'Trustworthy' ),
            array( 'icon' => 'fa-user-doctor',   'text' => 'Pharmacist Care' ),
            array( 'icon' => 'fa-heart',         'text' => 'Peace of Mind' ),
        ),
        'checklist'  => array(),
    ),
    array(
        'name'       => 'Willie W.',
        'service'    => 'NHS Prescriptions',
        'quote'      => 'Just <span class="testimonial-highlight">incredible customer service</span>, amazing staff and a great way to receive prescriptions! <span class="testimonial-highlight">A pharmacy to remember</span>.',
        'highlights' => array(),
        'checklist'  => array( 'Incredible Service', 'Amazing Staff' ),
    ),
    array(
        'name'       => 'Verified Patient',
        'service'    => 'Bowland Pharmacy',
        'quote'      => 'Add a real Google Review here. Edit from <span class="testimonial-highlight">wp-admin → Pages → Home Page → Testimonials</span>.',
        'highlights' => array(),
        'checklist'  => array( 'Edit me' ),
    ),
);

// --- Try ACF repeater first, fall back to defaults ---
$testimonials    = array();
$use_acf_content = false;

if ( function_exists( 'have_rows' ) && have_rows( 'testimonials' ) ) {
    while ( have_rows( 'testimonials' ) ) {
        the_row();
        $name    = get_sub_field( 'testimonial_name' ) ?: '';
        $service = get_sub_field( 'testimonial_service' ) ?: '';
        $quote   = get_sub_field( 'testimonial_quote' ) ?: '';

        // Extract initials from the name (first letter of each word, uppercased)
        $initials = '';
        if ( $name ) {
            $words = preg_split( '/\s+/', trim( $name ) );
            foreach ( $words as $word ) {
                if ( $word !== '' ) {
                    $initials .= strtoupper( mb_substr( $word, 0, 1 ) );
                }
            }
        }

        // Highlights repeater (nested)
        $highlights = array();
        if ( have_rows( 'testimonial_highlights' ) ) {
            while ( have_rows( 'testimonial_highlights' ) ) {
                the_row();
                $highlights[] = array(
                    'icon' => get_sub_field( 'highlight_icon' ) ?: 'fa-check',
                    'text' => get_sub_field( 'highlight_text' ) ?: '',
                );
            }
        }

        // Checklist repeater (nested)
        $checklist = array();
        if ( have_rows( 'testimonial_checklist' ) ) {
            while ( have_rows( 'testimonial_checklist' ) ) {
                the_row();
                $item_text = get_sub_field( 'checklist_text' ) ?: '';
                if ( $item_text ) {
                    $checklist[] = $item_text;
                }
            }
        }

        $testimonials[] = array(
            'name'       => $name,
            'initials'   => $initials,
            'service'    => $service,
            'quote'      => $quote,
            'highlights' => $highlights,
            'checklist'  => $checklist,
        );
    }
    $use_acf_content = true;
}

if ( empty( $testimonials ) ) {
    // Prepare defaults with pre-computed initials
    foreach ( $default_testimonials as $dt ) {
        $words    = preg_split( '/\s+/', trim( $dt['name'] ) );
        $initials = '';
        foreach ( $words as $word ) {
            if ( $word !== '' ) {
                $initials .= strtoupper( mb_substr( $word, 0, 1 ) );
            }
        }
        $dt['initials'] = $initials;
        $testimonials[] = $dt;
    }
    $use_acf_content = false;
}
?>

<section class="testimonials-section">
    <div class="section-container">

        <!-- Section header -->
        <div class="testimonials-header">
            <div class="section-badge">
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="testimonials-title">
                <?php echo esc_html( $title_start ); ?> <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span>
            </h2>
            <p class="testimonials-description"><?php echo esc_html( $description ); ?></p>
            <div class="testimonials-disclaimer">
                <i class="fas fa-info-circle"></i>
                <p><strong><?php echo esc_html( $transparency_label ); ?></strong> <?php echo esc_html( $disclaimer ); ?></p>
            </div>
        </div>

        <!-- Testimonials grid -->
        <div class="testimonials-grid">

            <?php foreach ( $testimonials as $index => $testimonial ) :
                // First testimonial is "large", rest are "medium"
                $is_large    = ( $index === 0 );
                $card_class  = $is_large ? 'testimonial-card testimonial-card-large' : 'testimonial-card testimonial-card-medium';
                $star_class  = $is_large ? 'star-row star-row-large' : 'star-row';
                $quote_class = $is_large ? 'testimonial-quote testimonial-quote-large' : 'testimonial-quote';
                $avatar_class = $is_large ? 'testimonial-avatar testimonial-avatar-large' : 'testimonial-avatar';
                $name_class  = $is_large ? 'testimonial-author-name testimonial-author-name-large' : 'testimonial-author-name';
                $verified_label = $is_large ? $verified_label_lg : $verified_label_sm;
            ?>
                <div class="<?php echo esc_attr( $card_class ); ?>">

                    <!-- Verified badge -->
                    <div class="testimonial-verified">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo esc_html( $verified_label ); ?></span>
                    </div>

                    <div class="testimonial-card-body">

                        <!-- Star rating -->
                        <div class="<?php echo esc_attr( $star_class ); ?>">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <!-- Quote -->
                        <blockquote class="<?php echo esc_attr( $quote_class ); ?>">
                            <?php if ( $use_acf_content ) : ?>
                                &ldquo;<?php echo esc_html( $testimonial['quote'] ); ?>&rdquo;
                            <?php else : ?>
                                &ldquo;<?php echo wp_kses( $testimonial['quote'], $allowed_highlight_tags ); ?>&rdquo;
                            <?php endif; ?>
                        </blockquote>

                        <!-- Author row -->
                        <div class="testimonial-author-row">
                            <div class="<?php echo esc_attr( $avatar_class ); ?>">
                                <?php echo esc_html( $testimonial['initials'] ); ?>
                            </div>
                            <div class="testimonial-author-info">
                                <span class="testimonial-service"><?php echo esc_html( $testimonial['service'] ); ?></span>
                                <h4 class="<?php echo esc_attr( $name_class ); ?>"><?php echo esc_html( $testimonial['name'] ); ?></h4>
                                <p class="testimonial-author-status"><?php echo esc_html( $verified_label_lg ); ?></p>
                            </div>
                        </div>

                        <?php if ( ! empty( $testimonial['highlights'] ) ) : ?>
                            <!-- Highlight items (used on large card) -->
                            <div class="testimonial-highlights">
                                <?php foreach ( $testimonial['highlights'] as $highlight ) :
                                    $icon_class = bp_fa_class( $highlight['icon'] );
                                ?>
                                    <div class="testimonial-highlight-item">
                                        <i class="<?php echo esc_attr( $icon_class ); ?>"></i>
                                        <span><?php echo esc_html( $highlight['text'] ); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ! empty( $testimonial['checklist'] ) ) : ?>
                            <!-- Checklist items (used on medium cards) -->
                            <div class="testimonial-checklist">
                                <?php foreach ( $testimonial['checklist'] as $check_item ) : ?>
                                    <div class="testimonial-check">
                                        <i class="fas fa-check"></i>
                                        <span><?php echo esc_html( $check_item ); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            <?php endforeach; ?>

            <!-- CTA Card -->
            <div class="testimonial-card testimonial-card-cta">
                <div class="testimonial-cta-glow"></div>
                <div class="testimonial-cta-body">
                    <div class="testimonial-cta-content">
                        <h3 class="testimonial-cta-title"><?php echo esc_html( $cta_title ); ?></h3>
                        <p class="testimonial-cta-text"><?php echo esc_html( $cta_text ); ?></p>
                    </div>
                    <div class="testimonial-cta-rating">
                        <div class="testimonial-cta-rating-card">
                            <span class="testimonial-cta-score"><?php echo esc_html( $rating ); ?></span>
                            <div class="star-row star-row-small">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="testimonial-cta-label">Google Rating</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
