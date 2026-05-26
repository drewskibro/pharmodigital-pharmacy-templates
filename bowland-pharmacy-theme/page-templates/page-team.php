<?php
/**
 * Template Name: Our Team
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="team-hero-section team-reveal">
  <div class="team-hero-bg-blob-1"></div>
  <div class="team-hero-bg-blob-2"></div>
  <div class="team-hero-dots"></div>

  <div class="section-container">
    <div class="team-hero-content">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'team_hero_badge', 'MEET THE EXPERTS' ) ); ?></span>
      </div>

      <h1 class="team-hero-title">
        <?php echo esc_html( bp_field( 'team_hero_title_line1', 'Your Health,' ) ); ?> <br />
        <span class="gradient-text"><?php echo esc_html( bp_field( 'team_hero_title_highlight', 'Our Passion' ) ); ?></span>
      </h1>

      <p class="team-hero-description">
        <?php echo esc_html( bp_field( 'team_hero_description', 'We are a dedicated team of experienced clinicians committed to the health of Wythenshawe. Combining over 15 years of expertise with a modern, personal approach to care.' ) ); ?>
      </p>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="team-stats-section team-reveal">
  <div class="section-container">
    <div class="team-stats-bar">
      <?php if ( have_rows( 'team_stats' ) ) : $stat_count = 0; while ( have_rows( 'team_stats' ) ) : the_row(); $stat_count++; ?>
        <?php if ( $stat_count > 1 ) : ?><div class="team-stat-divider"></div><?php endif; ?>
        <div class="team-stat-item">
          <div class="team-stat-icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <div class="team-stat-text">
            <span class="team-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></span>
            <span class="team-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="team-stat-item">
          <div class="team-stat-icon"><i class="fas fa-calendar-check"></i></div>
          <div class="team-stat-text"><span class="team-stat-number">15+</span><span class="team-stat-label">Years Experience</span></div>
        </div>
        <div class="team-stat-divider"></div>
        <div class="team-stat-item">
          <div class="team-stat-icon"><i class="fas fa-shield-halved"></i></div>
          <div class="team-stat-text"><span class="team-stat-number">GPhC</span><span class="team-stat-label">Registered</span></div>
        </div>
        <div class="team-stat-divider"></div>
        <div class="team-stat-item">
          <div class="team-stat-icon"><i class="fas fa-user-doctor"></i></div>
          <div class="team-stat-text"><span class="team-stat-number">Expert</span><span class="team-stat-label">Prescribers</span></div>
        </div>
        <div class="team-stat-divider"></div>
        <div class="team-stat-item">
          <div class="team-stat-icon"><i class="fas fa-heart"></i></div>
          <div class="team-stat-text"><span class="team-stat-number">5,000+</span><span class="team-stat-label">Patients Served</span></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Team Members Grid -->
<section class="team-members-section team-reveal">
  <div class="section-container">
    <?php
    // Build team array: global options → hardcoded Bowland placeholders
    $team = array();

    if ( function_exists( 'have_rows' ) && have_rows( 'pharmacy_team_members', 'option' ) ) {
        while ( have_rows( 'pharmacy_team_members', 'option' ) ) {
            the_row();
            $tags = array();
            if ( have_rows( 'team_tags' ) ) {
                while ( have_rows( 'team_tags' ) ) {
                    the_row();
                    $label = get_sub_field( 'tag_label' );
                    if ( $label ) {
                        $tags[] = $label;
                    }
                }
            }
            $team[] = array(
                'photo_id' => get_sub_field( 'team_photo' ),
                'name'     => get_sub_field( 'team_name' ) ?: '',
                'role'     => get_sub_field( 'team_role' ) ?: '',
                'gphc'     => get_sub_field( 'team_gphc' ) ?: '',
                'tags'     => $tags,
            );
        }
    }

    // Hardcoded Bowland placeholders — Drew will supply final details
    if ( empty( $team ) ) {
        $team = array(
            array( 'photo_id' => 0, 'name' => 'Ahmed Al-Liabi',   'role' => 'Lead Pharmacist & Independent Prescriber', 'gphc' => '2088937', 'tags' => array( 'Independent Prescriber', 'Weight Loss', 'Travel Health' ) ),
            array( 'photo_id' => 0, 'name' => 'Elisha Mackin',    'role' => 'Trainee Pharmacy Technician',              'gphc' => '',        'tags' => array( 'Dispensing', 'Patient Support' ) ),
            array( 'photo_id' => 0, 'name' => 'Paula Gaunt',      'role' => 'Trainee Pharmacy Technician',              'gphc' => '',        'tags' => array( 'Dispensing', 'NHS Services' ) ),
            array( 'photo_id' => 0, 'name' => 'Joanne Tabberner', 'role' => 'Pharmacy Assistant',                       'gphc' => '',        'tags' => array( 'Patient Support', 'NHS Services' ) ),
            array( 'photo_id' => 0, 'name' => 'Team Member',      'role' => 'Pharmacist',                               'gphc' => '',        'tags' => array() ),
            array( 'photo_id' => 0, 'name' => 'Team Member',      'role' => 'Pharmacy Technician',                      'gphc' => '',        'tags' => array() ),
        );
    }
    ?>

    <div class="team-grid">
      <?php foreach ( $team as $member ) :
        $photo_url = ! empty( $member['photo_id'] ) ? wp_get_attachment_image_url( $member['photo_id'], 'medium' ) : '';
        $initials  = '';
        if ( empty( $photo_url ) ) {
            $parts    = explode( ' ', trim( $member['name'] ) );
            $initials = strtoupper( substr( $parts[0], 0, 1 ) . ( isset( $parts[1] ) ? substr( $parts[1], 0, 1 ) : '' ) );
        }
      ?>
        <div class="team-card">
            <div class="team-card-photo">
                <?php if ( $photo_url ) : ?>
                    <img src="<?php echo esc_url( $photo_url ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" />
                <?php else : ?>
                    <span class="team-card-initials"><?php echo esc_html( $initials ); ?></span>
                <?php endif; ?>
            </div>

            <h3 class="team-card-name"><?php echo esc_html( $member['name'] ); ?></h3>
            <p class="team-card-role"><?php echo esc_html( $member['role'] ); ?></p>

            <?php if ( ! empty( $member['gphc'] ) ) : ?>
            <a href="https://www.pharmacyregulation.org/registers/pharmacist/<?php echo esc_attr( $member['gphc'] ); ?>"
               class="team-card-gphc" target="_blank" rel="noopener noreferrer">
                <i class="fas fa-shield-halved"></i>
                GPhC: <?php echo esc_html( $member['gphc'] ); ?>
            </a>
            <?php endif; ?>

            <?php if ( ! empty( $member['tags'] ) ) : ?>
            <div class="team-card-tags">
                <?php foreach ( $member['tags'] as $tag ) : ?>
                    <span class="team-card-tag"><?php echo esc_html( $tag ); ?></span>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="team-values-section team-reveal">
  <div class="section-container">
    <div class="team-section-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'team_values_badge', 'OUR PHILOSOPHY' ) ); ?></span>
      </div>
      <h2 class="team-section-title"><?php echo esc_html( bp_field( 'team_values_title', 'What Drives Us' ) ); ?></h2>
      <p class="team-section-description"><?php echo esc_html( bp_field( 'team_values_description', 'The principles that guide every consultation' ) ); ?></p>
    </div>

    <div class="team-values-grid">
      <?php if ( have_rows( 'team_values' ) ) : while ( have_rows( 'team_values' ) ) : the_row(); ?>
        <div class="team-value-card">
          <div class="team-value-icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <h3 class="team-value-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="team-value-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="team-value-card">
          <div class="team-value-icon"><i class="fas fa-heart"></i></div>
          <h3 class="team-value-title">Patient-First Care</h3>
          <p class="team-value-description">We treat people, not just symptoms. Every decision puts your health and wellbeing at the centre.</p>
        </div>
        <div class="team-value-card">
          <div class="team-value-icon"><i class="fas fa-graduation-cap"></i></div>
          <h3 class="team-value-title">Continuous Learning</h3>
          <p class="team-value-description">We stay at the forefront of pharmacy practice through ongoing training and professional development.</p>
        </div>
        <div class="team-value-card">
          <div class="team-value-icon"><i class="fas fa-handshake"></i></div>
          <h3 class="team-value-title">Building Trust</h3>
          <p class="team-value-description">Serving Wythenshawe for over 15 years, we've built lasting relationships based on honesty and reliability.</p>
        </div>
        <div class="team-value-card">
          <div class="team-value-icon"><i class="fas fa-lightbulb"></i></div>
          <h3 class="team-value-title">Innovation</h3>
          <p class="team-value-description">Combining traditional pharmacy values with modern healthcare solutions for accessible, convenient service.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="team-cta-section team-reveal">
  <div class="team-cta-blob-1"></div>
  <div class="team-cta-blob-2"></div>

  <div class="section-container">
    <div class="team-cta-content">
      <div class="team-cta-badges">
        <span class="team-cta-badge"><?php echo esc_html( bp_field( 'team_cta_badge_1', '15+ Years Experience' ) ); ?></span>
        <span class="team-cta-badge"><?php echo esc_html( bp_field( 'team_cta_badge_2', 'GPhC Registered' ) ); ?></span>
        <span class="team-cta-badge"><?php echo esc_html( bp_field( 'team_cta_badge_3', 'Patient-First Care' ) ); ?></span>
      </div>

      <h2 class="team-cta-title"><?php echo esc_html( bp_field( 'team_cta_title', 'Experience the Bowland Pharmacy Difference' ) ); ?></h2>
      <p class="team-cta-description"><?php echo esc_html( bp_field( 'team_cta_description', 'Book your consultation with our experienced Bowland team today. Personal care, professional expertise.' ) ); ?></p>

      <div class="team-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'team_cta_url', bp_booking_url() ) ); ?>" class="cta-button primary-cta team-cta-button-white">
          <i class="fas fa-calendar-check"></i>
          <?php echo esc_html( bp_field( 'team_cta_button_text', 'Book Consultation' ) ); ?>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta team-cta-button-outline">
          <i class="fas fa-phone"></i>
          <?php echo esc_html( 'Call ' . bp_phone() ); ?>
        </a>
      </div>

      <div class="team-cta-trust-row">
        <div class="team-cta-trust-item"><i class="fas fa-check-circle"></i><span><?php echo esc_html( bp_field( 'team_cta_trust_1', 'Expert team' ) ); ?></span></div>
        <div class="team-cta-trust-item"><i class="fas fa-check-circle"></i><span><?php echo esc_html( bp_field( 'team_cta_trust_2', 'Same-day appointments' ) ); ?></span></div>
        <div class="team-cta-trust-item"><i class="fas fa-check-circle"></i><span><?php echo esc_html( bp_field( 'team_cta_trust_3', '15+ years serving Wythenshawe' ) ); ?></span></div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
