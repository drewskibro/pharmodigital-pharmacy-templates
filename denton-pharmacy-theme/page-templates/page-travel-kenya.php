<?php
/**
 * Template Name: Travel - Kenya
 * @package Denton_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="kenya-hero-section">
  <div class="kenya-hero-overlay"></div>
  <div class="kenya-hero-dots"></div>
  <div class="section-container">
    <div class="kenya-hero-grid">
      <!-- Left: Content -->
      <div class="kenya-hero-content">
        <div class="hero-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="hero-badge-text"><?php echo esc_html( dp_field( 'ke_hero_badge', 'KENYA TRAVEL HEALTH' ) ); ?></span>
        </div>

        <h1 class="hero-title" style="color: white;">
          <?php echo esc_html( dp_field( 'ke_hero_title_line1', 'Travel Vaccinations for' ) ); ?><br />
          <span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html( dp_field( 'ke_hero_title_highlight', 'Kenya' ) ); ?></span>
        </h1>

        <p class="kenya-hero-description">
          <?php echo esc_html( dp_field( 'ke_hero_description', 'Expert advice and vaccinations for your Kenya safari or holiday. Yellow Fever, Malaria, and more. Get protected with ' . dp_pharmacy_name() . '\'s specialists.' ) ); ?>
        </p>

        <div class="kenya-hero-actions">
          <a href="<?php echo esc_url( dp_field( 'ke_hero_cta_url', dp_booking_url() ) ); ?>" class="cta-button primary-cta kenya-hero-btn-primary">
            <?php echo esc_html( dp_field( 'ke_hero_cta_text', 'Book Kenya Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta kenya-hero-btn-secondary">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( dp_phone() ); ?>
          </a>
        </div>
      </div>

      <!-- Right: Visual (Handled by background image) -->
      <div class="kenya-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Quick Info Bar -->
<section class="kenya-stats-section">
  <div class="kenya-stats-shimmer"></div>
  <div class="section-container">
    <div class="kenya-stats-grid">
      <?php if ( have_rows( 'ke_stats' ) ) : while ( have_rows( 'ke_stats' ) ) : the_row(); ?>
        <div class="kenya-stat-item">
          <div class="kenya-stat-icon">
            <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="kenya-stat-content">
            <p class="kenya-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></p>
            <p class="kenya-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="kenya-stat-item">
          <div class="kenya-stat-icon"><i class="fas fa-syringe"></i></div>
          <div class="kenya-stat-content"><p class="kenya-stat-number">6-8</p><p class="kenya-stat-label">Vaccines Recommended</p></div>
        </div>
        <div class="kenya-stat-item">
          <div class="kenya-stat-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="kenya-stat-content"><p class="kenya-stat-number">6-8</p><p class="kenya-stat-label">Weeks Before Travel</p></div>
        </div>
        <div class="kenya-stat-item">
          <div class="kenya-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="kenya-stat-content"><p class="kenya-stat-number">Full</p><p class="kenya-stat-label">Protection Available</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Recommended Vaccinations -->
<section class="kenya-vaccines-section">
  <div class="section-container">
    <div class="kenya-vaccines-header">
      <h2 class="kenya-vaccines-title"><?php echo esc_html( dp_field( 'ke_vaccines_title', 'Protect yourself in Kenya' ) ); ?></h2>
      <div class="kenya-vaccines-divider"></div>
      <p class="kenya-vaccines-description"><?php echo esc_html( dp_field( 'ke_vaccines_description', 'These vaccinations are recommended for most travellers to Kenya' ) ); ?></p>
    </div>

    <div class="kenya-vaccines-grid">
      <?php if ( have_rows( 'ke_vaccinations' ) ) : while ( have_rows( 'ke_vaccinations' ) ) : the_row(); ?>
        <div class="kenya-vaccine-card">
          <div class="kenya-vaccine-icon">
            <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="kenya-vaccine-content">
            <div class="kenya-vaccine-head">
              <h3 class="kenya-vaccine-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
              <span class="kenya-badge-<?php echo esc_attr( get_sub_field( 'badge_color' ) ); ?>"><?php echo esc_html( get_sub_field( 'badge_text' ) ); ?></span>
            </div>
            <p class="kenya-vaccine-short"><?php echo esc_html( get_sub_field( 'short_desc' ) ); ?></p>
            <p class="kenya-vaccine-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $vaccines = array(
          array( 'icon' => 'fas fa-shield-virus', 'name' => 'Yellow Fever', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Mosquito-borne virus', 'desc' => 'Certificate often required for entry. We are an official Yellow Fever Centre.' ),
          array( 'icon' => 'fas fa-virus', 'name' => 'Hepatitis A', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Food & water safety', 'desc' => 'Spread through contaminated food and water. Recommended for all travellers.' ),
          array( 'icon' => 'fas fa-bacteria', 'name' => 'Typhoid', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Food & water safety', 'desc' => 'Recommended for most travellers, especially if visiting rural areas.' ),
          array( 'icon' => 'fas fa-syringe', 'name' => 'Tetanus', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Routine booster', 'desc' => 'Ensure your routine UK schedule is up to date. A booster may be needed.' ),
          array( 'icon' => 'fas fa-dog', 'name' => 'Rabies', 'badge_color' => 'gray', 'badge' => 'Recommended', 'short' => 'Animal contact risk', 'desc' => 'High risk in Kenya. Recommended for those working with animals or in remote areas.' ),
          array( 'icon' => 'fas fa-notes-medical', 'name' => 'Hepatitis B', 'badge_color' => 'gray', 'badge' => 'Consider', 'short' => 'Blood/fluid contact', 'desc' => 'Consider for longer stays or if you might need medical treatment.' ),
        );
        foreach ( $vaccines as $vax ) :
        ?>
          <div class="kenya-vaccine-card">
            <div class="kenya-vaccine-icon"><i class="<?php echo esc_attr( $vax['icon'] ); ?>"></i></div>
            <div class="kenya-vaccine-content">
              <div class="kenya-vaccine-head">
                <h3 class="kenya-vaccine-name"><?php echo esc_html( $vax['name'] ); ?></h3>
                <span class="kenya-badge-<?php echo esc_attr( $vax['badge_color'] ); ?>"><?php echo esc_html( $vax['badge'] ); ?></span>
              </div>
              <p class="kenya-vaccine-short"><?php echo esc_html( $vax['short'] ); ?></p>
              <p class="kenya-vaccine-desc"><?php echo esc_html( $vax['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria Information -->
<section class="kenya-malaria-section">
  <div class="section-container">
    <div class="kenya-malaria-layout">
      <!-- Left: Visual -->
      <div class="kenya-malaria-visual">
        <div class="kenya-malaria-image-card">
          <?php
          $malaria_image_id = dp_field( 'ke_malaria_image' );
          $malaria_image_url = $malaria_image_id ? wp_get_attachment_image_url( $malaria_image_id, 'large' ) : '';
          ?>
          <?php if ( $malaria_image_url ) : ?><img src="<?php echo esc_url( $malaria_image_url ); ?>" alt="Safari in Kenya" class="kenya-malaria-image" /><?php endif; ?>
          <div class="kenya-malaria-overlay"></div>
          <div class="kenya-malaria-badge">
            <div class="kenya-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div>
            <span class="kenya-malaria-badge-text"><?php echo esc_html( dp_field( 'ke_malaria_badge_text', 'Expert Advice' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Content -->
      <div class="kenya-malaria-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( dp_field( 'ke_malaria_badge', 'HIGH RISK AREA' ) ); ?></span>
        </div>

        <h2 class="kenya-malaria-title"><?php echo esc_html( dp_field( 'ke_malaria_title', 'Malaria Risk in Kenya' ) ); ?></h2>
        <p class="kenya-malaria-intro">
          <?php echo esc_html( dp_field( 'ke_malaria_intro', 'Malaria risk is high throughout most of Kenya, including safari parks. Antimalarials are usually recommended.' ) ); ?>
        </p>

        <div class="kenya-malaria-info-grid">
          <?php if ( have_rows( 'ke_malaria_risks' ) ) : while ( have_rows( 'ke_malaria_risks' ) ) : the_row(); ?>
            <div class="kenya-malaria-item">
              <div class="kenya-malaria-item-icon <?php echo esc_attr( get_sub_field( 'risk_level' ) ); ?>">
                <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
              </div>
              <div class="kenya-malaria-item-text">
                <h4><?php echo esc_html( get_sub_field( 'title' ) ); ?></h4>
                <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="kenya-malaria-item">
              <div class="kenya-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div>
              <div class="kenya-malaria-item-text">
                <h4>High Risk Areas</h4>
                <p>Most of the country below 2500m, including coastal areas and game parks.</p>
              </div>
            </div>
            <div class="kenya-malaria-item">
              <div class="kenya-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div>
              <div class="kenya-malaria-item-text">
                <h4>Low Risk Areas</h4>
                <p>Nairobi and areas above 2500m have lower risk, but awareness is still key.</p>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="kenya-malaria-actions">
          <a href="<?php echo esc_url( dp_field( 'ke_malaria_cta_url', dp_booking_url() ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( dp_field( 'ke_malaria_cta_text', 'Check Your Risk' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Health Advice -->
<section class="kenya-health-section">
  <div class="section-container">
    <div class="kenya-health-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'ke_health_badge', 'HEALTH ADVICE' ) ); ?></span>
      </div>
      <h2 class="kenya-health-title"><?php echo esc_html( dp_field( 'ke_health_title', 'Stay healthy in Kenya' ) ); ?></h2>
      <p class="kenya-health-subtitle"><?php echo esc_html( dp_field( 'ke_health_subtitle', 'Essential tips for a safe safari' ) ); ?></p>
    </div>

    <div class="kenya-health-grid">
      <?php if ( have_rows( 'ke_health_tips' ) ) : while ( have_rows( 'ke_health_tips' ) ) : the_row();
        $tip_image_id = get_sub_field( 'image' );
        $tip_image_url = $tip_image_id ? wp_get_attachment_image_url( $tip_image_id, 'large' ) : '';
      ?>
        <div class="kenya-health-card-visual">
          <div class="kenya-health-bg">
            <?php if ( $tip_image_url ) : ?>
              <img src="<?php echo esc_url( $tip_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php endif; ?>
            <div class="kenya-health-overlay"></div>
          </div>
          <div class="kenya-health-content">
            <div class="kenya-health-icon-wrapper">
              <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <h3 class="kenya-health-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="kenya-health-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $tips = array(
          array( 'icon' => 'fas fa-glass-water', 'title' => 'Food & Water', 'desc' => 'Drink bottled water only. Avoid ice and salads. Eat freshly cooked food.', 'image' => '' ),
          array( 'icon' => 'fas fa-sun', 'title' => 'Sun Safety', 'desc' => 'Equatorial sun is strong. High SPF, hat, and sunglasses are essential.', 'image' => '' ),
          array( 'icon' => 'fas fa-mosquito', 'title' => 'Insects', 'desc' => 'Use 50% DEET repellent. Wear long sleeves/trousers at dawn and dusk.', 'image' => '' ),
        );
        foreach ( $tips as $tip ) :
        ?>
          <div class="kenya-health-card-visual">
            <div class="kenya-health-bg">
              <img src="<?php echo esc_url( $tip['image'] ); ?>" alt="<?php echo esc_attr( $tip['title'] ); ?>" />
              <div class="kenya-health-overlay"></div>
            </div>
            <div class="kenya-health-content">
              <div class="kenya-health-icon-wrapper"><i class="<?php echo esc_attr( $tip['icon'] ); ?>"></i></div>
              <h3 class="kenya-health-card-title"><?php echo esc_html( $tip['title'] ); ?></h3>
              <p class="kenya-health-card-desc"><?php echo esc_html( $tip['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="kenya-cta-section">
  <div class="kenya-cta-glow-1"></div>
  <div class="kenya-cta-glow-2"></div>
  <div class="kenya-cta-dots"></div>
  <div class="section-container">
    <div class="kenya-cta-content">
      <h2 class="kenya-cta-title"><?php echo esc_html( dp_field( 'ke_cta_title', 'Ready for your Kenya safari?' ) ); ?></h2>
      <p class="kenya-cta-description">
        <?php
        $kenya_cta_default = 'Book your travel health consultation at our ' . dp_option( 'pharmacy_town', 'Denton' ) . ' clinic. Get expert advice and all recommended vaccinations in one visit.';
        echo esc_html( dp_field( 'ke_cta_description', $kenya_cta_default ) );
        ?>
      </p>
      <div class="kenya-cta-actions">
        <a href="<?php echo esc_url( dp_field( 'ke_cta_primary_url', dp_booking_url() ) ); ?>" class="cta-button primary-cta kenya-cta-button-white">
          <?php echo esc_html( dp_field( 'ke_cta_primary_text', 'Book Kenya Consultation' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta kenya-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( dp_phone() ); ?>
        </a>
      </div>
      <div class="kenya-cta-checks">
        <div class="kenya-cta-check">
          <i class="fas fa-plane-departure"></i>
          <span><?php echo esc_html( dp_field( 'ke_cta_check_1', 'Travel Ready' ) ); ?></span>
        </div>
        <div class="kenya-cta-check">
          <i class="fas fa-user-doctor"></i>
          <span><?php echo esc_html( dp_field( 'ke_cta_check_2', 'Expert Advice' ) ); ?></span>
        </div>
        <div class="kenya-cta-check">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( dp_field( 'ke_cta_check_3', 'All Vaccines' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
