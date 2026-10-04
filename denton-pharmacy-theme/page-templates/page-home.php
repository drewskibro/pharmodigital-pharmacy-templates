<?php
/**
 * Template Name: Home Page
 *
 * Loads all 13 home page sections in order via get_template_part().
 *
 * @package Denton_Pharmacy
 */

get_header();
?>

  <?php // 1. Hero ?>
  <?php get_template_part( 'template-parts/section', 'hero' ); ?>

  <?php // 2. Stats Bar ?>
  <?php get_template_part( 'template-parts/section', 'stats' ); ?>

  <?php // 3. NHS Services ?>
  <?php get_template_part( 'template-parts/section', 'nhs-services' ); ?>

  <?php // 4. Treatments Grid ?>
  <?php get_template_part( 'template-parts/section', 'treatments' ); ?>

  <?php // 5. Pharmacist ?>
  <?php get_template_part( 'template-parts/section', 'pharmacist' ); ?>

  <?php // How It Works and Safe & Secure were removed from the homepage (Oct 2026): generic ?>
  <?php // copy that made the page longer without telling patients anything new. Templates kept. ?>

  <?php // 7. Switching Provider ?>
  <?php get_template_part( 'template-parts/section', 'switching' ); ?>

  <?php // 8. RevSlider / Travel Banner ?>
  <?php get_template_part( 'template-parts/section', 'revslider' ); ?>

  <?php // 10. Health Hub ?>
  <?php get_template_part( 'template-parts/section', 'health-hub' ); ?>

  <?php // 11. Testimonials ?>
  <?php get_template_part( 'template-parts/section', 'testimonials' ); ?>

  <?php // 12. Location ?>
  <?php get_template_part( 'template-parts/section', 'location' ); ?>

  <?php // 13. Sticky CTA ?>
  <?php get_template_part( 'template-parts/section', 'sticky-cta' ); ?>

<?php get_footer(); ?>
