<?php
/**
 * Template Name: HPV Vaccination
 * @package Bowland_Pharmacy
 *
 * Content adapted from mnctravelclinic.co.uk/service/hpv-vaccinations/.
 * Pricing is TBC per brief — shown as "Contact us for pricing".
 */

get_header();

$prefix = 'hpv';
$vaccine_name = bp_field('vaccine_name', 'HPV');
?>

<!-- HERO SECTION — Pattern A Light -->
<section class="hpv-hero-section">
  <div class="hpv-hero-bg"></div>
  <div class="hpv-hero-dots"></div>
  <div class="hpv-hero-glow-1"></div>
  <div class="hpv-hero-glow-2"></div>
  <div class="section-container">
    <div class="hpv-hero-grid">

      <div class="hpv-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_hero_label', 'PRIVATE VACCINATION SERVICE')); ?></span>
        </div>

        <h1 class="hpv-hero-title">
          <span class="gradient-text"><?php echo esc_html(bp_field('vaccine_hero_title_highlight', 'HPV Vaccination')); ?></span>
          <?php echo esc_html(bp_field('vaccine_hero_title_rest', 'in Wythenshawe, Manchester')); ?>
        </h1>

        <p class="hpv-hero-description">
          <?php echo esc_html(bp_field('vaccine_hero_description', 'Protect against HPV-related cancers with our private vaccination service in Wythenshawe, Manchester. Gardasil 9 guards against nine strains of the virus — for girls and boys, women and men aged 9 to 45.')); ?>
        </p>

        <div class="hpv-hero-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">
            <?php echo esc_html(bp_field('vaccine_cta_text', 'Book HPV Vaccination')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
          </a>
        </div>

        <div class="hpv-hero-trust">
          <div class="hpv-hero-trust-item"><i class="fas fa-shield-virus"></i><span>Gardasil 9</span></div>
          <div class="hpv-hero-trust-item"><i class="fas fa-venus-mars"></i><span>Girls &amp; Boys</span></div>
          <div class="hpv-hero-trust-item"><i class="fas fa-user-doctor"></i><span>No GP Referral Needed</span></div>
        </div>
      </div>

      <div class="hpv-hero-visual">
        <div class="hpv-hero-float-badge">
          <span class="hpv-hero-float-number"><?php echo esc_html(bp_field('vaccine_float_number', '9')); ?></span>
          <span class="hpv-hero-float-label"><?php echo esc_html(bp_field('vaccine_float_label', 'strains covered')); ?></span>
        </div>
        <div class="hpv-trust-card">
          <div class="hpv-trust-card-glow"></div>
          <div class="hpv-trust-card-inner">
            <div class="hpv-trust-card-header">
              <div class="hpv-trust-card-icon"><i class="fas fa-shield-virus"></i></div>
              <span class="hpv-trust-card-label"><?php echo esc_html(bp_field('vaccine_price_name', 'Gardasil 9 Vaccine')); ?></span>
            </div>
            <div class="hpv-trust-card-price">
              <span class="hpv-trust-card-amount hpv-trust-card-amount--text"><?php echo esc_html(bp_field('vaccine_price_amount', 'Contact us')); ?></span>
              <span class="hpv-trust-card-sub"><?php echo esc_html(bp_field('vaccine_price_unit', 'for current pricing')); ?></span>
            </div>
            <div class="hpv-trust-card-divider"></div>
            <ul class="hpv-trust-card-list">
              <li><i class="fas fa-check"></i> <span>Gardasil 9 — covers 9 strains</span></li>
              <li><i class="fas fa-check"></i> <span>2–3 doses depending on age</span></li>
              <li><i class="fas fa-check"></i> <span>For ages 9 to 45</span></li>
            </ul>
            <div class="hpv-trust-card-footer">
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
<section class="hpv-protect-section">
  <div class="section-container">
    <div class="hpv-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'WHY VACCINATE')); ?></span>
      </div>
      <h2 class="hpv-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'The HPV Vaccine')); ?></h2>
      <p class="hpv-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'Cancer protection that works best when given early')); ?></p>
    </div>

    <div class="hpv-protect-grid">
      <div class="hpv-protect-image-wrapper">
        <div class="hpv-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : 'https://images.unsplash.com/photo-1611694449252-02453c27856a?w=900&h=1000&fit=crop';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'HPV vaccination at our Wythenshawe clinic')); ?>" class="hpv-protect-image" />
          <?php endif; ?>
          <div class="hpv-protect-name-tag">
            <span class="name"><?php echo esc_html(bp_field('vaccine_protect_nametag_name', 'Bowland Pharmacy')); ?></span>
            <span class="role"><?php echo esc_html(bp_field('vaccine_protect_nametag_role', 'Private Vaccination Clinic')); ?></span>
          </div>
        </div>
      </div>

      <div class="hpv-protect-content">
        <div class="hpv-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Protects Against HPV-Related Cancers')); ?></span>
        </div>

        <h3 class="hpv-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Gardasil 9 — Broad Protection')); ?></h3>
        <p class="hpv-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', 'HPV is a group of very common viruses. Some strains can cause cervical, genital and throat (oropharyngeal) cancers, as well as genital warts. The Gardasil 9 vaccine protects against nine strains and is most effective when given before any exposure — but it still offers benefits for those already sexually active.')); ?></p>

        <ul class="hpv-protect-features">
          <li class="hpv-protect-feature">
            <div class="icon"><i class="fas fa-shield-virus"></i></div>
            <div class="text"><strong>Prevents Cancers</strong><p>Helps protect against cervical, genital and throat cancers linked to HPV.</p></div>
          </li>
          <li class="hpv-protect-feature">
            <div class="icon"><i class="fas fa-venus-mars"></i></div>
            <div class="text"><strong>Girls &amp; Boys</strong><p>Recommended for both — HPV affects everyone, so vaccinating all genders gives the best protection.</p></div>
          </li>
          <li class="hpv-protect-feature">
            <div class="icon"><i class="fas fa-clock"></i></div>
            <div class="text"><strong>Long-Lasting</strong><p>Protection demonstrated for over 12 years in clinical follow-up, with no booster currently recommended.</p></div>
          </li>
        </ul>

        <div class="hpv-protect-actions">
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta">Call 0161 998 7114</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="hpv-stats-section">
  <div class="section-container">
    <div class="hpv-stats-bar">
      <div class="hpv-stat-item"><div class="icon"><i class="fas fa-shield-virus"></i></div><div class="content"><span class="number">9 Strains</span><span class="label">Gardasil 9</span></div></div>
      <div class="hpv-stat-divider"></div>
      <div class="hpv-stat-item"><div class="icon"><i class="fas fa-venus-mars"></i></div><div class="content"><span class="number">9–45</span><span class="label">Suitable Ages</span></div></div>
      <div class="hpv-stat-divider"></div>
      <div class="hpv-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">12+ Years</span><span class="label">Protection</span></div></div>
      <div class="hpv-stat-divider"></div>
      <div class="hpv-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="hpv-about-section">
  <div class="section-container">
    <div class="hpv-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE FACTS')); ?></span>
      </div>
      <h2 class="hpv-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'What is HPV?')); ?></h2>
      <p class="hpv-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'A very common virus with serious potential consequences')); ?></p>
    </div>

    <div class="hpv-about-content-grid">
      <div class="hpv-about-image-wrapper">
        <div class="hpv-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : 'https://images.unsplash.com/photo-1536010305525-f7aa0834e2c7?w=900&h=900&fit=crop';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Young adults — the HPV vaccine works best when given early')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hpv-about-cards-grid">
        <div class="hpv-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Very Common</h3><p>HPV is a group of more than 200 related viruses and the most common sexually transmitted infection worldwide.</p></div>
        <div class="hpv-info-card"><div class="icon"><i class="fas fa-ribbon"></i></div><h3>Linked to Cancers</h3><p>Certain strains cause cervical, genital and throat cancers — many of which are preventable by vaccination.</p></div>
        <div class="hpv-info-card"><div class="icon"><i class="fas fa-venus-mars"></i></div><h3>Affects Everyone</h3><p>HPV affects all genders, which is why both boys and girls are recommended to have the vaccine.</p></div>
        <div class="hpv-info-card"><div class="icon"><i class="fas fa-clock"></i></div><h3>Best Given Early</h3><p>It works best before any exposure, ideally in the early teens, but still benefits people up to age 45.</p></div>
      </div>
    </div>

    <div class="hpv-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'GOOD TO KNOW')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', 'Vaccination Plus Screening')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', 'The HPV vaccine works best alongside regular cervical screening for women and safe-sex practices. Together they offer the strongest protection against HPV and the cancers it can cause.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Is It For -->
<section class="hpv-needs-section">
  <div class="section-container">
    <div class="hpv-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO IS IT FOR')); ?></span>
      </div>
      <h2 class="hpv-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="hpv-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Recommended for young people, and beneficial up to 45')); ?></p>
    </div>

    <div class="hpv-needs-grid">

      <div class="nhs-card nhs-card-green">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span class="nhs-card-badge">Recommended For</span>
          <h3 class="nhs-card-title">Teenagers &amp; Pre-Teens</h3>
          <p class="nhs-card-desc">The vaccine is most effective when given before any exposure — ideally in the early teens.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Boys &amp; girls from age 9</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Those who missed the school programme</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>2-dose course at younger ages</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

      <div class="nhs-card nhs-card-orange">
        <div class="nhs-card-topbar"></div>
        <div class="nhs-card-content">
          <div class="nhs-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <span class="nhs-card-badge">Also Beneficial For</span>
          <h3 class="nhs-card-title">Adults up to 45</h3>
          <p class="nhs-card-desc">Still worthwhile if you're already sexually active or missed out when you were younger.</p>
          <ul class="nhs-card-list">
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Men &amp; women aged up to 45</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Those not covered as teenagers</span></li>
            <li><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>3-dose course for older ages</span></li>
          </ul>
          <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="nhs-card-btn">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Pricing Section (contact us) -->
<section class="hpv-pricing-section" id="pricing">
  <div class="section-container">
    <div class="hpv-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_pricing_badge', 'PRICING')); ?></span>
      </div>
      <h2 class="hpv-pricing-title"><?php echo esc_html(bp_field('vaccine_pricing_title', 'HPV Vaccination Pricing')); ?></h2>
      <p class="hpv-pricing-desc"><?php echo esc_html(bp_field('vaccine_pricing_desc', 'Cost depends on your age and number of doses')); ?></p>
    </div>

    <div class="hpv-pricing-grid">
      <div class="hpv-pricing-card featured">
        <div class="hpv-pricing-ribbon">Gardasil 9</div>
        <h3 class="hpv-pricing-name"><?php echo esc_html(bp_field('vaccine_price_name', 'HPV Vaccine')); ?></h3>
        <div class="hpv-pricing-amount">
          <span class="price hpv-pricing-amount--text"><?php echo esc_html(bp_field('vaccine_price_amount', 'Contact us')); ?></span>
          <span class="per"><?php echo esc_html(bp_field('vaccine_price_unit', 'for current pricing')); ?></span>
        </div>
        <ul class="hpv-pricing-includes">
          <li><i class="fas fa-check"></i> Gardasil 9 (covers 9 strains)</li>
          <li><i class="fas fa-check"></i> 2–3 doses depending on age</li>
          <li><i class="fas fa-check"></i> Administration by our pharmacist</li>
          <li><i class="fas fa-check"></i> For girls &amp; boys, ages 9–45</li>
        </ul>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button primary-cta">Call for Pricing</a>
      </div>
    </div>

    <p class="hpv-pricing-note"><?php echo esc_html(bp_field('vaccine_price_note', 'Pricing depends on age and the number of doses needed. Please contact us on 0161 998 7114 for current HPV vaccination pricing. Note: the NHS HPV vaccination programme covers eligible young people up to age 25 via school or GP. If you are over 25, or missed out and are no longer eligible on the NHS, our private service is available with no referral needed.')); ?></p>
  </div>
</section>

<!-- What To Expect -->
<section class="hpv-details-section">
  <div class="section-container">
    <div class="hpv-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'WHAT TO EXPECT')); ?></span>
      </div>
      <h2 class="hpv-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="hpv-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'A quick, friendly visit to our Wythenshawe clinic')); ?></p>
    </div>

    <div class="hpv-details-grid">
      <div class="hpv-detail-card"><div class="icon"><i class="fas fa-clipboard-check"></i></div><h3>Quick Check</h3><p>We confirm the right schedule for your age and answer any questions before we start.</p></div>
      <div class="hpv-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>The Injection</h3><p>A quick, well-tolerated injection into the upper arm — the appointment takes under 10 minutes.</p></div>
      <div class="hpv-detail-card"><div class="icon"><i class="fas fa-calendar-days"></i></div><h3>2 or 3 Doses</h3><p>Younger ages usually need 2 doses; older ages need 3. We book your follow-ups for you.</p></div>
      <div class="hpv-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Soreness at the injection site, a mild fever or tiredness can occur and soon settle.</p></div>
      <div class="hpv-detail-card"><div class="icon"><i class="fas fa-venus-mars"></i></div><h3>Girls &amp; Boys</h3><p>Suitable for all genders aged 9 to 45 — HPV affects everyone.</p></div>
      <div class="hpv-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>No referral needed. Contact us for current pricing and to book.</p></div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="hpv-faq-section">
  <div class="section-container">
    <div class="hpv-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_faq_badge', 'HPV FAQs')); ?></span>
      </div>
      <h2 class="hpv-faq-title"><?php echo esc_html(bp_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="hpv-faq-list">
      <div class="hpv-faq-item"><button class="hpv-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">When is the best time to have it?</span><i class="fas fa-plus icon"></i></button><div class="hpv-faq-content"><p>Before any exposure to HPV, ideally in the early teens. That said, it still offers benefits for people up to age 45.</p></div></div>
      <div class="hpv-faq-item"><button class="hpv-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Do boys need it too?</span><i class="fas fa-plus icon"></i></button><div class="hpv-faq-content"><p>Yes. HPV affects all genders, so both boys and girls should be vaccinated for the best protection.</p></div></div>
      <div class="hpv-faq-item"><button class="hpv-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">How many doses are needed?</span><i class="fas fa-plus icon"></i></button><div class="hpv-faq-content"><p>It depends on age at the first dose — usually 2 doses for younger ages and 3 for older ages. We'll confirm your schedule.</p></div></div>
      <div class="hpv-faq-item"><button class="hpv-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">How long does protection last?</span><i class="fas fa-plus icon"></i></button><div class="hpv-faq-content"><p>Protection has been demonstrated for over 12 years in clinical follow-up studies and is likely to be long-lasting. No booster is currently recommended.</p></div></div>
      <div class="hpv-faq-item"><button class="hpv-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">How much does it cost?</span><i class="fas fa-plus icon"></i></button><div class="hpv-faq-content"><p>Cost depends on your age and the number of doses needed. Please contact us on 0161 998 7114 for current pricing.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================
     BOOKING SECTION — Acuity embed
     ============================================
     owner=29286426 · appointmentType=47536556 (HPV Vaccine) · calendarID=8436365 (Wythenshawe; Bowland 8436365)
     Override per-page via ACF field 'vaccine_acuity_url'. -->
<?php
$acuity_url = bp_field( 'vaccine_acuity_url', 'https://app.acuityscheduling.com/schedule.php?owner=29286426&appointmentType=47536556&calendarID=8436365&ref=embedded_csp' );
?>
<section class="hpv-booking-section" id="booking-widget">
  <div class="hpv-booking-blob-1"></div>
  <div class="hpv-booking-blob-2"></div>
  <div class="section-container">
    <div class="hpv-booking-header">
      <h2 class="hpv-booking-title"><?php echo esc_html(bp_field('vaccine_booking_title', 'Book Your HPV Vaccination')); ?></h2>
      <p class="hpv-booking-desc"><?php echo esc_html(bp_field('vaccine_booking_desc', 'Choose a time that suits you at our Wythenshawe clinic')); ?></p>
    </div>

    <div class="hpv-booking-embed">
      <?php if ( $acuity_url ) : ?>
        <iframe src="<?php echo esc_url( $acuity_url ); ?>" title="Book your HPV vaccination appointment in Wythenshawe" width="100%" height="800" frameborder="0" allow="payment"></iframe>
        <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
      <?php else : ?>
        <div class="hpv-booking-placeholder">
          <i class="fas fa-calendar-day"></i>
          <p>Online booking coming soon — call us to book your appointment on <a href="tel:01619987114">0161 998 7114</a>.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="hpv-booking-footer">
      <p>Questions about pricing or doses? Call us on <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>"><?php echo esc_html(bp_field('vaccine_phone_display', '0161 998 7114')); ?></a></p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="hpv-cta-section">
  <div class="hpv-cta-bg"></div>
  <div class="section-container">
    <div class="hpv-cta-content">
      <div class="hpv-cta-badges">
        <span class="badge">Same Day Appointments</span>
        <span class="badge">Girls &amp; Boys</span>
        <span class="badge">No Referral Needed</span>
      </div>

      <h2 class="hpv-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Protect against HPV-related cancers')); ?></h2>
      <p class="hpv-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', 'Book your HPV vaccination with our friendly team in Wythenshawe today. Quick, convenient and professional.')); ?></p>

      <div class="hpv-cta-actions">
        <a href="#booking-widget" onclick="scrollToBooking(); return false;" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
