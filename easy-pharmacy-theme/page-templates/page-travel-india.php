<?php
/**
 * Template Name: Travel - India
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="india-hero-section">
  <div class="india-hero-overlay"></div>
  <div class="india-hero-dots"></div>
  <div class="section-container">
    <div class="india-hero-grid">
      <!-- Left: Content -->
      <div class="india-hero-content">
        <div class="hero-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="hero-badge-text"><?php echo esc_html( ep_field( 'in_hero_badge', 'INDIA TRAVEL HEALTH' ) ); ?></span>
        </div>

        <h1 class="hero-title" style="color: white;">
          <?php echo esc_html( ep_field( 'in_hero_title_line1', 'Travel Vaccinations for' ) ); ?><br />
          <span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html( ep_field( 'in_hero_title_highlight', 'India' ) ); ?></span>
        </h1>

        <p class="india-hero-description">
          <?php echo esc_html( ep_field( 'in_hero_description', 'Expert advice and vaccinations for your India journey. Get protected before you travel with Ashford\'s trusted travel health specialists.' ) ); ?>
        </p>

        <div class="india-hero-actions">
          <a href="<?php echo esc_url( ep_field( 'in_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta india-hero-btn-primary">
            <?php echo esc_html( ep_field( 'in_hero_cta_text', 'Book an Appointment' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta india-hero-btn-secondary">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( ep_phone() ); ?>
          </a>
        </div>
      </div>

      <!-- Right: Visual (Handled by background image) -->
      <div class="india-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Social Proof Section — Google rating badge + travel health trust headline -->
<section class="india-social-proof-section">
  <div class="section-container">
    <div class="india-social-proof-wrapper">

      <!-- Left: Google Rating Badge (shared .rating-badge from globals.css) -->
      <div class="rating-badge">
        <div class="rating-header">
          <div class="rating-label">
            <div class="google-icon-wrapper">
              <i class="fab fa-google"></i>
            </div>
            <span>Google Rating</span>
          </div>
          <div class="badge-success">
            <i class="fas fa-check-circle"></i>
            <span>Excellent</span>
          </div>
        </div>
        <div class="rating-score">
          <span class="score-number"><?php echo esc_html( ep_option( 'google_rating', '4.7' ) ); ?></span>
          <div class="rating-score-detail">
            <div class="star-row">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="rating-count">Based on 300+ reviews</span>
          </div>
        </div>
        <div class="rating-footer">
          <div class="rating-location">
            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo esc_html( ep_option( 'pharmacy_location', 'Ashford, UK' ) ); ?></span>
          </div>
          <a href="#reviews" class="rating-link">View Reviews</a>
        </div>
      </div>

      <!-- Right: Trust headline + subtext -->
      <div class="india-social-proof-content">
        <p class="india-social-proof-eyebrow"><?php echo esc_html( ep_field( 'in_social_eyebrow', 'TRUSTED BY ASHFORD' ) ); ?></p>
        <h2 class="india-social-proof-headline"><?php echo esc_html( ep_field( 'in_social_headline', 'Expert travel health advice from your local GPhC-registered pharmacist' ) ); ?></h2>
        <p class="india-social-proof-subtext"><?php echo esc_html( ep_field( 'in_social_subtext', 'Hundreds of travellers protected with personalised vaccination plans. GPhC-registered, with same-day appointments available.' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Recommended Vaccinations -->
<section class="india-vaccines-section">
  <div class="section-container">
    <div class="india-vaccines-header">
      <h2 class="india-vaccines-title"><?php echo esc_html( ep_field( 'in_vaccines_title', 'Protect yourself in India' ) ); ?></h2>
      <div class="india-vaccines-divider"></div>
      <p class="india-vaccines-description"><?php echo esc_html( ep_field( 'in_vaccines_description', 'These vaccinations are recommended for most travellers to India' ) ); ?></p>
    </div>

    <div class="india-vaccines-grid">
      <?php if ( have_rows( 'in_vaccinations' ) ) : while ( have_rows( 'in_vaccinations' ) ) : the_row(); ?>
        <div class="india-vaccine-card">
          <div class="india-vaccine-icon">
            <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="india-vaccine-content">
            <div class="india-vaccine-head">
              <h3 class="india-vaccine-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
              <span class="india-badge-<?php echo esc_attr( get_sub_field( 'badge_color' ) ); ?>"><?php echo esc_html( get_sub_field( 'badge_text' ) ); ?></span>
            </div>
            <p class="india-vaccine-short"><?php echo esc_html( get_sub_field( 'short_desc' ) ); ?></p>
            <p class="india-vaccine-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $vaccines = array(
          array( 'icon' => 'fas fa-virus', 'name' => 'Hepatitis A', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Protection against contaminated food/water', 'desc' => 'Hepatitis A is highly prevalent in India. This vaccine is essential for all travellers, regardless of accommodation type.' ),
          array( 'icon' => 'fas fa-bacteria', 'name' => 'Typhoid', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Critical for food safety', 'desc' => 'Typhoid is common throughout India. Essential for all travellers, especially those visiting rural areas or staying for extended periods.' ),
          array( 'icon' => 'fas fa-notes-medical', 'name' => 'Hepatitis B', 'badge_color' => 'gray', 'badge' => 'Recommended', 'short' => 'For longer stays or medical procedures', 'desc' => 'Recommended for long-term travellers, those who may need medical treatment, or anyone engaging in activities with blood contact risk.' ),
          array( 'icon' => 'fas fa-dog', 'name' => 'Rabies', 'badge_color' => 'gray', 'badge' => 'Recommended', 'short' => 'High risk of animal contact', 'desc' => 'India has a high rabies risk. Strongly recommended for all travellers, especially those visiting rural areas or staying for extended periods.' ),
          array( 'icon' => 'fas fa-mosquito', 'name' => 'Japanese Encephalitis', 'badge_color' => 'gray', 'badge' => 'Rural Areas', 'short' => 'For rural travel and extended stays', 'desc' => 'Recommended if you\'re spending time in rural areas, especially during monsoon season (June-September), or staying for more than a month.' ),
          array( 'icon' => 'fas fa-syringe', 'name' => 'Tetanus/Diphtheria/Polio', 'badge_color' => 'purple', 'badge' => 'Essential', 'short' => 'Routine vaccination check', 'desc' => 'Ensure your routine UK vaccinations are up to date. A booster may be needed if it\'s been more than 10 years since your last dose.' ),
        );
        foreach ( $vaccines as $vax ) :
        ?>
          <div class="india-vaccine-card">
            <div class="india-vaccine-icon"><i class="<?php echo esc_attr( $vax['icon'] ); ?>"></i></div>
            <div class="india-vaccine-content">
              <div class="india-vaccine-head">
                <h3 class="india-vaccine-name"><?php echo esc_html( $vax['name'] ); ?></h3>
                <span class="india-badge-<?php echo esc_attr( $vax['badge_color'] ); ?>"><?php echo esc_html( $vax['badge'] ); ?></span>
              </div>
              <p class="india-vaccine-short"><?php echo esc_html( $vax['short'] ); ?></p>
              <p class="india-vaccine-desc"><?php echo esc_html( $vax['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria Information -->
<section class="india-malaria-section">
  <div class="section-container">
    <div class="india-malaria-layout">
      <!-- Left: Visual -->
      <div class="india-malaria-visual">
        <div class="india-malaria-image-card">
          <?php
          $malaria_image_id = ep_field( 'in_malaria_image' );
          $malaria_image_url = $malaria_image_id ? wp_get_attachment_image_url( $malaria_image_id, 'large' ) : 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=800&h=1000&fit=crop';
          ?>
          <img src="<?php echo esc_url( $malaria_image_url ); ?>" alt="Traveller in India" class="india-malaria-image" />
          <div class="india-malaria-overlay"></div>
          <div class="india-malaria-badge">
            <div class="india-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div>
            <span class="india-malaria-badge-text"><?php echo esc_html( ep_field( 'in_malaria_badge_text', 'Expert Advice' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Content -->
      <div class="india-malaria-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( ep_field( 'in_malaria_badge', 'MOSQUITO-BORNE DISEASES' ) ); ?></span>
        </div>

        <h2 class="india-malaria-title"><?php echo esc_html( ep_field( 'in_malaria_title', 'Malaria & Dengue Risks in India' ) ); ?></h2>
        <p class="india-malaria-intro">
          <?php echo esc_html( ep_field( 'in_malaria_intro', 'Malaria risk varies across India. Dengue fever is also a significant risk nationwide. Our pharmacists will check your specific itinerary and advise on prevention.' ) ); ?>
        </p>

        <div class="india-malaria-info-grid">
          <?php if ( have_rows( 'in_malaria_risks' ) ) : while ( have_rows( 'in_malaria_risks' ) ) : the_row(); ?>
            <div class="india-malaria-item">
              <div class="india-malaria-item-icon <?php echo esc_attr( get_sub_field( 'risk_level' ) ); ?>">
                <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
              </div>
              <div class="india-malaria-item-text">
                <h4><?php echo esc_html( get_sub_field( 'title' ) ); ?></h4>
                <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="india-malaria-item">
              <div class="india-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div>
              <div class="india-malaria-item-text">
                <h4>Low Malaria Risk</h4>
                <p>Areas above 2000m (Himachal Pradesh, Jammu &amp; Kashmir, Sikkim) are generally low risk.</p>
              </div>
            </div>
            <div class="india-malaria-item">
              <div class="india-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div>
              <div class="india-malaria-item-text">
                <h4>Risk Areas</h4>
                <p>Risk exists in most other areas, including Goa and Kerala. Antimalarials are often recommended.</p>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="india-malaria-actions">
          <a href="<?php echo esc_url( ep_field( 'in_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta">
            Check Your Risk
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Health Advice -->
<section class="india-health-section">
  <div class="section-container">
    <div class="india-health-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'in_health_badge', 'HEALTH ADVICE' ) ); ?></span>
      </div>
      <h2 class="india-health-title"><?php echo esc_html( ep_field( 'in_health_title', 'Stay healthy in India' ) ); ?></h2>
      <p class="india-health-subtitle"><?php echo esc_html( ep_field( 'in_health_subtitle', 'Essential tips for a safe journey' ) ); ?></p>
    </div>

    <div class="india-health-grid">
      <?php if ( have_rows( 'in_health_tips' ) ) : while ( have_rows( 'in_health_tips' ) ) : the_row();
        $tip_image_id = get_sub_field( 'image' );
        $tip_image_url = $tip_image_id ? wp_get_attachment_image_url( $tip_image_id, 'large' ) : '';
      ?>
        <div class="india-health-card-visual">
          <div class="india-health-bg">
            <?php if ( $tip_image_url ) : ?>
              <img src="<?php echo esc_url( $tip_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php endif; ?>
            <div class="india-health-overlay"></div>
          </div>
          <div class="india-health-content">
            <div class="india-health-icon-wrapper">
              <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <h3 class="india-health-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
            <p class="india-health-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $tips = array(
          array( 'icon' => 'fas fa-glass-water', 'title' => 'Food & Water', 'desc' => 'Drink only bottled/boiled water. Avoid ice. Eat freshly cooked food and peel your own fruit.', 'image' => 'https://images.unsplash.com/photo-1567188040759-fb8a883dc6d8?w=600&h=800&fit=crop' ),
          array( 'icon' => 'fas fa-mosquito', 'title' => 'Insect Protection', 'desc' => 'Use 50% DEET repellent day and night to protect against Malaria and Dengue.', 'image' => 'https://images.unsplash.com/photo-1621451537084-482c73073a0f?w=600&h=800&fit=crop' ),
          array( 'icon' => 'fas fa-sun', 'title' => 'Sun & Heat', 'desc' => 'Stay hydrated and use high SPF. Heat exhaustion is a risk, especially in summer months.', 'image' => 'https://images.unsplash.com/photo-1548013146-72479768bada?w=600&h=800&fit=crop' ),
        );
        foreach ( $tips as $tip ) :
        ?>
          <div class="india-health-card-visual">
            <div class="india-health-bg">
              <img src="<?php echo esc_url( $tip['image'] ); ?>" alt="<?php echo esc_attr( $tip['title'] ); ?>" />
              <div class="india-health-overlay"></div>
            </div>
            <div class="india-health-content">
              <div class="india-health-icon-wrapper"><i class="<?php echo esc_attr( $tip['icon'] ); ?>"></i></div>
              <h3 class="india-health-card-title"><?php echo esc_html( $tip['title'] ); ?></h3>
              <p class="india-health-card-desc"><?php echo esc_html( $tip['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Final CTA — matches hair loss / reviewer profile design system -->
<section class="india-cta-section">
  <div class="section-container">
    <div class="india-cta-inner">
      <h2 class="india-cta-title"><?php echo esc_html( ep_field( 'in_cta_title', 'Ready for Your India Adventure?' ) ); ?></h2>
      <p class="india-cta-description"><?php echo esc_html( ep_field( 'in_cta_description', 'Book your travel health consultation with our GPhC-registered pharmacist in Ashford. Expert advice and all recommended vaccinations in one visit.' ) ); ?></p>
      <div class="india-cta-actions">
        <a href="<?php echo esc_url( ep_field( 'in_cta_primary_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta">
          <?php echo esc_html( ep_field( 'in_cta_primary_text', 'Book an Appointment' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
          <i class="fas fa-phone"></i>
          <?php echo esc_html( ep_phone() ); ?>
        </a>
      </div>
      <div class="india-cta-trust">
        <span class="india-cta-trust-item"><i class="fas fa-shield-halved"></i> <?php echo esc_html( ep_field( 'in_cta_check_1', 'GPhC Registered' ) ); ?></span>
        <span class="india-cta-trust-item"><i class="fas fa-clock"></i> <?php echo esc_html( ep_field( 'in_cta_check_2', 'Same-Day Appointments' ) ); ?></span>
        <span class="india-cta-trust-item"><i class="fas fa-user-doctor"></i> <?php echo esc_html( ep_field( 'in_cta_check_3', 'No Referral Needed' ) ); ?></span>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
