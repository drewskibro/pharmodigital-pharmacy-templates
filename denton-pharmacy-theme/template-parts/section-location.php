<?php
/**
 * Template Part: Location Section
 *
 * Full-width map section with a floating info card overlay showing
 * address, opening hours, contact details, parking info, and CTAs.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Map background layer ---
$map_image_id = dp_field( 'location_map_image' );
if ( ! $map_image_id ) {
    $map_image_id = dp_option( 'location_map_image' );
}
$map_image_url = $map_image_id ? wp_get_attachment_image_url( $map_image_id, 'large' ) : '';
$map_image_alt = $map_image_id
    ? get_post_meta( $map_image_id, '_wp_attachment_image_alt', true )
    : 'Map showing ' . esc_attr( dp_pharmacy_name() ) . ' location';

// Google Maps embed URL (used when no static map image is uploaded)
$maps_embed_url = dp_option( 'location_google_maps_embed' );
if ( ! $maps_embed_url && ! $map_image_url ) {
    // Build from address fields
    $addr_line_1 = dp_option( 'pharmacy_address_line_1', '14-16 Ashton Road' );
    $addr_line_2 = dp_option( 'pharmacy_address_line_2', 'Denton, Manchester' );
    $addr_line_3 = dp_option( 'pharmacy_address_line_3', 'M34 3EX' );
    $full_address = $addr_line_1 . ', ' . $addr_line_2 . ', ' . $addr_line_3;
    $maps_embed_url = 'https://maps.google.com/maps?q=' . rawurlencode( $full_address ) . '&t=&z=15&ie=UTF8&iwloc=&output=embed';
}

// --- Floating card header ---
$badge_text      = dp_field( 'location_badge_text', 'Visit Us' );
$title_start     = dp_field( 'location_title_start', 'Find' );
$title_highlight = dp_field( 'location_title_highlight', dp_pharmacy_name() );

// --- Pharmacy image (optional) ---
$pharmacy_image_id = dp_field( 'location_pharmacy_image' );
if ( ! $pharmacy_image_id ) {
    $pharmacy_image_id = dp_option( 'location_store_image' );
}
$pharmacy_image_url = $pharmacy_image_id ? wp_get_attachment_image_url( $pharmacy_image_id, 'medium_large' ) : '';
$pharmacy_image_alt = $pharmacy_image_id
    ? get_post_meta( $pharmacy_image_id, '_wp_attachment_image_alt', true )
    : esc_attr( dp_pharmacy_name() ) . ' storefront';

// --- Details: Address ---
$addr_line_1    = dp_option( 'pharmacy_address_line_1', '14-16 Ashton Road' );
$addr_line_2    = dp_option( 'pharmacy_address_line_2', 'Denton, Manchester' );
$addr_line_3    = dp_option( 'pharmacy_address_line_3', 'M34 3EX' );
$directions_url = dp_option( 'pharmacy_directions_url' );

// --- Details: Opening Hours ---
$hours_weekday  = dp_option( 'hours_weekday', '9:00am – 6:00pm' );
$hours_saturday = dp_option( 'hours_saturday', '9:00am – 1:00pm' );
$hours_sunday   = dp_option( 'hours_sunday', 'Closed' );

// --- Details: Contact ---
$phone      = dp_phone();
$phone_link = dp_phone_link();
$email      = dp_option( 'pharmacy_email', 'info@dentonpharmacy.co.uk' );

// --- Details: Parking ---
$parking = dp_option( 'pharmacy_parking', 'Free customer parking available nearby.' );

// --- CTAs ---
$booking_url = dp_booking_url();
?>

<section class="location-section">

    <!-- Map background layer -->
    <div class="location-map-wrapper">
        <?php if ( $map_image_url ) : ?>
            <img src="<?php echo esc_url( $map_image_url ); ?>" alt="<?php echo esc_attr( $map_image_alt ); ?>" class="location-map-image" />
        <?php elseif ( $maps_embed_url ) : ?>
            <iframe
                class="location-map-embed"
                src="<?php echo esc_url( $maps_embed_url ); ?>"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="<?php echo esc_attr( dp_pharmacy_name() . ' location map' ); ?>"
            ></iframe>
        <?php endif; ?>
        <div class="location-map-overlay"></div>
    </div>

    <!-- Floating info card -->
    <div class="location-card">

        <!-- Card header -->
        <div class="location-card-header">
            <div class="section-badge">
                <span class="pulse-dot">
                    <span></span>
                    <span></span>
                </span>
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="location-card-title">
                <?php echo esc_html( $title_start ); ?> <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span>
            </h2>
        </div>

        <?php if ( $pharmacy_image_url ) : ?>
            <!-- Pharmacy storefront image -->
            <div class="location-pharmacy-image">
                <img src="<?php echo esc_url( $pharmacy_image_url ); ?>" alt="<?php echo esc_attr( $pharmacy_image_alt ); ?>" loading="lazy" />
            </div>
        <?php endif; ?>

        <!-- Details grid -->
        <div class="location-details">

            <!-- 1. Address -->
            <div class="location-detail">
                <div class="location-detail-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="location-detail-text">
                    <span class="location-detail-label">Address</span>
                    <span class="location-detail-value"><?php echo esc_html( $addr_line_1 ); ?></span>
                    <span class="location-detail-value"><?php echo esc_html( $addr_line_2 ); ?></span>
                    <span class="location-detail-value"><?php echo esc_html( $addr_line_3 ); ?></span>
                    <?php if ( $directions_url ) : ?>
                        <a href="<?php echo esc_url( $directions_url ); ?>" class="location-directions-link" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-diamond-turn-right"></i>
                            Get Directions
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- 2. Opening Hours -->
            <div class="location-detail">
                <div class="location-detail-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="location-detail-text">
                    <span class="location-detail-label">Opening Hours</span>
                    <div class="location-hours">
                        <div class="location-hours-row">
                            <span class="location-hours-day">Mon &ndash; Fri</span>
                            <span class="location-hours-time"><?php echo esc_html( $hours_weekday ); ?></span>
                        </div>
                        <div class="location-hours-row">
                            <span class="location-hours-day">Saturday</span>
                            <span class="location-hours-time"><?php echo esc_html( $hours_saturday ); ?></span>
                        </div>
                        <div class="location-hours-row">
                            <span class="location-hours-day">Sunday</span>
                            <span class="location-hours-time<?php echo ( strtolower( trim( $hours_sunday ) ) === 'closed' ) ? ' location-hours-closed' : ''; ?>">
                                <?php echo esc_html( $hours_sunday ); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Contact -->
            <div class="location-detail">
                <div class="location-detail-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="location-detail-text">
                    <span class="location-detail-label">Contact</span>
                    <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="location-contact-link">
                        <i class="fas fa-phone"></i>
                        <?php echo esc_html( $phone ); ?>
                    </a>
                    <a href="mailto:<?php echo esc_attr( $email ); ?>" class="location-contact-link">
                        <i class="fas fa-envelope"></i>
                        <?php echo esc_html( $email ); ?>
                    </a>
                </div>
            </div>

            <!-- 4. Parking -->
            <div class="location-detail">
                <div class="location-detail-icon">
                    <i class="fas fa-square-parking"></i>
                </div>
                <div class="location-detail-text">
                    <span class="location-detail-label">Parking</span>
                    <span class="location-detail-value"><?php echo esc_html( $parking ); ?></span>
                </div>
            </div>

        </div>

        <!-- CTAs -->
        <div class="location-card-cta">
            <a href="<?php echo esc_url( $booking_url ); ?>" class="cta-button primary-cta">
                Book an Appointment
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta">
                <i class="fas fa-phone"></i>
                Call Us
            </a>
        </div>

    </div>

</section>
