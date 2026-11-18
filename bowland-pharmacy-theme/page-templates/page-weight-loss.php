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
<?php
$wl_hero_mobile_bg_id = bp_field( 'wl_hero_mobile_image' );
if ( ! $wl_hero_mobile_bg_id ) {
    $wl_hero_mobile_bg_id = bp_field( 'wl_hero_image_1' );
}
$wl_hero_mobile_bg_url = $wl_hero_mobile_bg_id ? wp_get_attachment_image_url( $wl_hero_mobile_bg_id, 'large' ) : '';
$wl_hero_section_class = 'wl-hero-section' . ( $wl_hero_mobile_bg_url ? ' wl-hero-section--has-mobile-bg' : '' );
?>
<section class="<?php echo esc_attr( $wl_hero_section_class ); ?>">
  <div class="wl-hero-bg"></div>
  <div class="wl-hero-dots"></div>
  <div class="wl-hero-glow-1"></div>
  <div class="wl-hero-glow-2"></div>
  <?php if ( $wl_hero_mobile_bg_url ) : ?>
  <div class="wl-hero-mobile-media" aria-hidden="true">
    <img src="<?php echo esc_url( $wl_hero_mobile_bg_url ); ?>" alt="" />
    <div class="wl-hero-mobile-overlay"></div>
  </div>
  <?php endif; ?>

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
          <?php echo esc_html( bp_field( 'wl_hero_description', 'Prescription weight management with expert guidance and face-to-face support right here in Wythenshawe. No remote consultations — real care from someone who knows your name.' ) ); ?>
        </p>

        <div class="wl-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'wl_hero_cta_url', '' ) ?: '#weight-loss-calendar' ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( bp_field( 'wl_hero_cta_text', 'Book Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html( 'Call ' . bp_phone() ); ?>
          </a>
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

      <?php $wl_stat_1 = bp_field( 'wl_stat_1_number', bp_option( 'google_rating', '' ) ); ?>
      <?php if ( $wl_stat_1 ) : ?>
      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="wl-stat-content">
          <span class="wl-stat-number"><?php echo esc_html( $wl_stat_1 ); ?></span>
          <span class="wl-stat-label"><?php echo esc_html( bp_field( 'wl_stat_1_label', 'Google Rating' ) ); ?></span>
        </div>
      </div>

      <div class="wl-stat-divider"></div>
      <?php endif; ?>

      <div class="wl-stat-item">
        <div class="wl-stat-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="wl-stat-content">
          <span class="wl-stat-number"><?php echo esc_html( bp_field( 'wl_stat_2_number', 'Free' ) ); ?></span>
          <span class="wl-stat-label"><?php echo esc_html( bp_field( 'wl_stat_2_label', 'First consultation' ) ); ?></span>
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
          <span class="wl-stat-number"><?php echo esc_html( bp_field( 'wl_stat_4_number', '15+' ) ); ?></span>
          <span class="wl-stat-label"><?php echo esc_html( bp_field( 'wl_stat_4_label', 'Years Experience' ) ); ?></span>
        </div>
      </div>

    </div>
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
      <p class="wl-features-description"><?php echo esc_html( bp_field( 'wl_features_description', 'Real face-to-face support. Expert guidance. A plan that fits you.' ) ); ?></p>
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
          <h3 class="wl-features-card-title">A whole-person approach</h3>
          <p class="wl-features-card-description">Treatment, if it is suitable for you, alongside tailored nutrition and lifestyle guidance.</p>
        </div>
      <?php endif; ?>
    </div>

    <!-- Bottom: Rating + CTAs + credentials -->
    <div class="wl-features-bottom">
      <?php
      $wl_rating       = bp_option( 'google_rating', '' );
      $wl_review_count = bp_option( 'google_review_count', '200+' );
      $wl_location     = bp_option( 'pharmacy_location_label', 'Wythenshawe' );
      $wl_reviews_url  = bp_option( 'google_review_url', '#' );
      ?>
      <?php if ( $wl_rating ) : ?>
      <div class="wl-features-rating-strip">
        <svg class="wl-google-icon" width="20" height="20" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.27-4.74 3.27-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
        <span class="wl-features-rating-score"><?php echo esc_html( $wl_rating ); ?></span>
        <div class="wl-features-rating-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <span class="wl-features-rating-meta"><?php echo esc_html( $wl_review_count ); ?> <?php echo esc_html( bp_field( 'wl_features_reviews_label', 'reviews' ) ); ?> · <?php echo esc_html( $wl_location ); ?></span>
        <a href="<?php echo esc_url( $wl_reviews_url ); ?>" class="wl-features-rating-link" target="_blank" rel="noopener"><?php echo esc_html( bp_field( 'wl_features_view_reviews_text', 'View Reviews' ) ); ?> <i class="fas fa-arrow-right"></i></a>
      </div>
      <?php endif; ?>

      <div class="wl-features-actions">
        <a href="<?php echo esc_url( bp_field( 'wl_hero_cta_url', '' ) ?: '#weight-loss-calendar' ); ?>" class="cta-button primary-cta">
          <?php echo esc_html( bp_field( 'wl_features_cta_primary_text', 'Start Your Journey' ) ); ?> <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta">
          <i class="fas fa-phone"></i> <?php echo esc_html( bp_field( 'wl_features_cta_secondary_text', 'Call Us' ) ); ?>
        </a>
      </div>

      <div class="wl-features-credentials">
        <?php
        $wl_default_creds = array(
            array( 'cred_icon' => 'fa-shield-halved', 'cred_text' => 'GPhC Registered' ),
            array( 'cred_icon' => 'fa-user-doctor', 'cred_text' => 'Independent Prescriber' ),
            array( 'cred_icon' => 'fa-award', 'cred_text' => '15+ Years' ),
        );
        $wl_creds = array();
        if ( function_exists( 'have_rows' ) && have_rows( 'wl_features_credentials' ) ) {
            while ( have_rows( 'wl_features_credentials' ) ) {
                the_row();
                $wl_creds[] = array(
                    'cred_icon' => get_sub_field( 'cred_icon' ) ?: 'fa-shield-halved',
                    'cred_text' => get_sub_field( 'cred_text' ) ?: '',
                );
            }
        }
        if ( empty( $wl_creds ) ) { $wl_creds = $wl_default_creds; }
        foreach ( $wl_creds as $cred ) :
        ?>
          <div class="wl-features-credential"><i class="<?php echo esc_attr( bp_fa_class( $cred['cred_icon'] ) ); ?>"></i><span><?php echo esc_html( $cred['cred_text'] ); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SWITCHING PROVIDER SECTION
     ============================================ -->
<?php get_template_part( 'template-parts/section', 'switching' ); ?>

<!-- ============================================
     CTA BAR
     ============================================ -->
<section class="wl-cta-bar wl-reveal">
  <div class="wl-cta-bar-shimmer"></div>
  <div class="section-container">
    <div class="wl-cta-bar-content">
      <div class="wl-cta-bar-text">
        <h3 class="wl-cta-bar-title"><?php echo esc_html( bp_field( 'wl_cta_bar_title', 'Ready to transform your health?' ) ); ?></h3>
        <p class="wl-cta-bar-subtitle"><?php echo esc_html( bp_field( 'wl_cta_bar_subtitle', 'Book your in-store consultation today' ) ); ?></p>
      </div>
      <a href="<?php echo esc_url( bp_field( 'wl_hero_cta_url', '' ) ?: '#weight-loss-calendar' ); ?>" class="cta-button primary-cta wl-cta-bar-button">
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
            'description' => 'Meet with our expert team at our Bowland pharmacy for a comprehensive health assessment. We\'ll discuss your goals, medical history, and create a personalised plan that works for you.',
            'icon'        => 'fas fa-calendar-check',
            'meta'        => '30-45 minutes | Private consultation',
            'meta_icon'   => 'fas fa-clock',
            'badge'       => '',
            'badge_icon'  => '',
        ),
        array(
            'title'       => 'Begin your treatment',
            'description' => 'If treatment is clinically suitable for you, your pharmacist will prescribe it and explain how to take it. You\'ll receive clear instructions and guidance on what to expect from your Wythenshawe weight loss programme.',
            'icon'        => 'fas fa-pills',
            'meta'        => '',
            'meta_icon'   => '',
            'badge'       => '',
            'badge_icon'  => '',
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
            'description' => 'Results vary from person to person. We\'ll help you maintain results long-term.',
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
          <?php if ( ! empty( $step['meta'] ) ) : ?>
          <div class="wl-journey-step-meta">
            <i class="<?php echo esc_attr( $step['meta_icon'] ); ?>"></i>
            <span><?php echo esc_html( $step['meta'] ); ?></span>
          </div>
          <?php endif; ?>
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
            <p>Results vary from person to person, and depend on the treatment you are prescribed, how closely you follow it, your lifestyle and your own metabolism. Your pharmacist will talk through what is realistic for you at your consultation, and your monthly face-to-face reviews are there to keep you on track.</p>
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
            <span class="wl-faq-question-text">Which treatment will I be given?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>That is decided at your consultation, not before. More than one licensed treatment is available and they work in different ways. Your pharmacist will go through your health, your medical history and what suits you, and will explain the options and the costs before anything is prescribed.</p>
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
            <p>Book a weight management consultation with our pharmacist prescriber. If a treatment is suitable, we explain the options and costs at your appointment. Prices are on our price list.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">6</span>
            <span class="wl-faq-question-text">How long does treatment take?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Results vary from person to person. Weight loss is a journey, not a sprint. We'll work with you to create a sustainable plan that fits your lifestyle. Many patients continue treatment for 12-18 months to achieve and maintain their goals.</p>
          </div>
        </div>
      <?php endif; ?>
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
        <?php
        $wl_default_badges = array(
            array( 'badge_icon' => 'fa-shield-halved', 'badge_text' => 'GPhC Registered' ),
            array( 'badge_icon' => 'fa-user-doctor', 'badge_text' => 'Independent Prescriber' ),
            array( 'badge_icon' => 'fa-users', 'badge_text' => 'Free consultation' ),
        );
        $wl_cta_badges = array();
        if ( function_exists( 'have_rows' ) && have_rows( 'wl_final_cta_badges' ) ) {
            while ( have_rows( 'wl_final_cta_badges' ) ) {
                the_row();
                $wl_cta_badges[] = array(
                    'badge_icon' => get_sub_field( 'badge_icon' ) ?: 'fa-shield-halved',
                    'badge_text' => get_sub_field( 'badge_text' ) ?: '',
                );
            }
        }
        if ( empty( $wl_cta_badges ) ) { $wl_cta_badges = $wl_default_badges; }
        foreach ( $wl_cta_badges as $badge ) :
        ?>
          <div class="wl-final-cta-badge"><i class="<?php echo esc_attr( bp_fa_class( $badge['badge_icon'] ) ); ?>"></i><span><?php echo esc_html( $badge['badge_text'] ); ?></span></div>
        <?php endforeach; ?>
      </div>

      <h2 class="wl-final-cta-title"><?php echo esc_html( bp_field( 'wl_final_cta_title', 'Book your weight loss consultation' ) ); ?></h2>
      <p class="wl-final-cta-description"><?php echo esc_html( bp_field( 'wl_final_cta_description', 'Book a free consultation with our pharmacist to talk through your options and whether treatment is suitable for you.' ) ); ?></p>

      <div class="wl-final-cta-actions">
        <a href="#weight-loss-calendar" class="cta-button primary-cta wl-final-cta-button-white">
          <?php echo esc_html( bp_field( 'wl_final_cta_button_text', 'Book Your Consultation' ) ); ?> <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta wl-final-cta-button-outlined">
          <i class="fas fa-phone"></i> <?php echo esc_html( 'Call ' . bp_phone() ); ?>
        </a>
      </div>

      <div class="wl-final-cta-checks">
        <?php
        $wl_default_checks = array( 'Expert guidance', 'No obligation', 'Same-day appointments' );
        $wl_cta_checks = array();
        if ( function_exists( 'have_rows' ) && have_rows( 'wl_final_cta_checks' ) ) {
            while ( have_rows( 'wl_final_cta_checks' ) ) {
                the_row();
                $text = get_sub_field( 'check_text' );
                if ( $text ) { $wl_cta_checks[] = $text; }
            }
        }
        if ( empty( $wl_cta_checks ) ) { $wl_cta_checks = $wl_default_checks; }
        foreach ( $wl_cta_checks as $check ) :
        ?>
          <div class="wl-final-cta-check"><i class="fas fa-check"></i><span><?php echo esc_html( $check ); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Booking Calendar (Acuity) -->
<section id="weight-loss-calendar" class="wl-booking-section wl-reveal">
  <div class="section-container">
    <div class="wl-booking-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
          <line x1="16" y1="2" x2="16" y2="6"></line>
          <line x1="8" y1="2" x2="8" y2="6"></line>
          <line x1="3" y1="10" x2="21" y2="10"></line>
        </svg>
        <span class="section-badge-text">BOOK ONLINE</span>
      </div>
      <h2 class="wl-booking-title">Book Your Weight Loss Consultation</h2>
      <p class="wl-booking-subtitle">New patient? Choose the 30-minute first consultation. Already with us? Book a 15-minute follow-up review. Both are in store and confirm instantly.</p>
    </div>
    <div class="booking-calendar-wrapper">
      <iframe
        src="https://app.acuityscheduling.com/schedule.php?owner=29286426&amp;calendarID=8436365&amp;appointmentType[]=86724977&amp;appointmentType[]=98009511&amp;ref=embedded_csp"
        title="Schedule Appointment"
        allow="payment"></iframe>
    </div>
  </div>
</section>
<script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>

<?php
get_footer();
