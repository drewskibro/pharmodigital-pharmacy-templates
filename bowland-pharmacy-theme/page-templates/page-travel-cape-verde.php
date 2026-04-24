<?php
/**
 * Template Name: Travel - Cape Verde
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="capeverde-hero-section">
  <div class="capeverde-hero-overlay"></div>
  <div class="capeverde-hero-dots"></div>
  <div class="section-container">
    <div class="capeverde-hero-grid">
      <!-- Left: Content -->
      <div class="capeverde-hero-content">
        <div class="hero-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="hero-badge-text"><?php echo esc_html( bp_field( 'cv_hero_badge', 'CAPE VERDE TRAVEL HEALTH' ) ); ?></span>
        </div>

        <h1 class="hero-title" style="color: white;">
          <?php echo esc_html( bp_field( 'cv_hero_title_line1', 'Travel Vaccinations for' ) ); ?><br />
          <span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html( bp_field( 'cv_hero_title_highlight', 'Cape Verde' ) ); ?></span>
        </h1>

        <p class="capeverde-hero-description">
          <?php echo esc_html( bp_field( 'cv_hero_description', 'Expert advice and vaccinations for your Cape Verde holiday. Get protected before you travel with ' . bp_pharmacy_name() . '\'s trusted travel health specialists.' ) ); ?>
        </p>

        <div class="capeverde-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'cv_hero_cta_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta capeverde-hero-btn-primary">
            <?php echo esc_html( bp_field( 'cv_hero_cta_text', 'Book Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta capeverde-hero-btn-secondary">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( bp_phone() ); ?>
          </a>
        </div>
      </div>

      <!-- Right: Visual (Handled by background image) -->
      <div class="capeverde-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Quick Info Bar -->
<section class="capeverde-stats-section">
  <div class="capeverde-stats-shimmer"></div>
  <div class="section-container">
    <div class="capeverde-stats-grid">
      <?php if ( have_rows( 'cv_stats' ) ) : while ( have_rows( 'cv_stats' ) ) : the_row(); ?>
        <div class="capeverde-stat-item">
          <div class="capeverde-stat-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="capeverde-stat-content">
            <p class="capeverde-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></p>
            <p class="capeverde-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="capeverde-stat-item">
          <div class="capeverde-stat-icon"><i class="fas fa-syringe"></i></div>
          <div class="capeverde-stat-content"><p class="capeverde-stat-number">4-6</p><p class="capeverde-stat-label">Vaccines Recommended</p></div>
        </div>
        <div class="capeverde-stat-item">
          <div class="capeverde-stat-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="capeverde-stat-content"><p class="capeverde-stat-number">6-8</p><p class="capeverde-stat-label">Weeks Before Travel</p></div>
        </div>
        <div class="capeverde-stat-item">
          <div class="capeverde-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="capeverde-stat-content"><p class="capeverde-stat-number">Full</p><p class="capeverde-stat-label">Protection Available</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Recommended Vaccinations -->
<section class="capeverde-vaccines-section">
  <div class="section-container">
    <div class="capeverde-vaccines-header">
      <h2 class="capeverde-vaccines-title"><?php echo esc_html( bp_field( 'cv_vaccines_title', 'Protect yourself in Cape Verde' ) ); ?></h2>
      <div class="capeverde-vaccines-divider"></div>
      <p class="capeverde-vaccines-description"><?php echo esc_html( bp_field( 'cv_vaccines_description', 'These vaccinations are recommended for most travellers to Cape Verde' ) ); ?></p>
    </div>

    <div class="capeverde-vaccines-grid">
      <?php if ( have_rows( 'cv_vaccinations' ) ) : while ( have_rows( 'cv_vaccinations' ) ) : the_row(); ?>
        <div class="capeverde-vaccine-card">
          <div class="capeverde-vaccine-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="capeverde-vaccine-content">
            <div class="capeverde-vaccine-head">
              <h3 class="capeverde-vaccine-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
              <span class="capeverde-badge-<?php echo esc_attr( get_sub_field( 'badge_color' ) ); ?>"><?php echo esc_html( get_sub_field( 'badge_text' ) ); ?></span>
            </div>
            <p class="capeverde-vaccine-short"><?php echo esc_html( get_sub_field( 'short_desc' ) ); ?></p>
            <p class="capeverde-vaccine-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $vaccines = array(
          array( 'icon' => 'fas fa-virus', 'name' => 'Hepatitis A', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Food & water safety', 'desc' => 'Spread through contaminated food and water. Recommended for all travellers.' ),
          array( 'icon' => 'fas fa-bacteria', 'name' => 'Typhoid', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Food & water safety', 'desc' => 'Recommended for most travellers, especially if visiting rural areas or staying with locals.' ),
          array( 'icon' => 'fas fa-syringe', 'name' => 'Tetanus', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Routine booster', 'desc' => 'Ensure your routine UK schedule is up to date. A booster may be needed.' ),
          array( 'icon' => 'fas fa-notes-medical', 'name' => 'Hepatitis B', 'badge_color' => 'gray', 'badge' => 'Consider', 'short' => 'Blood/fluid contact', 'desc' => 'Consider for longer stays or if you might need medical treatment.' ),
          array( 'icon' => 'fas fa-dog', 'name' => 'Rabies', 'badge_color' => 'gray', 'badge' => 'Consider', 'short' => 'Animal contact risk', 'desc' => 'Risk from bats and dogs. Consider if working with animals or in remote areas.' ),
          array( 'icon' => 'fas fa-shield-virus', 'name' => 'Yellow Fever', 'badge_color' => 'gray', 'badge' => 'Certificate', 'short' => 'Entry requirement', 'desc' => 'Certificate required if arriving from a country with risk of Yellow Fever transmission.' ),
        );
        foreach ( $vaccines as $vax ) :
        ?>
          <div class="capeverde-vaccine-card">
            <div class="capeverde-vaccine-icon"><i class="<?php echo esc_attr( $vax['icon'] ); ?>"></i></div>
            <div class="capeverde-vaccine-content">
              <div class="capeverde-vaccine-head">
                <h3 class="capeverde-vaccine-name"><?php echo esc_html( $vax['name'] ); ?></h3>
                <span class="capeverde-badge-<?php echo esc_attr( $vax['badge_color'] ); ?>"><?php echo esc_html( $vax['badge'] ); ?></span>
              </div>
              <p class="capeverde-vaccine-short"><?php echo esc_html( $vax['short'] ); ?></p>
              <p class="capeverde-vaccine-desc"><?php echo esc_html( $vax['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria Information -->
<section class="capeverde-malaria-section">
  <div class="section-container">
    <div class="capeverde-malaria-layout">
      <!-- Left: Visual -->
      <div class="capeverde-malaria-visual">
        <div class="capeverde-malaria-image-card">
          <?php
          $malaria_image_id = bp_field( 'cv_malaria_image' );
          $malaria_image_url = $malaria_image_id ? wp_get_attachment_image_url( $malaria_image_id, 'large' ) : '';
          ?>
          <?php if ( $malaria_image_url ) : ?>
          <img src="<?php echo esc_url( $malaria_image_url ); ?>" alt="<?php echo esc_attr( bp_field( 'cv_malaria_image_alt', 'Cape Verde landscape' ) ); ?>" class="capeverde-malaria-image" />
          <?php endif; ?>
          <div class="capeverde-malaria-overlay"></div>
          <div class="capeverde-malaria-badge">
            <div class="capeverde-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div>
            <span class="capeverde-malaria-badge-text"><?php echo esc_html( bp_field( 'cv_malaria_badge_text', 'Expert Advice' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Content -->
      <div class="capeverde-malaria-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'cv_malaria_badge', 'MOSQUITO RISKS' ) ); ?></span>
        </div>

        <h2 class="capeverde-malaria-title"><?php echo esc_html( bp_field( 'cv_malaria_title', 'Malaria & Dengue in Cape Verde' ) ); ?></h2>
        <p class="capeverde-malaria-intro">
          <?php echo esc_html( bp_field( 'cv_malaria_intro', 'Malaria risk is generally low but present on Santiago island. Dengue fever and Zika virus are also risks. Bite avoidance is essential.' ) ); ?>
        </p>

        <div class="capeverde-malaria-info-grid">
          <?php if ( have_rows( 'cv_malaria_risks' ) ) : while ( have_rows( 'cv_malaria_risks' ) ) : the_row(); ?>
            <div class="capeverde-malaria-item">
              <div class="capeverde-malaria-item-icon <?php echo esc_attr( get_sub_field( 'risk_level' ) ); ?>">
                <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
              </div>
              <div class="capeverde-malaria-item-text">
                <h4><?php echo esc_html( get_sub_field( 'title' ) ); ?></h4>
                <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="capeverde-malaria-item">
              <div class="capeverde-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div>
              <div class="capeverde-malaria-item-text">
                <h4>Most Islands</h4>
                <p>Sal, Boa Vista, and other islands have very low to no malaria risk.</p>
              </div>
            </div>
            <div class="capeverde-malaria-item">
              <div class="capeverde-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div>
              <div class="capeverde-malaria-item-text">
                <h4>Santiago Island</h4>
                <p>Low risk exists from September to November. Antimalarials may be advised.</p>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="capeverde-malaria-actions">
          <a href="<?php echo esc_url( bp_field( 'cv_malaria_cta_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( bp_field( 'cv_malaria_cta_text', 'Check Your Risk' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Health Advice -->
<section class="capeverde-health-section">
  <div class="section-container">
    <div class="capeverde-health-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'cv_health_badge', 'HEALTH ADVICE' ) ); ?></span>
      </div>
      <h2 class="capeverde-health-title"><?php echo esc_html( bp_field( 'cv_health_title', 'Stay healthy in Cape Verde' ) ); ?></h2>
      <p class="capeverde-health-subtitle"><?php echo esc_html( bp_field( 'cv_health_subtitle', 'Essential tips for a safe trip' ) ); ?></p>
    </div>

    <div class="capeverde-health-grid">
      <?php if ( have_rows( 'cv_health_tips' ) ) : while ( have_rows( 'cv_health_tips' ) ) : the_row();
        $tip_image_id = get_sub_field( 'image' );
        $tip_image_url = $tip_image_id ? wp_get_attachment_image_url( $tip_image_id, 'large' ) : '';
      ?>
        <div class="capeverde-health-card-visual">
          <div class="capeverde-health-bg">
            <?php if ( $tip_image_url ) : ?>
              <img src="<?php echo esc_url( $tip_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php endif; ?>
            <div class="capeverde-health-overlay"></div>
          </div>
          <div class="capeverde-health-content">
            <div class="capeverde-health-icon-wrapper">
              <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <h3 class="capeverde-health-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="capeverde-health-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $tips = array(
          array( 'icon' => 'fas fa-glass-water', 'title' => 'Food & Water', 'desc' => 'Tap water is not safe to drink. Stick to bottled water and avoid ice.', 'image' => '' ),
          array( 'icon' => 'fas fa-sun', 'title' => 'Sun & Wind', 'desc' => 'Strong winds can mask the heat. Use high SPF and stay hydrated.', 'image' => '' ),
          array( 'icon' => 'fas fa-mosquito', 'title' => 'Insects', 'desc' => 'Dengue and Zika are risks. Use 50% DEET repellent day and night.', 'image' => '' ),
        );
        foreach ( $tips as $tip ) :
        ?>
          <div class="capeverde-health-card-visual">
            <div class="capeverde-health-bg">
              <?php if ( $tip['image'] ) : ?>
              <img src="<?php echo esc_url( $tip['image'] ); ?>" alt="<?php echo esc_attr( $tip['title'] ); ?>" />
              <?php endif; ?>
              <div class="capeverde-health-overlay"></div>
            </div>
            <div class="capeverde-health-content">
              <div class="capeverde-health-icon-wrapper"><i class="<?php echo esc_attr( $tip['icon'] ); ?>"></i></div>
              <h3 class="capeverde-health-card-title"><?php echo esc_html( $tip['title'] ); ?></h3>
              <p class="capeverde-health-card-desc"><?php echo esc_html( $tip['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="capeverde-cta-section">
  <div class="capeverde-cta-glow-1"></div>
  <div class="capeverde-cta-glow-2"></div>
  <div class="capeverde-cta-dots"></div>
  <div class="section-container">
    <div class="capeverde-cta-content">
      <h2 class="capeverde-cta-title"><?php echo esc_html( bp_field( 'cv_cta_title', 'Ready for Cape Verde?' ) ); ?></h2>
      <p class="capeverde-cta-description">
        <?php echo esc_html( bp_field( 'cv_cta_description', 'Book your travel health consultation at our ' . bp_option( 'pharmacy_town', 'Denton' ) . ' clinic. Get expert advice and all recommended vaccinations in one visit.' ) ); ?>
      </p>
      <div class="capeverde-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'cv_cta_primary_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta capeverde-cta-button-white">
          <?php echo esc_html( bp_field( 'cv_cta_primary_text', 'Book Consultation' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta capeverde-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( bp_phone() ); ?>
        </a>
      </div>
      <div class="capeverde-cta-checks">
        <div class="capeverde-cta-check">
          <i class="fas fa-plane-departure"></i>
          <span><?php echo esc_html( bp_field( 'cv_cta_check_1', 'Travel Ready' ) ); ?></span>
        </div>
        <div class="capeverde-cta-check">
          <i class="fas fa-user-doctor"></i>
          <span><?php echo esc_html( bp_field( 'cv_cta_check_2', 'Expert Advice' ) ); ?></span>
        </div>
        <div class="capeverde-cta-check">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( bp_field( 'cv_cta_check_3', 'All Vaccines' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
