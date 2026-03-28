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

// --- NHS accent strip ---
$default_nhs_pills = array(
    array( 'icon' => 'fa-hand-holding-medical', 'text' => 'Pharmacy First' ),
    array( 'icon' => 'fa-pills',                'text' => 'Free NHS Prescriptions' ),
    array( 'icon' => 'fa-syringe',              'text' => 'NHS Flu Jabs' ),
);

$nhs_pills = array();
if ( function_exists( 'have_rows' ) && have_rows( 'hero_nhs_pills' ) ) {
    while ( have_rows( 'hero_nhs_pills' ) ) {
        the_row();
        $nhs_pills[] = array(
            'icon' => get_sub_field( 'pill_icon' ) ?: 'fa-check',
            'text' => get_sub_field( 'pill_text' ) ?: '',
        );
    }
}

if ( empty( $nhs_pills ) ) {
    $nhs_pills = $default_nhs_pills;
}

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
        array( 'icon' => 'fas fa-certificate',    'text' => 'UK Licensed' ),
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

                <!-- NHS accent strip -->
                <div class="hero-nhs-strip hero-stagger hero-stagger-1">
                    <span class="hero-nhs-label">
                        <i class="fas fa-plus"></i>
                        NHS
                    </span>
                    <?php foreach ( $nhs_pills as $pill ) :
                        $pill_icon = dp_fa_class( $pill['icon'] );
                    ?>
                        <span class="hero-nhs-pill">
                            <i class="fas <?php echo esc_attr( $pill_icon ); ?>"></i>
                            <?php echo esc_html( $pill['text'] ); ?>
                        </span>
                    <?php endforeach; ?>
                </div>

                <?php
                // --- Headline: 3 lines with rotating middle ---
                $hero_line_1 = dp_field( 'hero_title_line_1', 'Lose Weight.' );
                $hero_line_3 = dp_field( 'hero_title_line_3', 'Get NHS Care.' );

                // Rotating phrases for line 2 (ACF repeater or defaults)
                $default_rotate_phrases = array( 'Travel Safe.', 'Feel Great.', 'Live Better.' );
                $rotate_phrases = array();
                if ( function_exists( 'have_rows' ) && have_rows( 'hero_rotate_phrases' ) ) {
                    while ( have_rows( 'hero_rotate_phrases' ) ) {
                        the_row();
                        $phrase = get_sub_field( 'phrase' );
                        if ( $phrase ) {
                            $rotate_phrases[] = $phrase;
                        }
                    }
                }
                if ( empty( $rotate_phrases ) ) {
                    $rotate_phrases = $default_rotate_phrases;
                }
                ?>

                <!-- Headline with staggered lines -->
                <h1 class="hero-title">
                    <span class="gradient-text hero-stagger hero-stagger-2"><?php echo esc_html( $hero_line_1 ); ?></span>
                    <span class="hero-rotate-wrapper hero-stagger hero-stagger-3" aria-label="<?php echo esc_attr( implode( ', ', $rotate_phrases ) ); ?>">
                        <?php foreach ( $rotate_phrases as $p_index => $phrase ) : ?>
                            <span class="hero-rotate-phrase<?php echo $p_index === 0 ? ' active' : ''; ?>"><?php echo esc_html( $phrase ); ?></span>
                        <?php endforeach; ?>
                    </span>
                    <span class="gradient-text hero-stagger hero-stagger-4"><?php echo esc_html( $hero_line_3 ); ?></span>
                </h1>

                <!-- Description -->
                <p class="hero-description hero-stagger hero-stagger-5">
                    <?php echo esc_html( $description ); ?>
                </p>

                <!-- CTAs -->
                <div class="hero-actions hero-stagger hero-stagger-6">
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
                <ul class="trust-indicators hero-stagger hero-stagger-7">
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
                <div class="hero-testimonial mobile-only hero-stagger hero-stagger-8">
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
                        <div class="badge-success">
                            <i class="fas fa-check-circle"></i>
                            <span>Excellent</span>
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
                        <a href="<?php echo esc_url( $google_review_url ); ?>" class="rating-link">
                            <?php echo esc_html( $rating_link_text ); ?>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Hero rotating headline JS -->
<script>
(function() {
    var wrapper = document.querySelector('.hero-rotate-wrapper');
    if (!wrapper) return;

    var phrases = wrapper.querySelectorAll('.hero-rotate-phrase');
    if (phrases.length < 2) return;

    var current = 0;
    var interval = 3500; // ms between rotations

    setInterval(function() {
        var prev = current;
        current = (current + 1) % phrases.length;

        // Exit current phrase upward
        phrases[prev].classList.remove('active');
        phrases[prev].classList.add('exit-up');

        // Enter next phrase from below
        phrases[current].classList.remove('exit-up');
        // Force reflow so the element starts from translateY(100%)
        void phrases[current].offsetWidth;
        phrases[current].classList.add('active');

        // Clean up exit class after transition
        setTimeout(function() {
            phrases[prev].classList.remove('exit-up');
        }, 600);
    }, interval);
})();
</script>
