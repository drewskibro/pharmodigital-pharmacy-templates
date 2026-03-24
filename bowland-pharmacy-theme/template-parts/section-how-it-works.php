<?php
/**
 * Template Part: How It Works Section
 *
 * 3-step process with connectors between steps and a bottom CTA.
 * Each step features a number badge, icon, title, description, and time indicator.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section header fields ---
$badge_text  = bp_field( 'hiw_badge_text', 'Simple & Fast' );
$title       = bp_field( 'hiw_title', 'How It Works' );
$description = bp_field( 'hiw_description', 'Getting started with Bowland Pharmacy is simple. From consultation to delivery, we\'ve made healthcare accessible.' );
$cta_text    = bp_field( 'hiw_cta_text', 'Start Your Journey Now' );
$cta_url     = bp_field( 'hiw_cta_url', bp_booking_url() );

// --- Default steps ---
$default_steps = array(
    array(
        'step_number'      => '1',
        'step_icon'        => 'fa-laptop-medical',
        'step_title'       => 'Book Online',
        'step_description' => 'Complete our quick online consultation form in just 2 minutes. Choose your preferred treatment and answer a few health questions.',
        'step_time_icon'   => 'fa-clock',
        'step_time'        => '2 minutes',
    ),
    array(
        'step_number'      => '2',
        'step_icon'        => 'fa-user-doctor',
        'step_title'       => 'Speak to Ahmed',
        'step_description' => 'Our expert pharmacist reviews your consultation and calls you the same day to discuss your treatment plan and answer any questions.',
        'step_time_icon'   => 'fa-clock',
        'step_time'        => 'Same day',
    ),
    array(
        'step_number'      => '3',
        'step_icon'        => 'fa-box',
        'step_title'       => 'Receive Treatment',
        'step_description' => 'Your medication arrives in discreet, premium packaging with free tracked 24-hour delivery straight to your door.',
        'step_time_icon'   => 'fa-truck-fast',
        'step_time'        => '24h delivery',
    ),
);

// --- Build steps from individual ACF fields, fall back to defaults ---
$steps = array();

// Try ACF repeater first
if ( function_exists( 'have_rows' ) && have_rows( 'hiw_steps' ) ) {
    $step_num = 1;
    while ( have_rows( 'hiw_steps' ) ) {
        the_row();
        $steps[] = array(
            'step_number'      => (string) $step_num,
            'step_icon'        => get_sub_field( 'step_icon' ) ?: 'fa-circle',
            'step_title'       => get_sub_field( 'step_title' ) ?: '',
            'step_description' => get_sub_field( 'step_description' ) ?: '',
            'step_time_icon'   => get_sub_field( 'step_time_icon' ) ?: 'fa-clock',
            'step_time'        => get_sub_field( 'step_time' ) ?: '',
        );
        $step_num++;
    }
}

// If no repeater rows, try individual page-level fields per step
if ( empty( $steps ) ) {
    for ( $i = 1; $i <= 3; $i++ ) {
        $icon  = bp_field( 'hiw_step_' . $i . '_icon', $default_steps[ $i - 1 ]['step_icon'] );
        $stitle = bp_field( 'hiw_step_' . $i . '_title', $default_steps[ $i - 1 ]['step_title'] );
        $sdesc  = bp_field( 'hiw_step_' . $i . '_desc', $default_steps[ $i - 1 ]['step_description'] );
        $stime  = bp_field( 'hiw_step_' . $i . '_time', $default_steps[ $i - 1 ]['step_time'] );

        $steps[] = array(
            'step_number'      => (string) $i,
            'step_icon'        => $icon,
            'step_title'       => $stitle,
            'step_description' => $sdesc,
            'step_time_icon'   => $default_steps[ $i - 1 ]['step_time_icon'],
            'step_time'        => $stime,
        );
    }
}

$total_steps = count( $steps );
?>

<section class="how-it-works-section">
    <div class="section-container">

        <!-- Section header -->
        <div class="how-it-works-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="how-it-works-title"><?php echo esc_html( $title ); ?></h2>
            <p class="how-it-works-description"><?php echo esc_html( $description ); ?></p>
        </div>

        <!-- Steps -->
        <div class="how-it-works-steps">

            <?php foreach ( $steps as $index => $step ) :
                $time_icon_class = bp_fa_class( $step['step_time_icon'] );
                $step_icon_class = bp_fa_class( $step['step_icon'] );
            ?>
                <div class="how-it-works-step">
                    <div class="how-it-works-step-card">
                        <div class="how-it-works-step-number">
                            <span><?php echo esc_html( $step['step_number'] ); ?></span>
                        </div>
                        <div class="how-it-works-step-icon">
                            <i class="<?php echo esc_attr( $step_icon_class ); ?>"></i>
                        </div>
                        <h3 class="how-it-works-step-title"><?php echo esc_html( $step['step_title'] ); ?></h3>
                        <p class="how-it-works-step-desc"><?php echo esc_html( $step['step_description'] ); ?></p>
                        <?php if ( ! empty( $step['step_time'] ) ) : ?>
                            <div class="how-it-works-step-time">
                                <i class="<?php echo esc_attr( $time_icon_class ); ?>"></i>
                                <span><?php echo esc_html( $step['step_time'] ); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ( $index < $total_steps - 1 ) : ?>
                        <div class="how-it-works-connector"></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

        </div>

        <!-- CTA -->
        <div class="how-it-works-cta">
            <a href="<?php echo esc_url( $cta_url ); ?>" class="cta-button primary-cta">
                <?php if ( strpos( $cta_url, 'tel:' ) === 0 ) : ?>
                    <i class="fas fa-phone"></i>
                <?php endif; ?>
                <?php echo esc_html( $cta_text ); ?>
                <?php if ( strpos( $cta_url, 'tel:' ) !== 0 ) : ?>
                    <i class="fas fa-arrow-right"></i>
                <?php endif; ?>
            </a>
        </div>

    </div>
</section>
