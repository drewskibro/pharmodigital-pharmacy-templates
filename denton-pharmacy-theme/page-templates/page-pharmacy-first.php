<?php
/**
 * Template Name: Pharmacy First
 * @package Denton_Pharmacy
 */

get_header();
?>

<!-- ============================================
     N1. HERO SECTION — Pattern A Light
     Badge, title, description, 2 CTAs, trust pills, image with FREE badge
     ============================================ -->
<section class="pharmfirst-hero-section">
  <div class="pharmfirst-hero-bg"></div>
  <div class="pharmfirst-hero-dots"></div>
  <div class="pharmfirst-hero-glow-1"></div>
  <div class="pharmfirst-hero-glow-2"></div>
  <div class="section-container">
    <div class="pharmfirst-hero-grid">

      <!-- Left: Content -->
      <div class="pharmfirst-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( dp_field( 'pf_hero_badge', 'NHS PHARMACY FIRST SERVICE' ) ); ?></span>
        </div>

        <h1 class="pharmfirst-hero-title">
          <span class="gradient-text"><?php echo esc_html( dp_field( 'pf_hero_title_highlight', 'Free NHS Treatment' ) ); ?></span>
          <?php echo esc_html( dp_field( 'pf_hero_title_rest', 'in Denton' ) ); ?>
        </h1>

        <p class="pharmfirst-hero-description">
          <?php echo esc_html( dp_field( 'pf_hero_description', 'Under the NHS Pharmacy First scheme, our pharmacists at Denton Pharmacy can assess and treat 7 common conditions — completely free. No GP appointment needed, no waiting weeks. Just walk in or book a slot and get treated the same day.' ) ); ?>
        </p>

        <div class="pharmfirst-hero-actions">
          <a href="<?php echo esc_url( dp_field( 'pf_hero_cta_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( dp_field( 'pf_hero_cta_text', 'Book Pharmacy First Visit' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( dp_phone() ); ?>
          </a>
        </div>

        <div class="pharmfirst-hero-trust">
          <div class="pharmfirst-hero-trust-item">
            <i class="<?php echo esc_attr( dp_fa_class( dp_field( 'pf_trust_1_icon', 'fas fa-check-circle' ) ) ); ?>"></i>
            <span><?php echo esc_html( dp_field( 'pf_trust_1', 'NHS Funded' ) ); ?></span>
          </div>
          <div class="pharmfirst-hero-trust-item">
            <i class="<?php echo esc_attr( dp_fa_class( dp_field( 'pf_trust_2_icon', 'fas fa-calendar-check' ) ) ); ?>"></i>
            <span><?php echo esc_html( dp_field( 'pf_trust_2', 'No GP Appointment Needed' ) ); ?></span>
          </div>
          <div class="pharmfirst-hero-trust-item">
            <i class="<?php echo esc_attr( dp_fa_class( dp_field( 'pf_trust_3_icon', 'fas fa-clock' ) ) ); ?>"></i>
            <span><?php echo esc_html( dp_field( 'pf_trust_3', 'Same-Day Treatment' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: NHS Trust Card + floating badge -->
      <div class="pharmfirst-hero-visual">
        <!-- Floating condition count badge -->
        <div class="pharmfirst-hero-float-badge">
          <span class="pharmfirst-hero-float-number">7</span>
          <span class="pharmfirst-hero-float-label">conditions treated</span>
        </div>
        <div class="pharmfirst-trust-card">
          <div class="pharmfirst-trust-card-glow"></div>
          <div class="pharmfirst-trust-card-inner">
            <div class="pharmfirst-trust-card-header">
              <div class="pharmfirst-trust-card-nhs-icon">
                <i class="fas fa-hand-holding-medical"></i>
              </div>
              <span class="pharmfirst-trust-card-label"><?php echo esc_html( dp_field( 'pf_price_label', 'NHS Pharmacy First' ) ); ?></span>
            </div>
            <div class="pharmfirst-trust-card-free">
              <span class="pharmfirst-trust-card-amount"><?php echo esc_html( dp_field( 'pf_price_amount', 'FREE' ) ); ?></span>
              <span class="pharmfirst-trust-card-sub"><?php echo esc_html( dp_field( 'pf_price_sub', 'no charge to you' ) ); ?></span>
            </div>
            <div class="pharmfirst-trust-card-divider"></div>
            <ul class="pharmfirst-trust-card-list">
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( dp_field( 'pf_trust_1', 'NHS Funded' ) ); ?></span></li>
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( dp_field( 'pf_trust_2', 'No GP Appointment Needed' ) ); ?></span></li>
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( dp_field( 'pf_trust_3', 'Same-Day Treatment' ) ); ?></span></li>
            </ul>
            <?php $gphc_url = dp_option( 'gphc_register_url', 'https://www.pharmacyregulation.org/registers/pharmacist' ); ?>
            <a href="<?php echo esc_url( $gphc_url ); ?>" class="pharmfirst-trust-card-footer" target="_blank" rel="noopener" title="Verify on the GPhC register">
              <i class="fas fa-shield-halved"></i>
              <span>GPhC Registered Pharmacy</span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     N2. STATS BAR — Glassmorphic white, 4-column
     ============================================ -->
<section class="pharmfirst-stats-section">
  <div class="section-container">
    <div class="pharmfirst-stats-bar">
      <?php
      $stats = array(
        array( 'icon' => 'pf_stat_1_icon', 'number' => 'pf_stat_1_number', 'label' => 'pf_stat_1_label', 'def_icon' => 'fas fa-sterling-sign', 'def_number' => 'FREE', 'def_label' => 'No Cost to You' ),
        array( 'icon' => 'pf_stat_2_icon', 'number' => 'pf_stat_2_number', 'label' => 'pf_stat_2_label', 'def_icon' => 'fas fa-list-check', 'def_number' => '7', 'def_label' => 'Conditions Treated' ),
        array( 'icon' => 'pf_stat_3_icon', 'number' => 'pf_stat_3_number', 'label' => 'pf_stat_3_label', 'def_icon' => 'fas fa-user-doctor', 'def_number' => 'No GP', 'def_label' => 'Appointment Needed' ),
        array( 'icon' => 'pf_stat_4_icon', 'number' => 'pf_stat_4_number', 'label' => 'pf_stat_4_label', 'def_icon' => 'fas fa-clock', 'def_number' => 'Same Day', 'def_label' => 'Treatment Available' ),
      );
      foreach ( $stats as $si => $stat ) :
      ?>
        <?php if ( $si > 0 ) : ?><div class="pharmfirst-stat-divider"></div><?php endif; ?>
        <div class="pharmfirst-stat-item">
          <div class="pharmfirst-stat-icon">
            <i class="<?php echo esc_attr( dp_fa_class( dp_field( $stat['icon'], $stat['def_icon'] ) ) ); ?>"></i>
          </div>
          <div class="pharmfirst-stat-content">
            <p class="pharmfirst-stat-number"><?php echo esc_html( dp_field( $stat['number'], $stat['def_number'] ) ); ?></p>
            <p class="pharmfirst-stat-label"><?php echo esc_html( dp_field( $stat['label'], $stat['def_label'] ) ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================
     N3. CONDITIONS GRID — 7 treatable conditions
     ============================================ -->
<section class="pharmfirst-conditions-section pharmfirst-reveal">
  <div class="section-container">
    <div class="pharmfirst-conditions-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'pf_conditions_badge', 'CONDITIONS WE TREAT' ) ); ?></span>
      </div>
      <h2 class="pharmfirst-conditions-title"><?php echo esc_html( dp_field( 'pf_conditions_title', '7 Common Conditions Treated Free' ) ); ?></h2>
      <p class="pharmfirst-conditions-description"><?php echo esc_html( dp_field( 'pf_conditions_description', 'Under Pharmacy First, our pharmacists can assess, diagnose, and treat these conditions — with medication supplied free of charge where clinically appropriate.' ) ); ?></p>
    </div>

    <div class="pharmfirst-conditions-grid">
      <?php if ( have_rows( 'pf_conditions' ) ) : while ( have_rows( 'pf_conditions' ) ) : the_row(); ?>
        <div class="pharmfirst-condition-card">
          <div class="pharmfirst-condition-icon"><i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <h3 class="pharmfirst-condition-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="pharmfirst-condition-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <?php $tag = get_sub_field( 'tag' ); if ( $tag ) : ?>
            <div class="pharmfirst-condition-tag"><i class="fas fa-info-circle"></i> <?php echo esc_html( $tag ); ?></div>
          <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <?php
        $conditions = array(
          array( 'icon' => 'fas fa-head-side-mask', 'title' => 'Sinusitis', 'desc' => 'Blocked or runny nose with facial pain or pressure, lasting more than 10 days or worsening after initial improvement.', 'tag' => '' ),
          array( 'icon' => 'fas fa-head-side-cough',  'title' => 'Sore Throat', 'desc' => 'Painful throat making it difficult to swallow. Our pharmacist can assess severity and provide appropriate treatment.', 'tag' => '' ),
          array( 'icon' => 'fas fa-ear-listen',      'title' => 'Earache', 'desc' => 'Pain in one or both ears, which may be sharp or dull. Common in both children and adults.', 'tag' => '' ),
          array( 'icon' => 'fas fa-bug',             'title' => 'Infected Insect Bite', 'desc' => 'A bite or sting that has become red, swollen, warm, or is leaking pus — signs of bacterial infection.', 'tag' => '' ),
          array( 'icon' => 'fas fa-hand-dots',       'title' => 'Impetigo', 'desc' => 'Highly contagious skin infection causing red sores, usually around the nose and mouth, that burst and form crusts.', 'tag' => '' ),
          array( 'icon' => 'fas fa-virus',           'title' => 'Shingles', 'desc' => 'Painful, blistering rash caused by the reactivation of the chickenpox virus. Early treatment reduces severity.', 'tag' => '' ),
          array( 'icon' => 'fas fa-person-dress',    'title' => 'Uncomplicated UTI', 'desc' => 'Burning or stinging when passing urine, needing to go more often, or cloudy/strong-smelling urine.', 'tag' => 'Women aged 16-64 only' ),
        );
        foreach ( $conditions as $condition ) :
        ?>
          <div class="pharmfirst-condition-card">
            <div class="pharmfirst-condition-icon"><i class="<?php echo esc_attr( $condition['icon'] ); ?>"></i></div>
            <h3 class="pharmfirst-condition-title"><?php echo esc_html( $condition['title'] ); ?></h3>
            <p class="pharmfirst-condition-desc"><?php echo esc_html( $condition['desc'] ); ?></p>
            <?php if ( $condition['tag'] ) : ?>
              <div class="pharmfirst-condition-tag"><i class="fas fa-info-circle"></i> <?php echo esc_html( $condition['tag'] ); ?></div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     N4. HOW IT WORKS + ELIGIBILITY
     Two-column: process steps left, lifestyle image right
     ============================================ -->
<?php
$pf_process_image_id  = dp_field( 'pf_process_image' );
if ( ! $pf_process_image_id ) {
    $pf_process_image_id = dp_option( 'pharmacist_image' );
}
$pf_process_image_url = $pf_process_image_id ? wp_get_attachment_image_url( $pf_process_image_id, 'large' ) : '';
?>
<section class="pharmfirst-process-section pharmfirst-reveal">
  <div class="section-container">
    <div class="pharmfirst-process-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'pf_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="pharmfirst-process-title"><?php echo esc_html( dp_field( 'pf_process_title', 'Three Simple Steps to Free Treatment' ) ); ?></h2>
      <p class="pharmfirst-process-description"><?php echo esc_html( dp_field( 'pf_process_description', 'No referral, no red tape — just expert NHS care when you need it' ) ); ?></p>
    </div>

    <div class="pharmfirst-process-layout">

      <!-- Left: Step cards -->
      <div class="pharmfirst-process-steps">
        <?php if ( have_rows( 'pf_process_steps' ) ) : $step_num = 0; while ( have_rows( 'pf_process_steps' ) ) : the_row(); $step_num++; ?>
          <div class="pharmfirst-process-card">
            <div class="pharmfirst-process-card-number"><?php echo esc_html( $step_num ); ?></div>
            <div class="pharmfirst-process-card-icon">
              <i class="<?php echo esc_attr( dp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <div class="pharmfirst-process-card-body">
              <h3 class="pharmfirst-process-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
              <p class="pharmfirst-process-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
            </div>
          </div>
        <?php endwhile; else : ?>
          <?php
          $steps = array(
            array( 'icon' => 'fas fa-door-open', 'title' => 'Walk In or Book', 'desc' => 'Visit Denton Pharmacy during opening hours or book a convenient slot online. No GP referral needed.' ),
            array( 'icon' => 'fas fa-stethoscope', 'title' => 'Pharmacist Assessment', 'desc' => 'Our trained pharmacist will assess your symptoms in a private consultation room and determine the best treatment.' ),
            array( 'icon' => 'fas fa-pills', 'title' => 'Receive Treatment', 'desc' => 'If appropriate, you\'ll receive NHS-funded medication on the spot — completely free of charge.' ),
          );
          foreach ( $steps as $i => $step ) :
          ?>
            <div class="pharmfirst-process-card">
              <div class="pharmfirst-process-card-number"><?php echo esc_html( $i + 1 ); ?></div>
              <div class="pharmfirst-process-card-icon">
                <i class="<?php echo esc_attr( $step['icon'] ); ?>"></i>
              </div>
              <div class="pharmfirst-process-card-body">
                <h3 class="pharmfirst-process-card-title"><?php echo esc_html( $step['title'] ); ?></h3>
                <p class="pharmfirst-process-card-desc"><?php echo esc_html( $step['desc'] ); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <!-- Right: Lifestyle image -->
      <div class="pharmfirst-process-visual desktop-only">
        <div class="pharmfirst-process-visual-glow"></div>
        <div class="pharmfirst-process-image-card">
          <?php if ( $pf_process_image_url ) : ?>
            <img src="<?php echo esc_url( $pf_process_image_url ); ?>" alt="Pharmacist consultation at <?php echo esc_attr( dp_pharmacy_name() ); ?>" />
          <?php endif; ?>
        </div>
        <!-- Floating NHS badge -->
        <div class="pharmfirst-process-float-badge">
          <i class="fas fa-hand-holding-medical"></i>
          <div class="pharmfirst-process-float-badge-content">
            <span class="pharmfirst-process-float-badge-label">NHS FUNDED</span>
            <span class="pharmfirst-process-float-badge-text">100% Free</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Eligibility Info Box -->
    <div class="pharmfirst-eligibility-box">
      <div class="pharmfirst-eligibility-icon">
        <i class="fas fa-circle-info"></i>
      </div>
      <div class="pharmfirst-eligibility-content">
        <h3 class="pharmfirst-eligibility-title"><?php echo esc_html( dp_field( 'pf_eligibility_title', 'Who Is Eligible?' ) ); ?></h3>
        <p class="pharmfirst-eligibility-text"><?php echo esc_html( dp_field( 'pf_eligibility_text', 'Pharmacy First is available to anyone registered with a GP in England. Most conditions can be treated for patients of all ages. UTI treatment is available for women aged 16-64 only. If your condition requires further investigation, our pharmacist will refer you to the appropriate NHS service.' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     N5. FAQ — Numbered accordion
     ============================================ -->
<section class="pharmfirst-faq-section pharmfirst-reveal">
  <div class="section-container">
    <div class="pharmfirst-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( dp_field( 'pf_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="pharmfirst-faq-title"><?php echo esc_html( dp_field( 'pf_faq_title', 'Pharmacy First — Your Questions Answered' ) ); ?></h2>
    </div>

    <div class="pharmfirst-faq-list">
      <?php if ( have_rows( 'pf_faqs' ) ) : $faq_num = 0; while ( have_rows( 'pf_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="pharmfirst-faq-item">
          <button class="pharmfirst-faq-question" onclick="togglePharmFirstFAQ(this)">
            <span class="pharmfirst-faq-number"><?php echo esc_html( $faq_num ); ?></span>
            <span class="pharmfirst-faq-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <i class="fas fa-plus pharmfirst-faq-icon"></i>
          </button>
          <div class="pharmfirst-faq-answer">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $faqs = array(
          array( 'q' => 'Is Pharmacy First really free?', 'a' => 'Yes, completely. Pharmacy First is an NHS-funded service. You won\'t be charged for the consultation or any medication supplied as part of the service.' ),
          array( 'q' => 'Do I need to see my GP first?', 'a' => 'No. That\'s the whole point of Pharmacy First — you can come directly to Denton Pharmacy without a GP appointment or referral.' ),
          array( 'q' => 'What conditions can you treat?', 'a' => 'We can treat 7 common conditions: sinusitis, sore throat, earache, infected insect bites, impetigo, shingles, and uncomplicated urinary tract infections (UTIs) in women aged 16-64.' ),
          array( 'q' => 'Do I need to be registered with a GP?', 'a' => 'Yes, you need to be registered with a GP in England to access Pharmacy First. However, you do not need to contact your GP before visiting us.' ),
          array( 'q' => 'What if my condition can\'t be treated here?', 'a' => 'If our pharmacist determines that your condition needs further investigation or treatment beyond our scope, we\'ll refer you to the appropriate NHS service, such as your GP or urgent care.' ),
          array( 'q' => 'Can children use Pharmacy First?', 'a' => 'Yes, most Pharmacy First conditions can be treated for patients of all ages, including children. The only exception is UTI treatment, which is limited to women aged 16-64.' ),
        );
        foreach ( $faqs as $i => $faq ) :
        ?>
          <div class="pharmfirst-faq-item">
            <button class="pharmfirst-faq-question" onclick="togglePharmFirstFAQ(this)">
              <span class="pharmfirst-faq-number"><?php echo esc_html( $i + 1 ); ?></span>
              <span class="pharmfirst-faq-text"><?php echo esc_html( $faq['q'] ); ?></span>
              <i class="fas fa-plus pharmfirst-faq-icon"></i>
            </button>
            <div class="pharmfirst-faq-answer">
              <p><?php echo esc_html( $faq['a'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     N6. FINAL CTA — Blue gradient
     ============================================ -->
<section class="pharmfirst-cta-section pharmfirst-reveal">
  <div class="pharmfirst-cta-glow-1"></div>
  <div class="pharmfirst-cta-glow-2"></div>
  <div class="pharmfirst-cta-dots"></div>
  <div class="section-container">
    <div class="pharmfirst-cta-content">
      <div class="pharmfirst-cta-badges">
        <div class="pharmfirst-cta-badge">
          <span><?php echo esc_html( dp_field( 'pf_cta_badge_1', 'Free NHS Service' ) ); ?></span>
        </div>
        <div class="pharmfirst-cta-badge">
          <span><?php echo esc_html( dp_field( 'pf_cta_badge_2', 'No GP Needed' ) ); ?></span>
        </div>
        <div class="pharmfirst-cta-badge">
          <span><?php echo esc_html( dp_field( 'pf_cta_badge_3', 'GPhC Registered' ) ); ?></span>
        </div>
      </div>
      <h2 class="pharmfirst-cta-title"><?php echo esc_html( dp_field( 'pf_cta_title', 'Get Free NHS Treatment Today' ) ); ?></h2>
      <p class="pharmfirst-cta-description">
        <?php echo esc_html( dp_field( 'pf_cta_description', 'Don\'t wait weeks for a GP appointment. Visit Denton Pharmacy for free NHS Pharmacy First treatment — walk in or book a slot online.' ) ); ?>
      </p>
      <div class="pharmfirst-cta-actions">
        <a href="<?php echo esc_url( dp_field( 'pf_cta_primary_url', '' ) ?: dp_booking_url() ); ?>" class="cta-button primary-cta pharmfirst-cta-button-white">
          <?php echo esc_html( dp_field( 'pf_cta_button_text', 'Book Pharmacy First Visit' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( dp_phone_link() ); ?>" class="cta-button secondary-cta pharmfirst-cta-button-outline">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( dp_phone() ); ?>
        </a>
      </div>
      <div class="pharmfirst-cta-trust-checks">
        <span class="pharmfirst-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( dp_field( 'pf_cta_check_1', 'No referral needed' ) ); ?></span>
        <span class="pharmfirst-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( dp_field( 'pf_cta_check_2', '7 conditions treated free' ) ); ?></span>
        <span class="pharmfirst-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( dp_field( 'pf_cta_check_3', 'Same-day appointments' ) ); ?></span>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
