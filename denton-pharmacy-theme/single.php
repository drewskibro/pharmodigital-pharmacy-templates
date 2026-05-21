<?php
/**
 * Single Post Template (Health Hub Article)
 *
 * Premium editorial layout with blue/green Denton palette.
 *
 * @package Denton_Pharmacy
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
$author_role   = dp_option( 'default_author_role', 'Lead Pharmacist' );
$author_id     = get_the_author_meta( 'ID' );
$author_bio    = get_the_author_meta( 'description' );
$author_avatar = '';

// Author avatar: post-level field → pharmacist image → Gravatar
$author_photo_id = get_field( 'author_photo' );
if ( $author_photo_id ) {
    $author_avatar = wp_get_attachment_image_url( $author_photo_id, 'thumbnail' );
}
if ( empty( $author_avatar ) ) {
    $pharmacist_image = dp_option( 'pharmacist_image' );
    if ( $pharmacist_image ) {
        $author_avatar = is_numeric( $pharmacist_image ) ? wp_get_attachment_image_url( $pharmacist_image, 'thumbnail' ) : ( is_array( $pharmacist_image ) ? $pharmacist_image['url'] : $pharmacist_image );
    }
}
if ( empty( $author_avatar ) ) {
    $author_avatar = get_avatar_url( $author_id, array( 'size' => 96 ) );
}

// Reviewer / fact-check
$reviewer_name     = dp_option( 'superintendent_pharmacist', 'Ahmed Al-Liabi' );
$reviewer_gphc     = dp_option( 'superintendent_gphc_number', '2208502' );
$reviewer_url      = dp_option( 'gphc_verify_url', '' );
$reviewer_avatar   = '';

$reviewer_photo_id = get_field( 'reviewer_photo' );
if ( $reviewer_photo_id ) {
    $reviewer_avatar = wp_get_attachment_image_url( $reviewer_photo_id, 'thumbnail' );
}
if ( empty( $reviewer_avatar ) ) {
    $reviewer_image_id = dp_option( 'pharmacist_image' );
    if ( $reviewer_image_id ) {
        $reviewer_avatar = is_numeric( $reviewer_image_id )
            ? wp_get_attachment_image_url( $reviewer_image_id, 'thumbnail' )
            : ( is_array( $reviewer_image_id ) ? $reviewer_image_id['url'] : $reviewer_image_id );
    }
}

$last_modified = get_the_modified_date( 'M j, Y' );
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
       PILLAR BACKLINK (shown on cluster posts)
       ============================================ -->
  <?php
  // Find if this post is a cluster of any pillar post.
  $pillar_query = new WP_Query( array(
      'post_type'      => 'post',
      'posts_per_page' => 1,
      'meta_query'     => array(
          array(
              'key'     => 'cluster_posts',
              'value'   => '"' . get_the_ID() . '"',
              'compare' => 'LIKE',
          ),
      ),
      'fields'         => 'ids',
  ) );
  if ( $pillar_query->have_posts() ) :
      $pillar_id    = $pillar_query->posts[0];
      $pillar_title = get_the_title( $pillar_id );
      $pillar_url   = get_permalink( $pillar_id );
      wp_reset_postdata();
  ?>
  <div class="cluster-pillar-backlink">
    <div class="section-container">
      <a href="<?php echo esc_url( $pillar_url ); ?>" class="cluster-pillar-backlink-inner">
        <span class="cluster-pillar-backlink-icon"><i class="fas fa-layer-group"></i></span>
        <span class="cluster-pillar-backlink-text">
          <span class="cluster-pillar-backlink-label">Part of our guide</span>
          <span class="cluster-pillar-backlink-title"><?php echo esc_html( $pillar_title ); ?> <i class="fas fa-arrow-right"></i></span>
        </span>
      </a>
    </div>
  </div>
  <?php else : wp_reset_postdata(); endif; ?>

  <!-- ============================================
       CLINICALLY REVIEWED (E-E-A-T trust block)
       ============================================ -->
  <section class="article-fact-check-section">
    <div class="section-container">
      <div class="article-fact-check">
        <div class="article-fact-check-header">
          <i class="fas fa-shield-halved"></i>
          <span>Clinically Reviewed Content</span>
        </div>
        <div class="article-fact-check-people">
          <!-- Written by -->
          <div class="article-fact-check-person">
            <?php if ( $author_avatar ) : ?>
              <img src="<?php echo esc_url( $author_avatar ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="article-fact-check-avatar" />
            <?php endif; ?>
            <div class="article-fact-check-info">
              <span class="article-fact-check-label">Written by</span>
              <span class="article-fact-check-name"><?php echo esc_html( $author_name ); ?></span>
              <span class="article-fact-check-role"><?php echo esc_html( $author_role ); ?></span>
            </div>
          </div>
          <!-- Reviewed by -->
          <div class="article-fact-check-person">
            <?php if ( $reviewer_avatar ) : ?>
              <img src="<?php echo esc_url( $reviewer_avatar ); ?>" alt="<?php echo esc_attr( $reviewer_name ); ?>" class="article-fact-check-avatar" />
            <?php endif; ?>
            <div class="article-fact-check-info">
              <span class="article-fact-check-label">Reviewed &amp; fact-checked by</span>
              <span class="article-fact-check-name"><?php echo esc_html( $reviewer_name ); ?></span>
              <span class="article-fact-check-role">Superintendent Pharmacist<?php if ( $reviewer_gphc ) : ?> &middot; GPhC: <?php echo esc_html( $reviewer_gphc ); ?><?php endif; ?></span>
              <?php if ( $reviewer_url ) : ?>
                <a href="<?php echo esc_url( $reviewer_url ); ?>" class="article-fact-check-verify" target="_blank" rel="noopener">
                  <i class="fas fa-external-link-alt"></i> Verify on GPhC Register
                </a>
              <?php endif; ?>
              <?php
              $reviewer_profile_url = dp_option( 'reviewer_profile_url', '' );
              if ( $reviewer_profile_url ) : ?>
                <a href="<?php echo esc_url( $reviewer_profile_url ); ?>" class="article-fact-check-verify">
                  <i class="fas fa-user-circle"></i> View Full Profile
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="article-fact-check-footer">
          <span><i class="far fa-calendar-alt"></i> Last updated: <?php echo esc_html( $last_modified ); ?></span>
          <span><i class="fas fa-check-circle"></i> Medically reviewed</span>
        </div>
      </div>
    </div>
  </section>

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
       FAQ SECTION (per-post accordion)
       ============================================ -->
  <?php
  $faqs = get_field( 'post_faqs' );
  if ( ! empty( $faqs ) ) :
      $faq_title = get_field( 'post_faq_title' );
      if ( ! $faq_title ) {
          $faq_title = 'Frequently Asked Questions';
      }
  ?>
  <section class="article-faq-section">
    <div class="section-container">
      <div class="article-faq-inner">
        <div class="article-faq-header">
          <span class="section-badge"><svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg> FAQs</span>
          <h2 class="article-faq-title"><?php echo esc_html( $faq_title ); ?></h2>
        </div>
        <div class="article-faq-list">
          <?php foreach ( $faqs as $i => $faq ) : ?>
            <div class="article-faq-item">
              <button class="article-faq-question" aria-expanded="false" aria-controls="faq-answer-<?php echo esc_attr( $i ); ?>">
                <span class="article-faq-number"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></span>
                <span class="article-faq-question-text"><?php echo esc_html( $faq['question'] ); ?></span>
                <span class="article-faq-toggle"><i class="fas fa-plus"></i></span>
              </button>
              <div class="article-faq-answer" id="faq-answer-<?php echo esc_attr( $i ); ?>">
                <div class="article-faq-answer-inner">
                  <?php echo wp_kses_post( $faq['answer'] ); ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ============================================
       CLUSTER HUB (shown on pillar posts)
       ============================================ -->
  <?php
  $is_pillar     = get_field( 'is_pillar_post' );
  $cluster_ids   = $is_pillar ? get_field( 'cluster_posts' ) : array();
  if ( $is_pillar && ! empty( $cluster_ids ) ) :
      $cluster_title = get_field( 'cluster_section_title' );
      if ( ! $cluster_title ) {
          $cluster_title = 'In This Series';
      }
      $cluster_query = new WP_Query( array(
          'post_type'      => 'post',
          'post__in'       => $cluster_ids,
          'orderby'        => 'post__in',
          'posts_per_page' => count( $cluster_ids ),
      ) );
  ?>
  <section class="cluster-hub-section">
    <div class="section-container">
      <div class="cluster-hub-header">
        <span class="cluster-hub-icon"><i class="fas fa-layer-group"></i></span>
        <h2 class="cluster-hub-title"><?php echo esc_html( $cluster_title ); ?></h2>
        <p class="cluster-hub-subtitle"><?php echo esc_html( count( $cluster_ids ) ); ?> related articles in this content series</p>
      </div>
      <div class="cluster-hub-grid">
        <?php
        while ( $cluster_query->have_posts() ) :
            $cluster_query->the_post();
            get_template_part( 'template-parts/article-card' );
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ============================================
       SOCIAL PROOF / GOOGLE RATING
       ============================================ -->
  <section class="article-social-proof-section">
    <div class="section-container">
      <div class="article-social-proof-wrapper">

        <!-- Google Rating Badge (reuses globals.css .rating-badge) -->
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
            <span class="score-number"><?php echo esc_html( dp_option( 'google_rating', '4.9' ) ); ?></span>
            <div class="rating-score-detail">
              <div class="star-row">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span class="rating-count">Based on 300+ reviews</span>
            </div>
          </div>
          <div class="rating-footer">
            <div class="rating-location">
              <i class="fas fa-map-marker-alt"></i>
              <span><?php echo esc_html( dp_option( 'pharmacy_town', 'Denton, UK' ) ); ?></span>
            </div>
            <a href="#reviews" class="rating-link">View Reviews</a>
          </div>
        </div>

        <!-- Text Content -->
        <div class="article-social-proof-content">
          <p class="article-social-proof-eyebrow">TRUSTED BY <?php echo esc_html( strtoupper( dp_option( 'pharmacy_town', 'DENTON' ) ) ); ?></p>
          <h2 class="article-social-proof-headline">Expert health advice from <?php echo esc_html( dp_pharmacy_name() ); ?>'s clinical team</h2>
          <p class="article-social-proof-subtext">Our articles are written and reviewed by qualified pharmacists and independent prescribers, so you can trust the advice you read here.</p>
        </div>
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

<?php endwhile; ?>

<?php get_footer(); ?>
