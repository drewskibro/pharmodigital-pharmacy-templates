<?php
/**
 * Template Name: Travel - Thailand
 * @package Denton_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="thailand-hero-section">
  <div class="thailand-hero-overlay"></div>
  <div class="thailand-hero-dots"></div>
  <div class="section-container">
    <div class="thailand-hero-grid">
      <!-- Left: Content -->
      <div class="thailand-hero-content">
        <div class="hero-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="hero-badge-text"><?php echo esc_html( dp_field( 'td_hero_badge', 'THAILAND TRAVEL HEALTH' ) ); ?></span>
        </div>

        <h1 class="hero-title" style="color: white;">
          <?php echo esc_html( dp_field( 'td_hero_title_line1', 'Travel Vaccinations for' ) ); ?><br />
          <span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html( dp_field( 'td_hero_title_highlight', 'Thailand' ) ); ?></span>
        </h1>

        <p class="thailand-hero-description">
          <?php echo esc_html( dp_field( 'td_hero_description', 'Expert advice and vaccinations for your Thailand adventure. Get protected before you travel with ' . dp_pharmacy_name() . '\'s trusted travel health specialists.' ) ); ?>
        </p>

        <div class="thailand-hero-actions">
          <a href="<?php echo esc_url( dp_field( 'td_hero_cta_url', dp_booking_url() ) ); ?>" class="cta-button primary-cta thailand-hero-btn-primary">
            <?php echo esc_html( dp_field( 'td_hero_cta_text', 'Book Thailand Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta thailand-hero-btn-secondary">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( dp_phone() ); ?>
          </a>
        </div>
      </div>

      <!-- Right: Visual (Handled by background image) -->
      <div class="thailand-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Quick Info Bar -->
<section class="thailand-stats-section">
  <div class="thailand-stats-shimmer"></div>
  <div class="section-container">
    <div class="thailand-stats-grid">
      <?php if ( have_rows( 'td_stats' ) ) : while ( have_rows( 'td_stats' ) ) : the_row(); ?>
        <div class="thailand-stat-item">
          <div class="thailand-stat-icon">
            <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="thailand-stat-content">
            <p class="thailand-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></p>
            <p class="thailand-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="thailand-stat-item">
          <div class="thailand-stat-icon"><i class="fas fa-syringe"></i></div>
          <div class="thailand-stat-content"><p class="thailand-stat-number">5-7</p><p class="thailand-stat-label">Vaccines Recommended</p></div>
        </div>
        <div class="thailand-stat-item">
          <div class="thailand-stat-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="thailand-stat-content"><p class="thailand-stat-number">6-8</p><p class="thailand-stat-label">Weeks Before Travel</p></div>
        </div>
        <div class="thailand-stat-item">
          <div class="thailand-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="thailand-stat-content"><p class="thailand-stat-number">Full</p><p class="thailand-stat-label">Protection Available</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Recommended Vaccinations -->
<section class="thailand-vaccines-section">
  <div class="section-container">
    <div class="thailand-vaccines-header">
      <h2 class="thailand-vaccines-title"><?php echo esc_html( dp_field( 'td_vaccines_title', 'Protect yourself in Thailand' ) ); ?></h2>
      <div class="thailand-vaccines-divider"></div>
      <p class="thailand-vaccines-description"><?php echo esc_html( dp_field( 'td_vaccines_description', 'These vaccinations are recommended for most travellers to Thailand' ) ); ?></p>
    </div>

    <div class="thailand-vaccines-grid">
      <?php if ( have_rows( 'td_vaccinations' ) ) : while ( have_rows( 'td_vaccinations' ) ) : the_row(); ?>
        <div class="thailand-vaccine-card">
          <div class="thailand-vaccine-icon">
            <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="thailand-vaccine-content">
            <div class="thailand-vaccine-head">
              <h3 class="thailand-vaccine-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
              <span class="thailand-badge-<?php echo esc_attr( get_sub_field( 'badge_color' ) ); ?>"><?php echo esc_html( get_sub_field( 'badge_text' ) ); ?></span>
            </div>
            <p class="thailand-vaccine-short"><?php echo esc_html( get_sub_field( 'short_desc' ) ); ?></p>
            <p class="thailand-vaccine-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $vaccines = array(
          array( 'icon' => 'fas fa-virus', 'name' => 'Hepatitis A', 'badge_color' => 'purple', 'badge' => 'Recommended', 'short' => 'Protection against contaminated food/water', 'desc' => 'Hepatitis A is spread through contaminated food and water. This vaccine is recommended for all travellers to Thailand.' ),
          array( 'icon' => 'fas fa-bacteria', 'name' => 'Typhoid', 'badge_color' => 'purple', 'badge' => 'Recommended', 'short' => 'Essential for food safety', 'desc' => 'Typhoid fever is contracted through contaminated food and water. Highly recommended for travellers to Thailand, especially outside major cities.' ),
          array( 'icon' => 'fas fa-notes-medical', 'name' => 'Hepatitis B', 'badge_color' => 'gray', 'badge' => 'Consider', 'short' => 'For longer stays or medical procedures', 'desc' => 'Recommended for long-term travellers, those who may need medical treatment, or anyone engaging in activities with blood contact risk.' ),
          array( 'icon' => 'fas fa-mosquito', 'name' => 'Japanese Encephalitis', 'badge_color' => 'gray', 'badge' => 'Rural Areas', 'short' => 'For rural travel and extended stays', 'desc' => 'Recommended if you\'re spending time in rural areas, especially during monsoon season, or staying for more than a month.' ),
          array( 'icon' => 'fas fa-dog', 'name' => 'Rabies', 'badge_color' => 'gray', 'badge' => 'Consider', 'short' => 'For animal contact risk', 'desc' => 'Consider if you\'ll be in rural areas, working with animals, or travelling for extended periods where medical care may be limited.' ),
          array( 'icon' => 'fas fa-syringe', 'name' => 'Tetanus/Diphtheria/Polio', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Routine vaccination check', 'desc' => 'Ensure your routine UK vaccinations are up to date. A booster may be needed if it\'s been more than 10 years since your last dose.' ),
        );
        foreach ( $vaccines as $vax ) :
        ?>
          <div class="thailand-vaccine-card">
            <div class="thailand-vaccine-icon"><i class="<?php echo esc_attr( $vax['icon'] ); ?>"></i></div>
            <div class="thailand-vaccine-content">
              <div class="thailand-vaccine-head">
                <h3 class="thailand-vaccine-name"><?php echo esc_html( $vax['name'] ); ?></h3>
                <span class="thailand-badge-<?php echo esc_attr( $vax['badge_color'] ); ?>"><?php echo esc_html( $vax['badge'] ); ?></span>
              </div>
              <p class="thailand-vaccine-short"><?php echo esc_html( $vax['short'] ); ?></p>
              <p class="thailand-vaccine-desc"><?php echo esc_html( $vax['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria Information -->
<section class="thailand-malaria-section">
  <div class="section-container">
    <div class="thailand-malaria-layout">
      <!-- Left: Visual -->
      <div class="thailand-malaria-visual">
        <div class="thailand-malaria-image-card">
          <?php
          $malaria_image_id = dp_field( 'td_malaria_image' );
          $malaria_image_url = $malaria_image_id ? wp_get_attachment_image_url( $malaria_image_id, 'large' ) : 'https://images.unsplash.com/photo-1504214208698-ea1916a2195a?w=800&h=1000&fit=crop';
          ?>
          <img src="<?php echo esc_url( $malaria_image_url ); ?>" alt="Thailand travel health" class="thailand-malaria-image" />
          <div class="thailand-malaria-overlay"></div>
          <div class="thailand-malaria-badge">
            <div class="thailand-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div>
            <span class="thailand-malaria-badge-text"><?php echo esc_html( dp_field( 'td_malaria_badge_text', 'Expert Advice' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Content -->
      <div class="thailand-malaria-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( dp_field( 'td_malaria_badge', 'MOSQUITO-BORNE DISEASES' ) ); ?></span>
        </div>

        <h2 class="thailand-malaria-title"><?php echo esc_html( dp_field( 'td_malaria_title', 'Malaria & Dengue Risks in Thailand' ) ); ?></h2>
        <p class="thailand-malaria-intro">
          <?php echo esc_html( dp_field( 'td_malaria_intro', 'While malaria risk is low in most tourist areas, Dengue fever is common nationwide. Our pharmacists will check your specific itinerary and advise on prevention.' ) ); ?>
        </p>

        <div class="thailand-malaria-info-grid">
          <?php if ( have_rows( 'td_malaria_risks' ) ) : while ( have_rows( 'td_malaria_risks' ) ) : the_row(); ?>
            <div class="thailand-malaria-item">
              <div class="thailand-malaria-item-icon <?php echo esc_attr( get_sub_field( 'risk_level' ) ); ?>">
                <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
              </div>
              <div class="thailand-malaria-item-text">
                <h4><?php echo esc_html( get_sub_field( 'title' ) ); ?></h4>
                <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="thailand-malaria-item">
              <div class="thailand-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div>
              <div class="thailand-malaria-item-text">
                <h4>Low Malaria Risk</h4>
                <p>Bangkok, Phuket, Chiang Mai, and Koh Samui are generally low risk for malaria.</p>
              </div>
            </div>
            <div class="thailand-malaria-item">
              <div class="thailand-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div>
              <div class="thailand-malaria-item-text">
                <h4>Border Regions</h4>
                <p>Malaria risk exists near borders with Myanmar, Cambodia, and Laos. Antimalarials may be needed.</p>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="thailand-malaria-actions">
          <a href="<?php echo esc_url( dp_field( 'td_malaria_cta_url', dp_booking_url() ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( dp_field( 'td_malaria_cta_text', 'Check Your Risk' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Health Advice -->
<section class="thailand-health-section">
  <div class="section-container">
    <div class="thailand-health-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'td_health_badge', 'HEALTH ADVICE' ) ); ?></span>
      </div>
      <h2 class="thailand-health-title"><?php echo esc_html( dp_field( 'td_health_title', 'Stay healthy in Thailand' ) ); ?></h2>
      <p class="thailand-health-subtitle"><?php echo esc_html( dp_field( 'td_health_subtitle', 'Essential tips for a safe tropical adventure' ) ); ?></p>
    </div>

    <div class="thailand-health-grid">
      <?php if ( have_rows( 'td_health_tips' ) ) : while ( have_rows( 'td_health_tips' ) ) : the_row();
        $tip_image_id = get_sub_field( 'image' );
        $tip_image_url = $tip_image_id ? wp_get_attachment_image_url( $tip_image_id, 'large' ) : '';
      ?>
        <div class="thailand-health-card-visual">
          <div class="thailand-health-bg">
            <?php if ( $tip_image_url ) : ?>
              <img src="<?php echo esc_url( $tip_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php endif; ?>
            <div class="thailand-health-overlay"></div>
          </div>
          <div class="thailand-health-content">
            <div class="thailand-health-icon-wrapper">
              <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <h3 class="thailand-health-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="thailand-health-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $tips = array(
          array( 'icon' => 'fas fa-glass-water', 'title' => 'Food & Water', 'desc' => 'Stick to bottled water and avoid ice. Eat at busy spots where food is cooked fresh.', 'image' => 'https://images.unsplash.com/photo-1559314809-0d155014e29e?w=600&h=800&fit=crop' ),
          array( 'icon' => 'fas fa-mosquito', 'title' => 'Insect Protection', 'desc' => 'Dengue is common. Use 50% DEET repellent and cover up at dawn and dusk.', 'image' => 'https://images.unsplash.com/photo-1550989460-0adf9ea622e2?w=600&h=800&fit=crop' ),
          array( 'icon' => 'fas fa-sun', 'title' => 'Sun Safety', 'desc' => 'The tropical sun is strong. Use high SPF, wear a hat, and stay hydrated.', 'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600&h=800&fit=crop' ),
        );
        foreach ( $tips as $tip ) :
        ?>
          <div class="thailand-health-card-visual">
            <div class="thailand-health-bg">
              <img src="<?php echo esc_url( $tip['image'] ); ?>" alt="<?php echo esc_attr( $tip['title'] ); ?>" />
              <div class="thailand-health-overlay"></div>
            </div>
            <div class="thailand-health-content">
              <div class="thailand-health-icon-wrapper"><i class="<?php echo esc_attr( $tip['icon'] ); ?>"></i></div>
              <h3 class="thailand-health-card-title"><?php echo esc_html( $tip['title'] ); ?></h3>
              <p class="thailand-health-card-desc"><?php echo esc_html( $tip['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="thailand-cta-section">
  <div class="thailand-cta-glow-1"></div>
  <div class="thailand-cta-glow-2"></div>
  <div class="thailand-cta-dots"></div>
  <div class="section-container">
    <div class="thailand-cta-content">
      <h2 class="thailand-cta-title"><?php echo esc_html( dp_field( 'td_cta_title', 'Ready for your Thailand adventure?' ) ); ?></h2>
      <p class="thailand-cta-description">
        <?php echo esc_html( dp_field( 'td_cta_description', 'Book your Thailand travel health consultation at our ' . dp_option( 'pharmacy_town', 'Denton' ) . ' clinic. Get expert advice and all recommended vaccinations in one visit.' ) ); ?>
      </p>
      <div class="thailand-cta-actions">
        <a href="<?php echo esc_url( dp_field( 'td_cta_primary_url', dp_booking_url() ) ); ?>" class="cta-button primary-cta thailand-cta-button-white">
          <?php echo esc_html( dp_field( 'td_cta_primary_text', 'Book Thailand Consultation' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta thailand-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( dp_phone() ); ?>
        </a>
      </div>
      <div class="thailand-cta-checks">
        <div class="thailand-cta-check">
          <i class="fas fa-plane-departure"></i>
          <span><?php echo esc_html( dp_field( 'td_cta_check_1', 'Travel Ready' ) ); ?></span>
        </div>
        <div class="thailand-cta-check">
          <i class="fas fa-user-doctor"></i>
          <span><?php echo esc_html( dp_field( 'td_cta_check_2', 'Expert Thailand Advice' ) ); ?></span>
        </div>
        <div class="thailand-cta-check">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( dp_field( 'td_cta_check_3', 'All Vaccines Available' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
