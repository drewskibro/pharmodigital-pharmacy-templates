<?php
/**
 * Template Name: Health Hub
 * @package Denton_Pharmacy
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
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'hh_badge_text', 'HEALTH HUB' ) ); ?></span>
      </div>

      <h1 class="healthhub-hero-title">
        <?php echo esc_html( dp_field( 'hh_hero_title_line1', 'Expert Insights on' ) ); ?><br />
        <span class="healthhub-hero-title-accent"><?php echo esc_html( dp_field( 'hh_hero_title_line2', 'Weight Loss, Travel Health' ) ); ?></span><br />
        <span class="gradient-text"><?php echo esc_html( dp_field( 'hh_hero_title_line3', 'Living Your Healthiest Life.' ) ); ?></span>
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

<!-- ============================================
     SOCIAL PROOF / GOOGLE RATING
     ============================================ -->
<section class="healthhub-social-proof-section">
  <div class="section-container">
    <div class="healthhub-social-proof-wrapper">

      <!-- Left: Google Rating Badge (reuses globals.css .rating-badge) -->
      <div class="rating-badge">
        <div class="rating-header">
          <div class="rating-label">
            <div class="google-icon-wrapper">
              <i class="fab fa-google"></i>
            </div>
            <span>Google Rating</span>
          </div>
          <div class="badge-success">
            <i class="fas fa-check-circle"></i>
            <span>Excellent</span>
          </div>
        </div>
        <div class="rating-score">
          <span class="score-number"><?php echo esc_html( dp_field( 'hh_social_rating_score', dp_option( 'google_rating', '4.7' ) ) ); ?></span>
          <div class="rating-score-detail">
            <div class="star-row">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="rating-count"><?php echo esc_html( dp_field( 'hh_social_rating_count', 'Based on 300+ reviews' ) ); ?></span>
          </div>
        </div>
        <div class="rating-footer">
          <div class="rating-location">
            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo esc_html( dp_field( 'hh_social_rating_location', dp_option( 'pharmacy_town', 'Denton, UK' ) ) ); ?></span>
          </div>
          <a href="<?php echo esc_url( dp_option( 'google_review_url', '#reviews' ) ); ?>" class="rating-link" target="_blank" rel="noopener noreferrer">View Reviews</a>
        </div>
      </div>

      <!-- Right: Text Content -->
      <div class="healthhub-social-proof-content">
        <p class="healthhub-social-proof-eyebrow"><?php echo esc_html( dp_field( 'hh_social_eyebrow', 'TRUSTED BY DENTON' ) ); ?></p>
        <h2 class="healthhub-social-proof-headline"><?php echo esc_html( dp_field( 'hh_social_headline', 'Join hundreds of Denton patients who\'ve already made the switch' ) ); ?></h2>
        <p class="healthhub-social-proof-subtext"><?php echo esc_html( dp_field( 'hh_social_subtext', 'Expert health advice backed by real clinical experience and outstanding patient reviews' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     CATEGORY CARDS — "What brings you here today?"
     ============================================ -->
<?php
$hh_cats_title = dp_field( 'hh_cats_title', 'What brings you here today?' );
$hh_cats_desc  = dp_field( 'hh_cats_description', 'Start with the health topic that matters most to you right now' );

$default_cats = array(
    array(
        'title'       => 'Weight Loss Journeys',
        'label'       => 'WEIGHT LOSS',
        'description' => 'GLP-1 medications, side effects management, nutrition guides, and real patient experiences',
        'url'         => add_query_arg( 'category', 'weight-loss', get_permalink() ),
        'image_id'    => 0,
    ),
    array(
        'title'       => 'Travel Health Guides',
        'label'       => 'TRAVEL HEALTH',
        'description' => 'Destination-specific vaccines, malaria prevention, yellow fever requirements, and travel safety',
        'url'         => add_query_arg( 'category', 'travel-health', get_permalink() ),
        'image_id'    => 0,
    ),
    array(
        'title'       => 'NHS & Wellness',
        'label'       => 'WELLNESS',
        'description' => 'Pharmacy First, prescription services, seasonal health, and staying healthy year-round',
        'url'         => add_query_arg( 'category', 'nhs-services', get_permalink() ),
        'image_id'    => 0,
    ),
);

$cats = array();
if ( function_exists( 'have_rows' ) && have_rows( 'hh_category_cards' ) ) {
    while ( have_rows( 'hh_category_cards' ) ) {
        the_row();
        $cats[] = array(
            'title'       => get_sub_field( 'title' ) ?: '',
            'label'       => get_sub_field( 'label' ) ?: '',
            'description' => get_sub_field( 'description' ) ?: '',
            'url'         => get_sub_field( 'url' ) ?: '#',
            'image_id'    => get_sub_field( 'image' ),
        );
    }
}
if ( empty( $cats ) ) {
    $cats = $default_cats;
}
?>

<section class="healthhub-cats-section">
  <div class="section-container">
    <div class="healthhub-cats-header">
      <h2 class="healthhub-cats-title"><?php echo esc_html( $hh_cats_title ); ?></h2>
      <p class="healthhub-cats-description"><?php echo esc_html( $hh_cats_desc ); ?></p>
    </div>

    <div class="healthhub-cats-grid">
      <?php foreach ( $cats as $cat ) :
        $img_url = ! empty( $cat['image_id'] ) ? wp_get_attachment_image_url( $cat['image_id'], 'large' ) : '';
      ?>
        <a href="<?php echo esc_url( $cat['url'] ); ?>" class="healthhub-cat-card">
          <div class="healthhub-cat-card-inner">
            <?php if ( $img_url ) : ?>
              <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $cat['title'] ); ?>" class="healthhub-cat-card-image" />
            <?php endif; ?>
            <div class="healthhub-cat-card-overlay"></div>
            <div class="healthhub-cat-card-content">
              <?php if ( ! empty( $cat['label'] ) ) : ?>
                <span class="healthhub-cat-card-label"><?php echo esc_html( $cat['label'] ); ?></span>
              <?php endif; ?>
              <h3 class="healthhub-cat-card-title"><?php echo esc_html( $cat['title'] ); ?></h3>
              <p class="healthhub-cat-card-desc"><?php echo esc_html( $cat['description'] ); ?></p>
              <span class="healthhub-cat-card-link">
                Explore <i class="fas fa-arrow-right"></i>
              </span>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
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
        $card_index = 0;
        while ( $grid_query->have_posts() ) :
          $grid_query->the_post();
          $card_index++;
          get_template_part( 'template-parts/article-card' );

          // Insert booking CTA card after position 3 on first page, then every 6
          if ( ( $card_index === 3 && $paged <= 1 ) || ( $card_index > 3 && ( $card_index - 3 ) % 6 === 0 ) ) :
        ?>
          <div class="healthhub-cta-card">
            <div class="healthhub-cta-card-inner">
              <div class="healthhub-cta-card-icon">
                <i class="fas fa-calendar-check"></i>
              </div>
              <h3 class="healthhub-cta-card-title"><?php echo esc_html( dp_field( 'hh_grid_cta_title', 'Ready to Book Your Consultation?' ) ); ?></h3>
              <p class="healthhub-cta-card-text"><?php echo esc_html( dp_field( 'hh_grid_cta_text', 'Same-day appointments available · No GP referral needed' ) ); ?></p>
              <a href="<?php echo esc_url( dp_field( 'hh_grid_cta_url', dp_booking_url() ) ); ?>" class="healthhub-cta-card-button">
                <?php echo esc_html( dp_field( 'hh_grid_cta_button', 'Check Availability' ) ); ?>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        <?php endif; ?>
        <?php endwhile; ?>
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
      <h2 class="healthhub-cta-title"><?php echo esc_html( dp_field( 'hh_cta_title', 'Ready to Transform Your Health?' ) ); ?></h2>
      <p class="healthhub-cta-description"><?php echo esc_html( dp_field( 'hh_cta_description', 'Expert advice from pharmacists you can trust' ) ); ?></p>
      <a href="<?php echo esc_url( dp_field( 'hh_cta_url', dp_booking_url() ) ); ?>" class="cta-button primary-cta healthhub-cta-button">
        <?php echo esc_html( dp_field( 'hh_cta_text', 'Explore Our Services' ) ); ?>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<?php
get_footer();
