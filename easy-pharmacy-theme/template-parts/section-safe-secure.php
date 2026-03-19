<?php
/**
 * Template Part: Safe & Secure Section
 *
 * Editorial trust section with horizontal feature cards and
 * a warm credential strip for GPhC registration details.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Section header fields
$badge_text      = ep_field( 'safe_badge_text', 'GPhC Registered Pharmacy' );
$title_start     = ep_field( 'safe_title_start', 'Safe and' );
$title_highlight = ep_field( 'safe_title_highlight', 'Secure' );
$description     = ep_field( 'safe_description', 'Your safety is our top priority. We\'re fully regulated and inspected to ensure the highest standards of care.' );

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

        <!-- 3-card horizontal trust grid -->
        <div class="safe-trust-grid">
            <?php foreach ( $trust_features as $feature ) : ?>
                <div class="safe-trust-card">
                    <div class="safe-trust-icon">
                        <i class="fas <?php echo esc_attr( $feature['feature_icon'] ); ?>"></i>
                    </div>
                    <h3 class="safe-trust-title"><?php echo esc_html( $feature['feature_title'] ); ?></h3>
                    <p class="safe-trust-desc"><?php echo esc_html( $feature['feature_desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- GPhC credential strip -->
        <div class="safe-credential-strip">
            <div class="safe-credential-inner">

                <div class="safe-credential-items">
                    <div class="safe-credential">
                        <div class="safe-credential-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="safe-credential-text">
                            <span class="safe-credential-label">Company Registration</span>
                            <span class="safe-credential-value"><?php echo esc_html( $company_reg ); ?></span>
                        </div>
                    </div>

                    <div class="safe-credential-divider"></div>

                    <div class="safe-credential">
                        <div class="safe-credential-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="safe-credential-text">
                            <span class="safe-credential-label">GPhC Registered Pharmacy</span>
                            <span class="safe-credential-value"><?php echo esc_html( $gphc_reg ); ?></span>
                        </div>
                    </div>

                    <div class="safe-credential-divider"></div>

                    <div class="safe-credential">
                        <div class="safe-credential-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="safe-credential-text">
                            <span class="safe-credential-label">Superintendent Pharmacist</span>
                            <span class="safe-credential-value"><?php echo esc_html( $superintendent ); ?></span>
                            <span class="safe-credential-sub">GPhC Number: <?php echo esc_html( $gphc_number ); ?></span>
                        </div>
                    </div>
                </div>

                <div class="safe-credential-footer">
                    <a href="<?php echo esc_url( $gphc_verify_url ); ?>" target="_blank" rel="noopener noreferrer" class="safe-verify-link">
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
