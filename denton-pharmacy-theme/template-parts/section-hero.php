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
$nhs_pills = array();
if ( function_exists( 'have_rows' ) && have_rows( 'hero_nhs_pills' ) ) {
    while ( have_rows( 'hero_nhs_pills' ) ) {
        the_row();
        $link = get_sub_field( 'pill_link' );
        $text   = ( is_array( $link ) && ! empty( $link['title'] ) )  ? $link['title']  : '';
        $url    = ( is_array( $link ) && ! empty( $link['url'] ) )    ? $link['url']    : '';
        $target = ( is_array( $link ) && ! empty( $link['target'] ) ) ? $link['target'] : '';
        if ( $text ) {
            $nhs_pills[] = array(
                'icon'   => get_sub_field( 'pill_icon' ) ?: 'fa-check',
                'text'   => $text,
                'url'    => $url,
                'target' => $target,
            );
        }
    }
}

// --- Description ---
$description = dp_field( 'hero_description', 'Expert pharmacy services from your local Denton team. Clinically-led weight loss, travel vaccinations, and NHS care — with free delivery across Manchester.' );

// --- CTAs (ACF link field: array with url, title, target) ---
$cta_primary        = dp_field( 'hero_cta_primary' );
$cta_primary_text   = ( is_array( $cta_primary ) && ! empty( $cta_primary['title'] ) ) ? $cta_primary['title'] : 'Start Your Weight Loss Journey';
$cta_primary_url    = ( is_array( $cta_primary ) && ! empty( $cta_primary['url'] ) ) ? $cta_primary['url'] : dp_booking_url();
$cta_primary_target = ( is_array( $cta_primary ) && ! empty( $cta_primary['target'] ) ) ? $cta_primary['target'] : '';

$cta_secondary        = dp_field( 'hero_cta_secondary' );
$cta_secondary_text   = ( is_array( $cta_secondary ) && ! empty( $cta_secondary['title'] ) ) ? $cta_secondary['title'] : 'Travel Clinic';
$cta_secondary_url    = ( is_array( $cta_secondary ) && ! empty( $cta_secondary['url'] ) ) ? $cta_secondary['url'] : '#treatments';
$cta_secondary_target = ( is_array( $cta_secondary ) && ! empty( $cta_secondary['target'] ) ) ? $cta_secondary['target'] : '';

// --- Trust indicators ---
$trust_indicators = dp_field( 'hero_trust_indicators' );
if ( empty( $trust_indicators ) || ! is_array( $trust_indicators ) ) {
    $trust_indicators = array(
        array( 'icon' => 'fas fa-calendar-check', 'text' => 'Same-day Appointments' ),
        array( 'icon' => 'fas fa-certificate',    'text' => 'UK Licensed' ),
        array( 'icon' => 'fas fa-heart',          'text' => 'NHS & Private' ),
    );
}

// --- Testimonial ---
// --- Hero image (ACF image field, return format: ID) ---
$hero_image_id    = dp_field( 'hero_image' );
$hero_image_url   = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';
$hero_image_alt   = $hero_image_id
    ? get_post_meta( $hero_image_id, '_wp_attachment_image_alt', true )
    : 'Pharmacy services at ' . esc_attr( dp_pharmacy_name() );
$hero_image_focus = dp_field( 'hero_image_focus', 'center center' );
$allowed_focus    = array( 'center center', 'center top', 'center bottom', 'left center', 'right center', 'left top', 'right top', 'left bottom', 'right bottom' );
if ( ! in_array( $hero_image_focus, $allowed_focus, true ) ) {
    $hero_image_focus = 'center center';
}

// --- Google rating (global options + page overrides) ---
$google_rating       = dp_option( 'google_rating', '4.9' );
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
                <?php if ( ! empty( $nhs_pills ) ) : ?>
                <div class="hero-nhs-strip hero-stagger hero-stagger-1">
                    <?php foreach ( $nhs_pills as $pill ) :
                        $pill_icon = dp_fa_class( $pill['icon'] );
                        $pill_tag  = ! empty( $pill['url'] ) ? 'a' : 'span';
                    ?>
                        <<?php echo $pill_tag; ?> class="hero-nhs-pill<?php echo ! empty( $pill['url'] ) ? ' hero-nhs-pill--link' : ''; ?>"<?php
                            if ( ! empty( $pill['url'] ) ) {
                                echo ' href="' . esc_url( $pill['url'] ) . '"';
                                if ( ! empty( $pill['target'] ) ) {
                                    echo ' target="' . esc_attr( $pill['target'] ) . '" rel="noopener"';
                                }
                            }
                        ?>>
                            <i class="fas <?php echo esc_attr( $pill_icon ); ?>"></i>
                            <?php echo esc_html( $pill['text'] ); ?>
                        </<?php echo $pill_tag; ?>>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php
                // --- Headline: 3 lines with rotating middle ---
                $hero_line_1 = dp_field( 'hero_title_line_1', 'Lose Weight.' );
                $hero_line_3 = dp_field( 'hero_title_line_3', 'Get NHS Care.' );

                // Rotating phrases for line 2 (ACF repeater, seeded in DB)
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
                    <a href="<?php echo esc_url( $cta_primary_url ); ?>" class="cta-button primary-cta"<?php echo $cta_primary_target ? ' target="' . esc_attr( $cta_primary_target ) . '" rel="noopener"' : ''; ?>>
                        <?php echo esc_html( $cta_primary_text ); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo esc_url( $cta_secondary_url ); ?>" class="cta-button secondary-cta"<?php echo $cta_secondary_target ? ' target="' . esc_attr( $cta_secondary_target ) . '" rel="noopener"' : ''; ?>>
                        <?php echo esc_html( $cta_secondary_text ); ?>
                        <i class="fas fa-plane"></i>
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

                <!-- Compact hero image (mobile only) -->
                <?php if ( $hero_image_url ) : ?>
                <div class="hero-mobile-image mobile-only hero-stagger hero-stagger-7b">
                    <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( $hero_image_alt ); ?>" loading="lazy" style="object-position: <?php echo esc_attr( $hero_image_focus ); ?>;" />
                </div>
                <?php endif; ?>

            </div>

            <!-- RIGHT: Visual Column (desktop-only) -->
            <div class="hero-visual desktop-only">

                <!-- Decorative glow -->
                <div class="hero-visual-glow"></div>

                <!-- Main image card (rotated -2deg with white border) -->
                <div class="hero-image-card">
                    <?php if ( $hero_image_url ) : ?>
                        <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( $hero_image_alt ); ?>" style="object-position: <?php echo esc_attr( $hero_image_focus ); ?>;" />
                    <?php else : ?>
                        <img src="<?php echo esc_url( DENTON_PHARMACY_URI . '/assets/images/hero-default.jpg' ); ?>" alt="<?php echo esc_attr( 'Pharmacy services at ' . dp_pharmacy_name() ); ?>" />
                    <?php endif; ?>
                    <div class="hero-overlay"></div>
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
