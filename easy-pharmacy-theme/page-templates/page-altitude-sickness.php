<?php
/**
 * Template Name: Altitude Sickness
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="alt-hero-section">
  <div class="alt-hero-bg"></div>
  <div class="alt-hero-glow-1"></div>
  <div class="alt-hero-glow-2"></div>
  <div class="section-container">
    <div class="alt-hero-grid">
      <!-- Left: Content -->
      <div class="alt-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_hero_badge', 'ALTITUDE SICKNESS PREVENTION' ) ); ?></span>
        </div>

        <h1 class="alt-hero-title">
          <span class="gradient-text"><?php echo esc_html( ep_field( 'alt_hero_title_highlight', 'Altitude Sickness Prevention' ) ); ?></span>
          <?php echo esc_html( ep_field( 'alt_hero_title_line2', 'in Ashford, Chertsey & Walton-on-Thames' ) ); ?>
        </h1>

        <p class="alt-hero-description">
          <?php echo esc_html( ep_field( 'alt_hero_description', 'Travelling to high altitudes? Get expert advice and prescription altitude sickness tablets before you go. Face-to-face consultation with prescription pharmacist—no GP referral needed.' ) ); ?>
        </p>

        <div class="alt-hero-actions">
          <a href="<?php echo esc_url( ep_field( 'alt_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( ep_field( 'alt_hero_cta_text', 'Book Your Travel Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( ep_phone() ); ?>
          </a>
        </div>

        <div class="alt-hero-trust">
          <div class="alt-hero-trust-item">
            <i class="fas fa-check-circle"></i>
            <span><?php echo esc_html( ep_field( 'alt_trust_1', 'No GP Referral Needed' ) ); ?></span>
          </div>
          <div class="alt-hero-trust-item">
            <i class="fas fa-clock"></i>
            <span><?php echo esc_html( ep_field( 'alt_trust_2', 'Same-Day Prescription' ) ); ?></span>
          </div>
          <div class="alt-hero-trust-item">
            <i class="fas fa-mountain"></i>
            <span><?php echo esc_html( ep_field( 'alt_trust_3', 'Travel Health Experts' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Image -->
      <div class="alt-hero-visual">
        <?php
        $hero_image_id  = ep_field( 'alt_hero_image' );
        $hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';
        ?>
        <?php if ( $hero_image_url ) : ?>
          <div class="alt-hero-image-card">
            <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'alt_hero_image_alt', 'High altitude mountain trekking - altitude sickness prevention' ) ); ?>" class="alt-hero-image" />
          </div>
        <?php endif; ?>

        <p class="alt-hero-supporting-text">
          <?php echo esc_html( ep_field( 'alt_hero_supporting_text', 'Same-day appointments available at Easy Pharmacy serving Ashford, Chertsey, and Walton-on-Thames. Prepare safely for Kilimanjaro, Everest Base Camp, Machu Picchu, and other high-altitude destinations.' ) ); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     STATS BAR
     ============================================ -->
<section class="stats-section">
  <div class="section-container">
    <div class="stats-bar">
      <div class="stat-item">
        <div class="stat-icon"><i class="fas fa-shield-halved"></i></div>
        <div class="stat-content">
          <span class="stat-number">GPhC</span>
          <span class="stat-label">Registered</span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="fas fa-user-md"></i></div>
        <div class="stat-content">
          <span class="stat-number">Prescriber</span>
          <span class="stat-label">On Site</span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="fas fa-pills"></i></div>
        <div class="stat-content">
          <span class="stat-number">Same Day</span>
          <span class="stat-label">Prescription &amp; Supply</span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="fas fa-globe-europe"></i></div>
        <div class="stat-content">
          <span class="stat-number">Travel</span>
          <span class="stat-label">Health Experts</span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="fas fa-ban"></i></div>
        <div class="stat-content">
          <span class="stat-number">No Referral</span>
          <span class="stat-label">Required</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     WHY TRAVELLERS WISH THEY'D PLANNED AHEAD (EMOTIONAL HOOK)
     ============================================ -->
<section class="alt-emotional-section">
  <div class="section-container">
    <div class="alt-emotional-content">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_emotional_badge', 'BE PREPARED' ) ); ?></span>
      </div>

      <h2 class="alt-emotional-title"><?php echo esc_html( ep_field( 'alt_emotional_title', '"I Didn\'t Think Altitude Sickness Would Affect Me"' ) ); ?></h2>

      <div class="alt-emotional-body">
        <blockquote class="alt-emotional-quote">
          <?php echo esc_html( ep_field( 'alt_emotional_quote', '"I\'m fit. I\'ve hiked before. I\'ll be fine."' ) ); ?>
        </blockquote>

        <p><?php echo esc_html( ep_field( 'alt_emotional_para1', 'That\'s what most people think before they book a trek to Kilimanjaro or Machu Picchu. Then they arrive at 3,000 metres, and within 24 hours: pounding headache, nausea, dizziness, and exhaustion that won\'t shift.' ) ); ?></p>

        <p><?php echo esc_html( ep_field( 'alt_emotional_para2', 'Altitude sickness doesn\'t care how fit you are. It affects anyone who ascends too quickly without giving their body time to adjust.' ) ); ?></p>

        <p><?php echo esc_html( ep_field( 'alt_emotional_para3', 'The difference between people who enjoy their trip and people who struggle through it often comes down to one thing: preparation.' ) ); ?></p>

        <p><?php echo esc_html( ep_field( 'alt_emotional_para4', 'At Easy Pharmacy in Ashford, Chertsey, and Walton-on-Thames, we see travellers booking altitude sickness consultations weeks before their departure. They leave with:' ) ); ?></p>

        <div class="alt-emotional-checklist">
          <div class="alt-emotional-check-item">
            <i class="fas fa-check-circle"></i>
            <span>A prescription for Acetazolamide (altitude sickness prevention tablets)</span>
          </div>
          <div class="alt-emotional-check-item">
            <i class="fas fa-check-circle"></i>
            <span>Clear dosing instructions tailored to their itinerary</span>
          </div>
          <div class="alt-emotional-check-item">
            <i class="fas fa-check-circle"></i>
            <span>Advice on gradual ascent and when to descend if symptoms worsen</span>
          </div>
          <div class="alt-emotional-check-item">
            <i class="fas fa-check-circle"></i>
            <span>Peace of mind that they've done everything they can to prepare</span>
          </div>
        </div>

        <p class="alt-emotional-closing"><?php echo esc_html( ep_field( 'alt_emotional_closing', 'You don\'t get a second chance at enjoying your once-in-a-lifetime trek. Starting prevention tablets 1-2 days before you ascend can be the difference between struggling at base camp and reaching the summit.' ) ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     HOW ALTITUDE SICKNESS HAPPENS + PREVENTION STRATEGIES (MERGED)
     ============================================ -->
<section class="alt-education-section">
  <div class="section-container">
    <div class="alt-education-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_education_badge', 'UNDERSTANDING ALTITUDE SICKNESS' ) ); ?></span>
      </div>
      <h2 class="alt-education-title"><?php echo esc_html( ep_field( 'alt_education_title', 'What Causes Altitude Sickness—And How to Prevent It' ) ); ?></h2>
    </div>

    <div class="alt-education-grid">
      <!-- Left: What causes it -->
      <div class="alt-education-cause">
        <h3 class="alt-education-subtitle">Why It Happens</h3>
        <p><?php echo esc_html( ep_field( 'alt_education_cause_para', 'Above 2,500-3,000 metres (8,000-10,000 feet), the air pressure drops. Your body can\'t take in as much oxygen with each breath. For most people, this triggers acute mountain sickness (AMS) within 6-24 hours of reaching high altitude.' ) ); ?></p>

        <h3 class="alt-education-subtitle">Symptoms</h3>
        <div class="alt-education-symptoms">
          <?php if ( have_rows( 'alt_symptoms' ) ) : while ( have_rows( 'alt_symptoms' ) ) : the_row(); ?>
            <div class="alt-symptom-item">
              <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
              <span><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
            </div>
          <?php endwhile; else : ?>
            <div class="alt-symptom-item"><i class="fas fa-head-side-virus"></i><span>Headache (often severe, not relieved by paracetamol)</span></div>
            <div class="alt-symptom-item"><i class="fas fa-face-dizzy"></i><span>Nausea and loss of appetite</span></div>
            <div class="alt-symptom-item"><i class="fas fa-spinner"></i><span>Dizziness and fatigue</span></div>
            <div class="alt-symptom-item"><i class="fas fa-lungs"></i><span>Shortness of breath</span></div>
            <div class="alt-symptom-item"><i class="fas fa-moon"></i><span>Difficulty sleeping</span></div>
          <?php endif; ?>
        </div>

        <div class="alt-education-warning">
          <div class="alt-education-warning-icon"><i class="fas fa-exclamation-triangle"></i></div>
          <div>
            <p><strong>In severe cases,</strong> fluid can build up in the lungs (<strong>HAPE</strong> — High Altitude Pulmonary Oedema) or brain (<strong>HACE</strong> — High Altitude Cerebral Oedema). These are medical emergencies requiring immediate descent.</p>
          </div>
        </div>
      </div>

      <!-- Right: Prevention strategies -->
      <div class="alt-education-prevention">
        <h3 class="alt-education-subtitle">Prevention: Gradual Ascent + Medication</h3>
        <p>Medication helps, but the most effective way to prevent altitude sickness is gradual ascent combined with Acetazolamide.</p>

        <div class="alt-ascent-guidelines">
          <h4 class="alt-guidelines-label">Ascent Guidelines</h4>
          <div class="alt-guideline-item">
            <span class="alt-guideline-altitude">Below 3,000m</span>
            <span class="alt-guideline-text">Altitude sickness less common, but still possible</span>
          </div>
          <div class="alt-guideline-item">
            <span class="alt-guideline-altitude">Above 3,000m</span>
            <span class="alt-guideline-text">Ascend no more than 300–500m per day to your next sleeping altitude</span>
          </div>
          <div class="alt-guideline-item">
            <span class="alt-guideline-altitude">Climb high, sleep low</span>
            <span class="alt-guideline-text">If you gain more than 500m in a day, descend to sleep</span>
          </div>
          <div class="alt-guideline-item">
            <span class="alt-guideline-altitude">Rest days</span>
            <span class="alt-guideline-text">For every 1,000m of ascent, take a rest day</span>
          </div>
        </div>

        <div class="alt-prevention-tips">
          <div class="alt-prevention-tip"><i class="fas fa-tint"></i> <span>Drink 3–4 litres of water per day at altitude</span></div>
          <div class="alt-prevention-tip"><i class="fas fa-wine-glass-alt"></i> <span>Avoid alcohol — dehydrates and worsens symptoms</span></div>
          <div class="alt-prevention-tip"><i class="fas fa-heartbeat"></i> <span>Listen to your body — mild symptoms mean stop ascending</span></div>
        </div>

        <div class="alt-emergency-callout">
          <i class="fas fa-arrow-down"></i>
          <p><strong>Severe symptoms?</strong> Confusion, breathlessness at rest, inability to walk, coughing up frothy sputum — <strong>descend immediately</strong> and seek medical help.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     HOW IT WORKS (3-STEP PROCESS)
     ============================================ -->
<section class="alt-process-section">
  <div class="section-container">
    <div class="alt-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="alt-process-title"><?php echo esc_html( ep_field( 'alt_process_title', 'How Easy Pharmacy\'s Altitude Sickness Service Works' ) ); ?></h2>
    </div>

    <div class="alt-process-grid">
      <?php if ( have_rows( 'alt_process_steps' ) ) : $step_num = 0; while ( have_rows( 'alt_process_steps' ) ) : the_row(); $step_num++; ?>
        <div class="alt-process-card">
          <div class="alt-process-step-number"><?php echo esc_html( $step_num ); ?></div>
          <div class="alt-process-icon">
            <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
          </div>
          <h3 class="alt-process-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="alt-process-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <?php $time_badge = get_sub_field( 'time_badge' ); ?>
          <?php if ( $time_badge ) : ?>
            <div class="alt-process-time-badge">
              <i class="fas fa-clock"></i>
              <span><?php echo esc_html( $time_badge ); ?></span>
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <!-- Default Step 1 -->
        <div class="alt-process-card">
          <div class="alt-process-step-number">1</div>
          <div class="alt-process-icon">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 class="alt-process-card-title">Face-to-Face Consultation</h3>
          <p class="alt-process-card-desc">Book an appointment with Dilip or one of the pharmacy team at Easy Pharmacy. We'll discuss your travel destination, planned ascent rate, medical history, and previous altitude exposure. You'll receive personalised advice on preventing altitude sickness, including whether Acetazolamide tablets are suitable for you. We'll also cover what to do if symptoms develop during your trip.</p>
          <div class="alt-process-time-badge">
            <i class="fas fa-clock"></i>
            <span>15-20 minutes</span>
          </div>
        </div>
        <!-- Default Step 2 -->
        <div class="alt-process-card">
          <div class="alt-process-step-number">2</div>
          <div class="alt-process-icon">
            <i class="fas fa-pills"></i>
          </div>
          <h3 class="alt-process-card-title">Prescription &amp; Supply</h3>
          <p class="alt-process-card-desc">If Acetazolamide is appropriate for your trip, Dilip (registered independent prescriber) will issue a prescription and supply the medication on the same day. You'll receive clear dosing instructions: typically 125mg twice daily, starting 1-2 days before you ascend and continuing for 2-3 days after reaching your highest altitude. No waiting for GP appointments or separate pharmacy visits—everything handled in one consultation.</p>
          <div class="alt-process-time-badge">
            <i class="fas fa-clock"></i>
            <span>Same day</span>
          </div>
        </div>
        <!-- Default Step 3 -->
        <div class="alt-process-card">
          <div class="alt-process-step-number">3</div>
          <div class="alt-process-icon">
            <i class="fas fa-hiking"></i>
          </div>
          <h3 class="alt-process-card-title">Travel Prepared</h3>
          <p class="alt-process-card-desc">Leave your consultation with everything you need: Acetazolamide tablets, written dosing instructions, advice on gradual ascent, and clear guidance on when to descend if symptoms worsen. Most travellers in Ashford, Chertsey, and Walton-on-Thames book their altitude sickness consultation 2-4 weeks before departure, giving them time to do a trial dose.</p>
          <div class="alt-process-time-badge">
            <i class="fas fa-clock"></i>
            <span>2-4 weeks before travel (recommended)</span>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     WHAT'S INCLUDED SECTION
     ============================================ -->
<section class="alt-included-section">
  <div class="section-container">
    <div class="alt-included-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_included_badge', 'YOUR CONSULTATION' ) ); ?></span>
      </div>
      <h2 class="alt-included-title"><?php echo esc_html( ep_field( 'alt_included_title', 'What You Get with Easy Pharmacy\'s Altitude Sickness Consultation' ) ); ?></h2>
      <p class="alt-included-subtitle"><?php echo esc_html( ep_field( 'alt_included_subtitle', 'Included in your consultation:' ) ); ?></p>
    </div>

    <div class="alt-included-list">
      <?php if ( have_rows( 'alt_included_items' ) ) : while ( have_rows( 'alt_included_items' ) ) : the_row(); ?>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
        </div>
      <?php endwhile; else : ?>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Face-to-face assessment</strong> with our independent prescriber pharmacist</span>
        </div>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Travel itinerary review</strong> to assess altitude risk and ascent rate</span>
        </div>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Medical history check</strong> for contraindications (allergies, kidney/liver issues, medication interactions)</span>
        </div>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Acetazolamide prescription</strong> if clinically appropriate for your trip</span>
        </div>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Same-day supply</strong> of altitude sickness tablets—no separate pharmacy visit needed</span>
        </div>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Personalised dosing schedule</strong> based on your destination and itinerary</span>
        </div>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Trial dose advice</strong> (take 1-2 tablets before travel to check for side effects)</span>
        </div>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Prevention strategies</strong> including gradual ascent, hydration, and when to descend</span>
        </div>
        <div class="alt-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Written guidance</strong> to take with you on your trip</span>
        </div>
      <?php endif; ?>
    </div>

    <p class="alt-included-closing"><?php echo esc_html( ep_field( 'alt_included_closing', 'No GP referral needed. No weeks-long waiting. Book today, travel prepared.' ) ); ?></p>
  </div>
</section>

<!-- ============================================
     ACETAZOLAMIDE - HOW IT WORKS
     ============================================ -->
<section class="alt-medication-section">
  <div class="section-container">
    <div class="alt-medication-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_medication_badge', 'YOUR MEDICATION' ) ); ?></span>
      </div>
      <h2 class="alt-medication-title"><?php echo esc_html( ep_field( 'alt_medication_title', 'How Acetazolamide Prevents Altitude Sickness' ) ); ?></h2>
    </div>

    <div class="alt-medication-grid">
      <!-- Left: How it works -->
      <div class="alt-medication-content">
        <p class="alt-medication-intro"><?php echo esc_html( ep_field( 'alt_medication_intro', 'Acetazolamide (also known as Diamox) is the only medication with strong clinical evidence for preventing and treating altitude sickness.' ) ); ?></p>

        <h3 class="alt-medication-subtitle">How It Works</h3>
        <p>Acetazolamide is a carbonic anhydrase inhibitor. It works by:</p>
        <ul class="alt-medication-mechanism">
          <li><i class="fas fa-check"></i> Increasing urine production (mild diuretic effect)</li>
          <li><i class="fas fa-check"></i> Altering blood acidity to stimulate breathing</li>
          <li><i class="fas fa-check"></i> Reducing fluid buildup around the brain and lungs</li>
          <li><i class="fas fa-check"></i> Improving oxygen delivery to tissues</li>
          <li><i class="fas fa-check"></i> Speeding up your body's natural acclimatisation process</li>
        </ul>

        <div class="alt-medication-note">
          <i class="fas fa-info-circle"></i>
          <p><strong>Important:</strong> Acetazolamide helps your body adjust faster, but it's not a substitute for gradual ascent. You can still develop altitude sickness while taking it if you ascend too quickly.</p>
        </div>

        <h3 class="alt-medication-subtitle">Trial Dose Recommended</h3>
        <p>Take 1-2 tablets before your trip to check for side effects. Common side effects include tingling in fingers and toes, increased urination, and altered taste (carbonated drinks taste flat). If side effects are severe, contact us before you travel.</p>
      </div>

      <!-- Right: Dosing box -->
      <div class="alt-dosing-box">
        <div class="alt-dosing-box-header">
          <i class="fas fa-pills"></i>
          <h3>Dosing Guide</h3>
        </div>
        <div class="alt-dosing-box-content">
          <div class="alt-dosing-item">
            <span class="alt-dosing-label">Dose</span>
            <span class="alt-dosing-value">125mg twice daily</span>
            <span class="alt-dosing-detail">Half a 250mg tablet — tablets are scored for easy splitting</span>
          </div>
          <div class="alt-dosing-item">
            <span class="alt-dosing-label">Start</span>
            <span class="alt-dosing-value">1-2 days before ascent</span>
            <span class="alt-dosing-detail">Above 2,500m altitude</span>
          </div>
          <div class="alt-dosing-item">
            <span class="alt-dosing-label">Continue</span>
            <span class="alt-dosing-value">During ascent</span>
            <span class="alt-dosing-detail">Plus 2-3 days after reaching highest altitude</span>
          </div>
          <div class="alt-dosing-item">
            <span class="alt-dosing-label">Timing</span>
            <span class="alt-dosing-value">12 hours apart</span>
            <span class="alt-dosing-detail">E.g. 8am and 8pm — avoid late-night dosing (diuretic effect)</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     WHO NEEDS ALTITUDE SICKNESS PREVENTION
     ============================================ -->
<section class="alt-who-section">
  <div class="section-container">
    <div class="alt-who-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_who_badge', 'IS IT RIGHT FOR YOU?' ) ); ?></span>
      </div>
      <h2 class="alt-who-title"><?php echo esc_html( ep_field( 'alt_who_title', 'Is Acetazolamide Right for Your Trip?' ) ); ?></h2>
    </div>

    <div class="alt-who-grid">
      <!-- Left: Destinations -->
      <div class="alt-who-destinations">
        <h3 class="alt-who-subtitle">Consider Altitude Sickness Prevention If You're Travelling To:</h3>

        <div class="alt-destination-list">
          <?php if ( have_rows( 'alt_destinations' ) ) : while ( have_rows( 'alt_destinations' ) ) : the_row(); ?>
            <div class="alt-destination-item">
              <i class="fas fa-mountain"></i>
              <div>
                <span class="alt-destination-name"><?php echo esc_html( get_sub_field( 'name' ) ); ?></span>
                <span class="alt-destination-altitude"><?php echo esc_html( get_sub_field( 'altitude' ) ); ?></span>
              </div>
            </div>
          <?php endwhile; else : ?>
            <div class="alt-destination-item"><i class="fas fa-mountain"></i><div><span class="alt-destination-name">Mount Kilimanjaro (Tanzania)</span><span class="alt-destination-altitude">Summit: 5,895m</span></div></div>
            <div class="alt-destination-item"><i class="fas fa-mountain"></i><div><span class="alt-destination-name">Everest Base Camp (Nepal)</span><span class="alt-destination-altitude">Altitude: 5,364m</span></div></div>
            <div class="alt-destination-item"><i class="fas fa-mountain"></i><div><span class="alt-destination-name">Machu Picchu / Inca Trail (Peru)</span><span class="alt-destination-altitude">Cusco: 3,400m</span></div></div>
            <div class="alt-destination-item"><i class="fas fa-mountain"></i><div><span class="alt-destination-name">Annapurna Circuit (Nepal)</span><span class="alt-destination-altitude">Thorong La Pass: 5,416m</span></div></div>
            <div class="alt-destination-item"><i class="fas fa-mountain"></i><div><span class="alt-destination-name">Andes Mountains (South America)</span><span class="alt-destination-altitude">Many peaks above 4,000m</span></div></div>
            <div class="alt-destination-item"><i class="fas fa-mountain"></i><div><span class="alt-destination-name">Himalayas (Asia)</span><span class="alt-destination-altitude">Various high-altitude treks</span></div></div>
            <div class="alt-destination-item"><i class="fas fa-mountain"></i><div><span class="alt-destination-name">Rocky Mountains (North America)</span><span class="alt-destination-altitude">Some areas above 3,000m</span></div></div>
            <div class="alt-destination-item"><i class="fas fa-mountain"></i><div><span class="alt-destination-name">Alps (Europe)</span><span class="alt-destination-altitude">Ski resorts above 2,500m</span></div></div>
          <?php endif; ?>
        </div>

        <div class="alt-destination-callout">
          <i class="fas fa-info-circle"></i>
          <p>Any destination where you'll sleep above 2,500–3,000 metres (8,000–10,000 feet) carries risk of altitude sickness.</p>
        </div>

        <h3 class="alt-who-subtitle alt-who-subtitle-spaced">Acetazolamide Is Particularly Useful If:</h3>
        <ul class="alt-useful-list">
          <li><i class="fas fa-check"></i> Your itinerary involves rapid ascent (e.g., flying directly to high altitude)</li>
          <li><i class="fas fa-check"></i> You've experienced altitude sickness on previous trips</li>
          <li><i class="fas fa-check"></i> You have limited time for gradual acclimatisation</li>
          <li><i class="fas fa-check"></i> You're joining a group trek with a fixed schedule</li>
          <li><i class="fas fa-check"></i> You want extra protection alongside gradual ascent</li>
        </ul>
      </div>

      <!-- Right: Contraindications -->
      <div class="alt-who-contraindications">
        <div class="alt-contraindications-card">
          <div class="alt-contraindications-header">
            <i class="fas fa-exclamation-circle"></i>
            <h3>Who Should NOT Take Acetazolamide</h3>
          </div>
          <ul class="alt-contraindications-list">
            <li><i class="fas fa-times"></i> Severe sulphonamide allergy (history of anaphylaxis or Stevens-Johnson syndrome)</li>
            <li><i class="fas fa-times"></i> Severe kidney or liver disease</li>
            <li><i class="fas fa-times"></i> Pregnant women (especially first trimester)</li>
            <li><i class="fas fa-times"></i> History of kidney stones (increased risk with Acetazolamide)</li>
          </ul>
          <p class="alt-contraindications-note">During your consultation, we'll assess whether Acetazolamide is safe and appropriate for your specific situation.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     WHY EASY PHARMACY (3-COLUMN)
     ============================================ -->
<section class="alt-why-section">
  <div class="section-container">
    <div class="alt-why-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_why_badge', 'WHY EASY PHARMACY' ) ); ?></span>
      </div>
      <h2 class="alt-why-title"><?php echo esc_html( ep_field( 'alt_why_title', 'Why Travellers in Ashford, Chertsey & Walton Choose Easy Pharmacy' ) ); ?></h2>
    </div>

    <div class="alt-why-grid">
      <?php if ( have_rows( 'alt_why_items' ) ) : while ( have_rows( 'alt_why_items' ) ) : the_row(); ?>
        <div class="alt-why-card">
          <div class="alt-why-icon">
            <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
          </div>
          <h3 class="alt-why-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="alt-why-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="alt-why-card">
          <div class="alt-why-icon">
            <i class="fas fa-user-md"></i>
          </div>
          <h3 class="alt-why-card-title">Prescriber Pharmacist on Site</h3>
          <p class="alt-why-card-desc">Dilip is a registered independent prescriber with specialist training in travel health. You're not just getting medication—you're getting expert clinical assessment, personalised advice, and a prescription from a qualified healthcare professional who understands altitude medicine.</p>
        </div>
        <div class="alt-why-card">
          <div class="alt-why-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <h3 class="alt-why-card-title">Same-Day Prescription &amp; Supply</h3>
          <p class="alt-why-card-desc">Most GP practices don't prescribe Acetazolamide for travel (it's used off-label for altitude sickness). Online pharmacies require consultations and postal delivery. At Easy Pharmacy, you book one appointment, get your prescription and medication the same day.</p>
        </div>
        <div class="alt-why-card">
          <div class="alt-why-icon">
            <i class="fas fa-globe-europe"></i>
          </div>
          <h3 class="alt-why-card-title">Full Travel Health Services</h3>
          <p class="alt-why-card-desc">Planning a trip? Easy Pharmacy offers comprehensive travel health consultations including altitude sickness prevention, malaria tablets, and travel vaccinations. Get everything you need for safe travel in one convenient appointment—no referrals, no waiting lists.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     PRICING SECTION
     ============================================ -->
<section class="alt-pricing-section">
  <div class="section-container">
    <div class="alt-pricing-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_pricing_badge', 'PRICING' ) ); ?></span>
      </div>
      <h2 class="alt-pricing-title"><?php echo esc_html( ep_field( 'alt_pricing_title', 'How Much Does Altitude Sickness Consultation Cost?' ) ); ?></h2>
    </div>

    <div class="alt-pricing-grid">
      <?php if ( have_rows( 'alt_pricing_items' ) ) : while ( have_rows( 'alt_pricing_items' ) ) : the_row(); ?>
        <div class="alt-pricing-card">
          <h3 class="alt-pricing-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <div class="alt-pricing-card-price"><?php echo esc_html( get_sub_field( 'price' ) ); ?></div>
          <p class="alt-pricing-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="alt-pricing-card">
          <h3 class="alt-pricing-card-title">Travel Health Consultation</h3>
          <div class="alt-pricing-card-price alt-pricing-tbc">Price TBC</div>
          <p class="alt-pricing-card-desc">Includes face-to-face assessment, travel itinerary review, medical history check, personalised prevention advice, and prescription if clinically appropriate.</p>
        </div>
        <div class="alt-pricing-card">
          <h3 class="alt-pricing-card-title">Acetazolamide 250mg Tablets</h3>
          <div class="alt-pricing-card-price alt-pricing-tbc">Price TBC per tablet</div>
          <p class="alt-pricing-card-desc">Supplied on the same day following your consultation. Typical trip requires 10-28 tablets depending on duration at altitude and ascent schedule.</p>
        </div>
        <div class="alt-pricing-card alt-pricing-card-example">
          <h3 class="alt-pricing-card-title">Example: Kilimanjaro Trek</h3>
          <div class="alt-pricing-card-price">14-20 tablets</div>
          <p class="alt-pricing-card-desc">A 10-day Kilimanjaro trek typically requires approximately 14-20 tablets (starting 1-2 days before ascent, continuing during 5-7 day climb, and 2-3 days after reaching summit).</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     FAQ SECTION
     ============================================ -->
<section class="alt-faq-section">
  <div class="section-container">
    <div class="alt-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'alt_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="alt-faq-title"><?php echo esc_html( ep_field( 'alt_faq_title', 'Frequently Asked Questions' ) ); ?></h2>
    </div>

    <div class="alt-faq-list">
      <?php if ( have_rows( 'alt_faqs' ) ) : $faq_num = 0; while ( have_rows( 'alt_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="alt-faq-item">
          <button class="alt-faq-question" onclick="toggleAltFaq(this)">
            <span class="alt-faq-number"><?php echo esc_html( $faq_num ); ?></span>
            <span class="alt-faq-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <i class="fas fa-plus alt-faq-icon"></i>
          </button>
          <div class="alt-faq-answer">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="alt-faq-item">
          <button class="alt-faq-question" onclick="toggleAltFaq(this)">
            <span class="alt-faq-number">1</span>
            <span class="alt-faq-text">Do I need a GP referral for altitude sickness tablets?</span>
            <i class="fas fa-plus alt-faq-icon"></i>
          </button>
          <div class="alt-faq-answer">
            <p>No. Easy Pharmacy's altitude sickness service is available to walk-in patients without a GP referral. Dilip is a registered independent prescriber and can assess your suitability for Acetazolamide, issue a prescription, and supply the medication during your consultation. Book by calling 01784 255 222 or emailing hello@easypharmacy.co.uk.</p>
          </div>
        </div>
        <div class="alt-faq-item">
          <button class="alt-faq-question" onclick="toggleAltFaq(this)">
            <span class="alt-faq-number">2</span>
            <span class="alt-faq-text">When should I book my altitude sickness consultation?</span>
            <i class="fas fa-plus alt-faq-icon"></i>
          </button>
          <div class="alt-faq-answer">
            <p>Book 2-4 weeks before your trip. This gives you time to do a trial dose of Acetazolamide before travel (recommended to check for side effects), adjust your travel plans if side effects are severe, and ask follow-up questions if needed. Same-week appointments are often available if you're booking last-minute, but earlier is better for peace of mind.</p>
          </div>
        </div>
        <div class="alt-faq-item">
          <button class="alt-faq-question" onclick="toggleAltFaq(this)">
            <span class="alt-faq-number">3</span>
            <span class="alt-faq-text">What are the side effects of Acetazolamide?</span>
            <i class="fas fa-plus alt-faq-icon"></i>
          </button>
          <div class="alt-faq-answer">
            <p>Common side effects include tingling or numbness in fingers, toes, and around the mouth (very common, harmless), increased urination (it's a diuretic), altered taste (carbonated drinks taste flat), and mild nausea or loss of appetite. Most people tolerate these easily. Serious side effects are rare but include severe allergic reactions (if you have sulphonamide allergy) and kidney stones (if you have a history). We recommend taking a trial dose before travel so you know what's a side effect and what's genuine altitude sickness.</p>
          </div>
        </div>
        <div class="alt-faq-item">
          <button class="alt-faq-question" onclick="toggleAltFaq(this)">
            <span class="alt-faq-number">4</span>
            <span class="alt-faq-text">Can I buy Acetazolamide over the counter or online?</span>
            <i class="fas fa-plus alt-faq-icon"></i>
          </button>
          <div class="alt-faq-answer">
            <p>Acetazolamide is a prescription-only medicine in the UK and cannot be bought over the counter. Some online pharmacies offer consultations and postal delivery, but Easy Pharmacy's face-to-face service means you get expert advice, your prescription, and your medication on the same day—no waiting for post, no impersonal online forms. Buying medication abroad is risky as regulatory standards vary and counterfeit medicines are common in some countries.</p>
          </div>
        </div>
        <div class="alt-faq-item">
          <button class="alt-faq-question" onclick="toggleAltFaq(this)">
            <span class="alt-faq-number">5</span>
            <span class="alt-faq-text">I'm also travelling to a malaria zone—can I get everything in one appointment?</span>
            <i class="fas fa-plus alt-faq-icon"></i>
          </button>
          <div class="alt-faq-answer">
            <p>Yes. Easy Pharmacy offers comprehensive travel health consultations covering altitude sickness prevention (Acetazolamide prescription), malaria tablets (prescription and supply), and travel vaccinations (if required for your destination). Book a single travel health consultation and we'll cover everything you need for safe travel.</p>
          </div>
        </div>
        <div class="alt-faq-item">
          <button class="alt-faq-question" onclick="toggleAltFaq(this)">
            <span class="alt-faq-number">6</span>
            <span class="alt-faq-text">Does Acetazolamide guarantee I won't get altitude sickness?</span>
            <i class="fas fa-plus alt-faq-icon"></i>
          </button>
          <div class="alt-faq-answer">
            <p>No medication can guarantee you won't get altitude sickness. Acetazolamide significantly reduces your risk and speeds up acclimatisation, but it's not a substitute for gradual ascent. Studies show it can reduce symptoms by 50-75%. The safest approach: Acetazolamide + gradual ascent + listening to your body + being prepared to descend if symptoms worsen. If you develop severe symptoms (confusion, breathlessness at rest, inability to walk), descend immediately and seek medical help.</p>
          </div>
        </div>
        <div class="alt-faq-item">
          <button class="alt-faq-question" onclick="toggleAltFaq(this)">
            <span class="alt-faq-number">7</span>
            <span class="alt-faq-text">How long does Acetazolamide take to work?</span>
            <i class="fas fa-plus alt-faq-icon"></i>
          </button>
          <div class="alt-faq-answer">
            <p>Acetazolamide starts working within a few hours, but we recommend starting it 1-2 days before you ascend to allow your body to adjust to the medication. Continue taking it during your ascent and for 2-3 days after reaching your highest altitude. If you're descending quickly after reaching a summit, you can stop once you start descending, provided you don't have symptoms.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     FINAL CTA SECTION
     ============================================ -->
<section class="alt-cta-section">
  <div class="alt-cta-glow-1"></div>
  <div class="alt-cta-glow-2"></div>
  <div class="alt-cta-dots"></div>
  <div class="section-container">
    <div class="alt-cta-content">
      <div class="alt-cta-badges">
        <div class="alt-cta-badge">
          <span><?php echo esc_html( ep_field( 'alt_cta_badge_1', 'No GP Referral' ) ); ?></span>
        </div>
        <div class="alt-cta-badge">
          <span><?php echo esc_html( ep_field( 'alt_cta_badge_2', 'Same-Day Prescription' ) ); ?></span>
        </div>
        <div class="alt-cta-badge">
          <span><?php echo esc_html( ep_field( 'alt_cta_badge_3', 'Travel Health Experts' ) ); ?></span>
        </div>
      </div>
      <h2 class="alt-cta-title"><?php echo esc_html( ep_field( 'alt_cta_title', 'Ready to Prepare for Your High-Altitude Adventure?' ) ); ?></h2>
      <p class="alt-cta-description">
        <?php echo esc_html( ep_field( 'alt_cta_description', 'Book your altitude sickness consultation at Easy Pharmacy serving Ashford, Chertsey, and Walton-on-Thames.' ) ); ?>
      </p>
      <div class="alt-cta-actions">
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta alt-cta-button-white">
          Call <?php echo esc_html( ep_phone() ); ?>
          <i class="fas fa-phone"></i>
        </a>
      </div>
      <p class="alt-cta-supporting">
        <?php echo esc_html( ep_field( 'alt_cta_supporting', 'Or email hello@easypharmacy.co.uk to book your travel health consultation. Same-day appointments available. Get your Acetazolamide prescription and medication before you fly.' ) ); ?>
      </p>
      <p class="alt-cta-extra">
        <?php echo esc_html( ep_field( 'alt_cta_extra', 'Ask about our comprehensive travel health services including malaria tablets and travel vaccinations.' ) ); ?>
      </p>
    </div>
  </div>
</section>

<?php
get_footer();
