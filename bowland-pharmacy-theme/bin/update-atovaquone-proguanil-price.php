<?php
/**
 * Update the Atovaquone/Proguanil row on the Prices page.
 *
 * Run via WP-CLI on the target environment:
 *
 *   wp eval-file wp-content/themes/bowland-pharmacy-theme/bin/update-atovaquone-proguanil-price.php
 *
 * The update is idempotent and fails closed if the live data has drifted.
 *
 * @package Bowland_Pharmacy
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

$pages = get_posts( array(
    'post_type'      => 'page',
    'posts_per_page' => 2,
    'meta_key'       => '_wp_page_template',
    'meta_value'     => 'page-templates/page-prices.php',
    'post_status'    => 'any',
    'fields'         => 'ids',
) );

if ( ! is_array( $pages ) || 1 !== count( $pages ) ) {
    WP_CLI::error( 'Expected exactly one page using the Prices template.' );
    return;
}

$page_id = (int) $pages[0];
$rows    = get_field( 'prices_travel', $page_id );

if ( ! is_array( $rows ) ) {
    WP_CLI::error( 'The Prices page has no readable Travel Health rows.' );
    return;
}

$normalise_name = static function ( $value ) {
    $normalised = preg_replace( '/\s+/u', ' ', trim( (string) $value ) );

    return strtolower( null === $normalised ? '' : $normalised );
};

$target_name = $normalise_name( 'Malaria — Atovaquone/Proguanil' );
$old_price   = '£1.50 per tablet';
$new_price   = '£2 per tablet';
$matches     = array();

foreach ( $rows as $index => $row ) {
    $name = isset( $row['travel_vaccine_name'] ) ? $row['travel_vaccine_name'] : '';

    if ( $target_name === $normalise_name( $name ) ) {
        $matches[] = $index;
    }
}

if ( 1 !== count( $matches ) ) {
    WP_CLI::error( 'Expected exactly one Atovaquone/Proguanil Travel Health row.' );
    return;
}

$target_index = $matches[0];
$current_price = isset( $rows[ $target_index ]['travel_price_per_dose'] )
    ? $rows[ $target_index ]['travel_price_per_dose']
    : '';
$changed = false;

if ( $new_price === $current_price ) {
    // Already updated. The reread verification below still runs.
} elseif ( $old_price !== $current_price ) {
    WP_CLI::error( sprintf(
        'Refusing to replace unexpected Atovaquone/Proguanil price "%s".',
        (string) $current_price
    ) );
    return;
} else {
    $rows[ $target_index ]['travel_price_per_dose'] = $new_price;

    if ( false === update_field( 'prices_travel', $rows, $page_id ) ) {
        WP_CLI::error( 'Advanced Custom Fields could not save the Atovaquone/Proguanil price.' );
        return;
    }

    clean_post_cache( $page_id );
    $changed = true;
}

$verified_rows = get_field( 'prices_travel', $page_id );

if ( ! is_array( $verified_rows ) || $verified_rows !== $rows ) {
    WP_CLI::error( 'The Travel Health rows did not reread exactly as intended.' );
    return;
}

$verified_matches = array();
foreach ( $verified_rows as $index => $row ) {
    $name = isset( $row['travel_vaccine_name'] ) ? $row['travel_vaccine_name'] : '';

    if ( $target_name === $normalise_name( $name ) ) {
        $verified_matches[] = $index;
    }
}

if (
    1 !== count( $verified_matches )
    || $new_price !== $verified_rows[ $verified_matches[0] ]['travel_price_per_dose']
) {
    WP_CLI::error( 'The Atovaquone/Proguanil price failed reread verification.' );
    return;
}

WP_CLI::success( sprintf(
    '%s Atovaquone/Proguanil price on "%s" (page ID %d).',
    $changed ? 'Updated' : 'Verified',
    get_the_title( $page_id ),
    $page_id
) );
