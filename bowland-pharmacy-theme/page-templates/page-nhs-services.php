<?php
/**
 * Template Name: NHS Services
 *
 * 5 sections: Hero, Stats, NHS Services Grid, How It Works, Location.
 * Page-specific CSS: nhs-services.css (hero badge, image card, visual column).
 *
 * @package Bowland_Pharmacy
 */

get_header();

// --- Hero fields ---

// Badge fields
$badge_icon     = bp_field( 'nhs_hero_badge_icon', 'fas fa-notes-medical' );
$badge_title    = bp_field( 'nhs_hero_badge_title', 'NHS Community Pharmacy' );
$badge_subtitle = bp_field( 'nhs_hero_badge_subtitle', 'Free Services for Eligible Patients' );

// Title fields (3 lines)
$hero_title_line1 = bp_field( 'nhs_hero_title', 'Your NHS' );
$hero_title_line2 = bp_field( 'nhs_hero_title_accent', 'Pharmacy' );
$hero_title_line3 = bp_field( 'nhs_hero_title_line3', 'in Wythenshawe' );

$hero_description = bp_field( 'nhs_hero_description', 'Free NHS services for eligible patients right here in Wythenshawe. Prescriptions, Pharmacy First consultations, flu jabs, and more — all from your trusted local pharmacy.' );
$hero_cta_text    = bp_field( 'nhs_hero_cta_text', 'View NHS Services' );
$hero_cta_url     = bp_field( 'nhs_hero_cta_url', bp_booking_url() );
$phone            = bp_phone();
$phone_link       = bp_phone_link();

// Hero image
$hero_image_id = bp_field( 'nhs_hero_image' );
if ( ! $hero_image_id ) {
    $hero_image_id = bp_option( 'pharmacist_image' );
}
$hero_image_url = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'large' ) : '';

// Image caption
$hero_caption_label = bp_field( 'nhs_hero_caption_label', 'NHS Services' );
$hero_caption_title = bp_field( 'nhs_hero_caption_title', 'Free for Eligible Patients' );

// Trust indicators
$trust_1_icon = bp_field( 'nhs_hero_trust_1_icon', 'fas fa-check-circle' );
$trust_1_text = bp_field( 'nhs_hero_trust_1_text', 'NHS Approved' );
$trust_2_icon = bp_field( 'nhs_hero_trust_2_icon', 'fas fa-shield-halved' );
$trust_2_text = bp_field( 'nhs_hero_trust_2_text', 'GPhC Registered' );
$trust_3_icon = bp_field( 'nhs_hero_trust_3_icon', 'fas fa-star' );
$trust_3_text = bp_field( 'nhs_hero_trust_3_text', '4.7★ Rated' );

// Rating badge
$rating_score    = bp_field( 'nhs_hero_rating_score' );
if ( ! $rating_score ) { $rating_score = bp_option( 'google_rating', '4.7' ); }
$rating_count    = bp_field( 'nhs_hero_rating_count', '89' );
$rating_location = bp_field( 'nhs_hero_rating_location' );
if ( ! $rating_location ) { $rating_location = bp_option( 'pharmacy_location_label', 'Wythenshawe, UK' ); }

// --- Stats fields ---
$default_stats = array(
    array( 'icon' => 'fas fa-prescription', 'number' => '10,000+',  'label' => 'NHS Prescriptions' ),
    array( 'icon' => 'fas fa-user-nurse',   'number' => 'Free',     'label' => 'Pharmacy First' ),
    array( 'icon' => 'fas fa-syringe',      'number' => '1,500+',   'label' => 'Flu Vaccinations' ),
    array( 'icon' => 'fas fa-truck-fast',   'number' => 'Free',     'label' => 'Home Delivery' ),
    array( 'icon' => 'fas fa-clock',        'number' => 'Same Day', 'label' => 'Collection' ),
);

$stats = array();
for ( $i = 1; $i <= 5; $i++ ) {
    $stats[] = array(
        'icon'   => bp_fa_class( bp_field( 'nhs_stat_' . $i . '_icon', $default_stats[ $i - 1 ]['icon'] ) ),
        'number' => bp_field( 'nhs_stat_' . $i . '_number', $default_stats[ $i - 1 ]['number'] ),
        'label'  => bp_field( 'nhs_stat_' . $i . '_label', $default_stats[ $i - 1 ]['label'] ),
    );
}
?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-bg-shape-1"></div>
  <div class="hero-bg-shape-2"></div>

  <div class="section-container">
    <div class="hero-grid">

      <!-- LEFT: Content Column -->
      <div class="hero-content">

        <!-- NHS Local Badge -->
        <div class="nhs-hero-local-badge">
          <div class="nhs-hero-local-badge-icon">
            <i class="<?php echo esc_attr( bp_fa_class( $badge_icon ) ); ?>"></i>
          </div>
          <div class="nhs-hero-local-badge-content">
            <span class="nhs-hero-local-badge-title"><?php echo esc_html( $badge_title ); ?></span>
            <span class="nhs-hero-local-badge-subtitle"><?php echo esc_html( $badge_subtitle ); ?></span>
          </div>
        </div>

        <!-- Headline (3 lines) -->
        <h1 class="hero-title">
          <span class="gradient-text"><?php echo esc_html( $hero_title_line1 ); ?></span>
          <span class="nhs-hero-accent-text"><?php echo esc_html( $hero_title_line2 ); ?></span>
          <span class="gradient-text"><?php echo esc_html( $hero_title_line3 ); ?></span>
        </h1>

        <p class="hero-description"><?php echo esc_html( $hero_description ); ?></p>

        <div class="hero-actions">
          <a href="<?php echo esc_url( $hero_cta_url ); ?>" class="cta-button primary-cta">
            <?php echo esc_html( $hero_cta_text ); ?>
          </a>
          <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone icon-small"></i>
            <?php echo esc_html( 'Call ' . $phone ); ?>
          </a>
        </div>

        <ul class="trust-indicators">
          <li class="trust-item"><i class="<?php echo esc_attr( bp_fa_class( $trust_1_icon ) ); ?>"></i><span><?php echo esc_html( $trust_1_text ); ?></span></li>
          <li class="trust-item trust-divider"><span class="dot-separator"></span></li>
          <li class="trust-item"><i class="<?php echo esc_attr( bp_fa_class( $trust_2_icon ) ); ?>"></i><span><?php echo esc_html( $trust_2_text ); ?></span></li>
          <li class="trust-item trust-divider"><span class="dot-separator"></span></li>
          <li class="trust-item"><i class="<?php echo esc_attr( bp_fa_class( $trust_3_icon ) ); ?>"></i><span><?php echo esc_html( $trust_3_text ); ?></span></li>
        </ul>
      </div>

      <!-- RIGHT: Visual Column -->
      <?php if ( $hero_image_url ) : ?>
      <div class="nhs-hero-visual">
        <div class="nhs-hero-visual-glow"></div>
        <div class="nhs-hero-image-card">
          <img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( $hero_caption_label ); ?>">
          <div class="nhs-hero-overlay"></div>
          <div class="nhs-hero-image-caption">
            <span class="nhs-hero-caption-label"><?php echo esc_html( $hero_caption_label ); ?></span>
            <h3 class="nhs-hero-caption-title"><?php echo esc_html( $hero_caption_title ); ?></h3>
          </div>
        </div>

        <!-- Rating Badge -->
        <div class="rating-badge">
          <div class="rating-header">
            <div class="rating-label">
              <div class="google-icon-wrapper"><i class="fab fa-google"></i></div>
              <span>Google</span>
            </div>
            <div class="badge-success"><i class="fas fa-check"></i><span>Verified</span></div>
          </div>
          <div class="rating-score">
            <span class="score-number"><?php echo esc_html( $rating_score ); ?></span>
            <div class="rating-score-detail">
              <div class="star-row">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <span class="rating-count">Based on <?php echo esc_html( $rating_count ); ?> reviews+</span>
            </div>
          </div>
          <div class="rating-footer">
            <div class="rating-location"><i class="fas fa-map-marker-alt"></i><span><?php echo esc_html( $rating_location ); ?></span></div>
            <a href="#" class="rating-link">View Reviews</a>
          </div>
        </div>
      </div>
      <?php endif; ?>

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
