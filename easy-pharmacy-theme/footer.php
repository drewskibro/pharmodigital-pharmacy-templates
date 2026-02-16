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
          <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">
            <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771250493402-0.png" alt="Easy Pharmacy" class="logo-image" />
          </a>
          <p class="footer-tagline">Your trusted partner in health and wellness across Ashford, Chertsey, and beyond.</p>

          <!-- Social links -->
          <div class="footer-social">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="LinkedIn">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>

        <!-- Column 2: Services -->
        <div class="footer-column">
          <h3 class="footer-column-title">Our Services</h3>
          <ul class="footer-links">
            <li><a href="weight-loss.html" class="footer-link">Weight Loss Treatment</a></li>
            <li><a href="travel-health.html" class="footer-link">Travel Health Clinic</a></li>
            <li><a href="ear-wax-removal.html" class="footer-link">Ear Wax Removal</a></li>
            <li><a href="hair-loss.html" class="footer-link">Hair Loss Treatment</a></li>
            <li><a href="smoking-cessation.html" class="footer-link">Smoking Cessation</a></li>
            <li><a href="flu-jab.html" class="footer-link">Flu Vaccinations</a></li>
          </ul>
        </div>

        <!-- Column 3: Quick Links -->
        <div class="footer-column">
          <h3 class="footer-column-title">Quick Links</h3>
          <ul class="footer-links">
            <li><a href="team.html" class="footer-link">About Us</a></li>
            <li><a href="team.html" class="footer-link">Our Team</a></li>
            <li><a href="reviews.html" class="footer-link">Patient Reviews</a></li>
            <li><a href="blog.html" class="footer-link">Health Hub</a></li>
            <li><a href="faq.html" class="footer-link">FAQs</a></li>
            <li><a href="contact.html" class="footer-link">Contact Us</a></li>
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
                <span>123 High Street</span>
                <span>Ashford, Surrey TW15 1AB</span>
              </div>
            </li>
            <li class="footer-contact-item">
              <div class="footer-contact-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="footer-contact-text">
                <a href="tel:01784255222">01784 255 222</a>
              </div>
            </li>
            <li class="footer-contact-item">
              <div class="footer-contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="footer-contact-text">
                <a href="mailto:hello@easypharmacy.co.uk">hello@easypharmacy.co.uk</a>
              </div>
            </li>
            <li class="footer-contact-item">
              <div class="footer-contact-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="footer-contact-text">
                <span>Mon-Fri: 9am-6pm</span>
                <span>Sat: 9am-1pm</span>
              </div>
            </li>
          </ul>
        </div>

      </div>

      <!-- Certifications bar -->
      <div class="footer-certifications">
        <div class="footer-cert-item">
          <div class="footer-cert-icon">
            <i class="fas fa-shield-halved"></i>
          </div>
          <div class="footer-cert-text">
            <span class="footer-cert-label">GPhC Registered</span>
            <span class="footer-cert-number">1091169</span>
          </div>
        </div>
        <div class="footer-cert-divider"></div>
        <div class="footer-cert-item">
          <div class="footer-cert-icon">
            <i class="fas fa-building"></i>
          </div>
          <div class="footer-cert-text">
            <span class="footer-cert-label">Company Reg</span>
            <span class="footer-cert-number">06703027</span>
          </div>
        </div>
        <div class="footer-cert-divider"></div>
        <div class="footer-cert-item">
          <div class="footer-cert-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <div class="footer-cert-text">
            <span class="footer-cert-label">Established</span>
            <span class="footer-cert-number">Since 2008</span>
          </div>
        </div>
      </div>

      <!-- Bottom bar -->
      <div class="footer-bottom">
        <div class="footer-bottom-left">
          <p class="footer-copyright">&copy; <?php echo date('Y'); ?> Easy Pharmacy. All rights reserved.</p>
        </div>
        <div class="footer-bottom-right">
          <a href="privacy-policy.html" class="footer-legal-link">Privacy Policy</a>
          <span class="footer-legal-divider">&bull;</span>
          <a href="terms-conditions.html" class="footer-legal-link">Terms &amp; Conditions</a>
          <span class="footer-legal-divider">&bull;</span>
          <a href="cookie-policy.html" class="footer-legal-link">Cookie Policy</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Mobile Menu JavaScript -->
  <script>
    function toggleMobileMenu() {
      const menuList = document.querySelector('.mega-menu-list');
      menuList.classList.toggle('mobile-open');
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
      const nav = document.querySelector('.mega-menu-nav');
      const toggle = document.querySelector('.mega-menu-mobile-toggle');
      const menuList = document.querySelector('.mega-menu-list');

      if (!nav.contains(event.target) && menuList.classList.contains('mobile-open')) {
        menuList.classList.remove('mobile-open');
      }
    });

    // Handle mobile dropdown toggles
    document.querySelectorAll('.mega-menu-has-dropdown > .mega-menu-link').forEach(link => {
      link.addEventListener('click', function(e) {
        if (window.innerWidth < 1024) {
          e.preventDefault();
          const parent = this.parentElement;
          parent.classList.toggle('mobile-dropdown-open');
        }
      });
    });

    // Add scroll effect to nav
    window.addEventListener('scroll', function() {
      const nav = document.querySelector('.mega-menu-nav');
      if (window.scrollY > 50) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    });
  </script>

  <?php wp_footer(); ?>

</body>
</html>
