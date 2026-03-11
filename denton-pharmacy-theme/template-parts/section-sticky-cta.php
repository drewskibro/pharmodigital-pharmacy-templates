<?php
/**
 * Sticky CTA Bar
 *
 * Fixed bottom bar that appears after scrolling 30% past the hero section.
 * Includes a "Book Now" button and a phone call button.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$phone      = dp_phone();
$phone_link = dp_phone_link();
$booking_url = dp_booking_url();
?>

  <!-- ============================================
       STICKY CTA BAR
       ============================================ -->
  <div class="sticky-cta-bar" id="stickyCTA">
    <div class="sticky-cta-content">
      <div class="sticky-cta-text">
        <span class="sticky-cta-title">Ready to Transform Your Health?</span>
        <span class="sticky-cta-subtitle">Book your consultation today</span>
      </div>
      <div class="sticky-cta-buttons">
        <a href="<?php echo esc_url( $booking_url ); ?>" class="sticky-cta-button sticky-cta-primary">
          <i class="fas fa-calendar-check"></i>
          <span>Book Now</span>
        </a>
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="sticky-cta-button sticky-cta-secondary">
          <i class="fas fa-phone"></i>
          <span class="desktop-only">Call: <?php echo esc_html( $phone ); ?></span>
          <span class="mobile-only">Call Us</span>
        </a>
      </div>
    </div>
    <button class="sticky-cta-close" id="stickyCTAClose" aria-label="Close sticky bar">
      <i class="fas fa-times"></i>
    </button>
  </div>

  <script>
  (function() {
    var stickyBar  = document.getElementById('stickyCTA');
    var closeBtn   = document.getElementById('stickyCTAClose');
    var hasShown   = false;
    var isClosed   = false;

    if (!stickyBar) return;

    window.addEventListener('scroll', function() {
      var heroSection = document.querySelector('.hero-section');
      if (!heroSection || isClosed) return;

      var scrollPosition = window.scrollY;
      var heroHeight     = heroSection.offsetHeight;

      if (scrollPosition > heroHeight * 0.3 && !hasShown) {
        stickyBar.classList.add('sticky-cta-visible');
        stickyBar.classList.remove('sticky-cta-hidden');
        hasShown = true;
      }
    }, { passive: true });

    if (closeBtn) {
      closeBtn.addEventListener('click', function() {
        stickyBar.classList.remove('sticky-cta-visible');
        stickyBar.classList.add('sticky-cta-hidden');
        isClosed = true;
      });
    }
  })();
  </script>
