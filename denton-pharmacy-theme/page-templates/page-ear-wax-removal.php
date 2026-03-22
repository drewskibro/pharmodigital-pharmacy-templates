<?php
/**
 * Template Name: Ear Wax Removal
 * @package Denton_Pharmacy
 */

get_header();
?>

<!-- ============================================
     F1. HERO SECTION — Pattern A Light
     Badge, title, subtitle (purple), rotated image card (-2deg) with price badge
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
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( dp_field( 'ew_hero_badge', 'SAME-DAY MICROSUCTION AVAILABLE' ) ); ?></span>
        </div>

        <h1 class="earwax-hero-title">
          <span class="gradient-text"><?php echo esc_html( dp_field( 'ew_hero_title_highlight', 'Professional Ear Wax Removal' ) ); ?></span>
          <?php echo esc_html( dp_field( 'ew_hero_title_rest', 'in Denton' ) ); ?>
        </h1>

        <h2 class="earwax-hero-subtitle">
          <?php echo esc_html( dp_field( 'ew_hero_subtitle', 'Expert microsuction by Ahmed and our specialist team at Denton Pharmacy' ) ); ?>
        </h2>

        <p class="earwax-hero-description">
          <?php echo esc_html( dp_field( 'ew_hero_description', 'Safe, effective ear wax removal using advanced microsuction technology. Same-day appointments available with guaranteed results. Just £60 for both ears, consultation included.' ) ); ?>
        </p>

        <div class="earwax-hero-actions">
          <a href="<?php echo esc_url( dp_field( 'ew_hero_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( dp_field( 'ew_hero_cta_text', 'Book Your Appointment' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( dp_phone() ); ?>
          </a>
        </div>

        <div class="earwax-hero-trust">
          <div class="earwax-hero-trust-item">
            <i class="fas fa-check-circle"></i>
            <span><?php echo esc_html( dp_field( 'ew_trust_1', 'GPhC Registered' ) ); ?></span>
          </div>
          <div class="earwax-hero-trust-item">
            <i class="fas fa-clock"></i>
            <span><?php echo esc_html( dp_field( 'ew_trust_2', 'Same-day available' ) ); ?></span>
          </div>
          <div class="earwax-hero-trust-item">
            <i class="fas fa-tag"></i>
            <span><?php echo esc_html( dp_field( 'ew_trust_3', '£60 both ears' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Rotated Image Card with Price Badge -->
      <div class="earwax-hero-visual">
        <?php
        $hero_image_id  = dp_field( 'ew_hero_image' );
        $hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';
        ?>
        <div class="earwax-hero-image-card">
          <?php if ( $hero_image_url ) : ?>
            <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( dp_field( 'ew_hero_image_alt', 'Professional ear wax removal at Denton Pharmacy' ) ); ?>" class="earwax-hero-image" />
          <?php endif; ?>
          <div class="earwax-hero-overlay"></div>
          <div class="earwax-hero-price-badge">
            <span class="earwax-hero-price-label"><?php echo esc_html( dp_field( 'ew_price_label', 'Both Ears' ) ); ?></span>
            <span class="earwax-hero-price-amount"><?php echo esc_html( dp_field( 'ew_price_amount', '£60' ) ); ?></span>
            <span class="earwax-hero-price-sub"><?php echo esc_html( dp_field( 'ew_price_sub', 'consultation included' ) ); ?></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     F2. STATS BAR — Glassmorphic white, 4-column
     ============================================ -->
<section class="earwax-stats-section">
  <div class="section-container">
    <div class="earwax-stats-bar">
      <?php
      $stats = array(
        array( 'icon' => 'ew_stat_1_icon', 'number' => 'ew_stat_1_number', 'label' => 'ew_stat_1_label', 'def_icon' => 'fas fa-tag', 'def_number' => '£60', 'def_label' => 'Both Ears' ),
        array( 'icon' => 'ew_stat_2_icon', 'number' => 'ew_stat_2_number', 'label' => 'ew_stat_2_label', 'def_icon' => 'fas fa-clock', 'def_number' => '30 mins', 'def_label' => 'Treatment Time' ),
        array( 'icon' => 'ew_stat_3_icon', 'number' => 'ew_stat_3_number', 'label' => 'ew_stat_3_label', 'def_icon' => 'fas fa-check-circle', 'def_number' => '95%+', 'def_label' => 'Success Rate' ),
        array( 'icon' => 'ew_stat_4_icon', 'number' => 'ew_stat_4_number', 'label' => 'ew_stat_4_label', 'def_icon' => 'fas fa-calendar-check', 'def_number' => 'Same Day', 'def_label' => 'Appointments' ),
      );
      foreach ( $stats as $si => $stat ) :
      ?>
        <?php if ( $si > 0 ) : ?><div class="earwax-stat-divider"></div><?php endif; ?>
        <div class="earwax-stat-item">
          <div class="earwax-stat-icon">
            <i class="<?php echo esc_attr( dp_fa_class( dp_field( $stat['icon'], $stat['def_icon'] ) ) ); ?>"></i>
          </div>
          <div class="earwax-stat-content">
            <p class="earwax-stat-number"><?php echo esc_html( dp_field( $stat['number'], $stat['def_number'] ) ); ?></p>
            <p class="earwax-stat-label"><?php echo esc_html( dp_field( $stat['label'], $stat['def_label'] ) ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================
     F3. SYMPTOMS — 3-column icons with scale/rotate hover
     ============================================ -->
<section class="earwax-symptoms-section earwax-reveal">
  <div class="section-container">
    <div class="earwax-symptoms-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'ew_symptoms_badge', 'COMMON SYMPTOMS' ) ); ?></span>
      </div>
      <h2 class="earwax-symptoms-title"><?php echo esc_html( dp_field( 'ew_symptoms_title', 'Is Ear Wax Affecting Your Daily Life?' ) ); ?></h2>
      <p class="earwax-symptoms-description"><?php echo esc_html( dp_field( 'ew_symptoms_description', 'Don\'t let blocked ears hold you back. Recognise these common symptoms?' ) ); ?></p>
    </div>

    <div class="earwax-symptoms-grid">
      <?php if ( have_rows( 'ew_symptoms' ) ) : while ( have_rows( 'ew_symptoms' ) ) : the_row(); ?>
        <div class="earwax-symptom-card">
          <div class="earwax-symptom-icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <h3 class="earwax-symptom-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="earwax-symptom-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <?php
        $symptoms = array(
          array( 'icon' => 'fas fa-ear-listen', 'title' => 'Difficulty Hearing', 'desc' => 'Muffled sounds or reduced hearing quality affecting conversations and daily activities' ),
          array( 'icon' => 'fas fa-face-grimace', 'title' => 'Earache or Discomfort', 'desc' => 'Persistent pain, pressure, or uncomfortable fullness in one or both ears' ),
          array( 'icon' => 'fas fa-bell', 'title' => 'Ringing or Buzzing', 'desc' => 'Tinnitus symptoms including ringing, buzzing, or humming sounds in your ears' ),
          array( 'icon' => 'fas fa-person-falling', 'title' => 'Dizziness', 'desc' => 'Feeling off-balance or experiencing vertigo due to blocked ear canals' ),
          array( 'icon' => 'fas fa-head-side-cough', 'title' => 'Persistent Cough', 'desc' => 'Unexplained coughing caused by ear wax stimulating nerves in the ear canal' ),
          array( 'icon' => 'fas fa-ear-deaf', 'title' => 'Hearing Aid Problems', 'desc' => 'Failed hearing aid fitting or devices not working properly due to wax build-up' ),
        );
        foreach ( $symptoms as $symptom ) :
        ?>
          <div class="earwax-symptom-card">
            <div class="earwax-symptom-icon"><i class="<?php echo esc_attr( $symptom['icon'] ); ?>"></i></div>
            <h3 class="earwax-symptom-title"><?php echo esc_html( $symptom['title'] ); ?></h3>
            <p class="earwax-symptom-desc"><?php echo esc_html( $symptom['desc'] ); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     F4. TEAM — 2-column card grid (max 1000px), role badges
     ============================================ -->
<section class="earwax-team-section earwax-reveal">
  <div class="section-container">
    <div class="earwax-team-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'ew_team_badge', 'OUR TEAM' ) ); ?></span>
      </div>
      <h2 class="earwax-team-title"><?php echo esc_html( dp_field( 'ew_team_title', 'Meet Your Denton Ear Care Specialists' ) ); ?></h2>
      <p class="earwax-team-description"><?php echo esc_html( dp_field( 'ew_team_description', 'As Denton\'s dedicated ear care practice, we\'ve helped thousands of local residents resolve their ear wax problems. We offer professional, face-to-face care with convenient access and parking nearby.' ) ); ?></p>
    </div>

    <div class="earwax-team-grid">
      <?php if ( have_rows( 'ew_team_members' ) ) : while ( have_rows( 'ew_team_members' ) ) : the_row(); ?>
        <?php
        $team_image_id  = get_sub_field( 'image' );
        $team_image_url = $team_image_id ? wp_get_attachment_image_url( $team_image_id, 'medium_large' ) : '';
        $badge_text     = get_sub_field( 'badge_text' );
        $badge_style    = get_sub_field( 'badge_style' );
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
      <?php endwhile; else :
        // Try to pull pharmacist image from global options as fallback
        $global_pharmacist_image_id  = dp_option( 'pharmacist_image' );
        $global_pharmacist_image_url = $global_pharmacist_image_id ? wp_get_attachment_image_url( $global_pharmacist_image_id, 'medium_large' ) : '';

        $default_team = array(
          array(
            'name'  => 'Ahmed Al-Liabi',
            'role'  => 'Lead Pharmacist & Founder',
            'bio'   => 'As the founder of Denton Pharmacy, Ahmed brings over 15 years of pharmaceutical experience. A GPhC-registered pharmacist (2208502), he is dedicated to providing expert ear care with a personal touch.',
            'tags'  => array( 'GPhC Registered', '15+ Years Experience' ),
            'badge' => 'Lead Pharmacist',
            'badge_style' => 'green',
          ),
          array(
            'name'  => 'Jignasa Modhvadia',
            'role'  => 'Director',
            'bio'   => 'Jignasa combines clinical expertise with exceptional patient care. She plays a key role in delivering specialist ear care services at our Denton clinic.',
            'tags'  => array( 'Clinic Director', 'Patient Care Expert' ),
            'badge' => 'Director',
            'badge_style' => 'purple',
          ),
        );

        foreach ( $default_team as $ti => $member ) :
          $initials = '';
          $parts = explode( ' ', trim( $member['name'] ) );
          $initials = strtoupper( substr( $parts[0], 0, 1 ) );
          if ( count( $parts ) > 1 ) {
            $initials .= strtoupper( substr( end( $parts ), 0, 1 ) );
          }
        ?>
          <div class="earwax-team-card">
            <div class="earwax-team-image-wrapper">
              <?php if ( $ti === 0 && $global_pharmacist_image_url ) : ?>
                <img src="<?php echo esc_url( $global_pharmacist_image_url ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" class="earwax-team-image" />
              <?php else : ?>
                <div class="earwax-team-avatar">
                  <span class="earwax-team-avatar-initials"><?php echo esc_html( $initials ); ?></span>
                </div>
              <?php endif; ?>
              <div class="earwax-team-badge-<?php echo esc_attr( $member['badge_style'] ); ?>"><?php echo esc_html( $member['badge'] ); ?></div>
            </div>
            <div class="earwax-team-content">
              <h3 class="earwax-team-name"><?php echo esc_html( $member['name'] ); ?></h3>
              <p class="earwax-team-role"><?php echo esc_html( $member['role'] ); ?></p>
              <p class="earwax-team-bio"><?php echo esc_html( $member['bio'] ); ?></p>
              <div class="earwax-team-tags">
                <?php foreach ( $member['tags'] as $tag ) : ?>
                  <span class="earwax-team-tag"><?php echo esc_html( $tag ); ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     F5. COMPARISON TABLE — Horizontal scroll, highlighted Denton column
     ============================================ -->
<section class="earwax-comparison-section earwax-reveal">
  <div class="section-container">
    <div class="earwax-comparison-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'ew_compare_badge', 'TREATMENT COMPARISON' ) ); ?></span>
      </div>
      <h2 class="earwax-comparison-title"><?php echo esc_html( dp_field( 'ew_compare_title', 'How Our Treatment Compares' ) ); ?></h2>
      <p class="earwax-comparison-description"><?php echo esc_html( dp_field( 'ew_compare_description', 'See why microsuction is the gold standard for ear wax removal in Denton' ) ); ?></p>
    </div>

    <div class="earwax-comparison-table-wrapper">
      <table class="earwax-comparison-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th class="highlight"><?php echo esc_html( dp_field( 'ew_compare_col_1_heading', 'Denton Pharmacy' ) ); ?></th>
            <th><?php echo esc_html( dp_field( 'ew_compare_col_2_heading', 'Traditional Syringing' ) ); ?></th>
            <th><?php echo esc_html( dp_field( 'ew_compare_col_3_heading', 'At-Home Remedies' ) ); ?></th>
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
     F6. PROCESS — 3 alternating steps
     ============================================ -->
<section class="earwax-process-section earwax-reveal">
  <div class="section-container">
    <div class="earwax-process-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'ew_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="earwax-process-title"><?php echo esc_html( dp_field( 'ew_process_title', 'Our Professional Ear Wax Removal Process' ) ); ?></h2>
      <p class="earwax-process-description"><?php echo esc_html( dp_field( 'ew_process_description', 'Simple, effective treatment in three easy steps' ) ); ?></p>
    </div>

    <?php if ( have_rows( 'ew_process_steps' ) ) : $step_index = 0; while ( have_rows( 'ew_process_steps' ) ) : the_row(); $step_index++;
      $step_image_id  = get_sub_field( 'image' );
      $step_image_url = $step_image_id ? wp_get_attachment_image_url( $step_image_id, 'medium_large' ) : '';
      $step_time      = get_sub_field( 'time' );
      $step_badge     = get_sub_field( 'badge' );
      $step_direction = $step_image_url ? ( ( $step_index % 2 === 0 ) ? 'earwax-process-step-right' : 'earwax-process-step-left' ) : '';
    ?>
      <?php if ( $step_image_url ) : ?>
        <div class="earwax-process-step <?php echo esc_attr( $step_direction ); ?>">
          <div class="earwax-process-step-content">
            <div class="earwax-process-step-icon">
              <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
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
          <div class="earwax-process-step-image">
            <img src="<?php echo esc_url( $step_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
          </div>
        </div>
      <?php else : ?>
        <!-- No image — render as card in grid -->
      <?php if ( $step_index === 1 ) : ?><div class="earwax-process-cards"><?php endif; ?>
        <div class="earwax-process-card">
          <div class="earwax-process-card-number"><?php echo esc_html( $step_index ); ?></div>
          <div class="earwax-process-card-icon">
            <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h3 class="earwax-process-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="earwax-process-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
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
      <?php endif; ?>
    <?php endwhile; ?>
    <?php if ( ! $step_image_url ) : ?></div><?php endif; ?>
    <?php else : ?>
      <!-- Default: 3-step card grid -->
      <div class="earwax-process-cards">
        <div class="earwax-process-card">
          <div class="earwax-process-card-number">1</div>
          <div class="earwax-process-card-icon">
            <i class="fas fa-clipboard-check"></i>
          </div>
          <h3 class="earwax-process-card-title">Initial Assessment</h3>
          <p class="earwax-process-card-desc">Detailed ear examination, discussion of symptoms, and treatment plan explanation with a no-obligation quote.</p>
          <div class="earwax-process-step-time">
            <i class="fas fa-clock"></i>
            <span>10 minutes</span>
          </div>
        </div>
        <div class="earwax-process-card">
          <div class="earwax-process-card-number">2</div>
          <div class="earwax-process-card-icon">
            <i class="fas fa-microscope"></i>
          </div>
          <h3 class="earwax-process-card-title">Microsuction Treatment</h3>
          <p class="earwax-process-card-desc">Gentle wax removal with continuous monitoring, progress updates, and immediate relief.</p>
          <div class="earwax-process-step-time">
            <i class="fas fa-clock"></i>
            <span>15-20 minutes</span>
          </div>
        </div>
        <div class="earwax-process-card">
          <div class="earwax-process-card-number">3</div>
          <div class="earwax-process-card-icon">
            <i class="fas fa-heart-pulse"></i>
          </div>
          <h3 class="earwax-process-card-title">Aftercare Support</h3>
          <p class="earwax-process-card-desc">Personalised prevention advice, home care tips, and expert guidance on keeping your ears healthy long-term.</p>
          <div class="earwax-process-step-badge">
            <i class="fas fa-check-circle"></i>
            <span>Personalised care plan</span>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- ============================================
     F7. PRICING — 2-column, featured card with gradient
     ============================================ -->
<section class="earwax-pricing-section earwax-reveal">
  <div class="section-container">
    <div class="earwax-pricing-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'ew_pricing_badge', 'TRANSPARENT PRICING' ) ); ?></span>
      </div>
      <h2 class="earwax-pricing-title"><?php echo esc_html( dp_field( 'ew_pricing_title', 'Simple, Transparent Pricing' ) ); ?></h2>
      <p class="earwax-pricing-description"><?php echo esc_html( dp_field( 'ew_pricing_description', 'No hidden fees. No surprises. Just clear, professional ear care.' ) ); ?></p>
    </div>

    <div class="earwax-pricing-grid">
      <?php if ( have_rows( 'ew_pricing' ) ) : while ( have_rows( 'ew_pricing' ) ) : the_row(); ?>
        <?php $is_featured = get_sub_field( 'is_featured' ); ?>
        <div class="earwax-pricing-card <?php echo $is_featured ? 'earwax-pricing-card-featured' : ''; ?>">
          <?php if ( $is_featured ) : ?>
            <div class="earwax-pricing-badge"><?php echo esc_html( get_sub_field( 'badge_text' ) ?: 'MOST POPULAR' ); ?></div>
          <?php endif; ?>
          <div class="earwax-pricing-icon">
            <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="earwax-pricing-price">&pound;<?php echo esc_html( get_sub_field( 'price' ) ); ?></div>
          <h3 class="earwax-pricing-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="earwax-pricing-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <?php $callout = get_sub_field( 'callout' ); if ( $callout ) : ?>
            <div class="earwax-pricing-callout">
              <i class="fas fa-check"></i>
              <span><?php echo esc_html( $callout ); ?></span>
            </div>
          <?php endif; ?>
          <a href="<?php echo esc_url( dp_field( 'ew_hero_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button <?php echo $is_featured ? 'primary-cta' : 'secondary-cta'; ?> earwax-pricing-btn">
            <?php echo esc_html( get_sub_field( 'button_text' ) ?: 'Book Now' ); ?>
          </a>
        </div>
      <?php endwhile; else : ?>
        <!-- Default: Both Ears (Featured) -->
        <div class="earwax-pricing-card earwax-pricing-card-featured">
          <div class="earwax-pricing-badge">MOST POPULAR</div>
          <div class="earwax-pricing-icon">
            <i class="fas fa-ear-listen"></i>
          </div>
          <div class="earwax-pricing-price">&pound;60</div>
          <h3 class="earwax-pricing-card-title">Both Ears</h3>
          <p class="earwax-pricing-card-desc">Professional microsuction ear wax removal for both ears. Includes a full ear assessment and consultation.</p>
          <div class="earwax-pricing-callout">
            <i class="fas fa-check"></i>
            <span>Includes &pound;20 consultation</span>
          </div>
          <a href="<?php echo esc_url( dp_booking_url() ); ?>" class="cta-button primary-cta earwax-pricing-btn">Book Treatment</a>
        </div>
        <!-- Default: Single Ear -->
        <div class="earwax-pricing-card">
          <div class="earwax-pricing-icon">
            <i class="fas fa-ear-listen"></i>
          </div>
          <div class="earwax-pricing-price">&pound;40</div>
          <h3 class="earwax-pricing-card-title">Single Ear</h3>
          <p class="earwax-pricing-card-desc">Professional microsuction for one ear. Includes consultation and aftercare guidance.</p>
          <div class="earwax-pricing-callout">
            <i class="fas fa-check"></i>
            <span>Includes consultation</span>
          </div>
          <a href="<?php echo esc_url( dp_booking_url() ); ?>" class="cta-button secondary-cta earwax-pricing-btn">Book Treatment</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     F8. TESTIMONIALS — 3-column
     ============================================ -->
<section class="earwax-testimonials-section earwax-reveal">
  <div class="section-container">
    <div class="earwax-testimonials-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'ew_testimonials_badge', 'PATIENT TESTIMONIALS' ) ); ?></span>
      </div>
      <h2 class="earwax-testimonials-title"><?php echo esc_html( dp_field( 'ew_testimonials_title', 'Hear What Our Denton Patients Say' ) ); ?></h2>
    </div>

    <div class="earwax-testimonials-grid">
      <?php if ( have_rows( 'ew_testimonials' ) ) : while ( have_rows( 'ew_testimonials' ) ) : the_row();
        $author_name = get_sub_field( 'author' );
        $initials = '';
        if ( $author_name ) {
          $parts = explode( ' ', trim( $author_name ) );
          $initials = strtoupper( substr( $parts[0], 0, 1 ) );
          if ( count( $parts ) > 1 ) {
            $initials .= strtoupper( substr( end( $parts ), 0, 1 ) );
          }
        }
      ?>
        <div class="earwax-testimonial-card">
          <div class="earwax-testimonial-header">
            <div class="earwax-testimonial-avatar"><?php echo esc_html( $initials ); ?></div>
            <div class="earwax-testimonial-meta">
              <p class="earwax-testimonial-author"><?php echo esc_html( $author_name ); ?></p>
              <div class="earwax-testimonial-verified">
                <i class="fas fa-check-circle"></i>
                <span>Verified Patient</span>
              </div>
            </div>
          </div>
          <div class="star-row">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="earwax-testimonial-quote"><?php echo esc_html( get_sub_field( 'quote' ) ); ?></p>
          <div class="earwax-testimonial-service">
            <i class="fas fa-ear-listen"></i>
            <span>Microsuction</span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $default_testimonials = array(
          array( 'quote' => 'After weeks of discomfort, I finally got my ears treated at Denton Pharmacy. The difference was immediate — I could hear clearly again! Ahmed was professional and explained everything clearly. Highly recommend!', 'author' => 'Paul F.', 'location' => 'Denton' ),
          array( 'quote' => 'Fantastic service from start to finish. The team was so thorough and professional. The aftercare advice has helped prevent any further build-up.', 'author' => 'Georgia P.', 'location' => 'Denton' ),
          array( 'quote' => 'Much better than the traditional syringing I had years ago. No mess, no fuss, just clear hearing again. The appointment times meant I didn\'t need to take time off work.', 'author' => 'Giedrius K.', 'location' => 'Denton' ),
        );
        foreach ( $default_testimonials as $testimonial ) :
          $parts = explode( ' ', trim( $testimonial['author'] ) );
          $initials = strtoupper( substr( $parts[0], 0, 1 ) );
          if ( count( $parts ) > 1 ) {
            $initials .= strtoupper( substr( end( $parts ), 0, 1 ) );
          }
        ?>
          <div class="earwax-testimonial-card">
            <div class="earwax-testimonial-header">
              <div class="earwax-testimonial-avatar"><?php echo esc_html( $initials ); ?></div>
              <div class="earwax-testimonial-meta">
                <p class="earwax-testimonial-author"><?php echo esc_html( $testimonial['author'] ); ?></p>
                <div class="earwax-testimonial-verified">
                  <i class="fas fa-check-circle"></i>
                  <span>Verified Patient</span>
                </div>
              </div>
            </div>
            <div class="star-row">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p class="earwax-testimonial-quote">"<?php echo esc_html( $testimonial['quote'] ); ?>"</p>
            <div class="earwax-testimonial-service">
              <i class="fas fa-ear-listen"></i>
              <span>Microsuction</span>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     F9. FAQ — Numbered accordion
     .earwax-faq-item / .active
     ============================================ -->
<section class="earwax-faq-section earwax-reveal">
  <div class="section-container">
    <div class="earwax-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'ew_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="earwax-faq-title"><?php echo esc_html( dp_field( 'ew_faq_title', 'Frequently Asked Questions — Ear Wax Removal Denton' ) ); ?></h2>
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
        <?php
        $faqs = array(
          array( 'q' => 'Is the treatment uncomfortable?', 'a' => 'Most patients find microsuction very comfortable. You\'ll hear a quiet whistling sound, but the procedure is gentle and shouldn\'t cause any pain.' ),
          array( 'q' => 'How often should I have my ears checked?', 'a' => 'Most people benefit from an annual check-up, though this varies. We\'ll advise based on your individual situation during your Denton appointment.' ),
          array( 'q' => 'Can I drive after the treatment?', 'a' => 'Yes, you can drive immediately after treatment. Most people experience instant improvement in hearing.' ),
          array( 'q' => 'Do you treat children?', 'a' => 'Yes, we treat patients of all ages at our Denton clinic. We\'re experienced in working with children and ensure they feel comfortable throughout.' ),
          array( 'q' => 'What if I have a perforated eardrum?', 'a' => 'Microsuction is safe for perforated eardrums, unlike water syringing. We\'ll assess your ears during consultation.' ),
          array( 'q' => 'Where are you located in Denton?', 'a' => 'We\'re based at 14-16 Ashton Road, Denton, Manchester, M34 3EX — with parking available nearby.' ),
        );
        foreach ( $faqs as $i => $faq ) :
        ?>
          <div class="earwax-faq-item">
            <button class="earwax-faq-question" onclick="toggleFAQ(this)">
              <span class="earwax-faq-number"><?php echo esc_html( $i + 1 ); ?></span>
              <span class="earwax-faq-text"><?php echo esc_html( $faq['q'] ); ?></span>
              <i class="fas fa-plus earwax-faq-icon"></i>
            </button>
            <div class="earwax-faq-answer">
              <p><?php echo esc_html( $faq['a'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     F10. FINAL CTA — Purple gradient
     ============================================ -->
<section class="earwax-cta-section earwax-reveal">
  <div class="earwax-cta-glow-1"></div>
  <div class="earwax-cta-glow-2"></div>
  <div class="earwax-cta-dots"></div>
  <div class="section-container">
    <div class="earwax-cta-content">
      <div class="earwax-cta-badges">
        <div class="earwax-cta-badge">
          <span><?php echo esc_html( dp_field( 'ew_cta_badge_1', '£60 both ears' ) ); ?></span>
        </div>
        <div class="earwax-cta-badge">
          <span><?php echo esc_html( dp_field( 'ew_cta_badge_2', 'Same-day available' ) ); ?></span>
        </div>
        <div class="earwax-cta-badge">
          <span><?php echo esc_html( dp_field( 'ew_cta_badge_3', 'GPhC Registered' ) ); ?></span>
        </div>
      </div>
      <h2 class="earwax-cta-title"><?php echo esc_html( dp_field( 'ew_cta_title', 'Ready to hear clearly again?' ) ); ?></h2>
      <p class="earwax-cta-description">
        <?php echo esc_html( dp_field( 'ew_cta_description', 'Book your ear wax removal appointment at our Denton clinic today. Expert microsuction treatment with guaranteed results.' ) ); ?>
      </p>
      <div class="earwax-cta-actions">
        <a href="<?php echo esc_url( dp_field( 'ew_cta_primary_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta earwax-cta-button-white">
          <?php echo esc_html( dp_field( 'ew_cta_button_text', 'Book Appointment Online' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta earwax-cta-button-outline">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( dp_phone() ); ?>
        </a>
      </div>
      <div class="earwax-cta-trust-checks">
        <span class="earwax-cta-check"><i class="fas fa-check"></i> No referral needed</span>
        <span class="earwax-cta-check"><i class="fas fa-check"></i> Expert microsuction</span>
        <span class="earwax-cta-check"><i class="fas fa-check"></i> Same-day appointments</span>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
