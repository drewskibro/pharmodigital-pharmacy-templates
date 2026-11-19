<?php
/**
 * Template Name: Hepatitis B (Occupational) Vaccination
 * @package Denton_Pharmacy
 *
 * Content adapted from mnctravelclinic.co.uk/service/hepatitis-b-occupational/.
 */

get_header();

$prefix = 'hepb-occ';
$vaccine_name = dp_field('vaccine_name', 'Hepatitis B (Occupational)');
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
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'OCCUPATIONAL HEALTH SERVICE')); ?></span>
        </div>

        <h1 class="hepb-occ-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Occupational Hepatitis B Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="hepb-occ-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', 'Hepatitis B protection for people at risk through their work, here in Denton, Manchester. A full vaccination course, with antibody testing available and a record of each dose for your employer. No GP referral required.')); ?>
        </p>

        <div class="hepb-occ-hero-actions travel-appointment-actions">
          <a href="<?php echo esc_url( at_travel_booking_url( 'c2', 'service-hero' ) ); ?>" class="cta-button primary-cta">Book occupational hepatitis B vaccination</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
          <a href="<?php echo esc_url( at_travel_booking_url( 'c3', 'service-hero' ) ); ?>" class="cta-button secondary-cta">Book a hepatitis B immunity blood test</a>
        </div>

        <div class="hepb-occ-hero-trust">
          <div class="hepb-occ-hero-trust-item"><i class="fas fa-syringe"></i><span>3 or 4 Dose Course</span></div>
          <div class="hepb-occ-hero-trust-item"><i class="fas fa-vial"></i><span>Antibody Testing</span></div>
          <div class="hepb-occ-hero-trust-item"><i class="fas fa-file-medical"></i><span>Records for Employers</span></div>
        </div>
      </div>

      <div class="hepb-occ-hero-visual">
        <div class="hepb-occ-hero-float-badge">
          <span class="hepb-occ-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '3 or 4')); ?></span>
          <span class="hepb-occ-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="hepb-occ-trust-card">
          <div class="hepb-occ-trust-card-glow"></div>
          <div class="hepb-occ-trust-card-inner">
            <div class="hepb-occ-trust-card-header">
              <div class="hepb-occ-trust-card-icon"><i class="fas fa-shield-virus"></i></div>
              <span class="hepb-occ-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Hepatitis B Vaccine')); ?></span>
            </div>
            <div class="hepb-occ-trust-card-price">
              <span class="hepb-occ-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', 'From £30')); ?></span>
              <span class="hepb-occ-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="hepb-occ-trust-card-divider"></div>
            <ul class="hepb-occ-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Adult £35 &middot; Child £30 per dose</span></li>
              <li><i class="fas fa-check"></i> <span>3-dose course £105 adult / £90 child; 4-dose course £140 adult / £120 child</span></li>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="hepb-occ-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Hepatitis B Vaccine')); ?></h2>
      <p class="hepb-occ-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'Essential protection for anyone exposed to blood or bodily fluids at work')); ?></p>
    </div>

    <div class="hepb-occ-protect-grid">
      <div class="hepb-occ-protect-image-wrapper">
        <div class="hepb-occ-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1612278247079-6a0af8ff2dee?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Hepatitis B vaccination for a worker in Denton')); ?>" class="hepb-occ-protect-image" />
          <?php endif; ?>
          <div class="hepb-occ-protect-name-tag">
            <span class="name"><?php echo esc_html(dp_field('vaccine_protect_nametag_name', 'Denton Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(dp_field('vaccine_protect_nametag_role', 'Occupational Health Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="hepb-occ-protect-content">
        <div class="hepb-occ-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Most Adults Respond Well to a Full Course')); ?></span>
        </div>

        <h3 class="hepb-occ-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Protect Yourself at Work')); ?></h3>
        <p class="hepb-occ-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', 'Hepatitis B is a bloodborne virus that attacks the liver and can lead to chronic liver disease, cirrhosis and liver cancer. It is 50 to 100 times more infectious than HIV and can survive outside the body for up to a week. Around 90% of adults respond well to a full course, and most people who respond do not need a booster.')); ?></p>

        <ul class="hepb-occ-protect-features">
          <li class="hepb-occ-protect-feature">
            <div class="icon"><i class="fas fa-list-ol"></i></div>
            <div class="text"><strong>Three Schedules</strong><p>Standard course: 3 doses at 0, 1 and 6 months. Accelerated course: 4 doses at 0, 1, 2 and 12 months. Very rapid course, for adults 18 and over: 4 doses, on days 0, 7 and 21 and at 12 months. The faster courses protect you sooner, but the course is only complete after the 12-month dose.</p></div>
          </li>
          <li class="hepb-occ-protect-feature">
            <div class="icon"><i class="fas fa-vial"></i></div>
            <div class="text"><strong>Antibody Testing</strong><p>A blood test 1 to 2 months after the last dose of your course (the 6-month dose, or the 12-month dose on a 4-dose course) shows how well you have responded.</p></div>
          </li>
          <li class="hepb-occ-protect-feature">
            <div class="icon"><i class="fas fa-file-medical"></i></div>
            <div class="text"><strong>Records for Work</strong><p>We provide vaccination records for your occupational health file. If you have an antibody test, we take the blood sample here and the laboratory sends the result to you.</p></div>
          </li>
        </ul>

        <div class="hepb-occ-protect-actions">
          <a href="<?php echo esc_url( at_travel_booking_url( 'c2', 'service-body' ) ); ?>" class="cta-button primary-cta">Book occupational hepatitis B vaccination</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="hepb-occ-stats-section">
  <div class="section-container">
    <div class="hepb-occ-stats-bar">
      <div class="hepb-occ-stat-item"><div class="icon"><i class="fas fa-list-ol"></i></div><div class="content"><span class="number">3 or 4 Doses</span><span class="label">Depending on Schedule</span></div></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE RISKS')); ?></span>
      </div>
      <h2 class="hepb-occ-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'Why Occupational Hep B Matters')); ?></h2>
      <p class="hepb-occ-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'Workplace exposure is a real and preventable risk')); ?></p>
    </div>

    <div class="hepb-occ-about-content-grid">
      <div class="hepb-occ-about-image-wrapper">
        <div class="hepb-occ-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1691139601099-932c01ec198b?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Healthcare workers — an at-risk group for hepatitis B')); ?>" />
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
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Recommended for At-Risk Work')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', 'Hepatitis B vaccination is recommended for healthcare and laboratory workers and others whose work brings them into contact with blood or body fluids. We give you a record of each dose for your occupational health documentation. If you have an antibody test, the laboratory sends the result to you.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="hepb-occ-needs-section">
  <div class="section-container">
    <div class="hepb-occ-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="hepb-occ-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Who should be vaccinated?')); ?></h2>
      <p class="hepb-occ-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for anyone exposed to blood or fluids at work')); ?></p>
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
          <a href="<?php echo esc_url( at_travel_booking_url( 'c2', 'service-body' ) ); ?>" class="nhs-card-btn">Book occupational hepatitis B vaccination</a>
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
          <a href="<?php echo esc_url( at_travel_booking_url( 'c2', 'service-body' ) ); ?>" class="nhs-card-btn">Book occupational hepatitis B vaccination</a>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="hepb-occ-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Hepatitis B Vaccination Pricing')); ?></h2>
      <p class="hepb-occ-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Per dose, or a full course of 3 or 4 doses. Adult and child rates.')); ?></p>
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
          <li><i class="fas fa-check"></i> <strong>£105</strong> standard 3-dose course</li>
          <li><i class="fas fa-check"></i> <strong>£140</strong> 4-dose course (accelerated, or very rapid for adults)</li>
          <li><i class="fas fa-check"></i> Antibody testing available</li>
          <li><i class="fas fa-check"></i> Records for occupational health</li>
        </ul>
        <a href="<?php echo esc_url( at_travel_booking_url( 'c2', 'service-price' ) ); ?>" class="cta-button primary-cta">Book occupational hepatitis B vaccination</a>
      </div>

      <div class="hepb-occ-pricing-card">
        <div class="hepb-occ-pricing-ribbon">Child</div>
        <h3 class="hepb-occ-pricing-name">Child</h3>
        <div class="hepb-occ-pricing-amount">
          <span class="price">£30</span>
          <span class="per">per dose</span>
        </div>
        <ul class="hepb-occ-pricing-includes">
          <li><i class="fas fa-check"></i> <strong>£90</strong> standard 3-dose course</li>
          <li><i class="fas fa-check"></i> <strong>£120</strong> accelerated 4-dose course</li>
          <li><i class="fas fa-check"></i> Antibody testing available</li>
          <li><i class="fas fa-check"></i> Administered by our pharmacist</li>
        </ul>
        <a href="<?php echo esc_url( at_travel_booking_url( 'v5c', 'service-price' ) ); ?>" class="cta-button secondary-cta">Book child hepatitis B vaccination</a>
      </div>
    </div>

    <p class="hepb-occ-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'A standard course is 3 doses. Adult: £35 per dose, £105 for 3 doses or £140 for 4 doses. Child: £30 per dose, £90 for 3 doses or £120 for the accelerated 4-dose course. The accelerated and very rapid courses are 4 doses, the last at 12 months. Antibody testing can be arranged 1 to 2 months after the last dose of your course.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="hepb-occ-details-section">
  <div class="section-container">
    <div class="hepb-occ-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="hepb-occ-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect')); ?></h2>
      <p class="hepb-occ-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A clear, documented process from start to finish')); ?></p>
    </div>

    <div class="hepb-occ-details-grid">
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Consultation</h3><p>We review your medical history and confirm the right schedule for your role.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>Your first injection is given and you receive a vaccination record on the day.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Follow-Up Doses</h3><p>Standard 0, 1 and 6 months. If you need cover sooner: accelerated 0, 1, 2 and 12 months, or, for adults, very rapid on days 0, 7 and 21 with a fourth dose at 12 months.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-vial"></i></div><h3>Antibody Test</h3><p>A blood test 1 to 2 months after the last dose of your course (the 6-month dose, or the 12-month dose on a 4-dose course) shows how well you have responded.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>A sore arm, mild headache or tiredness for a day or two are common and soon pass.</p></div>
      <div class="hepb-occ-detail-card"><div class="icon"><i class="fas fa-file-medical"></i></div><h3>Documentation</h3><p>We provide vaccination records for your occupational health file. The laboratory sends any antibody test result to you.</p></div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="hepb-occ-faq-section">
  <div class="section-container">
    <div class="hepb-occ-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'HEPATITIS B FAQs')); ?></span>
      </div>
      <h2 class="hepb-occ-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="hepb-occ-faq-list">
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>The standard course is 3 doses, at 0, 1 and 6 months. If you need protection sooner, there is an accelerated course of 4 doses at 0, 1, 2 and 12 months, and, for adults 18 and over, a very rapid course of 4 doses on days 0, 7 and 21 and at 12 months. The faster courses protect you sooner, but you need the 12-month dose to complete the course.</p></div></div>
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Is it required for my job?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>Hepatitis B vaccination is recommended for healthcare and laboratory workers and others whose work brings them into contact with blood or body fluids. Your employer's occupational health service can tell you what your role needs. We give you a record of each dose to show your employer or occupational health service. If you have an antibody test, the laboratory sends the result to you.</p></div></div>
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">What is antibody testing?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>A blood test taken 1 to 2 months after the last dose of your course (the 6-month dose, or the 12-month dose on a 4-dose course), to check how well you responded. We take the blood sample at the pharmacy and the laboratory sends the result to you. A level of 10 mIU/mL or more is generally accepted as protective, and UK guidance prefers 100 mIU/mL or more for healthcare and laboratory workers.</p></div></div>
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Will I need a booster?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>Most people who respond to the full course do not need a booster. If you have an antibody test, the laboratory sends the result to you. UK guidance for healthcare and laboratory workers says: 100 mIU/mL or above, no more doses or tests; 10 to 100 mIU/mL, one more dose now; below 10 mIU/mL, a blood test for hepatitis B infection and usually a second course. If your result is below 100, show it to your employer's occupational health service, or to your GP if you do not have one, and ask about the next step. If you are exposed to blood at work, for example a needlestick injury, follow your workplace procedure and get medical advice straight away.</p></div></div>
      <div class="hepb-occ-faq-item"><button class="hepb-occ-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Can you vaccinate our team?</span><i class="fas fa-plus icon"></i></button><div class="hepb-occ-faq-content"><p>Yes. We offer group vaccination sessions at the pharmacy or on-site for organisations — get in touch to arrange.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     owner=29286426 · appointmentType=47109341 (Hepatitis B for Occupational Health) · calendarID=10903457 (Denton; Bowland 8436365)
     Override per-page via ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47109341&calendarID=10903457&ref=embedded_csp' );
?>
<section class="hepb-occ-booking-section" id="booking-widget">
  <div class="hepb-occ-booking-blob-1"></div>
  <div class="hepb-occ-booking-blob-2"></div>
  <div class="section-container">
    <div class="hepb-occ-booking-header">
      <h2 class="hepb-occ-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Hepatitis B Vaccination')); ?></h2>
      <p class="hepb-occ-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="hepb-occ-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Hepatitis B (occupational) vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="hepb-occ-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="hepb-occ-booking-footer">
      <p>Vaccinating a team? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a> to arrange a group session.</p>
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

      <h2 class="hepb-occ-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself and your team')); ?></h2>
      <p class="hepb-occ-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your occupational hepatitis B vaccination with our team in Denton today. Quick, professional, and fully documented.')); ?></p>

      <div class="hepb-occ-cta-actions">
        <a href="<?php echo esc_url( at_travel_booking_url( 'c2', 'service-footer' ) ); ?>" class="cta-button primary-cta white-btn">Book occupational hepatitis B vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
