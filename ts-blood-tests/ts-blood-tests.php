<?php
/**
 * Plugin Name: TS Blood Tests
 * Description: Custom post type + CSV importer + searchable shortcode for private blood test catalogues.
 * Version: 1.0.0
 * Author: Tamandua Software
 * Author URI: https://tamandua-software.com
 * Text Domain: ts-blood-tests
 *
 * @package TS_Blood_Tests
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'TSBT_VERSION', '1.0.0' );
define( 'TSBT_DIR', plugin_dir_path( __FILE__ ) );
define( 'TSBT_URL', plugin_dir_url( __FILE__ ) );

require_once TSBT_DIR . 'inc/post-type.php';
require_once TSBT_DIR . 'inc/acf-fields.php';
require_once TSBT_DIR . 'inc/csv-importer.php';
require_once TSBT_DIR . 'inc/shortcode.php';

register_activation_hook( __FILE__, function () {
    tsbt_register_post_type();
    flush_rewrite_rules();
} );

register_deactivation_hook( __FILE__, function () {
    flush_rewrite_rules();
} );
