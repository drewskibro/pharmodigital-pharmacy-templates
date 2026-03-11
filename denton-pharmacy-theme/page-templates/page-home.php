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

  <?php // 6. How It Works ?>
  <?php get_template_part( 'template-parts/section', 'how-it-works' ); ?>

  <?php // 7. Switching Provider ?>
  <?php get_template_part( 'template-parts/section', 'switching' ); ?>

  <?php // 8. RevSlider / Travel Banner ?>
  <?php get_template_part( 'template-parts/section', 'revslider' ); ?>

  <?php // 9. Safe & Secure ?>
  <?php get_template_part( 'template-parts/section', 'safe-secure' ); ?>

  <?php // 10. Health Hub ?>
  <?php get_template_part( 'template-parts/section', 'health-hub' ); ?>

  <?php // 11. Location ?>
  <?php get_template_part( 'template-parts/section', 'location' ); ?>

  <?php // 12. Testimonials ?>
  <?php get_template_part( 'template-parts/section', 'testimonials' ); ?>

  <?php // 13. Sticky CTA ?>
  <?php get_template_part( 'template-parts/section', 'sticky-cta' ); ?>

<?php get_footer(); ?>
