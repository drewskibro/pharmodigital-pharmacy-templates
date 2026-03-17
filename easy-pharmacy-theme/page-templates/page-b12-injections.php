<?php
/**
 * Template Name: Vitamin B12 Injections
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="b12-hero-section">
  <div class="b12-hero-bg"></div>
  <div class="b12-hero-overlay"></div>
  <div class="b12-hero-dots"></div>

  <div class="section-container">
    <div class="b12-hero-grid">

      <!-- Left: Content -->
      <div class="b12-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_hero_badge', 'VITAMIN B12 INJECTIONS' ) ); ?></span>
        </div>

        <h1 class="b12-hero-title">
          <span class="gradient-text"><?php echo esc_html( ep_field( 'b12_hero_title_line1', 'Vitamin B12' ) ); ?></span>
          <span class="hero-accent-text"><?php echo esc_html( ep_field( 'b12_hero_title_line2', 'Injections in' ) ); ?></span>
          <span class="gradient-text"><?php echo esc_html( ep_field( 'b12_hero_title_line3', 'Ashford, Chertsey & Walton' ) ); ?></span>
        </h1>

        <p class="b12-hero-description">
          <?php echo esc_html( ep_field( 'b12_hero_description', 'Beat fatigue, brain fog, and low energy with hydroxocobalamin B12 injections at Easy Pharmacy. No GP referral needed — walk-ins welcome.' ) ); ?>
        </p>

        <div class="b12-hero-actions">
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( ep_field( 'b12_hero_cta_text', 'Book Your B12 Injection' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( ep_phone() ); ?>
          </a>
        </div>

        <!-- Trust Badges -->
        <div class="b12-hero-trust">
          <div class="b12-hero-trust-item">
            <i class="fas fa-shield-halved"></i>
            <span><?php echo esc_html( ep_field( 'b12_trust_1', 'GPhC Registered' ) ); ?></span>
          </div>
          <div class="b12-hero-trust-item">
            <i class="fas fa-door-open"></i>
            <span><?php echo esc_html( ep_field( 'b12_trust_2', 'Walk-ins Welcome' ) ); ?></span>
          </div>
          <div class="b12-hero-trust-item">
            <i class="fas fa-user-doctor"></i>
            <span><?php echo esc_html( ep_field( 'b12_trust_3', 'Expert Pharmacists' ) ); ?></span>
          </div>
          <div class="b12-hero-trust-item desktop-only">
            <i class="fas fa-file-medical"></i>
            <span><?php echo esc_html( ep_field( 'b12_trust_4', 'No Referral Needed' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Visual -->
      <div class="b12-hero-visual">
        <div class="b12-hero-visual-glow"></div>

        <!-- Main image card -->
        <div class="b12-hero-image-card">
          <div class="b12-hero-image-inner">
            <?php
            $b12_hero_image_id = ep_field( 'b12_hero_image' );
            if ( ! $b12_hero_image_id ) {
                $b12_hero_image_id = ep_option( 'pharmacist_image' );
            }
            $b12_hero_image_url = $b12_hero_image_id ? wp_get_attachment_image_url( $b12_hero_image_id, 'large' ) : 'https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=800&h=1000&fit=crop';
            ?>
            <img src="<?php echo esc_url( $b12_hero_image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'b12_hero_image_alt', 'Vitamin B12 injection at Easy Pharmacy Ashford' ) ); ?>" class="b12-hero-image" />
            <div class="b12-hero-image-overlay"></div>
          </div>

          <!-- Floating badge: B12 -->
          <div class="b12-hero-badge-float">
            <i class="fas fa-syringe"></i>
            <div class="b12-hero-badge-float-text">
              <span class="b12-hero-badge-float-label"><?php echo esc_html( ep_field( 'b12_hero_badge_label', 'Hydroxocobalamin' ) ); ?></span>
              <span class="b12-hero-badge-float-value"><?php echo esc_html( ep_field( 'b12_hero_badge_value', 'B12 Injection' ) ); ?></span>
            </div>
          </div>
        </div>

        <!-- Testimonial card -->
        <div class="b12-hero-testimonial-card">
          <div class="b12-hero-quote-icon">
            <i class="fas fa-quote-left"></i>
          </div>
          <p class="b12-hero-quote-text">
            <?php echo esc_html( ep_field( 'b12_hero_testimonial_text', '"I felt a noticeable difference within 48 hours — more energy, clearer thinking. Wish I\'d done it sooner!"' ) ); ?>
          </p>
          <div class="b12-hero-quote-footer">
            <div class="b12-hero-author">
              <span class="b12-hero-author-name"><?php echo esc_html( ep_field( 'b12_hero_testimonial_name', 'Ashford Patient' ) ); ?></span>
              <div class="b12-hero-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
            <div class="b12-hero-result-badge">
              <i class="fas fa-bolt"></i>
              <span><?php echo esc_html( ep_field( 'b12_hero_testimonial_result', 'More Energy' ) ); ?></span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="b12-stats-section">
  <div class="b12-stats-shimmer"></div>
  <div class="section-container">
    <div class="b12-stats-grid">
      <?php if ( have_rows( 'b12_stats' ) ) : while ( have_rows( 'b12_stats' ) ) : the_row(); ?>
        <div class="b12-stat-item">
          <div class="b12-stat-icon">
            <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <div class="b12-stat-content">
            <p class="b12-stat-number"><?php echo esc_html( get_sub_field( 'number' ) ); ?></p>
            <p class="b12-stat-label"><?php echo esc_html( get_sub_field( 'label' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="b12-stat-item">
          <div class="b12-stat-icon"><i class="fas fa-users"></i></div>
          <div class="b12-stat-content"><p class="b12-stat-number">1 in 5</p><p class="b12-stat-label">UK Adults Low B12</p></div>
        </div>
        <div class="b12-stat-item">
          <div class="b12-stat-icon"><i class="fas fa-bullseye"></i></div>
          <div class="b12-stat-content"><p class="b12-stat-number">100%</p><p class="b12-stat-label">Absorption via Injection</p></div>
        </div>
        <div class="b12-stat-item">
          <div class="b12-stat-icon"><i class="fas fa-bolt"></i></div>
          <div class="b12-stat-content"><p class="b12-stat-number">24–72h</p><p class="b12-stat-label">Effects Felt</p></div>
        </div>
        <div class="b12-stat-item">
          <div class="b12-stat-icon"><i class="fas fa-clock"></i></div>
          <div class="b12-stat-content"><p class="b12-stat-number">15 min</p><p class="b12-stat-label">Appointment Time</p></div>
        </div>
        <div class="b12-stat-item desktop-only">
          <div class="b12-stat-icon"><i class="fas fa-calendar-check"></i></div>
          <div class="b12-stat-content"><p class="b12-stat-number">6–8 wks</p><p class="b12-stat-label">Per Injection Lasts</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Why B12 Matters Section -->
<section class="b12-why-section">
  <div class="section-container">
    <div class="b12-why-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_why_badge', 'WHY B12 MATTERS' ) ); ?></span>
      </div>
      <h2 class="b12-why-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'b12_why_title_highlight', 'Why Vitamin B12 matters' ) ); ?></span> <?php echo esc_html( ep_field( 'b12_why_title_rest', 'more than you think' ) ); ?>
      </h2>
      <p class="b12-why-description"><?php echo esc_html( ep_field( 'b12_why_description', 'Vitamin B12 is essential for energy production, brain function, and red blood cell formation. Yet millions of UK adults are deficient without knowing it.' ) ); ?></p>
    </div>

    <div class="b12-why-grid">
      <?php if ( have_rows( 'b12_why_cards' ) ) : while ( have_rows( 'b12_why_cards' ) ) : the_row(); ?>
        <div class="b12-why-card">
          <div class="b12-why-card-icon">
            <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h3 class="b12-why-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="b12-why-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <?php
        $why_cards = array(
          array( 'icon' => 'fas fa-bolt', 'title' => 'Energy Production', 'desc' => 'B12 helps convert food into glucose, providing the energy your cells need. Low levels lead to persistent fatigue that sleep alone cannot fix.' ),
          array( 'icon' => 'fas fa-brain', 'title' => 'Brain & Nerve Health', 'desc' => 'Essential for producing myelin, the protective coating around nerves. Deficiency can cause brain fog, poor concentration, and tingling in hands and feet.' ),
          array( 'icon' => 'fas fa-heart-pulse', 'title' => 'Red Blood Cell Formation', 'desc' => 'B12 is critical for producing healthy red blood cells. Without enough, your body produces abnormally large cells that cannot carry oxygen efficiently.' ),
        );
        foreach ( $why_cards as $card ) :
        ?>
          <div class="b12-why-card">
            <div class="b12-why-card-icon">
              <i class="<?php echo esc_attr( $card['icon'] ); ?>"></i>
            </div>
            <h3 class="b12-why-card-title"><?php echo esc_html( $card['title'] ); ?></h3>
            <p class="b12-why-card-desc"><?php echo esc_html( $card['desc'] ); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Symptoms Section -->
<section class="b12-symptoms-section">
  <div class="b12-symptoms-blob-1"></div>
  <div class="b12-symptoms-blob-2"></div>
  <div class="section-container">
    <div class="b12-symptoms-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_symptoms_badge', 'RECOGNISE THE SIGNS' ) ); ?></span>
      </div>
      <h2 class="b12-symptoms-title"><span class="gradient-text"><?php echo esc_html( ep_field( 'b12_symptoms_title_highlight', 'Could you be' ) ); ?></span> <?php echo esc_html( ep_field( 'b12_symptoms_title_rest', 'B12 deficient?' ) ); ?></h2>
      <p class="b12-symptoms-description"><?php echo esc_html( ep_field( 'b12_symptoms_description', 'B12 deficiency develops gradually, and symptoms are often dismissed as normal tiredness or ageing. Watch for these signs.' ) ); ?></p>
    </div>

    <div class="b12-symptoms-grid">
      <?php if ( have_rows( 'b12_symptoms' ) ) : while ( have_rows( 'b12_symptoms' ) ) : the_row(); ?>
        <div class="b12-symptom-card">
          <div class="b12-symptom-icon">
            <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h4 class="b12-symptom-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h4>
        </div>
      <?php endwhile; else : ?>
        <?php
        $symptoms = array(
          array( 'icon' => 'fas fa-battery-quarter', 'name' => 'Persistent Fatigue' ),
          array( 'icon' => 'fas fa-cloud', 'name' => 'Brain Fog' ),
          array( 'icon' => 'fas fa-hand-sparkles', 'name' => 'Tingling or Numbness' ),
          array( 'icon' => 'fas fa-face-frown', 'name' => 'Mood Changes' ),
          array( 'icon' => 'fas fa-person-falling', 'name' => 'Dizziness' ),
          array( 'icon' => 'fas fa-lungs', 'name' => 'Shortness of Breath' ),
          array( 'icon' => 'fas fa-eye', 'name' => 'Vision Problems' ),
          array( 'icon' => 'fas fa-bed', 'name' => 'Poor Sleep Quality' ),
          array( 'icon' => 'fas fa-head-side-virus', 'name' => 'Headaches' ),
          array( 'icon' => 'fas fa-weight-scale', 'name' => 'Unexplained Weight Loss' ),
          array( 'icon' => 'fas fa-heart-crack', 'name' => 'Heart Palpitations' ),
          array( 'icon' => 'fas fa-palette', 'name' => 'Pale or Yellowish Skin' ),
        );
        foreach ( $symptoms as $symptom ) :
        ?>
          <div class="b12-symptom-card">
            <div class="b12-symptom-icon">
              <i class="<?php echo esc_attr( $symptom['icon'] ); ?>"></i>
            </div>
            <h4 class="b12-symptom-name"><?php echo esc_html( $symptom['name'] ); ?></h4>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <div class="b12-risk-groups">
      <div class="b12-risk-groups-inner">
        <h3 class="b12-risk-groups-title"><i class="fas fa-exclamation-triangle"></i> Higher Risk Groups</h3>
        <p class="b12-risk-groups-text"><?php echo esc_html( ep_field( 'b12_risk_groups_text', 'You may be at higher risk if you follow a vegan or vegetarian diet, are over 50, take metformin or proton pump inhibitors, have a digestive condition such as Crohn\'s or coeliac disease, or have had gastric surgery.' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Injection vs Oral Comparison -->
<section class="b12-comparison-section">
  <div class="section-container">
    <div class="b12-comparison-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_comparison_badge', 'INJECTION VS TABLETS' ) ); ?></span>
      </div>
      <h2 class="b12-comparison-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'b12_comparison_title_highlight', 'Why injections' ) ); ?></span> <?php echo esc_html( ep_field( 'b12_comparison_title_rest', 'are more effective' ) ); ?>
      </h2>
    </div>

    <div class="b12-comparison-grid">
      <!-- Injection Column -->
      <div class="b12-comparison-card b12-comparison-recommended">
        <div class="b12-comparison-card-badge">Recommended</div>
        <div class="b12-comparison-card-icon">
          <i class="fas fa-syringe"></i>
        </div>
        <h3 class="b12-comparison-card-title"><?php echo esc_html( ep_field( 'b12_injection_title', 'Intramuscular Injection' ) ); ?></h3>
        <ul class="b12-comparison-list">
          <li><i class="fas fa-check-circle"></i> <span>100% absorption — bypasses digestion entirely</span></li>
          <li><i class="fas fa-check-circle"></i> <span>Effects felt within 24–72 hours</span></li>
          <li><i class="fas fa-check-circle"></i> <span>Lasts 6–8 weeks per injection</span></li>
          <li><i class="fas fa-check-circle"></i> <span>Ideal for deficiency and malabsorption</span></li>
          <li><i class="fas fa-check-circle"></i> <span>Hydroxocobalamin — the gold standard form</span></li>
          <li><i class="fas fa-check-circle"></i> <span>Quick 15-minute appointment</span></li>
        </ul>
      </div>

      <!-- Oral Column -->
      <div class="b12-comparison-card b12-comparison-alternative">
        <div class="b12-comparison-card-icon">
          <i class="fas fa-pills"></i>
        </div>
        <h3 class="b12-comparison-card-title"><?php echo esc_html( ep_field( 'b12_oral_title', 'Oral Tablets / Sprays' ) ); ?></h3>
        <ul class="b12-comparison-list b12-comparison-list-muted">
          <li><i class="fas fa-minus-circle"></i> <span>Only 1–2% absorbed through digestion</span></li>
          <li><i class="fas fa-minus-circle"></i> <span>Weeks to months for noticeable effect</span></li>
          <li><i class="fas fa-minus-circle"></i> <span>Must be taken daily without fail</span></li>
          <li><i class="fas fa-minus-circle"></i> <span>Ineffective if you have absorption issues</span></li>
          <li><i class="fas fa-minus-circle"></i> <span>Usually cyanocobalamin — less bioavailable</span></li>
          <li><i class="fas fa-minus-circle"></i> <span>Easy to forget or take inconsistently</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- How It Works / Process Section -->
<section class="b12-process-section" id="process">
  <div class="section-container">
    <div class="b12-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="b12-process-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'b12_process_title_highlight', 'Your B12 injection' ) ); ?></span> <?php echo esc_html( ep_field( 'b12_process_title_rest', 'in 3 simple steps' ) ); ?>
      </h2>
    </div>

    <div class="b12-process-timeline">
      <?php if ( have_rows( 'b12_process_steps' ) ) : $step_index = 0; while ( have_rows( 'b12_process_steps' ) ) : the_row(); $step_index++;
        $step_image_id = get_sub_field( 'image' );
        $step_image_url = $step_image_id ? wp_get_attachment_image_url( $step_image_id, 'large' ) : '';
      ?>
        <div class="b12-process-card">
          <div class="b12-process-card-number">
            <span><?php echo esc_html( $step_index ); ?></span>
          </div>
          <div class="b12-process-card-body">
            <div class="b12-process-card-text">
              <h3 class="b12-process-step-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
              <p class="b12-process-step-description"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
              <div class="b12-process-step-meta">
                <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'meta_icon' ) ) ); ?>"></i>
                <span><?php echo esc_html( get_sub_field( 'meta_text' ) ); ?></span>
              </div>
            </div>
            <?php if ( $step_image_url ) : ?>
              <div class="b12-process-card-image">
                <img src="<?php echo esc_url( $step_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" />
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $steps = array(
          array(
            'title' => 'Brief Consultation',
            'desc'  => 'Our pharmacist will review your health history, discuss your symptoms, and determine whether a B12 injection is right for you. No GP referral is required for our private service.',
            'meta_icon' => 'fas fa-clipboard-check',
            'meta_text' => 'No GP referral needed',
            'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=400&fit=crop',
          ),
          array(
            'title' => 'The Injection',
            'desc'  => 'A quick hydroxocobalamin injection into the upper arm muscle. The entire process takes just a few minutes and most patients report only a brief, mild sting.',
            'meta_icon' => 'fas fa-clock',
            'meta_text' => '15-minute appointment',
            'image' => 'https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=600&h=400&fit=crop',
          ),
          array(
            'title' => 'Aftercare & Repeat Schedule',
            'desc'  => 'You can return to normal activities immediately. We\'ll advise on the best repeat schedule — typically every 6–8 weeks for maintenance, or a loading course if you\'re significantly deficient.',
            'meta_icon' => 'fas fa-calendar-check',
            'meta_text' => 'Results in 24–72 hours',
            'image' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=600&h=400&fit=crop',
          ),
        );
        foreach ( $steps as $i => $step ) :
        ?>
          <div class="b12-process-card">
            <div class="b12-process-card-number">
              <span><?php echo esc_html( $i + 1 ); ?></span>
            </div>
            <div class="b12-process-card-body">
              <div class="b12-process-card-text">
                <h3 class="b12-process-step-title"><?php echo esc_html( $step['title'] ); ?></h3>
                <p class="b12-process-step-description"><?php echo esc_html( $step['desc'] ); ?></p>
                <div class="b12-process-step-meta">
                  <i class="<?php echo esc_attr( $step['meta_icon'] ); ?>"></i>
                  <span><?php echo esc_html( $step['meta_text'] ); ?></span>
                </div>
              </div>
              <div class="b12-process-card-image">
                <img src="<?php echo esc_url( $step['image'] ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>" />
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Benefits Section -->
<section class="b12-benefits-section">
  <div class="section-container">
    <div class="b12-benefits-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_benefits_badge', 'B12 BENEFITS' ) ); ?></span>
      </div>
      <h2 class="b12-benefits-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'b12_benefits_title_highlight', 'How B12 injections' ) ); ?></span> <?php echo esc_html( ep_field( 'b12_benefits_title_rest', 'can transform your health' ) ); ?>
      </h2>
    </div>

    <div class="b12-benefits-grid">
      <?php if ( have_rows( 'b12_benefits' ) ) : while ( have_rows( 'b12_benefits' ) ) : the_row(); ?>
        <div class="b12-benefit-card">
          <div class="b12-benefit-icon">
            <i class="<?php echo esc_attr( ep_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h3 class="b12-benefit-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="b12-benefit-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <?php
        $benefits = array(
          array( 'icon' => 'fas fa-bolt', 'title' => 'Sustained Energy', 'desc' => 'Say goodbye to the afternoon slump. B12 supports your body\'s natural energy production at a cellular level.' ),
          array( 'icon' => 'fas fa-brain', 'title' => 'Mental Clarity', 'desc' => 'Lift the brain fog. B12 supports neurotransmitter function, improving focus, memory, and cognitive sharpness.' ),
          array( 'icon' => 'fas fa-face-smile', 'title' => 'Improved Mood', 'desc' => 'B12 plays a key role in producing serotonin. Many patients report feeling more positive and balanced after treatment.' ),
          array( 'icon' => 'fas fa-hand-sparkles', 'title' => 'Nerve Health', 'desc' => 'Supports the myelin sheath that protects your nerves. Helps reduce tingling, numbness, and nerve-related discomfort.' ),
          array( 'icon' => 'fas fa-moon', 'title' => 'Better Sleep', 'desc' => 'B12 helps regulate your circadian rhythm and melatonin production, supporting deeper, more restorative sleep.' ),
          array( 'icon' => 'fas fa-shield-virus', 'title' => 'Immune Support', 'desc' => 'A well-functioning immune system depends on adequate B12. Keep your body\'s defences working at their best.' ),
        );
        foreach ( $benefits as $benefit ) :
        ?>
          <div class="b12-benefit-card">
            <div class="b12-benefit-icon">
              <i class="<?php echo esc_attr( $benefit['icon'] ); ?>"></i>
            </div>
            <h3 class="b12-benefit-title"><?php echo esc_html( $benefit['title'] ); ?></h3>
            <p class="b12-benefit-desc"><?php echo esc_html( $benefit['desc'] ); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="b12-pricing-section">
  <div class="section-container">
    <div class="b12-pricing-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_pricing_badge', 'TRANSPARENT PRICING' ) ); ?></span>
      </div>
      <h2 class="b12-pricing-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'b12_pricing_title_highlight', 'B12 injection' ) ); ?></span> <?php echo esc_html( ep_field( 'b12_pricing_title_rest', 'pricing' ) ); ?>
      </h2>
    </div>

    <div class="b12-pricing-grid">
      <?php if ( have_rows( 'b12_pricing_cards' ) ) : while ( have_rows( 'b12_pricing_cards' ) ) : the_row(); ?>
        <div class="b12-pricing-card<?php echo get_sub_field( 'is_featured' ) ? ' b12-pricing-featured' : ''; ?>">
          <?php if ( get_sub_field( 'is_featured' ) ) : ?>
            <div class="b12-pricing-card-badge">Best Value</div>
          <?php endif; ?>
          <h3 class="b12-pricing-card-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></h3>
          <div class="b12-pricing-card-price"><?php echo esc_html( get_sub_field( 'price' ) ); ?></div>
          <p class="b12-pricing-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta b12-pricing-cta">
            Book Now <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      <?php endwhile; else : ?>
        <div class="b12-pricing-card">
          <h3 class="b12-pricing-card-name">Single Injection</h3>
          <div class="b12-pricing-card-price">From £25</div>
          <p class="b12-pricing-card-desc">One hydroxocobalamin B12 injection with consultation. Ideal for a first appointment or one-off top-up.</p>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta b12-pricing-cta">
            Book Now <i class="fas fa-arrow-right"></i>
          </a>
        </div>
        <div class="b12-pricing-card b12-pricing-featured">
          <div class="b12-pricing-card-badge">Best Value</div>
          <h3 class="b12-pricing-card-name">Course of 3</h3>
          <div class="b12-pricing-card-price">From £65</div>
          <p class="b12-pricing-card-desc">Three injections for a loading dose or ongoing maintenance. Save compared to individual appointments.</p>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta b12-pricing-cta">
            Book Now <i class="fas fa-arrow-right"></i>
          </a>
        </div>
        <div class="b12-pricing-card">
          <h3 class="b12-pricing-card-name">Monthly Maintenance</h3>
          <div class="b12-pricing-card-price">Ongoing</div>
          <p class="b12-pricing-card-desc">Regular maintenance injections scheduled at your convenience. We'll remind you when your next one is due.</p>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta b12-pricing-cta">
            Book Now <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      <?php endif; ?>
    </div>

    <div class="b12-pricing-disclaimer">
      <p><?php echo esc_html( ep_field( 'b12_pricing_disclaimer', 'Prices may vary — call for current pricing. NHS B12 injections available for clinically diagnosed deficiency with GP referral.' ) ); ?></p>
    </div>
  </div>
</section>

<!-- Location Section -->
<section class="b12-location-section">
  <div class="section-container">
    <div class="b12-location-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_location_badge', 'VISIT US' ) ); ?></span>
      </div>
      <h2 class="b12-location-title">
        <span class="gradient-text"><?php echo esc_html( ep_field( 'b12_location_title_highlight', 'Your local' ) ); ?></span> <?php echo esc_html( ep_field( 'b12_location_title_rest', 'B12 injection clinic' ) ); ?>
      </h2>
    </div>

    <div class="b12-location-card">
      <div class="b12-location-card-inner">
        <div class="b12-location-info">
          <h3 class="b12-location-name"><?php echo esc_html( ep_pharmacy_name() ); ?></h3>
          <div class="b12-location-serving">
            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo esc_html( ep_field( 'b12_location_serving', 'Serving Ashford, Chertsey, and Walton-on-Thames' ) ); ?></span>
          </div>
          <div class="b12-location-details">
            <div class="b12-location-detail">
              <i class="fas fa-phone"></i>
              <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>"><?php echo esc_html( ep_phone() ); ?></a>
            </div>
            <div class="b12-location-detail">
              <i class="fas fa-envelope"></i>
              <a href="mailto:<?php echo esc_attr( ep_option( 'pharmacy_email', 'hello@easypharmacy.co.uk' ) ); ?>"><?php echo esc_html( ep_option( 'pharmacy_email', 'hello@easypharmacy.co.uk' ) ); ?></a>
            </div>
          </div>
          <div class="b12-location-services">
            <span class="b12-location-service-tag"><i class="fas fa-syringe"></i> Vitamin B12 injections</span>
            <span class="b12-location-service-tag"><i class="fas fa-door-open"></i> Walk-ins welcome</span>
            <span class="b12-location-service-tag"><i class="fas fa-prescription-bottle-medical"></i> NHS & private prescriptions</span>
            <span class="b12-location-service-tag"><i class="fas fa-stethoscope"></i> Health consultations</span>
          </div>
        </div>
        <div class="b12-location-cta-wrap">
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta">
            Call to Book <i class="fas fa-arrow-right"></i>
          </a>
          <a href="mailto:<?php echo esc_attr( ep_option( 'pharmacy_email', 'hello@easypharmacy.co.uk' ) ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-envelope"></i> Email Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="b12-faq-section" id="faq">
  <div class="section-container">
    <div class="b12-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'b12_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="b12-faq-title"><span class="gradient-text"><?php echo esc_html( ep_field( 'b12_faq_title_highlight', 'B12 injection' ) ); ?></span> <?php echo esc_html( ep_field( 'b12_faq_title_rest', 'questions answered' ) ); ?></h2>
    </div>

    <div class="b12-faq-list">
      <?php if ( have_rows( 'b12_faqs' ) ) : $faq_num = 0; while ( have_rows( 'b12_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="b12-faq-item">
          <button class="b12-faq-question" onclick="toggleB12FAQ(this)">
            <span class="b12-faq-number"><?php echo esc_html( str_pad( $faq_num, 2, '0', STR_PAD_LEFT ) ); ?></span>
            <span class="b12-faq-question-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <div class="b12-faq-icon">
              <i class="fas fa-plus"></i>
            </div>
          </button>
          <div class="b12-faq-answer">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $faqs = array(
          array( 'q' => 'How quickly will I feel the effects of a B12 injection?', 'a' => 'Most patients notice improvement within 24 to 72 hours. You may feel more energetic, mentally clearer, and generally better within the first few days. The full effects build over 1 to 2 weeks as your body replenishes its B12 stores.' ),
          array( 'q' => 'Do I need a blood test before getting a B12 injection?', 'a' => 'A blood test is not required for our private B12 injection service. However, if you have symptoms of severe deficiency or an underlying condition, we may recommend speaking with your GP first. Our pharmacist will assess your suitability during a brief consultation.' ),
          array( 'q' => 'What is the difference between B12 injections and tablets?', 'a' => 'B12 injections deliver hydroxocobalamin directly into the muscle, achieving 100% absorption. Oral tablets rely on digestion and typically only absorb 1 to 2% of the dose. Injections are particularly important for people with absorption issues, pernicious anaemia, or significant deficiency.' ),
          array( 'q' => 'How often do I need B12 injections?', 'a' => 'This depends on your individual needs. For a loading dose (treating deficiency), we typically recommend injections every other day for 2 weeks, then every 2 to 3 months. For general wellness maintenance, every 6 to 8 weeks is usually sufficient. Our pharmacist will create a personalised schedule for you.' ),
          array( 'q' => 'Does the B12 injection hurt?', 'a' => 'Most patients describe it as a brief, mild sting — similar to a flu jab. The needle is fine and the injection takes just seconds. Some people experience a slight ache at the injection site for a day or so afterwards, but this is completely normal.' ),
          array( 'q' => 'I\'m vegan — do I need B12 injections?', 'a' => 'Vegans are at significantly higher risk of B12 deficiency since the vitamin is found almost exclusively in animal products. While fortified foods and supplements can help, many vegans find that injections are the most reliable way to maintain optimal B12 levels, especially if you have been vegan for more than a year.' ),
          array( 'q' => 'Can I get B12 injections on the NHS?', 'a' => 'NHS B12 injections are available for patients with a confirmed clinical deficiency, typically pernicious anaemia diagnosed through blood tests. Your GP would need to arrange this. Our private service is available to anyone who wants to boost their B12 levels without needing a GP referral or NHS diagnosis.' ),
          array( 'q' => 'Are there any side effects of B12 injections?', 'a' => 'Side effects are rare and usually mild. You may experience slight redness or tenderness at the injection site, which resolves within a day or two. Hydroxocobalamin is water-soluble, so any excess is naturally excreted by the body. Serious adverse reactions are extremely uncommon.' ),
        );
        foreach ( $faqs as $i => $faq ) :
        ?>
          <div class="b12-faq-item">
            <button class="b12-faq-question" onclick="toggleB12FAQ(this)">
              <span class="b12-faq-number"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></span>
              <span class="b12-faq-question-text"><?php echo esc_html( $faq['q'] ); ?></span>
              <div class="b12-faq-icon">
                <i class="fas fa-plus"></i>
              </div>
            </button>
            <div class="b12-faq-answer">
              <p><?php echo esc_html( $faq['a'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Final CTA Section -->
<section class="b12-cta-section">
  <div class="b12-cta-glow-1"></div>
  <div class="b12-cta-glow-2"></div>
  <div class="b12-cta-dots"></div>
  <div class="section-container">
    <div class="b12-cta-content">
      <div class="b12-cta-badges">
        <div class="b12-cta-badge">
          <i class="fas fa-syringe"></i>
          <span><?php echo esc_html( ep_field( 'b12_cta_badge_1', 'Hydroxocobalamin Injection' ) ); ?></span>
        </div>
        <div class="b12-cta-badge">
          <i class="fas fa-user-doctor"></i>
          <span><?php echo esc_html( ep_field( 'b12_cta_badge_2', 'Expert Pharmacists' ) ); ?></span>
        </div>
        <div class="b12-cta-badge">
          <i class="fas fa-door-open"></i>
          <span><?php echo esc_html( ep_field( 'b12_cta_badge_3', 'Walk-ins Welcome' ) ); ?></span>
        </div>
      </div>
      <h2 class="b12-cta-title"><?php echo esc_html( ep_field( 'b12_cta_title', 'Feel the Difference a B12 Injection Makes' ) ); ?></h2>
      <p class="b12-cta-description">
        <?php echo esc_html( ep_field( 'b12_cta_description', 'Don\'t let fatigue and brain fog hold you back. Book your B12 injection at Easy Pharmacy — serving Ashford, Chertsey, and Walton-on-Thames.' ) ); ?>
      </p>
      <div class="b12-cta-actions">
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta b12-cta-button-white">
          <?php echo esc_html( ep_field( 'b12_cta_primary_text', 'Book B12 Injection Now' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta b12-cta-button-outlined">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( ep_pharmacy_name() ); ?>
        </a>
      </div>
      <div class="b12-cta-checks">
        <div class="b12-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'b12_cta_check_1', 'Hydroxocobalamin injection' ) ); ?></span>
        </div>
        <div class="b12-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'b12_cta_check_2', 'Results in 24–72 hours' ) ); ?></span>
        </div>
        <div class="b12-cta-check">
          <i class="fas fa-check"></i>
          <span><?php echo esc_html( ep_field( 'b12_cta_check_3', 'Walk-ins welcome' ) ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
