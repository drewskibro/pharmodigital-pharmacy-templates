<?php
/**
 * Template Name: Weight Loss
 * @package Denton_Pharmacy
 */

get_header();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="wl-hero-section">
  <div class="wl-hero-bg"></div>
  <div class="wl-hero-dots"></div>
  <div class="wl-hero-glow-1"></div>
  <div class="wl-hero-glow-2"></div>

  <div class="section-container">
    <div class="wl-hero-grid">

      <!-- Left: Content -->
      <div class="wl-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( dp_field( 'wl_hero_badge', 'MEDICAL WEIGHT LOSS' ) ); ?></span>
        </div>

        <h1 class="wl-hero-title">
          <span class="gradient-text"><?php echo esc_html( dp_field( 'wl_hero_title_line_1', 'Medical Weight Loss' ) ); ?></span>
          <?php echo esc_html( dp_field( 'wl_hero_title_line_2', 'in Denton' ) ); ?>
          <?php $line3 = dp_field( 'wl_hero_title_line_3', '' ); if ( $line3 ) : ?>
          <br><span class="gradient-text"><?php echo esc_html( $line3 ); ?></span>
          <?php endif; ?>
        </h1>

        <p class="wl-hero-description">
          <?php echo esc_html( dp_field( 'wl_hero_description', 'Prescription Mounjaro and Wegovy (GLP-1 treatments) with expert guidance and face-to-face support right here in Denton. No remote consultations — real care from someone who knows your name.' ) ); ?>
        </p>

        <div class="wl-hero-actions">
          <a href="<?php echo esc_url( dp_field( 'wl_hero_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( dp_field( 'wl_hero_cta_text', 'Book Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html( 'Call ' . dp_phone() ); ?>
          </a>
        </div>

        <!-- Testimonial Card -->
        <div class="wl-hero-testimonial">
          <div class="wl-hero-testimonial-quote-icon">
            <i class="fas fa-quote-left"></i>
          </div>
          <p class="wl-hero-testimonial-quote">
            <?php echo esc_html( dp_field( 'wl_hero_testimonial_quote', '"I travel 40 miles every month to see Ahmed for my weight loss consultations—he\'s that good. Would never go anywhere else."' ) ); ?>
          </p>
          <div class="wl-hero-testimonial-footer">
            <div class="wl-hero-testimonial-author">
              <p class="wl-hero-testimonial-name"><?php echo esc_html( dp_field( 'wl_hero_testimonial_name', 'Denton Patient' ) ); ?></p>
              <p class="wl-hero-testimonial-location"><?php echo esc_html( dp_field( 'wl_hero_testimonial_location', 'Denton' ) ); ?></p>
            </div>
            <div class="star-row">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Image Grid -->
      <div class="hero-visual">
        <div class="wl-hero-images">
          <?php
          $hero_images = array(
            array( 'field' => 'wl_hero_image_1', 'alt' => 'Weight loss transformation', 'class' => 'wl-hero-image-1' ),
            array( 'field' => 'wl_hero_image_2', 'alt' => 'Fitness and health', 'class' => 'wl-hero-image-2' ),
            array( 'field' => 'wl_hero_image_3', 'alt' => 'Active lifestyle', 'class' => 'wl-hero-image-3' ),
          );
          foreach ( $hero_images as $img ) :
            $image_id = dp_field( $img['field'] );
            $image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'large' ) : '';
          ?>
            <?php if ( $image_url ) : ?>
              <div class="wl-hero-image <?php echo esc_attr( $img['class'] ); ?>">
                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     STATS BAR
     ============================================ -->
<section class="wl-stats-section">
  <div class="wl-stats-shimmer"></div>
  <div class="wl-stats-dots"></div>
  <div class="section-container">
    <div class="wl-stats-grid">

      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="wl-stat-content">
          <p class="wl-stat-number"><?php echo esc_html( dp_field( 'wl_stat_1_number', '4.7★' ) ); ?></p>
          <p class="wl-stat-label"><?php echo esc_html( dp_field( 'wl_stat_1_label', 'Google Rating' ) ); ?></p>
        </div>
      </div>

      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="wl-stat-content">
          <p class="wl-stat-number"><?php echo esc_html( dp_field( 'wl_stat_2_number', '300+' ) ); ?></p>
          <p class="wl-stat-label"><?php echo esc_html( dp_field( 'wl_stat_2_label', 'Patients Helped' ) ); ?></p>
        </div>
      </div>

      <div class="wl-stat-item desktop-only">
        <div class="wl-stat-icon">
          <i class="fas fa-shield-halved"></i>
        </div>
        <div class="wl-stat-content">
          <p class="wl-stat-number"><?php echo esc_html( dp_field( 'wl_stat_3_number', 'GPhC' ) ); ?></p>
          <p class="wl-stat-label"><?php echo esc_html( dp_field( 'wl_stat_3_label', 'Registered' ) ); ?></p>
        </div>
      </div>

      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-award"></i>
        </div>
        <div class="wl-stat-content">
          <p class="wl-stat-number"><?php echo esc_html( dp_field( 'wl_stat_4_number', '30+' ) ); ?></p>
          <p class="wl-stat-label"><?php echo esc_html( dp_field( 'wl_stat_4_label', 'Years Experience' ) ); ?></p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     RESULTS SHOWCASE
     ============================================ -->
<section class="wl-results-section">
  <div class="section-container">
    <div class="wl-results-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'wl_results_badge', 'REAL RESULTS' ) ); ?></span>
      </div>
      <h2 class="wl-results-title"><?php echo esc_html( dp_field( 'wl_results_title', 'Real Mounjaro & Wegovy results in Denton' ) ); ?></h2>
      <p class="wl-results-description"><?php echo esc_html( dp_field( 'wl_results_description', 'Denton patients using Mounjaro or Wegovy lose an average of 10-15% of their body weight in 12 months with our personalised programmes.' ) ); ?></p>
    </div>

    <div class="wl-results-grid">
      <!-- Card 1: Satisfaction -->
      <div class="wl-results-card">
        <div class="star-row wl-results-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="wl-results-number gradient-text"><?php echo esc_html( dp_field( 'wl_results_card1_number', '4.7/5' ) ); ?></p>
        <p class="wl-results-label"><?php echo esc_html( dp_field( 'wl_results_card1_label', 'Patient satisfaction' ) ); ?></p>
        <p class="wl-results-sublabel"><?php echo esc_html( dp_field( 'wl_results_card1_sublabel', 'Based on verified reviews' ) ); ?></p>
      </div>

      <!-- Card 2: Featured Weight Loss -->
      <div class="wl-results-card wl-results-card-featured">
        <div class="wl-results-featured-badge"><?php echo esc_html( dp_field( 'wl_results_featured_badge', 'Most Important' ) ); ?></div>
        <div class="wl-results-featured-bg-dots"></div>
        <div class="wl-results-featured-circle"></div>
        <div class="wl-results-featured-square"></div>
        <div class="wl-results-featured-icon"><i class="fas fa-chart-line"></i></div>
        <p class="wl-results-featured-number"><?php echo esc_html( dp_field( 'wl_results_featured_number', '10-15%' ) ); ?></p>
        <p class="wl-results-featured-label"><?php echo esc_html( dp_field( 'wl_results_featured_label', 'Average weight loss' ) ); ?></p>
        <p class="wl-results-featured-sublabel"><?php echo esc_html( dp_field( 'wl_results_featured_sublabel', 'In 12 months' ) ); ?></p>
      </div>

      <!-- Card 3: Denton Residents -->
      <div class="wl-results-card">
        <div class="wl-results-icon">
          <i class="fas fa-user-group"></i>
        </div>
        <p class="wl-results-number gradient-text"><?php echo esc_html( dp_field( 'wl_results_card3_number', '300+' ) ); ?></p>
        <p class="wl-results-label"><?php echo esc_html( dp_field( 'wl_results_card3_label', 'Denton residents' ) ); ?></p>
        <p class="wl-results-sublabel"><?php echo esc_html( dp_field( 'wl_results_card3_sublabel', 'Successfully helped' ) ); ?></p>
      </div>
    </div>

    <p class="wl-results-disclaimer">
      <i class="fas fa-info-circle"></i>
      <?php echo esc_html( dp_field( 'wl_results_disclaimer', 'Results vary by individual. Weight loss depends on adherence to treatment, lifestyle changes, and individual metabolism.' ) ); ?>
    </p>
  </div>
</section>

<!-- ============================================
     FEATURES SECTION
     ============================================ -->
<section class="wl-features-section">
  <div class="section-container">
    <div class="wl-features-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'wl_features_badge', 'Why Choose Us' ) ); ?></span>
      </div>
      <h2 class="wl-features-title"><?php echo esc_html( dp_field( 'wl_features_title', 'The Denton Pharmacy Difference' ) ); ?></h2>
      <div class="wl-features-divider"></div>
      <p class="wl-features-description"><?php echo esc_html( dp_field( 'wl_features_description', 'Real face-to-face support. Expert guidance. Proven results.' ) ); ?></p>
    </div>

    <div class="wl-features-grid">
      <!-- Left: Image -->
      <div class="wl-features-image-wrapper">
        <div class="wl-features-image-bg-circle"></div>
        <div class="wl-features-image-card">
          <?php
          $features_image_id = dp_field( 'wl_features_image' );
          $features_image_url = $features_image_id ? wp_get_attachment_image_url( $features_image_id, 'large' ) : '';
          if ( $features_image_url ) :
          ?>
            <img src="<?php echo esc_url( $features_image_url ); ?>" alt="<?php echo esc_attr( dp_field( 'wl_features_image_alt', 'Weight loss success patient' ) ); ?>" />
          <?php endif; ?>
        </div>
        <div class="wl-features-badge wl-features-badge-rating">
          <div class="star-row">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="wl-features-badge-text"><?php echo esc_html( dp_field( 'wl_features_rating_text', '4.7/5' ) ); ?></p>
        </div>
        <div class="wl-features-badge wl-features-badge-patients">
          <i class="fas fa-users"></i>
          <p class="wl-features-badge-text"><?php echo esc_html( dp_field( 'wl_features_reviews_text', '300+ Patients Helped' ) ); ?></p>
        </div>
      </div>

      <!-- Right: Features -->
      <div class="wl-features-content">
        <?php if ( have_rows( 'wl_features' ) ) : while ( have_rows( 'wl_features' ) ) : the_row(); ?>
          <div class="wl-features-card">
            <div class="wl-features-card-icon">
              <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <div class="wl-features-card-text">
              <h3 class="wl-features-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
              <p class="wl-features-card-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
            </div>
          </div>
        <?php endwhile; else : ?>
          <div class="wl-features-card">
            <div class="wl-features-card-icon"><i class="fas fa-check"></i></div>
            <div class="wl-features-card-text">
              <h3 class="wl-features-card-title">No GP referral needed</h3>
              <p class="wl-features-card-description">Book directly with our independent prescriber. Start your journey this week, not in months.</p>
            </div>
          </div>
          <div class="wl-features-card">
            <div class="wl-features-card-icon"><i class="fas fa-users"></i></div>
            <div class="wl-features-card-text">
              <h3 class="wl-features-card-title">Face-to-face care, every month</h3>
              <p class="wl-features-card-description">See the same pharmacist who knows your name. No video calls — real, local support.</p>
            </div>
          </div>
          <div class="wl-features-card">
            <div class="wl-features-card-icon"><i class="fas fa-clipboard-check"></i></div>
            <div class="wl-features-card-text">
              <h3 class="wl-features-card-title">Evidence-based approach</h3>
              <p class="wl-features-card-description">Clinically-proven treatment combined with tailored nutrition and lifestyle guidance.</p>
            </div>
          </div>
        <?php endif; ?>

        <div class="wl-features-actions">
          <a href="<?php echo esc_url( dp_field( 'wl_hero_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta">
            Start Your Journey <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i> Call Us
          </a>
        </div>

        <div class="wl-features-credentials">
          <div class="wl-features-credential"><i class="fas fa-shield-halved"></i><span>GPhC Registered</span></div>
          <div class="wl-features-credential"><i class="fas fa-user-doctor"></i><span>Independent Prescriber</span></div>
          <div class="wl-features-credential"><i class="fas fa-award"></i><span>30+ Years</span></div>
        </div>

        <div class="wl-features-social-proof-premium">
          <div class="wl-social-avatars">
            <?php
            $avatar_ids = array(
              dp_field( 'wl_social_avatar_1' ),
              dp_field( 'wl_social_avatar_2' ),
              dp_field( 'wl_social_avatar_3' ),
            );
            foreach ( $avatar_ids as $avatar_id ) :
              $avatar_url = $avatar_id ? wp_get_attachment_image_url( $avatar_id, 'thumbnail' ) : '';
              if ( $avatar_url ) :
            ?>
              <img src="<?php echo esc_url( $avatar_url ); ?>" alt="Happy patient" class="wl-social-img" />
            <?php endif; endforeach; ?>
            <div class="wl-social-count">
              <span><?php echo esc_html( dp_field( 'wl_social_count', '300+' ) ); ?></span>
            </div>
          </div>
          <div class="wl-social-content">
            <div class="wl-social-stars">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              <span class="wl-social-rating"><?php echo esc_html( dp_field( 'wl_social_rating', '4.9/5' ) ); ?></span>
            </div>
            <p class="wl-social-text">
              Join <strong><?php echo esc_html( dp_field( 'wl_social_join_text', '300+ Denton locals' ) ); ?></strong> on their journey
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     CTA BAR
     ============================================ -->
<section class="wl-cta-bar">
  <div class="wl-cta-bar-shimmer"></div>
  <div class="section-container">
    <div class="wl-cta-bar-content">
      <div class="wl-cta-bar-text">
        <h3 class="wl-cta-bar-title"><?php echo esc_html( dp_field( 'wl_cta_bar_title', 'Ready to transform your health?' ) ); ?></h3>
        <p class="wl-cta-bar-subtitle"><?php echo esc_html( dp_field( 'wl_cta_bar_subtitle', 'Book your consultation with Ahmed today' ) ); ?></p>
      </div>
      <a href="<?php echo esc_url( dp_field( 'wl_hero_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta wl-cta-bar-button">
        <?php echo esc_html( dp_field( 'wl_hero_cta_text', 'Book Consultation' ) ); ?>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- ============================================
     JOURNEY STEPS
     ============================================ -->
<section class="wl-journey-section">
  <div class="section-container">
    <div class="wl-journey-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'wl_journey_badge', 'HOW WE SUPPORT YOU' ) ); ?></span>
      </div>
      <h2 class="wl-journey-title"><?php echo esc_html( dp_field( 'wl_journey_title', 'Your path to lasting weight loss' ) ); ?></h2>
      <p class="wl-journey-description">
        <?php echo esc_html( dp_field( 'wl_journey_description', 'A structured, evidence-based approach with regular face-to-face support every step of the way.' ) ); ?>
      </p>
    </div>

    <?php
    $default_steps = array(
        array(
            'title'       => 'Initial consultation',
            'description' => 'Meet with our expert team at our Denton pharmacy for a comprehensive health assessment. We\'ll discuss your goals, medical history, and create a personalised plan that works for you.',
            'icon'        => 'fas fa-calendar-check',
            'meta'        => '30-45 minutes | Private consultation',
            'meta_icon'   => 'fas fa-clock',
            'badge'       => '',
            'badge_icon'  => '',
        ),
        array(
            'title'       => 'Begin Mounjaro or Wegovy treatment',
            'description' => 'If suitable, we\'ll prescribe Mounjaro, Wegovy, or other GLP-1 treatments. You\'ll receive clear instructions and guidance on what to expect from your Denton weight loss programme.',
            'icon'        => 'fas fa-pills',
            'meta'        => 'Same-day prescription available',
            'meta_icon'   => 'fas fa-bolt',
            'badge'       => 'Same Day',
            'badge_icon'  => 'fas fa-bolt',
        ),
        array(
            'title'       => 'Monthly check-ins',
            'description' => 'Pop into the pharmacy for face-to-face appointments. We\'ll monitor your progress, adjust medication if needed, and provide ongoing encouragement. You\'re never doing this alone.',
            'icon'        => 'fas fa-user-doctor',
            'meta'        => 'Monthly appointments',
            'meta_icon'   => 'fas fa-calendar',
            'badge'       => '',
            'badge_icon'  => 'fas fa-heart',
            'badge_class' => 'wl-journey-step-floating-badge-heart',
        ),
        array(
            'title'       => 'Reach your goals',
            'description' => 'With consistent support and proven medical treatments, most patients reach their target weight within 12 months. We\'ll help you maintain results long-term.',
            'icon'        => 'fas fa-trophy',
            'meta'        => 'Ongoing maintenance support',
            'meta_icon'   => 'fas fa-infinity',
            'badge'       => '',
            'badge_icon'  => 'fas fa-trophy',
            'badge_class' => 'wl-journey-step-floating-badge-trophy',
        ),
    );

    $has_steps = have_rows( 'wl_journey_steps' );
    $steps     = array();

    if ( $has_steps ) {
        $s = 0;
        while ( have_rows( 'wl_journey_steps' ) ) {
            the_row();
            $img_id  = get_sub_field( 'image' );
            $img_url = $img_id ? wp_get_attachment_image_url( $img_id, 'medium_large' ) : '';
            $steps[] = array(
                'title'       => get_sub_field( 'title' ) ?: $default_steps[ $s ]['title'],
                'description' => get_sub_field( 'description' ) ?: $default_steps[ $s ]['description'],
                'icon'        => get_sub_field( 'icon' ) ?: $default_steps[ $s ]['icon'],
                'meta'        => get_sub_field( 'meta' ) ?: $default_steps[ $s ]['meta'],
                'meta_icon'   => $default_steps[ $s ]['meta_icon'],
                'image'       => $img_url,
                'badge'       => isset( $default_steps[ $s ]['badge'] ) ? $default_steps[ $s ]['badge'] : '',
                'badge_icon'  => isset( $default_steps[ $s ]['badge_icon'] ) ? $default_steps[ $s ]['badge_icon'] : '',
                'badge_class' => isset( $default_steps[ $s ]['badge_class'] ) ? $default_steps[ $s ]['badge_class'] : '',
            );
            $s++;
        }
    } else {
        $steps = $default_steps;
    }
    ?>

    <?php foreach ( $steps as $i => $step ) :
      $direction = ( $i % 2 === 0 ) ? 'left' : 'right';
      $step_image = isset( $step['image'] ) ? $step['image'] : '';
    ?>
      <div class="wl-journey-step wl-journey-step-<?php echo $direction; ?>">
        <?php if ( $direction === 'right' && $step_image ) : ?>
          <div class="wl-journey-step-image">
            <img src="<?php echo esc_url( $step_image ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>" />
            <?php if ( ! empty( $step['badge'] ) ) : ?>
              <div class="wl-journey-step-floating-badge">
                <i class="<?php echo esc_attr( $step['badge_icon'] ); ?>"></i>
                <span><?php echo esc_html( $step['badge'] ); ?></span>
              </div>
            <?php elseif ( ! empty( $step['badge_icon'] ) && ! empty( $step['badge_class'] ) ) : ?>
              <div class="wl-journey-step-floating-badge <?php echo esc_attr( $step['badge_class'] ); ?>">
                <i class="<?php echo esc_attr( $step['badge_icon'] ); ?>"></i>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <div class="wl-journey-step-content">
          <div class="wl-journey-step-number"><?php echo esc_html( $i + 1 ); ?></div>
          <h3 class="wl-journey-step-title"><?php echo esc_html( $step['title'] ); ?></h3>
          <p class="wl-journey-step-description"><?php echo esc_html( $step['description'] ); ?></p>
          <div class="wl-journey-step-meta">
            <i class="<?php echo esc_attr( $step['meta_icon'] ); ?>"></i>
            <span><?php echo esc_html( $step['meta'] ); ?></span>
          </div>
        </div>

        <?php if ( $direction === 'left' && $step_image ) : ?>
          <div class="wl-journey-step-image">
            <img src="<?php echo esc_url( $step_image ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>" />
            <?php if ( ! empty( $step['badge'] ) ) : ?>
              <div class="wl-journey-step-floating-badge">
                <i class="<?php echo esc_attr( $step['badge_icon'] ); ?>"></i>
                <span><?php echo esc_html( $step['badge'] ); ?></span>
              </div>
            <?php elseif ( ! empty( $step['badge_icon'] ) && ! empty( $step['badge_class'] ) ) : ?>
              <div class="wl-journey-step-floating-badge <?php echo esc_attr( $step['badge_class'] ); ?>">
                <i class="<?php echo esc_attr( $step['badge_icon'] ); ?>"></i>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- ============================================
     CALCULATOR SECTION
     ============================================ -->
<section class="wl-calculator-section" id="calculator">
  <div class="section-container">
    <div class="wl-calculator-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'wl_calculator_badge', 'WEIGHT LOSS CALCULATOR' ) ); ?></span>
      </div>
      <h2 class="wl-calculator-title"><?php echo esc_html( dp_field( 'wl_calculator_title', 'See how much you could lose' ) ); ?></h2>
      <p class="wl-calculator-description"><?php echo esc_html( dp_field( 'wl_calculator_description', 'Enter your details below for an instant estimate based on clinical data' ) ); ?></p>
    </div>

    <div class="wl-calculator-grid">
      <?php
      $calc_image_id = dp_field( 'wl_calculator_image' );
      $calc_image_url = $calc_image_id ? wp_get_attachment_image_url( $calc_image_id, 'large' ) : 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=600&h=800&fit=crop';
      ?>
      <?php if ( $calc_image_url ) : ?>
      <div class="wl-calculator-image-wrapper">
        <div class="wl-calculator-image-card">
          <img src="<?php echo esc_url( $calc_image_url ); ?>" alt="Weight loss consultation" loading="lazy" />
        </div>
        <div class="wl-calculator-badge">
          <div class="wl-calculator-badge-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="wl-calculator-badge-number"><?php echo esc_html( dp_field( 'wl_calculator_badge_number', '15-20%' ) ); ?></div>
          <div class="wl-calculator-badge-text"><?php echo esc_html( dp_field( 'wl_calculator_badge_label', 'Avg. Body Weight Loss' ) ); ?></div>
        </div>
      </div>
      <?php endif; ?>

      <div class="wl-calculator-form-wrapper">
        <div class="wl-calculator-form-header">
          <i class="fas fa-calculator"></i>
          <h3 class="wl-calculator-form-title"><?php echo esc_html( dp_field( 'wl_calculator_form_title', 'Weight Loss Estimator' ) ); ?></h3>
        </div>

      <div class="wl-calculator-form">
        <div class="wl-calculator-input-group">
          <label class="wl-calculator-label"><?php echo esc_html( dp_field( 'wl_calculator_weight_label', 'Current Weight' ) ); ?></label>
          <div class="wl-calculator-input-wrapper">
            <input type="number" id="wl-weight-input" class="wl-calculator-input" placeholder="Enter weight" min="1" max="500" inputmode="decimal" />
            <div class="wl-calculator-toggle">
              <button type="button" class="wl-calculator-toggle-btn wl-calculator-toggle-active" data-unit="kg">kg</button>
              <button type="button" class="wl-calculator-toggle-btn" data-unit="st">st</button>
            </div>
          </div>
        </div>

        <div class="wl-calculator-input-group">
          <label class="wl-calculator-label"><?php echo esc_html( dp_field( 'wl_calculator_height_label', 'Height' ) ); ?></label>
          <div class="wl-calculator-input-wrapper">
            <input type="number" id="wl-height-input" class="wl-calculator-input" placeholder="Enter height" min="1" max="300" inputmode="decimal" />
            <div class="wl-calculator-toggle">
              <button type="button" class="wl-calculator-toggle-btn wl-calculator-toggle-active" data-unit="cm">cm</button>
              <button type="button" class="wl-calculator-toggle-btn" data-unit="ft">ft/in</button>
            </div>
          </div>
        </div>

        <button type="button" class="cta-button primary-cta wl-calculator-submit" id="wl-calculator-submit">
          <?php echo esc_html( dp_field( 'wl_calculator_submit_text', 'Calculate Potential Results' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>

      <!-- Results -->
      <div class="wl-calculator-results" id="calculatorResults">
        <div class="wl-calculator-results-header">
          <i class="fas fa-chart-line"></i>
          <h4 class="wl-calculator-results-title"><?php echo esc_html( dp_field( 'wl_calculator_results_title', 'Your Estimated Results' ) ); ?></h4>
        </div>

        <div class="wl-calculator-bmi-card">
          <div class="wl-calculator-bmi-circle">
            <span class="wl-calculator-bmi-number" id="wl-bmi-number">--</span>
          </div>
          <div class="wl-calculator-bmi-text">
            <p class="wl-calculator-bmi-label"><?php echo esc_html( dp_field( 'wl_calculator_bmi_label', 'Current BMI' ) ); ?></p>
            <p class="wl-calculator-bmi-category" id="wl-bmi-category"><?php echo esc_html( dp_field( 'wl_calculator_bmi_placeholder', 'Enter your details' ) ); ?></p>
          </div>
        </div>

        <div class="wl-calculator-projection-card">
          <h3 class="wl-calculator-projection-title"><?php echo esc_html( dp_field( 'wl_calculator_projection_title', 'Projected 12-Month Result' ) ); ?></h3>
          <p class="wl-calculator-projection-range" id="wl-projection-range">--</p>
          <p class="wl-calculator-projection-subtitle" id="wl-projection-detail"><?php echo esc_html( dp_field( 'wl_calculator_projection_detail', 'Based on 10-15% weight loss' ) ); ?></p>
        </div>

        <!-- Timeline -->
        <div class="wl-calculator-timeline">
          <div class="wl-calculator-timeline-item">
            <div class="wl-calculator-timeline-bar">
              <div class="wl-calculator-timeline-fill" style="width: 25%;"></div>
            </div>
            <p class="wl-calculator-timeline-label"><?php echo esc_html( dp_field( 'wl_calculator_timeline_1', 'Month 3' ) ); ?></p>
          </div>
          <div class="wl-calculator-timeline-item">
            <div class="wl-calculator-timeline-bar">
              <div class="wl-calculator-timeline-fill" style="width: 50%;"></div>
            </div>
            <p class="wl-calculator-timeline-label"><?php echo esc_html( dp_field( 'wl_calculator_timeline_2', 'Month 6' ) ); ?></p>
          </div>
          <div class="wl-calculator-timeline-item">
            <div class="wl-calculator-timeline-bar">
              <div class="wl-calculator-timeline-fill wl-calculator-timeline-fill-full" style="width: 100%;"></div>
            </div>
            <p class="wl-calculator-timeline-label"><?php echo esc_html( dp_field( 'wl_calculator_timeline_3', 'Month 12' ) ); ?></p>
          </div>
        </div>

        <p class="wl-calculator-disclaimer">
          <i class="fas fa-info-circle"></i>
          <?php echo esc_html( dp_field( 'wl_calculator_disclaimer', 'Results are estimates based on clinical trial data. Individual results may vary.' ) ); ?>
        </p>

        <a href="<?php echo esc_url( dp_booking_url() ); ?>" class="cta-button primary-cta wl-calculator-cta">
          <?php echo esc_html( dp_field( 'wl_calculator_cta_text', 'Book Your Consultation' ) ); ?> <i class="fas fa-arrow-right"></i>
        </a>
      </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     PHARMACIST SECTION
     ============================================ -->
<?php get_template_part( 'template-parts/section', 'pharmacist' ); ?>

<!-- ============================================
     FAQ SECTION
     ============================================ -->
<section class="wl-faq-section">
  <div class="section-container">
    <div class="wl-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'wl_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="wl-faq-title"><?php echo esc_html( dp_field( 'wl_faq_title', 'Your questions answered' ) ); ?></h2>
      <div class="wl-faq-divider"></div>
      <p class="wl-faq-description"><?php echo esc_html( dp_field( 'wl_faq_description', 'Get answers to the most common weight loss questions' ) ); ?></p>
    </div>

    <div class="wl-faq-list">
      <?php if ( have_rows( 'wl_faqs' ) ) : $faq_num = 0; while ( have_rows( 'wl_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number"><?php echo esc_html( $faq_num ); ?></span>
            <span class="wl-faq-question-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">1</span>
            <span class="wl-faq-question-text">How much weight can I expect to lose?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Clinical trials show patients typically lose 15-20% of their body weight over 12 months with GLP-1 treatments like Mounjaro and Wegovy. For example, someone weighing 100kg could lose 15-20kg. Results vary based on adherence to treatment, lifestyle changes, and individual metabolism. Our face-to-face support helps maximise your results.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">2</span>
            <span class="wl-faq-question-text">Do I need a GP referral?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>No, you don't need a GP referral. Ahmed is an Independent Prescriber, which means he can assess your suitability and prescribe weight loss medication directly. You can book your consultation today and start your journey this week, not in months.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">3</span>
            <span class="wl-faq-question-text">What's the difference between Mounjaro and Wegovy?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Both are GLP-1 treatments, but Mounjaro (tirzepatide) also activates GIP receptors, making it a dual-action medication. Clinical trials show Mounjaro may lead to slightly greater weight loss (up to 22%) compared to Wegovy (semaglutide) at 15-17%. During your consultation, we'll discuss which treatment is best suited to your needs and medical history.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">4</span>
            <span class="wl-faq-question-text">Are there any side effects?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Common side effects include nausea, vomiting, diarrhoea, and constipation, especially when starting treatment or increasing doses. These typically improve over time. We start with a low dose and gradually increase it to minimise side effects. During your monthly check-ins, we'll monitor how you're feeling and adjust your treatment if needed.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">5</span>
            <span class="wl-faq-question-text">How much does treatment cost?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Treatment starts from &pound;125 per month, which includes your medication, monthly face-to-face consultations, and ongoing support. The exact cost depends on which medication you're prescribed and the dosage. We'll discuss pricing transparently during your initial consultation &mdash; no hidden fees, no surprises.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">6</span>
            <span class="wl-faq-question-text">How long does treatment take?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Most patients see significant results within 3-6 months and reach their target weight within 12 months. However, weight loss is a journey, not a sprint. We'll work with you to create a sustainable plan that fits your lifestyle. Many patients continue treatment for 12-18 months to achieve and maintain their goals.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     TESTIMONIALS SECTION
     ============================================ -->
<section class="wl-testimonials-section">
  <div class="section-container">
    <div class="wl-testimonials-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'wl_testimonials_badge', 'SUCCESS STORIES' ) ); ?></span>
      </div>
      <h2 class="wl-testimonials-title"><?php echo esc_html( dp_field( 'wl_testimonials_title', 'Real Denton success stories' ) ); ?></h2>
      <div class="wl-testimonials-divider"></div>
      <p class="wl-testimonials-description"><?php echo esc_html( dp_field( 'wl_testimonials_description', 'See how our patients have transformed their lives with medical weight loss' ) ); ?></p>
    </div>

    <div class="wl-testimonials-grid">
      <?php if ( have_rows( 'wl_testimonials' ) ) : while ( have_rows( 'wl_testimonials' ) ) : the_row(); ?>
        <div class="wl-testimonial-card">
          <div class="wl-testimonial-circle">
            <span class="wl-testimonial-circle-number"><?php echo esc_html( get_sub_field( 'weight_lost_short' ) ); ?></span>
          </div>
          <h3 class="wl-testimonial-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="wl-testimonial-quote"><?php echo esc_html( get_sub_field( 'quote' ) ); ?></p>
          <div class="star-row wl-testimonial-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="wl-testimonial-author"><?php echo esc_html( get_sub_field( 'author' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="wl-testimonial-card">
          <div class="wl-testimonial-circle"><span class="wl-testimonial-circle-number">6st</span></div>
          <h3 class="wl-testimonial-title">6 Stone Lost</h3>
          <p class="wl-testimonial-quote">"Thank you so much for your weight loss service. I've tried everything over the years. With your help, I've finally managed to lose 6 stones!!"</p>
          <div class="star-row wl-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="wl-testimonial-author">Denton Patient</p>
        </div>
        <div class="wl-testimonial-card">
          <div class="wl-testimonial-circle"><span class="wl-testimonial-circle-number">4st</span></div>
          <h3 class="wl-testimonial-title">4 Stone Lost</h3>
          <p class="wl-testimonial-quote">"Ahmed really takes the time to understand your goals. The monthly check-ins keep me on track and I've never felt better."</p>
          <div class="star-row wl-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="wl-testimonial-author">Denton Patient</p>
        </div>
        <div class="wl-testimonial-card">
          <div class="wl-testimonial-circle"><span class="wl-testimonial-circle-number">3st</span></div>
          <h3 class="wl-testimonial-title">3 Stone Lost</h3>
          <p class="wl-testimonial-quote">"I cannot thank you enough for helping me lose weight. Not only do I feel and look great, my hip and knee pain is SO much better now I weigh less."</p>
          <div class="star-row wl-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="wl-testimonial-author">Manchester Patient</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     FINAL CTA SECTION
     ============================================ -->
<section class="wl-final-cta-section">
  <div class="wl-final-cta-glow-1"></div>
  <div class="wl-final-cta-glow-2"></div>
  <div class="wl-final-cta-dots"></div>

  <div class="section-container">
    <div class="wl-final-cta-content">
      <div class="wl-final-cta-badges">
        <div class="wl-final-cta-badge"><i class="fas fa-shield-halved"></i><span>GPhC Registered</span></div>
        <div class="wl-final-cta-badge"><i class="fas fa-user-doctor"></i><span>Independent Prescriber</span></div>
        <div class="wl-final-cta-badge"><i class="fas fa-users"></i><span><?php echo esc_html( dp_field( 'wl_results_card3_number', '500+' ) ); ?> Patients Helped</span></div>
      </div>

      <h2 class="wl-final-cta-title"><?php echo esc_html( dp_field( 'wl_final_cta_title', 'Ready to start your weight loss journey?' ) ); ?></h2>
      <p class="wl-final-cta-description"><?php echo esc_html( dp_field( 'wl_final_cta_description', 'Join 500+ Denton residents who\'ve transformed their lives with medical weight loss. Book your consultation with Ahmed today.' ) ); ?></p>

      <div class="wl-final-cta-actions">
        <a href="<?php echo esc_url( dp_booking_url() ); ?>" class="cta-button primary-cta wl-final-cta-button-white">
          Book Your Consultation <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta wl-final-cta-button-outlined">
          <i class="fas fa-phone"></i> <?php echo esc_html( 'Call ' . dp_phone() ); ?>
        </a>
      </div>

      <div class="wl-final-cta-checks">
        <div class="wl-final-cta-check"><i class="fas fa-check"></i><span>Expert guidance</span></div>
        <div class="wl-final-cta-check"><i class="fas fa-check"></i><span>No obligation</span></div>
        <div class="wl-final-cta-check"><i class="fas fa-check"></i><span>Same-day appointments</span></div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
