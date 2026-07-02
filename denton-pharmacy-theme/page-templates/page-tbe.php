<?php
/**
 * Template Name: Tick-Borne Encephalitis Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar with Adult/Child toggle, final CTA.
 */

get_header();

$prefix = 'tbe';
$vaccine_name = dp_field('vaccine_name', 'Tick-Borne Encephalitis');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="tbe-hero-section">
  <div class="tbe-hero-bg"></div>
  <div class="tbe-hero-dots"></div>
  <div class="tbe-hero-glow-1"></div>
  <div class="tbe-hero-glow-2"></div>
  <div class="section-container">
    <div class="tbe-hero-grid">

      <!-- Left: Content -->
      <div class="tbe-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="tbe-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Tick-Borne Encephalitis Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="tbe-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself before travelling with our tick-borne encephalitis vaccination service in Denton, Manchester. A course for hikers, campers and outdoor travellers heading to forested regions of Europe and parts of Asia.")); ?>
        </p>

        <div class="tbe-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book TBE Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="tbe-hero-trust">
          <div class="tbe-hero-trust-item"><i class="fas fa-syringe"></i><span>Standard or Accelerated Course</span></div>
          <div class="tbe-hero-trust-item"><i class="fas fa-child-reaching"></i><span>Adult &amp; Child Appointments</span></div>
          <div class="tbe-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="tbe-hero-visual">
        <div class="tbe-hero-float-badge">
          <span class="tbe-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '3')); ?></span>
          <span class="tbe-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'years protection')); ?></span>
        </div>
        <div class="tbe-trust-card">
          <div class="tbe-trust-card-glow"></div>
          <div class="tbe-trust-card-inner">
            <div class="tbe-trust-card-header">
              <div class="tbe-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="tbe-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'TBE Vaccine')); ?></span>
            </div>
            <div class="tbe-trust-card-price">
              <span class="tbe-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£50–£55')); ?></span>
              <span class="tbe-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose (child–adult)')); ?></span>
            </div>
            <div class="tbe-trust-card-divider"></div>
            <ul class="tbe-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Standard or accelerated schedule</span></li>
              <li><i class="fas fa-check"></i> <span>Around 3 years' protection</span></li>
              <li><i class="fas fa-check"></i> <span>Adult &amp; child booking available</span></li>
            </ul>
            <div class="tbe-trust-card-footer">
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
<section class="tbe-protect-section">
  <div class="section-container">
    <div class="tbe-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="tbe-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Tick-Borne Encephalitis Vaccine')); ?></h2>
      <p class="tbe-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'A vaccine course for anyone spending time outdoors in forested, tick-active regions')); ?></p>
    </div>

    <div class="tbe-protect-grid">
      <div class="tbe-protect-image-wrapper">
        <div class="tbe-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1543730698-ea2a214991af?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Alpine forest — tick-borne encephalitis is found across forested parts of Europe')); ?>" class="tbe-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="tbe-protect-content">
        <div class="tbe-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Standard or Accelerated Schedule Available')); ?></span>
        </div>

        <h3 class="tbe-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Protection for Forest &amp; Rural Travel')); ?></h3>
        <p class="tbe-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Tick-borne encephalitis (TBE) is a serious viral infection of the brain and central nervous system, spread through the bite of infected Ixodes ticks in forested and rural areas across Europe, Russia and parts of Asia. There's no specific antiviral treatment, so prevention matters. The standard course is 3 doses over 9 to 12 months, giving around 3 years' protection. An accelerated 2-dose course is also available if you're travelling sooner, with the third dose given later.")); ?></p>

        <ul class="tbe-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="tbe-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="tbe-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Standard or Accelerated Course</strong><p>3 doses over 9–12 months, or an accelerated 2-dose schedule before travel with a third dose later.</p></div>
            </li>
            <li class="tbe-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Book at Least 6 Weeks Ahead</strong><p>Especially if you need the accelerated schedule — this gives time to complete both pre-travel doses.</p></div>
            </li>
            <li class="tbe-protect-feature">
              <div class="icon"><i class="fas fa-person-hiking"></i></div>
              <div class="text"><strong>Especially Relevant for Outdoor Travel</strong><p>Worth prioritising for hiking, camping or cycling trips through forested or rural regions.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="tbe-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="tbe-stats-section">
  <div class="section-container">
    <div class="tbe-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="tbe-stat-divider"></div><?php endif; ?>
        <div class="tbe-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="tbe-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">3 Doses</span><span class="label">Standard Course</span></div></div>
        <div class="tbe-stat-divider"></div>
        <div class="tbe-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">~3 Years</span><span class="label">Protection</span></div></div>
        <div class="tbe-stat-divider"></div>
        <div class="tbe-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">6 Weeks</span><span class="label">Before Travel</span></div></div>
        <div class="tbe-stat-divider"></div>
        <div class="tbe-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">First Dose</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="tbe-about-section">
  <div class="section-container">
    <div class="tbe-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="tbe-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Tick-Borne Encephalitis?')); ?></h2>
      <p class="tbe-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A tick-borne viral infection found across forested parts of Europe and Asia')); ?></p>
    </div>

    <div class="tbe-about-content-grid">
      <div class="tbe-about-image-wrapper">
        <div class="tbe-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1759513293475-6f690d64bab9?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Hikers on a forested trail — outdoor travellers face higher tick exposure')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="tbe-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="tbe-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="tbe-info-card"><div class="icon"><i class="fas fa-brain"></i></div><h3>Affects the Brain</h3><p>A serious viral infection of the brain and central nervous system, spread by infected ticks.</p></div>
          <div class="tbe-info-card"><div class="icon"><i class="fas fa-tree"></i></div><h3>Forest &amp; Rural Risk</h3><p>Found in forested and rural areas, with risk peaking in spring and autumn.</p></div>
          <div class="tbe-info-card"><div class="icon"><i class="fas fa-earth-europe"></i></div><h3>Found Widely</h3><p>Present across Austria, Germany, Czech Republic, Poland, Scandinavia, Russia, China, Japan and South Korea.</p></div>
          <div class="tbe-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>A vaccine course, alongside tick bite avoidance, gives highly effective protection.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="tbe-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Tick Bite Avoidance Still Matters')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "Wear long sleeves, trousers and closed shoes, use a DEET-based repellent, and check your body thoroughly after time outdoors. If you find a tick, remove it promptly with tweezers, grasping close to the skin and pulling upward steadily.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="tbe-needs-section">
  <div class="section-container">
    <div class="tbe-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="tbe-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="tbe-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for outdoor travellers heading to forested, tick-active regions')); ?></p>
    </div>

    <div class="tbe-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Hikers, Campers &amp; Cyclists</h3>
          <p class="nhs-card-desc">Worth having if your trip involves spending time outdoors in forested or rural parts of Europe or Asia.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Hiking, camping or cycling trips</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Spring or autumn travel (peak season)</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Forested or rural itineraries</span></li>
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
          <h3 class="nhs-card-title">Repeat or Extended Travellers</h3>
          <p class="nhs-card-desc">Worth prioritising if you visit affected regions often, or spend extended time in rural areas each trip.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Repeat travel to Central/Eastern Europe</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Extended stays in rural regions</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Families travelling with children</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="tbe-pricing-section" id="pricing">
  <div class="section-container">
    <div class="tbe-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="tbe-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Tick-Borne Encephalitis Vaccination Pricing')); ?></h2>
      <p class="tbe-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Priced per dose — we will confirm your full course schedule at your first appointment')); ?></p>
    </div>

    <div class="tbe-pricing-grid">
      <div class="tbe-pricing-card featured">
        <div class="tbe-pricing-ribbon">Per Dose</div>
        <h3 class="tbe-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'TBE Vaccine')); ?></h3>
        <div class="tbe-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£50–£55')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose (child–adult)')); ?></span>
        </div>
        <ul class="tbe-pricing-includes">
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Adult &amp; child appointments available</li>
          <li><i class="fas fa-check"></i> Standard or accelerated schedule</li>
          <li><i class="fas fa-check"></i> Full course scheduling support</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="tbe-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Child: £50 per dose. Adult: £55 per dose. Standard course is 3 doses over 9–12 months; an accelerated 2-dose schedule is available before travel, with a third dose later. Not available on the NHS for travel purposes.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="tbe-details-section">
  <div class="section-container">
    <div class="tbe-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="tbe-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="tbe-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="tbe-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="tbe-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and confirm the right schedule for your trip.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>Given the same day at your first appointment, in the upper arm.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Course Scheduling</h3><p>We book your remaining doses to complete the course, standard or accelerated.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — soreness at the injection site, headache, tiredness or a slight fever.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Adult &amp; Child Options</h3><p>Choose the age-appropriate booking calendar when you're ready to book.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="tbe-faq-section">
  <div class="section-container">
    <div class="tbe-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'TBE FAQs')); ?></span>
      </div>
      <h2 class="tbe-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="tbe-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="tbe-faq-item">
          <button class="tbe-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="tbe-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">What's the difference between the standard and accelerated course?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>The standard course is 3 doses over 9 to 12 months. The accelerated course gives 2 doses before you travel (day 0 and day 14), with a third dose later at 5 to 12 months — useful if you don't have as much time before your trip.</p></div></div>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How soon before travel should I start?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>Book at least 6 weeks before you travel, especially if you need the accelerated schedule, so you have time to complete both pre-travel doses.</p></div></div>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Does my child need this vaccine too?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>It depends on your itinerary — children travelling to the same forested or rural regions can be vaccinated too. Use the "Child" option on the booking calendar below.</p></div></div>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Do I still need to worry about tick bites if I'm vaccinated?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>Yes — the vaccine protects against TBE specifically, but ticks can carry other infections too (such as Lyme disease). Keep up tick bite avoidance: cover up, use repellent, and check your body after time outdoors.</p></div></div>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>Usually mild — soreness at the injection site, headache, tiredness, muscle aches, or a slight fever (particularly after the first dose).</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed with Adult/Child toggle
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     Adult:  appointmentType=47536484 (Tick Borne Encephalitis Vaccination - ADULT)
     Child:  appointmentType=81305592 (Tick Borne Encephalitis Vaccination - CHILD)
     Location: calendarID=10903457 (Denton Pharmacy) — Bowland uses calendarID=8436365
     Override per-page via ACF fields 'vaccine_acuity_url_adult' / 'vaccine_acuity_url_child'. -->
<?php
$acuity_url_adult = dp_field( 'vaccine_acuity_url_adult', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536484&calendarID=10903457&ref=embedded_csp' );
$acuity_url_child = dp_field( 'vaccine_acuity_url_child', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=81305592&calendarID=10903457&ref=embedded_csp' );
?>
<section class="tbe-booking-section" id="booking-widget">
  <div class="tbe-booking-blob-1"></div>
  <div class="tbe-booking-blob-2"></div>
  <div class="section-container">
    <div class="tbe-booking-header">
      <h2 class="tbe-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your TBE Vaccination')); ?></h2>
      <p class="tbe-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose adult or child, then pick a time that suits you at our Denton clinic')); ?></p>
    </div>

    <?php if ( $acuity_url_adult && $acuity_url_child ) : ?>
      <div class="tbe-booking-toggle" role="group" aria-label="Choose age group">
        <button type="button" class="tbe-toggle-btn active" data-url="<?php echo esc_url( $acuity_url_adult ); ?>" onclick="switchBookingAge(this)">Adult</button>
        <button type="button" class="tbe-toggle-btn" data-url="<?php echo esc_url( $acuity_url_child ); ?>" onclick="switchBookingAge(this)">Child</button>
      </div>
    <?php endif; ?>

    <div class="tbe-booking-embed">
      <?php if ( $acuity_url_adult ) : ?>
        <iframe id="tbe-acuity-iframe" src="<?php echo esc_url( $acuity_url_adult ); ?>" title="Book your Tick-Borne Encephalitis vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="tbe-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="tbe-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="tbe-cta-section">
  <div class="tbe-cta-bg"></div>
  <div class="section-container">
    <div class="tbe-cta-content">
      <div class="tbe-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day First Dose</span>
          <span class="badge">Adult &amp; Child</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="tbe-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="tbe-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your tick-borne encephalitis vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="tbe-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
