<?php
/**
 * Template Name: Health Hub
 * @package Easy_Pharmacy
 */

get_header();

// Get current category filter from URL
$current_cat = isset( $_GET['category'] ) ? sanitize_text_field( $_GET['category'] ) : '';
$paged       = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
?>

<!-- ============================================
     HERO SECTION
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
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'hh_badge_text', 'HEALTH HUB' ) ); ?></span>
      </div>

      <h1 class="healthhub-hero-title">
        <?php
        $title_text = ep_field( 'hh_hero_title', 'Expert insights on weight loss, travel health, and <span class="gradient-text">living your healthiest life</span>' );
        echo wp_kses( $title_text, array( 'span' => array( 'class' => array() ) ) );
        ?>
      </h1>

      <!-- Category Filter Pills -->
      <div class="healthhub-filter-container">
        <div class="healthhub-filter-pills">
          <a href="<?php echo esc_url( get_permalink() ); ?>" class="healthhub-filter-pill <?php echo empty( $current_cat ) ? 'active' : ''; ?>">All Articles</a>
          <?php
          $categories = get_categories( array(
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => true,
          ) );
          foreach ( $categories as $category ) :
          ?>
            <a href="<?php echo esc_url( add_query_arg( 'category', $category->slug, get_permalink() ) ); ?>" class="healthhub-filter-pill <?php echo ( $current_cat === $category->slug ) ? 'active' : ''; ?>">
              <?php echo esc_html( $category->name ); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// ============================================
// FEATURED ARTICLE (only on page 1, no category filter)
// ============================================
if ( $paged <= 1 && empty( $current_cat ) ) :

  $sticky = get_option( 'sticky_posts' );
  $featured_args = array(
    'posts_per_page'      => 1,
    'ignore_sticky_posts' => 0,
    'orderby'             => 'date',
    'order'               => 'DESC',
  );

  if ( ! empty( $sticky ) ) {
    $featured_args['post__in'] = $sticky;
  }

  $featured_query = new WP_Query( $featured_args );

  if ( $featured_query->have_posts() ) :
    $featured_query->the_post();
    $featured_id = get_the_ID();
?>
<!-- ============================================
     FEATURED ARTICLE
     ============================================ -->
<section class="healthhub-featured-section">
  <div class="section-container">
    <?php get_template_part( 'template-parts/featured-article-card' ); ?>
  </div>
</section>
<?php
    wp_reset_postdata();
  endif;
endif;
?>

<!-- ============================================
     ARTICLES GRID
     ============================================ -->
<section class="healthhub-grid-section">
  <div class="section-container">
    <?php
    $grid_args = array(
      'posts_per_page' => 9,
      'paged'          => $paged,
      'orderby'        => 'date',
      'order'          => 'DESC',
    );

    // Filter by category if selected
    if ( ! empty( $current_cat ) ) {
      $grid_args['category_name'] = $current_cat;
    }

    // Exclude featured post from grid (only on page 1, no filter)
    if ( $paged <= 1 && empty( $current_cat ) && isset( $featured_id ) ) {
      $grid_args['post__not_in'] = array( $featured_id );
    }

    $grid_query = new WP_Query( $grid_args );

    if ( $grid_query->have_posts() ) :
    ?>
      <div class="healthhub-article-grid">
        <?php
        while ( $grid_query->have_posts() ) :
          $grid_query->the_post();
          get_template_part( 'template-parts/article-card' );
        endwhile;
        ?>
      </div>

      <!-- Pagination -->
      <?php if ( $grid_query->max_num_pages > 1 ) : ?>
        <div class="healthhub-pagination">
          <?php
          $pagination_args = array(
            'total'     => $grid_query->max_num_pages,
            'current'   => $paged,
            'prev_text' => '<i class="fas fa-chevron-left"></i>',
            'next_text' => '<i class="fas fa-chevron-right"></i>',
          );

          // Preserve category filter in pagination links
          if ( ! empty( $current_cat ) ) {
            $pagination_args['add_args'] = array( 'category' => $current_cat );
          }

          echo paginate_links( $pagination_args );
          ?>
        </div>
      <?php endif; ?>

    <?php
      wp_reset_postdata();
    else :
    ?>
      <div class="healthhub-no-posts">
        <div class="healthhub-no-posts-icon">
          <i class="fas fa-newspaper"></i>
        </div>
        <h2 class="healthhub-no-posts-title">No articles found</h2>
        <p class="healthhub-no-posts-text">
          <?php if ( ! empty( $current_cat ) ) : ?>
            There are no articles in this category yet. Check back soon for new health insights.
          <?php else : ?>
            Check back soon for expert health advice from our pharmacy team.
          <?php endif; ?>
        </p>
        <?php if ( ! empty( $current_cat ) ) : ?>
          <a href="<?php echo esc_url( get_permalink() ); ?>" class="healthhub-no-posts-link">
            View all articles <i class="fas fa-arrow-right"></i>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- ============================================
     CTA SECTION
     ============================================ -->
<section class="healthhub-cta-section">
  <div class="healthhub-cta-dots"></div>
  <div class="section-container">
    <div class="healthhub-cta-content">
      <h2 class="healthhub-cta-title"><?php echo esc_html( ep_field( 'hh_cta_title', 'Ready to Transform Your Health?' ) ); ?></h2>
      <p class="healthhub-cta-description"><?php echo esc_html( ep_field( 'hh_cta_description', 'Expert advice from pharmacists you can trust' ) ); ?></p>
      <a href="<?php echo esc_url( ep_field( 'hh_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta healthhub-cta-button">
        <?php echo esc_html( ep_field( 'hh_cta_text', 'Explore Our Services' ) ); ?>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<?php
get_footer();
