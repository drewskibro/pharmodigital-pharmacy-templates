<?php
/**
 * Keep the laboratory cost price of blood tests private.
 *
 * The ts-blood-tests plugin stores each test's cost in the ACF field
 * tsbt_wholesale and returns it as "wholesale" from its public search
 * endpoint (/wp-json/ts-blood-tests/v1/search). The wp/v2/blood_test
 * endpoint also exposes it under "acf". Visitors only ever need the retail
 * price, so the cost is removed from both responses for anyone who cannot
 * edit posts. Logged-in editors still see and save it as before.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Remove every "wholesale" and "tsbt_wholesale" key from a response payload.
 */
function denton_pharmacy_strip_blood_test_cost( $data ) {
    if ( ! is_array( $data ) ) {
        return $data;
    }
    unset( $data['wholesale'], $data['tsbt_wholesale'] );
    foreach ( $data as $key => $value ) {
        if ( is_array( $value ) ) {
            $data[ $key ] = denton_pharmacy_strip_blood_test_cost( $value );
        }
    }
    return $data;
}

/**
 * Filter public REST responses for blood tests.
 */
function denton_pharmacy_hide_blood_test_cost( $response, $server, $request ) {
    if ( current_user_can( 'edit_posts' ) || ! ( $response instanceof WP_REST_Response ) ) {
        return $response;
    }
    $route = (string) $request->get_route();
    if ( 0 !== strpos( $route, '/ts-blood-tests/' ) && 0 !== strpos( $route, '/wp/v2/blood_test' ) ) {
        return $response;
    }
    $response->set_data( denton_pharmacy_strip_blood_test_cost( $response->get_data() ) );
    return $response;
}
add_filter( 'rest_post_dispatch', 'denton_pharmacy_hide_blood_test_cost', 10, 3 );
