<?php
/**
 * Template Name: Home Page
 * @package Easy_Pharmacy
 */

get_header();

get_template_part('template-parts/section', 'hero');
get_template_part('template-parts/section', 'stats');
get_template_part('template-parts/section', 'treatments');
get_template_part('template-parts/section', 'pharmacist');
get_template_part('template-parts/section', 'how-it-works');
get_template_part('template-parts/section', 'quick-book');
get_template_part('template-parts/section', 'switching');
get_template_part('template-parts/section', 'revslider');
get_template_part('template-parts/section', 'safe-secure');
get_template_part('template-parts/section', 'health-hub');
get_template_part('template-parts/section', 'location');
get_template_part('template-parts/section', 'testimonials');
get_footer();
