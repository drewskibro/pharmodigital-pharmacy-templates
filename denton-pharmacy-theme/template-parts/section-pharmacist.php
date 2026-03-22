<?php
/**
 * Template Part: Pharmacist Section — "The Spotlight Card"
 *
 * Premium two-column layout inside a full-width white card with gradient
 * accent bar, floating glassmorphic badges around the photo, and
 * decorative background glows.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- ACF fields with Denton-specific defaults ---
$badge_text     = dp_field( 'pharmacist_badge_text', 'Your Local Expert' );
$name           = dp_field( 'pharmacist_name', 'Meet Ahmed Al-Liabi' );
$role           = dp_field( 'pharmacist_role', 'Lead Pharmacist & Independent Prescriber' );
$experience     = dp_field( 'pharmacist_experience_years', '15+' );
$experience_lbl = dp_field( 'pharmacist_experience_label', 'Years Experience' );
$bio            = dp_field( 'pharmacist_bio', 'With over 15 years of experience, Ahmed leads our clinical team providing personalised, accessible healthcare in Denton. As an Independent Prescriber, he ensures you receive safe, effective treatments without the wait.' );
$quote          = dp_field( 'pharmacist_quote', 'My goal is to make expert healthcare accessible to everyone in Denton — honest, professional care delivered to your door.' );
$cta_text       = dp_field( 'pharmacist_cta_text', 'Book a Consultation' );
$cta_url        = dp_field( 'pharmacist_cta_url', dp_booking_url() );
$phone          = dp_phone();
$phone_link     = dp_phone_link();

// --- Pharmacist photo (ACF image field, return format: ID) ---
$pharmacist_image_id  = dp_field( 'pharmacist_photo' );
$pharmacist_image_url = $pharmacist_image_id ? wp_get_attachment_image_url( $pharmacist_image_id, 'medium_large' ) : '';
$pharmacist_image_alt = $pharmacist_image_id
    ? get_post_meta( $pharmacist_image_id, '_wp_attachment_image_alt', true )
    : 'Lead Pharmacist at ' . dp_pharmacy_name();

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
?>

<section class="pharmacist-section" id="about">

    <!-- Decorative background glows -->
    <div class="pharmacist-bg-glow pharmacist-bg-glow-1"></div>
    <div class="pharmacist-bg-glow pharmacist-bg-glow-2"></div>

    <div class="section-container">
        <div class="pharmacist-card">

            <!-- Gradient accent top bar -->
            <div class="pharmacist-card-accent"></div>

            <div class="pharmacist-grid">

                <!-- LEFT: Photo with floating badges + identity -->
                <div class="pharmacist-left">
                    <div class="pharmacist-photo-area">
                        <?php if ( $pharmacist_image_url ) : ?>
                        <div class="pharmacist-photo-wrapper">
                            <img src="<?php echo esc_url( $pharmacist_image_url ); ?>" alt="<?php echo esc_attr( $pharmacist_image_alt ); ?>" class="pharmacist-photo" />
                        </div>
                        <?php endif; ?>

                        <!-- Floating experience badge -->
                        <div class="pharmacist-float-badge pharmacist-float-experience">
                            <span class="pharmacist-float-number"><?php echo esc_html( $experience ); ?></span>
                            <span class="pharmacist-float-label"><?php echo esc_html( $experience_lbl ); ?></span>
                        </div>

                        <!-- Floating verified badge -->
                        <div class="pharmacist-float-badge pharmacist-float-verified">
                            <i class="fas fa-shield-halved"></i>
                            <span>GPhC Verified</span>
                        </div>
                    </div>

                    <h2 class="pharmacist-name"><?php echo esc_html( $name ); ?></h2>
                    <p class="pharmacist-role"><?php echo esc_html( $role ); ?></p>
                </div>

                <!-- RIGHT: Content -->
                <div class="pharmacist-right">

                    <div class="pharmacist-badge">
                        <i class="fas fa-stethoscope"></i>
                        <span><?php echo esc_html( $badge_text ); ?></span>
                    </div>

                    <p class="pharmacist-bio"><?php echo esc_html( $bio ); ?></p>

                    <div class="pharmacist-quote-card">
                        <div class="pharmacist-quote-bar"></div>
                        <p class="pharmacist-quote"><?php echo esc_html( $quote ); ?></p>
                    </div>

                    <div class="pharmacist-credentials">
                        <?php foreach ( $credentials as $credential ) :
                            $icon_class = dp_fa_class( $credential['credential_icon'] );
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
        </div>
    </div>
</section>
