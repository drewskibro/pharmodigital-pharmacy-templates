<?php
/**
 * Template Name: Blood Testing
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- ============================================
     O1. HERO SECTION — Pattern A Light
     Badge, title, description, 2 CTAs, trust pills, pricing card
     ============================================ -->
<section class="bloodtest-hero-section">
  <div class="bloodtest-hero-bg"></div>
  <div class="bloodtest-hero-dots"></div>
  <div class="bloodtest-hero-glow-1"></div>
  <div class="bloodtest-hero-glow-2"></div>
  <div class="section-container">
    <div class="bloodtest-hero-grid">

      <!-- Left: Content -->
      <div class="bloodtest-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'bt_hero_badge', 'PRIVATE BLOOD TESTING SERVICE' ) ); ?></span>
        </div>

        <h1 class="bloodtest-hero-title">
          <span class="gradient-text"><?php echo esc_html( bp_field( 'bt_hero_title_highlight', 'Private Blood Testing' ) ); ?></span>
          <?php echo esc_html( bp_field( 'bt_hero_title_rest', 'in Wythenshawe' ) ); ?>
        </h1>

        <p class="bloodtest-hero-description">
          <?php echo esc_html( bp_field( 'bt_hero_description', 'Comprehensive blood testing at Bowland Pharmacy, Manchester. From general health checks to specific diagnostic panels — get fast, accurate results without a GP referral. Walk in or book your appointment today.' ) ); ?>
        </p>

        <div class="bloodtest-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'bt_hero_cta_url', '' ) ?: '#blood-testing-calendar' ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( bp_field( 'bt_hero_cta_text', 'Book Blood Test' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( bp_phone() ); ?>
          </a>
        </div>

        <div class="bloodtest-hero-trust">
          <div class="bloodtest-hero-trust-item">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( 'bt_trust_1_icon', 'fas fa-check-circle' ) ) ); ?>"></i>
            <span><?php echo esc_html( bp_field( 'bt_trust_1', 'Fast Results' ) ); ?></span>
          </div>
          <div class="bloodtest-hero-trust-item">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( 'bt_trust_2_icon', 'fas fa-calendar-check' ) ) ); ?>"></i>
            <span><?php echo esc_html( bp_field( 'bt_trust_2', 'No GP Referral Needed' ) ); ?></span>
          </div>
          <div class="bloodtest-hero-trust-item">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( 'bt_trust_3_icon', 'fas fa-clock' ) ) ); ?>"></i>
            <span><?php echo esc_html( bp_field( 'bt_trust_3', 'Professional Phlebotomy' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Trust Card + floating badge -->
      <div class="bloodtest-hero-visual">
        <!-- Floating test count badge -->
        <div class="bloodtest-hero-float-badge">
          <span class="bloodtest-hero-float-number"><?php echo esc_html( bp_field( 'bt_float_number', '20+' ) ); ?></span>
          <span class="bloodtest-hero-float-label">tests available</span>
        </div>
        <div class="bloodtest-trust-card">
          <div class="bloodtest-trust-card-glow"></div>
          <div class="bloodtest-trust-card-inner">
            <div class="bloodtest-trust-card-header">
              <div class="bloodtest-trust-card-icon">
                <i class="fas fa-flask"></i>
              </div>
              <span class="bloodtest-trust-card-label"><?php echo esc_html( bp_field( 'bt_price_label', 'Private Blood Testing' ) ); ?></span>
            </div>
            <div class="bloodtest-trust-card-price">
              <span class="bloodtest-trust-card-amount"><?php echo esc_html( bp_field( 'bt_price_amount', 'FROM £39' ) ); ?></span>
              <span class="bloodtest-trust-card-sub"><?php echo esc_html( bp_field( 'bt_price_sub', 'per test panel' ) ); ?></span>
            </div>
            <div class="bloodtest-trust-card-divider"></div>
            <ul class="bloodtest-trust-card-list">
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( bp_field( 'bt_trust_1', 'Fast Results' ) ); ?></span></li>
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( bp_field( 'bt_trust_2', 'No GP Referral Needed' ) ); ?></span></li>
              <li><i class="fas fa-check"></i> <span><?php echo esc_html( bp_field( 'bt_trust_3', 'Professional Phlebotomy' ) ); ?></span></li>
            </ul>
            <div class="bloodtest-trust-card-footer">
              <i class="fas fa-shield-halved"></i>
              <span>GPhC Registered Pharmacy</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     O2. STATS BAR — Glassmorphic white, 4-column
     ============================================ -->
<section class="bloodtest-stats-section">
  <div class="section-container">
    <div class="bloodtest-stats-bar">
      <?php
      $stats = array(
        array( 'icon' => 'bt_stat_1_icon', 'number' => 'bt_stat_1_number', 'label' => 'bt_stat_1_label', 'def_icon' => 'fas fa-vials', 'def_number' => '20+', 'def_label' => 'Tests Available' ),
        array( 'icon' => 'bt_stat_2_icon', 'number' => 'bt_stat_2_number', 'label' => 'bt_stat_2_label', 'def_icon' => 'fas fa-sterling-sign', 'def_number' => 'From £39', 'def_label' => 'Per Panel' ),
        array( 'icon' => 'bt_stat_3_icon', 'number' => 'bt_stat_3_number', 'label' => 'bt_stat_3_label', 'def_icon' => 'fas fa-user-doctor', 'def_number' => 'No GP', 'def_label' => 'Referral Needed' ),
        array( 'icon' => 'bt_stat_4_icon', 'number' => 'bt_stat_4_number', 'label' => 'bt_stat_4_label', 'def_icon' => 'fas fa-clock', 'def_number' => '2-5 Days', 'def_label' => 'For Results' ),
      );
      foreach ( $stats as $si => $stat ) :
      ?>
        <?php if ( $si > 0 ) : ?><div class="bloodtest-stat-divider"></div><?php endif; ?>
        <div class="bloodtest-stat-item">
          <div class="bloodtest-stat-icon">
            <i class="<?php echo esc_attr( bp_fa_class( bp_field( $stat['icon'], $stat['def_icon'] ) ) ); ?>"></i>
          </div>
          <div class="bloodtest-stat-content">
            <p class="bloodtest-stat-number"><?php echo esc_html( bp_field( $stat['number'], $stat['def_number'] ) ); ?></p>
            <p class="bloodtest-stat-label"><?php echo esc_html( bp_field( $stat['label'], $stat['def_label'] ) ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================
     O2.5 MOST REQUESTED TESTS — editable featured panel
     ============================================ -->
<?php
$bt_mr_ids = function_exists( 'get_field' ) ? get_field( 'bt_most_requested' ) : array();
if ( ! empty( $bt_mr_ids ) ) :
?>
<section class="bt-featured-section bloodtest-reveal">
  <div class="section-container">
    <div class="bt-featured-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.196-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'bt_mr_badge', 'MOST REQUESTED' ) ); ?></span>
      </div>
      <h2 class="bt-featured-title"><?php echo esc_html( bp_field( 'bt_mr_title', 'Most Requested Tests' ) ); ?></h2>
      <p class="bt-featured-description"><?php echo esc_html( bp_field( 'bt_mr_description', 'Our most popular blood test panels — book any of these directly below.' ) ); ?></p>
    </div>

    <div class="bt-featured-grid">
      <?php foreach ( (array) $bt_mr_ids as $bt_mr ) :
        $bt_pid = is_object( $bt_mr ) ? $bt_mr->ID : (int) $bt_mr;
        if ( ! $bt_pid ) { continue; }
        $bt_code = get_post_meta( $bt_pid, 'tsbt_code', true );
        $bt_name = get_the_title( $bt_pid );
        $bt_retail = get_post_meta( $bt_pid, 'tsbt_retail', true );
        $bt_turn = get_post_meta( $bt_pid, 'tsbt_turnaround', true );
        $bt_tests = get_post_meta( $bt_pid, 'tsbt_tests', true );
        $bt_acuity = get_post_meta( $bt_pid, 'bt_acuity_type_id', true );
      ?>
        <article class="bt-featured-card">
          <span class="bt-featured-ribbon"><i class="fas fa-star"></i> Most Requested</span>
          <div class="bt-featured-card-head">
            <?php if ( $bt_code ) : ?><span class="bt-featured-code"><?php echo esc_html( $bt_code ); ?></span><?php endif; ?>
            <h3 class="bt-featured-name"><?php echo esc_html( $bt_name ); ?></h3>
          </div>
          <div class="bt-featured-meta">
            <?php if ( $bt_retail ) : ?>
              <div class="bt-featured-price"><span class="bt-featured-price-amount"><?php echo esc_html( $bt_retail ); ?></span></div>
            <?php endif; ?>
            <?php if ( $bt_turn ) : ?>
              <div class="bt-featured-turn"><i class="fas fa-clock"></i> <?php echo esc_html( $bt_turn ); ?></div>
            <?php endif; ?>
          </div>
          <?php if ( $bt_tests ) : ?>
            <details class="bt-featured-tests"><summary>What's included</summary><p><?php echo esc_html( $bt_tests ); ?></p></details>
          <?php endif; ?>
          <a href="#blood-testing-calendar" class="bt-featured-btn" data-test-name="<?php echo esc_attr( $bt_name ); ?>"<?php echo $bt_acuity ? ' data-acuity-type="' . esc_attr( $bt_acuity ) . '"' : ''; ?>>Book this test <i class="fas fa-arrow-right"></i></a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============================================
     O3. TESTS GRID — Available blood test panels
     ============================================ -->
<section class="bloodtest-tests-section">
  <div class="section-container">
    <div class="bloodtest-tests-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'bt_tests_badge', 'OUR BLOOD TESTS' ) ); ?></span>
      </div>
      <h2 class="bloodtest-tests-title"><?php echo esc_html( bp_field( 'bt_tests_title', 'Available Blood Test Panels' ) ); ?></h2>
      <p class="bloodtest-tests-description"><?php echo esc_html( bp_field( 'bt_tests_description', 'We offer a comprehensive range of blood tests to help you monitor your health, diagnose conditions, and gain peace of mind — all without a GP referral.' ) ); ?></p>
    </div>

    <?php echo do_shortcode( '[ts_blood_tests]' ); ?>
  </div>
</section>

<!-- ============================================
     O4. HOW IT WORKS + WHO IT'S FOR
     3-step process cards + eligibility info box
     ============================================ -->
<section class="bloodtest-process-section bloodtest-reveal">
  <div class="section-container">
    <div class="bloodtest-process-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'bt_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="bloodtest-process-title"><?php echo esc_html( bp_field( 'bt_process_title', 'Three Simple Steps to Your Results' ) ); ?></h2>
      <p class="bloodtest-process-description"><?php echo esc_html( bp_field( 'bt_process_description', 'No GP referral needed — just walk in or book online' ) ); ?></p>
    </div>

    <div class="bloodtest-process-cards">
      <?php if ( have_rows( 'bt_process_steps' ) ) : $step_num = 0; while ( have_rows( 'bt_process_steps' ) ) : the_row(); $step_num++; ?>
        <div class="bloodtest-process-card">
          <div class="bloodtest-process-card-number"><?php echo esc_html( $step_num ); ?></div>
          <div class="bloodtest-process-card-icon">
            <i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i>
          </div>
          <h3 class="bloodtest-process-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="bloodtest-process-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <?php
        $steps = array(
          array( 'icon' => 'fas fa-calendar-check', 'title' => 'Walk In or Book', 'desc' => 'Visit Bowland Pharmacy during opening hours or book a convenient time online. No GP referral required.', 'link' => true ),
          array( 'icon' => 'fas fa-vial', 'title' => 'Sample Collection', 'desc' => 'Our trained phlebotomist will take a small blood sample in our private consultation room. Quick and comfortable.' ),
          array( 'icon' => 'fas fa-file-medical', 'title' => 'Get Your Results', 'desc' => 'Receive your results within 2-5 working days via secure email or collect them in person at the pharmacy.' ),
        );
        foreach ( $steps as $i => $step ) :
        ?>
          <div class="bloodtest-process-card">
            <div class="bloodtest-process-card-number"><?php echo esc_html( $i + 1 ); ?></div>
            <div class="bloodtest-process-card-icon">
              <i class="<?php echo esc_attr( $step['icon'] ); ?>"></i>
            </div>
            <h3 class="bloodtest-process-card-title"><?php echo esc_html( $step['title'] ); ?></h3>
            <p class="bloodtest-process-card-desc"><?php echo esc_html( $step['desc'] ); ?></p>
            <?php if ( ! empty( $step['link'] ) ) : ?>
              <a href="#blood-testing-calendar" class="bloodtest-process-card-link">Book a slot <i class="fas fa-arrow-right"></i></a>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <!-- Eligibility Info Box -->
    <div class="bloodtest-eligibility-box">
      <div class="bloodtest-eligibility-icon">
        <i class="fas fa-circle-info"></i>
      </div>
      <div class="bloodtest-eligibility-content">
        <h3 class="bloodtest-eligibility-title"><?php echo esc_html( bp_field( 'bt_eligibility_title', 'Who Is Blood Testing For?' ) ); ?></h3>
        <p class="bloodtest-eligibility-text"><?php echo esc_html( bp_field( 'bt_eligibility_text', 'Our blood testing service is available to anyone aged 18 and over. Whether you want a routine health check, need to monitor an existing condition, or want peace of mind — no GP referral is needed. Simply walk in or book online. If results require further investigation, our pharmacist can advise on next steps or refer you to your GP.' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     O5. FAQ — Numbered accordion
     ============================================ -->
<section class="bloodtest-faq-section bloodtest-reveal">
  <div class="section-container">
    <div class="bloodtest-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'bt_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="bloodtest-faq-title"><?php echo esc_html( bp_field( 'bt_faq_title', 'Blood Testing — Your Questions Answered' ) ); ?></h2>
    </div>

    <div class="bloodtest-faq-list">
      <?php if ( have_rows( 'bt_faqs' ) ) : $faq_num = 0; while ( have_rows( 'bt_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="bloodtest-faq-item">
          <button class="bloodtest-faq-question" onclick="toggleBloodTestFAQ(this)">
            <span class="bloodtest-faq-number"><?php echo esc_html( $faq_num ); ?></span>
            <span class="bloodtest-faq-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <i class="fas fa-plus bloodtest-faq-icon"></i>
          </button>
          <div class="bloodtest-faq-answer">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <?php
        $faqs = array(
          array( 'q' => 'What blood tests do you offer at Bowland Pharmacy?', 'a' => 'We offer a comprehensive range of blood tests including full blood count, thyroid function, liver function, kidney function, diabetes screening (HbA1c), cholesterol and lipid profiles, vitamin D, iron studies, and more. Contact us for a full list of available panels.' ),
          array( 'q' => 'Do I need a GP referral for a blood test?', 'a' => 'No, you do not need a GP referral. You can simply walk into Bowland Pharmacy or book an appointment online. Our service is available to anyone aged 18 and over.' ),
          array( 'q' => 'How much do blood tests cost?', 'a' => 'Blood tests start from £39 per panel. Prices vary depending on the specific tests required. Contact us or visit the pharmacy for a full price list and to discuss which tests are right for you.' ),
          array( 'q' => 'How long do results take?', 'a' => 'Most results are available within 2-5 working days. Results are sent securely via email or can be collected in person at the pharmacy. Our pharmacist will explain your results and advise on any next steps.' ),
          array( 'q' => 'Do I need to fast before a blood test?', 'a' => 'Some tests, such as cholesterol and glucose panels, require fasting for 8-12 hours beforehand. We will advise you when you book your appointment so you can prepare properly.' ),
          array( 'q' => 'What happens if my results are abnormal?', 'a' => 'Our pharmacist will discuss your results with you and explain what they mean. If further investigation or treatment is needed, we can recommend you visit your GP or refer you to the appropriate healthcare service.' ),
        );
        foreach ( $faqs as $i => $faq ) :
        ?>
          <div class="bloodtest-faq-item">
            <button class="bloodtest-faq-question" onclick="toggleBloodTestFAQ(this)">
              <span class="bloodtest-faq-number"><?php echo esc_html( $i + 1 ); ?></span>
              <span class="bloodtest-faq-text"><?php echo esc_html( $faq['q'] ); ?></span>
              <i class="fas fa-plus bloodtest-faq-icon"></i>
            </button>
            <div class="bloodtest-faq-answer">
              <p><?php echo esc_html( $faq['a'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     O6. FINAL CTA — Blue gradient
     ============================================ -->
<section class="bloodtest-cta-section bloodtest-reveal">
  <div class="bloodtest-cta-glow-1"></div>
  <div class="bloodtest-cta-glow-2"></div>
  <div class="bloodtest-cta-dots"></div>
  <div class="section-container">
    <div class="bloodtest-cta-content">
      <div class="bloodtest-cta-badges">
        <div class="bloodtest-cta-badge">
          <span><?php echo esc_html( bp_field( 'bt_cta_badge_1', 'Professional Phlebotomy' ) ); ?></span>
        </div>
        <div class="bloodtest-cta-badge">
          <span><?php echo esc_html( bp_field( 'bt_cta_badge_2', 'Confidential Results' ) ); ?></span>
        </div>
        <div class="bloodtest-cta-badge">
          <span><?php echo esc_html( bp_field( 'bt_cta_badge_3', 'No Referral' ) ); ?></span>
        </div>
      </div>
      <h2 class="bloodtest-cta-title"><?php echo esc_html( bp_field( 'bt_cta_title', 'Book Your Blood Test in Wythenshawe Today' ) ); ?></h2>
      <p class="bloodtest-cta-description">
        <?php echo esc_html( bp_field( 'bt_cta_description', 'Take control of your health with fast, accurate blood testing at Bowland Pharmacy. No GP referral needed — walk in or book your appointment.' ) ); ?>
      </p>
      <div class="bloodtest-cta-actions">
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button primary-cta bloodtest-cta-button-white">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( bp_phone() ); ?>
        </a>
        <a href="<?php echo esc_url( bp_field( 'bt_cta_primary_url', '' ) ?: '#blood-testing-calendar' ); ?>" class="cta-button secondary-cta bloodtest-cta-button-outline">
          <?php echo esc_html( bp_field( 'bt_cta_button_text', 'Book Online' ) ); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
      <div class="bloodtest-cta-trust-checks">
        <span class="bloodtest-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( bp_field( 'bt_cta_check_1', 'No referral needed' ) ); ?></span>
        <span class="bloodtest-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( bp_field( 'bt_cta_check_2', 'Results in 2-5 days' ) ); ?></span>
        <span class="bloodtest-cta-check"><i class="fas fa-check"></i> <?php echo esc_html( bp_field( 'bt_cta_check_3', 'GPhC registered' ) ); ?></span>
      </div>
    </div>
  </div>
</section>

<!-- Booking Calendar (Acuity) -->
<section id="blood-testing-calendar" class="bloodtest-booking-section">
  <div class="section-container">
    <div class="bloodtest-booking-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
          <line x1="16" y1="2" x2="16" y2="6"></line>
          <line x1="8" y1="2" x2="8" y2="6"></line>
          <line x1="3" y1="10" x2="21" y2="10"></line>
        </svg>
        <span class="section-badge-text">BOOK ONLINE</span>
      </div>
      <h2 class="bloodtest-booking-title">Book Your Blood Test Appointment</h2>
      <p class="bloodtest-booking-subtitle">Choose a time below and book your blood test directly at <?php echo esc_html( bp_pharmacy_name() ); ?>.</p>
      <button type="button" id="bt-booking-selected" class="bt-booking-selected" hidden></button>
    </div>
    <div class="booking-calendar-wrapper">
      <iframe
        id="bt-acuity-frame"
        src="https://app.acuityscheduling.com/schedule.php?owner=29286426&amp;calendarID=8436365&amp;appointmentType=category:Blood%20Testing&amp;ref=embedded_csp"
        title="Schedule Appointment"
        allow="payment"></iframe>
    </div>
  </div>
</section>
<script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>

<?php
get_footer();
