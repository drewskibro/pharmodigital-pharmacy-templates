<?php
/**
 * Template Name: Hepatitis B (Occupational) Vaccination
 * @package Bowland_Pharmacy
 *
 * Content adapted from mnctravelclinic.co.uk/service/hepatitis-b-occupational/.
 */

get_header();

$prefix = 'hepb-occ';
$vaccine_name = bp_field('vaccine_name', 'Hepatitis B (Occupational)');
?>

<!-- HERO SECTION — Pattern A Light -->
<section class="hepb-occ-hero-section">
  <div class="hepb-occ-hero-bg"></div>
  <div class="hepb-occ-hero-dots"></div>
  <div class="hepb-occ-hero-glow-1"></div>
  <div class="hepb-occ-hero-glow-2"></div>
  <div class="section-container">
    <div class="hepb-occ-hero-grid">

      <div class="hepb-occ-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'OCCUPATIONAL HEALTH SERVICE')); ?></span>
        </div>

        <h1 class="hepb-occ-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Occupational Hepatitis B Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="hepb-occ-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', 'Hepatitis B protection for people at risk through their work, here in Wythenshawe, Manchester. A full three-dose course with antibody testing and the records your employer needs — no GP referral required.')); ?>
        </p>

        <div class="hepb-occ-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Hepatitis B Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="hepb-occ-hero-trust">
          <div class="hepb-occ-hero-trust-item"><i class="fas fa-syringe"></i><span>3-Dose Course</span></div>
          <div class="hepb-occ-hero-trust-item"><i class="fas fa-vial"></i><span>Antibody Testing</span></div>
          <div class="hepb-occ-hero-trust-item"><i class="fas fa-file-medical"></i><span>Records for Employers</span></div>
        </div>
      </div>

      <div class="hepb-occ-hero-visual">
        <div class="hepb-occ-hero-float-badge">
          <span class="hepb-occ-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '3')); ?></span>
          <span class="hepb-occ-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="hepb-occ-trust-card">
          <div class="hepb-occ-trust-card-glow"></div>
          <div class="hepb-occ-trust-card-inner">
            <div class="hepb-occ-trust-card-header">
              <div class="hepb-occ-trust-card-icon"><i class="fas fa-shield-virus"></i></div>
              <span class="hepb-occ-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Hepatitis B Vaccine')); ?></span>
            </div>
            <div class="hepb-occ-trust-card-price">
              <span class="hepb-occ-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', 'From £30')); ?></span>
              <span class="hepb-occ-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="hepb-occ-trust-card-divider"></div>
            <ul class="hepb-occ-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Adult £35 &middot; Child £30 per dose</span></li>
              <li><i class="fas fa-check"></i> <span>Full course £105 adult / £90 child</span></li>
              <li><i class="fas fa-check"></i> <span>Antibody testing available</span></li>
            </ul>
            <div class="hepb-occ-trust-card-footer">
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
<section class="hepb-occ-protect-section">
  <div class="section-container">
    <div class="hepb-occ-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="hepb-occ-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'The Hepatitis B Vaccine')); ?></h2>
      <p class="hepb-occ-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'Essential protection for anyone exposed to blood or bodily fluids at work')); ?></p>
    </div>

    <div class="hepb-occ-protect-grid">
      <div class="hepb-occ-protect-image-wrapper">
        <div class="hepb-occ-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1612278247079-6a0af8ff2dee?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'Hepatitis B vaccination for a worker in Wythenshawe')); ?>" class="hepb-occ-protect-image" />
          <?php endif; ?>
          <div class="hepb-occ-protect-name-tag">
            <span class="name"><?php echo esc_html(bp_field('vaccine_protect_nametag_name', 'Bowland Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(bp_field('vaccine_protect_nametag_role', 'Occupational Health Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="hepb-occ-protect-content">
        <div class="hepb-occ-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', '95% Protection After the Full Course')); ?></span>
        </div>

        <h3 class="hepb-occ-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Protect Yourself at Work')); ?></h3>
        <p class="hepb-occ-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', 'Hepatitis B is a bloodborne virus that attacks the liver and can lead to chronic liver disease, cirrhosis and liver cancer. It is 50 to 100 times more infectious than HIV and can survive outside the body for up to a week. A full vaccination course gives around 95% protection and, once adequate antibody levels are reached, most people are protected for life.')); ?></p>

        <ul class="hepb-occ-protect-features">
          <li class="hepb-occ-protect-feature">
            <div class="icon"><i class="fas fa-list-ol"></i></div>
            <div class="text"><strong>Three-Dose Course</strong><p>Standard schedule at 0, 1 and 6 months. An accelerated 0, 1 and 2 month course is available if you need protection sooner.</p></div>
          </li>
          <li class="hepb-occ-protect-feature">
            <div class="icon"><i class="fas fa-vial"></i></div>
            <div class="text"><strong>Antibody Testing</strong><p>A blood test 4–8 weeks after your final dose confirms you're protected (100 mIU/mL or above).</p></div>
          </li>
          <li class="hepb-occ-protect-feature">
            <div class="icon"><i class="fas fa-file-medical"></i></div>
            <div class="text"><strong>Records for Work</strong><p>We provide vaccination records and antibody results for your occupational health file.</p></div>
          </li>
        </ul>

        <div class="hepb-occ-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="hepb-occ-stats-section">
  <div class="section-container">
    <div class="hepb-occ-stats-bar">
      <div class="hepb-occ-stat-item"><div class="icon"><i class="fas fa-list-ol"></i></div><div class="content"><span class="number">3 Doses</span><span class="label">0, 1 &amp; 6 Months</span></div></div>
      <div class="hepb-occ-stat-divider"></div>
      <div class="hepb-occ-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">95%</span><span class="label">Protection</span></div></div>
      <div class="hepb-occ-stat-divider"></div>
      <div class="hepb-occ-stat-item"><div class="icon"><i class="fas fa-virus"></i></div><div class="content"><span class="number">50–100x</span><span class="label">More Infectious Than HIV</span></div></div>
      <div class="hepb-occ-stat-divider"></div>
      <div class="hepb-occ-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="hepb-occ-about-section">
  <div class="section-container">
    <div class="hepb-occ-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE RISKS')); ?></span>
      </div>
      <h2 class="hepb-occ-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'Why Occupational Hep B Matters')); ?></h2>
      <p class="hepb-occ-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'Workplace exposure is a real and preventable risk')); ?></p>
    </div>

    <div class="hepb-occ-about-content-grid">
      <div class="hepb-occ-about-image-wrapper">
        <div class="hepb-occ-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1691139601099-932c01ec198b?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Healthcare workers — an at-risk group for hepatitis B')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hepb-occ-about-cards-grid">
        <div class="hepb-occ-info-card"><div class="icon"><i class="fas fa-droplet"></i></div><h3>Bloodborne Virus</h3><p>Hepatitis B spreads through contact with infected blood and bodily fluids, attacking the liver.</p></div>
        <div class="hepb-occ-info-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Workplace Exposure</h3><p>Needlestick injuries and contact with fluids or undiagnosed carriers put many workers at risk.</p></div>
        <div class="hepb-occ-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Highly Infectious</h3><p>It is 50–100 times more infectious than HIV and can survive outside the body for up to a week.</p></div>
        <div class="hepb-occ-info-card"><div class="icon"><i class="fas fa-scale-balanced"></i></div><h3>Employer Duty</h3><p>Under the Health and Safety at Work Act 1974, employers must protect staff from occupational risks.</p></div>
      </div>
    </div>

    <div class="hepb-occ-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'Often a Condition of Employment')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', 'For clinical staff, hepatitis B vaccination is strongly recommended and, in many NHS trusts, a condition of employment. We provide the vaccination records and antibody results you need for occupational health documentation.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="hepb-occ-needs-section">
  <div class="section-container">
    <div class="hepb-occ-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="hepb-occ-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Who should be vaccinated?')); ?></h2>
      <p class="hepb-occ-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Recommended for anyone exposed to blood or fluids at work')); ?></p>
    </div>

    <div class="hepb-occ-needs-grid">

      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">At-Risk Workers</h3>
          <p class="nhs-card-desc">Anyone whose job brings them into contact with blood, needles or bodily fluids.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Healthcare &amp; care home staff</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Paramedics &amp; emergency responders</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Lab, mortuary &amp; custodial staff</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

      <div class="nhs-card nhs-card-orange">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1"></rect></svg>
          </div>
          <span class="nhs-card-badge">Also For</span>
          <h3 class="nhs-card-title">Students &amp; Employers</h3>
          <p class="nhs-card-desc">For students starting clinical placements, and for organisations vaccinating their teams.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Healthcare &amp; medical students</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Drug &amp; alcohol service staff</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Group &amp; on-site sessions available</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section (two-tier: adult / child) -->
<section class="hepb-occ-pricing-section" id="pricing">
  <div class="section-container">
    <div class="hepb-occ-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="hepb-occ-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Hepatitis B Vaccination Pricing')); ?></h2>
      <p class="hepb-occ-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'Per dose or full 3-dose course — adult and child rates')); ?></p>
    </div>

    <div class="hepb-occ-pricing-grid hepb-occ-pricing-grid--two">
      <div class="hepb-occ-pricing-card featured">
        <div class="hepb-occ-pricing-ribbon">Adult</div>
        <h3 class="hepb-occ-pricing-name">Adult</h3>
        <div class="hepb-occ-pricing-amount">
          <span class="price">£35</span>
          <span class="per">per dose</span>
        </div>
        <ul class="hepb-occ-pricing-includes">
          <li><i class="fas fa-check"></i> <strong>£105</strong> full 3-dose course</li>
          <li><i class="fas fa-check"></i> Standard or accelerated schedule</li>
          <li><i class="fas fa-check"></i> Antibody testing available</li>
          <li><i class="fas fa-check"></i> Records for occupational health</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>

      <div class="hepb-occ-pricing-card">
        <div class="hepb-occ-pricing-ribbon">Child</div>
        <h3 class="hepb-occ-pricing-name">Child</h3>
        <div class="hepb-occ-pricing-amount">
          <span class="price">£30</span>
          <span class="per">per dose</span>
        </div>
        <ul class="hepb-occ-pricing-includes">
          <li><i class="fas fa-check"></i> <strong>£90</strong> full 3-dose course</li>
          <li><i class="fas fa-check"></i> Standard or accelerated schedule</li>
          <li><i class="fas fa-check"></i> Antibody testing available</li>
          <li><i class="fas fa-check"></i> Administered by our pharmacist</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button secondary-cta">Book Now</a>
      </div>
    </div>

    <p class="hepb-occ-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', 'A full course is three doses. Adult: £35 per dose / £105 for the course. Child: £30 per dose / £90 for the course. Antibody testing can be arranged 4–8 weeks after the final dose.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="hepb-occ-details-section">
  <div class="section-container">
    <div class="hepb-occ-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="hepb-occ-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What to expect')); ?></h2>
      <p class="hepb-occ-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A clear, documented process from start to finish')); ?></p>
    </div>

    <div class="hepb-occ-details-grid">
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Consultation</h3><p>We review your medical history and confirm the right schedule for your role.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>Your first injection is given and you receive a vaccination record on the day.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Follow-Up Doses</h3><p>Standard 0, 1 and 6 months, or accelerated 0, 1 and 2 months if you need cover sooner.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-vial"></i></div><h3>Antibody Test</h3><p>A blood test 4–8 weeks after the final dose confirms you're protected.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>A sore arm, mild headache or tiredness for a day or two are common and soon pass.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-file-medical"></i></div><h3>Documentation</h3><p>We provide records and antibody results for your occupational health file.</p></div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="hepb-occ-faq-section">
  <div class="section-container">
    <div class="hepb-occ-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'HEPATITIS B FAQs')); ?></span>
      </div>
      <h2 class="hepb-occ-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="hepb-occ-faq-list">
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>A full course is three doses, given at 0, 1 and 6 months. An accelerated 0, 1 and 2 month schedule is available if you need protection more quickly.</p></div></div>
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Is it required for my job?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>For clinical staff it's strongly recommended and, in many NHS trusts, a condition of employment. We provide the records and antibody results your employer needs.</p></div></div>
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">What is antibody testing?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>A blood test taken 4–8 weeks after your final dose to check your immune response. A level of 100 mIU/mL or above is considered protective.</p></div></div>
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Will I need a booster?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>Most people who respond well to the primary course are protected for life and don't need boosters. Your antibody results will guide whether one is recommended.</p></div></div>
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Can you vaccinate our team?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>Yes. We offer group vaccination sessions at the pharmacy or on-site for organisations — get in touch to arrange.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     owner=29286426 · appointmentType=47109341 (Hepatitis B for Occupational Health) · calendarID=8436365 (Wythenshawe; Bowland 8436365)
     Override per-page via ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47109341&calendarID=8436365&ref=embedded_csp' );
?>
<section class="hepb-occ-booking-section" id="booking-widget">
  <div class="hepb-occ-booking-blob-1"></div>
  <div class="hepb-occ-booking-blob-2"></div>
  <div class="section-container">
    <div class="hepb-occ-booking-header">
      <h2 class="hepb-occ-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Hepatitis B Vaccination')); ?></h2>
      <p class="hepb-occ-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Wythenshawe clinic')); ?></p>
    </div>

    <div class="hepb-occ-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Hepatitis B (occupational) vaccination appointment in Wythenshawe" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="hepb-occ-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="hepb-occ-booking-footer">
      <p>Vaccinating a team? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a> to arrange a group session.</p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="hepb-occ-cta-section">
  <div class="hepb-occ-cta-bg"></div>
  <div class="section-container">
    <div class="hepb-occ-cta-content">
      <div class="hepb-occ-cta-badges">
        <span class="badge">Same Day Appointments</span>
        <span class="badge">Records for Employers</span>
        <span class="badge">Group Sessions Available</span>
      </div>

      <h2 class="hepb-occ-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Protect yourself and your team')); ?></h2>
      <p class="hepb-occ-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', 'Book your occupational hepatitis B vaccination with our team in Wythenshawe today. Quick, professional, and fully documented.')); ?></p>

      <div class="hepb-occ-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
