<?php
/**
 * Template Name: Dengue Fever Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'dengue';
$vaccine_name = bp_field('vaccine_name', 'Dengue Fever');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="dengue-hero-section">
  <div class="dengue-hero-bg"></div>
  <div class="dengue-hero-dots"></div>
  <div class="dengue-hero-glow-1"></div>
  <div class="dengue-hero-glow-2"></div>
  <div class="section-container">
    <div class="dengue-hero-grid">

      <!-- Left: Content -->
      <div class="dengue-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="dengue-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Dengue Fever Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="dengue-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Frequent flyer to Southeast Asia, the Caribbean, or Central and South America? Our Wythenshawe pharmacy offers the Qdenga course, covering all four dengue serotypes, before your next trip.")); ?>
        </p>

        <div class="dengue-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Dengue Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="dengue-hero-trust">
          <div class="dengue-hero-trust-item"><i class="fas fa-syringe"></i><span>Full Dose Course</span></div>
          <div class="dengue-hero-trust-item"><i class="fas fa-shield-virus"></i><span>All 4 Serotypes Covered</span></div>
          <div class="dengue-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="dengue-hero-visual">
        <div class="dengue-hero-float-badge">
          <span class="dengue-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '4')); ?></span>
          <span class="dengue-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'serotypes covered')); ?></span>
        </div>
        <div class="dengue-trust-card">
          <div class="dengue-trust-card-glow"></div>
          <div class="dengue-trust-card-inner">
            <div class="dengue-trust-card-header">
              <div class="dengue-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="dengue-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Dengue Vaccine (Qdenga)')); ?></span>
            </div>
            <div class="dengue-trust-card-price">
              <span class="dengue-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£100')); ?></span>
              <span class="dengue-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="dengue-trust-card-divider"></div>
            <ul class="dengue-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Covers all 4 dengue serotypes</span></li>
              <li><i class="fas fa-check"></i> <span>Suitable from age 4</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="dengue-trust-card-footer">
              <i class="fas fa-shield-halved"></i>
              <span>GPhC Registered Pharmacy</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Understanding Section -->
<section class="dengue-protect-section">
  <div class="section-container">
    <div class="dengue-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="dengue-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'About the Dengue Vaccine')); ?></h2>
      <p class="dengue-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'A multi-dose course built for people who travel to higher-risk regions often')); ?></p>
    </div>

    <div class="dengue-protect-grid">
      <div class="dengue-protect-image-wrapper">
        <div class="dengue-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1755189884783-7122b938576b?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'A nurse preparing a dose of the Qdenga dengue vaccine')); ?>" class="dengue-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="dengue-protect-content">
        <div class="dengue-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Qdenga — Covers All Four Dengue Serotypes')); ?></span>
        </div>

        <h3 class="dengue-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Built for Repeat Travellers')); ?></h3>
        <p class="dengue-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "Dengue spreads through mosquito bites and turns up right across Southeast Asia, the Caribbean, Central and South America, Africa and the Pacific Islands. Qdenga is the vaccine we use — a live attenuated jab covering all four dengue serotypes, given as a course rather than a one-off. Start the course 4 weeks or more before your first trip so you're properly covered by the time you fly.")); ?></p>

        <ul class="dengue-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="dengue-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="dengue-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Given as a Course</strong><p>Not a single jab — we'll map out your exact schedule at the first appointment.</p></div>
            </li>
            <li class="dengue-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Plan Ahead</strong><p>Get started 4+ weeks before you first travel so immunity has time to build.</p></div>
            </li>
            <li class="dengue-protect-feature">
              <div class="icon"><i class="fas fa-earth-asia"></i></div>
              <div class="text"><strong>Wide Destination Coverage</strong><p>Relevant for trips to Thailand, Indonesia, Vietnam, Brazil, the Caribbean and beyond.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="dengue-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="dengue-stats-section">
  <div class="section-container">
    <div class="dengue-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="dengue-stat-divider"></div><?php endif; ?>
        <div class="dengue-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="dengue-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">Course</span><span class="label">Of Injections</span></div></div>
        <div class="dengue-stat-divider"></div>
        <div class="dengue-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">4 Types</span><span class="label">Serotypes Covered</span></div></div>
        <div class="dengue-stat-divider"></div>
        <div class="dengue-stat-item"><div class="icon"><i class="fas fa-child-reaching"></i></div><div class="content"><span class="number">Age 4+</span><span class="label">Suitable From</span></div></div>
        <div class="dengue-stat-divider"></div>
        <div class="dengue-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="dengue-about-section">
  <div class="section-container">
    <div class="dengue-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="dengue-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'The Basics on Dengue')); ?></h2>
      <p class="dengue-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', "A tropical mosquito-borne illness that's been climbing in city areas as much as rural ones")); ?></p>
    </div>

    <div class="dengue-about-content-grid">
      <div class="dengue-about-image-wrapper">
        <div class="dengue-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1752000571177-a6479e80a1e7?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'An Aedes mosquito biting skin — the species that spreads dengue')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="dengue-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="dengue-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="dengue-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>Aedes Mosquitoes</h3><p>Unlike malaria mosquitoes, these bite during the day and thrive in built-up, urban settings.</p></div>
          <div class="dengue-info-card"><div class="icon"><i class="fas fa-temperature-high"></i></div><h3>Fever, Aches, Rash</h3><p>Symptoms mimic flu — high fever, pounding headache, joint and muscle pain, and a visible rash.</p></div>
          <div class="dengue-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Genuinely Global</h3><p>Southeast Asia, the Caribbean, Central and South America, Africa and the Pacific all report cases.</p></div>
          <div class="dengue-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Cuts Your Risk</h3><p>Completing the vaccine course meaningfully lowers your odds before travel.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="dengue-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'Second Infections Hit Harder')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "If you've had dengue before, a repeat infection can actually be worse than the first. Combined with age or a weakened immune system, that makes vaccination and mosquito bite avoidance both worth taking seriously.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="dengue-needs-section">
  <div class="section-container">
    <div class="dengue-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="dengue-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Who Should Consider It')); ?></h2>
      <p class="dengue-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Two groups where this vaccine tends to matter most')); ?></p>
    </div>

    <div class="dengue-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Repeat &amp; Long-Stay Travellers</h3>
          <p class="nhs-card-desc">If Southeast Asia, the Caribbean, or Central or South America is a regular or extended stop on your itinerary, this is worth the investment.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Frequent return trips to affected regions</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Long-stay or work postings abroad</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Family holidays to the same destination</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

      <!-- Especially useful (orange) -->
      <div class="nhs-card nhs-card-orange">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <span class="nhs-card-badge">Especially Useful</span>
          <h3 class="nhs-card-title">Anyone Who's Had Dengue Before</h3>
          <p class="nhs-card-desc">Worth a conversation with our pharmacist if you've been infected previously — reinfection carries more risk, not less.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Previous dengue diagnosis</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Children from age 4 upwards</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Weakened immune systems</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="dengue-pricing-section" id="pricing">
  <div class="section-container">
    <div class="dengue-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="dengue-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Pricing')); ?></h2>
      <p class="dengue-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', "Priced per dose — we'll map out your total course cost at the first visit")); ?></p>
    </div>

    <div class="dengue-pricing-grid">
      <div class="dengue-pricing-card featured">
        <div class="dengue-pricing-ribbon">Per Dose</div>
        <h3 class="dengue-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Dengue Vaccine (Qdenga)')); ?></h3>
        <div class="dengue-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£100')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="dengue-pricing-includes">
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Advice tailored to your trip</li>
          <li><i class="fas fa-check"></i> Full course scheduled for you</li>
          <li><i class="fas fa-check"></i> Suitable from age 4</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="dengue-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "Price shown is per dose — Qdenga is a course, and we'll confirm your total schedule and cost at your first appointment. Not recommended if you are pregnant, breastfeeding, or immunocompromised. Please mention this when booking so we can advise on the most appropriate option for you.")); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="dengue-details-section">
  <div class="section-container">
    <div class="dengue-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="dengue-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'How It Works')); ?></h2>
      <p class="dengue-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'From first chat to final dose, at our Wythenshawe pharmacy')); ?></p>
    </div>

    <div class="dengue-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="dengue-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Trip Assessment</h3><p>We ask about your route and past dengue history to confirm the vaccine's right for you.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Injection</h3><p>Given in the upper arm — quick, and most people barely feel it.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>We Handle the Schedule</h3><p>Your follow-up appointments get booked in so the full course lands on time.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Tend to Be Mild</h3><p>A sore arm, a bit of a headache or a low fever for a day or two is typical.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Age 4 and Up</h3><p>We vaccinate children from 4 as well as adults, with an individual check where needed.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private, No GP Letter</h3><p>Travel dengue vaccination sits outside the NHS, so just book with us directly.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="dengue-faq-section">
  <div class="section-container">
    <div class="dengue-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'DENGUE FEVER FAQs')); ?></span>
      </div>
      <h2 class="dengue-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="dengue-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="dengue-faq-item">
          <button class="dengue-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="dengue-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Is it a single injection?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>No — Qdenga is given as a course. We'll set out exactly how many appointments you need at your first visit.</p></div></div>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">When should I start?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>At least 4 weeks before you first travel — earlier if you can, since the full course takes time. This matters more if you're a frequent or long-stay traveller.</p></div></div>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Is this relevant for where I'm going?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>Depends on your destination, how often you go, and your own risk factors. Southeast Asia, the Caribbean, Central and South America, Africa and the Pacific all see cases — tell us your plans and we'll advise properly.</p></div></div>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">How long does the protection last?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>Several years once you've completed the full course. Longer-term data is still coming in, so exact duration isn't fully settled yet.</p></div></div>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects might I get?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>Soreness, redness or swelling where the needle went in is common, and sometimes a mild fever, headache, tiredness or muscle aches for a day or two. Paracetamol usually sorts it.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=57489648  (Dengue Fever Vaccination)
     Location:       calendarID=8436365       (Bowland Pharmacy)
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=57489648&calendarID=8436365&ref=embedded_csp' );
?>
<section class="dengue-booking-section" id="booking-widget">
  <div class="dengue-booking-blob-1"></div>
  <div class="dengue-booking-blob-2"></div>
  <div class="section-container">
    <div class="dengue-booking-header">
      <h2 class="dengue-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Dengue Fever Vaccination')); ?></h2>
      <p class="dengue-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <div class="dengue-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Dengue Fever vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="dengue-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="dengue-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="dengue-cta-section">
  <div class="dengue-cta-bg"></div>
  <div class="section-container">
    <div class="dengue-cta-content">
      <div class="dengue-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">All 4 Serotypes Covered</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="dengue-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', "Start the Course Before Your Next Trip")); ?></h2>
      <p class="dengue-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book your Qdenga course with our Wythenshawe team and get ahead of it early.")); ?></p>

      <div class="dengue-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
