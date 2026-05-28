<?php
/**
 * One-off importer that seeds the Prices page from prices-seed.json.
 *
 * Run via WP-CLI on the target environment:
 *
 *   wp eval-file wp-content/themes/denton-pharmacy-theme/bin/import-prices.php
 *   wp eval-file wp-content/themes/denton-pharmacy-theme/bin/import-prices.php -- --force
 *
 * Refuses to clobber existing repeater data unless --force is passed.
 * After running once, all further edits should happen in WP Admin
 * (Pages → Prices) — re-running --force will overwrite those edits.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
    return; // Cowardly refuse to run outside WP-CLI.
}

if ( ! function_exists( 'update_field' ) ) {
    WP_CLI::error( 'Advanced Custom Fields PRO is required but not active.' );
    return;
}

// ── 1. Locate the Prices page by template ─────────────────────────────────
$pages = get_posts( array(
    'post_type'      => 'page',
    'posts_per_page' => 1,
    'meta_key'       => '_wp_page_template',
    'meta_value'     => 'page-templates/page-prices.php',
    'post_status'    => 'any',
    'fields'         => 'ids',
) );

if ( empty( $pages ) ) {
    WP_CLI::error(
        'No page is using the "Prices" template. Create a page in WP Admin → Pages → Add New, '
        . 'set Page Attributes → Template = Prices, publish, then re-run this importer.'
    );
    return;
}

$page_id    = (int) $pages[0];
$page_title = get_the_title( $page_id );

// ── 2. Load the seed JSON ─────────────────────────────────────────────────
$json_path = __DIR__ . '/prices-seed.json';

if ( ! file_exists( $json_path ) ) {
    WP_CLI::error( 'Seed file not found at: ' . $json_path );
    return;
}

$json_raw = file_get_contents( $json_path );
$data     = json_decode( $json_raw, true );

if ( ! is_array( $data ) ) {
    WP_CLI::error( 'Could not decode prices-seed.json (' . json_last_error_msg() . ')' );
    return;
}

// ── 3. Detect existing data and bail unless --force ──────────────────────
$argv  = isset( $args ) ? $args : ( isset( $argv ) ? $argv : array() );
$force = in_array( '--force', (array) $argv, true );

$repeater_fields = array( 'prices_weight_loss', 'prices_travel', 'prices_private', 'prices_nhs' );
$existing_rows   = 0;
foreach ( $repeater_fields as $f ) {
    $val = get_field( $f, $page_id );
    if ( is_array( $val ) ) {
        $existing_rows += count( $val );
    }
}

if ( $existing_rows > 0 && ! $force ) {
    WP_CLI::warning( sprintf(
        'Prices page "%s" already has %d row(s) across its repeaters. Refusing to overwrite. '
        . 'Pass --force to re-seed (this will discard any client edits).',
        $page_title,
        $existing_rows
    ) );
    return;
}

// ── 4. Write fields ───────────────────────────────────────────────────────
$counts  = array();
$mapping = array(
    'weight_loss' => 'prices_weight_loss',
    'travel'      => 'prices_travel',
    'private'     => 'prices_private',
    'nhs'         => 'prices_nhs',
);

foreach ( $mapping as $json_key => $acf_name ) {
    if ( isset( $data[ $json_key ] ) && is_array( $data[ $json_key ] ) ) {
        update_field( $acf_name, $data[ $json_key ], $page_id );
        $counts[ $json_key ] = count( $data[ $json_key ] );
    }
}

if ( isset( $data['disclaimer'] ) && is_string( $data['disclaimer'] ) ) {
    update_field( 'prices_disclaimer', $data['disclaimer'], $page_id );
    $counts['disclaimer'] = 1;
}

// ── 5. Report ─────────────────────────────────────────────────────────────
$summary_lines = array();
foreach ( $counts as $key => $n ) {
    $summary_lines[] = sprintf( '  %-12s %d', $key, $n );
}

WP_CLI::log( '' );
WP_CLI::log( sprintf( 'Seeded "%s" (page ID %d):', $page_title, $page_id ) );
WP_CLI::log( implode( PHP_EOL, $summary_lines ) );
WP_CLI::log( '' );
WP_CLI::success( $force ? 'Prices re-seeded (overwrote existing data).' : 'Prices seeded.' );
WP_CLI::log( 'Future edits: WP Admin → Pages → ' . $page_title . '. Do not re-run this importer for routine price changes.' );
