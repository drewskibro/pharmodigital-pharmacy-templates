<?php
/**
 * ACF Options Pages Configuration
 *
 * Registers the main Pharmacy Settings options page and its sub-pages
 * for the Denton Pharmacy WordPress theme.
 *
 * @package DentonPharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register ACF Options Pages.
 */
function dp_register_options_pages() {

    if ( ! function_exists( 'acf_add_options_page' ) ) {
        return;
    }

    // Main options page.
    acf_add_options_page( array(
        'page_title'  => 'Pharmacy Settings',
        'menu_title'  => 'Pharmacy Settings',
        'menu_slug'   => 'pharmacy-settings',
        'capability'  => 'edit_posts',
        'redirect'    => true,
        'icon_url'    => 'dashicons-store',
        'position'    => 30,
    ) );

    // Sub page: Branding.
    acf_add_options_sub_page( array(
        'page_title'  => 'Branding',
        'menu_title'  => 'Branding',
        'menu_slug'   => 'branding',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );

    // Sub page: Contact & Location.
    acf_add_options_sub_page( array(
        'page_title'  => 'Contact & Location',
        'menu_title'  => 'Contact & Location',
        'menu_slug'   => 'contact-location',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );

    // Sub page: Registration & Compliance.
    acf_add_options_sub_page( array(
        'page_title'  => 'Registration & Compliance',
        'menu_title'  => 'Registration & Compliance',
        'menu_slug'   => 'registration-compliance',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );

    // Sub page: Social Media.
    acf_add_options_sub_page( array(
        'page_title'  => 'Social Media',
        'menu_title'  => 'Social Media',
        'menu_slug'   => 'social-media',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );

    // Sub page: Navigation.
    acf_add_options_sub_page( array(
        'page_title'  => 'Navigation',
        'menu_title'  => 'Navigation',
        'menu_slug'   => 'navigation',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );
}
add_action( 'acf/init', 'dp_register_options_pages' );
