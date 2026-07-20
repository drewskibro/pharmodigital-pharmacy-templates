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
$addr_line_1   = dp_option( 'pharmacy_address_line_1', '14-16 Ashton Road' );
$addr_line_2   = dp_option( 'pharmacy_address_line_2', 'Denton, Manchester' );
$addr_line_3   = dp_option( 'pharmacy_address_line_3', 'M34 3EX' );
$full_address  = trim( $addr_line_1 . ', ' . $addr_line_2 . ' ' . $addr_line_3 );
$last_updated  = 'July 2026';
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

    <h2>Introduction</h2>
    <p><?php echo esc_html( $pharmacy_name ); ?> ("we", "our" or "us") is committed to protecting your privacy and handling your personal information responsibly, securely and transparently.</p>
    <p>This Privacy Policy explains how we collect, use, store and protect your personal information when you visit our website, make an enquiry, book a service or otherwise interact with us online.</p>
    <p>By using this website and providing your personal information, you consent to the collection, use and processing of your information as described in this Privacy Policy, including being contacted about your enquiry, booking and, where you have given your consent, other healthcare services, clinics, promotions and health initiatives that may be relevant to you. You may withdraw your consent to marketing communications at any time.</p>

    <h2>Who We Are</h2>
    <p><?php echo esc_html( $pharmacy_name ); ?> is an independent community pharmacy providing NHS and private healthcare services in Denton and across Manchester.</p>
    <p>We are registered with the General Pharmaceutical Council (GPhC registration number <?php echo esc_html( $gphc ); ?>) and our registered pharmacy address is <?php echo esc_html( $full_address ); ?>.</p>
    <p>As the Data Controller, we are responsible for ensuring that your personal information is processed in accordance with the UK General Data Protection Regulation (UK GDPR) and the Data Protection Act 2018.</p>

    <h2>Information We Collect</h2>
    <p><strong>Personal Information</strong> — We may collect personal information that you voluntarily provide, including:</p>
    <ul>
      <li>Name</li>
      <li>Email address</li>
      <li>Telephone number</li>
      <li>Appointment or booking details</li>
      <li>Information submitted through contact forms</li>
      <li>Information relating to services you request</li>
    </ul>
    <p><strong>Technical Information</strong> — When you visit our website, we may automatically collect certain information, including:</p>
    <ul>
      <li>IP address</li>
      <li>Browser type and version</li>
      <li>Device information</li>
      <li>Operating system</li>
      <li>Pages visited</li>
      <li>Date and time of access</li>
      <li>Website usage data</li>
    </ul>
    <p>This information helps us improve the performance, security and usability of our website.</p>

    <h2>How We Use Your Information</h2>
    <p>We may use your personal information to:</p>
    <ul>
      <li>Respond to enquiries and requests</li>
      <li>Manage appointments and bookings</li>
      <li>Deliver NHS and private healthcare services</li>
      <li>Communicate important information relating to your booking or enquiry</li>
      <li>Inform you about additional healthcare services, clinics, vaccinations, promotions and health campaigns where you have consented to receive such communications</li>
      <li>Improve our website and services</li>
      <li>Monitor website performance and security</li>
      <li>Prevent fraud and protect against unlawful activity</li>
      <li>Comply with legal and regulatory obligations</li>
    </ul>

    <h2>Legal Basis for Processing</h2>
    <p>We process your personal information on one or more of the following lawful bases:</p>
    <ul>
      <li>Your consent</li>
      <li>Performance of a contract</li>
      <li>Compliance with legal obligations</li>
      <li>Our legitimate interests in providing and improving our services</li>
    </ul>
    <p>Where healthcare or special category personal data is processed, we do so only where permitted under applicable data protection legislation.</p>

    <h2>Sharing Your Information</h2>
    <p>We do not sell, rent or trade your personal information.</p>
    <p>We may share your information with carefully selected third-party organisations that assist us in providing healthcare services, operating our website and maintaining our systems. All such providers are required to process personal information securely, confidentially and in accordance with applicable data protection laws.</p>
    <p>The third parties we currently work with include:</p>
    <ul>
      <li>Deltera — online booking and patient registration system</li>
      <li>Kinsta — website hosting (<a href="https://kinsta.com" target="_blank" rel="noopener noreferrer">kinsta.com</a>)</li>
      <li>Gildhart — digital marketing, website design and management (<a href="https://gildhart.com/" target="_blank" rel="noopener noreferrer">gildhart.com</a>)</li>
      <li>Website analytics provider(s) — Google Analytics / Microsoft Clarity</li>
    </ul>
    <p>We may also disclose personal information where required by law or where necessary to protect the rights, property, safety or security of <?php echo esc_html( $pharmacy_name ); ?>, our patients, staff or the wider public.</p>

    <h2>Cookies</h2>
    <p>Our website uses cookies and similar technologies to enhance your browsing experience, understand how visitors use our website and improve our services.</p>
    <p>You can manage or disable cookies through your browser settings. Further information is available in our <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>">Cookie Policy</a>.</p>

    <h2>Data Security</h2>
    <p>We implement appropriate technical, organisational and physical safeguards designed to protect your personal information against accidental loss, unauthorised access, misuse, alteration or disclosure.</p>
    <p>While we take reasonable steps to protect your information, no method of internet transmission or electronic storage is completely secure.</p>

    <h2>Data Retention</h2>
    <p>We retain personal information only for as long as necessary to fulfil the purposes for which it was collected or to comply with legal, regulatory and professional obligations.</p>

    <h2>Your Rights</h2>
    <p>Under UK GDPR, you have the right to:</p>
    <ul>
      <li>Request access to the personal information we hold about you.</li>
      <li>Request correction of inaccurate or incomplete personal information.</li>
      <li>Request deletion of your personal information where applicable.</li>
      <li>Restrict or object to certain types of processing.</li>
      <li>Withdraw your consent at any time where processing is based on consent, including your consent to receive information about future healthcare services, promotions and health campaigns.</li>
    </ul>
    <p>You also have the right to lodge a complaint with the Information Commissioner's Office (ICO) at <a href="https://ico.org.uk" target="_blank" rel="noopener noreferrer">ico.org.uk</a>.</p>

    <h2>Third-Party Websites</h2>
    <p>Our website may contain links to external websites. We are not responsible for the privacy practices or content of those websites and encourage you to review their own privacy policies before providing personal information.</p>

    <h2>Changes to this Privacy Policy</h2>
    <p>We may update this Privacy Policy from time to time to reflect changes in legislation, technology or our services. Any updates will be published on this page together with the revised "Last Updated" date.</p>

    <div class="legal-contact-card">
      <h2>Contact Us</h2>
      <p>If you have any questions about this Privacy Policy or wish to exercise your data protection rights, you may contact us at <?php echo esc_html( $pharmacy_name ); ?>, <?php echo esc_html( $full_address ); ?>, call us on <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>, or email us at <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>.</p>
      <p>We are committed to handling your personal information responsibly and addressing any privacy-related queries promptly.</p>
    </div>

  </div>
</section>

<?php get_footer(); ?>
