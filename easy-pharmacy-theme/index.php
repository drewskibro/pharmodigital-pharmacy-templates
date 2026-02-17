<?php
/**
 * The main template file
 *
 * Falls back to blog listing when no other template matches.
 *
 * @package Easy_Pharmacy
 */

get_header();

// Enqueue blog styles if not already loaded
wp_enqueue_style( 'easy-pharmacy-blog', EASY_PHARMACY_URI . '/assets/css/blog.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );
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
          <span class="pulse-dot">
            <span></span>
            <span></span>
          </span>
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
