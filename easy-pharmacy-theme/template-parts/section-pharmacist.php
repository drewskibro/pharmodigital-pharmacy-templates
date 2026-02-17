<?php
/**
 * Template Part: Pharmacist Section
 *
 * Two-column section featuring the lead pharmacist with image/video and credentials.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ACF fields with defaults
$badge_text     = ep_field( 'pharmacist_badge_text', 'Your Local Expert' );
$name           = ep_field( 'pharmacist_name', 'Meet Dilip Modhvadia' );
$role           = ep_field( 'pharmacist_role', 'Lead Pharmacist & Independent Prescriber' );
$bio            = ep_field( 'pharmacist_bio', 'With over 15 years of experience, Dilip leads our clinical team dedicated to providing personalized, accessible healthcare in Ashford. As an Independent Prescriber, he oversees our service to ensure you receive safe, effective treatments without the wait.' );
$quote          = ep_field( 'pharmacist_quote', '"My goal is to make expert healthcare accessible to everyone in Ashford. Whether you\'re starting a weight loss journey or need health advice, our team is here to support you every step of the way with honest, professional care delivered to your door."' );
$experience     = ep_field( 'pharmacist_experience_years', '15+' );
$experience_lbl = ep_field( 'pharmacist_experience_label', 'Years Experience' );
$cta_text       = ep_field( 'pharmacist_cta_text', 'Start Your Online Consultation' );
$cta_url        = ep_field( 'pharmacist_cta_url', ep_booking_url() );
$video_url      = ep_field( 'pharmacist_video_url', '' );
$video_label    = ep_field( 'pharmacist_video_label', 'Watch Welcome Message' );

// Pharmacist image
$pharmacist_image_id  = ep_field( 'pharmacist_image' );
$pharmacist_image_url = $pharmacist_image_id ? wp_get_attachment_image_url( $pharmacist_image_id, 'pharmacist-photo' ) : '';
$pharmacist_image_alt = $pharmacist_image_id ? get_post_meta( $pharmacist_image_id, '_wp_attachment_image_alt', true ) : 'Lead Pharmacist at ' . ep_pharmacy_name();

// Default credentials
$default_credentials = array(
    array( 'credential_icon' => 'fa-certificate', 'credential_text' => 'GPhC Registered' ),
    array( 'credential_icon' => 'fa-file-signature', 'credential_text' => 'Independent Prescriber' ),
    array( 'credential_icon' => 'fa-weight-scale', 'credential_text' => 'Weight Loss Specialist' ),
);

// Try ACF repeater
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
                <div class="pharmacist-image-glow"></div>
                <div class="pharmacist-image-card"<?php if ( $video_url ) : ?> onclick="openVideoModal('<?php echo esc_url( $video_url ); ?>')"<?php endif; ?>>
                    <?php if ( $pharmacist_image_url ) : ?>
                        <img src="<?php echo esc_url( $pharmacist_image_url ); ?>" alt="<?php echo esc_attr( $pharmacist_image_alt ); ?>" class="pharmacist-image" />
                    <?php else : ?>
                        <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/pharmacist-default.jpg' ); ?>" alt="<?php echo esc_attr( 'Lead Pharmacist at ' . ep_pharmacy_name() ); ?>" class="pharmacist-image" />
                    <?php endif; ?>

                    <?php if ( $video_url ) : ?>
                        <!-- Play button overlay -->
                        <div class="pharmacist-video-overlay">
                            <div class="play-button">
                                <div class="play-button-ping"></div>
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="pharmacist-video-label">
                            <span><?php echo esc_html( $video_label ); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Experience badge -->
                <div class="pharmacist-experience-badge">
                    <p class="pharmacist-experience-number"><?php echo esc_html( $experience ); ?></p>
                    <p class="pharmacist-experience-label"><?php echo esc_html( $experience_lbl ); ?></p>
                </div>
            </div>

            <!-- RIGHT: Content Column -->
            <div class="pharmacist-content">

                <div class="section-badge">
                    <span class="pulse-dot">
                        <span></span>
                        <span></span>
                    </span>
                    <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
                </div>

                <h2 class="pharmacist-name"><?php echo esc_html( $name ); ?></h2>
                <h3 class="pharmacist-role"><?php echo esc_html( $role ); ?></h3>

                <p class="pharmacist-bio"><?php echo esc_html( $bio ); ?></p>

                <p class="pharmacist-quote"><?php echo esc_html( $quote ); ?></p>

                <div class="pharmacist-credentials">
                    <?php foreach ( $credentials as $credential ) : ?>
                        <div class="pharmacist-credential">
                            <i class="fas <?php echo esc_attr( $credential['credential_icon'] ); ?>"></i>
                            <span><?php echo esc_html( $credential['credential_text'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pharmacist-cta">
                    <a href="<?php echo esc_url( $cta_url ); ?>" class="cta-button primary-cta">
                        <?php echo esc_html( $cta_text ); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
