<?php
/**
 * Template Part: Safe & Secure Section
 *
 * Two-column layout with trust feature cards on the left and a GPhC
 * registration verification card on the right. Reinforces pharmacy
 * credentials and regulatory compliance.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section header fields ---
$badge_text      = dp_field( 'safe_badge_text', 'GPhC Registered Pharmacy' );
$title_start     = dp_field( 'safe_title_start', 'Safe and' );
$title_highlight = dp_field( 'safe_title_highlight', 'Secure' );
$description     = dp_field( 'safe_description', 'Your safety is our top priority. We are a fully registered and inspected pharmacy, dispensing only genuine, UK-licensed medications from trusted pharmaceutical suppliers.' );

// --- Feature cards ---
$default_features = array(
    array(
        'icon'  => 'fa-shield-halved',
        'title' => 'Registered UK Pharmacy',
        'desc'  => 'Fully licensed and regulated by the General Pharmaceutical Council',
    ),
    array(
        'icon'  => 'fa-clipboard-check',
        'title' => 'Fully Inspected & Regulated',
        'desc'  => 'Regular inspections ensure we meet the highest safety standards',
    ),
    array(
        'icon'  => 'fa-check-circle',
        'title' => 'Approved UK-licensed Treatments',
        'desc'  => 'Only genuine, MHRA-approved medications from trusted suppliers',
    ),
);

// Try ACF repeater first, fall back to defaults
$features = array();
if ( function_exists( 'have_rows' ) && have_rows( 'safe_features' ) ) {
    while ( have_rows( 'safe_features' ) ) {
        the_row();
        $features[] = array(
            'icon'  => get_sub_field( 'feature_icon' ) ?: 'fa-shield-halved',
            'title' => get_sub_field( 'feature_title' ) ?: '',
            'desc'  => get_sub_field( 'feature_desc' ) ?: '',
        );
    }
}

if ( empty( $features ) ) {
    $features = $default_features;
}

// --- GPhC card data (global options) ---
$company_registration = dp_option( 'company_registration', '14519140' );
$gphc_registration    = dp_option( 'gphc_registration', '1033447' );
$superintendent_name  = dp_option( 'superintendent_pharmacist', 'Ahmed Al-Liabi' );
$superintendent_gphc  = dp_option( 'superintendent_gphc_number', '2208502' );
?>

<section class="safe-section">

    <!-- Decorative background shapes -->
    <div class="safe-bg">
        <div class="safe-bg-shape-1"></div>
        <div class="safe-bg-shape-2"></div>
    </div>

    <div class="section-container">

        <!-- Section header -->
        <div class="safe-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="safe-title">
                <?php echo esc_html( $title_start ); ?> <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span>
            </h2>
            <p class="safe-description">
                <?php echo esc_html( $description ); ?>
            </p>
        </div>

        <!-- Two-column grid -->
        <div class="safe-grid">

            <!-- LEFT: Feature cards -->
            <div class="safe-features">
                <?php foreach ( $features as $feature ) :
                    $icon_class = dp_fa_class( $feature['icon'] );
                ?>
                    <div class="safe-feature">
                        <div class="safe-feature-card">
                            <div class="safe-feature-icon">
                                <i class="<?php echo esc_attr( $icon_class ); ?>"></i>
                            </div>
                            <div class="safe-feature-text">
                                <h3 class="safe-feature-title"><?php echo esc_html( $feature['title'] ); ?></h3>
                                <p class="safe-feature-desc"><?php echo esc_html( $feature['desc'] ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- RIGHT: GPhC Registration card -->
            <div class="safe-card-wrapper">
                <div class="safe-card-glow"></div>
                <div class="safe-card">

                    <!-- Verified badge -->
                    <div class="safe-verified-badge">
                        <span class="safe-verified-icon"><i class="fas fa-certificate"></i></span>
                        <span class="safe-verified-text">Verified Registration</span>
                    </div>

                    <!-- Card title -->
                    <h3 class="safe-card-title">General Pharmaceutical Council</h3>

                    <!-- Registration details -->
                    <div class="safe-details">

                        <!-- Company Registration -->
                        <div class="safe-detail">
                            <div class="safe-detail-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="safe-detail-text">
                                <span class="safe-detail-label">Company Registration</span>
                                <span class="safe-detail-value"><?php echo esc_html( $company_registration ); ?></span>
                            </div>
                        </div>

                        <!-- GPhC Registration -->
                        <div class="safe-detail">
                            <div class="safe-detail-icon">
                                <i class="fas fa-store"></i>
                            </div>
                            <div class="safe-detail-text">
                                <span class="safe-detail-label">GPhC Registered Pharmacy</span>
                                <span class="safe-detail-value"><?php echo esc_html( $gphc_registration ); ?></span>
                            </div>
                        </div>

                        <!-- Superintendent Pharmacist -->
                        <div class="safe-detail">
                            <div class="safe-detail-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <div class="safe-detail-text">
                                <span class="safe-detail-label">Superintendent Pharmacist</span>
                                <span class="safe-detail-value"><?php echo esc_html( $superintendent_name ); ?></span>
                                <span class="safe-detail-sub">GPhC Number: <?php echo esc_html( $superintendent_gphc ); ?></span>
                            </div>
                        </div>

                    </div>

                    <!-- Verify button -->
                    <a href="https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/<?php echo esc_attr( $gphc_registration ); ?>" class="safe-verify-button" target="_blank" rel="noopener noreferrer">
                        Verify on pharmacyregulation.org
                        <i class="fas fa-external-link-alt"></i>
                    </a>

                    <!-- Note -->
                    <p class="safe-verify-note">
                        You can independently verify our registration on the General Pharmaceutical Council website at any time.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>
