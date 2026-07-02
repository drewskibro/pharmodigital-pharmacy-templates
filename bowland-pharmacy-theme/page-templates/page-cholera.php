<?php
/**
 * Template Name: Cholera Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'cholera';
$vaccine_name = bp_field('vaccine_name', 'Cholera');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="cholera-hero-section">
  <div class="cholera-hero-bg"></div>
  <div class="cholera-hero-dots"></div>
  <div class="cholera-hero-glow-1"></div>
  <div class="cholera-hero-glow-2"></div>
  <div class="section-container">
    <div class="cholera-hero-grid">

      <!-- Left: Content -->
      <div class="cholera-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="cholera-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Cholera Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="cholera-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Heading somewhere with limited access to clean water or sanitation? Our Wythenshawe pharmacy offers a straightforward oral cholera vaccine — no needles, just a short drink-based course before you fly.")); ?>
        </p>

        <div class="cholera-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Cholera Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="cholera-hero-trust">
          <div class="cholera-hero-trust-item"><i class="fas fa-glass-water"></i><span>Oral Vaccine, No Injection</span></div>
          <div class="cholera-hero-trust-item"><i class="fas fa-syringe"></i><span>2-Dose Course</span></div>
          <div class="cholera-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="cholera-hero-visual">
        <div class="cholera-hero-float-badge">
          <span class="cholera-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '2')); ?></span>
          <span class="cholera-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'year protection')); ?></span>
        </div>
        <div class="cholera-trust-card">
          <div class="cholera-trust-card-glow"></div>
          <div class="cholera-trust-card-inner">
            <div class="cholera-trust-card-header">
              <div class="cholera-trust-card-icon"><i class="fas fa-glass-water"></i></div>
              <span class="cholera-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Cholera Vaccine')); ?></span>
            </div>
            <div class="cholera-trust-card-price">
              <span class="cholera-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£35')); ?></span>
              <span class="cholera-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
            </div>
            <div class="cholera-trust-card-divider"></div>
            <ul class="cholera-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Both doses included</span></li>
              <li><i class="fas fa-check"></i> <span>Also protects against travellers' diarrhoea</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="cholera-trust-card-footer">
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
<section class="cholera-protect-section">
  <div class="section-container">
    <div class="cholera-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="cholera-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'Why Get Vaccinated Against Cholera')); ?></h2>
      <p class="cholera-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'A quick, drink-based course for anyone heading somewhere higher-risk')); ?></p>
    </div>

    <div class="cholera-protect-grid">
      <div class="cholera-protect-image-wrapper">
        <div class="cholera-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1732901379250-03be48f04241?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'The cholera vaccine sachet is mixed with water and taken orally')); ?>" class="cholera-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="cholera-protect-content">
        <div class="cholera-protect-badge-box">
          <i class="fas fa-glass-water"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Oral Course — No Needles Involved')); ?></span>
        </div>

        <h3 class="cholera-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'No Needles — Just a Short Drink-Based Course')); ?></h3>
        <p class="cholera-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "Cholera spreads through contaminated food and water, and can cause severe diarrhoea and dehydration fast. Most holidaymakers staying in well-run hotels have little to worry about — but if your trip involves basic accommodation, rural areas, or aid and healthcare work, it's worth having cover. Rather than an injection, the vaccine comes as a sachet you mix with water and drink at the pharmacy.")); ?></p>

        <ul class="cholera-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="cholera-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="cholera-protect-feature">
              <div class="icon"><i class="fas fa-glass-water"></i></div>
              <div class="text"><strong>Sachet, Not Syringe</strong><p>Mixed with a little water and drunk on the spot — nothing to inject.</p></div>
            </li>
            <li class="cholera-protect-feature">
              <div class="icon"><i class="fas fa-calendar-week"></i></div>
              <div class="text"><strong>Two Doses, Spaced Out</strong><p>Second dose comes 1–6 weeks after the first — plan to finish at least a week before you fly.</p></div>
            </li>
            <li class="cholera-protect-feature">
              <div class="icon"><i class="fas fa-shield-heart"></i></div>
              <div class="text"><strong>Extra Cover Included</strong><p>Roughly 3 months of protection against ETEC, a leading cause of travellers' diarrhoea, comes as standard.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="cholera-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="cholera-stats-section">
  <div class="section-container">
    <div class="cholera-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="cholera-stat-divider"></div><?php endif; ?>
        <div class="cholera-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="cholera-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">2 Doses</span><span class="label">Full Course</span></div></div>
        <div class="cholera-stat-divider"></div>
        <div class="cholera-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">2 Years</span><span class="label">Protection</span></div></div>
        <div class="cholera-stat-divider"></div>
        <div class="cholera-stat-item"><div class="icon"><i class="fas fa-glass-water"></i></div><div class="content"><span class="number">Oral</span><span class="label">No Injection</span></div></div>
        <div class="cholera-stat-divider"></div>
        <div class="cholera-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="cholera-about-section">
  <div class="section-container">
    <div class="cholera-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="cholera-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'Understanding Cholera')); ?></h2>
      <p class="cholera-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A waterborne illness that tracks closely with sanitation infrastructure')); ?></p>
    </div>

    <div class="cholera-about-content-grid">
      <div class="cholera-about-image-wrapper">
        <div class="cholera-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1780504863172-22655ab910ae?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Washing hands under an outdoor tap — cholera risk tracks with water and sanitation access')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="cholera-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="cholera-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="cholera-info-card"><div class="icon"><i class="fas fa-bacterium"></i></div><h3>Vibrio Cholerae</h3><p>The bacteria behind cholera spreads through water and food that's come into contact with contaminated sewage.</p></div>
          <div class="cholera-info-card"><div class="icon"><i class="fas fa-earth-africa"></i></div><h3>Where It's Found</h3><p>South Asia, Sub-Saharan Africa, Haiti and pockets of Central America see the most cases each year.</p></div>
          <div class="cholera-info-card"><div class="icon"><i class="fas fa-house-flag"></i></div><h3>Follows Infrastructure</h3><p>Outbreaks cluster wherever clean water and proper sewage systems are lacking — disaster zones included.</p></div>
          <div class="cholera-info-card"><div class="icon"><i class="fas fa-glass-water"></i></div><h3>Easy to Prevent</h3><p>A short oral course at the pharmacy is all it takes to be covered before you go.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="cholera-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'A Two-For-One Vaccine')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "On top of cholera protection, the vaccine covers you against ETEC for a few months too — the bacteria behind most everyday cases of travellers' diarrhoea.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="cholera-needs-section">
  <div class="section-container">
    <div class="cholera-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="cholera-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Is This Vaccine Right for You?')); ?></h2>
      <p class="cholera-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Worth a look if your trip involves anything off the tourist trail')); ?></p>
    </div>

    <div class="cholera-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Backpackers &amp; Rural Travellers</h3>
          <p class="nhs-card-desc">If you're bypassing hotels for guesthouses, hostels or homestays, or heading somewhere water access isn't guaranteed, this is for you.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Trips through South Asia or Sub-Saharan Africa</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Guesthouses, hostels or homestays</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Extended or backpacking itineraries</span></li>
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
          <h3 class="nhs-card-title">Aid &amp; Healthcare Workers</h3>
          <p class="nhs-card-desc">If your work takes you into disaster response or clinical settings in a cholera-affected country, this is a sensible precaution.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Disaster relief and humanitarian postings</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Clinical or healthcare work abroad</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Longer postings in higher-risk countries</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="cholera-pricing-section" id="pricing">
  <div class="section-container">
    <div class="cholera-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="cholera-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'What It Costs')); ?></h2>
      <p class="cholera-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'One flat rate for the whole course, nothing else to pay')); ?></p>
    </div>

    <div class="cholera-pricing-grid">
      <div class="cholera-pricing-card featured">
        <div class="cholera-pricing-ribbon">Full Course</div>
        <h3 class="cholera-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Cholera Vaccine')); ?></h3>
        <div class="cholera-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£35')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="cholera-pricing-includes">
          <li><i class="fas fa-check"></i> Both doses of the vaccine</li>
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Travel advice specific to your destination</li>
          <li><i class="fas fa-check"></i> Suitable from age 2 upwards</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="cholera-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', 'Quoted price covers the standard 2-dose adult course, given 1–6 weeks apart and finished at least a week before you fly. If your child needs the 3-dose course (ages 2–6), just ask the team for pricing.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="cholera-details-section">
  <div class="section-container">
    <div class="cholera-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="cholera-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'How the Appointment Works')); ?></h2>
      <p class="cholera-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A quick visit to our Wythenshawe pharmacy — no fuss, no needles')); ?></p>
    </div>

    <div class="cholera-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="cholera-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Quick Itinerary Chat</h3><p>We go through where you're headed and confirm cholera cover makes sense for your trip.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-glass-water"></i></div><h3>Dose One, There and Then</h3><p>Mix the sachet with water and drink it in the pharmacy — done in minutes.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Dose Two, A Few Weeks Later</h3><p>We'll get your second appointment booked 1–6 weeks out, timed to land before departure.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Are Usually Minor</h3><p>Some people get a mild upset stomach, nausea, or a slight temperature — nothing serious.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>From Age 2 Up</h3><p>We vaccinate both adults and children from age 2, adjusting the dose accordingly.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private, No Referral</h3><p>Travel cholera vaccination isn't an NHS service — book directly with us, no GP letter needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="cholera-faq-section">
  <div class="section-container">
    <div class="cholera-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'CHOLERA FAQs')); ?></span>
      </div>
      <h2 class="cholera-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="cholera-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="cholera-faq-item">
          <button class="cholera-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="cholera-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Will I need an injection?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>No — it's a drink, not a jab. You mix a sachet with a small amount of water and take it in the pharmacy.</p></div></div>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">When should I start the course?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>As early as you can. The two doses are spaced 1 to 6 weeks apart, and you need to finish at least a week before you travel.</p></div></div>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Is it actually necessary for my trip?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>Depends where you're going and how. It's generally advised for South Asia, Sub-Saharan Africa, Haiti and parts of Central America — especially outside tourist hotels. A week in a resort carries much lower risk; ask us and we'll give you a straight answer based on your actual itinerary.</p></div></div>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Does it cover anything besides cholera?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>It does — you also get around 3 months' protection against ETEC, one of the main causes of traveller's diarrhoea, at no extra cost.</p></div></div>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects should I expect?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>Most people feel nothing at all. A minority get mild stomach cramps, nausea or a slightly raised temperature for a day or so — anything more serious is rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=74401933  (Cholera Vaccination)
     Location:       calendarID=8436365       (Bowland Pharmacy)
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=74401933&calendarID=8436365&ref=embedded_csp' );
?>
<section class="cholera-booking-section" id="booking-widget">
  <div class="cholera-booking-blob-1"></div>
  <div class="cholera-booking-blob-2"></div>
  <div class="section-container">
    <div class="cholera-booking-header">
      <h2 class="cholera-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Cholera Vaccination')); ?></h2>
      <p class="cholera-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <div class="cholera-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Cholera vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="cholera-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="cholera-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="cholera-cta-section">
  <div class="cholera-cta-bg"></div>
  <div class="section-container">
    <div class="cholera-cta-content">
      <div class="cholera-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Oral Vaccine</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="cholera-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Sort Your Cholera Cover Before You Go')); ?></h2>
      <p class="cholera-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book with our Wythenshawe team and it's one less thing to think about before your trip.")); ?></p>

      <div class="cholera-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
