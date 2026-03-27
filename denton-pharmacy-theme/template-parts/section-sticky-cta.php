<?php
/**
 * Sticky CTA Bar — Dark Premium
 *
 * Fixed bottom bar that appears after scrolling 30% past the hero section.
 * Dark navy background with glassmorphic buttons and trust chip.
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
        <span class="sticky-cta-title"><?php echo esc_html( dp_field( 'sticky_cta_title', 'Your neighbourhood pharmacy, clinically led' ) ); ?></span>
        <span class="sticky-cta-subtitle"><?php echo esc_html( dp_field( 'sticky_cta_subtitle', 'Expert care, just around the corner' ) ); ?></span>
      </div>
      <div class="sticky-cta-centre">
        <span class="sticky-cta-trust-chip">
          <i class="fas fa-shield-halved"></i>
          <?php echo esc_html( dp_field( 'sticky_cta_trust_text', 'GPhC Registered' ) ); ?>
        </span>
      </div>
      <div class="sticky-cta-buttons">
        <a href="<?php echo esc_url( $booking_url ); ?>" class="sticky-cta-button sticky-cta-primary">
          <i class="fas fa-calendar-check"></i>
          <span><?php echo esc_html( dp_field( 'sticky_cta_button_text', 'Book Now' ) ); ?></span>
        </a>
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="sticky-cta-button sticky-cta-secondary">
          <i class="fas fa-phone"></i>
          <span class="desktop-only">Call: <?php echo esc_html( $phone ); ?></span>
          <span class="mobile-only"><?php echo esc_html( dp_field( 'sticky_cta_call_text', 'Call Us' ) ); ?></span>
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
