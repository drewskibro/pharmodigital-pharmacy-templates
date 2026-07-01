<?php
/**
 * Template Name: Cholera Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'cholera';
$vaccine_name = dp_field('vaccine_name', 'Cholera');
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
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="cholera-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Cholera Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="cholera-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself before travelling with our oral cholera vaccination service in Denton, Manchester. A simple drink-based course recommended for travel to areas with poor sanitation across South Asia, Sub-Saharan Africa and Central America.")); ?>
        </p>

        <div class="cholera-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Cholera Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
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
          <span class="cholera-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '2')); ?></span>
          <span class="cholera-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'year protection')); ?></span>
        </div>
        <div class="cholera-trust-card">
          <div class="cholera-trust-card-glow"></div>
          <div class="cholera-trust-card-inner">
            <div class="cholera-trust-card-header">
              <div class="cholera-trust-card-icon"><i class="fas fa-glass-water"></i></div>
              <span class="cholera-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Cholera Vaccine')); ?></span>
            </div>
            <div class="cholera-trust-card-price">
              <span class="cholera-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£49')); ?></span>
              <span class="cholera-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', '2-dose course')); ?></span>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="cholera-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Cholera Vaccine')); ?></h2>
      <p class="cholera-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'A drink-based vaccine for travellers heading to higher-risk destinations')); ?></p>
    </div>

    <div class="cholera-protect-grid">
      <div class="cholera-protect-image-wrapper">
        <div class="cholera-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Pharmacist preparing a travel vaccination consultation in Denton')); ?>" class="cholera-protect-image" />
          <?php endif; ?>
          <div class="cholera-protect-name-tag">
            <span class="name"><?php echo esc_html(dp_field('vaccine_protect_nametag_name', 'Denton Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(dp_field('vaccine_protect_nametag_role', 'Travel Vaccination Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="cholera-protect-content">
        <div class="cholera-protect-badge-box">
          <i class="fas fa-glass-water"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Oral Course — No Needles Involved')); ?></span>
        </div>

        <h3 class="cholera-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Simple Protection for Higher-Risk Travel')); ?></h3>
        <p class="cholera-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Cholera is a bacterial infection spread through contaminated food and water, causing severe diarrhoea and dehydration. It's rare for tourists staying in good hotels, but a real consideration for anyone travelling to areas with poor sanitation, staying in local accommodation, or working in humanitarian and healthcare settings. The vaccine is a drink you take at the pharmacy rather than an injection, given as a short course.")); ?></p>

        <ul class="cholera-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="cholera-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="cholera-protect-feature">
              <div class="icon"><i class="fas fa-glass-water"></i></div>
              <div class="text"><strong>Taken Orally</strong><p>A sachet mixed with water and drunk at the pharmacy — no injection required.</p></div>
            </li>
            <li class="cholera-protect-feature">
              <div class="icon"><i class="fas fa-calendar-week"></i></div>
              <div class="text"><strong>Two Doses, 1–6 Weeks Apart</strong><p>Complete both doses at least a week before you travel for full protection.</p></div>
            </li>
            <li class="cholera-protect-feature">
              <div class="icon"><i class="fas fa-shield-heart"></i></div>
              <div class="text"><strong>Bonus Protection</strong><p>Also gives around 3 months' cover against ETEC, the most common cause of travellers' diarrhoea.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="cholera-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
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
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="cholera-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Cholera?')); ?></h2>
      <p class="cholera-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'An infection linked to contaminated food and water in areas with poor sanitation')); ?></p>
    </div>

    <div class="cholera-about-content-grid">
      <div class="cholera-about-image-wrapper">
        <div class="cholera-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Traveller preparing for a trip abroad')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="cholera-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="cholera-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="cholera-info-card"><div class="icon"><i class="fas fa-bacterium"></i></div><h3>Bacterial Infection</h3><p>Caused by Vibrio cholerae bacteria, usually picked up from contaminated water or food.</p></div>
          <div class="cholera-info-card"><div class="icon"><i class="fas fa-earth-africa"></i></div><h3>Higher-Risk Regions</h3><p>More common across South Asia, Sub-Saharan Africa, Haiti and parts of Central America.</p></div>
          <div class="cholera-info-card"><div class="icon"><i class="fas fa-house-flag"></i></div><h3>Linked to Sanitation</h3><p>Risk rises when travelling off the beaten track, staying in local accommodation, or in disaster relief settings.</p></div>
          <div class="cholera-info-card"><div class="icon"><i class="fas fa-glass-water"></i></div><h3>Preventable</h3><p>An oral vaccine course gives strong protection and is quick to arrange before you travel.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="cholera-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Not Just for Cholera')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "The cholera vaccine also provides several months of protection against ETEC, the bacteria behind most cases of travellers' diarrhoea — useful cover on top of the cholera protection itself.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="cholera-needs-section">
  <div class="section-container">
    <div class="cholera-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="cholera-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="cholera-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for travellers heading somewhere higher-risk')); ?></p>
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
          <h3 class="nhs-card-title">Backpackers &amp; Off-the-Beaten-Track Travel</h3>
          <p class="nhs-card-desc">Ideal if you're staying in local accommodation, travelling rurally, or visiting areas with limited access to clean water.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travel to South Asia or Sub-Saharan Africa</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Basic or rural accommodation</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Longer or backpacking-style trips</span></li>
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
          <p class="nhs-card-desc">Particularly worth considering for humanitarian, disaster relief or healthcare work in cholera-affected regions.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Humanitarian &amp; disaster relief work</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Healthcare roles in endemic areas</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Extended stays in higher-risk countries</span></li>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="cholera-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Cholera Vaccination Pricing')); ?></h2>
      <p class="cholera-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'One simple price for the full course — no hidden extras')); ?></p>
    </div>

    <div class="cholera-pricing-grid">
      <div class="cholera-pricing-card featured">
        <div class="cholera-pricing-ribbon">Full Course</div>
        <h3 class="cholera-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Cholera Vaccine')); ?></h3>
        <div class="cholera-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£49')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', '2-dose course')); ?></span>
        </div>
        <ul class="cholera-pricing-includes">
          <li><i class="fas fa-check"></i> Both doses of the vaccine</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Travel health advice for your destination</li>
          <li><i class="fas fa-check"></i> Suitable for adults and children 2+</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="cholera-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price is for the standard 2-dose adult course, taken 1–6 weeks apart and completed at least a week before travel. Children aged 2–6 need a 3-dose course — ask our team for pricing.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="cholera-details-section">
  <div class="section-container">
    <div class="cholera-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="cholera-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="cholera-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="cholera-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="cholera-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and confirm the cholera vaccine is right for your trip.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-glass-water"></i></div><h3>First Dose</h3><p>You drink the sachet mixed with water at the pharmacy — no needles involved.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Second Dose</h3><p>We book your second dose 1 to 6 weeks later, at least a week before you fly.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually well tolerated — occasional mild stomach upset, nausea or a low fever.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Suitable from Age 2</h3><p>Given to adults and children from 2 years old, with dosing adjusted by age.</p></div>
        <div class="cholera-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'CHOLERA FAQs')); ?></span>
      </div>
      <h2 class="cholera-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
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
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Is the cholera vaccine an injection?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>No — it's an oral vaccine. You drink a sachet mixed with a small amount of water at the pharmacy, so there are no needles involved.</p></div></div>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How soon before travel do I need it?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>Complete both doses at least one week before you fly. Doses are given 1 to 6 weeks apart, so it's best to start the course as early as you can.</p></div></div>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Do I actually need this for my trip?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>It depends on your itinerary. It's generally recommended for travel to South Asia, Sub-Saharan Africa, Haiti and parts of Central America, particularly if you're staying in local accommodation or areas with limited sanitation. Short stays in good hotels carry much lower risk — our pharmacist can advise based on your trip.</p></div></div>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Does it protect against anything else?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>Yes — it also gives around 3 months of protection against ETEC, the bacteria responsible for most cases of travellers' diarrhoea.</p></div></div>
        <div class="cholera-faq-item"><button class="cholera-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="cholera-faq-content"><p>Side effects are uncommon and usually mild — some people notice slight stomach cramps, nausea or a low-grade fever. Serious reactions are rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=74401933  (Cholera Vaccination)
     Location:       calendarID=10903457       (Denton Pharmacy)
                     Bowland uses calendarID=8436365
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=74401933&calendarID=10903457&ref=embedded_csp' );
?>
<section class="cholera-booking-section" id="booking-widget">
  <div class="cholera-booking-blob-1"></div>
  <div class="cholera-booking-blob-2"></div>
  <div class="section-container">
    <div class="cholera-booking-header">
      <h2 class="cholera-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Cholera Vaccination')); ?></h2>
      <p class="cholera-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="cholera-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Cholera vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="cholera-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="cholera-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
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

      <h2 class="cholera-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="cholera-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your cholera vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="cholera-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
