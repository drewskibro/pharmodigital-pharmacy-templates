<?php
/**
 * Template Name: Weight Loss
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
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
          <span class="section-badge-text"><?php echo esc_html(ep_field('wl_hero_badge', 'MEDICAL WEIGHT LOSS')); ?></span>
        </div>

        <h1 class="wl-hero-title">
          <span class="gradient-text"><?php echo esc_html(ep_field('wl_hero_title_highlight', 'Mounjaro & Wegovy')); ?></span> <?php echo esc_html(ep_field('wl_hero_title', 'weight loss that works when diets have failed')); ?>
        </h1>

        <p class="wl-hero-description">
          <?php echo esc_html(ep_field('wl_hero_description', 'Prescription Mounjaro and Wegovy (GLP-1 treatments) with expert guidance and face-to-face support right here in Ashford. No remote consultations—real care from someone who knows your name.')); ?>
        </p>

        <div class="wl-hero-actions">
          <a href="<?php echo esc_url(ep_field('wl_hero_cta_url', '#calculator')); ?>" class="cta-button primary-cta">
            <?php echo esc_html(ep_field('wl_hero_cta_text', 'Book Consultation')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(ep_field('wl_phone_number', '01784255222')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(ep_field('wl_phone_display', 'Call 01784 255 222')); ?>
          </a>
        </div>

        <!-- Testimonial Card -->
        <div class="wl-hero-testimonial">
          <div class="wl-hero-testimonial-quote-icon">
            <i class="fas fa-quote-left"></i>
          </div>
          <p class="wl-hero-testimonial-quote">
            <?php echo esc_html(ep_field('wl_hero_testimonial_quote', '"I travel 40 miles every month to see Dilip for my weight loss consultations—he\'s that good. Would never go anywhere else."')); ?>
          </p>
          <div class="wl-hero-testimonial-footer">
            <div class="wl-hero-testimonial-author">
              <p class="wl-hero-testimonial-name"><?php echo esc_html(ep_field('wl_hero_testimonial_name', 'Ashford Patient')); ?></p>
              <p class="wl-hero-testimonial-location"><?php echo esc_html(ep_field('wl_hero_testimonial_location', 'Ashford')); ?></p>
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
      <div class="wl-hero-images">
        <?php
        $hero_images = array(
          array('field' => 'wl_hero_image_1', 'default' => 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=400&h=400&fit=crop', 'alt' => 'Weight loss success story', 'class' => 'wl-hero-image-1'),
          array('field' => 'wl_hero_image_2', 'default' => 'https://images.unsplash.com/photo-1434682881908-b43d0467b798?w=400&h=400&fit=crop', 'alt' => 'Healthy lifestyle transformation', 'class' => 'wl-hero-image-2'),
          array('field' => 'wl_hero_image_3', 'default' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=800&h=400&fit=crop', 'alt' => 'Fitness and wellness journey', 'class' => 'wl-hero-image-3'),
        );
        foreach ($hero_images as $img) :
          $image_url = ep_field($img['field'], $img['default']);
        ?>
          <div class="wl-hero-image <?php echo esc_attr($img['class']); ?>">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
            <div class="wl-hero-image-overlay"></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="wl-stats-section">
  <div class="wl-stats-shimmer"></div>
  <div class="wl-stats-dots"></div>
  <div class="section-container">
    <div class="wl-stats-grid">
      <?php if (have_rows('wl_stats')) : while (have_rows('wl_stats')) : the_row(); ?>
        <div class="wl-stat-item">
          <div class="wl-stat-icon">
            <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
          </div>
          <div class="wl-stat-content">
            <p class="wl-stat-number"><?php echo esc_html(get_sub_field('number')); ?></p>
            <p class="wl-stat-label"><?php echo esc_html(get_sub_field('label')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="wl-stat-item">
          <div class="wl-stat-icon"><i class="fas fa-star"></i></div>
          <div class="wl-stat-content"><p class="wl-stat-number">4.7&#9733;</p><p class="wl-stat-label">Google Rating</p></div>
        </div>
        <div class="wl-stat-item">
          <div class="wl-stat-icon"><i class="fas fa-users"></i></div>
          <div class="wl-stat-content"><p class="wl-stat-number">300+</p><p class="wl-stat-label">Patients Helped</p></div>
        </div>
        <div class="wl-stat-item desktop-only">
          <div class="wl-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="wl-stat-content"><p class="wl-stat-number">GPhC</p><p class="wl-stat-label">Registered</p></div>
        </div>
        <div class="wl-stat-item">
          <div class="wl-stat-icon"><i class="fas fa-award"></i></div>
          <div class="wl-stat-content"><p class="wl-stat-number">30+</p><p class="wl-stat-label">Years Experience</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Results Showcase -->
<section class="wl-results-section">
  <div class="section-container">
    <div class="wl-results-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('wl_results_badge', 'REAL RESULTS')); ?></span>
      </div>
      <h2 class="wl-results-title"><?php echo esc_html(ep_field('wl_results_title', 'Real Mounjaro & Wegovy results in Ashford')); ?></h2>
      <p class="wl-results-description"><?php echo esc_html(ep_field('wl_results_description', 'Ashford patients using Mounjaro or Wegovy lose an average of 10-15% of their body weight in 12 months with our personalised programmes.')); ?></p>
    </div>
    <div class="wl-results-grid">
      <div class="wl-results-card">
        <div class="star-row wl-results-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="wl-results-number gradient-text"><?php echo esc_html(ep_field('wl_results_rating', '4.7/5')); ?></p>
        <p class="wl-results-label"><?php echo esc_html(ep_field('wl_results_rating_label', 'Patient satisfaction')); ?></p>
        <p class="wl-results-sublabel"><?php echo esc_html(ep_field('wl_results_rating_sub', 'Based on verified reviews')); ?></p>
      </div>
      <div class="wl-results-card wl-results-card-featured">
        <div class="wl-results-featured-badge"><?php echo esc_html(ep_field('wl_results_featured_badge', 'Most Important')); ?></div>
        <div class="wl-results-featured-bg-dots"></div>
        <div class="wl-results-featured-circle"></div>
        <div class="wl-results-featured-square"></div>
        <div class="wl-results-featured-icon"><i class="fas fa-chart-line"></i></div>
        <p class="wl-results-featured-number"><?php echo esc_html(ep_field('wl_results_featured_number', '10-15%')); ?></p>
        <p class="wl-results-featured-label"><?php echo esc_html(ep_field('wl_results_featured_label', 'Average weight loss')); ?></p>
        <p class="wl-results-featured-sublabel"><?php echo esc_html(ep_field('wl_results_featured_sub', 'In 12 months')); ?></p>
      </div>
      <div class="wl-results-card">
        <div class="wl-results-icon"><i class="fas fa-user-group"></i></div>
        <p class="wl-results-number gradient-text"><?php echo esc_html(ep_field('wl_results_patients', '300+')); ?></p>
        <p class="wl-results-label"><?php echo esc_html(ep_field('wl_results_patients_label', 'Ashford residents')); ?></p>
        <p class="wl-results-sublabel"><?php echo esc_html(ep_field('wl_results_patients_sub', 'Successfully helped')); ?></p>
      </div>
    </div>
    <p class="wl-results-disclaimer">
      <i class="fas fa-info-circle"></i>
      <?php echo esc_html(ep_field('wl_results_disclaimer', 'Results vary by individual. Weight loss depends on adherence to treatment, lifestyle changes, and individual metabolism.')); ?>
    </p>
  </div>
</section>

<!-- Features Section -->
<section class="wl-features-section">
  <div class="section-container">
    <div class="wl-features-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('wl_features_badge', 'Why Choose Us')); ?></span>
      </div>
      <h2 class="wl-features-title"><?php echo esc_html(ep_field('wl_features_title', 'The Easy Pharmacy Difference')); ?></h2>
      <div class="wl-features-divider"></div>
      <p class="wl-features-description"><?php echo esc_html(ep_field('wl_features_description', 'Real face-to-face support. Expert guidance. Proven results.')); ?></p>
    </div>

    <div class="wl-features-grid">
      <div class="wl-features-image-wrapper">
        <div class="wl-features-image-bg-circle"></div>
        <div class="wl-features-image-card">
          <img src="<?php echo esc_url(ep_field('wl_features_image', 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=600&h=700&fit=crop')); ?>" alt="<?php echo esc_attr(ep_field('wl_features_image_alt', 'Weight loss success patient')); ?>" />
        </div>
        <div class="wl-features-badge wl-features-badge-rating">
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="wl-features-badge-text">4.7/5</p>
        </div>
        <div class="wl-features-badge wl-features-badge-patients">
          <i class="fas fa-users"></i>
          <p class="wl-features-badge-text">300+ Patients Helped</p>
        </div>
      </div>

      <div class="wl-features-content">
        <?php if (have_rows('wl_features')) : while (have_rows('wl_features')) : the_row(); ?>
          <div class="wl-features-card">
            <div class="wl-features-card-icon">
              <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
            </div>
            <div class="wl-features-card-text">
              <h3 class="wl-features-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
              <p class="wl-features-card-description"><?php echo esc_html(get_sub_field('description')); ?></p>
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
          <a href="<?php echo esc_url(ep_field('wl_hero_cta_url', '#calculator')); ?>" class="cta-button primary-cta">
            Start Your Journey <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(ep_field('wl_phone_number', '01784255222')); ?>" class="cta-button secondary-cta">
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

<!-- CTA Bar -->
<section class="wl-cta-bar">
  <div class="wl-cta-bar-shimmer"></div>
  <div class="section-container">
    <div class="wl-cta-bar-content">
      <div class="wl-cta-bar-text">
        <h3 class="wl-cta-bar-title"><?php echo esc_html(ep_field('wl_cta_bar_title', 'Ready to transform your health?')); ?></h3>
        <p class="wl-cta-bar-subtitle"><?php echo esc_html(ep_field('wl_cta_bar_subtitle', 'Book your consultation with Dilip today')); ?></p>
      </div>
      <a href="<?php echo esc_url(ep_field('wl_hero_cta_url', '#calculator')); ?>" class="cta-button primary-cta wl-cta-bar-button">
        <?php echo esc_html(ep_field('wl_hero_cta_text', 'Book Consultation')); ?>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- Journey Steps -->
<section class="wl-journey-section">
  <div class="section-container">
    <div class="wl-journey-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('wl_journey_badge', 'HOW WE SUPPORT YOU')); ?></span>
      </div>
      <h2 class="wl-journey-title"><?php echo esc_html(ep_field('wl_journey_title', 'Your path to lasting weight loss')); ?></h2>
      <p class="wl-journey-description"><?php echo esc_html(ep_field('wl_journey_description', 'A structured, evidence-based approach with regular face-to-face support every step of the way.')); ?></p>
    </div>

    <?php if (have_rows('wl_journey_steps')) : $step_count = 0; while (have_rows('wl_journey_steps')) : the_row(); $step_count++;
      $direction = ($step_count % 2 === 1) ? 'left' : 'right';
    ?>
      <div class="wl-journey-step wl-journey-step-<?php echo esc_attr($direction); ?>">
        <?php if ($direction === 'right') : ?>
          <div class="wl-journey-step-image">
            <img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" />
          </div>
        <?php endif; ?>
        <div class="wl-journey-step-content">
          <div class="wl-journey-step-number"><?php echo esc_html($step_count); ?></div>
          <div class="wl-journey-step-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3 class="wl-journey-step-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="wl-journey-step-description"><?php echo esc_html(get_sub_field('description')); ?></p>
          <div class="wl-journey-step-meta">
            <i class="<?php echo esc_attr(get_sub_field('meta_icon')); ?>"></i>
            <span><?php echo esc_html(get_sub_field('meta_text')); ?></span>
          </div>
        </div>
        <?php if ($direction === 'left') : ?>
          <div class="wl-journey-step-image">
            <img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" />
          </div>
        <?php endif; ?>
      </div>
    <?php endwhile; else : ?>
      <?php get_template_part('template-parts/weight-loss/section', 'journey-defaults'); ?>
    <?php endif; ?>
  </div>
</section>

<!-- Calculator Section -->
<section class="wl-calculator-section" id="calculator">
  <div class="section-container">
    <div class="wl-calculator-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('wl_calc_badge', 'CLINICAL ESTIMATOR')); ?></span>
      </div>
      <h2 class="wl-calculator-title"><?php echo esc_html(ep_field('wl_calc_title', 'Estimate Your Weight Loss Journey')); ?></h2>
      <p class="wl-calculator-description"><?php echo esc_html(ep_field('wl_calc_description', 'Based on clinical trial data for GLP-1 medications like Mounjaro and Wegovy. See what\'s medically achievable for you.')); ?></p>
    </div>
    <div class="wl-calculator-grid">
      <div class="wl-calculator-image-wrapper">
        <div class="wl-calculator-image-card">
          <img src="<?php echo esc_url(ep_field('wl_calc_image', 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=600&h=800&fit=crop')); ?>" alt="Weight loss transformation" />
        </div>
        <div class="wl-calculator-badge">
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="wl-calculator-badge-number">15-20%</p>
          <p class="wl-calculator-badge-text">Avg. Body Weight Loss</p>
        </div>
      </div>
      <div class="wl-calculator-form-wrapper">
        <div class="wl-calculator-form-header">
          <i class="fas fa-calculator"></i>
          <h3 class="wl-calculator-form-title">Weight Loss Estimator</h3>
        </div>
        <form class="wl-calculator-form" id="weightLossCalculator">
          <div class="wl-calculator-input-group">
            <label class="wl-calculator-label">Current Weight</label>
            <div class="wl-calculator-input-wrapper">
              <input type="number" id="weightInput" class="wl-calculator-input" placeholder="Enter weight" min="40" max="300" required />
              <div class="wl-calculator-toggle">
                <button type="button" class="wl-calculator-toggle-btn wl-calculator-toggle-active" data-unit="kg">kg</button>
                <button type="button" class="wl-calculator-toggle-btn" data-unit="st">st</button>
              </div>
            </div>
          </div>
          <div class="wl-calculator-input-group">
            <label class="wl-calculator-label">Height</label>
            <div class="wl-calculator-input-wrapper">
              <input type="number" id="heightInput" class="wl-calculator-input" placeholder="Enter height" min="120" max="250" required />
              <div class="wl-calculator-toggle">
                <button type="button" class="wl-calculator-toggle-btn wl-calculator-toggle-active" data-unit="cm">cm</button>
                <button type="button" class="wl-calculator-toggle-btn" data-unit="ft">ft/in</button>
              </div>
            </div>
          </div>
          <button type="submit" class="cta-button primary-cta wl-calculator-submit">
            Calculate Potential Results <i class="fas fa-arrow-right"></i>
          </button>
        </form>
        <div class="wl-calculator-results" id="calculatorResults" style="display: none;">
          <div class="wl-calculator-results-header">
            <i class="fas fa-chart-line"></i>
            <h4 class="wl-calculator-results-title">Your Estimated Results</h4>
          </div>
          <div class="wl-calculator-bmi-card">
            <div class="wl-calculator-bmi-circle">
              <span class="wl-calculator-bmi-number" id="bmiNumber">0</span>
            </div>
            <div class="wl-calculator-bmi-text">
              <p class="wl-calculator-bmi-label">Current BMI</p>
              <p class="wl-calculator-bmi-category" id="bmiCategory">Normal</p>
            </div>
          </div>
          <div class="wl-calculator-projection-card">
            <h5 class="wl-calculator-projection-title">Projected 12-Month Result</h5>
            <p class="wl-calculator-projection-range" id="projectionRange">0 - 0 kg</p>
            <p class="wl-calculator-projection-subtitle">Based on 10-15% weight loss</p>
          </div>
          <div class="wl-calculator-timeline">
            <div class="wl-calculator-timeline-item">
              <div class="wl-calculator-timeline-bar"><div class="wl-calculator-timeline-fill" style="width: 25%;"></div></div>
              <p class="wl-calculator-timeline-label">Month 3</p>
            </div>
            <div class="wl-calculator-timeline-item">
              <div class="wl-calculator-timeline-bar"><div class="wl-calculator-timeline-fill" style="width: 50%;"></div></div>
              <p class="wl-calculator-timeline-label">Month 6</p>
            </div>
            <div class="wl-calculator-timeline-item">
              <div class="wl-calculator-timeline-bar"><div class="wl-calculator-timeline-fill wl-calculator-timeline-fill-full" style="width: 100%;"></div></div>
              <p class="wl-calculator-timeline-label">Month 12</p>
            </div>
          </div>
          <p class="wl-calculator-disclaimer"><i class="fas fa-info-circle"></i> Results are estimates based on clinical trial data. Individual results may vary.</p>
          <a href="<?php echo esc_url(ep_field('wl_book_url', '/book-appointment/')); ?>" class="cta-button primary-cta">
            Book Your Consultation <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pharmacist Section -->
<?php get_template_part('template-parts/section', 'pharmacist'); ?>

<!-- FAQ Section -->
<section class="wl-faq-section">
  <div class="section-container">
    <div class="wl-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('wl_faq_badge', 'FREQUENTLY ASKED QUESTIONS')); ?></span>
      </div>
      <h2 class="wl-faq-title"><?php echo esc_html(ep_field('wl_faq_title', 'Your questions answered')); ?></h2>
      <div class="wl-faq-divider"></div>
      <p class="wl-faq-description"><?php echo esc_html(ep_field('wl_faq_description', 'Get answers to the most common weight loss questions')); ?></p>
    </div>

    <div class="wl-faq-list">
      <?php if (have_rows('wl_faqs')) : $faq_num = 0; while (have_rows('wl_faqs')) : the_row(); $faq_num++; ?>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number"><?php echo esc_html($faq_num); ?></span>
            <span class="wl-faq-question-text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
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
            <p>Clinical trials show patients typically lose 15-20% of their body weight over 12 months with GLP-1 treatments like Mounjaro and Wegovy.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">2</span>
            <span class="wl-faq-question-text">Do I need a GP referral?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>No, you don't need a GP referral. Dilip is an Independent Prescriber, which means he can assess your suitability and prescribe weight loss medication directly.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">3</span>
            <span class="wl-faq-question-text">What's the difference between Mounjaro and Wegovy?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Both are GLP-1 treatments, but Mounjaro (tirzepatide) also activates GIP receptors, making it a dual-action medication. Clinical trials show Mounjaro may lead to slightly greater weight loss.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">4</span>
            <span class="wl-faq-question-text">Are there any side effects?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Common side effects include nausea, vomiting, diarrhea, and constipation, especially when starting treatment or increasing doses. These typically improve over time.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">5</span>
            <span class="wl-faq-question-text">How much does treatment cost?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Treatment starts from &pound;125 per month, which includes your medication, monthly face-to-face consultations, and ongoing support.</p>
          </div>
        </div>
        <div class="wl-faq-item">
          <button class="wl-faq-question" onclick="toggleFAQ(this)">
            <span class="wl-faq-number">6</span>
            <span class="wl-faq-question-text">How long does treatment take?</span>
            <i class="fas fa-plus wl-faq-icon"></i>
          </button>
          <div class="wl-faq-answer">
            <p>Most patients see significant results within 3-6 months and reach their target weight within 12 months.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="wl-testimonials-section">
  <div class="section-container">
    <div class="wl-testimonials-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('wl_testimonials_badge', 'SUCCESS STORIES')); ?></span>
      </div>
      <h2 class="wl-testimonials-title"><?php echo esc_html(ep_field('wl_testimonials_title', 'Real Ashford success stories')); ?></h2>
      <div class="wl-testimonials-divider"></div>
      <p class="wl-testimonials-description"><?php echo esc_html(ep_field('wl_testimonials_description', 'See how our patients have transformed their lives with medical weight loss')); ?></p>
    </div>

    <div class="wl-testimonials-grid">
      <?php if (have_rows('wl_testimonials')) : while (have_rows('wl_testimonials')) : the_row(); ?>
        <div class="wl-testimonial-card">
          <div class="wl-testimonial-circle">
            <span class="wl-testimonial-circle-number"><?php echo esc_html(get_sub_field('weight_lost_short')); ?></span>
          </div>
          <h3 class="wl-testimonial-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="wl-testimonial-quote"><?php echo esc_html(get_sub_field('quote')); ?></p>
          <div class="star-row wl-testimonial-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="wl-testimonial-author"><?php echo esc_html(get_sub_field('author')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="wl-testimonial-card">
          <div class="wl-testimonial-circle"><span class="wl-testimonial-circle-number">6</span></div>
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

<!-- Final CTA Section -->
<section class="wl-final-cta-section">
  <div class="wl-final-cta-glow-1"></div>
  <div class="wl-final-cta-glow-2"></div>
  <div class="wl-final-cta-circle"></div>
  <div class="wl-final-cta-square"></div>
  <div class="wl-final-cta-dots"></div>

  <div class="section-container">
    <div class="wl-final-cta-content">
      <div class="wl-final-cta-badges">
        <div class="wl-final-cta-badge"><i class="fas fa-shield-halved"></i><span>GPhC Registered</span></div>
        <div class="wl-final-cta-badge"><i class="fas fa-user-doctor"></i><span>Independent Prescriber</span></div>
        <div class="wl-final-cta-badge"><i class="fas fa-users"></i><span>300+ Patients Helped</span></div>
      </div>

      <h2 class="wl-final-cta-title"><?php echo esc_html(ep_field('wl_final_cta_title', 'Ready to start your weight loss journey?')); ?></h2>
      <p class="wl-final-cta-description"><?php echo esc_html(ep_field('wl_final_cta_description', 'Join 300+ Ashford residents who\'ve transformed their lives with medical weight loss. Book your consultation with Dilip today.')); ?></p>

      <div class="wl-final-cta-actions">
        <a href="<?php echo esc_url(ep_field('wl_book_url', '/book-appointment/')); ?>" class="cta-button primary-cta wl-final-cta-button-white">
          Book Your Consultation <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr(ep_field('wl_phone_number', '01784255222')); ?>" class="cta-button secondary-cta wl-final-cta-button-outlined">
          <i class="fas fa-phone"></i> <?php echo esc_html(ep_field('wl_phone_display', 'Call 01784 255 222')); ?>
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
