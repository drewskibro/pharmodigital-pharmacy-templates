<?php
/**
 * Template Name: Our Team
 * @package Denton_Pharmacy
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
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'team_hero_badge', 'MEET THE EXPERTS' ) ); ?></span>
      </div>

      <h1 class="team-hero-title">
        <?php echo esc_html( dp_field( 'team_hero_title_line1', 'Your Health,' ) ); ?> <br />
        <span class="gradient-text"><?php echo esc_html( dp_field( 'team_hero_title_highlight', 'Our Passion' ) ); ?></span>
      </h1>

      <p class="team-hero-description">
        <?php echo esc_html( dp_field( 'team_hero_description', 'We are a dedicated team of experienced clinicians committed to the health of Denton. Combining over 15 years of expertise with a modern, personal approach to care.' ) ); ?>
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
          <div class="team-stat-icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
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
    <div class="team-grid">
      <?php if ( have_rows( 'team_members' ) ) : while ( have_rows( 'team_members' ) ) : the_row();
        $member_image_id  = get_sub_field( 'image' );
        $member_image_url = $member_image_id ? wp_get_attachment_image_url( $member_image_id, 'large' ) : '';
        $member_name      = get_sub_field( 'name' );
        $member_gphc      = get_sub_field( 'gphc_number' );
        $badge_text       = get_sub_field( 'badge_text' );
        $badge_type       = get_sub_field( 'badge_type' );
        // Extract initials from name for avatar fallback
        $name_parts = explode( ' ', trim( $member_name ) );
        $initials   = strtoupper( substr( $name_parts[0], 0, 1 ) . ( isset( $name_parts[1] ) ? substr( $name_parts[1], 0, 1 ) : '' ) );
      ?>
        <div class="team-member-card">
          <div class="team-member-image-wrapper">
            <?php if ( $member_image_url ) : ?>
              <img src="<?php echo esc_url( $member_image_url ); ?>" alt="<?php echo esc_attr( $member_name ); ?>" class="team-member-image" />
            <?php else : ?>
              <div class="team-member-initials-circle">
                <span class="team-member-initials"><?php echo esc_html( $initials ); ?></span>
              </div>
            <?php endif; ?>
            <div class="team-member-overlay"></div>
            <?php if ( $badge_text ) : ?>
              <div class="team-member-badge-<?php echo esc_attr( $badge_type ); ?>"><?php echo esc_html( $badge_text ); ?></div>
            <?php endif; ?>
          </div>
          <div class="team-member-content">
            <h3 class="team-member-name"><?php echo esc_html( $member_name ); ?></h3>
            <p class="team-member-role"><?php echo esc_html( get_sub_field( 'role' ) ); ?></p>

            <?php if ( have_rows( 'credentials' ) ) : ?>
              <div class="team-member-credentials">
                <?php while ( have_rows( 'credentials' ) ) : the_row(); ?>
                  <span class="team-credential-badge"><?php echo esc_html( get_sub_field( 'credential' ) ); ?></span>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

            <?php if ( $member_gphc ) : ?>
              <a href="https://www.pharmacyregulation.org/registers/pharmacist/<?php echo esc_attr( $member_gphc ); ?>" target="_blank" rel="noopener" class="team-gphc-verify-link">
                <i class="fas fa-shield-halved"></i>
                Verify GPhC Registration
                <i class="fas fa-external-link-alt"></i>
              </a>
            <?php endif; ?>

            <p class="team-member-bio"><?php echo esc_html( get_sub_field( 'bio' ) ); ?></p>

            <?php if ( have_rows( 'specialties' ) ) : ?>
              <div class="team-member-specialties">
                <?php while ( have_rows( 'specialties' ) ) : the_row(); ?>
                  <span class="team-specialty-tag"><?php echo esc_html( get_sub_field( 'specialty' ) ); ?></span>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        // Ahmed: use ACF pharmacist image → theme fallback
        $ahmed_image_id  = dp_option( 'pharmacist_image' );
        $ahmed_image_url = $ahmed_image_id ? wp_get_attachment_image_url( $ahmed_image_id, 'large' ) : '';
        if ( ! $ahmed_image_url ) {
            $ahmed_image_url = get_theme_file_uri( 'assets/images/ahmed-pharmacist.jpg' );
        }
        ?>
        <!-- Ahmed Al-Liabi -->
        <div class="team-member-card">
          <div class="team-member-image-wrapper">
            <img src="<?php echo esc_url( $ahmed_image_url ); ?>" alt="Ahmed Al-Liabi" class="team-member-image" />
            <div class="team-member-overlay"></div>
            <div class="team-member-badge-founder">Lead Pharmacist</div>
          </div>
          <div class="team-member-content">
            <h3 class="team-member-name">Ahmed Al-Liabi</h3>
            <p class="team-member-role">Founder &amp; Lead Pharmacist</p>
            <div class="team-member-credentials">
              <span class="team-credential-badge">GPhC: 2208502</span>
              <span class="team-credential-badge">Independent Prescriber</span>
            </div>
            <a href="https://www.pharmacyregulation.org/registers/pharmacist/2208502" target="_blank" rel="noopener" class="team-gphc-verify-link">
              <i class="fas fa-shield-halved"></i>
              Verify GPhC Registration
              <i class="fas fa-external-link-alt"></i>
            </a>
            <p class="team-member-bio">With over 15 years of experience serving the Denton community, Ahmed leads our team with dedication and expertise. As an Independent Prescriber, he specialises in travel health, medical weight loss, and ear wax removal.</p>
            <div class="team-member-specialties">
              <span class="team-specialty-tag">Weight Loss</span>
              <span class="team-specialty-tag">Travel Health</span>
              <span class="team-specialty-tag">Ear Wax Removal</span>
            </div>
          </div>
        </div>
        <!-- Jignasa Modhvadia -->
        <div class="team-member-card">
          <div class="team-member-image-wrapper">
            <div class="team-member-initials-circle">
              <span class="team-member-initials">JM</span>
            </div>
            <div class="team-member-overlay"></div>
            <div class="team-member-badge-director">Director</div>
          </div>
          <div class="team-member-content">
            <h3 class="team-member-name">Jignasa Modhvadia</h3>
            <p class="team-member-role">Director of Pharmacy</p>
            <div class="team-member-credentials">
              <span class="team-credential-badge">Company Director</span>
              <span class="team-credential-badge">Clinical Operations</span>
            </div>
            <p class="team-member-bio">As Director of Pharmacy, Jignasa combines strategic leadership with hands-on operational management. She ensures the smooth running of our Denton clinic while maintaining the highest standards of patient care.</p>
            <div class="team-member-specialties">
              <span class="team-specialty-tag">Clinic Operations</span>
              <span class="team-specialty-tag">Patient Care</span>
              <span class="team-specialty-tag">Staff Development</span>
            </div>
          </div>
        </div>
        <!-- Baljender Nagi -->
        <div class="team-member-card">
          <div class="team-member-image-wrapper">
            <div class="team-member-initials-circle">
              <span class="team-member-initials">BN</span>
            </div>
            <div class="team-member-overlay"></div>
            <div class="team-member-badge-senior">Senior Pharmacy Technician</div>
          </div>
          <div class="team-member-content">
            <h3 class="team-member-name">Baljender Nagi</h3>
            <p class="team-member-role">Senior Pharmacy Technician</p>
            <div class="team-member-credentials">
              <span class="team-credential-badge">GPhC: 5113254</span>
              <span class="team-credential-badge">Clinical Specialist</span>
            </div>
            <a href="https://www.pharmacyregulation.org/registers/pharmacy-technician/5113254" target="_blank" rel="noopener" class="team-gphc-verify-link">
              <i class="fas fa-shield-halved"></i>
              Verify GPhC Registration
              <i class="fas fa-external-link-alt"></i>
            </a>
            <p class="team-member-bio">Baljender is a highly experienced pharmacy technician and a senior member of our clinical team. Her extensive knowledge and friendly approach ensure the highest standard of care across all of our pharmacy services.</p>
            <div class="team-member-specialties">
              <span class="team-specialty-tag">NHS Services</span>
              <span class="team-specialty-tag">Clinical Services</span>
              <span class="team-specialty-tag">Patient Support</span>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="team-values-section team-reveal">
  <div class="section-container">
    <div class="team-section-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'team_values_badge', 'OUR PHILOSOPHY' ) ); ?></span>
      </div>
      <h2 class="team-section-title"><?php echo esc_html( dp_field( 'team_values_title', 'What Drives Us' ) ); ?></h2>
      <p class="team-section-description"><?php echo esc_html( dp_field( 'team_values_description', 'The principles that guide every consultation' ) ); ?></p>
    </div>

    <div class="team-values-grid">
      <?php if ( have_rows( 'team_values' ) ) : while ( have_rows( 'team_values' ) ) : the_row(); ?>
        <div class="team-value-card">
          <div class="team-value-icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
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
          <p class="team-value-description">Serving Denton for over 15 years, we've built lasting relationships based on honesty and reliability.</p>
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
        <span class="team-cta-badge"><?php echo esc_html( dp_field( 'team_cta_badge_1', '15+ Years Experience' ) ); ?></span>
        <span class="team-cta-badge"><?php echo esc_html( dp_field( 'team_cta_badge_2', 'GPhC Registered' ) ); ?></span>
        <span class="team-cta-badge"><?php echo esc_html( dp_field( 'team_cta_badge_3', 'Patient-First Care' ) ); ?></span>
      </div>

      <h2 class="team-cta-title"><?php echo esc_html( dp_field( 'team_cta_title', 'Experience the Denton Pharmacy Difference' ) ); ?></h2>
      <p class="team-cta-description"><?php echo esc_html( dp_field( 'team_cta_description', 'Book your consultation with our experienced Denton team today. Personal care, professional expertise.' ) ); ?></p>

      <div class="team-cta-actions">
        <a href="<?php echo esc_url( dp_field( 'team_cta_url', dp_booking_url() ) ); ?>" class="cta-button primary-cta team-cta-button-white">
          <i class="fas fa-calendar-check"></i>
          <?php echo esc_html( dp_field( 'team_cta_button_text', 'Book Consultation' ) ); ?>
        </a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta team-cta-button-outline">
          <i class="fas fa-phone"></i>
          <?php echo esc_html( 'Call ' . dp_phone() ); ?>
        </a>
      </div>

      <div class="team-cta-trust-row">
        <div class="team-cta-trust-item"><i class="fas fa-check-circle"></i><span>Expert team</span></div>
        <div class="team-cta-trust-item"><i class="fas fa-check-circle"></i><span>Same-day appointments</span></div>
        <div class="team-cta-trust-item"><i class="fas fa-check-circle"></i><span>15+ years serving Denton</span></div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
