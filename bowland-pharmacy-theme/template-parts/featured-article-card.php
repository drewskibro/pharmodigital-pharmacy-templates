<?php
/**
 * Template Part: Featured Article Card
 *
 * Large featured article card for the Health Hub page.
 * Expects to be used within a WordPress loop.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$article_id    = get_the_ID();
$title         = get_the_title();
$permalink     = get_permalink();
$excerpt       = get_the_excerpt();
$thumbnail_url = get_the_post_thumbnail_url( $article_id, 'health-hub-featured' );

// Category.
$categories    = get_the_category();
$category_name = ! empty( $categories ) ? $categories[0]->name : 'Health';

// Reading time estimate.
$content    = get_the_content();
$word_count = str_word_count( wp_strip_all_tags( $content ) );
$read_time  = max( 1, ceil( $word_count / 250 ) );

// Author info.
$author_name   = get_the_author();
if ( empty( $author_name ) ) {
    $author_name = bp_option( 'pharmacist_name', 'Ahmed Al-Liabi' );
}
$author_role   = bp_option( 'default_author_role', 'Lead Pharmacist' );
$author_avatar = '';
$author_id     = get_the_author_meta( 'ID' );

// Fallback chain: per-post ACF → per-user ACF → global pharmacist image → Gravatar
if ( function_exists( 'get_field' ) ) {
    $acf_avatar = get_field( 'author_avatar', 'user_' . $author_id );
    if ( $acf_avatar ) {
        $author_avatar = is_array( $acf_avatar ) ? $acf_avatar['url'] : wp_get_attachment_image_url( $acf_avatar, 'thumbnail' );
    }
}
if ( empty( $author_avatar ) ) {
    $pharmacist_img_id = bp_option( 'pharmacist_image' );
    if ( $pharmacist_img_id ) {
        $author_avatar = wp_get_attachment_image_url( $pharmacist_img_id, 'thumbnail' );
    }
}
if ( empty( $author_avatar ) ) {
    $author_avatar = get_avatar_url( $author_id, array( 'size' => 48 ) );
}
?>

<a href="<?php echo esc_url( $permalink ); ?>" class="healthhub-featured-card">
    <div class="healthhub-featured-content">
        <div class="healthhub-meta-row">
            <span class="healthhub-category-badge"><?php echo esc_html( $category_name ); ?></span>
            <span class="healthhub-reading-time"><i class="far fa-clock"></i> <?php echo esc_html( $read_time ); ?> min read</span>
        </div>

        <h2 class="healthhub-featured-title"><?php echo esc_html( $title ); ?></h2>

        <p class="healthhub-featured-excerpt">
            <?php echo esc_html( $excerpt ); ?>
        </p>

        <div class="healthhub-author-row">
            <div class="healthhub-author-info">
                <?php if ( $author_avatar ) : ?>
                    <img src="<?php echo esc_url( $author_avatar ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="healthhub-author-avatar" loading="lazy" />
                <?php endif; ?>
                <span class="healthhub-author-name"><?php echo esc_html( $author_name ); ?>, <?php echo esc_html( $author_role ); ?></span>
            </div>
            <span class="healthhub-read-link">
                Read Full Article <i class="fas fa-arrow-right"></i>
            </span>
        </div>
    </div>

    <div class="healthhub-featured-image-wrapper">
        <?php if ( $thumbnail_url ) : ?>
            <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="healthhub-featured-image" loading="lazy" />
        <?php else : ?>
            <img src="<?php echo esc_url( BOWLAND_PHARMACY_URI . '/assets/images/blog-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="healthhub-featured-image" loading="lazy" />
        <?php endif; ?>
    </div>
</a>
