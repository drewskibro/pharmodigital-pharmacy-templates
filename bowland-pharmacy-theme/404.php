<?php
/**
 * 404 Page Template
 *
 * @package Bowland_Pharmacy
 */

get_header();
?>

  <section class="default-page-section" style="padding: 80px 0 80px; text-align: center;">
    <div class="section-container">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
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
        <a href="<?php echo esc_url( bp_booking_url() ); ?>" class="cta-button secondary-cta">
          Book Appointment
        </a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
