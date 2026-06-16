<?php
/**
 * Template Name: COVID Vaccination
 *
 * NHS & private COVID-19 vaccination service page. Content hardcoded
 * (ACF-overridable via dp_field where simple) so it renders without seeding.
 * Reuses the bpack-* markup/CSS from the Blister Packs template.
 *
 * Clinical copy sourced from the live site — review before launch.
 * Private Pfizer price (£75) is a default — confirm before launch.
 *
 * @package Denton_Pharmacy
 */

get_header();

$hero_badge        = dp_field( 'covid_hero_badge', 'NHS & PRIVATE COVID VACCINATION' );
$hero_title_accent = dp_field( 'covid_hero_title_accent', 'COVID Vaccination' );
$hero_title_rest   = dp_field( 'covid_hero_title_rest', 'when you need it' );
$hero_description  = dp_field( 'covid_hero_description', 'NHS COVID-19 vaccinations for eligible patients in line with the latest NHS guidance, plus private vaccinations available by appointment or walk-in.' );
$private_price     = dp_field( 'covid_private_price', '£75' );

$trust_pills = array(
    array( 'icon' => 'fa-check-circle', 'text' => 'NHS & private' ),
    array( 'icon' => 'fa-calendar',     'text' => 'Walk-in or book' ),
    array( 'icon' => 'fa-syringe',      'text' => 'Private jabs available' ),
);

$card_label  = 'NHS & Private';
$card_price  = 'Free';
$card_sub    = 'on the NHS (if eligible)';
$card_checks = array(
    'Free on the NHS if eligible',
    'Private jabs from ' . $private_price,
    'Offered from 1 October each year',
);

$elig_items = array(
    array( 'icon' => 'fa-shield-halved', 'title' => 'Eligible on the NHS', 'desc' => 'If you qualify under current NHS guidance, your COVID jab is free.' ),
    array( 'icon' => 'fa-syringe',       'title' => 'Private vaccination', 'desc' => 'Not eligible on the NHS? Have a private COVID vaccination from ' . $private_price . ' per dose.' ),
    array( 'icon' => 'fa-calendar-days', 'title' => 'Seasonal programme',  'desc' => 'Offered alongside flu jabs from 1 October each year.' ),
    array( 'icon' => 'fa-walking',       'title' => 'Walk-in or book',     'desc' => 'Appointments or walk-ins available — whatever suits you.' ),
);

$proc_steps = array(
    array( 'icon' => 'fa-clipboard-check', 'title' => 'Check eligibility', 'desc' => 'See if you qualify for a free NHS jab, or choose a private one.' ),
    array( 'icon' => 'fa-calendar-check',  'title' => 'Book or walk in',   'desc' => 'Book a slot below, or pop in from 1 October.' ),
    array( 'icon' => 'fa-syringe',         'title' => 'Get vaccinated',    'desc' => 'A quick jab from our pharmacist in our private consultation room.' ),
);

$faqs = array(
    array( 'q' => 'Is the COVID jab free?', 'a' => 'It is free on the NHS for eligible patients, in line with current NHS guidance. Private vaccinations are also available.' ),
    array( 'q' => 'How much is a private COVID jab?', 'a' => 'A private COVID-19 vaccination is ' . $private_price . ' per dose. Prices may vary depending on stock and availability.' ),
    array( 'q' => 'Do I need an appointment?', 'a' => 'You can book a slot or come as a walk-in. We offer COVID and flu vaccinations from 1 October each year, in line with NHS guidance.' ),
    array( 'q' => 'How do I check NHS eligibility?', 'a' => 'Please see the latest NHS guidance on the NHS website for who can get a free COVID-19 vaccination.' ),
    array( 'q' => 'What about flu vaccination?', 'a' => 'We also offer flu vaccinations. See our Flu Vaccination page for details.' ),
);

$cta_badges = array( 'NHS & private', 'Walk-in welcome', 'Same-day available' );
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
                    <a href="#covid-calendar" class="cta-button primary-cta">
                        Book your COVID jab
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="bpack-hero-trust">
                    <?php foreach ( $trust_pills as $pill ) : ?>
                    <div class="bpack-hero-trust-item">
                        <i class="<?php echo esc_attr( dp_fa_class( $pill['icon'] ) ); ?>"></i>
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
                                <i class="fas fa-syringe"></i>
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
                        $gphc_num = dp_option( 'gphc_registration', '1033447' );
                        $gphc_url = dp_option( 'gphc_register_url' ) ?: 'https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/' . $gphc_num;
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


<!-- OPTIONS -->
<section class="bpack-conditions-section bpack-reveal">
    <div class="section-container">
        <div class="bpack-conditions-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span class="section-badge-text">YOUR OPTIONS</span>
            </div>
            <h2 class="bpack-conditions-title">NHS or private — your choice</h2>
            <p class="bpack-conditions-description">Free on the NHS if you're eligible, or a private jab if you're not.</p>
        </div>

        <div class="bpack-conditions-grid">
            <?php foreach ( $elig_items as $item ) : ?>
            <div class="bpack-condition-card">
                <div class="bpack-condition-icon"><i class="<?php echo esc_attr( dp_fa_class( $item['icon'] ) ); ?>"></i></div>
                <h3 class="bpack-condition-title"><?php echo esc_html( $item['title'] ); ?></h3>
                <p class="bpack-condition-desc"><?php echo esc_html( $item['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


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
                    <i class="<?php echo esc_attr( dp_fa_class( $step['icon'] ) ); ?>"></i>
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
            <h2 class="bpack-cta-title">Book your COVID jab</h2>
            <p class="bpack-cta-description">Stay protected — book online or walk in from 1 October.</p>
            <div class="bpack-cta-actions">
                <a href="#covid-calendar" class="cta-button primary-cta bpack-cta-button-white">
                    Book Now
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Booking Calendar (Acuity) -->
<section id="covid-calendar" class="bpack-booking-section">
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
      <h2 class="bpack-booking-title">Book your COVID vaccination</h2>
      <p class="bpack-booking-subtitle">Choose a time below for your COVID jab at <?php echo esc_html( dp_pharmacy_name() ); ?>.</p>
    </div>
    <div class="booking-calendar-wrapper">
      <iframe
        src="https://app.acuityscheduling.com/schedule.php?owner=29286426&amp;appointmentType[]=83760516&amp;appointmentType[]=60972562&amp;ref=embedded_csp"
        title="Schedule Appointment"></iframe>
    </div>
  </div>
</section>
<script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>

<?php get_footer();
