<?php
/**
 * Template Name: Health Hub
 * @package Easy_Pharmacy
 */

get_header();

// Get current category filter
$current_cat = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>

<!-- Hero Section -->
<section class="healthhub-hero-section">
  <div class="healthhub-hero-bg"></div>
  <div class="healthhub-hero-dots"></div>

  <div class="section-container">
    <div class="healthhub-hero-content">
      <div class="section-badge">
        <span class="pulse-dot">
          <span></span>
          <span></span>
        </span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('hh_badge_text', 'HEALTH HUB')); ?></span>
      </div>

      <h1 class="healthhub-hero-title">
        <?php echo esc_html(ep_field('hh_hero_title', 'Your Health Hub')); ?>
      </h1>

      <p class="healthhub-hero-description">
        <?php echo esc_html(ep_field('hh_hero_description', 'Expert health advice, tips, and insights from our team of pharmacists.')); ?>
      </p>

      <!-- Category Filter Pills -->
      <div class="healthhub-filter-pills">
        <a href="<?php echo esc_url(get_permalink()); ?>" class="healthhub-filter-pill <?php echo empty($current_cat) ? 'active' : ''; ?>">All</a>
        <?php
        $categories = get_categories(array(
          'orderby' => 'name',
          'order'   => 'ASC',
          'hide_empty' => true,
        ));
        foreach ($categories as $category) :
        ?>
          <a href="<?php echo esc_url(add_query_arg('category', $category->slug, get_permalink())); ?>" class="healthhub-filter-pill <?php echo ($current_cat === $category->slug) ? 'active' : ''; ?>">
            <?php echo esc_html($category->name); ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php
// Featured Article (most recent or sticky)
$sticky = get_option('sticky_posts');
$featured_args = array(
  'posts_per_page' => 1,
  'post__in'       => $sticky,
  'ignore_sticky_posts' => 0,
);

if (empty($sticky)) {
  $featured_args = array(
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
  );
}

$featured_query = new WP_Query($featured_args);

if ($featured_query->have_posts()) :
  $featured_query->the_post();
  $featured_id = get_the_ID();
  $reading_time = get_field('reading_time', $featured_id);
?>
<!-- Featured Article Section -->
<section class="healthhub-featured-section">
  <div class="section-container">
    <div class="healthhub-featured-card">
      <?php if (has_post_thumbnail()) : ?>
        <div class="healthhub-featured-image">
          <?php the_post_thumbnail('large', array('class' => 'healthhub-featured-img')); ?>
          <div class="healthhub-featured-overlay"></div>
        </div>
      <?php endif; ?>
      <div class="healthhub-featured-content">
        <?php
        $cats = get_the_category();
        if (!empty($cats)) :
        ?>
          <span class="healthhub-category-badge"><?php echo esc_html($cats[0]->name); ?></span>
        <?php endif; ?>
        <h2 class="healthhub-featured-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p class="healthhub-featured-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 30)); ?></p>
        <div class="healthhub-featured-meta">
          <?php if ($reading_time) : ?>
            <span class="healthhub-reading-time"><i class="fas fa-clock"></i> <?php echo esc_html($reading_time); ?> min read</span>
          <?php endif; ?>
          <span class="healthhub-date"><i class="fas fa-calendar"></i> <?php echo get_the_date(); ?></span>
        </div>
        <a href="<?php the_permalink(); ?>" class="cta-button primary-cta healthhub-read-more">
          Read Article <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<?php
  wp_reset_postdata();
endif;
?>

<!-- Article Grid Section -->
<section class="healthhub-grid-section">
  <div class="section-container">

    <?php
    $grid_args = array(
      'posts_per_page' => 9,
      'paged'          => $paged,
      'orderby'        => 'date',
      'order'          => 'DESC',
    );

    if (!empty($current_cat)) {
      $grid_args['category_name'] = $current_cat;
    }

    // Exclude featured post
    if (isset($featured_id)) {
      $grid_args['post__not_in'] = array($featured_id);
    }

    $grid_query = new WP_Query($grid_args);

    if ($grid_query->have_posts()) :
    ?>
      <div class="healthhub-article-grid">
        <?php while ($grid_query->have_posts()) : $grid_query->the_post();
          $reading_time = get_field('reading_time');
        ?>
          <article class="healthhub-article-card">
            <?php if (has_post_thumbnail()) : ?>
              <div class="healthhub-article-image">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium_large', array('class' => 'healthhub-article-img')); ?>
                </a>
                <div class="healthhub-article-overlay"></div>
              </div>
            <?php endif; ?>
            <div class="healthhub-article-content">
              <?php
              $cats = get_the_category();
              if (!empty($cats)) :
              ?>
                <span class="healthhub-category-badge"><?php echo esc_html($cats[0]->name); ?></span>
              <?php endif; ?>
              <h3 class="healthhub-article-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <p class="healthhub-article-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
              <div class="healthhub-article-meta">
                <?php if ($reading_time) : ?>
                  <span class="healthhub-reading-time"><i class="fas fa-clock"></i> <?php echo esc_html($reading_time); ?> min</span>
                <?php endif; ?>
                <span class="healthhub-date"><?php echo get_the_date(); ?></span>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <!-- Pagination -->
      <div class="healthhub-pagination">
        <?php
        echo paginate_links(array(
          'total'   => $grid_query->max_num_pages,
          'current' => $paged,
          'prev_text' => '<i class="fas fa-chevron-left"></i>',
          'next_text' => '<i class="fas fa-chevron-right"></i>',
        ));
        ?>
      </div>

    <?php
      wp_reset_postdata();
    else :
    ?>
      <div class="healthhub-no-posts">
        <p>No articles found. Check back soon for new health insights.</p>
      </div>
    <?php endif; ?>

  </div>
</section>

<!-- CTA Section -->
<section class="healthhub-cta-section">
  <div class="section-container">
    <div class="healthhub-cta-content">
      <h2 class="healthhub-cta-title"><?php echo esc_html(ep_field('hh_cta_title', 'Need personalised health advice?')); ?></h2>
      <p class="healthhub-cta-description"><?php echo esc_html(ep_field('hh_cta_description', 'Book a consultation with our expert pharmacists at Easy Pharmacy Ashford.')); ?></p>
      <div class="healthhub-cta-actions">
        <a href="<?php echo esc_url(ep_field('hh_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">
          <?php echo esc_html(ep_field('hh_cta_text', 'Book Consultation')); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
