<?php
/**
 * Custom Post Type: blood_test
 *
 * @package TS_Blood_Tests
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function tsbt_register_post_type() {
    register_post_type( 'blood_test', array(
        'labels' => array(
            'name'               => 'Blood Tests',
            'singular_name'      => 'Blood Test',
            'add_new_item'       => 'Add New Blood Test',
            'edit_item'          => 'Edit Blood Test',
            'new_item'           => 'New Blood Test',
            'view_item'          => 'View Blood Test',
            'search_items'       => 'Search Blood Tests',
            'not_found'          => 'No blood tests found',
            'not_found_in_trash' => 'No blood tests in trash',
            'menu_name'          => 'Blood Tests',
        ),
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'menu_position'       => 25,
        'menu_icon'           => 'dashicons-heart',
        'supports'            => array( 'title' ),
        'has_archive'         => false,
        'rewrite'             => false,
        'capability_type'     => 'post',
    ) );
}
add_action( 'init', 'tsbt_register_post_type' );
