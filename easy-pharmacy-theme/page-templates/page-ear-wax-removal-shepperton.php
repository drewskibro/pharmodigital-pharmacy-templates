<?php
/**
 * Template Name: Ear Wax Removal — Shepperton
 *
 * Location landing page targeting Shepperton & the Spelthorne borough.
 * Reuses the shared .earwax-* component styles from ear-wax-removal.css
 * (so the existing /ear-wax-removal/ page is never touched) and layers
 * Shepperton-only sections via .earwax-shep-* in ear-wax-removal-shepperton.css.
 *
 * Meta title/description, canonical and LocalBusiness schema are output from
 * functions.php (easy_pharmacy_shepperton_head / _title), gated to this template.
 *
 * @package Easy_Pharmacy
 */

get_header();

// Shared booking + phone destinations for this page.
$shep_book_url = home_url( '/book-appointment/' );
$shep_phone    = '01784 613 239';
$shep_tel      = '01784613239';
?>

<!-- ============================================
     SECTION 1: HERO
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
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text">GPhC REGISTERED · ESTABLISHED 2008</span>
        </div>

        <h1 class="earwax-hero-title">
          Ear Wax Removal <span class="gradient-text">Shepperton &amp; Spelthorne</span>
        </h1>

        <h2 class="earwax-hero-subtitle">
          Same-day microsuction by GPhC registered clinicians.
        </h2>

        <p class="earwax-hero-description">
          Serving Shepperton, Sunbury-on-Thames, and the Spelthorne borough. No GP referral. No waiting list. From &pound;25.
        </p>

        <div class="earwax-hero-actions">
          <a href="<?php echo esc_url( $shep_book_url ); ?>" class="cta-button primary-cta">
            Book Your Appointment
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( $shep_tel ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            Call <?php echo esc_html( $shep_phone ); ?>
          </a>
        </div>

        <div class="earwax-hero-trust earwax-shep-hero-trust">
          <div class="earwax-hero-trust-item">
            <i class="fas fa-shield-halved"></i>
            <span>GPhC Registered 1091169</span>
          </div>
          <div class="earwax-hero-trust-item">
            <i class="fas fa-clock"></i>
            <span>Same-Day Available</span>
          </div>
          <div class="earwax-hero-trust-item">
            <i class="fas fa-user-doctor"></i>
            <span>No GP Referral Needed</span>
          </div>
          <div class="earwax-hero-trust-item">
            <i class="fas fa-users"></i>
            <span>1,000+ Patients Treated</span>
          </div>
        </div>
      </div>

      <!-- Right: Image with price badge + testimonial -->
      <div class="earwax-hero-visual">
        <?php
        $shep_hero_image_id  = ep_field( 'ews_hero_image' );
        $shep_hero_image_url = $shep_hero_image_id ? wp_get_attachment_image_url( $shep_hero_image_id, 'large' ) : 'https://images.unsplash.com/photo-1581056771107-24ca5f033842?w=800&h=1000&fit=crop';
        ?>
        <div class="earwax-hero-image-card">
          <img src="<?php echo esc_url( $shep_hero_image_url ); ?>" alt="GPhC registered clinician performing ear wax removal microsuction for a Shepperton patient" class="earwax-hero-image" />
          <div class="earwax-hero-overlay"></div>
          <div class="earwax-hero-price-badge">
            <span class="earwax-hero-price-label">Only if no wax found</span>
            <span class="earwax-hero-price-amount">&pound;25</span>
            <span class="earwax-hero-price-sub">Full treatment from &pound;59</span>
          </div>
        </div>

        <!-- Floating Testimonial Card -->
        <div class="earwax-hero-testimonial-float">
          <div class="earwax-hero-testimonial-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="earwax-hero-testimonial-text">"The difference was immediate—I could hear clearly again. Professional, gentle, and highly effective."</p>
          <div class="earwax-hero-testimonial-author">
            <div class="earwax-hero-testimonial-avatar">
              <img src="https://i.pravatar.cc/150?img=47" alt="Spelthorne patient" />
            </div>
            <div>
              <p class="earwax-hero-testimonial-name">Sarah M.</p>
              <p class="earwax-hero-testimonial-location">Shepperton Patient</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 2: OPENING STATEMENT
     ============================================ -->
<section class="earwax-shep-statement">
  <div class="earwax-shep-statement-glow-1"></div>
  <div class="earwax-shep-statement-glow-2"></div>
  <div class="earwax-shep-statement-dots"></div>
  <div class="section-container">
    <div class="earwax-shep-statement-inner">
      <h2 class="earwax-shep-statement-title">The NHS Stopped Offering This. We Didn't.</h2>
      <div class="earwax-shep-statement-body">
        <p>NHS ear wax removal has been progressively withdrawn from most GP surgeries across England since 2019, formally reclassified as a non-core service in 2020. For patients in Shepperton and across Spelthorne, that meant living with blocked ears, muffled hearing, and persistent discomfort — with nowhere obvious to turn. Almost 10 million people in England are now in the same position.</p>
        <p>At Easy Clinic, our GPhC registered clinicians have been performing professional microsuction since 2008. Over 1,000 patients treated. A 95% success rate. Clinical assessment before every procedure. Same-day appointments for patients across the Spelthorne borough.</p>
        <p>This isn't a drop-in service. It's clinical ear care delivered by qualified professionals who do this every day.</p>
      </div>

      <div class="earwax-shep-statement-stats">
        <div class="earwax-shep-statement-stat">
          <span class="earwax-shep-statement-stat-number">1,000+</span>
          <span class="earwax-shep-statement-stat-label">Patients Treated</span>
        </div>
        <div class="earwax-shep-statement-stat">
          <span class="earwax-shep-statement-stat-number">95%</span>
          <span class="earwax-shep-statement-stat-label">Success Rate</span>
        </div>
        <div class="earwax-shep-statement-stat">
          <span class="earwax-shep-statement-stat-number">From &pound;25</span>
          <span class="earwax-shep-statement-stat-label">All-inclusive pricing</span>
        </div>
        <div class="earwax-shep-statement-stat">
          <span class="earwax-shep-statement-stat-number">Est. 2008</span>
          <span class="earwax-shep-statement-stat-label">GPhC Registered</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 3: DISTANCE / JOURNEY
     ============================================ -->
<section class="earwax-shep-distance">
  <div class="section-container">
    <div class="earwax-shep-distance-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">SERVING SPELTHORNE</span>
      </div>
      <h2 class="earwax-shep-distance-title">Less Than 10 Minutes From Shepperton</h2>
      <p class="earwax-shep-distance-subtitle">Patients from across Spelthorne travel to our clinic for professional ear wax removal. Here's how close we are.</p>
    </div>

    <div class="earwax-shep-distance-grid">
      <div class="earwax-shep-distance-card">
        <div class="earwax-shep-distance-card-icon"><i class="fas fa-location-dot"></i></div>
        <h3 class="earwax-shep-distance-card-location">Shepperton</h3>
        <p class="earwax-shep-distance-card-journey"><i class="fas fa-car"></i> 6 minutes by car</p>
        <p class="earwax-shep-distance-card-route">Via Halliford Road</p>
      </div>
      <div class="earwax-shep-distance-card">
        <div class="earwax-shep-distance-card-icon"><i class="fas fa-location-dot"></i></div>
        <h3 class="earwax-shep-distance-card-location">Sunbury-on-Thames</h3>
        <p class="earwax-shep-distance-card-journey"><i class="fas fa-car"></i> 7 minutes by car</p>
        <p class="earwax-shep-distance-card-route">Direct via Upper Halliford</p>
      </div>
      <div class="earwax-shep-distance-card">
        <div class="earwax-shep-distance-card-icon"><i class="fas fa-location-dot"></i></div>
        <h3 class="earwax-shep-distance-card-location">Staines-upon-Thames</h3>
        <p class="earwax-shep-distance-card-journey"><i class="fas fa-car"></i> 9 minutes by car</p>
        <p class="earwax-shep-distance-card-route">Easy access via A308</p>
      </div>
      <div class="earwax-shep-distance-card">
        <div class="earwax-shep-distance-card-icon"><i class="fas fa-location-dot"></i></div>
        <h3 class="earwax-shep-distance-card-location">Upper Halliford</h3>
        <p class="earwax-shep-distance-card-journey"><i class="fas fa-car"></i> 5 minutes by car</p>
        <p class="earwax-shep-distance-card-route">Nearest point of Spelthorne</p>
      </div>
    </div>

    <p class="earwax-shep-distance-parking">
      <i class="fas fa-square-parking"></i>
      Free parking available on site. Unit 11, Littleton House, Littleton Road, Surrey, TW15 1UU.
    </p>

    <div class="earwax-shep-distance-map">
      <iframe
        title="Directions from Shepperton to Easy Clinic, TW15 1UU"
        src="https://www.google.com/maps?saddr=Shepperton+TW17&daddr=Littleton+House,+Littleton+Road,+Ashford+TW15+1UU&output=embed"
        width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 4: TIKTOK VIDEO (lazy loaded)
     ============================================ -->
<section class="earwax-shep-tiktok">
  <div class="section-container">
    <div class="earwax-shep-tiktok-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">SEE IT FOR YOURSELF</span>
      </div>
      <h2 class="earwax-shep-tiktok-title">What a Real Microsuction Appointment Looks Like</h2>
      <p class="earwax-shep-tiktok-subtitle">A real appointment at our clinic. No scripts. No editing. Just what actually happens.</p>
    </div>

    <div class="earwax-shep-tiktok-embed" id="earwax-shep-tiktok-embed" data-tiktok-video="7640915618543258902" data-tiktok-user="theeasypharmacy">
      <!-- Native TikTok blockquote. embed.js is injected lazily by JS when this
           section nears the viewport, so initial page load stays light. -->
      <blockquote class="tiktok-embed"
        cite="https://www.tiktok.com/@theeasypharmacy/video/7640915618543258902"
        data-video-id="7640915618543258902"
        style="max-width: 400px; min-width: 325px; margin: 0 auto;">
        <section>
          <a target="_blank" rel="noopener noreferrer" href="https://www.tiktok.com/@theeasypharmacy">@theeasypharmacy</a>
        </section>
      </blockquote>
    </div>

    <p class="earwax-shep-tiktok-follow">
      Follow us <a href="https://www.tiktok.com/@theeasypharmacy" target="_blank" rel="noopener noreferrer">@theeasypharmacy</a> for clinical health advice and patient stories.
    </p>
  </div>
</section>

<!-- ============================================
     SECTION 5: SYMPTOMS
     ============================================ -->
<section class="earwax-symptoms-section">
  <div class="section-container">
    <div class="earwax-symptoms-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">CLINICAL SYMPTOMS</span>
      </div>
      <h2 class="earwax-symptoms-title">When Ear Wax Becomes a Clinical Problem</h2>
      <p class="earwax-symptoms-description">Ear wax is a natural substance produced by the body. For most people it causes no issues. But for a significant proportion of the population — particularly those who use hearing aids, earphones, or have naturally narrow ear canals — wax can build up and become impacted. When that happens, the symptoms are hard to ignore.</p>
    </div>

    <div class="earwax-symptoms-grid">
      <div class="earwax-symptom-card">
        <div class="earwax-symptom-icon"><i class="fas fa-ear-listen"></i></div>
        <h3 class="earwax-symptom-title">Conductive Hearing Loss</h3>
        <p class="earwax-symptom-desc">Impacted wax physically blocks the ear canal, reducing sound transmission. Patients describe conversations sounding muffled, distant, or underwater.</p>
      </div>
      <div class="earwax-symptom-card">
        <div class="earwax-symptom-icon"><i class="fas fa-face-grimace"></i></div>
        <h3 class="earwax-symptom-title">Otalgia — Ear Pain</h3>
        <p class="earwax-symptom-desc">Pressure from impacted wax causes persistent aching, a sensation of fullness, or sharp discomfort in one or both ears.</p>
      </div>
      <div class="earwax-symptom-card">
        <div class="earwax-symptom-icon"><i class="fas fa-bell"></i></div>
        <h3 class="earwax-symptom-title">Tinnitus</h3>
        <p class="earwax-symptom-desc">Wax pressing against the eardrum can trigger ringing, buzzing, or humming sounds. In many cases, microsuction resolves tinnitus immediately.</p>
      </div>
      <div class="earwax-symptom-card">
        <div class="earwax-symptom-icon"><i class="fas fa-person-falling"></i></div>
        <h3 class="earwax-symptom-title">Vertigo &amp; Dizziness</h3>
        <p class="earwax-symptom-desc">The ear plays a central role in balance. Impacted wax can disrupt that system, causing dizziness or a feeling of being off-balance.</p>
      </div>
      <div class="earwax-symptom-card">
        <div class="earwax-symptom-icon"><i class="fas fa-head-side-cough"></i></div>
        <h3 class="earwax-symptom-title">Reflex Cough</h3>
        <p class="earwax-symptom-desc">The ear canal shares nerve pathways with the throat. Wax pressing against certain points can trigger an unexplained persistent cough.</p>
      </div>
      <div class="earwax-symptom-card">
        <div class="earwax-symptom-icon"><i class="fas fa-ear-deaf"></i></div>
        <h3 class="earwax-symptom-title">Hearing Aid Failure</h3>
        <p class="earwax-symptom-desc">Wax build-up is the leading cause of hearing aid malfunction. Regular microsuction is essential maintenance for hearing aid users.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 6: CLINICAL CREDENTIALS
     ============================================ -->
<section class="earwax-shep-credentials">
  <div class="section-container">
    <div class="earwax-shep-credentials-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">CLINICAL EXPERTISE</span>
      </div>
      <h2 class="earwax-shep-credentials-title">GPhC Registered. Clinically Qualified. Professionally Accountable.</h2>
    </div>

    <div class="earwax-shep-credentials-grid">
      <div class="earwax-shep-credentials-card">
        <div class="earwax-shep-credentials-icon"><i class="fas fa-shield-halved"></i></div>
        <h3 class="earwax-shep-credentials-card-title">GPhC Registered Pharmacy</h3>
        <p class="earwax-shep-credentials-card-body">Registration 1091169. Every procedure performed at our clinic meets the standards set by the General Pharmaceutical Council — the regulatory body governing pharmacy practice in the UK.</p>
      </div>
      <div class="earwax-shep-credentials-card">
        <div class="earwax-shep-credentials-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3 class="earwax-shep-credentials-card-title">Qualified Pharmacy Technicians</h3>
        <p class="earwax-shep-credentials-card-body">Our clinicians are Level 3 qualified pharmacy technicians with specialist training in ear care and microsuction technique. Qualified professionals with years of clinical experience — not a weekend course.</p>
      </div>
      <div class="earwax-shep-credentials-card">
        <div class="earwax-shep-credentials-icon"><i class="fas fa-calendar-check"></i></div>
        <h3 class="earwax-shep-credentials-card-title">Established Since 2008</h3>
        <p class="earwax-shep-credentials-card-body">Over 15 years serving patients across Surrey. 1,000+ ear wax procedures performed. A 95% success rate. Clinical expertise built over time, not borrowed from a franchise.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 7: TREATMENT COMPARISON
     ============================================ -->
<section class="earwax-comparison-section">
  <div class="section-container">
    <div class="earwax-comparison-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">TREATMENT COMPARISON</span>
      </div>
      <h2 class="earwax-comparison-title">Why Microsuction Is the Only Method We Use</h2>
      <p class="earwax-comparison-description">Not all ear wax removal is equal. Syringing and irrigation carry genuine clinical risks — particularly for patients with perforated eardrums, ear infections, or a history of ear surgery. Microsuction eliminates those risks entirely.</p>
    </div>

    <div class="earwax-comparison-table-wrapper">
      <table class="earwax-comparison-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th class="highlight">Our Microsuction</th>
            <th>Traditional Syringing</th>
            <th>At-Home Remedies</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Treatment Time</td><td class="highlight">Up to 30 minutes</td><td>30+ minutes</td><td>Days or weeks</td></tr>
          <tr><td>Water Used</td><td class="highlight">None</td><td>Yes</td><td>Yes</td></tr>
          <tr><td>Visible Throughout</td><td class="highlight">Yes — direct view</td><td>No</td><td>No</td></tr>
          <tr><td>Risk Level</td><td class="highlight">Very low</td><td>Moderate</td><td>Varies</td></tr>
          <tr><td>Success Rate</td><td class="highlight">95%+</td><td>70-80%</td><td>Under 50%</td></tr>
          <tr><td>Safe for Perforated Eardrums</td><td class="highlight">Yes</td><td>No</td><td>Varies</td></tr>
          <tr><td>Immediate Results</td><td class="highlight">Yes</td><td>Sometimes</td><td>Rarely</td></tr>
          <tr><td>Expert Oversight</td><td class="highlight">Throughout</td><td>Limited</td><td>None</td></tr>
        </tbody>
      </table>
    </div>

    <p class="earwax-shep-comparison-note">Microsuction uses a precision suction device and specialist microscope to remove wax under direct visual guidance throughout. The clinician sees exactly what they are doing at every stage. No water. No pressure. No guesswork.</p>
  </div>
</section>

<!-- ============================================
     SECTION 8: HOW IT WORKS
     ============================================ -->
<section class="earwax-process-section">
  <div class="section-container">
    <div class="earwax-process-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">THE CLINICAL PROCESS</span>
      </div>
      <h2 class="earwax-process-title">What Happens at Your Appointment</h2>
    </div>

    <?php
    $shep_steps = array(
      array(
        'field'    => 'ews_step_1_image',
        'icon'     => 'fas fa-clipboard-check',
        'title'    => 'Clinical Assessment',
        'desc'     => 'Before any treatment begins, your clinician performs a full otoscopic examination — a direct visual inspection of the ear canal using specialist equipment. We assess the type, location, and volume of wax present, check for any contraindications including perforation or active infection, and confirm microsuction is clinically appropriate for you. We do not proceed until we are certain it is safe to do so.',
        'time'     => '10 minutes approximately',
        'badge'    => 'No obligation assessment',
      ),
      array(
        'field'    => 'ews_step_2_image',
        'icon'     => 'fas fa-microscope',
        'title'    => 'Microsuction Removal',
        'desc'     => 'Using a calibrated suction device and specialist microscope, your clinician removes the impacted wax under direct visual guidance. The entire canal is visible throughout the procedure. There is no water, no irrigation, and no pressure applied to the eardrum. Most patients notice an immediate improvement in hearing during the procedure itself.',
        'time'     => '5-15 minutes',
        'badge'    => 'Water-free & painless',
      ),
      array(
        'field'    => 'ews_step_3_image',
        'icon'     => 'fas fa-heart-pulse',
        'title'    => 'Post-Procedure Examination & Aftercare',
        'desc'     => 'Following removal, your clinician re-examines both ear canals to confirm complete clearance. Hearing improvement is assessed. You receive personalised aftercare guidance covering prevention of future build-up, whether softening drops are recommended, and when to return if symptoms recur. You leave with clear ears and the confidence that your ear health has been properly assessed.',
        'time'     => '5 minutes',
        'badge'    => 'Instant hearing clarity',
      ),
    );

    foreach ( $shep_steps as $i => $step ) :
      $step_direction = ( $i % 2 === 1 ) ? 'earwax-process-step-right' : 'earwax-process-step-left';
      $step_image_id  = ep_field( $step['field'] );
      $step_image_url = $step_image_id ? wp_get_attachment_image_url( $step_image_id, 'medium_large' ) : '';
    ?>
      <div class="earwax-process-step <?php echo esc_attr( $step_direction ); ?>">
        <div class="earwax-process-step-content">
          <div class="earwax-process-step-icon"><i class="<?php echo esc_attr( $step['icon'] ); ?>"></i></div>
          <h3 class="earwax-process-step-title"><?php echo esc_html( $step['title'] ); ?></h3>
          <p class="earwax-process-step-desc"><?php echo esc_html( $step['desc'] ); ?></p>
          <div class="earwax-process-step-time">
            <i class="fas fa-clock"></i>
            <span><?php echo esc_html( $step['time'] ); ?></span>
          </div>
          <div class="earwax-process-step-badge">
            <i class="fas fa-check-circle"></i>
            <span><?php echo esc_html( $step['badge'] ); ?></span>
          </div>
        </div>
        <?php if ( $step_image_url ) : ?>
          <div class="earwax-process-step-image">
            <img src="<?php echo esc_url( $step_image_url ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>" />
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ============================================
     SECTION 9: TEAM
     ============================================ -->
<section class="earwax-team-section">
  <div class="section-container">
    <div class="earwax-team-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">OUR TEAM</span>
      </div>
      <h2 class="earwax-team-title">Meet Your Spelthorne Ear Care Specialists</h2>
      <p class="earwax-team-description">Our GPhC registered clinical team has helped over 1,000 patients across Surrey resolve their ear wax problems. We offer professional, face-to-face care with convenient access and free parking — just minutes from Shepperton and across the Spelthorne borough.</p>
    </div>

    <div class="earwax-team-grid">
      <div class="earwax-team-card">
        <div class="earwax-team-image-wrapper">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=600&fit=crop" alt="Jignasa Modhvadia" class="earwax-team-image" />
          <div class="earwax-team-badge-green">Since 2019</div>
        </div>
        <div class="earwax-team-content">
          <h3 class="earwax-team-name">Jignasa Modhvadia</h3>
          <p class="earwax-team-role">Sole Director &amp; Level 2 Dispenser</p>
          <p class="earwax-team-bio">As the Sole Director of Easy Clinic, Jignasa combines leadership with hands-on patient care. A qualified Level 2 Dispenser since 2019, she is dedicated to continuous professional development and is currently undertaking her Level 3 Technician training to further enhance the expert services available at our clinic.</p>
          <div class="earwax-team-tags">
            <span class="earwax-team-tag">Clinic Director</span>
            <span class="earwax-team-tag">Level 3 Training</span>
          </div>
        </div>
      </div>
      <div class="earwax-team-card">
        <div class="earwax-team-image-wrapper">
          <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&h=600&fit=crop" alt="Baljender Nagi" class="earwax-team-image" />
          <div class="earwax-team-badge-purple">Level 3 Technician</div>
        </div>
        <div class="earwax-team-content">
          <h3 class="earwax-team-name">Baljender Nagi</h3>
          <p class="earwax-team-role">Senior Staff Member</p>
          <p class="earwax-team-bio">Baljender is a highly experienced Level 3 Technician and a senior member of our clinical team. Her extensive technical knowledge and friendly approach ensure that every patient receives the highest standard of care during their visit. She plays a key role in delivering our specialist ear care services.</p>
          <div class="earwax-team-tags">
            <span class="earwax-team-tag">Senior Technician</span>
            <span class="earwax-team-tag">Patient Care Expert</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 10: PRICING
     ============================================ -->
<section class="earwax-shep-pricing">
  <div class="section-container">
    <div class="earwax-shep-pricing-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">TRANSPARENT PRICING</span>
      </div>
      <h2 class="earwax-shep-pricing-title">Clear Pricing. No Hidden Fees. No Surprises.</h2>
    </div>

    <div class="earwax-shep-pricing-card">
      <ul class="earwax-shep-pricing-list">
        <li class="earwax-shep-pricing-row">
          <span class="earwax-shep-pricing-row-label">Consultation &amp; Assessment</span>
          <span class="earwax-shep-pricing-row-value">&pound;25 <small>(charged only if no wax is found)</small></span>
        </li>
        <li class="earwax-shep-pricing-row">
          <span class="earwax-shep-pricing-row-label">Single Ear Microsuction</span>
          <span class="earwax-shep-pricing-row-value">from &pound;45</span>
        </li>
        <li class="earwax-shep-pricing-row earwax-shep-pricing-row-featured">
          <span class="earwax-shep-pricing-row-label">Both Ears Microsuction</span>
          <span class="earwax-shep-pricing-row-value">from &pound;59</span>
        </li>
      </ul>
      <a href="<?php echo esc_url( $shep_book_url ); ?>" class="cta-button primary-cta earwax-shep-pricing-cta">
        Book Your Appointment <i class="fas fa-arrow-right"></i>
      </a>
    </div>

    <p class="earwax-shep-pricing-note">If clinical assessment confirms no wax removal is required, you pay only the &pound;25 consultation fee. No procedure, no charge beyond that. We tell you what we find. We only treat what needs treating.</p>
  </div>
</section>

<!-- ============================================
     SECTION 11: TESTIMONIALS
     ============================================ -->
<section class="earwax-testimonials-section">
  <div class="section-container">
    <div class="earwax-testimonials-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">PATIENT TESTIMONIALS</span>
      </div>
      <h2 class="earwax-testimonials-title">Hear What Our Spelthorne Patients Say</h2>
      <p class="earwax-testimonials-subtitle">Join the patients who've experienced immediate relief at our clinic</p>
    </div>

    <div class="earwax-testimonials-grid">
      <div class="earwax-testimonial-card">
        <div class="earwax-testimonial-header">
          <div class="earwax-testimonial-avatar"><img src="https://i.pravatar.cc/150?img=47" alt="Sarah M." /></div>
          <div class="earwax-testimonial-meta">
            <p class="earwax-testimonial-author">Sarah M.</p>
            <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          </div>
        </div>
        <p class="earwax-testimonial-quote">"After weeks of discomfort, I finally got my ears treated at Easy Clinic. The difference was immediate - I could hear clearly again! The clinician was professional and explained everything clearly. Highly recommend!"</p>
        <div class="earwax-testimonial-footer"><i class="fas fa-check-circle"></i><span>Verified Patient</span></div>
      </div>
      <div class="earwax-testimonial-card">
        <div class="earwax-testimonial-header">
          <div class="earwax-testimonial-avatar"><img src="https://i.pravatar.cc/150?img=26" alt="Margaret T." /></div>
          <div class="earwax-testimonial-meta">
            <p class="earwax-testimonial-author">Margaret T.</p>
            <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          </div>
        </div>
        <p class="earwax-testimonial-quote">"Fantastic service from start to finish. The team was so thorough and professional. The aftercare advice has helped prevent any further build-up."</p>
        <div class="earwax-testimonial-footer"><i class="fas fa-check-circle"></i><span>Verified Patient</span></div>
      </div>
      <div class="earwax-testimonial-card">
        <div class="earwax-testimonial-header">
          <div class="earwax-testimonial-avatar"><img src="https://i.pravatar.cc/150?img=12" alt="John R." /></div>
          <div class="earwax-testimonial-meta">
            <p class="earwax-testimonial-author">John R.</p>
            <div class="star-row"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          </div>
        </div>
        <p class="earwax-testimonial-quote">"Much better than the traditional syringing I had years ago. No mess, no fuss, just clear hearing again. The appointment times meant I didn't need to take time off work."</p>
        <div class="earwax-testimonial-footer"><i class="fas fa-check-circle"></i><span>Verified Patient</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 12: FAQ
     ============================================ -->
<section class="earwax-faq-section">
  <div class="section-container">
    <div class="earwax-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">CLINICAL FAQs</span>
      </div>
      <h2 class="earwax-faq-title">Frequently Asked Questions — Microsuction Shepperton &amp; Spelthorne</h2>
    </div>

    <div class="earwax-faq-list">
      <?php
      $shep_faqs = array(
        array( 'Do I need a GP referral for microsuction in Spelthorne?', 'No. You can book directly without any referral. Our GPhC registered clinicians can assess and treat you without GP involvement. This is one of the key advantages of private pharmacy-based ear care.' ),
        array( 'Why did the NHS stop offering ear wax removal in Spelthorne?', 'NHS ear wax removal has been progressively withdrawn from GP surgeries across England since 2019, formally reclassified as a non-core service in 2020. Almost 10 million people in England can no longer access free NHS ear wax removal — despite NICE guidelines stating that GP surgeries should offer the service where wax is contributing to hearing problems. Private microsuction is now the most accessible route for most patients in Spelthorne.' ),
        array( 'Is microsuction safe for people with perforated eardrums?', 'Yes. Unlike syringing and irrigation, microsuction does not introduce water into the ear canal. It is the recommended method for patients with a history of perforation, ear surgery, or recurrent infections. Your clinician will assess suitability before proceeding.' ),
        array( 'How is your clinical team qualified?', 'Our clinicians are Level 3 qualified pharmacy technicians with specialist training in microsuction technique. Our clinic is GPhC registered (1091169) and has been operating since 2008. We are regulated by the same body that governs all pharmacy practice in the UK.' ),
        array( 'How quickly can patients from Shepperton get an appointment?', 'Same-day appointments are available most days subject to availability. Call 01784 613 239 to check availability or book online.' ),
        array( 'What if no wax is found?', 'You pay the £25 consultation and assessment fee only. No wax found means no procedure charge. We examine every patient before treatment — if microsuction isn\'t clinically indicated, we will tell you and advise accordingly.' ),
        array( 'Is there parking at your clinic?', 'Free parking is available on site at Unit 11, Littleton House, Littleton Road, Surrey, TW15 1UU - easily accessible from across the Spelthorne borough.' ),
        array( 'Can microsuction resolve tinnitus?', 'In cases where tinnitus is caused by impacted wax pressing against the eardrum, microsuction can resolve symptoms immediately or within a few days of treatment. If tinnitus persists after wax removal, we will advise on appropriate next steps.' ),
      );
      foreach ( $shep_faqs as $n => $faq ) :
      ?>
        <div class="earwax-faq-item">
          <button class="earwax-faq-question" onclick="toggleFAQ(this)">
            <span class="earwax-faq-number"><?php echo esc_html( $n + 1 ); ?></span>
            <span class="earwax-faq-text"><?php echo esc_html( $faq[0] ); ?></span>
            <i class="fas fa-plus earwax-faq-icon"></i>
          </button>
          <div class="earwax-faq-answer">
            <p><?php echo esc_html( $faq[1] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Internal links -->
    <div class="earwax-shep-links">
      <a href="<?php echo esc_url( home_url( '/ear-wax-removal/' ) ); ?>" class="earwax-shep-link"><i class="fas fa-ear-listen"></i> View our full Ear Wax Removal service</a>
      <a href="<?php echo esc_url( $shep_book_url ); ?>" class="earwax-shep-link"><i class="fas fa-calendar-check"></i> Book an appointment</a>
      <a href="<?php echo esc_url( home_url( '/meet-dilip-modhvadia-prescribing-pharmacist/' ) ); ?>" class="earwax-shep-link"><i class="fas fa-user-doctor"></i> Meet Dilip</a>
    </div>
  </div>
</section>

<!-- ============================================
     SECTION 13: FINAL CTA
     ============================================ -->
<section class="earwax-cta-section">
  <div class="section-container">
    <div class="earwax-cta-inner">
      <h2 class="earwax-cta-title">Hear Clearly Again. Today.</h2>
      <p class="earwax-cta-description">
        Serving patients from Shepperton, Sunbury-on-Thames, Staines-upon-Thames, Upper Halliford, and across the Spelthorne borough. GPhC registered clinicians. Same-day appointments. No GP referral needed.
      </p>
      <div class="earwax-cta-actions">
        <a href="<?php echo esc_url( $shep_book_url ); ?>" class="cta-button primary-cta">
          Book Appointment Online
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr( $shep_tel ); ?>" class="cta-button secondary-cta">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( $shep_phone ); ?>
        </a>
      </div>
      <div class="earwax-cta-trust earwax-shep-cta-trust">
        <span class="earwax-cta-trust-item"><i class="fas fa-shield-halved"></i> GPhC Registered 1091169</span>
        <span class="earwax-cta-trust-item"><i class="fas fa-calendar-check"></i> Established 2008</span>
        <span class="earwax-cta-trust-item"><i class="fas fa-users"></i> 1,000+ Patients Treated</span>
        <span class="earwax-cta-trust-item"><i class="fas fa-percentage"></i> 95% Success Rate</span>
        <span class="earwax-cta-trust-item"><i class="fas fa-square-parking"></i> Free Parking</span>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
