<?php
/**
 * ACF Fields for Blood Tests CPT.
 *
 * @package TS_Blood_Tests
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'acf/init', function () {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key'      => 'group_tsbt_fields',
        'title'    => 'Blood Test Details',
        'fields'   => array(
            array(
                'key'          => 'field_tsbt_code',
                'label'        => 'Code',
                'name'         => 'tsbt_code',
                'type'         => 'text',
                'instructions' => 'Short test code (e.g. 5HI, ARA).',
                'wrapper'      => array( 'width' => 25 ),
            ),
            array(
                'key'          => 'field_tsbt_wholesale',
                'label'        => 'Wholesale Price (£)',
                'name'         => 'tsbt_wholesale',
                'type'         => 'text',
                'instructions' => 'Lab wholesale price, e.g. 164.05',
                'wrapper'      => array( 'width' => 25 ),
            ),
            array(
                'key'          => 'field_tsbt_retail',
                'label'        => 'Retail Price (£)',
                'name'         => 'tsbt_retail',
                'type'         => 'text',
                'instructions' => 'Public-facing price, e.g. 275.00',
                'wrapper'      => array( 'width' => 25 ),
            ),
            array(
                'key'          => 'field_tsbt_turnaround',
                'label'        => 'Turnaround (TAT)',
                'name'         => 'tsbt_turnaround',
                'type'         => 'text',
                'instructions' => 'e.g. 6 days, 2 weeks',
                'wrapper'      => array( 'width' => 25 ),
            ),
            array(
                'key'          => 'field_tsbt_tests',
                'label'        => 'Tests Included',
                'name'         => 'tsbt_tests',
                'type'         => 'textarea',
                'rows'         => 3,
                'instructions' => 'Individual tests covered by this panel.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'blood_test',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'show_in_rest'          => true,
    ) );
} );
