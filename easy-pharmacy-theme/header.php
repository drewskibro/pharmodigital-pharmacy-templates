<?php
/**
 * Theme Header
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$pharmacy_name = ep_pharmacy_name();
$logo_url      = ep_logo_url();
$phone         = ep_phone();
$phone_link    = ep_phone_link();
$booking_url   = ep_booking_url();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ============================================
       NAVIGATION
       ============================================ -->
  <nav class="mega-menu-nav">
    <div class="mega-menu-container">

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mega-menu-logo">
        <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $pharmacy_name ); ?>" class="logo-image" />
      </a>

      <ul class="mega-menu-list">
        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="mega-menu-link">
            <span>Weight Loss</span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Treatments</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"><i class="fas fa-syringe"></i> Wegovy (Semaglutide)</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"><i class="fas fa-syringe"></i> Mounjaro (Tirzepatide)</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"><i class="fas fa-syringe"></i> Saxenda (Liraglutide)</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"><i class="fas fa-pills"></i> Orlistat</a></li>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Support</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"><i class="fas fa-circle-info"></i> How It Works</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/switch-provider/' ) ); ?>"><i class="fas fa-arrow-right-arrow-left"></i> Switch Provider</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"><i class="fas fa-tag"></i> Pricing</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"><i class="fas fa-chart-line"></i> Patient Results</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"><i class="fas fa-question-circle"></i> FAQs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <li class="mega-menu-item mega-menu-has-dropdown mega-menu-travel">
          <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="mega-menu-link">
            <span>Travel Health</span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown mega-menu-dropdown-wide">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Vaccinations</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/yellow-fever/' ) ); ?>"><i class="fas fa-shield-virus"></i> Yellow Fever</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/typhoid/' ) ); ?>"><i class="fas fa-syringe"></i> Typhoid</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/hepatitis/' ) ); ?>"><i class="fas fa-syringe"></i> Hepatitis A &amp; B</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/rabies/' ) ); ?>"><i class="fas fa-syringe"></i> Rabies</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/cholera/' ) ); ?>"><i class="fas fa-syringe"></i> Cholera</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/japanese-encephalitis/' ) ); ?>"><i class="fas fa-syringe"></i> Japanese Encephalitis</a></li>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Malaria Prevention</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/malarone/' ) ); ?>"><i class="fas fa-pills"></i> Malarone</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/doxycycline/' ) ); ?>"><i class="fas fa-pills"></i> Doxycycline</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/malaria-advice/' ) ); ?>"><i class="fas fa-circle-info"></i> Malaria Advice</a></li>
                </ul>
                <h3 class="mega-menu-section-title" style="margin-top: 1.5rem;">Resources</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/travel-checklist/' ) ); ?>"><i class="fas fa-clipboard-check"></i> Travel Checklist</a></li>
                  <li><a href="<?php echo esc_url( $booking_url ); ?>"><i class="fas fa-calendar-check"></i> Book Appointment</a></li>
                </ul>
              </div>
              <div class="mega-menu-section mega-menu-destinations">
                <h3 class="mega-menu-section-title">Popular Destinations</h3>
                <ul class="mega-menu-destinations-grid">
                  <li><a href="<?php echo esc_url( home_url( '/travel-thailand/' ) ); ?>" class="mega-menu-destination-card"><img src="https://flagcdn.com/w40/th.png" alt="Thailand" class="mega-menu-flag"><span class="mega-menu-destination-name">Thailand</span></a></li>
                  <li><a href="<?php echo esc_url( home_url( '/travel-india/' ) ); ?>" class="mega-menu-destination-card"><img src="https://flagcdn.com/w40/in.png" alt="India" class="mega-menu-flag"><span class="mega-menu-destination-name">India</span></a></li>
                  <li><a href="<?php echo esc_url( home_url( '/travel-cape-verde/' ) ); ?>" class="mega-menu-destination-card"><img src="https://flagcdn.com/w40/cv.png" alt="Cape Verde" class="mega-menu-flag"><span class="mega-menu-destination-name">Cape Verde</span></a></li>
                  <li><a href="<?php echo esc_url( home_url( '/travel-kenya/' ) ); ?>" class="mega-menu-destination-card"><img src="https://flagcdn.com/w40/ke.png" alt="Kenya" class="mega-menu-flag"><span class="mega-menu-destination-name">Kenya</span></a></li>
                  <li><a href="<?php echo esc_url( home_url( '/travel-brazil/' ) ); ?>" class="mega-menu-destination-card"><img src="https://flagcdn.com/w40/br.png" alt="Brazil" class="mega-menu-flag"><span class="mega-menu-destination-name">Brazil</span></a></li>
                  <li><a href="<?php echo esc_url( home_url( '/travel-vietnam/' ) ); ?>" class="mega-menu-destination-card"><img src="https://flagcdn.com/w40/vn.png" alt="Vietnam" class="mega-menu-flag"><span class="mega-menu-destination-name">Vietnam</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>" class="mega-menu-link">
            <span>Ear Wax Removal</span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Services</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>"><i class="fas fa-stethoscope"></i> Microsuction</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>"><i class="fas fa-droplet"></i> Ear Irrigation</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>"><i class="fas fa-magnifying-glass"></i> Ear Health Check</a></li>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Information</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>"><i class="fas fa-circle-info"></i> Symptoms</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>"><i class="fas fa-tag"></i> Pricing</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>"><i class="fas fa-calendar-check"></i> Book Now</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>" class="mega-menu-link">
            <span>Hair Loss</span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Treatments</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>"><i class="fas fa-pills"></i> Finasteride</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>"><i class="fas fa-spray-can"></i> Minoxidil</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>"><i class="fas fa-layer-group"></i> Combination Therapy</a></li>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Support</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>"><i class="fas fa-user-doctor"></i> Free Consultation</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>"><i class="fas fa-chart-line"></i> Results</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/hair-loss/' ) ); ?>"><i class="fas fa-question-circle"></i> FAQs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <li class="mega-menu-item">
          <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="mega-menu-link">
            <span>Health Hub</span>
          </a>
        </li>

        <li class="mega-menu-item">
          <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="mega-menu-link">
            <span>About</span>
          </a>
        </li>

        <!-- Mobile Only Actions -->
        <li class="mega-menu-item mobile-nav-actions">
          <a href="<?php echo esc_url( $booking_url ); ?>" class="cta-button primary-cta mobile-nav-btn">
            Book Appointment
          </a>
          <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta mobile-nav-btn">
            <i class="fas fa-phone"></i> Call <?php echo esc_html( $phone ); ?>
          </a>
        </li>
      </ul>

      <div class="mega-menu-cta">
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="mega-menu-cta-phone">
          <i class="fas fa-phone"></i>
          <span class="desktop-only"><?php echo esc_html( $phone ); ?></span>
        </a>
        <a href="<?php echo esc_url( $booking_url ); ?>" class="mega-menu-cta-book">
          Book Now
        </a>
      </div>

      <button class="mega-menu-mobile-toggle" onclick="toggleMobileMenu()" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </nav>
