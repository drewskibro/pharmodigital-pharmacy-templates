<?php
/**
 * Template Name: Privacy Policy
 * @package Denton_Pharmacy
 */

get_header();

// --- Contact details (pull from Pharmacy Settings, fall back to defaults) ---
$pharmacy_name = dp_pharmacy_name();
$phone         = dp_phone();
$phone_link    = dp_phone_link();
$email         = dp_option( 'pharmacy_email', 'info@dentonpharmacy.co.uk' );
$gphc          = dp_option( 'gphc_registration', '1033447' );
$addr_line_1   = dp_option( 'pharmacy_address_line_1', '14 Ashton Road' );
$addr_line_2   = dp_option( 'pharmacy_address_line_2', 'Denton, Manchester' );
$addr_line_3   = dp_option( 'pharmacy_address_line_3', 'M34 3EX' );
$full_address  = trim( $addr_line_1 . ', ' . $addr_line_2 . ' ' . $addr_line_3 );
$last_updated  = 'November 2026';
?>

<!-- ============================================
     HERO
     ============================================ -->
<section class="legal-hero">
  <div class="legal-hero-inner">
    <span class="legal-badge"><i class="fas fa-shield-halved"></i> Legal</span>
    <h1>Privacy Policy</h1>
    <p class="legal-hero-updated">Last updated: <?php echo esc_html( $last_updated ); ?></p>
  </div>
</section>

<!-- ============================================
     BODY
     ============================================ -->
<section class="legal-body">
  <div class="legal-content">

    <h2>Who we are</h2>
    <p><?php echo esc_html( $pharmacy_name ); ?> is a community pharmacy at <?php echo esc_html( $full_address ); ?>, registered with the General Pharmaceutical Council (GPhC) as pharmacy <?php echo esc_html( $gphc ); ?>. It is run by AT Health Ltd, company number 14519140, registered in England and Wales. Registered office: Wilmslow Pharmacy, Unit 2 Summerfields Village Centre, Dean Row Road, Wilmslow SK9 2TA. AT Health Ltd decides how your information is used (it is the "controller") and is registered with the Information Commission (the ICO) as ZB558618. Our privacy lead is Ahmed Nizar Al-Liabi, the Superintendent Pharmacist: email <a href="mailto:info@at-health.co.uk">info@at-health.co.uk</a>, or contact the pharmacy on <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a> or <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>.</p>

    <h2>In the pharmacy</h2>
    <p>To care for you safely we keep records of the medicines we supply, advice we give, services we provide (such as vaccinations) and notes about your health. We share them with your GP and others in the NHS when your care needs it, and with the NHS Business Services Authority and NHS England so that we are paid correctly and meet NHS standards. With your permission, our pharmacists may look at your NHS Summary Care Record to support your care. You can opt out of the NHS using your data for planning and research at <a href="https://www.nhs.uk/your-nhs-data-matters/" target="_blank" rel="noopener noreferrer">nhs.uk/your-nhs-data-matters</a>.</p>
    <p>We use Deltera (Deltera HealthTech Ltd) to run our private clinical services. When you fill in a health questionnaire or have a private consultation, your answers and record are stored on Deltera's system, on UK servers. Only authorised staff can see them. AT Health Ltd remains responsible for your information.</p>

    <h2>Booking an appointment online</h2>
    <p>Our booking calendar is provided by Acuity Scheduling (part of Squarespace). When you book, you give Acuity your name, email address, phone number, the appointment you want and any answers on its form. We use them to arrange your appointment, remind you of it and contact you about it. Only authorised AT Health staff can see them. Our booking calendar is shared with MNC Travel Clinic, AT Health Ltd's travel clinic, so booking pages and emails may show that name. Acuity keeps booking records until we delete them; we review them every 12 months and delete those we no longer need.</p>

    <h2 id="nhs-registration-form">Registering for NHS prescriptions</h2>
    <p>Our NHS registration form asks for your name, date of birth, phone number, email address, home address, NHS number (optional), GP practice, whether you pay for prescriptions, how you want to collect them, and whether you agree to us looking at your Summary Care Record. You can also tell us how you heard about us and anything else you want us to know. We use these details to register you with us, set us as your nominated pharmacy on the NHS system so prescriptions from your GP practice come to us, and contact you about your prescriptions, including a text when a prescription is ready.</p>
    <p>Your answers are kept in a private record on our website that only people we authorise can see. We do not email them: our pharmacy team receives only a note that a registration is waiting. The website copy is deleted automatically 14 days after you send it. Once you are registered, your details become part of your pharmacy record, kept as long as NHS rules require.</p>

    <h2>Contact form</h2>
    <p>If you use our contact form, we use your name, contact details and message only to reply to you. Your message is sent to our pharmacy team's email inbox; we do not keep a copy on the website. We keep messages for 12 months, then delete them.</p>

    <h2>Website statistics</h2>
    <p>We use Google Analytics (directly and through Google Tag Manager) and Microsoft Clarity only if you choose "Accept analytics" on our cookie banner. Google Analytics counts visits, clicks and bookings. Clarity records how visitors move, click and scroll on our pages, so we can see where the website is hard to use. Clarity never runs on our NHS registration, NHS prescriptions or contact pages. Clarity is set to hide the text you type. We rely on your consent. You can change your choice at any time with Cookie settings at the foot of every page. We do not use these tools for advertising.</p>

    <h2>Maps and images</h2>
    <p>Some of our pages, including our home, contact and NHS services pages, show a map from Google Maps, and many of our vaccination and travel pages show photographs from Unsplash. When these load, Google and Unsplash receive your device's internet address. We do not send them anything else.</p>

    <h2>AI Website Assistant</h2>
    <p>We switched this assistant off in November 2026. While it is off, it collects nothing. The rest of this section explains how it worked, because some limited records it made before then are kept for up to 30 days.</p>
    <p>AT Health Ltd, company number 14519140, is the data controller for the AI assistant operated on this website. Ahmed Nizar Al-Liabi is the privacy contact and can be reached at <a href="mailto:info@at-health.co.uk">info@at-health.co.uk</a>.</p>
    <p>The optional assistant provides general information about opening hours, locations, services, prices, booking routes and travel health. It is not a healthcare professional, cannot access pharmacy records or bookings, and must not be used for diagnosis, personalised medical advice, medicine-suitability decisions or emergencies.</p>
    <p>Please do not enter your name, contact details, date of birth, NHS number, medical history, symptoms or medicines. Common direct identifiers are automatically removed before a question is sent through Supabase to Anthropic's Claude API. Clinical or emergency wording is redirected to an appropriate human or NHS route. Automated safeguards cannot identify every possible disclosure.</p>
    <p>For the normal assistant service, AT Health Ltd does not store the question or reply. It stores limited operational information for up to 30 days, including the website used, a random browser-session identifier, source page path without its query string, broad topic, controlled search-intent label, response outcome, prompt source, evidence version, feedback and selected booking or contact clicks. A separate secret-keyed network representation used only to prevent abuse is deleted after two days. Test traffic is excluded from content insights.</p>
    <p>AT Health Ltd relies on its legitimate interests to provide, secure and improve the normal assistant and website using this minimised operational information. Detailed search-intent and destination labels are disclosed in improvement reports only after at least five distinct anonymous sessions share the same label. No chatbot information is used for advertising or joined to patient, booking or NHS records.</p>
    <p>Visitors may separately choose to let AT Health Ltd retain an already-redacted question and reply for answer-quality review. The choice is optional: visitors are asked once when the assistant opens, nothing is retained unless they answer yes, and the answer can be changed at any time from the assistant window. Where the conversation reveals health information, this processing relies on the visitor's explicit consent. Declining does not affect the normal assistant. Consented content is encrypted, restricted to authorised reviewers and automatically deleted after 30 days. Emergency and clinical-handoff conversations are never retained for QA.</p>
    <p>An opted-in visitor receives an immediate deletion control and a private reference. The reference can be quoted when contacting <a href="mailto:info@at-health.co.uk">info@at-health.co.uk</a> so AT Health Ltd can locate and delete the stored conversation before its expiry. Withdrawal does not affect processing that occurred before withdrawal. Anonymous aggregate statistics that can no longer be linked to the conversation are not affected.</p>
    <p>Supabase provides database and Edge Function infrastructure. Anthropic processes the redacted text to generate the answer. Under Anthropic's standard commercial API terms, API inputs and outputs may be retained for up to 30 days for safety and service operation and are not used to train its models unless the customer explicitly opts in. AT Health Ltd does not authorise supplier training using these conversations.</p>
    <p>Visitors may avoid AI processing by closing the assistant and contacting the pharmacy directly. Your data protection rights, and how to complain to us or to the Information Commission (the ICO), are described elsewhere in this policy.</p>

    <h2>Companies that help us</h2>
    <p>Kinsta hosts our website, with Cloudflare protecting it from attacks. Gildhart (PharmoDigital Ltd) builds and manages the website. Acuity Scheduling (Squarespace) provides online booking. Google and Microsoft provide website statistics if you accept them. Microsoft 365 provides our email. Unsplash provides some of our photographs. Each acts only on our instructions. Some are based in the United States. Where your details go outside the UK, each uses a safeguard allowed by UK law. Squarespace (Acuity) relies on the UK-US data bridge (the UK Extension to the EU-US Data Privacy Framework), and on the UK Addendum to the standard contractual clauses where the data bridge does not apply. Google relies on the UK-US data bridge in some cases and otherwise on standard contractual clauses approved for UK transfers. Ask us for a copy of any safeguard.</p>

    <h2>Why we are allowed to use your information</h2>
    <ul>
      <li>NHS services: to carry out a task in the public interest, providing NHS care (UK GDPR Article 6(1)(e)).</li>
      <li>Private services and appointments: to carry out our agreement with you (Article 6(1)(b)).</li>
      <li>Health information, for NHS and private care: the condition for health or social care (Article 9(2)(h), with Data Protection Act 2018 Schedule 1 paragraph 2). Everyone who sees it has a duty of confidentiality.</li>
      <li>Records the law makes us keep: to meet a legal obligation (Article 6(1)(c)).</li>
      <li>Website statistics: your consent (Article 6(1)(a)).</li>
      <li>Replying to messages and keeping our website secure: our legitimate interests in running the pharmacy (Article 6(1)(f)).</li>
    </ul>

    <h2>How long we keep information</h2>
    <p>Pharmacy records: as long as NHS rules require. Bookings: reviewed every 12 months. NHS registration forms: the website copy is deleted automatically after 14 days, and the email telling us a form is waiting is deleted once we have dealt with it, within 30 days. Contact messages: 12 months. Website statistics: Google Analytics keeps them for up to 14 months. Clarity keeps recordings for 30 days, and a small sample for up to 9 months.</p>
    <p>For the normal AI assistant service, questions and replies are not stored by AT Health Ltd. Limited operational statistics are deleted after 30 days and secret-keyed network abuse-prevention identifiers after two days. If a visitor gives separate explicit consent, the already-redacted question and reply are retained for no more than 30 days unless the visitor uses the private deletion reference or withdraws consent sooner. Anthropic's standard API retention is described above.</p>

    <h2>Your rights</h2>
    <p>You have the right to:</p>
    <ul>
      <li>ask for a copy of the information we hold about you;</li>
      <li>ask us to correct information that is wrong or incomplete;</li>
      <li>ask us to delete information, where the law allows (we must keep NHS pharmacy records for as long as NHS rules require);</li>
      <li>ask us to limit how we use your information;</li>
      <li>object to how we use your information, and stop marketing at any time;</li>
      <li>ask for information you gave us to be sent to you or to another organisation in a common digital format, where the law allows;</li>
      <li>withdraw your consent at any time, where we rely on it. This does not affect anything we did before you withdrew it.</li>
    </ul>
    <p>To use any of these rights, contact us using the details above. We will reply within one month.</p>

    <div class="legal-contact-card">
      <h2>Complaining to us first</h2>
      <p>If you are unhappy with how we have used your information, please tell us first at <a href="mailto:info@at-health.co.uk">info@at-health.co.uk</a>, on <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a> or in the pharmacy. We will acknowledge your complaint within 30 days and tell you the outcome. You can also complain to the Information Commission (the ICO) at any time, at <a href="https://ico.org.uk" target="_blank" rel="noopener noreferrer">ico.org.uk</a>.</p>
    </div>

  </div>
</section>

<?php get_footer(); ?>
