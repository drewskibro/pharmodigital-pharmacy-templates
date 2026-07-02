<?php
/**
 * Template Name: Japanese Encephalitis Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'japaneseencephalitis';
$vaccine_name = bp_field('vaccine_name', 'Japanese Encephalitis');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="japaneseencephalitis-hero-section">
  <div class="japaneseencephalitis-hero-bg"></div>
  <div class="japaneseencephalitis-hero-dots"></div>
  <div class="japaneseencephalitis-hero-glow-1"></div>
  <div class="japaneseencephalitis-hero-glow-2"></div>
  <div class="section-container">
    <div class="japaneseencephalitis-hero-grid">

      <!-- Left: Content -->
      <div class="japaneseencephalitis-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="japaneseencephalitis-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Japanese Encephalitis Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="japaneseencephalitis-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Rice paddies, rural guesthouses, monsoon-season trips — if that's your itinerary in Asia, it's worth talking to us. Our Wythenshawe pharmacy runs the two-dose Japanese encephalitis course.")); ?>
        </p>

        <div class="japaneseencephalitis-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Japanese Encephalitis Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="japaneseencephalitis-hero-trust">
          <div class="japaneseencephalitis-hero-trust-item"><i class="fas fa-syringe"></i><span>2-Dose Course</span></div>
          <div class="japaneseencephalitis-hero-trust-item"><i class="fas fa-tree"></i><span>For Rural &amp; Outdoor Travel</span></div>
          <div class="japaneseencephalitis-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="japaneseencephalitis-hero-visual">
        <div class="japaneseencephalitis-hero-float-badge">
          <span class="japaneseencephalitis-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '2')); ?></span>
          <span class="japaneseencephalitis-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="japaneseencephalitis-trust-card">
          <div class="japaneseencephalitis-trust-card-glow"></div>
          <div class="japaneseencephalitis-trust-card-inner">
            <div class="japaneseencephalitis-trust-card-header">
              <div class="japaneseencephalitis-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="japaneseencephalitis-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'JE Vaccine (Ixiaro)')); ?></span>
            </div>
            <div class="japaneseencephalitis-trust-card-price">
              <span class="japaneseencephalitis-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£90')); ?></span>
              <span class="japaneseencephalitis-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="japaneseencephalitis-trust-card-divider"></div>
            <ul class="japaneseencephalitis-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Two doses, 28 days apart</span></li>
              <li><i class="fas fa-check"></i> <span>Full protection 1 week after dose 2</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day first dose available</span></li>
            </ul>
            <div class="japaneseencephalitis-trust-card-footer">
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
<section class="japaneseencephalitis-protect-section">
  <div class="section-container">
    <div class="japaneseencephalitis-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'About the JE Vaccine')); ?></h2>
      <p class="japaneseencephalitis-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', "For travellers spending real time in Asia's rural, agricultural areas")); ?></p>
    </div>

    <div class="japaneseencephalitis-protect-grid">
      <div class="japaneseencephalitis-protect-image-wrapper">
        <div class="japaneseencephalitis-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1746431565334-79324fe382b5?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'Inside a rustic thatched-roof dwelling — a higher-risk setting for Japanese encephalitis')); ?>" class="japaneseencephalitis-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="japaneseencephalitis-protect-content">
        <div class="japaneseencephalitis-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Full Protection From 1 Week After Dose 2')); ?></span>
        </div>

        <h3 class="japaneseencephalitis-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Not Every Traveller Needs It — Some Really Do')); ?></h3>
        <p class="japaneseencephalitis-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "Culex mosquitoes carry Japanese encephalitis around rural and farming areas of Asia, and severe cases can cause serious brain inflammation. Ixiaro, the vaccine we use, comes as two doses 28 days apart, reaching full effect roughly a week after the second. It earns its keep on longer stays, monsoon-season trips, or itineraries with real time outdoors, cycling or trekking through affected areas.")); ?></p>

        <ul class="japaneseencephalitis-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="japaneseencephalitis-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="japaneseencephalitis-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Two Doses, a Month Apart</strong><p>The course covers you for around 1 to 2 years, with a booster available if you need it longer term.</p></div>
            </li>
            <li class="japaneseencephalitis-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Give It 5 Weeks</strong><p>You'll need room for both doses, plus a week's gap before you fly after the second.</p></div>
            </li>
            <li class="japaneseencephalitis-protect-feature">
              <div class="icon"><i class="fas fa-tree"></i></div>
              <div class="text"><strong>Made for Rural Travel</strong><p>Matters most if you're spending a month or longer rurally, or travelling during monsoon season.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="japaneseencephalitis-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="japaneseencephalitis-stats-section">
  <div class="section-container">
    <div class="japaneseencephalitis-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="japaneseencephalitis-stat-divider"></div><?php endif; ?>
        <div class="japaneseencephalitis-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="japaneseencephalitis-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">2 Doses</span><span class="label">28 Days Apart</span></div></div>
        <div class="japaneseencephalitis-stat-divider"></div>
        <div class="japaneseencephalitis-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">1–2 Years</span><span class="label">Protection</span></div></div>
        <div class="japaneseencephalitis-stat-divider"></div>
        <div class="japaneseencephalitis-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">5 Weeks</span><span class="label">Before Travel</span></div></div>
        <div class="japaneseencephalitis-stat-divider"></div>
        <div class="japaneseencephalitis-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">First Dose</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="japaneseencephalitis-about-section">
  <div class="section-container">
    <div class="japaneseencephalitis-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'What JE Actually Is')); ?></h2>
      <p class="japaneseencephalitis-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', "A mosquito-borne virus rooted in Asia's farmland and paddy fields")); ?></p>
    </div>

    <div class="japaneseencephalitis-about-content-grid">
      <div class="japaneseencephalitis-about-image-wrapper">
        <div class="japaneseencephalitis-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1780342286779-1032160016be?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Cycling down a rural village path in Asia — the kind of trip where JE risk rises')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="japaneseencephalitis-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="japaneseencephalitis-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="japaneseencephalitis-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>Rice-Paddy Mosquitoes</h3><p>Culex mosquitoes breed around paddy fields, wetlands and standing water — and carry the virus.</p></div>
          <div class="japaneseencephalitis-info-card"><div class="icon"><i class="fas fa-brain"></i></div><h3>Targets the Brain</h3><p>Severe cases bring serious brain inflammation, with real risk for anyone badly affected.</p></div>
          <div class="japaneseencephalitis-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Rural Asia, Mostly</h3><p>South-East Asia, South Asia and the Far East see the most cases, concentrated in farming country.</p></div>
          <div class="japaneseencephalitis-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Vaccine-Preventable</h3><p>Two doses plus decent bite avoidance cuts your risk substantially.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="japaneseencephalitis-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', "The Vaccine Isn't a Free Pass")); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "No vaccine is 100% protective, so keep up the basics too — repellent, covering up in the evenings, and a mosquito net if your accommodation doesn't have air-con or screens.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="japaneseencephalitis-needs-section">
  <div class="section-container">
    <div class="japaneseencephalitis-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Does Your Trip Fit the Profile?')); ?></h2>
      <p class="japaneseencephalitis-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Longer stays, rural areas and outdoor activity in Asia raise the stakes')); ?></p>
    </div>

    <div class="japaneseencephalitis-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">A Month or More, Rurally</h3>
          <p class="nhs-card-desc">If you're settling into rural, farming areas of Asia for a while, this is worth having.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>1 month or more rurally</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travelling in monsoon season (May–October)</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Basic accommodation, no screens or air-con</span></li>
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
          <h3 class="nhs-card-title">Cyclists, Trekkers &amp; Outdoor Workers</h3>
          <p class="nhs-card-desc">If your days are spent outdoors — cycling, trekking or working in the affected regions — prioritise this one.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Cycling or trekking itineraries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Outdoor work assignments</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Repeat visits to the same regions</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="japaneseencephalitis-pricing-section" id="pricing">
  <div class="section-container">
    <div class="japaneseencephalitis-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Pricing')); ?></h2>
      <p class="japaneseencephalitis-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', "Priced per dose — we'll confirm your full course cost at the first visit")); ?></p>
    </div>

    <div class="japaneseencephalitis-pricing-grid">
      <div class="japaneseencephalitis-pricing-card featured">
        <div class="japaneseencephalitis-pricing-ribbon">Per Dose</div>
        <h3 class="japaneseencephalitis-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'JE Vaccine (Ixiaro)')); ?></h3>
        <div class="japaneseencephalitis-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£90')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="japaneseencephalitis-pricing-includes">
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Advice tailored to your trip</li>
          <li><i class="fas fa-check"></i> Full course scheduled for you</li>
          <li><i class="fas fa-check"></i> Can be paired with other travel vaccines</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="japaneseencephalitis-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "Price is per dose. Full course is 2 doses, 28 days apart — not an NHS travel service. Less than 5 weeks until you fly? Contact us to talk through your options.")); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="japaneseencephalitis-details-section">
  <div class="section-container">
    <div class="japaneseencephalitis-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What Happens at the Appointment')); ?></h2>
      <p class="japaneseencephalitis-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A relaxed visit to our Wythenshawe pharmacy')); ?></p>
    </div>

    <div class="japaneseencephalitis-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="japaneseencephalitis-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>We Talk Through Your Trip</h3><p>Itinerary, timing, how rural you're going — we confirm whether this vaccine fits.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Dose One, Same Day</h3><p>Given in the upper arm at your first appointment.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Dose Two, 28 Days Later</h3><p>We book it in to complete the course on schedule.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Are Usually Mild</h3><p>Soreness at the injection site, a headache, muscle aches or a slight fever.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-spray-can-sparkles"></i></div><h3>Bite Avoidance Still Counts</h3><p>We'll go over repellent and other precautions too — no vaccine covers you 100%.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private, No Referral</h3><p>Travel JE vaccination sits outside the NHS, so just book with us directly.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="japaneseencephalitis-faq-section">
  <div class="section-container">
    <div class="japaneseencephalitis-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'JAPANESE ENCEPHALITIS FAQs')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="japaneseencephalitis-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="japaneseencephalitis-faq-item">
          <button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="japaneseencephalitis-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Is this actually necessary for my trip?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>Depends what you're doing. Longer stays in rural, farming parts of Asia, monsoon-season travel, or an outdoorsy itinerary all push the risk up — a quick city break, much less so. Tell our pharmacist your plans and they'll give you a straight answer.</p></div></div>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">When should I start the course?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>At least 5 weeks before you fly is ideal — that covers both doses plus a week's buffer after the second. Tighter on time? Get in touch and we'll figure out what's possible.</p></div></div>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Can this go alongside other travel jabs?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>Yes — we can usually fit it into the same appointment as other travel vaccines, so you're not making extra trips.</p></div></div>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">How long am I covered for?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>At least 1 to 2 years from the primary course. If you need longer-term or repeat cover, a booster is available 12 to 24 months on.</p></div></div>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects turn up?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>Usually just soreness where the needle went in, maybe a headache, muscle aches or a slight fever — all short-lived.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47536440  (Japanese Encephalitis Vaccination)
     Location:       calendarID=8436365       (Bowland Pharmacy)
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536440&calendarID=8436365&ref=embedded_csp' );
?>
<section class="japaneseencephalitis-booking-section" id="booking-widget">
  <div class="japaneseencephalitis-booking-blob-1"></div>
  <div class="japaneseencephalitis-booking-blob-2"></div>
  <div class="section-container">
    <div class="japaneseencephalitis-booking-header">
      <h2 class="japaneseencephalitis-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Japanese Encephalitis Vaccination')); ?></h2>
      <p class="japaneseencephalitis-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <div class="japaneseencephalitis-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Japanese Encephalitis vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="japaneseencephalitis-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="japaneseencephalitis-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="japaneseencephalitis-cta-section">
  <div class="japaneseencephalitis-cta-bg"></div>
  <div class="section-container">
    <div class="japaneseencephalitis-cta-content">
      <div class="japaneseencephalitis-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day First Dose</span>
          <span class="badge">2-Dose Course</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="japaneseencephalitis-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Get Covered Before Your Rural Trip')); ?></h2>
      <p class="japaneseencephalitis-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book your Japanese encephalitis vaccine with our Wythenshawe team, in good time before you fly.")); ?></p>

      <div class="japaneseencephalitis-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
