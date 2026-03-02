<?php
/**
 * Template Name: Hepatitis Vaccination
 * @package Easy_Pharmacy
 */

get_header();

$vaccine_name = ep_field('vaccine_name', 'Hepatitis A & B');
?>

<!-- Breadcrumb -->
<div class="hepatitis-breadcrumb">
  <div class="section-container">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <span class="separator">/</span>
    <a href="<?php echo esc_url(ep_field('vaccine_parent_url', '/travel-health/')); ?>">Travel Health</a>
    <span class="separator">/</span>
    <span class="current"><?php echo esc_html($vaccine_name); ?> Vaccination</span>
  </div>
</div>

<!-- Hero Section -->
<?php
$hero_image_id  = ep_field( 'vaccine_hero_image' );
$hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'full' ) : '';
?>
<section class="hepatitis-hero-section"<?php if ( $hero_image_url ) : ?> style="background-image: url('<?php echo esc_url( $hero_image_url ); ?>');"<?php endif; ?>>
  <div class="hepatitis-hero-overlay"></div>
  <div class="hepatitis-hero-dots"></div>

  <div class="section-container">
    <div class="hepatitis-hero-content">
      <div class="hepatitis-hero-line"></div>
      <span class="hepatitis-hero-label"><?php echo esc_html(ep_field('vaccine_hero_label', 'TRAVEL HEALTH PROTECTION')); ?></span>

      <h1 class="hepatitis-hero-title"><?php echo esc_html(ep_field('vaccine_hero_title', 'Hepatitis A & B Vaccination Service in Ashford')); ?></h1>

      <p class="hepatitis-hero-description">
        <?php echo esc_html(ep_field('vaccine_hero_description', 'Protect yourself against Hepatitis A and B with our expert travel health service. Essential for travellers to areas with poor sanitation or where Hepatitis is endemic.')); ?>
      </p>

      <div class="hepatitis-hero-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button hepatitis-btn-primary">
          <?php echo esc_html(ep_field('vaccine_cta_text', 'Book Hepatitis Vaccination')); ?>
        </a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button hepatitis-btn-secondary">
          <?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?>
        </a>
      </div>

      <div class="hepatitis-hero-badges">
        <?php if (have_rows('vaccine_hero_badges')) : while (have_rows('vaccine_hero_badges')) : the_row(); ?>
          <div class="hepatitis-hero-badge"><?php echo esc_html(get_sub_field('text')); ?></div>
        <?php endwhile; else : ?>
          <div class="hepatitis-hero-badge">Single &amp; Combined Vaccines</div>
          <div class="hepatitis-hero-badge">Expert Advice</div>
          <div class="hepatitis-hero-badge">Same Day Appointments</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Protection Section -->
<section class="hepatitis-protect-section">
  <div class="section-container">
    <div class="hepatitis-protect-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_protect_badge', 'ESSENTIAL PROTECTION')); ?></span>
      </div>
      <h2 class="hepatitis-protect-title"><?php echo esc_html(ep_field('vaccine_protect_title', 'Understanding Your Options')); ?></h2>
      <p class="hepatitis-protect-desc"><?php echo esc_html(ep_field('vaccine_protect_desc', 'Flexible vaccination schedules to suit your travel plans')); ?></p>
    </div>

    <div class="hepatitis-protect-grid">
      <div class="hepatitis-protect-image-wrapper">
        <div class="hepatitis-protect-image-card">
          <?php
          $protect_image_id = ep_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : '';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(ep_field('vaccine_protect_image_alt', 'Pharmacist explaining vaccination options')); ?>" class="hepatitis-protect-image" />
          <?php endif; ?>
          <div class="hepatitis-protect-name-tag">
            <span class="name"><?php echo esc_html(ep_field('vaccine_protect_nametag_name', 'Expert Care')); ?></span>
            <span class="role"><?php echo esc_html(ep_field('vaccine_protect_nametag_role', 'Travel Health Team')); ?></span>
          </div>
        </div>
      </div>

      <div class="hepatitis-protect-content">
        <div class="hepatitis-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(ep_field('vaccine_protect_highlight', 'Combined Protection Available')); ?></span>
        </div>

        <h3 class="hepatitis-protect-subtitle"><?php echo esc_html(ep_field('vaccine_protect_subtitle', 'Separate or Combined Vaccinations')); ?></h3>
        <p class="hepatitis-protect-text"><?php echo esc_html(ep_field('vaccine_protect_text', 'Hepatitis A and B are viral infections that affect the liver. Depending on your destination and risk factors, you may need protection against one or both. We offer individual vaccines as well as a combined option (Twinrix) for convenience.')); ?></p>

        <ul class="hepatitis-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="hepatitis-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="hepatitis-protect-feature"><div class="icon"><i class="fas fa-syringe"></i></div><div class="text"><strong>Hepatitis A</strong><p>Single dose for 1 year protection. A booster after 6-12 months provides 25 years of immunity. Essential for food/water safety.</p></div></li>
            <li class="hepatitis-protect-feature"><div class="icon"><i class="fas fa-user-shield"></i></div><div class="text"><strong>Hepatitis B</strong><p>Course of 3 doses (Day 0, 1 month, 6 months). Accelerated course available for last-minute travel. Essential for blood/fluid risk.</p></div></li>
            <li class="hepatitis-protect-feature"><div class="icon"><i class="fas fa-layer-group"></i></div><div class="text"><strong>Combined (Twinrix)</strong><p>Protects against both A and B in a single course. Ideal for frequent travellers or those visiting high-risk regions.</p></div></li>
          <?php endif; ?>
        </ul>

        <div class="hepatitis-protect-actions">
          <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta">Call 01784 255 222</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="hepatitis-stats-section">
  <div class="section-container">
    <div class="hepatitis-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="hepatitis-stat-divider"></div><?php endif; ?>
        <div class="hepatitis-stat-item">
          <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitis-stat-item"><div class="icon"><i class="fas fa-calendar-check"></i></div><div class="content"><span class="number">25 Years</span><span class="label">Hep A Protection</span></div></div>
        <div class="hepatitis-stat-divider"></div>
        <div class="hepatitis-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">3 Doses</span><span class="label">Full Hep B Course</span></div></div>
        <div class="hepatitis-stat-divider"></div>
        <div class="hepatitis-stat-item"><div class="icon"><i class="fas fa-hourglass-start"></i></div><div class="content"><span class="number">2 Weeks</span><span class="label">Before Travel</span></div></div>
        <div class="hepatitis-stat-divider"></div>
        <div class="hepatitis-stat-item"><div class="icon"><i class="fas fa-child"></i></div><div class="content"><span class="number">1+ Year</span><span class="label">Suitable Age</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="hepatitis-about-section">
  <div class="section-container">
    <div class="hepatitis-about-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_about_badge', 'KNOW THE DIFFERENCE')); ?></span>
      </div>
      <h2 class="hepatitis-about-title"><?php echo esc_html(ep_field('vaccine_about_title', 'Hepatitis A vs Hepatitis B')); ?></h2>
      <p class="hepatitis-about-desc"><?php echo esc_html(ep_field('vaccine_about_desc', 'Understanding the risks and transmission methods')); ?></p>
    </div>

    <div class="hepatitis-about-content-grid">
      <div class="hepatitis-about-image-wrapper">
        <div class="hepatitis-about-image-card">
          <?php
          $about_image_id = ep_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : '';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(ep_field('vaccine_about_image_alt', 'Travel food safety')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="hepatitis-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="hepatitis-info-card">
            <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="hepatitis-info-card"><div class="icon"><i class="fas fa-utensils"></i></div><h3>Hepatitis A: Food &amp; Water</h3><p>Spread through contaminated food and water. Common in areas with poor sanitation. Causes liver inflammation, fever, and jaundice.</p></div>
          <div class="hepatitis-info-card"><div class="icon"><i class="fas fa-droplet"></i></div><h3>Hepatitis B: Blood &amp; Fluids</h3><p>Spread through contact with infected blood or bodily fluids (e.g., medical treatment, needles). Can cause chronic liver disease.</p></div>
          <div class="hepatitis-info-card"><div class="icon"><i class="fas fa-globe-asia"></i></div><h3>Global Risk</h3><p>Hepatitis A is common in developing countries. Hepatitis B risk exists worldwide, especially in Asia, Africa, and South America.</p></div>
          <div class="hepatitis-info-card"><div class="icon"><i class="fas fa-user-nurse"></i></div><h3>Prevention</h3><p>Vaccination is the most effective protection. Good hygiene (Hep A) and avoiding blood contact (Hep B) are also crucial.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="hepatitis-about-callout">
      <div class="badge"><?php echo esc_html(ep_field('vaccine_callout_badge', 'CRITICAL INSIGHT')); ?></div>
      <h3><?php echo esc_html(ep_field('vaccine_callout_title', 'Hepatitis B is Highly Infectious')); ?></h3>
      <p><?php echo esc_html(ep_field('vaccine_callout_text', 'Hepatitis B is 50-100 times more infectious than HIV. It can survive outside the body for at least 7 days. Vaccination provides the most reliable defence against this silent but serious virus.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Needs Vaccination -->
<section class="hepatitis-needs-section">
  <div class="section-container">
    <div class="hepatitis-needs-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_needs_badge', 'WHO NEEDS VACCINATION')); ?></span>
      </div>
      <h2 class="hepatitis-needs-title"><?php echo esc_html(ep_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="hepatitis-needs-desc"><?php echo esc_html(ep_field('vaccine_needs_desc', 'Recommended for many travellers and at-risk groups')); ?></p>
    </div>

    <div class="hepatitis-needs-grid">
      <?php if (have_rows('vaccine_needs_cards')) : while (have_rows('vaccine_needs_cards')) : the_row(); ?>
        <div class="hepatitis-needs-card <?php echo esc_attr(get_sub_field('type')); ?>">
          <div class="card-badge"><?php echo esc_html(get_sub_field('badge')); ?></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
          <ul class="check-list">
            <?php if (have_rows('items')) : while (have_rows('items')) : the_row(); ?>
              <li><i class="fas fa-check"></i> <?php echo esc_html(get_sub_field('text')); ?></li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitis-needs-card recommended">
          <div class="card-badge">HIGHLY RECOMMENDED</div>
          <h3>Travellers to Risk Areas</h3>
          <p>Vaccination is essential for travel to areas with poor sanitation or high prevalence of Hepatitis.</p>
          <ul class="check-list">
            <li><i class="fas fa-check"></i> Africa, Asia, South America</li>
            <li><i class="fas fa-check"></i> Visiting rural areas</li>
            <li><i class="fas fa-check"></i> Long-term travellers</li>
          </ul>
        </div>
        <div class="hepatitis-needs-card consider">
          <div class="card-badge">CONSIDER</div>
          <h3>Specific Activities</h3>
          <p>Certain activities or professions increase your risk of exposure to Hepatitis B.</p>
          <ul class="check-list">
            <li><i class="fas fa-check"></i> Healthcare &amp; aid workers</li>
            <li><i class="fas fa-check"></i> Adventure sports (injury risk)</li>
            <li><i class="fas fa-check"></i> Medical or dental treatment abroad</li>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Vaccination Details -->
<section class="hepatitis-details-section">
  <div class="section-container">
    <div class="hepatitis-details-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_details_badge', 'VACCINATION DETAILS')); ?></span>
      </div>
      <h2 class="hepatitis-details-title"><?php echo esc_html(ep_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="hepatitis-details-desc"><?php echo esc_html(ep_field('vaccine_details_desc', 'Simple, straightforward vaccination process at our Ashford clinic')); ?></p>
    </div>

    <div class="hepatitis-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="hepatitis-detail-card">
          <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitis-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Hep A Schedule</h3><p>One dose for 1 year protection. A booster 6-12 months later extends protection to 25 years.</p></div>
        <div class="hepatitis-detail-card"><div class="icon"><i class="fas fa-list-ol"></i></div><h3>Hep B Schedule</h3><p>Standard course is 3 doses (Day 0, 1 month, 6 months). Accelerated course available (Day 0, 7, 21).</p></div>
        <div class="hepatitis-detail-card"><div class="icon"><i class="fas fa-layer-group"></i></div><h3>Combined Vaccine</h3><p>Twinrix (A+B) follows the Hep B schedule of 3 doses. Convenient for comprehensive cover.</p></div>
        <div class="hepatitis-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild: soreness at injection site, headache, or fatigue. Serious side effects are very rare.</p></div>
        <div class="hepatitis-detail-card"><div class="icon"><i class="fas fa-child"></i></div><h3>Suitable for Children</h3><p>Paediatric versions available for children aged 1 year and older. Essential for family travel.</p></div>
        <div class="hepatitis-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Vaccination</h3><p>Not usually free on the NHS for travel. Our private service ensures quick access and choice.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Risk Zones -->
<section class="hepatitis-risk-section">
  <div class="section-container">
    <div class="hepatitis-risk-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_risk_badge', 'GLOBAL RISK ZONES')); ?></span>
      </div>
      <h2 class="hepatitis-risk-title"><?php echo esc_html(ep_field('vaccine_risk_title', 'Where are Hepatitis A & B found?')); ?></h2>
      <p class="hepatitis-risk-desc"><?php echo esc_html(ep_field('vaccine_risk_desc', 'Risk varies by region, but vaccination is often recommended for travel outside Western Europe, North America, and Australia.')); ?></p>
    </div>

    <div class="hepatitis-risk-grid">
      <?php if (have_rows('vaccine_risk_zones')) : while (have_rows('vaccine_risk_zones')) : the_row();
        $zone_image_id = get_sub_field('image');
        $zone_image_url = $zone_image_id ? wp_get_attachment_image_url($zone_image_id, 'large') : '';
      ?>
        <div class="hepatitis-risk-column">
          <?php if ($zone_image_url) : ?>
          <div class="hepatitis-destination-image">
            <img src="<?php echo esc_url($zone_image_url); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" />
          </div>
          <?php endif; ?>
          <div class="hepatitis-risk-card <?php echo esc_attr(get_sub_field('level')); ?>">
            <div class="card-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p class="desc"><?php echo esc_html(get_sub_field('description')); ?></p>
            <div class="country-list">
              <?php if (have_rows('countries')) : while (have_rows('countries')) : the_row(); ?>
                <span><?php echo esc_html(get_sub_field('name')); ?></span>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitis-risk-column">
          <div class="hepatitis-destination-image"><img src="https://images.unsplash.com/photo-1528127269322-539801943592?w=1200&h=600&fit=crop" alt="Asia travel" /></div>
          <div class="hepatitis-risk-card high">
            <div class="card-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <h3>High Risk Areas</h3>
            <p class="desc">Africa, parts of South America, and many Asian countries have high rates of both Hepatitis A and B.</p>
            <div class="country-list"><span>India</span><span>Thailand</span><span>Kenya</span><span>Brazil</span></div>
          </div>
        </div>
        <div class="hepatitis-risk-column">
          <div class="hepatitis-destination-image"><img src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?w=1200&h=600&fit=crop" alt="Eastern Europe travel" /></div>
          <div class="hepatitis-risk-card moderate">
            <div class="card-icon"><i class="fas fa-info-circle"></i></div>
            <h3>Moderate Risk Areas</h3>
            <p class="desc">Eastern Europe and parts of the Mediterranean can have intermediate risk, especially for Hepatitis A.</p>
            <div class="country-list"><span>Turkey</span><span>Egypt</span><span>Morocco</span><span>Mexico</span></div>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <div class="hepatitis-risk-footer">
      <div class="info-badge">
        <i class="fas fa-user-doctor"></i>
        <?php echo esc_html(ep_field('vaccine_risk_footer', "Unsure about your destination? We'll check the latest risk data for you.")); ?>
      </div>
      <div class="actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="hepatitis-faq-section">
  <div class="section-container">
    <div class="hepatitis-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_faq_badge', 'HEPATITIS FAQs')); ?></span>
      </div>
      <h2 class="hepatitis-faq-title"><?php echo esc_html(ep_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="hepatitis-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="hepatitis-faq-item">
          <button class="hepatitis-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="hepatitis-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitis-faq-item"><button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Can I get Hepatitis A and B vaccines together?</span><i class="fas fa-plus icon"></i></button><div class="hepatitis-faq-content"><p>Yes, there is a combined vaccine called Twinrix which protects against both Hepatitis A and B. This is often a convenient option for travellers who need protection against both diseases.</p></div></div>
        <div class="hepatitis-faq-item"><button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How long do the vaccines last?</span><i class="fas fa-plus icon"></i></button><div class="hepatitis-faq-content"><p>Hepatitis A: One dose lasts 1 year. A booster at 6-12 months extends protection to 25 years. Hepatitis B: A full course of 3 doses usually provides lifelong protection for most people.</p></div></div>
        <div class="hepatitis-faq-item"><button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">I'm travelling soon, is it too late?</span><i class="fas fa-plus icon"></i></button><div class="hepatitis-faq-content"><p>It's best to start 6 weeks before travel, but accelerated schedules are available for Hepatitis B (doses at 0, 7, 21 days). Hepatitis A protection starts developing after 2 weeks. Contact us even if you're travelling soon.</p></div></div>
        <div class="hepatitis-faq-item"><button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="hepatitis-faq-content"><p>Side effects are usually mild and short-lived, such as soreness at the injection site, headache, or fatigue. Serious side effects are extremely rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="hepatitis-cta-section">
  <div class="hepatitis-cta-bg"></div>
  <div class="section-container">
    <div class="hepatitis-cta-content">
      <div class="hepatitis-cta-badges">
        <span class="badge">Same Day Appointments</span>
        <span class="badge">Expert Advice</span>
        <span class="badge">Combined Vaccines Available</span>
      </div>
      <h2 class="hepatitis-cta-title"><?php echo esc_html(ep_field('vaccine_cta_title', 'Protect your health while travelling')); ?></h2>
      <p class="hepatitis-cta-desc"><?php echo esc_html(ep_field('vaccine_cta_desc', 'Book your Hepatitis vaccination with our expert team today. Quick, convenient, and professional service in Ashford.')); ?></p>
      <div class="hepatitis-cta-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
