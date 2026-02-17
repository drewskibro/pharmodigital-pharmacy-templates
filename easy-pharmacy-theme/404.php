<?php
/**
 * 404 Page Template
 *
 * @package Easy_Pharmacy
 */

get_header();
?>

  <section class="default-page-section" style="padding: 80px 0 80px; text-align: center;">
    <div class="section-container">
      <div class="section-badge">
        <span class="pulse-dot">
          <span></span>
          <span></span>
        </span>
        <span class="section-badge-text">Page Not Found</span>
      </div>

      <h1 style="font-family: 'Syne', sans-serif; font-size: 4rem; font-weight: 800; margin: 1rem 0;">
        <span class="gradient-text">404</span>
      </h1>

      <p style="font-size: 1.125rem; color: #64748b; max-width: 500px; margin: 0 auto 2rem;">
        Sorry, the page you're looking for doesn't exist or has been moved.
      </p>

      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cta-button primary-cta">
          Back to Home
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="<?php echo esc_url( ep_booking_url() ); ?>" class="cta-button secondary-cta">
          Book Appointment
        </a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
