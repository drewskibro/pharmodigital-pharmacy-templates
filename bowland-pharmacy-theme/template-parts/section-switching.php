<?php
/**
 * Template Part: Switching Provider Section
 *
 * Two-column layout with features list, trust proof stats, and CTAs on the left;
 * image card with Google rating badge on the right.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section badge ---
$badge_text = bp_field( 'switching_badge_text', 'Trusted by Hundreds Who\'ve Switched' );

// --- Title (allows <span> for gradient-text styling) ---
$allowed_title_tags = array(
    'span' => array( 'class' => array() ),
    'br'   => array(),
);
$title = bp_field( 'switching_title', 'Frustrated with Your Current <span class="gradient-text">Weight Loss Provider?</span>' );

// --- Description ---
$description = bp_field( 'switching_description', 'Tired of waiting weeks for prescriptions? Fed up with chatbots instead of real pharmacists? Join hundreds who have switched to Bowland Pharmacy for faster service, genuine support, and premium care you can trust.' );

// --- 3 Feature items (individual ACF fields per feature) ---
$default_features = array(
    array(
        'icon'  => 'fa-file-signature',
        'title' => 'Same-Day Prescriptions',
        'desc'  => 'No more waiting weeks for approval. Our prescribers review and issue prescriptions within hours, not days.',
    ),
    array(
        'icon'  => 'fa-user-doctor',
        'title' => 'Real Pharmacist Support',
        'desc'  => 'Speak with ' . bp_option( 'superintendent_pharmacist', 'our pharmacist' ) . ' directly — no chatbots, no automated responses, just genuine expert care.',
    ),
    array(
        'icon'  => 'fa-comments',
        'title' => 'Face-to-Face Consultations',
        'desc'  => 'See your pharmacist in person at our Bowland pharmacy — real conversations, real care, with same-day appointments available.',
    ),
);

$features = array();
for ( $i = 1; $i <= 3; $i++ ) {
    $features[] = array(
        'icon'  => bp_field( 'switching_feature_' . $i . '_icon', $default_features[ $i - 1 ]['icon'] ),
        'title' => bp_field( 'switching_feature_' . $i . '_title', $default_features[ $i - 1 ]['title'] ),
        'desc'  => bp_field( 'switching_feature_' . $i . '_desc', $default_features[ $i - 1 ]['desc'] ),
    );
}

// --- Trust proof stats ---
$default_trust = array(
    array(
        'icon'  => 'fa-user-group',
        'value' => '50+',
        'label' => 'Switched Monthly',
    ),
    array(
        'icon'  => 'fa-star',
        'value' => '4.7/5',
        'label' => 'Google Rating',
    ),
    array(
        'icon'  => 'fa-award',
        'value' => '15+',
        'label' => 'Years Experience',
    ),
);

$trust_items = array();
for ( $i = 1; $i <= 3; $i++ ) {
    $trust_items[] = array(
        'icon'  => bp_field( 'switching_trust_' . $i . '_icon', $default_trust[ $i - 1 ]['icon'] ),
        'value' => bp_field( 'switching_trust_' . $i . '_value', $default_trust[ $i - 1 ]['value'] ),
        'label' => bp_field( 'switching_trust_' . $i . '_label', $default_trust[ $i - 1 ]['label'] ),
    );
}

// --- CTAs ---
$cta_primary_text = bp_field( 'switching_cta_text', 'Switch to Bowland Pharmacy' );
$cta_primary_url  = home_url( '/switch-provider/' );
$phone            = bp_phone();
$phone_link       = bp_phone_link();

// --- Image (ACF image field, return format: ID) ---
$switching_image_id  = bp_field( 'switching_image' );
$switching_image_url = $switching_image_id ? wp_get_attachment_image_url( $switching_image_id, 'large' ) : '';
$switching_image_alt = $switching_image_id
    ? get_post_meta( $switching_image_id, '_wp_attachment_image_alt', true )
    : 'Switch to ' . bp_pharmacy_name();

// --- Google rating (global options) ---
$google_rating       = bp_option( 'google_rating', '4.9' );
$google_review_count = bp_option( 'google_review_count', '300+' );
$pharmacy_location   = bp_option( 'pharmacy_town', 'Wythenshawe' );
$gphc_number         = bp_option( 'superintendent_gphc_number', '2088937' );
?>

<section class="switching-section">
    <div class="switching-bg"></div>

    <div class="section-container">
        <div class="switching-grid">

            <!-- LEFT: Content Column -->
            <div class="switching-content">

                <!-- Section badge -->
                <div class="section-badge">
                    <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                        <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
                </div>

                <!-- Title -->
                <h2 class="switching-title">
                    <?php echo wp_kses( $title, $allowed_title_tags ); ?>
                </h2>

                <!-- Description -->
                <p class="switching-description">
                    <?php echo esc_html( $description ); ?>
                </p>

                <!-- Features -->
                <div class="switching-features">
                    <?php foreach ( $features as $feature ) :
                        $icon_class = bp_fa_class( $feature['icon'] );
                    ?>
                        <div class="switching-feature switching-feature-premium">
                            <div class="switching-feature-icon">
                                <i class="<?php echo esc_attr( $icon_class ); ?>"></i>
                            </div>
                            <div class="switching-feature-text">
                                <h3 class="switching-feature-title"><?php echo esc_html( $feature['title'] ); ?></h3>
                                <p class="switching-feature-desc"><?php echo esc_html( $feature['desc'] ); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Trust proof row -->
                <div class="switching-trust-proof">
                    <?php foreach ( $trust_items as $index => $item ) :
                        $icon_class = bp_fa_class( $item['icon'] );
                    ?>
                        <div class="switching-trust-item">
                            <div class="switching-trust-icon">
                                <i class="<?php echo esc_attr( $icon_class ); ?>"></i>
                            </div>
                            <span class="switching-trust-number"><?php echo esc_html( $item['value'] ); ?></span>
                            <span class="switching-trust-label"><?php echo esc_html( $item['label'] ); ?></span>
                        </div>

                        <?php if ( $index < count( $trust_items ) - 1 ) : ?>
                            <div class="switching-trust-divider"></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <!-- CTAs -->
                <div class="switching-actions">
                    <a href="<?php echo esc_url( $cta_primary_url ); ?>" class="cta-button primary-cta">
                        <?php echo esc_html( $cta_primary_text ); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta">
                        <i class="fas fa-phone"></i>
                        <?php echo esc_html( $phone ); ?>
                    </a>
                </div>

            </div>

            <!-- RIGHT: Visual Column -->
            <div class="switching-visual">

                <!-- Image card -->
                <div class="switching-image-card">
                    <?php if ( $switching_image_url ) : ?>
                        <img src="<?php echo esc_url( $switching_image_url ); ?>" alt="<?php echo esc_attr( $switching_image_alt ); ?>" class="switching-image" />
                    <?php endif; ?>
                </div>

                <!-- Google rating badge — glassmorphic overlay -->
                <div class="switching-rating-badge">
                    <div class="switching-rating-top">
                        <div class="switching-rating-score-block">
                            <span class="switching-rating-score"><?php echo esc_html( $google_rating ); ?></span>
                            <div class="switching-rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="switching-rating-meta">
                            <span class="switching-rating-label">Google Rating</span>
                            <span class="switching-rating-count"><?php echo esc_html( $google_review_count ); ?> verified reviews</span>
                        </div>
                    </div>
                    <div class="switching-rating-pills">
                        <span class="switching-rating-pill">
                            <i class="fas fa-shield-halved"></i>
                            GPhC: <?php echo esc_html( $gphc_number ); ?>
                        </span>
                        <span class="switching-rating-pill">
                            <i class="fas fa-map-marker-alt"></i>
                            <?php echo esc_html( $pharmacy_location ); ?> since <?php echo esc_html( bp_option( 'established_year', '2009' ) ); ?>
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
