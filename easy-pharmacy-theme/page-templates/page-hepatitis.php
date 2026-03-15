<?php
/**
 * Template Name: Hepatitis Vaccination
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Breadcrumb -->
<div class="hepatitis-breadcrumb">
  <div class="section-container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
    <span class="separator">/</span>
    <a href="<?php echo esc_url( ep_field( 'hep_parent_url', home_url( '/travel-health/' ) ) ); ?>">Travel Health</a>
    <span class="separator">/</span>
    <span class="current">Hepatitis A &amp; B Vaccination</span>
  </div>
</div>

<!-- ============================================================
     1. HERO
     ============================================================ -->
<?php
$hero_image_id  = ep_field( 'hep_hero_image' );
$hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'full' ) : '';
?>
<section class="hepatitis-hero-section"<?php if ( $hero_image_url ) : ?> style="background-image: url('<?php echo esc_url( $hero_image_url ); ?>');"<?php endif; ?>>
  <div class="hepatitis-hero-overlay"></div>
  <div class="hepatitis-hero-dots"></div>

  <div class="section-container">
    <div class="hepatitis-hero-content">
      <div class="hepatitis-hero-line"></div>
      <span class="hepatitis-hero-label"><?php echo esc_html( ep_field( 'hep_hero_label', 'TRAVEL HEALTH PROTECTION' ) ); ?></span>

      <h1 class="hepatitis-hero-title"><?php echo esc_html( ep_field( 'hep_hero_title', 'Hepatitis A & B Vaccination Service' ) ); ?></h1>

      <p class="hepatitis-hero-description">
        <?php echo esc_html( ep_field( 'hep_hero_description', 'Comprehensive protection against Hepatitis A and B. Available as separate vaccines or a combined course for complete peace of mind.' ) ); ?>
      </p>

      <div class="hepatitis-hero-actions">
        <a href="<?php echo esc_url( ep_field( 'hep_hero_cta_url', '' ) ?: ep_booking_url() ); ?>" class="cta-button hepatitis-btn-primary">
          <?php echo esc_html( ep_field( 'hep_hero_cta_text', 'Book Hepatitis Vaccination' ) ); ?>
        </a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button hepatitis-btn-secondary">
          Call <?php echo esc_html( ep_phone() ); ?>
        </a>
      </div>

      <div class="hepatitis-hero-badges">
        <?php if ( have_rows( 'hep_hero_badges' ) ) : while ( have_rows( 'hep_hero_badges' ) ) : the_row(); ?>
          <div class="hepatitis-hero-badge"><?php echo esc_html( get_sub_field( 'text' ) ); ?></div>
        <?php endwhile; else : ?>
          <div class="hepatitis-hero-badge">Combined Vaccine Available</div>
          <div class="hepatitis-hero-badge">Long-term Protection</div>
          <div class="hepatitis-hero-badge">Same Day Appointments</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     2. PROTECTION / PHARMACIST
     ============================================================ -->
<section class="hepatitis-cert-section">
  <div class="section-container">
    <div class="hepatitis-cert-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'hep_cert_badge', 'ESSENTIAL PROTECTION' ) ); ?></span>
      </div>
      <h2 class="hepatitis-cert-title"><?php echo esc_html( ep_field( 'hep_cert_title', 'Understanding Your Options' ) ); ?></h2>
      <p class="hepatitis-cert-desc"><?php echo esc_html( ep_field( 'hep_cert_desc', 'Flexible vaccination schedules to suit your travel plans' ) ); ?></p>
    </div>

    <div class="hepatitis-cert-grid">
      <!-- Image Column -->
      <div class="hepatitis-cert-image-wrapper">
        <div class="hepatitis-cert-image-card">
          <?php
          $cert_image_id  = ep_field( 'hep_cert_image' );
          $cert_image_url = $cert_image_id ? wp_get_attachment_image_url( $cert_image_id, 'large' ) : '';
          if ( ! $cert_image_url ) {
              $cert_image_id = ep_option( 'pharmacist_image' );
              $cert_image_url = $cert_image_id ? wp_get_attachment_image_url( $cert_image_id, 'large' ) : '';
          }
          if ( $cert_image_url ) :
          ?>
            <img src="<?php echo esc_url( $cert_image_url ); ?>" alt="Pharmacist explaining vaccination options" class="hepatitis-cert-image" />
          <?php endif; ?>
          <div class="hepatitis-cert-name-tag">
            <span class="name"><?php echo esc_html( ep_field( 'hep_cert_nametag_name', 'Expert Care' ) ); ?></span>
            <span class="role"><?php echo esc_html( ep_field( 'hep_cert_nametag_role', 'Travel Health Team' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Content Column -->
      <div class="hepatitis-cert-content">
        <div class="hepatitis-cert-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( ep_field( 'hep_cert_highlight', 'Combined Protection Available' ) ); ?></span>
        </div>

        <h3 class="hepatitis-cert-subtitle"><?php echo esc_html( ep_field( 'hep_cert_subtitle', 'Separate or Combined Vaccinations' ) ); ?></h3>
        <p class="hepatitis-cert-text"><?php echo esc_html( ep_field( 'hep_cert_text', 'Hepatitis A and B are viral infections that affect the liver. Depending on your destination and risk factors, you may need protection against one or both. We offer individual vaccines as well as a combined option (Twinrix) for convenience.' ) ); ?></p>

        <div class="hepatitis-cert-features">
          <?php if ( have_rows( 'hep_cert_features' ) ) : while ( have_rows( 'hep_cert_features' ) ) : the_row(); ?>
            <div class="hepatitis-cert-feature">
              <div class="icon"><i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html( get_sub_field( 'title' ) ); ?></strong>
                <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="hepatitis-cert-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Hepatitis A</strong><p>Single dose for 1 year protection. A booster after 6-12 months provides 25 years of immunity. Essential for food/water safety.</p></div>
            </div>
            <div class="hepatitis-cert-feature">
              <div class="icon"><i class="fas fa-user-shield"></i></div>
              <div class="text"><strong>Hepatitis B</strong><p>Course of 3 doses (Day 0, 1 month, 6 months). Accelerated course available for last-minute travel. Essential for blood/fluid risk.</p></div>
            </div>
            <div class="hepatitis-cert-feature">
              <div class="icon"><i class="fas fa-layer-group"></i></div>
              <div class="text"><strong>Combined (Twinrix)</strong><p>Protects against both A and B in a single course. Ideal for frequent travellers or those visiting high-risk regions.</p></div>
            </div>
          <?php endif; ?>
        </div>

        <div class="hepatitis-cert-actions">
          <a href="<?php echo esc_url( ep_field( 'hep_cert_cta_url', '' ) ?: ep_booking_url() ); ?>" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">Call <?php echo esc_html( ep_phone() ); ?></a>
        </div>

        <!-- Callout Box -->
        <div class="hepatitis-cert-callout">
          <div class="header">
            <span class="badge"><?php echo esc_html( ep_field( 'hep_cert_callout_badge', 'IMPORTANT' ) ); ?></span>
            <h4><?php echo esc_html( ep_field( 'hep_cert_callout_title', 'Planning Ahead' ) ); ?></h4>
          </div>
          <p><?php echo esc_html( ep_field( 'hep_cert_callout_text', 'Ideally, start your Hepatitis B course at least 6 months before travel to complete the full schedule. Accelerated courses are available for last-minute travellers (doses at Day 0, 7, and 21 days).' ) ); ?></p>
          <p class="note"><?php echo esc_html( ep_field( 'hep_cert_callout_note', 'Hepatitis A protection begins 2 weeks after the first dose.' ) ); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     3. STATS BAR
     ============================================================ -->
<section class="hepatitis-stats-section">
  <div class="section-container">
    <div class="hepatitis-stats-bar">
      <?php if ( have_rows( 'hep_stats' ) ) : $stat_i = 0; while ( have_rows( 'hep_stats' ) ) : the_row(); $stat_i++; ?>
        <?php if ( $stat_i > 1 ) : ?><div class="hepatitis-stat-divider"></div><?php endif; ?>
        <div class="hepatitis-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></span>
            <span class="label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></span>
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

<!-- ============================================================
     4. ABOUT HEPATITIS A & B
     ============================================================ -->
<section class="hepatitis-about-section">
  <div class="section-container">
    <div class="hepatitis-about-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'hep_about_badge', 'KNOW THE DIFFERENCE' ) ); ?></span>
      </div>
      <h2 class="hepatitis-about-title"><?php echo esc_html( ep_field( 'hep_about_title', 'Hepatitis A vs Hepatitis B' ) ); ?></h2>
      <p class="hepatitis-about-desc"><?php echo esc_html( ep_field( 'hep_about_desc', 'Understanding the risks and transmission methods' ) ); ?></p>
    </div>

    <div class="hepatitis-about-content-grid">
      <!-- Image -->
      <div class="hepatitis-about-image-wrapper">
        <div class="hepatitis-about-image-card">
          <?php
          $about_image_id  = ep_field( 'hep_about_image' );
          $about_image_url = $about_image_id ? wp_get_attachment_image_url( $about_image_id, 'large' ) : '';
          if ( $about_image_url ) :
          ?>
            <img src="<?php echo esc_url( $about_image_url ); ?>" alt="Travel food safety" />
          <?php endif; ?>
        </div>
      </div>

      <!-- Info Cards -->
      <div class="hepatitis-about-cards-grid">
        <?php if ( have_rows( 'hep_about_cards' ) ) : while ( have_rows( 'hep_about_cards' ) ) : the_row(); ?>
          <div class="hepatitis-info-card">
            <div class="icon"><i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
            <h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="hepatitis-info-card"><div class="icon"><i class="fas fa-utensils"></i></div><h3>Hepatitis A: Food &amp; Water</h3><p>Spread through contaminated food and water. Common in areas with poor sanitation. Causes liver inflammation, fever, and jaundice.</p></div>
          <div class="hepatitis-info-card"><div class="icon"><i class="fas fa-droplet"></i></div><h3>Hepatitis B: Blood &amp; Fluids</h3><p>Spread through contact with infected blood or bodily fluids (e.g., medical treatment, needles). Can cause chronic liver disease.</p></div>
          <div class="hepatitis-info-card"><div class="icon"><i class="fas fa-globe-asia"></i></div><h3>Global Risk</h3><p>Hepatitis A is common in developing countries. Hepatitis B risk exists worldwide, especially in Asia, Africa, and South America.</p></div>
          <div class="hepatitis-info-card"><div class="icon"><i class="fas fa-user-nurse"></i></div><h3>Prevention</h3><p>Vaccination is the most effective protection. Good hygiene (Hep A) and avoiding blood contact (Hep B) are also crucial.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Warning Callout -->
    <div class="hepatitis-about-callout">
      <div class="badge"><?php echo esc_html( ep_field( 'hep_about_callout_badge', 'CRITICAL INSIGHT' ) ); ?></div>
      <h3><?php echo esc_html( ep_field( 'hep_about_callout_title', 'Hepatitis B is Highly Infectious' ) ); ?></h3>
      <p><?php echo esc_html( ep_field( 'hep_about_callout_text', 'Hepatitis B is 50-100 times more infectious than HIV. It can survive outside the body for at least 7 days. Vaccination provides the most reliable defence against this silent but serious virus.' ) ); ?></p>
    </div>
  </div>
</section>

<!-- ============================================================
     5. WHO NEEDS VACCINATION
     ============================================================ -->
<section class="hepatitis-needs-section">
  <div class="section-container">
    <div class="hepatitis-needs-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'hep_needs_badge', 'WHO NEEDS VACCINATION' ) ); ?></span>
      </div>
      <h2 class="hepatitis-needs-title"><?php echo esc_html( ep_field( 'hep_needs_title', 'Should you get vaccinated?' ) ); ?></h2>
      <p class="hepatitis-needs-desc"><?php echo esc_html( ep_field( 'hep_needs_desc', 'Recommended for many travellers and at-risk groups' ) ); ?></p>
    </div>

    <div class="hepatitis-needs-grid">
      <?php if ( have_rows( 'hep_needs_cards' ) ) : while ( have_rows( 'hep_needs_cards' ) ) : the_row(); ?>
        <div class="hepatitis-needs-card <?php echo esc_attr( get_sub_field( 'type' ) ); ?>">
          <div class="card-badge"><?php echo esc_html( get_sub_field( 'badge' ) ); ?></div>
          <h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <ul class="check-list">
            <?php if ( have_rows( 'items' ) ) : while ( have_rows( 'items' ) ) : the_row(); ?>
              <li><i class="fas fa-check"></i> <?php echo esc_html( get_sub_field( 'text' ) ); ?></li>
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

    <div class="hepatitis-needs-info">
      <i class="fas fa-info-circle"></i>
      <span><?php echo esc_html( ep_field( 'hep_needs_info', 'Not sure if you need the vaccine? Book a consultation and we\'ll check your destination requirements.' ) ); ?></span>
    </div>
  </div>
</section>

<!-- ============================================================
     6. RISK ZONES
     ============================================================ -->
<section class="hepatitis-risk-section">
  <div class="section-container">
    <div class="hepatitis-risk-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'hep_risk_badge', 'GLOBAL RISK ZONES' ) ); ?></span>
      </div>
      <h2 class="hepatitis-risk-title"><?php echo esc_html( ep_field( 'hep_risk_title', 'Where are Hepatitis A & B found?' ) ); ?></h2>
      <p class="hepatitis-risk-desc"><?php echo esc_html( ep_field( 'hep_risk_desc', 'Risk varies by region, but vaccination is often recommended for travel outside Western Europe, North America, and Australia.' ) ); ?></p>
    </div>

    <!-- Stats Boxes -->
    <div class="hepatitis-risk-stats">
      <?php if ( have_rows( 'hep_risk_stats' ) ) : while ( have_rows( 'hep_risk_stats' ) ) : the_row(); ?>
        <div class="stat-box">
          <span class="num"><?php echo esc_html( get_sub_field( 'number' ) ); ?></span>
          <span class="label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></span>
          <span class="sub"><?php echo esc_html( get_sub_field( 'sub' ) ); ?></span>
        </div>
      <?php endwhile; else : ?>
        <div class="stat-box"><span class="num">1.4M</span><span class="label">Hep A Cases/Year</span><span class="sub">Estimated worldwide</span></div>
        <div class="stat-box"><span class="num">296M</span><span class="label">Chronic Hep B</span><span class="sub">People living with infection</span></div>
        <div class="stat-box"><span class="num">820,000</span><span class="label">Deaths Per Year</span><span class="sub">From Hepatitis B complications</span></div>
      <?php endif; ?>
    </div>

    <!-- Continent Cards -->
    <div class="hepatitis-risk-grid">
      <?php if ( have_rows( 'hep_risk_zones' ) ) : while ( have_rows( 'hep_risk_zones' ) ) : the_row(); ?>
        <div>
          <?php
          $zone_image_id  = get_sub_field( 'image' );
          $zone_image_url = $zone_image_id ? wp_get_attachment_image_url( $zone_image_id, 'large' ) : '';
          ?>
          <?php if ( $zone_image_url ) : ?>
            <div class="hepatitis-destination-image">
              <img src="<?php echo esc_url( $zone_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            </div>
          <?php endif; ?>
          <div class="hepatitis-risk-card <?php echo esc_attr( get_sub_field( 'type' ) ); ?>">
            <div class="card-icon"><?php echo esc_html( get_sub_field( 'emoji' ) ); ?></div>
            <h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
            <div class="country-list">
              <?php if ( have_rows( 'countries' ) ) : while ( have_rows( 'countries' ) ) : the_row(); ?>
                <span><?php echo esc_html( get_sub_field( 'name' ) ); ?></span>
              <?php endwhile; endif; ?>
            </div>
            <?php $note = get_sub_field( 'note' ); if ( $note ) : ?>
              <p class="note"><?php echo esc_html( $note ); ?></p>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; else : ?>
        <!-- High Risk -->
        <div>
          <div class="hepatitis-risk-card high">
            <div class="card-icon">&#127758;</div>
            <h3>High Risk Areas</h3>
            <p class="desc">Africa, parts of South America, and many Asian countries have high rates of both Hepatitis A and B.</p>
            <div class="country-list">
              <span>India</span><span>Thailand</span><span>Kenya</span><span>Brazil</span><span>Nigeria</span><span>Vietnam</span><span>Indonesia</span><span>Cambodia</span>
            </div>
          </div>
        </div>
        <!-- Moderate Risk -->
        <div>
          <div class="hepatitis-risk-card moderate">
            <div class="card-icon">&#127757;</div>
            <h3>Moderate Risk Areas</h3>
            <p class="desc">Eastern Europe and parts of the Mediterranean can have intermediate risk, especially for Hepatitis A.</p>
            <div class="country-list">
              <span>Turkey</span><span>Egypt</span><span>Morocco</span><span>Mexico</span><span>China</span><span>Russia</span>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <!-- Callout -->
    <div class="hepatitis-risk-callout">
      <div class="content">
        <h3><?php echo esc_html( ep_field( 'hep_risk_callout_title', 'Not Sure About Your Destination?' ) ); ?></h3>
        <p><?php echo esc_html( ep_field( 'hep_risk_callout_text', 'Hepatitis risk varies by country and region. Our pharmacist will check the latest travel health data and advise whether you need Hepatitis A, B, or the combined Twinrix vaccine for your specific trip.' ) ); ?></p>
        <div class="badges">
          <?php if ( have_rows( 'hep_risk_callout_badges' ) ) : while ( have_rows( 'hep_risk_callout_badges' ) ) : the_row(); ?>
            <span><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
          <?php endwhile; else : ?>
            <span>Destination Risk Check</span>
            <span>Expert Travel Advice</span>
            <span>Same-Day Vaccination</span>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- Footer CTA -->
    <div class="hepatitis-risk-footer">
      <div class="info-badge">
        <i class="fas fa-user-doctor"></i>
        <?php echo esc_html( ep_field( 'hep_risk_footer_text', "Unsure about your destination? We'll check the latest risk data for you." ) ); ?>
      </div>
      <div class="actions">
        <a href="<?php echo esc_url( ep_field( 'hep_risk_cta_url', '' ) ?: ep_booking_url() ); ?>" class="cta-button primary-cta">Book Consultation</a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">Call <?php echo esc_html( ep_phone() ); ?></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     7. APPOINTMENT DETAILS
     ============================================================ -->
<section class="hepatitis-details-section">
  <div class="section-container">
    <div class="hepatitis-details-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'hep_details_badge', 'VACCINATION DETAILS' ) ); ?></span>
      </div>
      <h2 class="hepatitis-details-title"><?php echo esc_html( ep_field( 'hep_details_title', 'What to Expect at Your Appointment' ) ); ?></h2>
      <p class="hepatitis-details-desc"><?php echo esc_html( ep_field( 'hep_details_desc', 'Simple, straightforward vaccination process at our Ashford clinic' ) ); ?></p>
    </div>

    <!-- Hero Image -->
    <div class="hepatitis-details-hero-image">
      <?php
      $details_image_id  = ep_field( 'hep_details_image' );
      $details_image_url = $details_image_id ? wp_get_attachment_image_url( $details_image_id, 'large' ) : '';
      if ( $details_image_url ) :
      ?>
        <img src="<?php echo esc_url( $details_image_url ); ?>" alt="Pharmacy vaccination appointment" />
      <?php endif; ?>
    </div>

    <!-- Detail Cards -->
    <div class="hepatitis-details-grid">
      <?php if ( have_rows( 'hep_details' ) ) : while ( have_rows( 'hep_details' ) ) : the_row(); ?>
        <div class="hepatitis-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
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

<!-- ============================================================
     8. FAQ
     ============================================================ -->
<section class="hepatitis-faq-section">
  <div class="section-container">
    <div class="hepatitis-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'hep_faq_badge', 'HEPATITIS FAQs' ) ); ?></span>
      </div>
      <h2 class="hepatitis-faq-title"><?php echo esc_html( ep_field( 'hep_faq_title', 'Common Questions' ) ); ?></h2>
      <p class="hepatitis-faq-desc"><?php echo esc_html( ep_field( 'hep_faq_desc', 'Everything you need to know about Hepatitis vaccination' ) ); ?></p>
    </div>

    <div class="hepatitis-faq-list">
      <?php if ( have_rows( 'hep_faqs' ) ) : $faq_num = 0; while ( have_rows( 'hep_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="hepatitis-faq-item">
          <button class="hepatitis-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html( str_pad( $faq_num, 2, '0', STR_PAD_LEFT ) ); ?></span>
            <span class="text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="hepatitis-faq-content">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitis-faq-item">
          <button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Can I get Hepatitis A and B vaccines together?</span><i class="fas fa-plus icon"></i></button>
          <div class="hepatitis-faq-content"><p>Yes, there is a combined vaccine called Twinrix which protects against both Hepatitis A and B. This is often a convenient option for travellers who need protection against both diseases.</p></div>
        </div>
        <div class="hepatitis-faq-item">
          <button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How long do the vaccines last?</span><i class="fas fa-plus icon"></i></button>
          <div class="hepatitis-faq-content"><p>Hepatitis A: One dose lasts 1 year. A booster at 6-12 months extends protection to 25 years. Hepatitis B: A full course of 3 doses usually provides lifelong protection for most people.</p></div>
        </div>
        <div class="hepatitis-faq-item">
          <button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">I'm travelling soon, is it too late?</span><i class="fas fa-plus icon"></i></button>
          <div class="hepatitis-faq-content"><p>It's best to start 6 weeks before travel, but accelerated schedules are available for Hepatitis B (doses at 0, 7, 21 days). Hepatitis A protection starts developing after 2 weeks. Contact us even if you're travelling soon.</p></div>
        </div>
        <div class="hepatitis-faq-item">
          <button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button>
          <div class="hepatitis-faq-content"><p>Side effects are usually mild and short-lived, such as soreness at the injection site, headache, or fatigue. Serious side effects are extremely rare.</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     9. FINAL CTA
     ============================================================ -->
<section class="hepatitis-cta-section">
  <div class="hepatitis-cta-bg"></div>
  <div class="section-container">
    <div class="hepatitis-cta-content">
      <div class="hepatitis-cta-badges">
        <?php if ( have_rows( 'hep_cta_badges' ) ) : while ( have_rows( 'hep_cta_badges' ) ) : the_row(); ?>
          <span class="badge"><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Expert Advice</span>
          <span class="badge">Combined Vaccine Available</span>
        <?php endif; ?>
      </div>

      <h2 class="hepatitis-cta-title"><?php echo esc_html( ep_field( 'hep_cta_title', 'Protect your health while travelling' ) ); ?></h2>
      <p class="hepatitis-cta-desc"><?php echo esc_html( ep_field( 'hep_cta_desc', 'Book your Hepatitis vaccination with our expert team today. Quick, convenient, and professional service.' ) ); ?></p>

      <div class="hepatitis-cta-actions">
        <a href="<?php echo esc_url( ep_field( 'hep_cta_primary_url', '' ) ?: ep_booking_url() ); ?>" class="cta-button primary-cta white-btn"><?php echo esc_html( ep_field( 'hep_cta_primary_text', 'Book Vaccination' ) ); ?></a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta outline-btn">Call <?php echo esc_html( ep_phone() ); ?></a>
      </div>

      <div class="hepatitis-cta-checks">
        <?php if ( have_rows( 'hep_cta_checks' ) ) : while ( have_rows( 'hep_cta_checks' ) ) : the_row(); ?>
          <div class="check"><i class="fas fa-check-circle"></i> <?php echo esc_html( get_sub_field( 'text' ) ); ?></div>
        <?php endwhile; else : ?>
          <div class="check"><i class="fas fa-check-circle"></i> Combined Vaccine</div>
          <div class="check"><i class="fas fa-check-circle"></i> Expert Assessment</div>
          <div class="check"><i class="fas fa-check-circle"></i> Same-Day Service</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
