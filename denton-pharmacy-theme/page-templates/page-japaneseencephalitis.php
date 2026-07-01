<?php
/**
 * Template Name: Japanese Encephalitis Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'japaneseencephalitis';
$vaccine_name = dp_field('vaccine_name', 'Japanese Encephalitis');
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
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="japaneseencephalitis-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Japanese Encephalitis Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="japaneseencephalitis-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself before travelling with our Japanese encephalitis vaccination service in Denton, Manchester. A two-dose course for those spending time in rural areas of Asia, especially near rice paddies and wetlands.")); ?>
        </p>

        <div class="japaneseencephalitis-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Japanese Encephalitis Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
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
          <span class="japaneseencephalitis-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '2')); ?></span>
          <span class="japaneseencephalitis-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="japaneseencephalitis-trust-card">
          <div class="japaneseencephalitis-trust-card-glow"></div>
          <div class="japaneseencephalitis-trust-card-inner">
            <div class="japaneseencephalitis-trust-card-header">
              <div class="japaneseencephalitis-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="japaneseencephalitis-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'JE Vaccine (Ixiaro)')); ?></span>
            </div>
            <div class="japaneseencephalitis-trust-card-price">
              <span class="japaneseencephalitis-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£99')); ?></span>
              <span class="japaneseencephalitis-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Japanese Encephalitis Vaccine')); ?></h2>
      <p class="japaneseencephalitis-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'A two-dose course for travellers spending time in rural, agricultural areas of Asia')); ?></p>
    </div>

    <div class="japaneseencephalitis-protect-grid">
      <div class="japaneseencephalitis-protect-image-wrapper">
        <div class="japaneseencephalitis-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1747056032562-1c73b853a79d?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Rustic accommodation with a mosquito net — a higher-risk setting for Japanese encephalitis')); ?>" class="japaneseencephalitis-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="japaneseencephalitis-protect-content">
        <div class="japaneseencephalitis-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Full Protection From 1 Week After Dose 2')); ?></span>
        </div>

        <h3 class="japaneseencephalitis-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Worth Considering for Rural &amp; Outdoor Trips')); ?></h3>
        <p class="japaneseencephalitis-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Japanese encephalitis is spread by Culex mosquitoes, mainly in rural and agricultural parts of Asia, and can cause serious brain inflammation. The vaccine (Ixiaro) is given as two doses, 28 days apart, with full protection developing about a week after the second dose. It's most relevant for longer stays, monsoon-season travel, or trips involving outdoor activity, cycling or trekking in affected areas.")); ?></p>

        <ul class="japaneseencephalitis-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="japaneseencephalitis-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="japaneseencephalitis-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Two Doses, 28 Days Apart</strong><p>The full course gives around 1 to 2 years of protection, with a booster available later if needed.</p></div>
            </li>
            <li class="japaneseencephalitis-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Book at Least 5 Weeks Ahead</strong><p>You'll need time for both doses, with the second given at least a week before you travel.</p></div>
            </li>
            <li class="japaneseencephalitis-protect-feature">
              <div class="icon"><i class="fas fa-tree"></i></div>
              <div class="text"><strong>Most Relevant for Rural Travel</strong><p>Particularly worth having if you're spending a month or more in rural areas, or travelling in monsoon season.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="japaneseencephalitis-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
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
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Japanese Encephalitis?')); ?></h2>
      <p class="japaneseencephalitis-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A mosquito-borne virus found in rural, agricultural parts of Asia')); ?></p>
    </div>

    <div class="japaneseencephalitis-about-content-grid">
      <div class="japaneseencephalitis-about-image-wrapper">
        <div class="japaneseencephalitis-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1759825905232-7b0bed445150?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Rice paddy field in rural Asia — a typical Japanese encephalitis risk setting')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="japaneseencephalitis-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="japaneseencephalitis-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="japaneseencephalitis-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>Mosquito-Borne Virus</h3><p>Spread by Culex mosquitoes, which breed around rice paddies, wetlands and standing water.</p></div>
          <div class="japaneseencephalitis-info-card"><div class="icon"><i class="fas fa-brain"></i></div><h3>Affects the Brain</h3><p>Can cause serious inflammation of the brain, with significant risk for those who become severely unwell.</p></div>
          <div class="japaneseencephalitis-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Rural Asia</h3><p>Found in South-East Asia, South Asia and the Far East, mainly in rural and agricultural areas.</p></div>
          <div class="japaneseencephalitis-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>A two-dose vaccine course, alongside mosquito bite avoidance, lowers your risk significantly.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="japaneseencephalitis-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Vaccination Isn\'t the Whole Story')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "No vaccine offers 100% protection, so it's still worth taking mosquito bite precautions — repellent, covering up, and mosquito nets where accommodation lacks air conditioning or screens.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="japaneseencephalitis-needs-section">
  <div class="section-container">
    <div class="japaneseencephalitis-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="japaneseencephalitis-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Most relevant for longer stays, rural travel and outdoor activity in Asia')); ?></p>
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
          <h3 class="nhs-card-title">Extended Rural Stays</h3>
          <p class="nhs-card-desc">Worth having if you're spending a month or more in rural, agricultural parts of Asia.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>1 month+ in rural areas</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Monsoon season travel (May–October)</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Accommodation without screens or air-con</span></li>
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
          <h3 class="nhs-card-title">Outdoor &amp; Active Travellers</h3>
          <p class="nhs-card-desc">Particularly worth considering if your trip involves cycling, trekking or working outdoors in affected regions.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Cycling or trekking itineraries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Outdoor work assignments</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Repeat travel to the same regions</span></li>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Japanese Encephalitis Vaccination Pricing')); ?></h2>
      <p class="japaneseencephalitis-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Priced per dose — we will confirm your full course cost at your first appointment')); ?></p>
    </div>

    <div class="japaneseencephalitis-pricing-grid">
      <div class="japaneseencephalitis-pricing-card featured">
        <div class="japaneseencephalitis-pricing-ribbon">Per Dose</div>
        <h3 class="japaneseencephalitis-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'JE Vaccine (Ixiaro)')); ?></h3>
        <div class="japaneseencephalitis-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£99')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="japaneseencephalitis-pricing-includes">
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Travel risk assessment &amp; advice</li>
          <li><i class="fas fa-check"></i> Course scheduling support</li>
          <li><i class="fas fa-check"></i> Can be combined with other travel vaccines</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="japaneseencephalitis-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price shown is per dose. The full course is 2 doses, 28 days apart — not available on the NHS for travel. If you have less than 5 weeks before you travel, contact us to discuss your options.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="japaneseencephalitis-details-section">
  <div class="section-container">
    <div class="japaneseencephalitis-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="japaneseencephalitis-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="japaneseencephalitis-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="japaneseencephalitis-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and confirm the vaccine is suitable for your trip.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>Given the same day at your first appointment, in the upper arm.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Second Dose</h3><p>We book your second dose 28 days later to complete the course.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — soreness at the injection site, headache, muscle aches or a slight fever.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-spray-can-sparkles"></i></div><h3>Mosquito Precautions Still Matter</h3><p>We'll also advise on repellent and bite avoidance, since no vaccine is 100% protective.</p></div>
        <div class="japaneseencephalitis-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'JAPANESE ENCEPHALITIS FAQs')); ?></span>
      </div>
      <h2 class="japaneseencephalitis-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
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
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Do I actually need this vaccine for my trip?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>It depends on your itinerary. It's most relevant for longer stays in rural, agricultural parts of Asia, monsoon-season travel, or trips involving outdoor activity — short city breaks carry much lower risk. Our pharmacist can advise based on your plans.</p></div></div>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How soon before travel should I start the course?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>Ideally at least 5 weeks before departure, to complete both doses with the second at least a week before you travel. If your trip is sooner, contact us to discuss your options.</p></div></div>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Can I have this alongside other travel vaccines?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>Yes — it can be given at the same appointment as other travel vaccines, saving you a return visit.</p></div></div>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">How long does protection last?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>The primary course gives protection for at least 1 to 2 years. A booster is available 12 to 24 months later if you need longer-term or repeat protection.</p></div></div>
        <div class="japaneseencephalitis-faq-item"><button class="japaneseencephalitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="japaneseencephalitis-faq-content"><p>Most people just get some soreness at the injection site, a headache, muscle aches or a slight fever, and these usually pass quickly.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47536440  (Japanese Encephalitis Vaccination)
     Location:       calendarID=10903457       (Denton Pharmacy)
                     Bowland uses calendarID=8436365
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536440&calendarID=10903457&ref=embedded_csp' );
?>
<section class="japaneseencephalitis-booking-section" id="booking-widget">
  <div class="japaneseencephalitis-booking-blob-1"></div>
  <div class="japaneseencephalitis-booking-blob-2"></div>
  <div class="section-container">
    <div class="japaneseencephalitis-booking-header">
      <h2 class="japaneseencephalitis-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Japanese Encephalitis Vaccination')); ?></h2>
      <p class="japaneseencephalitis-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="japaneseencephalitis-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Japanese Encephalitis vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="japaneseencephalitis-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="japaneseencephalitis-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
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

      <h2 class="japaneseencephalitis-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="japaneseencephalitis-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your Japanese encephalitis vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="japaneseencephalitis-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
