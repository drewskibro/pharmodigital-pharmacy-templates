<?php
/**
 * Template Part: Health Hub Section
 *
 * Latest articles grid showing 3 most recent posts.
 * Uses WP_Query to pull real blog posts.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Section header fields
$badge_text  = ep_field( 'healthhub_badge_text', 'Expert Advice' );
$title_start = ep_field( 'healthhub_title_start', 'Latest from the' );
$title_highlight = ep_field( 'healthhub_title_highlight', 'Health Hub' );
$view_all_text = ep_field( 'healthhub_view_all_text', 'View all articles' );
$view_all_url  = ep_field( 'healthhub_view_all_url', home_url( '/health-hub/' ) );

// Query latest posts
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$health_hub_query = new WP_Query( $args );
?>

<section class="healthhub-section">
    <div class="section-container">

        <!-- Header row -->
        <div class="healthhub-header">
            <div class="healthhub-header-text">
                <div class="section-badge">
                    <span class="pulse-dot">
                        <span></span>
                        <span></span>
                    </span>
                    <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
                </div>
                <h2 class="healthhub-title">
                    <?php echo esc_html( $title_start ); ?> <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span>
                </h2>
            </div>
            <a href="<?php echo esc_url( $view_all_url ); ?>" class="healthhub-view-all">
                <?php echo esc_html( $view_all_text ); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Articles grid -->
        <div class="healthhub-grid">

            <?php if ( $health_hub_query->have_posts() ) : ?>
                <?php while ( $health_hub_query->have_posts() ) : $health_hub_query->the_post(); ?>

                    <?php
                    $categories = get_the_category();
                    $category_name = ! empty( $categories ) ? $categories[0]->name : 'Health';
                    $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'health-hub-card' );
                    ?>

                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="healthhub-card">
                        <div class="healthhub-card-image">
                            <?php if ( $thumbnail_url ) : ?>
                                <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/blog-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <?php endif; ?>
                            <span class="healthhub-card-badge"><?php echo esc_html( $category_name ); ?></span>
                        </div>
                        <div class="healthhub-card-content">
                            <h3 class="healthhub-card-title"><?php echo esc_html( get_the_title() ); ?></h3>
                            <p class="healthhub-card-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
                            <span class="healthhub-card-link">
                                Read Article
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </a>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <!-- Fallback: Static placeholder cards when no posts exist -->
                <a href="#" class="healthhub-card">
                    <div class="healthhub-card-image">
                        <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/blog-placeholder.jpg' ); ?>" alt="Weight Loss Guide">
                        <span class="healthhub-card-badge">Weight Loss</span>
                    </div>
                    <div class="healthhub-card-content">
                        <h3 class="healthhub-card-title">Understanding Medical Weight Loss: Is it Right for You?</h3>
                        <p class="healthhub-card-excerpt">Discover how modern GLP-1 treatments are revolutionising weight management.</p>
                        <span class="healthhub-card-link">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>

                <a href="#" class="healthhub-card">
                    <div class="healthhub-card-image">
                        <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/blog-placeholder.jpg' ); ?>" alt="Travel Health">
                        <span class="healthhub-card-badge">Travel Health</span>
                    </div>
                    <div class="healthhub-card-content">
                        <h3 class="healthhub-card-title">The Ultimate Pre-Travel Health Checklist</h3>
                        <p class="healthhub-card-excerpt">From yellow fever to malaria prevention, here's what you need to know before your next adventure.</p>
                        <span class="healthhub-card-link">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>

                <a href="#" class="healthhub-card">
                    <div class="healthhub-card-image">
                        <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/blog-placeholder.jpg' ); ?>" alt="Flu Vaccination">
                        <span class="healthhub-card-badge">Seasonal Health</span>
                    </div>
                    <div class="healthhub-card-content">
                        <h3 class="healthhub-card-title">Why the Flu Jab is More Important Than Ever</h3>
                        <p class="healthhub-card-excerpt">Protect yourself and your family this winter. Learn about eligibility and private options.</p>
                        <span class="healthhub-card-link">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>

            <?php endif; ?>

        </div>
    </div>
</section>
