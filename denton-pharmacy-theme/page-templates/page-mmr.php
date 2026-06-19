<?php
/**
 * Template Name: MMR Vaccination
 * @package Denton_Pharmacy
 *
 * Content adapted from mnctravelclinic.co.uk/service/mmr-vaccinations/.
 */

get_header();

$prefix = 'mmr';
$vaccine_name = dp_field('vaccine_name', 'MMR');
?>

<!-- HERO SECTION — Pattern A Light -->
<section class="mmr-hero-section">
  <div class="mmr-hero-bg"></div>
  <div class="mmr-hero-dots"></div>
  <div class="mmr-hero-glow-1"></div>
  <div class="mmr-hero-glow-2"></div>
  <div class="section-container">
    <div class="mmr-hero-grid">

      <div class="mmr-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'PRIVATE VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="mmr-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'MMR Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="mmr-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', 'Protect against measles, mumps and rubella with our private vaccination service in Denton, Manchester. One combined vaccine, given as a two-dose course, for children and for adults whose vaccination history is incomplete or uncertain.')); ?>
        </p>

        <div class="mmr-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book MMR Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="mmr-hero-trust">
          <div class="mmr-hero-trust-item"><i class="fas fa-shield-virus"></i><span>3-in-1 Protection</span></div>
          <div class="mmr-hero-trust-item"><i class="fas fa-syringe"></i><span>Two-Dose Course</span></div>
          <div class="mmr-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <div class="mmr-hero-visual">
        <div class="mmr-hero-float-badge">
          <span class="mmr-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '3')); ?></span>
          <span class="mmr-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'in 1 vaccine')); ?></span>
        </div>
        <div class="mmr-trust-card">
          <div class="mmr-trust-card-glow"></div>
          <div class="mmr-trust-card-inner">
            <div class="mmr-trust-card-header">
              <div class="mmr-trust-card-icon"><i class="fas fa-shield-virus"></i></div>
              <span class="mmr-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'MMR Vaccine')); ?></span>
            </div>
            <div class="mmr-trust-card-price">
              <span class="mmr-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£50')); ?></span>
              <span class="mmr-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'full 2-dose course')); ?></span>
            </div>
            <div class="mmr-trust-card-divider"></div>
            <ul class="mmr-trust-card-list">
              <li><i class="fas fa-check"></i> <span>£25 per single dose</span></li>
              <li><i class="fas fa-check"></i> <span>Protects against 3 diseases</span></li>
              <li><i class="fas fa-check"></i> <span>Children &amp; adults</span></li>
            </ul>
            <div class="mmr-trust-card-footer">
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
<section class="mmr-protect-section">
  <div class="section-container">
    <div class="mmr-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="mmr-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The MMR Vaccine')); ?></h2>
      <p class="mmr-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'Three serious diseases, prevented in one combined jab')); ?></p>
    </div>

    <div class="mmr-protect-grid">
      <div class="mmr-protect-image-wrapper">
        <div class="mmr-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1615631648086-325025c9e51e?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Pharmacist preparing an MMR vaccination in Denton')); ?>" class="mmr-protect-image" />
          <?php endif; ?>
          <div class="mmr-protect-name-tag">
            <span class="name"><?php echo esc_html(dp_field('vaccine_protect_nametag_name', 'Denton Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(dp_field('vaccine_protect_nametag_role', 'Private Vaccination Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="mmr-protect-content">
        <div class="mmr-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Three Diseases, One Vaccine')); ?></span>
        </div>

        <h3 class="mmr-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Safe, Long-Lasting Protection')); ?></h3>
        <p class="mmr-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', 'MMR is a combined vaccine that protects against measles, mumps and rubella — three viral infections that can cause serious complications. Measles is highly contagious and can lead to pneumonia or encephalitis, mumps can cause meningitis, and rubella is dangerous in pregnancy. Two doses give long-lasting protection and help prevent outbreaks.')); ?></p>

        <ul class="mmr-protect-features">
          <li class="mmr-protect-feature">
            <div class="icon"><i class="fas fa-syringe"></i></div>
            <div class="text"><strong>Two-Dose Course</strong><p>Two injections give full protection — for adults the second dose is given at least 4 weeks after the first.</p></div>
          </li>
          <li class="mmr-protect-feature">
            <div class="icon"><i class="fas fa-people-roof"></i></div>
            <div class="text"><strong>Protects Others Too</strong><p>Helps shield babies, pregnant women and vulnerable people by reducing the spread of measles.</p></div>
          </li>
          <li class="mmr-protect-feature">
            <div class="icon"><i class="fas fa-user-check"></i></div>
            <div class="text"><strong>Catch-Up for Adults</strong><p>If your childhood vaccinations are incomplete or uncertain, it's safe to have MMR at any age.</p></div>
          </li>
        </ul>

        <div class="mmr-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="mmr-stats-section">
  <div class="section-container">
    <div class="mmr-stats-bar">
      <div class="mmr-stat-item"><div class="icon"><i class="fas fa-shield-virus"></i></div><div class="content"><span class="number">3-in-1</span><span class="label">Measles, Mumps, Rubella</span></div></div>
      <div class="mmr-stat-divider"></div>
      <div class="mmr-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">2 Doses</span><span class="label">Full Course</span></div></div>
      <div class="mmr-stat-divider"></div>
      <div class="mmr-stat-item"><div class="icon"><i class="fas fa-child-reaching"></i></div><div class="content"><span class="number">All Ages</span><span class="label">Children &amp; Adults</span></div></div>
      <div class="mmr-stat-divider"></div>
      <div class="mmr-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="mmr-about-section">
  <div class="section-container">
    <div class="mmr-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="mmr-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What does MMR protect against?')); ?></h2>
      <p class="mmr-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'Three viral infections that can be serious')); ?></p>
    </div>

    <div class="mmr-about-content-grid">
      <div class="mmr-about-image-wrapper">
        <div class="mmr-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1539093180677-52c07443275b?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Parent and child — MMR protects children and families')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="mmr-about-cards-grid">
        <div class="mmr-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Measles</h3><p>Highly contagious and spreads rapidly. It can lead to serious complications such as pneumonia and encephalitis.</p></div>
        <div class="mmr-info-card"><div class="icon"><i class="fas fa-head-side-cough"></i></div><h3>Mumps</h3><p>Causes painful swelling of the glands and can lead to complications including meningitis.</p></div>
        <div class="mmr-info-card"><div class="icon"><i class="fas fa-baby-carriage"></i></div><h3>Rubella</h3><p>Usually mild, but very dangerous in pregnancy — it can seriously harm an unborn baby.</p></div>
        <div class="mmr-info-card"><div class="icon"><i class="fas fa-people-group"></i></div><h3>Outbreak Risk</h3><p>Measles cases are rising where vaccination rates have dropped, so good cover protects everyone.</p></div>
      </div>
    </div>

    <div class="mmr-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Not Sure If You\'re Covered?')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', 'Many adults are unsure whether they had both MMR doses as a child. There is no harm in having it again, so if your records are incomplete or uncertain, a catch-up course is a simple way to make sure you are protected.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="mmr-needs-section">
  <div class="section-container">
    <div class="mmr-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="mmr-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="mmr-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for children and for adults who missed out')); ?></p>
    </div>

    <div class="mmr-needs-grid">

      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Children &amp; Families</h3>
          <p class="nhs-card-desc">The MMR vaccine is a key part of childhood protection, and a good option for families who want to stay up to date.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Children from 12 months</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Catch-up for missed doses</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Families before travel</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

      <div class="nhs-card nhs-card-orange">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <span class="nhs-card-badge">Especially Useful</span>
          <h3 class="nhs-card-title">Adults &amp; Students</h3>
          <p class="nhs-card-desc">Particularly worth it if your vaccination history is incomplete, or you're around young children or pregnant women.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Adults unsure of their cover</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Students &amp; travellers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Close contacts of pregnant women</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="mmr-pricing-section" id="pricing">
  <div class="section-container">
    <div class="mmr-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="mmr-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'MMR Vaccination Pricing')); ?></h2>
      <p class="mmr-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Pay per dose, or save with the full course')); ?></p>
    </div>

    <div class="mmr-pricing-grid">
      <div class="mmr-pricing-card featured">
        <div class="mmr-pricing-ribbon">Best Value</div>
        <h3 class="mmr-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Full MMR Course')); ?></h3>
        <div class="mmr-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£50')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'full 2-dose course')); ?></span>
        </div>
        <ul class="mmr-pricing-includes">
          <li><i class="fas fa-check"></i> <strong>£25</strong> per single dose</li>
          <li><i class="fas fa-check"></i> <strong>£50</strong> for the full 2-dose course</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Suitability check &amp; advice</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="mmr-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'A single dose is £25, or £50 for the full two-dose course. For adults the second dose is given at least 4 weeks after the first.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="mmr-details-section">
  <div class="section-container">
    <div class="mmr-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="mmr-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="mmr-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="mmr-details-grid">
      <div class="mmr-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Quick Check</h3><p>We review your (or your child's) vaccination history and answer any questions before we start.</p></div>
      <div class="mmr-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>A quick, safe injection given in the upper arm or thigh — the appointment takes under 10 minutes.</p></div>
      <div class="mmr-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Second Dose</h3><p>We book the second dose at the right interval (at least 4 weeks later for adults) to complete the course.</p></div>
      <div class="mmr-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>A mild fever, a faint rash or a little swelling at the injection site can occur and soon settle.</p></div>
      <div class="mmr-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Children &amp; Adults</h3><p>Suitable from 12 months and at any age for adults who are unvaccinated or unsure.</p></div>
      <div class="mmr-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>No referral needed, with same-day appointments available.</p></div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="mmr-faq-section">
  <div class="section-container">
    <div class="mmr-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'MMR FAQs')); ?></span>
      </div>
      <h2 class="mmr-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="mmr-faq-list">
      <div class="mmr-faq-item"><button class="mmr-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses are needed?</span><i class="fas fa-plus icon"></i></button><div class="mmr-faq-content"><p>Two doses give full protection. For adults the second dose is given at least 4 weeks after the first.</p></div></div>
      <div class="mmr-faq-item"><button class="mmr-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Can adults have the MMR vaccine?</span><i class="fas fa-plus icon"></i></button><div class="mmr-faq-content"><p>Yes — at any age if you were never vaccinated or are unsure of your history. There's no harm in having it again.</p></div></div>
      <div class="mmr-faq-item"><button class="mmr-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Is the vaccine safe?</span><i class="fas fa-plus icon"></i></button><div class="mmr-faq-content"><p>Yes. MMR is safe and well-tolerated, with hundreds of millions of doses given worldwide.</p></div></div>
      <div class="mmr-faq-item"><button class="mmr-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="mmr-faq-content"><p>Usually mild — a mild fever, a faint rash, or swelling at the injection site, which soon settle. Serious side effects are rare.</p></div></div>
      <div class="mmr-faq-item"><button class="mmr-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">How soon before travel should I have it?</span><i class="fas fa-plus icon"></i></button><div class="mmr-faq-content"><p>As early as possible — ideally several weeks before travel, especially if you're visiting an area with active measles outbreaks.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     owner=29286426 · appointmentType=47536574 (MMR) · calendarID=10903457 (Denton; Bowland 8436365)
     Override per-page via ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536574&calendarID=10903457&ref=embedded_csp' );
?>
<section class="mmr-booking-section" id="booking-widget">
  <div class="mmr-booking-blob-1"></div>
  <div class="mmr-booking-blob-2"></div>
  <div class="section-container">
    <div class="mmr-booking-header">
      <h2 class="mmr-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your MMR Vaccination')); ?></h2>
      <p class="mmr-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="mmr-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your MMR vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="mmr-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="mmr-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="mmr-cta-section">
  <div class="mmr-cta-bg"></div>
  <div class="section-container">
    <div class="mmr-cta-content">
      <div class="mmr-cta-badges">
        <span class="badge">Same Day Appointments</span>
        <span class="badge">3-in-1 Protection</span>
        <span class="badge">No Referral Needed</span>
      </div>

      <h2 class="mmr-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Stay protected against measles, mumps & rubella')); ?></h2>
      <p class="mmr-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your MMR vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="mmr-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
