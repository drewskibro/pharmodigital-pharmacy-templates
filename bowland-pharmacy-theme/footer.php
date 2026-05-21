<?php
/**
 * Theme Footer
 *
 * 4-column footer with brand, services, quick links, contact info,
 * certifications bar, bottom bar, and video modal.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$pharmacy_name = bp_pharmacy_name();
$logo_url      = bp_logo_url();
$phone         = bp_phone();
$phone_link    = bp_phone_link();
$email         = bp_option( 'pharmacy_email', 'info@bowlandpharmacy.co.uk' );
$booking_url   = bp_booking_url();

// Address.
$address_line1 = bp_option( 'pharmacy_address_line_1', '52 Bowland Road' );
$address_line2 = bp_option( 'pharmacy_address_line_2', 'Wythenshawe, Manchester M23 1JX' );

// Hours.
$hours_weekday = bp_option( 'hours_weekday', 'Mon-Fri: 9am-6pm' );
$hours_weekend = bp_option( 'hours_saturday', 'Sat: 9am-1pm' );

// Social links.
$facebook_url  = bp_option( 'social_facebook', 'https://facebook.com' );
$instagram_url = bp_option( 'social_instagram', 'https://instagram.com' );
$twitter_url   = bp_option( 'social_twitter', 'https://twitter.com' );
$linkedin_url  = bp_option( 'social_linkedin', 'https://linkedin.com' );

// Registration.
$gphc_number       = bp_option( 'gphc_registration', '1089163' );
$gphc_register_url = bp_option( 'gphc_register_url' ) ?: 'https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/' . $gphc_number;
$company_reg       = bp_option( 'company_registration', '14519140' );
$established       = bp_option( 'established_year', '2009' );

$tagline = bp_option( 'footer_tagline', 'Your trusted partner in health and wellness across Wythenshawe, Manchester, and beyond.' );
?>

  <!-- ============================================
       FOOTER
       Premium footer with gradient background
       ============================================ -->
  <footer class="footer-section">
    <div class="footer-gradient-bg"></div>
    <div class="section-container">

      <!-- Main footer content -->
      <div class="footer-main">

        <!-- Column 1: Brand -->
        <div class="footer-column footer-brand">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
            <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $pharmacy_name ); ?>" class="logo-image" />
          </a>
          <p class="footer-tagline"><?php echo esc_html( $tagline ); ?></p>

          <!-- Social links -->
          <div class="footer-social">
            <?php if ( $facebook_url ) : ?>
            <a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <?php endif; ?>
            <?php if ( $instagram_url ) : ?>
            <a href="<?php echo esc_url( $instagram_url ); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <?php endif; ?>
            <?php if ( $twitter_url ) : ?>
            <a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <?php endif; ?>
            <?php if ( $linkedin_url ) : ?>
            <a href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="LinkedIn">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <?php endif; ?>
          </div>
        </div>

        <!-- Column 2: Services -->
        <div class="footer-column">
          <h3 class="footer-column-title">Our Services</h3>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="footer-link">Weight Loss Treatment</a></li>
            <li><a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="footer-link">Travel Health Clinic</a></li>
            <li><a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>" class="footer-link">Ear Wax Removal</a></li>
            <li><a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>" class="footer-link">Hair Loss Treatment</a></li>
            <li><a href="<?php echo esc_url( home_url( '/nhs-services/' ) ); ?>" class="footer-link">NHS Services</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blood-testing/' ) ); ?>" class="footer-link">Blood Testing</a></li>
            <li><a href="<?php echo esc_url( home_url( '/nhs-services/' ) ); ?>" class="footer-link">Flu Vaccinations</a></li>
          </ul>
        </div>

        <!-- Column 3: Quick Links -->
        <div class="footer-column">
          <h3 class="footer-column-title">Quick Links</h3>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="footer-link">About Us</a></li>
            <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="footer-link">Our Team</a></li>
            <li><a href="<?php echo esc_url( home_url( '/switch-provider/' ) ); ?>" class="footer-link">Switch Provider</a></li>
            <li><a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="footer-link">Health Hub</a></li>
            <li><a href="<?php echo esc_url( $booking_url ); ?>" class="footer-link">Book Appointment</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="footer-link">Contact Us</a></li>
          </ul>
        </div>

        <!-- Column 4: Contact Info -->
        <div class="footer-column">
          <h3 class="footer-column-title">Get in Touch</h3>
          <ul class="footer-contact">
            <li class="footer-contact-item">
              <div class="footer-contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="footer-contact-text">
                <span><?php echo esc_html( $address_line1 ); ?></span>
                <span><?php echo esc_html( $address_line2 ); ?></span>
              </div>
            </li>
            <li class="footer-contact-item">
              <div class="footer-contact-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="footer-contact-text">
                <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>
              </div>
            </li>
            <li class="footer-contact-item">
              <div class="footer-contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="footer-contact-text">
                <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
              </div>
            </li>
            <li class="footer-contact-item">
              <div class="footer-contact-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="footer-contact-text">
                <span><?php echo esc_html( $hours_weekday ); ?></span>
                <span><?php echo esc_html( $hours_weekend ); ?></span>
              </div>
            </li>
          </ul>
        </div>

      </div>

      <!-- Certifications bar -->
      <div class="footer-certifications">
        <a href="<?php echo esc_url( $gphc_register_url ); ?>" class="footer-cert-item footer-cert-link" target="_blank" rel="noopener" title="Verify on the GPhC register">
          <div class="footer-cert-icon">
            <i class="fas fa-shield-halved"></i>
          </div>
          <div class="footer-cert-text">
            <span class="footer-cert-label">GPhC Registered</span>
            <span class="footer-cert-number"><?php echo esc_html( $gphc_number ); ?></span>
          </div>
        </a>
        <div class="footer-cert-divider"></div>
        <div class="footer-cert-item">
          <div class="footer-cert-icon">
            <i class="fas fa-building"></i>
          </div>
          <div class="footer-cert-text">
            <span class="footer-cert-label">Company Reg</span>
            <span class="footer-cert-number"><?php echo esc_html( $company_reg ); ?></span>
          </div>
        </div>
        <div class="footer-cert-divider"></div>
        <div class="footer-cert-item">
          <div class="footer-cert-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <div class="footer-cert-text">
            <span class="footer-cert-label">Established</span>
            <span class="footer-cert-number">Since <?php echo esc_html( $established ); ?></span>
          </div>
        </div>
      </div>

      <!-- Bottom bar -->
      <div class="footer-bottom">
        <div class="footer-bottom-left">
          <p class="footer-copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( $pharmacy_name ); ?>. All rights reserved.</p>
        </div>
        <div class="footer-bottom-right">
          <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="footer-legal-link">Privacy Policy</a>
          <span class="footer-legal-divider">&bull;</span>
          <a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>" class="footer-legal-link">Terms &amp; Conditions</a>
          <span class="footer-legal-divider">&bull;</span>
          <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>" class="footer-legal-link">Cookie Policy</a>
        </div>
      </div>

    </div>
  </footer>

<!-- Video Modal -->
<div class="video-modal" id="videoModal" aria-hidden="true" role="dialog" aria-label="Video player">
  <div class="video-modal-backdrop" onclick="closeVideoModal()"></div>
  <div class="video-modal-container">
    <button class="video-modal-close" onclick="closeVideoModal()" aria-label="Close video">
      <i class="fas fa-times"></i>
    </button>
    <div class="video-modal-player" id="videoModalPlayer"></div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
