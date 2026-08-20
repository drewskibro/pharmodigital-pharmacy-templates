<?php
/**
 * Add or refresh the Foundayo rows on the Prices page.
 *
 * Run via WP-CLI on the target environment:
 *
 *   wp eval-file wp-content/themes/bowland-pharmacy-theme/bin/update-foundayo-prices.php
 *
 * The update is idempotent and leaves all non-Foundayo rows untouched.
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
    'posts_per_page' => 1,
    'meta_key'       => '_wp_page_template',
    'meta_value'     => 'page-templates/page-prices.php',
    'post_status'    => 'any',
    'fields'         => 'ids',
) );

if ( empty( $pages ) ) {
    WP_CLI::error( 'No page is using the Prices template.' );
    return;
}

$page_id = (int) $pages[0];
$rows    = get_field( 'prices_weight_loss', $page_id );

if ( ! is_array( $rows ) ) {
    WP_CLI::error( 'The Prices page has no readable Weight Loss Treatments rows.' );
    return;
}

$wanted = array(
    '0.8mg'  => '£99',
    '2.5mg'  => '£119',
    '5.5mg'  => '£129',
    '9mg'    => '£159',
    '14.5mg' => '£189',
    '17.2mg' => '£199',
);

$normalise = static function ( $value ) {
    return strtolower( trim( preg_replace( '/\s+/', ' ', (string) $value ) ) );
};

$seen                  = array();
$last_foundayo_index   = null;
$last_tablet_index     = null;
$first_following_index = null;
$changed               = false;

foreach ( $rows as $index => &$row ) {
    $product = $normalise( isset( $row['wl_product_name'] ) ? $row['wl_product_name'] : '' );
    $strength = $normalise( isset( $row['wl_strength'] ) ? $row['wl_strength'] : '' );

    if ( false !== strpos( $product, 'wegovy tablets' ) ) {
        $last_tablet_index = $index;
    }

    if (
        null === $first_following_index
        && ( false !== strpos( $product, 'saxenda' ) || false !== strpos( $product, 'orlistat' ) )
    ) {
        $first_following_index = $index;
    }

    if ( ! preg_match( '/^foundayo(?: tablets)?$/', $product ) || ! isset( $wanted[ $strength ] ) ) {
        continue;
    }

    $last_foundayo_index = $index;
    $seen[ $strength ]   = true;

    $replacement = array(
        'wl_product_name' => 'Foundayo Tablets',
        'wl_strength'     => $strength,
        'wl_price'        => $wanted[ $strength ],
        'wl_supply'       => '30 tablets',
        'wl_note'         => isset( $row['wl_note'] ) ? $row['wl_note'] : '',
    );

    if ( $row !== $replacement ) {
        $row     = $replacement;
        $changed = true;
    }
}
unset( $row );

$missing = array();
foreach ( $wanted as $strength => $price ) {
    if ( isset( $seen[ $normalise( $strength ) ] ) ) {
        continue;
    }

    $missing[] = array(
        'wl_product_name' => 'Foundayo Tablets',
        'wl_strength'     => $strength,
        'wl_price'        => $price,
        'wl_supply'       => '30 tablets',
        'wl_note'         => '',
    );
}

if ( ! empty( $missing ) ) {
    if ( null !== $last_foundayo_index ) {
        $insert_at = $last_foundayo_index + 1;
    } elseif ( null !== $last_tablet_index ) {
        $insert_at = $last_tablet_index + 1;
    } elseif ( null !== $first_following_index ) {
        $insert_at = $first_following_index;
    } else {
        $insert_at = count( $rows );
    }

    array_splice( $rows, $insert_at, 0, $missing );
    $changed = true;
}

if ( $changed ) {
    if ( ! update_field( 'prices_weight_loss', $rows, $page_id ) ) {
        WP_CLI::error( 'Advanced Custom Fields could not save the Foundayo prices.' );
        return;
    }

    clean_post_cache( $page_id );
}

WP_CLI::success( sprintf(
    '%s Foundayo prices on "%s" (page ID %d).',
    $changed ? 'Updated' : 'Verified',
    get_the_title( $page_id ),
    $page_id
) );
