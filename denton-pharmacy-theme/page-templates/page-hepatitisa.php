<?php
/**
 * Template Name: Hepatitis A Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar with Adult/Child toggle, final CTA.
 */

get_header();

$prefix = 'hepatitisa';
$vaccine_name = dp_field('vaccine_name', 'Hepatitis A');
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
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'TRAVEL VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="hepatitisa-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Hepatitis A Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="hepatitisa-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect your liver health before travelling with our hepatitis A vaccination service in Denton, Manchester. A two-dose course giving up to 25 years of protection, for both adults and children.")); ?>
        </p>

        <div class="hepatitisa-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Hepatitis A Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
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
          <span class="hepatitisa-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '25')); ?></span>
          <span class="hepatitisa-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'years protection')); ?></span>
        </div>
        <div class="hepatitisa-trust-card">
          <div class="hepatitisa-trust-card-glow"></div>
          <div class="hepatitisa-trust-card-inner">
            <div class="hepatitisa-trust-card-header">
              <div class="hepatitisa-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="hepatitisa-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Hepatitis A Vaccine')); ?></span>
            </div>
            <div class="hepatitisa-trust-card-price">
              <span class="hepatitisa-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£65')); ?></span>
              <span class="hepatitisa-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="hepatitisa-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Hepatitis A Vaccine')); ?></h2>
      <p class="hepatitisa-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'Long-lasting protection with a straightforward two-dose course')); ?></p>
    </div>

    <div class="hepatitisa-protect-grid">
      <div class="hepatitisa-protect-image-wrapper">
        <div class="hepatitisa-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1594051182587-0bd78bba36e7?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'Plasters after a vaccination — the hepatitis A course is given as two injections')); ?>" class="hepatitisa-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hepatitisa-protect-content">
        <div class="hepatitisa-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'Two Doses, Up to 25 Years of Protection')); ?></span>
        </div>

        <h3 class="hepatitisa-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Simple, Long-Lasting Cover')); ?></h3>
        <p class="hepatitisa-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "Hepatitis A is a contagious liver infection, spread through contaminated food or water, or close contact with someone who's infected. It's more common across South Asia, Southeast Asia, Africa, and Central and South America. The vaccine is given as an injection into the upper arm — one dose first, then a booster 6 to 12 months later for protection lasting up to 25 years.")); ?></p>

        <ul class="hepatitisa-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="hepatitisa-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="hepatitisa-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>First Dose, Then a Booster</strong><p>One dose gives around a year of protection; the second dose extends this to up to 25 years.</p></div>
            </li>
            <li class="hepatitisa-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Book at Least 2 Weeks Ahead</strong><p>Have your first dose at least 2 weeks before travel so your body has time to respond.</p></div>
            </li>
            <li class="hepatitisa-protect-feature">
              <div class="icon"><i class="fas fa-child-reaching"></i></div>
              <div class="text"><strong>Adult &amp; Child Appointments</strong><p>We can book the age-appropriate vaccine for both adults and children — choose the calendar that suits you below.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="hepatitisa-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
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
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="hepatitisa-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Hepatitis A?')); ?></h2>
      <p class="hepatitisa-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A liver infection linked to contaminated food and water')); ?></p>
    </div>

    <div class="hepatitisa-about-content-grid">
      <div class="hepatitisa-about-image-wrapper">
        <div class="hepatitisa-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1552912470-ee2e96439539?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Street food market — hepatitis A can spread through contaminated food')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hepatitisa-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="hepatitisa-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="hepatitisa-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Liver Infection</h3><p>Caused by the hepatitis A virus, spread through contaminated food, water or close contact.</p></div>
          <div class="hepatitisa-info-card"><div class="icon"><i class="fas fa-temperature-high"></i></div><h3>Fever &amp; Jaundice</h3><p>Symptoms include fever, tiredness, vomiting, dark urine and yellowing of the skin or eyes.</p></div>
          <div class="hepatitisa-info-card"><div class="icon"><i class="fas fa-earth-asia"></i></div><h3>Found Widely</h3><p>More common across South Asia, Southeast Asia, Africa, and Central and South America.</p></div>
          <div class="hepatitisa-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>A two-dose vaccine course gives strong, long-lasting protection.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="hepatitisa-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'Keep Up Food &amp; Water Precautions')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "Vaccination is one dose after your first jab lowers your risk substantially, but it's still worth being careful with food, water and hand hygiene while travelling — especially before your second dose.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="hepatitisa-needs-section">
  <div class="section-container">
    <div class="hepatitisa-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="hepatitisa-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="hepatitisa-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Recommended for travellers to higher-risk regions, of any age')); ?></p>
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
          <h3 class="nhs-card-title">Families Travelling Together</h3>
          <p class="nhs-card-desc">Suitable for both adults and children, making it easy to protect the whole family before a trip.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Travel to South or Southeast Asia</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Africa, Central or South America</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Families with children</span></li>
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
          <h3 class="nhs-card-title">Backpackers &amp; Repeat Travellers</h3>
          <p class="nhs-card-desc">Worth prioritising if you eat street food, stay in local accommodation, or travel to the same regions often.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Street food &amp; local dining</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Basic or rural accommodation</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Repeat travel to affected regions</span></li>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="hepatitisa-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Hepatitis A Vaccination Pricing')); ?></h2>
      <p class="hepatitisa-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'Priced per dose — we will confirm your booster timing at your first appointment')); ?></p>
    </div>

    <div class="hepatitisa-pricing-grid">
      <div class="hepatitisa-pricing-card featured">
        <div class="hepatitisa-pricing-ribbon">Per Dose</div>
        <h3 class="hepatitisa-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Hepatitis A Vaccine')); ?></h3>
        <div class="hepatitisa-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£65')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'per dose')); ?></span>
        </div>
        <ul class="hepatitisa-pricing-includes">
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Adult &amp; child appointments available</li>
          <li><i class="fas fa-check"></i> Travel risk assessment &amp; advice</li>
          <li><i class="fas fa-check"></i> Booster reminder for your second dose</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="hepatitisa-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Price shown is per dose. The full course is two doses, 6 to 12 months apart. A combined Hepatitis A &amp; B option is also available — ask our team.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="hepatitisa-details-section">
  <div class="section-container">
    <div class="hepatitisa-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="hepatitisa-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="hepatitisa-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="hepatitisa-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="hepatitisa-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Travel Risk Check</h3><p>We talk through your itinerary and confirm the vaccine and dosing are right for you or your child.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>First Dose</h3><p>Given in the upper arm — most people feel only a brief scratch.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>Booster Dose</h3><p>We book your second dose 6 to 12 months later to complete the course.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — a sore arm, slight fever or tiredness for a day or so.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-child-reaching"></i></div><h3>Adult &amp; Child Options</h3><p>Choose the age-appropriate booking calendar when you're ready to book.</p></div>
        <div class="hepatitisa-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Not available on the NHS for travel purposes, so we offer it privately with no referral needed.</p></div>
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
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'HEPATITIS A FAQs')); ?></span>
      </div>
      <h2 class="hepatitisa-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
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
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses does my child need?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>The same two-dose schedule as adults — one dose now, then a booster 6 to 12 months later. Use the "Child" option on the booking calendar below to get the age-appropriate appointment.</p></div></div>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How soon before travel should I have it?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>At least 2 weeks before you travel, so your body has time to build a response. One dose already gives good short-term protection.</p></div></div>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Is there a combined vaccine with Hepatitis B?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>Yes — a combined Hepatitis A &amp; B vaccine is available if you need protection against both. Ask our team about this option when you book.</p></div></div>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Do I still need to be careful with food and water?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>Yes, especially before your second dose. Good food safety, safe drinking water and hand hygiene are still worth keeping up even after vaccination.</p></div></div>
        <div class="hepatitisa-faq-item"><button class="hepatitisa-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="hepatitisa-faq-content"><p>Most people just get a sore arm, slight fever or tiredness for a day or so. Serious side effects are rare.</p></div></div>
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
     Location: calendarID=10903457 (Denton Pharmacy) — Bowland uses calendarID=8436365
     Override per-page via ACF fields 'vaccine_acuity_url_adult' / 'vaccine_acuity_url_child'. -->
<?php
$acuity_url_adult = dp_field( 'vaccine_acuity_url_adult', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536344&calendarID=10903457&ref=embedded_csp' );
$acuity_url_child = dp_field( 'vaccine_acuity_url_child', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=76989657&calendarID=10903457&ref=embedded_csp' );
?>
<section class="hepatitisa-booking-section" id="booking-widget">
  <div class="hepatitisa-booking-blob-1"></div>
  <div class="hepatitisa-booking-blob-2"></div>
  <div class="section-container">
    <div class="hepatitisa-booking-header">
      <h2 class="hepatitisa-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Hepatitis A Vaccination')); ?></h2>
      <p class="hepatitisa-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose adult or child, then pick a time that suits you at our Denton clinic')); ?></p>
    </div>

    <?php if ( $acuity_url_adult && $acuity_url_child ) : ?>
      <div class="hepatitisa-booking-toggle" role="group" aria-label="Choose age group">
        <button type="button" class="hepatitisa-toggle-btn active" data-url="<?php echo esc_url( $acuity_url_adult ); ?>" onclick="switchBookingAge(this)">Adult</button>
        <button type="button" class="hepatitisa-toggle-btn" data-url="<?php echo esc_url( $acuity_url_child ); ?>" onclick="switchBookingAge(this)">Child (under 16)</button>
      </div>
    <?php endif; ?>

    <div class="hepatitisa-booking-embed">
      <?php if ( $acuity_url_adult ) : ?>
        <iframe id="hepatitisa-acuity-iframe" src="<?php echo esc_url( $acuity_url_adult ); ?>" title="Book your Hepatitis A vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="hepatitisa-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="hepatitisa-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
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

      <h2 class="hepatitisa-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself before you travel')); ?></h2>
      <p class="hepatitisa-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your hepatitis A vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="hepatitisa-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
