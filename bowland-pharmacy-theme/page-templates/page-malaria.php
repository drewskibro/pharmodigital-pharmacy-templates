<?php
/**
 * Template Name: Malaria Prevention
 * @package Bowland_Pharmacy
 *
 * Private malaria prevention service page — NOT a vaccine. Structure: hero (H1 w/
 * location + badge + CTA), what is / understanding, stats, who it's for, tablet
 * options pricing, what to expect, FAQ, embedded Acuity booking calendar with
 * Adult/Child toggle, final CTA.
 */

get_header();

$prefix = 'malaria';
$vaccine_name = bp_field('vaccine_name', 'Malaria Prevention');
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
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL HEALTH SERVICE')); ?></span>
        </div>

        <h1 class="malaria-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Malaria Prevention')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="malaria-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Heading somewhere with a malaria risk? Our Wythenshawe pharmacist can talk you through the right antimalarial tablets and get you a same-day prescription — no GP appointment needed.")); ?>
        </p>

        <div class="malaria-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Malaria Consultation')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
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
          <span class="malaria-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '4')); ?></span>
          <span class="malaria-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'tablet options')); ?></span>
        </div>
        <div class="malaria-trust-card">
          <div class="malaria-trust-card-glow"></div>
          <div class="malaria-trust-card-inner">
            <div class="malaria-trust-card-header">
              <div class="malaria-trust-card-icon"><i class="fas fa-pills"></i></div>
              <span class="malaria-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Malaria Prevention Consultation')); ?></span>
            </div>
            <div class="malaria-trust-card-price">
              <span class="malaria-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', 'Contact Us')); ?></span>
              <span class="malaria-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'for pricing')); ?></span>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY IT MATTERS')); ?></span>
      </div>
      <h2 class="malaria-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'Prevention, Not a Vaccine')); ?></h2>
      <p class="malaria-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', "No malaria vaccine here — it's the right tablets plus solid bite avoidance")); ?></p>
    </div>

    <div class="malaria-protect-grid">
      <div class="malaria-protect-image-wrapper">
        <div class="malaria-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1758691462863-9e1b8a863140?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'A consultation to work out the right antimalarial tablets for your trip')); ?>" class="malaria-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="malaria-protect-content">
        <div class="malaria-protect-badge-box">
          <i class="fas fa-pills"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Four Tablet Options, One 15-Minute Consultation')); ?></span>
        </div>

        <h3 class="malaria-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'The Right Tablet for the Right Trip')); ?></h3>
        <p class="malaria-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "There's no vaccine on offer here — malaria protection comes down to antimalarial tablets, prescribed after a quick chat with our pharmacist. We look at where you're going, how long for, and your medical history, then recommend from Doxycycline, Malarone (Atovaquone/Proguanil), Mefloquine (Lariam) or Paludrine/Avloclor (Chloroquine/Proguanil) — whichever suits your trip and your health.")); ?></p>

        <ul class="malaria-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="malaria-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="malaria-protect-feature">
              <div class="icon"><i class="fas fa-comments"></i></div>
              <div class="text"><strong>A Quick, Focused Chat</strong><p>Destination, trip length, medical history — 15 minutes and we've got what we need.</p></div>
            </li>
            <li class="malaria-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Timing Depends on the Tablet</strong><p>Doxycycline and Malarone start 1–2 days out; Mefloquine wants 2–3 weeks' notice.</p></div>
            </li>
            <li class="malaria-protect-feature">
              <div class="icon"><i class="fas fa-shield-halved"></i></div>
              <div class="text"><strong>Tablets Don't Work Alone</strong><p>Pair them with repellent, covering up and mosquito nets for real protection.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="malaria-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Consultation</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
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
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="malaria-about-title"><?php echo esc_html(bp_field('vaccine_about_title', "What You're Actually Protecting Against")); ?></h2>
      <p class="malaria-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A serious mosquito-borne disease found across a lot of popular destinations')); ?></p>
    </div>

    <div class="malaria-about-content-grid">
      <div class="malaria-about-image-wrapper">
        <div class="malaria-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1562243061-204550d8a2c9?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'A bottle of antimalarial tablets')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="malaria-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="malaria-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="malaria-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>A Mosquito-Borne Parasite</h3><p>Anopheles mosquitoes pass it on, mostly through bites after dusk.</p></div>
          <div class="malaria-info-card"><div class="icon"><i class="fas fa-earth-africa"></i></div><h3>Widespread Risk</h3><p>Sub-Saharan Africa, South and Southeast Asia, Central and South America, and parts of the Pacific all carry risk.</p></div>
          <div class="malaria-info-card"><div class="icon"><i class="fas fa-triangle-exclamation"></i></div><h3>Serious If Untreated</h3><p>Left alone, it can turn life-threatening fast — quick treatment matters if symptoms show up.</p></div>
          <div class="malaria-info-card"><div class="icon"><i class="fas fa-pills"></i></div><h3>Largely Preventable</h3><p>The right tablets, taken properly and combined with bite avoidance, cut your risk substantially.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="malaria-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'Symptoms Can Show Up Long After You Land')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "Malaria can surface weeks or even months after you're home. If you get a fever or just feel off within a year of visiting a risk area, get medical care quickly and mention where you've been.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="malaria-needs-section">
  <div class="section-container">
    <div class="malaria-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="malaria-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Should You Book a Consultation?')); ?></h2>
      <p class="malaria-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'If your trip touches a malaria-risk area, the answer is yes')); ?></p>
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
          <h3 class="nhs-card-title">Anyone Heading to a Risk Area</h3>
          <p class="nhs-card-desc">Sub-Saharan Africa, South or Southeast Asia, Central or South America — worth sorting before you go.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Any malaria-risk destination</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Backpacking or rural itineraries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Visiting friends and relatives abroad</span></li>
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
          <h3 class="nhs-card-title">Pregnancy, Kids &amp; Health Conditions</h3>
          <p class="nhs-card-desc">Not every tablet suits everyone — we'll walk you through the safest choice for your situation.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Pregnant or breastfeeding travellers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Children and older travellers</span></li>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="malaria-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Consultation &amp; Tablets')); ?></h2>
      <p class="malaria-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', "Your pharmacist recommends the right tablets and confirms the price at your consultation")); ?></p>
    </div>

    <div class="malaria-pricing-grid">
      <div class="malaria-pricing-card featured">
        <div class="malaria-pricing-ribbon">Consultation</div>
        <h3 class="malaria-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Malaria Prevention Consultation')); ?></h3>
        <div class="malaria-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', 'Contact Us')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'for pricing')); ?></span>
        </div>
        <ul class="malaria-pricing-includes">
          <li><i class="fas fa-check"></i> 15-minute consultation with our pharmacist</li>
          <li><i class="fas fa-check"></i> Destination and medical history review</li>
          <li><i class="fas fa-check"></i> Prescription issued the same day</li>
          <li><i class="fas fa-check"></i> Tablets dispensed on-site</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="malaria-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "We stock Doxycycline, Malarone (Atovaquone/Proguanil), Mefloquine (Lariam) and Paludrine/Avloclor (Chloroquine/Proguanil). Cost depends on the medication and course length — your pharmacist confirms the price before you buy. Antimalarials aren't usually an NHS travel service.")); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="malaria-details-section">
  <div class="section-container">
    <div class="malaria-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="malaria-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'How the Consultation Works')); ?></h2>
      <p class="malaria-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A relaxed visit to our Wythenshawe pharmacy')); ?></p>
    </div>

    <div class="malaria-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="malaria-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-comments"></i></div><h3>We Talk It Through</h3><p>Destination, trip length, accommodation, medical history — the full picture.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-pills"></i></div><h3>A Tailored Recommendation</h3><p>Your pharmacist suggests the tablet that fits your trip and your health.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-file-prescription"></i></div><h3>Prescribed on the Spot</h3><p>No GP appointment to wait for — we can prescribe there and then.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>What to Expect From Your Tablets</h3><p>We'll flag anything worth knowing, like sun sensitivity with certain options.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-shield-halved"></i></div><h3>The Full ABCD Approach</h3><p>Awareness, bite prevention, tablets and diagnosis — we cover all four.</p></div>
        <div class="malaria-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private, No Referral</h3><p>Antimalarials sit outside the NHS for travel, so book with us directly.</p></div>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'MALARIA FAQs')); ?></span>
      </div>
      <h2 class="malaria-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
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
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Can I just get a vaccine instead?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>There isn't one available here — malaria protection means antimalarial tablets matched to your trip, plus solid mosquito bite avoidance.</p></div></div>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Which tablets will I end up with?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>Depends on where you're going, how long for, and your medical history. Malarone tends to be best tolerated, but Doxycycline, Mefloquine and Paludrine/Avloclor are all options — your pharmacist will steer you to the right one.</p></div></div>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">When do I start taking them?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>Depends on the tablet. Doxycycline and Malarone usually start 1–2 days before you fly; Mefloquine needs 2–3 weeks' head start. We'll confirm exactly when at your consultation.</p></div></div>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Do I still need repellent if I'm on tablets?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>Yes — tablets aren't 100% on their own. Stack them with DEET repellent, covering up, and mosquito nets or air-con where you can.</p></div></div>
        <div class="malaria-faq-item"><button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What if I feel unwell once I'm home?</span><i class="fas fa-plus icon"></i></button><div class="malaria-faq-content"><p>Symptoms can show up weeks or months later. Fever or feeling off within a year of visiting a risk area? Get urgent medical care and mention your travel history.</p></div></div>
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
     Location: calendarID=8436365 (Bowland Pharmacy)
     Override per-page via ACF fields 'vaccine_acuity_url_adult' / 'vaccine_acuity_url_child'. -->
<?php
$acuity_url_adult = bp_field( 'vaccine_acuity_url_adult', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536537&calendarID=8436365&ref=embedded_csp' );
$acuity_url_child = bp_field( 'vaccine_acuity_url_child', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=85745581&calendarID=8436365&ref=embedded_csp' );
?>
<section class="malaria-booking-section" id="booking-widget">
  <div class="malaria-booking-blob-1"></div>
  <div class="malaria-booking-blob-2"></div>
  <div class="section-container">
    <div class="malaria-booking-header">
      <h2 class="malaria-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Malaria Prevention Consultation')); ?></h2>
      <p class="malaria-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose adult or child, then pick a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <?php if ( $acuity_url_adult && $acuity_url_child ) : ?>
      <div class="malaria-booking-toggle" role="group" aria-label="Choose age group">
        <button type="button" class="malaria-toggle-btn active" data-url="<?php echo esc_url( $acuity_url_adult ); ?>" onclick="switchBookingAge(this)">Adult</button>
        <button type="button" class="malaria-toggle-btn" data-url="<?php echo esc_url( $acuity_url_child ); ?>" onclick="switchBookingAge(this)">Child</button>
      </div>
    <?php endif; ?>

    <div class="malaria-booking-embed">
      <?php if ( $acuity_url_adult ) : ?>
        <iframe id="malaria-acuity-iframe" src="<?php echo esc_url( $acuity_url_adult ); ?>" title="Book your Malaria Prevention consultation in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="malaria-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="malaria-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
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

      <h2 class="malaria-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', "Sort Your Antimalarials Before You Fly")); ?></h2>
      <p class="malaria-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book a consultation with our Wythenshawe team — same-day prescribing, no GP needed.")); ?></p>

      <div class="malaria-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Consultation</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
