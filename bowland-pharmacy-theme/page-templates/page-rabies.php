<?php
/**
 * Template Name: Rabies Vaccination
 * @package Bowland_Pharmacy
 */

get_header();

$prefix = 'rabies';
$vaccine_name = bp_field('vaccine_name', 'Rabies');
?>

<!-- Hero Section -->
<?php
$hero_image_id  = bp_field( 'vaccine_hero_image' );
$hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'full' ) : '';
?>
<section class="rabies-hero-section"<?php if ( $hero_image_url ) : ?> style="background-image: url('<?php echo esc_url( $hero_image_url ); ?>');"<?php endif; ?>>
  <div class="rabies-hero-overlay"></div>
  <div class="rabies-hero-dots"></div>

  <!-- Breadcrumb -->
  <div class="rabies-breadcrumb">
    <div class="section-container">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span class="separator">/</span>
      <a href="<?php echo esc_url(bp_field('vaccine_parent_url', '/travel-health/')); ?>">Travel Health</a>
      <span class="separator">/</span>
      <span class="current"><?php echo esc_html($vaccine_name); ?> Vaccination</span>
    </div>
  </div>

  <div class="section-container">
    <div class="rabies-hero-content">
      <div class="rabies-hero-line"></div>
      <span class="rabies-hero-label"><?php echo esc_html(bp_field('vaccine_hero_label', 'TRAVEL HEALTH PROTECTION')); ?></span>

      <h1 class="rabies-hero-title"><?php echo esc_html(bp_field('vaccine_hero_title', 'Rabies Vaccination<br>Service in Wythenshawe')); ?></h1>

      <p class="rabies-hero-description">
        <?php echo esc_html(bp_field('vaccine_hero_description', 'Protect yourself against rabies with our expert travel health service. Essential for travel to high-risk areas in Asia, Africa, and South America.')); ?>
      </p>

      <div class="rabies-hero-actions">
        <a href="<?php echo esc_url(bp_field('vaccine_cta_url', '/book-appointment/')); ?>" class="cta-button rabies-btn-primary">
          <?php echo esc_html(bp_field('vaccine_cta_text', 'Book Rabies Vaccination')); ?>
        </a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button rabies-btn-secondary">
          <?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?>
        </a>
      </div>

      <div class="rabies-hero-badges">
        <?php if (have_rows('vaccine_hero_badges')) : while (have_rows('vaccine_hero_badges')) : the_row(); ?>
          <div class="rabies-hero-badge"><?php echo esc_html(get_sub_field('text')); ?></div>
        <?php endwhile; else : ?>
          <div class="rabies-hero-badge">Full Course Available</div>
          <div class="rabies-hero-badge">Expert Advice</div>
          <div class="rabies-hero-badge">Same Day Appointments</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Protection Section -->
<section class="rabies-protect-section">
  <div class="section-container">
    <div class="rabies-protect-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_protect_badge', 'ESSENTIAL PROTECTION')); ?></span>
      </div>
      <h2 class="rabies-protect-title"><?php echo esc_html(bp_field('vaccine_protect_title', 'Understanding Rabies Risk')); ?></h2>
      <p class="rabies-protect-desc"><?php echo esc_html(bp_field('vaccine_protect_desc', 'A serious viral infection spread by infected animals')); ?></p>
    </div>

    <div class="rabies-protect-grid">
      <div class="rabies-protect-image-wrapper">
        <div class="rabies-protect-image-card">
          <?php
          $protect_image_id = bp_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : '';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_protect_image_alt', 'Travel health consultation for rabies')); ?>" class="rabies-protect-image" />
          <?php endif; ?>
          <div class="rabies-protect-name-tag">
            <span class="name"><?php echo esc_html(bp_field('vaccine_protect_nametag_name', 'Expert Care')); ?></span>
            <span class="role"><?php echo esc_html(bp_field('vaccine_protect_nametag_role', 'Travel Health Team')); ?></span>
          </div>
        </div>
      </div>

      <div class="rabies-protect-content">
        <div class="rabies-protect-badge-box">
          <i class="fas fa-shield-dog"></i>
          <span><?php echo esc_html(bp_field('vaccine_protect_highlight', 'Recommended for High-Risk Areas')); ?></span>
        </div>

        <h3 class="rabies-protect-subtitle"><?php echo esc_html(bp_field('vaccine_protect_subtitle', 'Why Vaccination is Critical')); ?></h3>
        <p class="rabies-protect-text"><?php echo esc_html(bp_field('vaccine_protect_text', 'Rabies is a viral infection of the brain and nerves. It is almost always fatal once symptoms appear. Vaccination provides vital protection and simplifies treatment if you are bitten or scratched by an animal abroad.')); ?></p>

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
              <div class="text"><strong>3 Dose Course</strong><p>A full course consists of 3 injections, usually given on Day 0, Day 7, and Day 21 or 28. Accelerated schedules are available.</p></div>
            </li>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="fas fa-user-shield"></i></div>
              <div class="text"><strong>Simplifies Treatment</strong><p>If you are vaccinated and bitten, you will need fewer doses of treatment and won't need the difficult-to-find immunoglobulin.</p></div>
            </li>
            <li class="rabies-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Long-lasting Protection</strong><p>The primary course provides long-term protection. Boosters may be recommended for those at continued high risk.</p></div>
            </li>
          <?php endif; ?>
        </ul>

        <div class="rabies-protect-actions">
          <a href="<?php echo esc_url(bp_field('vaccine_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">Book Appointment</a>
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
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">3 Doses</span><span class="label">Full Course</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-skull-crossbones"></i></div><div class="content"><span class="number">100%</span><span class="label">Fatal if Untreated</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-hourglass-start"></i></div><div class="content"><span class="number">24 Hours</span><span class="label">Seek Help if Bitten</span></div></div>
        <div class="rabies-stat-divider"></div>
        <div class="rabies-stat-item"><div class="icon"><i class="fas fa-child"></i></div><div class="content"><span class="number">All Ages</span><span class="label">Suitable for Kids</span></div></div>
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
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_about_badge', 'KNOW THE RISKS')); ?></span>
      </div>
      <h2 class="rabies-about-title"><?php echo esc_html(bp_field('vaccine_about_title', 'What is Rabies?')); ?></h2>
      <p class="rabies-about-desc"><?php echo esc_html(bp_field('vaccine_about_desc', 'Understanding transmission and prevention')); ?></p>
    </div>

    <div class="rabies-about-content-grid">
      <div class="rabies-about-image-wrapper">
        <div class="rabies-about-image-card">
          <?php
          $about_image_id = bp_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : '';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(bp_field('vaccine_about_image_alt', 'Stray dog in travel destination')); ?>" />
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
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Viral Infection</h3><p>Rabies is a viral disease that affects the central nervous system. It is transmitted through the saliva of infected animals.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-dog"></i></div><h3>Animal Bites</h3><p>Most commonly spread by dog bites, but also by bats, monkeys, and cats. Licks on broken skin can also transmit the virus.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-globe-asia"></i></div><h3>Global Risk</h3><p>Found in over 150 countries. High risk in Asia, Africa, and Central/South America. Children are particularly at risk.</p></div>
          <div class="rabies-info-card"><div class="icon"><i class="fas fa-user-md"></i></div><h3>Urgent Treatment</h3><p>If bitten, you must seek medical attention immediately, even if vaccinated. Vaccination buys you time and simplifies treatment.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="rabies-about-callout">
      <div class="badge"><?php echo esc_html(bp_field('vaccine_callout_badge', 'CRITICAL WARNING')); ?></div>
      <h3><?php echo esc_html(bp_field('vaccine_callout_title', '100% Fatal Once Symptoms Appear')); ?></h3>
      <p><?php echo esc_html(bp_field('vaccine_callout_text', 'Rabies is almost always fatal once symptoms develop. Vaccination is your best defence. If you are bitten or scratched by an animal abroad, seek medical help immediately, even if you have been vaccinated.')); ?></p>
    </div>
  </div>
</section>

<!-- Who Needs Vaccination -->
<section class="rabies-needs-section">
  <div class="section-container">
    <div class="rabies-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_needs_badge', 'WHO NEEDS VACCINATION')); ?></span>
      </div>
      <h2 class="rabies-needs-title"><?php echo esc_html(bp_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="rabies-needs-desc"><?php echo esc_html(bp_field('vaccine_needs_desc', 'Recommended for many travellers to risk areas')); ?></p>
    </div>

    <div class="rabies-needs-grid">
      <?php if (have_rows('vaccine_needs_cards')) : while (have_rows('vaccine_needs_cards')) : the_row(); ?>
        <div class="rabies-needs-card <?php echo esc_attr(get_sub_field('type')); ?>">
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
        <div class="rabies-needs-card recommended">
          <div class="card-badge">HIGHLY RECOMMENDED</div>
          <h3>Travellers to Risk Areas</h3>
          <p>Vaccination is strongly recommended for travel to areas where rabies is common, especially if medical care is limited.</p>
          <ul class="check-list">
            <li><i class="fas fa-check"></i> Asia, Africa, South America</li>
            <li><i class="fas fa-check"></i> Remote or rural areas</li>
            <li><i class="fas fa-check"></i> Long-term travellers</li>
          </ul>
        </div>
        <div class="rabies-needs-card consider">
          <div class="card-badge">CONSIDER</div>
          <h3>Specific Activities</h3>
          <p>Certain activities increase your risk of coming into contact with infected animals.</p>
          <ul class="check-list">
            <li><i class="fas fa-check"></i> Working with animals</li>
            <li><i class="fas fa-check"></i> Cycling or running</li>
            <li><i class="fas fa-check"></i> Children (who may not report bites)</li>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Risk Zones -->
<section class="rabies-risk-section">
  <div class="section-container">
    <div class="rabies-risk-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_risk_badge', 'GLOBAL RISK ZONES')); ?></span>
      </div>
      <h2 class="rabies-risk-title"><?php echo esc_html(bp_field('vaccine_risk_title', 'Where is Rabies found?')); ?></h2>
      <p class="rabies-risk-desc"><?php echo esc_html(bp_field('vaccine_risk_desc', 'Rabies is present on all continents except Antarctica, but over 95% of human deaths occur in Asia and Africa.')); ?></p>
    </div>

    <div class="rabies-risk-grid">
      <?php if (have_rows('vaccine_risk_zones')) : while (have_rows('vaccine_risk_zones')) : the_row();
        $zone_image_id = get_sub_field('image');
        $zone_image_url = $zone_image_id ? wp_get_attachment_image_url($zone_image_id, 'large') : '';
      ?>
        <div class="rabies-risk-column">
          <?php if ($zone_image_url) : ?>
          <div class="rabies-destination-image">
            <img src="<?php echo esc_url($zone_image_url); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" />
          </div>
          <?php endif; ?>
          <div class="rabies-risk-card <?php echo esc_attr(get_sub_field('level')); ?>">
            <div class="card-icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
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
        <div class="rabies-risk-column">
          <div class="rabies-destination-image"><img src="https://images.unsplash.com/photo-1528127269322-539801943592?w=1200&h=600&fit=crop" alt="Asia travel" /></div>
          <div class="rabies-risk-card high">
            <div class="card-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <h3>High Risk Areas</h3>
            <p class="desc">India has the highest rate of human rabies in the world. Southeast Asia and Africa are also high-risk zones.</p>
            <div class="country-list"><span>India</span><span>Thailand</span><span>Vietnam</span><span>Kenya</span></div>
          </div>
        </div>
        <div class="rabies-risk-column">
          <div class="rabies-destination-image"><img src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?w=1200&h=600&fit=crop" alt="South America travel" /></div>
          <div class="rabies-risk-card moderate">
            <div class="card-icon"><i class="fas fa-info-circle"></i></div>
            <h3>Moderate Risk Areas</h3>
            <p class="desc">Parts of Central and South America, as well as Eastern Europe, have a risk of rabies, often from bats or stray dogs.</p>
            <div class="country-list"><span>Brazil</span><span>Peru</span><span>Mexico</span><span>Turkey</span></div>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <div class="rabies-risk-footer">
      <div class="info-badge">
        <i class="fas fa-user-doctor"></i>
        <?php echo esc_html(bp_field('vaccine_risk_footer', "Unsure about your destination? We'll check the latest risk data for you.")); ?>
      </div>
      <div class="actions">
        <a href="<?php echo esc_url(bp_field('vaccine_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- Vaccination Details -->
<section class="rabies-details-section">
  <div class="section-container">
    <div class="rabies-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html(bp_field('vaccine_details_badge', 'VACCINATION DETAILS')); ?></span>
      </div>
      <h2 class="rabies-details-title"><?php echo esc_html(bp_field('vaccine_details_title', 'What to expect at your appointment')); ?></h2>
      <p class="rabies-details-desc"><?php echo esc_html(bp_field('vaccine_details_desc', 'Simple, straightforward vaccination process at our Wythenshawe clinic')); ?></p>
    </div>

    <div class="rabies-details-grid">
      <?php if (have_rows('vaccine_details')) : while (have_rows('vaccine_details')) : the_row(); ?>
        <div class="rabies-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field('icon') ) ); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>3 Dose Course</h3><p>A full primary course consists of 3 injections. Typically given on Day 0, Day 7, and Day 21 or 28.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-forward-fast"></i></div><h3>Accelerated Course</h3><p>If you are travelling soon, an accelerated schedule (Day 0, 3, 7) may be possible. Ask us for details.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Usually mild: soreness at injection site, headache, or low-grade fever. Serious side effects are very rare.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-shield-halved"></i></div><h3>Long-term Protection</h3><p>The primary course provides long-lasting memory. Boosters may be needed for those at continued occupational risk.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-child"></i></div><h3>Suitable for Children</h3><p>Rabies vaccine can be given to children of all ages. Children are often at higher risk from animal bites.</p></div>
        <div class="rabies-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Vaccination</h3><p>Not available on the NHS for travel. Private fee includes vaccine and administration by our pharmacist.</p></div>
      <?php endif; ?>
    </div>
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
      <?php endwhile; else : ?>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>A full primary course consists of 3 doses. These are typically given on Day 0, Day 7, and Day 21 or 28. Accelerated schedules are available if you are travelling sooner.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">If I'm vaccinated, do I still need treatment if bitten?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Yes, you must still seek medical attention immediately. However, if you are vaccinated, you will only need 2 booster doses of the vaccine and will NOT need the rabies immunoglobulin (which is often in short supply in developing countries).</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Is rabies always fatal?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Once symptoms appear, rabies is almost 100% fatal. This is why prevention through vaccination and immediate post-exposure treatment is so critical.</p></div></div>
        <div class="rabies-faq-item"><button class="rabies-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="rabies-faq-content"><p>Side effects are generally mild and may include a sore arm, headache, or mild fever. Serious side effects are very rare.</p></div></div>
      <?php endif; ?>
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
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Expert Advice</span>
          <span class="badge">Full Course Available</span>
        <?php endif; ?>
      </div>

      <h2 class="rabies-cta-title"><?php echo esc_html(bp_field('vaccine_cta_title', 'Protect your health while travelling')); ?></h2>
      <p class="rabies-cta-desc"><?php echo esc_html(bp_field('vaccine_cta_desc', 'Book your Rabies vaccination with our expert team today. Quick, convenient, and professional service in Wythenshawe.')); ?></p>

      <div class="rabies-cta-actions">
        <a href="<?php echo esc_url(bp_field('vaccine_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(bp_field('vaccine_phone', '01619987114')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(bp_field('vaccine_phone_display', 'Call 0161 998 7114')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
