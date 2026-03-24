<?php
/**
 * Default page template
 *
 * Used when no specific page template is assigned.
 *
 * @package Bowland_Pharmacy
 */

get_header();
?>

  <section class="default-page-section" style="padding: 40px 0 60px;">
    <div class="section-container">
      <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

<?php get_footer(); ?>
