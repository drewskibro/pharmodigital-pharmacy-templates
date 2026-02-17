<?php
/**
 * Template Name: Book Appointment
 * @package Easy_Pharmacy
 */

get_header();
?>

<div class="booking-calendar-wrapper">
  <?php echo do_shortcode('[ameliabooking]'); ?>
</div>

<?php
get_footer();
