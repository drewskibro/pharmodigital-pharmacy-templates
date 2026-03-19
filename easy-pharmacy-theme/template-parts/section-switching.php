<?php
/**
 * Template Part: Switching Provider Section
 *
 * Image-led 3-card grid encouraging patients to switch.
 * Each card has a lifestyle photo on top with icon overlay, title, and description.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ACF fields with defaults
$badge_text      = ep_field( 'switching_badge_text', '50+ Patients Switched This Month' );
$title_start     = ep_field( 'switching_title_start', 'Frustrated with Your Current' );
$title_highlight = ep_field( 'switching_title_highlight', 'Weight Loss Provider?' );
$description     = ep_field( 'switching_description', 'We\'ve made switching as simple as possible. No complicated forms, no waiting weeks, no gap in your treatment. Join hundreds who\'ve switched to Easy Pharmacy for faster service, genuine support, and premium care you can trust.' );
$cta_text        = ep_field( 'switching_cta_text', 'Switch to Easy Pharmacy' );
$cta_url         = ep_field( 'switching_cta_url', home_url( '/switch-provider/' ) );

// Default features
$default_features = array(
    array(
        'icon'      => 'fas fa-prescription',
        'title'     => 'Same-Day Prescriptions',
        'desc'      => 'No more waiting weeks for approval. Our prescribers review and issue prescriptions within hours, not days.',
        'image_key' => 'switching_feature_1_image',
    ),
    array(
        'icon'      => 'fas fa-user-doctor',
        'title'     => 'Real Pharmacist Support',
        'desc'      => 'Speak with Dilip and our Ashford team directly — no chatbots, no automated responses, just genuine expert care.',
        'image_key' => 'switching_feature_2_image',
    ),
    array(
        'icon'      => 'fas fa-shield-halved',
        'title'     => 'Zero Treatment Gap',
        'desc'      => 'We handle the entire transfer so there\'s no interruption to your medication. Seamless switching, zero stress.',
        'image_key' => 'switching_feature_3_image',
    ),
);

// Try ACF repeater for features (advanced override)
$features = array();
if ( function_exists( 'have_rows' ) && have_rows( 'switching_features' ) ) {
    while ( have_rows( 'switching_features' ) ) {
        the_row();
        $feat_image_id = get_sub_field( 'feature_image' );
        $features[] = array(
            'icon'      => get_sub_field( 'feature_icon' ) ?: 'fas fa-check',
            'title'     => get_sub_field( 'feature_title' ) ?: '',
            'desc'      => get_sub_field( 'feature_description' ) ?: '',
            'image_url' => $feat_image_id ? wp_get_attachment_image_url( $feat_image_id, 'medium_large' ) : '',
        );
    }
}

// Use defaults if repeater is empty
if ( empty( $features ) ) {
    $features = array();
    foreach ( $default_features as $feat ) {
        $image_id  = ep_field( $feat['image_key'] );
        $image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'medium_large' ) : '';
        $features[] = array(
            'icon'      => $feat['icon'],
            'title'     => $feat['title'],
            'desc'      => $feat['desc'],
            'image_url' => $image_url,
        );
    }
}
?>

<section class="switching-section">
    <div class="switching-bg"></div>
    <div class="section-container">

        <!-- Centred header -->
        <div class="switching-header">
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
        </div>

        <!-- 3-card image-led grid -->
        <div class="switching-card-grid">
            <?php foreach ( $features as $i => $feature ) : ?>
                <div class="switching-card<?php echo $i === 0 ? ' switching-card-featured' : ''; ?>">
                    <?php if ( ! empty( $feature['image_url'] ) ) : ?>
                        <!-- Image-led card -->
                        <div class="switching-card-image">
                            <img src="<?php echo esc_url( $feature['image_url'] ); ?>" alt="<?php echo esc_attr( $feature['title'] ); ?>" loading="lazy">
                            <div class="switching-card-image-overlay">
                                <div class="switching-card-icon-badge">
                                    <i class="<?php echo esc_attr( $feature['icon'] ); ?>"></i>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <!-- Icon-only fallback (no image uploaded) -->
                        <div class="switching-card-icon-only">
                            <div class="switching-card-icon">
                                <i class="<?php echo esc_attr( $feature['icon'] ); ?>"></i>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="switching-card-content">
                        <h3 class="switching-card-title"><?php echo esc_html( $feature['title'] ); ?></h3>
                        <p class="switching-card-desc"><?php echo esc_html( $feature['desc'] ); ?></p>
                        <?php if ( $i === 0 ) : ?>
                            <div class="switching-card-highlight">Most requested</div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- CTAs — centred -->
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
</section>
