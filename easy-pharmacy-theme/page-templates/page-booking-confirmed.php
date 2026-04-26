<?php
/**
 * Template Name: Booking Confirmed
 *
 * Confirmation landing page shown after a successful Amelia booking.
 * Linked to from Amelia's "Default redirect URL after appointment is booked".
 *
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- ============================================
     HERO — CONFIRMATION
     ============================================ -->
<section class="confirmed-hero-section">
  <div class="section-container">
    <div class="confirmed-hero-inner">

      <div class="confirmed-tick" aria-hidden="true">
        <i class="fas fa-circle-check"></i>
      </div>

      <div class="section-badge confirmed-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text">BOOKING CONFIRMED</span>
      </div>

      <h1 class="confirmed-hero-title">
        Your booking is <span class="gradient-text">confirmed</span>
      </h1>

      <p class="confirmed-hero-subtitle">
        Thanks for booking with The Easy Clinic. We&rsquo;ll see you soon.
      </p>

    </div>
  </div>
</section>

<!-- ============================================
     WHAT HAPPENS NEXT
     ============================================ -->
<section class="confirmed-next-section">
  <div class="section-container">

    <h2 class="confirmed-next-heading">What happens next</h2>

    <ol class="confirmed-next-list">

      <li class="confirmed-next-item">
        <div class="confirmed-next-icon">
          <i class="fas fa-envelope-open-text"></i>
        </div>
        <div class="confirmed-next-content">
          <h3 class="confirmed-next-title">Check your email</h3>
          <p class="confirmed-next-text">
            A confirmation with all your appointment details has been sent.
          </p>
        </div>
      </li>

      <li class="confirmed-next-item">
        <div class="confirmed-next-icon">
          <i class="fas fa-calendar-plus"></i>
        </div>
        <div class="confirmed-next-content">
          <h3 class="confirmed-next-title">Add it to your calendar</h3>
          <p class="confirmed-next-text">
            The email includes a calendar invite so you don&rsquo;t miss it.
          </p>
        </div>
      </li>

      <li class="confirmed-next-item">
        <div class="confirmed-next-icon">
          <i class="fas fa-clock"></i>
        </div>
        <div class="confirmed-next-content">
          <h3 class="confirmed-next-title">Arrive 5 minutes early</h3>
          <p class="confirmed-next-text">
            Our address and contact details are in the email.
          </p>
        </div>
      </li>

    </ol>
  </div>
</section>

<!-- ============================================
     REASSURANCE + PHONE
     ============================================ -->
<section class="confirmed-reassure-section">
  <div class="section-container">
    <div class="confirmed-reassure-card">

      <p class="confirmed-reassure-text">
        Need to change or cancel? Just reply to your confirmation email or call us.
      </p>

      <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="confirmed-phone-link">
        <span class="confirmed-phone-icon" aria-hidden="true">
          <i class="fas fa-phone"></i>
        </span>
        <span class="confirmed-phone-number"><?php echo esc_html( ep_phone() ); ?></span>
      </a>

    </div>
  </div>
</section>

<!-- ============================================
     SUBTLE RETURN HOME
     ============================================ -->
<div class="confirmed-return">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="confirmed-return-link">
    &larr; Return to home
  </a>
</div>

<?php
get_footer();
