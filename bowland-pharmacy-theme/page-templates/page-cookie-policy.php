<?php
/**
 * Template Name: Cookie Policy
 * @package Bowland_Pharmacy
 */

get_header();

$pharmacy_name = bp_pharmacy_name();
$phone         = bp_phone();
$phone_link    = bp_phone_link();
$email         = bp_option( 'pharmacy_email', 'info@bowlandpharmacy.co.uk' );
$addr_line_1   = bp_option( 'pharmacy_address_line_1', '52 Bowland Road' );
$addr_line_2   = bp_option( 'pharmacy_address_line_2', 'Wythenshawe, Manchester' );
$addr_line_3   = bp_option( 'pharmacy_address_line_3', 'M23 1JX' );
$full_address  = trim( $addr_line_1 . ', ' . $addr_line_2 . ' ' . $addr_line_3 );
$last_updated  = 'July 2026';
?>

<section class="legal-hero">
  <div class="legal-hero-inner">
    <span class="legal-badge"><i class="fas fa-cookie-bite"></i> Legal</span>
    <h1>Cookie Policy</h1>
    <p class="legal-hero-updated">Last updated: <?php echo esc_html( $last_updated ); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="legal-content">

    <h2>Introduction</h2>
    <p>This Cookie Policy explains how <?php echo esc_html( $pharmacy_name ); ?> ("we", "our" or "us") uses cookies and similar technologies on our website. It should be read alongside our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>, which explains how we handle your personal information.</p>
    <p>By continuing to use our website, you agree to the use of cookies as described in this policy. You can manage or withdraw your consent at any time through your browser settings, as explained below.</p>

    <h2>What Are Cookies?</h2>
    <p>Cookies are small text files that are placed on your device (computer, tablet or smartphone) when you visit a website. They are widely used to make websites work, to improve their performance and usability, and to provide information to the website owner.</p>
    <p>Cookies may be "session" cookies, which are deleted when you close your browser, or "persistent" cookies, which remain on your device until they expire or you delete them. Similar technologies such as pixels, tags and local storage may also be used, and are covered by this policy.</p>

    <h2>How We Use Cookies</h2>
    <p>We use the following categories of cookies on our website:</p>
    <h3>Strictly Necessary Cookies</h3>
    <p>These cookies are essential for the website to function correctly. They enable core features such as page navigation, security and access to secure areas of the site. The website cannot function properly without these cookies, and they cannot be switched off in our systems.</p>
    <h3>Performance &amp; Analytics Cookies</h3>
    <p>These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously — for example, which pages are visited most often and whether visitors encounter any errors. This helps us improve how our website works. We use:</p>
    <ul>
      <li><strong>Google Analytics</strong> — to measure and analyse website traffic and usage.</li>
      <li><strong>Microsoft Clarity</strong> — to understand how visitors use and navigate our website.</li>
    </ul>
    <h3>Functional Cookies</h3>
    <p>These cookies allow the website to remember choices you make (such as your preferences) to provide enhanced, more personal features. The information these cookies collect may be anonymised, and they cannot track your browsing activity on other websites.</p>

    <h2>Third-Party Cookies</h2>
    <p>Some cookies are placed by third-party services that appear on our pages, such as our analytics providers and our online booking and patient registration system. We do not control the setting of these cookies, so we recommend you review the relevant third party's own cookie and privacy policies for more information.</p>

    <h2>Managing Cookies</h2>
    <p>You can control and manage cookies in various ways. Most web browsers allow you to refuse or accept cookies, delete existing cookies, and set preferences for certain websites. Please note that if you disable or delete cookies, some parts of our website may not function correctly.</p>
    <p>Guidance on managing cookies in the most popular browsers is available here:</p>
    <ul>
      <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
      <li><a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
      <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Apple Safari</a></li>
      <li><a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
    </ul>
    <p>You can also find general information about cookies and how to manage them at <a href="https://www.aboutcookies.org" target="_blank" rel="noopener noreferrer">aboutcookies.org</a>.</p>

    <h2>Changes to this Cookie Policy</h2>
    <p>We may update this Cookie Policy from time to time to reflect changes in the cookies we use or for other operational, legal or regulatory reasons. Any updates will be published on this page together with the revised "Last Updated" date.</p>

    <div class="legal-contact-card">
      <h2>Contact Us</h2>
      <p>If you have any questions about this Cookie Policy, you may contact us at <?php echo esc_html( $pharmacy_name ); ?>, <?php echo esc_html( $full_address ); ?>, call us on <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>, or email us at <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>.</p>
    </div>

  </div>
</section>

<?php get_footer(); ?>
