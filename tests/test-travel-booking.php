<?php
/** Local/CI regression check for the selection displayed by a labelled booking link. */
declare(strict_types=1);
$theme = $argv[1] ?? '';
if ( ! in_array( $theme, array( 'bowland', 'denton' ), true ) ) {
    throw new InvalidArgumentException( 'Supply bowland or denton' );
}
$dir = dirname( __DIR__ ) . '/' . $theme . '-pharmacy-theme';
define( 'AT_TRAVEL_CALENDAR_ID', 'bowland' === $theme ? 8436365 : 10903457 );
function add_filter() {}
require $dir . '/inc/travel-booking.php';

$cases = array(
    'v6i-service-body'  => array( 47536495 ),
    'v6c-service-body'  => array( 81305704 ),
    'v2s-service-price' => array( 47536474 ),
    'v2a-service-price' => array( 95877384 ),
    'v2-service-hero'   => array( 47536474, 95877384 ),
    'v6-service-hero'   => array( 47536495, 81305704 ),
    't1-article-body'   => array( 86813138 ),
    'v1-article-body'   => array( 47108784 ),
);
foreach ( $cases as $marker => $expected ) {
    $route = at_travel_selected_route( $marker );
    parse_str( parse_url( at_travel_calendar_url( $route ), PHP_URL_QUERY ), $query );
    if ( AT_TRAVEL_CALENDAR_ID !== (int) $query['calendarID'] || $expected !== array_map( 'intval', (array) $query['appointmentType'] ) ) {
        throw new RuntimeException( 'Incorrect calendar or appointment for ' . $marker );
    }
}
foreach ( array( null, array( 'v2' ), 'v6i-unknown', 'unknown-service-body' ) as $invalid ) {
    if ( '' !== at_travel_selected_route( $invalid ) ) {
        throw new RuntimeException( 'Unexpected marker was accepted' );
    }
}

// Guard the intent of the individual choices, as well as the calendar selection above.
$cards = array(
    array( 'typhoid', 'Prefer the Injection', 'at_travel_booking_url( \'v6i\', \'service-body\' )' ),
    array( 'typhoid', 'Prefer the Capsules', 'at_travel_booking_url( \'v6c\', \'service-body\' )' ),
    array( 'rabies', 'vaccine_price_std_name', 'at_travel_booking_url( \'v2s\', \'service-price\' )' ),
    array( 'rabies', 'vaccine_price_accel_name', 'at_travel_booking_url( \'v2a\', \'service-price\' )' ),
);
foreach ( $cards as list( $page, $heading, $expected_link ) ) {
    $source = file_get_contents( $dir . '/page-templates/page-' . $page . '.php' );
    $card = strstr( $source, $heading );
    $button = $card ? strstr( $card, '<a href=' ) : false;
    if ( ! $button || false === strpos( strstr( $button, '</a>', true ), $expected_link ) ) {
        throw new RuntimeException( 'Incorrect button for ' . $heading );
    }
}
$functions = file_get_contents( $dir . '/functions.php' );
$closer = strstr( $functions, '<div class="article-closer-buttons">' );
if ( ! $closer || false === strpos( strstr( $closer, '</a>', true ), "at_travel_booking_url( 't1', 'article-body' )" ) ) {
    throw new RuntimeException( 'Travel article consultation closer lost its appointment' );
}
echo "$theme booking choices passed\n";
