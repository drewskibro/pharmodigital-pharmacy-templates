<?php
/**
 * Template Part: Location Section
 *
 * Full-width map section with a floating info card overlay showing
 * address, opening hours, contact details, parking info, and CTAs.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Map background layer (Google Maps iframe embed — static images retired) ---
// Prefer a coords-centered embed so Google does NOT drop its default red pin;
// that way our custom branded pin is the only marker on the map.
$center_coords  = trim( (string) bp_option( 'location_center_coords', '53.4557,-2.1120' ) );
$map_zoom       = (int) bp_option( 'location_zoom', 17 );
$maps_embed_url = 'https://maps.google.com/maps?ll=' . rawurlencode( $center_coords ) . '&z=' . (int) $map_zoom . '&t=m&output=embed';

// Directions URL is derived from the pharmacy coordinates — no separate field.
$pharmacy_directions = 'https://www.google.com/maps/dir/?api=1&destination=' . rawurlencode( $center_coords );

// --- Map overlay: pharmacy pin + parking callouts ---
// Pharmacy pin always sits at the map centre (50/50) by definition —
// the map is centred on the pharmacy coordinates.
$parking_callouts = bp_option( 'location_parking_callouts' );
if ( ! is_array( $parking_callouts ) ) {
    $parking_callouts = array();
}

// Parse centre coords into floats for JS data attributes.
$center_parts    = array_map( 'trim', explode( ',', $center_coords ) );
$center_lat      = isset( $center_parts[0] ) ? (float) $center_parts[0] : 0;
$center_lng      = isset( $center_parts[1] ) ? (float) $center_parts[1] : 0;

// --- Floating card header ---
$badge_text      = bp_field( 'location_badge_text', 'Visit Us' );
$title_start     = bp_field( 'location_title_start', 'Find' );
$title_highlight = bp_field( 'location_title_highlight', bp_pharmacy_name() );

// --- Pharmacy image (optional) ---
$pharmacy_image_id = bp_field( 'location_pharmacy_image' );
if ( ! $pharmacy_image_id ) {
    $pharmacy_image_id = bp_option( 'location_store_image' );
}
$pharmacy_image_url = $pharmacy_image_id ? wp_get_attachment_image_url( $pharmacy_image_id, 'medium_large' ) : '';
$pharmacy_image_alt = $pharmacy_image_id
    ? get_post_meta( $pharmacy_image_id, '_wp_attachment_image_alt', true )
    : esc_attr( bp_pharmacy_name() ) . ' storefront';

// --- Details: Address ---
$addr_line_1    = bp_option( 'pharmacy_address_line_1', '52 Bowland Road' );
$addr_line_2    = bp_option( 'pharmacy_address_line_2', 'Wythenshawe, Manchester' );
$addr_line_3    = bp_option( 'pharmacy_address_line_3', 'M23 1JX' );
$directions_url = $pharmacy_directions;

// --- Details: Opening Hours ---
$hours_weekday  = bp_option( 'hours_weekday', '9:00am – 6:00pm' );
$hours_saturday = bp_option( 'hours_saturday', '9:00am – 1:00pm' );
$hours_sunday   = bp_option( 'hours_sunday', 'Closed' );

// --- Details: Contact ---
$phone      = bp_phone();
$phone_link = bp_phone_link();
$email      = bp_option( 'pharmacy_email', 'info@bowlandpharmacy.co.uk' );

// --- Details: Parking ---
$parking = bp_option( 'pharmacy_parking', 'Free customer parking available nearby.' );

// --- CTAs ---
$booking_url = bp_booking_url();
?>

<section class="location-section">

    <!-- Map background layer -->
    <div class="location-map-wrapper">

        <?php if ( $maps_embed_url ) : ?>
            <iframe
                class="location-map-embed"
                src="<?php echo esc_url( $maps_embed_url ); ?>"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="<?php echo esc_attr( bp_pharmacy_name() . ' location map' ); ?>"
            ></iframe>
        <?php endif; ?>

        <div class="location-map-overlay" aria-hidden="true"></div>

        <!-- Annotations: pharmacy pin + parking callouts (geo-anchored by JS) -->
        <div
            class="location-map-annotations"
            data-center-lat="<?php echo esc_attr( $center_lat ); ?>"
            data-center-lng="<?php echo esc_attr( $center_lng ); ?>"
            data-zoom="<?php echo esc_attr( $map_zoom ); ?>"
        >

            <?php
            $label_anchor = bp_option( 'location_label_anchor', 'up-left' );
            $allowed_anchors = array( 'up', 'down', 'left', 'right', 'up-left', 'up-right', 'down-left', 'down-right' );
            if ( ! in_array( $label_anchor, $allowed_anchors, true ) ) {
                $label_anchor = 'up-left';
            }
            ?>
            <!-- Pharmacy pin (always at map centre, since the map is centred on the pharmacy) -->
            <a
                class="location-pin location-pin--pharmacy location-pin--label-<?php echo esc_attr( $label_anchor ); ?>"
                <?php if ( $pharmacy_directions ) : ?>href="<?php echo esc_url( $pharmacy_directions ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Get directions to <?php echo esc_attr( bp_pharmacy_name() ); ?> on Google Maps"<?php else : ?>href="#"<?php endif; ?>
            >
                <span class="location-pin-dot">
                    <?php
                    $pin_icon_id  = bp_option( 'location_pin_icon' );
                    $pin_icon_url = $pin_icon_id ? wp_get_attachment_image_url( $pin_icon_id, 'medium' ) : '';
                    if ( $pin_icon_url ) :
                    ?>
                        <img class="location-pin-icon" src="<?php echo esc_url( $pin_icon_url ); ?>" alt="" aria-hidden="true" />
                    <?php else : ?>
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor" aria-hidden="true">
                            <path d="M10 3.5h4a1 1 0 0 1 1 1V9h4.5a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H15v4.5a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V15H4.5a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1H9V4.5a1 1 0 0 1 1-1z"/>
                        </svg>
                    <?php endif; ?>
                </span>
                <span class="location-pin-label">
                    <span class="location-pin-label-name"><?php echo esc_html( bp_pharmacy_name() ); ?></span>
                    <span class="location-pin-label-addr"><?php echo esc_html( bp_option( 'pharmacy_address_line_1', '52 Bowland Road' ) ); ?></span>
                    <span class="location-pin-label-cta">
                        Get directions
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </span>
                </span>
            </a>

            <?php foreach ( $parking_callouts as $i => $callout ) :
                $c_label  = isset( $callout['label'] ) ? $callout['label'] : '';
                $c_desc   = isset( $callout['description'] ) ? $callout['description'] : '';
                $c_coords = isset( $callout['coords'] ) ? trim( (string) $callout['coords'] ) : '';
                $anchor   = isset( $callout['anchor'] ) ? $callout['anchor'] : 'above';
                $c_url    = isset( $callout['destination_url'] ) ? $callout['destination_url'] : '';

                if ( $c_label === '' || $c_coords === '' ) { continue; }

                $coord_parts = array_map( 'trim', explode( ',', $c_coords ) );
                $c_lat       = isset( $coord_parts[0] ) ? (float) $coord_parts[0] : 0;
                $c_lng       = isset( $coord_parts[1] ) ? (float) $coord_parts[1] : 0;

                // Fallback URL: open Google Maps search at the coords
                if ( ! $c_url ) {
                    $c_url = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( $c_coords );
                }
            ?>
                <div
                    class="location-callout location-callout--<?php echo esc_attr( $anchor ); ?>"
                    style="--callout-delay: <?php echo esc_attr( 0.4 + ( $i * 0.15 ) ); ?>s;"
                    data-lat="<?php echo esc_attr( $c_lat ); ?>"
                    data-lng="<?php echo esc_attr( $c_lng ); ?>"
                    data-parking-index="<?php echo esc_attr( $i ); ?>"
                >
                    <button
                        type="button"
                        class="location-callout-dot"
                        aria-label="<?php echo esc_attr( $c_label ); ?> — show details"
                        aria-haspopup="true"
                    ></button>
                    <div class="location-callout-card" role="tooltip">
                        <div class="location-callout-text">
                            <span class="location-callout-label"><?php echo esc_html( $c_label ); ?></span>
                            <?php if ( $c_desc !== '' ) : ?>
                                <span class="location-callout-desc"><?php echo esc_html( $c_desc ); ?></span>
                            <?php endif; ?>
                        </div>
                        <a
                            href="<?php echo esc_url( $c_url ); ?>"
                            class="location-callout-directions"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Directions
                            <i class="fas fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>

    <!-- Floating info card -->
    <div class="location-card">

        <!-- Card header -->
        <div class="location-card-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
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
                            <?php echo esc_html( bp_field( 'location_directions_text', 'Get Directions' ) ); ?>
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

                    <?php if ( ! empty( $parking_callouts ) ) : ?>
                        <ul class="location-parking-list">
                            <?php foreach ( $parking_callouts as $i => $callout ) :
                                $p_label  = isset( $callout['label'] ) ? $callout['label'] : '';
                                $p_coords = isset( $callout['coords'] ) ? trim( (string) $callout['coords'] ) : '';
                                if ( $p_label === '' || $p_coords === '' ) { continue; }
                            ?>
                                <li class="location-parking-item">
                                    <span class="location-parking-name"><?php echo esc_html( $p_label ); ?></span>
                                    <button
                                        type="button"
                                        class="location-parking-directions"
                                        data-parking-trigger="<?php echo esc_attr( $i ); ?>"
                                    >
                                        <i class="fas fa-diamond-turn-right"></i>
                                        Get Directions
                                    </button>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

        </div>

        <!-- CTAs -->
        <div class="location-card-cta">
            <a href="<?php echo esc_url( $booking_url ); ?>" class="cta-button primary-cta">
                <?php echo esc_html( bp_field( 'location_cta_primary_text', 'Book an Appointment' ) ); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta">
                <i class="fas fa-phone"></i>
                <?php echo esc_html( bp_field( 'location_cta_secondary_text', 'Call Us' ) ); ?>
            </a>
        </div>

    </div>

</section>
