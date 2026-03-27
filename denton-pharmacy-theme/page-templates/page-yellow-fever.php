<?php
/**
 * Template Name: Yellow Fever Vaccination
 * @package Denton_Pharmacy
 */

get_header();
?>

<!-- ============================================================
     1. BREADCRUMB + HERO
     ============================================================ -->
<div class="yellowfever-breadcrumb">
  <div class="section-container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
    <span class="separator">/</span>
    <a href="<?php echo esc_url( dp_field( 'yf_parent_url', home_url( '/travel-health/' ) ) ); ?>">Travel Health</a>
    <span class="separator">/</span>
    <span class="current">Yellow Fever Vaccination</span>
  </div>
</div>

<?php
$hero_image_id  = dp_field( 'yf_hero_image' );
$hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'full' ) : '';
?>
<section class="yellowfever-hero-section"<?php if ( $hero_image_url ) : ?> style="background-image: url('<?php echo esc_url( $hero_image_url ); ?>');"<?php endif; ?>>
  <div class="yellowfever-hero-overlay"></div>
  <div class="yellowfever-hero-dots"></div>

  <div class="section-container">
    <div class="yellowfever-hero-content">
      <div class="yellowfever-hero-line"></div>
      <span class="yellowfever-hero-label"><?php echo esc_html( dp_field( 'yf_hero_label', 'OFFICIAL YELLOW FEVER CENTRE' ) ); ?></span>

      <h1 class="yellowfever-hero-title"><?php echo esc_html( dp_field( 'yf_hero_title', 'Yellow Fever Vaccination Service in Denton' ) ); ?></h1>

      <p class="yellowfever-hero-description">
        <?php echo esc_html( dp_field( 'yf_hero_description', 'We are an official NHS Yellow Fever Vaccination Centre. Get your vaccination and International Certificate of Vaccination (ICVP) at Denton Pharmacy.' ) ); ?>
      </p>

      <div class="yellowfever-hero-actions">
        <a href="<?php echo esc_url( dp_field( 'yf_hero_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button yellowfever-btn-primary">
          <?php echo esc_html( dp_field( 'yf_hero_cta_text', 'Book Yellow Fever Vaccination' ) ); ?>
        </a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button yellowfever-btn-secondary">
          Call <?php echo esc_html( dp_phone() ); ?>
        </a>
      </div>

      <div class="yellowfever-hero-badges">
        <?php if ( have_rows( 'yf_hero_badges' ) ) : while ( have_rows( 'yf_hero_badges' ) ) : the_row(); ?>
          <div class="yellowfever-hero-badge"><?php echo esc_html( get_sub_field( 'text' ) ); ?></div>
        <?php endwhile; else : ?>
          <div class="yellowfever-hero-badge">Official Yellow Fever Centre</div>
          <div class="yellowfever-hero-badge">ICVP Certificate</div>
          <div class="yellowfever-hero-badge">Same Day Appointments</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     2. CERTIFICATION / PHARMACIST
     ============================================================ -->
<section class="yellowfever-cert-section">
  <div class="section-container">
    <div class="yellowfever-cert-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'yf_cert_badge', 'OFFICIAL CENTRE' ) ); ?></span>
      </div>
      <h2 class="yellowfever-cert-title"><?php echo esc_html( dp_field( 'yf_cert_title', 'Designated Yellow Fever Vaccination Centre' ) ); ?></h2>
      <p class="yellowfever-cert-desc"><?php echo esc_html( dp_field( 'yf_cert_desc', 'Authorised to administer yellow fever vaccinations and issue international certificates' ) ); ?></p>
    </div>

    <div class="yellowfever-cert-grid">
      <!-- Image Column -->
      <div class="yellowfever-cert-image-wrapper">
        <div class="yellowfever-cert-image-card">
          <?php
          $cert_image_id = dp_field( 'yf_cert_image' );
          $cert_image_url = $cert_image_id ? wp_get_attachment_image_url( $cert_image_id, 'large' ) : '';
          if ( ! $cert_image_url ) {
              $cert_image_url = 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=800&h=1000&fit=crop';
          }
          ?>
          <img src="<?php echo esc_url( $cert_image_url ); ?>" alt="Yellow Fever vaccination specialist" class="yellowfever-cert-image" />
          <div class="yellowfever-cert-name-tag">
            <span class="name"><?php echo esc_html( dp_field( 'yf_cert_nametag_name', 'Ahmed Al-Liabi' ) ); ?></span>
            <span class="role"><?php echo esc_html( dp_field( 'yf_cert_nametag_role', 'Lead Pharmacist & Yellow Fever Specialist' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Content Column -->
      <div class="yellowfever-cert-content">
        <div class="yellowfever-cert-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( dp_field( 'yf_cert_highlight', 'NHS Designated Yellow Fever Centre' ) ); ?></span>
        </div>

        <h3 class="yellowfever-cert-subtitle"><?php echo esc_html( dp_field( 'yf_cert_subtitle', 'Why Choose Our Centre' ) ); ?></h3>
        <p class="yellowfever-cert-text"><?php echo esc_html( dp_field( 'yf_cert_text', 'As an officially designated Yellow Fever Vaccination Centre, we are authorised by NaTHNaC to administer the Stamaril vaccine and issue the International Certificate of Vaccination or Prophylaxis (ICVP). Our lead pharmacist has specialist training in travel health.' ) ); ?></p>

        <div class="yellowfever-cert-features">
          <?php if ( have_rows( 'yf_cert_features' ) ) : while ( have_rows( 'yf_cert_features' ) ) : the_row(); ?>
            <div class="yellowfever-cert-feature">
              <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html( get_sub_field( 'title' ) ); ?></strong>
                <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="yellowfever-cert-feature">
              <div class="icon"><i class="fas fa-certificate"></i></div>
              <div class="text"><strong>NaTHNaC Registered</strong><p>Officially registered with the National Travel Health Network and Centre.</p></div>
            </div>
            <div class="yellowfever-cert-feature">
              <div class="icon"><i class="fas fa-passport"></i></div>
              <div class="text"><strong>ICVP Certificate</strong><p>We issue the International Certificate of Vaccination required for border entry.</p></div>
            </div>
            <div class="yellowfever-cert-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Single Dose Protection</strong><p>One injection provides lifelong protection for most travellers.</p></div>
            </div>
            <div class="yellowfever-cert-feature">
              <div class="icon"><i class="fas fa-user-md"></i></div>
              <div class="text"><strong>Expert Assessment</strong><p>Full suitability screening before vaccination to ensure your safety.</p></div>
            </div>
          <?php endif; ?>
        </div>

        <div class="yellowfever-cert-actions">
          <a href="<?php echo esc_url( dp_field( 'yf_cert_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta"><?php echo esc_html( dp_field( 'yf_cert_cta_text', 'Book Yellow Fever Vaccination' ) ); ?></a>
          <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta">Call <?php echo esc_html( dp_phone() ); ?></a>
        </div>

        <!-- Callout Box -->
        <div class="yellowfever-cert-callout">
          <div class="header">
            <span class="badge"><?php echo esc_html( dp_field( 'yf_cert_callout_badge', 'IMPORTANT' ) ); ?></span>
            <h4><?php echo esc_html( dp_field( 'yf_cert_callout_title', '10-Day Validity Rule' ) ); ?></h4>
          </div>
          <p><?php echo esc_html( dp_field( 'yf_cert_callout_text', 'Your yellow fever certificate becomes valid 10 days after vaccination. Please ensure you are vaccinated at least 10 days before entering a country that requires proof of vaccination.' ) ); ?></p>
          <p class="note"><?php echo esc_html( dp_field( 'yf_cert_callout_note', 'Once valid, the certificate provides lifelong proof of vaccination.' ) ); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     3. STATS BAR
     ============================================================ -->
<section class="yellowfever-stats-section">
  <div class="section-container">
    <div class="yellowfever-stats-bar">
      <?php if ( have_rows( 'yf_stats' ) ) : $stat_i = 0; while ( have_rows( 'yf_stats' ) ) : the_row(); $stat_i++; ?>
        <?php if ( $stat_i > 1 ) : ?><div class="yellowfever-stat-divider"></div><?php endif; ?>
        <div class="yellowfever-stat-item">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></span>
            <span class="label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="yellowfever-stat-item"><div class="icon"><i class="fas fa-certificate"></i></div><div class="content"><span class="number">Official</span><span class="label">YF Centre</span></div></div>
        <div class="yellowfever-stat-divider"></div>
        <div class="yellowfever-stat-item"><div class="icon"><i class="fas fa-syringe"></i></div><div class="content"><span class="number">1 Dose</span><span class="label">Lifelong Protection</span></div></div>
        <div class="yellowfever-stat-divider"></div>
        <div class="yellowfever-stat-item"><div class="icon"><i class="fas fa-passport"></i></div><div class="content"><span class="number">ICVP</span><span class="label">Certificate Issued</span></div></div>
        <div class="yellowfever-stat-divider"></div>
        <div class="yellowfever-stat-item"><div class="icon"><i class="fas fa-clock"></i></div><div class="content"><span class="number">Same Day</span><span class="label">Appointments</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     4. ABOUT YELLOW FEVER
     ============================================================ -->
<section class="yellowfever-about-section">
  <div class="section-container">
    <div class="yellowfever-about-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'yf_about_badge', 'ABOUT THE DISEASE' ) ); ?></span>
      </div>
      <h2 class="yellowfever-about-title"><?php echo esc_html( dp_field( 'yf_about_title', 'What is Yellow Fever?' ) ); ?></h2>
      <p class="yellowfever-about-desc"><?php echo esc_html( dp_field( 'yf_about_desc', 'A serious viral infection spread by mosquitoes in tropical regions' ) ); ?></p>
    </div>

    <div class="yellowfever-about-content-grid">
      <!-- Image -->
      <div class="yellowfever-about-image-wrapper">
        <div class="yellowfever-about-image-card">
          <?php
          $about_image_id = dp_field( 'yf_about_image' );
          $about_image_url = $about_image_id ? wp_get_attachment_image_url( $about_image_id, 'large' ) : '';
          if ( ! $about_image_url ) {
              $about_image_url = 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=800&h=1000&fit=crop';
          }
          ?>
          <img src="<?php echo esc_url( $about_image_url ); ?>" alt="Yellow Fever information" />
        </div>
      </div>

      <!-- Info Cards -->
      <div class="yellowfever-about-cards-grid">
        <?php if ( have_rows( 'yf_about_cards' ) ) : while ( have_rows( 'yf_about_cards' ) ) : the_row(); ?>
          <div class="yellowfever-info-card">
            <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
            <h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="yellowfever-info-card"><div class="icon"><i class="fas fa-mosquito"></i></div><h3>Mosquito-Borne</h3><p>Spread by infected Aedes mosquitoes that bite during the day, particularly at dawn and dusk.</p></div>
          <div class="yellowfever-info-card"><div class="icon"><i class="fas fa-virus"></i></div><h3>Viral Infection</h3><p>Causes fever, headache, jaundice, and in severe cases can lead to organ failure and death.</p></div>
          <div class="yellowfever-info-card"><div class="icon"><i class="fas fa-globe-africa"></i></div><h3>Tropical Regions</h3><p>Found in parts of Africa and South America. Over 40 countries are considered at risk.</p></div>
          <div class="yellowfever-info-card"><div class="icon"><i class="fas fa-triangle-exclamation"></i></div><h3>No Cure</h3><p>There is no specific treatment for Yellow Fever. Prevention through vaccination is the best defence.</p></div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Warning Callout -->
    <div class="yellowfever-about-callout">
      <div class="badge"><?php echo esc_html( dp_field( 'yf_about_callout_badge', 'SERIOUS RISK' ) ); ?></div>
      <h3><?php echo esc_html( dp_field( 'yf_about_callout_title', 'Up to 50% Fatality Rate in Severe Cases' ) ); ?></h3>
      <p><?php echo esc_html( dp_field( 'yf_about_callout_text', 'Yellow Fever can be fatal. There is no antiviral treatment. Vaccination provides the best protection and is required for entry to many countries. A single dose gives lifelong protection for most travellers.' ) ); ?></p>
    </div>
  </div>
</section>

<!-- ============================================================
     5. WHO NEEDS VACCINATION
     ============================================================ -->
<section class="yellowfever-needs-section">
  <div class="section-container">
    <div class="yellowfever-needs-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'yf_needs_badge', 'WHO NEEDS VACCINATION' ) ); ?></span>
      </div>
      <h2 class="yellowfever-needs-title"><?php echo esc_html( dp_field( 'yf_needs_title', 'Do You Need the Yellow Fever Vaccine?' ) ); ?></h2>
      <p class="yellowfever-needs-desc"><?php echo esc_html( dp_field( 'yf_needs_desc', 'Required or recommended depending on your destination' ) ); ?></p>
    </div>

    <div class="yellowfever-needs-grid">
      <?php if ( have_rows( 'yf_needs_cards' ) ) : while ( have_rows( 'yf_needs_cards' ) ) : the_row(); ?>
        <div class="yellowfever-needs-card <?php echo esc_attr( get_sub_field( 'type' ) ); ?>">
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
        <div class="yellowfever-needs-card required">
          <div class="card-badge">REQUIRED</div>
          <h3>Required for Entry</h3>
          <p>Many countries in Africa and South America legally require proof of Yellow Fever vaccination for entry.</p>
          <ul class="check-list">
            <li><i class="fas fa-check"></i> Travelling to countries that require proof of vaccination</li>
            <li><i class="fas fa-check"></i> Arriving from a country with Yellow Fever risk</li>
            <li><i class="fas fa-check"></i> Transit through an endemic country</li>
          </ul>
        </div>
        <div class="yellowfever-needs-card recommended">
          <div class="card-badge">RECOMMENDED</div>
          <h3>Recommended for Protection</h3>
          <p>Even where not legally required, vaccination is strongly recommended for your own health when visiting at-risk areas.</p>
          <ul class="check-list">
            <li><i class="fas fa-check"></i> Travel to areas with Yellow Fever transmission</li>
            <li><i class="fas fa-check"></i> Outdoor activities in tropical regions</li>
            <li><i class="fas fa-check"></i> Extended stays in endemic areas</li>
          </ul>
        </div>
      <?php endif; ?>
    </div>

    <div class="yellowfever-needs-info">
      <i class="fas fa-info-circle"></i>
      <span><?php echo esc_html( dp_field( 'yf_needs_info', 'Not sure if you need the vaccine? Book a consultation and we\'ll check your destination requirements.' ) ); ?></span>
    </div>
  </div>
</section>

<!-- ============================================================
     6. RISK COUNTRIES
     ============================================================ -->
<section class="yellowfever-risk-section">
  <div class="section-container">
    <div class="yellowfever-risk-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'yf_risk_badge', 'RISK COUNTRIES' ) ); ?></span>
      </div>
      <h2 class="yellowfever-risk-title"><?php echo esc_html( dp_field( 'yf_risk_title', 'Yellow Fever Risk Countries' ) ); ?></h2>
      <p class="yellowfever-risk-desc"><?php echo esc_html( dp_field( 'yf_risk_desc', 'Yellow Fever is found in tropical regions of Africa and South America. Check if your destination requires vaccination.' ) ); ?></p>
    </div>

    <!-- Stats Boxes -->
    <div class="yellowfever-risk-stats">
      <?php if ( have_rows( 'yf_risk_stats' ) ) : while ( have_rows( 'yf_risk_stats' ) ) : the_row(); ?>
        <div class="stat-box">
          <span class="num"><?php echo esc_html( get_sub_field( 'num' ) ); ?></span>
          <span class="label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></span>
          <span class="sub"><?php echo esc_html( get_sub_field( 'sub' ) ); ?></span>
        </div>
      <?php endwhile; else : ?>
        <div class="stat-box"><span class="num">47</span><span class="label">Endemic Countries</span><span class="sub">Across 2 continents</span></div>
        <div class="stat-box"><span class="num">34</span><span class="label">African Countries</span><span class="sub">Sub-Saharan Africa</span></div>
        <div class="stat-box"><span class="num">13</span><span class="label">South American</span><span class="sub">Tropical regions</span></div>
      <?php endif; ?>
    </div>

    <!-- Continent Cards -->
    <div class="yellowfever-risk-grid">
      <?php if ( have_rows( 'yf_risk_zones' ) ) : while ( have_rows( 'yf_risk_zones' ) ) : the_row(); ?>
        <div>
          <?php
          $zone_image_id = get_sub_field( 'image' );
          $zone_image_url = $zone_image_id ? wp_get_attachment_image_url( $zone_image_id, 'large' ) : get_sub_field( 'image_url' );
          ?>
          <?php if ( $zone_image_url ) : ?>
            <div class="yellowfever-destination-image">
              <img src="<?php echo esc_url( $zone_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            </div>
          <?php endif; ?>
          <?php $zone_level = get_sub_field( 'level' ) ?: get_sub_field( 'type' ); ?>
          <div class="yellowfever-risk-card <?php echo esc_attr( $zone_level ); ?>">
            <div class="card-icon"><i class="fas <?php echo $zone_level === 'america' ? 'fa-globe-americas' : 'fa-globe-africa'; ?>"></i></div>
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
        <!-- Africa -->
        <div>
          <div class="yellowfever-destination-image">
            <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?w=1200&h=600&fit=crop" alt="Africa" />
          </div>
          <div class="yellowfever-risk-card africa">
            <div class="card-icon">&#127758;</div>
            <h3>Africa</h3>
            <p class="desc">The majority of Yellow Fever cases occur in sub-Saharan Africa. Many countries require proof of vaccination for entry.</p>
            <div class="country-list">
              <span>Kenya</span><span>Nigeria</span><span>Ghana</span><span>Uganda</span><span>Tanzania</span><span>Cameroon</span><span>Senegal</span><span>Ethiopia</span>
            </div>
            <p class="note">+ 26 more African countries with risk areas</p>
          </div>
        </div>
        <!-- South America -->
        <div>
          <div class="yellowfever-destination-image">
            <img src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?w=1200&h=600&fit=crop" alt="South America" />
          </div>
          <div class="yellowfever-risk-card america">
            <div class="card-icon">&#127757;</div>
            <h3>South America</h3>
            <p class="desc">Parts of South America have active Yellow Fever transmission. Brazil and surrounding countries carry the highest risk.</p>
            <div class="country-list">
              <span>Brazil</span><span>Peru</span><span>Colombia</span><span>Bolivia</span><span>Ecuador</span><span>Venezuela</span><span>Argentina</span><span>Paraguay</span>
            </div>
            <p class="note">+ 5 more South American countries with risk areas</p>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <!-- Callout -->
    <div class="yellowfever-risk-callout">
      <div class="content">
        <h3><?php echo esc_html( dp_field( 'yf_risk_callout_title', 'Not Sure About Your Destination?' ) ); ?></h3>
        <p><?php echo esc_html( dp_field( 'yf_risk_callout_text', 'Yellow Fever requirements change regularly. Our pharmacist will check the latest country-by-country requirements and advise whether you need the vaccine for your specific trip.' ) ); ?></p>
        <div class="badges">
          <?php if ( have_rows( 'yf_risk_callout_badges' ) ) : while ( have_rows( 'yf_risk_callout_badges' ) ) : the_row(); ?>
            <span><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
          <?php endwhile; else : ?>
            <span>Country Requirements Check</span>
            <span>Expert Travel Advice</span>
            <span>Certificate Issued Same Day</span>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- Footer CTA -->
    <div class="yellowfever-risk-footer">
      <div class="info-badge">
        <i class="fas fa-user-doctor"></i>
        <?php echo esc_html( dp_field( 'yf_risk_footer_text', "Unsure about your destination? We'll check the latest requirements for you." ) ); ?>
      </div>
      <div class="actions">
        <a href="<?php echo esc_url( dp_field( 'yf_risk_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button yellow-btn"><?php echo esc_html( dp_field( 'yf_risk_cta_text', 'Book Consultation' ) ); ?></a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button outline-btn">Call <?php echo esc_html( dp_phone() ); ?></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     7. APPOINTMENT DETAILS
     ============================================================ -->
<section class="yellowfever-details-section">
  <div class="section-container">
    <div class="yellowfever-details-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'yf_details_badge', 'YOUR APPOINTMENT' ) ); ?></span>
      </div>
      <h2 class="yellowfever-details-title"><?php echo esc_html( dp_field( 'yf_details_title', 'What to Expect at Your Appointment' ) ); ?></h2>
      <p class="yellowfever-details-desc"><?php echo esc_html( dp_field( 'yf_details_desc', 'Simple, straightforward vaccination process at our Denton clinic' ) ); ?></p>
    </div>

    <!-- Hero Image -->
    <div class="yellowfever-details-hero-image">
      <?php
      $details_image_id = dp_field( 'yf_details_hero_image' );
      $details_image_url = $details_image_id ? wp_get_attachment_image_url( $details_image_id, 'large' ) : '';
      if ( ! $details_image_url ) {
          $details_image_url = 'https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=1200&h=600&fit=crop';
      }
      ?>
      <img src="<?php echo esc_url( $details_image_url ); ?>" alt="Pharmacy vaccination appointment" />
    </div>

    <!-- Detail Cards -->
    <div class="yellowfever-details-grid">
      <?php if ( have_rows( 'yf_details' ) ) : while ( have_rows( 'yf_details' ) ) : the_row(); ?>
        <div class="yellowfever-detail-card">
          <div class="icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="yellowfever-detail-card"><div class="icon"><i class="fas fa-syringe"></i></div><h3>Single Dose</h3><p>Yellow Fever vaccination requires just one injection. No need for multiple appointments or a course of doses.</p></div>
        <div class="yellowfever-detail-card"><div class="icon"><i class="fas fa-infinity"></i></div><h3>Lifelong Protection</h3><p>A single dose provides lifelong immunity for most travellers. No booster doses are required.</p></div>
        <div class="yellowfever-detail-card"><div class="icon"><i class="fas fa-passport"></i></div><h3>ICVP Certificate</h3><p>We issue the International Certificate of Vaccination or Prophylaxis on the day of your appointment.</p></div>
        <div class="yellowfever-detail-card"><div class="icon"><i class="fas fa-calendar-check"></i></div><h3>10-Day Rule</h3><p>Your certificate becomes valid 10 days after vaccination. Book at least 10 days before travel.</p></div>
        <div class="yellowfever-detail-card"><div class="icon"><i class="fas fa-notes-medical"></i></div><h3>Mild Side Effects</h3><p>Some people may experience mild headache, muscle aches, or low-grade fever. Serious side effects are very rare.</p></div>
        <div class="yellowfever-detail-card"><div class="icon"><i class="fas fa-sterling-sign"></i></div><h3>Private Service</h3><p>Yellow Fever vaccination is a private service. The fee includes the vaccine, administration, and ICVP certificate.</p></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     8. FAQ
     ============================================================ -->
<section class="yellowfever-faq-section">
  <div class="section-container">
    <div class="yellowfever-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'yf_faq_badge', 'YELLOW FEVER FAQs' ) ); ?></span>
      </div>
      <h2 class="yellowfever-faq-title"><?php echo esc_html( dp_field( 'yf_faq_title', 'Common Questions' ) ); ?></h2>
      <p class="yellowfever-faq-desc"><?php echo esc_html( dp_field( 'yf_faq_desc', 'Everything you need to know about Yellow Fever vaccination' ) ); ?></p>
    </div>

    <div class="yellowfever-faq-list">
      <?php if ( have_rows( 'yf_faqs' ) ) : $faq_num = 0; while ( have_rows( 'yf_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="yellowfever-faq-item">
          <button class="yellowfever-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html( str_pad( $faq_num, 2, '0', STR_PAD_LEFT ) ); ?></span>
            <span class="text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="yellowfever-faq-content">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="yellowfever-faq-item">
          <button class="yellowfever-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Do I need a Yellow Fever certificate?</span><i class="fas fa-plus icon"></i></button>
          <div class="yellowfever-faq-content"><p>Many countries in Africa and South America require proof of Yellow Fever vaccination for entry. Some countries require it if you are arriving from a country with Yellow Fever risk. We can check requirements for your specific destination.</p></div>
        </div>
        <div class="yellowfever-faq-item">
          <button class="yellowfever-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button>
          <div class="yellowfever-faq-content"><p>Just one dose provides lifelong protection for most people. The certificate becomes valid 10 days after vaccination.</p></div>
        </div>
        <div class="yellowfever-faq-item">
          <button class="yellowfever-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button>
          <div class="yellowfever-faq-content"><p>Mild side effects such as headache, muscle aches, or low-grade fever may occur. Serious side effects are very rare. We will assess your suitability before vaccination.</p></div>
        </div>
        <div class="yellowfever-faq-item">
          <button class="yellowfever-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Who should NOT have the Yellow Fever vaccine?</span><i class="fas fa-plus icon"></i></button>
          <div class="yellowfever-faq-content"><p>The vaccine is not suitable for infants under 6 months, people with severe egg allergies, those with weakened immune systems, or people with thymus disorders. We can issue an exemption letter if needed.</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     9. FINAL CTA
     ============================================================ -->
<section class="yellowfever-cta-section">
  <div class="yellowfever-cta-bg"></div>
  <div class="section-container">
    <div class="yellowfever-cta-content">
      <div class="yellowfever-cta-badges">
        <?php if ( have_rows( 'yf_cta_badges' ) ) : while ( have_rows( 'yf_cta_badges' ) ) : the_row(); ?>
          <span class="badge"><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Official Yellow Fever Centre</span>
          <span class="badge">ICVP Certificate</span>
          <span class="badge">Same Day Appointments</span>
        <?php endif; ?>
      </div>

      <h2 class="yellowfever-cta-title"><?php echo esc_html( dp_field( 'yf_cta_title', 'Get your Yellow Fever vaccination and certificate' ) ); ?></h2>
      <p class="yellowfever-cta-desc"><?php echo esc_html( dp_field( 'yf_cta_desc', 'Book your Yellow Fever vaccination at our official centre in Denton. Certificate issued on the day.' ) ); ?></p>

      <div class="yellowfever-cta-actions">
        <a href="<?php echo esc_url( dp_field( 'yf_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta white-btn"><?php echo esc_html( dp_field( 'yf_cta_button_text', 'Book Vaccination' ) ); ?></a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta outline-btn">Call <?php echo esc_html( dp_phone() ); ?></a>
      </div>

      <div class="yellowfever-cta-checks">
        <?php if ( have_rows( 'yf_cta_checks' ) ) : while ( have_rows( 'yf_cta_checks' ) ) : the_row(); ?>
          <div class="check"><i class="fas fa-check-circle"></i> <?php echo esc_html( get_sub_field( 'text' ) ); ?></div>
        <?php endwhile; else : ?>
          <div class="check"><i class="fas fa-check-circle"></i> Official Centre</div>
          <div class="check"><i class="fas fa-check-circle"></i> ICVP Certificate</div>
          <div class="check"><i class="fas fa-check-circle"></i> Expert Advice</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
