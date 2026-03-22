<?php
/**
 * Template Part: Health Hub Section
 *
 * 3-card article grid pulling the latest WordPress posts. Falls back to
 * hardcoded placeholder cards when no posts exist yet — so the section
 * always renders cleanly on first theme activation.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section header fields ---
$badge_text      = dp_field( 'healthhub_badge_text', 'Expert Advice' );
$title_start     = dp_field( 'healthhub_title_start', 'Latest from the' );
$title_highlight = dp_field( 'healthhub_title_highlight', 'Health Hub' );
$view_all_url    = dp_field( 'healthhub_view_all_url', home_url( '/health-hub/' ) );

// --- Query latest 3 posts ---
$healthhub_query = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
) );

$has_posts = $healthhub_query->have_posts();
?>

<section class="healthhub-section">
    <div class="section-container">

        <!-- Header row -->
        <div class="healthhub-header">
            <div class="healthhub-header-text">
                <div class="section-badge">
                    <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                        <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
                </div>
                <h2 class="healthhub-title">
                    <?php echo esc_html( $title_start ); ?> <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span>
                </h2>
            </div>
            <a href="<?php echo esc_url( $view_all_url ); ?>" class="healthhub-view-all">
                View all articles
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Article grid -->
        <div class="healthhub-grid">

            <?php if ( $has_posts ) : ?>

                <?php while ( $healthhub_query->have_posts() ) : $healthhub_query->the_post();
                    $post_id       = get_the_ID();
                    $post_title    = get_the_title();
                    $post_excerpt  = get_the_excerpt();
                    $post_url      = get_permalink();
                    $thumbnail_url = get_the_post_thumbnail_url( $post_id, 'health-hub-card' );
                    $thumbnail_alt = get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true );

                    // Category badge — use the first category
                    $categories    = get_the_category( $post_id );
                    $category_name = ! empty( $categories ) ? $categories[0]->name : 'Pharmacy Advice';
                ?>

                    <a href="<?php echo esc_url( $post_url ); ?>" class="healthhub-card">
                        <div class="healthhub-card-image">
                            <?php if ( $thumbnail_url ) : ?>
                                <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $thumbnail_alt ); ?>" loading="lazy" />
                            <?php endif; ?>
                            <span class="healthhub-card-badge"><?php echo esc_html( $category_name ); ?></span>
                        </div>
                        <div class="healthhub-card-content">
                            <h3 class="healthhub-card-title"><?php echo esc_html( $post_title ); ?></h3>
                            <p class="healthhub-card-excerpt"><?php echo esc_html( $post_excerpt ); ?></p>
                            <span class="healthhub-card-link">
                                Read Article
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </a>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <!-- Placeholder cards (shown when no posts exist yet) -->
                <div class="healthhub-card">
                    <div class="healthhub-card-image">
                        <span class="healthhub-card-badge">Weight Loss</span>
                    </div>
                    <div class="healthhub-card-content">
                        <h3 class="healthhub-card-title">Understanding Medical Weight Loss: Is it Right for You?</h3>
                        <p class="healthhub-card-excerpt">Explore the science behind GLP-1 treatments like Mounjaro and Wegovy, and find out if medical weight loss could work for you.</p>
                        <span class="healthhub-card-link">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <div class="healthhub-card">
                    <div class="healthhub-card-image">
                        <span class="healthhub-card-badge">Travel Health</span>
                    </div>
                    <div class="healthhub-card-content">
                        <h3 class="healthhub-card-title">The Ultimate Pre-Travel Health Checklist</h3>
                        <p class="healthhub-card-excerpt">From vaccinations to malaria prevention, make sure you are fully prepared before your next trip abroad.</p>
                        <span class="healthhub-card-link">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <div class="healthhub-card">
                    <div class="healthhub-card-image">
                        <span class="healthhub-card-badge">Seasonal Health</span>
                    </div>
                    <div class="healthhub-card-content">
                        <h3 class="healthhub-card-title">Why the Flu Jab is More Important Than Ever</h3>
                        <p class="healthhub-card-excerpt">Learn why pharmacists recommend annual flu vaccinations and how to book yours at your local pharmacy.</p>
                        <span class="healthhub-card-link">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    </div>
</section>
