<?php
/**
 * Template Part: Stats Bar Section
 *
 * 5-metric shimmer bar with dividers. Displays key pharmacy trust signals.
 * Each stat is individually configurable via ACF page-level fields with sensible defaults.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Default stats configuration
$default_stats = array(
    array(
        'icon'   => 'fas fa-users',
        'number' => '5,000+',
        'label'  => 'Patients Treated',
    ),
    array(
        'icon'   => 'fas fa-star',
        'number' => '4.7',
        'label'  => 'Google Rating',
    ),
    array(
        'icon'   => 'fas fa-award',
        'number' => '15+',
        'label'  => 'Years Experience',
    ),
    array(
        'icon'   => 'fas fa-shield-halved',
        'number' => 'GPhC',
        'label'  => 'Fully Registered',
    ),
    array(
        'icon'   => 'fas fa-truck-fast',
        'number' => 'Free',
        'label'  => 'Discreet Delivery',
    ),
);

// Build stats array from ACF page fields, falling back to defaults
$stats = array();
for ( $i = 1; $i <= 5; $i++ ) {
    $icon   = dp_field( 'stats_' . $i . '_icon', $default_stats[ $i - 1 ]['icon'] );
    $number = dp_field( 'stats_' . $i . '_number', $default_stats[ $i - 1 ]['number'] );
    $label  = dp_field( 'stats_' . $i . '_label', $default_stats[ $i - 1 ]['label'] );

    // Ensure Font Awesome icon class has a style prefix
    $icon = dp_fa_class( $icon );

    $stats[] = array(
        'icon'   => $icon,
        'number' => $number,
        'label'  => $label,
    );
}
?>

<section class="stats-section">
    <div class="section-container">
        <div class="stats-bar">

            <!-- Shimmer overlay -->
            <div class="stats-shimmer"></div>

            <?php foreach ( $stats as $index => $stat ) : ?>

                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="<?php echo esc_attr( $stat['icon'] ); ?>"></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-number"><?php echo esc_html( $stat['number'] ); ?></span>
                        <span class="stat-label"><?php echo esc_html( $stat['label'] ); ?></span>
                    </div>
                </div>

                <?php if ( $index < count( $stats ) - 1 ) : ?>
                    <div class="stat-divider"></div>
                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </div>
</section>
