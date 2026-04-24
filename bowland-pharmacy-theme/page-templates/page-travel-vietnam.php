<?php
/**
 * Template Name: Travel - Vietnam
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="vietnam-hero-section">
  <div class="vietnam-hero-overlay"></div>
  <div class="vietnam-hero-dots"></div>
  <div class="section-container">
    <div class="vietnam-hero-grid">
      <!-- Left: Content -->
      <div class="vietnam-hero-content">
        <div class="hero-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="hero-badge-text"><?php echo esc_html( bp_field( 'td_hero_badge', 'VIETNAM TRAVEL HEALTH' ) ); ?></span>
        </div>

        <h1 class="hero-title" style="color: white;">
          <?php echo esc_html( bp_field( 'td_hero_title_line1', 'Travel Vaccinations for' ) ); ?><br />
          <span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html( bp_field( 'td_hero_title_highlight', 'Vietnam' ) ); ?></span>
        </h1>

        <p class="vietnam-hero-description">
          <?php echo esc_html( bp_field( 'td_hero_description', 'Expert advice and vaccinations for your Vietnam adventure. Japanese Encephalitis, Malaria prevention, and more.' ) ); ?>
        </p>

        <div class="vietnam-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'td_hero_cta_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta vietnam-hero-btn-primary">
            <?php echo esc_html( bp_field( 'td_hero_cta_text', 'Book Vietnam Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta vietnam-hero-btn-secondary">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( bp_phone() ); ?>
          </a>
        </div>
      </div>

      <!-- Right: Visual (Handled by background image) -->
      <div class="vietnam-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Quick Info Bar -->
<section class="vietnam-stats-section">
  <div class="vietnam-stats-shimmer"></div>
  <div class="section-container">
    <div class="vietnam-stats-grid">
      <?php if ( have_rows( 'td_stats' ) ) : while ( have_rows( 'td_stats' ) ) : the_row(); ?>
        <div class="vietnam-stat-item">
          <div class="vietnam-stat-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="vietnam-stat-content">
            <p class="vietnam-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></p>
            <p class="vietnam-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="vietnam-stat-item">
          <div class="vietnam-stat-icon"><i class="fas fa-syringe"></i></div>
          <div class="vietnam-stat-content"><p class="vietnam-stat-number">6-8</p><p class="vietnam-stat-label">Vaccines Recommended</p></div>
        </div>
        <div class="vietnam-stat-item">
          <div class="vietnam-stat-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="vietnam-stat-content"><p class="vietnam-stat-number">6-8</p><p class="vietnam-stat-label">Weeks Before Travel</p></div>
        </div>
        <div class="vietnam-stat-item">
          <div class="vietnam-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="vietnam-stat-content"><p class="vietnam-stat-number">Full</p><p class="vietnam-stat-label">Protection Available</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Recommended Vaccinations -->
<section class="vietnam-vaccines-section">
  <div class="section-container">
    <div class="vietnam-vaccines-header">
      <h2 class="vietnam-vaccines-title"><?php echo esc_html( bp_field( 'td_vaccines_title', 'Protect yourself in Vietnam' ) ); ?></h2>
      <div class="vietnam-vaccines-divider"></div>
      <p class="vietnam-vaccines-description"><?php echo esc_html( bp_field( 'td_vaccines_description', 'These vaccinations are recommended for most travellers to Vietnam' ) ); ?></p>
    </div>

    <div class="vietnam-vaccines-grid">
      <?php if ( have_rows( 'td_vaccinations' ) ) : while ( have_rows( 'td_vaccinations' ) ) : the_row(); ?>
        <div class="vietnam-vaccine-card">
          <div class="vietnam-vaccine-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="vietnam-vaccine-content">
            <div class="vietnam-vaccine-head">
              <h3 class="vietnam-vaccine-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
              <span class="vietnam-badge-<?php echo esc_attr( get_sub_field( 'badge_color' ) ); ?>"><?php echo esc_html( get_sub_field( 'badge_text' ) ); ?></span>
            </div>
            <p class="vietnam-vaccine-short"><?php echo esc_html( get_sub_field( 'short_desc' ) ); ?></p>
            <p class="vietnam-vaccine-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $vaccines = array(
          array( 'icon' => 'fas fa-virus', 'name' => 'Hepatitis A', 'badge_color' => 'blue', 'badge' => 'Essential', 'short' => 'Food & water safety', 'desc' => 'Recommended for all travellers to Vietnam.' ),
          array( 'icon' => 'fas fa-bacteria', 'name' => 'Typhoid', 'badge_color' => 'blue', 'badge' => 'Essential', 'short' => 'Food & water safety', 'desc' => 'Especially important if trying local street food.' ),
          array( 'icon' => 'fas fa-syringe', 'name' => 'Tetanus', 'badge_color' => 'blue', 'badge' => 'Essential', 'short' => 'Routine booster', 'desc' => 'Ensure your routine UK schedule is up to date.' ),
          array( 'icon' => 'fas fa-brain', 'name' => 'Japanese Encephalitis', 'badge_color' => 'blue', 'badge' => 'Essential', 'short' => 'Mosquito-borne virus', 'desc' => 'Recommended for rural travel or stays longer than one month.' ),
          array( 'icon' => 'fas fa-dog', 'name' => 'Rabies', 'badge_color' => 'gray', 'badge' => 'Recommended', 'short' => 'Animal contact risk', 'desc' => 'High risk in Vietnam. Stray dogs are common in cities and rural areas.' ),
          array( 'icon' => 'fas fa-notes-medical', 'name' => 'Hepatitis B', 'badge_color' => 'gray', 'badge' => 'Consider', 'short' => 'Blood/fluid contact', 'desc' => 'Consider for longer stays or medical/dental treatment abroad.' ),
        );
        foreach ( $vaccines as $vax ) :
        ?>
          <div class="vietnam-vaccine-card">
            <div class="vietnam-vaccine-icon"><i class="<?php echo esc_attr( $vax['icon'] ); ?>"></i></div>
            <div class="vietnam-vaccine-content">
              <div class="vietnam-vaccine-head">
                <h3 class="vietnam-vaccine-name"><?php echo esc_html( $vax['name'] ); ?></h3>
                <span class="vietnam-badge-<?php echo esc_attr( $vax['badge_color'] ); ?>"><?php echo esc_html( $vax['badge'] ); ?></span>
              </div>
              <p class="vietnam-vaccine-short"><?php echo esc_html( $vax['short'] ); ?></p>
              <p class="vietnam-vaccine-desc"><?php echo esc_html( $vax['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria Information -->
<section class="vietnam-malaria-section">
  <div class="section-container">
    <div class="vietnam-malaria-layout">
      <!-- Left: Visual -->
      <div class="vietnam-malaria-visual">
        <div class="vietnam-malaria-image-card">
          <?php
          $malaria_image_id = bp_field( 'td_malaria_image' );
          $malaria_image_url = $malaria_image_id ? wp_get_attachment_image_url( $malaria_image_id, 'large' ) : 'https://images.unsplash.com/photo-1528127269322-539801943592?w=800&h=1000&fit=crop';
          ?>
          <img src="<?php echo esc_url( $malaria_image_url ); ?>" alt="Vietnam travel health" class="vietnam-malaria-image" />
          <div class="vietnam-malaria-overlay"></div>
          <div class="vietnam-malaria-badge">
            <div class="vietnam-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div>
            <span class="vietnam-malaria-badge-text"><?php echo esc_html( bp_field( 'td_malaria_badge_text', 'Expert Advice' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Content -->
      <div class="vietnam-malaria-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'td_malaria_badge', 'RISK VARIES BY REGION' ) ); ?></span>
        </div>

        <h2 class="vietnam-malaria-title"><?php echo esc_html( bp_field( 'td_malaria_title', 'Malaria Risk in Vietnam' ) ); ?></h2>
        <p class="vietnam-malaria-intro">
          <?php echo esc_html( bp_field( 'td_malaria_intro', 'Malaria risk exists in rural and forested areas of Vietnam. Major cities and tourist resorts are generally low risk.' ) ); ?>
        </p>

        <div class="vietnam-malaria-info-grid">
          <?php if ( have_rows( 'td_malaria_risks' ) ) : while ( have_rows( 'td_malaria_risks' ) ) : the_row(); ?>
            <div class="vietnam-malaria-item">
              <div class="vietnam-malaria-item-icon <?php echo esc_attr( get_sub_field( 'risk_level' ) ); ?>">
                <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
              </div>
              <div class="vietnam-malaria-item-text">
                <h4><?php echo esc_html( get_sub_field( 'title' ) ); ?></h4>
                <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="vietnam-malaria-item">
              <div class="vietnam-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div>
              <div class="vietnam-malaria-item-text">
                <h4>Rural &amp; Forest Areas</h4>
                <p>Highland and forested areas, especially border regions, have higher malaria risk.</p>
              </div>
            </div>
            <div class="vietnam-malaria-item">
              <div class="vietnam-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div>
              <div class="vietnam-malaria-item-text">
                <h4>Cities &amp; Coast</h4>
                <p>Hanoi, Ho Chi Minh City, and popular coastal resorts have minimal risk.</p>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="vietnam-malaria-actions">
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
<section class="vietnam-health-section">
  <div class="section-container">
    <div class="vietnam-health-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'td_health_badge', 'HEALTH ADVICE' ) ); ?></span>
      </div>
      <h2 class="vietnam-health-title"><?php echo esc_html( bp_field( 'td_health_title', 'Stay healthy in Vietnam' ) ); ?></h2>
      <p class="vietnam-health-subtitle"><?php echo esc_html( bp_field( 'td_health_subtitle', 'Essential tips for a safe adventure' ) ); ?></p>
    </div>

    <div class="vietnam-health-grid">
      <?php if ( have_rows( 'td_health_tips' ) ) : while ( have_rows( 'td_health_tips' ) ) : the_row();
        $tip_image_id = get_sub_field( 'image' );
        $tip_image_url = $tip_image_id ? wp_get_attachment_image_url( $tip_image_id, 'large' ) : '';
      ?>
        <div class="vietnam-health-card-visual">
          <div class="vietnam-health-bg">
            <?php if ( $tip_image_url ) : ?>
              <img src="<?php echo esc_url( $tip_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php endif; ?>
            <div class="vietnam-health-overlay"></div>
          </div>
          <div class="vietnam-health-content">
            <div class="vietnam-health-icon-wrapper">
              <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <h3 class="vietnam-health-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="vietnam-health-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $tips = array(
          array( 'icon' => 'fas fa-glass-water', 'title' => 'Food & Water', 'desc' => 'Drink bottled water only. Enjoy street food from busy stalls with high turnover.', 'image' => 'https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=600&h=800&fit=crop' ),
          array( 'icon' => 'fas fa-sun', 'title' => 'Sun Safety', 'desc' => 'Tropical humidity and heat. Use SPF 50+, stay hydrated, and rest during midday.', 'image' => 'https://images.unsplash.com/photo-1533619043865-1c2e2f32ff5f?w=600&h=800&fit=crop' ),
          array( 'icon' => 'fas fa-mosquito', 'title' => 'Insects', 'desc' => 'Use DEET repellent. Dengue-carrying mosquitoes bite during the day.', 'image' => 'https://images.unsplash.com/photo-1551817958-29d0660f98de?w=600&h=800&fit=crop' ),
        );
        foreach ( $tips as $tip ) :
        ?>
          <div class="vietnam-health-card-visual">
            <div class="vietnam-health-bg">
              <img src="<?php echo esc_url( $tip['image'] ); ?>" alt="<?php echo esc_attr( $tip['title'] ); ?>" />
              <div class="vietnam-health-overlay"></div>
            </div>
            <div class="vietnam-health-content">
              <div class="vietnam-health-icon-wrapper"><i class="<?php echo esc_attr( $tip['icon'] ); ?>"></i></div>
              <h3 class="vietnam-health-card-title"><?php echo esc_html( $tip['title'] ); ?></h3>
              <p class="vietnam-health-card-desc"><?php echo esc_html( $tip['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="vietnam-cta-section">
  <div class="vietnam-cta-glow-1"></div>
  <div class="vietnam-cta-glow-2"></div>
  <div class="vietnam-cta-dots"></div>
  <div class="section-container">
    <div class="vietnam-cta-content">
      <h2 class="vietnam-cta-title"><?php echo esc_html( bp_field( 'td_cta_title', 'Ready for your Vietnam adventure?' ) ); ?></h2>
      <p class="vietnam-cta-description">
        <?php
        $viet_cta_default = 'Book your Vietnam travel health consultation at our ' . bp_option( 'pharmacy_town', 'Denton' ) . ' clinic. Get expert advice and all recommended vaccinations in one visit.';
        echo esc_html( bp_field( 'td_cta_description', $viet_cta_default ) );
        ?>
      </p>
      <div class="vietnam-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'td_cta_primary_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta vietnam-cta-button-white">
          <?php echo esc_html( bp_field( 'td_cta_primary_text', 'Book Vietnam Consultation' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta vietnam-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( bp_phone() ); ?>
        </a>
      </div>
      <div class="vietnam-cta-checks">
        <div class="vietnam-cta-check">
          <i class="fas fa-plane-departure"></i>
          <span><?php echo esc_html( bp_field( 'td_cta_check_1', 'Travel Ready' ) ); ?></span>
        </div>
        <div class="vietnam-cta-check">
          <i class="fas fa-user-doctor"></i>
          <span><?php echo esc_html( bp_field( 'td_cta_check_2', 'Expert Vietnam Advice' ) ); ?></span>
        </div>
        <div class="vietnam-cta-check">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( bp_field( 'td_cta_check_3', 'All Vaccines Available' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
