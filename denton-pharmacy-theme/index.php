<?php
/**
 * The main template file
 *
 * Falls back to blog listing when no other template matches.
 *
 * @package Denton_Pharmacy
 */

get_header();

// Enqueue blog styles if not already loaded.
wp_enqueue_style( 'denton-blog', DENTON_PHARMACY_URI . '/assets/css/blog.css', array( 'denton-globals' ), DENTON_PHARMACY_VERSION );
?>

  <!-- ============================================
       BLOG LISTING FALLBACK
       ============================================ -->
  <section class="healthhub-hero-section">
    <div class="healthhub-hero-bg-blob-1"></div>
    <div class="healthhub-hero-bg-blob-2"></div>
    <div class="healthhub-hero-dots"></div>

    <div class="section-container">
      <div class="healthhub-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text">HEALTH HUB</span>
        </div>

        <h1 class="healthhub-hero-title">
          Expert insights on weight loss, travel health, and <span class="gradient-text">living your healthiest life</span>
        </h1>
      </div>
    </div>
  </section>

  <section class="healthhub-grid-section">
    <div class="section-container">
      <?php if ( have_posts() ) : ?>
      <div class="healthhub-article-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/article', 'card' ); ?>
        <?php endwhile; ?>
      </div>

      <div class="healthhub-pagination">
        <?php
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => '<i class="fas fa-chevron-left"></i> Previous',
            'next_text' => 'Next <i class="fas fa-chevron-right"></i>',
        ) );
        ?>
      </div>
      <?php else : ?>
        <p>No articles found.</p>
      <?php endif; ?>
    </div>
  </section>

<?php get_footer(); ?>
