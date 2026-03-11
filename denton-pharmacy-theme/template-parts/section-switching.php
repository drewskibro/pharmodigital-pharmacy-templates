<?php
/**
 * Template Part: Switching Provider Section
 *
 * Two-column layout with features list, trust proof stats, and CTAs on the left;
 * image card with Google rating badge on the right.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section badge ---
$badge_text = dp_field( 'switching_badge_text', '50+ Patients Switched This Month' );

// --- Title (allows <span> for gradient-text styling) ---
$allowed_title_tags = array(
    'span' => array( 'class' => array() ),
    'br'   => array(),
);
$title = dp_field( 'switching_title', 'Frustrated with Your Current <span class="gradient-text">Weight Loss Provider?</span>' );

// --- Description ---
$description = dp_field( 'switching_description', 'Tired of waiting weeks for prescriptions? Fed up with impersonal online-only services? At Denton Pharmacy, you get real pharmacist support, same-day prescriptions, and premium discreet delivery — all from a trusted local pharmacy.' );

// --- 3 Feature items (individual ACF fields per feature) ---
$default_features = array(
    array(
        'icon'  => 'fa-file-signature',
        'title' => 'Same-Day Prescriptions',
        'desc'  => 'No more waiting weeks for approval. Our pharmacist reviews and approves your prescription the same day you consult with us.',
    ),
    array(
        'icon'  => 'fa-user-doctor',
        'title' => 'Real Pharmacist Support',
        'desc'  => 'Speak with Ahmed and our Denton team directly. No chatbots, no call centres — just real, qualified healthcare professionals.',
    ),
    array(
        'icon'  => 'fa-box-open',
        'title' => 'Premium Discreet Packaging',
        'desc'  => 'Your medication arrives in our signature packaging — discreet, secure, and delivered free within 24 hours.',
    ),
);

$features = array();
for ( $i = 1; $i <= 3; $i++ ) {
    $features[] = array(
        'icon'  => dp_field( 'switching_feature_' . $i . '_icon', $default_features[ $i - 1 ]['icon'] ),
        'title' => dp_field( 'switching_feature_' . $i . '_title', $default_features[ $i - 1 ]['title'] ),
        'desc'  => dp_field( 'switching_feature_' . $i . '_desc', $default_features[ $i - 1 ]['desc'] ),
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
        'icon'  => 'fa-truck-fast',
        'value' => '24h',
        'label' => 'Delivery Time',
    ),
);

$trust_items = array();
for ( $i = 1; $i <= 3; $i++ ) {
    $trust_items[] = array(
        'icon'  => dp_field( 'switching_trust_' . $i . '_icon', $default_trust[ $i - 1 ]['icon'] ),
        'value' => dp_field( 'switching_trust_' . $i . '_value', $default_trust[ $i - 1 ]['value'] ),
        'label' => dp_field( 'switching_trust_' . $i . '_label', $default_trust[ $i - 1 ]['label'] ),
    );
}

// --- CTAs ---
$cta_primary_text = dp_field( 'switching_cta_text', 'Switch to Denton Pharmacy' );
$cta_primary_url  = home_url( '/switch-provider/' );
$phone            = dp_phone();
$phone_link       = dp_phone_link();

// --- Image (ACF image field, return format: ID) ---
$switching_image_id  = dp_field( 'switching_image' );
$switching_image_url = $switching_image_id ? wp_get_attachment_image_url( $switching_image_id, 'large' ) : '';
$switching_image_alt = $switching_image_id
    ? get_post_meta( $switching_image_id, '_wp_attachment_image_alt', true )
    : 'Switch to ' . dp_pharmacy_name();

// --- Google rating (global options) ---
$google_rating       = dp_option( 'google_rating', '4.7' );
$google_review_count = dp_option( 'google_review_count', '89+' );
$pharmacy_location   = dp_option( 'pharmacy_town', 'Denton' );
?>

<section class="switching-section">
    <div class="switching-bg"></div>

    <div class="section-container">
        <div class="switching-grid">

            <!-- LEFT: Content Column -->
            <div class="switching-content">

                <!-- Section badge -->
                <div class="switching-badge-strong">
                    <span class="pulse-dot">
                        <span></span>
                        <span></span>
                    </span>
                    <span><?php echo esc_html( $badge_text ); ?></span>
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
                        $icon_class = dp_fa_class( $feature['icon'] );
                    ?>
                        <div class="switching-feature switching-feature-premium">
                            <div class="switching-feature-product">
                                <i class="<?php echo esc_attr( $icon_class ); ?>" style="color: var(--color-primary); font-size: 1.25rem;"></i>
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
                        $icon_class = dp_fa_class( $item['icon'] );
                    ?>
                        <div class="switching-trust-item">
                            <div class="switching-trust-icon">
                                <i class="<?php echo esc_attr( $icon_class ); ?>"></i>
                            </div>
                            <span class="switching-trust-number"><span class="gradient-text"><?php echo esc_html( $item['value'] ); ?></span></span>
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

                <!-- Google rating badge -->
                <div class="switching-rating-badge">
                    <div class="switching-rating-header">
                        <div class="switching-rating-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="switching-rating-content">
                            <span class="switching-rating-label">Google Rating</span>
                            <span class="switching-rating-score"><?php echo esc_html( $google_rating ); ?></span>
                        </div>
                    </div>

                    <div class="switching-rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <span class="switching-rating-count">Based on <?php echo esc_html( $google_review_count ); ?> reviews</span>

                    <div class="switching-rating-divider"></div>

                    <div class="switching-rating-footer">
                        <div class="switching-rating-stats">
                            <div class="switching-rating-stat-row">
                                <span class="switching-rating-stat-icon"><i class="fas fa-users"></i></span>
                                <span class="switching-rating-stat-text">Patients served</span>
                                <span class="switching-rating-stat-number">5,000+</span>
                            </div>
                            <div class="switching-rating-stat-row">
                                <span class="switching-rating-stat-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="switching-rating-stat-text"><?php echo esc_html( $pharmacy_location ); ?> since</span>
                                <span class="switching-rating-stat-number">2008</span>
                            </div>
                        </div>
                        <div class="switching-rating-badge-pill">
                            <i class="fas fa-shield-halved"></i>
                            <span>GPhC Verified</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
