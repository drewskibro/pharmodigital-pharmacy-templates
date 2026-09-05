<?php
/**
 * Apply the approved 5 September 2026 Japanese encephalitis price change.
 *
 * Run via WP-CLI on the matching pharmacy's production site. Routine later
 * prices remain editable in WP Admin. This script never imports the seed file.
 * A narrow rollback snapshot is saved in at_je_price_20260905_backup.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
    return;
}
if ( ! function_exists( 'get_field' ) || ! function_exists( 'update_field' ) ) {
    WP_CLI::error( 'Advanced Custom Fields PRO is required but not active.' );
    return;
}
if ( 'dentonpharmacy.co.uk' !== wp_parse_url( home_url(), PHP_URL_HOST ) ) {
    WP_CLI::error( 'Refusing to update Japanese encephalitis prices on an unexpected site.' );
    return;
}

$find_page = static function ( $template ) {
    $pages = get_posts( array(
        'post_type'      => 'page',
        'posts_per_page' => 2,
        'meta_key'       => '_wp_page_template',
        'meta_value'     => $template,
        'post_status'    => 'publish',
        'fields'         => 'ids',
    ) );
    if ( ! is_array( $pages ) || 1 !== count( $pages ) ) {
        WP_CLI::error( 'Expected exactly one published page using ' . $template . '.' );
    }
    return (int) $pages[0];
};

$prices_page = $find_page( 'page-templates/page-prices.php' );
$service_page = $find_page( 'page-templates/page-japaneseencephalitis.php' );
$rows = get_field( 'prices_travel', $prices_page );
if ( ! is_array( $rows ) ) {
    WP_CLI::error( 'The Prices page has no readable Travel Health rows.' );
    return;
}

$matches = array();
foreach ( $rows as $index => $row ) {
    $name = isset( $row['travel_vaccine_name'] ) ? $row['travel_vaccine_name'] : '';
    $name = strtolower( trim( preg_replace( '/\s+/u', ' ', (string) $name ) ) );
    if ( 'japanese encephalitis' === $name ) {
        $matches[] = $index;
    }
}
if ( 1 !== count( $matches ) ) {
    WP_CLI::error( 'Expected exactly one Japanese encephalitis Travel Health row.' );
    return;
}

$target_index = $matches[0];
$original_row = $rows[ $target_index ];
$current_price = isset( $original_row['travel_price_per_dose'] )
    ? $original_row['travel_price_per_dose'] : '';
if ( ! in_array( $current_price, array( '£90', '£100' ), true ) ) {
    WP_CLI::error( 'Refusing to replace an unexpected Japanese encephalitis per-dose price.' );
    return;
}

// Preserve a blank optional total. Only correct an existing known course total.
$course = isset( $original_row['travel_course_price'] ) ? $original_row['travel_course_price'] : '';
$course_prices = array(
    '' => '',
    '£180' => '£200',
    '£180 (2 doses)' => '£200 (2 doses)',
    '£200' => '£200',
    '£200 (2 doses)' => '£200 (2 doses)',
);
if ( ! is_string( $course ) || ! array_key_exists( $course, $course_prices ) ) {
    WP_CLI::error( 'Refusing to replace an unexpected Japanese encephalitis course total.' );
    return;
}

$service_price = get_field( 'vaccine_price_amount', $service_page );
// These are the exact empty states supported by dp_field(). Keep the fallback.
$uses_fallback = null === $service_price || '' === $service_price;
if ( ! $uses_fallback && ! in_array( $service_price, array( '£90', '£100' ), true ) ) {
    WP_CLI::error( 'Refusing to replace an unexpected Japanese encephalitis page price.' );
    return;
}

$expected_rows = $rows;
$expected_rows[ $target_index ]['travel_price_per_dose'] = '£100';
if ( $course !== $course_prices[ $course ] ) {
    $expected_rows[ $target_index ]['travel_course_price'] = $course_prices[ $course ];
}
$expected_service_price = $uses_fallback ? $service_price : '£100';
$rows_changed = $expected_rows !== $rows;
$service_changed = $expected_service_price !== $service_price;

if ( $rows_changed || $service_changed ) {
    // Preflight every field before the first price write. Never overwrite backup.
    $backup_key = 'at_je_price_20260905_backup';
    if ( false === get_option( $backup_key, false ) ) {
        $backup = array(
            'recorded_at' => gmdate( 'c' ),
            'site' => home_url(),
            'prices_page' => $prices_page,
            'row_index' => $target_index,
            'original_row' => $original_row,
            'service_page' => $service_page,
            'service_price' => $service_price,
            'service_uses_fallback' => $uses_fallback,
            'previous_template_fallback' => '£90',
        );
        if ( ! add_option( $backup_key, $backup, '', false ) ) {
            WP_CLI::error( 'Could not preserve the Japanese encephalitis rollback snapshot.' );
            return;
        }
    }
}

if ( $rows_changed ) {
    // ACF may return false for a same-length repeater write; verify by rereading.
    update_field( 'prices_travel', $expected_rows, $prices_page );
    clean_post_cache( $prices_page );
}
if ( $service_changed ) {
    update_field( 'vaccine_price_amount', $expected_service_price, $service_page );
    clean_post_cache( $service_page );
}

if ( get_field( 'prices_travel', $prices_page ) !== $expected_rows ) {
    WP_CLI::error( 'The Travel Health rows did not reread exactly as intended.' );
    return;
}
if ( get_field( 'vaccine_price_amount', $service_page ) !== $expected_service_price ) {
    WP_CLI::error( 'The Japanese encephalitis page price did not reread exactly as intended.' );
    return;
}

WP_CLI::success( sprintf(
    '%s Japanese encephalitis at £100 per dose on Prices page %d and service page %d%s.',
    $rows_changed || $service_changed ? 'Updated' : 'Verified',
    $prices_page,
    $service_page,
    $uses_fallback ? ' (service uses the updated template fallback)' : ''
) );
