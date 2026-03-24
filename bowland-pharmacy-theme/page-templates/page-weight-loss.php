<?php
/**
 * Template Name: Weight Loss
 * @package Bowland_Pharmacy
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
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'wl_hero_badge', 'MEDICAL WEIGHT LOSS' ) ); ?></span>
        </div>

        <h1 class="wl-hero-title">
          <span class="gradient-text"><?php echo esc_html( bp_field( 'wl_hero_title_line_1', 'Medical Weight Loss' ) ); ?></span>
          <?php echo esc_html( bp_field( 'wl_hero_title_line_2', 'in Wythenshawe' ) ); ?>
          <?php $line3 = bp_field( 'wl_hero_title_line_3', '' ); if ( $line3 ) : ?>
          <br><span class="gradient-text"><?php echo esc_html( $line3 ); ?></span>
          <?php endif; ?>
        </h1>

        <p class="wl-hero-description">
          <?php echo esc_html( bp_field( 'wl_hero_description', 'Prescription Mounjaro and Wegovy (GLP-1 treatments) with expert guidance and face-to-face support right here in Wythenshawe. No remote consultations — real care from someone who knows your name.' ) ); ?>
        </p>

        <div class="wl-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'wl_hero_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( bp_field( 'wl_hero_cta_text', 'Book Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html( 'Call ' . bp_phone() ); ?>
          </a>
        </div>

        <!-- Testimonial Card -->
        <div class="wl-hero-testimonial">
          <div class="wl-hero-testimonial-quote-icon">
            <i class="fas fa-quote-left"></i>
          </div>
          <p class="wl-hero-testimonial-quote">
            <?php echo esc_html( bp_field( 'wl_hero_testimonial_quote', '"I travel 40 miles every month to see Ahmed for my weight loss consultations—he\'s that good. Would never go anywhere else."' ) ); ?>
          </p>
          <div class="wl-hero-testimonial-footer">
            <div class="wl-hero-testimonial-author">
              <p class="wl-hero-testimonial-name"><?php echo esc_html( bp_field( 'wl_hero_testimonial_name', 'Wythenshawe Patient' ) ); ?></p>
              <p class="wl-hero-testimonial-location"><?php echo esc_html( bp_field( 'wl_hero_testimonial_location', 'Wythenshawe' ) ); ?></p>
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
            $image_id = bp_field( $img['field'] );
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
     STATS BAR (Glassmorphic — matches home page)
     ============================================ -->
<section class="wl-stats-section wl-reveal">
  <div class="section-container">
    <div class="wl-stats-bar">

      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="wl-stat-content">
          <span class="wl-stat-number"><?php echo esc_html( bp_field( 'wl_stat_1_number', '4.7' ) ); ?></span>
          <span class="wl-stat-label"><?php echo esc_html( bp_field( 'wl_stat_1_label', 'Google Rating' ) ); ?></span>
        </div>
      </div>

      <div class="wl-stat-divider"></div>

      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="wl-stat-content">
          <span class="wl-stat-number"><?php echo esc_html( bp_field( 'wl_stat_2_number', '300+' ) ); ?></span>
          <span class="wl-stat-label"><?php echo esc_html( bp_field( 'wl_stat_2_label', 'Patients Helped' ) ); ?></span>
        </div>
      </div>

      <div class="wl-stat-divider"></div>

      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-shield-halved"></i>
        </div>
        <div class="wl-stat-content">
          <span class="wl-stat-number"><?php echo esc_html( bp_field( 'wl_stat_3_number', 'GPhC' ) ); ?></span>
          <span class="wl-stat-label"><?php echo esc_html( bp_field( 'wl_stat_3_label', 'Fully Registered' ) ); ?></span>
        </div>
      </div>

      <div class="wl-stat-divider"></div>

      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-award"></i>
        </div>
        <div class="wl-stat-content">
          <span class="wl-stat-number"><?php echo esc_html( bp_field( 'wl_stat_4_number', '30+' ) ); ?></span>
          <span class="wl-stat-label"><?php echo esc_html( bp_field( 'wl_stat_4_label', 'Years Experience' ) ); ?></span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     RESULTS SHOWCASE
     ============================================ -->
<section class="wl-results-section wl-reveal">
  <div class="section-container">
    <div class="wl-results-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'wl_results_badge', 'REAL RESULTS' ) ); ?></span>
      </div>
      <h2 class="wl-results-title"><?php echo esc_html( bp_field( 'wl_results_title', 'Real Mounjaro & Wegovy results in Wythenshawe' ) ); ?></h2>
      <p class="wl-results-description"><?php echo esc_html( bp_field( 'wl_results_description', 'Wythenshawe patients using Mounjaro or Wegovy lose an average of 10-15% of their body weight in 12 months with our personalised programmes.' ) ); ?></p>
    </div>

    <div class="wl-results-grid">
      <!-- Card 1: Satisfaction -->
      <div class="wl-results-card">
        <div class="star-row wl-results-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="wl-results-number gradient-text"><?php echo esc_html( bp_field( 'wl_results_card1_number', '4.7/5' ) ); ?></p>
        <p class="wl-results-label"><?php echo esc_html( bp_field( 'wl_results_card1_label', 'Patient satisfaction' ) ); ?></p>
        <p class="wl-results-sublabel"><?php echo esc_html( bp_field( 'wl_results_card1_sublabel', 'Based on verified reviews' ) ); ?></p>
      </div>

      <!-- Card 2: Featured Weight Loss -->
      <div class="wl-results-card wl-results-card-featured">
        <div class="wl-results-featured-badge"><?php echo esc_html( bp_field( 'wl_results_featured_badge', 'Most Important' ) ); ?></div>
        <div class="wl-results-featured-bg-dots"></div>
        <div class="wl-results-featured-circle"></div>
        <div class="wl-results-featured-square"></div>
        <div class="wl-results-featured-icon"><i class="fas fa-chart-line"></i></div>
        <p class="wl-results-featured-number"><?php echo esc_html( bp_field( 'wl_results_featured_number', '10-15%' ) ); ?></p>
        <p class="wl-results-featured-label"><?php echo esc_html( bp_field( 'wl_results_featured_label', 'Average weight loss' ) ); ?></p>
        <p class="wl-results-featured-sublabel"><?php echo esc_html( bp_field( 'wl_results_featured_sublabel', 'In 12 months' ) ); ?></p>
      </div>

      <!-- Card 3: Wythenshawe Residents -->
      <div class="wl-results-card">
        <div class="wl-results-icon">
          <i class="fas fa-user-group"></i>
        </div>
        <p class="wl-results-number gradient-text"><?php echo esc_html( bp_field( 'wl_results_card3_number', '300+' ) ); ?></p>
        <p class="wl-results-label"><?php echo esc_html( bp_field( 'wl_results_card3_label', 'Wythenshawe residents' ) ); ?></p>
        <p class="wl-results-sublabel"><?php echo esc_html( bp_field( 'wl_results_card3_sublabel', 'Successfully helped' ) ); ?></p>
      </div>
    </div>

    <p class="wl-results-disclaimer">
      <i class="fas fa-info-circle"></i>
      <?php echo esc_html( bp_field( 'wl_results_disclaimer', 'Results vary by individual. Weight loss depends on adherence to treatment, lifestyle changes, and individual metabolism.' ) ); ?>
    </p>
  </div>
</section>

<!-- ============================================
     FEATURES SECTION — Clean clinical layout
     ============================================ -->
<section class="wl-features-section wl-reveal">
  <div class="section-container">
    <div class="wl-features-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'wl_features_badge', 'Why Choose Us' ) ); ?></span>
      </div>
      <h2 class="wl-features-title"><?php echo esc_html( bp_field( 'wl_features_title', 'The Bowland Pharmacy Difference' ) ); ?></h2>
      <p class="wl-features-description"><?php echo esc_html( bp_field( 'wl_features_description', 'Real face-to-face support. Expert guidance. Proven results.' ) ); ?></p>
    </div>

    <!-- Feature cards — full-width grid -->
    <div class="wl-features-grid">
      <?php if ( have_rows( 'wl_features' ) ) : while ( have_rows( 'wl_features' ) ) : the_row(); ?>
        <div class="wl-features-card">
          <div class="wl-features-card-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h3 class="wl-features-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="wl-features-card-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="wl-features-card">
          <svg class="wl-features-card-svg" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
          <h3 class="wl-features-card-title">No GP referral needed</h3>
          <p class="wl-features-card-description">Book directly with our independent prescriber. Start your journey this week, not in months.</p>
        </div>
        <div class="wl-features-card">
          <svg class="wl-features-card-svg" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
          <h3 class="wl-features-card-title">Face-to-face care, every month</h3>
          <p class="wl-features-card-description">See the same pharmacist who knows your name. No video calls — real, local support.</p>
        </div>
        <div class="wl-features-card">
          <svg class="wl-features-card-svg" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
          <h3 class="wl-features-card-title">Evidence-based approach</h3>
          <p class="wl-features-card-description">Clinically-proven treatment combined with tailored nutrition and lifestyle guidance.</p>
        </div>
      <?php endif; ?>
    </div>

    <!-- Bottom: Rating + CTAs + credentials -->
    <div class="wl-features-bottom">
      <?php
      $wl_rating       = bp_option( 'google_rating', '4.7' );
      $wl_review_count = bp_option( 'google_review_count', '60+' );
      $wl_location     = bp_option( 'pharmacy_location_label', 'Wythenshawe' );
      $wl_reviews_url  = bp_option( 'google_reviews_url', '#' );
      ?>
      <div class="wl-features-rating-strip">
        <svg class="wl-google-icon" width="20" height="20" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.27-4.74 3.27-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
        <span class="wl-features-rating-score"><?php echo esc_html( $wl_rating ); ?></span>
        <div class="wl-features-rating-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <span class="wl-features-rating-meta"><?php echo esc_html( $wl_review_count ); ?> reviews · <?php echo esc_html( $wl_location ); ?></span>
        <a href="<?php echo esc_url( $wl_reviews_url ); ?>" class="wl-features-rating-link" target="_blank" rel="noopener">View Reviews <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="wl-features-actions">
        <a href="<?php echo esc_url( bp_field( 'wl_hero_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta">
          Start Your Journey <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta">
          <i class="fas fa-phone"></i> Call Us
        </a>
      </div>

      <div class="wl-features-credentials">
        <div class="wl-features-credential"><i class="fas fa-shield-halved"></i><span>GPhC Registered</span></div>
        <div class="wl-features-credential"><i class="fas fa-user-doctor"></i><span>Independent Prescriber</span></div>
        <div class="wl-features-credential"><i class="fas fa-award"></i><span>30+ Years</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     CTA BAR
     ============================================ -->
<section class="wl-cta-bar wl-reveal">
  <div class="wl-cta-bar-shimmer"></div>
  <div class="section-container">
    <div class="wl-cta-bar-content">
      <div class="wl-cta-bar-text">
        <h3 class="wl-cta-bar-title"><?php echo esc_html( bp_field( 'wl_cta_bar_title', 'Ready to transform your health?' ) ); ?></h3>
        <p class="wl-cta-bar-subtitle"><?php echo esc_html( bp_field( 'wl_cta_bar_subtitle', 'Book your consultation with Ahmed today' ) ); ?></p>
      </div>
      <a href="<?php echo esc_url( bp_field( 'wl_hero_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta wl-cta-bar-button">
        <?php echo esc_html( bp_field( 'wl_hero_cta_text', 'Book Consultation' ) ); ?>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- ============================================
     JOURNEY STEPS
     ============================================ -->
<section class="wl-journey-section wl-reveal">
  <div class="section-container">
    <div class="wl-journey-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'wl_journey_badge', 'HOW WE SUPPORT YOU' ) ); ?></span>
      </div>
      <h2 class="wl-journey-title"><?php echo esc_html( bp_field( 'wl_journey_title', 'Your path to lasting weight loss' ) ); ?></h2>
      <p class="wl-journey-description">
        <?php echo esc_html( bp_field( 'wl_journey_description', 'A structured, evidence-based approach with regular face-to-face support every step of the way.' ) ); ?>
      </p>
    </div>

    <?php
    $default_steps = array(
        array(
            'title'       => 'Initial consultation',
            'description' => 'Meet with our expert team at our Wythenshawe pharmacy for a comprehensive health assessment. We\'ll discuss your goals, medical history, and create a personalised plan that works for you.',
            'icon'        => 'fas fa-calendar-check',
            'meta'        => '30-45 minutes | Private consultation',
            'meta_icon'   => 'fas fa-clock',
            'badge'       => '',
            'badge_icon'  => '',
        ),
        array(
            'title'       => 'Begin Mounjaro or Wegovy treatment',
            'description' => 'If suitable, we\'ll prescribe Mounjaro, Wegovy, or other GLP-1 treatments. You\'ll receive clear instructions and guidance on what to expect from your Wythenshawe weight loss programme.',
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
<section class="wl-calculator-section wl-reveal" id="calculator">
  <div class="section-container">
    <?php echo do_shortcode( '[mounjaro_calculator]' ); ?>
  </div>
</section>

<!-- ============================================
     PHARMACIST SECTION
     ============================================ -->
<?php get_template_part( 'template-parts/section', 'pharmacist' ); ?>

<!-- ============================================
     FAQ SECTION
     ============================================ -->
<section class="wl-faq-section wl-reveal">
  <div class="section-container">
    <div class="wl-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'wl_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="wl-faq-title"><?php echo esc_html( bp_field( 'wl_faq_title', 'Your questions answered' ) ); ?></h2>
      <div class="wl-faq-divider"></div>
      <p class="wl-faq-description"><?php echo esc_html( bp_field( 'wl_faq_description', 'Get answers to the most common weight loss questions' ) ); ?></p>
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
     TESTIMONIALS SECTION (Premium editorial layout)
     ============================================ -->
<section class="wl-testimonials-section wl-reveal">
  <div class="section-container">

    <!-- Section header -->
    <div class="wl-testimonials-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'wl_testimonials_badge', 'Real Transformations' ) ); ?></span>
      </div>
      <h2 class="wl-testimonials-title">
        <?php echo esc_html( bp_field( 'wl_testimonials_title_start', 'Real Results.' ) ); ?>
        <span class="gradient-text"><?php echo esc_html( bp_field( 'wl_testimonials_title_highlight', 'Lasting Health.' ) ); ?></span>
      </h2>
      <p class="wl-testimonials-description"><?php echo esc_html( bp_field( 'wl_testimonials_description', 'See how our patients across Wythenshawe have transformed their health with personalised weight loss care.' ) ); ?></p>
      <div class="wl-testimonials-disclaimer">
        <i class="fas fa-info-circle"></i>
        <p><strong>Transparency Note:</strong> <?php echo esc_html( bp_field( 'wl_testimonials_disclaimer', 'The results below are from real Bowland Pharmacy patients. Individual results may vary.' ) ); ?></p>
      </div>
    </div>

    <?php
    // --- Allowed HTML for highlight spans ---
    $wl_allowed_highlight = array( 'span' => array( 'class' => array() ) );

    // --- Default testimonials ---
    $wl_default_testimonials = array(
        array(
            'name'      => 'Sarah M.',
            'service'   => 'Weight Loss',
            'weight'    => '6st lost',
            'quote'     => 'Thank you so much for your weight loss service. I\'ve tried <span class="wl-testimonial-highlight">everything over the years</span>. With your help, I\'ve finally managed to <span class="wl-testimonial-highlight">lose 6 stones</span>!!',
            'checklist' => array( '6 Stone Weight Loss', 'Face-to-Face Support' ),
        ),
        array(
            'name'      => 'James K.',
            'service'   => 'Mounjaro',
            'weight'    => '4st lost',
            'quote'     => 'Ahmed really takes the time to <span class="wl-testimonial-highlight">understand your goals</span>. The monthly check-ins keep me on track and I\'ve <span class="wl-testimonial-highlight">never felt better</span>.',
            'checklist' => array( 'Monthly Check-ins', 'Personalised Plan' ),
        ),
        array(
            'name'      => 'Linda P.',
            'service'   => 'Wegovy',
            'weight'    => '3st lost',
            'quote'     => 'I cannot thank you enough for helping me lose weight. Not only do I <span class="wl-testimonial-highlight">feel and look great</span>, my hip and knee pain is <span class="wl-testimonial-highlight">SO much better</span> now I weigh less.',
            'checklist' => array( 'Improved Mobility', 'Ongoing Support' ),
        ),
    );

    // --- Build testimonials from ACF or defaults ---
    $wl_testimonials    = array();
    $wl_use_acf         = false;

    if ( function_exists( 'have_rows' ) && have_rows( 'wl_testimonials' ) ) {
        while ( have_rows( 'wl_testimonials' ) ) {
            the_row();
            $t_name   = get_sub_field( 'author' ) ?: 'Patient';
            $t_quote  = get_sub_field( 'quote' ) ?: '';
            $t_weight = get_sub_field( 'weight_lost_short' ) ?: '';
            $t_title  = get_sub_field( 'title' ) ?: 'Weight Loss';

            $words    = preg_split( '/\s+/', trim( $t_name ) );
            $initials = '';
            foreach ( $words as $w ) {
                if ( $w !== '' ) $initials .= strtoupper( mb_substr( $w, 0, 1 ) );
            }

            $wl_testimonials[] = array(
                'name'      => $t_name,
                'initials'  => $initials,
                'service'   => $t_title,
                'weight'    => $t_weight,
                'quote'     => $t_quote,
                'checklist' => array(),
            );
        }
        $wl_use_acf = true;
    }

    if ( empty( $wl_testimonials ) ) {
        foreach ( $wl_default_testimonials as $dt ) {
            $words    = preg_split( '/\s+/', trim( $dt['name'] ) );
            $initials = '';
            foreach ( $words as $w ) {
                if ( $w !== '' ) $initials .= strtoupper( mb_substr( $w, 0, 1 ) );
            }
            $dt['initials'] = $initials;
            $wl_testimonials[] = $dt;
        }
    }
    ?>

    <!-- Testimonials grid (12-col asymmetric) -->
    <div class="wl-testimonials-grid">

      <?php foreach ( $wl_testimonials as $t_index => $t ) :
          $is_large    = ( $t_index === 0 );
          $card_class  = $is_large ? 'wl-testimonial-card wl-testimonial-card-large' : 'wl-testimonial-card wl-testimonial-card-medium';
      ?>
        <div class="<?php echo esc_attr( $card_class ); ?>">

          <!-- Verified badge -->
          <div class="wl-testimonial-verified">
            <i class="fas fa-check-circle"></i>
            <span><?php echo $is_large ? 'Verified Patient' : 'Verified'; ?></span>
          </div>

          <div class="wl-testimonial-card-body">
            <?php if ( ! empty( $t['weight'] ) ) : ?>
              <div class="wl-testimonial-weight-pill">
                <i class="fas fa-arrow-trend-down"></i>
                <span><?php echo esc_html( $t['weight'] ); ?></span>
              </div>
            <?php endif; ?>

            <!-- Stars -->
            <div class="star-row <?php echo $is_large ? 'star-row-large' : ''; ?>">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>

            <!-- Quote -->
            <blockquote class="wl-testimonial-quote <?php echo $is_large ? 'wl-testimonial-quote-large' : ''; ?>">
              <?php if ( $wl_use_acf ) : ?>
                &ldquo;<?php echo esc_html( $t['quote'] ); ?>&rdquo;
              <?php else : ?>
                &ldquo;<?php echo wp_kses( $t['quote'], $wl_allowed_highlight ); ?>&rdquo;
              <?php endif; ?>
            </blockquote>

            <!-- Author row -->
            <div class="wl-testimonial-author-row">
              <div class="wl-testimonial-avatar <?php echo $is_large ? 'wl-testimonial-avatar-large' : ''; ?>">
                <?php echo esc_html( $t['initials'] ); ?>
              </div>
              <div class="wl-testimonial-author-info">
                <span class="wl-testimonial-service"><?php echo esc_html( $t['service'] ); ?></span>
                <h4 class="wl-testimonial-author-name"><?php echo esc_html( $t['name'] ); ?></h4>
                <p class="wl-testimonial-author-status">Verified Patient</p>
              </div>
            </div>

            <?php if ( ! empty( $t['checklist'] ) ) : ?>
              <div class="wl-testimonial-checklist">
                <?php foreach ( $t['checklist'] as $check ) : ?>
                  <div class="wl-testimonial-check">
                    <i class="fas fa-check"></i>
                    <span><?php echo esc_html( $check ); ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- CTA Card -->
      <div class="wl-testimonial-card wl-testimonial-card-cta">
        <div class="wl-testimonial-cta-glow"></div>
        <div class="wl-testimonial-cta-body">
          <div class="wl-testimonial-cta-content">
            <h3 class="wl-testimonial-cta-title"><?php echo esc_html( bp_field( 'wl_testimonials_cta_title', 'Trusted by 5,000+ Wythenshawe Patients' ) ); ?></h3>
            <p class="wl-testimonial-cta-text"><?php echo esc_html( bp_field( 'wl_testimonials_cta_text', 'No waiting lists. No hidden fees. Just expert, local weight loss support you can rely on.' ) ); ?></p>
          </div>
          <div class="wl-testimonial-cta-rating">
            <div class="wl-testimonial-cta-rating-card">
              <span class="wl-testimonial-cta-score"><?php echo esc_html( bp_option( 'google_rating', '4.7' ) ); ?></span>
              <div class="star-row star-row-small">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <span class="wl-testimonial-cta-label">Google Rating</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     FINAL CTA SECTION
     ============================================ -->
<section class="wl-final-cta-section wl-reveal">
  <div class="wl-final-cta-glow-1"></div>
  <div class="wl-final-cta-glow-2"></div>
  <div class="wl-final-cta-dots"></div>

  <div class="section-container">
    <div class="wl-final-cta-content">
      <div class="wl-final-cta-badges">
        <div class="wl-final-cta-badge"><i class="fas fa-shield-halved"></i><span>GPhC Registered</span></div>
        <div class="wl-final-cta-badge"><i class="fas fa-user-doctor"></i><span>Independent Prescriber</span></div>
        <div class="wl-final-cta-badge"><i class="fas fa-users"></i><span><?php echo esc_html( bp_field( 'wl_results_card3_number', '500+' ) ); ?> Patients Helped</span></div>
      </div>

      <h2 class="wl-final-cta-title"><?php echo esc_html( bp_field( 'wl_final_cta_title', 'Book your weight loss consultation' ) ); ?></h2>
      <p class="wl-final-cta-description"><?php echo esc_html( bp_field( 'wl_final_cta_description', 'Join 5,000+ patients who have transformed their lives with medical weight loss. Book your face-to-face consultation with Ahmed today.' ) ); ?></p>

      <div class="wl-final-cta-actions">
        <a href="<?php echo esc_url( bp_booking_url() ); ?>" class="cta-button primary-cta wl-final-cta-button-white">
          Book Your Consultation <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta wl-final-cta-button-outlined">
          <i class="fas fa-phone"></i> <?php echo esc_html( 'Call ' . bp_phone() ); ?>
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
