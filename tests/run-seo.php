<?php

declare(strict_types=1);

define( 'ABSPATH', dirname( __DIR__ ) . '/' );

function add_filter() {
    // WordPress hook registration is outside this isolated encoding test.
}

function add_action() {
    // WordPress hook registration is outside this isolated encoding test.
}

function wp_json_encode( $value, $flags = 0, $depth = 512 ) {
    return json_encode( $value, $flags, $depth );
}

require_once dirname( __DIR__ ) . '/bowland-pharmacy-theme/inc/seo.php';
require_once dirname( __DIR__ ) . '/denton-pharmacy-theme/inc/seo.php';

function fail_test( string $message ): void {
    fwrite( STDERR, 'FAIL: ' . $message . "\n" );
    exit( 1 );
}

function assert_schema_encoding_safe( $encoded, string $malicious_value, string $site ): void {
    if ( ! is_string( $encoded ) ) {
        fail_test( $site . ' schema encoding returned a non-string value' );
    }

    if ( false !== stripos( $encoded, '</script' ) ) {
        fail_test( $site . ' schema encoding left a script-closing sequence intact' );
    }

    foreach ( array( '\u003C', '\u003E', '\u0026', '\u0022', '\u0027' ) as $escape ) {
        if ( false === strpos( $encoded, $escape ) ) {
            fail_test( $site . ' schema encoding omitted expected escape ' . $escape );
        }
    }

    if ( false !== strpos( $encoded, 'https://schema.org' ) ) {
        fail_test( $site . ' schema encoding unexpectedly left URL slashes unescaped' );
    }

    $decoded = json_decode( $encoded, true );
    if ( ! is_array( $decoded ) || $malicious_value !== ( $decoded['name'] ?? null ) ) {
        fail_test( $site . ' schema encoding did not preserve the original value' );
    }
}

$malicious_value = '</script><script>alert("x" & \'y\')</script>';
$schema = array(
    '@context' => 'https://schema.org',
    'name'     => $malicious_value,
);

assert_schema_encoding_safe( bowland_pharmacy_encode_schema( $schema ), $malicious_value, 'Bowland' );
assert_schema_encoding_safe( denton_pharmacy_encode_schema( $schema ), $malicious_value, 'Denton' );

foreach ( array( 'bowland-pharmacy-theme', 'denton-pharmacy-theme' ) as $theme ) {
    $options_file = dirname( __DIR__ ) . '/' . $theme . '/inc/acf-options.php';
    $options_code = file_get_contents( $options_file );
    if ( ! is_string( $options_code ) || false !== strpos( $options_code, "'capability'  => 'edit_posts'" ) ) {
        fail_test( $theme . ' still grants its ACF options pages to edit_posts users' );
    }
    if ( 7 !== substr_count( $options_code, "'capability'  => 'manage_options'" ) ) {
        fail_test( $theme . ' does not protect all seven ACF options pages with manage_options' );
    }
}

fwrite( STDOUT, "All pharmacy SEO encoding tests passed.\n" );
