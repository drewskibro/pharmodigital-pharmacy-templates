<?php
/**
 * Template Part: Testimonials Section
 *
 * Asymmetric testimonials grid with verified patient reviews.
 * Uses ACF repeater 'testimonials' or falls back to hardcoded defaults.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Section header fields
$badge_text       = ep_field( 'testimonials_badge_text', 'Real Transformations' );
$title_start      = ep_field( 'testimonials_title_start', 'Real Results.' );
$title_highlight  = ep_field( 'testimonials_title_highlight', 'Lasting Health.' );
$description      = ep_field( 'testimonials_description', 'See how our patients across Ashford have transformed their health with our personalised care.' );
$disclaimer       = ep_field( 'testimonials_disclaimer', 'The results below are from real Easy Pharmacy patients. Individual results may vary.' );

// CTA card fields
$cta_title    = ep_field( 'testimonials_cta_title', 'Trusted by 10,000+ Ashford Customers' );
$cta_text     = ep_field( 'testimonials_cta_text', 'No waiting lists. No hidden fees. Just expert, local healthcare you can rely on.' );
$cta_score    = ep_option( 'google_rating', '4.9' );

// Default testimonials
$default_testimonials = array(
    array(
        'type'         => 'large',
        'name'         => 'Paul Fegan',
        'initials'     => 'PF',
        'service'      => 'Travel Clinic',
        'quote'        => 'Needed a <span class="testimonial-highlight">last minute vaccination</span> for a holiday. It was easy to book, and convenient to get to and park. The prices are <span class="testimonial-highlight">\'all-in\'</span> ... Whole process from end-to-end was <span class="testimonial-highlight">friendly, fast and efficient</span>.',
        'highlights'   => array(
            array( 'icon' => 'fa-calendar-check', 'text' => 'Easy Booking' ),
            array( 'icon' => 'fa-car', 'text' => 'Free Parking' ),
            array( 'icon' => 'fa-tags', 'text' => 'All-in Price' ),
        ),
    ),
    array(
        'type'      => 'medium',
        'name'      => 'Georgia Porter',
        'initials'  => 'GP',
        'service'   => 'Travel Vaccinations',
        'quote'     => 'Highly recommend. They were able to see me <span class="testimonial-highlight">really quickly</span>. The guy who did my vaccination was very nice and chatty, as well as <span class="testimonial-highlight">informative</span>.',
        'checklist' => array(
            'Quick Appointment',
            'Informative Staff',
        ),
    ),
    array(
        'type'      => 'medium',
        'name'      => 'Giedrius K.',
        'initials'  => 'GK',
        'service'   => 'Ear Wax Removal',
        'quote'     => 'Very good service... They have looked at my ears, removed wax and discovered that there was an infection... <span class="testimonial-highlight">Very efficient, straight forward and honest</span>.',
        'checklist' => array(
            'Thorough Check',
            'Honest Advice',
        ),
    ),
);

// Try ACF repeater
$testimonials = array();
if ( function_exists( 'have_rows' ) && have_rows( 'testimonials' ) ) {
    $count = 0;
    while ( have_rows( 'testimonials' ) ) {
        the_row();
        $name     = get_sub_field( 'testimonial_name' ) ?: 'Patient';
        $words    = explode( ' ', $name );
        $initials = '';
        foreach ( $words as $word ) {
            $initials .= strtoupper( mb_substr( $word, 0, 1 ) );
        }

        $testimonials[] = array(
            'type'    => $count === 0 ? 'large' : 'medium',
            'name'    => $name,
            'initials' => $initials,
            'service' => get_sub_field( 'testimonial_service' ) ?: '',
            'quote'   => get_sub_field( 'testimonial_quote' ) ?: '',
        );
        $count++;
    }
}

$use_defaults = empty( $testimonials );
if ( $use_defaults ) {
    $testimonials = $default_testimonials;
}
?>

<section class="testimonials-section">
    <div class="section-container">

        <!-- Section header -->
        <div class="testimonials-header">
            <div class="section-badge">
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="testimonials-title">
                <?php echo esc_html( $title_start ); ?> <span class="gradient-text"><?php echo esc_html( $title_highlight ); ?></span>
            </h2>
            <p class="testimonials-description"><?php echo esc_html( $description ); ?></p>
            <div class="testimonials-disclaimer">
                <i class="fas fa-info-circle"></i>
                <p><strong>Transparency Note:</strong> <?php echo esc_html( $disclaimer ); ?></p>
            </div>
        </div>

        <!-- Testimonial grid -->
        <div class="testimonials-grid">

            <?php foreach ( $testimonials as $testimonial ) : ?>

                <?php if ( $testimonial['type'] === 'large' ) : ?>
                    <!-- Large card -->
                    <div class="testimonial-card testimonial-card-large">
                        <div class="testimonial-verified">
                            <i class="fas fa-check-circle"></i>
                            <span>Verified Patient</span>
                        </div>
                        <div class="testimonial-card-body">
                            <div class="star-row star-row-large">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <blockquote class="testimonial-quote testimonial-quote-large">
                                <?php if ( $use_defaults ) : ?>
                                    "<?php echo wp_kses( $testimonial['quote'], array( 'span' => array( 'class' => array() ) ) ); ?>"
                                <?php else : ?>
                                    "<?php echo esc_html( $testimonial['quote'] ); ?>"
                                <?php endif; ?>
                            </blockquote>
                            <div class="testimonial-author-row">
                                <div class="testimonial-avatar testimonial-avatar-large"><?php echo esc_html( $testimonial['initials'] ); ?></div>
                                <div class="testimonial-author-info">
                                    <span class="testimonial-service"><?php echo esc_html( $testimonial['service'] ); ?></span>
                                    <h4 class="testimonial-author-name testimonial-author-name-large"><?php echo esc_html( $testimonial['name'] ); ?></h4>
                                    <p class="testimonial-author-status">Verified Patient</p>
                                </div>
                            </div>
                            <?php if ( ! empty( $testimonial['highlights'] ) ) : ?>
                                <div class="testimonial-highlights">
                                    <?php foreach ( $testimonial['highlights'] as $highlight ) : ?>
                                        <div class="testimonial-highlight-item">
                                            <i class="fas <?php echo esc_attr( $highlight['icon'] ); ?>"></i>
                                            <span><?php echo esc_html( $highlight['text'] ); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php else : ?>
                    <!-- Medium card -->
                    <div class="testimonial-card testimonial-card-medium">
                        <div class="testimonial-verified">
                            <i class="fas fa-check-circle"></i>
                            <span>Verified</span>
                        </div>
                        <div class="testimonial-card-body">
                            <div class="star-row">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <blockquote class="testimonial-quote">
                                <?php if ( $use_defaults ) : ?>
                                    "<?php echo wp_kses( $testimonial['quote'], array( 'span' => array( 'class' => array() ) ) ); ?>"
                                <?php else : ?>
                                    "<?php echo esc_html( $testimonial['quote'] ); ?>"
                                <?php endif; ?>
                            </blockquote>
                            <div class="testimonial-author-row">
                                <div class="testimonial-avatar"><?php echo esc_html( $testimonial['initials'] ); ?></div>
                                <div class="testimonial-author-info">
                                    <span class="testimonial-service"><?php echo esc_html( $testimonial['service'] ); ?></span>
                                    <h4 class="testimonial-author-name"><?php echo esc_html( $testimonial['name'] ); ?></h4>
                                    <p class="testimonial-author-status">Verified Patient</p>
                                </div>
                            </div>
                            <?php if ( ! empty( $testimonial['checklist'] ) ) : ?>
                                <div class="testimonial-checklist">
                                    <?php foreach ( $testimonial['checklist'] as $check_item ) : ?>
                                        <div class="testimonial-check">
                                            <i class="fas fa-check"></i>
                                            <span><?php echo esc_html( $check_item ); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endforeach; ?>

            <!-- CTA Card -->
            <div class="testimonial-card testimonial-card-cta">
                <div class="testimonial-cta-glow"></div>
                <div class="testimonial-cta-body">
                    <div class="testimonial-cta-content">
                        <h3 class="testimonial-cta-title"><?php echo esc_html( $cta_title ); ?></h3>
                        <p class="testimonial-cta-text"><?php echo esc_html( $cta_text ); ?></p>
                    </div>
                    <div class="testimonial-cta-rating">
                        <div class="testimonial-cta-rating-card">
                            <span class="testimonial-cta-score"><?php echo esc_html( $cta_score ); ?></span>
                            <div class="star-row star-row-small">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="testimonial-cta-label">Google Rating</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
