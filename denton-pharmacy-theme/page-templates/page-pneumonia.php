<?php
/**
 * Template Name: Pneumonia Vaccination
 * @package Denton_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'pneumonia';
$vaccine_name = dp_field('vaccine_name', 'Pneumonia');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="pneumonia-hero-section">
  <div class="pneumonia-hero-bg"></div>
  <div class="pneumonia-hero-dots"></div>
  <div class="pneumonia-hero-glow-1"></div>
  <div class="pneumonia-hero-glow-2"></div>
  <div class="section-container">
    <div class="pneumonia-hero-grid">

      <!-- Left: Content -->
      <div class="pneumonia-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_hero_label', 'PRIVATE VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="pneumonia-hero-title">
          <span class="gradient-text"><?php echo esc_html(dp_field('vaccine_hero_title_highlight', 'Pneumonia Vaccination')); ?></span>
          <?php echo esc_html(dp_field('vaccine_hero_title_rest', 'in Denton, Manchester')); ?>
        </h1>

        <p class="pneumonia-hero-description">
          <?php echo esc_html(dp_field('vaccine_hero_description', "Protect yourself with our pneumonia vaccination service in Denton, Manchester. A single injection recommended for adults 65 and over, those with certain health conditions, or anyone wanting private protection — before travel or any time.")); ?>
        </p>

        <div class="pneumonia-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(dp_field('vaccine_cta_text', 'Book Pneumonia Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?>
          </a>
        </div>

        <div class="pneumonia-hero-trust">
          <div class="pneumonia-hero-trust-item"><i class="fas fa-syringe"></i><span>Single Dose</span></div>
          <div class="pneumonia-hero-trust-item"><i class="fas fa-calendar-check"></i><span>Same-Day Appointments</span></div>
          <div class="pneumonia-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="pneumonia-hero-visual">
        <div class="pneumonia-hero-float-badge">
          <span class="pneumonia-hero-float-number"><?php echo esc_html(dp_field('vaccine_float_number', '1')); ?></span>
          <span class="pneumonia-hero-float-label"><?php echo esc_html(dp_field('vaccine_float_label', 'dose needed')); ?></span>
        </div>
        <div class="pneumonia-trust-card">
          <div class="pneumonia-trust-card-glow"></div>
          <div class="pneumonia-trust-card-inner">
            <div class="pneumonia-trust-card-header">
              <div class="pneumonia-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="pneumonia-trust-card-label"><?php echo esc_html(dp_field('vaccine_price_name', 'Pneumococcal Vaccine')); ?></span>
            </div>
            <div class="pneumonia-trust-card-price">
              <span class="pneumonia-trust-card-amount"><?php echo esc_html(dp_field('vaccine_price_amount', '£55')); ?></span>
              <span class="pneumonia-trust-card-sub"><?php echo esc_html(dp_field('vaccine_price_unit', 'single dose')); ?></span>
            </div>
            <div class="pneumonia-trust-card-divider"></div>
            <ul class="pneumonia-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Just one injection for most adults</span></li>
              <li><i class="fas fa-check"></i> <span>Protection can last many years</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="pneumonia-trust-card-footer">
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
<section class="pneumonia-protect-section">
  <div class="section-container">
    <div class="pneumonia-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="pneumonia-protect-title"><?php echo esc_html(dp_field('vaccine_protect_title', 'The Pneumonia Vaccine')); ?></h2>
      <p class="pneumonia-protect-desc"><?php echo esc_html(dp_field('vaccine_protect_desc', 'One injection can give years of protection against pneumococcal infection')); ?></p>
    </div>

    <div class="pneumonia-protect-grid">
      <div class="pneumonia-protect-image-wrapper">
        <div class="pneumonia-protect-image-card">
          <?php
          $protect_image_id = dp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_protect_image_alt', 'The pneumonia vaccine is a single injection, commonly given to older adults')); ?>" class="pneumonia-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="pneumonia-protect-content">
        <div class="pneumonia-protect-badge-box">
          <i class="fas fa-syringe"></i>
          <span><?php echo esc_html(dp_field('vaccine_protect_highlight', 'One Dose for Most Adults')); ?></span>
        </div>

        <h3 class="pneumonia-protect-subtitle"><?php echo esc_html(dp_field('vaccine_protect_subtitle', 'Straightforward, Long-Lasting Protection')); ?></h3>
        <p class="pneumonia-protect-text"><?php echo esc_html(dp_field('vaccine_protect_text', "The pneumococcal vaccine protects against Streptococcus pneumoniae, a bacteria that can cause pneumonia and other serious infections. It's given as a single injection into the upper arm, and most adults only need the one dose — though some higher-risk individuals may be advised to have a second. Protection can last for many years.")); ?></p>

        <ul class="pneumonia-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="pneumonia-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="pneumonia-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Single Injection</strong><p>Most adults need just one dose — no course to complete or follow-up appointment needed.</p></div>
            </li>
            <li class="pneumonia-protect-feature">
              <div class="icon"><i class="fas fa-user-clock"></i></div>
              <div class="text"><strong>Especially Relevant From 65</strong><p>Recommended for adults 65 and over, and those with certain chronic health conditions.</p></div>
            </li>
            <li class="pneumonia-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Can Combine With Flu Jab</strong><p>Can be given at the same appointment as your flu vaccination, saving you a return visit.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="pneumonia-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta">Call 0161 336 2548</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="pneumonia-stats-section">
  <div class="section-container">
    <div class="pneumonia-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="pneumonia-stat-divider"></div><?php endif; ?>
        <div class="pneumonia-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="pneumonia-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">1 Dose</span><span class="label">For Most Adults</span></div></div>
        <div class="pneumonia-stat-divider"></div>
        <div class="pneumonia-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">Many Years</span><span class="label">Protection</span></div></div>
        <div class="pneumonia-stat-divider"></div>
        <div class="pneumonia-stat-item"><div class="icon"><i class="fas fa-user-clock"></i></div><div class="content"><span class="number">65+</span><span class="label">Key Age Group</span></div></div>
        <div class="pneumonia-stat-divider"></div>
        <div class="pneumonia-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="pneumonia-about-section">
  <div class="section-container">
    <div class="pneumonia-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="pneumonia-about-title"><?php echo esc_html(dp_field('vaccine_about_title', 'What is Pneumococcal Disease?')); ?></h2>
      <p class="pneumonia-about-desc"><?php echo esc_html(dp_field('vaccine_about_desc', 'A bacterial infection that can affect the lungs and beyond')); ?></p>
    </div>

    <div class="pneumonia-about-content-grid">
      <div class="pneumonia-about-image-wrapper">
        <div class="pneumonia-about-image-card">
          <?php
          $about_image_id = dp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1778612506355-b35daed59ea9?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(dp_field('vaccine_about_image_alt', 'Chest X-ray showing the lungs — pneumococcal bacteria can cause lung infection')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="pneumonia-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="pneumonia-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="pneumonia-info-card"><div class="icon"><i class="fas fa-lungs"></i></div><h3>Bacterial Infection</h3><p>Caused by Streptococcus pneumoniae, which can lead to pneumonia and other infections.</p></div>
          <div class="pneumonia-info-card"><div class="icon"><i class="fas fa-user-clock"></i></div><h3>Higher Risk With Age</h3><p>Risk increases from age 65, and for those with certain chronic health conditions.</p></div>
          <div class="pneumonia-info-card"><div class="icon"><i class="fas fa-lungs-virus"></i></div><h3>Existing Conditions Matter</h3><p>Lung or heart disease, diabetes, and a weakened immune system all increase risk.</p></div>
          <div class="pneumonia-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>Preventable</h3><p>A single vaccine dose gives strong, long-lasting protection for most adults.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="pneumonia-about-callout">
      <div class="badge"><?php echo esc_html(dp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(dp_field('vaccine_callout_title', 'NHS or Private, Depending on Your Circumstances')); ?></h3>
      <p><?php echo esc_html(dp_field('vaccine_callout_text', "The NHS offers this vaccine free to adults 65+, children under 2, and those with certain chronic conditions. If you don't meet those criteria but would still like protection, we offer it privately with no referral needed.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="pneumonia-needs-section">
  <div class="section-container">
    <div class="pneumonia-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="pneumonia-needs-title"><?php echo esc_html(dp_field('vaccine_needs_title', 'Do you need this vaccine?')); ?></h2>
      <p class="pneumonia-needs-desc"><?php echo esc_html(dp_field('vaccine_needs_desc', 'Especially recommended for older adults and those with certain health conditions')); ?></p>
    </div>

    <div class="pneumonia-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Adults 65 and Over</h3>
          <p class="nhs-card-desc">Risk of serious pneumococcal infection rises with age, making vaccination especially worthwhile from 65.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Adults aged 65 and over</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Smokers and former smokers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Healthcare workers &amp; carers</span></li>
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
          <h3 class="nhs-card-title">Chronic Health Conditions</h3>
          <p class="nhs-card-desc">Worth prioritising if you have a condition that raises your risk of serious infection.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Lung disease (COPD, asthma)</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Heart, kidney or liver disease, diabetes</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Weakened immune system</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pneumonia-pricing-section" id="pricing">
  <div class="section-container">
    <div class="pneumonia-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="pneumonia-pricing-title"><?php echo esc_html(dp_field('vaccine_pricing_title', 'Pneumonia Vaccination Pricing')); ?></h2>
      <p class="pneumonia-pricing-desc"><?php echo esc_html(dp_field('vaccine_pricing_desc', 'One simple price for the full dose — no hidden extras')); ?></p>
    </div>

    <div class="pneumonia-pricing-grid">
      <div class="pneumonia-pricing-card featured">
        <div class="pneumonia-pricing-ribbon">Single Dose</div>
        <h3 class="pneumonia-pricing-name"><?php echo esc_html(dp_field('vaccine_price_name', 'Pneumococcal Vaccine')); ?></h3>
        <div class="pneumonia-pricing-amount">
          <span class="price"><?php echo esc_html(dp_field('vaccine_price_amount', '£55')); ?></span>
          <span class="per"><?php echo esc_html(dp_field('vaccine_price_unit', 'single dose')); ?></span>
        </div>
        <ul class="pneumonia-pricing-includes">
          <li><i class="fas fa-check"></i> One injection</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> Suitability check &amp; advice</li>
          <li><i class="fas fa-check"></i> Can combine with your flu jab</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="pneumonia-pricing-note"><?php echo esc_html(dp_field('vaccine_price_note', 'Free on the NHS for adults 65+, children under 2, and those with qualifying chronic conditions. This private service is for anyone outside those groups who would like the vaccine.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="pneumonia-details-section">
  <div class="section-container">
    <div class="pneumonia-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="pneumonia-details-title"><?php echo esc_html(dp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="pneumonia-details-desc"><?php echo esc_html(dp_field('vaccine_details_desc', 'A simple, friendly visit to our Denton clinic')); ?></p>
    </div>

    <div class="pneumonia-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="pneumonia-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="pneumonia-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Quick Check</h3><p>We confirm the vaccine is suitable for you and check whether you qualify for it on the NHS first.</p></div>
        <div class="pneumonia-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Single Injection</h3><p>Given in the upper arm — most people feel only a brief scratch.</p></div>
        <div class="pneumonia-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Combine With Flu Jab</h3><p>Happy to give both vaccines at the same appointment if you're due your flu jab too.</p></div>
        <div class="pneumonia-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild — soreness at the injection site, a slight fever, tiredness or headache for a day or two.</p></div>
        <div class="pneumonia-detail-card"><div class="icon"><i class="fas fa-user-clock"></i></div><h3>Suitable for Most Adults</h3><p>Especially relevant from 65, or with certain chronic health conditions — we'll advise on suitability.</p></div>
        <div class="pneumonia-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>NHS or Private</h3><p>Free on the NHS if you're eligible; otherwise we offer it privately with no referral needed.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="pneumonia-faq-section">
  <div class="section-container">
    <div class="pneumonia-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(dp_field('vaccine_faq_badge', 'PNEUMONIA FAQs')); ?></span>
      </div>
      <h2 class="pneumonia-faq-title"><?php echo esc_html(dp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="pneumonia-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="pneumonia-faq-item">
          <button class="pneumonia-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="pneumonia-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="pneumonia-faq-item"><button class="pneumonia-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Am I eligible for this free on the NHS?</span><i class="fas fa-plus icon"></i></button><div class="pneumonia-faq-content"><p>The NHS offers it free to adults 65 and over, children under 2, and people with certain chronic health conditions. We can check your eligibility, and offer it privately if you don't qualify but would still like protection.</p></div></div>
        <div class="pneumonia-faq-item"><button class="pneumonia-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Do I need more than one dose?</span><i class="fas fa-plus icon"></i></button><div class="pneumonia-faq-content"><p>Most adults only need a single dose. Some people at higher risk may be advised to have a second dose — your pharmacist can talk this through with you.</p></div></div>
        <div class="pneumonia-faq-item"><button class="pneumonia-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Can I have this with my flu vaccination?</span><i class="fas fa-plus icon"></i></button><div class="pneumonia-faq-content"><p>Yes — the pneumonia and flu vaccines can be given at the same appointment, in different arms if you prefer.</p></div></div>
        <div class="pneumonia-faq-item"><button class="pneumonia-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">How long does protection last?</span><i class="fas fa-plus icon"></i></button><div class="pneumonia-faq-content"><p>Protection can last for many years after a single dose, though your pharmacist can advise if a repeat dose is ever recommended for your circumstances.</p></div></div>
        <div class="pneumonia-faq-item"><button class="pneumonia-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="pneumonia-faq-content"><p>Most people just get some soreness, redness or swelling at the injection site, and occasionally a mild fever, tiredness or headache for a day or two. Serious allergic reactions are extremely rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=47536584  (Pneumonia Vaccination)
     Location:       calendarID=10903457       (Denton Pharmacy)
                     Bowland uses calendarID=8436365
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = dp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536584&calendarID=10903457&ref=embedded_csp' );
?>
<section class="pneumonia-booking-section" id="booking-widget">
  <div class="pneumonia-booking-blob-1"></div>
  <div class="pneumonia-booking-blob-2"></div>
  <div class="section-container">
    <div class="pneumonia-booking-header">
      <h2 class="pneumonia-booking-title"><?php echo esc_html(dp_field('vaccine_booking_title', 'Book Your Pneumonia Vaccination')); ?></h2>
      <p class="pneumonia-booking-desc"><?php echo esc_html(dp_field('vaccine_booking_desc', 'Choose a time that suits you at our Denton clinic')); ?></p>
    </div>

    <div class="pneumonia-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Pneumonia vaccination appointment in Denton" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="pneumonia-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01613362548">0161 336 2548</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="pneumonia-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>"><?php echo esc_html(dp_field('vaccine_phone_display', '0161 336 2548')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="pneumonia-cta-section">
  <div class="pneumonia-cta-bg"></div>
  <div class="section-container">
    <div class="pneumonia-cta-content">
      <div class="pneumonia-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Single Dose</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="pneumonia-cta-title"><?php echo esc_html(dp_field('vaccine_cta_title', 'Protect yourself against pneumonia')); ?></h2>
      <p class="pneumonia-cta-desc"><?php echo esc_html(dp_field('vaccine_cta_desc', 'Book your pneumonia vaccination with our friendly team in Denton today. Quick, convenient and professional.')); ?></p>

      <div class="pneumonia-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(dp_field('vaccine_phone', '01613362548')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(dp_field('vaccine_phone_display', 'Call 0161 336 2548')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
