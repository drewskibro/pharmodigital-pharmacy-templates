<?php
/**
 * Stop logged-out visitors listing the site's user accounts.
 * WordPress hands out usernames at /wp-json/wp/v2/users, via ?author=N and
 * in the users sitemap. Usernames are half of a login (AT Health security
 * check, 22 Oct 2026). Logged-in users keep the REST route: the editor needs it.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
add_filter( 'rest_endpoints', 'dp_hide_rest_users' );
add_action( 'template_redirect', 'dp_block_author_enumeration', 1 );
add_filter( 'wp_sitemaps_add_provider', 'dp_remove_users_sitemap', 10, 2 );
function dp_hide_rest_users( $endpoints ) {
    if ( is_user_logged_in() ) { return $endpoints; }
    foreach ( array_keys( $endpoints ) as $route ) {
        if ( 0 === strpos( $route, '/wp/v2/users' ) ) { unset( $endpoints[ $route ] ); }
    }
    return $endpoints;
}
function dp_block_author_enumeration() {
    if ( isset( $_GET['author'] ) || is_author() ) { wp_safe_redirect( home_url( '/' ), 301 ); exit; }
}
function dp_remove_users_sitemap( $provider, $name ) {
    return ( 'users' === $name ) ? false : $provider;
}
