<?php
/**
 * Single Post Template (Health Hub Article)
 *
 * @package Easy_Pharmacy
 */

get_header();

// Enqueue blog styles
wp_enqueue_style( 'easy-pharmacy-blog', EASY_PHARMACY_URI . '/assets/css/blog.css', array( 'easy-pharmacy-globals' ), EASY_PHARMACY_VERSION );

while ( have_posts() ) : the_post();

$reading_time  = ep_field( 'reading_time', '5' );
$author_name   = ep_field( 'article_author', '' );
$categories    = get_the_category();
$category_name = ! empty( $categories ) ? $categories[0]->name : 'Health';
$featured_img  = get_the_post_thumbnail_url( get_the_ID(), 'health-hub-featured' );
?>

  <!-- ============================================
       ARTICLE HERO
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
          <span class="section-badge-text"><?php echo esc_html( $category_name ); ?></span>
        </div>

        <h1 class="healthhub-hero-title"><?php the_title(); ?></h1>

        <div class="healthhub-author-row" style="justify-content: center; margin-top: 1.5rem;">
          <div class="healthhub-author-info">
            <?php
            $pharmacist_image = ep_option( 'pharmacist_image' );
            if ( $pharmacist_image ) :
                $img_url = is_array( $pharmacist_image ) ? $pharmacist_image['url'] : $pharmacist_image;
            ?>
              <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="healthhub-author-avatar" />
            <?php endif; ?>
            <span class="healthhub-author-name">
              <?php echo esc_html( $author_name ?: get_the_author() ); ?>
            </span>
          </div>
          <span class="healthhub-reading-time">
            <i class="far fa-clock"></i> <?php echo esc_html( $reading_time ); ?> min read
          </span>
          <span class="healthhub-publish-date"><?php echo get_the_date( 'M j, Y' ); ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       ARTICLE CONTENT
       ============================================ -->
  <section class="healthhub-grid-section">
    <div class="section-container">
      <?php if ( $featured_img ) : ?>
      <div class="healthhub-featured-image-wrapper" style="margin-bottom: 2rem; border-radius: 1rem; overflow: hidden;">
        <img src="<?php echo esc_url( $featured_img ); ?>" alt="<?php the_title_attribute(); ?>" class="healthhub-featured-image" style="width: 100%; height: auto;" />
      </div>
      <?php endif; ?>

      <div class="article-content" style="max-width: 800px; margin: 0 auto;">
        <?php the_content(); ?>
      </div>

      <!-- Post Navigation -->
      <div class="article-navigation" style="max-width: 800px; margin: 3rem auto 0; display: flex; justify-content: space-between; gap: 1rem;">
        <?php
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        ?>
        <?php if ( $prev_post ) : ?>
          <a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-arrow-left"></i> Previous Article
          </a>
        <?php endif; ?>
        <?php if ( $next_post ) : ?>
          <a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="cta-button secondary-cta" style="margin-left: auto;">
            Next Article <i class="fas fa-arrow-right"></i>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ============================================
       CTA SECTION
       ============================================ -->
  <section class="healthhub-cta-section">
    <div class="healthhub-cta-dots"></div>
    <div class="section-container">
      <div class="healthhub-cta-content">
        <h2 class="healthhub-cta-title">Ready to Transform Your Health?</h2>
        <p class="healthhub-cta-description">Expert advice from pharmacists you can trust</p>
        <a href="<?php echo esc_url( ep_booking_url() ); ?>" class="cta-button primary-cta healthhub-cta-button">
          Explore Our Services
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

<?php endwhile; ?>

<?php get_footer(); ?>
