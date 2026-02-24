<?php
/**
 * Template Name: Travel Health
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="travel-hero-section">
  <div class="travel-hero-bg"></div>
  <div class="travel-hero-overlay"></div>
  <div class="travel-hero-dots"></div>

  <div class="section-container">
    <div class="travel-hero-grid">

      <!-- Left: Content -->
      <div class="travel-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( ep_field( 'th_hero_badge', 'TRAVEL HEALTH SERVICES' ) ); ?></span>
        </div>

        <h1 class="travel-hero-title">
          <?php echo esc_html( ep_field( 'th_hero_title_line1', "Ashford's Leading" ) ); ?><br />
          <span class="gradient-text"><?php echo esc_html( ep_field( 'th_hero_title_highlight', 'Travel Clinic' ) ); ?></span>
        </h1>

        <p class="travel-hero-description">
          <?php echo esc_html( ep_field( 'th_hero_description', 'Expert travel jabs Ashford and health advice for your next adventure. Book your appointment at our Ashford travel clinic with Dilip.' ) ); ?>
        </p>

        <div class="travel-hero-actions">
          <a href="<?php echo esc_url( ep_field( 'th_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( ep_field( 'th_hero_cta_text', 'Book Appointment' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( ep_phone() ); ?>
          </a>
        </div>

        <!-- Trust Badges -->
        <div class="travel-hero-trust">
          <div class="travel-hero-trust-item">
            <i class="fas fa-shield-virus"></i>
            <span><?php echo esc_html( ep_field( 'th_trust_1', 'Yellow Fever Centre' ) ); ?></span>
          </div>
          <div class="travel-hero-trust-item">
            <i class="fas fa-syringe"></i>
            <span><?php echo esc_html( ep_field( 'th_trust_2', 'All Travel Vaccinations' ) ); ?></span>
          </div>
          <div class="travel-hero-trust-item">
            <i class="fas fa-user-doctor"></i>
            <span><?php echo esc_html( ep_field( 'th_trust_3', 'Expert Travel Advice' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Visual -->
      <div class="travel-hero-visual"></div>

    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="travel-stats-section">
  <div class="travel-stats-shimmer"></div>
  <div class="section-container">
    <div class="travel-stats-grid">
      <?php if ( have_rows( 'th_stats' ) ) : while ( have_rows( 'th_stats' ) ) : the_row(); ?>
        <div class="travel-stat-item">
          <div class="travel-stat-icon">
            <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="travel-stat-content">
            <p class="travel-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></p>
            <p class="travel-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="travel-stat-item">
          <div class="travel-stat-icon"><i class="fas fa-shield-virus"></i></div>
          <div class="travel-stat-content"><p class="travel-stat-number">Official</p><p class="travel-stat-label">Yellow Fever Centre</p></div>
        </div>
        <div class="travel-stat-item">
          <div class="travel-stat-icon"><i class="fas fa-passport"></i></div>
          <div class="travel-stat-content"><p class="travel-stat-number">1,000+</p><p class="travel-stat-label">Travellers Protected</p></div>
        </div>
        <div class="travel-stat-item">
          <div class="travel-stat-icon"><i class="fas fa-award"></i></div>
          <div class="travel-stat-content"><p class="travel-stat-number">30+</p><p class="travel-stat-label">Years Experience</p></div>
        </div>
        <div class="travel-stat-item">
          <div class="travel-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="travel-stat-content"><p class="travel-stat-number">GPhC</p><p class="travel-stat-label">Registered</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="travel-why-section">
  <div class="section-container">
    <div class="travel-why-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'th_why_badge', 'WHY CHOOSE US' ) ); ?></span>
      </div>
      <h2 class="travel-why-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'th_why_title_highlight', 'Why choose our' ) ); ?></span> <?php echo esc_html( ep_field( 'th_why_title_rest', 'Ashford travel clinic?' ) ); ?>
      </h2>
      <p class="travel-why-description"><?php echo esc_html( ep_field( 'th_why_description', 'Expert care, flexible appointments, and comprehensive travel health services all under one roof.' ) ); ?></p>
    </div>

    <div class="travel-why-grid-premium">
      <?php if ( have_rows( 'th_why_cards' ) ) : while ( have_rows( 'th_why_cards' ) ) : the_row();
        $card_image_id = get_sub_field( 'image' );
        $card_image_url = $card_image_id ? wp_get_attachment_image_url( $card_image_id, 'large' ) : '';
        $card_url = get_sub_field( 'url' );
      ?>
        <a href="<?php echo esc_url( $card_url ? $card_url : '#' ); ?>" class="travel-why-card-premium">
          <div class="travel-why-card-inner">
            <?php if ( $card_image_url ) : ?>
              <img src="<?php echo esc_url( $card_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" class="travel-why-card-image" />
            <?php endif; ?>
            <div class="travel-why-card-overlay"></div>
            <div class="travel-why-card-hover">
              <span class="travel-why-card-button">Learn More</span>
            </div>
            <div class="travel-why-card-label">
              <h3 class="travel-why-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
              <p class="travel-why-card-subtitle"><?php echo esc_html( get_sub_field( 'subtitle' ) ); ?></p>
              <div class="travel-why-card-line"></div>
            </div>
          </div>
        </a>
      <?php endwhile; else : ?>
        <?php
        $why_cards = array(
          array( 'title' => 'Expert Consultations', 'subtitle' => 'Tailored advice for your journey', 'image' => 'https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769942949376-0.png' ),
          array( 'title' => 'Flexible Appointments', 'subtitle' => 'Same-day & weekend slots', 'image' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=800&h=1000&fit=crop' ),
          array( 'title' => 'Competitive Pricing', 'subtitle' => 'Transparent, affordable rates', 'image' => 'https://images.unsplash.com/photo-1554224311-beee2ece8c1a?w=800&h=1000&fit=crop' ),
          array( 'title' => 'Convenient Location', 'subtitle' => 'Easy access with free parking', 'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&h=1000&fit=crop' ),
        );
        foreach ( $why_cards as $card ) :
        ?>
          <a href="#" class="travel-why-card-premium">
            <div class="travel-why-card-inner">
              <img src="<?php echo esc_url( $card['image'] ); ?>" alt="<?php echo esc_attr( $card['title'] ); ?>" class="travel-why-card-image" />
              <div class="travel-why-card-overlay"></div>
              <div class="travel-why-card-hover">
                <span class="travel-why-card-button">Learn More</span>
              </div>
              <div class="travel-why-card-label">
                <h3 class="travel-why-card-title"><?php echo esc_html( $card['title'] ); ?></h3>
                <p class="travel-why-card-subtitle"><?php echo esc_html( $card['subtitle'] ); ?></p>
                <div class="travel-why-card-line"></div>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Revolution Slider / Travel Banner -->
<?php if ( shortcode_exists( 'rev_slider' ) ) : ?>
  <?php echo do_shortcode( '[rev_slider alias="travel-banner"]' ); ?>
<?php else : ?>
  <section class="revslider-section" id="hero-slider">
    <div class="revslider-wrapper">
      <div class="revslider-placeholder">
        <div class="revslider-overlay"></div>
        <?php
        $th_banner_image_id = ep_field( 'th_banner_image' );
        $th_banner_image_url = $th_banner_image_id ? wp_get_attachment_image_url( $th_banner_image_id, 'full' ) : 'https://c.animaapp.com/mky4syt0x80ocF/img/uploaded-asset-1769954210491-0.jpeg';
        ?>
        <img src="<?php echo esc_url( $th_banner_image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'th_banner_title', 'Protect Your Adventures Across the Globe' ) ); ?>" class="revslider-image" />
        <div class="revslider-content">
          <div class="revslider-container">
            <span class="revslider-badge"><?php echo esc_html( ep_field( 'th_banner_badge', 'Yellow Fever Approved' ) ); ?></span>
            <h1 class="revslider-title"><?php echo esc_html( ep_field( 'th_banner_title', 'Protect Your Adventures Across the Globe' ) ); ?></h1>
            <p class="revslider-subtitle"><?php echo esc_html( ep_field( 'th_banner_subtitle', 'From yellow fever to malaria prevention, get expert travel vaccinations at Easy Pharmacy' ) ); ?></p>
            <div class="revslider-cta">
              <a href="<?php echo esc_url( ep_field( 'th_hero_cta_url', ep_booking_url() ) ); ?>" class="revslider-btn-primary"><?php echo esc_html( ep_field( 'th_banner_cta_text', 'Book Travel Clinic' ) ); ?></a>
              <a href="#services" class="revslider-btn-secondary"><?php echo esc_html( ep_field( 'th_banner_secondary_text', 'Serving Ashford, Chertsey and beyond' ) ); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Popular Destinations -->
<section class="travel-destinations-section">
  <div class="section-container">
    <div class="travel-destinations-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'th_destinations_badge', 'POPULAR DESTINATIONS' ) ); ?></span>
      </div>
      <h2 class="travel-destinations-title"><span class="gradient-text"><?php echo esc_html( ep_field( 'th_destinations_title_highlight', 'Travelling to' ) ); ?></span> <?php echo esc_html( ep_field( 'th_destinations_title_rest', 'these destinations?' ) ); ?></h2>
    </div>

    <div class="travel-destinations-grid">
      <?php if ( have_rows( 'th_destinations' ) ) : while ( have_rows( 'th_destinations' ) ) : the_row();
        $dest_image_id = get_sub_field( 'image' );
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
          array( 'name' => 'South Africa', 'image' => 'https://images.unsplash.com/photo-1576485290814-1c72aa4bbb8e?w=400&h=500&fit=crop', 'url' => '#' ),
          array( 'name' => 'Indonesia', 'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=400&h=500&fit=crop', 'url' => '#' ),
          array( 'name' => 'Brazil', 'image' => 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?w=400&h=500&fit=crop', 'url' => '/travel-brazil/' ),
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

<!-- Services Section -->
<section class="travel-services-section" id="services">
  <div class="section-container">
    <div class="travel-services-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'th_services_badge', 'COMPREHENSIVE TRAVEL HEALTH' ) ); ?></span>
      </div>
      <h2 class="travel-services-title"><span class="gradient-text"><?php echo esc_html( ep_field( 'th_services_title_highlight', 'Everything you need' ) ); ?></span> <?php echo esc_html( ep_field( 'th_services_title_rest', 'for safe travel' ) ); ?></h2>
      <p class="travel-services-description"><?php echo esc_html( ep_field( 'th_services_description', 'From expert consultations to all vaccinations and official certificates' ) ); ?></p>
    </div>

    <div class="travel-services-grid">
      <?php if ( have_rows( 'th_services' ) ) : while ( have_rows( 'th_services' ) ) : the_row();
        $svc_image_id = get_sub_field( 'image' );
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
              <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <h3 class="travel-service-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="travel-service-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $services = array(
          array( 'icon' => 'fas fa-syringe', 'title' => 'Travel Vaccinations', 'desc' => 'Full range including yellow fever, rabies, and typhoid.', 'image' => 'https://c.animaapp.com/mlxl197ser1khJ/img/uploaded-asset-1771163150335-1.png', 'style' => 'object-fit: contain; padding: 2rem; background: #f8f7ff;' ),
          array( 'icon' => 'fas fa-pills', 'title' => 'Malaria Prevention', 'desc' => 'Prescription medication and guidance for your trip.', 'image' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&h=800&fit=crop', 'style' => '' ),
          array( 'icon' => 'fas fa-kit-medical', 'title' => 'Travel Health Kits', 'desc' => 'Personalised first aid kits tailored for your destination.', 'image' => 'https://images.unsplash.com/photo-1603398938378-e54eab446dde?w=600&h=800&fit=crop', 'style' => '' ),
          array( 'icon' => 'fas fa-certificate', 'title' => 'Health Certificates', 'desc' => 'Official vaccination certificates for border entry.', 'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=800&fit=crop', 'style' => '' ),
          array( 'icon' => 'fas fa-clipboard-check', 'title' => 'Travel Health Advice', 'desc' => 'Destination-specific guidance from expert pharmacists.', 'image' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600&h=800&fit=crop', 'style' => '' ),
        );
        foreach ( $services as $svc ) :
        ?>
          <div class="travel-service-card-premium">
            <div class="travel-service-image-wrapper">
              <img src="<?php echo esc_url( $svc['image'] ); ?>" alt="<?php echo esc_attr( $svc['title'] ); ?>" class="travel-service-image"<?php if ( $svc['style'] ) : ?> style="<?php echo esc_attr( $svc['style'] ); ?>"<?php endif; ?> />
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

<!-- Vaccinations Grid -->
<section class="travel-vaccines-section">
  <div class="travel-vaccines-blob-1"></div>
  <div class="travel-vaccines-blob-2"></div>
  <div class="section-container">
    <div class="travel-vaccines-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'th_vaccines_badge', 'ALL VACCINATIONS' ) ); ?></span>
      </div>
      <h3 class="travel-vaccines-title"><span class="gradient-text"><?php echo esc_html( ep_field( 'th_vaccines_title_highlight', 'Available' ) ); ?></span> <?php echo esc_html( ep_field( 'th_vaccines_title_rest', 'Vaccinations' ) ); ?></h3>
    </div>

    <div class="travel-vaccines-grid">
      <?php if ( have_rows( 'th_vaccinations' ) ) : while ( have_rows( 'th_vaccinations' ) ) : the_row();
        $is_special = get_sub_field( 'is_featured' );
        $card_class = $is_special ? 'travel-vaccine-card travel-vaccine-card-yellow' : 'travel-vaccine-card';
      ?>
        <div class="<?php echo esc_attr( $card_class ); ?>">
          <div class="travel-vaccine-icon">
            <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h4 class="travel-vaccine-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h4>
          <?php if ( $badge = get_sub_field( 'badge' ) ) : ?>
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

<!-- How It Works / Process Section -->
<section class="travel-process-section" id="process">
  <div class="section-container">
    <div class="travel-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'th_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="travel-process-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'th_process_title_highlight', 'Your travel clinic' ) ); ?></span> <?php echo esc_html( ep_field( 'th_process_title_rest', 'Ashford journey' ) ); ?>
      </h2>
    </div>

    <div class="travel-process-timeline">
      <?php if ( have_rows( 'th_process_steps' ) ) : $step_index = 0; while ( have_rows( 'th_process_steps' ) ) : the_row(); $step_index++;
        $step_image_id = get_sub_field( 'image' );
        $step_image_url = $step_image_id ? wp_get_attachment_image_url( $step_image_id, 'large' ) : '';
      ?>
        <div class="travel-process-card">
          <div class="travel-process-card-number">
            <span><?php echo esc_html( $step_index ); ?></span>
          </div>
          <div class="travel-process-card-body">
            <div class="travel-process-card-text">
              <h3 class="travel-process-step-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
              <p class="travel-process-step-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              <div class="travel-process-step-meta">
                <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'meta_icon' ) ) ); ?>"></i>
                <span><?php echo esc_html( get_sub_field( 'meta_text' ) ); ?></span>
              </div>
            </div>
            <?php if ( $step_image_url ) : ?>
              <div class="travel-process-card-image">
                <img src="<?php echo esc_url( $step_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $steps = array(
          array(
            'title' => 'Book Consultation',
            'desc' => 'Book your appointment online or call us. We recommend booking 6-8 weeks before travel, but we can often accommodate last-minute trips.',
            'meta_icon' => 'fas fa-clock',
            'meta_text' => 'Book online 24/7',
            'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop',
          ),
          array(
            'title' => 'Consultation & Vaccination',
            'desc' => 'Meet with our pharmacist to discuss your itinerary and health history. We\'ll administer necessary vaccinations and provide health advice.',
            'meta_icon' => 'fas fa-check-circle',
            'meta_text' => 'Safe & professional',
            'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=400&fit=crop',
          ),
          array(
            'title' => 'Travel with Confidence',
            'desc' => 'Leave with your vaccination record card, any necessary medication (like antimalarials), and the peace of mind that you\'re protected.',
            'meta_icon' => 'fas fa-passport',
            'meta_text' => 'Official certificates',
            'image' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&h=400&fit=crop',
          ),
        );
        foreach ( $steps as $i => $step ) :
        ?>
          <div class="travel-process-card">
            <div class="travel-process-card-number">
              <span><?php echo esc_html( $i + 1 ); ?></span>
            </div>
            <div class="travel-process-card-body">
              <div class="travel-process-card-text">
                <h3 class="travel-process-step-title"><?php echo esc_html( $step['title'] ); ?></h3>
                <p class="travel-process-step-description"><?php echo esc_html( $step['desc'] ); ?></p>
                <div class="travel-process-step-meta">
                  <i class="<?php echo esc_attr( $step['meta_icon'] ); ?>"></i>
                  <span><?php echo esc_html( $step['meta_text'] ); ?></span>
                </div>
              </div>
              <div class="travel-process-card-image">
                <img src="<?php echo esc_url( $step['image'] ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>" />
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="travel-faq-section" id="faq">
  <div class="section-container">
    <div class="travel-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'th_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="travel-faq-title"><span class="gradient-text"><?php echo esc_html( ep_field( 'th_faq_title_highlight', 'Travel health' ) ); ?></span> <?php echo esc_html( ep_field( 'th_faq_title_rest', 'questions answered' ) ); ?></h2>
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

<!-- Final CTA Section -->
<section class="travel-cta-section">
  <div class="travel-cta-glow-1"></div>
  <div class="travel-cta-glow-2"></div>
  <div class="travel-cta-dots"></div>
  <div class="section-container">
    <div class="travel-cta-content">
      <div class="travel-cta-badges">
        <div class="travel-cta-badge">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html( ep_field( 'th_cta_badge_1', 'Yellow Fever Centre' ) ); ?></span>
        </div>
        <div class="travel-cta-badge">
          <i class="fas fa-user-doctor"></i>
          <span><?php echo esc_html( ep_field( 'th_cta_badge_2', 'Expert Advice' ) ); ?></span>
        </div>
        <div class="travel-cta-badge">
          <i class="fas fa-calendar-check"></i>
          <span><?php echo esc_html( ep_field( 'th_cta_badge_3', 'Same Day Service' ) ); ?></span>
        </div>
      </div>
      <h2 class="travel-cta-title"><?php echo esc_html( ep_field( 'th_cta_title', 'Ready to protect your travels?' ) ); ?></h2>
      <p class="travel-cta-description">
        <?php echo esc_html( ep_field( 'th_cta_description', 'Don\'t let health worries spoil your adventure. Book your comprehensive travel health consultation with Easy Pharmacy Ashford today.' ) ); ?>
      </p>
      <div class="travel-cta-actions">
        <a href="<?php echo esc_url( ep_field( 'th_cta_primary_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta travel-cta-button-white">
          <?php echo esc_html( ep_field( 'th_cta_primary_text', 'Book Travel Health Appointment' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta travel-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( ep_phone() ); ?>
        </a>
      </div>
      <div class="travel-cta-checks">
        <div class="travel-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'th_cta_check_1', 'Flexible appointments' ) ); ?></span>
        </div>
        <div class="travel-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'th_cta_check_2', 'Expert advice' ) ); ?></span>
        </div>
        <div class="travel-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'th_cta_check_3', 'Official certificates' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
