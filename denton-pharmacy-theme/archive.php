<?php
/**
 * Archive Template (Category, Tag, Date archives)
 *
 * @package Denton_Pharmacy
 */

get_header();
?>

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
          <?php the_archive_title(); ?>
        </h1>

        <?php if ( category_description() ) : ?>
          <p class="healthhub-hero-description"><?php echo category_description(); ?></p>
        <?php endif; ?>

        <div class="healthhub-filter-container">
          <div class="healthhub-filter-pills">
            <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="healthhub-filter-btn">All Articles</a>
            <?php
            $categories = get_categories( array( 'hide_empty' => true ) );
            foreach ( $categories as $cat ) :
                $is_active = ( is_category( $cat->term_id ) ) ? ' active' : '';
            ?>
              <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="healthhub-filter-btn<?php echo $is_active; ?>">
                <?php echo esc_html( $cat->name ); ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
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
        <p>No articles found in this category.</p>
      <?php endif; ?>
    </div>
  </section>

<?php get_footer(); ?>
