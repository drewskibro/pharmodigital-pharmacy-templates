<?php
/**
 * Template Part: Treatments Grid Section
 *
 * Displays treatment cards in a grid layout.
 * Uses ACF repeater 'treatments' or falls back to defaults.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Section header fields
$badge_text  = ep_field( 'treatments_badge_text', 'Trusted by thousands in Ashford & Chertsey' );
$title       = ep_field( 'treatments_title', 'Our Most Popular Treatments' );
$description = ep_field( 'treatments_description', 'Comprehensive healthcare solutions tailored to your needs, delivered discreetly to your door.' );

// Default treatments
$default_treatments = array(
    array(
        'treatment_title'    => 'Weight Loss',
        'treatment_url'      => home_url( '/weight-loss/' ),
        'treatment_image_id' => 0,
    ),
    array(
        'treatment_title'    => 'Travel Health',
        'treatment_url'      => home_url( '/travel-health/' ),
        'treatment_image_id' => 0,
    ),
    array(
        'treatment_title'    => 'Ear Wax Removal',
        'treatment_url'      => home_url( '/ear-wax-removal/' ),
        'treatment_image_id' => 0,
    ),
    array(
        'treatment_title'    => 'Hair Loss',
        'treatment_url'      => home_url( '/hair-loss/' ),
        'treatment_image_id' => 0,
    ),
    array(
        'treatment_title'    => 'Smoking Cessation',
        'treatment_url'      => ep_booking_url(),
        'treatment_image_id' => 0,
    ),
);

// Try to get treatments from ACF repeater
$treatments = array();
if ( function_exists( 'have_rows' ) && have_rows( 'treatments' ) ) {
    while ( have_rows( 'treatments' ) ) {
        the_row();
        $link = get_sub_field( 'treatment_url' );

        $treatments[] = array(
            'treatment_title'    => get_sub_field( 'treatment_title' ) ?: '',
            'treatment_url'      => $link ?: '#',
            'treatment_image_id' => get_sub_field( 'treatment_image' ),
        );
    }
}

if ( empty( $treatments ) ) {
    $treatments = $default_treatments;
}
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

        <!-- Card grid -->
        <div class="treatments-grid">

            <?php foreach ( $treatments as $treatment ) :
                $img_id  = ! empty( $treatment['treatment_image_id'] ) ? $treatment['treatment_image_id'] : 0;
                $img_alt = $treatment['treatment_title'] . ' treatment at ' . ep_pharmacy_name();
            ?>
                <a href="<?php echo esc_url( $treatment['treatment_url'] ); ?>" class="treatment-card">
                    <div class="treatment-card-inner">
                        <?php if ( $img_id ) :
                            echo wp_get_attachment_image( $img_id, 'large', false, array(
                                'class' => 'treatment-card-image',
                                'alt'   => esc_attr( $img_alt ),
                                'sizes' => '(max-width: 640px) 100vw, (max-width: 1024px) 50vw, 280px',
                            ) );
                        else : ?>
                            <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/treatment-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" class="treatment-card-image" />
                        <?php endif; ?>
                        <div class="treatment-card-overlay"></div>
                        <div class="treatment-card-hover">
                            <span class="treatment-card-button">View Details</span>
                        </div>
                        <div class="treatment-card-label">
                            <h3 class="treatment-card-title"><?php echo esc_html( $treatment['treatment_title'] ); ?></h3>
                            <div class="treatment-card-line"></div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
</section>
