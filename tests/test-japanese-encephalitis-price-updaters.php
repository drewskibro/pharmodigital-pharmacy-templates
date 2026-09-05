<?php
/**
 * Run: php tests/test-japanese-encephalitis-price-updaters.php
 *
 * Isolated WordPress/ACF fixtures exercise the production migration, including
 * untouched neighbouring prices, rollback preservation, drift and failed saves.
 */
$scripts = array();
foreach ( array( 'bowland', 'denton' ) as $theme ) {
    $scripts[ $theme ] = dirname( __DIR__ ) . '/' . $theme . '-pharmacy-theme/bin/update-japanese-encephalitis-price.php';
}
$scenarios = array(
    'updates_prices_and_page', 'preserves_null_fallback', 'preserves_empty_fallback',
    'accepts_already_updated', 'accepts_false_save_result', 'updates_existing_course_total',
    'updates_labelled_course_total', 'preserves_existing_backup', 'rejects_wrong_site',
    'rejects_missing_row', 'rejects_duplicate_row', 'rejects_unexpected_price',
    'rejects_unexpected_course', 'rejects_unexpected_page_price', 'rejects_false_page_price',
    'rejects_duplicate_prices_pages', 'rejects_missing_service_page', 'rejects_backup_failure',
    'rejects_failed_rows_save', 'rejects_failed_page_save', 'detects_reread_drift',
);
if ( 4 === $argc && 'case' === $argv[1] ) {
    try {
        run_case( $argv[2], $argv[3], $scripts );
        fwrite( STDOUT, "ok {$argv[2]} {$argv[3]}\n" );
        exit( 0 );
    } catch ( Throwable $error ) {
        fwrite( STDERR, "not ok {$argv[2]} {$argv[3]}: {$error->getMessage()}\n" );
        exit( 1 );
    }
}
$failures = array();
foreach ( array_keys( $scripts ) as $theme ) {
    foreach ( $scenarios as $scenario ) {
        $command = implode( ' ', array_map( 'escapeshellarg', array( PHP_BINARY, __FILE__, 'case', $theme, $scenario ) ) );
        $output = array();
        $status = 0;
        exec( $command . ' 2>&1', $output, $status );
        fwrite( STDOUT, implode( PHP_EOL, $output ) . PHP_EOL );
        if ( 0 !== $status ) {
            $failures[] = $theme . ':' . $scenario;
        }
    }
}
if ( $failures ) {
    fwrite( STDERR, 'Failed cases: ' . implode( ', ', $failures ) . PHP_EOL );
    exit( 1 );
}
fwrite( STDOUT, 'All ' . count( $scripts ) * count( $scenarios ) . " updater cases passed.\n" );

function run_case( $theme, $scenario, $scripts ) {
    $rows = array(
        array( 'travel_vaccine_name' => 'Yellow Fever', 'travel_price_per_dose' => '£69', 'travel_notes' => 'Certificate included' ),
        array(
            'travel_category' => 'vaccine', 'travel_vaccine_name' => 'Japanese Encephalitis',
            'travel_price_per_dose' => '£90', 'travel_course_price' => '',
            'travel_notes' => 'Preserve approved clinical wording', 'custom_field' => 'preserve',
        ),
        array( 'travel_vaccine_name' => 'Tick Borne Encephalitis', 'travel_price_per_dose' => '£55 adult / £50 child' ),
    );
    $service_price = '£90';
    $backup = false;
    $expected_error = null;
    $preflight_failure = false;
    switch ( $scenario ) {
        case 'preserves_null_fallback': $service_price = null; break;
        case 'preserves_empty_fallback': $service_price = ''; break;
        case 'accepts_already_updated':
            $rows[1]['travel_price_per_dose'] = '£100'; $service_price = '£100'; break;
        case 'updates_existing_course_total': $rows[1]['travel_course_price'] = '£180'; break;
        case 'updates_labelled_course_total': $rows[1]['travel_course_price'] = '£180 (2 doses)'; break;
        case 'preserves_existing_backup': $backup = array( 'original_backup' => 'must not change' ); break;
        case 'rejects_wrong_site': $expected_error = 'unexpected site'; break;
        case 'rejects_missing_row': array_splice( $rows, 1, 1 ); $expected_error = 'exactly one Japanese'; break;
        case 'rejects_duplicate_row': $rows[] = $rows[1]; $expected_error = 'exactly one Japanese'; break;
        case 'rejects_unexpected_price': $rows[1]['travel_price_per_dose'] = '£110'; $expected_error = 'per-dose price'; break;
        case 'rejects_unexpected_course': $rows[1]['travel_course_price'] = '£270'; $expected_error = 'course total'; break;
        case 'rejects_unexpected_page_price': $service_price = '£110'; $expected_error = 'page price'; break;
        case 'rejects_false_page_price': $service_price = false; $expected_error = 'page price'; break;
        case 'rejects_duplicate_prices_pages': $expected_error = 'exactly one published page'; break;
        case 'rejects_missing_service_page': $expected_error = 'exactly one published page'; break;
        case 'rejects_backup_failure': $expected_error = 'rollback snapshot'; break;
        case 'rejects_failed_rows_save': $expected_error = 'Travel Health rows did not reread'; break;
        case 'rejects_failed_page_save': $expected_error = 'page price did not reread'; break;
        case 'detects_reread_drift': $expected_error = 'Travel Health rows did not reread'; break;
    }
    $preflight_failure = null !== $expected_error && ! in_array( $scenario, array(
        'rejects_failed_rows_save', 'rejects_failed_page_save', 'detects_reread_drift',
    ), true );
    $initial_rows = $rows;
    $initial_service_price = $service_price;
    $initial_backup = $backup;
    $GLOBALS['fixture'] = array(
        'theme' => $theme, 'scenario' => $scenario, 'rows' => $rows, 'service_price' => $service_price,
        'backup' => $backup, 'writes' => array(), 'backups_created' => 0, 'row_reads' => 0, 'successes' => array(),
    );
    define( 'ABSPATH', '/mock-wordpress/' );
    define( 'WP_CLI', true );
    $caught = null;
    try { include $scripts[ $theme ]; } catch ( RuntimeException $error ) { $caught = $error; }
    $fixture = $GLOBALS['fixture'];
    if ( null !== $expected_error ) {
        check( $caught instanceof RuntimeException, 'Expected a failure.' );
        check( false !== strpos( $caught->getMessage(), $expected_error ), 'Wrong error: ' . $caught->getMessage() );
        check( empty( $fixture['successes'] ), 'Failed migration reported success.' );
        if ( $preflight_failure ) {
            check( empty( $fixture['writes'] ), 'A failed preflight changed a price.' );
            check( $fixture['rows'] === $initial_rows, 'Preflight changed rows.' );
            check( $fixture['service_price'] === $initial_service_price, 'Preflight changed page.' );
        }
        return;
    }
    if ( $caught ) { throw $caught; }
    $expected_rows = $initial_rows;
    $expected_rows[1]['travel_price_per_dose'] = '£100';
    if ( 'updates_existing_course_total' === $scenario ) { $expected_rows[1]['travel_course_price'] = '£200'; }
    if ( 'updates_labelled_course_total' === $scenario ) { $expected_rows[1]['travel_course_price'] = '£200 (2 doses)'; }
    check( $fixture['rows'] === $expected_rows, 'Changed another vaccine or unrelated field.' );
    $expected_service = in_array( $scenario, array( 'preserves_null_fallback', 'preserves_empty_fallback' ), true )
        ? $initial_service_price : '£100';
    check( $fixture['service_price'] === $expected_service, 'Wrong page price or altered empty fallback.' );
    check( count( $fixture['successes'] ) === 1, 'Expected one success.' );
    if ( 'accepts_already_updated' === $scenario ) {
        check( empty( $fixture['writes'] ), 'Idempotent migration wrote again.' );
        check( 0 === $fixture['backups_created'], 'Idempotent migration created a backup.' );
    } elseif ( 'preserves_existing_backup' === $scenario ) {
        check( $fixture['backup'] === $initial_backup, 'Replaced the original rollback snapshot.' );
    } else {
        check( 1 === $fixture['backups_created'], 'Expected one rollback snapshot.' );
        check( $fixture['backup']['original_row'] === $initial_rows[1], 'Backup changed the original row.' );
        check( $fixture['backup']['service_price'] === $initial_service_price, 'Backup lost original page price.' );
    }
}
function check( $condition, $message ) {
    if ( ! $condition ) { throw new RuntimeException( $message ); }
}
class WP_CLI {
    public static function error( $message ) { throw new RuntimeException( $message ); }
    public static function success( $message ) { $GLOBALS['fixture']['successes'][] = $message; }
}
function home_url() {
    $f = $GLOBALS['fixture'];
    return 'https://' . ( 'rejects_wrong_site' === $f['scenario'] ? 'other.example' : $f['theme'] . 'pharmacy.co.uk' );
}
function wp_parse_url( $url, $component ) { return parse_url( $url, $component ); }
function get_posts( $args ) {
    check( 2 === $args['posts_per_page'] && 'publish' === $args['post_status'], 'Unsafe page query.' );
    if ( 'page-templates/page-prices.php' === $args['meta_value'] ) {
        return 'rejects_duplicate_prices_pages' === $GLOBALS['fixture']['scenario'] ? array( 100, 101 ) : array( 100 );
    }
    check( 'page-templates/page-japaneseencephalitis.php' === $args['meta_value'], 'Unrelated page query.' );
    return 'rejects_missing_service_page' === $GLOBALS['fixture']['scenario'] ? array() : array( 200 );
}
function get_field( $name, $page ) {
    $f = &$GLOBALS['fixture'];
    if ( 'prices_travel' === $name && 100 === $page ) {
        $f['row_reads']++;
        $rows = $f['rows'];
        if ( 'detects_reread_drift' === $f['scenario'] && $f['row_reads'] > 1 ) { $rows[0]['travel_notes'] = 'Concurrent change'; }
        return $rows;
    }
    check( 'vaccine_price_amount' === $name && 200 === $page, 'Read an unrelated page field.' );
    return $f['service_price'];
}
function update_field( $name, $value, $page ) {
    $f = &$GLOBALS['fixture'];
    check( false !== $f['backup'], 'Price write happened before backup.' );
    $f['writes'][] = array( $name, $page );
    if ( 'prices_travel' === $name && 100 === $page ) {
        if ( 'rejects_failed_rows_save' !== $f['scenario'] ) { $f['rows'] = $value; }
    } else {
        check( 'vaccine_price_amount' === $name && 200 === $page, 'Wrote an unrelated page field.' );
        if ( 'rejects_failed_page_save' !== $f['scenario'] ) { $f['service_price'] = $value; }
    }
    return 'accepts_false_save_result' !== $f['scenario'];
}
function get_option( $name, $default ) {
    check( 'at_je_price_20260905_backup' === $name, 'Read an unrelated option.' );
    return $GLOBALS['fixture']['backup'];
}
function add_option( $name, $value, $deprecated, $autoload ) {
    check( 'at_je_price_20260905_backup' === $name && false === $autoload, 'Unsafe backup option.' );
    check( empty( $GLOBALS['fixture']['writes'] ), 'Backup was created after a price write.' );
    if ( 'rejects_backup_failure' === $GLOBALS['fixture']['scenario'] ) { return false; }
    $GLOBALS['fixture']['backup'] = $value;
    $GLOBALS['fixture']['backups_created']++;
    return true;
}
function clean_post_cache( $page ) { check( in_array( $page, array( 100, 200 ), true ), 'Cleaned an unrelated page.' ); }

