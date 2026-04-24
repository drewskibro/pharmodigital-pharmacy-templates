<?php
/**
 * Template Name: Travel - Brazil
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="brazil-hero-section">
  <div class="brazil-hero-overlay"></div>
  <div class="brazil-hero-dots"></div>
  <div class="section-container">
    <div class="brazil-hero-grid">
      <!-- Left: Content -->
      <div class="brazil-hero-content">
        <div class="hero-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="hero-badge-text"><?php echo esc_html( bp_field( 'td_hero_badge', 'BRAZIL TRAVEL HEALTH' ) ); ?></span>
        </div>

        <h1 class="hero-title" style="color: white;">
          <?php echo esc_html( bp_field( 'td_hero_title_line1', 'Travel Vaccinations for' ) ); ?><br />
          <span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html( bp_field( 'td_hero_title_highlight', 'Brazil' ) ); ?></span>
        </h1>

        <p class="brazil-hero-description">
          <?php echo esc_html( bp_field( 'td_hero_description', 'Expert advice and vaccinations for your trip to Brazil. Yellow Fever certificate required, Malaria prevention, and more.' ) ); ?>
        </p>

        <div class="brazil-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'td_hero_cta_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta brazil-hero-btn-primary">
            <?php echo esc_html( bp_field( 'td_hero_cta_text', 'Book Brazil Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta brazil-hero-btn-secondary">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( bp_phone() ); ?>
          </a>
        </div>
      </div>

      <!-- Right: Visual (Handled by background image) -->
      <div class="brazil-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Quick Info Bar -->
<section class="brazil-stats-section">
  <div class="brazil-stats-shimmer"></div>
  <div class="section-container">
    <div class="brazil-stats-grid">
      <?php if ( have_rows( 'td_stats' ) ) : while ( have_rows( 'td_stats' ) ) : the_row(); ?>
        <div class="brazil-stat-item">
          <div class="brazil-stat-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="brazil-stat-content">
            <p class="brazil-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></p>
            <p class="brazil-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="brazil-stat-item">
          <div class="brazil-stat-icon"><i class="fas fa-syringe"></i></div>
          <div class="brazil-stat-content"><p class="brazil-stat-number">5-7</p><p class="brazil-stat-label">Vaccines Recommended</p></div>
        </div>
        <div class="brazil-stat-item">
          <div class="brazil-stat-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="brazil-stat-content"><p class="brazil-stat-number">6-8</p><p class="brazil-stat-label">Weeks Before Travel</p></div>
        </div>
        <div class="brazil-stat-item">
          <div class="brazil-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="brazil-stat-content"><p class="brazil-stat-number">Full</p><p class="brazil-stat-label">Protection Available</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Recommended Vaccinations -->
<section class="brazil-vaccines-section">
  <div class="section-container">
    <div class="brazil-vaccines-header">
      <h2 class="brazil-vaccines-title"><?php echo esc_html( bp_field( 'td_vaccines_title', 'Protect yourself in Brazil' ) ); ?></h2>
      <div class="brazil-vaccines-divider"></div>
      <p class="brazil-vaccines-description"><?php echo esc_html( bp_field( 'td_vaccines_description', 'These vaccinations are recommended for most travellers to Brazil' ) ); ?></p>
    </div>

    <div class="brazil-vaccines-grid">
      <?php if ( have_rows( 'td_vaccinations' ) ) : while ( have_rows( 'td_vaccinations' ) ) : the_row(); ?>
        <div class="brazil-vaccine-card">
          <div class="brazil-vaccine-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="brazil-vaccine-content">
            <div class="brazil-vaccine-head">
              <h3 class="brazil-vaccine-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
              <span class="brazil-badge-<?php echo esc_attr( get_sub_field( 'badge_color' ) ); ?>"><?php echo esc_html( get_sub_field( 'badge_text' ) ); ?></span>
            </div>
            <p class="brazil-vaccine-short"><?php echo esc_html( get_sub_field( 'short_desc' ) ); ?></p>
            <p class="brazil-vaccine-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $vaccines = array(
          array( 'icon' => 'fas fa-shield-virus', 'name' => 'Yellow Fever', 'badge_color' => 'blue', 'badge' => 'Essential', 'short' => 'Mosquito-borne virus', 'desc' => 'Required for many regions. We are an official Yellow Fever Centre.' ),
          array( 'icon' => 'fas fa-virus', 'name' => 'Hepatitis A', 'badge_color' => 'blue', 'badge' => 'Essential', 'short' => 'Food & water safety', 'desc' => 'Recommended for all travellers to Brazil.' ),
          array( 'icon' => 'fas fa-bacteria', 'name' => 'Typhoid', 'badge_color' => 'blue', 'badge' => 'Essential', 'short' => 'Food & water safety', 'desc' => 'Recommended especially for travel outside major cities.' ),
          array( 'icon' => 'fas fa-syringe', 'name' => 'Tetanus', 'badge_color' => 'blue', 'badge' => 'Essential', 'short' => 'Routine booster', 'desc' => 'Ensure your routine UK schedule is up to date.' ),
          array( 'icon' => 'fas fa-dog', 'name' => 'Rabies', 'badge_color' => 'gray', 'badge' => 'Recommended', 'short' => 'Animal contact risk', 'desc' => 'Consider for adventure travel or remote areas.' ),
          array( 'icon' => 'fas fa-notes-medical', 'name' => 'Hepatitis B', 'badge_color' => 'gray', 'badge' => 'Consider', 'short' => 'Blood/fluid contact', 'desc' => 'Consider for longer stays or medical tourism.' ),
        );
        foreach ( $vaccines as $vax ) :
        ?>
          <div class="brazil-vaccine-card">
            <div class="brazil-vaccine-icon"><i class="<?php echo esc_attr( $vax['icon'] ); ?>"></i></div>
            <div class="brazil-vaccine-content">
              <div class="brazil-vaccine-head">
                <h3 class="brazil-vaccine-name"><?php echo esc_html( $vax['name'] ); ?></h3>
                <span class="brazil-badge-<?php echo esc_attr( $vax['badge_color'] ); ?>"><?php echo esc_html( $vax['badge'] ); ?></span>
              </div>
              <p class="brazil-vaccine-short"><?php echo esc_html( $vax['short'] ); ?></p>
              <p class="brazil-vaccine-desc"><?php echo esc_html( $vax['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria Information -->
<section class="brazil-malaria-section">
  <div class="section-container">
    <div class="brazil-malaria-layout">
      <!-- Left: Visual -->
      <div class="brazil-malaria-visual">
        <div class="brazil-malaria-image-card">
          <?php
          $malaria_image_id = bp_field( 'td_malaria_image' );
          $malaria_image_url = $malaria_image_id ? wp_get_attachment_image_url( $malaria_image_id, 'large' ) : '';
          ?>
          <?php if ( $malaria_image_url ) : ?><img src="<?php echo esc_url( $malaria_image_url ); ?>" alt="Brazil travel health" class="brazil-malaria-image" /><?php endif; ?>
          <div class="brazil-malaria-overlay"></div>
          <div class="brazil-malaria-badge">
            <div class="brazil-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div>
            <span class="brazil-malaria-badge-text"><?php echo esc_html( bp_field( 'td_malaria_badge_text', 'Expert Advice' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Content -->
      <div class="brazil-malaria-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'td_malaria_badge', 'RISK VARIES BY REGION' ) ); ?></span>
        </div>

        <h2 class="brazil-malaria-title"><?php echo esc_html( bp_field( 'td_malaria_title', 'Malaria Risk in Brazil' ) ); ?></h2>
        <p class="brazil-malaria-intro">
          <?php echo esc_html( bp_field( 'td_malaria_intro', 'Malaria risk exists in the Amazon region and some rural areas of Brazil. Major cities like Rio and Sao Paulo are generally malaria-free.' ) ); ?>
        </p>

        <div class="brazil-malaria-info-grid">
          <?php if ( have_rows( 'td_malaria_risks' ) ) : while ( have_rows( 'td_malaria_risks' ) ) : the_row(); ?>
            <div class="brazil-malaria-item">
              <div class="brazil-malaria-item-icon <?php echo esc_attr( get_sub_field( 'risk_level' ) ); ?>">
                <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
              </div>
              <div class="brazil-malaria-item-text">
                <h4><?php echo esc_html( get_sub_field( 'title' ) ); ?></h4>
                <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="brazil-malaria-item">
              <div class="brazil-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div>
              <div class="brazil-malaria-item-text">
                <h4>Amazon Region</h4>
                <p>High risk in the Amazon basin and surrounding rural areas.</p>
              </div>
            </div>
            <div class="brazil-malaria-item">
              <div class="brazil-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div>
              <div class="brazil-malaria-item-text">
                <h4>Major Cities</h4>
                <p>Rio de Janeiro, Sao Paulo, and coastal cities are generally malaria-free.</p>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="brazil-malaria-actions">
          <a href="<?php echo esc_url( bp_field( 'td_malaria_cta_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( bp_field( 'td_malaria_cta_text', 'Check Your Risk' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Health Advice -->
<section class="brazil-health-section">
  <div class="section-container">
    <div class="brazil-health-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'td_health_badge', 'HEALTH ADVICE' ) ); ?></span>
      </div>
      <h2 class="brazil-health-title"><?php echo esc_html( bp_field( 'td_health_title', 'Stay healthy in Brazil' ) ); ?></h2>
      <p class="brazil-health-subtitle"><?php echo esc_html( bp_field( 'td_health_subtitle', 'Essential tips for a safe trip' ) ); ?></p>
    </div>

    <div class="brazil-health-grid">
      <?php if ( have_rows( 'td_health_tips' ) ) : while ( have_rows( 'td_health_tips' ) ) : the_row();
        $tip_image_id = get_sub_field( 'image' );
        $tip_image_url = $tip_image_id ? wp_get_attachment_image_url( $tip_image_id, 'large' ) : '';
      ?>
        <div class="brazil-health-card-visual">
          <div class="brazil-health-bg">
            <?php if ( $tip_image_url ) : ?>
              <img src="<?php echo esc_url( $tip_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php endif; ?>
            <div class="brazil-health-overlay"></div>
          </div>
          <div class="brazil-health-content">
            <div class="brazil-health-icon-wrapper">
              <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <h3 class="brazil-health-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="brazil-health-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $tips = array(
          array( 'icon' => 'fas fa-glass-water', 'title' => 'Food & Water', 'desc' => 'Drink bottled water only. Avoid street food and unpeeled fruit.', 'image' => 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=600&h=800&fit=crop' ),
          array( 'icon' => 'fas fa-sun', 'title' => 'Sun Safety', 'desc' => 'Tropical sun is intense. Use SPF 50+, wear a hat, and stay hydrated.', 'image' => 'https://images.unsplash.com/photo-1533619043865-1c2e2f32ff5f?w=600&h=800&fit=crop' ),
          array( 'icon' => 'fas fa-mosquito', 'title' => 'Insects', 'desc' => 'Use DEET repellent. Protect against Dengue, Zika, and Malaria mosquitoes.', 'image' => 'https://images.unsplash.com/photo-1551817958-29d0660f98de?w=600&h=800&fit=crop' ),
        );
        foreach ( $tips as $tip ) :
        ?>
          <div class="brazil-health-card-visual">
            <div class="brazil-health-bg">
              <img src="<?php echo esc_url( $tip['image'] ); ?>" alt="<?php echo esc_attr( $tip['title'] ); ?>" />
              <div class="brazil-health-overlay"></div>
            </div>
            <div class="brazil-health-content">
              <div class="brazil-health-icon-wrapper"><i class="<?php echo esc_attr( $tip['icon'] ); ?>"></i></div>
              <h3 class="brazil-health-card-title"><?php echo esc_html( $tip['title'] ); ?></h3>
              <p class="brazil-health-card-desc"><?php echo esc_html( $tip['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="brazil-cta-section">
  <div class="brazil-cta-glow-1"></div>
  <div class="brazil-cta-glow-2"></div>
  <div class="brazil-cta-dots"></div>
  <div class="section-container">
    <div class="brazil-cta-content">
      <h2 class="brazil-cta-title"><?php echo esc_html( bp_field( 'td_cta_title', 'Ready for your trip to Brazil?' ) ); ?></h2>
      <p class="brazil-cta-description">
        <?php
        $braz_cta_default = 'Book your Brazil travel health consultation at our ' . bp_option( 'pharmacy_town', 'Denton' ) . ' clinic. Get expert advice and all recommended vaccinations in one visit.';
        echo esc_html( bp_field( 'td_cta_description', $braz_cta_default ) );
        ?>
      </p>
      <div class="brazil-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'td_cta_primary_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta brazil-cta-button-white">
          <?php echo esc_html( bp_field( 'td_cta_primary_text', 'Book Brazil Consultation' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta brazil-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( bp_phone() ); ?>
        </a>
      </div>
      <div class="brazil-cta-checks">
        <div class="brazil-cta-check">
          <i class="fas fa-plane-departure"></i>
          <span><?php echo esc_html( bp_field( 'td_cta_check_1', 'Travel Ready' ) ); ?></span>
        </div>
        <div class="brazil-cta-check">
          <i class="fas fa-user-doctor"></i>
          <span><?php echo esc_html( bp_field( 'td_cta_check_2', 'Expert Brazil Advice' ) ); ?></span>
        </div>
        <div class="brazil-cta-check">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( bp_field( 'td_cta_check_3', 'All Vaccines Available' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
