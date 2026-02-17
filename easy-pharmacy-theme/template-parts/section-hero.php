<?php
/**
 * Template Part: Hero Section
 *
 * Homepage hero with badge, headline, CTAs, trust indicators, testimonial, and visual.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Page-level ACF fields with defaults
$badge_text       = ep_field( 'hero_badge_text', 'Serving Ashford, Chertsey & Surrounds' );
$title_line_1     = ep_field( 'hero_title_line_1', 'Lose Weight.' );
$title_line_2     = ep_field( 'hero_title_line_2', 'Travel Safe.' );
$title_line_3     = ep_field( 'hero_title_line_3', 'Live Better.' );
$description      = ep_field( 'hero_description', 'Clinically proven weight loss treatments, expert support, discreet delivery. Plus travel health, hair loss treatment, and full pharmacy services across Ashford & Kent.' );
$cta_text         = ep_field( 'hero_cta_text', 'Start Your Journey' );
$cta_url          = ep_field( 'hero_cta_url', esc_url( home_url( '/weight-loss/' ) ) );
$secondary_cta_text = ep_field( 'hero_secondary_cta_text', 'Popular Treatments' );
$secondary_cta_url  = ep_field( 'hero_secondary_cta_url', '#treatments' );

// Trust indicators
$trust_1 = ep_field( 'hero_trust_1', 'GPhC Registered' );
$trust_2 = ep_field( 'hero_trust_2', 'UK Licensed Meds' );
$trust_3 = ep_field( 'hero_trust_3', 'Local Ashford Service' );

// Testimonial
$testimonial_quote  = ep_field( 'hero_testimonial_quote', 'Thank you so much for your weight loss service. I\'ve tried everything over the years. With your help, I\'ve finally managed to lose 6 stones!' );
$testimonial_author = ep_field( 'hero_testimonial_author', 'Ashford Patient' );
$testimonial_result = ep_field( 'hero_testimonial_result', '6 Stone Lost' );

// Hero image
$hero_image_id  = ep_field( 'hero_image' );
$hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';
$hero_image_alt = $hero_image_id ? get_post_meta( $hero_image_id, '_wp_attachment_image_alt', true ) : 'Woman celebrating weight loss success at ' . esc_attr( ep_pharmacy_name() );

// Google rating from options
$google_rating       = ep_option( 'google_rating', '4.7' );
$google_review_count = ep_option( 'google_review_count', '300+' );
$google_review_url   = ep_option( 'google_review_url', '#' );
$pharmacy_location   = ep_option( 'pharmacy_town', 'Ashford, UK' );
?>

<section class="hero-section">

    <!-- Decorative background blobs -->
    <div class="hero-bg-shape-1"></div>
    <div class="hero-bg-shape-2"></div>

    <div class="section-container">
        <div class="hero-grid">

            <!-- LEFT: Content Column -->
            <div class="hero-content">

                <!-- Location badge -->
                <div class="hero-badge">
                    <span class="pulse-dot">
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hero-badge-text"><?php echo esc_html( $badge_text ); ?></span>
                </div>

                <!-- Headline -->
                <h1 class="hero-title">
                    <span class="gradient-text"><?php echo esc_html( $title_line_1 ); ?></span>
                    <span class="hero-accent-text"><?php echo esc_html( $title_line_2 ); ?></span>
                    <span class="gradient-text"><?php echo esc_html( $title_line_3 ); ?></span>
                </h1>

                <!-- Description -->
                <p class="hero-description">
                    <?php echo esc_html( $description ); ?>
                </p>

                <!-- CTAs -->
                <div class="hero-actions">
                    <a href="<?php echo esc_url( $cta_url ); ?>" class="cta-button primary-cta"><?php echo esc_html( $cta_text ); ?></a>
                    <a href="<?php echo esc_url( $secondary_cta_url ); ?>" class="cta-button secondary-cta">
                        <?php echo esc_html( $secondary_cta_text ); ?>
                        <i class="fas fa-chevron-down icon-small"></i>
                    </a>
                </div>

                <!-- Trust indicators -->
                <ul class="trust-indicators">
                    <li class="trust-item">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo esc_html( $trust_1 ); ?></span>
                    </li>
                    <li class="trust-item trust-divider">
                        <span class="dot-separator"></span>
                    </li>
                    <li class="trust-item">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo esc_html( $trust_2 ); ?></span>
                    </li>
                    <li class="trust-item trust-divider">
                        <span class="dot-separator"></span>
                    </li>
                    <li class="trust-item">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo esc_html( $trust_3 ); ?></span>
                    </li>
                </ul>

                <!-- Testimonial card -->
                <div class="hero-testimonial">
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
                    <div class="hero-testimonial-accent"></div>
                </div>

            </div>

            <!-- RIGHT: Visual Column -->
            <div class="hero-visual">

                <!-- Decorative glow -->
                <div class="hero-visual-glow"></div>

                <!-- Main image card -->
                <div class="hero-image-card">
                    <?php if ( $hero_image_url ) : ?>
                        <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( $hero_image_alt ); ?>" />
                    <?php else : ?>
                        <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/hero-default.jpg' ); ?>" alt="<?php echo esc_attr( 'Weight loss success at ' . ep_pharmacy_name() ); ?>" />
                    <?php endif; ?>
                    <div class="hero-overlay"></div>
                    <div class="hero-image-caption">
                        <p class="caption-label"><?php echo esc_html( ep_pharmacy_name() ); ?></p>
                        <p class="caption-title">Your Health,<br />Reimagined.</p>
                    </div>
                </div>

                <!-- Google rating badge -->
                <div class="rating-badge">
                    <div class="rating-header">
                        <div class="rating-label">
                            <div class="google-icon-wrapper">
                                <i class="fab fa-google"></i>
                            </div>
                            <span>Google Rating</span>
                        </div>
                        <div class="badge-success">
                            <i class="fas fa-check-circle"></i>
                            <span>Excellent</span>
                        </div>
                    </div>
                    <div class="rating-score">
                        <span class="score-number"><?php echo esc_html( $google_rating ); ?></span>
                        <div class="rating-score-detail">
                            <div class="star-row">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-count">Based on <?php echo esc_html( $google_review_count ); ?> reviews</span>
                        </div>
                    </div>
                    <div class="rating-footer">
                        <div class="rating-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo esc_html( $pharmacy_location ); ?></span>
                        </div>
                        <a href="<?php echo esc_url( $google_review_url ); ?>" class="rating-link">View Reviews</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
