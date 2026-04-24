<?php
/**
 * Template Part: Pharmacist Section — Clean Clinical Card
 *
 * Compact two-column layout: pharmacist identity on the left (photo, name,
 * role, GPhC number), content + CTAs on the right. Trust checks and
 * credential pills sit below the main grid.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- ACF fields with Denton-specific defaults ---
$section_title  = bp_field( 'pharmacist_section_title', 'Meet Your Clinical Team' );
$section_sub    = bp_field( 'pharmacist_section_subtitle', 'Every consultation is led by a qualified, GPhC-registered prescriber from our clinical team.' );
$badge_text     = bp_field( 'pharmacist_badge_text', 'Your Local Experts' );
$eyebrow_text   = bp_field( 'pharmacist_eyebrow_text', 'Led by' );
$name           = bp_field( 'pharmacist_name', 'Ahmed Al-Liabi' );
$role           = bp_field( 'pharmacist_role', 'Lead Pharmacist · Independent Prescriber' );
$bio            = bp_field( 'pharmacist_bio', 'With over 15 years of experience, Ahmed leads our clinical team dedicated to providing personalised, accessible healthcare in Denton. As an Independent Prescriber, he oversees our service to ensure you receive safe, effective treatments without the wait.' );
$cta_text       = bp_field( 'pharmacist_cta_text', 'Start Your Online Consultation' );
$cta_url        = bp_field( 'pharmacist_cta_url', bp_booking_url() );
$phone          = bp_phone();
$phone_link     = bp_phone_link();

// --- GPhC number from global options ---
$gphc_number    = bp_option( 'superintendent_gphc_number', '2088937' );

// --- Pharmacist photo (ACF image field, return format: ID) ---
$pharmacist_image_id  = bp_field( 'pharmacist_photo' );
$pharmacist_image_url = $pharmacist_image_id ? wp_get_attachment_image_url( $pharmacist_image_id, 'medium_large' ) : '';
$pharmacist_image_alt = $pharmacist_image_id
    ? get_post_meta( $pharmacist_image_id, '_wp_attachment_image_alt', true )
    : 'Lead Pharmacist at ' . bp_pharmacy_name();

// --- Default credentials ---
$default_credentials = array(
    array( 'credential_icon' => 'fa-shield-halved', 'credential_text' => 'GPhC Registered' ),
    array( 'credential_icon' => 'fa-file-signature', 'credential_text' => 'Independent Prescriber' ),
    array( 'credential_icon' => 'fa-weight-scale', 'credential_text' => 'Weight Loss Specialist' ),
);

// --- Try ACF repeater first, fall back to defaults ---
$credentials = array();
if ( function_exists( 'have_rows' ) && have_rows( 'pharmacist_credentials' ) ) {
    while ( have_rows( 'pharmacist_credentials' ) ) {
        the_row();
        $credentials[] = array(
            'credential_icon' => get_sub_field( 'credential_icon' ) ?: 'fa-shield-halved',
            'credential_text' => get_sub_field( 'credential_text' ) ?: '',
        );
    }
}

if ( empty( $credentials ) ) {
    $credentials = $default_credentials;
}

// --- Trust checks (ACF repeater with defaults) ---
$default_trust_checks = array( 'Same-Day Appointments', 'No GP Referral Needed', 'Face-to-Face Consultations' );
$trust_checks = array();
if ( function_exists( 'have_rows' ) && have_rows( 'pharmacist_trust_checks' ) ) {
    while ( have_rows( 'pharmacist_trust_checks' ) ) {
        the_row();
        $text = get_sub_field( 'check_text' );
        if ( $text ) {
            $trust_checks[] = $text;
        }
    }
}
if ( empty( $trust_checks ) ) {
    $trust_checks = $default_trust_checks;
}
?>

<section class="pharmacist-section" id="about">

    <!-- Decorative background glows -->
    <div class="pharmacist-bg-glow pharmacist-bg-glow-1"></div>
    <div class="pharmacist-bg-glow pharmacist-bg-glow-2"></div>

    <div class="section-container">

        <!-- Section header -->
        <div class="pharmacist-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="pharmacist-section-title"><?php echo esc_html( $section_title ); ?></h2>
            <p class="pharmacist-section-subtitle"><?php echo esc_html( $section_sub ); ?></p>
        </div>

        <div class="pharmacist-card">

            <!-- Gradient accent top bar -->
            <div class="pharmacist-card-accent"></div>

            <div class="pharmacist-grid">

                <!-- LEFT: Photo + identity -->
                <div class="pharmacist-left">
                    <?php if ( $pharmacist_image_url ) : ?>
                    <div class="pharmacist-photo-wrapper">
                        <img src="<?php echo esc_url( $pharmacist_image_url ); ?>" alt="<?php echo esc_attr( $pharmacist_image_alt ); ?>" class="pharmacist-photo" />
                    </div>
                    <?php endif; ?>

                    <div class="pharmacist-identity">
                        <p class="pharmacist-eyebrow"><?php echo esc_html( $eyebrow_text ); ?></p>
                        <h2 class="pharmacist-name"><?php echo esc_html( $name ); ?></h2>
                        <p class="pharmacist-role"><?php echo esc_html( $role ); ?></p>
                        <p class="pharmacist-gphc">
                            <i class="fas fa-shield-halved"></i>
                            GPhC: <?php echo esc_html( $gphc_number ); ?>
                        </p>
                    </div>
                </div>

                <!-- RIGHT: Content + CTAs -->
                <div class="pharmacist-right">

                    <p class="pharmacist-bio"><?php echo esc_html( $bio ); ?></p>

                    <div class="pharmacist-credentials">
                        <?php foreach ( $credentials as $credential ) :
                            $icon_class = bp_fa_class( $credential['credential_icon'] );
                        ?>
                            <div class="pharmacist-credential">
                                <i class="<?php echo esc_attr( $icon_class ); ?>"></i>
                                <span><?php echo esc_html( $credential['credential_text'] ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="pharmacist-cta">
                        <a href="<?php echo esc_url( $cta_url ); ?>" class="cta-button primary-cta">
                            <?php echo esc_html( $cta_text ); ?>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta">
                            <i class="fas fa-phone"></i>
                            <?php echo esc_html( 'Call ' . $phone ); ?>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Trust checks -->
            <div class="pharmacist-trust-checks">
                <?php foreach ( $trust_checks as $check ) : ?>
                    <span class="pharmacist-trust-item">
                        <i class="fas fa-check-circle"></i>
                        <?php echo esc_html( $check ); ?>
                    </span>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
