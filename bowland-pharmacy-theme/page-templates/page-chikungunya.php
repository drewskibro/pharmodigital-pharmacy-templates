<?php
/**
 * Template Name: Chikungunya Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'chikungunya';
$vaccine_name = bp_field('vaccine_name', 'Chikungunya');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="chikungunya-hero-section">
  <div class="chikungunya-hero-bg"></div>
  <div class="chikungunya-hero-dots"></div>
  <div class="chikungunya-hero-glow-1"></div>
  <div class="chikungunya-hero-glow-2"></div>
  <div class="section-container">
    <div class="chikungunya-hero-grid">

      <!-- Left: Content -->
      <div class="chikungunya-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="chikungunya-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Chikungunya Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="chikungunya-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Heading somewhere mosquitoes carry more than an itchy bite? Our Wythenshawe pharmacy offers the chikungunya vaccine as a single injection — worth having before trips to Africa, Asia, the Indian Ocean islands, or Central and South America.")); ?>
        </p>

        <div class="chikungunya-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Chikungunya Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="chikungunya-hero-trust">
          <div class="chikungunya-hero-trust-item"><i class="fas fa-syringe"></i><span>Single Dose</span></div>
          <div class="chikungunya-hero-trust-item"><i class="fas fa-calendar-check"></i><span>Same-Day Appointments</span></div>
          <div class="chikungunya-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="chikungunya-hero-visual">
        <div class="chikungunya-hero-float-badge">
          <span class="chikungunya-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '1')); ?></span>
          <span class="chikungunya-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'dose needed')); ?></span>
        </div>
        <div class="chikungunya-trust-card">
          <div class="chikungunya-trust-card-glow"></div>
          <div class="chikungunya-trust-card-inner">
            <div class="chikungunya-trust-card-header">
              <div class="chikungunya-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="chikungunya-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Chikungunya Vaccine')); ?></span>
            </div>
            <div class="chikungunya-trust-card-price">
              <span class="chikungunya-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£175')); ?></span>
              <span class="chikungunya-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'single dose')); ?></span>
            </div>
            <div class="chikungunya-trust-card-divider"></div>
            <ul class="chikungunya-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Just one injection</span></li>
              <li><i class="fas fa-check"></i> <span>Around 2 years' protection</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="chikungunya-trust-card-footer">
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
<section class="chikungunya-protect-section">
  <div class="section-container">
    <div class="chikungunya-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="chikungunya-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'About the Chikungunya Vaccine')); ?></h2>
      <p class="chikungunya-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'One jab covers you for destinations where this mosquito-borne virus is common')); ?></p>
    </div>

    <div class="chikungunya-protect-grid">
      <div class="chikungunya-protect-image-wrapper">
        <div class="chikungunya-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1576765974497-b41831d52f83?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'A pharmacist giving the chikungunya vaccine as a single upper-arm injection')); ?>" class="chikungunya-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="chikungunya-protect-content">
        <div class="chikungunya-protect-badge-box">
          <i class="fas fa-syringe"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'One Injection, Around 2 Years of Protection')); ?></span>
        </div>

        <h3 class="chikungunya-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'One Jab, Minimal Fuss')); ?></h3>
        <p class="chikungunya-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "Caught by a mosquito bite, chikungunya brings on sudden high fever and joint pain severe enough to stop you in your tracks — and the joint pain can drag on for weeks or months after everything else clears up. The UK currently offers two vaccines, Ixchiq and Vimkunya, both single injections. Book it in 2 to 4 weeks before you fly if you can, to give your protection time to kick in.")); ?></p>

        <ul class="chikungunya-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="chikungunya-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="chikungunya-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>One and Done</strong><p>A single dose covers you — no second appointment to remember.</p></div>
            </li>
            <li class="chikungunya-protect-feature">
              <div class="icon"><i class="fas fa-calendar-week"></i></div>
              <div class="text"><strong>Give It a Few Weeks</strong><p>Aim for 2–4 weeks before departure so immunity has time to build properly.</p></div>
            </li>
            <li class="chikungunya-protect-feature">
              <div class="icon"><i class="fas fa-earth-africa"></i></div>
              <div class="text"><strong>Not Just One Region</strong><p>Cases turn up across Africa, Asia, the Indian Ocean islands, and Central and South America.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="chikungunya-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="chikungunya-stats-section">
  <div class="section-container">
    <div class="chikungunya-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="chikungunya-stat-divider"></div><?php endif; ?>
        <div class="chikungunya-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="chikungunya-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">1 Dose</span><span class="label">Single Injection</span></div></div>
        <div class="chikungunya-stat-divider"></div>
        <div class="chikungunya-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">~2 Years</span><span class="label">Protection</span></div></div>
        <div class="chikungunya-stat-divider"></div>
        <div class="chikungunya-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">2–4 Weeks</span><span class="label">Before Travel</span></div></div>
        <div class="chikungunya-stat-divider"></div>
        <div class="chikungunya-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="chikungunya-about-section">
  <div class="section-container">
    <div class="chikungunya-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="chikungunya-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'What Chikungunya Actually Is')); ?></h2>
      <p class="chikungunya-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A daytime-mosquito virus that turns up in a lot of popular holiday spots')); ?></p>
    </div>

    <div class="chikungunya-about-content-grid">
      <div class="chikungunya-about-image-wrapper">
        <div class="chikungunya-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1635496471665-4e67e0e87399?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Close-up of the mosquito species that spreads chikungunya')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="chikungunya-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="chikungunya-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="chikungunya-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>Bite-First Infection</h3><p>Passed on by mosquitoes that bite during the day — symptoms show up 3 to 7 days later.</p></div>
          <div class="chikungunya-info-card"><div class="icon"><i class="fas fa-temperature-high"></i></div><h3>Comes On Fast</h3><p>Expect a sharp fever and joint pain that can be disabling, plus muscle aches, headache, fatigue and a rash.</p></div>
          <div class="chikungunya-info-card"><div class="icon"><i class="fas fa-earth-africa"></i></div><h3>Broad Geography</h3><p>Cases are reported across Africa, Asia, the Indian Ocean islands, Central and South America, and the Caribbean.</p></div>
          <div class="chikungunya-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>One Jab Covers It</h3><p>A single vaccine dose is enough for solid protection before you head out.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="chikungunya-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'The Joint Pain Outlasts the Fever')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "The fever usually settles within a week, but chikungunya's joint pain has a habit of sticking around for weeks or months afterwards. That lingering effect is a big part of why it's worth vaccinating against before higher-risk trips.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="chikungunya-needs-section">
  <div class="section-container">
    <div class="chikungunya-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="chikungunya-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Should You Get Vaccinated?')); ?></h2>
      <p class="chikungunya-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', "Worth a chat with us if either of these sounds like you")); ?></p>
    </div>

    <div class="chikungunya-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Anyone Heading to a Risk Region</h3>
          <p class="nhs-card-desc">If your route takes in Africa, Asia, the Indian Ocean islands, or Central or South America, this is worth having.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travel to endemic countries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Longer trips or repeat visits</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Time spent outdoors or rurally</span></li>
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
          <h3 class="nhs-card-title">Over-60s &amp; Anyone With Existing Conditions</h3>
          <p class="nhs-card-desc">Chikungunya tends to hit harder in older adults and people already managing a health condition, so it's often worth prioritising.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travellers aged 60 and over</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Existing joint or other health conditions</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Longer postings in affected regions</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="chikungunya-pricing-section" id="pricing">
  <div class="section-container">
    <div class="chikungunya-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="chikungunya-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Pricing')); ?></h2>
      <p class="chikungunya-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'One dose, one price, nothing extra to budget for')); ?></p>
    </div>

    <div class="chikungunya-pricing-grid">
      <div class="chikungunya-pricing-card featured">
        <div class="chikungunya-pricing-ribbon">Single Dose</div>
        <h3 class="chikungunya-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Chikungunya Vaccine')); ?></h3>
        <div class="chikungunya-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£175')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'single dose')); ?></span>
        </div>
        <ul class="chikungunya-pricing-includes">
          <li><i class="fas fa-check"></i> One injection</li>
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Advice tailored to your trip</li>
          <li><i class="fas fa-check"></i> Suitable for most adults</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="chikungunya-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "Covers a single dose. If you're pregnant, breastfeeding, or under 12, we'll need to do an individual risk assessment first — just ask when you book.")); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="chikungunya-details-section">
  <div class="section-container">
    <div class="chikungunya-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="chikungunya-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What Happens at the Appointment')); ?></h2>
      <p class="chikungunya-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'Quick, straightforward, done at our Wythenshawe pharmacy')); ?></p>
    </div>

    <div class="chikungunya-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="chikungunya-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>We Check Your Trip</h3><p>A quick chat about your itinerary confirms whether the vaccine fits your travel plans.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>One Quick Jab</h3><p>Given in the upper arm — over before you've had time to think about it.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-clock"></i></div><h3>Timing Matters</h3><p>Book in 2–4 weeks ahead of travel where you can, for the best protection by the time you fly.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Are Usually Minor</h3><p>A sore arm, mild headache, tiredness or a slight fever for a day or two is typical.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-user-check"></i></div><h3>From Age 12</h3><p>Offered to most adults and children from 12, with individual assessment for anyone outside that.</p></div>
        <div class="chikungunya-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private, No GP Needed</h3><p>It's not an NHS service for travel purposes, so book with us directly — no referral required.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="chikungunya-faq-section">
  <div class="section-container">
    <div class="chikungunya-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'CHIKUNGUNYA FAQs')); ?></span>
      </div>
      <h2 class="chikungunya-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="chikungunya-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="chikungunya-faq-item">
          <button class="chikungunya-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="chikungunya-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Is it just the one dose?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>Yes. Both vaccines available in the UK right now — Ixchiq and Vimkunya — are single injections, with no follow-up needed for most people.</p></div></div>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How far ahead should I book?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>2 to 4 weeks before you fly is ideal, giving your immune system time to respond. If you're booking later than that, it's still worth having — just come and see us.</p></div></div>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Is this actually relevant to where I'm going?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>Depends on the destination. Chikungunya turns up across Africa, Asia, the Indian Ocean islands, and Central and South America — tell our pharmacist your route and length of stay and they'll give you a clear answer.</p></div></div>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Will this also cover dengue or Zika?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>No, it's chikungunya-specific. Dengue, Zika and yellow fever each need their own precautions — ask us and we'll talk you through what applies to your trip.</p></div></div>
        <div class="chikungunya-faq-item"><button class="chikungunya-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects come up?</span><i class="fas fa-plus icon"></i></button><div class="chikungunya-faq-content"><p>Typically a sore arm, mild headache, tiredness or a slight temperature for a day or so. Anything more serious is rare and tracked through the UK's Yellow Card scheme.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=80401258  (Chikungunya Vaccine)
     Location:       calendarID=8436365       (Bowland Pharmacy)
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=80401258&calendarID=8436365&ref=embedded_csp' );
?>
<section class="chikungunya-booking-section" id="booking-widget">
  <div class="chikungunya-booking-blob-1"></div>
  <div class="chikungunya-booking-blob-2"></div>
  <div class="section-container">
    <div class="chikungunya-booking-header">
      <h2 class="chikungunya-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Chikungunya Vaccination')); ?></h2>
      <p class="chikungunya-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <div class="chikungunya-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Chikungunya vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="chikungunya-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="chikungunya-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="chikungunya-cta-section">
  <div class="chikungunya-cta-bg"></div>
  <div class="section-container">
    <div class="chikungunya-cta-content">
      <div class="chikungunya-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Single Dose</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="chikungunya-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Get Covered Before You Fly')); ?></h2>
      <p class="chikungunya-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book your chikungunya vaccine with our Wythenshawe team — one appointment and it's sorted.")); ?></p>

      <div class="chikungunya-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
