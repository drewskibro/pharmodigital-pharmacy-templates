<?php
/**
 * Template Name: Hair Loss Treatment
 * @package Bowland_Pharmacy
 */

get_header();
?>

<!-- ============================================
     G1. HERO — Warm gradient, 2-column
     ============================================ -->
<section class="hairloss-hero-section">
  <div class="hairloss-hero-bg"></div>
  <div class="hairloss-hero-dots"></div>
  <div class="hairloss-hero-glow-1"></div>
  <div class="hairloss-hero-glow-2"></div>

  <div class="section-container">
    <div class="hairloss-hero-grid">

      <div class="hairloss-hero-content">
        <div class="section-badge">
          <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_hero_badge', 'HAIR LOSS CONSULTATION' ) ); ?></span>
        </div>

        <h1 class="hairloss-hero-title">
          <?php echo esc_html( bp_field( 'hl_hero_title_line1', 'Talk to a Pharmacist About' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'hl_hero_title_highlight', 'Your Hair Loss' ) ); ?></span>
        </h1>

        <p class="hairloss-hero-description">
          <?php echo esc_html( bp_field( 'hl_hero_description', 'Private, face-to-face consultations with our GPhC-registered pharmacist in ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) . '. We explain your options and supply treatment only if it is suitable for you.' ) ); ?>
        </p>

        <ul class="hairloss-hero-features">
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html( bp_field( 'hl_feature_1', 'Prescription-only treatment for men aged 18 and over, if suitable' ) ); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html( bp_field( 'hl_feature_2', 'Advice on options you can buy without a prescription' ) ); ?></li>
          <li><i class="fas fa-circle-check"></i> <?php echo esc_html( bp_field( 'hl_feature_3', 'Personalised treatment plans' ) ); ?></li>
        </ul>

        <div class="hairloss-hero-actions">
          <a href="<?php echo esc_url( bp_field( 'hl_hero_cta_url', '' ) ?: '#hair-loss-calendar' ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( bp_field( 'hl_hero_cta_text', 'Book Consultation' ) ); ?> <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i> <?php echo esc_html( bp_phone() ); ?>
          </a>
        </div>
      </div>

      <div class="hairloss-hero-visual">
        <div class="hairloss-hero-image-card">
          <?php
          $hero_image_id  = bp_field( 'hl_hero_image' );
          $hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';
          if ( $hero_image_url ) : ?>
            <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( bp_field( 'hl_hero_image_alt', 'Man looking at his hair in a bathroom mirror' ) ); ?>" class="hairloss-hero-image" />
            <div class="hairloss-hero-overlay"></div>
            <div class="hairloss-hero-caption">
              <p><?php echo esc_html( bp_field( 'hl_hero_caption', 'Private consultations in ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) ) ); ?></p>
            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     G2. STATS BAR — Purple gradient, 4-column
     ============================================ -->
<section class="hairloss-stats-section">
  <div class="hairloss-stats-shimmer"></div>
  <div class="section-container">
    <div class="hairloss-stats-grid">
      <?php
      $stats = array(
        array( 'icon' => 'hl_stat_1_icon', 'number' => 'hl_stat_1_number', 'label' => 'hl_stat_1_label', 'def_icon' => 'fas fa-award', 'def_number' => '1-to-1', 'def_label' => 'Private consultation' ),
        array( 'icon' => 'hl_stat_2_icon', 'number' => 'hl_stat_2_number', 'label' => 'hl_stat_2_label', 'def_icon' => 'fas fa-certificate', 'def_number' => 'GPhC', 'def_label' => 'Registered' ),
        array( 'icon' => 'hl_stat_3_icon', 'number' => 'hl_stat_3_number', 'label' => 'hl_stat_3_label', 'def_icon' => 'fas fa-calendar-check', 'def_number' => 'Face to face', 'def_label' => 'Assessment' ),
        array( 'icon' => 'hl_stat_4_icon', 'number' => 'hl_stat_4_number', 'label' => 'hl_stat_4_label', 'def_icon' => 'fas fa-clock', 'def_number' => 'Same day', 'def_label' => 'Consultation' ),
      );
      foreach ( $stats as $stat ) :
        $icon   = bp_field( $stat['icon'], $stat['def_icon'] );
        $number = bp_field( $stat['number'], $stat['def_number'] );
        $label  = bp_field( $stat['label'], $stat['def_label'] );
      ?>
        <div class="hairloss-stat-item">
          <div class="hairloss-stat-icon"><i class="<?php echo esc_attr( bp_fa_class( $icon ) ); ?>"></i></div>
          <div class="hairloss-stat-content">
            <span class="hairloss-stat-number"><?php echo $number; ?></span>
            <span class="hairloss-stat-label"><?php echo esc_html( $label ); ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================
     G3. RESULTS / FEATURES — Treatment cards with metrics
     ============================================ -->
<section class="hairloss-treatments-section">
  <div class="section-container">
    <div class="hairloss-treatments-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_treatments_badge', 'CONSULTATIONS' ) ); ?></span>
      </div>
      <h2 class="hairloss-treatments-title"><?php echo esc_html( bp_field( 'hl_treatments_title_line1', 'Our' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'hl_treatments_title_highlight', 'Hair Loss Consultations' ) ); ?></span></h2>
      <p class="hairloss-treatments-desc"><?php echo esc_html( bp_field( 'hl_treatments_description', 'Private consultations with our GPhC-registered pharmacist at ' . bp_pharmacy_name() . ', with treatment supplied and monitored only if it is suitable for you.' ) ); ?></p>
    </div>

    <div class="hairloss-treatments-grid">
      <?php if ( have_rows( 'hl_treatments' ) ) : while ( have_rows( 'hl_treatments' ) ) : the_row(); ?>
        <?php $is_featured = get_sub_field( 'is_featured' ); ?>
        <div class="hairloss-treatment-card">
          <?php if ( $is_featured ) : ?><div class="hairloss-treatment-glow"></div><?php endif; ?>
          <div class="hairloss-treatment-badge <?php echo esc_attr( get_sub_field( 'badge_type' ) ); ?>"><?php echo esc_html( get_sub_field( 'badge_text' ) ); ?></div>
          <?php
          $treatment_image_id  = get_sub_field( 'image' );
          $treatment_image_url = $treatment_image_id ? wp_get_attachment_image_url( $treatment_image_id, 'medium' ) : '';
          if ( $treatment_image_url ) : ?>
            <div class="hairloss-treatment-image-container">
              <img src="<?php echo esc_url( $treatment_image_url ); ?>" alt="<?php echo esc_attr( get_sub_field( 'title' ) ); ?>" class="hairloss-treatment-img" />
            </div>
          <?php endif; ?>
          <h3 class="hairloss-treatment-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="hairloss-treatment-subtitle"><?php echo esc_html( get_sub_field( 'subtitle' ) ); ?></p>
          <div class="hairloss-treatment-divider"></div>
          <h4 class="hairloss-treatment-heading">How It Works</h4>
          <p class="hairloss-treatment-text"><?php echo esc_html( get_sub_field( 'how_it_works' ) ); ?></p>
          <h4 class="hairloss-treatment-heading">What to expect</h4>
          <ul class="hairloss-treatment-list">
            <?php if ( have_rows( 'results' ) ) : while ( have_rows( 'results' ) ) : the_row(); ?>
              <li><i class="fas fa-circle-check"></i> <?php echo esc_html( get_sub_field( 'text' ) ); ?></li>
            <?php endwhile; endif; ?>
          </ul>
          <div class="hairloss-treatment-details">
            <div class="detail"><span class="label">Duration</span><span class="value"><?php echo esc_html( get_sub_field( 'duration' ) ); ?></span></div>
            <div class="detail"><span class="label">Where</span><span class="value"><?php echo esc_html( get_sub_field( 'price' ) ); ?></span></div>
          </div>
          <a href="<?php echo esc_url( bp_field( 'hl_hero_cta_url', '' ) ?: '#hair-loss-calendar' ); ?>" class="cta-button <?php echo $is_featured ? 'primary-cta' : 'secondary-cta'; ?> hairloss-treatment-btn"><?php echo esc_html( get_sub_field( 'button_text' ) ?: 'Book Now' ); ?></a>
        </div>
      <?php endwhile; else : ?>
        <!-- Default: consultation for men -->
        <div class="hairloss-treatment-card">
          <div class="hairloss-treatment-glow"></div>
          <div class="hairloss-treatment-badge prescription">PHARMACIST CONSULTATION</div>
          <h3 class="hairloss-treatment-title">Hair Loss Consultation for Men</h3>
          <p class="hairloss-treatment-subtitle">For men aged 18 and over with thinning hair or a receding hairline</p>
          <div class="hairloss-treatment-divider"></div>
          <h4 class="hairloss-treatment-heading">How It Works</h4>
          <p class="hairloss-treatment-text">Our pharmacist talks with you about your hair loss and your health, explains the options and their side effects, and can supply treatment the same day if it is suitable for you.</p>
          <h4 class="hairloss-treatment-heading">What to expect</h4>
          <ul class="hairloss-treatment-list">
            <li><i class="fas fa-circle-check"></i> A private, face-to-face consultation</li>
            <li><i class="fas fa-circle-check"></i> Clear information on the options, including side effects</li>
            <li><i class="fas fa-circle-check"></i> Treatment only if it is right for you</li>
          </ul>
          <div class="hairloss-treatment-details">
            <div class="detail"><span class="label">Duration</span><span class="value">15 minutes</span></div>
            <div class="detail"><span class="label">Where</span><span class="value">In the pharmacy</span></div>
          </div>
          <a href="#hair-loss-calendar" class="cta-button primary-cta hairloss-treatment-btn">Book Consultation</a>
        </div>
        <!-- Default: advice for women and men -->
        <div class="hairloss-treatment-card">
          <div class="hairloss-treatment-badge otc">PHARMACY ADVICE</div>
          <h3 class="hairloss-treatment-title">Hair Loss Advice for Women and Men</h3>
          <p class="hairloss-treatment-subtitle">Thinning hair, shedding or bald patches</p>
          <div class="hairloss-treatment-divider"></div>
          <h4 class="hairloss-treatment-heading">How It Works</h4>
          <p class="hairloss-treatment-text">Hair loss has several causes, and some need a GP. Our pharmacist will talk through what may be behind yours, explain options you can buy from a pharmacy without a prescription, and tell you when to see your GP.</p>
          <h4 class="hairloss-treatment-heading">What to expect</h4>
          <ul class="hairloss-treatment-list">
            <li><i class="fas fa-circle-check"></i> Advice on possible causes</li>
            <li><i class="fas fa-circle-check"></i> Pharmacy options explained, with their side effects</li>
            <li><i class="fas fa-circle-check"></i> Referral to your GP when that is the right step</li>
          </ul>
          <div class="hairloss-treatment-details">
            <div class="detail"><span class="label">Duration</span><span class="value">No appointment needed</span></div>
            <div class="detail"><span class="label">Where</span><span class="value">In the pharmacy</span></div>
          </div>
          <a href="#hair-loss-calendar" class="cta-button secondary-cta hairloss-treatment-btn">Visit in Store</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     G5. PROCESS / JOURNEY — 4-step cards
     ============================================ -->
<section class="hairloss-process-section">
  <div class="section-container">
    <div class="hairloss-process-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="hairloss-process-title"><?php echo esc_html( bp_field( 'hl_process_title_line1', 'How Your' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'hl_process_title_highlight', 'Consultation Works' ) ); ?></span></h2>
    </div>
    <div class="hairloss-process-grid">
      <?php if ( have_rows( 'hl_process_steps' ) ) : $step_num = 0; while ( have_rows( 'hl_process_steps' ) ) : the_row(); $step_num++; ?>
        <div class="hairloss-process-card">
          <div class="number"><?php echo esc_html( $step_num ); ?></div>
          <div class="icon"><i class="<?php echo esc_attr( bp_fa_class( get_sub_field( 'icon' ) ) ); ?>"></i></div>
          <h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <?php $time = get_sub_field( 'time_badge' ); if ( $time ) : ?>
            <span class="time-badge"><?php echo esc_html( $time ); ?></span>
          <?php endif; ?>
          <?php if ( $step_num < 4 ) : ?><div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div><?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-process-card">
          <div class="number">1</div>
          <div class="icon"><i class="fas fa-calendar-check"></i></div>
          <h3>Book Consultation</h3>
          <p>Call or book online for a private consultation at our Bowland pharmacy</p>
          <span class="time-badge">15-20 minutes</span>
          <div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">2</div>
          <div class="icon"><i class="fas fa-user-doctor"></i></div>
          <h3>Assessment</h3>
          <p>Discuss hair loss pattern, medical history, and treatment goals with our pharmacist</p>
          <span class="time-badge">During consultation</span>
          <div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">3</div>
          <div class="icon"><i class="fas fa-file-medical"></i></div>
          <h3>Treatment Plan</h3>
          <p>Receive a personalised recommendation. If a prescription-only treatment is suitable, our pharmacist can supply it the same day. Tablet treatment is for men aged 18 and over</p>
          <span class="time-badge">Same day</span>
          <div class="arrow desktop-only"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="hairloss-process-card">
          <div class="number">4</div>
          <div class="icon"><i class="fas fa-rotate"></i></div>
          <h3>Ongoing Support</h3>
          <p>Regular check-ins to see how you are getting on, check for side effects and decide together whether to carry on</p>
          <span class="time-badge">Reviews at least every 3 months</span>
        </div>
      <?php endif; ?>
    </div>
    <div class="hairloss-process-cta">
      <a href="<?php echo esc_url( bp_field( 'hl_hero_cta_url', '' ) ?: '#hair-loss-calendar' ); ?>" class="cta-button primary-cta"><?php echo esc_html( bp_field( 'hl_process_cta_text', 'Book Your Consultation' ) ); ?></a>
    </div>
  </div>
</section>

<!-- ============================================
     G6. FAQ — Plus/minus icon toggle (unique to this page)
     ============================================ -->
<section class="hairloss-faq-section">
  <div class="section-container">
    <div class="hairloss-faq-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_faq_badge', 'COMMON QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="hairloss-faq-title"><?php echo esc_html( bp_field( 'hl_faq_title_line1', 'Hair Loss Treatment' ) ); ?> <span class="gradient-text"><?php echo esc_html( bp_field( 'hl_faq_title_highlight', 'FAQs' ) ); ?></span></h2>
    </div>
    <div class="hairloss-faq-list">
      <?php if ( have_rows( 'hl_faqs' ) ) : $faq_num = 0; while ( have_rows( 'hl_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html( str_pad( $faq_num, 2, '0', STR_PAD_LEFT ) ); ?></span>
            <span class="text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">01</span>
            <span class="text">How long before I know if a treatment is working?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>It varies from person to person, and not everyone responds. Treatments for pattern hair loss usually need several months of daily use before you can tell whether they are working. Your pharmacist will explain what to expect for any option that suits you.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">02</span>
            <span class="text">Do I need a prescription?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Some hair loss treatments are prescription-only medicines. You do not need to bring a prescription: our pharmacist can supply a prescription-only treatment after a face-to-face consultation, for men aged 18 and over, and only if it is suitable for you. Other options can be bought from a pharmacy without a prescription, and we still recommend talking to our pharmacist first.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">03</span>
            <span class="text">Are there side effects?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Like all medicines, the prescription tablet for male pattern hair loss can cause side effects, although not everyone gets them.</p><p><strong>Sexual side effects.</strong> These include lower sex drive, difficulty getting or keeping an erection, and problems with ejaculation, such as less semen. The patient leaflet says these affect up to 1 in 100 men. They may go away with time or when you stop the tablet, but in some men they have carried on after stopping. Please talk to us or your GP if you notice any of these.</p><p><strong>Mood, depression and suicidal thoughts.</strong> The tablet has been linked to low mood, depression and, less often, suicidal thoughts. Before you start, tell our pharmacist if you have ever had depression or suicidal thoughts. If you notice low mood, depression or suicidal thoughts while taking it, stop taking it straight away and contact your doctor or our pharmacist as soon as possible. If you have seriously harmed yourself or feel at risk of serious harm, call 999 straight away. Changes in mood can be hard to spot in yourself, so it helps to tell family or friends that you are taking it.</p><p><strong>Other things to know.</strong> Tell your doctor promptly about any breast changes, such as lumps, pain, swelling or nipple discharge. Women who are pregnant or may become pregnant should not handle crushed or broken tablets. The tablet can lower the result of a PSA blood test, so tell your doctor you take it if you have this test.</p><p><strong>Patient card.</strong> Each pack contains a patient card about these side effects. Please read it, keep it with you, and read the leaflet in the pack. You can report side effects through the MHRA Yellow Card scheme.</p><p><strong>Scalp lotion or foam (sold without a prescription).</strong> Scalp irritation, itching or dryness, headache, and unwanted hair growth on the face or body. Hair shedding can increase for a short time when you start. Stop using it and see a doctor if you get chest pain, a fast heartbeat, faintness or dizziness, sudden weight gain, or swollen hands or feet.</p><p>We'll go through all of this at your consultation.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">04</span>
            <span class="text">What happens if I stop treatment?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>The benefit of treatments for pattern hair loss lasts only while you keep using them. If you stop, any benefit is usually lost again over the following months. Your pharmacist will explain this before you start.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">05</span>
            <span class="text">Can treatments be combined?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>Sometimes. Whether a combination is suitable depends on you, and our pharmacist will advise at your consultation.</p></div>
        </div>
        <div class="hairloss-faq-item">
          <button class="hairloss-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">06</span>
            <span class="text">Why see a pharmacist in person?</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
          </button>
          <div class="hairloss-faq-content"><p>You can talk face to face with a pharmacist who can see your hair loss for themselves, ask about your health and answer your questions there and then. You also get ongoing local support, and if treatment is suitable you can usually take it home the same day.</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     G7. TESTIMONIALS — 3-column
     ============================================ -->
<?php if ( have_rows( 'hl_testimonials' ) ) : ?>
<section class="hairloss-testimonials-section">
  <div class="section-container">
    <div class="hairloss-testimonials-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span class="section-badge-text"><?php echo esc_html( bp_field( 'hl_testimonials_badge', 'PATIENT STORIES' ) ); ?></span>
      </div>
      <h2 class="hairloss-testimonials-title"><?php echo esc_html( bp_field( 'hl_testimonials_title', 'Hear From Our ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) . ' Patients' ) ); ?></h2>
    </div>

    <div class="hairloss-testimonials-grid">
      <?php if ( have_rows( 'hl_testimonials' ) ) : while ( have_rows( 'hl_testimonials' ) ) : the_row(); ?>
        <div class="hairloss-testimonial-card">
          <div class="hairloss-testimonial-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="hairloss-testimonial-quote"><?php echo esc_html( get_sub_field( 'quote' ) ); ?></p>
          <div class="hairloss-testimonial-author">
            <span class="hairloss-testimonial-name"><?php echo esc_html( get_sub_field( 'author' ) ); ?></span>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============================================
     G8. FINAL CTA — Purple gradient
     ============================================ -->
<section class="hairloss-cta-section">
  <div class="section-container">
    <div class="hairloss-cta-content">
      <h2 class="hairloss-cta-title"><?php echo esc_html( bp_field( 'hl_cta_title', 'Ready to Talk About Your Hair Loss?' ) ); ?></h2>
      <p class="hairloss-cta-desc"><?php echo esc_html( bp_field( 'hl_cta_description', 'Book a confidential consultation with our GPhC-registered pharmacist in ' . bp_option( 'pharmacy_town', 'Wythenshawe' ) ) ); ?></p>
      <div class="hairloss-cta-actions">
        <a href="<?php echo esc_url( bp_field( 'hl_cta_url', '' ) ?: '#hair-loss-calendar' ); ?>" class="cta-button primary-cta hairloss-cta-btn-book">
          <?php echo esc_html( bp_field( 'hl_cta_button_text', 'Book Consultation' ) ); ?> <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( bp_phone_link() ); ?>" class="cta-button hairloss-cta-btn">
          <i class="fas fa-phone"></i> <?php echo esc_html( bp_phone() ); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Booking Calendar (Acuity) -->
<section id="hair-loss-calendar" class="hairloss-booking-section">
  <div class="section-container">
    <div class="hairloss-booking-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
          <line x1="16" y1="2" x2="16" y2="6"></line>
          <line x1="8" y1="2" x2="8" y2="6"></line>
          <line x1="3" y1="10" x2="21" y2="10"></line>
        </svg>
        <span class="section-badge-text">BOOK ONLINE</span>
      </div>
      <h2 class="hairloss-booking-title">Book Your Hair Loss Consultation</h2>
      <p class="hairloss-booking-subtitle">Choose a time below for a confidential consultation at <?php echo esc_html( bp_pharmacy_name() ); ?>.</p>
    </div>
    <div class="booking-calendar-wrapper">
      <iframe
        src="https://app.acuityscheduling.com/schedule.php?owner=29286426&amp;calendarID=8436365&amp;ref=embedded_csp"
        title="Schedule Appointment"
        allow="payment"></iframe>
    </div>
  </div>
</section>
<script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>

<?php
get_footer();
