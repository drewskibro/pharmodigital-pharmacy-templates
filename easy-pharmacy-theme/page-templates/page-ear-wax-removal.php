<?php
/**
 * Template Name: Ear Wax Removal
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="earwax-hero-section">
  <div class="earwax-hero-bg"></div>
  <div class="earwax-hero-dots"></div>
  <div class="earwax-hero-glow-1"></div>
  <div class="earwax-hero-glow-2"></div>

  <div class="section-container">
    <div class="earwax-hero-grid">

      <div class="earwax-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html(ep_field('ew_hero_badge', 'EAR WAX REMOVAL')); ?></span>
        </div>

        <h1 class="earwax-hero-title">
          <?php echo esc_html(ep_field('ew_hero_title_line1', 'Professional')); ?>
          <span class="gradient-text"><?php echo esc_html(ep_field('ew_hero_title_highlight', 'Ear Wax Removal')); ?></span>
          <?php echo esc_html(ep_field('ew_hero_title_line2', 'in Ashford')); ?>
        </h1>

        <p class="earwax-hero-description">
          <?php echo esc_html(ep_field('ew_hero_description', 'Safe, effective microsuction ear wax removal performed by our trained clinical team. Quick appointments, immediate relief.')); ?>
        </p>

        <ul class="earwax-hero-features">
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('ew_feature_1', 'Microsuction technique')); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('ew_feature_2', 'Trained ear care specialists')); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html(ep_field('ew_feature_3', 'Same-day appointments available')); ?></li>
        </ul>

        <div class="earwax-hero-actions">
          <a href="<?php echo esc_url(ep_field('ew_hero_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">
            <?php echo esc_html(ep_field('ew_hero_cta_text', 'Book Appointment')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(ep_field('ew_phone_number', '01784255222')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(ep_field('ew_phone_display', 'Call 01784 255222')); ?>
          </a>
        </div>
      </div>

      <div class="earwax-hero-visual">
        <div class="earwax-hero-image-card">
          <img src="<?php echo esc_url(ep_field('ew_hero_image', 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&h=1000&fit=crop')); ?>" alt="<?php echo esc_attr(ep_field('ew_hero_image_alt', 'Professional ear wax removal')); ?>" class="earwax-hero-image" />
          <div class="earwax-hero-overlay"></div>
          <div class="earwax-hero-caption">
            <div class="star-row">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p>Professional ear care you can trust</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="earwax-stats-section">
  <div class="earwax-stats-shimmer"></div>
  <div class="section-container">
    <div class="earwax-stats-grid">
      <?php if (have_rows('ew_stats')) : while (have_rows('ew_stats')) : the_row(); ?>
        <div class="earwax-stat-item">
          <div class="earwax-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <div class="earwax-stat-content">
            <span class="earwax-stat-number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="earwax-stat-label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-stat-item">
          <div class="earwax-stat-icon"><i class="fas fa-users"></i></div>
          <div class="earwax-stat-content"><span class="earwax-stat-number">1,000+</span><span class="earwax-stat-label">Patients Treated</span></div>
        </div>
        <div class="earwax-stat-item">
          <div class="earwax-stat-icon"><i class="fas fa-certificate"></i></div>
          <div class="earwax-stat-content"><span class="earwax-stat-number">Certified</span><span class="earwax-stat-label">Ear Care Team</span></div>
        </div>
        <div class="earwax-stat-item">
          <div class="earwax-stat-icon"><i class="fas fa-clock"></i></div>
          <div class="earwax-stat-content"><span class="earwax-stat-number">15 min</span><span class="earwax-stat-label">Appointments</span></div>
        </div>
        <div class="earwax-stat-item">
          <div class="earwax-stat-icon"><i class="fas fa-star"></i></div>
          <div class="earwax-stat-content"><span class="earwax-stat-number">4.7&#9733;</span><span class="earwax-stat-label">Average Rating</span></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Symptoms Section -->
<section class="earwax-symptoms-section">
  <div class="section-container">
    <div class="earwax-symptoms-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('ew_symptoms_badge', 'SIGNS & SYMPTOMS')); ?></span>
      </div>
      <h2 class="earwax-symptoms-title"><?php echo esc_html(ep_field('ew_symptoms_title', 'Do you need ear wax removal?')); ?></h2>
      <p class="earwax-symptoms-description"><?php echo esc_html(ep_field('ew_symptoms_description', 'Common signs that ear wax buildup may be affecting your hearing')); ?></p>
    </div>

    <div class="earwax-symptoms-grid">
      <?php if (have_rows('ew_symptoms')) : while (have_rows('ew_symptoms')) : the_row(); ?>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3 class="earwax-symptom-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="earwax-symptom-description"><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-ear-deaf"></i></div>
          <h3 class="earwax-symptom-title">Hearing Loss</h3>
          <p class="earwax-symptom-description">Muffled hearing or feeling like your ears are blocked.</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-bell"></i></div>
          <h3 class="earwax-symptom-title">Tinnitus</h3>
          <p class="earwax-symptom-description">Ringing, buzzing, or humming sounds in your ears.</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-head-side-virus"></i></div>
          <h3 class="earwax-symptom-title">Earache</h3>
          <p class="earwax-symptom-description">Pain or discomfort in one or both ears.</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-brain"></i></div>
          <h3 class="earwax-symptom-title">Dizziness</h3>
          <p class="earwax-symptom-description">Feeling unsteady or experiencing vertigo symptoms.</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-droplet"></i></div>
          <h3 class="earwax-symptom-title">Fullness</h3>
          <p class="earwax-symptom-description">A persistent feeling of fullness or pressure in the ear.</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-virus"></i></div>
          <h3 class="earwax-symptom-title">Itching</h3>
          <p class="earwax-symptom-description">Irritation or itching inside the ear canal.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Team Section -->
<section class="earwax-team-section">
  <div class="section-container">
    <div class="earwax-team-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('ew_team_badge', 'OUR EAR CARE TEAM')); ?></span>
      </div>
      <h2 class="earwax-team-title"><?php echo esc_html(ep_field('ew_team_title', 'Meet your ear care specialists')); ?></h2>
    </div>

    <div class="earwax-team-grid">
      <?php if (have_rows('ew_team_members')) : while (have_rows('ew_team_members')) : the_row(); ?>
        <div class="earwax-team-card">
          <div class="earwax-team-image-wrapper">
            <img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('name')); ?>" class="earwax-team-image" />
          </div>
          <div class="earwax-team-content">
            <h3 class="earwax-team-name"><?php echo esc_html(get_sub_field('name')); ?></h3>
            <p class="earwax-team-role"><?php echo esc_html(get_sub_field('role')); ?></p>
            <p class="earwax-team-bio"><?php echo esc_html(get_sub_field('bio')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-team-card">
          <div class="earwax-team-image-wrapper">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop" alt="Jignasa Modhvadia" class="earwax-team-image" />
          </div>
          <div class="earwax-team-content">
            <h3 class="earwax-team-name">Jignasa Modhvadia</h3>
            <p class="earwax-team-role">Ear Care Specialist</p>
            <p class="earwax-team-bio">Trained in microsuction and ear irrigation techniques with a gentle, patient-focused approach.</p>
          </div>
        </div>
        <div class="earwax-team-card">
          <div class="earwax-team-image-wrapper">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop" alt="Baljender Nagi" class="earwax-team-image" />
          </div>
          <div class="earwax-team-content">
            <h3 class="earwax-team-name">Baljender Nagi</h3>
            <p class="earwax-team-role">Level 3 Technician &amp; Ear Care Specialist</p>
            <p class="earwax-team-bio">Experienced Level 3 Technician specialising in ear care with certification in microsuction technique.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Comparison Section -->
<section class="earwax-comparison-section">
  <div class="section-container">
    <div class="earwax-comparison-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('ew_compare_badge', 'METHODS COMPARED')); ?></span>
      </div>
      <h2 class="earwax-comparison-title"><?php echo esc_html(ep_field('ew_compare_title', 'How does microsuction compare?')); ?></h2>
    </div>

    <div class="earwax-comparison-grid">
      <?php if (have_rows('ew_comparison_methods')) : while (have_rows('ew_comparison_methods')) : the_row(); ?>
        <div class="earwax-comparison-card <?php echo get_sub_field('is_recommended') ? 'earwax-comparison-card-recommended' : ''; ?>">
          <?php if (get_sub_field('is_recommended')) : ?>
            <div class="earwax-comparison-recommended-badge">Recommended</div>
          <?php endif; ?>
          <h3 class="earwax-comparison-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="earwax-comparison-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
          <ul class="earwax-comparison-features">
            <?php if (have_rows('features')) : while (have_rows('features')) : the_row(); ?>
              <li class="<?php echo get_sub_field('is_positive') ? 'positive' : 'negative'; ?>">
                <i class="fas fa-<?php echo get_sub_field('is_positive') ? 'check' : 'times'; ?>"></i>
                <?php echo esc_html(get_sub_field('text')); ?>
              </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-comparison-card earwax-comparison-card-recommended">
          <div class="earwax-comparison-recommended-badge">Recommended</div>
          <h3 class="earwax-comparison-card-title">Microsuction</h3>
          <p class="earwax-comparison-card-desc">Gold standard method using gentle suction.</p>
          <ul class="earwax-comparison-features">
            <li class="positive"><i class="fas fa-check"></i> Safest method available</li>
            <li class="positive"><i class="fas fa-check"></i> Quick and painless</li>
            <li class="positive"><i class="fas fa-check"></i> No water involved</li>
            <li class="positive"><i class="fas fa-check"></i> Suitable for perforations</li>
          </ul>
        </div>
        <div class="earwax-comparison-card">
          <h3 class="earwax-comparison-card-title">Ear Syringing</h3>
          <p class="earwax-comparison-card-desc">Traditional water irrigation method.</p>
          <ul class="earwax-comparison-features">
            <li class="positive"><i class="fas fa-check"></i> Effective for soft wax</li>
            <li class="negative"><i class="fas fa-times"></i> Uses water pressure</li>
            <li class="negative"><i class="fas fa-times"></i> Not for perforations</li>
            <li class="negative"><i class="fas fa-times"></i> May cause dizziness</li>
          </ul>
        </div>
        <div class="earwax-comparison-card">
          <h3 class="earwax-comparison-card-title">Home Remedies</h3>
          <p class="earwax-comparison-card-desc">Over-the-counter drops and candles.</p>
          <ul class="earwax-comparison-features">
            <li class="positive"><i class="fas fa-check"></i> Easy to access</li>
            <li class="negative"><i class="fas fa-times"></i> Often ineffective</li>
            <li class="negative"><i class="fas fa-times"></i> Risk of ear damage</li>
            <li class="negative"><i class="fas fa-times"></i> No professional guidance</li>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="earwax-process-section">
  <div class="section-container">
    <div class="earwax-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('ew_process_badge', 'HOW IT WORKS')); ?></span>
      </div>
      <h2 class="earwax-process-title"><?php echo esc_html(ep_field('ew_process_title', 'What to expect')); ?></h2>
    </div>

    <div class="earwax-process-grid">
      <?php if (have_rows('ew_process_steps')) : $step_num = 0; while (have_rows('ew_process_steps')) : the_row(); $step_num++; ?>
        <div class="earwax-process-card">
          <div class="number"><?php echo esc_html($step_num); ?></div>
          <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-process-card">
          <div class="number">1</div>
          <div class="icon"><i class="fas fa-calendar-check"></i></div>
          <h3>Book</h3>
          <p>Call or book online for your ear wax removal appointment.</p>
        </div>
        <div class="earwax-process-card">
          <div class="number">2</div>
          <div class="icon"><i class="fas fa-magnifying-glass"></i></div>
          <h3>Assessment</h3>
          <p>We examine your ears to determine the best removal method.</p>
        </div>
        <div class="earwax-process-card">
          <div class="number">3</div>
          <div class="icon"><i class="fas fa-stethoscope"></i></div>
          <h3>Treatment</h3>
          <p>Safe, gentle microsuction to remove ear wax. Takes about 15 minutes.</p>
        </div>
        <div class="earwax-process-card">
          <div class="number">4</div>
          <div class="icon"><i class="fas fa-check-circle"></i></div>
          <h3>Relief</h3>
          <p>Immediate improvement in hearing. Aftercare advice provided.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="earwax-pricing-section">
  <div class="section-container">
    <div class="earwax-pricing-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('ew_pricing_badge', 'TRANSPARENT PRICING')); ?></span>
      </div>
      <h2 class="earwax-pricing-title"><?php echo esc_html(ep_field('ew_pricing_title', 'Simple, fair pricing')); ?></h2>
    </div>

    <div class="earwax-pricing-grid">
      <?php if (have_rows('ew_pricing')) : while (have_rows('ew_pricing')) : the_row(); ?>
        <div class="earwax-pricing-card <?php echo get_sub_field('is_featured') ? 'earwax-pricing-card-featured' : ''; ?>">
          <h3 class="earwax-pricing-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p class="earwax-pricing-card-price">&pound;<?php echo esc_html(get_sub_field('price')); ?></p>
          <p class="earwax-pricing-card-description"><?php echo esc_html(get_sub_field('description')); ?></p>
          <a href="<?php echo esc_url(ep_field('ew_hero_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">Book Now</a>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-pricing-card">
          <h3 class="earwax-pricing-card-title">Consultation</h3>
          <p class="earwax-pricing-card-price">&pound;10</p>
          <p class="earwax-pricing-card-description">Initial ear examination and assessment. Deducted from treatment cost if you proceed.</p>
          <a href="<?php echo esc_url(ep_field('ew_hero_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">Book Now</a>
        </div>
        <div class="earwax-pricing-card earwax-pricing-card-featured">
          <h3 class="earwax-pricing-card-title">One Ear</h3>
          <p class="earwax-pricing-card-price">&pound;20</p>
          <p class="earwax-pricing-card-description">Professional microsuction ear wax removal for one ear.</p>
          <a href="<?php echo esc_url(ep_field('ew_hero_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">Book Now</a>
        </div>
        <div class="earwax-pricing-card earwax-pricing-card-featured">
          <h3 class="earwax-pricing-card-title">Both Ears</h3>
          <p class="earwax-pricing-card-price">&pound;35</p>
          <p class="earwax-pricing-card-description">Professional microsuction ear wax removal for both ears.</p>
          <a href="<?php echo esc_url(ep_field('ew_hero_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">Book Now</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="earwax-testimonials-section">
  <div class="section-container">
    <div class="earwax-testimonials-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('ew_testimonials_badge', 'PATIENT REVIEWS')); ?></span>
      </div>
      <h2 class="earwax-testimonials-title"><?php echo esc_html(ep_field('ew_testimonials_title', 'What our patients say')); ?></h2>
    </div>

    <div class="earwax-testimonials-grid">
      <?php if (have_rows('ew_testimonials')) : while (have_rows('ew_testimonials')) : the_row(); ?>
        <div class="earwax-testimonial-card">
          <div class="star-row">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="earwax-testimonial-quote"><?php echo esc_html(get_sub_field('quote')); ?></p>
          <p class="earwax-testimonial-author"><?php echo esc_html(get_sub_field('author')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-testimonial-card">
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="earwax-testimonial-quote">"Quick, painless, and I could hear perfectly again straight away. Wish I'd come sooner!"</p>
          <p class="earwax-testimonial-author">Ashford Patient</p>
        </div>
        <div class="earwax-testimonial-card">
          <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="earwax-testimonial-quote">"Very professional and gentle. The team made me feel completely at ease throughout the procedure."</p>
          <p class="earwax-testimonial-author">Ashford Patient</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="earwax-cta-section">
  <div class="section-container">
    <div class="earwax-cta-content">
      <h2 class="earwax-cta-title"><?php echo esc_html(ep_field('ew_cta_title', 'Ready to hear clearly again?')); ?></h2>
      <p class="earwax-cta-desc"><?php echo esc_html(ep_field('ew_cta_description', 'Book your ear wax removal appointment at our Ashford clinic today.')); ?></p>
      <div class="earwax-cta-actions">
        <a href="<?php echo esc_url(ep_field('ew_hero_cta_url', '/book-appointment/')); ?>" class="cta-button primary-cta">
          Book Appointment <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr(ep_field('ew_phone_number', '01784255222')); ?>" class="cta-button secondary-cta">
          <i class="fas fa-phone"></i> <?php echo esc_html(ep_field('ew_phone_display', 'Call 01784 255222')); ?>
        </a>
      </div>
      <div class="earwax-cta-badge">
        <?php echo esc_html(ep_field('ew_cta_hours', 'Open Mon-Fri 9am-6pm, Sat 9am-1pm')); ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
