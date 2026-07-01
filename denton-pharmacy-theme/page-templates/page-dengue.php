<?php
/**
 * Template Name: Dengue Fever Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'dengue';
$vaccine_name = dp_field('vaccine_name', 'Dengue Fever');
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
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="dengue-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Dengue Fever Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="dengue-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself before travelling with our dengue fever vaccination service in Denton, Manchester. A course covering all four dengue serotypes, recommended for trips to Southeast Asia, the Caribbean, Central and South America, and parts of Africa.")); ?>
        </p>

        <div class="dengue-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Dengue Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
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
          <span class="dengue-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '4')); ?></span>
          <span class="dengue-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'serotypes covered')); ?></span>
        </div>
        <div class="dengue-trust-card">
          <div class="dengue-trust-card-glow"></div>
          <div class="dengue-trust-card-inner">
            <div class="dengue-trust-card-header">
              <div class="dengue-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="dengue-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Dengue Vaccine (Qdenga)')); ?></span>
            </div>
            <div class="dengue-trust-card-price">
              <span class="dengue-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£95')); ?></span>
              <span class="dengue-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="dengue-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Dengue Fever Vaccine')); ?></h2>
      <p class="dengue-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'A course covering all four dengue serotypes for travellers to higher-risk regions')); ?></p>
    </div>

    <div class="dengue-protect-grid">
      <div class="dengue-protect-image-wrapper">
        <div class="dengue-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1632988142547-80a567cb36f0?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'The dengue fever vaccine is given as an injection')); ?>" class="dengue-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="dengue-protect-content">
        <div class="dengue-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Qdenga — Covers All Four Dengue Serotypes')); ?></span>
        </div>

        <h3 class="dengue-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Longer-Term Protection for Frequent or Extended Travel')); ?></h3>
        <p class="dengue-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Dengue fever is a mosquito-borne viral infection found across Southeast Asia, the Caribbean, Central and South America, Africa and the Pacific Islands. Qdenga is a live attenuated vaccine that covers all four dengue serotypes, given as a course of injections. It's worth starting the course at least 4 weeks before your first trip, as full protection builds over the course.")); ?></p>

        <ul class="dengue-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="dengue-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="dengue-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Multi-Dose Course</strong><p>Given as a course of injections rather than a single jab — we'll confirm your schedule at your first appointment.</p></div>
            </li>
            <li class="dengue-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Start Early</strong><p>Begin the course at least 4 weeks before you first travel, so protection has time to develop.</p></div>
            </li>
            <li class="dengue-protect-feature">
              <div class="icon"><i class="fas fa-earth-asia"></i></div>
              <div class="text"><strong>Relevant Across Popular Destinations</strong><p>Covers regions including Thailand, Indonesia, Vietnam, Brazil, the Caribbean and more.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="dengue-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
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
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="dengue-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Dengue Fever?')); ?></h2>
      <p class="dengue-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A mosquito-borne infection common across many tropical travel destinations')); ?></p>
    </div>

    <div class="dengue-about-content-grid">
      <div class="dengue-about-image-wrapper">
        <div class="dengue-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1707943768467-84fe5c76a40c?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Mosquito on skin — dengue spreads through mosquito bites')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="dengue-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="dengue-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="dengue-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>Mosquito-Borne Virus</h3><p>Spread by daytime-biting Aedes mosquitoes, common in tropical and subtropical regions.</p></div>
          <div class="dengue-info-card"><div class="icon"><i class="fas fa-temperature-high"></i></div><h3>Flu-Like Symptoms</h3><p>High fever, severe headache, muscle and joint pain, and a rash are typical.</p></div>
          <div class="dengue-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Found Widely</h3><p>Common across Southeast Asia, the Caribbean, Central and South America, Africa and the Pacific.</p></div>
          <div class="dengue-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>A vaccine course lowers your risk ahead of travel to affected regions.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="dengue-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Higher-Risk Groups')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "Dengue can be more serious for children, older travellers, people who are immunocompromised, and anyone who has had dengue before — vaccination and mosquito bite avoidance both matter for these groups.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="dengue-needs-section">
  <div class="section-container">
    <div class="dengue-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="dengue-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="dengue-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for travellers heading to dengue-affected regions')); ?></p>
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
          <h3 class="nhs-card-title">Frequent or Extended Travellers</h3>
          <p class="nhs-card-desc">Ideal for travellers making repeat trips or longer stays in Southeast Asia, the Caribbean, or Central and South America.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Repeat travel to dengue-affected regions</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Extended stays abroad</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Families travelling together</span></li>
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
          <h3 class="nhs-card-title">Those With Previous Dengue Infection</h3>
          <p class="nhs-card-desc">Particularly worth discussing if you've had dengue before, as subsequent infections can be more severe.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Prior dengue infection</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Children aged 4 and over</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Immunocompromised travellers</span></li>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="dengue-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Dengue Fever Vaccination Pricing')); ?></h2>
      <p class="dengue-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Priced per dose — we will confirm your full course cost at your first appointment')); ?></p>
    </div>

    <div class="dengue-pricing-grid">
      <div class="dengue-pricing-card featured">
        <div class="dengue-pricing-ribbon">Per Dose</div>
        <h3 class="dengue-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Dengue Vaccine (Qdenga)')); ?></h3>
        <div class="dengue-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£95')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="dengue-pricing-includes">
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Travel risk assessment &amp; advice</li>
          <li><i class="fas fa-check"></i> Full course scheduling support</li>
          <li><i class="fas fa-check"></i> Suitable from age 4</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="dengue-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price shown is per dose. Qdenga is given as a course — we will confirm your full schedule and total cost at your first appointment. Not recommended during pregnancy.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="dengue-details-section">
  <div class="section-container">
    <div class="dengue-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="dengue-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="dengue-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="dengue-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="dengue-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and confirm the vaccine is suitable for you.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>Your first injection, given in the upper arm — most people feel only a brief scratch.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Course Scheduling</h3><p>We book your follow-up doses to complete the full course on time.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — soreness at the injection site, a slight fever or headache for a day or two.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Suitable from Age 4</h3><p>Given to children from 4 years old and adults, with individual assessment where needed.</p></div>
        <div class="dengue-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'DENGUE FEVER FAQs')); ?></span>
      </div>
      <h2 class="dengue-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
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
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses does the dengue vaccine need?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>Qdenga is given as a course rather than a single dose. We'll confirm your exact schedule and how many appointments you'll need at your first visit.</p></div></div>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How soon before travel should I start the course?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>Start at least 4 weeks before your first trip. Because the full course takes time to complete, it's best to begin as early as possible, especially for repeat or long-term travel.</p></div></div>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Do I need this vaccine for my trip?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>It depends on your destination, how often you travel there, and your personal risk factors. Dengue is common across Southeast Asia, the Caribbean, Central and South America, Africa and the Pacific — our pharmacist can advise based on your plans.</p></div></div>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">How long does protection last?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>The vaccine provides several years of protection after the full course, though the exact duration is still being studied as longer-term data becomes available.</p></div></div>
        <div class="dengue-faq-item"><button class="dengue-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="dengue-faq-content"><p>Common side effects include soreness, redness or swelling at the injection site, and sometimes a mild fever, headache, tiredness or muscle aches for 1 to 3 days. Paracetamol can help if needed.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=57489648  (Dengue Fever Vaccination)
     Location:       calendarID=10903457       (Denton Pharmacy)
                     Bowland uses calendarID=8436365
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=57489648&calendarID=10903457&ref=embedded_csp' );
?>
<section class="dengue-booking-section" id="booking-widget">
  <div class="dengue-booking-blob-1"></div>
  <div class="dengue-booking-blob-2"></div>
  <div class="section-container">
    <div class="dengue-booking-header">
      <h2 class="dengue-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Dengue Fever Vaccination')); ?></h2>
      <p class="dengue-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="dengue-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Dengue Fever vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="dengue-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="dengue-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
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

      <h2 class="dengue-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="dengue-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your dengue fever vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="dengue-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
