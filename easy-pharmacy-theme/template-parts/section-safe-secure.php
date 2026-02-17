<?php
/**
 * Template Part: Safe & Secure Section
 *
 * GPhC registration section with trust features and registration card.
 * Uses options page for registration numbers.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Section header fields
$badge_text  = ep_field( 'safe_badge_text', 'GPhC Registered Pharmacy' );
$title_start = ep_field( 'safe_title_start', 'Safe and' );
$title_highlight = ep_field( 'safe_title_highlight', 'Secure' );
$description = ep_field( 'safe_description', 'Your safety is our top priority. We\'re fully regulated and inspected to ensure the highest standards of care.' );

// Registration details from options page
$company_reg      = ep_option( 'company_registration', '06703027' );
$gphc_reg         = ep_option( 'gphc_registration', '1091169' );
$superintendent   = ep_option( 'superintendent_pharmacist', 'Dilip Modhvadia' );
$gphc_number      = ep_option( 'superintendent_gphc_number', '2050606' );
$gphc_verify_url  = ep_option( 'gphc_verify_url', 'https://www.pharmacyregulation.org/registers/pharmacy/' . $gphc_reg );

// Default trust features
$default_features = array(
    array(
        'feature_icon'  => 'fa-shield-halved',
        'feature_title' => 'Registered UK Pharmacy',
        'feature_desc'  => 'Fully licensed and regulated by the General Pharmaceutical Council',
    ),
    array(
        'feature_icon'  => 'fa-clipboard-check',
        'feature_title' => 'Fully Inspected & Regulated',
        'feature_desc'  => 'Regular inspections ensure we meet the highest safety standards',
    ),
    array(
        'feature_icon'  => 'fa-check-circle',
        'feature_title' => 'Approved UK-licensed Treatments',
        'feature_desc'  => 'Only genuine, MHRA-approved medications from trusted suppliers',
    ),
);

// Try ACF repeater for trust features
$trust_features = array();
if ( function_exists( 'have_rows' ) && have_rows( 'safe_features' ) ) {
    while ( have_rows( 'safe_features' ) ) {
        the_row();
        $trust_features[] = array(
            'feature_icon'  => get_sub_field( 'feature_icon' ) ?: 'fa-shield-halved',
            'feature_title' => get_sub_field( 'feature_title' ) ?: '',
            'feature_desc'  => get_sub_field( 'feature_description' ) ?: '',
        );
    }
}

if ( empty( $trust_features ) ) {
    $trust_features = $default_features;
}
?>

<section class="safe-section">
    <div class="safe-bg"></div>
    <div class="safe-bg-shape-1"></div>
    <div class="safe-bg-shape-2"></div>
    <div class="section-container">

        <!-- Section header -->
        <div class="safe-header">
            <div class="section-badge">
                <span class="pulse-dot">
                    <span></span>
                    <span></span>
                </span>
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="safe-title"><?php echo esc_html( $title_start ); ?> <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span></h2>
            <p class="safe-description"><?php echo esc_html( $description ); ?></p>
        </div>

        <!-- Two-column layout -->
        <div class="safe-grid">

            <!-- LEFT: Trust features -->
            <div class="safe-features">

                <?php foreach ( $trust_features as $feature ) : ?>
                    <div class="safe-feature">
                        <div class="safe-feature-card">
                            <div class="safe-feature-icon">
                                <i class="fas <?php echo esc_attr( $feature['feature_icon'] ); ?>"></i>
                            </div>
                            <div class="safe-feature-text">
                                <h3 class="safe-feature-title"><?php echo esc_html( $feature['feature_title'] ); ?></h3>
                                <p class="safe-feature-desc"><?php echo esc_html( $feature['feature_desc'] ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <!-- RIGHT: GPhC Registration Card -->
            <div class="safe-card-wrapper">
                <div class="safe-card-glow"></div>
                <div class="safe-card">

                    <!-- Verified badge -->
                    <div class="safe-verified-badge">
                        <div class="safe-verified-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <span class="safe-verified-text">Verified Registration</span>
                    </div>

                    <h3 class="safe-card-title">General Pharmaceutical Council</h3>

                    <!-- Registration details -->
                    <div class="safe-details">

                        <div class="safe-detail">
                            <div class="safe-detail-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="safe-detail-text">
                                <p class="safe-detail-label">Company Registration</p>
                                <p class="safe-detail-value"><?php echo esc_html( $company_reg ); ?></p>
                            </div>
                        </div>

                        <div class="safe-detail">
                            <div class="safe-detail-icon">
                                <i class="fas fa-store"></i>
                            </div>
                            <div class="safe-detail-text">
                                <p class="safe-detail-label">GPhC Registered Pharmacy</p>
                                <p class="safe-detail-value"><?php echo esc_html( $gphc_reg ); ?></p>
                            </div>
                        </div>

                        <div class="safe-detail">
                            <div class="safe-detail-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <div class="safe-detail-text">
                                <p class="safe-detail-label">Superintendent Pharmacist</p>
                                <p class="safe-detail-value"><?php echo esc_html( $superintendent ); ?></p>
                                <p class="safe-detail-sub">GPhC Number: <?php echo esc_html( $gphc_number ); ?></p>
                            </div>
                        </div>

                    </div>

                    <!-- Verify button -->
                    <a href="<?php echo esc_url( $gphc_verify_url ); ?>" target="_blank" rel="noopener noreferrer" class="safe-verify-button">
                        <i class="fas fa-shield-halved"></i>
                        Verify Our Registration
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                    <p class="safe-verify-note">The GPhC is the official body that regulates and inspects all pharmacies in the UK</p>

                </div>
            </div>

        </div>
    </div>
</section>
