<?php
/**
 * Template Name: Chikungunya Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'chikungunya';
$vaccine_name = dp_field('vaccine_name', 'Chikungunya');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="chikungunya-hero-section">
  <div class="chikungunya-hero-bg"></div>
  <div class="chikungunya-hero-dots"></div>
  <div class="chikungunya-hero-glow-1"></div>
  <div class="chikungunya-hero-glow-2"></div>
  <div class="section-container">
    <div class="chikungunya-hero-grid">

      <!-- Left: Content -->
      <div class="chikungunya-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="chikungunya-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Chikungunya Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="chikungunya-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself before travelling with our chikungunya vaccination service in Denton, Manchester. A single injection recommended for trips to Africa, Asia, the Indian Ocean islands, and Central and South America.")); ?>
        </p>

        <div class="chikungunya-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Chikungunya Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="chikungunya-hero-trust">
          <div class="chikungunya-hero-trust-item"><i class="fas fa-syringe"></i><span>Single Dose</span></div>
          <div class="chikungunya-hero-trust-item"><i class="fas fa-calendar-check"></i><span>Same-Day Appointments</span></div>
          <div class="chikungunya-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="chikungunya-hero-visual">
        <div class="chikungunya-hero-float-badge">
          <span class="chikungunya-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '1')); ?></span>
          <span class="chikungunya-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'dose needed')); ?></span>
        </div>
        <div class="chikungunya-trust-card">
          <div class="chikungunya-trust-card-glow"></div>
          <div class="chikungunya-trust-card-inner">
            <div class="chikungunya-trust-card-header">
              <div class="chikungunya-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="chikungunya-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Chikungunya Vaccine')); ?></span>
            </div>
            <div class="chikungunya-trust-card-price">
              <span class="chikungunya-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£109')); ?></span>
              <span class="chikungunya-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'single dose')); ?></span>
            </div>
            <div class="chikungunya-trust-card-divider"></div>
            <ul class="chikungunya-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Just one injection</span></li>
              <li><i class="fas fa-check"></i> <span>Around 2 years' protection</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="chikungunya-trust-card-footer">
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
<section class="chikungunya-protect-section">
  <div class="section-container">
    <div class="chikungunya-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="chikungunya-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Chikungunya Vaccine')); ?></h2>
      <p class="chikungunya-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'A single-dose vaccine for travellers heading to mosquito-borne risk areas')); ?></p>
    </div>

    <div class="chikungunya-protect-grid">
      <div class="chikungunya-protect-image-wrapper">
        <div class="chikungunya-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1632988142547-80a567cb36f0?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'The chikungunya vaccine is given as a single injection')); ?>" class="chikungunya-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="chikungunya-protect-content">
        <div class="chikungunya-protect-badge-box">
          <i class="fas fa-syringe"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'One Injection, Around 2 Years of Protection')); ?></span>
        </div>

        <h3 class="chikungunya-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Straightforward Protection Before You Travel')); ?></h3>
        <p class="chikungunya-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Chikungunya is a mosquito-borne virus that causes sudden high fever, severe joint pain, muscle aches and a rash, with joint pain sometimes lasting weeks or months. Two vaccines are currently used in the UK — Ixchiq and Vimkunya — both given as a single injection. Ideally have it at least 2 to 4 weeks before you fly, so protection has time to build up.")); ?></p>

        <ul class="chikungunya-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="chikungunya-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="chikungunya-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Single Injection</strong><p>Just one dose is needed — no follow-up appointment required for most travellers.</p></div>
            </li>
            <li class="chikungunya-protect-feature">
              <div class="icon"><i class="fas fa-calendar-week"></i></div>
              <div class="text"><strong>Book 2–4 Weeks Ahead</strong><p>Have it at least 2 to 4 weeks before departure so your protection has time to build.</p></div>
            </li>
            <li class="chikungunya-protect-feature">
              <div class="icon"><i class="fas fa-earth-africa"></i></div>
              <div class="text"><strong>Relevant Worldwide</strong><p>Chikungunya risk spans Africa, Asia, the Indian Ocean islands, and Central and South America.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="chikungunya-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="chikungunya-stats-section">
  <div class="section-container">
    <div class="chikungunya-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="chikungunya-stat-divider"></div><?php endif; ?>
        <div class="chikungunya-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="chikungunya-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">1 Dose</span><span class="label">Single Injection</span></div></div>
        <div class="chikungunya-stat-divider"></div>
        <div class="chikungunya-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">~2 Years</span><span class="label">Protection</span></div></div>
        <div class="chikungunya-stat-divider"></div>
        <div class="chikungunya-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">2–4 Weeks</span><span class="label">Before Travel</span></div></div>
        <div class="chikungunya-stat-divider"></div>
        <div class="chikungunya-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="chikungunya-about-section">
  <div class="section-container">
    <div class="chikungunya-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="chikungunya-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Chikungunya?')); ?></h2>
      <p class="chikungunya-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A mosquito-borne virus found across many popular travel destinations')); ?></p>
    </div>

    <div class="chikungunya-about-content-grid">
      <div class="chikungunya-about-image-wrapper">
        <div class="chikungunya-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1707943768453-7850f916ebde?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Mosquito biting skin — chikungunya spreads through mosquito bites')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="chikungunya-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="chikungunya-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="chikungunya-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>Mosquito-Borne Virus</h3><p>Spread by daytime-biting mosquitoes, with symptoms usually starting 3 to 7 days after a bite.</p></div>
          <div class="chikungunya-info-card"><div class="icon"><i class="fas fa-temperature-high"></i></div><h3>Sudden, Severe Symptoms</h3><p>High fever and severe joint pain are typical, along with muscle aches, headache, fatigue and a rash.</p></div>
          <div class="chikungunya-info-card"><div class="icon"><i class="fas fa-earth-africa"></i></div><h3>Found Widely</h3><p>Present across Africa, Asia, the Indian Ocean islands, and Central and South America, including the Caribbean.</p></div>
          <div class="chikungunya-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>A single vaccine dose gives strong protection ahead of higher-risk travel.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="chikungunya-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Joint Pain Can Linger')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "Unlike many mosquito-borne illnesses, chikungunya's joint pain can persist for weeks or even months after the initial infection has passed — one of the reasons it's worth vaccinating against before higher-risk travel.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="chikungunya-needs-section">
  <div class="section-container">
    <div class="chikungunya-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="chikungunya-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="chikungunya-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for travellers heading to mosquito-borne risk areas')); ?></p>
    </div>

    <div class="chikungunya-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Travellers to Higher-Risk Regions</h3>
          <p class="nhs-card-desc">Worth considering if you're heading to Africa, Asia, the Indian Ocean islands, or Central and South America.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travel to endemic countries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Longer or repeat trips</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Outdoor or rural itineraries</span></li>
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
          <h3 class="nhs-card-title">Older Travellers &amp; Those With Health Conditions</h3>
          <p class="nhs-card-desc">Chikungunya can hit harder in older adults and people with existing health conditions, so vaccination is often worth prioritising.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travellers aged 60+</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Existing joint or health conditions</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Extended stays in affected regions</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="chikungunya-pricing-section" id="pricing">
  <div class="section-container">
    <div class="chikungunya-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="chikungunya-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Chikungunya Vaccination Pricing')); ?></h2>
      <p class="chikungunya-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'One simple price for the full dose — no hidden extras')); ?></p>
    </div>

    <div class="chikungunya-pricing-grid">
      <div class="chikungunya-pricing-card featured">
        <div class="chikungunya-pricing-ribbon">Single Dose</div>
        <h3 class="chikungunya-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Chikungunya Vaccine')); ?></h3>
        <div class="chikungunya-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£109')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'single dose')); ?></span>
        </div>
        <ul class="chikungunya-pricing-includes">
          <li><i class="fas fa-check"></i> One injection</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Travel risk assessment &amp; advice</li>
          <li><i class="fas fa-check"></i> Suitable for most adults</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="chikungunya-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price is for a single dose. Pregnant or breastfeeding travellers, and those under 12, need an individual risk assessment — ask our team.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="chikungunya-details-section">
  <div class="section-container">
    <div class="chikungunya-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="chikungunya-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="chikungunya-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="chikungunya-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="chikungunya-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and confirm the vaccine is suitable for your trip.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Single Injection</h3><p>Just one dose, given in the upper arm — most people feel only a brief scratch.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-clock"></i></div><h3>Book Ahead</h3><p>Ideally have it 2 to 4 weeks before you travel, to give protection time to build.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — a sore arm, headache, tiredness or a slight fever for a day or two.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-user-check"></i></div><h3>Suitable from Age 12</h3><p>Given to most adults and children from 12 years old, with individual assessment where needed.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="chikungunya-faq-section">
  <div class="section-container">
    <div class="chikungunya-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'CHIKUNGUNYA FAQs')); ?></span>
      </div>
      <h2 class="chikungunya-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="chikungunya-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="chikungunya-faq-item">
          <button class="chikungunya-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="chikungunya-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>Just one. Both vaccines currently used in the UK — Ixchiq and Vimkunya — are given as a single injection, with no follow-up dose needed for most travellers.</p></div></div>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How long before I travel should I get it?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>Ideally at least 2 to 4 weeks before departure, so your body has time to build protection. It can still be worth having closer to travel if that's not possible.</p></div></div>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Do I need this vaccine for my trip?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>It depends on your destination and itinerary. Chikungunya is found across Africa, Asia, the Indian Ocean islands, and Central and South America. Our pharmacist can advise based on where you're travelling and for how long.</p></div></div>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Does the vaccine protect against dengue or Zika too?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>No — the chikungunya vaccine only protects against chikungunya. Dengue, Zika and yellow fever need separate protection measures, which we can also advise on.</p></div></div>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>Most people just get a sore arm, mild headache, tiredness or a slight fever for a day or so. Serious reactions are uncommon and monitored through the UK's Yellow Card scheme.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=80401258  (Chikungunya Vaccine)
     Location:       calendarID=10903457       (Denton Pharmacy)
                     Bowland uses calendarID=8436365
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=80401258&calendarID=10903457&ref=embedded_csp' );
?>
<section class="chikungunya-booking-section" id="booking-widget">
  <div class="chikungunya-booking-blob-1"></div>
  <div class="chikungunya-booking-blob-2"></div>
  <div class="section-container">
    <div class="chikungunya-booking-header">
      <h2 class="chikungunya-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Chikungunya Vaccination')); ?></h2>
      <p class="chikungunya-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="chikungunya-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Chikungunya vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="chikungunya-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="chikungunya-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="chikungunya-cta-section">
  <div class="chikungunya-cta-bg"></div>
  <div class="section-container">
    <div class="chikungunya-cta-content">
      <div class="chikungunya-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Single Dose</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="chikungunya-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="chikungunya-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your chikungunya vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="chikungunya-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
