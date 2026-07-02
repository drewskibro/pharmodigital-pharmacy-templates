<?php
/**
 * Template Name: Tick-Borne Encephalitis Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar with Adult/Child toggle, final CTA.
 */

get_header();

$prefix = 'tbe';
$vaccine_name = bp_field('vaccine_name', 'Tick-Borne Encephalitis');
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
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="tbe-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Tick-Borne Encephalitis Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="tbe-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Hiking, camping or cycling through forested parts of Europe or Asia? Our Wythenshawe pharmacy runs the tick-borne encephalitis vaccine course, standard or accelerated depending on your travel dates.")); ?>
        </p>

        <div class="tbe-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book TBE Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
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
          <span class="tbe-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '3')); ?></span>
          <span class="tbe-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'years protection')); ?></span>
        </div>
        <div class="tbe-trust-card">
          <div class="tbe-trust-card-glow"></div>
          <div class="tbe-trust-card-inner">
            <div class="tbe-trust-card-header">
              <div class="tbe-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="tbe-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'TBE Vaccine')); ?></span>
            </div>
            <div class="tbe-trust-card-price">
              <span class="tbe-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£50–£55')); ?></span>
              <span class="tbe-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose (child–adult)')); ?></span>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="tbe-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'About the TBE Vaccine')); ?></h2>
      <p class="tbe-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'Built for time spent outdoors in tick-active, forested country')); ?></p>
    </div>

    <div class="tbe-protect-grid">
      <div class="tbe-protect-image-wrapper">
        <div class="tbe-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1757448989052-f8faa3093087?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'Dense woodland — tick-borne encephalitis is found across forested parts of Europe')); ?>" class="tbe-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="tbe-protect-content">
        <div class="tbe-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Standard or Accelerated Schedule Available')); ?></span>
        </div>

        <h3 class="tbe-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Worth It If Your Itinerary Is Outdoorsy')); ?></h3>
        <p class="tbe-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "TBE is a serious viral infection targeting the brain and nervous system, passed on through bites from infected Ixodes ticks across forested and rural Europe, Russia and parts of Asia. There's no specific antiviral for it, which is exactly why prevention matters. The standard course is 3 doses over 9 to 12 months, covering you for around 3 years — or there's an accelerated 2-dose option if your trip's sooner, with the third dose following later.")); ?></p>

        <ul class="tbe-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="tbe-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="tbe-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Two Schedules to Choose From</strong><p>3 doses over 9–12 months, or an accelerated 2-dose option before travel with the third later.</p></div>
            </li>
            <li class="tbe-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Give Yourself 6 Weeks</strong><p>Especially on the accelerated schedule — you'll need time for both pre-travel doses.</p></div>
            </li>
            <li class="tbe-protect-feature">
              <div class="icon"><i class="fas fa-person-hiking"></i></div>
              <div class="text"><strong>Made for Outdoor Trips</strong><p>Prioritise it for hiking, camping or cycling through forested or rural country.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="tbe-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
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
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="tbe-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'TBE, in Brief')); ?></h2>
      <p class="tbe-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A tick-borne viral infection found across forested parts of Europe and Asia')); ?></p>
    </div>

    <div class="tbe-about-content-grid">
      <div class="tbe-about-image-wrapper">
        <div class="tbe-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1603614068906-c1ea9b6819ab?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Cycling through a forest trail — outdoor travellers face higher tick exposure')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="tbe-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="tbe-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="tbe-info-card"><div class="icon"><i class="fas fa-brain"></i></div><h3>Targets the Nervous System</h3><p>A serious infection of the brain and central nervous system, passed on by infected ticks.</p></div>
          <div class="tbe-info-card"><div class="icon"><i class="fas fa-tree"></i></div><h3>Forest and Rural Risk</h3><p>Ticks are most active in spring and autumn, in forested and rural terrain.</p></div>
          <div class="tbe-info-card"><div class="icon"><i class="fas fa-earth-europe"></i></div><h3>A Wide Footprint</h3><p>Austria, Germany, Czech Republic, Poland, Scandinavia, Russia, China, Japan and South Korea all report cases.</p></div>
          <div class="tbe-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Well Covered by the Vaccine</h3><p>Combined with tick bite avoidance, the vaccine course gives strong protection.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="tbe-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', "Don't Skip the Basics")); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "Cover up with long sleeves, trousers and closed shoes, use a DEET repellent, and give yourself a proper tick check after time outdoors. Found one attached? Use tweezers close to the skin and pull upward, steady and slow.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="tbe-needs-section">
  <div class="section-container">
    <div class="tbe-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="tbe-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Is Your Trip a Fit?')); ?></h2>
      <p class="tbe-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Two traveller types where TBE cover is worth arranging')); ?></p>
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
          <p class="nhs-card-desc">If you're spending real time outdoors in forested or rural Europe or Asia, get this sorted.</p>
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
          <p class="nhs-card-desc">Frequent visitor to affected regions, or spending longer stretches rurally each time? Prioritise this.</p>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="tbe-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Pricing')); ?></h2>
      <p class="tbe-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', "Priced per dose — we'll set out your full schedule at the first visit")); ?></p>
    </div>

    <div class="tbe-pricing-grid">
      <div class="tbe-pricing-card featured">
        <div class="tbe-pricing-ribbon">Per Dose</div>
        <h3 class="tbe-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'TBE Vaccine')); ?></h3>
        <div class="tbe-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£50–£55')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose (child–adult)')); ?></span>
        </div>
        <ul class="tbe-pricing-includes">
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Adult and child appointments</li>
          <li><i class="fas fa-check"></i> Standard or accelerated schedule</li>
          <li><i class="fas fa-check"></i> Full course scheduled for you</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="tbe-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "Child: £50 per dose. Adult: £55 per dose. Standard course is 3 doses over 9–12 months; accelerated 2-dose option available before travel, third dose later. Not an NHS travel service.")); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="tbe-details-section">
  <div class="section-container">
    <div class="tbe-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="tbe-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What Happens Across the Course')); ?></h2>
      <p class="tbe-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A relaxed process at our Wythenshawe pharmacy')); ?></p>
    </div>

    <div class="tbe-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="tbe-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Trip Timing Check</h3><p>We confirm which schedule, standard or accelerated, fits your travel dates.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Dose One, Same Day</h3><p>Given in the upper arm at your first appointment.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>We Book the Rest</h3><p>Your remaining doses get scheduled to complete the course you're on.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Are Usually Mild</h3><p>A sore arm, headache, tiredness or a slight fever.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Adult or Child Booking</h3><p>Pick the calendar that matches your appointment.</p></div>
        <div class="tbe-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private, No Referral</h3><p>Travel TBE vaccination sits outside the NHS, so book with us directly.</p></div>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'TBE FAQs')); ?></span>
      </div>
      <h2 class="tbe-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
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
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Standard or accelerated — what's the actual difference?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>Standard is 3 doses spread over 9 to 12 months. Accelerated gets 2 doses in before you travel (day 0 and day 14), with the third following at 5 to 12 months — handy if time's tight.</p></div></div>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">When should I get started?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>At least 6 weeks before you fly, particularly if you're on the accelerated schedule — that gives time for both pre-travel doses.</p></div></div>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Should my child have this too?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>Depends on where you're headed — kids travelling to the same forested or rural regions can be vaccinated too. Use the "Child" option on the calendar below.</p></div></div>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Can I stop worrying about tick bites once vaccinated?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>No — the vaccine only covers TBE, and ticks can carry other things too, like Lyme disease. Keep covering up, using repellent, and checking yourself after time outdoors.</p></div></div>
        <div class="tbe-faq-item"><button class="tbe-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects come up?</span><i class="fas fa-plus icon"></i></button><div class="tbe-faq-content"><p>Usually mild — soreness where the needle went in, headache, tiredness, muscle aches, or a slight fever, most often after the first dose.</p></div></div>
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
     Location: calendarID=8436365 (Bowland Pharmacy)
     Override per-page via ACF fields 'vaccine_acuity_url_adult' / 'vaccine_acuity_url_child'. -->
<?php
$acuity_url_adult = bp_field( 'vaccine_acuity_url_adult', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536484&calendarID=8436365&ref=embedded_csp' );
$acuity_url_child = bp_field( 'vaccine_acuity_url_child', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=81305592&calendarID=8436365&ref=embedded_csp' );
?>
<section class="tbe-booking-section" id="booking-widget">
  <div class="tbe-booking-blob-1"></div>
  <div class="tbe-booking-blob-2"></div>
  <div class="section-container">
    <div class="tbe-booking-header">
      <h2 class="tbe-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your TBE Vaccination')); ?></h2>
      <p class="tbe-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose adult or child, then pick a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <?php if ( $acuity_url_adult && $acuity_url_child ) : ?>
      <div class="tbe-booking-toggle" role="group" aria-label="Choose age group">
        <button type="button" class="tbe-toggle-btn active" data-url="<?php echo esc_url( $acuity_url_adult ); ?>" onclick="switchBookingAge(this)">Adult</button>
        <button type="button" class="tbe-toggle-btn" data-url="<?php echo esc_url( $acuity_url_child ); ?>" onclick="switchBookingAge(this)">Child</button>
      </div>
    <?php endif; ?>

    <div class="tbe-booking-embed">
      <?php if ( $acuity_url_adult ) : ?>
        <iframe id="tbe-acuity-iframe" src="<?php echo esc_url( $acuity_url_adult ); ?>" title="Book your Tick-Borne Encephalitis vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="tbe-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="tbe-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
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

      <h2 class="tbe-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Get Covered Before You Head Into the Forest')); ?></h2>
      <p class="tbe-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book your TBE vaccine with our Wythenshawe team — standard or accelerated, your call.")); ?></p>

      <div class="tbe-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
