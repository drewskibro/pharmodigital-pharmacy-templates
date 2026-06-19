<?php
/**
 * Template Name: Meningitis B Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'meningitis-b';
$vaccine_name = dp_field('vaccine_name', 'Meningitis B');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     ============================================ -->
<section class="meningitis-b-hero-section">
  <div class="meningitis-b-hero-bg"></div>
  <div class="meningitis-b-hero-dots"></div>
  <div class="meningitis-b-hero-glow-1"></div>
  <div class="meningitis-b-hero-glow-2"></div>
  <div class="section-container">
    <div class="meningitis-b-hero-grid">

      <div class="meningitis-b-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'PRIVATE VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="meningitis-b-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Meningitis B Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="meningitis-b-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', 'Protect against meningitis B with our private vaccination service in Denton, Manchester. The Bexsero vaccine guards against a serious, fast-moving infection — for babies, children, teenagers and adults who want cover.')); ?>
        </p>

        <div class="meningitis-b-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Meningitis B Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="meningitis-b-hero-trust">
          <div class="meningitis-b-hero-trust-item"><i class="fas fa-baby"></i><span>Babies to Adults</span></div>
          <div class="meningitis-b-hero-trust-item"><i class="fas fa-syringe"></i><span>Bexsero Vaccine</span></div>
          <div class="meningitis-b-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <div class="meningitis-b-hero-visual">
        <div class="meningitis-b-hero-float-badge">
          <span class="meningitis-b-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '2')); ?></span>
          <span class="meningitis-b-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="meningitis-b-trust-card">
          <div class="meningitis-b-trust-card-glow"></div>
          <div class="meningitis-b-trust-card-inner">
            <div class="meningitis-b-trust-card-header">
              <div class="meningitis-b-trust-card-icon"><i class="fas fa-shield-virus"></i></div>
              <span class="meningitis-b-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Bexsero Vaccine')); ?></span>
            </div>
            <div class="meningitis-b-trust-card-price">
              <span class="meningitis-b-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£100')); ?></span>
              <span class="meningitis-b-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="meningitis-b-trust-card-divider"></div>
            <ul class="meningitis-b-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Bexsero vaccine &amp; administration</span></li>
              <li><i class="fas fa-check"></i> <span>Suitable from 2 months of age</span></li>
              <li><i class="fas fa-check"></i> <span>Suitability check &amp; advice</span></li>
            </ul>
            <div class="meningitis-b-trust-card-footer">
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
<section class="meningitis-b-protect-section">
  <div class="section-container">
    <div class="meningitis-b-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="meningitis-b-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Meningitis B Vaccine')); ?></h2>
      <p class="meningitis-b-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'Protection against a rare but very serious infection')); ?></p>
    </div>

    <div class="meningitis-b-protect-grid">
      <div class="meningitis-b-protect-image-wrapper">
        <div class="meningitis-b-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1631941618536-2979d565b726?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Pharmacist giving a meningitis B vaccination in Denton')); ?>" class="meningitis-b-protect-image" />
          <?php endif; ?>
          <div class="meningitis-b-protect-name-tag">
            <span class="name"><?php echo esc_html(dp_field('vaccine_protect_nametag_name', 'Denton Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(dp_field('vaccine_protect_nametag_role', 'Private Vaccination Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="meningitis-b-protect-content">
        <div class="meningitis-b-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Acts Fast — So Should You')); ?></span>
        </div>

        <h3 class="meningitis-b-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Bexsero — Cover Against MenB')); ?></h3>
        <p class="meningitis-b-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', 'Meningitis B is a bacterial infection that can cause meningitis and blood poisoning (septicaemia). It can develop within hours and be life-threatening, and survivors can be left with lasting effects. The Bexsero vaccine protects against meningococcal group B, the most common cause of bacterial meningitis in the UK.')); ?></p>

        <ul class="meningitis-b-protect-features">
          <li class="meningitis-b-protect-feature">
            <div class="icon"><i class="fas fa-baby"></i></div>
            <div class="text"><strong>From 2 Months Old</strong><p>Babies and young children are at highest risk. Bexsero can be given from 2 months of age.</p></div>
          </li>
          <li class="meningitis-b-protect-feature">
            <div class="icon"><i class="fas fa-user-graduate"></i></div>
            <div class="text"><strong>Teens &amp; Students Too</strong><p>There's a second peak in older teenagers and students, who may also want protection.</p></div>
          </li>
          <li class="meningitis-b-protect-feature">
            <div class="icon"><i class="fas fa-syringe"></i></div>
            <div class="text"><strong>Number of Doses Varies</strong><p>The schedule depends on age. Our pharmacist will confirm how many doses you or your child need.</p></div>
          </li>
        </ul>

        <div class="meningitis-b-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="meningitis-b-stats-section">
  <div class="section-container">
    <div class="meningitis-b-stats-bar">
      <div class="meningitis-b-stat-item"><div class="icon"><i class="fas fa-baby"></i></div><div class="content"><span class="number">2 Months+</span><span class="label">Suitable Age</span></div></div>
      <div class="meningitis-b-stat-divider"></div>
      <div class="meningitis-b-stat-item"><div class="icon"><i class="fas fa-bolt"></i></div><div class="content"><span class="number">Hours</span><span class="label">Can Develop Fast</span></div></div>
      <div class="meningitis-b-stat-divider"></div>
      <div class="meningitis-b-stat-item"><div class="icon"><i class="fas fa-shield-virus"></i></div><div class="content"><span class="number">MenB</span><span class="label">Most Common Cause</span></div></div>
      <div class="meningitis-b-stat-divider"></div>
      <div class="meningitis-b-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="meningitis-b-about-section">
  <div class="section-container">
    <div class="meningitis-b-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="meningitis-b-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Meningitis B?')); ?></h2>
      <p class="meningitis-b-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A serious infection that can move quickly')); ?></p>
    </div>

    <div class="meningitis-b-about-content-grid">
      <div class="meningitis-b-about-image-wrapper">
        <div class="meningitis-b-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1617331140180-e8262094733a?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Baby — meningitis B is most common in young children')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="meningitis-b-about-cards-grid">
        <div class="meningitis-b-info-card"><div class="icon"><i class="fas fa-bacterium"></i></div><h3>Bacterial Infection</h3><p>Meningitis B is caused by meningococcal group B bacteria, which can inflame the lining of the brain and cause blood poisoning.</p></div>
        <div class="meningitis-b-info-card"><div class="icon"><i class="fas fa-bolt"></i></div><h3>Develops Quickly</h3><p>Symptoms can appear and worsen within hours. Early treatment is vital, which is why prevention matters.</p></div>
        <div class="meningitis-b-info-card"><div class="icon"><i class="fas fa-baby"></i></div><h3>Highest Risk in Babies</h3><p>Babies and young children are most at risk, with a second peak in teenagers and young adults.</p></div>
        <div class="meningitis-b-info-card"><div class="icon"><i class="fas fa-triangle-exclamation"></i></div><h3>Serious Outcomes</h3><p>It can be life-threatening, and some survivors are left with hearing loss, scarring or other long-term effects.</p></div>
      </div>
    </div>

    <div class="meningitis-b-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'KNOW THE SIGNS')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'A Rash That Doesn\'t Fade')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', 'Warning signs include fever, a severe headache, a stiff neck, dislike of bright light and a rash that does not fade when pressed with a glass. In babies, look for a high-pitched cry, floppiness or refusing feeds. If you suspect meningitis, seek urgent medical help — vaccination is the best prevention.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="meningitis-b-needs-section">
  <div class="section-container">
    <div class="meningitis-b-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="meningitis-b-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="meningitis-b-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended across all ages, with two peaks of risk')); ?></p>
    </div>

    <div class="meningitis-b-needs-grid">

      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Babies &amp; Young Children</h3>
          <p class="nhs-card-desc">The highest-risk group. A good choice for infants and children, including those who missed NHS doses.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Babies from 2 months</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Young children</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Those who missed NHS doses</span></li>
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
          <h3 class="nhs-card-title">Teens, Students &amp; Adults</h3>
          <p class="nhs-card-desc">A second peak of risk hits older teenagers and students. Worth considering for anyone wanting cover.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Teenagers &amp; sixth formers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>University students</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Adults wanting protection</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="meningitis-b-pricing-section" id="pricing">
  <div class="section-container">
    <div class="meningitis-b-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="meningitis-b-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Meningitis B Vaccination Pricing')); ?></h2>
      <p class="meningitis-b-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Clear pricing per dose — no hidden extras')); ?></p>
    </div>

    <div class="meningitis-b-pricing-grid">
      <div class="meningitis-b-pricing-card featured">
        <div class="meningitis-b-pricing-ribbon">Bexsero</div>
        <h3 class="meningitis-b-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Bexsero Vaccine')); ?></h3>
        <div class="meningitis-b-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£100')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="meningitis-b-pricing-includes">
          <li><i class="fas fa-check"></i> Bexsero vaccine</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Suitability check &amp; advice</li>
          <li><i class="fas fa-check"></i> Suitable from 2 months of age</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="meningitis-b-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price is £100 per dose. The number of doses needed depends on age, so our pharmacist will confirm the right schedule for you or your child.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="meningitis-b-details-section">
  <div class="section-container">
    <div class="meningitis-b-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="meningitis-b-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="meningitis-b-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="meningitis-b-details-grid">
      <div class="meningitis-b-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Quick Check</h3><p>We confirm suitability and the right schedule for your age before we start.</p></div>
      <div class="meningitis-b-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>The Injection</h3><p>Given in the thigh for babies, or the upper arm for older children and adults.</p></div>
      <div class="meningitis-b-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Follow-Up Doses</h3><p>If more than one dose is needed, we'll book the follow-up at the right interval.</p></div>
      <div class="meningitis-b-detail-card"><div class="icon"><i class="fas fa-temperature-half"></i></div><h3>Fever in Babies</h3><p>A short-lived fever is common in babies after Bexsero — we'll explain how to manage it.</p></div>
      <div class="meningitis-b-detail-card"><div class="icon"><i class="fas fa-baby"></i></div><h3>From 2 Months</h3><p>Suitable for babies from 2 months and for children, teens and adults.</p></div>
      <div class="meningitis-b-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>For those outside NHS eligibility, or who want it sooner — no referral needed.</p></div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="meningitis-b-faq-section">
  <div class="section-container">
    <div class="meningitis-b-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'MENINGITIS B FAQs')); ?></span>
      </div>
      <h2 class="meningitis-b-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="meningitis-b-faq-list">
      <div class="meningitis-b-faq-item"><button class="meningitis-b-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses are needed?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-b-faq-content"><p>It depends on age. Babies usually need more doses than older children and adults. Our pharmacist will confirm the right schedule at your appointment.</p></div></div>
      <div class="meningitis-b-faq-item"><button class="meningitis-b-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">From what age can it be given?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-b-faq-content"><p>The Bexsero vaccine can be given from 2 months of age, and there's no upper age limit, so older children, teenagers and adults can have it too.</p></div></div>
      <div class="meningitis-b-faq-item"><button class="meningitis-b-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Is this the same as the MenACWY vaccine?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-b-faq-content"><p>No. Bexsero protects against meningococcal group B. MenACWY protects against four different groups (A, C, W and Y). Many people choose to have both for broader cover.</p></div></div>
      <div class="meningitis-b-faq-item"><button class="meningitis-b-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-b-faq-content"><p>Usually mild — a sore leg or arm, and a short-lived fever which is common in babies. Serious reactions are very rare.</p></div></div>
      <div class="meningitis-b-faq-item"><button class="meningitis-b-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What are the warning signs of meningitis?</span><i class="fas fa-plus icon"></i></button><div class="meningitis-b-faq-content"><p>Fever, severe headache, stiff neck, dislike of bright light, and a rash that doesn't fade under a glass. In babies, a high-pitched cry, floppiness or refusing feeds. Seek urgent medical help if you're worried.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47536578  (Meningitis B Vaccination)
     Location:       calendarID=10903457       (Denton Pharmacy) — Bowland uses 8436365
     Override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536578&calendarID=10903457&ref=embedded_csp' );
?>
<section class="meningitis-b-booking-section" id="booking-widget">
  <div class="meningitis-b-booking-blob-1"></div>
  <div class="meningitis-b-booking-blob-2"></div>
  <div class="section-container">
    <div class="meningitis-b-booking-header">
      <h2 class="meningitis-b-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Meningitis B Vaccination')); ?></h2>
      <p class="meningitis-b-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="meningitis-b-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Meningitis B vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="meningitis-b-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="meningitis-b-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="meningitis-b-cta-section">
  <div class="meningitis-b-cta-bg"></div>
  <div class="section-container">
    <div class="meningitis-b-cta-content">
      <div class="meningitis-b-cta-badges">
        <span class="badge">Same Day Appointments</span>
        <span class="badge">Babies to Adults</span>
        <span class="badge">No Referral Needed</span>
      </div>

      <h2 class="meningitis-b-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect against meningitis B')); ?></h2>
      <p class="meningitis-b-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your meningitis B vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="meningitis-b-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
