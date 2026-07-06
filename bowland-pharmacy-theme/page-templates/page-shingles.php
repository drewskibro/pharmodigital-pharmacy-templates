<?php
/**
 * Template Name: Shingles Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'shingles';
$vaccine_name = bp_field('vaccine_name', 'Shingles');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="shingles-hero-section">
  <div class="shingles-hero-bg"></div>
  <div class="shingles-hero-dots"></div>
  <div class="shingles-hero-glow-1"></div>
  <div class="shingles-hero-glow-2"></div>
  <div class="section-container">
    <div class="shingles-hero-grid">

      <!-- Left: Content -->
      <div class="shingles-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'PRIVATE VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="shingles-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Shingles Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="shingles-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', 'Protect yourself against shingles with our private vaccination service in Wythenshawe, Manchester. A two-dose vaccination course, recommended for adults from the age of 50, that reduces the risk of shingles and the painful nerve problems it can cause.')); ?>
        </p>

        <div class="shingles-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Shingles Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="shingles-hero-trust">
          <div class="shingles-hero-trust-item"><i class="fas fa-user-shield"></i><span>Recommended 50+</span></div>
          <div class="shingles-hero-trust-item"><i class="fas fa-syringe"></i><span>Two-Dose Course</span></div>
          <div class="shingles-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="shingles-hero-visual">
        <div class="shingles-hero-float-badge">
          <span class="shingles-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '2')); ?></span>
          <span class="shingles-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="shingles-trust-card">
          <div class="shingles-trust-card-glow"></div>
          <div class="shingles-trust-card-inner">
            <div class="shingles-trust-card-header">
              <div class="shingles-trust-card-icon"><i class="fas fa-shield-virus"></i></div>
              <span class="shingles-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Shingrix Vaccine')); ?></span>
            </div>
            <div class="shingles-trust-card-price">
              <span class="shingles-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£199')); ?></span>
              <span class="shingles-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="shingles-trust-card-divider"></div>
            <ul class="shingles-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Shingrix vaccine &amp; administration</span></li>
              <li><i class="fas fa-check"></i> <span>Two-dose course for full protection</span></li>
              <li><i class="fas fa-check"></i> <span>Suitability check &amp; advice</span></li>
            </ul>
            <div class="shingles-trust-card-footer">
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
<section class="shingles-protect-section">
  <div class="section-container">
    <div class="shingles-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="shingles-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'The Shingles Vaccine')); ?></h2>
      <p class="shingles-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'Strong protection against a painful condition that becomes more likely with age')); ?></p>
    </div>

    <div class="shingles-protect-grid">
      <div class="shingles-protect-image-wrapper">
        <div class="shingles-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'Pharmacist giving a shingles vaccination in Wythenshawe')); ?>" class="shingles-protect-image" />
          <?php endif; ?>
          <div class="shingles-protect-name-tag">
            <span class="name"><?php echo esc_html(bp_field('vaccine_protect_nametag_name', 'Bowland Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(bp_field('vaccine_protect_nametag_role', 'Private Vaccination Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="shingles-protect-content">
        <div class="shingles-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Reduces Risk, Severity & Nerve Pain')); ?></span>
        </div>

        <h3 class="shingles-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'A Two-Dose Course Against Shingles')); ?></h3>
        <p class="shingles-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', 'Shingles (herpes zoster) is caused by the same virus as chickenpox. It stays dormant in the nervous system and can reactivate years later as immunity weakens — causing a painful, blistering rash on one side of the body, often with lasting nerve pain (postherpetic neuralgia). A two-dose vaccination course reduces the risk of shingles and the chance of long-term nerve pain.')); ?></p>

        <ul class="shingles-protect-features">
          <li class="shingles-protect-feature">
            <div class="icon"><i class="fas fa-syringe"></i></div>
            <div class="text"><strong>Two-Dose Course</strong><p>Given as two injections 8 weeks to 6 months apart for full protection.</p></div>
          </li>
          <li class="shingles-protect-feature">
            <div class="icon"><i class="fas fa-shield-halved"></i></div>
            <div class="text"><strong>Less Shingles, Less Pain</strong><p>Reduces your risk of shingles, eases symptoms if it does occur, and helps prevent lasting nerve pain.</p></div>
          </li>
          <li class="shingles-protect-feature">
            <div class="icon"><i class="fas fa-user-clock"></i></div>
            <div class="text"><strong>Risk Rises With Age</strong><p>Shingles is more common and more severe as you get older, which is why it's recommended from age 50.</p></div>
          </li>
        </ul>

        <div class="shingles-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="shingles-stats-section">
  <div class="section-container">
    <div class="shingles-stats-bar">
      <div class="shingles-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">2 Doses</span><span class="label">Full Course</span></div></div>
      <div class="shingles-stat-divider"></div>
      <div class="shingles-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">Years</span><span class="label">Of Protection</span></div></div>
      <div class="shingles-stat-divider"></div>
      <div class="shingles-stat-item"><div class="icon"><i class="fas fa-user-clock"></i></div><div class="content"><span class="number">50+</span><span class="label">Most at Risk</span></div></div>
      <div class="shingles-stat-divider"></div>
      <div class="shingles-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="shingles-about-section">
  <div class="section-container">
    <div class="shingles-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="shingles-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'What is Shingles?')); ?></h2>
      <p class="shingles-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A painful reactivation of the chickenpox virus')); ?></p>
    </div>

    <div class="shingles-about-content-grid">
      <div class="shingles-about-image-wrapper">
        <div class="shingles-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1586498024141-1940debde48d?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Older adult considering shingles vaccination')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="shingles-about-cards-grid">
        <div class="shingles-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Reactivated Virus</h3><p>Shingles is caused by the chickenpox virus reactivating years later. If you've had chickenpox, the virus is already in your body.</p></div>
        <div class="shingles-info-card"><div class="icon"><i class="fas fa-bolt"></i></div><h3>Painful Rash</h3><p>It usually appears as a band of blisters on one side of the body or face, often with burning or stabbing pain.</p></div>
        <div class="shingles-info-card"><div class="icon"><i class="fas fa-bandage"></i></div><h3>Lasting Nerve Pain</h3><p>Some people develop post-herpetic neuralgia — nerve pain that can last for months or years after the rash clears.</p></div>
        <div class="shingles-info-card"><div class="icon"><i class="fas fa-user-clock"></i></div><h3>Risk Rises With Age</h3><p>Shingles becomes more common and more serious with age, especially from 50 onwards or with a weakened immune system.</p></div>
      </div>
    </div>

    <div class="shingles-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'Had Chickenpox? You Carry the Virus')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', 'Almost everyone who had chickenpox as a child carries the dormant virus and can develop shingles later in life. Vaccination with Shingrix dramatically reduces that risk and the chance of long-term nerve pain.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="shingles-needs-section">
  <div class="section-container">
    <div class="shingles-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="shingles-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="shingles-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Recommended for older adults and those at higher risk')); ?></p>
    </div>

    <div class="shingles-needs-grid">

      <!-- Recommended (green) — Home NHS card model -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Adults 50 and Over</h3>
          <p class="nhs-card-desc">Shingles risk climbs with age, so vaccination is recommended for older adults who want to avoid it.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Adults aged 50 and over</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Anyone who has had chickenpox</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Private service ideal for adults aged 50–64 wanting protection before NHS eligibility</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

      <!-- Especially useful (orange) — Home NHS card model -->
      <div class="nhs-card nhs-card-orange">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <span class="nhs-card-badge">Especially Useful</span>
          <h3 class="nhs-card-title">Higher-Risk Adults</h3>
          <p class="nhs-card-desc">Particularly worth considering if you are more likely to get shingles or to have complications.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Weakened immune system</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Had shingles before</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Immunosuppressed adults who want a convenient private appointment</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>

    <div class="shingles-about-callout">
      <div class="badge">NHS Eligibility</div>
      <p>The shingles vaccine is available free on the NHS for adults turning 65 or 70, adults aged 70–79 who have not yet been vaccinated, and all severely immunosuppressed adults aged 18 and over. Our private service is ideal for adults aged 50–64 who want protection sooner, or anyone who prefers the convenience of a same-day appointment at our Wythenshawe clinic.</p>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="shingles-pricing-section" id="pricing">
  <div class="section-container">
    <div class="shingles-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="shingles-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Shingles Vaccination Pricing')); ?></h2>
      <p class="shingles-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'Clear pricing per dose — no hidden extras')); ?></p>
    </div>

    <div class="shingles-pricing-grid">
      <div class="shingles-pricing-card featured">
        <div class="shingles-pricing-ribbon">Shingrix</div>
        <h3 class="shingles-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Shingrix Vaccine')); ?></h3>
        <div class="shingles-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£199')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="shingles-pricing-includes">
          <li><i class="fas fa-check"></i> Shingrix vaccine</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Suitability check &amp; advice</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="shingles-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', 'Price is £199 per dose, so the full two-dose course is £398. Both doses are required for maximum protection and are given 8 weeks to 6 months apart. No booster is currently recommended after completing the course. Please ask our team if you have any questions about suitability.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="shingles-details-section">
  <div class="section-container">
    <div class="shingles-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="shingles-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="shingles-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A simple, friendly visit to our Wythenshawe clinic')); ?></p>
    </div>

    <div class="shingles-details-grid">
      <div class="shingles-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Quick Check</h3><p>We confirm you're suitable for Shingrix and answer any questions before we start.</p></div>
      <div class="shingles-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>The injection takes just a moment and is given in the upper arm.</p></div>
      <div class="shingles-detail-card"><div class="icon"><i class="fas fa-calendar-check"></i></div><h3>Two Visits</h3><p>The second dose is given 8 weeks to 6 months after the first to complete the course.</p></div>
      <div class="shingles-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>A sore arm, tiredness or aches for a day or two are common and pass quickly.</p></div>
      <div class="shingles-detail-card"><div class="icon"><i class="fas fa-user-shield"></i></div><h3>Recommended 50+</h3><p>Most suitable for adults from 50, and for at-risk adults from 18. We'll advise on timing.</p></div>
      <div class="shingles-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>For those outside NHS eligibility, or who want it sooner — no referral needed.</p></div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="shingles-faq-section">
  <div class="section-container">
    <div class="shingles-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'SHINGLES FAQs')); ?></span>
      </div>
      <h2 class="shingles-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="shingles-faq-list">
      <div class="shingles-faq-item"><button class="shingles-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="shingles-faq-content"><p>Shingrix is given as a two-dose course — the second dose is given 8 weeks to 6 months after the first. Protection lasts for several years.</p></div></div>
      <div class="shingles-faq-item"><button class="shingles-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Who should have the shingles vaccine?</span><i class="fas fa-plus icon"></i></button><div class="shingles-faq-content"><p>It's recommended for adults from age 50, and for at-risk adults from 18 (for example, those with a weakened immune system). We can check your suitability at your appointment.</p></div></div>
      <div class="shingles-faq-item"><button class="shingles-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">I've had shingles before — can I still be vaccinated?</span><i class="fas fa-plus icon"></i></button><div class="shingles-faq-content"><p>Yes. You can have shingles more than once, so vaccination is recommended even if you've had it before. We'd usually wait until the episode has fully settled.</p></div></div>
      <div class="shingles-faq-item"><button class="shingles-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="shingles-faq-content"><p>Side effects are usually mild and short-lived — a sore arm, tiredness, headache or aches for a day or two. Serious reactions are very rare.</p></div></div>
      <div class="shingles-faq-item"><button class="shingles-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Is the shingles vaccine the same as the chickenpox one?</span><i class="fas fa-plus icon"></i></button><div class="shingles-faq-content"><p>No. They protect against the same family of virus but are different vaccines. Shingrix is specifically designed to prevent shingles and its complications in adults.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47536588  (Shingles Vaccination)
     Location:       calendarID=8436365       (Bowland Pharmacy)
                     Bowland uses calendarID=8436365
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536588&calendarID=8436365&ref=embedded_csp' );
?>
<section class="shingles-booking-section" id="booking-widget">
  <div class="shingles-booking-blob-1"></div>
  <div class="shingles-booking-blob-2"></div>
  <div class="section-container">
    <div class="shingles-booking-header">
      <h2 class="shingles-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Shingles Vaccination')); ?></h2>
      <p class="shingles-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Wythenshawe clinic')); ?></p>
    </div>

    <div class="shingles-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Shingles vaccination appointment in Wythenshawe" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="shingles-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="shingles-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="shingles-cta-section">
  <div class="shingles-cta-bg"></div>
  <div class="section-container">
    <div class="shingles-cta-content">
      <div class="shingles-cta-badges">
        <span class="badge">Same Day Appointments</span>
        <span class="badge">Recommended 50+</span>
        <span class="badge">No Referral Needed</span>
      </div>

      <h2 class="shingles-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Protect yourself against shingles')); ?></h2>
      <p class="shingles-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', 'Book your shingles vaccination with our friendly team in Wythenshawe today. Quick, convenient and professional.')); ?></p>

      <div class="shingles-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
