<?php
/**
 * Template Part: Stats Bar Section
 *
 * Full-width stats bar with glassmorphism styling.
 * Uses ACF repeater field 'stats' or falls back to defaults.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Default stats
$default_stats = array(
    array(
        'stat_icon'   => 'fa-users',
        'stat_number' => '5,000+',
        'stat_label'  => 'Patients Treated',
    ),
    array(
        'stat_icon'   => 'fa-star',
        'stat_number' => '4.7',
        'stat_label'  => 'Google Rating',
    ),
    array(
        'stat_icon'   => 'fa-award',
        'stat_number' => '15+',
        'stat_label'  => 'Years Experience',
    ),
    array(
        'stat_icon'   => 'fa-shield-halved',
        'stat_number' => 'GPhC',
        'stat_label'  => 'Fully Registered',
    ),
    array(
        'stat_icon'   => 'fa-truck-fast',
        'stat_number' => 'Free',
        'stat_label'  => 'Discreet Delivery',
    ),
);

// Try to get stats from ACF repeater
$stats = array();
if ( function_exists( 'have_rows' ) && have_rows( 'stats' ) ) {
    while ( have_rows( 'stats' ) ) {
        the_row();
        $stats[] = array(
            'stat_icon'   => get_sub_field( 'stat_icon' ) ?: 'fa-star',
            'stat_number' => get_sub_field( 'stat_number' ) ?: '',
            'stat_label'  => get_sub_field( 'stat_label' ) ?: '',
        );
    }
}

if ( empty( $stats ) ) {
    $stats = $default_stats;
}
?>

<section class="stats-section">
    <div class="section-container">
        <div class="stats-bar">

            <?php foreach ( $stats as $index => $stat ) : ?>

                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas <?php echo esc_attr( $stat['stat_icon'] ); ?>"></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-number"><?php echo esc_html( $stat['stat_number'] ); ?></span>
                        <span class="stat-label"><?php echo esc_html( $stat['stat_label'] ); ?></span>
                    </div>
                </div>

                <?php if ( $index < count( $stats ) - 1 ) : ?>
                    <div class="stat-divider"></div>
                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </div>
</section>
