<?php
/**
 * Template Name: Typhoid Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar with Injection/Capsules toggle, final CTA.
 */

get_header();

$prefix = 'typhoid';
$vaccine_name = dp_field('vaccine_name', 'Typhoid');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="typhoid-hero-section">
  <div class="typhoid-hero-bg"></div>
  <div class="typhoid-hero-dots"></div>
  <div class="typhoid-hero-glow-1"></div>
  <div class="typhoid-hero-glow-2"></div>
  <div class="section-container">
    <div class="typhoid-hero-grid">

      <!-- Left: Content -->
      <div class="typhoid-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="typhoid-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Typhoid Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="typhoid-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself before travelling with our typhoid vaccination service in Denton, Manchester. Choose between a single injection or oral capsules — both give around 3 years' protection for travel to South Asia, Southeast Asia, Africa and beyond.")); ?>
        </p>

        <div class="typhoid-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Typhoid Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="typhoid-hero-trust">
          <div class="typhoid-hero-trust-item"><i class="fas fa-syringe"></i><span>Injection or Oral Capsules</span></div>
          <div class="typhoid-hero-trust-item"><i class="fas fa-shield-halved"></i><span>~3 Years' Protection</span></div>
          <div class="typhoid-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="typhoid-hero-visual">
        <div class="typhoid-hero-float-badge">
          <span class="typhoid-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '2')); ?></span>
          <span class="typhoid-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'ways to protect')); ?></span>
        </div>
        <div class="typhoid-trust-card">
          <div class="typhoid-trust-card-glow"></div>
          <div class="typhoid-trust-card-inner">
            <div class="typhoid-trust-card-header">
              <div class="typhoid-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="typhoid-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Typhoid Vaccination')); ?></span>
            </div>
            <div class="typhoid-trust-card-price">
              <span class="typhoid-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£30')); ?></span>
              <span class="typhoid-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'injection or capsule course')); ?></span>
            </div>
            <div class="typhoid-trust-card-divider"></div>
            <ul class="typhoid-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Single injection or 3 oral capsules</span></li>
              <li><i class="fas fa-check"></i> <span>Same price, similar protection</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="typhoid-trust-card-footer">
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
<section class="typhoid-protect-section">
  <div class="section-container">
    <div class="typhoid-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="typhoid-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Typhoid Vaccine')); ?></h2>
      <p class="typhoid-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'Two formats, similar protection — pick whichever suits you better')); ?></p>
    </div>

    <div class="typhoid-protect-grid">
      <div class="typhoid-protect-image-wrapper">
        <div class="typhoid-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1607874963930-2edecc67a25a?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Typhoid protection is available as an injection or oral capsules')); ?>" class="typhoid-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="typhoid-protect-content">
        <div class="typhoid-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Choose Injection or Oral Capsules')); ?></span>
        </div>

        <h3 class="typhoid-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Two Ways to Protect Yourself')); ?></h3>
        <p class="typhoid-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Typhoid is a bacterial infection spread through contaminated food and water in areas with poor sanitation. We offer two options that give similar protection for around 3 years: a single injection, or a course of three oral capsules taken on alternate days. Both offer roughly 50 to 80% protection, so it's still worth being careful with food and water hygiene while travelling.")); ?></p>

        <ul class="typhoid-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="typhoid-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="typhoid-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Injection: Single Dose</strong><p>One jab, ideally at least 2 weeks before you travel.</p></div>
            </li>
            <li class="typhoid-protect-feature">
              <div class="icon"><i class="fas fa-capsules"></i></div>
              <div class="text"><strong>Capsules: No Needles</strong><p>Three capsules taken on alternate days, completed at least a week before travel.</p></div>
            </li>
            <li class="typhoid-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Combine With Other Vaccines</strong><p>Typhoid vaccination can be given alongside most other travel vaccines, including Hepatitis A.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="typhoid-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="typhoid-stats-section">
  <div class="section-container">
    <div class="typhoid-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="typhoid-stat-divider"></div><?php endif; ?>
        <div class="typhoid-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="typhoid-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">2 Options</span><span class="label">Injection or Capsules</span></div></div>
        <div class="typhoid-stat-divider"></div>
        <div class="typhoid-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">~3 Years</span><span class="label">Protection</span></div></div>
        <div class="typhoid-stat-divider"></div>
        <div class="typhoid-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">1–2 Weeks</span><span class="label">Before Travel</span></div></div>
        <div class="typhoid-stat-divider"></div>
        <div class="typhoid-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="typhoid-about-section">
  <div class="section-container">
    <div class="typhoid-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="typhoid-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Typhoid?')); ?></h2>
      <p class="typhoid-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A bacterial infection linked to contaminated food and water')); ?></p>
    </div>

    <div class="typhoid-about-content-grid">
      <div class="typhoid-about-image-wrapper">
        <div class="typhoid-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1574482620811-1aa16ffe3c82?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Washing hands under running water — good food and water hygiene lowers typhoid risk')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="typhoid-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="typhoid-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="typhoid-info-card"><div class="icon"><i class="fas fa-bacterium"></i></div><h3>Bacterial Infection</h3><p>Caused by Salmonella typhi, usually picked up from contaminated food or water.</p></div>
          <div class="typhoid-info-card"><div class="icon"><i class="fas fa-temperature-high"></i></div><h3>Typical Symptoms</h3><p>High fever, weakness, stomach pain, headache and loss of appetite.</p></div>
          <div class="typhoid-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Found Widely</h3><p>More common across South Asia, Southeast Asia, Africa, Central and South America, and parts of the Middle East.</p></div>
          <div class="typhoid-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>Vaccination plus good food and water hygiene significantly lowers your risk.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="typhoid-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Neither Option Is 100% Protective')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "Both the injection and the capsules give roughly 50 to 80% protection, so it's still worth being careful with food and water — stick to bottled or boiled water, and avoid raw or undercooked food from unreliable sources.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="typhoid-needs-section">
  <div class="section-container">
    <div class="typhoid-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="typhoid-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Which option suits you?')); ?></h2>
      <p class="typhoid-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Both give similar protection — the right choice comes down to personal preference')); ?></p>
    </div>

    <div class="typhoid-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Prefer the Injection</span>
          <h3 class="nhs-card-title">Quick &amp; Simple</h3>
          <p class="nhs-card-desc">A good choice if you'd rather have it done in one visit and don't mind a jab.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Single dose, done in one visit</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>No need to remember a capsule schedule</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Can combine with other travel jabs</span></li>
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
          <span class="nhs-card-badge">Prefer the Capsules</span>
          <h3 class="nhs-card-title">No Needles</h3>
          <p class="nhs-card-desc">A good option if you'd rather avoid an injection, and you're comfortable following a short capsule schedule.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Needle-free option</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Three capsules on alternate days</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Complete at least a week before travel</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="typhoid-pricing-section" id="pricing">
  <div class="section-container">
    <div class="typhoid-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="typhoid-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Typhoid Vaccination Pricing')); ?></h2>
      <p class="typhoid-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Same price whichever option you choose')); ?></p>
    </div>

    <div class="typhoid-pricing-grid">
      <div class="typhoid-pricing-card featured">
        <div class="typhoid-pricing-ribbon">Injection or Capsules</div>
        <h3 class="typhoid-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Typhoid Vaccination')); ?></h3>
        <div class="typhoid-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£30')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'injection or capsule course')); ?></span>
        </div>
        <ul class="typhoid-pricing-includes">
          <li><i class="fas fa-check"></i> Your choice of injection or capsules</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Travel risk assessment &amp; advice</li>
          <li><i class="fas fa-check"></i> Can combine with other travel vaccines</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="typhoid-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Both the injection and the oral capsule course are £30 and give similar protection for around 3 years.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="typhoid-details-section">
  <div class="section-container">
    <div class="typhoid-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="typhoid-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="typhoid-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="typhoid-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="typhoid-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="typhoid-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and help you decide between the injection or capsules.</p></div>
        <div class="typhoid-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Injection Option</h3><p>One dose, given in the upper arm — most people feel only a brief scratch.</p></div>
        <div class="typhoid-detail-card"><div class="icon"><i class="fas fa-capsules"></i></div><h3>Capsule Option</h3><p>Three capsules to take on alternate days, with clear instructions on timing.</p></div>
        <div class="typhoid-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Injection: soreness at the injection site. Capsules: occasional mild stomach upset.</p></div>
        <div class="typhoid-detail-card"><div class="icon"><i class="fas fa-glass-water"></i></div><h3>Food &amp; Water Advice</h3><p>We'll also cover hygiene precautions, since neither option gives full protection alone.</p></div>
        <div class="typhoid-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="typhoid-faq-section">
  <div class="section-container">
    <div class="typhoid-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'TYPHOID FAQs')); ?></span>
      </div>
      <h2 class="typhoid-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="typhoid-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="typhoid-faq-item">
          <button class="typhoid-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="typhoid-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Which option should I choose — injection or capsules?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Both give similar protection for around 3 years, so it largely comes down to preference. The injection is quicker (one visit, done), while the capsules avoid a needle but need three doses taken on alternate days.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How soon before travel should I have it?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>The injection should ideally be given at least 2 weeks before you travel. The capsule course should be completed at least a week before travel. Earlier is always better to give full immunity time to develop.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Can I have this alongside other travel vaccines?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Yes — typhoid vaccination (either option) can be given at the same appointment as most other travel vaccines, including Hepatitis A.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Does vaccination mean I don't need to worry about food and water?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>No — both options give roughly 50 to 80% protection, not complete protection. It's still worth being careful with food and water hygiene while you travel.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>The injection can cause temporary soreness, redness or swelling at the injection site. The capsules can occasionally cause mild stomach upset. Serious side effects are rare and most people experience no issues.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed with Injection/Capsules toggle
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     Injection: appointmentType=47536495 (Typhoid Vaccination - Vaccine)
     Capsules:  appointmentType=81305704 (Typhoid Vaccination - Capsules)
     Location: calendarID=10903457 (Denton Pharmacy) — Bowland uses calendarID=8436365
     Override per-page via ACF fields 'vaccine_acuity_url_injection' / 'vaccine_acuity_url_capsules'. -->
<?php
$acuity_url_injection = dp_field( 'vaccine_acuity_url_injection', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536495&calendarID=10903457&ref=embedded_csp' );
$acuity_url_capsules  = dp_field( 'vaccine_acuity_url_capsules', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=81305704&calendarID=10903457&ref=embedded_csp' );
?>
<section class="typhoid-booking-section" id="booking-widget">
  <div class="typhoid-booking-blob-1"></div>
  <div class="typhoid-booking-blob-2"></div>
  <div class="section-container">
    <div class="typhoid-booking-header">
      <h2 class="typhoid-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Typhoid Vaccination')); ?></h2>
      <p class="typhoid-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose injection or capsules, then pick a time that suits you at our Denton clinic')); ?></p>
    </div>

    <?php if ( $acuity_url_injection && $acuity_url_capsules ) : ?>
      <div class="typhoid-booking-toggle" role="group" aria-label="Choose vaccination format">
        <button type="button" class="typhoid-toggle-btn active" data-url="<?php echo esc_url( $acuity_url_injection ); ?>" onclick="switchBookingFormat(this)">Injection</button>
        <button type="button" class="typhoid-toggle-btn" data-url="<?php echo esc_url( $acuity_url_capsules ); ?>" onclick="switchBookingFormat(this)">Oral Capsules</button>
      </div>
    <?php endif; ?>

    <div class="typhoid-booking-embed">
      <?php if ( $acuity_url_injection ) : ?>
        <iframe id="typhoid-acuity-iframe" src="<?php echo esc_url( $acuity_url_injection ); ?>" title="Book your Typhoid vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="typhoid-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="typhoid-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="typhoid-cta-section">
  <div class="typhoid-cta-bg"></div>
  <div class="section-container">
    <div class="typhoid-cta-content">
      <div class="typhoid-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Injection or Capsules</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="typhoid-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="typhoid-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your typhoid vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="typhoid-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
