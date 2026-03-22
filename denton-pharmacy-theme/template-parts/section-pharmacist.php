<?php
/**
 * Template Part: Pharmacist Section
 *
 * Premium two-column layout featuring the lead pharmacist with a constrained
 * image card on the left and credentials, bio, quote card, and dual CTAs
 * on the right. Matches the NHS hero design language.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- ACF fields with Denton-specific defaults ---
$badge_icon     = dp_field( 'pharmacist_badge_icon', 'fas fa-user-doctor' );
$badge_text     = dp_field( 'pharmacist_badge_text', 'Your Local Expert' );
$badge_subtitle = dp_field( 'pharmacist_badge_subtitle', 'Independent Prescriber' );
$name           = dp_field( 'pharmacist_name', 'Meet Ahmed Al-Liabi' );
$role           = dp_field( 'pharmacist_role', 'Lead Pharmacist & Independent Prescriber' );
$bio            = dp_field( 'pharmacist_bio', 'With over 15 years of experience, Ahmed leads our clinical team providing personalised, accessible healthcare in Denton. As an Independent Prescriber, he ensures you receive safe, effective treatments without the wait.' );
$quote          = dp_field( 'pharmacist_quote', 'My goal is to make expert healthcare accessible to everyone in Denton — honest, professional care delivered to your door.' );
$experience     = dp_field( 'pharmacist_experience_years', '15+' );
$experience_lbl = dp_field( 'pharmacist_experience_label', 'Years Experience' );
$cta_text       = dp_field( 'pharmacist_cta_text', 'Start Your Online Consultation' );
$cta_url        = dp_field( 'pharmacist_cta_url', dp_booking_url() );
$video_url      = dp_field( 'pharmacist_video_url', '' );
$video_label    = dp_field( 'pharmacist_video_label', 'Watch Welcome Message' );
$phone          = dp_phone();
$phone_link     = dp_phone_link();

// --- Pharmacist photo (ACF image field, return format: ID) ---
$pharmacist_image_id  = dp_field( 'pharmacist_photo' );
$pharmacist_image_url = $pharmacist_image_id ? wp_get_attachment_image_url( $pharmacist_image_id, 'pharmacist-photo' ) : '';
$pharmacist_image_alt = $pharmacist_image_id
    ? get_post_meta( $pharmacist_image_id, '_wp_attachment_image_alt', true )
    : 'Lead Pharmacist at ' . dp_pharmacy_name();

// --- Default credentials ---
$default_credentials = array(
    array( 'credential_icon' => 'fa-certificate', 'credential_text' => 'GPhC Registered' ),
    array( 'credential_icon' => 'fa-file-signature', 'credential_text' => 'Independent Prescriber' ),
    array( 'credential_icon' => 'fa-weight-scale', 'credential_text' => 'Weight Loss Specialist' ),
);

// --- Try ACF repeater first, fall back to defaults ---
$credentials = array();
if ( function_exists( 'have_rows' ) && have_rows( 'pharmacist_credentials' ) ) {
    while ( have_rows( 'pharmacist_credentials' ) ) {
        the_row();
        $credentials[] = array(
            'credential_icon' => get_sub_field( 'credential_icon' ) ?: 'fa-certificate',
            'credential_text' => get_sub_field( 'credential_text' ) ?: '',
        );
    }
}

if ( empty( $credentials ) ) {
    $credentials = $default_credentials;
}
?>

<section class="pharmacist-section" id="about">
    <div class="section-container">
        <div class="pharmacist-grid">

            <!-- LEFT: Image Column -->
            <div class="pharmacist-image-wrapper">

                <!-- Decorative glow -->
                <div class="pharmacist-image-glow"></div>

                <!-- Constrained image card -->
                <div class="pharmacist-image-card"<?php if ( $video_url ) : ?> onclick="openVideoModal('<?php echo esc_url( $video_url ); ?>')" role="button" tabindex="0" aria-label="<?php echo esc_attr( $video_label ); ?>" onkeydown="if(event.key==='Enter')openVideoModal('<?php echo esc_url( $video_url ); ?>')"<?php endif; ?>>
                    <?php if ( $pharmacist_image_url ) : ?>
                        <img src="<?php echo esc_url( $pharmacist_image_url ); ?>" alt="<?php echo esc_attr( $pharmacist_image_alt ); ?>" class="pharmacist-image" />
                    <?php endif; ?>

                    <!-- Gradient overlay -->
                    <div class="pharmacist-image-overlay"></div>

                    <?php if ( $video_url ) : ?>
                        <!-- Play button overlay -->
                        <div class="pharmacist-video-overlay">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="pharmacist-video-label">
                            <span><?php echo esc_html( $video_label ); ?></span>
                        </div>
                    <?php endif; ?>

                    <!-- Caption overlay with experience stat -->
                    <div class="pharmacist-image-caption">
                        <div class="pharmacist-caption-stat">
                            <span class="pharmacist-caption-number"><?php echo esc_html( $experience ); ?></span>
                            <span class="pharmacist-caption-label"><?php echo esc_html( $experience_lbl ); ?></span>
                        </div>
                        <div class="pharmacist-caption-divider"></div>
                        <div class="pharmacist-caption-text">
                            <span>Trusted by the Denton community</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Content Column -->
            <div class="pharmacist-content">

                <!-- Rich two-line badge (NHS style) -->
                <div class="pharmacist-badge">
                    <div class="pharmacist-badge-icon">
                        <i class="<?php echo esc_attr( dp_fa_class( $badge_icon ) ); ?>"></i>
                    </div>
                    <div class="pharmacist-badge-content">
                        <span class="pharmacist-badge-title"><?php echo esc_html( $badge_text ); ?></span>
                        <span class="pharmacist-badge-subtitle"><?php echo esc_html( $badge_subtitle ); ?></span>
                    </div>
                </div>

                <!-- Name & role -->
                <h2 class="pharmacist-name"><?php echo esc_html( $name ); ?></h2>
                <h3 class="pharmacist-role"><?php echo esc_html( $role ); ?></h3>

                <!-- Bio -->
                <p class="pharmacist-bio"><?php echo esc_html( $bio ); ?></p>

                <!-- Quote card -->
                <div class="pharmacist-quote-card">
                    <div class="pharmacist-quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="pharmacist-quote"><?php echo esc_html( $quote ); ?></p>
                </div>

                <!-- Credentials -->
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

                <!-- Dual CTAs -->
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
</section>
