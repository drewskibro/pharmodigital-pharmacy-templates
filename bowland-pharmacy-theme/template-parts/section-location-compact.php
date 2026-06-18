<?php
/**
 * Template Part: Location Section — Compact
 *
 * Column-friendly version of the homepage map for the Contact page.
 * Faithful to the brief: "map matching homepage style but smaller —
 * showing pharmacy pin, parking locations and opening hours."
 *
 * Reuses the same data + pin/callout markup so location-map.js geo-anchors
 * the pharmacy pin and parking callouts here too. Keeps the homepage
 * floating-card style, but the card holds ONLY the opening hours.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$center_coords     = trim( (string) bp_option( 'location_center_coords', '53.4557,-2.1120' ) );
$map_center_coords = trim( (string) bp_option( 'location_map_center_coords', $center_coords ) );
$map_zoom          = (int) bp_option( 'location_zoom', 17 ) - 1; // one step out for the compact map
$maps_embed_url    = 'https://maps.google.com/maps?ll=' . rawurlencode( $map_center_coords ) . '&z=' . (int) $map_zoom . '&t=m&output=embed';
$pharmacy_directions = 'https://www.google.com/maps/dir/?api=1&destination=' . rawurlencode( $center_coords );

$parking_callouts = bp_option( 'location_parking_callouts' );
if ( ! is_array( $parking_callouts ) ) {
    $parking_callouts = array();
}

$center_parts = array_map( 'trim', explode( ',', $center_coords ) );
$center_lat   = isset( $center_parts[0] ) ? (float) $center_parts[0] : 0;
$center_lng   = isset( $center_parts[1] ) ? (float) $center_parts[1] : 0;

$map_center_parts = array_map( 'trim', explode( ',', $map_center_coords ) );
$map_center_lat   = isset( $map_center_parts[0] ) ? (float) $map_center_parts[0] : $center_lat;
$map_center_lng   = isset( $map_center_parts[1] ) ? (float) $map_center_parts[1] : $center_lng;

// Force the pin label above the dot so it clears the bottom info bar.
$label_anchor = 'up';

$addr_line_1 = bp_option( 'pharmacy_address_line_1', '14-16 Ashton Road' );

$hours_weekday  = bp_option( 'hours_weekday', '9:00am – 6:00pm' );
$hours_saturday = bp_option( 'hours_saturday', '9:00am – 1:00pm' );
$hours_sunday   = bp_option( 'hours_sunday', 'Closed' );

$pin_icon_id  = bp_option( 'location_pin_icon' );
$pin_icon_url = $pin_icon_id ? wp_get_attachment_image_url( $pin_icon_id, 'medium' ) : '';
?>

<div class="location-compact">

    <!-- Map with geo-anchored pharmacy pin + parking callouts, floating hours card -->
    <div class="location-map-wrapper location-compact-map">
        <iframe
            class="location-map-embed"
            src="<?php echo esc_url( $maps_embed_url ); ?>"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="<?php echo esc_attr( bp_pharmacy_name() . ' location map' ); ?>"
        ></iframe>
        <div class="location-map-overlay" aria-hidden="true"></div>

        <div
            class="location-map-annotations"
            data-center-lat="<?php echo esc_attr( $map_center_lat ); ?>"
            data-center-lng="<?php echo esc_attr( $map_center_lng ); ?>"
            data-zoom="<?php echo esc_attr( $map_zoom ); ?>"
        >
            <a
                class="location-pin location-pin--pharmacy location-pin--label-<?php echo esc_attr( $label_anchor ); ?>"
                data-lat="<?php echo esc_attr( $center_lat ); ?>"
                data-lng="<?php echo esc_attr( $center_lng ); ?>"
                href="<?php echo esc_url( $pharmacy_directions ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Get directions to <?php echo esc_attr( bp_pharmacy_name() ); ?> on Google Maps"
            >
                <span class="location-pin-dot">
                    <?php if ( $pin_icon_url ) : ?>
                        <img class="location-pin-icon" src="<?php echo esc_url( $pin_icon_url ); ?>" alt="" aria-hidden="true" />
                    <?php else : ?>
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor" aria-hidden="true">
                            <path d="M10 3.5h4a1 1 0 0 1 1 1V9h4.5a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H15v4.5a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V15H4.5a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1H9V4.5a1 1 0 0 1 1-1z"/>
                        </svg>
                    <?php endif; ?>
                </span>
                <span class="location-pin-label">
                    <span class="location-pin-label-name"><?php echo esc_html( bp_pharmacy_name() ); ?></span>
                    <span class="location-pin-label-addr"><?php echo esc_html( $addr_line_1 ); ?></span>
                    <span class="location-pin-label-cta">Get directions <i class="fas fa-arrow-right" aria-hidden="true"></i></span>
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
                if ( ! $c_url ) {
                    $c_url = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( $c_coords );
                }
            ?>
                <div
                    class="location-callout location-callout--<?php echo esc_attr( $anchor ); ?>"
                    data-lat="<?php echo esc_attr( $c_lat ); ?>"
                    data-lng="<?php echo esc_attr( $c_lng ); ?>"
                    data-parking-index="<?php echo esc_attr( $i ); ?>"
                >
                    <button type="button" class="location-callout-dot" aria-label="<?php echo esc_attr( $c_label ); ?> — show details" aria-haspopup="true"></button>
                    <div class="location-callout-card" role="tooltip">
                        <div class="location-callout-text">
                            <span class="location-callout-label"><?php echo esc_html( $c_label ); ?></span>
                            <?php if ( $c_desc !== '' ) : ?><span class="location-callout-desc"><?php echo esc_html( $c_desc ); ?></span><?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url( $c_url ); ?>" class="location-callout-directions" target="_blank" rel="noopener noreferrer">Directions <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div><!-- /.location-compact-map -->

    <!-- Info bar (homepage card style) — opening hours + parking.
         Overlays the map bottom on desktop; flows below the map on mobile. -->
    <div class="location-compact-card location-compact-bar">
        <div class="location-compact-col location-compact-col--hours">
        <div class="location-compact-card-header">
            <div class="location-detail-icon"><i class="fas fa-clock"></i></div>
            <span class="location-compact-card-label">Opening Hours</span>
        </div>
        <div class="location-hours">
            <div class="location-hours-row">
                <span class="location-hours-day">Mon &ndash; Fri</span>
                <span class="location-hours-time"><?php echo esc_html( $hours_weekday ); ?></span>
            </div>
            <?php
            $sat_closed = strtolower( trim( $hours_saturday ) ) === 'closed';
            $sun_closed = strtolower( trim( $hours_sunday ) ) === 'closed';
            if ( $sat_closed && $sun_closed ) : ?>
            <div class="location-hours-row">
                <span class="location-hours-day">Sat &amp; Sun</span>
                <span class="location-hours-time location-hours-closed">Closed</span>
            </div>
            <?php else : ?>
            <div class="location-hours-row">
                <span class="location-hours-day">Saturday</span>
                <span class="location-hours-time<?php echo $sat_closed ? ' location-hours-closed' : ''; ?>"><?php echo esc_html( $hours_saturday ); ?></span>
            </div>
            <div class="location-hours-row">
                <span class="location-hours-day">Sunday</span>
                <span class="location-hours-time<?php echo $sun_closed ? ' location-hours-closed' : ''; ?>"><?php echo esc_html( $hours_sunday ); ?></span>
            </div>
            <?php endif; ?>
        </div>
        </div>

        <?php if ( ! empty( $parking_callouts ) ) : ?>
        <div class="location-compact-col location-compact-col--parking">
        <div class="location-compact-card-header">
            <div class="location-detail-icon"><i class="fas fa-square-parking"></i></div>
            <span class="location-compact-card-label">Parking</span>
        </div>
        <ul class="location-parking-list location-compact-parking">
            <?php foreach ( $parking_callouts as $i => $callout ) :
                $p_label  = isset( $callout['label'] ) ? $callout['label'] : '';
                $p_coords = isset( $callout['coords'] ) ? trim( (string) $callout['coords'] ) : '';
                if ( $p_label === '' || $p_coords === '' ) { continue; }
            ?>
                <li class="location-parking-item">
                    <span class="location-parking-name"><?php echo esc_html( $p_label ); ?></span>
                    <button type="button" class="location-parking-directions" data-parking-trigger="<?php echo esc_attr( $i ); ?>">
                        <i class="fas fa-diamond-turn-right"></i>
                        Directions
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>
        </div>
        <?php endif; ?>
    </div>

</div>
