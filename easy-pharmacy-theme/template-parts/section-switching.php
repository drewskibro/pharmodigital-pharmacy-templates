<?php
/**
 * Template Part: Switching Provider Section
 *
 * Premium section encouraging patients to switch from other providers.
 * Two-column layout with features, trust stats, and visual.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ACF fields with defaults
$badge_text  = ep_field( 'switching_badge_text', '50+ Patients Switched This Month' );
$title_start = ep_field( 'switching_title_start', 'Frustrated with Your Current' );
$title_highlight = ep_field( 'switching_title_highlight', 'Weight Loss Provider?' );
$description = ep_field( 'switching_description', 'Tired of waiting weeks for prescriptions? Fed up with chatbots instead of real pharmacists? Join hundreds who\'ve switched to Easy Pharmacy for faster service, genuine support, and premium care you can trust.' );
$cta_text    = ep_field( 'switching_cta_text', 'Switch to Easy Pharmacy' );
$cta_url     = ep_field( 'switching_cta_url', home_url( '/switch-provider/' ) );

// Visual image
$switching_image_id  = ep_field( 'switching_image' );
$switching_image_url = $switching_image_id ? wp_get_attachment_image_url( $switching_image_id, 'large' ) : '';

// Default feature images from standalone ACF fields
$feature_1_image_id  = ep_field( 'switching_feature_1_image' );
$feature_1_image_url = $feature_1_image_id ? wp_get_attachment_image_url( $feature_1_image_id, 'thumbnail' ) : '';
$feature_2_image_id  = ep_field( 'switching_feature_2_image' );
$feature_2_image_url = $feature_2_image_id ? wp_get_attachment_image_url( $feature_2_image_id, 'thumbnail' ) : '';
$feature_3_image_id  = ep_field( 'switching_feature_3_image' );
$feature_3_image_url = $feature_3_image_id ? wp_get_attachment_image_url( $feature_3_image_id, 'thumbnail' ) : '';

// Default features
$default_features = array(
    array(
        'feature_title' => 'Same-Day Prescriptions',
        'feature_desc'  => 'No more waiting weeks for approval. Our prescribers review and issue prescriptions within hours, not days.',
        'feature_image' => $feature_1_image_url,
    ),
    array(
        'feature_title' => 'Real Pharmacist Support',
        'feature_desc'  => 'Speak with Dilip and our Ashford team directly—no chatbots, no automated responses, just genuine expert care.',
        'feature_image' => $feature_2_image_url,
    ),
    array(
        'feature_title' => 'Premium Discreet Packaging',
        'feature_desc'  => 'Your medication arrives in our signature packaging with tracked 24h delivery—no hidden fees, no surprises.',
        'feature_image' => $feature_3_image_url,
    ),
);

// Try ACF repeater for features
$features = array();
if ( function_exists( 'have_rows' ) && have_rows( 'switching_features' ) ) {
    while ( have_rows( 'switching_features' ) ) {
        the_row();
        $feat_image_id  = get_sub_field( 'feature_image' );
        $feat_image_url = $feat_image_id ? wp_get_attachment_image_url( $feat_image_id, 'thumbnail' ) : '';
        $features[] = array(
            'feature_title' => get_sub_field( 'feature_title' ) ?: '',
            'feature_desc'  => get_sub_field( 'feature_description' ) ?: '',
            'feature_image' => $feat_image_url,
        );
    }
}

if ( empty( $features ) ) {
    $features = $default_features;
}

// Trust stats from options
$google_rating       = ep_option( 'google_rating', '4.7' );
$google_review_count = ep_option( 'google_review_count', '300+' );
$patients_treated    = ep_option( 'patients_treated', '5,000+' );
$pharmacy_town       = ep_option( 'pharmacy_town', 'Ashford' );
$established_year    = ep_option( 'established_year', '2008' );
?>

<section class="switching-section">
    <div class="switching-bg"></div>
    <div class="section-container">
        <div class="switching-grid">

            <!-- LEFT: Content -->
            <div class="switching-content">

                <div class="section-badge switching-badge-strong">
                    <span class="pulse-dot">
                        <span></span>
                        <span></span>
                    </span>
                    <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
                </div>

                <h2 class="switching-title">
                    <?php echo esc_html( $title_start ); ?>
                    <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span>
                </h2>

                <p class="switching-description"><?php echo esc_html( $description ); ?></p>

                <!-- Features list with product packaging -->
                <div class="switching-features">

                    <?php foreach ( $features as $feature ) : ?>
                        <div class="switching-feature switching-feature-premium">
                            <?php if ( ! empty( $feature['feature_image'] ) ) : ?>
                                <div class="switching-feature-product">
                                    <img src="<?php echo esc_url( $feature['feature_image'] ); ?>" alt="<?php echo esc_attr( $feature['feature_title'] ); ?>" class="switching-product-image" />
                                </div>
                            <?php else : ?>
                                <div class="switching-feature-product">
                                    <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/feature-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( $feature['feature_title'] ); ?>" class="switching-product-image" />
                                </div>
                            <?php endif; ?>
                            <div class="switching-feature-text">
                                <h3 class="switching-feature-title"><?php echo esc_html( $feature['feature_title'] ); ?></h3>
                                <p class="switching-feature-desc"><?php echo esc_html( $feature['feature_desc'] ); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <!-- Trust proof -->
                <div class="switching-trust-proof">

                    <!-- Item 1 -->
                    <div class="switching-trust-item">
                        <div class="switching-trust-icon">
                            <i class="fas fa-user-group"></i>
                        </div>
                        <div class="switching-trust-info">
                            <div class="switching-trust-number gradient-text">50+</div>
                            <div class="switching-trust-label">Switched Monthly</div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="switching-trust-divider"></div>

                    <!-- Item 2 -->
                    <div class="switching-trust-item">
                        <div class="switching-trust-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="switching-trust-info">
                            <div class="switching-trust-number gradient-text"><?php echo esc_html( $google_rating ); ?>/5</div>
                            <div class="switching-trust-label">Google Rating</div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="switching-trust-divider"></div>

                    <!-- Item 3 -->
                    <div class="switching-trust-item">
                        <div class="switching-trust-icon">
                            <i class="fas fa-truck-fast"></i>
                        </div>
                        <div class="switching-trust-info">
                            <div class="switching-trust-number gradient-text">24h</div>
                            <div class="switching-trust-label">Delivery Time</div>
                        </div>
                    </div>

                </div>

                <!-- CTAs -->
                <div class="switching-actions">
                    <a href="<?php echo esc_url( $cta_url ); ?>" class="cta-button primary-cta">
                        <?php echo esc_html( $cta_text ); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
                        <i class="fas fa-phone"></i>
                        Speak to Our Team
                    </a>
                </div>

            </div>

            <!-- RIGHT: Image -->
            <div class="switching-visual">
                <div class="switching-image-glow"></div>
                <div class="switching-image-card">
                    <?php if ( $switching_image_url ) : ?>
                        <img src="<?php echo esc_url( $switching_image_url ); ?>" alt="<?php echo esc_attr( 'Patient consulting about switching to ' . ep_pharmacy_name() ); ?>" class="switching-image" />
                    <?php else : ?>
                        <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/switching-default.jpg' ); ?>" alt="<?php echo esc_attr( 'Patient consulting about switching to ' . ep_pharmacy_name() ); ?>" class="switching-image" />
                    <?php endif; ?>

                    <!-- Premium rating badge -->
                    <div class="switching-rating-badge">
                        <div class="switching-rating-header">
                            <div class="switching-rating-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="switching-rating-content">
                                <span class="switching-rating-label">Google Rating</span>
                                <div class="switching-rating-score"><?php echo esc_html( $google_rating ); ?></div>
                                <div class="switching-rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="switching-rating-count">Based on <?php echo esc_html( $google_review_count ); ?> reviews</span>
                            </div>
                        </div>
                        <div class="switching-rating-divider"></div>
                        <div class="switching-rating-footer">
                            <div class="switching-rating-stats">
                                <div class="switching-rating-stat-row">
                                    <div class="switching-rating-stat-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <span class="switching-rating-stat-text"><span class="switching-rating-stat-number"><?php echo esc_html( $patients_treated ); ?></span> patients treated</span>
                                </div>
                                <div class="switching-rating-stat-row">
                                    <div class="switching-rating-stat-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <span class="switching-rating-stat-text">Serving <span class="switching-rating-stat-number"><?php echo esc_html( $pharmacy_town ); ?></span> since <?php echo esc_html( $established_year ); ?></span>
                                </div>
                            </div>
                            <div class="switching-rating-badge-pill">
                                <i class="fas fa-shield-check"></i>
                                <span>GPhC Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
