<?php
/**
 * Template Name: Ear Wax Removal
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="earwax-hero-section">
  <div class="earwax-hero-bg"></div>
  <div class="earwax-hero-dots"></div>
  <div class="earwax-hero-glow-1"></div>
  <div class="earwax-hero-glow-2"></div>
  <div class="section-container">
    <div class="earwax-hero-grid">
      <!-- Left: Content -->
      <div class="earwax-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( ep_field( 'ew_hero_badge', 'SAME-DAY MICROSUCTION AVAILABLE' ) ); ?></span>
        </div>

        <h1 class="earwax-hero-title">
          <span class="gradient-text"><?php echo esc_html( ep_field( 'ew_hero_title_highlight', 'Hear clearly again' ) ); ?></span>
          <?php echo esc_html( ep_field( 'ew_hero_title_line2', '— today.' ) ); ?>
        </h1>

        <h2 class="earwax-hero-subtitle">
          <?php echo esc_html( ep_field( 'ew_hero_subtitle', 'Same-day microsuction at our Ashford clinic. Only £25 if no wax is found.' ) ); ?>
        </h2>

        <p class="earwax-hero-description">
          <?php echo esc_html( ep_field( 'ew_hero_description', 'Safe, water-free ear wax removal by qualified clinicians. Most appointments take 30 minutes with immediate relief from blocked, muffled hearing. Booked at our Ashford, Chertsey, and Walton-on-Thames clinics.' ) ); ?>
        </p>

        <div class="earwax-hero-actions">
          <a href="#book-now" class="cta-button primary-cta">
            <?php echo esc_html( ep_field( 'ew_hero_cta_text', 'Book Your Appointment' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( ep_phone() ); ?>
          </a>
        </div>

        <div class="earwax-hero-trust">
          <div class="earwax-hero-trust-item">
            <i class="fas fa-check-circle"></i>
            <span><?php echo esc_html( ep_field( 'ew_trust_1', 'GPhC Registered' ) ); ?></span>
          </div>
          <div class="earwax-hero-trust-item">
            <i class="fas fa-clock"></i>
            <span><?php echo esc_html( ep_field( 'ew_trust_2', 'Same-day available' ) ); ?></span>
          </div>
          <div class="earwax-hero-trust-item">
            <i class="fas fa-shield-halved"></i>
            <span><?php echo esc_html( ep_field( 'ew_trust_3', '£25 if no wax found' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Image with Testimonial -->
      <div class="earwax-hero-visual">
        <?php
        $hero_image_id  = ep_field( 'ew_hero_image' );
        $hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : 'https://images.unsplash.com/photo-1581056771107-24ca5f033842?w=800&h=1000&fit=crop';
        ?>
        <div class="earwax-hero-image-card">
          <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'ew_hero_image_alt', 'Friendly older patient satisfied after ear wax removal treatment' ) ); ?>" class="earwax-hero-image" />
          <div class="earwax-hero-overlay"></div>
          <div class="earwax-hero-price-badge">
            <span class="earwax-hero-price-label"><?php echo esc_html( ep_field( 'ew_price_label', 'Only if no wax found' ) ); ?></span>
            <span class="earwax-hero-price-amount"><?php echo esc_html( ep_field( 'ew_price_amount', '£25' ) ); ?></span>
            <span class="earwax-hero-price-sub"><?php echo esc_html( ep_field( 'ew_price_sub', 'Full treatment £59' ) ); ?></span>
          </div>
        </div>

        <!-- Floating Testimonial Card -->
        <div class="earwax-hero-testimonial-float">
          <div class="earwax-hero-testimonial-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="earwax-hero-testimonial-text"><?php echo esc_html( ep_field( 'ew_hero_testimonial_text', '"The difference was immediate—I could hear clearly again. Professional, gentle, and highly effective."' ) ); ?></p>
          <div class="earwax-hero-testimonial-author">
            <?php
            $testimonial_avatar_id  = ep_field( 'ew_hero_testimonial_avatar' );
            $testimonial_avatar_url = $testimonial_avatar_id ? wp_get_attachment_image_url( $testimonial_avatar_id, 'thumbnail' ) : 'https://i.pravatar.cc/150?img=47';
            ?>
            <div class="earwax-hero-testimonial-avatar">
              <img src="<?php echo esc_url( $testimonial_avatar_url ); ?>" alt="<?php echo esc_attr( ep_field( 'ew_hero_testimonial_name', 'Sarah M.' ) ); ?>" />
            </div>
            <div>
              <p class="earwax-hero-testimonial-name"><?php echo esc_html( ep_field( 'ew_hero_testimonial_name', 'Sarah M.' ) ); ?></p>
              <p class="earwax-hero-testimonial-location"><?php echo esc_html( ep_field( 'ew_hero_testimonial_location', 'Ashford Patient' ) ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     STATS BAR - Uses shared stats-section from globals.css
     ============================================ -->
<section class="stats-section">
  <div class="section-container">
    <div class="stats-bar">
      <?php if ( have_rows( 'ew_stats' ) ) : $stat_index = 0; while ( have_rows( 'ew_stats' ) ) : the_row(); $stat_index++; ?>
        <?php if ( $stat_index > 1 ) : ?><div class="stat-divider"></div><?php endif; ?>
        <div class="stat-item">
          <div class="stat-icon">
            <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
          </div>
          <div class="stat-content">
            <span class="stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></span>
            <span class="stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-shield-check"></i></div>
          <div class="stat-content">
            <span class="stat-number">GPhC</span>
            <span class="stat-label">Fully Registered</span>
          </div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-users"></i></div>
          <div class="stat-content">
            <span class="stat-number">5,000+</span>
            <span class="stat-label">Patients Treated</span>
          </div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-percentage"></i></div>
          <div class="stat-content">
            <span class="stat-number">95%</span>
            <span class="stat-label">Success Rate</span>
          </div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-clock"></i></div>
          <div class="stat-content">
            <span class="stat-number">30 min</span>
            <span class="stat-label">Average Time</span>
          </div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-calendar-check"></i></div>
          <div class="stat-content">
            <span class="stat-number">Same Day</span>
            <span class="stat-label">Available</span>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     SYMPTOMS SECTION
     ============================================ -->
<section class="earwax-symptoms-section">
  <div class="section-container">
    <div class="earwax-symptoms-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'ew_symptoms_badge', 'COMMON SYMPTOMS' ) ); ?></span>
      </div>
      <h2 class="earwax-symptoms-title"><?php echo esc_html( ep_field( 'ew_symptoms_title', 'Is Ear Wax Affecting Your Daily Life?' ) ); ?></h2>
      <p class="earwax-symptoms-description"><?php echo esc_html( ep_field( 'ew_symptoms_description', "Don't let blocked ears hold you back. Recognise these common symptoms?" ) ); ?></p>
    </div>

    <div class="earwax-symptoms-grid">
      <?php if ( have_rows( 'ew_symptoms' ) ) : while ( have_rows( 'ew_symptoms' ) ) : the_row(); ?>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i></div>
          <h3 class="earwax-symptom-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="earwax-symptom-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-ear-listen"></i></div>
          <h3 class="earwax-symptom-title">Difficulty Hearing</h3>
          <p class="earwax-symptom-desc">Muffled sounds or reduced hearing quality affecting conversations and daily activities</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-face-grimace"></i></div>
          <h3 class="earwax-symptom-title">Earache or Discomfort</h3>
          <p class="earwax-symptom-desc">Persistent pain, pressure, or uncomfortable fullness in one or both ears</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-bell"></i></div>
          <h3 class="earwax-symptom-title">Ringing or Buzzing</h3>
          <p class="earwax-symptom-desc">Tinnitus symptoms including ringing, buzzing, or humming sounds in your ears</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-person-falling"></i></div>
          <h3 class="earwax-symptom-title">Dizziness</h3>
          <p class="earwax-symptom-desc">Feeling off-balance or experiencing vertigo due to blocked ear canals</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-head-side-cough"></i></div>
          <h3 class="earwax-symptom-title">Persistent Cough</h3>
          <p class="earwax-symptom-desc">Unexplained coughing caused by ear wax stimulating nerves in the ear canal</p>
        </div>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="fas fa-ear-deaf"></i></div>
          <h3 class="earwax-symptom-title">Hearing Aid Problems</h3>
          <p class="earwax-symptom-desc">Failed hearing aid fitting or devices not working properly due to wax build-up</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     TEAM SECTION
     ============================================ -->
<section class="earwax-team-section">
  <div class="section-container">
    <div class="earwax-team-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'ew_team_badge', 'OUR TEAM' ) ); ?></span>
      </div>
      <h2 class="earwax-team-title"><?php echo esc_html( ep_field( 'ew_team_title', 'Meet Your Ashford Ear Care Specialists' ) ); ?></h2>
      <p class="earwax-team-description"><?php echo esc_html( ep_field( 'ew_team_description', "As Ashford's dedicated ear care practice, we've helped thousands of local residents resolve their ear wax problems. We offer professional, face-to-face care with convenient access and free parking." ) ); ?></p>
    </div>

    <div class="earwax-team-grid">
      <?php if ( have_rows( 'ew_team_members' ) ) : while ( have_rows( 'ew_team_members' ) ) : the_row(); ?>
        <?php
        $team_image_id  = get_sub_field( 'image' );
        $team_image_url = $team_image_id ? wp_get_attachment_image_url( $team_image_id, 'medium_large' ) : '';
        $badge_text     = get_sub_field( 'badge_text' );
        $badge_style    = get_sub_field( 'badge_style' ); // 'green' or 'purple'
        ?>
        <div class="earwax-team-card">
          <?php if ( $team_image_url ) : ?>
            <div class="earwax-team-image-wrapper">
              <img src="<?php echo esc_url( $team_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'name' ) ); ?>" class="earwax-team-image" />
              <?php if ( $badge_text ) : ?>
                <div class="earwax-team-badge-<?php echo esc_attr( $badge_style ?: 'green' ); ?>"><?php echo esc_html( $badge_text ); ?></div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <div class="earwax-team-content">
            <h3 class="earwax-team-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
            <p class="earwax-team-role"><?php echo esc_html( get_sub_field( 'role' ) ); ?></p>
            <p class="earwax-team-bio"><?php echo esc_html( get_sub_field( 'bio' ) ); ?></p>
            <?php if ( have_rows( 'tags' ) ) : ?>
              <div class="earwax-team-tags">
                <?php while ( have_rows( 'tags' ) ) : the_row(); ?>
                  <span class="earwax-team-tag"><?php echo esc_html( get_sub_field( 'tag' ) ); ?></span>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; else : ?>
        <!-- Default: Jignasa Modhvadia -->
        <div class="earwax-team-card">
          <div class="earwax-team-image-wrapper">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=600&fit=crop" alt="Jignasa Modhvadia" class="earwax-team-image" />
            <div class="earwax-team-badge-green">Since 2019</div>
          </div>
          <div class="earwax-team-content">
            <h3 class="earwax-team-name">Jignasa Modhvadia</h3>
            <p class="earwax-team-role">Sole Director &amp; Level 2 Dispenser</p>
            <p class="earwax-team-bio">As the Sole Director of Easy Pharmacy, Jignasa combines leadership with hands-on patient care. A qualified Level 2 Dispenser since 2019, she is dedicated to continuous professional development and is currently undertaking her Level 3 Technician training to further enhance the expert services available at our Ashford clinic.</p>
            <div class="earwax-team-tags">
              <span class="earwax-team-tag">Clinic Director</span>
              <span class="earwax-team-tag">Level 3 Training</span>
            </div>
          </div>
        </div>
        <!-- Default: Baljender Nagi -->
        <div class="earwax-team-card">
          <div class="earwax-team-image-wrapper">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&h=600&fit=crop" alt="Baljender Nagi" class="earwax-team-image" />
            <div class="earwax-team-badge-purple">Level 3 Technician</div>
          </div>
          <div class="earwax-team-content">
            <h3 class="earwax-team-name">Baljender Nagi</h3>
            <p class="earwax-team-role">Senior Staff Member</p>
            <p class="earwax-team-bio">Baljender is a highly experienced Level 3 Technician and a senior member of our clinical team. Her extensive technical knowledge and friendly approach ensure that every patient receives the highest standard of care during their visit. She plays a key role in delivering our specialist ear care services.</p>
            <div class="earwax-team-tags">
              <span class="earwax-team-tag">Senior Technician</span>
              <span class="earwax-team-tag">Patient Care Expert</span>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     COMPARISON TABLE
     ============================================ -->
<section class="earwax-comparison-section">
  <div class="section-container">
    <div class="earwax-comparison-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'ew_compare_badge', 'TREATMENT COMPARISON' ) ); ?></span>
      </div>
      <h2 class="earwax-comparison-title"><?php echo esc_html( ep_field( 'ew_compare_title', 'How Our Treatment Compares' ) ); ?></h2>
      <p class="earwax-comparison-description"><?php echo esc_html( ep_field( 'ew_compare_description', 'See why microsuction is the gold standard for ear wax removal in Ashford' ) ); ?></p>
    </div>

    <div class="earwax-comparison-table-wrapper">
      <table class="earwax-comparison-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th class="highlight"><?php echo esc_html( ep_field( 'ew_compare_col_1_heading', 'Our Microsuction' ) ); ?></th>
            <th><?php echo esc_html( ep_field( 'ew_compare_col_2_heading', 'Traditional Syringing' ) ); ?></th>
            <th><?php echo esc_html( ep_field( 'ew_compare_col_3_heading', 'At-Home Remedies' ) ); ?></th>
          </tr>
        </thead>
        <tbody>
          <?php if ( have_rows( 'ew_comparison_rows' ) ) : while ( have_rows( 'ew_comparison_rows' ) ) : the_row(); ?>
            <tr>
              <td><?php echo esc_html( get_sub_field( 'feature' ) ); ?></td>
              <td class="highlight"><?php echo esc_html( get_sub_field( 'microsuction' ) ); ?></td>
              <td><?php echo esc_html( get_sub_field( 'syringing' ) ); ?></td>
              <td><?php echo esc_html( get_sub_field( 'home_remedies' ) ); ?></td>
            </tr>
          <?php endwhile; else : ?>
            <tr>
              <td>Treatment Time</td>
              <td class="highlight">Up to 30 minutes</td>
              <td>30+ minutes</td>
              <td>Days or weeks</td>
            </tr>
            <tr>
              <td>Water Spillage</td>
              <td class="highlight">None</td>
              <td>Moderate</td>
              <td>Drips and Leaks</td>
            </tr>
            <tr>
              <td>Mess</td>
              <td class="highlight">None</td>
              <td>Yes</td>
              <td>Yes</td>
            </tr>
            <tr>
              <td>Risk Level</td>
              <td class="highlight">Very low</td>
              <td>Moderate</td>
              <td>Varies</td>
            </tr>
            <tr>
              <td>Success Rate</td>
              <td class="highlight">95%+</td>
              <td>70-80%</td>
              <td>Under 50%</td>
            </tr>
            <tr>
              <td>Immediate Results</td>
              <td class="highlight">Yes</td>
              <td>Sometimes</td>
              <td>Rarely</td>
            </tr>
            <tr>
              <td>Expert Oversight</td>
              <td class="highlight">Throughout</td>
              <td>Limited</td>
              <td>None</td>
            </tr>
            <tr>
              <td>Safe for Perforated Eardrums</td>
              <td class="highlight">Yes</td>
              <td>No</td>
              <td>Varies</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============================================
     PROCESS SECTION
     ============================================ -->
<section class="earwax-process-section">
  <div class="section-container">
    <div class="earwax-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'ew_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="earwax-process-title"><?php echo esc_html( ep_field( 'ew_process_title', 'Our Professional Ear Wax Removal Process' ) ); ?></h2>
      <p class="earwax-process-description"><?php echo esc_html( ep_field( 'ew_process_description', 'Simple, effective treatment in three easy steps' ) ); ?></p>
    </div>

    <?php if ( have_rows( 'ew_process_steps' ) ) : $step_index = 0; while ( have_rows( 'ew_process_steps' ) ) : the_row(); $step_index++; ?>
      <?php
      $step_direction = ( $step_index % 2 === 0 ) ? 'earwax-process-step-right' : 'earwax-process-step-left';
      $step_image_id  = get_sub_field( 'image' );
      $step_image_url = $step_image_id ? wp_get_attachment_image_url( $step_image_id, 'medium_large' ) : '';
      $step_time      = get_sub_field( 'time' );
      $step_badge     = get_sub_field( 'badge' );
      ?>
      <div class="earwax-process-step <?php echo esc_attr( $step_direction ); ?>">
        <div class="earwax-process-step-content">
          <div class="earwax-process-step-icon">
            <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
          </div>
          <h3 class="earwax-process-step-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="earwax-process-step-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <?php if ( $step_time ) : ?>
            <div class="earwax-process-step-time">
              <i class="fas fa-clock"></i>
              <span><?php echo esc_html( $step_time ); ?></span>
            </div>
          <?php endif; ?>
          <?php if ( $step_badge ) : ?>
            <div class="earwax-process-step-badge">
              <i class="fas fa-check-circle"></i>
              <span><?php echo esc_html( $step_badge ); ?></span>
            </div>
          <?php endif; ?>
        </div>
        <?php if ( $step_image_url ) : ?>
          <div class="earwax-process-step-image">
            <img src="<?php echo esc_url( $step_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
          </div>
        <?php endif; ?>
      </div>
    <?php endwhile; else : ?>
      <!-- Step 1: Assessment -->
      <div class="earwax-process-step earwax-process-step-left">
        <div class="earwax-process-step-content">
          <div class="earwax-process-step-icon">
            <i class="fas fa-clipboard-check"></i>
          </div>
          <h3 class="earwax-process-step-title">Initial Assessment</h3>
          <p class="earwax-process-step-desc">Detailed ear examination, discussion of symptoms, treatment plan explanation, and no-obligation quote.</p>
          <div class="earwax-process-step-time">
            <i class="fas fa-clock"></i>
            <span>10 minutes</span>
          </div>
        </div>
        <div class="earwax-process-step-image">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=500&fit=crop" alt="Friendly consultation scene" />
        </div>
      </div>
      <!-- Step 2: Treatment -->
      <div class="earwax-process-step earwax-process-step-right">
        <div class="earwax-process-step-content">
          <div class="earwax-process-step-icon">
            <i class="fas fa-microscope"></i>
          </div>
          <h3 class="earwax-process-step-title">Microsuction Treatment</h3>
          <p class="earwax-process-step-desc">Gentle wax removal with continuous monitoring, progress updates, and immediate relief.</p>
          <div class="earwax-process-step-time">
            <i class="fas fa-clock"></i>
            <span>15-20 minutes</span>
          </div>
        </div>
        <div class="earwax-process-step-image">
          <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=600&h=500&fit=crop" alt="Patient during treatment" />
        </div>
      </div>
      <!-- Step 3: Aftercare -->
      <div class="earwax-process-step earwax-process-step-left">
        <div class="earwax-process-step-content">
          <div class="earwax-process-step-icon">
            <i class="fas fa-heart-pulse"></i>
          </div>
          <h3 class="earwax-process-step-title">Aftercare Support</h3>
          <p class="earwax-process-step-desc">Prevention advice, home care tips, and free follow-up within 7 days if needed.</p>
          <div class="earwax-process-step-badge">
            <i class="fas fa-check-circle"></i>
            <span>Free 7-day follow-up</span>
          </div>
        </div>
        <div class="earwax-process-step-image">
          <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=600&h=500&fit=crop" alt="Happy patient after treatment" />
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- ============================================
     PRICING SECTION
     ============================================ -->
<section class="earwax-pricing-section">
  <div class="section-container">
    <div class="earwax-pricing-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'ew_pricing_badge', 'TRANSPARENT PRICING' ) ); ?></span>
      </div>
      <h2 class="earwax-pricing-title"><?php echo esc_html( ep_field( 'ew_pricing_title', 'Simple, Transparent Pricing' ) ); ?></h2>
      <p class="earwax-pricing-description"><?php echo esc_html( ep_field( 'ew_pricing_description', 'No hidden fees. No surprises. Just clear, professional ear care.' ) ); ?></p>
    </div>

    <div class="earwax-pricing-grid-new">
      <?php if ( have_rows( 'ew_pricing' ) ) : while ( have_rows( 'ew_pricing' ) ) : the_row(); ?>
        <?php $is_featured = get_sub_field( 'is_featured' ); ?>
        <div class="earwax-pricing-card-new <?php echo $is_featured ? 'earwax-pricing-card-featured-new' : ''; ?>">
          <?php if ( $is_featured ) : ?>
            <div class="earwax-pricing-badge-new"><?php echo esc_html( get_sub_field( 'badge_text' ) ?: 'MOST POPULAR' ); ?></div>
          <?php endif; ?>
          <div class="earwax-pricing-card-header">
            <div class="earwax-pricing-icon-new">
              <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
            </div>
            <h3 class="earwax-pricing-card-title-new"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          </div>
          <div class="earwax-pricing-price-new">
            <span class="earwax-pricing-currency">&pound;</span>
            <span class="earwax-pricing-amount"><?php echo esc_html( get_sub_field( 'price' ) ); ?></span>
            <?php $per_text = get_sub_field( 'per_text' ); ?>
            <?php if ( $per_text ) : ?>
              <span class="earwax-pricing-per"><?php echo esc_html( $per_text ); ?></span>
            <?php endif; ?>
          </div>
          <?php $secondary_price = get_sub_field( 'secondary_price_note' ); ?>
          <?php if ( $secondary_price ) : ?>
            <p class="earwax-pricing-secondary-price"><?php echo esc_html( $secondary_price ); ?></p>
          <?php endif; ?>
          <?php if ( have_rows( 'features' ) ) : ?>
            <ul class="earwax-pricing-features">
              <?php while ( have_rows( 'features' ) ) : the_row(); ?>
                <li><i class="fas fa-check"></i> <?php echo esc_html( get_sub_field( 'feature' ) ); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          <a href="#book-now" class="cta-button <?php echo $is_featured ? 'primary-cta' : 'secondary-cta'; ?> earwax-pricing-btn-new">
            <?php echo esc_html( get_sub_field( 'button_text' ) ?: 'Book Now' ); ?>
          </a>
          <?php if ( $is_featured ) : ?>
            <?php $guarantee = get_sub_field( 'guarantee_text' ); ?>
            <?php if ( $guarantee ) : ?>
              <div class="earwax-pricing-guarantee">
                <i class="fas fa-shield-check"></i>
                <span><?php echo esc_html( $guarantee ); ?></span>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <!-- Default: Risk-free pricing (Featured) -->
        <div class="earwax-pricing-card-new earwax-pricing-card-featured-new">
          <div class="earwax-pricing-badge-new">OUR PROMISE</div>
          <div class="earwax-pricing-card-header">
            <div class="earwax-pricing-icon-new">
              <i class="fas fa-shield-halved"></i>
            </div>
            <h3 class="earwax-pricing-card-title-new">Risk-free pricing</h3>
          </div>
          <div class="earwax-pricing-price-new">
            <span class="earwax-pricing-currency">&pound;</span>
            <span class="earwax-pricing-amount">25</span>
            <span class="earwax-pricing-per">If no wax is found</span>
          </div>
          <p class="earwax-pricing-secondary-price">Full microsuction treatment &pound;59</p>
          <ul class="earwax-pricing-features">
            <li><i class="fas fa-check"></i> Professional microsuction</li>
            <li><i class="fas fa-check"></i> Immediate relief from blocked hearing</li>
            <li><i class="fas fa-check"></i> Both ears assessed</li>
            <li><i class="fas fa-check"></i> <strong>Free 7-day follow-up</strong></li>
            <li><i class="fas fa-check"></i> Aftercare advice included</li>
          </ul>
          <a href="#book-now" class="cta-button primary-cta earwax-pricing-btn-new">Book Now</a>
          <div class="earwax-pricing-guarantee">
            <i class="fas fa-shield-check"></i>
            <span>Both ears checked &middot; Same-day available</span>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <!-- Value Proposition -->
    <div class="earwax-pricing-value">
      <div class="earwax-pricing-value-item">
        <i class="fas fa-ban"></i>
        <span><?php echo esc_html( ep_field( 'ew_value_1', 'No Hidden Fees' ) ); ?></span>
      </div>
      <div class="earwax-pricing-value-item">
        <i class="fas fa-calendar-check"></i>
        <span><?php echo esc_html( ep_field( 'ew_value_2', 'Same-Day Available' ) ); ?></span>
      </div>
      <div class="earwax-pricing-value-item">
        <i class="fas fa-credit-card"></i>
        <span><?php echo esc_html( ep_field( 'ew_value_3', 'All Payment Methods' ) ); ?></span>
      </div>
      <div class="earwax-pricing-value-item">
        <i class="fas fa-redo"></i>
        <span><?php echo esc_html( ep_field( 'ew_value_4', 'Free Follow-Up' ) ); ?></span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     BOOK NOW (Amelia embed — Ear Microsuction service ID 4)
     ============================================ -->
<section class="earwax-booking-section" id="book-now">
  <div class="section-container">
    <div class="earwax-booking-embed">
      <?php echo do_shortcode( '[ameliacatalogbooking service=4]' ); ?>
    </div>
  </div>
</section>

<!-- ============================================
     TESTIMONIALS SECTION
     ============================================ -->
<section class="earwax-testimonials-section">
  <div class="section-container">
    <div class="earwax-testimonials-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'ew_testimonials_badge', 'PATIENT TESTIMONIALS' ) ); ?></span>
      </div>
      <h2 class="earwax-testimonials-title"><?php echo esc_html( ep_field( 'ew_testimonials_title', 'Hear What Our Ashford Patients Say' ) ); ?></h2>
      <p class="earwax-testimonials-subtitle"><?php echo esc_html( ep_field( 'ew_testimonials_subtitle', 'Join thousands of satisfied patients who\'ve experienced immediate relief' ) ); ?></p>
    </div>

    <div class="earwax-testimonials-grid">
      <?php if ( have_rows( 'ew_testimonials' ) ) : while ( have_rows( 'ew_testimonials' ) ) : the_row(); ?>
        <?php
        $avatar_id  = get_sub_field( 'avatar' );
        $avatar_url = $avatar_id ? wp_get_attachment_image_url( $avatar_id, 'thumbnail' ) : '';
        ?>
        <div class="earwax-testimonial-card">
          <div class="earwax-testimonial-header">
            <?php if ( $avatar_url ) : ?>
              <div class="earwax-testimonial-avatar">
                <img src="<?php echo esc_url( $avatar_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'author' ) ); ?>" />
              </div>
            <?php endif; ?>
            <div class="earwax-testimonial-meta">
              <p class="earwax-testimonial-author"><?php echo esc_html( get_sub_field( 'author' ) ); ?></p>
              <div class="star-row">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <p class="earwax-testimonial-quote"><?php echo esc_html( get_sub_field( 'quote' ) ); ?></p>
          <div class="earwax-testimonial-footer">
            <i class="fas fa-check-circle"></i>
            <span>Verified Patient</span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-testimonial-card">
          <div class="earwax-testimonial-header">
            <div class="earwax-testimonial-avatar">
              <img src="https://i.pravatar.cc/150?img=47" alt="Sarah M." />
            </div>
            <div class="earwax-testimonial-meta">
              <p class="earwax-testimonial-author">Sarah M.</p>
              <div class="star-row">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <p class="earwax-testimonial-quote">"After weeks of discomfort, I finally got my ears treated at Easy Pharmacy. The difference was immediate - I could hear clearly again! Jignasa was professional and explained everything clearly. Highly recommend!"</p>
          <div class="earwax-testimonial-footer">
            <i class="fas fa-check-circle"></i>
            <span>Verified Patient</span>
          </div>
        </div>
        <div class="earwax-testimonial-card">
          <div class="earwax-testimonial-header">
            <div class="earwax-testimonial-avatar">
              <img src="https://i.pravatar.cc/150?img=26" alt="Margaret T." />
            </div>
            <div class="earwax-testimonial-meta">
              <p class="earwax-testimonial-author">Margaret T.</p>
              <div class="star-row">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <p class="earwax-testimonial-quote">"Fantastic service from start to finish. The team was so thorough and professional. The aftercare advice has helped prevent any further build-up."</p>
          <div class="earwax-testimonial-footer">
            <i class="fas fa-check-circle"></i>
            <span>Verified Patient</span>
          </div>
        </div>
        <div class="earwax-testimonial-card">
          <div class="earwax-testimonial-header">
            <div class="earwax-testimonial-avatar">
              <img src="https://i.pravatar.cc/150?img=12" alt="John R." />
            </div>
            <div class="earwax-testimonial-meta">
              <p class="earwax-testimonial-author">John R.</p>
              <div class="star-row">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <p class="earwax-testimonial-quote">"Much better than the traditional syringing I had years ago. No mess, no fuss, just clear hearing again. The evening appointment times meant I didn't need to take time off work."</p>
          <div class="earwax-testimonial-footer">
            <i class="fas fa-check-circle"></i>
            <span>Verified Patient</span>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     FAQ SECTION
     ============================================ -->
<section class="earwax-faq-section">
  <div class="section-container">
    <div class="earwax-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'ew_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="earwax-faq-title"><?php echo esc_html( ep_field( 'ew_faq_title', 'Frequently Asked Questions - Ear Wax Removal Ashford' ) ); ?></h2>
    </div>

    <div class="earwax-faq-list">
      <?php if ( have_rows( 'ew_faqs' ) ) : $faq_num = 0; while ( have_rows( 'ew_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number"><?php echo esc_html( $faq_num ); ?></span>
            <span class="earwax-faq-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number">1</span>
            <span class="earwax-faq-text">Is the treatment uncomfortable?</span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p>Most patients find microsuction very comfortable. You'll hear a quiet whistling sound, but the procedure is gentle and shouldn't cause any pain.</p>
          </div>
        </div>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number">2</span>
            <span class="earwax-faq-text">What if I don't have wax build-up?</span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p>You only pay our consultation fee of &pound;25. We assess every patient's ears before any treatment begins &mdash; if microsuction isn't needed, there's no charge for the procedure. This way you can book with complete confidence.</p>
          </div>
        </div>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number">3</span>
            <span class="earwax-faq-text">How often should I have my ears checked?</span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p>Most people benefit from an annual check-up, though this varies. We'll advise based on your individual situation during your Ashford appointment.</p>
          </div>
        </div>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number">4</span>
            <span class="earwax-faq-text">Can I drive after the treatment?</span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p>Yes, you can drive immediately after treatment. Most people experience instant improvement in hearing.</p>
          </div>
        </div>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number">5</span>
            <span class="earwax-faq-text">Do you treat children?</span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p>Yes, we treat patients of all ages at our Ashford clinic. We're experienced in working with children and ensure they feel comfortable throughout.</p>
          </div>
        </div>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number">6</span>
            <span class="earwax-faq-text">What if I have a perforated eardrum?</span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p>Microsuction is safe for perforated eardrums, unlike water syringing. We'll assess your ears during consultation.</p>
          </div>
        </div>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number">7</span>
            <span class="earwax-faq-text">Where are you located in Ashford?</span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p>We're based in Ashford with convenient parking and easy access from all surrounding areas.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     FINAL CTA SECTION
     ============================================ -->
<section class="earwax-cta-section">
  <div class="section-container">
    <div class="earwax-cta-inner">
      <h2 class="earwax-cta-title"><?php echo esc_html( ep_field( 'ew_cta_title', 'Ready to hear clearly again?' ) ); ?></h2>
      <p class="earwax-cta-description">
        <?php echo esc_html( ep_field( 'ew_cta_description', 'Book your microsuction appointment today. Only £25 if no wax is found — full treatment £59. Same-day appointments at our Ashford clinic.' ) ); ?>
      </p>
      <div class="earwax-cta-actions">
        <a href="#book-now" class="cta-button primary-cta">
          <?php echo esc_html( ep_field( 'ew_cta_button_text', 'Book an Appointment' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
          <i class="fas fa-phone"></i>
          <?php echo esc_html( ep_phone() ); ?>
        </a>
      </div>
      <div class="earwax-cta-trust">
        <span class="earwax-cta-trust-item"><i class="fas fa-shield-halved"></i> GPhC Registered</span>
        <span class="earwax-cta-trust-item"><i class="fas fa-clock"></i> Same-Day Appointments</span>
        <span class="earwax-cta-trust-item"><i class="fas fa-user-doctor"></i> No Referral Needed</span>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
