<?php
/**
 * Template Name: Home
 *
 * @package Easy_Pharmacy_Theme
 */

get_header(); ?>

  <!-- ============================================
       HERO SECTION
       ============================================ -->
  <?php
  // Hero fields
  $hero_badge       = get_field('hero_badge_text') ?: 'Serving Ashford, Chertsey & Surrounds';
  $hero_line1       = get_field('hero_title_line_1') ?: 'Lose Weight.';
  $hero_line2       = get_field('hero_title_line_2') ?: 'Travel Safe.';
  $hero_line3       = get_field('hero_title_line_3') ?: 'Live Better.';
  $hero_desc        = get_field('hero_description') ?: 'Clinically proven weight loss treatments, expert support, discreet delivery. Plus travel health, hair loss treatment, and full pharmacy services across Ashford & Kent.';
  $hero_cta1_text   = get_field('hero_primary_cta_text') ?: 'Start Your Journey';
  $hero_cta1_link   = get_field('hero_primary_cta_link') ?: '#';
  $hero_cta2_text   = get_field('hero_secondary_cta_text') ?: 'Popular Treatments';
  $hero_cta2_link   = get_field('hero_secondary_cta_link') ?: '#treatments';
  $hero_quote       = get_field('hero_testimonial_quote') ?: "Thank you so much for your weight loss service. I've tried everything over the years. With your help, I've finally managed to lose 6 stones!";
  $hero_author      = get_field('hero_testimonial_author') ?: 'Ashford Patient';
  $hero_result      = get_field('hero_testimonial_result') ?: '6 Stone Lost';
  $hero_image       = get_field('hero_image');
  $hero_img_url     = $hero_image ? $hero_image['url'] : 'https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771148599334-0.jpeg';
  $hero_img_alt     = $hero_image ? $hero_image['alt'] : 'Woman celebrating weight loss success at Easy Pharmacy Ashford';
  $hero_cap_label   = get_field('hero_caption_label') ?: 'Easy Pharmacy';
  $hero_cap_title   = get_field('hero_caption_title') ?: 'Your Health, Reimagined.';
  $hero_rating      = get_field('hero_google_rating') ?: '4.7';
  $hero_reviews     = get_field('hero_review_count') ?: 'Based on 300+ reviews';
  $hero_location    = get_field('hero_google_location') ?: 'Ashford, UK';
  $hero_reviews_link = get_field('hero_reviews_link') ?: '#';
  ?>
  <section class="hero-section">

    <!-- Decorative background blobs -->
    <div class="hero-bg-shape-1"></div>
    <div class="hero-bg-shape-2"></div>

    <div class="section-container">
      <div class="hero-grid">

        <!-- LEFT: Content Column -->
        <div class="hero-content">

          <!-- Location badge -->
          <div class="hero-badge">
            <span class="pulse-dot">
              <span></span>
              <span></span>
            </span>
            <span class="hero-badge-text"><?php echo esc_html($hero_badge); ?></span>
          </div>

          <!-- Headline -->
          <h1 class="hero-title">
            <span class="gradient-text"><?php echo esc_html($hero_line1); ?></span>
            <span class="hero-accent-text"><?php echo esc_html($hero_line2); ?></span>
            <span class="gradient-text"><?php echo esc_html($hero_line3); ?></span>
          </h1>

          <!-- Description -->
          <p class="hero-description">
            <?php echo esc_html($hero_desc); ?>
          </p>

          <!-- CTAs -->
          <div class="hero-actions">
            <a href="<?php echo esc_url($hero_cta1_link); ?>" class="cta-button primary-cta"><?php echo esc_html($hero_cta1_text); ?></a>
            <a href="<?php echo esc_attr($hero_cta2_link); ?>" class="cta-button secondary-cta">
              <?php echo esc_html($hero_cta2_text); ?>
              <i class="fas fa-chevron-down icon-small"></i>
            </a>
          </div>

          <!-- Trust indicators -->
          <ul class="trust-indicators">
            <?php if (have_rows('hero_trust_indicators')) : $ti_i = 0; ?>
              <?php while (have_rows('hero_trust_indicators')) : the_row(); ?>
                <?php if ($ti_i > 0) : ?>
                  <li class="trust-item trust-divider"><span class="dot-separator"></span></li>
                <?php endif; ?>
                <li class="trust-item">
                  <i class="fas fa-check-circle"></i>
                  <span><?php echo esc_html(get_sub_field('text')); ?></span>
                </li>
              <?php $ti_i++; endwhile; ?>
            <?php else : ?>
              <li class="trust-item">
                <i class="fas fa-check-circle"></i>
                <span>GPhC Registered</span>
              </li>
              <li class="trust-item trust-divider">
                <span class="dot-separator"></span>
              </li>
              <li class="trust-item">
                <i class="fas fa-check-circle"></i>
                <span>UK Licensed Meds</span>
              </li>
              <li class="trust-item trust-divider">
                <span class="dot-separator"></span>
              </li>
              <li class="trust-item">
                <i class="fas fa-check-circle"></i>
                <span>Local Ashford Service</span>
              </li>
            <?php endif; ?>
          </ul>

          <!-- Testimonial card -->
          <div class="hero-testimonial">
            <div class="quote-icon">
              <i class="fas fa-quote-left"></i>
            </div>
            <p class="hero-quote">
              "<?php echo esc_html($hero_quote); ?>"
            </p>
            <div class="hero-testimonial-footer">
              <div class="hero-testimonial-author">
                <p class="author-name"><?php echo esc_html($hero_author); ?></p>
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
                <span><?php echo esc_html($hero_result); ?></span>
              </div>
            </div>
            <div class="hero-testimonial-accent"></div>
          </div>

        </div>

        <!-- RIGHT: Visual Column -->
        <div class="hero-visual">

          <!-- Decorative glow -->
          <div class="hero-visual-glow"></div>

          <!-- Main image card -->
          <div class="hero-image-card">
            <img
              src="<?php echo esc_url($hero_img_url); ?>"
              alt="<?php echo esc_attr($hero_img_alt); ?>"
            />
            <div class="hero-overlay"></div>
            <div class="hero-image-caption">
              <p class="caption-label"><?php echo esc_html($hero_cap_label); ?></p>
              <p class="caption-title"><?php echo nl2br(esc_html($hero_cap_title)); ?></p>
            </div>
          </div>

          <!-- Google rating badge -->
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
              <span class="score-number"><?php echo esc_html($hero_rating); ?></span>
              <div class="rating-score-detail">
                <div class="star-row">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <span class="rating-count"><?php echo esc_html($hero_reviews); ?></span>
              </div>
            </div>
            <div class="rating-footer">
              <div class="rating-location">
                <i class="fas fa-map-marker-alt"></i>
                <span><?php echo esc_html($hero_location); ?></span>
              </div>
              <a href="<?php echo esc_url($hero_reviews_link); ?>" class="rating-link">View Reviews</a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ============================================
       STATS BAR v1
       Full-width, 5 stats, premium glassmorphism style
       ============================================ -->
  <section class="stats-section">
    <div class="section-container">
      <div class="stats-bar">

        <?php if (have_rows('stats_items')) : $si = 0; ?>
          <?php while (have_rows('stats_items')) : the_row(); ?>
            <?php if ($si > 0) : ?><div class="stat-divider"></div><?php endif; ?>
            <div class="stat-item">
              <div class="stat-icon">
                <i class="<?php echo esc_attr(get_sub_field('icon_class')); ?>"></i>
              </div>
              <div class="stat-content">
                <span class="stat-number"><?php echo esc_html(get_sub_field('number')); ?></span>
                <span class="stat-label"><?php echo esc_html(get_sub_field('label')); ?></span>
              </div>
            </div>
          <?php $si++; endwhile; ?>
        <?php else : ?>
          <div class="stat-item">
            <div class="stat-icon"><i class="fas fa-users"></i></div>
            <div class="stat-content">
              <span class="stat-number">5,000+</span>
              <span class="stat-label">Patients Treated</span>
            </div>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-item">
            <div class="stat-icon"><i class="fas fa-star"></i></div>
            <div class="stat-content">
              <span class="stat-number">4.7</span>
              <span class="stat-label">Google Rating</span>
            </div>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-item">
            <div class="stat-icon"><i class="fas fa-award"></i></div>
            <div class="stat-content">
              <span class="stat-number">15+</span>
              <span class="stat-label">Years Experience</span>
            </div>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-item">
            <div class="stat-icon"><i class="fas fa-shield-halved"></i></div>
            <div class="stat-content">
              <span class="stat-number">GPhC</span>
              <span class="stat-label">Fully Registered</span>
            </div>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-item">
            <div class="stat-icon"><i class="fas fa-truck-fast"></i></div>
            <div class="stat-content">
              <span class="stat-number">Free</span>
              <span class="stat-label">Discreet Delivery</span>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </section>
  <!-- ============================================
       TREATMENTS GRID v1
       5-card image grid with hover effects
       ============================================ -->
  <?php
  $tx_badge = get_field('treatments_badge_text') ?: 'Trusted by thousands in Ashford & Chertsey';
  $tx_title = get_field('treatments_title') ?: 'Our Most Popular Treatments';
  $tx_desc  = get_field('treatments_description') ?: 'Comprehensive healthcare solutions tailored to your needs, delivered discreetly to your door.';
  ?>
  <section class="treatments-section" id="treatments">
    <div class="section-container">

      <!-- Section header -->
      <div class="treatments-header">
        <div class="section-badge">
          <span class="pulse-dot">
            <span></span>
            <span></span>
          </span>
          <span class="section-badge-text"><?php echo esc_html($tx_badge); ?></span>
        </div>
        <h2 class="treatments-title"><?php echo esc_html($tx_title); ?></h2>
        <p class="treatments-description"><?php echo esc_html($tx_desc); ?></p>
      </div>

      <!-- Card grid -->
      <div class="treatments-grid">

        <?php if (have_rows('treatments_cards')) : ?>
          <?php while (have_rows('treatments_cards')) : the_row();
            $t_img  = get_sub_field('image');
            $t_url  = $t_img ? $t_img['url'] : '';
            $t_alt  = $t_img ? $t_img['alt'] : '';
            $t_name = get_sub_field('title');
            $t_link = get_sub_field('link') ?: '#';
          ?>
            <a href="<?php echo esc_url($t_link); ?>" class="treatment-card">
              <div class="treatment-card-inner">
                <img src="<?php echo esc_url($t_url); ?>" alt="<?php echo esc_attr($t_alt); ?>" class="treatment-card-image" />
                <div class="treatment-card-overlay"></div>
                <div class="treatment-card-hover">
                  <span class="treatment-card-button">View Details</span>
                </div>
                <div class="treatment-card-label">
                  <h3 class="treatment-card-title"><?php echo esc_html($t_name); ?></h3>
                  <div class="treatment-card-line"></div>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php else : ?>
          <a href="#" class="treatment-card">
            <div class="treatment-card-inner">
              <img src="https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944273995-0.jpeg" alt="Weight loss treatment at Easy Pharmacy" class="treatment-card-image" />
              <div class="treatment-card-overlay"></div>
              <div class="treatment-card-hover"><span class="treatment-card-button">View Details</span></div>
              <div class="treatment-card-label"><h3 class="treatment-card-title">Weight Loss</h3><div class="treatment-card-line"></div></div>
            </div>
          </a>
          <a href="#" class="treatment-card">
            <div class="treatment-card-inner">
              <img src="https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944274005-1.jpeg" alt="Travel health vaccinations at Easy Pharmacy" class="treatment-card-image" />
              <div class="treatment-card-overlay"></div>
              <div class="treatment-card-hover"><span class="treatment-card-button">View Details</span></div>
              <div class="treatment-card-label"><h3 class="treatment-card-title">Travel Health</h3><div class="treatment-card-line"></div></div>
            </div>
          </a>
          <a href="#" class="treatment-card">
            <div class="treatment-card-inner">
              <img src="https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944517596-0.jpeg" alt="Ear wax removal service at Easy Pharmacy" class="treatment-card-image" />
              <div class="treatment-card-overlay"></div>
              <div class="treatment-card-hover"><span class="treatment-card-button">View Details</span></div>
              <div class="treatment-card-label"><h3 class="treatment-card-title">Ear Wax Removal</h3><div class="treatment-card-line"></div></div>
            </div>
          </a>
          <a href="#" class="treatment-card">
            <div class="treatment-card-inner">
              <img src="https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944274011-2.jpeg" alt="Hair loss treatment at Easy Pharmacy" class="treatment-card-image" />
              <div class="treatment-card-overlay"></div>
              <div class="treatment-card-hover"><span class="treatment-card-button">View Details</span></div>
              <div class="treatment-card-label"><h3 class="treatment-card-title">Hair Loss</h3><div class="treatment-card-line"></div></div>
            </div>
          </a>
          <a href="#" class="treatment-card">
            <div class="treatment-card-inner">
              <img src="https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944583782-0.jpeg" alt="Smoking cessation support at Easy Pharmacy" class="treatment-card-image" />
              <div class="treatment-card-overlay"></div>
              <div class="treatment-card-hover"><span class="treatment-card-button">View Details</span></div>
              <div class="treatment-card-label"><h3 class="treatment-card-title">Smoking Cessation</h3><div class="treatment-card-line"></div></div>
            </div>
          </a>
        <?php endif; ?>

      </div>
    </div>
  </section>
  <!-- ============================================
       PHARMACIST SECTION v1
       Two-column with video image, experience badge, credentials
       ============================================ -->
  <?php
  $ph_badge     = get_field('pharmacist_badge_text') ?: 'Your Local Expert';
  $ph_name      = get_field('pharmacist_name') ?: 'Meet Dilip Modhvadia';
  $ph_role      = get_field('pharmacist_role') ?: 'Lead Pharmacist & Independent Prescriber';
  $ph_bio       = get_field('pharmacist_bio') ?: 'With over 15 years of experience, Dilip leads our clinical team dedicated to providing personalized, accessible healthcare in Ashford. As an Independent Prescriber, he oversees our service to ensure you receive safe, effective treatments without the wait.';
  $ph_quote     = get_field('pharmacist_quote') ?: "My goal is to make expert healthcare accessible to everyone in Ashford. Whether you're starting a weight loss journey or need health advice, our team is here to support you every step of the way with honest, professional care delivered to your door.";
  $ph_image     = get_field('pharmacist_image');
  $ph_img_url   = $ph_image ? $ph_image['url'] : 'https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769942949376-0.png';
  $ph_img_alt   = $ph_image ? $ph_image['alt'] : 'Dilip Modhvadia - Lead Pharmacist at Easy Pharmacy Ashford';
  $ph_video     = get_field('pharmacist_video_url') ?: 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1';
  $ph_vid_label = get_field('pharmacist_video_label') ?: 'Watch Welcome Message';
  $ph_exp_num   = get_field('pharmacist_experience_number') ?: '15+';
  $ph_exp_label = get_field('pharmacist_experience_label') ?: 'Years Experience';
  $ph_cta_text  = get_field('pharmacist_cta_text') ?: 'Start Your Online Consultation';
  $ph_cta_link  = get_field('pharmacist_cta_link') ?: '#';
  ?>
  <section class="pharmacist-section" id="about">
    <div class="section-container">
      <div class="pharmacist-grid">

        <!-- LEFT: Image Column -->
        <div class="pharmacist-image-wrapper">
          <div class="pharmacist-image-glow"></div>
          <div class="pharmacist-image-card" onclick="openVideoModal('<?php echo esc_url($ph_video); ?>')">
            <img src="<?php echo esc_url($ph_img_url); ?>" alt="<?php echo esc_attr($ph_img_alt); ?>" class="pharmacist-image" />
            <!-- Play button overlay -->
            <div class="pharmacist-video-overlay">
              <div class="play-button">
                <div class="play-button-ping"></div>
                <i class="fas fa-play"></i>
              </div>
            </div>
            <div class="pharmacist-video-label">
              <span><?php echo esc_html($ph_vid_label); ?></span>
            </div>
          </div>
          <!-- Experience badge -->
          <div class="pharmacist-experience-badge">
            <p class="pharmacist-experience-number"><?php echo esc_html($ph_exp_num); ?></p>
            <p class="pharmacist-experience-label"><?php echo esc_html($ph_exp_label); ?></p>
          </div>
        </div>

        <!-- RIGHT: Content Column -->
        <div class="pharmacist-content">

          <div class="section-badge">
            <span class="pulse-dot">
              <span></span>
              <span></span>
            </span>
            <span class="section-badge-text"><?php echo esc_html($ph_badge); ?></span>
          </div>

          <h2 class="pharmacist-name"><?php echo esc_html($ph_name); ?></h2>
          <h3 class="pharmacist-role"><?php echo esc_html($ph_role); ?></h3>

          <p class="pharmacist-bio"><?php echo esc_html($ph_bio); ?></p>

          <p class="pharmacist-quote">"<?php echo esc_html($ph_quote); ?>"</p>

          <div class="pharmacist-credentials">
            <?php if (have_rows('pharmacist_credentials')) : ?>
              <?php while (have_rows('pharmacist_credentials')) : the_row(); ?>
                <div class="pharmacist-credential">
                  <i class="<?php echo esc_attr(get_sub_field('icon_class')); ?>"></i>
                  <span><?php echo esc_html(get_sub_field('text')); ?></span>
                </div>
              <?php endwhile; ?>
            <?php else : ?>
              <div class="pharmacist-credential"><i class="fas fa-certificate"></i><span>GPhC Registered</span></div>
              <div class="pharmacist-credential"><i class="fas fa-file-signature"></i><span>Independent Prescriber</span></div>
              <div class="pharmacist-credential"><i class="fas fa-weight-scale"></i><span>Weight Loss Specialist</span></div>
            <?php endif; ?>
          </div>

          <div class="pharmacist-cta">
            <a href="<?php echo esc_url($ph_cta_link); ?>" class="cta-button primary-cta">
              <?php echo esc_html($ph_cta_text); ?>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
	  <!-- ============================================
       HOW IT WORKS SECTION
       3-step process with timeline connector
       ============================================ -->
  <?php
  $hiw_badge    = get_field('hiw_badge_text') ?: 'Simple & Fast';
  $hiw_title    = get_field('hiw_title') ?: 'How It Works';
  $hiw_desc     = get_field('hiw_description') ?: "Getting started with Easy Pharmacy is simple. From consultation to delivery, we've made healthcare accessible.";
  $hiw_cta_text = get_field('hiw_cta_text') ?: 'Start Your Journey Now';
  $hiw_cta_link = get_field('hiw_cta_link') ?: '#';
  ?>
  <section class="how-it-works-section">
    <div class="section-container">

      <!-- Section header -->
      <div class="how-it-works-header">
        <div class="section-badge">
          <span class="pulse-dot">
            <span></span>
            <span></span>
          </span>
          <span class="section-badge-text"><?php echo esc_html($hiw_badge); ?></span>
        </div>
        <h2 class="how-it-works-title"><?php echo esc_html($hiw_title); ?></h2>
        <p class="how-it-works-description"><?php echo esc_html($hiw_desc); ?></p>
      </div>

      <!-- Steps -->
      <div class="how-it-works-steps">

        <?php if (have_rows('hiw_steps')) : $step_n = 0; $step_total = count(get_field('hiw_steps')); ?>
          <?php while (have_rows('hiw_steps')) : the_row(); $step_n++; ?>
            <div class="how-it-works-step">
              <div class="how-it-works-step-card">
                <div class="how-it-works-step-number">
                  <span><?php echo $step_n; ?></span>
                </div>
                <div class="how-it-works-step-icon">
                  <i class="<?php echo esc_attr(get_sub_field('icon_class')); ?>"></i>
                </div>
                <h3 class="how-it-works-step-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
                <p class="how-it-works-step-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
                <?php $step_time = get_sub_field('time_text'); if ($step_time) : ?>
                  <div class="how-it-works-step-time">
                    <i class="<?php echo esc_attr(get_sub_field('time_icon') ?: 'fas fa-clock'); ?>"></i>
                    <span><?php echo esc_html($step_time); ?></span>
                  </div>
                <?php endif; ?>
              </div>
              <?php if ($step_n < $step_total) : ?><div class="how-it-works-connector"></div><?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <div class="how-it-works-step">
            <div class="how-it-works-step-card">
              <div class="how-it-works-step-number"><span>1</span></div>
              <div class="how-it-works-step-icon"><i class="fas fa-laptop-medical"></i></div>
              <h3 class="how-it-works-step-title">Book Online</h3>
              <p class="how-it-works-step-desc">Complete our quick online consultation form in just 2 minutes. Choose your preferred treatment and answer a few health questions.</p>
              <div class="how-it-works-step-time"><i class="fas fa-clock"></i><span>2 minutes</span></div>
            </div>
            <div class="how-it-works-connector"></div>
          </div>
          <div class="how-it-works-step">
            <div class="how-it-works-step-card">
              <div class="how-it-works-step-number"><span>2</span></div>
              <div class="how-it-works-step-icon"><i class="fas fa-user-doctor"></i></div>
              <h3 class="how-it-works-step-title">Speak to Dilip</h3>
              <p class="how-it-works-step-desc">Our expert pharmacist reviews your consultation and calls you the same day to discuss your treatment plan and answer any questions.</p>
              <div class="how-it-works-step-time"><i class="fas fa-clock"></i><span>Same day</span></div>
            </div>
            <div class="how-it-works-connector"></div>
          </div>
          <div class="how-it-works-step">
            <div class="how-it-works-step-card">
              <div class="how-it-works-step-number"><span>3</span></div>
              <div class="how-it-works-step-icon"><i class="fas fa-box"></i></div>
              <h3 class="how-it-works-step-title">Receive Treatment</h3>
              <p class="how-it-works-step-desc">Your medication arrives in discreet, premium packaging with free tracked 24-hour delivery straight to your door.</p>
              <div class="how-it-works-step-time"><i class="fas fa-truck-fast"></i><span>24h delivery</span></div>
            </div>
          </div>
        <?php endif; ?>

      </div>

      <!-- CTA -->
      <div class="how-it-works-cta">
        <a href="<?php echo esc_url($hiw_cta_link); ?>" class="cta-button primary-cta">
          <?php echo esc_html($hiw_cta_text); ?>
          <i class="fas fa-arrow-right"></i>
        </a>

        <!-- Trust badges -->
        <div class="how-it-works-trust-badges">
          <?php if (have_rows('hiw_trust_badges')) : ?>
            <?php while (have_rows('hiw_trust_badges')) : the_row();
              $badge_img = get_sub_field('image');
              $badge_alt = get_sub_field('alt_text');
            ?>
              <img src="<?php echo esc_url($badge_img ? $badge_img['url'] : ''); ?>" alt="<?php echo esc_attr($badge_alt); ?>" />
            <?php endwhile; ?>
          <?php else : ?>
            <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771149742332-1.png" alt="MHRA - Regulating Medicines and Medical Devices" />
            <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771149742335-2.png" alt="General Pharmaceutical Council" />
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/pci.svg" alt="PCI DSS Compliant" />
            <img src="https://c.animaapp.com/mkteqonbVRr1hb/assets/ico.svg" alt="ICO Registered" />
          <?php endif; ?>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================
       SWITCHING PROVIDER SECTION v3
       Premium packaging showcase with outcome-focused messaging
       ============================================ -->
  <?php
  $sw_badge      = get_field('switching_badge_text') ?: '50+ Patients Switched This Month';
  $sw_title1     = get_field('switching_title_line_1') ?: 'Frustrated with Your Current';
  $sw_title_g    = get_field('switching_title_gradient') ?: 'Weight Loss Provider?';
  $sw_desc       = get_field('switching_description') ?: "Tired of waiting weeks for prescriptions? Fed up with chatbots instead of real pharmacists? Join hundreds who've switched to Easy Pharmacy for faster service, genuine support, and premium care you can trust.";
  $sw_cta1_text  = get_field('switching_primary_cta_text') ?: 'Switch to Easy Pharmacy';
  $sw_cta1_link  = get_field('switching_primary_cta_link') ?: '#';
  $sw_cta2_text  = get_field('switching_secondary_cta_text') ?: 'Speak to Our Team';
  $sw_cta2_link  = get_field('switching_secondary_cta_link') ?: 'tel:01784255222';
  $sw_image      = get_field('switching_image');
  $sw_img_url    = $sw_image ? $sw_image['url'] : 'https://images.unsplash.com/photo-1573497620053-ea5300f94f21?w=800&h=1000&fit=crop';
  $sw_img_alt    = $sw_image ? $sw_image['alt'] : 'Patient consulting with pharmacist about switching weight loss provider';
  $sw_rating     = get_field('switching_rating_score') ?: '4.7';
  $sw_rating_cnt = get_field('switching_rating_count') ?: 'Based on 300+ reviews';
  $sw_patients   = get_field('switching_patients_stat') ?: '5,000+';
  $sw_location   = get_field('switching_location_stat') ?: 'Ashford';
  ?>
  <section class="switching-section">
    <div class="switching-bg"></div>
    <div class="section-container">
      <div class="switching-grid">

        <!-- LEFT: Content -->
        <div class="switching-content">

          <div class="section-badge switching-badge-strong">
            <span class="pulse-dot">
              <span></span>
              <span></span>
            </span>
            <span class="section-badge-text"><?php echo esc_html($sw_badge); ?></span>
          </div>

          <h2 class="switching-title">
            <?php echo esc_html($sw_title1); ?>
            <span class="gradient-text"><?php echo esc_html($sw_title_g); ?></span>
          </h2>

          <p class="switching-description"><?php echo esc_html($sw_desc); ?></p>

          <!-- Features list with product packaging -->
          <div class="switching-features">
            <?php if (have_rows('switching_features')) : ?>
              <?php while (have_rows('switching_features')) : the_row();
                $sf_img = get_sub_field('image');
                $sf_url = $sf_img ? $sf_img['url'] : '';
                $sf_alt = $sf_img ? $sf_img['alt'] : '';
              ?>
                <div class="switching-feature switching-feature-premium">
                  <div class="switching-feature-product">
                    <img src="<?php echo esc_url($sf_url); ?>" alt="<?php echo esc_attr($sf_alt); ?>" class="switching-product-image" />
                  </div>
                  <div class="switching-feature-text">
                    <h3 class="switching-feature-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
                    <p class="switching-feature-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php else : ?>
              <div class="switching-feature switching-feature-premium">
                <div class="switching-feature-product"><img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771148525582-0.png" alt="Easy Pharmacy professional prescriber" class="switching-product-image" /></div>
                <div class="switching-feature-text"><h3 class="switching-feature-title">Same-Day Prescriptions</h3><p class="switching-feature-desc">No more waiting weeks for approval. Our prescribers review and issue prescriptions within hours, not days.</p></div>
              </div>
              <div class="switching-feature switching-feature-premium">
                <div class="switching-feature-product"><img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771098952703-0.png" alt="Easy Pharmacy team member providing real pharmacist support" class="switching-product-image" /></div>
                <div class="switching-feature-text"><h3 class="switching-feature-title">Real Pharmacist Support</h3><p class="switching-feature-desc">Speak with Dilip and our Ashford team directly—no chatbots, no automated responses, just genuine expert care.</p></div>
              </div>
              <div class="switching-feature switching-feature-premium">
                <div class="switching-feature-product"><img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771085285989-0.png" alt="Easy Pharmacy premium packaging" class="switching-product-image" /></div>
                <div class="switching-feature-text"><h3 class="switching-feature-title">Premium Discreet Packaging</h3><p class="switching-feature-desc">Your medication arrives in our signature packaging with tracked 24h delivery—no hidden fees, no surprises.</p></div>
              </div>
            <?php endif; ?>
          </div>

          <!-- Trust proof -->
          <div class="switching-trust-proof">
            <?php if (have_rows('switching_trust_items')) : $sti = 0; ?>
              <?php while (have_rows('switching_trust_items')) : the_row(); ?>
                <?php if ($sti > 0) : ?><div class="switching-trust-divider"></div><?php endif; ?>
                <div class="switching-trust-item">
                  <div class="switching-trust-icon"><i class="<?php echo esc_attr(get_sub_field('icon_class')); ?>"></i></div>
                  <div class="switching-trust-info">
                    <div class="switching-trust-number gradient-text"><?php echo esc_html(get_sub_field('number')); ?></div>
                    <div class="switching-trust-label"><?php echo esc_html(get_sub_field('label')); ?></div>
                  </div>
                </div>
              <?php $sti++; endwhile; ?>
            <?php else : ?>
              <div class="switching-trust-item"><div class="switching-trust-icon"><i class="fas fa-user-group"></i></div><div class="switching-trust-info"><div class="switching-trust-number gradient-text">50+</div><div class="switching-trust-label">Switched Monthly</div></div></div>
              <div class="switching-trust-divider"></div>
              <div class="switching-trust-item"><div class="switching-trust-icon"><i class="fas fa-star"></i></div><div class="switching-trust-info"><div class="switching-trust-number gradient-text">4.7/5</div><div class="switching-trust-label">Google Rating</div></div></div>
              <div class="switching-trust-divider"></div>
              <div class="switching-trust-item"><div class="switching-trust-icon"><i class="fas fa-truck-fast"></i></div><div class="switching-trust-info"><div class="switching-trust-number gradient-text">24h</div><div class="switching-trust-label">Delivery Time</div></div></div>
            <?php endif; ?>
          </div>

          <!-- CTAs -->
          <div class="switching-actions">
            <a href="<?php echo esc_url($sw_cta1_link); ?>" class="cta-button primary-cta">
              <?php echo esc_html($sw_cta1_text); ?>
              <i class="fas fa-arrow-right"></i>
            </a>
            <a href="<?php echo esc_attr($sw_cta2_link); ?>" class="cta-button secondary-cta">
              <i class="fas fa-phone"></i>
              <?php echo esc_html($sw_cta2_text); ?>
            </a>
          </div>

        </div>

        <!-- RIGHT: Image -->
        <div class="switching-visual">
          <div class="switching-image-glow"></div>
          <div class="switching-image-card">
            <img src="<?php echo esc_url($sw_img_url); ?>" alt="<?php echo esc_attr($sw_img_alt); ?>" class="switching-image" />

            <!-- Premium rating badge -->
            <div class="switching-rating-badge">
              <div class="switching-rating-header">
                <div class="switching-rating-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="switching-rating-content">
                  <span class="switching-rating-label">Google Rating</span>
                  <div class="switching-rating-score"><?php echo esc_html($sw_rating); ?></div>
                  <div class="switching-rating-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </div>
                  <span class="switching-rating-count"><?php echo esc_html($sw_rating_cnt); ?></span>
                </div>
              </div>
              <div class="switching-rating-divider"></div>
              <div class="switching-rating-footer">
                <div class="switching-rating-stats">
                  <div class="switching-rating-stat-row">
                    <div class="switching-rating-stat-icon"><i class="fas fa-users"></i></div>
                    <span class="switching-rating-stat-text"><span class="switching-rating-stat-number"><?php echo esc_html($sw_patients); ?></span> patients treated</span>
                  </div>
                  <div class="switching-rating-stat-row">
                    <div class="switching-rating-stat-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <span class="switching-rating-stat-text">Serving <span class="switching-rating-stat-number"><?php echo esc_html($sw_location); ?></span> since 2008</span>
                  </div>
                </div>
                <div class="switching-rating-badge-pill">
                  <i class="fas fa-shield-check"></i>
                  <span>GPhC Verified</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
 <!-- ============================================
       REVOLUTION SLIDER / BANNER
       ============================================ -->
  <?php
  $rs_use_sc    = get_field('revslider_use_shortcode');
  $rs_shortcode = get_field('revslider_shortcode') ?: '[rev_slider alias="home-hero"]';
  $rs_image     = get_field('revslider_image');
  $rs_img_url   = $rs_image ? $rs_image['url'] : 'https://c.animaapp.com/mky4syt0x80ocF/img/uploaded-asset-1769954210491-0.jpeg';
  $rs_img_alt   = $rs_image ? $rs_image['alt'] : 'Travel Health Services - Tropical Beach Destination';
  $rs_badge     = get_field('revslider_badge_text') ?: 'Yellow Fever Approved';
  $rs_title     = get_field('revslider_title') ?: 'Protect Your Adventures Across the Globe';
  $rs_subtitle  = get_field('revslider_subtitle') ?: 'From yellow fever to malaria prevention, get expert travel vaccinations at Easy Pharmacy';
  $rs_cta_text  = get_field('revslider_primary_cta_text') ?: 'Book Travel Clinic';
  $rs_cta_link  = get_field('revslider_primary_cta_link') ?: '#travel-clinic';
  $rs_secondary = get_field('revslider_secondary_text') ?: 'Serving Ashford, Chertsey and beyond';
  ?>
  <section class="revslider-section" id="hero-slider">
    <div class="revslider-wrapper">
      <?php if ($rs_use_sc && shortcode_exists('rev_slider')) : ?>
        <?php echo do_shortcode($rs_shortcode); ?>
      <?php else : ?>
        <div class="revslider-placeholder">
          <div class="revslider-overlay"></div>
          <img src="<?php echo esc_url($rs_img_url); ?>" alt="<?php echo esc_attr($rs_img_alt); ?>" class="revslider-image" />

          <div class="revslider-content">
            <div class="revslider-container">
              <span class="revslider-badge"><?php echo esc_html($rs_badge); ?></span>
              <h1 class="revslider-title"><?php echo esc_html($rs_title); ?></h1>
              <p class="revslider-subtitle"><?php echo esc_html($rs_subtitle); ?></p>
              <div class="revslider-cta">
                <a href="<?php echo esc_attr($rs_cta_link); ?>" class="revslider-btn-primary"><?php echo esc_html($rs_cta_text); ?></a>
                <a href="#locations" class="revslider-btn-secondary"><?php echo esc_html($rs_secondary); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>


  <!-- ============================================
       SAFE & SECURE SECTION
       Two-column: trust features + GPhC registration card
       ============================================ -->
  <?php
  $safe_badge    = get_field('safe_badge_text') ?: 'GPhC Registered Pharmacy';
  $safe_title    = get_field('safe_title') ?: 'Safe and';
  $safe_title_g  = get_field('safe_title_gradient') ?: 'Secure';
  $safe_desc     = get_field('safe_description') ?: "Your safety is our top priority. We're fully regulated and inspected to ensure the highest standards of care.";
  $safe_co_reg   = get_field('safe_company_reg') ?: '06703027';
  $safe_gphc     = get_field('safe_gphc_number') ?: '1091169';
  $safe_super    = get_field('safe_superintendent_name') ?: 'Dilip Modhvadia';
  $safe_super_g  = get_field('safe_superintendent_gphc') ?: '2050606';
  $safe_verify   = get_field('safe_verify_url') ?: 'https://www.pharmacyregulation.org/registers/pharmacy/1091169';
  $safe_note     = get_field('safe_verify_note') ?: 'The GPhC is the official body that regulates and inspects all pharmacies in the UK';
  ?>
  <section class="safe-section">
    <div class="safe-bg"></div>
    <div class="safe-bg-shape-1"></div>
    <div class="safe-bg-shape-2"></div>
    <div class="section-container">

      <!-- Section header -->
      <div class="safe-header">
        <div class="section-badge">
          <span class="pulse-dot">
            <span></span>
            <span></span>
          </span>
          <span class="section-badge-text"><?php echo esc_html($safe_badge); ?></span>
        </div>
        <h2 class="safe-title"><?php echo esc_html($safe_title); ?> <span class="gradient-text"><?php echo esc_html($safe_title_g); ?></span></h2>
        <p class="safe-description"><?php echo esc_html($safe_desc); ?></p>
      </div>

      <!-- Two-column layout -->
      <div class="safe-grid">

        <!-- LEFT: Trust features -->
        <div class="safe-features">
          <?php if (have_rows('safe_features')) : ?>
            <?php while (have_rows('safe_features')) : the_row(); ?>
              <div class="safe-feature">
                <div class="safe-feature-card">
                  <div class="safe-feature-icon">
                    <i class="<?php echo esc_attr(get_sub_field('icon_class')); ?>"></i>
                  </div>
                  <div class="safe-feature-text">
                    <h3 class="safe-feature-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
                    <p class="safe-feature-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <div class="safe-feature"><div class="safe-feature-card"><div class="safe-feature-icon"><i class="fas fa-shield-halved"></i></div><div class="safe-feature-text"><h3 class="safe-feature-title">Registered UK Pharmacy</h3><p class="safe-feature-desc">Fully licensed and regulated by the General Pharmaceutical Council</p></div></div></div>
            <div class="safe-feature"><div class="safe-feature-card"><div class="safe-feature-icon"><i class="fas fa-clipboard-check"></i></div><div class="safe-feature-text"><h3 class="safe-feature-title">Fully Inspected &amp; Regulated</h3><p class="safe-feature-desc">Regular inspections ensure we meet the highest safety standards</p></div></div></div>
            <div class="safe-feature"><div class="safe-feature-card"><div class="safe-feature-icon"><i class="fas fa-check-circle"></i></div><div class="safe-feature-text"><h3 class="safe-feature-title">Approved UK-licensed Treatments</h3><p class="safe-feature-desc">Only genuine, MHRA-approved medications from trusted suppliers</p></div></div></div>
          <?php endif; ?>
        </div>

        <!-- RIGHT: GPhC Registration Card -->
        <div class="safe-card-wrapper">
          <div class="safe-card-glow"></div>
          <div class="safe-card">

            <!-- Verified badge -->
            <div class="safe-verified-badge">
              <div class="safe-verified-icon">
                <i class="fas fa-certificate"></i>
              </div>
              <span class="safe-verified-text">Verified Registration</span>
            </div>

            <h3 class="safe-card-title">General Pharmaceutical Council</h3>

            <!-- Registration details -->
            <div class="safe-details">

              <div class="safe-detail">
                <div class="safe-detail-icon"><i class="fas fa-building"></i></div>
                <div class="safe-detail-text">
                  <p class="safe-detail-label">Company Registration</p>
                  <p class="safe-detail-value"><?php echo esc_html($safe_co_reg); ?></p>
                </div>
              </div>

              <div class="safe-detail">
                <div class="safe-detail-icon"><i class="fas fa-store"></i></div>
                <div class="safe-detail-text">
                  <p class="safe-detail-label">GPhC Registered Pharmacy</p>
                  <p class="safe-detail-value"><?php echo esc_html($safe_gphc); ?></p>
                </div>
              </div>

              <div class="safe-detail">
                <div class="safe-detail-icon"><i class="fas fa-user-md"></i></div>
                <div class="safe-detail-text">
                  <p class="safe-detail-label">Superintendent Pharmacist</p>
                  <p class="safe-detail-value"><?php echo esc_html($safe_super); ?></p>
                  <p class="safe-detail-sub">GPhC Number: <?php echo esc_html($safe_super_g); ?></p>
                </div>
              </div>

            </div>

            <!-- Verify button -->
            <a href="<?php echo esc_url($safe_verify); ?>" target="_blank" rel="noopener noreferrer" class="safe-verify-button">
              <i class="fas fa-shield-halved"></i>
              Verify Our Registration
              <i class="fas fa-arrow-up-right-from-square"></i>
            </a>
            <p class="safe-verify-note"><?php echo esc_html($safe_note); ?></p>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================
       HEALTH HUB SECTION v1
       Blog/articles grid with 3 cards
       ============================================ -->
  <?php
  $hh_badge   = get_field('healthhub_badge_text') ?: 'Expert Advice';
  $hh_title   = get_field('healthhub_title') ?: 'Latest from the';
  $hh_title_g = get_field('healthhub_title_gradient') ?: 'Health Hub';
  $hh_link    = get_field('healthhub_view_all_link') ?: '#';
  ?>
  <section class="healthhub-section">
    <div class="section-container">

      <!-- Header row -->
      <div class="healthhub-header">
        <div class="healthhub-header-text">
          <div class="section-badge">
            <span class="pulse-dot">
              <span></span>
              <span></span>
            </span>
            <span class="section-badge-text"><?php echo esc_html($hh_badge); ?></span>
          </div>
          <h2 class="healthhub-title">
            <?php echo esc_html($hh_title); ?> <span class="gradient-text"><?php echo esc_html($hh_title_g); ?></span>
          </h2>
        </div>
        <a href="<?php echo esc_url($hh_link); ?>" class="healthhub-view-all">
          View all articles
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>

      <!-- Articles grid -->
      <div class="healthhub-grid">

        <?php if (have_rows('healthhub_articles')) : ?>
          <?php while (have_rows('healthhub_articles')) : the_row();
            $hh_img     = get_sub_field('image');
            $hh_img_url = $hh_img ? $hh_img['url'] : '';
            $hh_img_alt = $hh_img ? $hh_img['alt'] : '';
          ?>
            <a href="<?php echo esc_url(get_sub_field('link') ?: '#'); ?>" class="healthhub-card">
              <div class="healthhub-card-image">
                <img src="<?php echo esc_url($hh_img_url); ?>" alt="<?php echo esc_attr($hh_img_alt); ?>">
                <span class="healthhub-card-badge"><?php echo esc_html(get_sub_field('badge_text')); ?></span>
              </div>
              <div class="healthhub-card-content">
                <h3 class="healthhub-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
                <p class="healthhub-card-excerpt"><?php echo esc_html(get_sub_field('excerpt')); ?></p>
                <span class="healthhub-card-link">
                  Read Article
                  <i class="fas fa-arrow-right"></i>
                </span>
              </div>
            </a>
          <?php endwhile; ?>
        <?php else : ?>
          <a href="#" class="healthhub-card">
            <div class="healthhub-card-image"><img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=800&h=500&fit=crop" alt="Weight Loss Guide"><span class="healthhub-card-badge">Weight Loss</span></div>
            <div class="healthhub-card-content"><h3 class="healthhub-card-title">Understanding Medical Weight Loss: Is it Right for You?</h3><p class="healthhub-card-excerpt">Discover how modern GLP-1 treatments are revolutionising weight management for London residents.</p><span class="healthhub-card-link">Read Article <i class="fas fa-arrow-right"></i></span></div>
          </a>
          <a href="#" class="healthhub-card">
            <div class="healthhub-card-image"><img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&h=500&fit=crop" alt="Travel Health"><span class="healthhub-card-badge">Travel Health</span></div>
            <div class="healthhub-card-content"><h3 class="healthhub-card-title">The Ultimate Pre-Travel Health Checklist</h3><p class="healthhub-card-excerpt">From yellow fever to malaria prevention, here's what you need to know before your next adventure.</p><span class="healthhub-card-link">Read Article <i class="fas fa-arrow-right"></i></span></div>
          </a>
          <a href="#" class="healthhub-card">
            <div class="healthhub-card-image"><img src="https://c.animaapp.com/mldwlo03Vo3ysQ/img/uploaded-asset-1769518729428-0.jpeg" alt="Flu Vaccination"><span class="healthhub-card-badge">Seasonal Health</span></div>
            <div class="healthhub-card-content"><h3 class="healthhub-card-title">Why the Flu Jab is More Important Than Ever</h3><p class="healthhub-card-excerpt">Protect yourself and your family this winter. Learn about eligibility and private options.</p><span class="healthhub-card-link">Read Article <i class="fas fa-arrow-right"></i></span></div>
          </a>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <!-- ============================================
       LOCATION SECTION v1
       Full-width static map with floating info card overlay
       ============================================ -->
  <?php
  $loc_map       = get_field('location_map_image');
  $loc_map_url   = $loc_map ? $loc_map['url'] : 'https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771148093435-0.jpeg';
  $loc_map_alt   = $loc_map ? $loc_map['alt'] : 'Map showing Easy Pharmacy location in Ashford, Surrey near Ashford Common';
  $loc_badge     = get_field('location_badge_text') ?: 'Visit Us';
  $loc_title     = get_field('location_title') ?: 'Find';
  $loc_title_g   = get_field('location_title_gradient') ?: 'Easy Pharmacy';
  $loc_photo     = get_field('location_pharmacy_image');
  $loc_photo_url = $loc_photo ? $loc_photo['url'] : 'https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771150177537-0.jpeg';
  $loc_photo_alt = $loc_photo ? $loc_photo['alt'] : 'Ashford Common aerial view near Easy Pharmacy';
  $loc_address   = get_field('location_address') ?: "123 High Street\nAshford, Surrey\nTW15 1AB";
  $loc_directions = get_field('location_directions_url') ?: 'https://www.google.com/maps/dir/?api=1&destination=51.4340,-0.4668';
  $loc_phone     = get_field('location_phone') ?: '01784 255 222';
  $loc_email     = get_field('location_email') ?: 'hello@easypharmacy.co.uk';
  $loc_parking   = get_field('location_parking_info') ?: 'Free customer parking available directly outside the pharmacy.';
  $loc_cta_text  = get_field('location_primary_cta_text') ?: 'Book an Appointment';
  $loc_cta_link  = get_field('location_primary_cta_link') ?: '#';
  ?>
  <section class="location-section" id="location">
    <div class="location-map-wrapper">
      <img src="<?php echo esc_url($loc_map_url); ?>" alt="<?php echo esc_attr($loc_map_alt); ?>" class="location-map-image" />
      <div class="location-map-overlay"></div>
    </div>

    <!-- Floating info card -->
    <div class="section-container">
      <div class="location-card">

        <!-- Header -->
        <div class="location-card-header">
          <div class="section-badge">
            <span class="pulse-dot">
              <span></span>
              <span></span>
            </span>
            <span class="section-badge-text"><?php echo esc_html($loc_badge); ?></span>
          </div>
          <h2 class="location-card-title"><?php echo esc_html($loc_title); ?> <span class="gradient-text"><?php echo esc_html($loc_title_g); ?></span></h2>
        </div>

        <!-- Pharmacy image -->
        <div class="location-pharmacy-image">
          <img src="<?php echo esc_url($loc_photo_url); ?>" alt="<?php echo esc_attr($loc_photo_alt); ?>" />
        </div>

        <!-- Details grid -->
        <div class="location-details">

          <!-- Address -->
          <div class="location-detail">
            <div class="location-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="location-detail-text">
              <h3 class="location-detail-label">Address</h3>
              <p class="location-detail-value"><?php echo nl2br(esc_html($loc_address)); ?></p>
              <a href="<?php echo esc_url($loc_directions); ?>" target="_blank" rel="noopener noreferrer" class="location-directions-link">
                <i class="fas fa-diamond-turn-right"></i>
                Get Directions
              </a>
            </div>
          </div>

          <!-- Opening hours -->
          <div class="location-detail">
            <div class="location-detail-icon"><i class="fas fa-clock"></i></div>
            <div class="location-detail-text">
              <h3 class="location-detail-label">Opening Hours</h3>
              <div class="location-hours">
                <?php if (have_rows('location_hours')) : ?>
                  <?php while (have_rows('location_hours')) : the_row();
                    $is_closed = get_sub_field('is_closed');
                  ?>
                    <div class="location-hours-row">
                      <span class="location-hours-day"><?php echo esc_html(get_sub_field('day')); ?></span>
                      <span class="location-hours-time<?php echo $is_closed ? ' location-hours-closed' : ''; ?>"><?php echo $is_closed ? 'Closed' : esc_html(get_sub_field('time')); ?></span>
                    </div>
                  <?php endwhile; ?>
                <?php else : ?>
                  <div class="location-hours-row"><span class="location-hours-day">Mon – Fri</span><span class="location-hours-time">9:00am – 6:00pm</span></div>
                  <div class="location-hours-row"><span class="location-hours-day">Saturday</span><span class="location-hours-time">9:00am – 1:00pm</span></div>
                  <div class="location-hours-row"><span class="location-hours-day">Sunday</span><span class="location-hours-time location-hours-closed">Closed</span></div>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Contact -->
          <div class="location-detail">
            <div class="location-detail-icon"><i class="fas fa-phone"></i></div>
            <div class="location-detail-text">
              <h3 class="location-detail-label">Contact</h3>
              <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $loc_phone)); ?>" class="location-contact-link"><?php echo esc_html($loc_phone); ?></a>
              <a href="mailto:<?php echo esc_attr($loc_email); ?>" class="location-contact-link"><?php echo esc_html($loc_email); ?></a>
            </div>
          </div>

          <!-- Parking -->
          <div class="location-detail">
            <div class="location-detail-icon"><i class="fas fa-square-parking"></i></div>
            <div class="location-detail-text">
              <h3 class="location-detail-label">Parking</h3>
              <p class="location-detail-value"><?php echo esc_html($loc_parking); ?></p>
            </div>
          </div>

        </div>

        <!-- CTA -->
        <div class="location-card-cta">
          <a href="<?php echo esc_url($loc_cta_link); ?>" class="cta-button primary-cta">
            <?php echo esc_html($loc_cta_text); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $loc_phone)); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call Us
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================
       TESTIMONIALS SECTION v1
       Asymmetric grid: 2 large (7col), 2 medium (5col)
       ============================================ -->
  <?php
  $test_badge      = get_field('testimonials_badge_text') ?: 'Real Transformations';
  $test_title_s    = get_field('testimonials_title_start') ?: 'Real Results.';
  $test_title_g    = get_field('testimonials_title_gradient') ?: 'Lasting Health.';
  $test_desc       = get_field('testimonials_description') ?: 'See how our patients across Ashford have transformed their health with our personalised care.';
  $test_disclaimer = get_field('testimonials_disclaimer') ?: 'The results below are from real Easy Pharmacy patients. Individual results may vary.';
  $test_cta_title  = get_field('testimonials_cta_title') ?: 'Trusted by 10,000+ Ashford Customers';
  $test_cta_text   = get_field('testimonials_cta_text') ?: 'No waiting lists. No hidden fees. Just expert, local healthcare you can rely on.';
  $test_cta_rating = get_field('testimonials_cta_rating') ?: '4.9';
  $test_cta_label  = get_field('testimonials_cta_label') ?: 'Google Rating';
  ?>
  <section class="testimonials-section">
    <div class="section-container">

      <!-- Section header -->
      <div class="testimonials-header">
        <div class="section-badge">
          <span class="section-badge-text"><?php echo esc_html($test_badge); ?></span>
        </div>
        <h2 class="testimonials-title">
          <?php echo esc_html($test_title_s); ?> <span class="gradient-text"><?php echo esc_html($test_title_g); ?></span>
        </h2>
        <p class="testimonials-description"><?php echo esc_html($test_desc); ?></p>
        <div class="testimonials-disclaimer">
          <i class="fas fa-info-circle"></i>
          <p><strong>Transparency Note:</strong> <?php echo esc_html($test_disclaimer); ?></p>
        </div>
      </div>

      <!-- Testimonial grid -->
      <div class="testimonials-grid">

        <?php if (have_rows('testimonials_cards')) : ?>
          <?php while (have_rows('testimonials_cards')) : the_row();
            $tc_size     = get_sub_field('card_size') ?: 'medium';
            $tc_quote    = get_sub_field('quote');
            $tc_name     = get_sub_field('author_name');
            $tc_initials = get_sub_field('author_initials');
            $tc_service  = get_sub_field('service');
            $is_large    = ($tc_size === 'large');
          ?>
            <div class="testimonial-card testimonial-card-<?php echo esc_attr($tc_size); ?>">
              <div class="testimonial-verified">
                <i class="fas fa-check-circle"></i>
                <span><?php echo $is_large ? 'Verified Patient' : 'Verified'; ?></span>
              </div>
              <div class="testimonial-card-body">
                <div class="star-row<?php echo $is_large ? ' star-row-large' : ''; ?>">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <blockquote class="testimonial-quote<?php echo $is_large ? ' testimonial-quote-large' : ''; ?>">
                  <?php echo wp_kses_post($tc_quote); ?>
                </blockquote>
                <div class="testimonial-author-row">
                  <div class="testimonial-avatar<?php echo $is_large ? ' testimonial-avatar-large' : ''; ?>"><?php echo esc_html($tc_initials); ?></div>
                  <div class="testimonial-author-info">
                    <span class="testimonial-service"><?php echo esc_html($tc_service); ?></span>
                    <h4 class="testimonial-author-name<?php echo $is_large ? ' testimonial-author-name-large' : ''; ?>"><?php echo esc_html($tc_name); ?></h4>
                    <p class="testimonial-author-status">Verified Patient</p>
                  </div>
                </div>
                <?php if (have_rows('highlights')) : ?>
                  <div class="testimonial-highlights">
                    <?php while (have_rows('highlights')) : the_row(); ?>
                      <div class="testimonial-highlight-item">
                        <i class="<?php echo esc_attr(get_sub_field('icon_class')); ?>"></i>
                        <span><?php echo esc_html(get_sub_field('text')); ?></span>
                      </div>
                    <?php endwhile; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <!-- Fallback: hardcoded testimonials -->
          <div class="testimonial-card testimonial-card-large">
            <div class="testimonial-verified"><i class="fas fa-check-circle"></i><span>Verified Patient</span></div>
            <div class="testimonial-card-body">
              <div class="star-row star-row-large"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              <blockquote class="testimonial-quote testimonial-quote-large">"Needed a <span class="testimonial-highlight">last minute vaccination</span> for a holiday. It was easy to book, and convenient to get to and park. The prices are <span class="testimonial-highlight">'all-in'</span> ... Whole process from end-to-end was <span class="testimonial-highlight">friendly, fast and efficient</span>."</blockquote>
              <div class="testimonial-author-row"><div class="testimonial-avatar testimonial-avatar-large">PF</div><div class="testimonial-author-info"><span class="testimonial-service">Travel Clinic</span><h4 class="testimonial-author-name testimonial-author-name-large">Paul Fegan</h4><p class="testimonial-author-status">Verified Patient</p></div></div>
              <div class="testimonial-highlights"><div class="testimonial-highlight-item"><i class="fas fa-calendar-check"></i><span>Easy Booking</span></div><div class="testimonial-highlight-item"><i class="fas fa-car"></i><span>Free Parking</span></div><div class="testimonial-highlight-item"><i class="fas fa-tags"></i><span>All-in Price</span></div></div>
            </div>
          </div>
          <div class="testimonial-card testimonial-card-medium">
            <div class="testimonial-verified"><i class="fas fa-check-circle"></i><span>Verified</span></div>
            <div class="testimonial-card-body">
              <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              <blockquote class="testimonial-quote">"Highly recommend. They were able to see me <span class="testimonial-highlight">really quickly</span>. The guy who did my vaccination was very nice and chatty, as well as <span class="testimonial-highlight">informative</span>."</blockquote>
              <div class="testimonial-author-row"><div class="testimonial-avatar">GP</div><div class="testimonial-author-info"><span class="testimonial-service">Travel Vaccinations</span><h4 class="testimonial-author-name">Georgia Porter</h4><p class="testimonial-author-status">Verified Patient</p></div></div>
              <div class="testimonial-checklist"><div class="testimonial-check"><i class="fas fa-check"></i><span>Quick Appointment</span></div><div class="testimonial-check"><i class="fas fa-check"></i><span>Informative Staff</span></div></div>
            </div>
          </div>
          <div class="testimonial-card testimonial-card-medium">
            <div class="testimonial-verified"><i class="fas fa-check-circle"></i><span>Verified</span></div>
            <div class="testimonial-card-body">
              <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              <blockquote class="testimonial-quote">"Very good service... They have looked at my ears, removed wax and discovered that there was an infection... <span class="testimonial-highlight">Very efficient, straight forward and honest</span>."</blockquote>
              <div class="testimonial-author-row"><div class="testimonial-avatar">GK</div><div class="testimonial-author-info"><span class="testimonial-service">Ear Wax Removal</span><h4 class="testimonial-author-name">Giedrius K.</h4><p class="testimonial-author-status">Verified Patient</p></div></div>
              <div class="testimonial-checklist"><div class="testimonial-check"><i class="fas fa-check"></i><span>Thorough Check</span></div><div class="testimonial-check"><i class="fas fa-check"></i><span>Honest Advice</span></div></div>
            </div>
          </div>
        <?php endif; ?>

        <!-- CTA Card (always shown) -->
        <div class="testimonial-card testimonial-card-cta">
          <div class="testimonial-cta-glow"></div>
          <div class="testimonial-cta-body">
            <div class="testimonial-cta-content">
              <h3 class="testimonial-cta-title"><?php echo esc_html($test_cta_title); ?></h3>
              <p class="testimonial-cta-text"><?php echo esc_html($test_cta_text); ?></p>
            </div>
            <div class="testimonial-cta-rating">
              <div class="testimonial-cta-rating-card">
                <span class="testimonial-cta-score"><?php echo esc_html($test_cta_rating); ?></span>
                <div class="star-row star-row-small">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <span class="testimonial-cta-label"><?php echo esc_html($test_cta_label); ?></span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================
       STICKY CTA BAR
       Appears after scrolling past hero, fixed bottom (mobile) / side (desktop)
       ============================================ -->
  <?php
  $sticky_title    = get_field('sticky_cta_title') ?: 'Ready to Transform Your Health?';
  $sticky_subtitle = get_field('sticky_cta_subtitle') ?: 'Book your consultation today';
  $sticky_btn_text = get_field('sticky_cta_primary_text') ?: 'Book Now';
  $sticky_btn_link = get_field('sticky_cta_primary_link') ?: '#';
  $sticky_phone    = get_field('sticky_cta_phone') ?: '01784 255 222';
  $sticky_phone_raw = preg_replace('/\s+/', '', $sticky_phone);
  ?>
  <div class="sticky-cta-bar" id="stickyCTA">
    <div class="sticky-cta-content">
      <div class="sticky-cta-text">
        <span class="sticky-cta-title"><?php echo esc_html($sticky_title); ?></span>
        <span class="sticky-cta-subtitle"><?php echo esc_html($sticky_subtitle); ?></span>
      </div>
      <div class="sticky-cta-buttons">
        <a href="<?php echo esc_url($sticky_btn_link); ?>" class="sticky-cta-button sticky-cta-primary">
          <i class="fas fa-calendar-check"></i>
          <span><?php echo esc_html($sticky_btn_text); ?></span>
        </a>
        <a href="tel:<?php echo esc_attr($sticky_phone_raw); ?>" class="sticky-cta-button sticky-cta-secondary">
          <i class="fas fa-phone"></i>
          <span class="desktop-only">Call: <?php echo esc_html($sticky_phone); ?></span>
          <span class="mobile-only">Call Us</span>
        </a>
      </div>
    </div>
    <button class="sticky-cta-close" onclick="closeStickyCTA()" aria-label="Close sticky bar">
      <i class="fas fa-times"></i>
    </button>
  </div>

  <!-- Sticky CTA JavaScript -->
  <script>
    // Show sticky CTA after scrolling past hero
    let stickyBar = document.getElementById('stickyCTA');
    let hasShown = false;

    window.addEventListener('scroll', function() {
      let scrollPosition = window.scrollY;
      let heroHeight = document.querySelector('.hero-section').offsetHeight;

      if (scrollPosition > heroHeight * 0.7 && !hasShown) {
        stickyBar.classList.add('sticky-cta-visible');
        hasShown = true;
      }
    });

    // Close sticky CTA
    function closeStickyCTA() {
      stickyBar.classList.remove('sticky-cta-visible');
      stickyBar.classList.add('sticky-cta-hidden');
    }
  </script>

<?php get_footer(); ?>
