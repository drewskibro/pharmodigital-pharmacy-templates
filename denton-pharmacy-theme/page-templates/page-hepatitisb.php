<?php
/**
 * Template Name: Hepatitis B Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar with Adult/Child toggle, final CTA.
 */

get_header();

$prefix = 'hepatitisb';
$vaccine_name = dp_field('vaccine_name', 'Hepatitis B');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="hepatitisb-hero-section">
  <div class="hepatitisb-hero-bg"></div>
  <div class="hepatitisb-hero-dots"></div>
  <div class="hepatitisb-hero-glow-1"></div>
  <div class="hepatitisb-hero-glow-2"></div>
  <div class="section-container">
    <div class="hepatitisb-hero-grid">

      <!-- Left: Content -->
      <div class="hepatitisb-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="hepatitisb-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Hepatitis B Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="hepatitisb-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself before travelling with our hepatitis B vaccination service in Denton, Manchester. A three-dose course giving lifetime protection for most healthy adults, for both adults and children.")); ?>
        </p>

        <div class="hepatitisb-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Hepatitis B Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="hepatitisb-hero-trust">
          <div class="hepatitisb-hero-trust-item"><i class="fas fa-child-reaching"></i><span>Adult &amp; Child Appointments</span></div>
          <div class="hepatitisb-hero-trust-item"><i class="fas fa-syringe"></i><span>3-Dose Course</span></div>
          <div class="hepatitisb-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="hepatitisb-hero-visual">
        <div class="hepatitisb-hero-float-badge">
          <span class="hepatitisb-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '3')); ?></span>
          <span class="hepatitisb-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="hepatitisb-trust-card">
          <div class="hepatitisb-trust-card-glow"></div>
          <div class="hepatitisb-trust-card-inner">
            <div class="hepatitisb-trust-card-header">
              <div class="hepatitisb-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="hepatitisb-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Hepatitis B Vaccine')); ?></span>
            </div>
            <div class="hepatitisb-trust-card-price">
              <span class="hepatitisb-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£55')); ?></span>
              <span class="hepatitisb-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="hepatitisb-trust-card-divider"></div>
            <ul class="hepatitisb-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Adult &amp; child booking available</span></li>
              <li><i class="fas fa-check"></i> <span>Lifetime protection for most adults</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="hepatitisb-trust-card-footer">
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
<section class="hepatitisb-protect-section">
  <div class="section-container">
    <div class="hepatitisb-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="hepatitisb-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Hepatitis B Vaccine')); ?></h2>
      <p class="hepatitisb-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'A three-dose course giving lifetime protection for most healthy adults')); ?></p>
    </div>

    <div class="hepatitisb-protect-grid">
      <div class="hepatitisb-protect-image-wrapper">
        <div class="hepatitisb-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1675249754592-f6dc30b511aa?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Vaccine vials — hepatitis B is given as an injected course')); ?>" class="hepatitisb-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hepatitisb-protect-content">
        <div class="hepatitisb-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Three Doses, Lifetime Protection')); ?></span>
        </div>

        <h3 class="hepatitisb-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'A Complete Course Is Essential')); ?></h3>
        <p class="hepatitisb-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Hepatitis B is a viral liver infection spread through blood, sexual contact and other bodily fluids, which can become chronic and lead to serious liver disease. The standard course is three doses at 0, 1 and 6 months, though an accelerated schedule (0, 1, 2 months plus a 12-month booster) is available if you're travelling sooner. Completing all three doses matters — one or two doses alone don't give full protection.")); ?></p>

        <ul class="hepatitisb-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="hepatitisb-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="hepatitisb-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Complete the Full Course</strong><p>Three doses give lifetime protection for most healthy adults — an accelerated schedule is available if time is tight.</p></div>
            </li>
            <li class="hepatitisb-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Book as Early as Possible</strong><p>Same-day first doses are available, but starting early gives more time to complete the course before you travel.</p></div>
            </li>
            <li class="hepatitisb-protect-feature">
              <div class="icon"><i class="fas fa-child-reaching"></i></div>
              <div class="text"><strong>Adult &amp; Child Appointments</strong><p>We can book the age-appropriate vaccine for both adults and children — choose the calendar that suits you below.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="hepatitisb-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="hepatitisb-stats-section">
  <div class="section-container">
    <div class="hepatitisb-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="hepatitisb-stat-divider"></div><?php endif; ?>
        <div class="hepatitisb-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitisb-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">3 Doses</span><span class="label">Full Course</span></div></div>
        <div class="hepatitisb-stat-divider"></div>
        <div class="hepatitisb-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">Lifetime</span><span class="label">Protection*</span></div></div>
        <div class="hepatitisb-stat-divider"></div>
        <div class="hepatitisb-stat-item"><div class="icon"><i class="fas fa-child-reaching"></i></div><div class="content"><span class="number">Adult &amp; Child</span><span class="label">Appointments</span></div></div>
        <div class="hepatitisb-stat-divider"></div>
        <div class="hepatitisb-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">First Dose</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="hepatitisb-about-section">
  <div class="section-container">
    <div class="hepatitisb-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="hepatitisb-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Hepatitis B?')); ?></h2>
      <p class="hepatitisb-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A viral liver infection found worldwide, more common in some regions')); ?></p>
    </div>

    <div class="hepatitisb-about-content-grid">
      <div class="hepatitisb-about-image-wrapper">
        <div class="hepatitisb-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1771797629089-7691ddf45680?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'World map — hepatitis B is more common across several travel regions')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hepatitisb-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="hepatitisb-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="hepatitisb-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Viral Liver Infection</h3><p>Spread through blood, sexual contact, and other bodily fluids.</p></div>
          <div class="hepatitisb-info-card"><div class="icon"><i class="fas fa-triangle-exclamation"></i></div><h3>Can Become Chronic</h3><p>In some people the infection persists long-term, risking cirrhosis, liver failure or liver cancer.</p></div>
          <div class="hepatitisb-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Found Widely</h3><p>More common across sub-Saharan Africa, East and Southeast Asia, Eastern Europe and Central Asia.</p></div>
          <div class="hepatitisb-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>A complete three-dose vaccine course gives strong, long-lasting protection.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="hepatitisb-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Also Worth Considering Outside Travel')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "Hepatitis B vaccination is also recommended for people needing medical or dental treatment abroad, healthcare and laboratory workers, and anyone with an increased personal risk — not just travellers to higher-risk regions.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="hepatitisb-needs-section">
  <div class="section-container">
    <div class="hepatitisb-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="hepatitisb-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="hepatitisb-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for travellers and anyone with an increased personal risk')); ?></p>
    </div>

    <div class="hepatitisb-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Travellers to Higher-Risk Regions</h3>
          <p class="nhs-card-desc">Worth having before travel to sub-Saharan Africa, East or Southeast Asia, Eastern Europe or Central Asia.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Extended or repeat travel</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Backpacking or volunteering trips</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Families with children</span></li>
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
          <h3 class="nhs-card-title">Higher Personal-Risk Groups</h3>
          <p class="nhs-card-desc">Also recommended for those needing medical or dental treatment abroad, and healthcare or laboratory workers.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Medical or dental treatment abroad</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Healthcare &amp; laboratory workers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Those with chronic liver or kidney disease</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="hepatitisb-pricing-section" id="pricing">
  <div class="section-container">
    <div class="hepatitisb-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="hepatitisb-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Hepatitis B Vaccination Pricing')); ?></h2>
      <p class="hepatitisb-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Priced per dose — we will confirm your full course schedule at your first appointment')); ?></p>
    </div>

    <div class="hepatitisb-pricing-grid">
      <div class="hepatitisb-pricing-card featured">
        <div class="hepatitisb-pricing-ribbon">Per Dose</div>
        <h3 class="hepatitisb-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Hepatitis B Vaccine')); ?></h3>
        <div class="hepatitisb-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£55')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="hepatitisb-pricing-includes">
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Adult &amp; child appointments available</li>
          <li><i class="fas fa-check"></i> Standard or accelerated schedule</li>
          <li><i class="fas fa-check"></i> Full course scheduling support</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="hepatitisb-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price shown is per dose. The standard course is 3 doses over 6 months; an accelerated schedule is available if you\'re travelling sooner — ask our team.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="hepatitisb-details-section">
  <div class="section-container">
    <div class="hepatitisb-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="hepatitisb-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="hepatitisb-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="hepatitisb-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="hepatitisb-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitisb-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and timeline to confirm the right dosing schedule.</p></div>
        <div class="hepatitisb-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>Given the same day at your first appointment, in the upper arm.</p></div>
        <div class="hepatitisb-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Course Scheduling</h3><p>We book your remaining doses to complete the full course on time before you travel.</p></div>
        <div class="hepatitisb-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — soreness at the injection site, headache, tiredness or a slight fever.</p></div>
        <div class="hepatitisb-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Adult &amp; Child Options</h3><p>Choose the age-appropriate booking calendar when you're ready to book.</p></div>
        <div class="hepatitisb-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="hepatitisb-faq-section">
  <div class="section-container">
    <div class="hepatitisb-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'HEPATITIS B FAQs')); ?></span>
      </div>
      <h2 class="hepatitisb-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="hepatitisb-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="hepatitisb-faq-item">
          <button class="hepatitisb-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="hepatitisb-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitisb-faq-item"><button class="hepatitisb-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses does my child need?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisb-faq-content"><p>The same three-dose schedule as adults. Use the "Child" option on the booking calendar below to get the age-appropriate appointment.</p></div></div>
        <div class="hepatitisb-faq-item"><button class="hepatitisb-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Can I have an accelerated course if I'm travelling soon?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisb-faq-content"><p>Yes — an accelerated schedule (0, 1, 2 months plus a 12-month booster) is available, and in some cases an even faster 3-week schedule may be possible. Contact us to discuss your travel dates.</p></div></div>
        <div class="hepatitisb-faq-item"><button class="hepatitisb-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">What if I only have one or two doses before I travel?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisb-faq-content"><p>Partial courses don't give full protection, so it's best to complete all doses. If you're short on time before travel, ask us about the accelerated schedule.</p></div></div>
        <div class="hepatitisb-faq-item"><button class="hepatitisb-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Will I need a booster later on?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisb-faq-content"><p>Most healthy adults who complete the full 3-dose course don't need a booster — protection is generally considered lifelong.</p></div></div>
        <div class="hepatitisb-faq-item"><button class="hepatitisb-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisb-faq-content"><p>Most people just get some soreness, redness or swelling at the injection site, and occasionally a mild headache, tiredness or fever.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed with Adult/Child toggle
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     Adult:  appointmentType=47536429 (Hepatitis B Vaccination - ADULT)
     Child:  appointmentType=81305482 (Hepatitis B Vaccination - CHILD)
     Location: calendarID=10903457 (Denton Pharmacy) — Bowland uses calendarID=8436365
     Override per-page via ACF fields 'vaccine_acuity_url_adult' / 'vaccine_acuity_url_child'. -->
<?php
$acuity_url_adult = dp_field( 'vaccine_acuity_url_adult', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536429&calendarID=10903457&ref=embedded_csp' );
$acuity_url_child = dp_field( 'vaccine_acuity_url_child', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=81305482&calendarID=10903457&ref=embedded_csp' );
?>
<section class="hepatitisb-booking-section" id="booking-widget">
  <div class="hepatitisb-booking-blob-1"></div>
  <div class="hepatitisb-booking-blob-2"></div>
  <div class="section-container">
    <div class="hepatitisb-booking-header">
      <h2 class="hepatitisb-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Hepatitis B Vaccination')); ?></h2>
      <p class="hepatitisb-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose adult or child, then pick a time that suits you at our Denton clinic')); ?></p>
    </div>

    <?php if ( $acuity_url_adult && $acuity_url_child ) : ?>
      <div class="hepatitisb-booking-toggle" role="group" aria-label="Choose age group">
        <button type="button" class="hepatitisb-toggle-btn active" data-url="<?php echo esc_url( $acuity_url_adult ); ?>" onclick="switchBookingAge(this)">Adult</button>
        <button type="button" class="hepatitisb-toggle-btn" data-url="<?php echo esc_url( $acuity_url_child ); ?>" onclick="switchBookingAge(this)">Child</button>
      </div>
    <?php endif; ?>

    <div class="hepatitisb-booking-embed">
      <?php if ( $acuity_url_adult ) : ?>
        <iframe id="hepatitisb-acuity-iframe" src="<?php echo esc_url( $acuity_url_adult ); ?>" title="Book your Hepatitis B vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="hepatitisb-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="hepatitisb-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="hepatitisb-cta-section">
  <div class="hepatitisb-cta-bg"></div>
  <div class="section-container">
    <div class="hepatitisb-cta-content">
      <div class="hepatitisb-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day First Dose</span>
          <span class="badge">Adult &amp; Child</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="hepatitisb-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="hepatitisb-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your hepatitis B vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="hepatitisb-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
