<?php
/**
 * Template Name: Contraception
 *
 * NHS Pharmacy Contraception Service page. Content is hardcoded here (and
 * ACF-overridable via bp_field where simple) so the page renders without
 * seeding. Reuses the bpack-* markup/CSS from the Blister Packs template.
 *
 * Clinical copy — review before launch.
 *
 * @package Bowland_Pharmacy
 */

get_header();

// --- Hero ---
$hero_badge        = bp_field( 'contra_hero_badge', 'NHS CONTRACEPTION SERVICE' );
$hero_title_accent = bp_field( 'contra_hero_title_accent', 'Contraception' );
$hero_title_rest   = bp_field( 'contra_hero_title_rest', 'from your local pharmacy' );
$hero_description  = bp_field( 'contra_hero_description', 'Start or continue your oral contraceptive pill directly with our pharmacist — no GP appointment needed. Free, confidential consultations at ' . bp_pharmacy_name() . '.' );

$hero_cta_p_text = 'Book a Consultation';
$hero_cta_p_url  = '#contraception-calendar';
$hero_cta_s_text = '';
$hero_cta_s_url  = '';

$trust_pills = array(
    array( 'icon' => 'fa-lock',       'text' => 'Confidential' ),
    array( 'icon' => 'fa-user-doctor','text' => 'No GP needed' ),
    array( 'icon' => 'fa-clock',      'text' => 'Same-day appointments' ),
);

// Info card
$card_label  = 'NHS Service';
$card_price  = 'Free';
$card_sub    = 'on the NHS';
$card_checks = array(
    'No GP appointment needed',
    'Private consultation room',
    'Available to anyone aged 16+',
);
?>

<!-- HERO -->
<section class="bpack-hero-section">
    <div class="bpack-hero-bg"></div>
    <div class="bpack-hero-dots"></div>
    <div class="bpack-hero-glow-1"></div>
    <div class="bpack-hero-glow-2"></div>
    <div class="section-container">
        <div class="bpack-hero-grid">

            <div class="bpack-hero-content">
                <div class="section-badge">
                    <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span class="section-badge-text"><?php echo esc_html( $hero_badge ); ?></span>
                </div>

                <h1 class="bpack-hero-title">
                    <span class="gradient-text"><?php echo esc_html( $hero_title_accent ); ?></span>
                    <?php echo esc_html( $hero_title_rest ); ?>
                </h1>

                <p class="bpack-hero-description"><?php echo esc_html( $hero_description ); ?></p>

                <div class="bpack-hero-actions">
                    <a href="<?php echo esc_url( $hero_cta_p_url ); ?>" class="cta-button primary-cta">
                        <?php echo esc_html( $hero_cta_p_text ); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="bpack-hero-trust">
                    <?php foreach ( $trust_pills as $pill ) : ?>
                    <div class="bpack-hero-trust-item">
                        <i class="<?php echo esc_attr( bp_fa_class( $pill['icon'] ) ); ?>"></i>
                        <span><?php echo esc_html( $pill['text'] ); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="bpack-hero-visual">
                <div class="bpack-trust-card">
                    <div class="bpack-trust-card-glow"></div>
                    <div class="bpack-trust-card-inner">
                        <div class="bpack-trust-card-header">
                            <div class="bpack-trust-card-nhs-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <span class="bpack-trust-card-label"><?php echo esc_html( $card_label ); ?></span>
                        </div>
                        <div class="bpack-trust-card-free">
                            <span class="bpack-trust-card-amount"><?php echo esc_html( $card_price ); ?></span>
                            <span class="bpack-trust-card-sub"><?php echo esc_html( $card_sub ); ?></span>
                        </div>
                        <div class="bpack-trust-card-divider"></div>
                        <ul class="bpack-trust-card-list">
                            <?php foreach ( $card_checks as $check ) : ?>
                            <li><i class="fas fa-check"></i> <span><?php echo esc_html( $check ); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        $gphc_num = bp_option( 'gphc_registration', '1089163' );
                        $gphc_url = bp_option( 'gphc_register_url' ) ?: 'https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/' . $gphc_num;
                        ?>
                        <a href="<?php echo esc_url( $gphc_url ); ?>" class="bpack-trust-card-footer" target="_blank" rel="noopener" title="Verify on the GPhC register">
                            <i class="fas fa-shield-halved"></i>
                            <span>GPhC Registered Pharmacy</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php
// --- Who it's for ---
$elig_items = array(
    array( 'icon' => 'fa-pills',        'title' => 'Starting the pill',     'desc' => 'Begin a new oral contraceptive pill after a consultation with our pharmacist.' ),
    array( 'icon' => 'fa-rotate',       'title' => 'Continuing your pill',   'desc' => 'Get an ongoing supply of the contraceptive pill you already take.' ),
    array( 'icon' => 'fa-clock',        'title' => 'Morning-after pill',     'desc' => 'Emergency hormonal contraception, available the same day if you need it.' ),
    array( 'icon' => 'fa-user-check',   'title' => 'Aged 16 or over',        'desc' => 'The NHS Pharmacy Contraception Service is available to anyone aged 16 and above.' ),
    array( 'icon' => 'fa-comments',     'title' => 'Want a private chat',    'desc' => 'Discuss your contraception options confidentially, with no referral needed.' ),
);
?>
<!-- WHO IT'S FOR -->
<section class="bpack-conditions-section bpack-reveal">
    <div class="section-container">
        <div class="bpack-conditions-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span class="section-badge-text">WHO IT'S FOR</span>
            </div>
            <h2 class="bpack-conditions-title">Is this service right for you?</h2>
            <p class="bpack-conditions-description">Our trained pharmacist can help you start or continue contraception, right here at the pharmacy.</p>
        </div>

        <div class="bpack-conditions-grid">
            <?php foreach ( $elig_items as $item ) : ?>
            <div class="bpack-condition-card">
                <div class="bpack-condition-icon"><i class="<?php echo esc_attr( bp_fa_class( $item['icon'] ) ); ?>"></i></div>
                <h3 class="bpack-condition-title"><?php echo esc_html( $item['title'] ); ?></h3>
                <p class="bpack-condition-desc"><?php echo esc_html( $item['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php
// --- How it works ---
$proc_steps = array(
    array( 'icon' => 'fa-calendar-check', 'title' => 'Book a consultation', 'desc' => 'Pop in or book online below — no GP referral needed.' ),
    array( 'icon' => 'fa-user-doctor',    'title' => 'Speak to our pharmacist', 'desc' => 'A confidential chat about your health and contraception options in our private room.' ),
    array( 'icon' => 'fa-pills',          'title' => 'Get your supply',      'desc' => 'If the pill is suitable for you, we can supply it the same day.' ),
);
?>
<!-- HOW IT WORKS -->
<section class="bpack-process-section bpack-reveal">
    <div class="section-container">
        <div class="bpack-process-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span class="section-badge-text">HOW IT WORKS</span>
            </div>
            <h2 class="bpack-process-title">Three simple steps</h2>
        </div>

        <div class="bpack-process-steps">
            <?php foreach ( $proc_steps as $i => $step ) : ?>
            <div class="bpack-process-card">
                <div class="bpack-process-card-number"><?php echo esc_html( $i + 1 ); ?></div>
                <div class="bpack-process-card-icon">
                    <i class="<?php echo esc_attr( bp_fa_class( $step['icon'] ) ); ?>"></i>
                </div>
                <div class="bpack-process-card-body">
                    <h3 class="bpack-process-card-title"><?php echo esc_html( $step['title'] ); ?></h3>
                    <p class="bpack-process-card-desc"><?php echo esc_html( $step['desc'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php
// --- FAQ ---
$faqs = array(
    array( 'q' => 'Is the service free?', 'a' => 'Yes. The NHS Pharmacy Contraception Service is free for eligible patients.' ),
    array( 'q' => 'Do I need a GP appointment?', 'a' => 'No. You can start or continue your contraceptive pill directly with our pharmacist — no GP appointment or referral needed.' ),
    array( 'q' => 'What contraception can you provide?', 'a' => 'Following a consultation, we can start or repeat oral contraceptive pills — both the combined pill and the progestogen-only (mini) pill. We also provide emergency hormonal contraception (the morning-after pill).' ),
    array( 'q' => 'Is it confidential?', 'a' => 'Completely. Your consultation takes place privately in our consultation room.' ),
    array( 'q' => 'What age do I need to be?', 'a' => 'The service is available to anyone aged 16 and over.' ),
);
?>
<!-- FAQ -->
<section class="bpack-faq-section bpack-reveal">
    <div class="section-container">
        <div class="bpack-faq-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span class="section-badge-text">FAQS</span>
            </div>
            <h2 class="bpack-faq-title">Common questions</h2>
        </div>

        <div class="bpack-faq-list">
            <?php foreach ( $faqs as $i => $faq ) : ?>
            <div class="bpack-faq-item">
                <button class="bpack-faq-question" onclick="toggleBpackFAQ(this)">
                    <span class="bpack-faq-number"><?php echo esc_html( $i + 1 ); ?></span>
                    <span class="bpack-faq-text"><?php echo esc_html( $faq['q'] ); ?></span>
                    <i class="fas fa-plus bpack-faq-icon"></i>
                </button>
                <div class="bpack-faq-answer">
                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php
// --- Final CTA ---
$cta_badges = array( 'Free on the NHS', 'No GP needed', 'Confidential' );
?>
<!-- FINAL CTA -->
<section class="bpack-cta-section bpack-reveal">
    <div class="bpack-cta-glow-1"></div>
    <div class="bpack-cta-glow-2"></div>
    <div class="bpack-cta-dots"></div>
    <div class="section-container">
        <div class="bpack-cta-content">
            <div class="bpack-cta-badges">
                <?php foreach ( $cta_badges as $b ) : ?>
                <div class="bpack-cta-badge"><span><?php echo esc_html( $b ); ?></span></div>
                <?php endforeach; ?>
            </div>
            <h2 class="bpack-cta-title">Take control of your contraception</h2>
            <p class="bpack-cta-description">Book a free, confidential consultation with our pharmacist today.</p>
            <div class="bpack-cta-actions">
                <a href="#contraception-calendar" class="cta-button primary-cta bpack-cta-button-white">
                    Book a Consultation
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Booking Calendar (Acuity) -->
<section id="contraception-calendar" class="bpack-booking-section">
  <div class="section-container">
    <div class="bpack-booking-header">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
          <line x1="16" y1="2" x2="16" y2="6"></line>
          <line x1="8" y1="2" x2="8" y2="6"></line>
          <line x1="3" y1="10" x2="21" y2="10"></line>
        </svg>
        <span class="section-badge-text">BOOK ONLINE</span>
      </div>
      <h2 class="bpack-booking-title">Book your contraception consultation</h2>
      <p class="bpack-booking-subtitle">Choose a time below for a free, confidential consultation at <?php echo esc_html( bp_pharmacy_name() ); ?>.</p>
    </div>
    <div class="booking-calendar-wrapper">
      <iframe
        src="https://app.acuityscheduling.com/schedule.php?owner=29286426&amp;appointmentType[]=56219953&amp;appointmentType[]=58202762&amp;appointmentType[]=56219983&amp;ref=embedded_csp"
        title="Schedule Appointment"></iframe>
    </div>
  </div>
</section>
<script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>

<?php get_footer();
