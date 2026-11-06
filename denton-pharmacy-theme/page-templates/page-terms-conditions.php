<?php
/**
 * Template Name: Terms & Conditions
 * @package Denton_Pharmacy
 */

get_header();

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

<section class="legal-hero">
  <div class="legal-hero-inner">
    <span class="legal-badge"><i class="fas fa-file-contract"></i> Legal</span>
    <h1>Terms and Conditions</h1>
    <p class="legal-hero-updated">Last updated: <?php echo esc_html( $last_updated ); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="legal-content">

    <p>These terms cover our website and appointments you book with us.</p>

    <h2>1. Who we are</h2>
    <p><?php echo esc_html( $pharmacy_name ); ?>, <?php echo esc_html( $full_address ); ?>, is a registered pharmacy (GPhC <?php echo esc_html( $gphc ); ?>), run by AT Health Ltd, company number 14519140, registered in England and Wales. Registered office: Wilmslow Pharmacy, Unit 2 Summerfields Village Centre, Dean Row Road, Wilmslow SK9 2TA. VAT number GB 429880260. Our Superintendent Pharmacist is Ahmed Nizar Al-Liabi (GPhC 2208502). You can check our registration at <a href="https://www.pharmacyregulation.org" target="_blank" rel="noopener noreferrer">pharmacyregulation.org</a>. Contact us on <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a> or <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>.</p>

    <h2>2. Information on this website</h2>
    <p>Our website gives general information about our pharmacy and services. It is not medical advice. In an emergency, call 999. For urgent advice, call NHS 111.</p>

    <h2 id="appointments">3. Appointments and bookings</h2>
    <p>You can book online through our booking calendar, provided by Acuity Scheduling. For private services, you pay after your appointment, at the pharmacy, for the service you receive. Nothing is paid in advance. NHS services are free, apart from any NHS prescription charge for medicines you take away, unless you are exempt. You pay the price on our <a href="<?php echo esc_url( home_url( '/prices/' ) ); ?>">Prices page</a>. If it has changed since you booked, we will tell you before your appointment starts, and you can cancel free.</p>
    <p>Booking does not guarantee a treatment or vaccination. Our pharmacist checks at the appointment that it is suitable for you. If it is not, we explain why and talk through other options.</p>
    <p>You can cancel or move your appointment at any time before it starts, using the link in your confirmation email, by calling <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>, by emailing <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a> or by telling us in the pharmacy. There is no charge for cancelling or moving. Please tell us as early as you can, so we can offer the time to someone else.</p>

    <h2>4. Medicines</h2>
    <p>We cannot take back medicines once they have left the pharmacy, except where the law requires (for example a dispensing error or a recall). Our <a href="<?php echo esc_url( home_url( '/returns-policy/' ) ); ?>">returns policy</a> covers other items bought in the pharmacy.</p>

    <h2 id="complaints">5. Complaints</h2>
    <p>If you are unhappy with our service, please tell us first, on <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>, by email to <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a> or in the pharmacy. Complaints about NHS services can go to the local NHS commissioner instead, NHS Greater Manchester Integrated Care Board (phone 0161 271 3980 or email <a href="mailto:nhsgm.patientservices@nhs.net">nhsgm.patientservices@nhs.net</a>). If you are not happy with the final answer to an NHS complaint, you can ask the <a href="https://www.ombudsman.org.uk" target="_blank" rel="noopener noreferrer">Parliamentary and Health Service Ombudsman</a> to look at it. Concerns about professional standards can go to the <a href="https://www.pharmacyregulation.org" target="_blank" rel="noopener noreferrer">General Pharmaceutical Council</a>.</p>

    <h2>6. Liability and law</h2>
    <p>Nothing in these terms limits our liability for death or personal injury caused by our negligence, or anything else the law does not let us limit. These terms are governed by the law of England and Wales. Your legal rights are not affected. For how we handle your information, see our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">privacy policy</a> and <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>">cookie policy</a>.</p>

  </div>
</section>

<?php get_footer(); ?>
