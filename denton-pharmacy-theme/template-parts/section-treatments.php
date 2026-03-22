<?php
/**
 * Template Part: Treatments Grid Section
 *
 * 5-card compact image grid in a single desktop row. Each card has a title
 * and short subtitle visible at all times, with an arrow that slides in on hover.
 * No pulsing dots — badge uses a static shield icon.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section header fields ---
$badge_text  = dp_field( 'treatments_badge_text', 'Trusted by thousands in Denton & Manchester' );
$title       = dp_field( 'treatments_title', 'Our Most Popular Treatments' );
$description = dp_field( 'treatments_description', 'Expert-led treatments and NHS services at your local pharmacy.' );

// --- Default treatments (5 core services) ---
$default_treatments = array(
    array(
        'treatment_title'    => 'Weight Loss',
        'treatment_subtitle' => 'GLP-1 treatments',
        'treatment_url'      => home_url( '/weight-loss/' ),
        'treatment_image_id' => 0,
    ),
    array(
        'treatment_title'    => 'Travel Health',
        'treatment_subtitle' => 'Vaccinations & advice',
        'treatment_url'      => home_url( '/travel-health/' ),
        'treatment_image_id' => 0,
    ),
    array(
        'treatment_title'    => 'Ear Wax Removal',
        'treatment_subtitle' => 'Microsuction clinic',
        'treatment_url'      => home_url( '/ear-wax-removal/' ),
        'treatment_image_id' => 0,
    ),
    array(
        'treatment_title'    => 'Hair Loss',
        'treatment_subtitle' => 'Clinically proven plans',
        'treatment_url'      => home_url( '/hair-loss/' ),
        'treatment_image_id' => 0,
    ),
    array(
        'treatment_title'    => 'NHS Services',
        'treatment_subtitle' => 'Pharmacy First & more',
        'treatment_url'      => home_url( '/nhs-services/' ),
        'treatment_image_id' => 0,
    ),
);

// --- Try ACF repeater first, fall back to defaults ---
$treatments = array();
if ( function_exists( 'have_rows' ) && have_rows( 'treatments_cards' ) ) {
    while ( have_rows( 'treatments_cards' ) ) {
        the_row();
        $treatments[] = array(
            'treatment_title'    => get_sub_field( 'treatment_title' ) ?: '',
            'treatment_subtitle' => get_sub_field( 'treatment_subtitle' ) ?: '',
            'treatment_url'      => get_sub_field( 'treatment_url' ) ?: '#',
            'treatment_image_id' => get_sub_field( 'treatment_image' ),
        );
    }
}

if ( empty( $treatments ) ) {
    $treatments = $default_treatments;
}

// Cap at 5 cards to prevent an orphan row in the 5-column grid.
$treatments = array_slice( $treatments, 0, 5 );
?>

<section class="treatments-section" id="treatments">
    <div class="section-container">

        <!-- Section header -->
        <div class="treatments-header">
            <div class="section-badge">
                <span class="pulse-dot">
                    <span></span>
                    <span></span>
                </span>
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="treatments-title"><?php echo esc_html( $title ); ?></h2>
            <p class="treatments-description"><?php echo esc_html( $description ); ?></p>
        </div>

        <!-- Card grid — single row of 5 on desktop -->
        <div class="treatments-grid">

            <?php foreach ( $treatments as $treatment ) :
                $img_id  = ! empty( $treatment['treatment_image_id'] ) ? $treatment['treatment_image_id'] : 0;
                $img_alt = $treatment['treatment_title'] . ' treatment at ' . dp_pharmacy_name();
                $subtitle = ! empty( $treatment['treatment_subtitle'] ) ? $treatment['treatment_subtitle'] : '';
            ?>
                <a href="<?php echo esc_url( $treatment['treatment_url'] ); ?>" class="treatment-card">
                    <div class="treatment-card-inner">
                        <?php if ( $img_id ) :
                            echo wp_get_attachment_image( $img_id, 'treatment-card', false, array(
                                'class' => 'treatment-card-image',
                                'alt'   => esc_attr( $img_alt ),
                                'sizes' => '(max-width: 640px) 100vw, (max-width: 1024px) 50vw, 240px',
                            ) );
                        else : ?>
                            <img src="<?php echo esc_url( DENTON_PHARMACY_URI . '/assets/images/treatment-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" class="treatment-card-image" />
                        <?php endif; ?>
                        <div class="treatment-card-overlay"></div>
                        <div class="treatment-card-label">
                            <h3 class="treatment-card-title"><?php echo esc_html( $treatment['treatment_title'] ); ?></h3>
                            <?php if ( $subtitle ) : ?>
                                <p class="treatment-card-subtitle"><?php echo esc_html( $subtitle ); ?></p>
                            <?php endif; ?>
                            <span class="treatment-card-arrow" aria-hidden="true">
                                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
</section>
