<?php
/**
 * Template Name: Terms & Conditions
 * @package Bowland_Pharmacy
 */

get_header();

$pharmacy_name = bp_pharmacy_name();
$phone         = bp_phone();
$phone_link    = bp_phone_link();
$email         = bp_option( 'pharmacy_email', 'info@bowlandpharmacy.co.uk' );
$gphc          = bp_option( 'gphc_registration', '1089163' );
$addr_line_1   = bp_option( 'pharmacy_address_line_1', '52 Bowland Road' );
$addr_line_2   = bp_option( 'pharmacy_address_line_2', 'Wythenshawe, Manchester' );
$addr_line_3   = bp_option( 'pharmacy_address_line_3', 'M23 1JX' );
$full_address  = trim( $addr_line_1 . ', ' . $addr_line_2 . ' ' . $addr_line_3 );
$last_updated  = 'July 2026';
?>

<section class="legal-hero">
  <div class="legal-hero-inner">
    <span class="legal-badge"><i class="fas fa-file-contract"></i> Legal</span>
    <h1>Terms &amp; Conditions</h1>
    <p class="legal-hero-updated">Last updated: <?php echo esc_html( $last_updated ); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="legal-content">

    <h2>Introduction</h2>
    <p>These Terms and Conditions govern your use of the <?php echo esc_html( $pharmacy_name ); ?> website. By accessing or using this website, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, please do not use our website.</p>

    <h2>About Us</h2>
    <p><?php echo esc_html( $pharmacy_name ); ?> is an independent community pharmacy providing NHS and private healthcare services. We are registered with the General Pharmaceutical Council (GPhC registration number <?php echo esc_html( $gphc ); ?>) and our registered pharmacy address is <?php echo esc_html( $full_address ); ?>.</p>

    <h2>Use of Our Website</h2>
    <p>You agree to use our website only for lawful purposes and in a way that does not infringe the rights of, restrict or inhibit anyone else's use of the website. You must not misuse our website by knowingly introducing viruses or other malicious material, or by attempting to gain unauthorised access to our website, the server on which it is stored, or any server, computer or database connected to it.</p>

    <h2>No Medical Advice</h2>
    <p>The information provided on our website is for general information purposes only and is not intended to be a substitute for professional medical advice, diagnosis or treatment. You should always seek the advice of your pharmacist, GP or other qualified healthcare professional with any questions you may have regarding a medical condition or treatment.</p>
    <p>Never disregard professional medical advice, or delay seeking it, because of something you have read on our website. If you think you may have a medical emergency, call 999 or contact NHS 111 immediately.</p>

    <h2>Services and Bookings</h2>
    <p>Where you book an appointment or request a service through our website, you agree to provide accurate and complete information. Bookings are subject to availability and to our acceptance. We reserve the right to decline or cancel a booking where clinically appropriate or where required by law or professional guidance. All healthcare services are provided in accordance with GPhC standards and relevant regulations.</p>

    <h2>Intellectual Property</h2>
    <p>All content on this website, including text, graphics, logos, images and design, is the property of <?php echo esc_html( $pharmacy_name ); ?> or its licensors and is protected by copyright and other intellectual property laws. You may view and print content for your own personal, non-commercial use, but you must not reproduce, distribute or otherwise use any content without our prior written permission.</p>

    <h2>Third-Party Links</h2>
    <p>Our website may contain links to external websites operated by third parties. These links are provided for your convenience only. We have no control over the content of those websites and accept no responsibility for them or for any loss or damage that may arise from your use of them.</p>

    <h2>Limitation of Liability</h2>
    <p>While we take reasonable care to ensure that the information on our website is accurate and up to date, we make no warranties or representations, express or implied, as to its accuracy, completeness or fitness for a particular purpose. To the fullest extent permitted by law, we exclude all liability for any loss or damage arising from your use of, or inability to use, our website.</p>
    <p>Nothing in these Terms and Conditions excludes or limits our liability for death or personal injury caused by our negligence, for fraud, or for any other liability that cannot be excluded or limited under applicable law.</p>

    <h2>Privacy</h2>
    <p>Your use of our website is also governed by our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a> and <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>">Cookie Policy</a>, which explain how we collect, use and protect your personal information.</p>

    <h2>Changes to These Terms</h2>
    <p>We may update these Terms and Conditions from time to time to reflect changes in our services, or for legal or regulatory reasons. Any updates will be published on this page together with the revised "Last Updated" date. Your continued use of our website after any changes indicates your acceptance of the updated terms.</p>

    <h2>Governing Law</h2>
    <p>These Terms and Conditions are governed by and construed in accordance with the laws of England and Wales, and any disputes will be subject to the exclusive jurisdiction of the courts of England and Wales.</p>

    <div class="legal-contact-card">
      <h2>Contact Us</h2>
      <p>If you have any questions about these Terms and Conditions, you may contact us at <?php echo esc_html( $pharmacy_name ); ?>, <?php echo esc_html( $full_address ); ?>, call us on <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>, or email us at <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>.</p>
    </div>

  </div>
</section>

<?php get_footer(); ?>
