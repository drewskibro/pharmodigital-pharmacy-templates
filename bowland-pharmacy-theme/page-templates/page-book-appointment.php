<?php
/**
 * Template Name: Book Appointment
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- ============================================
     HERO SECTION — Pattern B (Dark/Gradient)
     ============================================ -->
<section class="book-hero-section">
  <div class="book-hero-gradient"></div>
  <div class="book-hero-dots"></div>
  <div class="book-hero-glow-1"></div>
  <div class="book-hero-glow-2"></div>

  <div class="section-container">
    <div class="book-hero-grid">

      <!-- Left: Content -->
      <div class="book-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('book_hero_badge', 'ONLINE BOOKING AVAILABLE')); ?></span>
        </div>

        <h1 class="book-hero-title">
          <?php echo wp_kses_post(bp_field('book_hero_title', 'Book Your <br /><span class="gradient-text">Appointment</span>')); ?>
        </h1>

        <p class="book-hero-description">
          <?php echo esc_html(bp_field('book_hero_description', 'Choose your service below and find a time that suits you with our expert Denton team. Same-day appointments often available.')); ?>
        </p>

        <div class="book-hero-actions">
          <button onclick="scrollToBooking()" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('book_hero_cta_text', 'Book Now')); ?>
            <i class="fas fa-arrow-right"></i>
          </button>
          <a href="tel:<?php echo esc_attr(bp_phone_link()); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_phone()); ?>
          </a>
        </div>

        <!-- Trust Pills -->
        <div class="book-hero-trust-row">
          <?php if (have_rows('book_hero_trust_pills')) : while (have_rows('book_hero_trust_pills')) : the_row(); ?>
            <div class="book-hero-trust-pill">
              <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
              <span><?php echo esc_html(get_sub_field('text')); ?></span>
            </div>
          <?php endwhile; else : ?>
            <div class="book-hero-trust-pill"><i class="fas fa-check-circle"></i><span>Face-to-face Care</span></div>
            <div class="book-hero-trust-pill"><i class="fas fa-shield-halved"></i><span>GPhC Registered</span></div>
            <div class="book-hero-trust-pill"><i class="fas fa-calendar-check"></i><span>Instant Confirmation</span></div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Right: Rotated Image Card with Floating Testimonial -->
      <div class="book-hero-visual">
        <div class="book-hero-image-card">
          <div class="book-hero-image-inner">
            <?php
            $hero_image_id = bp_field('book_hero_image');
            if ( ! $hero_image_id ) {
                $hero_image_id = bp_option('pharmacist_photo');
            }
            $hero_image_url = $hero_image_id ? wp_get_attachment_image_url($hero_image_id, 'large') : '';
            ?>
            <?php if ($hero_image_url) : ?>
              <img src="<?php echo esc_url($hero_image_url); ?>" alt="<?php echo esc_attr(bp_pharmacy_name()); ?> Pharmacist" class="book-hero-image" />
            <?php endif; ?>
            <div class="book-hero-overlay"></div>
          </div>

          <!-- Floating Testimonial Card -->
          <div class="book-hero-testimonial-card">
            <div class="book-hero-quote-icon">
              <i class="fas fa-quote-left"></i>
            </div>
            <p class="book-hero-quote-text">
              <?php
              $default_quote = 'Booking was so easy and ' . bp_option( 'superintendent_pharmacist', 'our pharmacist' ) . ' was fantastic. I was seen on time and the advice was excellent.';
              echo esc_html( bp_field( 'book_hero_quote', $default_quote ) );
              ?>
            </p>
            <div class="book-hero-quote-footer">
              <div class="book-hero-author">
                <span class="book-hero-name"><?php echo esc_html(bp_field('book_hero_quote_name', 'Sarah J.')); ?></span>
                <div class="star-row">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
              </div>
              <div class="book-hero-result-badge">
                <span><?php echo esc_html(bp_field('book_hero_quote_badge', 'Verified Patient')); ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     HOW IT WORKS SECTION
     ============================================ -->
<section class="book-process-section">
  <div class="section-container">
    <div class="book-process-header">
      <h2 class="book-process-title"><?php echo esc_html(bp_field('book_process_title', 'How It Works')); ?></h2>
    </div>

    <div class="book-process-grid">
      <?php if (have_rows('book_process_steps')) : $step_num = 0; while (have_rows('book_process_steps')) : the_row(); $step_num++; ?>
        <div class="book-process-card">
          <div class="book-process-number"><?php echo esc_html($step_num); ?></div>
          <div class="book-process-icon">
            <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
          </div>
          <h3 class="book-process-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="book-process-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
          <?php if ($step_num < 3) : ?>
            <div class="book-process-arrow desktop-only"><i class="fas fa-chevron-right"></i></div>
          <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <div class="book-process-card">
          <div class="book-process-number">1</div>
          <div class="book-process-icon"><i class="fas fa-hand-pointer"></i></div>
          <h3 class="book-process-card-title">Choose Service</h3>
          <p class="book-process-card-desc">Select the specific health service you need from our comprehensive options below.</p>
          <div class="book-process-arrow desktop-only"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="book-process-card">
          <div class="book-process-number">2</div>
          <div class="book-process-icon"><i class="fas fa-calendar-check"></i></div>
          <h3 class="book-process-card-title">Select Time</h3>
          <p class="book-process-card-desc">Pick a convenient date and time slot that fits your schedule perfectly.</p>
          <div class="book-process-arrow desktop-only"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="book-process-card">
          <div class="book-process-number">3</div>
          <div class="book-process-icon"><i class="fas fa-hospital-user"></i></div>
          <h3 class="book-process-card-title">Visit Clinic</h3>
          <p class="book-process-card-desc">Come to our Denton clinic for your expert consultation with our friendly team.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     STATS BAR
     ============================================ -->
<section class="book-stats-section">
  <div class="book-stats-shimmer"></div>
  <div class="section-container">
    <div class="book-stats-grid">
      <?php if (have_rows('book_stats')) : while (have_rows('book_stats')) : the_row(); ?>
        <div class="book-stat-item">
          <div class="book-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <div class="book-stat-content">
            <span class="book-stat-number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="book-stat-label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="book-stat-item"><div class="book-stat-icon"><i class="fas fa-clock"></i></div><div class="book-stat-content"><span class="book-stat-number">30+</span><span class="book-stat-label">Years Experience</span></div></div>
        <div class="book-stat-item"><div class="book-stat-icon"><i class="fas fa-users"></i></div><div class="book-stat-content"><span class="book-stat-number">10,000+</span><span class="book-stat-label">Patients Helped</span></div></div>
        <div class="book-stat-item"><div class="book-stat-icon"><i class="fas fa-star"></i></div><div class="book-stat-content"><span class="book-stat-number">4.9</span><span class="book-stat-label">Google Rating</span></div></div>
        <div class="book-stat-item"><div class="book-stat-icon"><i class="fas fa-certificate"></i></div><div class="book-stat-content"><span class="book-stat-number">GPhC</span><span class="book-stat-label">Registered</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     PRIORITY SERVICES SECTION
     ============================================ -->
<section class="book-services-section">
  <div class="section-container">
    <div class="book-services-header">
      <div class="section-badge">
        <span class="section-badge-text"><?php echo esc_html(bp_field('book_services_badge', 'MOST POPULAR')); ?></span>
      </div>
      <h2 class="book-services-title"><?php echo esc_html(bp_field('book_services_title', 'Featured Services')); ?></h2>
    </div>

    <div class="book-services-grid">
      <?php if (have_rows('book_priority_services')) : while (have_rows('book_priority_services')) : the_row();
        $badge_text   = get_sub_field('badge_text');
        $icon_color   = get_sub_field('icon_color');
        $icon_class   = $icon_color ? ' ' . $icon_color : '';
        $refund_text  = get_sub_field('refund_text');
      ?>
        <div class="book-service-card<?php echo $badge_text ? ' featured' : ''; ?>">
          <?php if ($badge_text) : ?>
            <div class="book-service-badge"><?php echo esc_html($badge_text); ?></div>
          <?php endif; ?>
          <div class="book-service-icon-wrap<?php echo esc_attr($icon_class); ?>">
            <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
          </div>
          <h3 class="book-service-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="book-service-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
          <div class="book-service-price-row">
            <span class="book-service-price"><?php echo esc_html(get_sub_field('price')); ?></span>
            <span class="book-service-price-label"><?php echo esc_html(get_sub_field('price_label')); ?></span>
          </div>
          <?php if ($refund_text) : ?>
            <div class="book-service-refund-badge"><?php echo esc_html($refund_text); ?></div>
          <?php endif; ?>
          <button onclick="scrollToBooking()" class="cta-button primary-cta book-service-btn">
            <?php echo esc_html(get_sub_field('button_text') ?: 'Book Consultation'); ?>
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
      <?php endwhile; else : ?>
        <!-- Weight Loss -->
        <div class="book-service-card featured">
          <div class="book-service-badge">Most Popular</div>
          <div class="book-service-icon-wrap">
            <i class="fas fa-weight-scale"></i>
          </div>
          <h3 class="book-service-title">Medical Weight Loss</h3>
          <p class="book-service-desc">Clinically proven GLP-1 treatments with weekly pharmacist support. Wegovy, Mounjaro, and more.</p>
          <div class="book-service-price-row"><span class="book-service-price">From &pound;179</span><span class="book-service-price-label">/ month</span></div>
          <button onclick="scrollToBooking()" class="cta-button primary-cta book-service-btn">Book Consultation <i class="fas fa-arrow-right"></i></button>
        </div>
        <!-- Travel Health -->
        <div class="book-service-card">
          <div class="book-service-icon-wrap teal">
            <i class="fas fa-plane-departure"></i>
          </div>
          <h3 class="book-service-title">Travel Vaccinations</h3>
          <p class="book-service-desc">Official Yellow Fever Centre. Hepatitis, Typhoid, Rabies, and destination-specific advice.</p>
          <div class="book-service-price-row"><span class="book-service-price">From &pound;35</span><span class="book-service-price-label">/ vaccine</span></div>
          <button onclick="scrollToBooking()" class="cta-button primary-cta book-service-btn">Book Consultation <i class="fas fa-arrow-right"></i></button>
        </div>
        <!-- Ear Wax Removal -->
        <div class="book-service-card">
          <div class="book-service-icon-wrap purple">
            <i class="fas fa-ear-listen"></i>
          </div>
          <h3 class="book-service-title">Ear Wax Removal</h3>
          <p class="book-service-desc">Professional microsuction ear cleaning by experienced healthcare professionals.</p>
          <div class="book-service-price-row"><span class="book-service-price">&pound;20</span><span class="book-service-price-label">/ per ear</span></div>
          <button onclick="scrollToBooking()" class="cta-button primary-cta book-service-btn">Book Consultation <i class="fas fa-arrow-right"></i></button>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     ADDITIONAL SERVICES SECTION
     ============================================ -->
<section class="book-services-additional-section">
  <div class="section-container">
    <div class="book-services-header">
      <div class="section-badge">
        <span class="section-badge-text"><?php echo esc_html(bp_field('book_additional_badge', 'ESSENTIAL HEALTHCARE')); ?></span>
      </div>
      <h2 class="book-services-title"><?php echo esc_html(bp_field('book_additional_title', 'Everyday Health Services')); ?></h2>
    </div>

    <div class="book-services-additional-grid">
      <?php if (have_rows('book_additional_services')) : while (have_rows('book_additional_services')) : the_row(); ?>
        <div class="book-service-card">
          <div class="book-service-header-row">
            <div class="book-service-icon-small">
              <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
            </div>
            <div class="book-service-price-badge"><?php echo esc_html(get_sub_field('price')); ?></div>
          </div>
          <h3 class="book-service-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="book-service-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
          <button onclick="scrollToBooking()" class="cta-button secondary-cta book-service-btn-small">
            <?php echo esc_html(get_sub_field('button_text') ?: 'Book Service'); ?>
          </button>
        </div>
      <?php endwhile; else : ?>
        <div class="book-service-card">
          <div class="book-service-header-row"><div class="book-service-icon-small"><i class="fas fa-syringe"></i></div><div class="book-service-price-badge">&pound;15</div></div>
          <h3 class="book-service-title">Flu Vaccination</h3>
          <p class="book-service-desc">Essential seasonal flu protection for you and your family. Available for both private and NHS patients.</p>
          <button onclick="scrollToBooking()" class="cta-button secondary-cta book-service-btn-small">Book Flu Jab</button>
        </div>
        <div class="book-service-card">
          <div class="book-service-header-row"><div class="book-service-icon-small"><i class="fas fa-shield-virus"></i></div><div class="book-service-price-badge">&pound;45</div></div>
          <h3 class="book-service-title">COVID Booster</h3>
          <p class="book-service-desc">Private COVID-19 booster vaccinations for ongoing protection. No NHS eligibility required.</p>
          <button onclick="scrollToBooking()" class="cta-button secondary-cta book-service-btn-small">Book Booster</button>
        </div>
        <div class="book-service-card">
          <div class="book-service-header-row"><div class="book-service-icon-small"><i class="fas fa-notes-medical"></i></div><div class="book-service-price-badge">VARIES</div></div>
          <h3 class="book-service-title">Private Services</h3>
          <p class="book-service-desc">Chickenpox, shingles, Hepatitis B, B12 injections, and general health consultations.</p>
          <button onclick="scrollToBooking()" class="cta-button secondary-cta book-service-btn-small">Book Service</button>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     AMELIA BOOKING SECTION
     ============================================ -->
<section class="book-amelia-section" id="booking-widget">
  <div class="book-amelia-blob-1"></div>
  <div class="book-amelia-blob-2"></div>

  <div class="section-container">
    <div class="book-amelia-header">
      <h2 class="book-amelia-title"><?php echo esc_html(bp_field('book_amelia_title', 'Select Your Appointment Time')); ?></h2>
      <p class="book-amelia-description"><?php echo esc_html(bp_field('book_amelia_description', 'Choose a convenient time with our Denton healthcare team')); ?></p>
    </div>

    <div class="book-amelia-container">
      <?php
      $amelia_shortcode = bp_field('book_amelia_shortcode', '[ameliabooking]');
      echo do_shortcode($amelia_shortcode);
      ?>
    </div>

    <div class="book-amelia-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_phone_link()); ?>"><?php echo esc_html(bp_phone()); ?></a></p>
    </div>
  </div>
</section>

<!-- ============================================
     TESTIMONIALS SECTION
     ============================================ -->
<section class="book-testimonials-section">
  <div class="section-container">
    <div class="book-testimonials-header">
      <h2 class="book-testimonials-title"><?php echo esc_html(bp_field('book_testimonials_title', 'What Our Patients Say')); ?></h2>
      <div class="book-testimonials-divider"></div>
    </div>

    <div class="book-testimonials-grid">
      <?php
      function book_initials_avatar( $name ) {
        $words    = explode( ' ', trim( $name ) );
        $initials = strtoupper( substr( $words[0], 0, 1 ) );
        if ( isset( $words[1] ) ) $initials .= strtoupper( substr( $words[1], 0, 1 ) );
        return '<div class="book-testimonial-avatar-initials">' . esc_html( $initials ) . '</div>';
      }
      ?>
      <?php if (have_rows('book_testimonials')) : while (have_rows('book_testimonials')) : the_row();
        $name = get_sub_field('name');
      ?>
        <div class="book-testimonial-card">
          <div class="star-row">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="book-testimonial-quote">"<?php echo esc_html(get_sub_field('quote')); ?>"</p>
          <div class="book-testimonial-author">
            <?php echo book_initials_avatar( $name ); ?>
            <div class="book-testimonial-info">
              <span class="book-testimonial-name"><?php echo esc_html( $name ); ?></span>
              <span class="book-testimonial-service"><?php echo esc_html(get_sub_field('service')); ?></span>
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="book-testimonial-card">
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="book-testimonial-quote">"Very efficient service. I phoned the evening before in a panic thinking we were too late for our holiday vaccinations. We got an appointment for the following day... Excellent advice given. Would highly recommend."</p>
          <div class="book-testimonial-author">
            <?php echo book_initials_avatar( 'Kathryn H.' ); ?>
            <div class="book-testimonial-info"><span class="book-testimonial-name">Kathryn H.</span><span class="book-testimonial-service">Travel Health Patient</span></div>
          </div>
        </div>
        <div class="book-testimonial-card">
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="book-testimonial-quote">"I travel 40 miles every month to see the team for my weight loss consultations – they're that good. Would never go anywhere else. The support has been incredible."</p>
          <div class="book-testimonial-author">
            <?php echo book_initials_avatar( 'Sarah M.' ); ?>
            <div class="book-testimonial-info"><span class="book-testimonial-name">Sarah M.</span><span class="book-testimonial-service">Weight Loss Patient</span></div>
          </div>
        </div>
        <div class="book-testimonial-card">
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="book-testimonial-quote">"The staff were just amazing... professional, courteous and helpful... If I could give them more than five stars I would... they truly take customer service to a whole new level."</p>
          <div class="book-testimonial-author">
            <?php echo book_initials_avatar( 'Tom W.' ); ?>
            <div class="book-testimonial-info"><span class="book-testimonial-name">Tom W.</span><span class="book-testimonial-service">Pharmacy Patient</span></div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     FAQ SECTION
     ============================================ -->
<section class="book-faq-section">
  <div class="section-container">
    <div class="book-faq-header">
      <div class="section-badge">
        <span class="section-badge-text"><?php echo esc_html(bp_field('book_faq_badge', 'EVERYTHING YOU NEED TO KNOW')); ?></span>
      </div>
      <h2 class="book-faq-title"><?php echo esc_html(bp_field('book_faq_title', 'Common Questions')); ?></h2>
      <p class="book-faq-description"><?php echo esc_html(bp_field('book_faq_description', 'Clear answers about our services, location, and team to help you book with confidence.')); ?></p>
    </div>

    <div class="book-faq-list">
      <?php if (have_rows('book_faqs')) : $faq_num = 0; while (have_rows('book_faqs')) : the_row(); $faq_num++; ?>
        <div class="book-faq-item">
          <button class="book-faq-btn" onclick="toggleFAQ(this)">
            <div class="book-faq-left">
              <span class="book-faq-number"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
              <span class="book-faq-question"><?php echo esc_html(get_sub_field('question')); ?></span>
            </div>
            <div class="book-faq-icon"><i class="fas fa-plus"></i></div>
          </button>
          <div class="book-faq-answer">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="book-faq-item">
          <button class="book-faq-btn" onclick="toggleFAQ(this)"><div class="book-faq-left"><span class="book-faq-number">01</span><span class="book-faq-question">Is there free parking at your Denton clinic?</span></div><div class="book-faq-icon"><i class="fas fa-plus"></i></div></button>
          <div class="book-faq-answer"><p>Yes, absolutely. We have free parking available directly outside our clinic. Our location is easily accessible from all parts of Denton and Manchester, making your visit stress-free and convenient.</p></div>
        </div>
        <div class="book-faq-item">
          <button class="book-faq-btn" onclick="toggleFAQ(this)"><div class="book-faq-left"><span class="book-faq-number">02</span><span class="book-faq-question">How quickly can I start the weight loss programme?</span></div><div class="book-faq-icon"><i class="fas fa-plus"></i></div></button>
          <div class="book-faq-answer"><p>You can often start the same day as your consultation. Because we have our own prescriber, we don't have waiting lists. If the treatment is suitable for you, we can issue your prescription and medication immediately during your appointment.</p></div>
        </div>
        <div class="book-faq-item">
          <button class="book-faq-btn" onclick="toggleFAQ(this)"><div class="book-faq-left"><span class="book-faq-number">03</span><span class="book-faq-question">Who will I be seeing for my consultation?</span></div><div class="book-faq-icon"><i class="fas fa-plus"></i></div></button>
          <div class="book-faq-answer"><p><?php echo esc_html( sprintf( 'You will see %s or one of our expert clinical team members — a GPhC Registered Pharmacist with years of experience serving our community. You\'ll see the same friendly face for your follow-ups, ensuring continuity of care.', bp_option( 'superintendent_pharmacist', 'our lead pharmacist' ) ) ); ?></p></div>
        </div>
        <div class="book-faq-item">
          <button class="book-faq-btn" onclick="toggleFAQ(this)"><div class="book-faq-left"><span class="book-faq-number">04</span><span class="book-faq-question">Do I need to book travel vaccinations in advance?</span></div><div class="book-faq-icon"><i class="fas fa-plus"></i></div></button>
          <div class="book-faq-answer"><p>Ideally, yes. We recommend booking 6-8 weeks before you travel to allow time for any vaccine courses to be completed. However, we can often accommodate last-minute appointments for urgent travel needs. We hold most vaccines in stock, including Yellow Fever.</p></div>
        </div>
        <div class="book-faq-item">
          <button class="book-faq-btn" onclick="toggleFAQ(this)"><div class="book-faq-left"><span class="book-faq-number">05</span><span class="book-faq-question">Why do so many Denton patients choose you?</span></div><div class="book-faq-icon"><i class="fas fa-plus"></i></div></button>
          <div class="book-faq-answer"><p>We combine clinical expertise with genuine warmth. Plus, we're a local independent pharmacy that has been part of the Denton community for decades—we truly care about your health outcomes. Our patients appreciate the personal care you can't get from large chains.</p></div>
        </div>
        <div class="book-faq-item">
          <button class="book-faq-btn" onclick="toggleFAQ(this)"><div class="book-faq-left"><span class="book-faq-number">06</span><span class="book-faq-question">Do I need a referral from my GP?</span></div><div class="book-faq-icon"><i class="fas fa-plus"></i></div></button>
          <div class="book-faq-answer"><p>No referral is needed. You can book directly with us for any of our services, including weight loss, travel vaccinations, and ear wax removal. We handle all the clinical assessments in-house during your consultation.</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>


<?php
get_footer();
