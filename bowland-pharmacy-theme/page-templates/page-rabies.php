<?php
/**
 * Template Name: Rabies Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'rabies';
$vaccine_name = bp_field('vaccine_name', 'Rabies');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="rabies-hero-section">
  <div class="rabies-hero-bg"></div>
  <div class="rabies-hero-dots"></div>
  <div class="rabies-hero-glow-1"></div>
  <div class="rabies-hero-glow-2"></div>
  <div class="section-container">
    <div class="rabies-hero-grid">

      <!-- Left: Content -->
      <div class="rabies-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="rabies-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Rabies Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="rabies-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Rabies is almost always fatal once symptoms show. Pre-exposure vaccination buys you time and simpler treatment if you're ever bitten. Most people have the standard three-dose course. If you are an adult aged 18 to 65 and there is not enough time for it before you fly (usually less than 3 weeks), an accelerated course gives the first 3 doses within one week.")); ?>
        </p>

        <p class="rabies-hero-description">These are pre-travel appointments. If you may have been exposed to rabies, get urgent medical advice where you are.</p>

        <div class="rabies-hero-actions travel-appointment-actions">
          <a href="<?php echo esc_url( at_travel_booking_url( 'v2', 'service-hero' ) ); ?>" class="cta-button primary-cta">See pre-travel rabies appointments <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
          <a href="<?php echo esc_url( at_travel_booking_url( 't1', 'service-hero' ) ); ?>" class="cta-button secondary-cta">Discuss my itinerary with a pharmacist</a>
        </div>

        <div class="rabies-hero-trust">
          <div class="rabies-hero-trust-item"><i class="fas fa-syringe"></i><span>Standard or Accelerated</span></div>
          <div class="rabies-hero-trust-item"><i class="fas fa-child-reaching"></i><span>Suitable for Children</span></div>
          <div class="rabies-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="rabies-hero-visual">
        <div class="rabies-hero-float-badge">
          <span class="rabies-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '3')); ?></span>
          <span class="rabies-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'dose course')); ?></span>
        </div>
        <div class="rabies-trust-card">
          <div class="rabies-trust-card-glow"></div>
          <div class="rabies-trust-card-inner">
            <div class="rabies-trust-card-header">
              <div class="rabies-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="rabies-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Rabies Vaccine')); ?></span>
            </div>
            <div class="rabies-trust-card-prices">
              <div class="rabies-trust-price-col">
                <span class="rabies-trust-price-tag"><?php echo esc_html(bp_field('vaccine_price_std_label', 'Standard')); ?></span>
                <span class="rabies-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£70')); ?></span>
                <span class="rabies-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
                <span class="rabies-trust-price-days"><?php echo esc_html(bp_field('vaccine_schedule_std_short', 'Days 0, 7, 28')); ?></span>
              </div>
              <div class="rabies-trust-price-sep"></div>
              <div class="rabies-trust-price-col">
                <span class="rabies-trust-price-tag rabies-trust-price-tag--accel"><?php echo esc_html(bp_field('vaccine_price_accel_label', 'Accelerated')); ?></span>
                <span class="rabies-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_accel_amount', '£85')); ?></span>
                <span class="rabies-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
                <span class="rabies-trust-price-days"><?php echo esc_html(bp_field('vaccine_schedule_accel_short', 'Days 0, 3, 7 (adults 18 to 65)')); ?></span>
              </div>
            </div>
            <div class="rabies-trust-card-divider"></div>
            <ul class="rabies-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Standard course if you have 3 weeks or more. Accelerated course only if you do not, and only for adults aged 18 to 65.</span></li>
              <li><i class="fas fa-check"></i> <span>No routine booster for most travellers</span></li>
              <li><i class="fas fa-check"></i> <span>Simplifies post-bite treatment</span></li>
            </ul>
            <div class="rabies-trust-card-footer">
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
<section class="rabies-protect-section">
  <div class="section-container">
    <div class="rabies-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="rabies-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'About Pre-Exposure Vaccination')); ?></h2>
      <p class="rabies-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', "It won't remove the need for care if you're bitten, but it buys you crucial time")); ?></p>
    </div>

    <div class="rabies-protect-grid">
      <div class="rabies-protect-image-wrapper">
        <div class="rabies-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1687120486460-a12217b24b92?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'A trekker crossing remote terrain — pre-exposure rabies vaccination suits adventure travel')); ?>" class="rabies-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="rabies-protect-content">
        <div class="rabies-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Two Schedules — Standard or Accelerated')); ?></span>
        </div>

        <h3 class="rabies-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Why This One Is Worth Taking Seriously')); ?></h3>
        <p class="rabies-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "Once symptoms appear, rabies is close to universally fatal. It attacks the nervous system and spreads through bites, scratches or saliva, with dogs responsible for up to 99% of human cases worldwide. The pre-exposure course is three doses. Standard: days 0, 7 and 28 (the third dose can be from day 21 if time is short). Accelerated: days 0, 3 and 7. A fourth dose at one year completes the accelerated course if you will keep travelling to high-risk areas, and is extra. The accelerated course is only for adults aged 18 to 65 who cannot fit in the standard course. Most travellers do not need routine boosters. Ask us about a single booster if your course was over a year ago and you are travelling to a high-risk area again. It won't remove the need for care if you're bitten, but it cuts down what treatment you'll need and buys time in places where that care is harder to reach.")); ?></p>

        <ul class="rabies-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Two Schedules to Pick From</strong><p><strong>Standard</strong>: 3 doses on days 0, 7 and 28, with the third dose from day 21 if time is short (£70 per dose), so book around 4 weeks out. <strong>Accelerated</strong>, for adults aged 18 to 65 who cannot fit in the standard course: 3 doses on days 0, 3 and 7 (£85 per dose), plus a 4th dose at one year if you keep travelling to high-risk areas.</p></div>
            </li>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="fas fa-hand-holding-medical"></i></div>
              <div class="text"><strong>Cuts Down Post-Bite Treatment</strong><p>Completed a full course and later bitten? You will usually need 2 more doses and usually no immunoglobulin. People with a weakened immune system may need more. If you have not been vaccinated you usually need 4 doses, and sometimes immunoglobulin, which can be hard to get abroad.</p></div>
            </li>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="fas fa-person-hiking"></i></div>
              <div class="text"><strong>Worth It for Adventure Travel</strong><p>Especially remote or rural trips, trekking, and travelling with kids, who get bitten more and report it less.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="rabies-protect-actions">
          <a href="<?php echo esc_url( at_travel_booking_url( 'v2', 'service-body' ) ); ?>" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="rabies-stats-section">
  <div class="section-container">
    <div class="rabies-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="rabies-stat-divider"></div><?php endif; ?>
        <div class="rabies-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">3 Doses</span><span class="label">Standard or Accelerated</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">No Routine Booster</span><span class="label">For most travellers</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">1 Week</span><span class="label">First 3 accelerated doses</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">First Dose</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="rabies-about-section">
  <div class="section-container">
    <div class="rabies-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="rabies-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'Rabies, in Brief')); ?></h2>
      <p class="rabies-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A viral infection from animal bites, found on every continent except Antarctica')); ?></p>
    </div>

    <div class="rabies-about-content-grid">
      <div class="rabies-about-image-wrapper">
        <div class="rabies-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1610376003486-5b9f3338506e?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Dogs resting outside a rural building. Dogs cause up to 99% of human rabies cases worldwide')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="rabies-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="rabies-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>A Viral Threat to the Nervous System</h3><p>Once symptoms show, it's almost always fatal — that's what makes prevention worthwhile.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-dog"></i></div><h3>Dogs Are the Main Source</h3><p>Bites, scratches or saliva from infected animals spread it — dogs account for up to 99% of human cases.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>A Genuinely Global Risk</h3><p>Found on every continent except Antarctica.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Manageable With Prevention</h3><p>Pre-exposure vaccination plus prompt wound care makes a real difference if you're bitten.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="rabies-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'Bitten or Scratched? Act Fast')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "Wash the wound immediately for several minutes under running water with soap, apply antiseptic, and get medical attention as quickly as you can — even if you've done the pre-exposure course. The vaccine simplifies things, it doesn't replace urgent medical care.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="rabies-needs-section">
  <div class="section-container">
    <div class="rabies-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="rabies-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Worth Having, or Essential?')); ?></h2>
      <p class="rabies-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Two groups where this genuinely matters')); ?></p>
    </div>

    <div class="rabies-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Remote &amp; Rural Travellers</h3>
          <p class="nhs-card-desc">If proper medical care and immunoglobulin might be a long way off where you're headed, this is worth arranging.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Remote or rural itineraries</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Trekking or adventure travel</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Families travelling with children</span></li>
          </ul>
          <a href="<?php echo esc_url( at_travel_booking_url( 'v2', 'service-body' ) ); ?>" class="nhs-card-btn">Book Now</a>
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
          <h3 class="nhs-card-title">Occupational Risk Groups</h3>
          <p class="nhs-card-desc">If your job puts you near animals abroad on a regular basis, this one's for you. If your work means frequent contact with bats or other animals that could carry rabies, you may need extra doses later. We will plan these with you.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Vets &amp; wildlife researchers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Bat handlers &amp; fieldwork staff</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Extended or repeat travel abroad</span></li>
          </ul>
          <a href="<?php echo esc_url( at_travel_booking_url( 'v2', 'service-body' ) ); ?>" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="rabies-pricing-section" id="pricing">
  <div class="section-container">
    <div class="rabies-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="rabies-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Pricing')); ?></h2>
      <p class="rabies-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', "Both courses are 3 doses: £210 in total for the standard course (£70 per dose) or £255 for the accelerated course (£85 per dose). The accelerated course is only for adults aged 18 to 65. A fourth dose at one year completes the accelerated course if you will keep travelling to high-risk areas, and is extra. The travel health consultation is free. Our pharmacist will confirm which course is right for you at your first appointment.")); ?></p>
    </div>

    <div class="rabies-pricing-grid rabies-pricing-grid--dual">

      <!-- Standard schedule -->
      <div class="rabies-pricing-card">
        <div class="rabies-pricing-ribbon"><?php echo esc_html(bp_field('vaccine_price_std_ribbon', 'Standard Course')); ?></div>
        <h3 class="rabies-pricing-name"><?php echo esc_html(bp_field('vaccine_price_std_name', 'Standard Schedule')); ?></h3>
        <div class="rabies-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£70')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <div class="rabies-pricing-schedule">
          <i class="fas fa-calendar-days"></i>
          <span><?php echo esc_html(bp_field('vaccine_schedule_std', '3 doses: days 0, 7 and 28 (third dose from day 21 if time is short)')); ?></span>
        </div>
        <ul class="rabies-pricing-includes">
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Advice tailored to your trip</li>
          <li><i class="fas fa-check"></i> Full course scheduled for you</li>
          <li><i class="fas fa-check"></i> Best if you have 4+ weeks before you fly</li>
        </ul>
      </div>

      <!-- Accelerated schedule -->
      <div class="rabies-pricing-card rabies-pricing-card--accel">
        <div class="rabies-pricing-ribbon rabies-pricing-ribbon--accel"><?php echo esc_html(bp_field('vaccine_price_accel_ribbon', 'Travelling Soon')); ?></div>
        <h3 class="rabies-pricing-name"><?php echo esc_html(bp_field('vaccine_price_accel_name', 'Accelerated Schedule')); ?></h3>
        <div class="rabies-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_accel_amount', '£85')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <div class="rabies-pricing-schedule rabies-pricing-schedule--accel">
          <i class="fas fa-bolt"></i>
          <span><?php echo esc_html(bp_field('vaccine_schedule_accel', '3 doses: days 0, 3 and 7, plus a dose at one year if you keep travelling to high-risk areas')); ?></span>
        </div>
        <ul class="rabies-pricing-includes">
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Advice tailored to your trip</li>
          <li><i class="fas fa-check"></i> First 3 doses within one week</li>
          <li><i class="fas fa-check"></i> Only for adults aged 18 to 65 who cannot fit in the standard course</li>
        </ul>
      </div>

    </div>

    <div style="display:flex;justify-content:center;margin-top:2rem;">
      <a href="<?php echo esc_url( at_travel_booking_url( 'v2', 'service-price' ) ); ?>" class="cta-button primary-cta">See pre-travel rabies appointments</a>
    </div>

    <p class="rabies-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "Prices are per dose. Both courses are 3 doses. The accelerated course also needs a 4th dose at one year if you keep travelling to high-risk areas. This isn't an NHS travel service. Our pharmacist will confirm which schedule suits you at your first visit.")); ?></p>
    <p class="rabies-pricing-note">If the vaccine is not suitable for you, we will not give it.</p>
  </div>
</section>

<!-- What To Expect -->
<section class="rabies-details-section">
  <div class="section-container">
    <div class="rabies-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="rabies-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What Happens Across the Course')); ?></h2>
      <p class="rabies-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'Three visits over 1 to 4 weeks, depending on your course.')); ?></p>
    </div>

    <div class="rabies-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="rabies-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Trip Timing Check</h3><p>We confirm the course schedule fits comfortably before you fly.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Dose One, Same Day</h3><p>Given in the upper arm at your first appointment.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>We Book the Rest</h3><p>Your remaining doses get scheduled around your trip: days 7 and 28 on the standard course (or day 21 if time is short), or days 3 and 7 on the accelerated one. A fourth dose at one year completes the accelerated course if you will keep travelling to high-risk areas, and is extra.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Are Usually Mild</h3><p>A sore arm, headache, nausea, muscle aches or a slight fever.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Children Included</h3><p>Children can have the standard course, which is worth considering given kids get bitten more often and mention it less.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private, No Referral</h3><p>Travel rabies vaccination sits outside the NHS, so book with us directly.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Greater Manchester: our three travel clinics -->
<section class="rabies-details-section">
  <div class="section-container">
    <div class="rabies-details-header">
      <h2 class="rabies-details-title">Rabies vaccine across Greater Manchester</h2>
      <p class="rabies-details-desc">Our travel clinic runs at three pharmacies. Choose the one nearest you:</p>
    </div>

    <div class="rabies-details-grid">
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-location-dot"></i></div><h3><a href="https://bowlandpharmacy.co.uk/rabies/">Bowland Pharmacy</a></h3><p>52 Bowland Road, Wythenshawe M23 1JX: for Wythenshawe, south Manchester and near Manchester Airport.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-location-dot"></i></div><h3><a href="https://dentonpharmacy.co.uk/rabies-vaccination/">Denton Pharmacy</a></h3><p>Ashton Road, Denton M34 3EX: for Tameside and east Manchester.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-location-dot"></i></div><h3><a href="https://wilmslow-pharmacy.co.uk/rabies-vaccination/">Wilmslow Pharmacy</a></h3><p>Summerfields Village Centre, Dean Row Road, Wilmslow SK9 2TA: for Cheshire and south Manchester.</p></div>
    </div>
    <p class="rabies-details-desc" style="text-align:center;margin-top:2rem;">The price is the same at all three.</p>
  </div>
</section>

<!-- FAQ Section -->
<section class="rabies-faq-section">
  <div class="section-container">
    <div class="rabies-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'RABIES FAQs')); ?></span>
      </div>
      <h2 class="rabies-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="rabies-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="rabies-faq-item">
          <button class="rabies-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="rabies-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : $faq_num = 5; ?>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Does the vaccine mean I can skip treatment if I'm bitten?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>No. You'll still need medical attention. What the pre-exposure course changes is how much treatment you need: if you have completed a full course you will usually need 2 more doses and usually no immunoglobulin. People with a weakened immune system may need more. If you have not been vaccinated you usually need 4 doses, and sometimes immunoglobulin, which can be hard to get abroad.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">When should I start the course?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Ideally at least 4 weeks before you travel, to fit in all three doses of the standard course (days 0, 7 and 28, or day 21 for the third dose if time is short). Travelling in less than 3 weeks and aged 18 to 65? The accelerated course (days 0, 3 and 7) gives the first 3 doses within a week, so it's still worth calling us at short notice.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">What do I do if I'm bitten or scratched abroad?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Wash the wound immediately for several minutes under running water with soap, apply antiseptic, and get to a doctor as fast as you can — vaccinated or not.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Is there a quicker option if I'm short on time?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Yes, for adults aged 18 to 65 who cannot fit in the standard course. We run an accelerated course of 3 doses on days 0, 3 and 7 at £85 per dose, plus a further dose at one year if you will keep travelling to high-risk areas. The standard course is days 0, 7 and 28 at £70 per dose. Tell us your travel dates and our pharmacist will confirm which one suits you.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects might I get?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Usually mild — a sore arm, headache, nausea, muscle aches or a slight fever. Serious reactions are rare.</p></div></div>
      <?php endif; ?>
      <?php
      // Area and price questions: always shown, after any saved FAQs.
      $area_faqs = array(
        array( 'q' => 'Where can I get a rabies vaccine in Manchester?', 'a' => 'Here at Bowland Pharmacy in Wythenshawe, for south Manchester and near Manchester Airport. Our travel clinic also runs at Denton Pharmacy, for Tameside and east Manchester, and at Wilmslow Pharmacy, for Cheshire. You do not need a GP referral.' ),
        array( 'q' => 'How much is the rabies vaccine?', 'a' => 'The standard course is 3 doses at £70 each, £210 in total. The accelerated course, only for adults aged 18 to 65 who cannot fit in the standard course, is 3 doses at £85 each, £255 in total, plus a further dose at one year if you keep travelling to high-risk areas, which is extra. The travel health consultation is free, and the pharmacist decides which course suits you.' ),
        array( 'q' => 'Is the rabies vaccine free on the NHS?', 'a' => 'Not for travel, so we give it privately.' ),
      );
      foreach ( $area_faqs as $area_faq ) : $faq_num++; ?>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num"><?php echo esc_html( str_pad( $faq_num, 2, '0', STR_PAD_LEFT ) ); ?></span><span class="text"><?php echo esc_html( $area_faq['q'] ); ?></span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p><?php echo esc_html( $area_faq['a'] ); ?></p></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47536474  (Rabies Vaccination)
     Location:       calendarID=8436365       (Bowland Pharmacy)
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = at_travel_calendar_url( 'v2' );
?>
<section class="rabies-booking-section" id="booking-widget">
  <div class="rabies-booking-blob-1"></div>
  <div class="rabies-booking-blob-2"></div>
  <div class="section-container">
    <div class="rabies-booking-header">
      <h2 class="rabies-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Rabies Vaccination')); ?></h2>
      <p class="rabies-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <div class="rabies-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Rabies vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="rabies-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="rabies-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="rabies-cta-section">
  <div class="rabies-cta-bg"></div>
  <div class="section-container">
    <div class="rabies-cta-content">
      <div class="rabies-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day First Dose</span>
          <span class="badge">Suitable for Children</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="rabies-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Start Your Rabies Course in Good Time')); ?></h2>
      <p class="rabies-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book with our Wythenshawe team — the course takes a few weeks, so don't leave it too late.")); ?></p>

      <div class="rabies-cta-actions">
        <a href="<?php echo esc_url( at_travel_booking_url( 'v2', 'service-footer' ) ); ?>" class="cta-button primary-cta white-btn">See pre-travel rabies appointments</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
