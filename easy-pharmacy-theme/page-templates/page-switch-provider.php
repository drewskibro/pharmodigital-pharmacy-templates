<?php
/**
 * Template Name: Switch Provider
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="switch-hero-section">
  <div class="switch-hero-gradient"></div>
  <div class="switch-hero-dots"></div>
  <div class="switch-hero-glow-1"></div>
  <div class="switch-hero-glow-2"></div>
  <div class="section-container">
    <div class="switch-hero-grid">

      <!-- Left Content -->
      <div class="switch-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( ep_field( 'sp_hero_badge', 'SWITCH TO EASY PHARMACY' ) ); ?></span>
        </div>
        <h1 class="switch-hero-title">
          <span class="gradient-text"><?php echo esc_html( ep_field( 'sp_hero_title_line1', 'Frustrated with' ) ); ?></span>
          <span class="hero-accent-text"><?php echo esc_html( ep_field( 'sp_hero_title_line2', 'Your Current' ) ); ?></span>
          <span class="gradient-text"><?php echo esc_html( ep_field( 'sp_hero_title_line3', 'Weight Loss Provider?' ) ); ?></span>
        </h1>

        <p class="switch-hero-subtitle">
          <?php echo esc_html( ep_field( 'sp_hero_subtitle', 'Switch to Easy Pharmacy for expert care, transparent pricing, and ongoing pharmacist support. No waiting lists.' ) ); ?>
        </p>

        <div class="switch-hero-actions">
          <a href="<?php echo esc_url( ep_field( 'sp_hero_cta_url', '#comparison' ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( ep_field( 'sp_hero_cta_text', 'Start Your Switch Today' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( ep_phone() ); ?>
          </a>
        </div>

        <!-- Trust Indicators -->
        <div class="switch-hero-trust-row">
          <div class="switch-hero-trust-pill">
            <i class="fas fa-bolt"></i>
            <span><?php echo esc_html( ep_field( 'sp_hero_trust_1', 'Zero gap in treatment' ) ); ?></span>
          </div>
          <div class="switch-hero-trust-pill">
            <i class="fas fa-calendar-check"></i>
            <span><?php echo esc_html( ep_field( 'sp_hero_trust_2', 'Same Day Appointments' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right Image -->
      <div class="switch-hero-visual">
        <div class="switch-hero-visual-glow"></div>

        <!-- Main image card -->
        <div class="switch-hero-image-card">
          <div class="switch-hero-image-inner">
            <?php
            $sp_hero_image_id  = ep_field( 'sp_hero_image' );
            $sp_hero_image_url = $sp_hero_image_id ? wp_get_attachment_image_url( $sp_hero_image_id, 'large' ) : 'https://images.unsplash.com/photo-1581056771107-24ca5f033842?w=800&h=1000&fit=crop';
            ?>
            <img src="<?php echo esc_url( $sp_hero_image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'sp_hero_image_alt', 'Happy patient consulting with pharmacist' ) ); ?>" class="switch-hero-image" />
            <div class="switch-hero-overlay"></div>
          </div>
          <!-- Floating price badge -->
          <div class="switch-hero-price-badge">
            <span class="switch-hero-price-label"><?php echo esc_html( ep_field( 'sp_hero_price_label', 'From' ) ); ?></span>
            <span class="switch-hero-price-amount"><?php echo esc_html( ep_field( 'sp_hero_price_amount', '£125/mo' ) ); ?></span>
            <span class="switch-hero-price-note"><?php echo esc_html( ep_field( 'sp_hero_price_note', 'All-inclusive' ) ); ?></span>
          </div>
        </div>

        <!-- Testimonial card -->
        <div class="switch-hero-testimonial-card">
          <div class="switch-hero-quote-icon">
            <i class="fas fa-quote-left"></i>
          </div>
          <p class="switch-hero-quote-text">
            <?php echo esc_html( ep_field( 'sp_hero_testimonial_text', '"I travel 40 miles every month to see Dilip... he\'s that good. Would never go anywhere else."' ) ); ?>
          </p>
          <div class="switch-hero-quote-footer">
            <div class="switch-hero-author">
              <span class="switch-hero-name"><?php echo esc_html( ep_field( 'sp_hero_testimonial_name', 'Ashford Patient' ) ); ?></span>
              <div class="star-row">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="switch-hero-result-badge">
              <span><?php echo esc_html( ep_field( 'sp_hero_testimonial_result', '4 Stone Lost' ) ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     STATS BAR
     ============================================ -->
<section class="stats-section switch-stats-overlap">
  <div class="section-container">
    <div class="stats-bar">
      <?php if ( have_rows( 'sp_stats' ) ) : $stat_i = 0; while ( have_rows( 'sp_stats' ) ) : the_row(); $stat_i++; ?>
        <?php if ( $stat_i > 1 ) : ?><div class="stat-divider"></div><?php endif; ?>
        <div class="stat-item">
          <div class="stat-icon"><i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i></div>
          <div class="stat-content">
            <span class="stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></span>
            <span class="stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-weight-scale"></i></div>
          <div class="stat-content"><span class="stat-number">2.5st</span><span class="stat-label">Avg Loss</span></div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-users"></i></div>
          <div class="stat-content"><span class="stat-number">Hundreds</span><span class="stat-label">Patients Switched</span></div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-star"></i></div>
          <div class="stat-content"><span class="stat-number">4.9/5</span><span class="stat-label">Google Rating</span></div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-location-dot"></i></div>
          <div class="stat-content"><span class="stat-number">Ashford</span><span class="stat-label">Based Care</span></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     COMPARISON SECTION
     ============================================ -->
<section class="switch-comparison-section" id="comparison">
  <div class="section-container">
    <!-- Section Header -->
    <div class="comparison-section-header">
      <div class="comparison-header-wrapper">
        <div class="comparison-header-accent-line"></div>
        <div class="section-header">
          <p class="comparison-header-badge"><?php echo esc_html( ep_field( 'sp_compare_badge', 'THE EASY PHARMACY DIFFERENCE' ) ); ?></p>
        </div>
      </div>
      <h2 class="comparison-section-title"><?php echo esc_html( ep_field( 'sp_compare_title', 'Compare Your Options' ) ); ?></h2>
      <div class="comparison-title-underline"></div>
      <p class="comparison-section-description"><?php echo esc_html( ep_field( 'sp_compare_description', 'See the difference face-to-face care makes for your weight loss journey' ) ); ?></p>
    </div>

    <!-- 3-Card Comparison Layout -->
    <div class="comparison-cards-grid">

      <!-- CARD 1: THE PROBLEM -->
      <div class="comparison-card comparison-card-problem">
        <div class="comparison-card-glow"></div>
        <div class="comparison-card-header">
          <div class="comparison-card-icon comparison-card-icon-gray">
            <i class="<?php echo esc_attr( ep_field( 'sp_card1_icon', 'fas fa-laptop' ) ); ?>"></i>
          </div>
          <span class="comparison-card-badge comparison-card-badge-red"><?php echo esc_html( ep_field( 'sp_card1_badge', 'ONLINE ONLY' ) ); ?></span>
        </div>
        <h3 class="comparison-card-title"><?php echo esc_html( ep_field( 'sp_card1_title', 'National Providers' ) ); ?></h3>
        <p class="comparison-card-subtitle"><?php echo esc_html( ep_field( 'sp_card1_subtitle', 'Remote-only weight loss services' ) ); ?></p>
        <div class="comparison-card-pricing">
          <div class="comparison-card-price-row">
            <span class="comparison-card-price"><?php echo esc_html( ep_field( 'sp_card1_price', '£250+' ) ); ?></span>
            <span class="comparison-card-price-period"><?php echo esc_html( ep_field( 'sp_card1_price_period', '/month' ) ); ?></span>
          </div>
          <p class="comparison-card-price-note"><?php echo esc_html( ep_field( 'sp_card1_price_note', 'Plus hidden consultation fees' ) ); ?></p>
        </div>
        <ul class="comparison-card-features">
          <?php if ( have_rows( 'sp_card1_features' ) ) : while ( have_rows( 'sp_card1_features' ) ) : the_row(); ?>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-red"><i class="fas fa-times"></i></div>
              <span class="comparison-card-feature-text"><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
            </li>
          <?php endwhile; else : ?>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-red"><i class="fas fa-times"></i></div>
              <span class="comparison-card-feature-text">Video calls only - no face-to-face</span>
            </li>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-red"><i class="fas fa-times"></i></div>
              <span class="comparison-card-feature-text">Automated responses, long wait times</span>
            </li>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-red"><i class="fas fa-times"></i></div>
              <span class="comparison-card-feature-text">Different clinician each time</span>
            </li>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-red"><i class="fas fa-times"></i></div>
              <span class="comparison-card-feature-text">Impersonal, transactional service</span>
            </li>
          <?php endif; ?>
        </ul>
        <div class="comparison-card-footer">
          <p class="comparison-card-footer-text"><?php echo esc_html( ep_field( 'sp_card1_footer', 'What you\'re leaving behind' ) ); ?></p>
        </div>
      </div>

      <!-- CARD 2: EASY PHARMACY (FEATURED) -->
      <div class="comparison-card comparison-card-featured">
        <div class="comparison-card-glow-purple"></div>
        <div class="comparison-card-glow-bottom"></div>
        <div class="comparison-card-recommended-badge">
          <div class="comparison-card-recommended-badge-inner"><?php echo esc_html( ep_field( 'sp_card2_recommended', 'RECOMMENDED' ) ); ?></div>
        </div>
        <div class="comparison-card-inner">
          <div class="comparison-card-header">
            <div class="comparison-card-icon comparison-card-icon-purple">
              <i class="<?php echo esc_attr( ep_field( 'sp_card2_icon', 'fas fa-heart-pulse' ) ); ?>"></i>
            </div>
            <span class="comparison-card-badge comparison-card-badge-purple"><?php echo esc_html( ep_field( 'sp_card2_badge', 'ASHFORD BASED' ) ); ?></span>
          </div>
          <h3 class="comparison-card-title"><?php echo esc_html( ep_field( 'sp_card2_title', 'Easy Pharmacy' ) ); ?></h3>
          <p class="comparison-card-subtitle comparison-card-subtitle-purple"><?php echo esc_html( ep_field( 'sp_card2_subtitle', 'Face-to-face weight loss care' ) ); ?></p>
          <div class="comparison-card-pricing">
            <div class="comparison-card-price-row">
              <span class="comparison-card-price comparison-card-price-purple"><?php echo esc_html( ep_field( 'sp_card2_price', 'From £125' ) ); ?></span>
              <span class="comparison-card-price-period"><?php echo esc_html( ep_field( 'sp_card2_price_period', '/month' ) ); ?></span>
            </div>
            <p class="comparison-card-price-note"><?php echo esc_html( ep_field( 'sp_card2_price_note', 'All-inclusive with face-to-face support' ) ); ?></p>
          </div>
          <ul class="comparison-card-features">
            <?php if ( have_rows( 'sp_card2_features' ) ) : while ( have_rows( 'sp_card2_features' ) ) : the_row(); ?>
              <li class="comparison-card-feature">
                <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
                <span class="comparison-card-feature-text comparison-card-feature-text-bold"><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
              </li>
            <?php endwhile; else : ?>
              <li class="comparison-card-feature">
                <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
                <span class="comparison-card-feature-text comparison-card-feature-text-bold">Monthly face-to-face appointments in Ashford</span>
              </li>
              <li class="comparison-card-feature">
                <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
                <span class="comparison-card-feature-text comparison-card-feature-text-bold">Same pharmacist who knows your name</span>
              </li>
              <li class="comparison-card-feature">
                <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
                <span class="comparison-card-feature-text comparison-card-feature-text-bold">Same-day prescription approval</span>
              </li>
              <li class="comparison-card-feature">
                <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
                <span class="comparison-card-feature-text comparison-card-feature-text-bold">Transparent, all-inclusive pricing</span>
              </li>
            <?php endif; ?>
          </ul>
          <a href="<?php echo esc_url( ep_booking_url() ); ?>" class="comparison-card-cta-button">
            <span class="comparison-card-cta-content">
              <?php echo esc_html( ep_field( 'sp_card2_cta_text', 'Make The Switch' ) ); ?>
              <svg class="comparison-card-cta-arrow" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>

      <!-- CARD 3: BENEFITS -->
      <div class="comparison-card comparison-card-benefits">
        <div class="comparison-card-glow-light"></div>
        <div class="comparison-card-header">
          <div class="comparison-card-icon comparison-card-icon-purple">
            <i class="<?php echo esc_attr( ep_field( 'sp_card3_icon', 'fas fa-trophy' ) ); ?>"></i>
          </div>
          <span class="comparison-card-badge comparison-card-badge-light-purple"><?php echo esc_html( ep_field( 'sp_card3_badge', 'YOUR BENEFITS' ) ); ?></span>
        </div>
        <h3 class="comparison-card-title"><?php echo esc_html( ep_field( 'sp_card3_title', 'What You Gain' ) ); ?></h3>
        <p class="comparison-card-subtitle"><?php echo esc_html( ep_field( 'sp_card3_subtitle', 'The Easy Pharmacy advantage' ) ); ?></p>
        <div class="comparison-card-value-section">
          <div class="comparison-card-value-row">
            <i class="fas fa-heart comparison-card-value-icon"></i>
            <div class="comparison-card-value-text">
              <span class="comparison-card-value-title"><?php echo esc_html( ep_field( 'sp_card3_value_title', 'Better Value' ) ); ?></span>
              <span class="comparison-card-value-subtitle"><?php echo esc_html( ep_field( 'sp_card3_value_subtitle', 'Competitive pricing' ) ); ?></span>
            </div>
          </div>
        </div>
        <ul class="comparison-card-features">
          <?php if ( have_rows( 'sp_card3_features' ) ) : while ( have_rows( 'sp_card3_features' ) ) : the_row(); ?>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
              <span class="comparison-card-feature-text"><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
            </li>
          <?php endwhile; else : ?>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
              <span class="comparison-card-feature-text">Personal relationship with your pharmacist</span>
            </li>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
              <span class="comparison-card-feature-text">Convenient Ashford location with parking</span>
            </li>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
              <span class="comparison-card-feature-text">30+ years of trusted local expertise</span>
            </li>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
              <span class="comparison-card-feature-text">Support an Ashford independent business</span>
            </li>
          <?php endif; ?>
        </ul>
        <a class="comparison-card-secondary-button" href="<?php echo esc_url( home_url( '/team/' ) ); ?>">
          <?php echo esc_html( ep_field( 'sp_card3_cta_text', 'Learn More' ) ); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SOCIAL PROOF SECTION - RATING BADGE
     ============================================ -->
<section class="switch-social-proof-section">
  <div class="section-container">
    <div class="switch-social-proof-wrapper">

      <!-- Left: Google Rating Badge (uses globals.css .rating-badge styles) -->
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
          <span class="score-number"><?php echo esc_html( ep_field( 'sp_social_rating_score', ep_option( 'google_rating', '4.7' ) ) ); ?></span>
          <div class="rating-score-detail">
            <div class="star-row">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="rating-count"><?php echo esc_html( ep_field( 'sp_social_rating_count', 'Based on 300+ reviews' ) ); ?></span>
          </div>
        </div>
        <div class="rating-footer">
          <div class="rating-location">
            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo esc_html( ep_field( 'sp_social_rating_location', 'Ashford, UK' ) ); ?></span>
          </div>
          <a href="#reviews" class="rating-link">View Reviews</a>
        </div>
      </div>

      <!-- Right: Text Content -->
      <div class="switch-social-proof-content">
        <p class="switch-social-proof-eyebrow"><?php echo esc_html( ep_field( 'sp_social_eyebrow', 'TRUSTED BY ASHFORD' ) ); ?></p>
        <h2 class="switch-social-proof-headline"><?php echo esc_html( ep_field( 'sp_social_headline', 'Join hundreds of Ashford patients who\'ve already made the switch' ) ); ?></h2>
        <p class="switch-social-proof-subtext"><?php echo esc_html( ep_field( 'sp_social_subtext', 'Trusted local pharmacy with expert weight loss, travel health, and microsuction services' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     REVSLIDER BANNER SECTION
     Inlined with ACF fields (F8) to avoid
     shared template part location rule trap.
     Purple theme override via .sp-revslider-override
     ============================================ -->
<?php
$sp_banner_badge         = ep_field( 'sp_banner_badge', 'CLINICALLY SUPERVISED PROGRAMS' );
$sp_banner_title         = ep_field( 'sp_banner_title', 'Transform Your Life with Medical Weight Loss' );
$sp_banner_subtitle      = ep_field( 'sp_banner_subtitle', 'Safe, effective weight loss programs with expert clinical support across Ashford, Chertsey, and Walton-on-Thames' );
$sp_banner_cta_text      = ep_field( 'sp_banner_cta_text', 'Start Your Journey' );
$sp_banner_cta_url       = ep_field( 'sp_banner_cta_url', ep_booking_url() );
$sp_banner_secondary     = ep_field( 'sp_banner_secondary_text', 'Serving Ashford, Chertsey & Walton' );
$sp_banner_secondary_url = ep_field( 'sp_banner_secondary_url', '#location' );
$sp_banner_image_id      = ep_field( 'sp_banner_image' );
$sp_banner_image_url     = $sp_banner_image_id ? wp_get_attachment_image_url( $sp_banner_image_id, 'full' ) : '';
?>
<section class="revslider-section sp-revslider-override" id="hero-slider">
  <div class="revslider-wrapper">
    <div class="revslider-placeholder">
      <div class="revslider-overlay"></div>
      <?php if ( $sp_banner_image_url ) : ?>
        <img src="<?php echo esc_url( $sp_banner_image_url ); ?>" alt="<?php echo esc_attr( $sp_banner_title ); ?>" class="revslider-image" />
      <?php else : ?>
        <img src="<?php echo esc_url( EASY_PHARMACY_URI . '/assets/images/slider-placeholder.jpg' ); ?>" alt="<?php echo esc_attr( $sp_banner_title ); ?>" class="revslider-image" />
      <?php endif; ?>

      <div class="revslider-content">
        <div class="revslider-container">
          <span class="revslider-badge"><?php echo esc_html( $sp_banner_badge ); ?></span>
          <h2 class="revslider-title"><?php echo esc_html( $sp_banner_title ); ?></h2>
          <p class="revslider-subtitle"><?php echo esc_html( $sp_banner_subtitle ); ?></p>
          <div class="revslider-cta">
            <a href="<?php echo esc_url( $sp_banner_cta_url ); ?>" class="revslider-btn-primary"><?php echo esc_html( $sp_banner_cta_text ); ?></a>
            <a href="<?php echo esc_url( $sp_banner_secondary_url ); ?>" class="revslider-btn-secondary"><?php echo esc_html( $sp_banner_secondary ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     EVIDENCE SECTION
     ============================================ -->
<section class="switch-evidence-section">
  <div class="section-container">
    <div class="switch-evidence-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sp_evidence_badge', 'PROVEN RESULTS' ) ); ?></span>
      </div>
      <h2 class="switch-evidence-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'sp_evidence_title_line1', 'Real data.' ) ); ?></span>
        <span class="hero-accent-text"><?php echo esc_html( ep_field( 'sp_evidence_title_line2', 'Real results.' ) ); ?></span>
      </h2>
      <p class="switch-evidence-subtitle"><?php echo esc_html( ep_field( 'sp_evidence_subtitle', 'Evidence-based care with measurable outcomes from hundreds of Ashford patients' ) ); ?></p>
    </div>

    <div class="switch-evidence-grid">
      <?php if ( have_rows( 'sp_evidence_cards' ) ) : while ( have_rows( 'sp_evidence_cards' ) ) : the_row(); ?>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></div>
          <p class="switch-evidence-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></p>
          <p class="switch-evidence-stat-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number">95%</div>
          <p class="switch-evidence-stat-label">Success Rate</p>
          <p class="switch-evidence-stat-description">of patients achieve their weight loss goals with our face-to-face support</p>
        </div>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number">12kg</div>
          <p class="switch-evidence-stat-label">Average Weight Loss</p>
          <p class="switch-evidence-stat-description">lost by our patients in just 4 months with comprehensive support</p>
        </div>
        <div class="switch-evidence-card">
          <div class="google-icon-wrapper" style="width: 4rem; height: 4rem; margin: 0 auto 1rem; box-shadow: 0 8px 24px rgba(66, 133, 244, 0.2);">
            <i class="fab fa-google" style="font-size: 2rem;"></i>
          </div>
          <div class="switch-evidence-stat-number">4.7/5</div>
          <p class="switch-evidence-stat-label">Google Reviews</p>
          <p class="switch-evidence-stat-description">from 300+ verified Ashford patients on Google</p>
        </div>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number">10%+</div>
          <p class="switch-evidence-stat-label">Body Weight Loss</p>
          <p class="switch-evidence-stat-description">achieved with our comprehensive program and ongoing support</p>
        </div>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number">9/10</div>
          <p class="switch-evidence-stat-label">Retention Rate</p>
          <p class="switch-evidence-stat-description">patients continue with us after switching from online providers</p>
        </div>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number">30+</div>
          <p class="switch-evidence-stat-label">Years of Expertise</p>
          <p class="switch-evidence-stat-description">serving the Ashford community with trusted, expert care</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     HOW TO SWITCH - TAB + CARD GRID LAYOUT
     ============================================ -->
<section class="switch-process-section">
  <div class="section-container">
    <div class="switch-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sp_process_badge', 'HOW TO SWITCH' ) ); ?></span>
      </div>
      <h2 class="switch-process-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'sp_process_title_line1', 'Make The Switch' ) ); ?></span>
        <span class="hero-accent-text"><?php echo esc_html( ep_field( 'sp_process_title_line2', ' in 2026' ) ); ?></span>
      </h2>
      <p class="switch-process-description"><?php echo esc_html( ep_field( 'sp_process_description', 'Start the new year with better support and better value. Switch to Easy Pharmacy in under 5 minutes.' ) ); ?></p>
    </div>

    <?php
    // Default steps data
    $default_steps = array(
        array( 'title' => 'Book Consultation', 'description' => 'Visit us in Ashford or book a phone consultation. Tell us about your current treatment and goals.', 'image' => '' ),
        array( 'title' => 'We Handle Everything', 'description' => 'No prescription transfer needed. Our team manages the entire switch seamlessly for you.', 'image' => '' ),
        array( 'title' => 'Zero Treatment Gap', 'description' => 'Continue your programme without interruption. Same-day approval available for seamless care.', 'image' => '' ),
        array( 'title' => 'Face-to-Face Support', 'description' => 'Ongoing monthly check-ins at our Ashford pharmacy with expert guidance and personalized care.', 'image' => '' ),
    );

    $default_images = array(
        'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&h=500&fit=crop',
        'https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?w=800&h=500&fit=crop',
        'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=800&h=500&fit=crop',
        'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=800&h=500&fit=crop',
    );

    $has_steps = have_rows( 'sp_process_steps' );
    $steps     = array();

    if ( $has_steps ) {
        while ( have_rows( 'sp_process_steps' ) ) {
            the_row();
            $img_id  = get_sub_field( 'image' );
            $img_url = $img_id ? wp_get_attachment_image_url( $img_id, 'medium_large' ) : '';
            $steps[] = array(
                'title'       => get_sub_field( 'title' ),
                'description' => get_sub_field( 'description' ),
                'image'       => $img_url,
            );
        }
    } else {
        foreach ( $default_steps as $i => $step ) {
            $step['image'] = $default_images[ $i ];
            $steps[]       = $step;
        }
    }
    ?>

    <!-- Numbered Tabs Navigation -->
    <div class="process-tabs-navigation">
      <?php foreach ( $steps as $i => $step ) : ?>
        <div class="process-tab-slide<?php echo $i === 0 ? ' process-tab-active' : ''; ?>" data-step="<?php echo esc_attr( $i + 1 ); ?>">
          <span class="process-tab-counter"><?php echo esc_html( $i + 1 ); ?></span>
          <strong class="process-tab-title"><?php echo esc_html( $step['title'] ); ?></strong>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Step Content Cards Grid -->
    <div class="process-content-grid">
      <?php foreach ( $steps as $i => $step ) : ?>
        <div class="process-content-card" data-step="<?php echo esc_attr( $i + 1 ); ?>">
          <?php if ( $step['image'] ) : ?>
            <figure class="process-card-image">
              <img src="<?php echo esc_url( $step['image'] ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>" />
            </figure>
          <?php endif; ?>
          <h4 class="process-card-title"><?php echo esc_html( $step['title'] ); ?></h4>
          <p class="process-card-description"><?php echo esc_html( $step['description'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- What's Included Box -->
    <div class="process-included-box">
      <div class="process-included-content">
        <p class="process-included-eyebrow"><?php echo esc_html( ep_field( 'sp_included_eyebrow', 'Access to your own member concierge' ) ); ?></p>
        <h4 class="process-included-title"><?php echo esc_html( ep_field( 'sp_included_title', 'What\'s Included' ) ); ?></h4>
        <ul class="process-included-list">
          <?php if ( have_rows( 'sp_included_items' ) ) : while ( have_rows( 'sp_included_items' ) ) : the_row(); ?>
            <li>
              <i class="fas fa-check-circle"></i>
              <span><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
            </li>
          <?php endwhile; else : ?>
            <li><i class="fas fa-check-circle"></i><span>Easily book appointments via phone or email</span></li>
            <li><i class="fas fa-check-circle"></i><span>Easy access to your health records and diagnostic results</span></li>
            <li><i class="fas fa-check-circle"></i><span>We work with a panel of specialist consultants to ensure you have access to fast referrals to secondary care</span></li>
            <li><i class="fas fa-check-circle"></i><span>Repeat prescriptions can be requested at any time from your member concierge team</span></li>
            <li><i class="fas fa-check-circle"></i><span>Use your membership at any Easy Pharmacy location convenient to you</span></li>
          <?php endif; ?>
        </ul>
        <div class="process-included-cta">
          <a href="<?php echo esc_url( ep_field( 'sp_included_cta_url', ep_booking_url() ) ); ?>" class="process-cta-button">
            <span class="button-title"><?php echo esc_html( ep_field( 'sp_included_cta_text', 'Register Now' ) ); ?></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     FINAL CTA SECTION
     ============================================ -->
<section class="switch-cta-section">
  <div class="switch-cta-glow-1"></div>
  <div class="switch-cta-glow-2"></div>
  <div class="switch-cta-dots"></div>
  <div class="section-container">
    <div class="switch-cta-content">
      <h2 class="switch-cta-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'sp_cta_title_line1', 'Ready to Make' ) ); ?></span>
        <span class="gradient-text"><?php echo esc_html( ep_field( 'sp_cta_title_line2', ' the Switch?' ) ); ?></span>
      </h2>
      <p class="switch-cta-description">
        <?php echo esc_html( ep_field( 'sp_cta_description', 'Join hundreds of Ashford patients who\'ve chosen local, expert care over faceless online providers.' ) ); ?>
      </p>
      <div class="switch-cta-actions">
        <a href="<?php echo esc_url( ep_booking_url() ); ?>" class="cta-button primary-cta switch-cta-button-white">
          <?php echo esc_html( ep_field( 'sp_cta_button_text', 'Start Your Switch Today' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta switch-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( ep_phone() ); ?>
        </a>
      </div>
      <div class="switch-cta-checks">
        <div class="switch-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'sp_cta_check_1', 'No waiting list' ) ); ?></span>
        </div>
        <div class="switch-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'sp_cta_check_2', 'Same-day approval' ) ); ?></span>
        </div>
        <div class="switch-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'sp_cta_check_3', 'Transparent pricing' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
