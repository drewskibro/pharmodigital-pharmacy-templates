<?php
/**
 * Template Name: Smoking Cessation
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="sc-hero-section">
  <div class="sc-hero-bg"></div>
  <div class="sc-hero-glow-1"></div>
  <div class="sc-hero-glow-2"></div>
  <div class="section-container">
    <div class="sc-hero-grid">
      <!-- Left: Content -->
      <div class="sc-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( ep_field( 'sc_hero_badge', 'SMOKING CESSATION SERVICE' ) ); ?></span>
        </div>

        <h1 class="sc-hero-title">
          <span class="gradient-text"><?php echo esc_html( ep_field( 'sc_hero_title_highlight', 'Stop Smoking' ) ); ?></span>
          <?php echo esc_html( ep_field( 'sc_hero_title_line2', 'in Ashford, Chertsey & Walton-on-Thames' ) ); ?>
        </h1>

        <p class="sc-hero-description">
          <?php echo esc_html( ep_field( 'sc_hero_description', 'Get expert support to quit smoking for good. Face-to-face consultations, personalised quit plans, and ongoing support for as long as you need it—no GP referral required.' ) ); ?>
        </p>

        <div class="sc-hero-actions">
          <a href="<?php echo esc_url( ep_field( 'sc_hero_cta_url', ep_booking_url() ) ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( ep_field( 'sc_hero_cta_text', 'Book Your Consultation' ) ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( ep_phone() ); ?>
          </a>
        </div>

        <div class="sc-hero-trust">
          <div class="sc-hero-trust-item">
            <i class="fas fa-check-circle"></i>
            <span><?php echo esc_html( ep_field( 'sc_trust_1', 'No GP Referral Needed' ) ); ?></span>
          </div>
          <div class="sc-hero-trust-item">
            <i class="fas fa-clock"></i>
            <span><?php echo esc_html( ep_field( 'sc_trust_2', 'Same-Day Appointments' ) ); ?></span>
          </div>
          <div class="sc-hero-trust-item">
            <i class="fas fa-heart"></i>
            <span><?php echo esc_html( ep_field( 'sc_trust_3', 'Ongoing Support' ) ); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Image -->
      <div class="sc-hero-visual">
        <?php
        $hero_image_id  = ep_field( 'sc_hero_image' );
        $hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';
        ?>
        <?php if ( $hero_image_url ) : ?>
          <div class="sc-hero-image-card">
            <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'sc_hero_image_alt', 'Smoking cessation consultation at Easy Pharmacy' ) ); ?>" class="sc-hero-image" />
          </div>
        <?php endif; ?>

        <p class="sc-hero-supporting-text">
          <?php echo esc_html( ep_field( 'sc_hero_supporting_text', 'Same-day appointments available at Easy Pharmacy serving Ashford, Chertsey, and Walton-on-Thames. Start your quit journey today.' ) ); ?>
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
        <div class="stat-icon"><i class="fas fa-user-check"></i></div>
        <div class="stat-content">
          <span class="stat-number">Expert</span>
          <span class="stat-label">Pharmacist Support</span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="fas fa-calendar-check"></i></div>
        <div class="stat-content">
          <span class="stat-number">Same Day</span>
          <span class="stat-label">Appointments</span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon"><i class="fas fa-phone"></i></div>
        <div class="stat-content">
          <span class="stat-number">12 Weeks+</span>
          <span class="stat-label">Ongoing Support</span>
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
     WHY QUIT NOW SECTION
     ============================================ -->
<section class="sc-whyquit-section">
  <div class="section-container">
    <div class="sc-whyquit-content">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sc_whyquit_badge', 'WHY QUIT NOW' ) ); ?></span>
      </div>

      <h2 class="sc-whyquit-title"><?php echo esc_html( ep_field( 'sc_whyquit_title', 'Why Most People Wish They\'d Quit Sooner' ) ); ?></h2>

      <div class="sc-whyquit-body">
        <blockquote class="sc-whyquit-quote">
          <?php echo esc_html( ep_field( 'sc_whyquit_quote', '"I knew I should stop. I\'d been saying it for years. But I kept putting it off—next month, after this stressful period, when things calm down."' ) ); ?>
        </blockquote>

        <p class="sc-whyquit-hook"><?php echo esc_html( ep_field( 'sc_whyquit_hook', 'Sound familiar?' ) ); ?></p>

        <p><?php echo esc_html( ep_field( 'sc_whyquit_para1', 'Most people who walk into Easy Pharmacy for smoking cessation support say the same thing: "I wish I\'d done this years ago."' ) ); ?></p>

        <p><?php echo esc_html( ep_field( 'sc_whyquit_para2', 'Not because quitting is easy (it\'s not), but because the difference it makes happens faster than you\'d think.' ) ); ?></p>

        <div class="sc-whyquit-timeline">
          <div class="sc-whyquit-timeline-item">
            <span class="sc-whyquit-timeline-time">20 minutes</span>
            <span class="sc-whyquit-timeline-text">Your heart rate drops</span>
          </div>
          <div class="sc-whyquit-timeline-item">
            <span class="sc-whyquit-timeline-time">12 hours</span>
            <span class="sc-whyquit-timeline-text">Carbon monoxide levels return to normal</span>
          </div>
          <div class="sc-whyquit-timeline-item">
            <span class="sc-whyquit-timeline-time">2–3 weeks</span>
            <span class="sc-whyquit-timeline-text">Your lung function improves</span>
          </div>
          <div class="sc-whyquit-timeline-item">
            <span class="sc-whyquit-timeline-time">1 year</span>
            <span class="sc-whyquit-timeline-text">Heart disease risk halved</span>
          </div>
        </div>

        <p><?php echo esc_html( ep_field( 'sc_whyquit_closing1', 'The hardest part isn\'t the physical withdrawal. It\'s deciding to actually start.' ) ); ?></p>

        <p class="sc-whyquit-cta-text"><strong><?php echo esc_html( ep_field( 'sc_whyquit_closing2', 'That\'s where we come in.' ) ); ?></strong></p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     HOW IT WORKS SECTION (3-STEP PROCESS)
     ============================================ -->
<section class="sc-process-section">
  <div class="section-container">
    <div class="sc-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sc_process_badge', 'HOW IT WORKS' ) ); ?></span>
      </div>
      <h2 class="sc-process-title"><?php echo esc_html( ep_field( 'sc_process_title', 'How Easy Pharmacy\'s Smoking Cessation Service Works' ) ); ?></h2>
    </div>

    <div class="sc-process-grid">
      <?php if ( have_rows( 'sc_process_steps' ) ) : $step_num = 0; while ( have_rows( 'sc_process_steps' ) ) : the_row(); $step_num++; ?>
        <div class="sc-process-card">
          <div class="sc-process-step-number"><?php echo esc_html( $step_num ); ?></div>
          <div class="sc-process-icon">
            <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
          </div>
          <h3 class="sc-process-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="sc-process-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
          <?php $time_badge = get_sub_field( 'time_badge' ); ?>
          <?php if ( $time_badge ) : ?>
            <div class="sc-process-time-badge">
              <i class="fas fa-clock"></i>
              <span><?php echo esc_html( $time_badge ); ?></span>
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <!-- Default Step 1 -->
        <div class="sc-process-card">
          <div class="sc-process-step-number">1</div>
          <div class="sc-process-icon">
            <i class="fas fa-clipboard-check"></i>
          </div>
          <h3 class="sc-process-card-title">Initial Consultation &amp; Assessment</h3>
          <p class="sc-process-card-desc">Book a face-to-face appointment with Dilip or one of the pharmacy team at Easy Pharmacy. We'll discuss your smoking history, previous quit attempts, triggers, and what's worked (or hasn't) in the past. You'll receive a personalised quit plan tailored to your routine, not a generic one-size-fits-all approach. We'll also discuss medication options—Champix (varenicline) or nicotine replacement therapy (NRT)—and which might suit you best.</p>
          <div class="sc-process-time-badge">
            <i class="fas fa-clock"></i>
            <span>20-30 minutes</span>
          </div>
        </div>
        <!-- Default Step 2 -->
        <div class="sc-process-card">
          <div class="sc-process-step-number">2</div>
          <div class="sc-process-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <h3 class="sc-process-card-title">Start Your Quit Plan</h3>
          <p class="sc-process-card-desc">Leave your first appointment with everything you need: your personalised quit plan, your chosen medication (Champix prescription or NRT recommendations), and a clear schedule for your quit date. You're not doing this alone—you've got a structured plan and ongoing support lined up. Most patients in Ashford, Chertsey, and Walton-on-Thames start within a week of their initial consultation.</p>
          <div class="sc-process-time-badge">
            <i class="fas fa-clock"></i>
            <span>Same day</span>
          </div>
        </div>
        <!-- Default Step 3 -->
        <div class="sc-process-card">
          <div class="sc-process-step-number">3</div>
          <div class="sc-process-icon">
            <i class="fas fa-phone"></i>
          </div>
          <h3 class="sc-process-card-title">Ongoing Support When You Need It</h3>
          <p class="sc-process-card-desc">Weekly phone check-ins keep you on track during the critical first 12 weeks when cravings and withdrawal are hardest to manage. We monitor your progress, adjust your medication if needed, discuss challenges, and celebrate milestones. After 12 weeks, we'll assess where you are—if you need continued support, we're here. Quitting is a journey, not a fixed timeline, and we don't cut you off at an arbitrary deadline.</p>
          <div class="sc-process-time-badge">
            <i class="fas fa-clock"></i>
            <span>First 12 weeks + ongoing as needed</span>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     WHAT'S INCLUDED SECTION
     ============================================ -->
<section class="sc-included-section">
  <div class="section-container">
    <div class="sc-included-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sc_included_badge', 'YOUR PROGRAM' ) ); ?></span>
      </div>
      <h2 class="sc-included-title"><?php echo esc_html( ep_field( 'sc_included_title', 'What You Get with Easy Pharmacy\'s Smoking Cessation Service' ) ); ?></h2>
      <p class="sc-included-subtitle"><?php echo esc_html( ep_field( 'sc_included_subtitle', 'Included in your program:' ) ); ?></p>
    </div>

    <div class="sc-included-list">
      <?php if ( have_rows( 'sc_included_items' ) ) : while ( have_rows( 'sc_included_items' ) ) : the_row(); ?>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><?php echo esc_html( get_sub_field( 'text' ) ); ?></span>
        </div>
      <?php endwhile; else : ?>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Initial face-to-face consultation</strong> with our pharmacy team</span>
        </div>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Personalised quit plan</strong> based on your smoking habits and triggers</span>
        </div>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Carbon monoxide breath test</strong> (assesses current smoking impact—equipment arriving soon)</span>
        </div>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Medication options:</strong> Champix (varenicline) prescription or NRT guidance (patches, gum, lozenges, spray, inhalator)</span>
        </div>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Weekly phone support</strong> during the first 12 weeks when withdrawal is strongest</span>
        </div>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Continued support available</strong> if you need help beyond 12 weeks—we don't abandon you after a set period</span>
        </div>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Dosage adjustments</strong> if side effects or cravings aren't managed well</span>
        </div>
        <div class="sc-included-item">
          <i class="fas fa-check-circle"></i>
          <span><strong>Same-day appointments available</strong>—start your quit journey this week</span>
        </div>
      <?php endif; ?>
    </div>

    <p class="sc-included-closing"><?php echo esc_html( ep_field( 'sc_included_closing', 'No GP referral needed. No months-long waiting lists. Just book, attend, and start.' ) ); ?></p>
  </div>
</section>

<!-- ============================================
     WHY EASY PHARMACY SECTION (3-COLUMN)
     ============================================ -->
<section class="sc-why-section">
  <div class="section-container">
    <div class="sc-why-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sc_why_badge', 'WHY EASY PHARMACY' ) ); ?></span>
      </div>
      <h2 class="sc-why-title"><?php echo esc_html( ep_field( 'sc_why_title', 'Why Patients in Ashford, Chertsey & Walton Choose Easy Pharmacy' ) ); ?></h2>
    </div>

    <div class="sc-why-grid">
      <?php if ( have_rows( 'sc_why_items' ) ) : while ( have_rows( 'sc_why_items' ) ) : the_row(); ?>
        <div class="sc-why-card">
          <div class="sc-why-icon">
            <i class="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></i>
          </div>
          <h3 class="sc-why-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <p class="sc-why-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="sc-why-card">
          <div class="sc-why-icon">
            <i class="fas fa-user-md"></i>
          </div>
          <h3 class="sc-why-card-title">Expert Pharmacist Support</h3>
          <p class="sc-why-card-desc">Dilip and the Easy Pharmacy team are trained in smoking cessation. You're not just picking up medication—you're getting ongoing clinical support from professionals who understand nicotine addiction and withdrawal management.</p>
        </div>
        <div class="sc-why-card">
          <div class="sc-why-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h3 class="sc-why-card-title">Same-Day Appointments</h3>
          <p class="sc-why-card-desc">Most NHS smoking cessation services have waiting lists or require hospital referrals. At Easy Pharmacy in Ashford, Chertsey, and Walton-on-Thames, you can book a consultation today and start your quit plan this week.</p>
        </div>
        <div class="sc-why-card">
          <div class="sc-why-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3 class="sc-why-card-title">Local &amp; Accessible</h3>
          <p class="sc-why-card-desc">Face-to-face consultations at Easy Pharmacy followed by phone support means you get the best of both: personal service without needing to travel in every week. Convenient for patients across Ashford, Chertsey, and Walton-on-Thames.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     CHAMPIX VS NRT COMPARISON SECTION
     ============================================ -->
<section class="sc-compare-section">
  <div class="section-container">
    <div class="sc-compare-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sc_compare_badge', 'TREATMENT OPTIONS' ) ); ?></span>
      </div>
      <h2 class="sc-compare-title"><?php echo esc_html( ep_field( 'sc_compare_title', 'Champix or Nicotine Replacement Therapy—Which Is Right for You?' ) ); ?></h2>
      <div class="sc-compare-intro">
        <p><?php echo esc_html( ep_field( 'sc_compare_intro1', 'Most people ask during their first consultation: "Should I use Champix or nicotine replacement therapy?"' ) ); ?></p>
        <p><?php echo esc_html( ep_field( 'sc_compare_intro2', 'The honest answer: it depends on your smoking habits, medical history, and what\'s worked (or not worked) before.' ) ); ?></p>
      </div>
    </div>

    <div class="sc-compare-grid">
      <!-- Champix Column -->
      <div class="sc-compare-card sc-compare-card-champix">
        <div class="sc-compare-card-header">
          <div class="sc-compare-card-icon">
            <i class="fas fa-pills"></i>
          </div>
          <h3><?php echo esc_html( ep_field( 'sc_champix_title', 'Champix (Varenicline)' ) ); ?></h3>
        </div>
        <ul class="sc-compare-list">
          <?php if ( have_rows( 'sc_champix_points' ) ) : while ( have_rows( 'sc_champix_points' ) ) : the_row(); ?>
            <li><i class="fas fa-check"></i> <?php echo esc_html( get_sub_field( 'point' ) ); ?></li>
          <?php endwhile; else : ?>
            <li><i class="fas fa-check"></i> Prescription medication that reduces nicotine cravings and withdrawal symptoms</li>
            <li><i class="fas fa-check"></i> Blocks nicotine receptors in the brain, making smoking less rewarding</li>
            <li><i class="fas fa-check"></i> Typically taken for 12 weeks</li>
            <li><i class="fas fa-check"></i> Studies show Champix can double your chances of quitting compared to willpower alone</li>
            <li><i class="fas fa-check"></i> Requires monitoring for side effects (nausea, vivid dreams, mood changes)</li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- NRT Column -->
      <div class="sc-compare-card sc-compare-card-nrt">
        <div class="sc-compare-card-header">
          <div class="sc-compare-card-icon">
            <i class="fas fa-hand-holding-medical"></i>
          </div>
          <h3><?php echo esc_html( ep_field( 'sc_nrt_title', 'Nicotine Replacement Therapy (NRT)' ) ); ?></h3>
        </div>
        <ul class="sc-compare-list">
          <?php if ( have_rows( 'sc_nrt_points' ) ) : while ( have_rows( 'sc_nrt_points' ) ) : the_row(); ?>
            <li><i class="fas fa-check"></i> <?php echo esc_html( get_sub_field( 'point' ) ); ?></li>
          <?php endwhile; else : ?>
            <li><i class="fas fa-check"></i> Patches, gum, lozenges, spray, or inhalator</li>
            <li><i class="fas fa-check"></i> Provides controlled nicotine without the harmful chemicals in cigarettes</li>
            <li><i class="fas fa-check"></i> Helps manage withdrawal symptoms and cravings</li>
            <li><i class="fas fa-check"></i> Can be used in combination (e.g., patch + gum) for better results</li>
            <li><i class="fas fa-check"></i> Available over-the-counter</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>

    <div class="sc-compare-closing">
      <p><?php echo esc_html( ep_field( 'sc_compare_closing1', 'During your consultation, we\'ll discuss which option suits your situation. Some patients use Champix. Others prefer NRT. Some try one and switch to the other if side effects are problematic.' ) ); ?></p>
      <p class="sc-compare-closing-emphasis"><?php echo esc_html( ep_field( 'sc_compare_closing2', 'There\'s no "wrong" choice—just the one that works for you.' ) ); ?></p>
    </div>
  </div>
</section>

<!-- ============================================
     PRICING SECTION
     ============================================ -->
<section class="sc-pricing-section">
  <div class="section-container">
    <div class="sc-pricing-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sc_pricing_badge', 'PRICING' ) ); ?></span>
      </div>
      <h2 class="sc-pricing-title"><?php echo esc_html( ep_field( 'sc_pricing_title', 'How Much Does Smoking Cessation Cost?' ) ); ?></h2>
    </div>

    <div class="sc-pricing-grid">
      <?php if ( have_rows( 'sc_pricing_items' ) ) : while ( have_rows( 'sc_pricing_items' ) ) : the_row(); ?>
        <div class="sc-pricing-card">
          <h3 class="sc-pricing-card-title"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
          <div class="sc-pricing-card-price"><?php echo esc_html( get_sub_field( 'price' ) ); ?></div>
          <p class="sc-pricing-card-desc"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="sc-pricing-card">
          <h3 class="sc-pricing-card-title">Initial Consultation</h3>
          <div class="sc-pricing-card-price sc-pricing-tbc">Price TBC</div>
          <p class="sc-pricing-card-desc">Includes your personalised quit plan, medication discussion, and enrolment in the support program with weekly phone check-ins.</p>
        </div>
        <div class="sc-pricing-card">
          <h3 class="sc-pricing-card-title">Champix (Varenicline)</h3>
          <div class="sc-pricing-card-price sc-pricing-tbc">Price TBC per pack</div>
          <p class="sc-pricing-card-desc">Prescription medication supplied by Easy Pharmacy. Typical 12-week course requires multiple packs.</p>
        </div>
        <div class="sc-pricing-card">
          <h3 class="sc-pricing-card-title">Nicotine Replacement Therapy (NRT)</h3>
          <div class="sc-pricing-card-price">Purchased Separately</div>
          <p class="sc-pricing-card-desc">Patches, gum, lozenges, and other NRT products available at pharmacy prices.</p>
        </div>
        <div class="sc-pricing-card sc-pricing-card-included">
          <h3 class="sc-pricing-card-title">Weekly Phone Support</h3>
          <div class="sc-pricing-card-price sc-pricing-included-label">Included</div>
          <p class="sc-pricing-card-desc">Phone check-ins during the first 12 weeks are included in your initial consultation fee—no additional charges.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     FAQ SECTION
     ============================================ -->
<section class="sc-faq-section">
  <div class="section-container">
    <div class="sc-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html( ep_field( 'sc_faq_badge', 'FREQUENTLY ASKED QUESTIONS' ) ); ?></span>
      </div>
      <h2 class="sc-faq-title"><?php echo esc_html( ep_field( 'sc_faq_title', 'Frequently Asked Questions' ) ); ?></h2>
    </div>

    <div class="sc-faq-list">
      <?php if ( have_rows( 'sc_faqs' ) ) : $faq_num = 0; while ( have_rows( 'sc_faqs' ) ) : the_row(); $faq_num++; ?>
        <div class="sc-faq-item">
          <button class="sc-faq-question" onclick="toggleSCFaq(this)">
            <span class="sc-faq-number"><?php echo esc_html( $faq_num ); ?></span>
            <span class="sc-faq-text"><?php echo esc_html( get_sub_field( 'question' ) ); ?></span>
            <i class="fas fa-plus sc-faq-icon"></i>
          </button>
          <div class="sc-faq-answer">
            <p><?php echo esc_html( get_sub_field( 'answer' ) ); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="sc-faq-item">
          <button class="sc-faq-question" onclick="toggleSCFaq(this)">
            <span class="sc-faq-number">1</span>
            <span class="sc-faq-text">Do I need a GP referral to access smoking cessation at Easy Pharmacy?</span>
            <i class="fas fa-plus sc-faq-icon"></i>
          </button>
          <div class="sc-faq-answer">
            <p>No. Easy Pharmacy's smoking cessation service is available to walk-in patients without a GP referral. Book directly by calling 01784 255 222 or emailing bookings@theeasyclinic.co.uk. Same-day appointments are often available for patients in Ashford, Chertsey, and Walton-on-Thames.</p>
          </div>
        </div>
        <div class="sc-faq-item">
          <button class="sc-faq-question" onclick="toggleSCFaq(this)">
            <span class="sc-faq-number">2</span>
            <span class="sc-faq-text">How long does the smoking cessation program last?</span>
            <i class="fas fa-plus sc-faq-icon"></i>
          </button>
          <div class="sc-faq-answer">
            <p>We provide intensive weekly phone support for the first 12 weeks when cravings and withdrawal symptoms are hardest to manage. After 12 weeks, we'll assess your progress together. If you need continued support, we're here—quitting smoking is a journey, not a fixed timeline, and we don't cut you off after an arbitrary deadline. Some people need a few months, others need ongoing check-ins for longer. We adapt to what you need.</p>
          </div>
        </div>
        <div class="sc-faq-item">
          <button class="sc-faq-question" onclick="toggleSCFaq(this)">
            <span class="sc-faq-number">3</span>
            <span class="sc-faq-text">Can I use Champix and nicotine replacement therapy together?</span>
            <i class="fas fa-plus sc-faq-icon"></i>
          </button>
          <div class="sc-faq-answer">
            <p>No, Champix and NRT should not be used together. During your consultation, we'll discuss which option is most appropriate for your situation. Some patients start with Champix and switch to NRT if side effects are problematic, or vice versa. Your treatment plan will be personalised based on your response.</p>
          </div>
        </div>
        <div class="sc-faq-item">
          <button class="sc-faq-question" onclick="toggleSCFaq(this)">
            <span class="sc-faq-number">4</span>
            <span class="sc-faq-text">What happens if I relapse during the program?</span>
            <i class="fas fa-plus sc-faq-icon"></i>
          </button>
          <div class="sc-faq-answer">
            <p>Relapse is common and doesn't mean failure. Most people make several quit attempts before they succeed long-term. If you smoke during the program, we'll discuss what triggered the relapse, adjust your quit plan, and continue supporting you. We don't view smoking cessation as "pass or fail"—we're here to support you through setbacks, not judge them.</p>
          </div>
        </div>
        <div class="sc-faq-item">
          <button class="sc-faq-question" onclick="toggleSCFaq(this)">
            <span class="sc-faq-number">5</span>
            <span class="sc-faq-text">Is smoking cessation available on the NHS?</span>
            <i class="fas fa-plus sc-faq-icon"></i>
          </button>
          <div class="sc-faq-answer">
            <p>The NHS offers smoking cessation services, but access varies. Some services require hospital referrals (e.g., if you were admitted and started quitting in hospital). Others have long waiting lists. Easy Pharmacy's private service means no referral needed, same-day appointments, and immediate access to Champix or NRT guidance. You pay privately but start your quit journey this week instead of waiting months.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============================================
     FINAL CTA SECTION
     ============================================ -->
<section class="sc-cta-section">
  <div class="sc-cta-glow-1"></div>
  <div class="sc-cta-glow-2"></div>
  <div class="sc-cta-dots"></div>
  <div class="section-container">
    <div class="sc-cta-content">
      <div class="sc-cta-badges">
        <div class="sc-cta-badge">
          <span><?php echo esc_html( ep_field( 'sc_cta_badge_1', 'No GP Referral' ) ); ?></span>
        </div>
        <div class="sc-cta-badge">
          <span><?php echo esc_html( ep_field( 'sc_cta_badge_2', 'Same-Day Available' ) ); ?></span>
        </div>
        <div class="sc-cta-badge">
          <span><?php echo esc_html( ep_field( 'sc_cta_badge_3', 'Ongoing Support' ) ); ?></span>
        </div>
      </div>
      <h2 class="sc-cta-title"><?php echo esc_html( ep_field( 'sc_cta_title', 'Ready to Quit Smoking?' ) ); ?></h2>
      <p class="sc-cta-description">
        <?php echo esc_html( ep_field( 'sc_cta_description', 'Book your smoking cessation consultation at Easy Pharmacy serving Ashford, Chertsey, and Walton-on-Thames.' ) ); ?>
      </p>
      <div class="sc-cta-actions">
        <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button primary-cta sc-cta-button-white">
          Call <?php echo esc_html( ep_phone() ); ?>
          <i class="fas fa-phone"></i>
        </a>
      </div>
      <p class="sc-cta-supporting">
        <?php echo esc_html( ep_field( 'sc_cta_supporting', 'Or email bookings@theeasyclinic.co.uk to book your appointment. Same-day consultations available.' ) ); ?>
      </p>
    </div>
  </div>
</section>

<?php
get_footer();
