<?php
/**
 * Template Name: DTP Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'dtp';
$vaccine_name = bp_field('vaccine_name', 'DTP');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="dtp-hero-section">
  <div class="dtp-hero-bg"></div>
  <div class="dtp-hero-dots"></div>
  <div class="dtp-hero-glow-1"></div>
  <div class="dtp-hero-glow-2"></div>
  <div class="section-container">
    <div class="dtp-hero-grid">

      <!-- Left: Content -->
      <div class="dtp-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="dtp-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'DTP Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="dtp-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Not sure when you last had a DTP booster? If it's been over 10 years, our Wythenshawe pharmacy can top up your Diphtheria, Tetanus and Polio protection with a single combined jab before you fly.")); ?>
        </p>

        <div class="dtp-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book DTP Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="dtp-hero-trust">
          <div class="dtp-hero-trust-item"><i class="fas fa-syringe"></i><span>Single Booster Dose</span></div>
          <div class="dtp-hero-trust-item"><i class="fas fa-shield-halved"></i><span>3-in-1 Combined Vaccine</span></div>
          <div class="dtp-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="dtp-hero-visual">
        <div class="dtp-hero-float-badge">
          <span class="dtp-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '3')); ?></span>
          <span class="dtp-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'diseases, 1 jab')); ?></span>
        </div>
        <div class="dtp-trust-card">
          <div class="dtp-trust-card-glow"></div>
          <div class="dtp-trust-card-inner">
            <div class="dtp-trust-card-header">
              <div class="dtp-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="dtp-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'DTP Vaccine (Revaxis)')); ?></span>
            </div>
            <div class="dtp-trust-card-price">
              <span class="dtp-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£30')); ?></span>
              <span class="dtp-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'single dose')); ?></span>
            </div>
            <div class="dtp-trust-card-divider"></div>
            <ul class="dtp-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Diphtheria, tetanus &amp; polio in one jab</span></li>
              <li><i class="fas fa-check"></i> <span>Protection for up to 10 years</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="dtp-trust-card-footer">
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
<section class="dtp-protect-section">
  <div class="section-container">
    <div class="dtp-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="dtp-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'About the DTP Booster')); ?></h2>
      <p class="dtp-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'Three diseases, one combined jab, done in a single visit')); ?></p>
    </div>

    <div class="dtp-protect-grid">
      <div class="dtp-protect-image-wrapper">
        <div class="dtp-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1576765608866-5b51046452be?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'A pharmacist giving the combined DTP booster as a single injection')); ?>" class="dtp-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="dtp-protect-content">
        <div class="dtp-protect-badge-box">
          <i class="fas fa-shield-halved"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'One Jab, Up to 10 Years of Protection')); ?></span>
        </div>

        <h3 class="dtp-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'One of the Easiest Boxes to Tick')); ?></h3>
        <p class="dtp-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "Nearly everyone had their DTP jabs as a child — the trouble is that protection fades over time. Revaxis rolls diphtheria, tetanus and polio cover into a single injection, and it's worth having if your last dose was more than a decade ago (usually around school age for most adults). It matters more if you're headed to South Asia, sub-Saharan Africa, the Middle East, Eastern Europe or Central Asia.")); ?></p>

        <ul class="dtp-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="dtp-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="dtp-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Three Diseases, One Jab</strong><p>No need for three separate appointments — it's all in a single dose.</p></div>
            </li>
            <li class="dtp-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>In and Out Fast</strong><p>Under 20 minutes, and easy to pair with other travel vaccines on the same visit.</p></div>
            </li>
            <li class="dtp-protect-feature">
              <div class="icon"><i class="fas fa-passport"></i></div>
              <div class="text"><strong>Easy to Tolerate</strong><p>Most people notice nothing more than a sore arm for a day or two.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="dtp-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="dtp-stats-section">
  <div class="section-container">
    <div class="dtp-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="dtp-stat-divider"></div><?php endif; ?>
        <div class="dtp-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="dtp-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">1 Dose</span><span class="label">Single Booster</span></div></div>
        <div class="dtp-stat-divider"></div>
        <div class="dtp-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">10 Years</span><span class="label">Protection</span></div></div>
        <div class="dtp-stat-divider"></div>
        <div class="dtp-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">Under 20 Min</span><span class="label">Appointment</span></div></div>
        <div class="dtp-stat-divider"></div>
        <div class="dtp-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="dtp-about-section">
  <div class="section-container">
    <div class="dtp-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="dtp-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'What D, T and P Stand For')); ?></h2>
      <p class="dtp-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', "Three diseases you don't want to catch, all covered by one jab")); ?></p>
    </div>

    <div class="dtp-about-content-grid">
      <div class="dtp-about-image-wrapper">
        <div class="dtp-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1586441133374-ed1cb4007a47?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Passport and boarding pass — check your DTP cover before you fly')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="dtp-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="dtp-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="dtp-info-card"><div class="icon"><i class="fas fa-lungs"></i></div><h3>Diphtheria</h3><p>Bacterial, attacking the throat and airway — severe cases can go on to damage the heart.</p></div>
          <div class="dtp-info-card"><div class="icon"><i class="fas fa-hand-fist"></i></div><h3>Tetanus</h3><p>Picked up from soil bacteria entering through a wound, bringing painful spasms and lockjaw.</p></div>
          <div class="dtp-info-card"><div class="icon"><i class="fas fa-wheelchair"></i></div><h3>Polio</h3><p>Viral, and while most infections are mild, rare cases can leave lasting paralysis.</p></div>
          <div class="dtp-info-card"><div class="icon"><i class="fas fa-shield-halved"></i></div><h3>One Injection Handles All Three</h3><p>Revaxis bundles protection against all three diseases into a single dose.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="dtp-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', "Childhood Cover Doesn't Last Forever")); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "Whatever protection you built up as a kid gradually wears off, which is why a top-up roughly every 10 years is recommended — and it matters more if you're heading somewhere higher-risk.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="dtp-needs-section">
  <div class="section-container">
    <div class="dtp-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="dtp-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Are You Due a Top-Up?')); ?></h2>
      <p class="dtp-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', "If either of these applies, it's worth booking in")); ?></p>
    </div>

    <div class="dtp-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Anyone Overdue a Booster</h3>
          <p class="nhs-card-desc">If your last dose goes back to your school days and that's more than 10 years, it's time to top up before you travel.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Last dose over 10 years back</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Not sure of your own history</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travelling somewhere higher-risk</span></li>
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
          <h3 class="nhs-card-title">Travel to Higher-Risk Regions</h3>
          <p class="nhs-card-desc">If South Asia, sub-Saharan Africa, the Middle East, Eastern Europe or Central Asia is on your itinerary, prioritise this one.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>South Asia, sub-Saharan Africa &amp; Middle East</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Longer or more off-grid itineraries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Happy to pair with other travel jabs</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="dtp-pricing-section" id="pricing">
  <div class="section-container">
    <div class="dtp-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="dtp-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Pricing')); ?></h2>
      <p class="dtp-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'One flat price for the single booster, nothing else added on')); ?></p>
    </div>

    <div class="dtp-pricing-grid">
      <div class="dtp-pricing-card featured">
        <div class="dtp-pricing-ribbon">Single Booster</div>
        <h3 class="dtp-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'DTP Vaccine (Revaxis)')); ?></h3>
        <div class="dtp-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£30')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'single dose')); ?></span>
        </div>
        <ul class="dtp-pricing-includes">
          <li><i class="fas fa-check"></i> One combined injection</li>
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Can be paired with other travel vaccines</li>
          <li><i class="fas fa-check"></i> Suitable for most adults</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="dtp-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "This booster is sometimes available free on the NHS depending on your circumstances — worth asking your GP about that route first if it applies to you.")); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="dtp-details-section">
  <div class="section-container">
    <div class="dtp-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="dtp-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What Happens at the Appointment')); ?></h2>
      <p class="dtp-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A quick visit to our Wythenshawe pharmacy')); ?></p>
    </div>

    <div class="dtp-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="dtp-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="dtp-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>A Quick History Check</h3><p>We go through your vaccination history together and confirm a booster makes sense.</p></div>
        <div class="dtp-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>One Jab</h3><p>Given in the upper arm — over in seconds, most people barely notice it.</p></div>
        <div class="dtp-detail-card"><div class="icon"><i class="fas fa-clock"></i></div><h3>Under 20 Minutes</h3><p>Quick appointment, and it can be paired with other travel vaccines the same day.</p></div>
        <div class="dtp-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Are Usually Mild</h3><p>A sore arm, or occasionally a slight fever or headache for a day or two.</p></div>
        <div class="dtp-detail-card"><div class="icon"><i class="fas fa-user-group"></i></div><h3>Happy to Combine</h3><p>Booking multiple travel vaccines at once? We can usually fit this in alongside them.</p></div>
        <div class="dtp-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>NHS or Private</h3><p>This may be free on the NHS depending on your circumstances — otherwise book with us privately, no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="dtp-faq-section">
  <div class="section-container">
    <div class="dtp-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'DTP FAQs')); ?></span>
      </div>
      <h2 class="dtp-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="dtp-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="dtp-faq-item">
          <button class="dtp-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="dtp-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="dtp-faq-item"><button class="dtp-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How do I know if I'm due one?</span><i class="fas fa-plus icon"></i></button><div class="dtp-faq-content"><p>Rule of thumb: more than 10 years since your last dose (usually your last school-age jab for most adults) means it's worth having. Talk it through with our pharmacist if you're unsure.</p></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How far ahead of travel should I book?</span><i class="fas fa-plus icon"></i></button><div class="dtp-faq-content"><p>2 to 4 weeks before you fly is ideal, but it's still worth having closer to departure if that's all you've got.</p></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Can I get it with my other travel jabs?</span><i class="fas fa-plus icon"></i></button><div class="dtp-faq-content"><p>Yes — it's routinely given alongside other travel vaccines like Hepatitis A or Typhoid in the same appointment, so you're not coming back twice.</p></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Where does this matter most?</span><i class="fas fa-plus icon"></i></button><div class="dtp-faq-content"><p>South Asia, sub-Saharan Africa, the Middle East, Eastern Europe and Central Asia are the regions where it's most worth topping up, given how routine immunisation coverage varies there.</p></div></div>
        <div class="dtp-faq-item"><button class="dtp-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects should I watch for?</span><i class="fas fa-plus icon"></i></button><div class="dtp-faq-content"><p>Soreness, redness or swelling at the injection site is most common, sometimes with a mild fever, headache or muscle aches for a day or two.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47536407  (Diphtheria Tetanus Polio (DTP) Vaccination)
     Location:       calendarID=8436365       (Bowland Pharmacy)
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536407&calendarID=8436365&ref=embedded_csp' );
?>
<section class="dtp-booking-section" id="booking-widget">
  <div class="dtp-booking-blob-1"></div>
  <div class="dtp-booking-blob-2"></div>
  <div class="section-container">
    <div class="dtp-booking-header">
      <h2 class="dtp-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your DTP Vaccination')); ?></h2>
      <p class="dtp-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <div class="dtp-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your DTP vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="dtp-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="dtp-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="dtp-cta-section">
  <div class="dtp-cta-bg"></div>
  <div class="section-container">
    <div class="dtp-cta-content">
      <div class="dtp-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Single Dose</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="dtp-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', "Tick This Off Your Travel List")); ?></h2>
      <p class="dtp-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book your DTP booster with our Wythenshawe team — quick appointment, one less thing to worry about.")); ?></p>

      <div class="dtp-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
