<?php
/**
 * Template Name: Switch Provider
 * @package Denton_Pharmacy
 */

get_header();
?>

<!-- ============================================
     H1. HERO SECTION — Pattern A Light (warm cream)
     Split layout: content left, image card right with floating elements
     ============================================ -->
<?php
// --- Hero content ---
$sp_badge      = dp_field( 'sp_hero_badge', 'SWITCH TO DENTON PHARMACY' );
$sp_line1      = dp_field( 'sp_hero_title_line1', 'Frustrated with' );
$sp_line2      = dp_field( 'sp_hero_title_line2', 'Your Current' );
$sp_line3      = dp_field( 'sp_hero_title_line3', 'Weight Loss Provider?' );
$sp_subtitle   = dp_field( 'sp_hero_subtitle', 'Switch to Denton Pharmacy for expert care, transparent pricing, and ongoing pharmacist support. No waiting lists.' );
$sp_cta_text   = dp_field( 'sp_hero_cta_text', 'Start Your Switch Today' );
$sp_cta_url    = dp_field( 'sp_hero_cta_url', '#comparison' );

// --- Hero image ---
$sp_hero_image_id  = dp_field( 'sp_hero_image' );
$sp_hero_image_url = $sp_hero_image_id ? wp_get_attachment_image_url( $sp_hero_image_id, 'full' ) : '';
if ( ! $sp_hero_image_url ) {
    $pharmacist_id = dp_option( 'pharmacist_image' );
    $sp_hero_image_url = $pharmacist_id ? wp_get_attachment_image_url( $pharmacist_id, 'full' ) : '';
}

// --- Testimonial ---
$sp_testi_quote  = dp_field( 'sp_hero_testimonial_text', 'Ahmed genuinely cares about your progress. The face-to-face support makes all the difference.' );
$sp_testi_name   = dp_field( 'sp_hero_testimonial_name', 'Denton Patient' );
$sp_testi_result = dp_field( 'sp_hero_testimonial_result', '3 Stone Lost' );
?>

<section class="switch-hero-section switch-reveal">
  <!-- Decorative blobs -->
  <div class="switch-hero-glow switch-hero-glow-1"></div>
  <div class="switch-hero-glow switch-hero-glow-2"></div>

  <div class="section-container">
    <div class="switch-hero-grid">

      <!-- Left Content -->
      <div class="switch-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( $sp_badge ); ?></span>
        </div>

        <h1 class="switch-hero-title">
          <?php echo esc_html( $sp_line1 ); ?><br />
          <span class="switch-hero-title-accent"><?php echo esc_html( $sp_line2 ); ?></span><br />
          <span class="switch-hero-title-bold"><?php echo esc_html( $sp_line3 ); ?></span>
        </h1>

        <p class="switch-hero-subtitle">
          <?php echo esc_html( $sp_subtitle ); ?>
        </p>

        <div class="switch-hero-actions">
          <a href="<?php echo esc_url( $sp_cta_url ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( $sp_cta_text ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( dp_phone() ); ?>
          </a>
        </div>

        <!-- Trust Badges -->
        <div class="switch-hero-trust-row">
          <div class="switch-hero-trust-pill">
            <i class="fas fa-bolt"></i>
            <span><?php echo esc_html( dp_field( 'sp_hero_trust_1', 'Zero Gap in Treatment' ) ); ?></span>
          </div>
          <div class="switch-hero-trust-pill">
            <i class="fas fa-calendar-check"></i>
            <span><?php echo esc_html( dp_field( 'sp_hero_trust_2', 'Same Day Appointments' ) ); ?></span>
          </div>
          <div class="switch-hero-trust-pill">
            <i class="fas fa-user-doctor"></i>
            <span><?php echo esc_html( dp_field( 'sp_hero_trust_3', 'Face-to-Face Care' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Image card with floating elements -->
      <div class="switch-hero-visual">
        <div class="switch-hero-visual-glow"></div>

        <!-- Floating price badge -->
        <div class="switch-hero-price-badge">
          <i class="fas fa-tag"></i>
          <div class="switch-hero-price-content">
            <span class="switch-hero-price-label"><?php echo esc_html( dp_field( 'sp_hero_price_label', 'FROM' ) ); ?></span>
            <span class="switch-hero-price-amount"><?php echo esc_html( dp_field( 'sp_hero_price_amount', '£125/mo' ) ); ?></span>
          </div>
        </div>

        <!-- Main image card -->
        <div class="switch-hero-image-card">
          <?php if ( $sp_hero_image_url ) : ?>
            <img src="<?php echo esc_url( $sp_hero_image_url ); ?>" alt="<?php echo esc_attr( dp_field( 'sp_hero_image_alt', 'Ahmed, Lead Pharmacist at Denton Pharmacy' ) ); ?>" class="switch-hero-image" />
          <?php endif; ?>
        </div>

        <!-- Testimonial card -->
        <div class="switch-hero-testimonial-card">
          <div class="switch-hero-quote-icon">
            <i class="fas fa-quote-left"></i>
          </div>
          <p class="switch-hero-quote-text">"<?php echo esc_html( $sp_testi_quote ); ?>"</p>
          <div class="switch-hero-quote-footer">
            <div class="switch-hero-author">
              <span class="switch-hero-name"><?php echo esc_html( $sp_testi_name ); ?></span>
              <div class="star-row">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
            <div class="switch-hero-result-badge">
              <i class="fas fa-weight-scale"></i>
              <span><?php echo esc_html( $sp_testi_result ); ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile testimonial -->
      <div class="switch-hero-testimonial-mobile mobile-only">
        <div class="switch-hero-quote-icon">
          <i class="fas fa-quote-left"></i>
        </div>
        <p class="switch-hero-quote-text">"<?php echo esc_html( $sp_testi_quote ); ?>"</p>
        <div class="switch-hero-quote-footer">
          <div class="switch-hero-author">
            <span class="switch-hero-name"><?php echo esc_html( $sp_testi_name ); ?></span>
            <div class="star-row">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
          </div>
          <div class="switch-hero-result-badge">
            <i class="fas fa-weight-scale"></i>
            <span><?php echo esc_html( $sp_testi_result ); ?></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     H2. STATS BAR — Negative margin overlap
     Glassmorphic, z-index: 20, individual fields × 4
     ============================================ -->
<section class="stats-section switch-stats-overlap switch-reveal">
  <div class="section-container">
    <div class="stats-bar">
      <div class="stat-item">
        <div class="stat-icon"><i class="<?php echo esc_attr( dp_fa_class( dp_field( 'sp_stat_1_icon', 'fa-weight-scale' ) ) ); ?>"></i></div>
        <div class="stat-content">
          <span class="stat-number"><?php echo esc_html( dp_field( 'sp_stat_1_number', '2.5st' ) ); ?></span>
          <span class="stat-label"><?php echo esc_html( dp_field( 'sp_stat_1_label', 'Avg Loss' ) ); ?></span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="<?php echo esc_attr( dp_fa_class( dp_field( 'sp_stat_2_icon', 'fa-users' ) ) ); ?>"></i></div>
        <div class="stat-content">
          <span class="stat-number"><?php echo esc_html( dp_field( 'sp_stat_2_number', 'Hundreds' ) ); ?></span>
          <span class="stat-label"><?php echo esc_html( dp_field( 'sp_stat_2_label', 'Patients Switched' ) ); ?></span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="<?php echo esc_attr( dp_fa_class( dp_field( 'sp_stat_3_icon', 'fa-star' ) ) ); ?>"></i></div>
        <div class="stat-content">
          <span class="stat-number"><?php echo esc_html( dp_field( 'sp_stat_3_number', '4.9/5' ) ); ?></span>
          <span class="stat-label"><?php echo esc_html( dp_field( 'sp_stat_3_label', 'Google Rating' ) ); ?></span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="<?php echo esc_attr( dp_fa_class( dp_field( 'sp_stat_4_icon', 'fa-location-dot' ) ) ); ?>"></i></div>
        <div class="stat-content">
          <span class="stat-number"><?php echo esc_html( dp_field( 'sp_stat_4_number', 'Denton' ) ); ?></span>
          <span class="stat-label"><?php echo esc_html( dp_field( 'sp_stat_4_label', 'Based Care' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     H6. PROCESS — Steps for switching
     Tab navigation + content cards + What's Included box
     ============================================ -->
<section class="switch-process-section switch-reveal">
  <div class="section-container">
    <div class="switch-process-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'sp_process_badge', 'HOW TO SWITCH' ) ); ?></span>
      </div>
      <h2 class="switch-process-title">
        <span class="gradient-text"><?php echo esc_html( dp_field( 'sp_process_title_line1', 'Make The Switch' ) ); ?></span>
        <span class="hero-accent-text"><?php echo esc_html( dp_field( 'sp_process_title_line2', ' Today' ) ); ?></span>
      </h2>
      <p class="switch-process-description"><?php echo esc_html( dp_field( 'sp_process_description', 'Switch to Denton Pharmacy in under 5 minutes. Better support, better value, better results.' ) ); ?></p>
    </div>

    <?php
    // Default steps data
    $default_steps = array(
        array( 'title' => 'Book Consultation', 'description' => 'Visit us in Denton or <a href="' . esc_url( dp_booking_url() ) . '">book a consultation online</a>. Tell us about your current treatment and goals.', 'image' => '' ),
        array( 'title' => 'We Handle Everything', 'description' => 'No prescription transfer needed. Our team manages the entire switch seamlessly for you.', 'image' => '' ),
        array( 'title' => 'Zero Treatment Gap', 'description' => 'Continue your programme without interruption. Same-day approval available for seamless care.', 'image' => '' ),
        array( 'title' => 'Face-to-Face Support', 'description' => 'Ongoing monthly check-ins at our Denton pharmacy with expert guidance and personalised care.', 'image' => '' ),
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
        $steps = $default_steps;
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
          <?php if ( ! empty( $step['image'] ) ) : ?>
            <figure class="process-card-image">
              <img src="<?php echo esc_url( $step['image'] ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>" />
            </figure>
          <?php endif; ?>
          <h4 class="process-card-title"><?php echo esc_html( $step['title'] ); ?></h4>
          <p class="process-card-description"><?php echo wp_kses_post( $step['description'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- What's Included Box -->
    <div class="process-included-box">
      <div class="process-included-grid">

        <!-- Left: Checklist -->
        <div class="process-included-content">
          <p class="process-included-eyebrow"><?php echo esc_html( dp_field( 'sp_included_eyebrow', 'Your complete switching package' ) ); ?></p>
          <h4 class="process-included-title"><?php echo esc_html( dp_field( 'sp_included_title', 'What\'s Included' ) ); ?></h4>
          <ul class="process-included-list">
            <?php if ( have_rows( 'sp_included_items' ) ) : while ( have_rows( 'sp_included_items' ) ) : the_row(); ?>
              <li>
                <i class="fas fa-check-circle"></i>
                <span><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
              </li>
            <?php endwhile; else : ?>
              <li><i class="fas fa-check-circle"></i><span>Monthly face-to-face consultation with Ahmed</span></li>
              <li><i class="fas fa-check-circle"></i><span>Medication included in your monthly plan</span></li>
              <li><i class="fas fa-check-circle"></i><span>Blood pressure, weight, and health monitoring</span></li>
              <li><i class="fas fa-check-circle"></i><span>Direct phone and email access between appointments</span></li>
              <li><i class="fas fa-check-circle"></i><span>Personalised diet and lifestyle guidance</span></li>
            <?php endif; ?>
          </ul>
          <div class="process-included-cta">
            <a href="<?php echo esc_url( dp_field( 'sp_included_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta">
              <?php echo esc_html( dp_field( 'sp_included_cta_text', 'Start Your Switch' ) ); ?>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Right: Price + value summary -->
        <div class="process-included-value">
          <div class="process-included-price-card">
            <span class="process-included-price-from">From</span>
            <span class="process-included-price-amount"><?php echo esc_html( dp_field( 'sp_hero_price_amount', '£125/mo' ) ); ?></span>
            <span class="process-included-price-note">All-inclusive monthly plan</span>
            <div class="process-included-price-divider"></div>
            <div class="process-included-price-features">
              <div class="process-included-price-feature">
                <i class="fas fa-bolt"></i>
                <span>Zero gap in treatment</span>
              </div>
              <div class="process-included-price-feature">
                <i class="fas fa-user-doctor"></i>
                <span>Face-to-face with Ahmed</span>
              </div>
              <div class="process-included-price-feature">
                <i class="fas fa-pills"></i>
                <span>Medication included</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ============================================
     H3. COMPARISON SECTION — 3-card grid
     Problem / Featured (Denton Pharmacy) / Benefits
     ============================================ -->
<section class="switch-comparison-section switch-reveal" id="comparison">
  <div class="section-container">
    <!-- Section Header -->
    <div class="comparison-section-header">
      <div class="comparison-header-wrapper">
        <div class="comparison-header-accent-line"></div>
        <div class="section-header">
          <p class="comparison-header-badge"><?php echo esc_html( dp_field( 'sp_compare_badge', 'THE DENTON PHARMACY DIFFERENCE' ) ); ?></p>
        </div>
      </div>
      <h2 class="comparison-section-title"><?php echo esc_html( dp_field( 'sp_compare_title', 'Compare Your Options' ) ); ?></h2>
      <div class="comparison-title-underline"></div>
      <p class="comparison-section-description"><?php echo esc_html( dp_field( 'sp_compare_description', 'See the difference face-to-face care makes for your weight loss journey' ) ); ?></p>
    </div>

    <!-- 3-Card Comparison Layout -->
    <div class="comparison-cards-grid">

      <!-- CARD 1: THE PROBLEM -->
      <div class="comparison-card comparison-card-problem">
        <div class="comparison-card-glow"></div>
        <div class="comparison-card-header">
          <div class="comparison-card-icon comparison-card-icon-gray">
            <i class="<?php echo esc_attr( dp_field( 'sp_card1_icon', 'fas fa-laptop' ) ); ?>"></i>
          </div>
          <span class="comparison-card-badge comparison-card-badge-red"><?php echo esc_html( dp_field( 'sp_card1_badge', 'ONLINE ONLY' ) ); ?></span>
        </div>
        <h3 class="comparison-card-title"><?php echo esc_html( dp_field( 'sp_card1_title', 'National Providers' ) ); ?></h3>
        <p class="comparison-card-subtitle"><?php echo esc_html( dp_field( 'sp_card1_subtitle', 'Remote-only weight loss services' ) ); ?></p>
        <div class="comparison-card-pricing">
          <div class="comparison-card-price-row">
            <span class="comparison-card-price"><?php echo esc_html( dp_field( 'sp_card1_price', '£250+' ) ); ?></span>
            <span class="comparison-card-price-period"><?php echo esc_html( dp_field( 'sp_card1_price_period', '/month' ) ); ?></span>
          </div>
          <p class="comparison-card-price-note"><?php echo esc_html( dp_field( 'sp_card1_price_note', 'Plus hidden consultation fees' ) ); ?></p>
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
              <span class="comparison-card-feature-text">Video calls only — no face-to-face</span>
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
          <p class="comparison-card-footer-text"><?php echo esc_html( dp_field( 'sp_card1_footer', 'What you\'re leaving behind' ) ); ?></p>
        </div>
      </div>

      <!-- CARD 2: DENTON PHARMACY (FEATURED) -->
      <div class="comparison-card comparison-card-featured">
        <div class="comparison-card-glow-purple"></div>
        <div class="comparison-card-glow-bottom"></div>
        <div class="comparison-card-recommended-badge">
          <div class="comparison-card-recommended-badge-inner"><?php echo esc_html( dp_field( 'sp_card2_recommended', 'RECOMMENDED' ) ); ?></div>
        </div>
        <div class="comparison-card-inner">
          <div class="comparison-card-header">
            <div class="comparison-card-icon comparison-card-icon-purple">
              <i class="<?php echo esc_attr( dp_field( 'sp_card2_icon', 'fas fa-heart-pulse' ) ); ?>"></i>
            </div>
            <span class="comparison-card-badge comparison-card-badge-purple"><?php echo esc_html( dp_field( 'sp_card2_badge', 'DENTON BASED' ) ); ?></span>
          </div>
          <h3 class="comparison-card-title"><?php echo esc_html( dp_field( 'sp_card2_title', 'Denton Pharmacy' ) ); ?></h3>
          <p class="comparison-card-subtitle comparison-card-subtitle-purple"><?php echo esc_html( dp_field( 'sp_card2_subtitle', 'Face-to-face weight loss care' ) ); ?></p>
          <div class="comparison-card-pricing">
            <div class="comparison-card-price-row">
              <span class="comparison-card-price comparison-card-price-purple"><?php echo esc_html( dp_field( 'sp_card2_price', 'From £125' ) ); ?></span>
              <span class="comparison-card-price-period"><?php echo esc_html( dp_field( 'sp_card2_price_period', '/month' ) ); ?></span>
            </div>
            <p class="comparison-card-price-note"><?php echo esc_html( dp_field( 'sp_card2_price_note', 'All-inclusive with face-to-face support' ) ); ?></p>
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
                <span class="comparison-card-feature-text comparison-card-feature-text-bold">Monthly face-to-face appointments in Denton</span>
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
          <a href="<?php echo esc_url( dp_booking_url() ); ?>" class="comparison-card-cta-button">
            <span class="comparison-card-cta-content">
              <?php echo esc_html( dp_field( 'sp_card2_cta_text', 'Make The Switch' ) ); ?>
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
            <i class="<?php echo esc_attr( dp_field( 'sp_card3_icon', 'fas fa-trophy' ) ); ?>"></i>
          </div>
          <span class="comparison-card-badge comparison-card-badge-light-purple"><?php echo esc_html( dp_field( 'sp_card3_badge', 'YOUR BENEFITS' ) ); ?></span>
        </div>
        <h3 class="comparison-card-title"><?php echo esc_html( dp_field( 'sp_card3_title', 'What You Gain' ) ); ?></h3>
        <p class="comparison-card-subtitle"><?php echo esc_html( dp_field( 'sp_card3_subtitle', 'The Denton Pharmacy advantage' ) ); ?></p>
        <div class="comparison-card-value-section">
          <div class="comparison-card-value-row">
            <i class="fas fa-heart comparison-card-value-icon"></i>
            <div class="comparison-card-value-text">
              <span class="comparison-card-value-title"><?php echo esc_html( dp_field( 'sp_card3_value_title', 'Better Value' ) ); ?></span>
              <span class="comparison-card-value-subtitle"><?php echo esc_html( dp_field( 'sp_card3_value_subtitle', 'Competitive pricing' ) ); ?></span>
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
              <span class="comparison-card-feature-text">Convenient Denton location with parking</span>
            </li>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
              <span class="comparison-card-feature-text">Trusted local expertise and care</span>
            </li>
            <li class="comparison-card-feature">
              <div class="comparison-card-feature-icon comparison-card-feature-icon-purple"><i class="fas fa-check"></i></div>
              <span class="comparison-card-feature-text">Support a Denton independent business</span>
            </li>
          <?php endif; ?>
        </ul>
        <a class="comparison-card-secondary-button" href="<?php echo esc_url( home_url( '/team/' ) ); ?>">
          <?php echo esc_html( dp_field( 'sp_card3_cta_text', 'Meet the Team' ) ); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     H4. EVIDENCE / COMPARISON DETAIL — Extended breakdown
     Stat cards with gradient numbers
     ============================================ -->
<section class="switch-evidence-section switch-reveal">
  <div class="section-container">
    <div class="switch-evidence-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'sp_evidence_badge', 'PROVEN RESULTS' ) ); ?></span>
      </div>
      <h2 class="switch-evidence-title">
        <span class="gradient-text"><?php echo esc_html( dp_field( 'sp_evidence_title_line1', 'Real data.' ) ); ?></span>
        <span class="hero-accent-text"><?php echo esc_html( dp_field( 'sp_evidence_title_line2', 'Real results.' ) ); ?></span>
      </h2>
      <p class="switch-evidence-subtitle"><?php echo esc_html( dp_field( 'sp_evidence_subtitle', 'Evidence-based care with measurable outcomes from hundreds of Denton patients' ) ); ?></p>
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
          <div class="switch-evidence-stat-number">4.9/5</div>
          <p class="switch-evidence-stat-label">Google Reviews</p>
          <p class="switch-evidence-stat-description">from verified Denton patients on Google</p>
        </div>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number">10%+</div>
          <p class="switch-evidence-stat-label">Body Weight Loss</p>
          <p class="switch-evidence-stat-description">achieved with our comprehensive programme and ongoing support</p>
        </div>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number">9/10</div>
          <p class="switch-evidence-stat-label">Retention Rate</p>
          <p class="switch-evidence-stat-description">patients continue with us after switching from online providers</p>
        </div>
        <div class="switch-evidence-card">
          <div class="switch-evidence-stat-number">GPhC</div>
          <p class="switch-evidence-stat-label">Registered Pharmacy</p>
          <p class="switch-evidence-stat-description">fully regulated and inspected by the General Pharmaceutical Council</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     H5. BENEFITS — Feature cards grid
     Why patients switch to Denton Pharmacy
     ============================================ -->
<section class="switch-benefits-section switch-reveal">
  <div class="section-container">
    <div class="switch-benefits-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'sp_benefits_badge', 'WHY SWITCH' ) ); ?></span>
      </div>
      <h2 class="switch-benefits-title">
        <span class="gradient-text"><?php echo esc_html( dp_field( 'sp_benefits_title_line1', 'The Benefits of' ) ); ?></span>
        <span class="hero-accent-text"><?php echo esc_html( dp_field( 'sp_benefits_title_line2', ' Switching' ) ); ?></span>
      </h2>
      <p class="switch-benefits-description"><?php echo esc_html( dp_field( 'sp_benefits_description', 'Discover why patients across Greater Manchester are choosing Denton Pharmacy for their weight loss care' ) ); ?></p>
    </div>

    <div class="switch-benefits-grid">
      <?php if ( have_rows( 'sp_benefits' ) ) : while ( have_rows( 'sp_benefits' ) ) : the_row(); ?>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon">
            <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h3 class="switch-benefit-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="switch-benefit-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-user-doctor"></i></div>
          <h3 class="switch-benefit-title">Face-to-Face Care</h3>
          <p class="switch-benefit-description">Monthly in-person consultations with Ahmed, your dedicated pharmacist who knows your history</p>
        </div>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-shield-halved"></i></div>
          <h3 class="switch-benefit-title">Same Pharmacist</h3>
          <p class="switch-benefit-description">No more explaining your story to a different clinician every time — continuity of care guaranteed</p>
        </div>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-clock"></i></div>
          <h3 class="switch-benefit-title">No Waiting Lists</h3>
          <p class="switch-benefit-description">Same-day and next-day appointments available. Start or continue your treatment without delay</p>
        </div>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-tag"></i></div>
          <h3 class="switch-benefit-title">Transparent Pricing</h3>
          <p class="switch-benefit-description">All-inclusive pricing from £125/month. No hidden fees, no surprise charges, no extras</p>
        </div>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-map-marker-alt"></i></div>
          <h3 class="switch-benefit-title">Local Expertise</h3>
          <p class="switch-benefit-description">Trusted by the Denton community with free parking and convenient access from across Greater Manchester</p>
        </div>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-comments"></i></div>
          <h3 class="switch-benefit-title">Ongoing Support</h3>
          <p class="switch-benefit-description">Direct phone and email access to your pharmacist between appointments for questions and support</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     H5b. SOCIAL PROOF BAND — Full-width lifestyle image with testimonial overlay
     ============================================ -->
<?php
$sp_band_image_id = dp_field( 'sp_band_image' );
$sp_band_image_url = $sp_band_image_id ? wp_get_attachment_image_url( $sp_band_image_id, 'full' ) : '';
$sp_band_quote     = dp_field( 'sp_band_quote', 'I was with a national provider for months and felt like just a number. Switching to Ahmed at Denton Pharmacy changed everything — real face-to-face care, no waiting lists, and I\'ve lost 3 stone in 4 months.' );
$sp_band_author    = dp_field( 'sp_band_author', 'Sarah M.' );
$sp_band_result    = dp_field( 'sp_band_result', '3 Stone Lost' );
$sp_band_location  = dp_field( 'sp_band_location', 'Switched from National Provider' );
$sp_band_stat_num  = dp_field( 'sp_band_stat_number', '95%' );
$sp_band_stat_text = dp_field( 'sp_band_stat_label', 'of patients recommend switching to Denton Pharmacy' );
?>

<section class="switch-band-section switch-reveal">
  <!-- Background image -->
  <div class="switch-band-bg">
    <?php if ( $sp_band_image_url ) : ?>
      <img src="<?php echo esc_url( $sp_band_image_url ); ?>" alt="Denton Pharmacy patient consultation" class="switch-band-bg-image" />
    <?php endif; ?>
    <div class="switch-band-overlay"></div>
  </div>

  <div class="section-container">
    <div class="switch-band-grid">

      <!-- Left: Stat callout -->
      <div class="switch-band-stat">
        <span class="switch-band-stat-number"><?php echo esc_html( $sp_band_stat_num ); ?></span>
        <span class="switch-band-stat-label"><?php echo esc_html( $sp_band_stat_text ); ?></span>
      </div>

      <!-- Right: Testimonial card -->
      <div class="switch-band-testimonial">
        <div class="switch-band-quote-icon">
          <i class="fas fa-quote-left"></i>
        </div>
        <p class="switch-band-quote">"<?php echo esc_html( $sp_band_quote ); ?>"</p>
        <div class="switch-band-footer">
          <div class="switch-band-author-info">
            <span class="switch-band-author-name"><?php echo esc_html( $sp_band_author ); ?></span>
            <span class="switch-band-author-location"><?php echo esc_html( $sp_band_location ); ?></span>
            <div class="star-row">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
          </div>
          <?php if ( $sp_band_result ) : ?>
            <div class="switch-band-result">
              <i class="fas fa-weight-scale"></i>
              <span><?php echo esc_html( $sp_band_result ); ?></span>
            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     H7. FINAL CTA — Purple gradient
     ============================================ -->
<section class="switch-cta-section switch-reveal">
  <div class="switch-cta-glow-1"></div>
  <div class="switch-cta-glow-2"></div>
  <div class="switch-cta-dots"></div>
  <div class="section-container">
    <div class="switch-cta-content">
      <h2 class="switch-cta-title">
        <span class="gradient-text"><?php echo esc_html( dp_field( 'sp_cta_title_line1', 'Ready to Make' ) ); ?></span>
        <span class="gradient-text"><?php echo esc_html( dp_field( 'sp_cta_title_line2', ' the Switch?' ) ); ?></span>
      </h2>
      <p class="switch-cta-description">
        <?php echo esc_html( dp_field( 'sp_cta_description', 'Join hundreds of patients who\'ve chosen local, expert care over faceless online providers.' ) ); ?>
      </p>
      <div class="switch-cta-actions">
        <a href="<?php echo esc_url( dp_booking_url() ); ?>" class="cta-button primary-cta switch-cta-button-white">
          <?php echo esc_html( dp_field( 'sp_cta_button_text', 'Start Your Switch Today' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta switch-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( dp_phone() ); ?>
        </a>
      </div>
      <div class="switch-cta-checks">
        <div class="switch-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( dp_field( 'sp_cta_check_1', 'No waiting list' ) ); ?></span>
        </div>
        <div class="switch-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( dp_field( 'sp_cta_check_2', 'Same-day approval' ) ); ?></span>
        </div>
        <div class="switch-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( dp_field( 'sp_cta_check_3', 'Transparent pricing' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
