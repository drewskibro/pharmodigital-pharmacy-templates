<?php
/**
 * Template Name: Weight Loss
 * @package Easy_Pharmacy
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
          <span class="pulse-dot">
            <span></span>
            <span></span>
          </span>
          <span class="section-badge-text"><?php echo esc_html( ep_field( 'wl_hero_badge', 'MEDICAL WEIGHT LOSS' ) ); ?></span>
        </div>

        <h1 class="wl-hero-title">
          <span class="gradient-text"><?php echo esc_html( ep_field( 'wl_hero_title_line_1', 'Mounjaro & Wegovy' ) ); ?></span>
          <span class="wl-hero-accent-text"><?php echo esc_html( ep_field( 'wl_hero_title_line_2', 'weight loss' ) ); ?></span>
          <span class="gradient-text"><?php echo esc_html( ep_field( 'wl_hero_title_line_3', 'that works when diets have failed' ) ); ?></span>
        </h1>

        <p class="wl-hero-description">
          <?php echo esc_html( ep_field( 'wl_hero_description', 'Prescription Mounjaro and Wegovy (GLP-1 treatments) with expert guidance and face-to-face support right here in Ashford. No remote consultations—real care from someone who knows your name.' ) ); ?>
        </p>

        <div class="wl-hero-actions">
          <a href="<?php echo esc_url( ep_field( 'wl_hero_cta_url', '' ) ?: ep_booking_url() ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( ep_field( 'wl_hero_cta_text', 'Book Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html( 'Call ' . ep_phone() ); ?>
          </a>
        </div>

        <!-- Testimonial Card -->
        <div class="wl-hero-testimonial">
          <div class="wl-hero-testimonial-quote-icon">
            <i class="fas fa-quote-left"></i>
          </div>
          <p class="wl-hero-testimonial-quote">
            <?php echo esc_html( ep_field( 'wl_hero_testimonial_quote', '"I travel 40 miles every month to see Dilip for my weight loss consultations—he\'s that good. Would never go anywhere else."' ) ); ?>
          </p>
          <div class="wl-hero-testimonial-footer">
            <div class="wl-hero-testimonial-author">
              <p class="wl-hero-testimonial-name"><?php echo esc_html( ep_field( 'wl_hero_testimonial_name', 'Ashford Patient' ) ); ?></p>
              <div class="star-row">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="result-badge">
              <i class="fas fa-weight-scale"></i>
              <span><?php echo esc_html( ep_field( 'wl_hero_result_badge', 'Real Results' ) ); ?></span>
            </div>
          </div>
          <div class="hero-testimonial-accent"></div>
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
            $image_id = ep_field( $img['field'] );
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
     SOCIAL PROOF SECTION
     ============================================ -->
<section class="wl-social-proof-bar">
  <div class="section-container">
    <div class="wl-social-proof-bar-content">
      <!-- Left: Premium Stats Badge -->
      <div class="wl-social-proof-bar-stats">
        <div class="wl-social-proof-bar-number"><?php echo esc_html( ep_field( 'wl_social_number', '4.7' ) ); ?></div>
        <div class="wl-social-proof-bar-label"><?php echo esc_html( ep_field( 'wl_social_label', 'Google Rating' ) ); ?></div>
        <div class="wl-social-proof-bar-stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>
      <!-- Right: Content -->
      <div class="wl-social-proof-bar-text">
        <span class="wl-social-proof-bar-eyebrow"><?php echo esc_html( ep_field( 'wl_social_eyebrow', 'TRUSTED BY ASHFORD' ) ); ?></span>
        <h2 class="wl-social-proof-bar-headline"><?php echo esc_html( ep_field( 'wl_social_headline', 'Join hundreds of Ashford patients who\'ve already made the switch' ) ); ?></h2>
        <p class="wl-social-proof-bar-subtext"><?php echo esc_html( ep_field( 'wl_social_subtext', 'Real people, real results. Our patients lose an average of 10-15% body weight in 12 months with Mounjaro and Wegovy treatment.' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     PHARMACIST SECTION
     ============================================ -->
<?php get_template_part( 'template-parts/section', 'pharmacist' ); ?>

<!-- ============================================
     RESULTS SHOWCASE
     ============================================ -->
<section class="wl-results-section">
  <div class="section-container">
    <div class="wl-results-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'wl_results_badge', 'MEDICAL WEIGHT LOSS' ) ); ?></span>
      </div>
      <h2 class="wl-results-title">Real <span class="gradient-text"><?php echo esc_html( ep_field( 'wl_results_title_highlight', 'Mounjaro & Wegovy' ) ); ?></span> <?php echo esc_html( ep_field( 'wl_results_title', 'results in Ashford' ) ); ?></h2>
      <p class="wl-results-description"><?php echo esc_html( ep_field( 'wl_results_description', 'Ashford patients using Mounjaro or Wegovy lose an average of 10-15% of their body weight in 12 months with our personalised programmes.' ) ); ?></p>
    </div>

    <div class="wl-results-grid">
      <!-- Card 1: Satisfaction -->
      <div class="wl-results-card">
        <div class="star-row wl-results-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="wl-results-number gradient-text"><?php echo esc_html( ep_field( 'wl_results_card1_number', '4.7/5' ) ); ?></p>
        <p class="wl-results-label"><?php echo esc_html( ep_field( 'wl_results_card1_label', 'Patient satisfaction' ) ); ?></p>
        <p class="wl-results-sublabel"><?php echo esc_html( ep_field( 'wl_results_card1_sublabel', 'Based on verified reviews' ) ); ?></p>
      </div>

      <!-- Card 2: Featured Weight Loss -->
      <div class="wl-results-card wl-results-card-featured">
        <div class="wl-results-featured-badge"><?php echo esc_html( ep_field( 'wl_results_featured_badge', 'Most Important' ) ); ?></div>
        <div class="wl-results-featured-bg-dots"></div>
        <div class="wl-results-featured-circle"></div>
        <div class="wl-results-featured-square"></div>
        <div class="wl-results-featured-icon"><i class="fas fa-chart-line"></i></div>
        <p class="wl-results-featured-number"><?php echo esc_html( ep_field( 'wl_results_featured_number', '10-15%' ) ); ?></p>
        <p class="wl-results-featured-label"><?php echo esc_html( ep_field( 'wl_results_featured_label', 'Average weight loss' ) ); ?></p>
        <p class="wl-results-featured-sublabel"><?php echo esc_html( ep_field( 'wl_results_featured_sublabel', 'In 12 months' ) ); ?></p>
      </div>

      <!-- Card 3: Patients Helped -->
      <div class="wl-results-card">
        <div class="google-icon-wrapper" style="width: 4rem; height: 4rem; margin: 0 auto 1rem; box-shadow: 0 8px 24px rgba(163, 158, 227, 0.2);">
          <i class="fas fa-heart" style="font-size: 2rem; background: linear-gradient(135deg, var(--brand-purple), var(--brand-dark)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"></i>
        </div>
        <p class="wl-results-number gradient-text"><?php echo esc_html( ep_field( 'wl_results_card3_number', '500+' ) ); ?></p>
        <p class="wl-results-label"><?php echo esc_html( ep_field( 'wl_results_card3_label', 'Patients Helped' ) ); ?></p>
        <p class="wl-results-sublabel"><?php echo esc_html( ep_field( 'wl_results_card3_sublabel', 'Ashford & surrounding areas' ) ); ?></p>
      </div>
    </div>

    <p class="wl-results-disclaimer">
      <i class="fas fa-info-circle"></i>
      <?php echo esc_html( ep_field( 'wl_results_disclaimer', 'Results vary by individual. Weight loss depends on adherence to treatment, lifestyle changes, and individual metabolism.' ) ); ?>
    </p>
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
        <h3 class="wl-cta-bar-title"><?php echo esc_html( ep_field( 'wl_cta_bar_title', 'Ready to transform your health?' ) ); ?></h3>
        <p class="wl-cta-bar-subtitle"><?php echo esc_html( ep_field( 'wl_cta_bar_subtitle', 'Book your consultation with Dilip today' ) ); ?></p>
      </div>
      <a href="<?php echo esc_url( ep_field( 'wl_hero_cta_url', '' ) ?: ep_booking_url() ); ?>" class="cta-button primary-cta wl-cta-bar-button">
        <?php echo esc_html( ep_field( 'wl_hero_cta_text', 'Book Consultation' ) ); ?>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- ============================================
     FEATURES SECTION
     ============================================ -->
<section class="wl-features-section">
  <div class="section-container">
    <div class="wl-features-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'wl_features_badge', 'Why Choose Us' ) ); ?></span>
      </div>
      <h2 class="wl-features-title">The <span class="gradient-text"><?php echo esc_html( ep_pharmacy_name() ); ?></span> Difference</h2>
      <div class="wl-features-divider"></div>
      <p class="wl-features-description"><?php echo esc_html( ep_field( 'wl_features_description', 'Real face-to-face support. Expert guidance. Proven results.' ) ); ?></p>
    </div>

    <div class="wl-features-grid">
      <!-- Left: Image -->
      <div class="wl-features-image-wrapper">
        <div class="wl-features-image-bg-circle"></div>
        <div class="wl-features-image-card">
          <?php
          $features_image_id = ep_field( 'wl_features_image' );
          $features_image_url = $features_image_id ? wp_get_attachment_image_url( $features_image_id, 'large' ) : '';
          if ( $features_image_url ) :
          ?>
            <img src="<?php echo esc_url( $features_image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'wl_features_image_alt', 'Weight loss success patient' ) ); ?>" />
          <?php endif; ?>
        </div>
        <div class="wl-features-badge wl-features-badge-rating">
          <div class="star-row">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="wl-features-badge-text"><?php echo esc_html( ep_field( 'wl_features_rating_text', '4.7/5' ) ); ?></p>
        </div>
        <div class="wl-features-badge wl-features-badge-patients">
          <i class="fab fa-google"></i>
          <p class="wl-features-badge-text"><?php echo esc_html( ep_field( 'wl_features_reviews_text', '300+ Google Reviews' ) ); ?></p>
        </div>
      </div>

      <!-- Right: Features -->
      <div class="wl-features-content">
        <?php if ( have_rows( 'wl_features' ) ) : while ( have_rows( 'wl_features' ) ) : the_row(); ?>
          <div class="wl-features-card">
            <div class="wl-features-card-icon">
              <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
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
              <p class="wl-features-card-description">See the same pharmacist who knows your name. No video calls—real, local support.</p>
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
          <a href="<?php echo esc_url( ep_field( 'wl_hero_cta_url', '' ) ?: ep_booking_url() ); ?>" class="cta-button primary-cta">
            Start Your Journey <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
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
  </div>
</section>

<!-- ============================================
     REVOLUTION SLIDER — Weight Loss Banner (inline)
     ============================================ -->
<section class="revslider-section wl-revslider-section" id="weight-loss-slider">
  <div class="revslider-wrapper">
    <?php
    $wl_slider_shortcode = ep_field( 'wl_revslider_shortcode' );
    if ( $wl_slider_shortcode && shortcode_exists( 'rev_slider' ) ) :
      echo do_shortcode( $wl_slider_shortcode );
    else :
      $wl_banner_image_id  = ep_field( 'wl_banner_image' );
      $wl_banner_image_url = $wl_banner_image_id ? wp_get_attachment_image_url( $wl_banner_image_id, 'full' ) : '';
    ?>
      <div class="revslider-placeholder">
        <div class="revslider-overlay"></div>
        <?php if ( $wl_banner_image_url ) : ?>
          <img src="<?php echo esc_url( $wl_banner_image_url ); ?>" alt="Weight Loss Banner" class="revslider-image" />
        <?php endif; ?>
        <div class="revslider-content">
          <div class="revslider-container">
            <span class="revslider-badge"><?php echo esc_html( ep_field( 'wl_banner_badge', 'Medical Weight Loss' ) ); ?></span>
            <h2 class="revslider-title"><?php echo esc_html( ep_field( 'wl_banner_title', 'Transform Your Health with Mounjaro & Wegovy' ) ); ?></h2>
            <p class="revslider-subtitle"><?php echo esc_html( ep_field( 'wl_banner_subtitle', 'Prescription weight loss treatment with expert face-to-face support in Ashford' ) ); ?></p>
            <div class="revslider-cta">
              <a href="<?php echo esc_url( ep_field( 'wl_banner_cta_url', '' ) ?: ep_booking_url() ); ?>" class="revslider-btn-primary">
                <?php echo esc_html( ep_field( 'wl_banner_cta_text', 'Book Consultation' ) ); ?>
              </a>
              <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="revslider-btn-secondary">
                <?php echo esc_html( 'Call ' . ep_phone() ); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- ============================================
     JOURNEY STEPS
     ============================================ -->
<section class="wl-journey-section">
  <div class="section-container">
    <div class="wl-journey-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'wl_journey_badge', 'HOW WE SUPPORT YOU' ) ); ?></span>
      </div>
      <h2 class="wl-journey-title">Your path to <span class="gradient-text"><?php echo esc_html( ep_field( 'wl_journey_title_highlight', 'lasting weight loss' ) ); ?></span></h2>
      <p class="wl-journey-description">
        <?php echo esc_html( ep_field( 'wl_journey_description', 'A structured, evidence-based approach with regular face-to-face support every step of the way.' ) ); ?>
      </p>
    </div>

    <?php if ( have_rows( 'wl_journey_steps' ) ) : $step_count = 0; while ( have_rows( 'wl_journey_steps' ) ) : the_row(); $step_count++;
      $direction = ( $step_count % 2 === 1 ) ? 'left' : 'right';
      $step_image_id  = get_sub_field( 'image' );
      $step_image_url = $step_image_id ? wp_get_attachment_image_url( $step_image_id, 'large' ) : '';
      $floating_badge  = get_sub_field( 'floating_badge' );
    ?>
      <div class="wl-journey-step wl-journey-step-<?php echo esc_attr( $direction ); ?>">
        <?php if ( $direction === 'right' && $step_image_url ) : ?>
          <div class="wl-journey-step-image">
            <img src="<?php echo esc_url( $step_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php if ( $floating_badge ) : ?>
              <div class="wl-journey-step-floating-badge">
                <i class="<?php echo esc_attr( get_sub_field( 'floating_badge_icon' ) ); ?>"></i>
                <span><?php echo esc_html( $floating_badge ); ?></span>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <div class="wl-journey-step-content">
          <div class="wl-journey-step-number"><?php echo esc_html( $step_count ); ?></div>
          <div class="wl-journey-step-icon"><i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i></div>
          <h3 class="wl-journey-step-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="wl-journey-step-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <div class="wl-journey-step-meta">
            <i class="<?php echo esc_attr( get_sub_field( 'meta_icon' ) ); ?>"></i>
            <span><?php echo esc_html( get_sub_field( 'meta_text' ) ); ?></span>
          </div>
        </div>

        <?php if ( $direction === 'left' && $step_image_url ) : ?>
          <div class="wl-journey-step-image">
            <img src="<?php echo esc_url( $step_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            <?php if ( $floating_badge ) : ?>
              <div class="wl-journey-step-floating-badge">
                <i class="<?php echo esc_attr( get_sub_field( 'floating_badge_icon' ) ); ?>"></i>
                <span><?php echo esc_html( $floating_badge ); ?></span>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endwhile; else : ?>
      <!-- Default journey steps when no ACF data -->
      <div class="wl-journey-step wl-journey-step-left">
        <div class="wl-journey-step-content">
          <div class="wl-journey-step-number">1</div>
          <div class="wl-journey-step-icon"><i class="fas fa-calendar-check"></i></div>
          <h3 class="wl-journey-step-title">Initial consultation</h3>
          <p class="wl-journey-step-description">Meet with our expert team at our Ashford pharmacy for a comprehensive health assessment. We'll discuss your goals, medical history, and create a personalised plan that works for you.</p>
          <div class="wl-journey-step-meta"><i class="fas fa-clock"></i><span>30-45 minutes | Private consultation</span></div>
        </div>
        <div class="wl-journey-step-image"><img src="" alt="Initial consultation" /></div>
      </div>
      <div class="wl-journey-step wl-journey-step-right">
        <div class="wl-journey-step-image">
          <img src="" alt="Treatment" />
          <div class="wl-journey-step-floating-badge"><i class="fas fa-bolt"></i><span>Same Day</span></div>
        </div>
        <div class="wl-journey-step-content">
          <div class="wl-journey-step-number">2</div>
          <div class="wl-journey-step-icon"><i class="fas fa-pills"></i></div>
          <h3 class="wl-journey-step-title">Begin Mounjaro or Wegovy treatment</h3>
          <p class="wl-journey-step-description">If suitable, we'll prescribe Mounjaro, Wegovy, or other GLP-1 treatments. You'll receive clear instructions and guidance on what to expect from your Ashford weight loss programme.</p>
          <div class="wl-journey-step-meta"><i class="fas fa-bolt"></i><span>Same-day prescription available</span></div>
        </div>
      </div>
      <div class="wl-journey-step wl-journey-step-left">
        <div class="wl-journey-step-content">
          <div class="wl-journey-step-number">3</div>
          <div class="wl-journey-step-icon"><i class="fas fa-user-doctor"></i></div>
          <h3 class="wl-journey-step-title">Monthly check-ins</h3>
          <p class="wl-journey-step-description">Pop into the pharmacy for face-to-face appointments. We'll monitor your progress, adjust medication if needed, and provide ongoing encouragement. You're never doing this alone.</p>
          <div class="wl-journey-step-meta"><i class="fas fa-calendar"></i><span>Monthly appointments</span></div>
        </div>
        <div class="wl-journey-step-image"><img src="" alt="Monthly check-in" /></div>
      </div>
      <div class="wl-journey-step wl-journey-step-right">
        <div class="wl-journey-step-image">
          <img src="" alt="Goal achievement" />
          <div class="wl-journey-step-floating-badge wl-journey-step-floating-badge-trophy"><i class="fas fa-trophy"></i></div>
        </div>
        <div class="wl-journey-step-content">
          <div class="wl-journey-step-number">4</div>
          <div class="wl-journey-step-icon"><i class="fas fa-trophy"></i></div>
          <h3 class="wl-journey-step-title">Reach your goals</h3>
          <p class="wl-journey-step-description">With consistent support and proven medical treatments, most patients reach their target weight within 12 months. We'll help you maintain results long-term.</p>
          <div class="wl-journey-step-meta"><i class="fas fa-infinity"></i><span>Ongoing maintenance support</span></div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- ============================================
     FAQ SECTION
     ============================================ -->
<section class="wl-faq-section">
  <div class="section-container">
    <div class="wl-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'wl_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="wl-faq-title"><?php echo esc_html( ep_field( 'wl_faq_title', 'Your questions answered' ) ); ?></h2>
      <div class="wl-faq-divider"></div>
      <p class="wl-faq-description"><?php echo esc_html( ep_field( 'wl_faq_description', 'Get answers to the most common weight loss questions' ) ); ?></p>
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
            <p>Clinical trials show patients typically lose 15-20% of their body weight over 12 months with GLP-1 treatments like Mounjaro and Wegovy. For example, someone weighing 100kg could lose 15-20kg. Results vary based on adherence to treatment, lifestyle changes, and individual metabolism. Our face-to-face support helps maximize your results.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">2</span>
            <span class="wl-faq-question-text">Do I need a GP referral?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>No, you don't need a GP referral. Dilip is an Independent Prescriber, which means he can assess your suitability and prescribe weight loss medication directly. You can book your consultation today and start your journey this week, not in months.</p>
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
            <p>Common side effects include nausea, vomiting, diarrhea, and constipation, especially when starting treatment or increasing doses. These typically improve over time. We start with a low dose and gradually increase it to minimize side effects. During your monthly check-ins, we'll monitor how you're feeling and adjust your treatment if needed.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">5</span>
            <span class="wl-faq-question-text">How much does treatment cost?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Treatment starts from &pound;125 per month, which includes your medication, monthly face-to-face consultations, and ongoing support. The exact cost depends on which medication you're prescribed and the dosage. We'll discuss pricing transparently during your initial consultation&mdash;no hidden fees, no surprises.</p>
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
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'wl_testimonials_badge', 'SUCCESS STORIES' ) ); ?></span>
      </div>
      <h2 class="wl-testimonials-title"><?php echo esc_html( ep_field( 'wl_testimonials_title', 'Real Ashford success stories' ) ); ?></h2>
      <div class="wl-testimonials-divider"></div>
      <p class="wl-testimonials-description"><?php echo esc_html( ep_field( 'wl_testimonials_description', 'See how our patients have transformed their lives with medical weight loss' ) ); ?></p>
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
          <p class="wl-testimonial-author">Ashford Patient</p>
        </div>
        <div class="wl-testimonial-card">
          <div class="wl-testimonial-circle"><span class="wl-testimonial-circle-number">4st</span></div>
          <h3 class="wl-testimonial-title">4 Stone Lost</h3>
          <p class="wl-testimonial-quote">"I travel 40 miles every month to see Dilip for my weight loss consultations—he's that good. Would never go anywhere else."</p>
          <div class="star-row wl-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="wl-testimonial-author">Ashford Patient</p>
        </div>
        <div class="wl-testimonial-card">
          <div class="wl-testimonial-circle"><span class="wl-testimonial-circle-number">3st</span></div>
          <h3 class="wl-testimonial-title">3 Stone Lost</h3>
          <p class="wl-testimonial-quote">"I cannot thank you enough for helping me lose weight. Not only do I feel and look great, my hip and knee pain is SO much better now I weigh less."</p>
          <div class="star-row wl-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="wl-testimonial-author">Sheffield Patient</p>
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
        <div class="wl-final-cta-badge"><i class="fas fa-users"></i><span><?php echo esc_html( ep_field( 'wl_results_card3_number', '500+' ) ); ?> Patients Helped</span></div>
      </div>

      <h2 class="wl-final-cta-title"><?php echo esc_html( ep_field( 'wl_final_cta_title', 'Ready to start your weight loss journey?' ) ); ?></h2>
      <p class="wl-final-cta-description"><?php echo esc_html( ep_field( 'wl_final_cta_description', 'Join 500+ Ashford residents who\'ve transformed their lives with medical weight loss. Book your consultation with Dilip today.' ) ); ?></p>

      <div class="wl-final-cta-actions">
        <a href="<?php echo esc_url( ep_booking_url() ); ?>" class="cta-button primary-cta wl-final-cta-button-white">
          Book Your Consultation <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta wl-final-cta-button-outlined">
          <i class="fas fa-phone"></i> <?php echo esc_html( 'Call ' . ep_phone() ); ?>
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
