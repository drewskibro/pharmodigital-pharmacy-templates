<?php
/**
 * Template Part: Location Section
 *
 * Full-width map section with floating info card overlay.
 * Uses options page for address, hours, contact, and parking.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Location badge/header
$badge_text      = ep_field( 'location_badge_text', 'Visit Us' );
$title_start     = ep_field( 'location_title_start', 'Find' );
$title_highlight = ep_field( 'location_title_highlight', ep_pharmacy_name() );

// Map image
$map_image_id  = ep_option( 'location_map_image' );
$map_image_url = $map_image_id ? wp_get_attachment_image_url( $map_image_id, 'full' ) : '';

// Pharmacy storefront image
$store_image_id  = ep_option( 'location_store_image' );
$store_image_url = $store_image_id ? wp_get_attachment_image_url( $store_image_id, 'medium_large' ) : '';

// Address fields from options
$address_line_1 = ep_option( 'pharmacy_address_line_1', '123 High Street' );
$address_line_2 = ep_option( 'pharmacy_address_line_2', 'Ashford, Surrey' );
$address_line_3 = ep_option( 'pharmacy_address_line_3', 'TW15 1AB' );
$directions_url = ep_option( 'pharmacy_directions_url', 'https://www.google.com/maps/dir/?api=1&destination=51.4340,-0.4668' );

// Opening hours from options
$hours_weekday  = ep_option( 'hours_weekday', '9:00am – 6:00pm' );
$hours_saturday = ep_option( 'hours_saturday', '9:00am – 1:00pm' );
$hours_sunday   = ep_option( 'hours_sunday', 'Closed' );

// Contact from options
$phone = ep_phone();
$email = ep_option( 'pharmacy_email', 'hello@easypharmacy.co.uk' );

// Parking
$parking_info = ep_option( 'pharmacy_parking', 'Free customer parking available directly outside the pharmacy.' );
?>

<section class="location-section" id="location">
    <div class="location-map-wrapper">
        <!-- Static map image -->
        <?php if ( $map_image_url ) : ?>
            <img src="<?php echo esc_url( $map_image_url ); ?>" alt="<?php echo esc_attr( 'Map showing ' . ep_pharmacy_name() . ' location' ); ?>" class="location-map-image" />
        <?php else : ?>
            <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/map-default.jpg' ); ?>" alt="<?php echo esc_attr( 'Map showing ' . ep_pharmacy_name() . ' location' ); ?>" class="location-map-image" />
        <?php endif; ?>
        <div class="location-map-overlay"></div>
    </div>

    <!-- Floating info card -->
    <div class="section-container">
        <div class="location-card">

            <!-- Header -->
            <div class="location-card-header">
                <div class="section-badge">
                    <span class="pulse-dot">
                        <span></span>
                        <span></span>
                    </span>
                    <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
                </div>
                <h2 class="location-card-title"><?php echo esc_html( $title_start ); ?> <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span></h2>
            </div>

            <!-- Pharmacy image -->
            <?php if ( $store_image_url ) : ?>
                <div class="location-pharmacy-image">
                    <img src="<?php echo esc_url( $store_image_url ); ?>" alt="<?php echo esc_attr( ep_pharmacy_name() . ' storefront' ); ?>" />
                </div>
            <?php endif; ?>

            <!-- Details grid -->
            <div class="location-details">

                <!-- Address -->
                <div class="location-detail">
                    <div class="location-detail-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="location-detail-text">
                        <h3 class="location-detail-label">Address</h3>
                        <p class="location-detail-value">
                            <?php echo esc_html( $address_line_1 ); ?><br>
                            <?php echo esc_html( $address_line_2 ); ?><br>
                            <?php echo esc_html( $address_line_3 ); ?>
                        </p>
                        <a href="<?php echo esc_url( $directions_url ); ?>" target="_blank" rel="noopener noreferrer" class="location-directions-link">
                            <i class="fas fa-diamond-turn-right"></i>
                            Get Directions
                        </a>
                    </div>
                </div>

                <!-- Opening hours -->
                <div class="location-detail">
                    <div class="location-detail-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="location-detail-text">
                        <h3 class="location-detail-label">Opening Hours</h3>
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
                                <span class="location-hours-time <?php echo strtolower( $hours_sunday ) === 'closed' ? 'location-hours-closed' : ''; ?>"><?php echo esc_html( $hours_sunday ); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="location-detail">
                    <div class="location-detail-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="location-detail-text">
                        <h3 class="location-detail-label">Contact</h3>
                        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="location-contact-link"><?php echo esc_html( $phone ); ?></a>
                        <a href="mailto:<?php echo esc_attr( $email ); ?>" class="location-contact-link"><?php echo esc_html( $email ); ?></a>
                    </div>
                </div>

                <!-- Parking -->
                <div class="location-detail">
                    <div class="location-detail-icon">
                        <i class="fas fa-square-parking"></i>
                    </div>
                    <div class="location-detail-text">
                        <h3 class="location-detail-label">Parking</h3>
                        <p class="location-detail-value"><?php echo esc_html( $parking_info ); ?></p>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="location-card-cta">
                <a href="<?php echo esc_url( ep_booking_url() ); ?>" class="cta-button primary-cta">
                    Book an Appointment
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
                    <i class="fas fa-phone"></i>
                    Call Us
                </a>
            </div>

        </div>
    </div>
</section>
