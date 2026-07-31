<?php
/**
 * Template Name: Returns Policy
 * @package Bowland_Pharmacy
 */

get_header();

// --- Contact details (pull from Pharmacy Settings, fall back to defaults) ---
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

<!-- ============================================
     HERO
     ============================================ -->
<section class="legal-hero">
  <div class="legal-hero-inner">
    <span class="legal-badge"><i class="fas fa-rotate-left"></i> Legal</span>
    <h1>Returns Policy</h1>
    <p class="legal-hero-updated">Last updated: <?php echo esc_html( $last_updated ); ?></p>
  </div>
</section>

<!-- ============================================
     BODY
     ============================================ -->
<section class="legal-body">
  <div class="legal-content">

    <div class="legal-notice">
      <div class="legal-notice-heading">
        <i class="fas fa-triangle-exclamation"></i>
        <span>Important purchase notice</span>
      </div>
      <p>Please read this policy before purchasing any non-returnable items.</p>
    </div>

    <h2>Items We Cannot Accept Back</h2>
    <p>For safety, hygiene and patient protection reasons, the following items <strong>cannot be returned or exchanged</strong> once they have left the pharmacy premises &mdash; even if they are unopened or still sealed:</p>
    <ul>
      <li>Medicines &mdash; prescription, pharmacy (P) and over-the-counter</li>
      <li>Food and drink products</li>
      <li>Personal, intimate and female hygiene products</li>
      <li>Wearable or intimate items, such as supports, braces and compression garments</li>
    </ul>
    <p>Once these items leave our control we cannot guarantee how they have been handled or stored, so we are unable to confirm that the product is still safe to supply to anyone else.</p>

    <h2>Please Check Before You Buy</h2>
    <p>A moment's check at the counter avoids disappointment later. Before you purchase, please:</p>
    <ul>
      <li>Confirm the product, strength, size and that it is suitable for you</li>
      <li>Ask our team if you are unsure &mdash; we are always happy to help</li>
      <li>Note that items should not be bought with the intention of trying them and returning them</li>
    </ul>

    <h2>Change of Mind</h2>
    <p>For purchases made in the pharmacy, there is no automatic right to return goods simply because you have changed your mind.</p>

    <h2>Your Statutory Rights</h2>
    <p>This policy does not affect your statutory rights under the <strong>Consumer Rights Act 2015</strong>. If an item is faulty, not as described, or not fit for purpose, you may be entitled to a repair, replacement or refund in line with your legal rights and with medicines safety requirements.</p>
    <p>If you believe there is a problem with something you have bought from us, please bring it to our attention as soon as possible and speak to a member of the pharmacy team.</p>

    <h2>Acceptance of This Policy</h2>
    <p>By proceeding with your purchase, you confirm that you accept the terms of this Returns Policy.</p>

    <div class="legal-contact-card">
      <h2>Contact Us</h2>
      <p>If you have any questions about this Returns Policy, or about an item you have purchased, please contact us at <?php echo esc_html( $pharmacy_name ); ?>, <?php echo esc_html( $full_address ); ?>, call us on <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>, or email us at <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>.</p>
    </div>

  </div>
</section>

<?php get_footer(); ?>
