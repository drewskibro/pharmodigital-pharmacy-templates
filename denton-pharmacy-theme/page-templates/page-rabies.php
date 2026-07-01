<?php
/**
 * Template Name: Rabies Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'rabies';
$vaccine_name = dp_field('vaccine_name', 'Rabies');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="rabies-hero-section">
  <div class="rabies-hero-bg"></div>
  <div class="rabies-hero-dots"></div>
  <div class="rabies-hero-glow-1"></div>
  <div class="rabies-hero-glow-2"></div>
  <div class="section-container">
    <div class="rabies-hero-grid">

      <!-- Left: Content -->
      <div class="rabies-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="rabies-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Rabies Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="rabies-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself before travelling with our rabies pre-exposure vaccination service in Denton, Manchester. A three-dose course for travellers to South Asia, Southeast Asia, sub-Saharan Africa and other rabies-endemic regions.")); ?>
        </p>

        <div class="rabies-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Rabies Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="rabies-hero-trust">
          <div class="rabies-hero-trust-item"><i class="fas fa-syringe"></i><span>3-Dose Course</span></div>
          <div class="rabies-hero-trust-item"><i class="fas fa-child-reaching"></i><span>Suitable for Children</span></div>
          <div class="rabies-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="rabies-hero-visual">
        <div class="rabies-hero-float-badge">
          <span class="rabies-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '3')); ?></span>
          <span class="rabies-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="rabies-trust-card">
          <div class="rabies-trust-card-glow"></div>
          <div class="rabies-trust-card-inner">
            <div class="rabies-trust-card-header">
              <div class="rabies-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="rabies-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Rabies Vaccine')); ?></span>
            </div>
            <div class="rabies-trust-card-price">
              <span class="rabies-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£70')); ?></span>
              <span class="rabies-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="rabies-trust-card-divider"></div>
            <ul class="rabies-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Days 0, 7 and 21–28</span></li>
              <li><i class="fas fa-check"></i> <span>Around 2–3 years' protection</span></li>
              <li><i class="fas fa-check"></i> <span>Simplifies post-bite treatment</span></li>
            </ul>
            <div class="rabies-trust-card-footer">
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
<section class="rabies-protect-section">
  <div class="section-container">
    <div class="rabies-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="rabies-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Rabies Vaccine')); ?></h2>
      <p class="rabies-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'Pre-exposure protection that buys vital time if you are ever bitten or scratched')); ?></p>
    </div>

    <div class="rabies-protect-grid">
      <div class="rabies-protect-image-wrapper">
        <div class="rabies-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1760539750947-34461dfc6a20?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Trekker on a rural trail — rabies pre-exposure vaccination is recommended for adventure travel')); ?>" class="rabies-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="rabies-protect-content">
        <div class="rabies-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Three Doses, Simpler Treatment if Bitten')); ?></span>
        </div>

        <h3 class="rabies-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Pre-Exposure Protection Matters')); ?></h3>
        <p class="rabies-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Rabies attacks the central nervous system and is almost always fatal once symptoms appear, spread through bites, scratches or saliva from infected animals — dogs are responsible for around 99% of human cases worldwide. Pre-exposure vaccination is a three-dose course (days 0, 7, and 21 or 28), giving around 2 to 3 years' protection. It doesn't remove the need for medical care if you're bitten, but it simplifies the treatment you'd need and buys valuable time in areas where care may be harder to reach.")); ?></p>

        <ul class="rabies-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Three-Dose Course</strong><p>Given on days 0, 7 and 21–28 — plan to book at least 4 weeks before you travel.</p></div>
            </li>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="fas fa-hand-holding-medical"></i></div>
              <div class="text"><strong>Simplifies Post-Bite Care</strong><p>If vaccinated and later bitten, you'll typically need just 2 more doses and no immunoglobulin — unvaccinated people need 5 doses plus immunoglobulin, which isn't always available locally.</p></div>
            </li>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="fas fa-person-hiking"></i></div>
              <div class="text"><strong>Especially Relevant for Adventure Travel</strong><p>Worth prioritising for remote or rural trips, trekking, and travel with children, who are more likely to be bitten and less likely to report it.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="rabies-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="rabies-stats-section">
  <div class="section-container">
    <div class="rabies-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="rabies-stat-divider"></div><?php endif; ?>
        <div class="rabies-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">3 Doses</span><span class="label">Days 0, 7, 21–28</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">2–3 Years</span><span class="label">Protection</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">4 Weeks</span><span class="label">Before Travel</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">First Dose</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="rabies-about-section">
  <div class="section-container">
    <div class="rabies-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="rabies-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Rabies?')); ?></h2>
      <p class="rabies-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A viral infection spread by animal bites, found in over 150 countries')); ?></p>
    </div>

    <div class="rabies-about-content-grid">
      <div class="rabies-about-image-wrapper">
        <div class="rabies-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1630188354484-6e19a46e24fc?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'A stray dog on a street — dogs cause around 99% of human rabies cases worldwide')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="rabies-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="rabies-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Viral Infection</h3><p>Attacks the central nervous system and is almost always fatal once symptoms appear.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-dog"></i></div><h3>Mainly From Dogs</h3><p>Spread through bites, scratches or saliva from infected animals — dogs cause around 99% of human cases.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Found Widely</h3><p>Present in 150+ countries, particularly South Asia, Southeast Asia and sub-Saharan Africa.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>Pre-exposure vaccination, alongside prompt wound care, greatly improves your outlook if bitten.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="rabies-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'If You Are Bitten or Scratched')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "Wash the wound immediately with soap and water for at least 15 minutes, apply antiseptic, and seek medical attention as soon as possible — even if you've had the pre-exposure course. Vaccination simplifies treatment, but it doesn't replace the need for prompt medical care.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="rabies-needs-section">
  <div class="section-container">
    <div class="rabies-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="rabies-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="rabies-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for travellers to rabies-endemic regions, especially remote areas')); ?></p>
    </div>

    <div class="rabies-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Remote &amp; Rural Travellers</h3>
          <p class="nhs-card-desc">Especially worthwhile if you're heading somewhere medical care and rabies immunoglobulin may be hard to access quickly.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Remote or rural itineraries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Trekking or adventure travel</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Families travelling with children</span></li>
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
          <h3 class="nhs-card-title">Occupational Risk Groups</h3>
          <p class="nhs-card-desc">Worth having if your work brings you into regular contact with animals abroad.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Vets &amp; wildlife researchers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Bat handlers &amp; fieldwork staff</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Extended or repeat travel abroad</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="rabies-pricing-section" id="pricing">
  <div class="section-container">
    <div class="rabies-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="rabies-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Rabies Vaccination Pricing')); ?></h2>
      <p class="rabies-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Priced per dose — we will confirm your full course cost at your first appointment')); ?></p>
    </div>

    <div class="rabies-pricing-grid">
      <div class="rabies-pricing-card featured">
        <div class="rabies-pricing-ribbon">Per Dose</div>
        <h3 class="rabies-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Rabies Vaccine')); ?></h3>
        <div class="rabies-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£70')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="rabies-pricing-includes">
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Travel risk assessment &amp; advice</li>
          <li><i class="fas fa-check"></i> Full course scheduling support</li>
          <li><i class="fas fa-check"></i> Suitable for adults &amp; children</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="rabies-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price shown is per dose. The full course is 3 doses given over 21–28 days — not available on the NHS for travel purposes.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="rabies-details-section">
  <div class="section-container">
    <div class="rabies-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="rabies-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="rabies-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="rabies-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="rabies-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and confirm the course timing works for your trip.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>Given the same day at your first appointment, in the upper arm.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Course Scheduling</h3><p>We book your remaining doses on days 7 and 21–28 to complete the course before you travel.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — soreness at the injection site, headache, nausea, muscle aches or a slight fever.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Suitable for Children</h3><p>Children can be vaccinated too — worth considering given their higher bite risk.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="rabies-faq-section">
  <div class="section-container">
    <div class="rabies-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'RABIES FAQs')); ?></span>
      </div>
      <h2 class="rabies-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="rabies-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="rabies-faq-item">
          <button class="rabies-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="rabies-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Does vaccination mean I don't need treatment if I'm bitten?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>No — you'll still need medical attention if bitten or scratched, even after the pre-exposure course. What changes is the treatment: vaccinated people typically need just 2 more doses and no immunoglobulin, rather than 5 doses plus immunoglobulin.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How soon before travel should I start the course?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Book at least 4 weeks before you travel, so you have time to complete all three doses (given on days 0, 7 and 21–28).</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">What should I do if I'm bitten or scratched abroad?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Wash the wound immediately with soap and water for at least 15 minutes, apply antiseptic, and get medical attention as soon as you can — this matters whether or not you've been vaccinated.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Is there a faster schedule if I'm short on time?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>A 2-dose accelerated schedule may be possible in limited circumstances — contact us to discuss your travel dates and we'll advise what's suitable.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Side effects are usually mild — soreness at the injection site, headache, nausea, muscle aches or a slight fever. Serious reactions are rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47536474  (Rabies Vaccination)
     Location:       calendarID=10903457       (Denton Pharmacy)
                     Bowland uses calendarID=8436365
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536474&calendarID=10903457&ref=embedded_csp' );
?>
<section class="rabies-booking-section" id="booking-widget">
  <div class="rabies-booking-blob-1"></div>
  <div class="rabies-booking-blob-2"></div>
  <div class="section-container">
    <div class="rabies-booking-header">
      <h2 class="rabies-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Rabies Vaccination')); ?></h2>
      <p class="rabies-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="rabies-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Rabies vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="rabies-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="rabies-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="rabies-cta-section">
  <div class="rabies-cta-bg"></div>
  <div class="section-container">
    <div class="rabies-cta-content">
      <div class="rabies-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day First Dose</span>
          <span class="badge">Suitable for Children</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="rabies-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="rabies-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your rabies vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="rabies-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
