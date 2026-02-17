<?php
/**
 * Template Name: Custom Page Builder
 * @package Easy_Pharmacy
 */

get_header();

if (have_rows('page_sections')) :
    while (have_rows('page_sections')) : the_row();
        $layout = get_row_layout();
        get_template_part('template-parts/section', $layout);
    endwhile;
endif;

get_footer();
