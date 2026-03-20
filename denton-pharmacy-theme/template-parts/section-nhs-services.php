<?php
/**
 * Template Part: NHS Services Section
 *
 * 6-card colour-coded grid with inline SVG icons showcasing NHS services.
 * Each card features a colour class, SVG icon, badge, title, description,
 * 3-item bullet list, and action button.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section header ---
$badge_text  = dp_field( 'nhs_badge_text', 'NHS Services' );
$title       = dp_field( 'nhs_title', 'Your NHS <span class="gradient-text">Community</span> Pharmacy' );
$description = dp_field( 'nhs_description', 'Comprehensive NHS services for eligible patients. From prescriptions to vaccinations, we\'re here to support your health and wellbeing.' );

// --- Bottom CTA ---
$bottom_title    = dp_field( 'nhs_bottom_title', 'Need help with NHS services?' );
$bottom_desc     = dp_field( 'nhs_bottom_description', 'Our friendly team is here to answer your questions about NHS prescriptions, eligibility, and services.' );
$bottom_cta_text = dp_field( 'nhs_bottom_cta_text', 'Visit Us in Denton' );
$phone        = dp_phone();
$phone_link   = dp_phone_link();

// --- Card data from ACF repeater (pre-populated via WP-CLI or acf/load_value) ---
$cards = array();
if ( function_exists( 'have_rows' ) && have_rows( 'nhs_cards' ) ) {
    while ( have_rows( 'nhs_cards' ) ) {
        the_row();
        $items = array_filter( array(
            get_sub_field( 'card_item_1' ),
            get_sub_field( 'card_item_2' ),
            get_sub_field( 'card_item_3' ),
        ) );
        $cards[] = array(
            'colour' => get_sub_field( 'card_colour' ) ?: 'blue',
            'icon'   => get_sub_field( 'card_icon' )   ?: 'prescription',
            'badge'  => get_sub_field( 'card_badge' )   ?: '',
            'title'  => get_sub_field( 'card_title' )   ?: '',
            'desc'   => get_sub_field( 'card_desc' )    ?: '',
            'items'  => $items,
            'btn'    => get_sub_field( 'card_btn' )     ?: 'Learn More',
            'url'    => get_sub_field( 'card_url' )     ?: home_url( '/book-appointment/' ),
        );
    }
}
?>

<section class="nhs-section" id="nhs-services">

    <!-- Decorative background blobs -->
    <div class="nhs-bg-blob-1"></div>
    <div class="nhs-bg-blob-2"></div>

    <div class="section-container">

        <!-- Section header -->
        <div class="nhs-header">
            <div class="nhs-badge">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                    <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <div class="nhs-header-line"></div>
            <h2 class="nhs-title"><?php echo wp_kses( $title, array( 'span' => array( 'class' => array() ), 'br' => array() ) ); ?></h2>
            <p class="nhs-description"><?php echo esc_html( $description ); ?></p>
        </div>

        <!-- Card grid -->
        <div class="nhs-grid">

            <?php foreach ( $cards as $card ) : ?>
                <div class="nhs-card nhs-card-<?php echo esc_attr( $card['colour'] ); ?>">
                    <div class="nhs-card-content">

                        <!-- Card icon (inline SVG) -->
                        <div class="nhs-card-icon">
                            <?php
                            switch ( $card['icon'] ) {
                                case 'prescription':
                                    ?>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <?php
                                    break;
                                case 'delivery':
                                    ?>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <?php
                                    break;
                                case 'repeat':
                                    ?>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                    </svg>
                                    <?php
                                    break;
                                case 'pharmacyfirst':
                                    ?>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    <?php
                                    break;
                                case 'newmedicine':
                                    ?>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                    </svg>
                                    <?php
                                    break;
                                case 'flu':
                                    ?>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    <?php
                                    break;
                                default:
                                    ?>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <?php
                                    break;
                            }
                            ?>
                        </div>

                        <!-- Badge -->
                        <?php if ( ! empty( $card['badge'] ) ) : ?>
                            <span class="nhs-card-badge"><?php echo esc_html( $card['badge'] ); ?></span>
                        <?php endif; ?>

                        <!-- Title -->
                        <h3 class="nhs-card-title"><?php echo esc_html( $card['title'] ); ?></h3>

                        <!-- Description -->
                        <p class="nhs-card-desc"><?php echo esc_html( $card['desc'] ); ?></p>

                        <!-- Bullet list with checkmark SVGs -->
                        <?php if ( ! empty( $card['items'] ) ) : ?>
                            <ul class="nhs-card-list">
                                <?php foreach ( $card['items'] as $item ) : ?>
                                    <li>
                                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                        <span><?php echo esc_html( $item ); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <!-- Button -->
                        <a href="<?php echo esc_url( $card['url'] ); ?>" class="nhs-card-btn">
                            <?php echo esc_html( $card['btn'] ); ?>
                        </a>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <!-- Bottom CTA block -->
        <div class="nhs-bottom-cta">
            <div class="nhs-bottom-cta-content">
                <h3><?php echo esc_html( $bottom_title ); ?></h3>
                <p><?php echo esc_html( $bottom_desc ); ?></p>
            </div>
            <div class="nhs-bottom-cta-actions">
                <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="nhs-btn-primary">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                        <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <?php echo esc_html( 'Call ' . $phone ); ?>
                </a>
                <a href="#location" class="nhs-btn-secondary">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                        <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <?php echo esc_html( $bottom_cta_text ); ?>
                </a>
            </div>
        </div>

    </div>
</section>
