<?php
/**
 * Template Name: Hair Loss Treatment
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="hairloss-hero-section">
  <div class="hairloss-hero-bg"></div>
  <div class="hairloss-hero-dots"></div>
  <div class="hairloss-hero-glow-1"></div>
  <div class="hairloss-hero-glow-2"></div>

  <div class="section-container">
    <div class="hairloss-hero-grid">

      <div class="hairloss-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html(ep_field('hl_hero_badge', 'HAIR LOSS TREATMENT')); ?></span>
        </div>

        <h1 class="hairloss-hero-title">
          <?php echo esc_html(ep_field('hl_hero_title_line1', 'Regrow Your Confidence with')); ?> <span class="gradient-text"><?php echo esc_html(ep_field('hl_hero_title_highlight', 'Expert Hair Loss Treatment')); ?></span>
        </h1>

        <p class="hairloss-hero-description">
          <?php echo esc_html(ep_field('hl_hero_description', 'Clinically proven treatments including Finasteride and Minoxidil. Face-to-face consultations with our GPhC-registered pharmacist in Ashford.')); ?>
        </p>

        <ul class="hairloss-hero-features">
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('hl_feature_1', 'Prescription treatments (Finasteride)')); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('hl_feature_2', 'Over-the-counter solutions (Minoxidil)')); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('hl_feature_3', 'Personalised treatment plans')); ?></li>
        </ul>

        <div class="hairloss-hero-actions">
          <a href="<?php echo esc_url( ep_field( 'hl_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( ep_field( 'hl_hero_cta_text', 'Book Consultation' ) ); ?> <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i> <?php echo esc_html( ep_phone() ); ?>
          </a>
        </div>
      </div>

      <?php
      $hl_hero_image_id  = ep_field( 'hl_hero_image' );
      $hl_hero_image_url = $hl_hero_image_id ? wp_get_attachment_image_url( $hl_hero_image_id, 'large' ) : '';
      if ( $hl_hero_image_url ) :
      ?>
      <div class="hairloss-hero-visual">
        <div class="hairloss-hero-image-card">
          <img src="<?php echo esc_url( $hl_hero_image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'hl_hero_image_alt', 'Before and after hair restoration comparison' ) ); ?>" class="hairloss-hero-image" />
          <div class="hairloss-hero-overlay"></div>
          <div class="hairloss-hero-caption">
            <div class="star-row">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p>Real results from our patients</p>
          </div>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>

<!-- Social Proof Section — Google rating badge + trust headline -->
<section class="hl-social-proof-section">
  <div class="section-container">
    <div class="hl-social-proof-wrapper">

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
      <div class="hl-social-proof-content">
        <p class="hl-social-proof-eyebrow"><?php echo esc_html( ep_field( 'hl_social_eyebrow', 'TRUSTED BY ASHFORD' ) ); ?></p>
        <h2 class="hl-social-proof-headline"><?php echo esc_html( ep_field( 'hl_social_headline', 'Expert hair loss treatment from your local GPhC-registered pharmacist' ) ); ?></h2>
        <p class="hl-social-proof-subtext"><?php echo esc_html( ep_field( 'hl_social_subtext', 'Over 500 patients treated with clinically proven hair loss solutions. GPhC-registered, with typical results in 6-12 months.' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Understanding Hair Loss Section -->
<section class="hairloss-about-section">
  <div class="section-container">
    <div class="hairloss-about-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('hl_about_badge', 'CAUSES & SOLUTIONS')); ?></span>
      </div>
      <h2 class="hairloss-about-title"><?php echo esc_html(ep_field('hl_about_title_line1', 'Understanding')); ?> <span class="gradient-text"><?php echo esc_html(ep_field('hl_about_title_highlight', 'Male Pattern Baldness')); ?></span></h2>
      <p class="hairloss-about-desc"><?php echo esc_html(ep_field('hl_about_description', 'Hair loss affects up to 50% of men by age 50. The most common cause is androgenetic alopecia (male pattern baldness), caused by genetic sensitivity to DHT hormone.')); ?></p>
    </div>

    <div class="hairloss-about-grid">
      <?php if (have_rows('hl_about_cards')) : while (have_rows('hl_about_cards')) : the_row(); ?>
        <div class="hairloss-about-card">
          <div class="hairloss-about-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3 class="hairloss-about-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="hairloss-about-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
          <?php
          $about_card_image_id  = get_sub_field( 'image' );
          $about_card_image_url = $about_card_image_id ? wp_get_attachment_image_url( $about_card_image_id, 'treatment-card' ) : '';
          if ( $about_card_image_url ) : ?>
            <div class="hairloss-about-image-wrapper">
              <img src="<?php echo esc_url( $about_card_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-about-card">
          <div class="hairloss-about-icon"><i class="fas fa-dna"></i></div>
          <h3 class="hairloss-about-card-title">DHT Hormone</h3>
          <p class="hairloss-about-card-desc">Testosterone converts to DHT, which shrinks hair follicles and shortens the growth cycle.</p>
        </div>
        <div class="hairloss-about-card">
          <div class="hairloss-about-icon"><i class="fas fa-chart-line"></i></div>
          <h3 class="hairloss-about-card-title">Progressive Condition</h3>
          <p class="hairloss-about-card-desc">Hair loss typically starts at the temples and crown, gradually spreading over years.</p>
        </div>
        <div class="hairloss-about-card">
          <div class="hairloss-about-icon"><i class="fas fa-pills"></i></div>
          <h3 class="hairloss-about-card-title">Proven Treatments</h3>
          <p class="hairloss-about-card-desc">Finasteride blocks DHT production. Minoxidil stimulates blood flow to follicles.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Treatment Options -->
<section class="hairloss-treatments-section">
  <div class="section-container">
    <div class="hairloss-treatments-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('hl_treatments_badge', 'PRESCRIPTION & OTC')); ?></span>
      </div>
      <h2 class="hairloss-treatments-title"><?php echo esc_html(ep_field('hl_treatments_title_line1', 'Our')); ?> <span class="gradient-text"><?php echo esc_html(ep_field('hl_treatments_title_highlight', 'Hair Loss Treatments')); ?></span></h2>
    </div>

    <div class="hairloss-treatments-grid">
      <?php if (have_rows('hl_treatments')) : while (have_rows('hl_treatments')) : the_row(); ?>
        <div class="hairloss-treatment-card">
          <?php if (get_sub_field('is_featured')) : ?><div class="hairloss-treatment-glow"></div><?php endif; ?>
          <div class="hairloss-treatment-badge <?php echo esc_attr(get_sub_field('badge_type')); ?>"><?php echo esc_html(get_sub_field('badge_text')); ?></div>
          <?php
          $treatment_image_id  = get_sub_field( 'image' );
          $treatment_image_url = $treatment_image_id ? wp_get_attachment_image_url( $treatment_image_id, 'treatment-card' ) : '';
          if ( $treatment_image_url ) : ?>
          <div class="hairloss-treatment-image-container">
            <img src="<?php echo esc_url( $treatment_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" class="hairloss-treatment-img" />
          </div>
          <?php endif; ?>
          <h3 class="hairloss-treatment-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="hairloss-treatment-subtitle"><?php echo esc_html(get_sub_field('subtitle')); ?></p>
          <div class="hairloss-treatment-divider"></div>
          <h4 class="hairloss-treatment-heading">How It Works</h4>
          <p class="hairloss-treatment-text"><?php echo esc_html(get_sub_field('how_it_works')); ?></p>
          <h4 class="hairloss-treatment-heading">Results</h4>
          <ul class="hairloss-treatment-list">
            <?php if (have_rows('results')) : while (have_rows('results')) : the_row(); ?>
              <li><i class="fas fa-circle-check"></i> <?php echo esc_html(get_sub_field('text')); ?></li>
            <?php endwhile; endif; ?>
          </ul>
          <div class="hairloss-treatment-details">
            <div class="detail"><span class="label">Duration</span><span class="value"><?php echo esc_html(get_sub_field('duration')); ?></span></div>
            <div class="detail"><span class="label">Price</span><span class="value"><?php echo esc_html(get_sub_field('price')); ?></span></div>
          </div>
          <a href="<?php echo esc_url( ep_field( 'hl_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button <?php echo get_sub_field('is_featured') ? 'primary-cta' : 'secondary-cta'; ?> hairloss-treatment-btn"><?php echo esc_html(get_sub_field('button_text')); ?></a>
        </div>
      <?php endwhile; else : ?>
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
          <a href="<?php echo esc_url( ep_booking_url() ); ?>" class="cta-button primary-cta hairloss-treatment-btn">Book Consultation</a>
        </div>
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
          <a href="<?php echo esc_url( ep_booking_url() ); ?>" class="cta-button secondary-cta hairloss-treatment-btn">Visit In-Store</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Combination Therapy -->
<section class="hairloss-combo-section">
  <div class="section-container">
    <div class="hairloss-combo-grid">
      <?php
      $combo_image_id  = ep_field( 'hl_combo_image' );
      $combo_image_url = $combo_image_id ? wp_get_attachment_image_url( $combo_image_id, 'large' ) : '';
      if ( $combo_image_url ) :
      ?>
      <div class="hairloss-combo-image-wrapper">
        <div class="hairloss-combo-image-card">
          <img src="<?php echo esc_url( $combo_image_url ); ?>" alt="Combined hair loss therapy products" class="hairloss-combo-image" />
        </div>
      </div>
      <?php endif; ?>
      <div class="hairloss-combo-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html(ep_field('hl_combo_badge', 'BEST RESULTS')); ?></span>
        </div>
        <h2 class="hairloss-combo-title"><?php echo esc_html(ep_field('hl_combo_title_line1', 'Combining')); ?> <span class="gradient-text"><?php echo esc_html(ep_field('hl_combo_title_highlight', 'Finasteride + Minoxidil')); ?></span></h2>
        <p class="hairloss-combo-desc"><?php echo esc_html(ep_field('hl_combo_description', 'Studies show that using both treatments together provides the best results for hair regrowth and prevention.')); ?></p>
        <ul class="hairloss-combo-benefits">
          <?php if (have_rows('hl_combo_benefits')) : while (have_rows('hl_combo_benefits')) : the_row(); ?>
            <li>
              <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="text"><strong>Maximum DHT Blocking</strong><p>Finasteride prevents hormone conversion</p></div></li>
            <li><div class="icon"><i class="fas fa-droplet"></i></div><div class="text"><strong>Enhanced Blood Flow</strong><p>Minoxidil stimulates follicle growth</p></div></li>
            <li><div class="icon"><i class="fas fa-chart-line"></i></div><div class="text"><strong>85% Success Rate</strong><p>When both treatments are combined</p></div></li>
            <li><div class="icon"><i class="fas fa-calendar"></i></div><div class="text"><strong>Faster Results</strong><p>Visible improvements in 3-4 months</p></div></li>
          <?php endif; ?>
        </ul>
        <div class="hairloss-combo-comparison">
          <p class="single"><?php echo esc_html(ep_field('hl_combo_single', 'Single Treatment: 40-65% success rate')); ?></p>
          <p class="combined"><?php echo esc_html(ep_field('hl_combo_combined', 'Combined Therapy: 80-85% success rate')); ?></p>
        </div>
        <a href="<?php echo esc_url( ep_field( 'hl_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta">Discuss Combined Treatment</a>
      </div>
    </div>
  </div>
</section>

<!-- Eligibility Section -->
<section class="hairloss-eligibility-section">
  <div class="section-container">
    <div class="hairloss-eligibility-header">
      <h2 class="hairloss-eligibility-title"><?php echo esc_html(ep_field('hl_eligibility_title', 'Am I Suitable for Treatment?')); ?></h2>
    </div>
    <div class="hairloss-eligibility-grid">
      <?php if (have_rows('hl_eligibility_cards')) : while (have_rows('hl_eligibility_cards')) : the_row(); ?>
        <div class="hairloss-eligibility-card">
          <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <div class="badge <?php echo esc_attr(get_sub_field('badge_type')); ?>"><?php echo esc_html(get_sub_field('badge_text')); ?></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <ul class="check-list">
            <?php if (have_rows('items')) : while (have_rows('items')) : the_row(); ?>
              <li><i class="fas fa-circle-check"></i> <?php echo esc_html(get_sub_field('text')); ?></li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-eligibility-card">
          <div class="icon"><i class="fas fa-check-circle"></i></div>
          <div class="badge suitable">SUITABLE</div>
          <h3>Ideal Candidates</h3>
          <ul class="check-list">
            <li><i class="fas fa-circle-check"></i> Men aged 18-65</li>
            <li><i class="fas fa-circle-check"></i> Male pattern baldness</li>
            <li><i class="fas fa-circle-check"></i> Recent hair loss (last 5 years)</li>
            <li><i class="fas fa-circle-check"></i> Hair on crown still visible</li>
            <li><i class="fas fa-circle-check"></i> Realistic expectations</li>
          </ul>
        </div>
        <div class="hairloss-eligibility-card">
          <div class="icon"><i class="fas fa-clipboard-check"></i></div>
          <div class="badge assessment">ASSESSMENT NEEDED</div>
          <h3>Requires Consultation</h3>
          <ul class="check-list">
            <li><i class="fas fa-circle-check"></i> Patchy hair loss</li>
            <li><i class="fas fa-circle-check"></i> Sudden hair loss</li>
            <li><i class="fas fa-circle-check"></i> Scalp conditions present</li>
            <li><i class="fas fa-circle-check"></i> Taking other medications</li>
            <li><i class="fas fa-circle-check"></i> Previous reactions to treatments</li>
          </ul>
        </div>
        <div class="hairloss-eligibility-card">
          <div class="icon"><i class="fas fa-info-circle"></i></div>
          <div class="badge not-suitable">NOT RECOMMENDED</div>
          <h3>Cannot Prescribe</h3>
          <ul class="check-list">
            <li><i class="fas fa-circle-check"></i> Women (Finasteride contraindicated)</li>
            <li><i class="fas fa-circle-check"></i> Complete baldness (no follicles)</li>
            <li><i class="fas fa-circle-check"></i> Non-hormonal hair loss</li>
            <li><i class="fas fa-circle-check"></i> Certain medical conditions</li>
          </ul>
        </div>
      <?php endif; ?>
    </div>
    <p class="hairloss-eligibility-note"><?php echo esc_html(ep_field('hl_eligibility_note', 'Our pharmacist will assess your suitability during consultation and recommend the best treatment plan')); ?></p>
  </div>
</section>

<!-- Process Section -->
<section class="hairloss-process-section">
  <div class="section-container">
    <div class="hairloss-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('hl_process_badge', 'HOW IT WORKS')); ?></span>
      </div>
      <h2 class="hairloss-process-title"><?php echo esc_html(ep_field('hl_process_title_line1', 'Your Hair Loss Treatment')); ?> <span class="gradient-text"><?php echo esc_html(ep_field('hl_process_title_highlight', 'Journey')); ?></span></h2>
    </div>
    <div class="hairloss-process-grid">
      <?php if (have_rows('hl_process_steps')) : $step_num = 0; while (have_rows('hl_process_steps')) : the_row(); $step_num++; ?>
        <div class="hairloss-process-card">
          <div class="number"><?php echo esc_html($step_num); ?></div>
          <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
          <span class="time-badge"><?php echo esc_html(get_sub_field('time_badge')); ?></span>
          <?php if ($step_num < 4) : ?><div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div><?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-process-card">
          <div class="number">1</div><div class="icon"><i class="fas fa-calendar-check"></i></div>
          <h3>Book Consultation</h3><p>Call or book online for a private consultation at our Ashford pharmacy</p>
          <span class="time-badge">15-20 minutes</span><div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">2</div><div class="icon"><i class="fas fa-user-md"></i></div>
          <h3>Assessment</h3><p>Discuss hair loss pattern, medical history, and treatment goals with our pharmacist</p>
          <span class="time-badge">During consultation</span><div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">3</div><div class="icon"><i class="fas fa-file-medical"></i></div>
          <h3>Treatment Plan</h3><p>Receive personalised recommendation. Prescription issued if suitable for Finasteride</p>
          <span class="time-badge">Same day</span><div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">4</div><div class="icon"><i class="fas fa-rotate"></i></div>
          <h3>Ongoing Support</h3><p>Regular check-ins to monitor progress, adjust treatment, and review results</p>
          <span class="time-badge">3-6 month reviews</span>
        </div>
      <?php endif; ?>
    </div>
    <div class="hairloss-process-cta">
      <a href="<?php echo esc_url( ep_field( 'hl_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta">Start Your Journey</a>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="hairloss-faq-section">
  <div class="section-container">
    <div class="hairloss-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('hl_faq_badge', 'COMMON QUESTIONS')); ?></span>
      </div>
      <h2 class="hairloss-faq-title"><?php echo esc_html(ep_field('hl_faq_title_line1', 'Hair Loss Treatment')); ?> <span class="gradient-text"><?php echo esc_html(ep_field('hl_faq_title_highlight', 'FAQs')); ?></span></h2>
    </div>
    <div class="hairloss-faq-list">
      <?php if (have_rows('hl_faqs')) : $faq_num = 0; while (have_rows('hl_faqs')) : the_row(); $faq_num++; ?>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="hairloss-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-faq-item"><button class="hairloss-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How long until I see results?</span><i class="fas fa-plus icon"></i></button><div class="hairloss-faq-content"><p>Finasteride typically shows results in 3-6 months. Minoxidil in 4-6 months. Maximum results appear after 12-18 months of consistent use. Hair loss should stop within 3 months.</p></div></div>
        <div class="hairloss-faq-item"><button class="hairloss-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Do I need a prescription for these treatments?</span><i class="fas fa-plus icon"></i></button><div class="hairloss-faq-content"><p>Finasteride requires a prescription after pharmacist consultation. Minoxidil is available over-the-counter without prescription, though we recommend a consultation to ensure suitability.</p></div></div>
        <div class="hairloss-faq-item"><button class="hairloss-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Are there side effects?</span><i class="fas fa-plus icon"></i></button><div class="hairloss-faq-content"><p>Finasteride: Rare sexual side effects in 2-3% of users (reversible). Minoxidil: Scalp irritation or dryness in some users. We'll discuss all risks during consultation.</p></div></div>
        <div class="hairloss-faq-item"><button class="hairloss-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">What happens if I stop treatment?</span><i class="fas fa-plus icon"></i></button><div class="hairloss-faq-content"><p>Hair loss will gradually resume within 3-6 months of stopping treatment. These are ongoing treatments - results are maintained only with continued use.</p></div></div>
        <div class="hairloss-faq-item"><button class="hairloss-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Can I use both treatments together?</span><i class="fas fa-plus icon"></i></button><div class="hairloss-faq-content"><p>Yes! Combining Finasteride and Minoxidil provides the best results with success rates up to 85%. This is often recommended for maximum effectiveness.</p></div></div>
        <div class="hairloss-faq-item"><button class="hairloss-faq-btn" onclick="toggleFAQ(this)"><span class="num">06</span><span class="text">Why choose Easy Pharmacy over online providers?</span><i class="fas fa-plus icon"></i></button><div class="hairloss-faq-content"><p>Face-to-face assessment ensures treatment suitability. Ongoing local support and monitoring. Immediate access to professional advice. No waiting for postal delivery - collect same day.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="hairloss-cta-section">
  <div class="section-container">
    <div class="hairloss-cta-content">
      <h2 class="hairloss-cta-title"><?php echo esc_html(ep_field('hl_cta_title', 'Ready to Start Your Hair Regrowth Journey?')); ?></h2>
      <p class="hairloss-cta-desc"><?php echo esc_html(ep_field('hl_cta_description', 'Book a free consultation with our GPhC-registered pharmacist in Ashford')); ?></p>
      <div class="hairloss-cta-actions">
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button hairloss-cta-btn">
          <i class="fas fa-phone"></i> Call <?php echo esc_html( ep_phone() ); ?>
        </a>
        <div class="hairloss-cta-badge">
          <?php echo esc_html(ep_field('hl_cta_hours', 'Open Mon-Fri 9am-6pm, Sat 9am-1pm')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
