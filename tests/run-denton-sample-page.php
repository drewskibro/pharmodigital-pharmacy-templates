<?php

declare(strict_types=1);

define( 'ABSPATH', dirname( __DIR__ ) . '/' );
define( 'OBJECT', 'OBJECT' );

class WP_Post {
    public $ID;

    public function __construct( int $id ) {
        $this->ID = $id;
    }
}

$sample_page = new WP_Post( 2 );
$is_sample_page = false;
$redirect = array();

function add_filter() {
    // WordPress hook registration is outside this isolated behavior test.
}

function add_action() {
    // WordPress hook registration is outside this isolated behavior test.
}

function get_page_by_path( $path, $output, $post_type ) {
    global $sample_page;

    if ( 'sample-page' !== $path || OBJECT !== $output || 'page' !== $post_type ) {
        return null;
    }

    return $sample_page;
}

function is_page( $slug ) {
    global $is_sample_page;
    return 'sample-page' === $slug && $is_sample_page;
}

function home_url( $path = '/' ) {
    return 'https://dentonpharmacy.co.uk' . $path;
}

function wp_safe_redirect( $location, $status, $reason ) {
    global $redirect;
    $redirect = array( $location, $status, $reason );
    return true;
}

function fail_test( string $message ): void {
    fwrite( STDERR, 'FAIL: ' . $message . "\n" );
    exit( 1 );
}

require_once dirname( __DIR__ ) . '/denton-pharmacy-theme/inc/seo.php';

if ( 2 !== denton_pharmacy_sample_page_id() ) {
    fail_test( 'sample page ID was not resolved' );
}

$core_args = denton_pharmacy_exclude_sample_page_from_core_sitemap(
    array( 'post__not_in' => array( 7 ) ),
    'page'
);
if ( array( 7, 2 ) !== $core_args['post__not_in'] ) {
    fail_test( 'core sitemap exclusion did not append the sample page ID' );
}

$deduplicated_core_args = denton_pharmacy_exclude_sample_page_from_core_sitemap(
    array( 'post__not_in' => array( 7, 2 ) ),
    'page'
);
if ( array( 7, 2 ) !== $deduplicated_core_args['post__not_in'] ) {
    fail_test( 'core sitemap exclusion did not preserve unique existing IDs' );
}

$post_args = array( 'post__not_in' => array( 7 ) );
if ( $post_args !== denton_pharmacy_exclude_sample_page_from_core_sitemap( $post_args, 'post' ) ) {
    fail_test( 'core sitemap exclusion changed a non-page query' );
}

if ( array( 7, 2 ) !== denton_pharmacy_exclude_sample_page_from_yoast_sitemap( array( 7 ) ) ) {
    fail_test( 'Yoast sitemap exclusion did not append the sample page ID' );
}

if ( array( 7, 2 ) !== denton_pharmacy_exclude_sample_page_from_yoast_sitemap( array( 7, 2 ) ) ) {
    fail_test( 'Yoast sitemap exclusion did not preserve unique existing IDs' );
}

denton_pharmacy_redirect_sample_page();
if ( array() !== $redirect ) {
    fail_test( 'redirect ran outside the sample page' );
}

register_shutdown_function(
    static function (): void {
        global $redirect;
        if ( array( 'https://dentonpharmacy.co.uk/', 301, 'Denton Pharmacy' ) !== $redirect ) {
            fail_test( 'sample page redirect target, status or reason was incorrect' );
        }

        fwrite( STDOUT, "All Denton sample-page SEO tests passed.\n" );
    }
);

$is_sample_page = true;
denton_pharmacy_redirect_sample_page();
fail_test( 'sample page redirect did not terminate template rendering' );
