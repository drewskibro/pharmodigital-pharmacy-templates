<?php
/**
 * Template Name: Contact Us
 * @package Bowland_Pharmacy
 */

get_header();

// --- Global data used across sections ---
$phone         = bp_phone();
$phone_link    = bp_phone_link();
$email         = bp_option( 'pharmacy_email', 'info@dentonpharmacy.co.uk' );
$addr_line_1   = bp_option( 'pharmacy_address_line_1', '14-16 Ashton Road' );
$addr_line_2   = bp_option( 'pharmacy_address_line_2', 'Denton, Manchester' );
$addr_line_3   = bp_option( 'pharmacy_address_line_3', 'M34 3EX' );
$directions_url = bp_option( 'pharmacy_directions_url' );
$hours_weekday  = bp_option( 'hours_weekday', '9:00am – 6:00pm' );
$hours_saturday = bp_option( 'hours_saturday', '9:00am – 1:00pm' );
$hours_sunday   = bp_option( 'hours_sunday', 'Closed' );
$booking_url    = bp_booking_url();
$parking        = bp_option( 'pharmacy_parking', 'Free customer parking available nearby.' );
?>

<!-- ============================================
     SECTION 1: CONTACT FORM + MAP (HERO)
     ============================================ -->
<section class="contact-form-section contact-form-hero" id="contact-form">
  <div class="contact-hero-blob-1"></div>
  <div class="contact-hero-blob-2"></div>
  <div class="contact-hero-dots"></div>

  <div class="section-container">
    <div class="contact-form-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'contact_hero_badge', 'GET IN TOUCH' ) ); ?></span>
      </div>
      <h1 class="contact-form-title"><?php echo esc_html( bp_field( 'contact_hero_title_line1', 'Contact' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'contact_hero_title_highlight', bp_pharmacy_name() ) ); ?></span></h1>
      <p class="contact-form-subtitle"><?php echo esc_html( bp_field( 'contact_hero_description', 'Have a question about our services? Need to book an appointment or get advice? We\'re here to help. Reach out to our friendly team and we\'ll get back to you as soon as possible.' ) ); ?></p>
    </div>

    <div class="contact-form-grid">
      <!-- Form -->
      <div class="contact-form-wrapper">
        <form id="dp-contact-form" class="contact-form" novalidate>
          <?php wp_nonce_field( 'bp_contact_form_nonce', 'bp_contact_nonce' ); ?>

          <div class="contact-form-row">
            <div class="contact-form-group">
              <label for="contact-name">Full Name <span class="contact-required">*</span></label>
              <input type="text" id="contact-name" name="contact_name" required placeholder="Your full name" />
            </div>
            <div class="contact-form-group">
              <label for="contact-email">Email Address <span class="contact-required">*</span></label>
              <input type="email" id="contact-email" name="contact_email" required placeholder="your@email.com" />
            </div>
          </div>

          <div class="contact-form-row">
            <div class="contact-form-group">
              <label for="contact-phone">Phone Number</label>
              <input type="tel" id="contact-phone" name="contact_phone" placeholder="07xxx xxxxxx" />
            </div>
            <div class="contact-form-group">
              <label for="contact-subject">Subject <span class="contact-required">*</span></label>
              <select id="contact-subject" name="contact_subject" required>
                <option value="">Select a subject...</option>
                <option value="General Enquiry">General Enquiry</option>
                <option value="Appointment Booking">Appointment Booking</option>
                <option value="Prescription Query">Prescription Query</option>
                <option value="Weight Loss Consultation">Weight Loss Consultation</option>
                <option value="Travel Health">Travel Health</option>
                <option value="Ear Wax Removal">Ear Wax Removal</option>
                <option value="NHS Services">NHS Services</option>
                <option value="Feedback">Feedback</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div class="contact-form-group contact-form-full">
            <label for="contact-message">Message <span class="contact-required">*</span></label>
            <textarea id="contact-message" name="contact_message" rows="5" required placeholder="How can we help you?"></textarea>
          </div>

          <!-- Honeypot -->
          <div class="contact-form-hp" aria-hidden="true">
            <input type="text" name="contact_website" tabindex="-1" autocomplete="off" />
          </div>

          <div class="contact-form-footer">
            <button type="submit" class="cta-button primary-cta contact-submit-btn" id="contact-submit">
              <span class="contact-submit-text">
                <i class="fas fa-paper-plane"></i>
                Send Message
              </span>
              <span class="contact-submit-loading" style="display:none;">
                <i class="fas fa-spinner fa-spin"></i>
                Sending...
              </span>
            </button>
            <p class="contact-form-disclaimer">We respect your privacy. Your information will only be used to respond to your enquiry.</p>
          </div>

          <div class="contact-form-status" id="contact-form-status" role="alert"></div>
        </form>
      </div>

      <!-- Map -->
      <div class="contact-map-wrapper">
        <?php
        $maps_embed_url = bp_option( 'location_google_maps_embed' );
        if ( ! $maps_embed_url ) {
            $full_address   = $addr_line_1 . ', ' . $addr_line_2 . ', ' . $addr_line_3;
            $maps_embed_url = 'https://maps.google.com/maps?q=' . rawurlencode( $full_address ) . '&t=&z=15&ie=UTF8&iwloc=&output=embed';
        }
        ?>
        <iframe
          class="contact-map-iframe"
          src="<?php echo esc_url( $maps_embed_url ); ?>"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="<?php echo esc_attr( bp_pharmacy_name() . ' location map' ); ?>"
        ></iframe>
        <div class="contact-map-info">
          <div class="contact-map-info-item">
            <i class="fas fa-square-parking"></i>
            <span><?php echo esc_html( $parking ); ?></span>
          </div>
          <a href="<?php echo esc_url( $directions_url ? $directions_url : 'https://maps.google.com/?q=' . rawurlencode( $addr_line_1 . ', ' . $addr_line_2 . ', ' . $addr_line_3 ) ); ?>" target="_blank" rel="noopener noreferrer" class="contact-map-directions">
            <i class="fas fa-diamond-turn-right"></i>
            Get Directions
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 4: FAQ
     ============================================ -->
<section class="contact-faq-section">
  <div class="section-container">
    <div class="contact-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'contact_faq_badge', 'COMMON QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="contact-faq-title"><?php echo esc_html( bp_field( 'contact_faq_title', 'Frequently Asked Questions' ) ); ?></h2>
    </div>

    <div class="contact-faq-list">
      <?php if ( have_rows( 'contact_faqs' ) ) : $faq_num = 0; while ( have_rows( 'contact_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="contact-faq-item">
          <button class="contact-faq-question" onclick="toggleContactFAQ(this)" aria-expanded="false">
            <span class="contact-faq-number"><?php echo esc_html( $faq_num ); ?></span>
            <span class="contact-faq-question-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <span class="contact-faq-toggle"><i class="fas fa-plus"></i></span>
          </button>
          <div class="contact-faq-answer">
            <p><?php echo wp_kses_post( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <!-- Default FAQs -->
        <div class="contact-faq-item">
          <button class="contact-faq-question" onclick="toggleContactFAQ(this)" aria-expanded="false">
            <span class="contact-faq-number">1</span>
            <span class="contact-faq-question-text">What are your opening hours?</span>
            <span class="contact-faq-toggle"><i class="fas fa-plus"></i></span>
          </button>
          <div class="contact-faq-answer">
            <p>We're open Monday to Friday <?php echo esc_html( $hours_weekday ); ?>, Saturday <?php echo esc_html( $hours_saturday ); ?>, and Sunday <?php echo esc_html( $hours_sunday ); ?>. For bank holiday hours, please call us or check our social media pages.</p>
          </div>
        </div>
        <div class="contact-faq-item">
          <button class="contact-faq-question" onclick="toggleContactFAQ(this)" aria-expanded="false">
            <span class="contact-faq-number">2</span>
            <span class="contact-faq-question-text">Do I need an appointment?</span>
            <span class="contact-faq-toggle"><i class="fas fa-plus"></i></span>
          </button>
          <div class="contact-faq-answer">
            <p>For most NHS services such as prescription collection and over-the-counter advice, no appointment is needed. For private clinical services including weight loss consultations, travel vaccinations, and ear wax removal, we recommend booking in advance to secure your preferred time.</p>
          </div>
        </div>
        <div class="contact-faq-item">
          <button class="contact-faq-question" onclick="toggleContactFAQ(this)" aria-expanded="false">
            <span class="contact-faq-number">3</span>
            <span class="contact-faq-question-text">Where can I park?</span>
            <span class="contact-faq-toggle"><i class="fas fa-plus"></i></span>
          </button>
          <div class="contact-faq-answer">
            <p><?php echo esc_html( $parking ); ?> We're also easily accessible by public transport, with bus stops nearby on <?php echo esc_html( $addr_line_1 ); ?>.</p>
          </div>
        </div>
        <div class="contact-faq-item">
          <button class="contact-faq-question" onclick="toggleContactFAQ(this)" aria-expanded="false">
            <span class="contact-faq-number">4</span>
            <span class="contact-faq-question-text">How do I switch my prescriptions to <?php echo esc_html( bp_pharmacy_name() ); ?>?</span>
            <span class="contact-faq-toggle"><i class="fas fa-plus"></i></span>
          </button>
          <div class="contact-faq-answer">
            <p>Switching is easy and free. Simply visit us in store or call us, and we'll handle the entire transfer process with your GP. There's no paperwork for you to fill out and no gap in your medication supply. You can also <a href="<?php echo esc_url( home_url( '/switch-provider/' ) ); ?>">learn more about switching</a>.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 5: FINAL CTA
     ============================================ -->
<section class="contact-cta-section">
  <div class="contact-cta-blob-1"></div>
  <div class="contact-cta-blob-2"></div>
  <div class="contact-cta-dots"></div>

  <div class="section-container">
    <div class="contact-cta-content">
      <div class="contact-cta-badges">
        <span class="contact-cta-badge"><?php echo esc_html( bp_field( 'contact_cta_badge_1', 'GPhC Registered' ) ); ?></span>
        <span class="contact-cta-badge"><?php echo esc_html( bp_field( 'contact_cta_badge_2', 'Same-Day Appointments' ) ); ?></span>
        <span class="contact-cta-badge"><?php echo esc_html( bp_field( 'contact_cta_badge_3', 'Free Parking' ) ); ?></span>
      </div>

      <h2 class="contact-cta-title"><?php echo esc_html( bp_field( 'contact_cta_title', 'Ready to Visit ' . bp_pharmacy_name() . '?' ) ); ?></h2>
      <p class="contact-cta-description"><?php echo esc_html( bp_field( 'contact_cta_description', 'Whether you need expert health advice, a prescription, or a private consultation, our team is ready to help. Book online or pop into the pharmacy today.' ) ); ?></p>

      <div class="contact-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'contact_cta_url', $booking_url ) ); ?>" class="cta-button primary-cta contact-cta-button-white">
          <i class="fas fa-calendar-check"></i>
          <?php echo esc_html( bp_field( 'contact_cta_button_text', 'Book Consultation' ) ); ?>
        </a>
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta contact-cta-button-outline">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( $phone ); ?>
        </a>
      </div>

      <div class="contact-cta-trust-row">
        <div class="contact-cta-trust-item"><i class="fas fa-check-circle"></i><span><?php echo esc_html( bp_field( 'contact_cta_check_1', 'No referral needed' ) ); ?></span></div>
        <div class="contact-cta-trust-item"><i class="fas fa-check-circle"></i><span><?php echo esc_html( bp_field( 'contact_cta_check_2', 'Expert guidance' ) ); ?></span></div>
        <div class="contact-cta-trust-item"><i class="fas fa-check-circle"></i><span><?php echo esc_html( bp_field( 'contact_cta_check_3', '15+ years serving ' . bp_option( 'pharmacy_town', 'Denton' ) ) ); ?></span></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
