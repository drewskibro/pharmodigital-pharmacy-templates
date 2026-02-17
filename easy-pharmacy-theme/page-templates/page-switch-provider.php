<?php
/**
 * Template Name: Switch Provider
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="switch-hero-section">
  <div class="switch-hero-bg"></div>
  <div class="switch-hero-dots"></div>
  <div class="switch-hero-glow-1"></div>
  <div class="switch-hero-glow-2"></div>

  <div class="section-container">
    <div class="switch-hero-grid">

      <!-- Left: Content -->
      <div class="switch-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html(ep_field('sp_hero_badge', 'SWITCH TO EASY PHARMACY')); ?></span>
        </div>

        <h1 class="switch-hero-title">
          <?php echo esc_html(ep_field('sp_hero_title_line1', 'Switch Your Weight Loss Provider to')); ?>
          <span class="gradient-text"><?php echo esc_html(ep_field('sp_hero_title_highlight', 'Easy Pharmacy')); ?></span>
        </h1>

        <p class="switch-hero-description">
          <?php echo esc_html(ep_field('sp_hero_description', 'Tired of remote consultations and impersonal online providers? Switch to Easy Pharmacy for face-to-face care with a pharmacist who knows your name.')); ?>
        </p>

        <ul class="switch-hero-features">
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('sp_hero_feature_1', 'Face-to-face consultations every month')); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('sp_hero_feature_2', 'Same pharmacist every visit')); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('sp_hero_feature_3', 'No waiting for deliveries')); ?></li>
        </ul>

        <div class="switch-hero-actions">
          <a href="<?php echo esc_url(ep_field('sp_hero_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">
            <?php echo esc_html(ep_field('sp_hero_cta_text', 'Switch Now')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(ep_field('sp_phone_number', '01784255222')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(ep_field('sp_phone_display', 'Call 01784 255 222')); ?>
          </a>
        </div>
      </div>

      <!-- Right: Testimonial Card -->
      <div class="switch-hero-visual">
        <div class="switch-hero-testimonial-card">
          <div class="switch-hero-testimonial-quote">
            <i class="fas fa-quote-left"></i>
          </div>
          <p class="switch-hero-testimonial-text">
            <?php echo esc_html(ep_field('sp_hero_testimonial', '"I switched from an online provider and the difference is night and day. Seeing Dilip face-to-face gives me so much more confidence."')); ?>
          </p>
          <div class="star-row">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="switch-hero-testimonial-author"><?php echo esc_html(ep_field('sp_hero_testimonial_author', 'Recent Switcher, Ashford')); ?></p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="switch-stats-section">
  <div class="switch-stats-overlap"></div>
  <div class="section-container">
    <div class="switch-stats-grid">
      <?php if (have_rows('sp_stats')) : while (have_rows('sp_stats')) : the_row(); ?>
        <div class="switch-stat-item">
          <div class="switch-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <div class="switch-stat-content">
            <span class="switch-stat-number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="switch-stat-label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="switch-stat-item">
          <div class="switch-stat-icon"><i class="fas fa-users"></i></div>
          <div class="switch-stat-content"><span class="switch-stat-number">100+</span><span class="switch-stat-label">Patients Switched</span></div>
        </div>
        <div class="switch-stat-item">
          <div class="switch-stat-icon"><i class="fas fa-star"></i></div>
          <div class="switch-stat-content"><span class="switch-stat-number">4.7&#9733;</span><span class="switch-stat-label">Google Rating</span></div>
        </div>
        <div class="switch-stat-item">
          <div class="switch-stat-icon"><i class="fas fa-clock"></i></div>
          <div class="switch-stat-content"><span class="switch-stat-number">Same Day</span><span class="switch-stat-label">Appointments</span></div>
        </div>
        <div class="switch-stat-item">
          <div class="switch-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="switch-stat-content"><span class="switch-stat-number">GPhC</span><span class="switch-stat-label">Registered</span></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Comparison Section -->
<section class="switch-comparison-section">
  <div class="section-container">
    <div class="switch-comparison-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('sp_compare_badge', 'WHY SWITCH?')); ?></span>
      </div>
      <h2 class="switch-comparison-title"><?php echo esc_html(ep_field('sp_compare_title', 'National Provider vs Easy Pharmacy')); ?></h2>
      <p class="switch-comparison-description"><?php echo esc_html(ep_field('sp_compare_description', 'See the difference local, face-to-face care makes')); ?></p>
    </div>

    <div class="switch-comparison-grid">
      <!-- National Provider Card -->
      <div class="switch-comparison-card switch-comparison-card-other">
        <div class="switch-comparison-card-header">
          <h3><?php echo esc_html(ep_field('sp_compare_other_title', 'National Provider')); ?></h3>
        </div>
        <ul class="switch-comparison-list">
          <?php if (have_rows('sp_comparison_other')) : while (have_rows('sp_comparison_other')) : the_row(); ?>
            <li class="switch-comparison-item negative">
              <i class="fas fa-times-circle"></i>
              <span><?php echo esc_html(get_sub_field('text')); ?></span>
            </li>
          <?php endwhile; else : ?>
            <li class="switch-comparison-item negative"><i class="fas fa-times-circle"></i><span>Remote video consultations only</span></li>
            <li class="switch-comparison-item negative"><i class="fas fa-times-circle"></i><span>Different clinician each time</span></li>
            <li class="switch-comparison-item negative"><i class="fas fa-times-circle"></i><span>Wait for postal delivery</span></li>
            <li class="switch-comparison-item negative"><i class="fas fa-times-circle"></i><span>No in-person support</span></li>
            <li class="switch-comparison-item negative"><i class="fas fa-times-circle"></i><span>Generic treatment plans</span></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Easy Pharmacy Card -->
      <div class="switch-comparison-card switch-comparison-card-ep">
        <div class="switch-comparison-card-header">
          <h3><?php echo esc_html(ep_field('sp_compare_ep_title', 'Easy Pharmacy')); ?></h3>
          <span class="switch-comparison-recommended">Recommended</span>
        </div>
        <ul class="switch-comparison-list">
          <?php if (have_rows('sp_comparison_ep')) : while (have_rows('sp_comparison_ep')) : the_row(); ?>
            <li class="switch-comparison-item positive">
              <i class="fas fa-check-circle"></i>
              <span><?php echo esc_html(get_sub_field('text')); ?></span>
            </li>
          <?php endwhile; else : ?>
            <li class="switch-comparison-item positive"><i class="fas fa-check-circle"></i><span>Face-to-face every month</span></li>
            <li class="switch-comparison-item positive"><i class="fas fa-check-circle"></i><span>Same pharmacist (Dilip)</span></li>
            <li class="switch-comparison-item positive"><i class="fas fa-check-circle"></i><span>Collect same day</span></li>
            <li class="switch-comparison-item positive"><i class="fas fa-check-circle"></i><span>Personal ongoing support</span></li>
            <li class="switch-comparison-item positive"><i class="fas fa-check-circle"></i><span>Personalised treatment plans</span></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Benefits Section -->
<section class="switch-benefits-section">
  <div class="section-container">
    <div class="switch-benefits-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('sp_benefits_badge', 'BENEFITS')); ?></span>
      </div>
      <h2 class="switch-benefits-title"><?php echo esc_html(ep_field('sp_benefits_title', 'Why patients love switching')); ?></h2>
    </div>

    <div class="switch-benefits-grid">
      <?php if (have_rows('sp_benefits')) : while (have_rows('sp_benefits')) : the_row(); ?>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3 class="switch-benefit-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="switch-benefit-description"><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-user-doctor"></i></div>
          <h3 class="switch-benefit-title">Personal Care</h3>
          <p class="switch-benefit-description">See the same pharmacist every month. No more repeating your story to a different clinician each time.</p>
        </div>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-handshake"></i></div>
          <h3 class="switch-benefit-title">Face-to-Face Support</h3>
          <p class="switch-benefit-description">Real consultations, not video calls. Sit down with Dilip and discuss your progress in person.</p>
        </div>
        <div class="switch-benefit-card">
          <div class="switch-benefit-icon"><i class="fas fa-clock"></i></div>
          <h3 class="switch-benefit-title">No More Waiting</h3>
          <p class="switch-benefit-description">Collect your medication the same day. No waiting for postal deliveries or dealing with delays.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="switch-process-section">
  <div class="section-container">
    <div class="switch-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('sp_process_badge', 'HOW TO SWITCH')); ?></span>
      </div>
      <h2 class="switch-process-title"><?php echo esc_html(ep_field('sp_process_title', 'Switching is simple')); ?></h2>
      <p class="switch-process-description"><?php echo esc_html(ep_field('sp_process_description', 'Follow these easy steps to switch your weight loss provider')); ?></p>
    </div>

    <?php if (have_rows('sp_steps')) : $step_count = 0; while (have_rows('sp_steps')) : the_row(); $step_count++;
      $direction = ($step_count % 2 === 1) ? 'left' : 'right';
    ?>
      <div class="switch-process-step switch-process-step-<?php echo esc_attr($direction); ?>">
        <div class="switch-process-step-content">
          <div class="switch-process-step-number"><?php echo esc_html($step_count); ?></div>
          <div class="switch-process-step-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3 class="switch-process-step-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="switch-process-step-description"><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
        <div class="switch-process-step-image">
          <img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" />
        </div>
      </div>
    <?php endwhile; else : ?>
      <div class="switch-process-step switch-process-step-left">
        <div class="switch-process-step-content">
          <div class="switch-process-step-number">1</div>
          <div class="switch-process-step-icon"><i class="fas fa-calendar-check"></i></div>
          <h3 class="switch-process-step-title">Book an Appointment</h3>
          <p class="switch-process-step-description">Call us or book online. Tell us you're switching from another provider and we'll prioritise your appointment.</p>
        </div>
        <div class="switch-process-step-image">
          <img src="https://images.unsplash.com/photo-1434682881908-b43d0467b798?w=600&h=400&fit=crop" alt="Book appointment" />
        </div>
      </div>
      <div class="switch-process-step switch-process-step-right">
        <div class="switch-process-step-content">
          <div class="switch-process-step-number">2</div>
          <div class="switch-process-step-icon"><i class="fas fa-user-doctor"></i></div>
          <h3 class="switch-process-step-title">Meet Your Pharmacist</h3>
          <p class="switch-process-step-description">Sit down with Dilip for a face-to-face consultation. We'll review your current treatment and medical history.</p>
        </div>
        <div class="switch-process-step-image">
          <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=400&fit=crop" alt="Meet pharmacist" />
        </div>
      </div>
      <div class="switch-process-step switch-process-step-left">
        <div class="switch-process-step-content">
          <div class="switch-process-step-number">3</div>
          <div class="switch-process-step-icon"><i class="fas fa-file-medical"></i></div>
          <h3 class="switch-process-step-title">Seamless Transition</h3>
          <p class="switch-process-step-description">We handle everything. Continue your current medication with zero gaps or interruptions in your treatment.</p>
        </div>
        <div class="switch-process-step-image">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop" alt="Seamless transition" />
        </div>
      </div>
      <div class="switch-process-step switch-process-step-right">
        <div class="switch-process-step-content">
          <div class="switch-process-step-number">4</div>
          <div class="switch-process-step-icon"><i class="fas fa-rotate"></i></div>
          <h3 class="switch-process-step-title">Ongoing Support</h3>
          <p class="switch-process-step-description">Monthly face-to-face check-ins with the same pharmacist. Real support, real results, real accountability.</p>
        </div>
        <div class="switch-process-step-image">
          <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=600&h=400&fit=crop" alt="Ongoing support" />
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- Detailed Comparison Section -->
<section class="switch-comparison-detail-section">
  <div class="section-container">
    <div class="switch-comparison-detail-header">
      <h2 class="switch-comparison-detail-title"><?php echo esc_html(ep_field('sp_detail_title', 'Feature-by-feature comparison')); ?></h2>
    </div>

    <div class="switch-comparison-detail-table">
      <div class="switch-comparison-detail-row switch-comparison-detail-header-row">
        <div class="switch-comparison-detail-feature">Feature</div>
        <div class="switch-comparison-detail-other">National Provider</div>
        <div class="switch-comparison-detail-ep">Easy Pharmacy</div>
      </div>
      <?php if (have_rows('sp_comparison_features')) : while (have_rows('sp_comparison_features')) : the_row(); ?>
        <div class="switch-comparison-detail-row">
          <div class="switch-comparison-detail-feature"><?php echo esc_html(get_sub_field('feature')); ?></div>
          <div class="switch-comparison-detail-other"><?php echo esc_html(get_sub_field('other')); ?></div>
          <div class="switch-comparison-detail-ep"><?php echo esc_html(get_sub_field('ep')); ?></div>
        </div>
      <?php endwhile; else : ?>
        <div class="switch-comparison-detail-row">
          <div class="switch-comparison-detail-feature">Consultations</div>
          <div class="switch-comparison-detail-other">Video / Phone</div>
          <div class="switch-comparison-detail-ep">Face-to-face</div>
        </div>
        <div class="switch-comparison-detail-row">
          <div class="switch-comparison-detail-feature">Clinician</div>
          <div class="switch-comparison-detail-other">Different each time</div>
          <div class="switch-comparison-detail-ep">Same pharmacist</div>
        </div>
        <div class="switch-comparison-detail-row">
          <div class="switch-comparison-detail-feature">Medication</div>
          <div class="switch-comparison-detail-other">Postal delivery</div>
          <div class="switch-comparison-detail-ep">Collect same day</div>
        </div>
        <div class="switch-comparison-detail-row">
          <div class="switch-comparison-detail-feature">Support</div>
          <div class="switch-comparison-detail-other">Online / Chat</div>
          <div class="switch-comparison-detail-ep">In-person anytime</div>
        </div>
        <div class="switch-comparison-detail-row">
          <div class="switch-comparison-detail-feature">Treatment Plans</div>
          <div class="switch-comparison-detail-other">Standardised</div>
          <div class="switch-comparison-detail-ep">Personalised</div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="switch-testimonials-section">
  <div class="section-container">
    <div class="switch-testimonials-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('sp_testimonials_badge', 'PATIENT STORIES')); ?></span>
      </div>
      <h2 class="switch-testimonials-title"><?php echo esc_html(ep_field('sp_testimonials_title', 'Why patients switched')); ?></h2>
    </div>

    <div class="switch-testimonials-grid">
      <?php if (have_rows('sp_testimonials')) : while (have_rows('sp_testimonials')) : the_row(); ?>
        <div class="switch-testimonial-card">
          <div class="switch-testimonial-quote"><i class="fas fa-quote-left"></i></div>
          <p class="switch-testimonial-text"><?php echo esc_html(get_sub_field('quote')); ?></p>
          <div class="star-row">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="switch-testimonial-author"><?php echo esc_html(get_sub_field('author')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="switch-testimonial-card">
          <div class="switch-testimonial-quote"><i class="fas fa-quote-left"></i></div>
          <p class="switch-testimonial-text">"I was with an online provider for 6 months. Switching to Easy Pharmacy was the best decision. Seeing Dilip in person makes such a difference."</p>
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="switch-testimonial-author">Ashford Patient</p>
        </div>
        <div class="switch-testimonial-card">
          <div class="switch-testimonial-quote"><i class="fas fa-quote-left"></i></div>
          <p class="switch-testimonial-text">"No more waiting for deliveries. I collect my medication on the day and get proper support. Worth every penny."</p>
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="switch-testimonial-author">Ashford Patient</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="switch-cta-section">
  <div class="switch-cta-glow-1"></div>
  <div class="switch-cta-glow-2"></div>
  <div class="section-container">
    <div class="switch-cta-content">
      <h2 class="switch-cta-title"><?php echo esc_html(ep_field('sp_cta_title', 'Ready to experience better care?')); ?></h2>
      <p class="switch-cta-description"><?php echo esc_html(ep_field('sp_cta_description', 'Switch to Easy Pharmacy today. Same medication, better support, real results.')); ?></p>
      <div class="switch-cta-actions">
        <a href="<?php echo esc_url(ep_field('sp_hero_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta switch-cta-button-white">
          Switch Now <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr(ep_field('sp_phone_number', '01784255222')); ?>" class="cta-button secondary-cta switch-cta-button-outlined">
          <i class="fas fa-phone"></i> <?php echo esc_html(ep_field('sp_phone_display', 'Call 01784 255 222')); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
