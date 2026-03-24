<?php
/**
 * Template Name: Travel Health
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- ============================================
     E1. HERO SECTION — Split layout: warm cream left, image card right
     ============================================ -->
<section class="travel-hero-section">
  <!-- Decorative blobs -->
  <div class="travel-hero-glow travel-hero-glow-1"></div>
  <div class="travel-hero-glow travel-hero-glow-2"></div>

  <div class="section-container">
    <div class="travel-hero-grid">

      <!-- Left: Content -->
      <div class="travel-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'th_hero_badge', 'TRAVEL HEALTH SERVICES' ) ); ?></span>
        </div>

        <h1 class="travel-hero-title">
          <?php echo esc_html( bp_field( 'th_hero_title_line1', 'Wythenshawe\'s Leading' ) ); ?><br />
          <span class="travel-hero-title-accent"><?php echo esc_html( bp_field( 'th_hero_title_line2', 'Travel Clinic' ) ); ?></span>
        </h1>

        <p class="travel-hero-description">
          <?php echo esc_html( bp_field( 'th_hero_description', 'Expert travel jabs and health advice for your next adventure. Book your appointment at our Wythenshawe travel clinic with Ahmed.' ) ); ?>
        </p>

        <div class="travel-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'th_hero_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta travel-hero-cta-primary">
            <?php echo esc_html( bp_field( 'th_hero_cta_text', 'Book Appointment' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta travel-hero-cta-secondary">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( bp_phone() ); ?>
          </a>
        </div>

        <!-- Trust Badges -->
        <div class="travel-hero-trust">
          <div class="travel-hero-trust-item">
            <i class="fas fa-shield-virus"></i>
            <span><?php echo esc_html( bp_field( 'th_trust_1', 'Yellow Fever Centre' ) ); ?></span>
          </div>
          <div class="travel-hero-trust-item">
            <i class="fas fa-syringe"></i>
            <span><?php echo esc_html( bp_field( 'th_trust_2', 'All Travel Vaccinations' ) ); ?></span>
          </div>
          <div class="travel-hero-trust-item">
            <i class="fas fa-user-doctor"></i>
            <span><?php echo esc_html( bp_field( 'th_trust_3', 'Expert Travel Advice' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Image card -->
      <div class="travel-hero-visual">
        <div class="travel-hero-visual-glow"></div>
        <?php
        $th_hero_bg_id  = bp_field( 'th_hero_bg_image' );
        $th_hero_bg_url = $th_hero_bg_id ? wp_get_attachment_image_url( $th_hero_bg_id, 'full' ) : 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1600&h=900&fit=crop';
        ?>
        <div class="travel-hero-image-card">
          <img src="<?php echo esc_url( $th_hero_bg_url ); ?>" alt="<?php echo esc_attr( bp_field( 'th_hero_bg_alt', 'Travel health destination' ) ); ?>" />
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     E2. STATS BAR — Purple background, 4-column
     ============================================ -->
<section class="travel-stats-section">
  <div class="travel-stats-shimmer"></div>
  <div class="section-container">
    <div class="travel-stats-grid">
      <?php
      $stats = array(
        array( 'icon' => 'th_stat_1_icon', 'number' => 'th_stat_1_number', 'label' => 'th_stat_1_label', 'def_icon' => 'fas fa-shield-virus', 'def_number' => 'Official', 'def_label' => 'Yellow Fever Centre' ),
        array( 'icon' => 'th_stat_2_icon', 'number' => 'th_stat_2_number', 'label' => 'th_stat_2_label', 'def_icon' => 'fas fa-passport', 'def_number' => '1,000+', 'def_label' => 'Travellers Protected' ),
        array( 'icon' => 'th_stat_3_icon', 'number' => 'th_stat_3_number', 'label' => 'th_stat_3_label', 'def_icon' => 'fas fa-award', 'def_number' => '15+', 'def_label' => 'Years Experience' ),
        array( 'icon' => 'th_stat_4_icon', 'number' => 'th_stat_4_number', 'label' => 'th_stat_4_label', 'def_icon' => 'fas fa-shield-halved', 'def_number' => 'GPhC', 'def_label' => 'Registered' ),
      );
      foreach ( $stats as $stat ) :
      ?>
        <div class="travel-stat-item">
          <div class="travel-stat-icon">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( $stat['icon'], $stat['def_icon'] ) ) ); ?>"></i>
          </div>
          <div class="travel-stat-content">
            <p class="travel-stat-number"><?php echo esc_html( bp_field( $stat['number'], $stat['def_number'] ) ); ?></p>
            <p class="travel-stat-label"><?php echo esc_html( bp_field( $stat['label'], $stat['def_label'] ) ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================
     E3. SERVICES — 5-card grid with floating icons
     ============================================ -->
<section class="travel-services-section travel-reveal" id="services">
  <div class="section-container">
    <div class="travel-services-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'th_services_badge', 'COMPREHENSIVE TRAVEL HEALTH' ) ); ?></span>
      </div>
      <h2 class="travel-services-title">
        <?php echo esc_html( bp_field( 'th_services_title_highlight', 'Everything you need' ) ); ?> <?php echo esc_html( bp_field( 'th_services_title_rest', 'for safe travel' ) ); ?>
      </h2>
      <p class="travel-services-description"><?php echo esc_html( bp_field( 'th_services_description', 'From expert consultations to all vaccinations and official certificates' ) ); ?></p>
    </div>

    <div class="travel-services-grid">
      <?php if ( have_rows( 'th_services' ) ) : while ( have_rows( 'th_services' ) ) : the_row();
        $svc_image_id  = get_sub_field( 'image' );
        $svc_image_url = $svc_image_id ? wp_get_attachment_image_url( $svc_image_id, 'medium_large' ) : '';
      ?>
        <div class="travel-service-card-premium">
          <div class="travel-service-image-wrapper">
            <?php if ( $svc_image_url ) : ?>
              <img src="<?php echo esc_url( $svc_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" class="travel-service-image" />
            <?php endif; ?>
            <div class="travel-service-overlay"></div>
          </div>
          <div class="travel-service-content">
            <div class="travel-service-icon-small">
              <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <h3 class="travel-service-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="travel-service-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $services = array(
          array( 'icon' => 'fas fa-syringe', 'title' => 'Travel Vaccinations', 'desc' => 'Full range including yellow fever, rabies, and typhoid.' ),
          array( 'icon' => 'fas fa-pills', 'title' => 'Malaria Prevention', 'desc' => 'Prescription medication and guidance for your trip.' ),
          array( 'icon' => 'fas fa-kit-medical', 'title' => 'Travel Health Kits', 'desc' => 'Personalised first aid kits tailored for your destination.' ),
          array( 'icon' => 'fas fa-certificate', 'title' => 'Health Certificates', 'desc' => 'Official vaccination certificates for border entry.' ),
          array( 'icon' => 'fas fa-clipboard-check', 'title' => 'Travel Health Advice', 'desc' => 'Destination-specific guidance from expert pharmacists.' ),
        );
        foreach ( $services as $svc ) :
        ?>
          <div class="travel-service-card-premium">
            <div class="travel-service-image-wrapper">
              <div class="travel-service-overlay"></div>
            </div>
            <div class="travel-service-content">
              <div class="travel-service-icon-small"><i class="<?php echo esc_attr( $svc['icon'] ); ?>"></i></div>
              <h3 class="travel-service-title"><?php echo esc_html( $svc['title'] ); ?></h3>
              <p class="travel-service-desc"><?php echo esc_html( $svc['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     E4. VACCINATIONS GRID — 4-column; yellow fever card has gradient
     ============================================ -->
<section class="travel-vaccines-section travel-reveal">
  <div class="travel-vaccines-blob-1"></div>
  <div class="travel-vaccines-blob-2"></div>
  <div class="section-container">
    <div class="travel-vaccines-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'th_vaccines_badge', 'ALL VACCINATIONS' ) ); ?></span>
      </div>
      <h3 class="travel-vaccines-title">
        <?php echo esc_html( bp_field( 'th_vaccines_title_highlight', 'Available' ) ); ?> <?php echo esc_html( bp_field( 'th_vaccines_title_rest', 'Vaccinations' ) ); ?>
      </h3>
    </div>

    <div class="travel-vaccines-grid">
      <?php if ( have_rows( 'th_vaccinations' ) ) : while ( have_rows( 'th_vaccinations' ) ) : the_row();
        $is_featured = get_sub_field( 'is_featured' );
        $card_class  = $is_featured ? 'travel-vaccine-card travel-vaccine-card-yellow' : 'travel-vaccine-card';
      ?>
        <div class="<?php echo esc_attr( $card_class ); ?>">
          <div class="travel-vaccine-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h4 class="travel-vaccine-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h4>
          <?php $badge = get_sub_field( 'badge' ); if ( $badge ) : ?>
            <span class="travel-vaccine-badge"><?php echo esc_html( $badge ); ?></span>
          <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <div class="travel-vaccine-card travel-vaccine-card-yellow">
          <div class="travel-vaccine-icon"><i class="fas fa-shield-virus"></i></div>
          <h4 class="travel-vaccine-name">Yellow Fever</h4>
          <span class="travel-vaccine-badge">Official Centre</span>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Typhoid</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Hepatitis A</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Hepatitis B</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Rabies</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Cholera</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Japanese Encephalitis</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Meningitis</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Tetanus</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Diphtheria</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Polio</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Tick-borne Encephalitis</h4>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     E5. WHY CHOOSE US — pharmacist strip + 4-card premium grid
     ============================================ -->
<section class="travel-why-section travel-reveal">
  <div class="section-container">
    <!-- Decorative background elements -->
    <div class="travel-why-bg-glow travel-why-bg-glow-1"></div>
    <div class="travel-why-bg-glow travel-why-bg-glow-2"></div>

    <div class="travel-why-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'th_why_badge', 'WHY CHOOSE US' ) ); ?></span>
      </div>
      <h2 class="travel-why-title">
        <?php echo esc_html( bp_field( 'th_why_title_highlight', 'Why choose our' ) ); ?> <span class="travel-why-title-accent"><?php echo esc_html( bp_field( 'th_why_title_rest', 'Wythenshawe travel clinic?' ) ); ?></span>
      </h2>
    </div>

    <!-- Pharmacist intro strip -->
    <?php
    $why_image_id  = bp_field( 'th_why_image' );
    if ( ! $why_image_id ) {
        $why_image_id = bp_option( 'pharmacist_image' );
    }
    $why_image_url = $why_image_id ? wp_get_attachment_image_url( $why_image_id, 'medium' ) : '';
    $pharmacist_name = bp_field( 'pharmacist_name', 'Ahmed Al-Liabi' );
    $pharmacist_role = bp_field( 'pharmacist_role', 'Lead Pharmacist · Independent Prescriber' );
    ?>
    <div class="travel-why-pharmacist-strip">
      <div class="travel-why-pharmacist-inner">
        <?php if ( $why_image_url ) : ?>
          <div class="travel-why-photo-wrapper">
            <img src="<?php echo esc_url( $why_image_url ); ?>" alt="<?php echo esc_attr( bp_field( 'th_why_image_alt', $pharmacist_name . ' — Bowland Pharmacy' ) ); ?>" class="travel-why-photo" />
            <div class="travel-why-photo-ring"></div>
          </div>
        <?php endif; ?>
        <div class="travel-why-pharmacist-info">
          <h3 class="travel-why-pharmacist-name"><?php echo esc_html( $pharmacist_name ); ?></h3>
          <p class="travel-why-pharmacist-role"><?php echo esc_html( $pharmacist_role ); ?></p>
        </div>
        <div class="travel-why-experience-pill">
          <span class="travel-why-experience-number"><?php echo esc_html( bp_field( 'th_why_badge_number', '15+' ) ); ?></span>
          <span class="travel-why-experience-label"><?php echo esc_html( bp_field( 'th_why_badge_label', 'Years Experience' ) ); ?></span>
        </div>
      </div>
    </div>

    <!-- 2x2 premium feature grid -->
    <div class="travel-why-grid">
      <?php if ( have_rows( 'th_why_cards' ) ) : $card_index = 0; while ( have_rows( 'th_why_cards' ) ) : the_row(); $card_index++; ?>
        <div class="travel-why-card">
          <div class="travel-why-card-top">
            <div class="travel-why-card-number"><?php echo str_pad( $card_index, 2, '0', STR_PAD_LEFT ); ?></div>
            <div class="travel-why-card-icon-wrap">
              <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
          </div>
          <h3 class="travel-why-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="travel-why-card-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <div class="travel-why-card-accent"></div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $why_cards = array(
          array( 'icon' => 'fas fa-user-doctor', 'title' => 'Expert Pharmacist Consultations', 'desc' => 'Ahmed and the team provide up-to-date advice tailored to your specific itinerary.' ),
          array( 'icon' => 'fas fa-calendar-check', 'title' => 'Flexible Appointments', 'desc' => 'Same-day and weekend appointments available to suit your schedule.' ),
          array( 'icon' => 'fas fa-tags', 'title' => 'Competitive Pricing', 'desc' => 'Transparent, affordable pricing for all vaccinations and antimalarials.' ),
          array( 'icon' => 'fas fa-location-dot', 'title' => 'Convenient Location', 'desc' => 'Easy to find in Wythenshawe with parking available nearby.' ),
        );
        foreach ( $why_cards as $i => $card ) :
        ?>
          <div class="travel-why-card">
            <div class="travel-why-card-top">
              <div class="travel-why-card-number"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></div>
              <div class="travel-why-card-icon-wrap">
                <i class="<?php echo esc_attr( $card['icon'] ); ?>"></i>
              </div>
            </div>
            <h3 class="travel-why-card-title"><?php echo esc_html( $card['title'] ); ?></h3>
            <p class="travel-why-card-description"><?php echo esc_html( $card['desc'] ); ?></p>
            <div class="travel-why-card-accent"></div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     E6. PROCESS — 4 alternating steps
     ============================================ -->
<section class="travel-process-section travel-reveal" id="process">
  <div class="section-container">
    <div class="travel-process-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'th_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="travel-process-title">
        <?php echo esc_html( bp_field( 'th_process_title_highlight', 'Your travel clinic' ) ); ?> <?php echo esc_html( bp_field( 'th_process_title_rest', 'Wythenshawe journey' ) ); ?>
      </h2>
    </div>

    <?php if ( have_rows( 'th_process_steps' ) ) : $step_index = 0; while ( have_rows( 'th_process_steps' ) ) : the_row(); $step_index++;
      $step_image_id  = get_sub_field( 'image' );
      $step_image_url = $step_image_id ? wp_get_attachment_image_url( $step_image_id, 'large' ) : '';
      $direction = ( $step_index % 2 === 1 ) ? 'left' : 'right';
    ?>
      <div class="travel-process-step travel-process-step-<?php echo $direction; ?>">
        <div class="travel-process-step-content">
          <div class="travel-process-step-number"><?php echo esc_html( $step_index ); ?></div>
          <div class="travel-process-step-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ?: get_sub_field( 'meta_icon' ) ) ); ?>"></i>
          </div>
          <h3 class="travel-process-step-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="travel-process-step-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <div class="travel-process-step-meta">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'meta_icon' ) ) ); ?>"></i>
            <span><?php echo esc_html( get_sub_field( 'meta_text' ) ); ?></span>
          </div>
        </div>
        <?php if ( $step_image_url ) : ?>
          <div class="travel-process-step-image">
            <img src="<?php echo esc_url( $step_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php if ( $step_index === 2 ) : ?>
              <div class="travel-process-step-floating-badge">
                <i class="fas fa-user-doctor"></i>
                <span>Expert Advice</span>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endwhile; else : ?>
      <?php
      $steps = array(
        array( 'title' => 'Book Consultation', 'desc' => 'Book your appointment online or call us. We recommend booking 6-8 weeks before travel, but we can often accommodate last-minute trips.', 'icon' => 'fas fa-calendar-check', 'meta_icon' => 'fas fa-clock', 'meta_text' => 'Book online 24/7' ),
        array( 'title' => 'Consultation & Vaccination', 'desc' => 'Meet with our pharmacist to discuss your itinerary and health history. We\'ll administer necessary vaccinations and provide health advice.', 'icon' => 'fas fa-user-doctor', 'meta_icon' => 'fas fa-check-circle', 'meta_text' => 'Safe & professional' ),
        array( 'title' => 'Travel with Confidence', 'desc' => 'Leave with your vaccination record card, any necessary medication (like antimalarials), and the peace of mind that you\'re protected.', 'icon' => 'fas fa-plane-departure', 'meta_icon' => 'fas fa-passport', 'meta_text' => 'Official certificates' ),
      );
      foreach ( $steps as $i => $step ) :
        $direction = ( ($i + 1) % 2 === 1 ) ? 'left' : 'right';
      ?>
        <div class="travel-process-step travel-process-step-<?php echo $direction; ?>">
          <div class="travel-process-step-content">
            <div class="travel-process-step-number"><?php echo esc_html( $i + 1 ); ?></div>
            <div class="travel-process-step-icon">
              <i class="<?php echo esc_attr( $step['icon'] ); ?>"></i>
            </div>
            <h3 class="travel-process-step-title"><?php echo esc_html( $step['title'] ); ?></h3>
            <p class="travel-process-step-description"><?php echo esc_html( $step['desc'] ); ?></p>
            <div class="travel-process-step-meta">
              <i class="<?php echo esc_attr( $step['meta_icon'] ); ?>"></i>
              <span><?php echo esc_html( $step['meta_text'] ); ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<!-- ============================================
     E7. POPULAR DESTINATIONS — 4-column card grid
     ============================================ -->
<section class="travel-destinations-section travel-reveal">
  <div class="section-container">
    <div class="travel-destinations-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'th_destinations_badge', 'POPULAR DESTINATIONS' ) ); ?></span>
      </div>
      <h2 class="travel-destinations-title">
        <?php echo esc_html( bp_field( 'th_destinations_title_highlight', 'Travelling to' ) ); ?> <?php echo esc_html( bp_field( 'th_destinations_title_rest', 'these destinations?' ) ); ?>
      </h2>
    </div>

    <div class="travel-destinations-grid">
      <?php if ( have_rows( 'th_destinations' ) ) : while ( have_rows( 'th_destinations' ) ) : the_row();
        $dest_image_id  = get_sub_field( 'image' );
        $dest_image_url = $dest_image_id ? wp_get_attachment_image_url( $dest_image_id, 'large' ) : '';
      ?>
        <a href="<?php echo esc_url( get_sub_field( 'url' ) ); ?>" class="travel-destination-card">
          <div class="travel-destination-inner">
            <?php if ( $dest_image_url ) : ?>
              <img src="<?php echo esc_url( $dest_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'name' ) ); ?>" class="travel-destination-image" />
            <?php endif; ?>
            <div class="travel-destination-overlay"></div>
            <div class="travel-destination-label">
              <h3 class="travel-destination-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
            </div>
          </div>
        </a>
      <?php endwhile; else : ?>
        <?php
        $destinations = array(
          array( 'name' => 'Thailand', 'image' => 'https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?w=400&h=500&fit=crop', 'url' => '/travel-thailand/' ),
          array( 'name' => 'India', 'image' => 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=400&h=500&fit=crop', 'url' => '/travel-india/' ),
          array( 'name' => 'Kenya', 'image' => 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=400&h=500&fit=crop', 'url' => '/travel-kenya/' ),
          array( 'name' => 'Vietnam', 'image' => 'https://images.unsplash.com/photo-1528127269322-539801943592?w=400&h=500&fit=crop', 'url' => '/travel-vietnam/' ),
          array( 'name' => 'Brazil', 'image' => 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?w=400&h=500&fit=crop', 'url' => '/travel-brazil/' ),
          array( 'name' => 'Cape Verde', 'image' => 'https://images.unsplash.com/photo-1576485290814-1c72aa4bbb8e?w=400&h=500&fit=crop', 'url' => '/travel-cape-verde/' ),
          array( 'name' => 'South Africa', 'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=400&h=500&fit=crop', 'url' => '#' ),
          array( 'name' => 'Costa Rica', 'image' => 'https://images.unsplash.com/photo-1518182170546-0766bc6f9213?w=400&h=500&fit=crop&q=80', 'url' => '#' ),
        );
        foreach ( $destinations as $dest ) :
        ?>
          <a href="<?php echo esc_url( $dest['url'] ); ?>" class="travel-destination-card">
            <div class="travel-destination-inner">
              <img src="<?php echo esc_url( $dest['image'] ); ?>" alt="<?php echo esc_attr( $dest['name'] ); ?>" class="travel-destination-image" />
              <div class="travel-destination-overlay"></div>
              <div class="travel-destination-label">
                <h3 class="travel-destination-name"><?php echo esc_html( $dest['name'] ); ?></h3>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     E8. FAQ — Serif font styling (Playfair Display)
     .travel-faq-item / .travel-faq-active
     ============================================ -->
<section class="travel-faq-section travel-reveal" id="faq">
  <div class="section-container">
    <div class="travel-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'th_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="travel-faq-title">
        <?php echo esc_html( bp_field( 'th_faq_title_highlight', 'Travel health' ) ); ?> <?php echo esc_html( bp_field( 'th_faq_title_rest', 'questions answered' ) ); ?>
      </h2>
    </div>

    <div class="travel-faq-list">
      <?php if ( have_rows( 'th_faqs' ) ) : $faq_num = 0; while ( have_rows( 'th_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="travel-faq-item">
          <button class="travel-faq-question" onclick="toggleFAQ(this)">
            <span class="travel-faq-number"><?php echo esc_html( str_pad( $faq_num, 2, '0', STR_PAD_LEFT ) ); ?></span>
            <span class="travel-faq-question-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <div class="travel-faq-icon">
              <i class="fas fa-plus"></i>
            </div>
          </button>
          <div class="travel-faq-answer">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $faqs = array(
          array( 'q' => 'When should I book my travel vaccinations?', 'a' => 'We recommend booking your appointment 6-8 weeks before you travel. Some vaccinations require multiple doses over a few weeks to be fully effective. However, we can often accommodate last-minute travellers, so please contact us even if you\'re travelling sooner.' ),
          array( 'q' => 'Do I need a yellow fever certificate?', 'a' => 'Some countries require an International Certificate of Vaccination or Prophylaxis (ICVP) for yellow fever as a condition of entry. We are a designated Yellow Fever Vaccination Centre and can provide this official certificate. We\'ll advise you on the specific requirements for your destination during your consultation.' ),
          array( 'q' => 'What should I bring to my appointment?', 'a' => 'Please bring details of your itinerary (countries, regions, duration), any previous vaccination records, and a list of current medications. This helps us provide the most accurate and safe advice for your trip.' ),
          array( 'q' => 'Do you provide malaria tablets?', 'a' => 'Yes, we can prescribe and supply malaria prevention tablets (antimalarials) such as Malarone, Doxycycline, and Lariam. We\'ll assess your risk based on your destination and recommend the most suitable option for you.' ),
        );
        foreach ( $faqs as $i => $faq ) :
        ?>
          <div class="travel-faq-item">
            <button class="travel-faq-question" onclick="toggleFAQ(this)">
              <span class="travel-faq-number"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></span>
              <span class="travel-faq-question-text"><?php echo esc_html( $faq['q'] ); ?></span>
              <div class="travel-faq-icon">
                <i class="fas fa-plus"></i>
              </div>
            </button>
            <div class="travel-faq-answer">
              <p><?php echo esc_html( $faq['a'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     E9. FINAL CTA — Purple gradient
     ============================================ -->
<section class="travel-cta-section travel-reveal">
  <div class="travel-cta-glow-1"></div>
  <div class="travel-cta-glow-2"></div>
  <div class="travel-cta-dots"></div>
  <div class="section-container">
    <div class="travel-cta-content">
      <div class="travel-cta-badges">
        <div class="travel-cta-badge">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( bp_field( 'th_cta_badge_1', 'Yellow Fever Centre' ) ); ?></span>
        </div>
        <div class="travel-cta-badge">
          <i class="fas fa-user-doctor"></i>
          <span><?php echo esc_html( bp_field( 'th_cta_badge_2', 'Expert Advice' ) ); ?></span>
        </div>
        <div class="travel-cta-badge">
          <i class="fas fa-calendar-check"></i>
          <span><?php echo esc_html( bp_field( 'th_cta_badge_3', 'Same Day Service' ) ); ?></span>
        </div>
      </div>
      <h2 class="travel-cta-title"><?php echo esc_html( bp_field( 'th_cta_title', 'Ready to protect your travels?' ) ); ?></h2>
      <p class="travel-cta-description">
        <?php echo esc_html( bp_field( 'th_cta_description', 'Don\'t let health worries spoil your adventure. Book your comprehensive travel health consultation with Bowland Pharmacy today.' ) ); ?>
      </p>
      <div class="travel-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'th_cta_primary_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta travel-cta-button-white">
          <?php echo esc_html( bp_field( 'th_cta_primary_text', 'Book Travel Health Appointment' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta travel-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( bp_phone() ); ?>
        </a>
      </div>
      <div class="travel-cta-checks">
        <div class="travel-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( bp_field( 'th_cta_check_1', 'Flexible appointments' ) ); ?></span>
        </div>
        <div class="travel-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( bp_field( 'th_cta_check_2', 'Expert advice' ) ); ?></span>
        </div>
        <div class="travel-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( bp_field( 'th_cta_check_3', 'Official certificates' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
