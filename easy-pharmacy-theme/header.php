<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ============================================
       MEGA MENU NAVIGATION
       ============================================ -->
  <nav class="mega-menu-nav">
    <div class="mega-menu-container">

      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="mega-menu-logo">
        <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771250493402-0.png" alt="Easy Pharmacy" class="logo-image" />
      </a>

      <!-- Desktop Menu -->
      <ul class="mega-menu-list">

        <!-- Weight Loss -->
        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="weight-loss.html" class="mega-menu-link">
            <span>Weight Loss</span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Treatments</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="wegovy.html"><i class="fas fa-syringe"></i> Wegovy (Semaglutide)</a></li>
                  <li><a href="mounjaro.html"><i class="fas fa-syringe"></i> Mounjaro (Tirzepatide)</a></li>
                  <li><a href="saxenda.html"><i class="fas fa-syringe"></i> Saxenda (Liraglutide)</a></li>
                  <li><a href="orlistat.html"><i class="fas fa-pills"></i> Orlistat</a></li>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Support</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="how-it-works.html"><i class="fas fa-circle-info"></i> How It Works</a></li>
                  <li><a href="switch-provider.html"><i class="fas fa-arrow-right-arrow-left"></i> Switch Provider</a></li>
                  <li><a href="pricing.html"><i class="fas fa-tag"></i> Pricing</a></li>
                  <li><a href="results.html"><i class="fas fa-chart-line"></i> Patient Results</a></li>
                  <li><a href="faq-weight-loss.html"><i class="fas fa-question-circle"></i> FAQs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <!-- Travel Health -->
        <li class="mega-menu-item mega-menu-has-dropdown mega-menu-travel">
          <a href="travel-health.html" class="mega-menu-link">
            <span>Travel Health</span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown mega-menu-dropdown-wide">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Vaccinations</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="yellow-fever.html"><i class="fas fa-shield-virus"></i> Yellow Fever</a></li>
                  <li><a href="typhoid.html"><i class="fas fa-syringe"></i> Typhoid</a></li>
                  <li><a href="hepatitis.html"><i class="fas fa-syringe"></i> Hepatitis A & B</a></li>
                  <li><a href="rabies.html"><i class="fas fa-syringe"></i> Rabies</a></li>
                  <li><a href="cholera.html"><i class="fas fa-syringe"></i> Cholera</a></li>
                  <li><a href="japanese-encephalitis.html"><i class="fas fa-syringe"></i> Japanese Encephalitis</a></li>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Malaria Prevention</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="malarone.html"><i class="fas fa-pills"></i> Malarone</a></li>
                  <li><a href="doxycycline.html"><i class="fas fa-pills"></i> Doxycycline</a></li>
                  <li><a href="malaria-advice.html"><i class="fas fa-circle-info"></i> Malaria Advice</a></li>
                </ul>
                <h3 class="mega-menu-section-title" style="margin-top: 1.5rem;">Resources</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="travel-checklist.html"><i class="fas fa-clipboard-check"></i> Travel Checklist</a></li>
                  <li><a href="book-travel-clinic.html"><i class="fas fa-calendar-check"></i> Book Appointment</a></li>
                </ul>
              </div>
              <div class="mega-menu-section mega-menu-destinations">
                <h3 class="mega-menu-section-title">Popular Destinations</h3>
                <ul class="mega-menu-destinations-grid">
                  <li>
                    <a href="travel-thailand.html" class="mega-menu-destination-card">
                      <img src="https://flagcdn.com/w40/th.png" alt="Thailand" class="mega-menu-flag">
                      <span class="mega-menu-destination-name">Thailand</span>
                    </a>
                  </li>
                  <li>
                    <a href="travel-india.html" class="mega-menu-destination-card">
                      <img src="https://flagcdn.com/w40/in.png" alt="India" class="mega-menu-flag">
                      <span class="mega-menu-destination-name">India</span>
                    </a>
                  </li>
                  <li>
                    <a href="travel-cape-verde.html" class="mega-menu-destination-card">
                      <img src="https://flagcdn.com/w40/cv.png" alt="Cape Verde" class="mega-menu-flag">
                      <span class="mega-menu-destination-name">Cape Verde</span>
                    </a>
                  </li>
                  <li>
                    <a href="travel-kenya.html" class="mega-menu-destination-card">
                      <img src="https://flagcdn.com/w40/ke.png" alt="Kenya" class="mega-menu-flag">
                      <span class="mega-menu-destination-name">Kenya</span>
                    </a>
                  </li>
                  <li>
                    <a href="travel-brazil.html" class="mega-menu-destination-card">
                      <img src="https://flagcdn.com/w40/br.png" alt="Brazil" class="mega-menu-flag">
                      <span class="mega-menu-destination-name">Brazil</span>
                    </a>
                  </li>
                  <li>
                    <a href="travel-vietnam.html" class="mega-menu-destination-card">
                      <img src="https://flagcdn.com/w40/vn.png" alt="Vietnam" class="mega-menu-flag">
                      <span class="mega-menu-destination-name">Vietnam</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <!-- Ear Wax Removal -->
        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="ear-wax-removal.html" class="mega-menu-link">
            <span>Ear Wax Removal</span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Services</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="microsuction.html"><i class="fas fa-stethoscope"></i> Microsuction</a></li>
                  <li><a href="ear-irrigation.html"><i class="fas fa-droplet"></i> Ear Irrigation</a></li>
                  <li><a href="ear-health-check.html"><i class="fas fa-magnifying-glass"></i> Ear Health Check</a></li>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Information</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="ear-wax-symptoms.html"><i class="fas fa-circle-info"></i> Symptoms</a></li>
                  <li><a href="ear-wax-pricing.html"><i class="fas fa-tag"></i> Pricing</a></li>
                  <li><a href="book-ear-wax.html"><i class="fas fa-calendar-check"></i> Book Now</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <!-- Hair Loss -->
        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="hair-loss.html" class="mega-menu-link">
            <span>Hair Loss</span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Treatments</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="finasteride.html"><i class="fas fa-pills"></i> Finasteride</a></li>
                  <li><a href="minoxidil.html"><i class="fas fa-spray-can"></i> Minoxidil</a></li>
                  <li><a href="combination-therapy.html"><i class="fas fa-layer-group"></i> Combination Therapy</a></li>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Support</h3>
                <ul class="mega-menu-section-links">
                  <li><a href="hair-loss-consultation.html"><i class="fas fa-user-doctor"></i> Free Consultation</a></li>
                  <li><a href="hair-loss-results.html"><i class="fas fa-chart-line"></i> Results</a></li>
                  <li><a href="hair-loss-faq.html"><i class="fas fa-question-circle"></i> FAQs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <!-- About -->
        <li class="mega-menu-item">
          <a href="team.html" class="mega-menu-link">
            <span>About</span>
          </a>
        </li>

      </ul>

      <!-- CTA Buttons -->
      <div class="mega-menu-cta">
        <a href="tel:01784255222" class="mega-menu-cta-phone">
          <i class="fas fa-phone"></i>
          <span class="desktop-only">01784 255 222</span>
        </a>
        <a href="book-appointment.html" class="mega-menu-cta-book">
          Book Now
        </a>
      </div>

      <!-- Mobile Toggle -->
      <button class="mega-menu-mobile-toggle" onclick="toggleMobileMenu()" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </nav>
