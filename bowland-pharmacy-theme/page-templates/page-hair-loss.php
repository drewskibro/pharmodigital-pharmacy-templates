<?php
/**
 * Template Name: Hair Loss Treatment
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- ============================================
     G1. HERO — Warm gradient, 2-column
     ============================================ -->
<section class="hairloss-hero-section">
  <div class="hairloss-hero-bg"></div>
  <div class="hairloss-hero-dots"></div>
  <div class="hairloss-hero-glow-1"></div>
  <div class="hairloss-hero-glow-2"></div>

  <div class="section-container">
    <div class="hairloss-hero-grid">

      <div class="hairloss-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_hero_badge', 'HAIR LOSS TREATMENT' ) ); ?></span>
        </div>

        <h1 class="hairloss-hero-title">
          <?php echo esc_html( bp_field( 'hl_hero_title_line1', 'Regrow Your Confidence with' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'hl_hero_title_highlight', 'Expert Hair Loss Treatment' ) ); ?></span>
        </h1>

        <p class="hairloss-hero-description">
          <?php echo esc_html( bp_field( 'hl_hero_description', 'Clinically proven treatments including Finasteride and Minoxidil. Face-to-face consultations with our GPhC-registered pharmacist in ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) . '.' ) ); ?>
        </p>

        <ul class="hairloss-hero-features">
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html( bp_field( 'hl_feature_1', 'Prescription treatments (Finasteride)' ) ); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html( bp_field( 'hl_feature_2', 'Over-the-counter solutions (Minoxidil)' ) ); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html( bp_field( 'hl_feature_3', 'Personalised treatment plans' ) ); ?></li>
        </ul>

        <div class="hairloss-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'hl_hero_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( bp_field( 'hl_hero_cta_text', 'Book Consultation' ) ); ?> <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i> <?php echo esc_html( bp_phone() ); ?>
          </a>
        </div>
      </div>

      <div class="hairloss-hero-visual">
        <div class="hairloss-hero-image-card">
          <?php
          $hero_image_id  = bp_field( 'hl_hero_image' );
          $hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';
          if ( $hero_image_url ) : ?>
            <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( bp_field( 'hl_hero_image_alt', 'Hair loss treatment at ' . bp_pharmacy_name() ) ); ?>" class="hairloss-hero-image" />
            <div class="hairloss-hero-overlay"></div>
            <div class="hairloss-hero-caption">
              <div class="star-row">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <p><?php echo esc_html( bp_field( 'hl_hero_caption', 'Real results from our patients' ) ); ?></p>
            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     G2. STATS BAR — Purple gradient, 4-column
     ============================================ -->
<section class="hairloss-stats-section">
  <div class="hairloss-stats-shimmer"></div>
  <div class="section-container">
    <div class="hairloss-stats-grid">
      <?php
      $stats = array(
        array( 'icon' => 'hl_stat_1_icon', 'number' => 'hl_stat_1_number', 'label' => 'hl_stat_1_label', 'def_icon' => 'fas fa-users', 'def_number' => '500+', 'def_label' => 'Patients Treated' ),
        array( 'icon' => 'hl_stat_2_icon', 'number' => 'hl_stat_2_number', 'label' => 'hl_stat_2_label', 'def_icon' => 'fas fa-certificate', 'def_number' => 'GPhC', 'def_label' => 'Registered' ),
        array( 'icon' => 'hl_stat_3_icon', 'number' => 'hl_stat_3_number', 'label' => 'hl_stat_3_label', 'def_icon' => 'fas fa-calendar-check', 'def_number' => '6-12 Months', 'def_label' => 'Typical Results' ),
        array( 'icon' => 'hl_stat_4_icon', 'number' => 'hl_stat_4_number', 'label' => 'hl_stat_4_label', 'def_icon' => 'fas fa-star', 'def_number' => '4.7&#9733;', 'def_label' => 'Average Rating' ),
      );
      foreach ( $stats as $stat ) :
        $icon   = bp_field( $stat['icon'], $stat['def_icon'] );
        $number = bp_field( $stat['number'], $stat['def_number'] );
        $label  = bp_field( $stat['label'], $stat['def_label'] );
      ?>
        <div class="hairloss-stat-item">
          <div class="hairloss-stat-icon"><i class="<?php echo esc_attr( bp_fa_class( $icon ) ); ?>"></i></div>
          <div class="hairloss-stat-content">
            <span class="hairloss-stat-number"><?php echo $number; ?></span>
            <span class="hairloss-stat-label"><?php echo esc_html( $label ); ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================
     G3. RESULTS / FEATURES — Treatment cards with metrics
     ============================================ -->
<section class="hairloss-treatments-section">
  <div class="section-container">
    <div class="hairloss-treatments-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_treatments_badge', 'PRESCRIPTION & OTC' ) ); ?></span>
      </div>
      <h2 class="hairloss-treatments-title"><?php echo esc_html( bp_field( 'hl_treatments_title_line1', 'Our' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'hl_treatments_title_highlight', 'Hair Loss Treatments' ) ); ?></span></h2>
      <p class="hairloss-treatments-desc"><?php echo esc_html( bp_field( 'hl_treatments_description', 'Clinically proven treatments prescribed and monitored by our GPhC-registered pharmacist at ' . bp_pharmacy_name() . '.' ) ); ?></p>
    </div>

    <div class="hairloss-treatments-grid">
      <?php if ( have_rows( 'hl_treatments' ) ) : while ( have_rows( 'hl_treatments' ) ) : the_row(); ?>
        <?php $is_featured = get_sub_field( 'is_featured' ); ?>
        <div class="hairloss-treatment-card">
          <?php if ( $is_featured ) : ?><div class="hairloss-treatment-glow"></div><?php endif; ?>
          <div class="hairloss-treatment-badge <?php echo esc_attr( get_sub_field( 'badge_type' ) ); ?>"><?php echo esc_html( get_sub_field( 'badge_text' ) ); ?></div>
          <?php
          $treatment_image_id  = get_sub_field( 'image' );
          $treatment_image_url = $treatment_image_id ? wp_get_attachment_image_url( $treatment_image_id, 'medium' ) : '';
          if ( $treatment_image_url ) : ?>
            <div class="hairloss-treatment-image-container">
              <img src="<?php echo esc_url( $treatment_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" class="hairloss-treatment-img" />
            </div>
          <?php endif; ?>
          <h3 class="hairloss-treatment-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="hairloss-treatment-subtitle"><?php echo esc_html( get_sub_field( 'subtitle' ) ); ?></p>
          <div class="hairloss-treatment-divider"></div>
          <h4 class="hairloss-treatment-heading">How It Works</h4>
          <p class="hairloss-treatment-text"><?php echo esc_html( get_sub_field( 'how_it_works' ) ); ?></p>
          <h4 class="hairloss-treatment-heading">Results</h4>
          <ul class="hairloss-treatment-list">
            <?php if ( have_rows( 'results' ) ) : while ( have_rows( 'results' ) ) : the_row(); ?>
              <li><i class="fas fa-circle-check"></i> <?php echo esc_html( get_sub_field( 'text' ) ); ?></li>
            <?php endwhile; endif; ?>
          </ul>
          <div class="hairloss-treatment-details">
            <div class="detail"><span class="label">Duration</span><span class="value"><?php echo esc_html( get_sub_field( 'duration' ) ); ?></span></div>
            <div class="detail"><span class="label">Price</span><span class="value"><?php echo esc_html( get_sub_field( 'price' ) ); ?></span></div>
          </div>
          <a href="<?php echo esc_url( bp_field( 'hl_hero_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button <?php echo $is_featured ? 'primary-cta' : 'secondary-cta'; ?> hairloss-treatment-btn"><?php echo esc_html( get_sub_field( 'button_text' ) ?: 'Book Now' ); ?></a>
        </div>
      <?php endwhile; else : ?>
        <!-- Default: Finasteride -->
        <div class="hairloss-treatment-card">
          <div class="hairloss-treatment-glow"></div>
          <div class="hairloss-treatment-badge prescription">PRESCRIPTION REQUIRED</div>
          <h3 class="hairloss-treatment-title">Finasteride 1mg Tablets</h3>
          <p class="hairloss-treatment-subtitle">Most effective treatment for male pattern baldness</p>
          <div class="hairloss-treatment-divider"></div>
          <h4 class="hairloss-treatment-heading">How It Works</h4>
          <p class="hairloss-treatment-text">Blocks the enzyme that converts testosterone to DHT, preventing further hair follicle shrinkage.</p>
          <h4 class="hairloss-treatment-heading">Results</h4>
          <ul class="hairloss-treatment-list">
            <li><i class="fas fa-circle-check"></i> Stops hair loss in 90% of men</li>
            <li><i class="fas fa-circle-check"></i> Regrows hair in 65% of users</li>
            <li><i class="fas fa-circle-check"></i> Visible results in 3-6 months</li>
          </ul>
          <div class="hairloss-treatment-details">
            <div class="detail"><span class="label">Duration</span><span class="value">Ongoing (daily tablet)</span></div>
            <div class="detail"><span class="label">Price</span><span class="value">&pound;25/month</span></div>
          </div>
          <a href="<?php echo esc_url( bp_booking_url() ); ?>" class="cta-button primary-cta hairloss-treatment-btn">Book Consultation</a>
        </div>
        <!-- Default: Minoxidil -->
        <div class="hairloss-treatment-card">
          <div class="hairloss-treatment-badge otc">AVAILABLE OTC</div>
          <h3 class="hairloss-treatment-title">Minoxidil Solution</h3>
          <p class="hairloss-treatment-subtitle">Topical treatment to stimulate hair growth</p>
          <div class="hairloss-treatment-divider"></div>
          <h4 class="hairloss-treatment-heading">How It Works</h4>
          <p class="hairloss-treatment-text">Applied directly to scalp, increases blood flow to hair follicles and extends the growth phase.</p>
          <h4 class="hairloss-treatment-heading">Results</h4>
          <ul class="hairloss-treatment-list">
            <li><i class="fas fa-circle-check"></i> Works for crown and hairline</li>
            <li><i class="fas fa-circle-check"></i> Regrows hair in 40% of users</li>
            <li><i class="fas fa-circle-check"></i> Visible results in 4-6 months</li>
          </ul>
          <div class="hairloss-treatment-details">
            <div class="detail"><span class="label">Duration</span><span class="value">Ongoing (twice daily)</span></div>
            <div class="detail"><span class="label">Price</span><span class="value">&pound;15-30/month</span></div>
          </div>
          <a href="<?php echo esc_url( bp_booking_url() ); ?>" class="cta-button secondary-cta hairloss-treatment-btn">Visit In-Store</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     G4. TEAM / EXPERTISE — Card layout
     ============================================ -->
<section class="hairloss-team-section">
  <div class="section-container">
    <div class="hairloss-team-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_team_badge', 'YOUR SPECIALISTS' ) ); ?></span>
      </div>
      <h2 class="hairloss-team-title"><?php echo esc_html( bp_field( 'hl_team_title', 'Meet Your ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) . ' Hair Loss Experts' ) ); ?></h2>
      <p class="hairloss-team-description"><?php echo esc_html( bp_field( 'hl_team_description', 'Our experienced pharmacists provide personalised hair loss consultations with discretion and care. Get expert advice and ongoing support at your local ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) . ' pharmacy.' ) ); ?></p>
    </div>

    <div class="hairloss-team-grid">
      <?php if ( have_rows( 'hl_team_members' ) ) : while ( have_rows( 'hl_team_members' ) ) : the_row(); ?>
        <?php
        $team_image_id  = get_sub_field( 'image' );
        $team_image_url = $team_image_id ? wp_get_attachment_image_url( $team_image_id, 'medium_large' ) : '';
        $badge_text     = get_sub_field( 'badge_text' );
        $badge_style    = get_sub_field( 'badge_style' );
        ?>
        <div class="hairloss-team-card">
          <?php if ( $team_image_url ) : ?>
            <div class="hairloss-team-image-wrapper">
              <img src="<?php echo esc_url( $team_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'name' ) ); ?>" class="hairloss-team-image" />
              <?php if ( $badge_text ) : ?>
                <div class="hairloss-team-badge-<?php echo esc_attr( $badge_style ?: 'green' ); ?>"><?php echo esc_html( $badge_text ); ?></div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <div class="hairloss-team-content">
            <h3 class="hairloss-team-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
            <p class="hairloss-team-role"><?php echo esc_html( get_sub_field( 'role' ) ); ?></p>
            <p class="hairloss-team-bio"><?php echo esc_html( get_sub_field( 'bio' ) ); ?></p>
            <?php if ( have_rows( 'tags' ) ) : ?>
              <div class="hairloss-team-tags">
                <?php while ( have_rows( 'tags' ) ) : the_row(); ?>
                  <span class="hairloss-team-tag"><?php echo esc_html( get_sub_field( 'tag' ) ); ?></span>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; else : ?>
        <!-- Default: Lead Pharmacist -->
        <div class="hairloss-team-card">
          <div class="hairloss-team-content">
            <h3 class="hairloss-team-name"><?php echo esc_html( bp_option( 'superintendent_pharmacist', 'Our Pharmacist' ) ); ?></h3>
            <p class="hairloss-team-role">Lead Pharmacist &amp; Founder</p>
            <p class="hairloss-team-bio">As the founder of <?php echo esc_html( bp_pharmacy_name() ); ?>, our lead pharmacist brings over 15 years of pharmaceutical experience, providing confidential hair loss consultations and personalised treatment plans.</p>
            <div class="hairloss-team-tags">
              <span class="hairloss-team-tag">GPhC Registered</span>
              <span class="hairloss-team-tag">15+ Years Experience</span>
              <span class="hairloss-team-tag">Hair Loss Specialist</span>
            </div>
          </div>
        </div>
        <!-- Default: Director -->
        <div class="hairloss-team-card">
          <div class="hairloss-team-content">
            <h3 class="hairloss-team-name">Pharmacy Director</h3>
            <p class="hairloss-team-role">Director</p>
            <p class="hairloss-team-bio">Our director combines clinical expertise with compassionate patient care, supporting hair loss treatment plans and ongoing monitoring for patients at our <?php echo esc_html( bp_option( 'pharmacy_town', 'local' ) ); ?> clinic.</p>
            <div class="hairloss-team-tags">
              <span class="hairloss-team-tag">Clinic Director</span>
              <span class="hairloss-team-tag">Patient Care Expert</span>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     G5. PROCESS / JOURNEY — 4-step cards
     ============================================ -->
<section class="hairloss-process-section">
  <div class="section-container">
    <div class="hairloss-process-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="hairloss-process-title"><?php echo esc_html( bp_field( 'hl_process_title_line1', 'Your Hair Loss Treatment' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'hl_process_title_highlight', 'Journey' ) ); ?></span></h2>
    </div>
    <div class="hairloss-process-grid">
      <?php if ( have_rows( 'hl_process_steps' ) ) : $step_num = 0; while ( have_rows( 'hl_process_steps' ) ) : the_row(); $step_num++; ?>
        <div class="hairloss-process-card">
          <div class="number"><?php echo esc_html( $step_num ); ?></div>
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <?php $time = get_sub_field( 'time_badge' ); if ( $time ) : ?>
            <span class="time-badge"><?php echo esc_html( $time ); ?></span>
          <?php endif; ?>
          <?php if ( $step_num < 4 ) : ?><div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div><?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-process-card">
          <div class="number">1</div>
          <div class="icon"><i class="fas fa-calendar-check"></i></div>
          <h3>Book Consultation</h3>
          <p>Call or book online for a private consultation at our Bowland pharmacy</p>
          <span class="time-badge">15-20 minutes</span>
          <div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">2</div>
          <div class="icon"><i class="fas fa-user-doctor"></i></div>
          <h3>Assessment</h3>
          <p>Discuss hair loss pattern, medical history, and treatment goals with our pharmacist</p>
          <span class="time-badge">During consultation</span>
          <div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">3</div>
          <div class="icon"><i class="fas fa-file-medical"></i></div>
          <h3>Treatment Plan</h3>
          <p>Receive personalised recommendation. Prescription issued if suitable for Finasteride</p>
          <span class="time-badge">Same day</span>
          <div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">4</div>
          <div class="icon"><i class="fas fa-rotate"></i></div>
          <h3>Ongoing Support</h3>
          <p>Regular check-ins to monitor progress, adjust treatment, and review results</p>
          <span class="time-badge">3-6 month reviews</span>
        </div>
      <?php endif; ?>
    </div>
    <div class="hairloss-process-cta">
      <a href="<?php echo esc_url( bp_field( 'hl_hero_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta"><?php echo esc_html( bp_field( 'hl_process_cta_text', 'Start Your Journey' ) ); ?></a>
    </div>
  </div>
</section>

<!-- ============================================
     G6. FAQ — Plus/minus icon toggle (unique to this page)
     ============================================ -->
<section class="hairloss-faq-section">
  <div class="section-container">
    <div class="hairloss-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_faq_badge', 'COMMON QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="hairloss-faq-title"><?php echo esc_html( bp_field( 'hl_faq_title_line1', 'Hair Loss Treatment' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'hl_faq_title_highlight', 'FAQs' ) ); ?></span></h2>
    </div>
    <div class="hairloss-faq-list">
      <?php if ( have_rows( 'hl_faqs' ) ) : $faq_num = 0; while ( have_rows( 'hl_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html( str_pad( $faq_num, 2, '0', STR_PAD_LEFT ) ); ?></span>
            <span class="text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">01</span>
            <span class="text">How long until I see results?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Finasteride typically shows results in 3-6 months. Minoxidil in 4-6 months. Maximum results appear after 12-18 months of consistent use. Hair loss should stop within 3 months.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">02</span>
            <span class="text">Do I need a prescription for these treatments?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Finasteride requires a prescription after pharmacist consultation. Minoxidil is available over-the-counter without prescription, though we recommend a consultation to ensure suitability.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">03</span>
            <span class="text">Are there side effects?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Finasteride: Rare sexual side effects in 2-3% of users (reversible). Minoxidil: Scalp irritation or dryness in some users. We'll discuss all risks during consultation.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">04</span>
            <span class="text">What happens if I stop treatment?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Hair loss will gradually resume within 3-6 months of stopping treatment. These are ongoing treatments &mdash; results are maintained only with continued use.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">05</span>
            <span class="text">Can I use both treatments together?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Yes! Combining Finasteride and Minoxidil provides the best results with success rates up to 85%. This is often recommended for maximum effectiveness.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">06</span>
            <span class="text">Why choose <?php echo esc_html( bp_pharmacy_name() ); ?> over online providers?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Face-to-face assessment ensures treatment suitability. Ongoing local support and monitoring. Immediate access to professional advice. No waiting for postal delivery &mdash; collect same day.</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     G7. TESTIMONIALS — 3-column
     ============================================ -->
<section class="hairloss-testimonials-section">
  <div class="section-container">
    <div class="hairloss-testimonials-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_testimonials_badge', 'PATIENT STORIES' ) ); ?></span>
      </div>
      <h2 class="hairloss-testimonials-title"><?php echo esc_html( bp_field( 'hl_testimonials_title', 'Hear From Our ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) . ' Patients' ) ); ?></h2>
    </div>

    <div class="hairloss-testimonials-grid">
      <?php if ( have_rows( 'hl_testimonials' ) ) : while ( have_rows( 'hl_testimonials' ) ) : the_row(); ?>
        <div class="hairloss-testimonial-card">
          <div class="hairloss-testimonial-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="hairloss-testimonial-quote"><?php echo esc_html( get_sub_field( 'quote' ) ); ?></p>
          <div class="hairloss-testimonial-author">
            <span class="hairloss-testimonial-name"><?php echo esc_html( get_sub_field( 'author' ) ); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-testimonial-card">
          <div class="hairloss-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="hairloss-testimonial-quote">After just 4 months of treatment from <?php echo esc_html( bp_pharmacy_name() ); ?>, I can already see new hair growth. The pharmacist explained everything clearly and made the whole process easy.</p>
          <div class="hairloss-testimonial-author"><span class="hairloss-testimonial-name">James T.</span></div>
        </div>
        <div class="hairloss-testimonial-card">
          <div class="hairloss-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="hairloss-testimonial-quote">I was nervous about discussing hair loss but the team at <?php echo esc_html( bp_pharmacy_name() ); ?> made it completely comfortable. The consultation was thorough and private.</p>
          <div class="hairloss-testimonial-author"><span class="hairloss-testimonial-name">Mark R.</span></div>
        </div>
        <div class="hairloss-testimonial-card">
          <div class="hairloss-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="hairloss-testimonial-quote">Six months in and the results speak for themselves. So much better than ordering online &mdash; having a real pharmacist monitor my progress makes all the difference.</p>
          <div class="hairloss-testimonial-author"><span class="hairloss-testimonial-name">David P.</span></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     G8. FINAL CTA — Purple gradient
     ============================================ -->
<section class="hairloss-cta-section">
  <div class="section-container">
    <div class="hairloss-cta-content">
      <h2 class="hairloss-cta-title"><?php echo esc_html( bp_field( 'hl_cta_title', 'Ready to Start Your Hair Regrowth Journey?' ) ); ?></h2>
      <p class="hairloss-cta-desc"><?php echo esc_html( bp_field( 'hl_cta_description', 'Book a confidential consultation with our GPhC-registered pharmacist in ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) ) ); ?></p>
      <div class="hairloss-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'hl_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta hairloss-cta-btn-book">
          <?php echo esc_html( bp_field( 'hl_cta_button_text', 'Book Consultation' ) ); ?> <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button hairloss-cta-btn">
          <i class="fas fa-phone"></i> <?php echo esc_html( bp_phone() ); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
