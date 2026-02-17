<?php
/**
 * Template Part: How It Works Section
 *
 * 3-step process with timeline connectors and CTA.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Section header fields
$badge_text  = ep_field( 'hiw_badge_text', 'Simple & Fast' );
$title       = ep_field( 'hiw_title', 'How It Works' );
$description = ep_field( 'hiw_description', 'Getting started with Easy Pharmacy is simple. From consultation to delivery, we\'ve made healthcare accessible.' );
$cta_text    = ep_field( 'hiw_cta_text', 'Start Your Journey Now' );
$cta_url     = ep_field( 'hiw_cta_url', ep_booking_url() );

// Default steps
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
        'step_title'       => 'Speak to Dilip',
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

// Try ACF repeater
$steps = array();
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

if ( empty( $steps ) ) {
    $steps = $default_steps;
}

$total_steps = count( $steps );
?>

<section class="how-it-works-section">
    <div class="section-container">

        <!-- Section header -->
        <div class="how-it-works-header">
            <div class="section-badge">
                <span class="pulse-dot">
                    <span></span>
                    <span></span>
                </span>
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="how-it-works-title"><?php echo esc_html( $title ); ?></h2>
            <p class="how-it-works-description"><?php echo esc_html( $description ); ?></p>
        </div>

        <!-- Steps -->
        <div class="how-it-works-steps">

            <?php foreach ( $steps as $index => $step ) : ?>
                <div class="how-it-works-step">
                    <div class="how-it-works-step-card">
                        <div class="how-it-works-step-number">
                            <span><?php echo esc_html( $step['step_number'] ); ?></span>
                        </div>
                        <div class="how-it-works-step-icon">
                            <i class="fas <?php echo esc_attr( $step['step_icon'] ); ?>"></i>
                        </div>
                        <h3 class="how-it-works-step-title"><?php echo esc_html( $step['step_title'] ); ?></h3>
                        <p class="how-it-works-step-desc"><?php echo esc_html( $step['step_description'] ); ?></p>
                        <?php if ( ! empty( $step['step_time'] ) ) : ?>
                            <div class="how-it-works-step-time">
                                <i class="fas <?php echo esc_attr( $step['step_time_icon'] ); ?>"></i>
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
                <?php echo esc_html( $cta_text ); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>
