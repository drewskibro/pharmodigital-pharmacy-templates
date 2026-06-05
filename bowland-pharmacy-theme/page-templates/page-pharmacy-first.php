<?php
/**
 * Template Name: Pharmacy First
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- ============================================
     N1. HERO SECTION — Pattern A Light
     Badge, title, description, 2 CTAs, trust pills, image with card
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
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'pf_hero_badge', 'NHS PHARMACY FIRST SERVICE' ) ); ?></span>
        </div>

        <h1 class="pharmfirst-hero-title">
          <span class="gradient-text"><?php echo esc_html( bp_field( 'pf_hero_title_highlight', 'Free NHS Consultation' ) ); ?></span>
          <?php echo esc_html( bp_field( 'pf_hero_title_rest', 'in Wythenshawe' ) ); ?>
        </h1>

        <p class="pharmfirst-hero-description">
          <?php echo esc_html( bp_field( 'pf_hero_description', 'See one of our pharmacists for assessment and treatment of 7 common conditions — no GP appointment needed and no referral required. You do not need to be registered with a GP to use this service. The consultation is free for everyone. If medication is clinically appropriate and prescribed, standard NHS prescription charges apply (currently £9.90 per item) unless you are exempt.' ) ); ?>
        </p>

        <div class="pharmfirst-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'pf_hero_cta_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( bp_field( 'pf_hero_cta_text', 'Book Pharmacy First Visit' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( bp_phone() ); ?>
          </a>
        </div>

        <div class="pharmfirst-hero-trust">
          <div class="pharmfirst-hero-trust-item">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( 'pf_trust_1_icon', 'fas fa-check-circle' ) ) ); ?>"></i>
            <span><?php echo esc_html( bp_field( 'pf_trust_1', 'Free consultation for all' ) ); ?></span>
          </div>
          <div class="pharmfirst-hero-trust-item">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( 'pf_trust_2_icon', 'fas fa-calendar-check' ) ) ); ?>"></i>
            <span><?php echo esc_html( bp_field( 'pf_trust_2', 'No GP Appointment Needed' ) ); ?></span>
          </div>
          <div class="pharmfirst-hero-trust-item">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( 'pf_trust_3_icon', 'fas fa-clock' ) ) ); ?>"></i>
            <span><?php echo esc_html( bp_field( 'pf_trust_3', 'Same-Day Treatment' ) ); ?></span>
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
              <span class="pharmfirst-trust-card-label"><?php echo esc_html( bp_field( 'pf_price_label', 'NHS Pharmacy First' ) ); ?></span>
            </div>
            <div class="pharmfirst-trust-card-free">
              <span class="pharmfirst-trust-card-amount"><?php echo esc_html( bp_field( 'pf_price_amount', 'Free Consultation' ) ); ?></span>
              <?php $pf_price_sub = bp_field( 'pf_price_sub', '' ); if ( $pf_price_sub ) : ?>
              <span class="pharmfirst-trust-card-sub"><?php echo esc_html( $pf_price_sub ); ?></span>
              <?php endif; ?>
            </div>
            <div class="pharmfirst-trust-card-divider"></div>
            <ul class="pharmfirst-trust-card-list">
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( bp_field( 'pf_trust_1', 'Free consultation for all' ) ); ?></span></li>
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( bp_field( 'pf_trust_2', 'No GP Appointment Needed' ) ); ?></span></li>
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( bp_field( 'pf_trust_3', 'Same-Day Treatment' ) ); ?></span></li>
            </ul>
            <?php
            $gphc_num = bp_option( 'gphc_registration', '1089163' );
            $gphc_url = bp_option( 'gphc_register_url' ) ?: 'https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/' . $gphc_num;
            ?>
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
        array( 'icon' => 'pf_stat_1_icon', 'number' => 'pf_stat_1_number', 'label' => 'pf_stat_1_label', 'def_icon' => 'fas fa-circle-check', 'def_number' => 'Free Consultation', 'def_label' => 'Medication charges may apply' ),
        array( 'icon' => 'pf_stat_2_icon', 'number' => 'pf_stat_2_number', 'label' => 'pf_stat_2_label', 'def_icon' => 'fas fa-list-check',   'def_number' => '7',                 'def_label' => 'Conditions Treated' ),
        array( 'icon' => 'pf_stat_3_icon', 'number' => 'pf_stat_3_number', 'label' => 'pf_stat_3_label', 'def_icon' => 'fas fa-user-doctor',  'def_number' => 'No GP',             'def_label' => 'Appointment Needed' ),
        array( 'icon' => 'pf_stat_4_icon', 'number' => 'pf_stat_4_number', 'label' => 'pf_stat_4_label', 'def_icon' => 'fas fa-clock',        'def_number' => 'Same Day',          'def_label' => 'Treatment Available' ),
      );
      foreach ( $stats as $si => $stat ) :
      ?>
        <?php if ( $si > 0 ) : ?><div class="pharmfirst-stat-divider"></div><?php endif; ?>
        <div class="pharmfirst-stat-item">
          <div class="pharmfirst-stat-icon">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( $stat['icon'], $stat['def_icon'] ) ) ); ?>"></i>
          </div>
          <div class="pharmfirst-stat-content">
            <p class="pharmfirst-stat-number"><?php echo esc_html( bp_field( $stat['number'], $stat['def_number'] ) ); ?></p>
            <p class="pharmfirst-stat-label"><?php echo esc_html( bp_field( $stat['label'], $stat['def_label'] ) ); ?></p>
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
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'pf_conditions_badge', 'CONDITIONS WE TREAT' ) ); ?></span>
      </div>
      <h2 class="pharmfirst-conditions-title"><?php echo esc_html( bp_field( 'pf_conditions_title', '7 Conditions We Can Treat' ) ); ?></h2>
      <p class="pharmfirst-conditions-description"><?php echo esc_html( bp_field( 'pf_conditions_description', 'Under Pharmacy First, our pharmacists can assess, diagnose, and treat these conditions — supplying clinically appropriate NHS medication where needed.' ) ); ?></p>
    </div>

    <div class="pharmfirst-conditions-grid">
      <?php if ( have_rows( 'pf_conditions' ) ) : while ( have_rows( 'pf_conditions' ) ) : the_row(); ?>
        <div class="pharmfirst-condition-card">
          <div class="pharmfirst-condition-icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <h3 class="pharmfirst-condition-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <dl class="pharmfirst-condition-details">
            <dt class="pharmfirst-condition-label"><i class="fas fa-user-group"></i> Who it's for</dt>
            <dd class="pharmfirst-condition-value"><?php echo esc_html( get_sub_field( 'who' ) ); ?></dd>
            <dt class="pharmfirst-condition-label"><i class="fas fa-notes-medical"></i> Key symptoms</dt>
            <dd class="pharmfirst-condition-value"><?php echo esc_html( get_sub_field( 'symptoms' ) ); ?></dd>
            <dt class="pharmfirst-condition-label pharmfirst-condition-label-exclusion"><i class="fas fa-triangle-exclamation"></i> When we cannot treat</dt>
            <dd class="pharmfirst-condition-value"><?php echo esc_html( get_sub_field( 'exclusions' ) ); ?></dd>
            <dt class="pharmfirst-condition-label pharmfirst-condition-label-treatment"><i class="fas fa-pills"></i> If appropriate</dt>
            <dd class="pharmfirst-condition-value"><?php echo esc_html( get_sub_field( 'treatment' ) ); ?></dd>
          </dl>
        </div>
      <?php endwhile; else : ?>
        <?php
        $conditions = array(
          array(
            'icon'       => 'fas fa-head-side-mask',
            'title'      => 'Sinusitis',
            'who'        => 'Adults and children aged 12 and over',
            'symptoms'   => 'Facial pain or pressure, blocked or runny nose, reduced sense of smell, lasting more than 10 days.',
            'exclusions' => 'Severe symptoms, signs of complications, immunocompromised patients, or pregnancy (refer to GP).',
            'treatment'  => 'Antibiotic therapy under PGD where clinically indicated.',
          ),
          array(
            'icon'       => 'fas fa-head-side-cough',
            'title'      => 'Sore Throat',
            'who'        => 'Adults and children aged 5 and over',
            'symptoms'   => 'Sore throat, pain on swallowing, fever, tonsillar exudate.',
            'exclusions' => 'Severe or life-threatening symptoms, peritonsillar abscess, suspected epiglottitis, immunocompromised patients.',
            'treatment'  => 'Antibiotic therapy under PGD where clinically indicated.',
          ),
          array(
            'icon'       => 'fas fa-ear-listen',
            'title'      => 'Earache (Otitis Media)',
            'who'        => 'Children aged 1 to 17',
            'symptoms'   => 'Ear pain, fever, irritability, reduced hearing.',
            'exclusions' => 'Under 1 year, perforation of the eardrum, grommets in situ, recurrent episodes, immunocompromised.',
            'treatment'  => 'Antibiotic therapy under PGD where clinically indicated.',
          ),
          array(
            'icon'       => 'fas fa-bug',
            'title'      => 'Infected Insect Bite',
            'who'        => 'Adults and children aged 1 and over',
            'symptoms'   => 'Redness, swelling, warmth and pain around the bite site, signs of infection.',
            'exclusions' => 'Systemic infection, severe allergic reaction, large area of spreading redness, immunocompromised.',
            'treatment'  => 'Antibiotic therapy under PGD where clinically indicated.',
          ),
          array(
            'icon'       => 'fas fa-hand-dots',
            'title'      => 'Impetigo',
            'who'        => 'Adults and children aged 1 and over',
            'symptoms'   => 'Sores, blisters and crusting — typically on the face, hands or scalp.',
            'exclusions' => 'Widespread or severe infection, immunocompromised, recurrent episodes (refer to GP).',
            'treatment'  => 'Treated with a topical treatment for localised infection, or oral antibiotics where the infection is more widespread.',
          ),
          array(
            'icon'       => 'fas fa-virus',
            'title'      => 'Shingles',
            'who'        => 'Adults aged 18 and over',
            'symptoms'   => 'Painful rash, blistering on one side of the body, burning or tingling sensation.',
            'exclusions' => 'Involvement of the eye or ear, immunocompromised, pregnant, or beyond 24 hours from rash onset (too late for antivirals).',
            'treatment'  => 'Antiviral therapy under PGD where clinically indicated.',
          ),
          array(
            'icon'       => 'fas fa-person-dress',
            'title'      => 'Urinary Tract Infection (UTI)',
            'who'        => 'Women aged 16 to 64 (uncomplicated UTI only)',
            'symptoms'   => 'Dysuria, frequency, urgency, suprapubic pain.',
            'exclusions' => 'Men, pregnant women, under 16, over 64, recurrent UTIs (2+ in 6 months), catheter users, symptoms lasting more than 7 days, or fever/loin pain (refer to GP).',
            'treatment'  => 'Antibiotic therapy under PGD where clinically indicated.',
          ),
        );
        foreach ( $conditions as $condition ) :
        ?>
          <div class="pharmfirst-condition-card">
            <div class="pharmfirst-condition-icon"><i class="<?php echo esc_attr( $condition['icon'] ); ?>"></i></div>
            <h3 class="pharmfirst-condition-title"><?php echo esc_html( $condition['title'] ); ?></h3>
            <dl class="pharmfirst-condition-details">
              <dt class="pharmfirst-condition-label"><i class="fas fa-user-group"></i> Who it's for</dt>
              <dd class="pharmfirst-condition-value"><?php echo esc_html( $condition['who'] ); ?></dd>
              <dt class="pharmfirst-condition-label"><i class="fas fa-notes-medical"></i> Key symptoms</dt>
              <dd class="pharmfirst-condition-value"><?php echo esc_html( $condition['symptoms'] ); ?></dd>
              <dt class="pharmfirst-condition-label pharmfirst-condition-label-exclusion"><i class="fas fa-triangle-exclamation"></i> When we cannot treat</dt>
              <dd class="pharmfirst-condition-value"><?php echo esc_html( $condition['exclusions'] ); ?></dd>
              <dt class="pharmfirst-condition-label pharmfirst-condition-label-treatment"><i class="fas fa-pills"></i> If appropriate</dt>
              <dd class="pharmfirst-condition-value"><?php echo esc_html( $condition['treatment'] ); ?></dd>
            </dl>
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
$pf_process_image_id  = bp_field( 'pf_process_image' );
if ( ! $pf_process_image_id ) {
    $pf_process_image_id = bp_option( 'pharmacist_image' );
}
$pf_process_image_url = $pf_process_image_id ? wp_get_attachment_image_url( $pf_process_image_id, 'large' ) : '';
?>
<section class="pharmfirst-process-section pharmfirst-reveal">
  <div class="section-container">
    <div class="pharmfirst-process-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'pf_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="pharmfirst-process-title"><?php echo esc_html( bp_field( 'pf_process_title', 'Three Simple Steps to NHS Treatment' ) ); ?></h2>
      <p class="pharmfirst-process-description"><?php echo esc_html( bp_field( 'pf_process_description', 'No referral, no red tape — just expert NHS care when you need it' ) ); ?></p>
    </div>

    <div class="pharmfirst-process-layout">

      <!-- Left: Step cards -->
      <div class="pharmfirst-process-steps">
        <?php if ( have_rows( 'pf_process_steps' ) ) : $step_num = 0; while ( have_rows( 'pf_process_steps' ) ) : the_row(); $step_num++; ?>
          <div class="pharmfirst-process-card">
            <div class="pharmfirst-process-card-number"><?php echo esc_html( $step_num ); ?></div>
            <div class="pharmfirst-process-card-icon">
              <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
            </div>
            <div class="pharmfirst-process-card-body">
              <h3 class="pharmfirst-process-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
              <p class="pharmfirst-process-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
            </div>
          </div>
        <?php endwhile; else : ?>
          <?php
          $steps = array(
            array( 'icon' => 'fas fa-door-open',   'title' => 'Walk In or Book',          'desc' => 'Visit Bowland Pharmacy during opening hours or book a convenient slot online. No GP referral needed — and no GP registration required.' ),
            array( 'icon' => 'fas fa-stethoscope', 'title' => 'Pharmacist Assessment',     'desc' => 'Our trained pharmacist will assess your symptoms in a private consultation room and determine the most appropriate course of treatment.' ),
            array( 'icon' => 'fas fa-pills',       'title' => 'Receive Your Treatment',    'desc' => 'If clinically appropriate, you\'ll receive NHS medication on the spot. Standard NHS prescription charges apply unless you are exempt.' ),
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
            <img src="<?php echo esc_url( $pf_process_image_url ); ?>" alt="Pharmacist consultation at <?php echo esc_attr( bp_pharmacy_name() ); ?>" />
          <?php endif; ?>
        </div>
        <!-- Floating NHS badge -->
        <div class="pharmfirst-process-float-badge">
          <i class="fas fa-hand-holding-medical"></i>
          <div class="pharmfirst-process-float-badge-content">
            <span class="pharmfirst-process-float-badge-label">NHS FUNDED</span>
            <span class="pharmfirst-process-float-badge-text">Pharmacy First</span>
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
        <h3 class="pharmfirst-eligibility-title"><?php echo esc_html( bp_field( 'pf_eligibility_title', 'Who Can Use This Service?' ) ); ?></h3>
        <p class="pharmfirst-eligibility-text"><?php echo esc_html( bp_field( 'pf_eligibility_text', 'You do not need to be registered with a GP to use Pharmacy First. The service is available to everyone — simply walk in to Bowland Pharmacy. Most conditions can be treated for patients of all ages; age eligibility varies by condition. UTI treatment is available for women aged 16–64 only. Earache treatment is available for children aged 1–17 only. If your condition requires further investigation, our pharmacist will refer you to the appropriate NHS service.' ) ); ?></p>
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
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'pf_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="pharmfirst-faq-title"><?php echo esc_html( bp_field( 'pf_faq_title', 'Pharmacy First — Your Questions Answered' ) ); ?></h2>
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
          array(
            'q' => 'Is the consultation free?',
            'a' => 'Yes. The consultation with our pharmacist is completely free for everyone — you do not need to be registered with a GP, and there is no charge to be seen. If medication is clinically appropriate and prescribed as part of the service, standard NHS prescription charges apply (currently £9.90 per item) unless you are exempt. Exemptions include children under 16, people over 60, those with certain medical conditions, and anyone holding a valid prepayment certificate.',
          ),
          array(
            'q' => 'Do I need to see my GP first?',
            'a' => 'No. That\'s the whole point of Pharmacy First — you can come directly to Bowland Pharmacy without a GP appointment or referral. Simply walk in during opening hours.',
          ),
          array(
            'q' => 'What conditions can you treat?',
            'a' => 'We can treat 7 common conditions: sinusitis (aged 12+), sore throat (aged 5+), earache (children aged 1–17), infected insect bites (aged 1+), impetigo (aged 1+), shingles (aged 18+), and uncomplicated urinary tract infections (UTIs) in women aged 16–64.',
          ),
          array(
            'q' => 'Do I need to be registered with a GP?',
            'a' => 'No. You do not need to be registered with a GP to use Pharmacy First at Bowland Pharmacy. The service is available to everyone — simply walk in.',
          ),
          array(
            'q' => 'What if my condition can\'t be treated here?',
            'a' => 'If our pharmacist determines that your condition needs further investigation or treatment beyond our scope, we\'ll refer you to the appropriate NHS service, such as your GP or urgent care.',
          ),
          array(
            'q' => 'Can children use Pharmacy First?',
            'a' => 'Yes, several Pharmacy First conditions can be treated in children. Earache is available for children aged 1–17. Sinusitis can be treated from age 12, sore throat from age 5, and infected insect bites and impetigo from age 1. Shingles treatment is for adults aged 18 and over, and UTI treatment is for women aged 16–64 only.',
          ),
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
          <span><?php echo esc_html( bp_field( 'pf_cta_badge_1', 'Free Consultation' ) ); ?></span>
        </div>
        <div class="pharmfirst-cta-badge">
          <span><?php echo esc_html( bp_field( 'pf_cta_badge_2', 'No GP Needed' ) ); ?></span>
        </div>
        <div class="pharmfirst-cta-badge">
          <span><?php echo esc_html( bp_field( 'pf_cta_badge_3', 'GPhC Registered' ) ); ?></span>
        </div>
      </div>
      <h2 class="pharmfirst-cta-title"><?php echo esc_html( bp_field( 'pf_cta_title', 'Get an NHS Consultation Today' ) ); ?></h2>
      <p class="pharmfirst-cta-description">
        <?php echo esc_html( bp_field( 'pf_cta_description', 'Don\'t wait weeks for a GP appointment. Visit Bowland Pharmacy for your NHS Pharmacy First consultation — no GP registration required, no referral needed. Walk in or book a slot online.' ) ); ?>
      </p>
      <div class="pharmfirst-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'pf_cta_primary_url', '' ) ?: bp_booking_url() ); ?>" class="cta-button primary-cta pharmfirst-cta-button-white">
          <?php echo esc_html( bp_field( 'pf_cta_button_text', 'Book Pharmacy First Visit' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta pharmfirst-cta-button-outline">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( bp_phone() ); ?>
        </a>
      </div>
      <div class="pharmfirst-cta-trust-checks">
        <span class="pharmfirst-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( bp_field( 'pf_cta_check_1', 'No referral needed' ) ); ?></span>
        <span class="pharmfirst-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( bp_field( 'pf_cta_check_2', '7 conditions treated on the NHS' ) ); ?></span>
        <span class="pharmfirst-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( bp_field( 'pf_cta_check_3', 'Same-day appointments' ) ); ?></span>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
