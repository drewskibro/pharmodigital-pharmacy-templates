<?php
/**
 * Template Name: NHS Prescriptions Register
 * @package Denton_Pharmacy
 *
 * Standalone NHS prescription registration form. Submits via AJAX to
 * dp_npreg_form_handler() in functions.php; the handler posts to
 * info@dentonpharmacy.co.uk (or whatever the pharmacy_email option is set
 * to).
 */

get_header();

// --- Hero ---
$hero_badge    = dp_field( 'npreg_hero_badge',    'NHS PRESCRIPTION SERVICE' );
$hero_title    = dp_field( 'npreg_hero_title',    'Register with ' . dp_pharmacy_name() );
$hero_subtitle = dp_field( 'npreg_hero_subtitle', 'Sign up for free prescription management, repeat ordering and home delivery. We handle everything — you just fill in the form below.' );

$trust_pills = array(
    array( 'icon' => 'fas fa-circle-check',  'text' => dp_field( 'npreg_trust_1', 'Free Service' ) ),
    array( 'icon' => 'fas fa-bolt',          'text' => dp_field( 'npreg_trust_2', 'Same-Day Dispensing' ) ),
    array( 'icon' => 'fas fa-truck-fast',    'text' => dp_field( 'npreg_trust_3', 'Free Local Delivery' ) ),
);

// --- What Happens Next ---
$next_title = dp_field( 'npreg_next_title', 'What Happens Next?' );
$next_steps = array(
    dp_field( 'npreg_next_step_1', 'We receive your registration and contact your GP to confirm the transfer.' ),
    dp_field( 'npreg_next_step_2', 'Your prescriptions are set up with ' . dp_pharmacy_name() . ' — no action needed from you.' ),
    dp_field( 'npreg_next_step_3', 'We text you when each prescription is ready to collect or out for delivery.' ),
);

$phone      = dp_phone();
$phone_link = dp_phone_link();

// --- Exemption options ---
$exemption_options = array(
    'pay'        => 'I pay for my prescriptions (£9.90 per item)',
    'A'          => 'A — Aged 60 or over / under 16',
    'B'          => 'B — Aged 16–18 in full-time education',
    'D'          => 'D — Maternity Exemption Certificate (MatEx)',
    'E'          => 'E — Medical Exemption Certificate (MedEx)',
    'F'          => 'F — Prescription Prepayment Certificate (PPC)',
    'W'          => 'W — HRT Prescription Prepayment Certificate',
    'G'          => 'G — Ministry of Defence exemption',
    'L'          => 'L — HC2 certificate (full help)',
    'H'          => 'H — Income Support or income-related ESA',
    'K'          => "K — Income-based Jobseeker's Allowance",
    'M'          => 'M — Tax Credit exemption certificate',
    'S'          => 'S — Pension Credit Guarantee Credit',
    'U'          => 'U — Universal Credit (meets criteria)',
);

$referral_options = array(
    'social'  => 'Social Media (Facebook / Instagram)',
    'leaflet' => 'Leaflet Drop',
    'wom'     => 'Word of Mouth',
    'other'   => 'Other',
);
?>

<!-- ============================================
     N1. HERO
     ============================================ -->
<section class="npreg-hero-section">
  <div class="npreg-hero-glow-1"></div>
  <div class="npreg-hero-glow-2"></div>

  <div class="section-container">
    <div class="npreg-hero-content">
      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
          <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
        </svg>
        <span class="section-badge-text"><?php echo esc_html( $hero_badge ); ?></span>
      </div>

      <h1 class="npreg-hero-title">
        <span class="gradient-text"><?php echo esc_html( $hero_title ); ?></span>
      </h1>

      <p class="npreg-hero-subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>

      <ul class="npreg-hero-trust">
        <?php foreach ( $trust_pills as $pill ) : ?>
          <li class="npreg-hero-trust-item">
            <i class="<?php echo esc_attr( dp_fa_class( $pill['icon'] ) ); ?>"></i>
            <span><?php echo esc_html( $pill['text'] ); ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<!-- ============================================
     N2. REGISTRATION FORM
     ============================================ -->
<section class="npreg-form-section">
  <div class="section-container">
    <div class="npreg-form-card">

      <form id="npreg-form" class="npreg-form" method="post" novalidate>
        <?php wp_nonce_field( 'dp_npreg_form_nonce', 'dp_npreg_nonce' ); ?>
        <input type="hidden" name="action" value="dp_npreg_form" />

        <!-- Honeypot (hidden from real users) -->
        <div class="npreg-honeypot" aria-hidden="true">
          <label for="npreg-website">Website</label>
          <input type="text" id="npreg-website" name="npreg_website" tabindex="-1" autocomplete="off" />
        </div>

        <!-- Personal Details -->
        <fieldset class="npreg-fieldset">
          <legend class="npreg-fieldset-legend">Personal Details</legend>

          <div class="npreg-grid-2">
            <div class="npreg-field">
              <label for="npreg-name">Full Name <span class="npreg-req" aria-hidden="true">*</span></label>
              <input type="text" id="npreg-name" name="npreg_name" required autocomplete="name" />
            </div>

            <div class="npreg-field">
              <label for="npreg-dob">Date of Birth <span class="npreg-req" aria-hidden="true">*</span></label>
              <input type="date" id="npreg-dob" name="npreg_dob" required autocomplete="bday" aria-describedby="npreg-dob-hint" />
              <span id="npreg-dob-hint" class="npreg-hint">DD/MM/YYYY</span>
            </div>

            <div class="npreg-field">
              <label for="npreg-phone">Phone Number <span class="npreg-req" aria-hidden="true">*</span></label>
              <input type="tel" id="npreg-phone" name="npreg_phone" required autocomplete="tel" inputmode="tel" />
            </div>

            <div class="npreg-field">
              <label for="npreg-email">Email Address <span class="npreg-req" aria-hidden="true">*</span></label>
              <input type="email" id="npreg-email" name="npreg_email" required autocomplete="email" />
            </div>

            <div class="npreg-field npreg-field-full">
              <label for="npreg-address">Home Address <span class="npreg-req" aria-hidden="true">*</span></label>
              <textarea id="npreg-address" name="npreg_address" rows="3" required autocomplete="street-address"></textarea>
            </div>

            <div class="npreg-field">
              <label for="npreg-postcode">Postcode <span class="npreg-req" aria-hidden="true">*</span></label>
              <input type="text" id="npreg-postcode" name="npreg_postcode" required autocomplete="postal-code" />
            </div>

            <div class="npreg-field">
              <label for="npreg-nhs-number">NHS Number <span class="npreg-req" aria-hidden="true">*</span></label>
              <input type="text" id="npreg-nhs-number" name="npreg_nhs_number" required inputmode="numeric" pattern="\d{10}" maxlength="10" aria-describedby="npreg-nhs-hint" />
              <span id="npreg-nhs-hint" class="npreg-hint">Your 10-digit NHS number can be found on any NHS letter or by calling 111.</span>
            </div>
          </div>
        </fieldset>

        <!-- GP Details -->
        <fieldset class="npreg-fieldset">
          <legend class="npreg-fieldset-legend">GP Details</legend>

          <div class="npreg-field">
            <label for="npreg-gp-practice">GP Practice Name <span class="npreg-req" aria-hidden="true">*</span></label>
            <input type="text" id="npreg-gp-practice" name="npreg_gp_practice" required />
          </div>
        </fieldset>

        <!-- Prescription Preferences -->
        <fieldset class="npreg-fieldset">
          <legend class="npreg-fieldset-legend">Prescription Preferences</legend>

          <div class="npreg-field">
            <label for="npreg-exemption">Do you pay for your prescriptions? <span class="npreg-req" aria-hidden="true">*</span></label>
            <div class="npreg-select-wrap">
              <select id="npreg-exemption" name="npreg_exemption" required>
                <option value="" disabled selected>— Please select an option —</option>
                <?php foreach ( $exemption_options as $key => $label ) : ?>
                  <option value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></option>
                <?php endforeach; ?>
              </select>
              <i class="fas fa-chevron-down npreg-select-chevron" aria-hidden="true"></i>
            </div>
          </div>

          <div class="npreg-field">
            <span class="npreg-radio-label">Prescription collection preference <span class="npreg-req" aria-hidden="true">*</span></span>
            <div class="npreg-radio-group">
              <label class="npreg-radio">
                <input type="radio" name="npreg_collection" value="collect" required />
                <span class="npreg-radio-marker"></span>
                <span class="npreg-radio-text">I will collect from the pharmacy</span>
              </label>
              <label class="npreg-radio">
                <input type="radio" name="npreg_collection" value="delivery" required />
                <span class="npreg-radio-marker"></span>
                <span class="npreg-radio-text">I would like home delivery</span>
              </label>
            </div>
          </div>

          <div class="npreg-field">
            <span class="npreg-radio-label">Who will order your prescriptions? <span class="npreg-req" aria-hidden="true">*</span></span>
            <div class="npreg-radio-group">
              <label class="npreg-radio">
                <input type="radio" name="npreg_order_management" value="self" required />
                <span class="npreg-radio-marker"></span>
                <span class="npreg-radio-text">I will order my own repeat prescriptions</span>
              </label>
              <label class="npreg-radio">
                <input type="radio" name="npreg_order_management" value="pharmacy" required />
                <span class="npreg-radio-marker"></span>
                <span class="npreg-radio-text">I would like the pharmacy to manage my repeats</span>
              </label>
            </div>
          </div>

          <div class="npreg-field">
            <label for="npreg-medication">What medication do you need? <span class="npreg-req" aria-hidden="true">*</span></label>
            <textarea id="npreg-medication" name="npreg_medication" rows="4" required placeholder="Please list all your regular medications"></textarea>
          </div>
        </fieldset>

        <!-- Consent -->
        <fieldset class="npreg-fieldset">
          <legend class="npreg-fieldset-legend">Consent</legend>

          <label class="npreg-checkbox">
            <input type="checkbox" id="npreg-scr-consent" name="npreg_scr_consent" value="1" required />
            <span class="npreg-checkbox-marker"></span>
            <span class="npreg-checkbox-text">
              I give consent for <?php echo esc_html( dp_pharmacy_name() ); ?> to access my Summary Care Record (GP record) to confirm my medication if required.
              <span class="npreg-req" aria-hidden="true">*</span>
            </span>
          </label>
        </fieldset>

        <!-- Optional -->
        <fieldset class="npreg-fieldset">
          <legend class="npreg-fieldset-legend">Additional Information <span class="npreg-fieldset-optional">(optional)</span></legend>

          <div class="npreg-field">
            <label for="npreg-referral">How did you hear about us?</label>
            <div class="npreg-select-wrap">
              <select id="npreg-referral" name="npreg_referral">
                <option value="">— Please select —</option>
                <?php foreach ( $referral_options as $key => $label ) : ?>
                  <option value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></option>
                <?php endforeach; ?>
              </select>
              <i class="fas fa-chevron-down npreg-select-chevron" aria-hidden="true"></i>
            </div>
          </div>

          <div class="npreg-field">
            <label for="npreg-comments">Any other comments</label>
            <textarea id="npreg-comments" name="npreg_comments" rows="3" placeholder="Anything else you'd like us to know"></textarea>
          </div>
        </fieldset>

        <div class="npreg-submit-row">
          <button type="submit" class="cta-button primary-cta npreg-submit-btn">
            <span class="npreg-submit-label">Register Now</span>
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>

        <div id="npreg-error" class="npreg-error" role="alert" hidden></div>
      </form>

      <div id="npreg-success" class="npreg-success" role="status" hidden>
        <div class="npreg-success-icon"><i class="fas fa-circle-check"></i></div>
        <h2 class="npreg-success-title">Thank you for registering with <?php echo esc_html( dp_pharmacy_name() ); ?>.</h2>
        <p class="npreg-success-text">We will be in touch within 1 working day to confirm your registration.</p>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     N3. WHAT HAPPENS NEXT
     ============================================ -->
<section class="npreg-next-section">
  <div class="section-container">
    <div class="npreg-next-header">
      <h2 class="npreg-next-title"><?php echo esc_html( $next_title ); ?></h2>
    </div>

    <ol class="npreg-next-steps">
      <?php foreach ( $next_steps as $i => $step ) : ?>
        <li class="npreg-next-step">
          <span class="npreg-next-step-number"><?php echo (int) ( $i + 1 ); ?></span>
          <p class="npreg-next-step-text"><?php echo esc_html( $step ); ?></p>
        </li>
      <?php endforeach; ?>
    </ol>

    <?php if ( $phone_link ) : ?>
    <div class="npreg-questions-cta">
      <span class="npreg-questions-cta-label"><?php echo esc_html( dp_field( 'npreg_questions_cta', 'Questions?' ) ); ?></span>
      <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button primary-cta">
        <i class="fas fa-phone"></i>
        Call us on <?php echo esc_html( $phone ); ?>
      </a>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php
get_footer();
