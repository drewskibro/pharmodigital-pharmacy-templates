<?php
/**
 * Template Part: Featured Article Card
 *
 * Large featured article card for the Health Hub / blog page.
 * Expects to be used within a WordPress loop or with a specific post passed via $args.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Get the post object - either from the loop or passed as argument
$article_id = get_the_ID();

// Post data
$title         = get_the_title();
$permalink     = get_permalink();
$excerpt       = get_the_excerpt();
$thumbnail_url = get_the_post_thumbnail_url( $article_id, 'health-hub-featured' );

// Category
$categories    = get_the_category();
$category_name = ! empty( $categories ) ? $categories[0]->name : 'Health';

// Reading time estimate (based on word count)
$content    = get_the_content();
$word_count = str_word_count( wp_strip_all_tags( $content ) );
$read_time  = max( 1, ceil( $word_count / 250 ) );

// Author
$author_name   = get_the_author();
$author_role   = ep_option( 'default_author_role', 'Lead Pharmacist' );
$author_avatar = '';
$author_id     = get_the_author_meta( 'ID' );
if ( function_exists( 'get_field' ) ) {
    $acf_avatar = get_field( 'author_avatar', 'user_' . $author_id );
    if ( $acf_avatar ) {
        $author_avatar = is_array( $acf_avatar ) ? $acf_avatar['url'] : wp_get_attachment_image_url( $acf_avatar, 'thumbnail' );
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
                    <img src="<?php echo esc_url( $author_avatar ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="healthhub-author-avatar" />
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
            <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="healthhub-featured-image" />
        <?php else : ?>
            <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/blog-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="healthhub-featured-image" />
        <?php endif; ?>
    </div>
</a>
