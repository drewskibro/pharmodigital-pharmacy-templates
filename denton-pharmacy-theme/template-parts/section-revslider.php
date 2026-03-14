<?php
/**
 * Template Part: RevSlider / Travel Banner Section
 *
 * Outputs a Revolution Slider if the plugin is active and an alias is configured.
 * Otherwise renders a static placeholder with background image, badge, title,
 * subtitle, and CTAs — ensuring the section always looks complete.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- RevSlider alias ---
$revslider_alias = dp_field( 'revslider_alias', 'home-hero' );

// --- Check if RevSlider plugin is available ---
if ( class_exists( 'RevSlider' ) && $revslider_alias ) : ?>

    <section class="revslider-section">
        <div class="revslider-wrapper">
            <?php echo do_shortcode( '[rev_slider alias="' . esc_attr( $revslider_alias ) . '"]' ); ?>
        </div>
    </section>

<?php else :
    // --- Static placeholder fallback ---

    // Background image (ACF image field, return format: ID)
    $placeholder_image_id  = dp_field( 'revslider_placeholder_image' );
    $placeholder_image_url = $placeholder_image_id ? wp_get_attachment_image_url( $placeholder_image_id, 'full' ) : '';

    // Content fields
    $badge_text     = dp_field( 'revslider_placeholder_badge', 'Yellow Fever Approved' );
    $title          = dp_field( 'revslider_placeholder_title', 'Protect Your Adventures Across the Globe' );
    $subtitle       = dp_field( 'revslider_placeholder_subtitle', 'From yellow fever to malaria prevention, get expert travel vaccinations at Denton Pharmacy' );

    // Primary CTA
    $cta_text = dp_field( 'revslider_placeholder_cta_text', 'Book Travel Clinic' );
    $cta_url  = home_url( '/travel-health/' );

    // If a booking URL is configured, prefer it for the primary CTA
    $booking_url = dp_booking_url();
    if ( $booking_url ) {
        $cta_url = $booking_url;
    }

    // Secondary CTA
    $secondary_text = dp_field( 'revslider_placeholder_secondary_text', 'Serving Denton, Manchester and beyond' );
    $secondary_url  = '#location';
?>

    <section class="revslider-section">
        <div class="revslider-placeholder"<?php if ( $placeholder_image_url ) : ?> style="background-image: url('<?php echo esc_url( $placeholder_image_url ); ?>');"<?php endif; ?>>

            <!-- Background image (if set, also rendered as an img for better loading) -->
            <?php if ( $placeholder_image_url ) : ?>
                <img src="<?php echo esc_url( $placeholder_image_url ); ?>" alt="" class="revslider-image" aria-hidden="true" />
            <?php endif; ?>

            <!-- Overlay for readability -->
            <div class="revslider-overlay"></div>

            <!-- Content -->
            <div class="revslider-content">
                <div class="revslider-container">

                    <!-- Badge -->
                    <div class="revslider-badge">
                        <i class="fas fa-certificate"></i>
                        <span><?php echo esc_html( $badge_text ); ?></span>
                    </div>

                    <!-- Title -->
                    <h1 class="revslider-title">
                        <?php echo esc_html( $title ); ?>
                    </h1>

                    <!-- Subtitle -->
                    <p class="revslider-subtitle">
                        <?php echo esc_html( $subtitle ); ?>
                    </p>

                    <!-- CTAs -->
                    <div class="revslider-cta">
                        <a href="<?php echo esc_url( $cta_url ); ?>" class="revslider-btn-primary">
                            <?php echo esc_html( $cta_text ); ?>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo esc_url( $secondary_url ); ?>" class="revslider-btn-secondary">
                            <i class="fas fa-map-marker-alt"></i>
                            <?php echo esc_html( $secondary_text ); ?>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

<?php endif; ?>
