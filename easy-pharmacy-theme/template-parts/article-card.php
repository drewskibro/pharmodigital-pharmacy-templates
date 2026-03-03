<?php
/**
 * Template Part: Article Card
 *
 * Standard article card for the Health Hub blog grid.
 * Expects to be used within a WordPress loop.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$article_id    = get_the_ID();
$title         = get_the_title();
$permalink     = get_permalink();
$excerpt       = get_the_excerpt();
$thumbnail_url = get_the_post_thumbnail_url( $article_id, 'health-hub-card' );
$publish_date  = get_the_date( 'M d, Y' );

// Category
$categories    = get_the_category();
$category_name = ! empty( $categories ) ? $categories[0]->name : 'Health';

// Reading time estimate (based on word count, ~250 words per minute)
$content    = get_the_content();
$word_count = str_word_count( wp_strip_all_tags( $content ) );
$read_time  = max( 1, ceil( $word_count / 250 ) );
?>

<a href="<?php echo esc_url( $permalink ); ?>" class="healthhub-article-card">
    <div class="healthhub-card-image-wrapper">
        <?php if ( $thumbnail_url ) : ?>
            <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="healthhub-card-image" loading="lazy" />
        <?php else : ?>
            <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/blog-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="healthhub-card-image" loading="lazy" />
        <?php endif; ?>
        <span class="healthhub-category-badge-overlay"><?php echo esc_html( $category_name ); ?></span>
    </div>
    <div class="healthhub-card-content">
        <h3 class="healthhub-card-title"><?php echo esc_html( $title ); ?></h3>
        <p class="healthhub-card-excerpt"><?php echo esc_html( $excerpt ); ?></p>
        <div class="healthhub-card-footer">
            <span class="healthhub-reading-time"><i class="far fa-clock"></i> <?php echo esc_html( $read_time ); ?> min read</span>
            <span class="healthhub-publish-date"><?php echo esc_html( $publish_date ); ?></span>
        </div>
    </div>
</a>
