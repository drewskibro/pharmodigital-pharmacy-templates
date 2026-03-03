<?php
/**
 * Template Part: Quick Book Section
 *
 * Two-column layout: left headline + trust checks, right Quick Book card.
 * Used on the homepage after How It Works.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Left column fields
$badge_text  = ep_field( 'qb_badge_text', 'Book Online' );
$title_line1 = ep_field( 'qb_title_line_1', 'Ready to' );
$title_line2 = ep_field( 'qb_title_line_2', 'Get Started?' );
$description = ep_field( 'qb_description', 'Choose your service and book a time that works for you. Our expert team is ready to help — whether it\'s a face-to-face consultation or a quick prescription pickup.' );

// Trust checks
$trust_1 = ep_field( 'qb_trust_1', 'Same-day appointments often available' );
$trust_2 = ep_field( 'qb_trust_2', 'GPhC registered pharmacy' );
$trust_3 = ep_field( 'qb_trust_3', 'Free parking on site' );
$trust_4 = ep_field( 'qb_trust_4', 'No obligation — cancel anytime' );

// Right column (Quick Book card) fields
$qb_heading      = ep_field( 'qb_card_heading', 'Book Your Visit' );
$qb_available    = ep_field( 'qb_card_available', 'Same-day appointments available' );
$qb_svc_label    = ep_field( 'qb_card_services_label', 'Choose a service to get started:' );
$qb_cta_text     = ep_field( 'qb_card_cta_text', 'View All Services' );
$qb_hours        = ep_field( 'qb_card_hours', 'Mon–Fri: 9am – 6pm' );
$qb_confirm      = ep_field( 'qb_card_confirm', 'Instant confirmation' );
$qb_float_badge  = ep_field( 'qb_card_floating_badge', 'Free Parking Available' );

$booking_url = ep_booking_url();
?>

<section class="qb-section">
  <div class="qb-blob-1"></div>
  <div class="qb-blob-2"></div>

  <div class="section-container">
    <div class="qb-grid">

      <!-- LEFT: Headline + Trust Checks -->
      <div class="qb-left">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
        </div>

        <h2 class="qb-title">
          <span><?php echo esc_html( $title_line1 ); ?></span>
          <span class="gradient-text"><?php echo esc_html( $title_line2 ); ?></span>
        </h2>

        <p class="qb-description"><?php echo esc_html( $description ); ?></p>

        <ul class="qb-trust-list">
          <?php foreach ( array( $trust_1, $trust_2, $trust_3, $trust_4 ) as $check ) : ?>
            <?php if ( $check ) : ?>
              <li class="qb-trust-item">
                <i class="fas fa-check-circle"></i>
                <span><?php echo esc_html( $check ); ?></span>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>

        <a href="<?php echo esc_url( $booking_url ); ?>" class="cta-button secondary-cta qb-left-cta">
          <i class="fas fa-phone"></i>
          Or call <?php echo esc_html( ep_phone() ); ?>
        </a>
      </div>

      <!-- RIGHT: Quick Book Card -->
      <div class="qb-right">
        <div class="qb-card">

          <!-- Header -->
          <div class="qb-card-header">
            <div class="qb-card-icon-circle">
              <i class="fas fa-calendar-check"></i>
            </div>
            <div>
              <h3 class="qb-card-heading"><?php echo esc_html( $qb_heading ); ?></h3>
              <div class="qb-card-available">
                <span class="pulse-dot"><span></span><span></span></span>
                <span><?php echo esc_html( $qb_available ); ?></span>
              </div>
            </div>
          </div>

          <!-- Divider -->
          <div class="qb-card-divider"></div>

          <!-- Service quick-select -->
          <p class="qb-card-services-label"><?php echo esc_html( $qb_svc_label ); ?></p>

          <div class="qb-card-service-grid">
            <?php if ( have_rows( 'qb_card_services' ) ) : while ( have_rows( 'qb_card_services' ) ) : the_row(); ?>
              <a href="<?php echo esc_url( $booking_url ); ?>" class="qb-card-service">
                <div class="qb-card-service-icon">
                  <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
                </div>
                <span><?php echo esc_html( get_sub_field( 'label' ) ); ?></span>
              </a>
            <?php endwhile; else : ?>
              <a href="<?php echo esc_url( $booking_url ); ?>" class="qb-card-service">
                <div class="qb-card-service-icon"><i class="fas fa-weight-scale"></i></div>
                <span>Weight Loss</span>
              </a>
              <a href="<?php echo esc_url( $booking_url ); ?>" class="qb-card-service">
                <div class="qb-card-service-icon"><i class="fas fa-plane-departure"></i></div>
                <span>Travel Health</span>
              </a>
              <a href="<?php echo esc_url( $booking_url ); ?>" class="qb-card-service">
                <div class="qb-card-service-icon"><i class="fas fa-ear-listen"></i></div>
                <span>Ear Wax Removal</span>
              </a>
              <a href="<?php echo esc_url( $booking_url ); ?>" class="qb-card-service">
                <div class="qb-card-service-icon"><i class="fas fa-syringe"></i></div>
                <span>Vaccinations</span>
              </a>
            <?php endif; ?>
          </div>

          <!-- Main CTA -->
          <a href="<?php echo esc_url( $booking_url ); ?>" class="cta-button primary-cta qb-card-cta">
            <?php echo esc_html( $qb_cta_text ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>

          <!-- Footer info -->
          <div class="qb-card-footer">
            <div class="qb-card-footer-item">
              <i class="fas fa-clock"></i>
              <span><?php echo esc_html( $qb_hours ); ?></span>
            </div>
            <div class="qb-card-footer-item">
              <i class="fas fa-bolt"></i>
              <span><?php echo esc_html( $qb_confirm ); ?></span>
            </div>
          </div>

          <!-- Terracotta accent bar at top -->
        </div>

        <!-- Floating trust badge -->
        <div class="qb-floating-badge">
          <i class="fas fa-square-parking"></i>
          <span><?php echo esc_html( $qb_float_badge ); ?></span>
        </div>
      </div>

    </div>
  </div>
</section>
