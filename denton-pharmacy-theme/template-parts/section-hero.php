<?php
/**
 * Template Part: Hero Section
 *
 * Homepage hero with local badge, headline, CTAs, trust indicators, testimonial, and visual.
 * Pattern A: light background, two-column grid on desktop, centered on mobile.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Local badge ---
$badge_title    = dp_field( 'hero_badge_title', 'Your Local Denton Pharmacy' );
$badge_subtitle = dp_field( 'hero_badge_subtitle', 'Serving Denton, Manchester & Beyond' );

// --- Section badge ---
$badge_text = dp_field( 'hero_badge_text', 'Trusted by 5,000+ Patients' );

// --- Headline (allows <br>, <em>, <span> for styling) ---
$allowed_title_tags = array(
    'br'   => array(),
    'em'   => array( 'class' => array() ),
    'span' => array( 'class' => array() ),
);
$title = dp_field( 'hero_title', 'Lose Weight. <br><em class="hero-accent-text">Travel Safe.</em><br>Get NHS Care.' );

// --- Description ---
$description = dp_field( 'hero_description', 'Expert pharmacy services from your local Denton team. Clinically-led weight loss, travel vaccinations, and NHS care — with free delivery across Manchester.' );

// --- CTAs ---
$cta_primary_text   = dp_field( 'hero_cta_primary_text', 'Start Your Journey' );
$cta_primary_url    = dp_booking_url();
$cta_secondary_text = dp_field( 'hero_cta_secondary_text', 'Popular Treatments' );
$cta_secondary_url  = '#treatments';

// --- Trust indicators ---
$trust_indicators = dp_field( 'hero_trust_indicators' );
if ( empty( $trust_indicators ) || ! is_array( $trust_indicators ) ) {
    $trust_indicators = array(
        array( 'icon' => 'fas fa-shield-halved', 'text' => 'GPhC Registered' ),
        array( 'icon' => 'fas fa-check-circle',  'text' => 'UK Licensed' ),
        array( 'icon' => 'fas fa-heart',          'text' => 'NHS & Private' ),
    );
}

// --- Testimonial ---
$testimonial_quote  = dp_field( 'hero_testimonial_quote', 'Incredible service from start to finish. Lost 6 stone with their support — couldn\'t recommend more!' );
$testimonial_author = dp_field( 'hero_testimonial_author', 'Sarah M.' );
$testimonial_result = dp_field( 'hero_testimonial_result', '6 Stone Lost' );

// --- Hero image (ACF image field, return format: ID) ---
$hero_image_id  = dp_field( 'hero_image' );
$hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';
$hero_image_alt = $hero_image_id
    ? get_post_meta( $hero_image_id, '_wp_attachment_image_alt', true )
    : 'Pharmacy services at ' . esc_attr( dp_pharmacy_name() );

// --- Google rating (global options + page overrides) ---
$google_rating       = dp_option( 'google_rating', '4.7' );
$google_review_url   = dp_option( 'google_review_url', '#' );
$pharmacy_location   = dp_option( 'pharmacy_town', 'Denton' );

// --- Rating card (page-level fields with defaults) ---
$rating_label       = dp_field( 'hero_rating_label', 'Google Rating' );
$rating_stars       = (int) dp_field( 'hero_rating_stars', 5 );
$rating_count_label = dp_field( 'hero_rating_count_label', 'Based on 300+ reviews' );
$rating_link_text   = dp_field( 'hero_rating_link_text', 'View Reviews' );
?>

<section class="hero-section">

    <div class="section-container">
        <div class="hero-grid">

            <!-- LEFT: Content Column -->
            <div class="hero-content">

                <!-- Local badge -->
                <div class="hero-local-badge">
                    <div class="hero-local-badge-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="hero-local-badge-content">
                        <span><?php echo esc_html( $badge_title ); ?></span>
                        <span><?php echo esc_html( $badge_subtitle ); ?></span>
                    </div>
                </div>

                <!-- Headline -->
                <h1 class="hero-title">
                    <span class="gradient-text"><?php echo wp_kses( $title, $allowed_title_tags ); ?></span>
                </h1>

                <!-- Description -->
                <p class="hero-description">
                    <?php echo esc_html( $description ); ?>
                </p>

                <!-- CTAs -->
                <div class="hero-actions">
                    <a href="<?php echo esc_url( $cta_primary_url ); ?>" class="cta-button primary-cta">
                        <?php echo esc_html( $cta_primary_text ); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo esc_url( $cta_secondary_url ); ?>" class="cta-button secondary-cta">
                        <?php echo esc_html( $cta_secondary_text ); ?>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>

                <!-- Trust indicators -->
                <ul class="trust-indicators">
                    <?php foreach ( $trust_indicators as $i => $indicator ) : ?>
                        <?php if ( $i > 0 ) : ?>
                            <li class="trust-item trust-divider">
                                <span class="dot-separator"></span>
                            </li>
                        <?php endif; ?>
                        <li class="trust-item">
                            <i class="<?php echo esc_attr( $indicator['icon'] ); ?>"></i>
                            <span><?php echo esc_html( $indicator['text'] ); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Testimonial card (mobile only — desktop version overlaps the image) -->
                <div class="hero-testimonial mobile-only">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="hero-quote">
                        "<?php echo esc_html( $testimonial_quote ); ?>"
                    </p>
                    <div class="hero-testimonial-footer">
                        <div class="hero-testimonial-author">
                            <p class="author-name"><?php echo esc_html( $testimonial_author ); ?></p>
                            <div class="star-row">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="result-badge">
                            <i class="fas fa-weight-scale"></i>
                            <span><?php echo esc_html( $testimonial_result ); ?></span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT: Visual Column (desktop-only) -->
            <div class="hero-visual desktop-only">

                <!-- Decorative glow -->
                <div class="hero-visual-glow"></div>

                <!-- Main image card (rotated -2deg with white border) -->
                <div class="hero-image-card">
                    <?php if ( $hero_image_url ) : ?>
                        <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( $hero_image_alt ); ?>" />
                    <?php else : ?>
                        <img src="<?php echo esc_url( DENTON_PHARMACY_URI . '/assets/images/hero-default.jpg' ); ?>" alt="<?php echo esc_attr( 'Pharmacy services at ' . dp_pharmacy_name() ); ?>" />
                    <?php endif; ?>
                    <div class="hero-overlay"></div>
                </div>

                <!-- Testimonial card (overlapping bottom-left of image) -->
                <div class="hero-testimonial hero-testimonial-overlay">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="hero-quote">
                        "<?php echo esc_html( $testimonial_quote ); ?>"
                    </p>
                    <div class="hero-testimonial-footer">
                        <div class="hero-testimonial-author">
                            <p class="author-name"><?php echo esc_html( $testimonial_author ); ?></p>
                            <div class="star-row">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="result-badge">
                            <i class="fas fa-weight-scale"></i>
                            <span><?php echo esc_html( $testimonial_result ); ?></span>
                        </div>
                    </div>
                </div>

                <!-- Google rating badge (absolute positioned) -->
                <div class="rating-badge">
                    <div class="rating-header">
                        <div class="rating-label">
                            <div class="google-icon-wrapper">
                                <i class="fab fa-google"></i>
                            </div>
                            <span><?php echo esc_html( $rating_label ); ?></span>
                        </div>
                    </div>
                    <div class="rating-score">
                        <span class="score-number"><?php echo esc_html( $google_rating ); ?></span>
                        <div class="rating-score-detail">
                            <div class="star-row">
                                <?php for ( $s = 0; $s < $rating_stars; $s++ ) : ?>
                                    <i class="fas fa-star"></i>
                                <?php endfor; ?>
                            </div>
                            <span class="rating-count"><?php echo esc_html( $rating_count_label ); ?></span>
                        </div>
                    </div>
                    <div class="rating-footer">
                        <div class="rating-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo esc_html( $pharmacy_location ); ?></span>
                        </div>
                        <a href="<?php echo esc_url( $google_review_url ); ?>" class="rating-link"><?php echo esc_html( $rating_link_text ); ?></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
