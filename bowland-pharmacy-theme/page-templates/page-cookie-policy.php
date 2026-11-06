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
$last_updated  = 'November 2026';
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

    <h2>What this policy covers</h2>
    <p>Cookies are small files a website stores on your device. Similar tools, such as local storage and scripts that read details from your browser, are covered too. This policy should be read with our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">privacy policy</a>.</p>

    <h2>Your choice</h2>
    <p>When you first visit, we ask whether we may use analytics. Nothing that measures visitors runs until you choose "Accept analytics". "Essential only" is just as easy, and the website works the same either way. We keep your choice for six months, then ask again. You can change it at any time with Cookie settings at the foot of every page. If you change to Essential only, we remove the analytics cookies and reload the page.</p>

    <h2>Always on (no consent needed)</h2>
    <ul>
      <li><strong>bp_consent</strong>: remembers your cookie choice. Kept for six months.</li>
      <li><strong>__cf_bm</strong>: set by Cloudflare to protect our website from automated attacks. Kept for 30 minutes.</li>
      <li>WordPress sign-in cookies: only for our staff when they are signed in.</li>
    </ul>

    <h2>Only if you choose "Accept analytics"</h2>
    <ul>
      <li>Google Analytics, run by Google, loaded directly and through Google Tag Manager: counts visits, clicks and bookings, and roughly where visitors are and what device they use. Cookies _ga and _ga_ followed by a code, kept for up to 2 years. When you book, it records only that a booking was made and its reference number, never your name or email.</li>
      <li>Microsoft Clarity, run by Microsoft: records how visitors move, click and scroll on our pages, so we can see where the website is hard to use. Cookies _clck and _clsk, and Microsoft may set its own cookies. Clarity never runs on our NHS registration, NHS prescriptions or contact pages.</li>
    </ul>

    <h2>Content from other companies</h2>
    <ul>
      <li>Acuity Scheduling (Squarespace): our booking calendar. It loads inside our booking pages and may set its own cookies. See its own policies.</li>
      <li>Google Maps, run by Google: the map on some of our pages, including our home, contact and NHS services pages. It loads inside our pages and Google may set its own cookies. See its own policies.</li>
      <li>Unsplash: photographs on many of our vaccination and travel pages. It sets no cookies for us, but it receives your device's internet address.</li>
    </ul>

    <h2>Browser settings</h2>
    <p>You can also block or delete cookies in your browser. Blocking every cookie may stop the booking calendar working. Guidance is at <a href="https://www.aboutcookies.org" target="_blank" rel="noopener noreferrer">aboutcookies.org</a>.</p>

    <div class="legal-contact-card">
      <h2>Questions</h2>
      <p>Contact us at <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a> or <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>, or see our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">privacy policy</a>.</p>
    </div>

  </div>
</section>

<?php get_footer(); ?>
