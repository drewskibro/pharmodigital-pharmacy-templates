<?php
/**
 * Template Part: Safe & Secure Section
 *
 * Centred trust section with 3-card feature grid and a credential
 * strip showing GPhC registration details.
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
$description     = dp_field( 'safe_description', 'Your safety is our top priority. We\'re fully regulated and inspected to ensure the highest standards of care.' );

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

// --- GPhC credential data (global options) ---
$company_registration = dp_option( 'company_registration', '14519140' );
$gphc_registration    = dp_option( 'gphc_registration', '1033447' );
$superintendent_name  = dp_option( 'superintendent_pharmacist', 'Ahmed Al-Liabi' );
$superintendent_gphc  = dp_option( 'superintendent_gphc_number', '2208502' );
$gphc_verify_url      = 'https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/' . $gphc_registration;
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

        <!-- 3-card trust grid -->
        <div class="safe-trust-grid">
            <?php foreach ( $features as $feature ) :
                $icon_class = dp_fa_class( $feature['icon'] );
            ?>
                <div class="safe-trust-card">
                    <div class="safe-trust-icon">
                        <i class="<?php echo esc_attr( $icon_class ); ?>"></i>
                    </div>
                    <h3 class="safe-trust-title"><?php echo esc_html( $feature['title'] ); ?></h3>
                    <p class="safe-trust-desc"><?php echo esc_html( $feature['desc'] ); ?></p>
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
                            <span class="safe-credential-value"><?php echo esc_html( $company_registration ); ?></span>
                        </div>
                    </div>

                    <div class="safe-credential-divider"></div>

                    <div class="safe-credential">
                        <div class="safe-credential-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="safe-credential-text">
                            <span class="safe-credential-label">GPhC Registered Pharmacy</span>
                            <span class="safe-credential-value"><?php echo esc_html( $gphc_registration ); ?></span>
                        </div>
                    </div>

                    <div class="safe-credential-divider"></div>

                    <div class="safe-credential">
                        <div class="safe-credential-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="safe-credential-text">
                            <span class="safe-credential-label">Superintendent Pharmacist</span>
                            <span class="safe-credential-value"><?php echo esc_html( $superintendent_name ); ?></span>
                            <span class="safe-credential-sub">GPhC Number: <?php echo esc_html( $superintendent_gphc ); ?></span>
                        </div>
                    </div>
                </div>

                <div class="safe-credential-footer">
                    <a href="<?php echo esc_url( $gphc_verify_url ); ?>" target="_blank" rel="noopener noreferrer" class="safe-verify-link">
                        <i class="fas fa-shield-halved"></i>
                        <?php echo esc_html( dp_field( 'safe_verify_link_text', 'Verify Our Registration' ) ); ?>
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                    <p class="safe-verify-note"><?php echo esc_html( dp_field( 'safe_verify_note', 'The GPhC is the official body that regulates and inspects all pharmacies in the UK' ) ); ?></p>
                </div>

            </div>
        </div>

    </div>
</section>
