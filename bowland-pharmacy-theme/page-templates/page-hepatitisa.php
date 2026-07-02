<?php
/**
 * Template Name: Hepatitis A Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar with Adult/Child toggle, final CTA.
 */

get_header();

$prefix = 'hepatitisa';
$vaccine_name = bp_field('vaccine_name', 'Hepatitis A');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="hepatitisa-hero-section">
  <div class="hepatitisa-hero-bg"></div>
  <div class="hepatitisa-hero-dots"></div>
  <div class="hepatitisa-hero-glow-1"></div>
  <div class="hepatitisa-hero-glow-2"></div>
  <div class="section-container">
    <div class="hepatitisa-hero-grid">

      <!-- Left: Content -->
      <div class="hepatitisa-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="hepatitisa-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Hepatitis A Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="hepatitisa-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "Street food, local water, close contact with people — hepatitis A travels through all of them. Our Wythenshawe pharmacy runs the two-dose course for adults and children, protecting you for up to 25 years.")); ?>
        </p>

        <div class="hepatitisa-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Hepatitis A Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="hepatitisa-hero-trust">
          <div class="hepatitisa-hero-trust-item"><i class="fas fa-child-reaching"></i><span>Adult &amp; Child Appointments</span></div>
          <div class="hepatitisa-hero-trust-item"><i class="fas fa-syringe"></i><span>2-Dose Course</span></div>
          <div class="hepatitisa-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="hepatitisa-hero-visual">
        <div class="hepatitisa-hero-float-badge">
          <span class="hepatitisa-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '25')); ?></span>
          <span class="hepatitisa-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'years protection')); ?></span>
        </div>
        <div class="hepatitisa-trust-card">
          <div class="hepatitisa-trust-card-glow"></div>
          <div class="hepatitisa-trust-card-inner">
            <div class="hepatitisa-trust-card-header">
              <div class="hepatitisa-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="hepatitisa-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Hepatitis A Vaccine')); ?></span>
            </div>
            <div class="hepatitisa-trust-card-price">
              <span class="hepatitisa-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£35–£40')); ?></span>
              <span class="hepatitisa-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose (child–adult)')); ?></span>
            </div>
            <div class="hepatitisa-trust-card-divider"></div>
            <ul class="hepatitisa-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Adult &amp; child booking available</span></li>
              <li><i class="fas fa-check"></i> <span>Up to 25 years' protection</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="hepatitisa-trust-card-footer">
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
<section class="hepatitisa-protect-section">
  <div class="section-container">
    <div class="hepatitisa-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="hepatitisa-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'About the Hepatitis A Vaccine')); ?></h2>
      <p class="hepatitisa-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'Two doses now, decades of protection later')); ?></p>
    </div>

    <div class="hepatitisa-protect-grid">
      <div class="hepatitisa-protect-image-wrapper">
        <div class="hepatitisa-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1576765974004-1fcdcab09015?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'A pharmacist giving a hepatitis A injection — suitable for both adults and children')); ?>" class="hepatitisa-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hepatitisa-protect-content">
        <div class="hepatitisa-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Two Doses, Up to 25 Years of Protection')); ?></span>
        </div>

        <h3 class="hepatitisa-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'A Common-Sense Precaution')); ?></h3>
        <p class="hepatitisa-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "Hepatitis A attacks the liver and spreads easily — through contaminated food or water, or just close contact with an infected person. It shows up more often across South Asia, Southeast Asia, Africa, and Central and South America. The jab goes into the upper arm: one dose to start, then a booster 6 to 12 months on that stretches your protection out to 25 years.")); ?></p>

        <ul class="hepatitisa-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="hepatitisa-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="hepatitisa-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Dose One, Then a Top-Up</strong><p>The first dose covers you for about a year; the booster stretches that out to 25 years.</p></div>
            </li>
            <li class="hepatitisa-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Two Weeks' Notice Ideally</strong><p>Book your first dose at least 2 weeks out so your immunity has time to develop.</p></div>
            </li>
            <li class="hepatitisa-protect-feature">
              <div class="icon"><i class="fas fa-child-reaching"></i></div>
              <div class="text"><strong>Adult and Child Bookings</strong><p>We run age-appropriate calendars for both — pick whichever suits below.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="hepatitisa-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="hepatitisa-stats-section">
  <div class="section-container">
    <div class="hepatitisa-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="hepatitisa-stat-divider"></div><?php endif; ?>
        <div class="hepatitisa-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitisa-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">2 Doses</span><span class="label">Full Course</span></div></div>
        <div class="hepatitisa-stat-divider"></div>
        <div class="hepatitisa-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">Up to 25 Yrs</span><span class="label">Protection</span></div></div>
        <div class="hepatitisa-stat-divider"></div>
        <div class="hepatitisa-stat-item"><div class="icon"><i class="fas fa-child-reaching"></i></div><div class="content"><span class="number">Adult &amp; Child</span><span class="label">Appointments</span></div></div>
        <div class="hepatitisa-stat-divider"></div>
        <div class="hepatitisa-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="hepatitisa-about-section">
  <div class="section-container">
    <div class="hepatitisa-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="hepatitisa-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'A Quick Introduction to Hepatitis A')); ?></h2>
      <p class="hepatitisa-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A liver infection that follows poor food and water hygiene')); ?></p>
    </div>

    <div class="hepatitisa-about-content-grid">
      <div class="hepatitisa-about-image-wrapper">
        <div class="hepatitisa-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1763741204036-e3b5e90e3fee?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'A street food cart abroad — hepatitis A commonly spreads through contaminated food')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hepatitisa-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="hepatitisa-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="hepatitisa-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Attacks the Liver</h3><p>The hepatitis A virus spreads through contaminated food, water, or close contact with someone infected.</p></div>
          <div class="hepatitisa-info-card"><div class="icon"><i class="fas fa-temperature-high"></i></div><h3>Fever and Jaundice</h3><p>Tiredness, fever, vomiting, dark urine, and yellowing of the skin or eyes are all typical.</p></div>
          <div class="hepatitisa-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Not Just One Region</h3><p>Cases cluster across South Asia, Southeast Asia, Africa, and Central and South America.</p></div>
          <div class="hepatitisa-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Well Prevented</h3><p>Two doses is all it takes for strong, long-lasting protection.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="hepatitisa-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', "Keep Up Your Guard Before Dose Two")); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "One dose already cuts your risk substantially, but it's not full protection yet — stay careful with food, water and hand hygiene while travelling, especially in the run-up to your second dose.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="hepatitisa-needs-section">
  <div class="section-container">
    <div class="hepatitisa-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="hepatitisa-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Who Tends to Need This')); ?></h2>
      <p class="hepatitisa-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Any age, but especially these two groups')); ?></p>
    </div>

    <div class="hepatitisa-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">The Whole Family, Together</h3>
          <p class="nhs-card-desc">Adults and children can both be vaccinated here, so there's no need for separate appointments elsewhere.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Trips to South or Southeast Asia</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Africa, Central or South America</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Kids travelling with the family</span></li>
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
          <h3 class="nhs-card-title">Street Food Fans &amp; Repeat Visitors</h3>
          <p class="nhs-card-desc">If you eat wherever looks good, stay somewhere basic, or keep going back to the same country, prioritise this one.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Street food and local dining</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Basic or rural accommodation</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Frequent trips to the same regions</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="hepatitisa-pricing-section" id="pricing">
  <div class="section-container">
    <div class="hepatitisa-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="hepatitisa-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Pricing')); ?></h2>
      <p class="hepatitisa-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', "Priced per dose — we'll map out your booster timing at the first visit")); ?></p>
    </div>

    <div class="hepatitisa-pricing-grid">
      <div class="hepatitisa-pricing-card featured">
        <div class="hepatitisa-pricing-ribbon">Per Dose</div>
        <h3 class="hepatitisa-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Hepatitis A Vaccine')); ?></h3>
        <div class="hepatitisa-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£35–£40')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'per dose (child–adult)')); ?></span>
        </div>
        <ul class="hepatitisa-pricing-includes">
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Adult and child appointments</li>
          <li><i class="fas fa-check"></i> Advice tailored to your trip</li>
          <li><i class="fas fa-check"></i> Reminder for your second dose</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="hepatitisa-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "Child (under 16): £35 per dose. Adult: £40 per dose. Full course is two doses, 6 to 12 months apart. Ask about the combined Hepatitis A & B option if you need both.")); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="hepatitisa-details-section">
  <div class="section-container">
    <div class="hepatitisa-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="hepatitisa-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What Happens When You Come In')); ?></h2>
      <p class="hepatitisa-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A relaxed visit to our Wythenshawe pharmacy')); ?></p>
    </div>

    <div class="hepatitisa-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="hepatitisa-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>We Talk Through Your Trip</h3><p>Itinerary, ages, any allergies — we confirm the right dose for you or your child.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Dose One</h3><p>A quick jab in the upper arm — most people barely notice it.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Booster Booked In</h3><p>Your second dose gets scheduled for 6 to 12 months later, completing the course.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Are Usually Mild</h3><p>A sore arm, or occasionally a slight fever or tiredness for a day.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Adult or Child Booking</h3><p>Pick the right calendar below and we'll take it from there.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private, No Referral</h3><p>Travel hepatitis A vaccination sits outside the NHS, so just book with us directly.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="hepatitisa-faq-section">
  <div class="section-container">
    <div class="hepatitisa-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'HEPATITIS A FAQs')); ?></span>
      </div>
      <h2 class="hepatitisa-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="hepatitisa-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="hepatitisa-faq-item">
          <button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="hepatitisa-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Does my child need a different schedule?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>No — same two doses, same 6 to 12 month gap. Just pick "Child" on the booking calendar below and we'll handle the rest.</p></div></div>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How far ahead of travel should I book?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>At least 2 weeks out gives your body time to respond — though even one dose gives decent short-term cover if you're tight on time.</p></div></div>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Can I get Hepatitis A and B together?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>Yes, there's a combined vaccine if you need cover against both — mention it when you book and we'll set it up.</p></div></div>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Can I relax on food and water hygiene now?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>Not quite yet, especially before dose two. Keep an eye on food safety, water sources and hand hygiene while you travel regardless.</p></div></div>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects come up?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>Usually just a sore arm, or maybe a slight fever or tiredness for a day. Serious reactions are rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed with Adult/Child toggle
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     Adult:  appointmentType=47536344 (Hepatitis A Vaccination (ADULT))
     Child:  appointmentType=76989657 (Hepatitis A Vaccination (CHILD Under 16))
     Location: calendarID=8436365 (Bowland Pharmacy)
     Override per-page via ACF fields 'vaccine_acuity_url_adult' / 'vaccine_acuity_url_child'. -->
<?php
$acuity_url_adult = bp_field( 'vaccine_acuity_url_adult', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536344&calendarID=8436365&ref=embedded_csp' );
$acuity_url_child = bp_field( 'vaccine_acuity_url_child', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=76989657&calendarID=8436365&ref=embedded_csp' );
?>
<section class="hepatitisa-booking-section" id="booking-widget">
  <div class="hepatitisa-booking-blob-1"></div>
  <div class="hepatitisa-booking-blob-2"></div>
  <div class="section-container">
    <div class="hepatitisa-booking-header">
      <h2 class="hepatitisa-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Hepatitis A Vaccination')); ?></h2>
      <p class="hepatitisa-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose adult or child, then pick a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <?php if ( $acuity_url_adult && $acuity_url_child ) : ?>
      <div class="hepatitisa-booking-toggle" role="group" aria-label="Choose age group">
        <button type="button" class="hepatitisa-toggle-btn active" data-url="<?php echo esc_url( $acuity_url_adult ); ?>" onclick="switchBookingAge(this)">Adult</button>
        <button type="button" class="hepatitisa-toggle-btn" data-url="<?php echo esc_url( $acuity_url_child ); ?>" onclick="switchBookingAge(this)">Child (under 16)</button>
      </div>
    <?php endif; ?>

    <div class="hepatitisa-booking-embed">
      <?php if ( $acuity_url_adult ) : ?>
        <iframe id="hepatitisa-acuity-iframe" src="<?php echo esc_url( $acuity_url_adult ); ?>" title="Book your Hepatitis A vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="hepatitisa-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="hepatitisa-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="hepatitisa-cta-section">
  <div class="hepatitisa-cta-bg"></div>
  <div class="section-container">
    <div class="hepatitisa-cta-content">
      <div class="hepatitisa-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Adult &amp; Child</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="hepatitisa-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Cover the Whole Family Before You Go')); ?></h2>
      <p class="hepatitisa-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book adult and child appointments with our Wythenshawe team in one go.")); ?></p>

      <div class="hepatitisa-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
