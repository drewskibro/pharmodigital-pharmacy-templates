<?php
/**
 * Template Name: Chickenpox Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'chickenpox';
$vaccine_name = bp_field('vaccine_name', 'Chickenpox');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="chickenpox-hero-section">
  <div class="chickenpox-hero-bg"></div>
  <div class="chickenpox-hero-dots"></div>
  <div class="chickenpox-hero-glow-1"></div>
  <div class="chickenpox-hero-glow-2"></div>
  <div class="section-container">
    <div class="chickenpox-hero-grid">

      <!-- Left: Content -->
      <div class="chickenpox-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'PRIVATE VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="chickenpox-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Chickenpox Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="chickenpox-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', 'Protect your family against chickenpox with our private vaccination service in Wythenshawe, Manchester. A safe, two-dose course that is around 90% effective — for children from 12 months and for adults who have never had chickenpox.')); ?>
        </p>

        <div class="chickenpox-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Chickenpox Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="chickenpox-hero-trust">
          <div class="chickenpox-hero-trust-item"><i class="fas fa-child-reaching"></i><span>Children &amp; Adults</span></div>
          <div class="chickenpox-hero-trust-item"><i class="fas fa-syringe"></i><span>Two-Dose Course</span></div>
          <div class="chickenpox-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="chickenpox-hero-visual">
        <div class="chickenpox-hero-float-badge">
          <span class="chickenpox-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '2')); ?></span>
          <span class="chickenpox-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="chickenpox-trust-card">
          <div class="chickenpox-trust-card-glow"></div>
          <div class="chickenpox-trust-card-inner">
            <div class="chickenpox-trust-card-header">
              <div class="chickenpox-trust-card-icon"><i class="fas fa-shield-virus"></i></div>
              <span class="chickenpox-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Chickenpox Vaccine')); ?></span>
            </div>
            <div class="chickenpox-trust-card-price">
              <span class="chickenpox-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£59')); ?></span>
              <span class="chickenpox-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', '2-dose course')); ?></span>
            </div>
            <div class="chickenpox-trust-card-divider"></div>
            <ul class="chickenpox-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Both doses included</span></li>
              <li><i class="fas fa-check"></i> <span>Children &amp; adults</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="chickenpox-trust-card-footer">
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
<section class="chickenpox-protect-section">
  <div class="section-container">
    <div class="chickenpox-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="chickenpox-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'The Chickenpox Vaccine')); ?></h2>
      <p class="chickenpox-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'A simple way to avoid an unpleasant and sometimes serious illness')); ?></p>
    </div>

    <div class="chickenpox-protect-grid">
      <div class="chickenpox-protect-image-wrapper">
        <div class="chickenpox-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1691139600731-7232eaa980c3?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'Pharmacist giving a chickenpox vaccination in Wythenshawe')); ?>" class="chickenpox-protect-image" />
          <?php endif; ?>
          <div class="chickenpox-protect-name-tag">
            <span class="name"><?php echo esc_html(bp_field('vaccine_protect_nametag_name', 'Bowland Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(bp_field('vaccine_protect_nametag_role', 'Private Vaccination Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="chickenpox-protect-content">
        <div class="chickenpox-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Around 90% Effective After Two Doses')); ?></span>
        </div>

        <h3 class="chickenpox-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Safe, Proven Protection')); ?></h3>
        <p class="chickenpox-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', 'Chickenpox (varicella) is a highly contagious viral infection. For most children it is mild, but it can be far more serious for adults, pregnant women, newborns and anyone with a weakened immune system, occasionally leading to complications such as pneumonia or encephalitis. The vaccine is a well-established jab that is around 90% effective after a full two-dose course.')); ?></p>

        <ul class="chickenpox-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="chickenpox-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="chickenpox-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Two-Dose Course</strong><p>Two injections given 4 to 8 weeks apart for the best protection. Suitable from 1 year of age.</p></div>
            </li>
            <li class="chickenpox-protect-feature">
              <div class="icon"><i class="fas fa-house-user"></i></div>
              <div class="text"><strong>Protects the Household</strong><p>Helps shield vulnerable family members — newborns, pregnant relatives and anyone immunosuppressed.</p></div>
            </li>
            <li class="chickenpox-protect-feature">
              <div class="icon"><i class="fas fa-briefcase-medical"></i></div>
              <div class="text"><strong>Also Available on the NHS</strong><p>Chickenpox vaccination is now offered on the NHS for children born on or after 1 July 2024 via the MMRV vaccine. If your child is older, or you are an adult who has never had chickenpox, we offer the private vaccination with no GP referral needed.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="chickenpox-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="chickenpox-stats-section">
  <div class="section-container">
    <div class="chickenpox-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="chickenpox-stat-divider"></div><?php endif; ?>
        <div class="chickenpox-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="chickenpox-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">2 Doses</span><span class="label">Full Course</span></div></div>
        <div class="chickenpox-stat-divider"></div>
        <div class="chickenpox-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">~90%</span><span class="label">Effective</span></div></div>
        <div class="chickenpox-stat-divider"></div>
        <div class="chickenpox-stat-item"><div class="icon"><i class="fas fa-child-reaching"></i></div><div class="content"><span class="number">1 Year+</span><span class="label">Suitable Age</span></div></div>
        <div class="chickenpox-stat-divider"></div>
        <div class="chickenpox-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="chickenpox-about-section">
  <div class="section-container">
    <div class="chickenpox-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="chickenpox-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'What is Chickenpox?')); ?></h2>
      <p class="chickenpox-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A common childhood infection that can be serious for some')); ?></p>
    </div>

    <div class="chickenpox-about-content-grid">
      <div class="chickenpox-about-image-wrapper">
        <div class="chickenpox-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1516890896652-41ca1a35787c?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Children playing — chickenpox is a common childhood infection')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="chickenpox-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="chickenpox-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="chickenpox-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Viral Infection</h3><p>Caused by the varicella-zoster virus. It brings an itchy, blistering rash along with fever and tiredness.</p></div>
          <div class="chickenpox-info-card"><div class="icon"><i class="fas fa-people-group"></i></div><h3>Highly Contagious</h3><p>Spreads easily through coughs, sneezes and contact with the rash. Most people in a household catch it.</p></div>
          <div class="chickenpox-info-card"><div class="icon"><i class="fas fa-triangle-exclamation"></i></div><h3>Worse for Adults</h3><p>Generally milder in young children, but can be severe in adults, teenagers and people with health conditions.</p></div>
          <div class="chickenpox-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>Two doses of the vaccine give strong, lasting protection and greatly reduce the chance of complications.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="chickenpox-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'One Infection, Lifelong Visitor')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', 'After chickenpox, the virus stays dormant in the body and can reappear later in life as shingles. Vaccination helps you avoid the original illness and its complications altogether.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="chickenpox-needs-section">
  <div class="section-container">
    <div class="chickenpox-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="chickenpox-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="chickenpox-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Recommended for anyone who has not had chickenpox')); ?></p>
    </div>

    <div class="chickenpox-needs-grid">

      <!-- Recommended (green) — Home NHS card model -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Children &amp; Families</h3>
          <p class="nhs-card-desc">A good choice for healthy children from 1 year old and for parents who would rather avoid chickenpox altogether.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Children aged 1 year and over</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Siblings of newborns</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Families planning travel</span></li>
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
          <h3 class="nhs-card-title">Adults &amp; At-Risk Contacts</h3>
          <p class="nhs-card-desc">Particularly worth considering if you have never had chickenpox and are around vulnerable people.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Adults who never had it as a child</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Healthcare &amp; childcare workers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>People living with at-risk relatives</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="chickenpox-pricing-section" id="pricing">
  <div class="section-container">
    <div class="chickenpox-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="chickenpox-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Chickenpox Vaccination Pricing')); ?></h2>
      <p class="chickenpox-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'One simple price for the full course — no hidden extras')); ?></p>
    </div>

    <div class="chickenpox-pricing-grid">
      <div class="chickenpox-pricing-card featured">
        <div class="chickenpox-pricing-ribbon">Full Course</div>
        <h3 class="chickenpox-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Chickenpox Vaccine')); ?></h3>
        <div class="chickenpox-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£59')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', '2-dose course')); ?></span>
        </div>
        <ul class="chickenpox-pricing-includes">
          <li><i class="fas fa-check"></i> Both doses of the vaccine</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Suitability check &amp; advice</li>
          <li><i class="fas fa-check"></i> Suitable for children &amp; adults</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="chickenpox-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', 'Price is for the full two-dose course. Doses are given 4 to 8 weeks apart. Please ask our team if you have any questions about suitability.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="chickenpox-details-section">
  <div class="section-container">
    <div class="chickenpox-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="chickenpox-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="chickenpox-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A simple, friendly visit to our Wythenshawe clinic')); ?></p>
    </div>

    <div class="chickenpox-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="chickenpox-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="chickenpox-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Quick Check</h3><p>We confirm you (or your child) are suitable for the vaccine and answer any questions before we start.</p></div>
        <div class="chickenpox-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>The injection takes just a moment. Most people feel only a brief scratch in the upper arm or thigh.</p></div>
        <div class="chickenpox-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Second Dose</h3><p>We book your second dose 4 to 8 weeks later to complete the course and lock in protection.</p></div>
        <div class="chickenpox-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — a sore arm, or sometimes a few spots and a mild fever a week or two later.</p></div>
        <div class="chickenpox-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Suitable from Age 1</h3><p>Given to children from 1 year old and to adults. We'll advise on timing for the whole family.</p></div>
        <div class="chickenpox-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not routinely available on the NHS, so we offer it privately with no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="chickenpox-faq-section">
  <div class="section-container">
    <div class="chickenpox-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'CHICKENPOX FAQs')); ?></span>
      </div>
      <h2 class="chickenpox-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="chickenpox-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="chickenpox-faq-item">
          <button class="chickenpox-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="chickenpox-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="chickenpox-faq-item"><button class="chickenpox-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses does my child need?</span><i class="fas fa-plus icon"></i></button><div class="chickenpox-faq-content"><p>A full course is two doses, given 4 to 8 weeks apart. Both doses are included in our price and give the best, longest-lasting protection.</p></div></div>
        <div class="chickenpox-faq-item"><button class="chickenpox-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">At what age can the vaccine be given?</span><i class="fas fa-plus icon"></i></button><div class="chickenpox-faq-content"><p>From 1 year of age. There's no upper age limit, so adults who never had chickenpox as children can have it too.</p></div></div>
        <div class="chickenpox-faq-item"><button class="chickenpox-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">What if we're not sure whether we've had chickenpox?</span><i class="fas fa-plus icon"></i></button><div class="chickenpox-faq-content"><p>That's fine — many adults aren't sure. If you've had chickenpox you likely have natural immunity, and a blood test can confirm it. The vaccine is also safe to have even if you've had chickenpox before. Our pharmacist can talk it through at your appointment.</p></div></div>
        <div class="chickenpox-faq-item"><button class="chickenpox-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="chickenpox-faq-content"><p>Side effects are usually mild — a sore arm, and occasionally a few spots or a mild fever a week or two after the jab. Serious reactions are very rare.</p></div></div>
        <div class="chickenpox-faq-item"><button class="chickenpox-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Who should not have the vaccine?</span><i class="fas fa-plus icon"></i></button><div class="chickenpox-faq-content"><p>It's a live vaccine, so it isn't suitable during pregnancy or for people with significantly weakened immune systems. We'll check suitability before vaccinating.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47109538  (Chickenpox Vaccination)
     Location:       calendarID=8436365       (Bowland Pharmacy)
                     Bowland uses calendarID=8436365
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47109538&calendarID=8436365&ref=embedded_csp' );
?>
<section class="chickenpox-booking-section" id="booking-widget">
  <div class="chickenpox-booking-blob-1"></div>
  <div class="chickenpox-booking-blob-2"></div>
  <div class="section-container">
    <div class="chickenpox-booking-header">
      <h2 class="chickenpox-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Chickenpox Vaccination')); ?></h2>
      <p class="chickenpox-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Wythenshawe clinic')); ?></p>
    </div>

    <div class="chickenpox-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Chickenpox vaccination appointment in Wythenshawe" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="chickenpox-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="chickenpox-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="chickenpox-cta-section">
  <div class="chickenpox-cta-bg"></div>
  <div class="section-container">
    <div class="chickenpox-cta-content">
      <div class="chickenpox-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Children &amp; Adults</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="chickenpox-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Protect your family against chickenpox')); ?></h2>
      <p class="chickenpox-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', 'Book your chickenpox vaccination with our friendly team in Wythenshawe today. Quick, convenient and professional.')); ?></p>

      <div class="chickenpox-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
