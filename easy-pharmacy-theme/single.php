<?php
/**
 * Single Post Template (Health Hub Article)
 *
 * Premium editorial layout with warm palette typography.
 *
 * @package Easy_Pharmacy
 */

get_header();

while ( have_posts() ) : the_post();

// Post data
$categories    = get_the_category();
$category_name = ! empty( $categories ) ? $categories[0]->name : 'Health';
$category_link = ! empty( $categories ) ? get_category_link( $categories[0]->term_id ) : '';
$featured_img  = get_the_post_thumbnail_url( get_the_ID(), 'large' );

// Reading time (auto-calculated from word count)
$raw_content = get_the_content();
$word_count  = str_word_count( wp_strip_all_tags( $raw_content ) );
$read_time   = max( 1, ceil( $word_count / 250 ) );

// Author
$author_name   = get_the_author();
$author_role   = ep_option( 'default_author_role', 'Lead Pharmacist' );
$author_id     = get_the_author_meta( 'ID' );
$author_bio    = get_the_author_meta( 'description' );
$author_avatar = '';

if ( function_exists( 'get_field' ) ) {
    $acf_avatar = get_field( 'author_avatar', 'user_' . $author_id );
    if ( $acf_avatar ) {
        $author_avatar = is_array( $acf_avatar ) ? $acf_avatar['url'] : wp_get_attachment_image_url( $acf_avatar, 'thumbnail' );
    }
}
if ( empty( $author_avatar ) ) {
    $pharmacist_image = ep_option( 'pharmacist_image' );
    if ( $pharmacist_image ) {
        $author_avatar = is_numeric( $pharmacist_image ) ? wp_get_attachment_image_url( $pharmacist_image, 'thumbnail' ) : ( is_array( $pharmacist_image ) ? $pharmacist_image['url'] : $pharmacist_image );
    }
}
if ( empty( $author_avatar ) ) {
    $author_avatar = get_avatar_url( $author_id, array( 'size' => 96 ) );
}
?>

  <!-- ============================================
       ARTICLE HERO
       ============================================ -->
  <section class="article-hero">
    <div class="article-hero-blob-1"></div>
    <div class="article-hero-blob-2"></div>

    <div class="section-container">
      <div class="article-hero-inner">

        <!-- Breadcrumb -->
        <nav class="article-breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <i class="fas fa-chevron-right"></i>
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>">Health Hub</a>
          <?php if ( ! empty( $categories ) ) : ?>
            <i class="fas fa-chevron-right"></i>
            <span><?php echo esc_html( $category_name ); ?></span>
          <?php endif; ?>
        </nav>

        <div class="article-hero-meta-top">
          <span class="healthhub-category-badge"><?php echo esc_html( $category_name ); ?></span>
          <span class="healthhub-reading-time"><i class="far fa-clock"></i> <?php echo esc_html( $read_time ); ?> min read</span>
        </div>

        <h1 class="article-hero-title"><?php the_title(); ?></h1>

        <?php if ( has_excerpt() ) : ?>
          <p class="article-hero-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
        <?php endif; ?>

        <div class="article-hero-author-row">
          <div class="article-hero-author">
            <?php if ( $author_avatar ) : ?>
              <img src="<?php echo esc_url( $author_avatar ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="article-hero-avatar" />
            <?php endif; ?>
            <div class="article-hero-author-text">
              <span class="article-hero-author-name"><?php echo esc_html( $author_name ); ?></span>
              <span class="article-hero-author-role"><?php echo esc_html( $author_role ); ?></span>
            </div>
          </div>
          <span class="article-hero-date">
            <i class="far fa-calendar-alt"></i> <?php echo get_the_date( 'M j, Y' ); ?>
          </span>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================
       FEATURED IMAGE
       ============================================ -->
  <?php if ( $featured_img ) : ?>
  <section class="article-image-section">
    <div class="section-container">
      <div class="article-image-wrapper">
        <img src="<?php echo esc_url( $featured_img ); ?>" alt="<?php the_title_attribute(); ?>" class="article-image" />
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ============================================
       ARTICLE CONTENT
       ============================================ -->
  <section class="article-body-section">
    <div class="section-container">
      <div class="article-content">
        <?php the_content(); ?>
      </div>

      <!-- Tags -->
      <?php $tags = get_the_tags(); ?>
      <?php if ( ! empty( $tags ) ) : ?>
        <div class="article-tags">
          <i class="fas fa-tags"></i>
          <?php foreach ( $tags as $tag ) : ?>
            <a href="<?php echo esc_url( get_tag_link( $tag ) ); ?>" class="article-tag"><?php echo esc_html( $tag->name ); ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- Author Bio -->
      <div class="article-author-bio">
        <?php if ( $author_avatar ) : ?>
          <img src="<?php echo esc_url( $author_avatar ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="article-bio-avatar" />
        <?php endif; ?>
        <div class="article-bio-text">
          <span class="article-bio-label">Written by</span>
          <span class="article-bio-name"><?php echo esc_html( $author_name ); ?></span>
          <span class="article-bio-role"><?php echo esc_html( $author_role ); ?>, <?php echo esc_html( ep_pharmacy_name() ); ?></span>
          <?php if ( $author_bio ) : ?>
            <p class="article-bio-desc"><?php echo esc_html( $author_bio ); ?></p>
          <?php else : ?>
            <p class="article-bio-desc">Providing expert health advice and clinical pharmacy services to the local community.</p>
          <?php endif; ?>
        </div>
      </div>

      <!-- Post Navigation -->
      <div class="article-navigation">
        <?php
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        ?>
        <?php if ( $prev_post ) : ?>
          <a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="article-nav-link article-nav-prev">
            <span class="article-nav-label"><i class="fas fa-arrow-left"></i> Previous</span>
            <span class="article-nav-title"><?php echo esc_html( get_the_title( $prev_post ) ); ?></span>
          </a>
        <?php else : ?>
          <div></div>
        <?php endif; ?>
        <?php if ( $next_post ) : ?>
          <a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="article-nav-link article-nav-next">
            <span class="article-nav-label">Next <i class="fas fa-arrow-right"></i></span>
            <span class="article-nav-title"><?php echo esc_html( get_the_title( $next_post ) ); ?></span>
          </a>
        <?php endif; ?>
      </div>

    </div>
  </section>

  <!-- ============================================
       RELATED POSTS
       ============================================ -->
  <?php
  $related_args = array(
    'posts_per_page' => 3,
    'post__not_in'   => array( get_the_ID() ),
    'orderby'        => 'date',
    'order'          => 'DESC',
  );
  if ( ! empty( $categories ) ) {
    $related_args['category__in'] = array( $categories[0]->term_id );
  }
  $related_query = new WP_Query( $related_args );
  if ( $related_query->have_posts() ) :
  ?>
  <section class="article-related-section">
    <div class="section-container">
      <h2 class="article-related-heading">More from the Health Hub</h2>
      <div class="healthhub-article-grid">
        <?php
        while ( $related_query->have_posts() ) :
          $related_query->the_post();
          get_template_part( 'template-parts/article-card' );
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

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
