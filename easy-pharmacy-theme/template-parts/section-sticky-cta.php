<?php
/**
 * Template Part: Sticky CTA Bar
 *
 * Fixed bottom bar that appears after scrolling past the hero section.
 * Includes booking link, phone number, and close functionality.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ACF fields with defaults
$cta_title    = ep_field( 'sticky_cta_title', 'Ready to Transform Your Health?' );
$cta_subtitle = ep_field( 'sticky_cta_subtitle', 'Book your consultation today' );
$book_text    = ep_field( 'sticky_cta_book_text', 'Book Now' );
$book_url     = ep_field( 'sticky_cta_book_url', ep_booking_url() );
$phone        = ep_phone();
$phone_link   = ep_phone_link();
?>

<div class="sticky-cta-bar" id="stickyCTA">
    <div class="sticky-cta-content">
        <div class="sticky-cta-text">
            <span class="sticky-cta-title"><?php echo esc_html( $cta_title ); ?></span>
            <span class="sticky-cta-subtitle"><?php echo esc_html( $cta_subtitle ); ?></span>
        </div>
        <div class="sticky-cta-buttons">
            <a href="<?php echo esc_url( $book_url ); ?>" class="sticky-cta-button sticky-cta-primary">
                <i class="fas fa-calendar-check"></i>
                <span><?php echo esc_html( $book_text ); ?></span>
            </a>
            <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="sticky-cta-button sticky-cta-secondary">
                <i class="fas fa-phone"></i>
                <span class="desktop-only">Call: <?php echo esc_html( $phone ); ?></span>
                <span class="mobile-only">Call Us</span>
            </a>
        </div>
    </div>
    <button class="sticky-cta-close" onclick="closeStickyCTA()" aria-label="Close sticky bar">
        <i class="fas fa-times"></i>
    </button>
</div>

<!-- Sticky CTA JavaScript -->
<script>
    // Show sticky CTA after scrolling past hero
    (function() {
        var stickyBar = document.getElementById('stickyCTA');
        var hasShown = false;

        window.addEventListener('scroll', function() {
            var heroSection = document.querySelector('.hero-section');
            if (!heroSection || !stickyBar) return;

            var scrollPosition = window.scrollY;
            var heroHeight = heroSection.offsetHeight;

            if (scrollPosition > heroHeight * 0.7 && !hasShown) {
                stickyBar.classList.add('sticky-cta-visible');
                hasShown = true;
            }
        });

        // Close sticky CTA
        window.closeStickyCTA = function() {
            if (stickyBar) {
                stickyBar.classList.remove('sticky-cta-visible');
                stickyBar.classList.add('sticky-cta-hidden');
            }
        };
    })();
</script>
