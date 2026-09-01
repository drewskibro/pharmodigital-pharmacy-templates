<?php
/**
 * Focused tests for the Denton and Bowland Atovaquone/Proguanil updaters.
 *
 * Run from the repository root:
 *
 *   php tests/test-atovaquone-proguanil-price-updaters.php
 */

$scripts = array(
    'denton'  => dirname( __DIR__ ) . '/denton-pharmacy-theme/bin/update-atovaquone-proguanil-price.php',
    'bowland' => dirname( __DIR__ ) . '/bowland-pharmacy-theme/bin/update-atovaquone-proguanil-price.php',
);

$scenarios = array(
    'updates_known_old_price',
    'accepts_already_updated_price',
    'rejects_missing_target',
    'rejects_duplicate_target',
    'rejects_unexpected_price',
    'rejects_multiple_prices_pages',
    'rejects_failed_save',
    'rejects_reread_drift',
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
        $command = implode( ' ', array(
            escapeshellarg( PHP_BINARY ),
            escapeshellarg( __FILE__ ),
            'case',
            escapeshellarg( $theme ),
            escapeshellarg( $scenario ),
        ) );
        $output  = array();
        $status  = 0;

        exec( $command . ' 2>&1', $output, $status );
        fwrite( STDOUT, implode( PHP_EOL, $output ) . PHP_EOL );

        if ( 0 !== $status ) {
            $failures[] = "{$theme}:{$scenario}";
        }
    }
}

if ( $failures ) {
    fwrite( STDERR, 'Failed cases: ' . implode( ', ', $failures ) . PHP_EOL );
    exit( 1 );
}

fwrite( STDOUT, 'All 16 updater cases passed.' . PHP_EOL );

/**
 * Run one isolated scenario. Each scenario executes in a child PHP process so
 * the updater can be included with fresh WordPress function mocks.
 *
 * @param string              $theme Theme fixture name.
 * @param string              $scenario Scenario name.
 * @param array<string,string> $scripts Updater paths.
 */
function run_case( $theme, $scenario, $scripts ) {
    if ( ! isset( $scripts[ $theme ] ) || ! file_exists( $scripts[ $theme ] ) ) {
        throw new RuntimeException( 'Updater script not found.' );
    }

    $rows = array(
        array(
            'travel_category'       => 'vaccine',
            'travel_vaccine_name'   => 'Yellow Fever',
            'travel_price_per_dose' => '£69',
            'travel_course_price'   => '',
            'travel_notes'          => 'Certificate included',
        ),
        array(
            'travel_category'       => 'antimalarial',
            'travel_vaccine_name'   => 'Malaria — Atovaquone/Proguanil',
            'travel_price_per_dose' => '£1.50 per tablet',
            'travel_course_price'   => '',
            'travel_notes'          => 'Preserve this note',
            'custom_fixture_field'  => 'must remain untouched',
        ),
        array(
            'travel_category'       => 'antimalarial',
            'travel_vaccine_name'   => 'Malaria — Doxycycline',
            'travel_price_per_dose' => '£0.50 per tablet',
            'travel_course_price'   => '',
            'travel_notes'          => '',
        ),
    );

    $expected_error = null;
    $expect_update  = false;

    switch ( $scenario ) {
        case 'updates_known_old_price':
            $expect_update = true;
            break;

        case 'accepts_already_updated_price':
            $rows[1]['travel_price_per_dose'] = '£2 per tablet';
            break;

        case 'rejects_missing_target':
            array_splice( $rows, 1, 1 );
            $expected_error = 'Expected exactly one Atovaquone/Proguanil Travel Health row.';
            break;

        case 'rejects_duplicate_target':
            $rows[] = $rows[1];
            $expected_error = 'Expected exactly one Atovaquone/Proguanil Travel Health row.';
            break;

        case 'rejects_unexpected_price':
            $rows[1]['travel_price_per_dose'] = '£1.75 per tablet';
            $expected_error = 'Refusing to replace unexpected Atovaquone/Proguanil price';
            break;

        case 'rejects_multiple_prices_pages':
            $expected_error = 'Expected exactly one page using the Prices template.';
            break;

        case 'rejects_failed_save':
            $GLOBALS['mock_update_result'] = false;
            $expected_error = 'Advanced Custom Fields could not save the Atovaquone/Proguanil price.';
            break;

        case 'rejects_reread_drift':
            $GLOBALS['mock_reread_drift'] = true;
            $expected_error = 'The Travel Health rows did not reread exactly as intended.';
            break;

        default:
            throw new RuntimeException( 'Unknown test scenario.' );
    }

    $expected_rows = $rows;
    if ( $expect_update || 'rejects_reread_drift' === $scenario ) {
        $expected_rows[1]['travel_price_per_dose'] = '£2 per tablet';
    }

    $GLOBALS['mock_pages'] = 'rejects_multiple_prices_pages' === $scenario
        ? array( 743, 744 )
        : array( 743 );
    $GLOBALS['mock_rows'] = $rows;
    $GLOBALS['mock_get_field_calls'] = 0;
    $GLOBALS['mock_update_calls'] = 0;
    $GLOBALS['mock_cache_cleans'] = array();
    $GLOBALS['mock_successes'] = array();
    $GLOBALS['mock_update_result'] = isset( $GLOBALS['mock_update_result'] )
        ? $GLOBALS['mock_update_result']
        : true;
    $GLOBALS['mock_reread_drift'] = isset( $GLOBALS['mock_reread_drift'] )
        ? $GLOBALS['mock_reread_drift']
        : false;

    if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', '/mock-wordpress/' );
    }
    if ( ! defined( 'WP_CLI' ) ) {
        define( 'WP_CLI', true );
    }

    $caught = null;
    try {
        include $scripts[ $theme ];
    } catch ( RuntimeException $error ) {
        $caught = $error;
    }

    if ( null !== $expected_error ) {
        assert_true( $caught instanceof RuntimeException, 'Expected the updater to fail closed.' );
        assert_true(
            false !== strpos( $caught->getMessage(), $expected_error ),
            'Unexpected failure message: ' . $caught->getMessage()
        );
        assert_true( empty( $GLOBALS['mock_successes'] ), 'A failed updater must not report success.' );
        return;
    }

    if ( $caught ) {
        throw $caught;
    }

    assert_true( $GLOBALS['mock_rows'] === $expected_rows, 'Rows or non-target fields changed unexpectedly.' );
    assert_true(
        $expect_update ? 1 === $GLOBALS['mock_update_calls'] : 0 === $GLOBALS['mock_update_calls'],
        'Unexpected number of ACF update calls.'
    );
    assert_true(
        $expect_update ? array( 743 ) === $GLOBALS['mock_cache_cleans'] : empty( $GLOBALS['mock_cache_cleans'] ),
        'Unexpected post-cache cleanup behavior.'
    );
    assert_true( 1 === count( $GLOBALS['mock_successes'] ), 'Expected exactly one success message.' );
    assert_true(
        false !== strpos(
            $GLOBALS['mock_successes'][0],
            $expect_update ? 'Updated Atovaquone/Proguanil price' : 'Verified Atovaquone/Proguanil price'
        ),
        'Unexpected success message.'
    );
}

/**
 * Throw when an assertion fails.
 *
 * @param bool   $condition Assertion result.
 * @param string $message Failure message.
 */
function assert_true( $condition, $message ) {
    if ( ! $condition ) {
        throw new RuntimeException( $message );
    }
}

class WP_CLI {
    public static function error( $message ) {
        throw new RuntimeException( 'WP_CLI error: ' . $message );
    }

    public static function success( $message ) {
        $GLOBALS['mock_successes'][] = $message;
    }
}

function get_posts( $arguments ) {
    assert_true( 'page-templates/page-prices.php' === $arguments['meta_value'], 'Unexpected page query.' );
    assert_true( 2 === $arguments['posts_per_page'], 'Page query must detect duplicates.' );

    return $GLOBALS['mock_pages'];
}

function get_field( $field, $page_id ) {
    assert_true( 'prices_travel' === $field, 'Updater read the wrong ACF field.' );
    assert_true( 743 === $page_id, 'Updater read the wrong page.' );
    ++$GLOBALS['mock_get_field_calls'];

    $rows = $GLOBALS['mock_rows'];
    if ( $GLOBALS['mock_reread_drift'] && $GLOBALS['mock_get_field_calls'] > 1 ) {
        $rows[0]['travel_notes'] = 'Unexpected concurrent change';
    }

    return $rows;
}

function update_field( $field, $value, $page_id ) {
    assert_true( 'prices_travel' === $field, 'Updater wrote the wrong ACF field.' );
    assert_true( 743 === $page_id, 'Updater wrote the wrong page.' );
    ++$GLOBALS['mock_update_calls'];

    if ( ! $GLOBALS['mock_update_result'] ) {
        return false;
    }

    $GLOBALS['mock_rows'] = $value;
    return true;
}

function clean_post_cache( $page_id ) {
    $GLOBALS['mock_cache_cleans'][] = $page_id;
}

function get_the_title( $page_id ) {
    assert_true( 743 === $page_id, 'Updater reported the wrong page.' );
    return 'Prices';
}
