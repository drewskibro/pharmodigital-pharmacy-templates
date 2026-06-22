<?php
/**
 * Template Name: Corporate Vaccination
 * @package Bowland_Pharmacy
 *
 * Content adapted from mnctravelclinic.co.uk/service/corporate/.
 * No Acuity calendar — this is a bespoke service; the booking section is a
 * "Request a quote" block instead, and pricing is "Contact us for a quote".
 */

get_header();

$prefix = 'corporate';
$vaccine_name = bp_field('vaccine_name', 'Corporate Vaccinations');
?>

<!-- HERO SECTION — Pattern A Light -->
<section class="corporate-hero-section">
  <div class="corporate-hero-bg"></div>
  <div class="corporate-hero-dots"></div>
  <div class="corporate-hero-glow-1"></div>
  <div class="corporate-hero-glow-2"></div>
  <div class="section-container">
    <div class="corporate-hero-grid">

      <div class="corporate-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'CORPORATE & WORKPLACE HEALTH')); ?></span>
        </div>

        <h1 class="corporate-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Corporate Vaccinations')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="corporate-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', 'Workplace vaccination programmes for businesses across Wythenshawe and Greater Manchester. Tailored, flexible solutions for teams of any size — on-site at your workplace or here at our Wythenshawe clinic.')); ?>
        </p>

        <div class="corporate-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Request a Quote')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="corporate-hero-trust">
          <div class="corporate-hero-trust-item"><i class="fas fa-building"></i><span>On-Site or In-Clinic</span></div>
          <div class="corporate-hero-trust-item"><i class="fas fa-users"></i><span>Any Team Size</span></div>
          <div class="corporate-hero-trust-item"><i class="fas fa-syringe"></i><span>50+ Vaccines</span></div>
        </div>
      </div>

      <div class="corporate-hero-visual">
        <div class="corporate-hero-float-badge">
          <span class="corporate-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '50+')); ?></span>
          <span class="corporate-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'vaccines available')); ?></span>
        </div>
        <div class="corporate-trust-card">
          <div class="corporate-trust-card-glow"></div>
          <div class="corporate-trust-card-inner">
            <div class="corporate-trust-card-header">
              <div class="corporate-trust-card-icon"><i class="fas fa-briefcase-medical"></i></div>
              <span class="corporate-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Workplace Programmes')); ?></span>
            </div>
            <div class="corporate-trust-card-price">
              <span class="corporate-trust-card-amount corporate-trust-card-amount--text"><?php echo esc_html(bp_field('vaccine_price_amount', 'Bespoke')); ?></span>
              <span class="corporate-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'contact us for a quote')); ?></span>
            </div>
            <div class="corporate-trust-card-divider"></div>
            <ul class="corporate-trust-card-list">
              <li><i class="fas fa-check"></i> <span>On-site or at our clinic</span></li>
              <li><i class="fas fa-check"></i> <span>Bulk discounts for 10+ staff</span></li>
              <li><i class="fas fa-check"></i> <span>Records &amp; certificates for HR</span></li>
            </ul>
            <div class="corporate-trust-card-footer">
              <i class="fas fa-shield-halved"></i>
              <span>GPhC Registered Pharmacy</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Overview Section -->
<section class="corporate-protect-section">
  <div class="section-container">
    <div class="corporate-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY CHOOSE US')); ?></span>
      </div>
      <h2 class="corporate-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'Workplace Vaccination Made Simple')); ?></h2>
      <p class="corporate-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'Protect your team and reduce absenteeism, with minimal disruption')); ?></p>
    </div>

    <div class="corporate-protect-grid">
      <div class="corporate-protect-image-wrapper">
        <div class="corporate-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1690378820474-b468b8ee64d3?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'A workplace team in Wythenshawe, Manchester')); ?>" class="corporate-protect-image" />
          <?php endif; ?>
          <div class="corporate-protect-name-tag">
            <span class="name"><?php echo esc_html(bp_field('vaccine_protect_nametag_name', 'Bowland Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(bp_field('vaccine_protect_nametag_role', 'Corporate Health Team')); ?></span>
          </div>
        </div>
      </div>

      <div class="corporate-protect-content">
        <div class="corporate-protect-badge-box">
          <i class="fas fa-briefcase-medical"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Flexible Around Your Business')); ?></span>
        </div>

        <h3 class="corporate-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Three Ways to Vaccinate Your Team')); ?></h3>
        <p class="corporate-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', 'Our GPhC-registered clinical team delivers tailored vaccination programmes for businesses of any size. We work around your operations to keep disruption to a minimum, and provide full record-keeping for HR and compliance.')); ?></p>

        <ul class="corporate-protect-features">
          <li class="corporate-protect-feature">
            <div class="icon"><i class="fas fa-building"></i></div>
            <div class="text"><strong>On-Site Clinics</strong><p>A qualified nurse visits your workplace, so your team is vaccinated with minimal time away from work.</p></div>
          </li>
          <li class="corporate-protect-feature">
            <div class="icon"><i class="fas fa-clinic-medical"></i></div>
            <div class="text"><strong>At Our Clinic</strong><p>Employees attend our Wythenshawe pharmacy at flexible times — no on-site space needed.</p></div>
          </li>
          <li class="corporate-protect-feature">
            <div class="icon"><i class="fas fa-tags"></i></div>
            <div class="text"><strong>Bulk Discounts</strong><p>Special pricing for 10+ employees, with bespoke quotes for larger groups.</p></div>
          </li>
        </ul>

        <div class="corporate-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Request a Quote</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="corporate-stats-section">
  <div class="section-container">
    <div class="corporate-stats-bar">
      <div class="corporate-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">50+</span><span class="label">Vaccines Available</span></div></div>
      <div class="corporate-stat-divider"></div>
      <div class="corporate-stat-item"><div class="icon"><i class="fas fa-users"></i></div><div class="content"><span class="number">Any Size</span><span class="label">Team</span></div></div>
      <div class="corporate-stat-divider"></div>
      <div class="corporate-stat-item"><div class="icon"><i class="fas fa-building"></i></div><div class="content"><span class="number">On-Site</span><span class="label">Or In-Clinic</span></div></div>
      <div class="corporate-stat-divider"></div>
      <div class="corporate-stat-item"><div class="icon"><i class="fas fa-file-medical"></i></div><div class="content"><span class="number">HR Records</span><span class="label">Provided</span></div></div>
    </div>
  </div>
</section>

<!-- About / What We Offer -->
<section class="corporate-about-section">
  <div class="section-container">
    <div class="corporate-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'WHAT WE OFFER')); ?></span>
      </div>
      <h2 class="corporate-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'Vaccines & Services for Your Team')); ?></h2>
      <p class="corporate-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'From seasonal flu to travel health — all in one place')); ?></p>
    </div>

    <div class="corporate-about-content-grid">
      <div class="corporate-about-image-wrapper">
        <div class="corporate-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1758691737124-05c5bffe46f0?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Business team — workplace vaccination programmes')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="corporate-about-cards-grid">
        <div class="corporate-info-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Seasonal Flu Jabs</h3><p>Keep your workforce protected through flu season and reduce winter absence.</p></div>
        <div class="corporate-info-card"><div class="icon"><i class="fas fa-plane"></i></div><h3>Travel Vaccinations</h3><p>Yellow Fever, Hepatitis A &amp; B, Typhoid, Malaria prevention and more for staff who travel.</p></div>
        <div class="corporate-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>COVID-19 Boosters</h3><p>Keep teams up to date with COVID-19 vaccinations and boosters.</p></div>
        <div class="corporate-info-card"><div class="icon"><i class="fas fa-vial"></i></div><h3>Health Screening</h3><p>Blood testing and health checks to support workplace wellbeing.</p></div>
      </div>
    </div>

    <div class="corporate-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'THE BUSINESS CASE')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'Fewer Sick Days, Healthier Teams')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', 'Preventive vaccination reduces absenteeism and keeps your business running smoothly. We offer transparent, upfront pricing with no hidden charges, plus full vaccination records for HR and compliance.')); ?></p>
    </div>
  </div>
</section>

<!-- Delivery Models -->
<section class="corporate-needs-section">
  <div class="section-container">
    <div class="corporate-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'HOW IT WORKS')); ?></span>
      </div>
      <h2 class="corporate-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Choose how we deliver it')); ?></h2>
      <p class="corporate-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Two flexible options to suit your business')); ?></p>
    </div>

    <div class="corporate-needs-grid">

      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-3"></path></svg>
          </div>
          <span class="nhs-card-badge">Option 1</span>
          <h3 class="nhs-card-title">On-Site at Your Workplace</h3>
          <p class="nhs-card-desc">A qualified nurse comes to you, vaccinating your team with minimal time away from work.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Minimal disruption to your day</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Ideal for larger teams</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Records provided for HR</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Request a Quote</a>
        </div>
      </div>

      <div class="nhs-card nhs-card-orange">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <span class="nhs-card-badge">Option 2</span>
          <h3 class="nhs-card-title">At Our Wythenshawe Clinic</h3>
          <p class="nhs-card-desc">Employees attend our pharmacy at flexible times — no on-site space required.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Flexible appointment times</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Great for smaller teams</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Staff can book under your account</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Request a Quote</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section (bespoke / quote) -->
<section class="corporate-pricing-section" id="pricing">
  <div class="section-container">
    <div class="corporate-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'PRICING')); ?></span>
      </div>
      <h2 class="corporate-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Bespoke Pricing for Your Business')); ?></h2>
      <p class="corporate-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'Transparent, upfront quotes — no hidden charges')); ?></p>
    </div>

    <div class="corporate-pricing-grid">
      <div class="corporate-pricing-card featured">
        <div class="corporate-pricing-ribbon">Tailored</div>
        <h3 class="corporate-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Corporate Programme')); ?></h3>
        <div class="corporate-pricing-amount">
          <span class="price corporate-pricing-amount--text"><?php echo esc_html(bp_field('vaccine_price_amount', 'Contact us for a quote')); ?></span>
        </div>
        <ul class="corporate-pricing-includes">
          <li><i class="fas fa-check"></i> Bespoke pricing for your team size</li>
          <li><i class="fas fa-check"></i> Bulk discounts for 10+ employees</li>
          <li><i class="fas fa-check"></i> On-site or in-clinic delivery</li>
          <li><i class="fas fa-check"></i> Records &amp; certificates for HR</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Request a Quote</a>
      </div>
    </div>

    <p class="corporate-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', 'Pricing is tailored to your team size, the vaccines needed and your preferred delivery method. Bulk discounts apply for 10+ employees. Contact us for a fast, no-obligation quote.')); ?></p>
  </div>
</section>

<!-- How It Works steps -->
<section class="corporate-details-section">
  <div class="section-container">
    <div class="corporate-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'SIMPLE PROCESS')); ?></span>
      </div>
      <h2 class="corporate-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'How it works')); ?></h2>
      <p class="corporate-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'From first call to fully vaccinated team')); ?></p>
    </div>

    <div class="corporate-details-grid">
      <div class="corporate-detail-card"><div class="icon"><i class="fas fa-phone"></i></div><h3>1. Get in Touch</h3><p>Tell us your team size, the vaccines you need and your preferred delivery method.</p></div>
      <div class="corporate-detail-card"><div class="icon"><i class="fas fa-file-signature"></i></div><h3>2. Tailored Quote</h3><p>We send a fast, transparent quote with no hidden charges, plus bulk discounts for 10+.</p></div>
      <div class="corporate-detail-card"><div class="icon"><i class="fas fa-calendar-check"></i></div><h3>3. We Schedule</h3><p>We agree dates that work around your operations — on-site or at our clinic.</p></div>
      <div class="corporate-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>4. We Vaccinate</h3><p>Our GPhC-registered team vaccinates your staff quickly and professionally.</p></div>
      <div class="corporate-detail-card"><div class="icon"><i class="fas fa-file-medical"></i></div><h3>5. Records for HR</h3><p>Every employee gets a certificate, and you receive full records for compliance.</p></div>
      <div class="corporate-detail-card"><div class="icon"><i class="fas fa-people-group"></i></div><h3>Any Team Size</h3><p>From a handful of staff to hundreds — we scale the programme to fit.</p></div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="corporate-faq-section">
  <div class="section-container">
    <div class="corporate-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'CORPORATE FAQs')); ?></span>
      </div>
      <h2 class="corporate-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="corporate-faq-list">
      <div class="corporate-faq-item"><button class="corporate-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Do you come to our workplace?</span><i class="fas fa-plus icon"></i></button><div class="corporate-faq-content"><p>Yes. A qualified nurse can run an on-site clinic at your premises. Alternatively, your team can attend our Wythenshawe pharmacy at flexible times.</p></div></div>
      <div class="corporate-faq-item"><button class="corporate-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">What size teams do you cover?</span><i class="fas fa-plus icon"></i></button><div class="corporate-faq-content"><p>Any size — from a handful of staff to several hundred. Bulk discounts apply for groups of 10 or more.</p></div></div>
      <div class="corporate-faq-item"><button class="corporate-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Which vaccines can you provide?</span><i class="fas fa-plus icon"></i></button><div class="corporate-faq-content"><p>Over 50, including seasonal flu, COVID-19 boosters, travel vaccinations and occupational hepatitis B, plus blood testing and health screening.</p></div></div>
      <div class="corporate-faq-item"><button class="corporate-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Do you provide records for HR?</span><i class="fas fa-plus icon"></i></button><div class="corporate-faq-content"><p>Yes. Every employee receives a certificate, and we provide full vaccination records for HR and compliance.</p></div></div>
      <div class="corporate-faq-item"><button class="corporate-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">How do we get started?</span><i class="fas fa-plus icon"></i></button><div class="corporate-faq-content"><p>Request a quote with your team size, the vaccines you need and your preferred delivery method — we'll respond quickly with a tailored proposal.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================
     REQUEST A QUOTE — replaces the Acuity calendar (Corporate is a bespoke,
     quote-based service with no individual online booking).
     ============================================ -->
<section class="corporate-booking-section" id="booking-widget">
  <div class="corporate-booking-blob-1"></div>
  <div class="corporate-booking-blob-2"></div>
  <div class="section-container">
    <div class="corporate-booking-header">
      <h2 class="corporate-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Request a Corporate Quote')); ?></h2>
      <p class="corporate-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Tell us your team size, the vaccines you need and whether you\'d prefer on-site or in-clinic — we\'ll send a tailored, no-obligation quote.')); ?></p>
    </div>

    <div class="corporate-quote-box">
      <div class="corporate-quote-actions">
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button primary-cta">
          <i class="fas fa-phone"></i> <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta-button secondary-cta">
          <i class="fas fa-envelope"></i> Send an Enquiry
        </a>
      </div>
      <ul class="corporate-quote-checklist">
        <li><i class="fas fa-check"></i> Approximate team size</li>
        <li><i class="fas fa-check"></i> Vaccines or services needed</li>
        <li><i class="fas fa-check"></i> On-site or at our clinic</li>
      </ul>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="corporate-cta-section">
  <div class="corporate-cta-bg"></div>
  <div class="section-container">
    <div class="corporate-cta-content">
      <div class="corporate-cta-badges">
        <span class="badge">On-Site or In-Clinic</span>
        <span class="badge">Bulk Discounts</span>
        <span class="badge">Fast Response</span>
      </div>

      <h2 class="corporate-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Protect your workforce')); ?></h2>
      <p class="corporate-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', 'Get a tailored quote for your workplace vaccination programme in Wythenshawe today. Flexible, professional and fully documented.')); ?></p>

      <div class="corporate-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Request a Quote</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
