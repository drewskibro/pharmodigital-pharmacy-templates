<?php
/**
 * Template Name: Malaria Prevention
 * @package Denton_Pharmacy
 *
 * Private malaria prevention service page — NOT a vaccine. Structure: hero (H1 w/
 * location + badge + CTA), what is / understanding, stats, who it's for, tablet
 * options pricing, what to expect, FAQ, embedded Acuity booking calendar with
 * Adult/Child toggle, final CTA.
 */

get_header();

$prefix = 'malaria';
$vaccine_name = dp_field('vaccine_name', 'Malaria Prevention');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="malaria-hero-section">
  <div class="malaria-hero-bg"></div>
  <div class="malaria-hero-dots"></div>
  <div class="malaria-hero-glow-1"></div>
  <div class="malaria-hero-glow-2"></div>
  <div class="section-container">
    <div class="malaria-hero-grid">

      <!-- Left: Content -->
      <div class="malaria-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL HEALTH SERVICE')); ?></span>
        </div>

        <h1 class="malaria-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Malaria Prevention')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="malaria-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Get expert advice and antimalarial tablets before travelling with our malaria prevention service in Denton, Manchester. A short pharmacist consultation, same-day prescription and dispensing — no GP referral needed.")); ?>
        </p>

        <div class="malaria-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Malaria Consultation')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="malaria-hero-trust">
          <div class="malaria-hero-trust-item"><i class="fas fa-pills"></i><span>Antimalarial Tablets, Not a Vaccine</span></div>
          <div class="malaria-hero-trust-item"><i class="fas fa-user-doctor"></i><span>15-Minute Consultation</span></div>
          <div class="malaria-hero-trust-item"><i class="fas fa-calendar-check"></i><span>Same-Day Appointments</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="malaria-hero-visual">
        <div class="malaria-hero-float-badge">
          <span class="malaria-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '4')); ?></span>
          <span class="malaria-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'tablet options')); ?></span>
        </div>
        <div class="malaria-trust-card">
          <div class="malaria-trust-card-glow"></div>
          <div class="malaria-trust-card-inner">
            <div class="malaria-trust-card-header">
              <div class="malaria-trust-card-icon"><i class="fas fa-pills"></i></div>
              <span class="malaria-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Malaria Prevention Consultation')); ?></span>
            </div>
            <div class="malaria-trust-card-price">
              <span class="malaria-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', 'Contact Us')); ?></span>
              <span class="malaria-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'for pricing')); ?></span>
            </div>
            <div class="malaria-trust-card-divider"></div>
            <ul class="malaria-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Pharmacist review of your itinerary</span></li>
              <li><i class="fas fa-check"></i> <span>Right tablets matched to you</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day prescribing &amp; dispensing</span></li>
            </ul>
            <div class="malaria-trust-card-footer">
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
<section class="malaria-protect-section">
  <div class="section-container">
    <div class="malaria-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY IT MATTERS')); ?></span>
      </div>
      <h2 class="malaria-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'Malaria Prevention, Matched to You')); ?></h2>
      <p class="malaria-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', "There's no malaria vaccine offered here — prevention is tablets plus bite avoidance")); ?></p>
    </div>

    <div class="malaria-protect-grid">
      <div class="malaria-protect-image-wrapper">
        <div class="malaria-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1758691462878-6edc3d3da1be?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Pharmacist consultation to choose the right antimalarial tablets')); ?>" class="malaria-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="malaria-protect-content">
        <div class="malaria-protect-badge-box">
          <i class="fas fa-pills"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Four Tablet Options, One 15-Minute Consultation')); ?></span>
        </div>

        <h3 class="malaria-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Prescription Tablets, Chosen for Your Trip')); ?></h3>
        <p class="malaria-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "There is no vaccine for malaria available through this service — protection comes from antimalarial tablets, prescribed after a short consultation with our pharmacist. We review your destination, itinerary and medical history, then recommend from options including Doxycycline, Malarone (Atovaquone/Proguanil), Mefloquine (Lariam) or Paludrine/Avloclor (Chloroquine/Proguanil), depending on where you're going and your health.")); ?></p>

        <ul class="malaria-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="malaria-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="malaria-protect-feature">
              <div class="icon"><i class="fas fa-comments"></i></div>
              <div class="text"><strong>15-Minute Consultation</strong><p>We talk through your destination, trip length and medical history before recommending tablets.</p></div>
            </li>
            <li class="malaria-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Start Timing Varies by Tablet</strong><p>Doxycycline and Malarone start 1–2 days before travel; Mefloquine needs 2–3 weeks.</p></div>
            </li>
            <li class="malaria-protect-feature">
              <div class="icon"><i class="fas fa-shield-halved"></i></div>
              <div class="text"><strong>Tablets Plus Bite Prevention</strong><p>Tablets work best alongside repellent, covering up and mosquito nets — not instead of them.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="malaria-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Consultation</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="malaria-stats-section">
  <div class="section-container">
    <div class="malaria-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="malaria-stat-divider"></div><?php endif; ?>
        <div class="malaria-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="malaria-stat-item"><div class="icon"><i class="fas fa-pills"></i></div><div class="content"><span class="number">4 Options</span><span class="label">Tablet Types</span></div></div>
        <div class="malaria-stat-divider"></div>
        <div class="malaria-stat-item"><div class="icon"><i class="fas fa-comments"></i></div><div class="content"><span class="number">15 Min</span><span class="label">Consultation</span></div></div>
        <div class="malaria-stat-divider"></div>
        <div class="malaria-stat-item"><div class="icon"><i class="fas fa-earth-africa"></i></div><div class="content"><span class="number">100+</span><span class="label">Countries Covered</span></div></div>
        <div class="malaria-stat-divider"></div>
        <div class="malaria-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Prescribing</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="malaria-about-section">
  <div class="section-container">
    <div class="malaria-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="malaria-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Malaria?')); ?></h2>
      <p class="malaria-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A serious mosquito-borne disease found across many popular travel regions')); ?></p>
    </div>

    <div class="malaria-about-content-grid">
      <div class="malaria-about-image-wrapper">
        <div class="malaria-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Blister packs of antimalarial tablets')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="malaria-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="malaria-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="malaria-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>Mosquito-Borne Parasite</h3><p>Spread by the bite of infected Anopheles mosquitoes, mainly after dusk.</p></div>
          <div class="malaria-info-card"><div class="icon"><i class="fas fa-earth-africa"></i></div><h3>Found Widely</h3><p>Present across sub-Saharan Africa, South and Southeast Asia, Central and South America, and Pacific regions.</p></div>
          <div class="malaria-info-card"><div class="icon"><i class="fas fa-triangle-exclamation"></i></div><h3>Can Be Serious</h3><p>Left untreated, malaria can become life-threatening — prompt treatment matters if symptoms develop.</p></div>
          <div class="malaria-info-card"><div class="icon"><i class="fas fa-pills"></i></div><h3>Preventable</h3><p>The right antimalarial tablets, taken correctly alongside bite avoidance, greatly reduce your risk.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="malaria-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Symptoms Can Appear Later')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "Malaria symptoms can develop weeks or even months after you get home. If you feel feverish or unwell within a year of travelling to a malaria-risk area, seek urgent medical care and mention your travel history.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="malaria-needs-section">
  <div class="section-container">
    <div class="malaria-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="malaria-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need malaria prevention?')); ?></h2>
      <p class="malaria-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for anyone travelling to a malaria-risk destination')); ?></p>
    </div>

    <div class="malaria-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Travellers to Malaria-Risk Regions</h3>
          <p class="nhs-card-desc">Worth arranging before any trip to sub-Saharan Africa, South or Southeast Asia, Central or South America.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Any malaria-risk destination</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Backpacking or rural itineraries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Visiting friends &amp; relatives abroad</span></li>
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
          <span class="nhs-card-badge">Extra Care Needed</span>
          <h3 class="nhs-card-title">Pregnant Travellers, Children &amp; Those With Health Conditions</h3>
          <p class="nhs-card-desc">Not every tablet is suitable for everyone — we'll talk through the safest option for your situation.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Pregnant or breastfeeding travellers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Children &amp; older travellers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Immunocompromised individuals</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing / Tablet Options Section -->
<section class="malaria-pricing-section" id="pricing">
  <div class="section-container">
    <div class="malaria-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="malaria-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Consultation &amp; Tablet Options')); ?></h2>
      <p class="malaria-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', "Your pharmacist will recommend the right option and confirm the price at your consultation")); ?></p>
    </div>

    <div class="malaria-pricing-grid">
      <div class="malaria-pricing-card featured">
        <div class="malaria-pricing-ribbon">Consultation</div>
        <h3 class="malaria-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Malaria Prevention Consultation')); ?></h3>
        <div class="malaria-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', 'Contact Us')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'for pricing')); ?></span>
        </div>
        <ul class="malaria-pricing-includes">
          <li><i class="fas fa-check"></i> 15-minute pharmacist consultation</li>
          <li><i class="fas fa-check"></i> Destination &amp; medical history review</li>
          <li><i class="fas fa-check"></i> Prescription issued the same day</li>
          <li><i class="fas fa-check"></i> Tablets dispensed on-site</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="malaria-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'We stock Doxycycline, Malarone (Atovaquone/Proguanil), Mefloquine (Lariam) and Paludrine/Avloclor (Chloroquine/Proguanil). Tablet pricing depends on the medication and course length — your pharmacist will confirm the cost before you buy. Antimalarials are not usually covered by the NHS for travel.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="malaria-details-section">
  <div class="section-container">
    <div class="malaria-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="malaria-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="malaria-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="malaria-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="malaria-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-comments"></i></div><h3>Consultation</h3><p>We discuss your destination, trip length, accommodation and medical history.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-pills"></i></div><h3>Tablet Recommendation</h3><p>Your pharmacist recommends the option that best suits your trip and health.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-file-prescription"></i></div><h3>Same-Day Prescription</h3><p>No need to wait for a GP appointment — your pharmacist can prescribe on the spot.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effect Advice</h3><p>We'll explain what to expect from your specific tablets, including any precautions like sun sensitivity.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-shield-halved"></i></div><h3>Bite Prevention Advice</h3><p>We'll also cover the ABCD approach — awareness, bite prevention, tablets and diagnosis.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Antimalarials aren't usually available on the NHS for travel, so we offer this privately with no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="malaria-faq-section">
  <div class="section-container">
    <div class="malaria-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'MALARIA FAQs')); ?></span>
      </div>
      <h2 class="malaria-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="malaria-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="malaria-faq-item">
          <button class="malaria-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="malaria-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Is there a malaria vaccine I can have instead?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>We don't offer a malaria vaccine through this service — prevention here is antimalarial tablets, matched to your trip, alongside mosquito bite avoidance.</p></div></div>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Which tablets will I be prescribed?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>It depends on your destination, trip length and medical history. Malarone is generally the best tolerated option, but Doxycycline, Mefloquine and Paludrine/Avloclor are also available — your pharmacist will recommend what suits you.</p></div></div>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">When do I need to start taking them?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>It varies by tablet. Doxycycline and Malarone are usually started 1 to 2 days before travel, while Mefloquine needs to start 2 to 3 weeks beforehand. We'll confirm your exact schedule at your consultation.</p></div></div>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Do I still need insect repellent if I'm taking tablets?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>Yes — tablets reduce your risk but aren't 100% effective on their own. We recommend combining them with DEET repellent, covering up, and mosquito nets or air conditioning where possible.</p></div></div>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What if I feel unwell after I get home?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>Malaria symptoms can appear weeks or months after travel. If you develop a fever or feel unwell within a year of visiting a malaria-risk area, seek urgent medical care and tell them where you've been.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed with Adult/Child toggle
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     Adult:  appointmentType=47536537 (Malaria Prevention (Adults))
     Child:  appointmentType=85745581 (Malaria Prevention (Children))
     Location: calendarID=10903457 (Denton Pharmacy) — Bowland uses calendarID=8436365
     Override per-page via ACF fields 'vaccine_acuity_url_adult' / 'vaccine_acuity_url_child'. -->
<?php
$acuity_url_adult = dp_field( 'vaccine_acuity_url_adult', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536537&calendarID=10903457&ref=embedded_csp' );
$acuity_url_child = dp_field( 'vaccine_acuity_url_child', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=85745581&calendarID=10903457&ref=embedded_csp' );
?>
<section class="malaria-booking-section" id="booking-widget">
  <div class="malaria-booking-blob-1"></div>
  <div class="malaria-booking-blob-2"></div>
  <div class="section-container">
    <div class="malaria-booking-header">
      <h2 class="malaria-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Malaria Prevention Consultation')); ?></h2>
      <p class="malaria-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose adult or child, then pick a time that suits you at our Denton clinic')); ?></p>
    </div>

    <?php if ( $acuity_url_adult && $acuity_url_child ) : ?>
      <div class="malaria-booking-toggle" role="group" aria-label="Choose age group">
        <button type="button" class="malaria-toggle-btn active" data-url="<?php echo esc_url( $acuity_url_adult ); ?>" onclick="switchBookingAge(this)">Adult</button>
        <button type="button" class="malaria-toggle-btn" data-url="<?php echo esc_url( $acuity_url_child ); ?>" onclick="switchBookingAge(this)">Child</button>
      </div>
    <?php endif; ?>

    <div class="malaria-booking-embed">
      <?php if ( $acuity_url_adult ) : ?>
        <iframe id="malaria-acuity-iframe" src="<?php echo esc_url( $acuity_url_adult ); ?>" title="Book your Malaria Prevention consultation in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="malaria-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="malaria-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="malaria-cta-section">
  <div class="malaria-cta-bg"></div>
  <div class="section-container">
    <div class="malaria-cta-content">
      <div class="malaria-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Prescribing</span>
          <span class="badge">4 Tablet Options</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="malaria-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Get sorted before you travel')); ?></h2>
      <p class="malaria-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your malaria prevention consultation with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="malaria-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Consultation</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
