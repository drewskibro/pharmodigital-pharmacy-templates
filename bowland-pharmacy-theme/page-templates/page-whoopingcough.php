<?php
/**
 * Template Name: Whooping Cough Vaccination
 * @package Bowland_Pharmacy
 *
 * Private vaccination service page. Structure: hero (H1 w/ location + badge + CTA),
 * what is / understanding, stats, who it's for, pricing, what to expect, FAQ,
 * embedded Acuity booking calendar, final CTA.
 */

get_header();

$prefix = 'whoopingcough';
$vaccine_name = bp_field('vaccine_name', 'Whooping Cough');
?>

<!-- ============================================
     HERO SECTION — Pattern A Light
     Badge, title (location in H1), description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="whoopingcough-hero-section">
  <div class="whoopingcough-hero-bg"></div>
  <div class="whoopingcough-hero-dots"></div>
  <div class="whoopingcough-hero-glow-1"></div>
  <div class="whoopingcough-hero-glow-2"></div>
  <div class="section-container">
    <div class="whoopingcough-hero-grid">

      <!-- Left: Content -->
      <div class="whoopingcough-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'PRIVATE VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="whoopingcough-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'Whooping Cough Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="whoopingcough-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', "One injection can pass real protection on to your baby before they're born. Our Wythenshawe pharmacy offers the whooping cough vaccine, especially recommended during pregnancy and for anyone close to young babies.")); ?>
        </p>

        <div class="whoopingcough-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Whooping Cough Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="whoopingcough-hero-trust">
          <div class="whoopingcough-hero-trust-item"><i class="fas fa-syringe"></i><span>Single Dose</span></div>
          <div class="whoopingcough-hero-trust-item"><i class="fas fa-person-pregnant"></i><span>Safe in Pregnancy</span></div>
          <div class="whoopingcough-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <!-- Right: Pricing trust card + floating badge -->
      <div class="whoopingcough-hero-visual">
        <div class="whoopingcough-hero-float-badge">
          <span class="whoopingcough-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '1')); ?></span>
          <span class="whoopingcough-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'dose needed')); ?></span>
        </div>
        <div class="whoopingcough-trust-card">
          <div class="whoopingcough-trust-card-glow"></div>
          <div class="whoopingcough-trust-card-inner">
            <div class="whoopingcough-trust-card-header">
              <div class="whoopingcough-trust-card-icon"><i class="fas fa-syringe"></i></div>
              <span class="whoopingcough-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Whooping Cough Vaccine')); ?></span>
            </div>
            <div class="whoopingcough-trust-card-price">
              <span class="whoopingcough-trust-card-amount"><?php echo esc_html(bp_field('vaccine_price_amount', '£49')); ?></span>
              <span class="whoopingcough-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'single dose')); ?></span>
            </div>
            <div class="whoopingcough-trust-card-divider"></div>
            <ul class="whoopingcough-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Just one injection</span></li>
              <li><i class="fas fa-check"></i> <span>Safe during every pregnancy</span></li>
              <li><i class="fas fa-check"></i> <span>Same-day appointments</span></li>
            </ul>
            <div class="whoopingcough-trust-card-footer">
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
<section class="whoopingcough-protect-section">
  <div class="section-container">
    <div class="whoopingcough-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="whoopingcough-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'About the Whooping Cough Vaccine')); ?></h2>
      <p class="whoopingcough-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'One injection matters most in pregnancy and around newborns')); ?></p>
    </div>

    <div class="whoopingcough-protect-grid">
      <div class="whoopingcough-protect-image-wrapper">
        <div class="whoopingcough-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1691139600923-8fba078704b0?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'A pregnant patient receiving the whooping cough vaccine in the upper arm')); ?>" class="whoopingcough-protect-image" />
          <?php endif; ?>
        </div>
      </div>

      <div class="whoopingcough-protect-content">
        <div class="whoopingcough-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Passes Protection to Your Baby')); ?></span>
        </div>

        <h3 class="whoopingcough-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Small Effort, Real Payoff for Your Baby')); ?></h3>
        <p class="whoopingcough-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', "Whooping cough spreads easily and brings on violent coughing fits that can drag on for 10 to 12 weeks or more. One injection covers you, though protection fades — adults are advised to top up roughly every 10 years. It's safe in every pregnancy, ideally between 16 and 32 weeks, and passes protective antibodies to your baby ahead of their own jab at 8 weeks old.")); ?></p>

        <ul class="whoopingcough-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="whoopingcough-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="whoopingcough-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>One and Done</strong><p>A single dose — no follow-up appointment for most adults.</p></div>
            </li>
            <li class="whoopingcough-protect-feature">
              <div class="icon"><i class="fas fa-person-pregnant"></i></div>
              <div class="text"><strong>Recommended Every Pregnancy</strong><p>Ideally between 16 and 32 weeks, so your baby gets protection before birth.</p></div>
            </li>
            <li class="whoopingcough-protect-feature">
              <div class="icon"><i class="fas fa-baby"></i></div>
              <div class="text"><strong>Good for Anyone Near Newborns</strong><p>Carers, grandparents and anyone spending regular time with young babies should consider it too.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="whoopingcough-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="whoopingcough-stats-section">
  <div class="section-container">
    <div class="whoopingcough-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="whoopingcough-stat-divider"></div><?php endif; ?>
        <div class="whoopingcough-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="whoopingcough-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">1 Dose</span><span class="label">Single Injection</span></div></div>
        <div class="whoopingcough-stat-divider"></div>
        <div class="whoopingcough-stat-item"><div class="icon"><i class="fas fa-person-pregnant"></i></div><div class="content"><span class="number">16–32 Wks</span><span class="label">Ideal Pregnancy Window</span></div></div>
        <div class="whoopingcough-stat-divider"></div>
        <div class="whoopingcough-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">10 Years</span><span class="label">Booster Interval</span></div></div>
        <div class="whoopingcough-stat-divider"></div>
        <div class="whoopingcough-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="whoopingcough-about-section">
  <div class="section-container">
    <div class="whoopingcough-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="whoopingcough-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'Whooping Cough, in Brief')); ?></h2>
      <p class="whoopingcough-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'Highly contagious, and hardest on the youngest babies')); ?></p>
    </div>

    <div class="whoopingcough-about-content-grid">
      <div class="whoopingcough-about-image-wrapper">
        <div class="whoopingcough-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1552819289-e14fbbcea868?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'A sleeping newborn — babies are too young to be vaccinated until 8 weeks')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="whoopingcough-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="whoopingcough-info-card">
            <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="whoopingcough-info-card"><div class="icon"><i class="fas fa-lungs"></i></div><h3>A Bacterial Infection</h3><p>Bordetella pertussis spreads through respiratory droplets from coughs and sneezes.</p></div>
          <div class="whoopingcough-info-card"><div class="icon"><i class="fas fa-wind"></i></div><h3>Coughing Fits That Drag On</h3><p>Intense coughing spells that can run 10 to 12 weeks or longer.</p></div>
          <div class="whoopingcough-info-card"><div class="icon"><i class="fas fa-baby"></i></div><h3>Toughest on Newborns</h3><p>Babies aren't old enough for their own vaccine until 8 weeks, which is what makes them so vulnerable.</p></div>
          <div class="whoopingcough-info-card"><div class="icon"><i class="fas fa-shield-virus"></i></div><h3>One Jab Helps a Lot</h3><p>A single dose protects you and helps stop it reaching vulnerable people around you.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="whoopingcough-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', "Every Pregnancy, Not Just the First")); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', "It's safe to have this vaccine in every pregnancy you have, not a one-time thing. Repeating it each time means each baby gets their own dose of passed-on antibodies before birth.")); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="whoopingcough-needs-section">
  <div class="section-container">
    <div class="whoopingcough-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="whoopingcough-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Two Groups Where This Matters')); ?></h2>
      <p class="whoopingcough-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Pregnancy and close contact with young babies both raise the stakes')); ?></p>
    </div>

    <div class="whoopingcough-needs-grid">

      <!-- Recommended (green) -->
      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Pregnant Women</h3>
          <p class="nhs-card-desc">Timed between 16 and 32 weeks, it gives your baby a head start before their own jab is due.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>16 to 32 weeks pregnant</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Safe in every pregnancy</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Passes protection to your baby</span></li>
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
          <h3 class="nhs-card-title">Carers &amp; Family of Newborns</h3>
          <p class="nhs-card-desc">If you're often around young babies, or it's been a decade since your last dose, this is for you.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Grandparents &amp; family caregivers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Healthcare &amp; childcare workers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Overdue a 10-year booster</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="whoopingcough-pricing-section" id="pricing">
  <div class="section-container">
    <div class="whoopingcough-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="whoopingcough-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'Pricing')); ?></h2>
      <p class="whoopingcough-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'One flat price, one dose, nothing hidden')); ?></p>
    </div>

    <div class="whoopingcough-pricing-grid">
      <div class="whoopingcough-pricing-card featured">
        <div class="whoopingcough-pricing-ribbon">Single Dose</div>
        <h3 class="whoopingcough-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'Whooping Cough Vaccine')); ?></h3>
        <div class="whoopingcough-pricing-amount">
          <span class="price"><?php echo esc_html(bp_field('vaccine_price_amount', '£49')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'single dose')); ?></span>
        </div>
        <ul class="whoopingcough-pricing-includes">
          <li><i class="fas fa-check"></i> One injection</li>
          <li><i class="fas fa-check"></i> Given by our pharmacist</li>
          <li><i class="fas fa-check"></i> Suitability check and advice</li>
          <li><i class="fas fa-check"></i> Safe during pregnancy</li>
        </ul>
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Now</a>
      </div>
    </div>

    <p class="whoopingcough-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', "This one's also free on the NHS for pregnant women and as part of the childhood schedule — worth asking your GP or midwife about that route if it applies to you.")); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="whoopingcough-details-section">
  <div class="section-container">
    <div class="whoopingcough-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="whoopingcough-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What Happens at the Appointment')); ?></h2>
      <p class="whoopingcough-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A quick, relaxed visit to our Wythenshawe pharmacy')); ?></p>
    </div>

    <div class="whoopingcough-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="whoopingcough-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="whoopingcough-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>A Quick Suitability Check</h3><p>Including your stage of pregnancy, if that applies.</p></div>
        <div class="whoopingcough-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>One Injection</h3><p>In the upper arm — quick, and most people barely notice it.</p></div>
        <div class="whoopingcough-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Side Effects Are Usually Mild</h3><p>A sore arm, maybe a slight fever or tiredness for a day or two.</p></div>
        <div class="whoopingcough-detail-card"><div class="icon"><i class="fas fa-person-pregnant"></i></div><h3>Safe in Pregnancy</h3><p>Recommended in every pregnancy, ideally between 16 and 32 weeks.</p></div>
        <div class="whoopingcough-detail-card"><div class="icon"><i class="fas fa-repeat"></i></div><h3>Top Up Every 10 Years</h3><p>Protection fades over time, so adults are advised to have a booster roughly a decade on.</p></div>
        <div class="whoopingcough-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>NHS or Private</h3><p>Free on the NHS for pregnant women and the childhood schedule; otherwise book with us privately.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="whoopingcough-faq-section">
  <div class="section-container">
    <div class="whoopingcough-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'WHOOPING COUGH FAQs')); ?></span>
      </div>
      <h2 class="whoopingcough-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="whoopingcough-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="whoopingcough-faq-item">
          <button class="whoopingcough-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="whoopingcough-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="whoopingcough-faq-item"><button class="whoopingcough-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Why does pregnancy make this a priority?</span><i class="fas fa-plus icon"></i></button><div class="whoopingcough-faq-content"><p>Whooping cough hits young babies hardest, and they're not vaccinated themselves until 8 weeks old. Having the jab while pregnant passes protective antibodies across, covering those first vulnerable weeks.</p></div></div>
        <div class="whoopingcough-faq-item"><button class="whoopingcough-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">I've had it before — do I need it again this pregnancy?</span><i class="fas fa-plus icon"></i></button><div class="whoopingcough-faq-content"><p>Yes — it's safe and recommended every time, not just your first pregnancy, so each baby gets their own dose of passed-on antibodies.</p></div></div>
        <div class="whoopingcough-faq-item"><button class="whoopingcough-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">How do I know if I'm due a booster?</span><i class="fas fa-plus icon"></i></button><div class="whoopingcough-faq-content"><p>If it's been over 10 years since your last dose, it's worth topping up — more so if you're regularly around young babies.</p></div></div>
        <div class="whoopingcough-faq-item"><button class="whoopingcough-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Can I get this free through the NHS?</span><i class="fas fa-plus icon"></i></button><div class="whoopingcough-faq-content"><p>Yes, for pregnant women and as part of the routine childhood schedule — ask your GP or midwife about that route. We offer it privately here too, if that's not an option or you'd rather not wait.</p></div></div>
        <div class="whoopingcough-faq-item"><button class="whoopingcough-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">What side effects should I watch for?</span><i class="fas fa-plus icon"></i></button><div class="whoopingcough-faq-content"><p>Usually just soreness, redness or swelling at the injection site, sometimes a mild fever, tiredness or headache for a day or two. Serious reactions are very rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     Acuity account: owner=29286426 (shared PharmoDigital/MNC account)
     This page:      appointmentType=63358774  (Whooping Cough)
     Location:       calendarID=8436365       (Bowland Pharmacy)
     To change service/location, edit the appointmentType / calendarID in the
     default URL below, or override per-page via the ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=63358774&calendarID=8436365&ref=embedded_csp' );
?>
<section class="whoopingcough-booking-section" id="booking-widget">
  <div class="whoopingcough-booking-blob-1"></div>
  <div class="whoopingcough-booking-blob-2"></div>
  <div class="section-container">
    <div class="whoopingcough-booking-header">
      <h2 class="whoopingcough-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your Whooping Cough Vaccination')); ?></h2>
      <p class="whoopingcough-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Bowland clinic')); ?></p>
    </div>

    <div class="whoopingcough-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your Whooping Cough vaccination appointment in Bowland" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="whoopingcough-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="whoopingcough-booking-footer">
      <p>Can't find a suitable time? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="whoopingcough-cta-section">
  <div class="whoopingcough-cta-bg"></div>
  <div class="section-container">
    <div class="whoopingcough-cta-content">
      <div class="whoopingcough-cta-badges">
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Safe in Pregnancy</span>
          <span class="badge">No Referral Needed</span>
        <?php endif; ?>
      </div>

      <h2 class="whoopingcough-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Pass the Protection On')); ?></h2>
      <p class="whoopingcough-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', "Book your whooping cough vaccine with our Wythenshawe team — quick, and it matters.")); ?></p>

      <div class="whoopingcough-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
