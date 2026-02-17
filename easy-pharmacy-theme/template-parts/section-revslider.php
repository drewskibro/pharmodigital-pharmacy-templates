<?php
/**
 * Template Part: Revolution Slider Section
 *
 * Displays Revolution Slider if available, otherwise shows a static placeholder.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ACF field for slider alias
$slider_alias = ep_field( 'revslider_alias', 'home-hero' );

// Placeholder fields
$placeholder_badge       = ep_field( 'revslider_placeholder_badge', 'Yellow Fever Approved' );
$placeholder_title       = ep_field( 'revslider_placeholder_title', 'Protect Your Adventures Across the Globe' );
$placeholder_subtitle    = ep_field( 'revslider_placeholder_subtitle', 'From yellow fever to malaria prevention, get expert travel vaccinations at Easy Pharmacy' );
$placeholder_cta_text    = ep_field( 'revslider_placeholder_cta_text', 'Book Travel Clinic' );
$placeholder_cta_url     = ep_field( 'revslider_placeholder_cta_url', ep_booking_url() );
$placeholder_secondary   = ep_field( 'revslider_placeholder_secondary_text', 'Serving Ashford, Chertsey and beyond' );
$placeholder_secondary_url = ep_field( 'revslider_placeholder_secondary_url', '#location' );

// Placeholder image
$placeholder_image_id  = ep_field( 'revslider_placeholder_image' );
$placeholder_image_url = $placeholder_image_id ? wp_get_attachment_image_url( $placeholder_image_id, 'full' ) : '';
?>

<section class="revslider-section" id="hero-slider">
    <div class="revslider-wrapper">

        <?php if ( shortcode_exists( 'rev_slider' ) && ! empty( $slider_alias ) ) : ?>
            <?php echo do_shortcode( '[rev_slider alias="' . esc_attr( $slider_alias ) . '"]' ); ?>
        <?php else : ?>
            <!-- Placeholder content (shown when Revolution Slider is not active) -->
            <div class="revslider-placeholder">
                <div class="revslider-overlay"></div>
                <?php if ( $placeholder_image_url ) : ?>
                    <img src="<?php echo esc_url( $placeholder_image_url ); ?>" alt="<?php echo esc_attr( $placeholder_title ); ?>" class="revslider-image" />
                <?php else : ?>
                    <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/slider-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( $placeholder_title ); ?>" class="revslider-image" />
                <?php endif; ?>

                <div class="revslider-content">
                    <div class="revslider-container">
                        <span class="revslider-badge"><?php echo esc_html( $placeholder_badge ); ?></span>
                        <h1 class="revslider-title"><?php echo esc_html( $placeholder_title ); ?></h1>
                        <p class="revslider-subtitle"><?php echo esc_html( $placeholder_subtitle ); ?></p>
                        <div class="revslider-cta">
                            <a href="<?php echo esc_url( $placeholder_cta_url ); ?>" class="revslider-btn-primary"><?php echo esc_html( $placeholder_cta_text ); ?></a>
                            <a href="<?php echo esc_url( $placeholder_secondary_url ); ?>" class="revslider-btn-secondary"><?php echo esc_html( $placeholder_secondary ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End placeholder content -->
        <?php endif; ?>

    </div>
</section>
