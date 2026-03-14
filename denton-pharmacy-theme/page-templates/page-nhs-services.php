<?php
/**
 * Template Name: NHS Services
 *
 * 5 sections: Hero, Stats, NHS Services Grid, How It Works, Location.
 * Uses shared globals.css classes and reusable template parts — no page-specific CSS.
 *
 * @package Denton_Pharmacy
 */

get_header();

// --- Hero fields ---
$hero_badge       = dp_field( 'nhs_hero_badge', 'NHS PHARMACY SERVICES' );
$hero_title       = dp_field( 'nhs_hero_title', 'Your Local NHS' );
$hero_highlight   = dp_field( 'nhs_hero_highlight', 'Community Pharmacy' );
$hero_description = dp_field( 'nhs_hero_description', 'Free NHS services for eligible patients right here in Denton. Prescriptions, Pharmacy First consultations, flu jabs, and more — all from your trusted local pharmacy.' );
$hero_cta_text    = dp_field( 'nhs_hero_cta_text', 'Book Appointment' );
$hero_cta_url     = dp_field( 'nhs_hero_cta_url', dp_booking_url() );
$phone            = dp_phone();
$phone_link       = dp_phone_link();

// --- Stats fields ---
$default_stats = array(
    array( 'icon' => 'fas fa-file-prescription', 'number' => '5,000+', 'label' => 'Prescriptions Monthly' ),
    array( 'icon' => 'fas fa-user-doctor',       'number' => 'GPhC',   'label' => 'Registered Pharmacists' ),
    array( 'icon' => 'fas fa-clock',             'number' => '6 Days', 'label' => 'Open Per Week' ),
    array( 'icon' => 'fas fa-heart',             'number' => 'Free',   'label' => 'NHS Services' ),
);

$stats = array();
for ( $i = 1; $i <= 4; $i++ ) {
    $stats[] = array(
        'icon'   => dp_fa_class( dp_field( 'nhs_stat_' . $i . '_icon', $default_stats[ $i - 1 ]['icon'] ) ),
        'number' => dp_field( 'nhs_stat_' . $i . '_number', $default_stats[ $i - 1 ]['number'] ),
        'label'  => dp_field( 'nhs_stat_' . $i . '_label', $default_stats[ $i - 1 ]['label'] ),
    );
}
?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-bg-shape-1"></div>
  <div class="hero-bg-shape-2"></div>

  <div class="section-container">
    <div class="hero-grid">

      <div class="hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html( $hero_badge ); ?></span>
        </div>

        <h1 class="hero-title">
          <?php echo esc_html( $hero_title ); ?> <br />
          <span class="gradient-text"><?php echo esc_html( $hero_highlight ); ?></span>
        </h1>

        <p class="hero-description"><?php echo esc_html( $hero_description ); ?></p>

        <div class="hero-actions">
          <a href="<?php echo esc_url( $hero_cta_url ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( $hero_cta_text ); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html( 'Call ' . $phone ); ?>
          </a>
        </div>

        <ul class="trust-indicators">
          <li class="trust-item"><i class="fas fa-shield-halved"></i><span>GPhC Registered</span></li>
          <li class="trust-item trust-divider"><span class="dot-separator"></span></li>
          <li class="trust-item"><i class="fas fa-check-circle"></i><span>Free NHS Services</span></li>
          <li class="trust-item trust-divider"><span class="dot-separator"></span></li>
          <li class="trust-item"><i class="fas fa-heart"></i><span>Serving Denton 15+ Years</span></li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="stats-section">
  <div class="section-container">
    <div class="stats-bar">
      <div class="stats-shimmer"></div>
      <?php foreach ( $stats as $index => $stat ) : ?>
        <div class="stat-item">
          <div class="stat-icon"><i class="<?php echo esc_attr( $stat['icon'] ); ?>"></i></div>
          <div class="stat-content">
            <span class="stat-number"><?php echo esc_html( $stat['number'] ); ?></span>
            <span class="stat-label"><?php echo esc_html( $stat['label'] ); ?></span>
          </div>
        </div>
        <?php if ( $index < count( $stats ) - 1 ) : ?>
          <div class="stat-divider"></div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php // 3. NHS Services Grid (shared template part — B3 fields) ?>
<?php get_template_part( 'template-parts/section', 'nhs-services' ); ?>

<?php // 4. How It Works (shared template part — B6 fields) ?>
<?php get_template_part( 'template-parts/section', 'how-it-works' ); ?>

<?php // 5. Location (shared template part — B11 fields) ?>
<?php get_template_part( 'template-parts/section', 'location' ); ?>

<?php
get_footer();
