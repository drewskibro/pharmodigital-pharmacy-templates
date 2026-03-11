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
$title       = dp_field( 'nhs_title', 'Your NHS Community Pharmacy' );
$description = dp_field( 'nhs_description', 'Free NHS services for eligible patients. From prescriptions to consultations, we provide trusted NHS care right here in Denton.' );

// --- Bottom CTA ---
$bottom_title = dp_field( 'nhs_bottom_title', 'Need help with NHS services?' );
$bottom_desc  = dp_field( 'nhs_bottom_description', 'Our friendly team is here to help you access the NHS services you\'re entitled to. Call us or pop in for advice.' );
$phone        = dp_phone();
$phone_link   = dp_phone_link();

// --- Default card data ---
$default_cards = array(
    array(
        'colour' => 'blue',
        'icon'   => 'prescription',
        'badge'  => 'Free for Eligible',
        'title'  => 'NHS Prescriptions',
        'desc'   => 'Fast, reliable prescription dispensing with expert advice from our pharmacists.',
        'items'  => array( 'Same-day collection available', 'Expert medication advice', 'Free for eligible patients' ),
        'btn'    => 'Learn More',
        'url'    => home_url( '/book-appointment/' ),
    ),
    array(
        'colour' => 'green',
        'icon'   => 'delivery',
        'badge'  => 'Free Service',
        'title'  => 'Collection & Delivery',
        'desc'   => 'We collect prescriptions from your GP and deliver to your door at no extra cost.',
        'items'  => array( 'Free home delivery', 'GP prescription collection', 'Local Denton coverage' ),
        'btn'    => 'Learn More',
        'url'    => home_url( '/book-appointment/' ),
    ),
    array(
        'colour' => 'purple',
        'icon'   => 'repeat',
        'badge'  => 'Automated',
        'title'  => 'Repeat Prescriptions',
        'desc'   => 'Never miss a dose with our automated repeat prescription management service.',
        'items'  => array( 'Automatic ordering', 'SMS reminders', 'Easy online management' ),
        'btn'    => 'Learn More',
        'url'    => home_url( '/book-appointment/' ),
    ),
    array(
        'colour' => 'orange',
        'icon'   => 'pharmacyfirst',
        'badge'  => 'NHS Service',
        'title'  => 'Pharmacy First',
        'desc'   => 'Get treatment for common conditions directly from our pharmacy, no GP needed.',
        'items'  => array( 'No GP appointment needed', '7 common conditions treated', 'Free NHS consultation' ),
        'btn'    => 'Learn More',
        'url'    => home_url( '/book-appointment/' ),
    ),
    array(
        'colour' => 'pink',
        'icon'   => 'newmedicine',
        'badge'  => 'Free Support',
        'title'  => 'New Medicine Service',
        'desc'   => 'Starting a new medication? We provide free follow-up support and guidance.',
        'items'  => array( 'Expert medication guidance', 'Scheduled follow-ups', 'Side effect management' ),
        'btn'    => 'Learn More',
        'url'    => home_url( '/book-appointment/' ),
    ),
    array(
        'colour' => 'cyan',
        'icon'   => 'flu',
        'badge'  => 'Seasonal',
        'title'  => 'NHS Flu Vaccinations',
        'desc'   => 'Protect yourself this winter with a free NHS flu jab at your local pharmacy.',
        'items'  => array( 'Free for eligible patients', 'Walk-in appointments', '10 minute service' ),
        'btn'    => 'Learn More',
        'url'    => home_url( '/book-appointment/' ),
    ),
);

// Try ACF repeater first, fall back to defaults
$cards = array();
if ( function_exists( 'have_rows' ) && have_rows( 'nhs_cards' ) ) {
    $colour_cycle = array( 'blue', 'green', 'purple', 'orange', 'pink', 'cyan' );
    $card_index   = 0;
    while ( have_rows( 'nhs_cards' ) ) {
        the_row();
        $items_raw = get_sub_field( 'card_items' );
        $items     = array();
        if ( is_array( $items_raw ) ) {
            foreach ( $items_raw as $item_row ) {
                if ( ! empty( $item_row['item_text'] ) ) {
                    $items[] = $item_row['item_text'];
                }
            }
        }
        $cards[] = array(
            'colour' => get_sub_field( 'card_colour' ) ?: $colour_cycle[ $card_index % 6 ],
            'icon'   => get_sub_field( 'card_icon' ) ?: 'prescription',
            'badge'  => get_sub_field( 'card_badge' ) ?: '',
            'title'  => get_sub_field( 'card_title' ) ?: '',
            'desc'   => get_sub_field( 'card_description' ) ?: '',
            'items'  => $items,
            'btn'    => get_sub_field( 'card_button_text' ) ?: 'Learn More',
            'url'    => get_sub_field( 'card_url' ) ?: home_url( '/book-appointment/' ),
        );
        $card_index++;
    }
}

if ( empty( $cards ) ) {
    $cards = $default_cards;
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
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                <span><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="nhs-title"><?php echo esc_html( $title ); ?></h2>
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
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    <?php
                                    break;
                                case 'delivery':
                                    ?>
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <rect x="1" y="3" width="15" height="13"></rect>
                                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                    </svg>
                                    <?php
                                    break;
                                case 'repeat':
                                    ?>
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <polyline points="17 1 21 5 17 9"></polyline>
                                        <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
                                        <polyline points="7 23 3 19 7 15"></polyline>
                                        <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                                    </svg>
                                    <?php
                                    break;
                                case 'pharmacyfirst':
                                    ?>
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                    <?php
                                    break;
                                case 'newmedicine':
                                    ?>
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M18 20V10"></path>
                                        <path d="M12 20V4"></path>
                                        <path d="M6 20v-6"></path>
                                    </svg>
                                    <?php
                                    break;
                                case 'flu':
                                    ?>
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        <polyline points="9 12 11 14 15 10"></polyline>
                                    </svg>
                                    <?php
                                    break;
                                default:
                                    ?>
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
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
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
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
                    <i class="fas fa-phone"></i>
                    <?php echo esc_html( $phone ); ?>
                </a>
                <a href="#location" class="nhs-btn-secondary">
                    <i class="fas fa-map-marker-alt"></i>
                    Visit Us in Denton
                </a>
            </div>
        </div>

    </div>
</section>
