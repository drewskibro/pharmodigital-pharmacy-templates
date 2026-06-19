<?php
/**
 * Template Name: Meningitis ACWY Vaccination
 * @package Denton_Pharmacy
 *
 * Content adapted from mnctravelclinic.co.uk/service/meningitis-acwy-vaccinations/.
 */

get_header();

$prefix = 'meningitis-acwy';
$vaccine_name = dp_field('vaccine_name', 'Meningitis ACWY');
?>

<!-- HERO SECTION — Pattern A Light -->
<section class="meningitis-acwy-hero-section">
  <div class="meningitis-acwy-hero-bg"></div>
  <div class="meningitis-acwy-hero-dots"></div>
  <div class="meningitis-acwy-hero-glow-1"></div>
  <div class="meningitis-acwy-hero-glow-2"></div>
  <div class="section-container">
    <div class="meningitis-acwy-hero-grid">

      <div class="meningitis-acwy-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'PRIVATE VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="meningitis-acwy-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Meningitis ACWY Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="meningitis-acwy-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', 'Protect against four strains of meningococcal disease with our private vaccination service in Denton, Manchester. A single dose covering groups A, C, W and Y — required for Hajj and Umrah travel, and recommended for students and travellers.')); ?>
        </p>

        <div class="meningitis-acwy-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Meningitis ACWY Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="meningitis-acwy-hero-trust">
          <div class="meningitis-acwy-hero-trust-item"><i class="fas fa-syringe"></i><span>Single Dose</span></div>
          <div class="meningitis-acwy-hero-trust-item"><i class="fas fa-shield-virus"></i><span>Covers A, C, W &amp; Y</span></div>
          <div class="meningitis-acwy-hero-trust-item"><i class="fas fa-plane"></i><span>Hajj &amp; Umrah Accepted</span></div>
        </div>
      </div>

      <div class="meningitis-acwy-hero-visual">
        <div class="meningitis-acwy-hero-float-badge">
          <span class="meningitis-acwy-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '1')); ?></span>
          <span class="meningitis-acwy-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'single dose')); ?></span>
        </div>
        <div class="meningitis-acwy-trust-card">
          <div class="meningitis-acwy-trust-card-glow"></div>
          <div class="meningitis-acwy-trust-card-inner">
            <div class="meningitis-acwy-trust-card-header">
              <div class="meningitis-acwy-trust-card-icon"><i class="fas fa-shield-virus"></i></div>
              <span class="meningitis-acwy-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Meningitis ACWY Vaccine')); ?></span>
            </div>
            <div class="meningitis-acwy-trust-card-price">
              <span class="meningitis-acwy-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£39')); ?></span>
              <span class="meningitis-acwy-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="meningitis-acwy-trust-card-divider"></div>
            <ul class="meningitis-acwy-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Covers groups A, C, W &amp; Y</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day travel certificate</span></li>
              <li><i class="fas fa-check"></i> <span>Protection valid for 5 years</span></li>
            </ul>
            <div class="meningitis-acwy-trust-card-footer">
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
<section class="meningitis-acwy-protect-section">
  <div class="section-container">
    <div class="meningitis-acwy-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="meningitis-acwy-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Meningitis ACWY Vaccine')); ?></h2>
      <p class="meningitis-acwy-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'One injection, four strains, five years of cover')); ?></p>
    </div>

    <div class="meningitis-acwy-protect-grid">
      <div class="meningitis-acwy-protect-image-wrapper">
        <div class="meningitis-acwy-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1612277795421-9bc7706a4a34?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Pharmacist giving a meningitis ACWY vaccination in Denton')); ?>" class="meningitis-acwy-protect-image" />
          <?php endif; ?>
          <div class="meningitis-acwy-protect-name-tag">
            <span class="name"><?php echo esc_html(dp_field('vaccine_protect_nametag_name', 'Denton Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(dp_field('vaccine_protect_nametag_role', 'Private Vaccination Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="meningitis-acwy-protect-content">
        <div class="meningitis-acwy-protect-badge-box">
          <i class="fas fa-earth-africa"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Required for Hajj &amp; Umrah')); ?></span>
        </div>

        <h3 class="meningitis-acwy-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Cover Against Four Strains')); ?></h3>
        <p class="meningitis-acwy-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', 'Meningitis ACWY protects against four groups of meningococcal bacteria (A, C, W and Y) that can cause meningitis and blood poisoning. It is given as a single injection, and the certificate is valid for five years — making it essential for pilgrims and a smart choice for students and travellers.')); ?></p>

        <ul class="meningitis-acwy-protect-features">
          <li class="meningitis-acwy-protect-feature">
            <div class="icon"><i class="fas fa-syringe"></i></div>
            <div class="text"><strong>Single Dose</strong><p>One injection into the upper arm — no course to complete.</p></div>
          </li>
          <li class="meningitis-acwy-protect-feature">
            <div class="icon"><i class="fas fa-passport"></i></div>
            <div class="text"><strong>Same-Day Certificate</strong><p>We issue your certificate on the day — accepted for Hajj and Umrah visas.</p></div>
          </li>
          <li class="meningitis-acwy-protect-feature">
            <div class="icon"><i class="fas fa-calendar-check"></i></div>
            <div class="text"><strong>Valid 5 Years</strong><p>Protection and the certificate last five years, so you're covered for future trips.</p></div>
          </li>
        </ul>

        <div class="meningitis-acwy-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="meningitis-acwy-stats-section">
  <div class="section-container">
    <div class="meningitis-acwy-stats-bar">
      <div class="meningitis-acwy-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">1 Dose</span><span class="label">Single Visit</span></div></div>
      <div class="meningitis-acwy-stat-divider"></div>
      <div class="meningitis-acwy-stat-item"><div class="icon"><i class="fas fa-shield-virus"></i></div><div class="content"><span class="number">A·C·W·Y</span><span class="label">Four Strains</span></div></div>
      <div class="meningitis-acwy-stat-divider"></div>
      <div class="meningitis-acwy-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">5 Years</span><span class="label">Certificate Valid</span></div></div>
      <div class="meningitis-acwy-stat-divider"></div>
      <div class="meningitis-acwy-stat-item"><div class="icon"><i class="fas fa-passport"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Certificate</span></div></div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="meningitis-acwy-about-section">
  <div class="section-container">
    <div class="meningitis-acwy-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="meningitis-acwy-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Meningitis ACWY?')); ?></h2>
      <p class="meningitis-acwy-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'One vaccine, four meningococcal groups')); ?></p>
    </div>

    <div class="meningitis-acwy-about-content-grid">
      <div class="meningitis-acwy-about-image-wrapper">
        <div class="meningitis-acwy-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1569617084133-26942bb441f2?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Students and young adults — a higher-risk group for meningitis')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="meningitis-acwy-about-cards-grid">
        <div class="meningitis-acwy-info-card"><div class="icon"><i class="fas fa-earth-africa"></i></div><h3>Group A</h3><p>Common in sub-Saharan Africa's "meningitis belt" — a key risk for travellers to the region.</p></div>
        <div class="meningitis-acwy-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Group C</h3><p>Once common in the UK and now vaccine-preventable, included for broad protection.</p></div>
        <div class="meningitis-acwy-info-card"><div class="icon"><i class="fas fa-kaaba"></i></div><h3>Group W</h3><p>Linked to Hajj and Umrah pilgrimages and large gatherings, which is why proof of vaccination is required.</p></div>
        <div class="meningitis-acwy-info-card"><div class="icon"><i class="fas fa-globe"></i></div><h3>Group Y</h3><p>Increasingly seen in Europe and North America, so cover is useful for many travellers.</p></div>
      </div>
    </div>

    <div class="meningitis-acwy-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'KNOW THE SIGNS')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'It Can Move Fast')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', 'Warning signs include a severe headache, high fever, a stiff neck, dislike of bright light and a rash that does not fade under a glass. Meningococcal bacteria spread through close respiratory contact, and the illness can become life-threatening quickly — seek emergency help if you suspect meningitis.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="meningitis-acwy-needs-section">
  <div class="section-container">
    <div class="meningitis-acwy-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="meningitis-acwy-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="meningitis-acwy-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Essential for pilgrims, recommended for students and travellers')); ?></p>
    </div>

    <div class="meningitis-acwy-needs-grid">

      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Students &amp; Young Adults</h3>
          <p class="nhs-card-desc">A second peak of risk hits teenagers and young adults, especially those starting university in shared accommodation.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>University &amp; college students</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Those in halls of residence</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Teens who missed NHS doses</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

      <div class="nhs-card nhs-card-orange">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path><circle cx="12" cy="12" r="10"></circle></svg>
          </div>
          <span class="nhs-card-badge">Essential For</span>
          <h3 class="nhs-card-title">Travellers &amp; Pilgrims</h3>
          <p class="nhs-card-desc">Mandatory for Hajj and Umrah, and strongly recommended for travel to the meningitis belt.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Hajj &amp; Umrah pilgrims</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travel to sub-Saharan Africa</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Large international gatherings</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="meningitis-acwy-pricing-section" id="pricing">
  <div class="section-container">
    <div class="meningitis-acwy-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="meningitis-acwy-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Meningitis ACWY Pricing')); ?></h2>
      <p class="meningitis-acwy-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Clear pricing per dose — certificate included')); ?></p>
    </div>

    <div class="meningitis-acwy-pricing-grid">
      <div class="meningitis-acwy-pricing-card featured">
        <div class="meningitis-acwy-pricing-ribbon">Single Dose</div>
        <h3 class="meningitis-acwy-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Meningitis ACWY Vaccine')); ?></h3>
        <div class="meningitis-acwy-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£39')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="meningitis-acwy-pricing-includes">
          <li><i class="fas fa-check"></i> Covers groups A, C, W &amp; Y</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Same-day travel certificate</li>
          <li><i class="fas fa-check"></i> Protection valid for 5 years</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="meningitis-acwy-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price is £39 per dose. For Hajj or Umrah, the certificate must be issued at least 10 days before you travel — book in good time.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="meningitis-acwy-details-section">
  <div class="section-container">
    <div class="meningitis-acwy-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="meningitis-acwy-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="meningitis-acwy-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="meningitis-acwy-details-grid">
      <div class="meningitis-acwy-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Quick Check</h3><p>We confirm your suitability and travel plans, and answer any questions before we start.</p></div>
      <div class="meningitis-acwy-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Single Injection</h3><p>One injection into the upper arm — quick and straightforward.</p></div>
      <div class="meningitis-acwy-detail-card"><div class="icon"><i class="fas fa-passport"></i></div><h3>Same-Day Certificate</h3><p>We issue your certificate on the day, accepted for Hajj and Umrah visas.</p></div>
      <div class="meningitis-acwy-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>A sore arm, mild fever or feeling off for a day or two are common and pass quickly.</p></div>
      <div class="meningitis-acwy-detail-card"><div class="icon"><i class="fas fa-clock"></i></div><h3>Timing Matters</h3><p>At least 10 days before Hajj/Umrah, and ideally 2 weeks before other travel.</p></div>
      <div class="meningitis-acwy-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>No referral needed, with same-day and last-minute appointments available.</p></div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="meningitis-acwy-faq-section">
  <div class="section-container">
    <div class="meningitis-acwy-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'MENINGITIS ACWY FAQs')); ?></span>
      </div>
      <h2 class="meningitis-acwy-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="meningitis-acwy-faq-list">
      <div class="meningitis-acwy-faq-item"><button class="meningitis-acwy-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Is it required for Hajj or Umrah?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-acwy-faq-content"><p>Yes. Meningitis ACWY is mandatory for Hajj and Umrah. Your certificate must be issued at least 10 days before you arrive in Saudi Arabia.</p></div></div>
      <div class="meningitis-acwy-faq-item"><button class="meningitis-acwy-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-acwy-faq-content"><p>For most people it's a single dose, which protects against all four groups (A, C, W and Y).</p></div></div>
      <div class="meningitis-acwy-faq-item"><button class="meningitis-acwy-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">How long does protection last?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-acwy-faq-content"><p>Around 5 years. A booster may be recommended if you remain at ongoing risk or travel again after that.</p></div></div>
      <div class="meningitis-acwy-faq-item"><button class="meningitis-acwy-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-acwy-faq-content"><p>Usually mild — soreness at the injection site, a mild fever or feeling off for a day or two. Serious side effects are uncommon.</p></div></div>
      <div class="meningitis-acwy-faq-item"><button class="meningitis-acwy-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">How soon before travel should I have it?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-acwy-faq-content"><p>At least 10 days before Hajj or Umrah, and ideally around 2 weeks before other travel to allow immunity to build.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     owner=29286426 · appointmentType=47536459 (Meningitis ACWY) · calendarID=10903457 (Denton; Bowland 8436365)
     Override per-page via ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536459&calendarID=10903457&ref=embedded_csp' );
?>
<section class="meningitis-acwy-booking-section" id="booking-widget">
  <div class="meningitis-acwy-booking-blob-1"></div>
  <div class="meningitis-acwy-booking-blob-2"></div>
  <div class="section-container">
    <div class="meningitis-acwy-booking-header">
      <h2 class="meningitis-acwy-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Meningitis ACWY Vaccination')); ?></h2>
      <p class="meningitis-acwy-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="meningitis-acwy-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Meningitis ACWY vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="meningitis-acwy-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="meningitis-acwy-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="meningitis-acwy-cta-section">
  <div class="meningitis-acwy-cta-bg"></div>
  <div class="section-container">
    <div class="meningitis-acwy-cta-content">
      <div class="meningitis-acwy-cta-badges">
        <span class="badge">Same Day Certificate</span>
        <span class="badge">Covers A, C, W &amp; Y</span>
        <span class="badge">No Referral Needed</span>
      </div>

      <h2 class="meningitis-acwy-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Get protected before you travel')); ?></h2>
      <p class="meningitis-acwy-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your meningitis ACWY vaccination with our friendly team in Denton today. Quick, convenient and certificate issued same day.')); ?></p>

      <div class="meningitis-acwy-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
