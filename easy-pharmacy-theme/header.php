<?php
/**
 * Theme Header
 *
 * Menu items are driven by ACF options (Pharmacy Settings > Navigation).
 * When no ACF values are saved, every link falls back to the original
 * hardcoded slug so the theme works identically out of the box.
 *
 * @package Easy_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$pharmacy_name = ep_pharmacy_name();
$logo_url      = ep_logo_url();
$phone         = ep_phone();
$phone_link    = ep_phone_link();
$booking_url   = ep_booking_url();

// ---------------------------------------------------------------------------
// Helper: resolve a nav page-link option field, falling back to a slug.
// ACF page_link fields return a full URL when set; when empty we build one.
// ---------------------------------------------------------------------------
if ( ! function_exists( 'ep_nav_url' ) ) {
    function ep_nav_url( $field_name, $fallback_slug ) {
        $url = ep_option( $field_name );
        return $url ? $url : home_url( $fallback_slug );
    }
}

// ---------------------------------------------------------------------------
// Top-level menu item values (label, URL, visibility).
// ---------------------------------------------------------------------------
$nav_wl_show  = ep_option( 'nav_weight_loss_show', '1' );
$nav_wl_label = ep_option( 'nav_weight_loss_label', 'Weight Loss' );
$nav_wl_url   = ep_nav_url( 'nav_weight_loss_url', '/weight-loss/' );

$nav_th_show  = ep_option( 'nav_travel_health_show', '1' );
$nav_th_label = ep_option( 'nav_travel_health_label', 'Travel Health' );
$nav_th_url   = ep_nav_url( 'nav_travel_health_url', '/travel-health/' );

$nav_ew_show  = ep_option( 'nav_ear_wax_show', '1' );
$nav_ew_label = ep_option( 'nav_ear_wax_label', 'Ear Wax Removal' );
$nav_ew_url   = ep_nav_url( 'nav_ear_wax_url', '/ear-wax-removal/' );

$nav_hl_show  = ep_option( 'nav_hair_loss_show', '1' );
$nav_hl_label = ep_option( 'nav_hair_loss_label', 'Hair Loss' );
$nav_hl_url   = ep_nav_url( 'nav_hair_loss_url', '/hair-loss/' );

$nav_hh_show  = ep_option( 'nav_health_hub_show', '1' );
$nav_hh_label = ep_option( 'nav_health_hub_label', 'Health Hub' );
$nav_hh_url   = ep_nav_url( 'nav_health_hub_url', '/health-hub/' );

$nav_ab_show  = ep_option( 'nav_about_show', '1' );
$nav_ab_label = ep_option( 'nav_about_label', 'About' );
$nav_ab_url   = ep_nav_url( 'nav_about_url', '/team/' );

// ---------------------------------------------------------------------------
// Dropdown sub-links — repeater rows or hardcoded defaults.
// ---------------------------------------------------------------------------
$wl_treatments = ep_option( 'nav_dd_wl_treatments' );
$wl_support    = ep_option( 'nav_dd_wl_support' );
$th_vaccines   = ep_option( 'nav_dd_th_vaccinations' );
$th_malaria    = ep_option( 'nav_dd_th_malaria' );
$th_resources  = ep_option( 'nav_dd_th_resources' );
$th_dests      = ep_option( 'nav_dd_th_destinations' );
$ew_services   = ep_option( 'nav_dd_ew_services' );
$ew_info       = ep_option( 'nav_dd_ew_info' );
$hl_treatments = ep_option( 'nav_dd_hl_treatments' );
$hl_support    = ep_option( 'nav_dd_hl_support' );

// Defaults — used when repeaters are empty (i.e. nothing saved in ACF yet).
$default_wl_treatments = array(
    array( 'label' => 'Wegovy (Semaglutide)',  'icon' => 'fas fa-syringe', 'url' => '' ),
    array( 'label' => 'Mounjaro (Tirzepatide)', 'icon' => 'fas fa-syringe', 'url' => '' ),
    array( 'label' => 'Saxenda (Liraglutide)',  'icon' => 'fas fa-syringe', 'url' => '' ),
    array( 'label' => 'Orlistat',               'icon' => 'fas fa-pills',   'url' => '' ),
);
$default_wl_support = array(
    array( 'label' => 'How It Works',    'icon' => 'fas fa-circle-info',            'url' => '' ),
    array( 'label' => 'Switch Provider', 'icon' => 'fas fa-arrow-right-arrow-left', 'url' => home_url( '/switch-provider/' ) ),
    array( 'label' => 'Pricing',         'icon' => 'fas fa-tag',                    'url' => '' ),
    array( 'label' => 'Patient Results', 'icon' => 'fas fa-chart-line',             'url' => '' ),
    array( 'label' => 'FAQs',            'icon' => 'fas fa-question-circle',        'url' => '' ),
);
$default_th_vaccines = array(
    array( 'label' => 'Yellow Fever',          'icon' => 'fas fa-shield-virus', 'url' => home_url( '/yellow-fever/' ) ),
    array( 'label' => 'Typhoid',               'icon' => 'fas fa-syringe',      'url' => home_url( '/typhoid/' ) ),
    array( 'label' => 'Hepatitis A &amp; B',   'icon' => 'fas fa-syringe',      'url' => home_url( '/hepatitis/' ) ),
    array( 'label' => 'Rabies',                'icon' => 'fas fa-syringe',      'url' => home_url( '/rabies/' ) ),
    array( 'label' => 'Cholera',               'icon' => 'fas fa-syringe',      'url' => home_url( '/cholera/' ) ),
    array( 'label' => 'Japanese Encephalitis', 'icon' => 'fas fa-syringe',      'url' => home_url( '/japanese-encephalitis/' ) ),
);
$default_th_malaria = array(
    array( 'label' => 'Malarone',       'icon' => 'fas fa-pills',       'url' => home_url( '/malarone/' ) ),
    array( 'label' => 'Doxycycline',    'icon' => 'fas fa-pills',       'url' => home_url( '/doxycycline/' ) ),
    array( 'label' => 'Malaria Advice', 'icon' => 'fas fa-circle-info', 'url' => home_url( '/malaria-advice/' ) ),
);
$default_th_resources = array(
    array( 'label' => 'Travel Checklist', 'icon' => 'fas fa-clipboard-check', 'url' => home_url( '/travel-checklist/' ) ),
    array( 'label' => 'Book Appointment', 'icon' => 'fas fa-calendar-check',  'url' => $booking_url ),
);
$default_th_dests = array(
    array( 'name' => 'Thailand',   'flag_url' => 'https://flagcdn.com/w40/th.png', 'url' => home_url( '/travel-thailand/' ) ),
    array( 'name' => 'India',      'flag_url' => 'https://flagcdn.com/w40/in.png', 'url' => home_url( '/travel-india/' ) ),
    array( 'name' => 'Cape Verde', 'flag_url' => 'https://flagcdn.com/w40/cv.png', 'url' => home_url( '/travel-cape-verde/' ) ),
    array( 'name' => 'Kenya',      'flag_url' => 'https://flagcdn.com/w40/ke.png', 'url' => home_url( '/travel-kenya/' ) ),
    array( 'name' => 'Brazil',     'flag_url' => 'https://flagcdn.com/w40/br.png', 'url' => home_url( '/travel-brazil/' ) ),
    array( 'name' => 'Vietnam',    'flag_url' => 'https://flagcdn.com/w40/vn.png', 'url' => home_url( '/travel-vietnam/' ) ),
);
$default_ew_services = array(
    array( 'label' => 'Microsuction',     'icon' => 'fas fa-stethoscope',      'url' => '' ),
    array( 'label' => 'Ear Irrigation',   'icon' => 'fas fa-droplet',          'url' => '' ),
    array( 'label' => 'Ear Health Check', 'icon' => 'fas fa-magnifying-glass', 'url' => '' ),
);
$default_ew_info = array(
    array( 'label' => 'Symptoms', 'icon' => 'fas fa-circle-info',    'url' => '' ),
    array( 'label' => 'Pricing',  'icon' => 'fas fa-tag',            'url' => '' ),
    array( 'label' => 'Book Now', 'icon' => 'fas fa-calendar-check', 'url' => '' ),
);
$default_hl_treatments = array(
    array( 'label' => 'Finasteride',          'icon' => 'fas fa-pills',       'url' => '' ),
    array( 'label' => 'Minoxidil',            'icon' => 'fas fa-spray-can',   'url' => '' ),
    array( 'label' => 'Combination Therapy',  'icon' => 'fas fa-layer-group', 'url' => '' ),
);
$default_hl_support = array(
    array( 'label' => 'Free Consultation', 'icon' => 'fas fa-user-doctor',     'url' => '' ),
    array( 'label' => 'Results',           'icon' => 'fas fa-chart-line',      'url' => '' ),
    array( 'label' => 'FAQs',             'icon' => 'fas fa-question-circle', 'url' => '' ),
);

// Use ACF rows when available, otherwise defaults.
if ( ! is_array( $wl_treatments ) || empty( $wl_treatments ) ) { $wl_treatments = $default_wl_treatments; }
if ( ! is_array( $wl_support )    || empty( $wl_support ) )    { $wl_support    = $default_wl_support; }
if ( ! is_array( $th_vaccines )   || empty( $th_vaccines ) )   { $th_vaccines   = $default_th_vaccines; }
if ( ! is_array( $th_malaria )    || empty( $th_malaria ) )    { $th_malaria    = $default_th_malaria; }
if ( ! is_array( $th_resources )  || empty( $th_resources ) )  { $th_resources  = $default_th_resources; }
if ( ! is_array( $th_dests )      || empty( $th_dests ) )      { $th_dests      = $default_th_dests; }
if ( ! is_array( $ew_services )   || empty( $ew_services ) )   { $ew_services   = $default_ew_services; }
if ( ! is_array( $ew_info )       || empty( $ew_info ) )       { $ew_info       = $default_ew_info; }
if ( ! is_array( $hl_treatments ) || empty( $hl_treatments ) ) { $hl_treatments = $default_hl_treatments; }
if ( ! is_array( $hl_support )    || empty( $hl_support ) )    { $hl_support    = $default_hl_support; }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ============================================
       NAVIGATION
       ============================================ -->
  <nav class="mega-menu-nav">
    <div class="mega-menu-container">

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mega-menu-logo">
        <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $pharmacy_name ); ?>" class="logo-image" />
      </a>

      <ul class="mega-menu-list">

        <?php // ── Weight Loss ────────────────────────────────────────── ?>
        <?php if ( $nav_wl_show ) : ?>
        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="<?php echo esc_url( $nav_wl_url ); ?>" class="mega-menu-link">
            <span><?php echo esc_html( $nav_wl_label ); ?></span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Treatments</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $wl_treatments as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_wl_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Support</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $wl_support as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_wl_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <?php endif; ?>

        <?php // ── Travel Health ──────────────────────────────────────── ?>
        <?php if ( $nav_th_show ) : ?>
        <li class="mega-menu-item mega-menu-has-dropdown mega-menu-travel">
          <a href="<?php echo esc_url( $nav_th_url ); ?>" class="mega-menu-link">
            <span><?php echo esc_html( $nav_th_label ); ?></span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown mega-menu-dropdown-wide">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Vaccinations</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $th_vaccines as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_th_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Malaria Prevention</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $th_malaria as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_th_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
                <h3 class="mega-menu-section-title" style="margin-top: 1.5rem;">Resources</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $th_resources as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $booking_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="mega-menu-section mega-menu-destinations">
                <h3 class="mega-menu-section-title">Popular Destinations</h3>
                <ul class="mega-menu-destinations-grid">
                  <?php foreach ( $th_dests as $dest ) :
                    $href     = ! empty( $dest['url'] ) ? $dest['url'] : $nav_th_url;
                    $name     = ! empty( $dest['name'] ) ? $dest['name'] : '';
                    $flag_url = ! empty( $dest['flag_url'] ) ? $dest['flag_url'] : '';
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>" class="mega-menu-destination-card"><?php if ( $flag_url ) : ?><img src="<?php echo esc_url( $flag_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="mega-menu-flag"><?php endif; ?><span class="mega-menu-destination-name"><?php echo esc_html( $name ); ?></span></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <?php endif; ?>

        <?php // ── Ear Wax Removal ───────────────────────────────────── ?>
        <?php if ( $nav_ew_show ) : ?>
        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="<?php echo esc_url( $nav_ew_url ); ?>" class="mega-menu-link">
            <span><?php echo esc_html( $nav_ew_label ); ?></span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Services</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $ew_services as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_ew_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Information</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $ew_info as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_ew_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <?php endif; ?>

        <?php // ── Hair Loss ─────────────────────────────────────────── ?>
        <?php if ( $nav_hl_show ) : ?>
        <li class="mega-menu-item mega-menu-has-dropdown">
          <a href="<?php echo esc_url( $nav_hl_url ); ?>" class="mega-menu-link">
            <span><?php echo esc_html( $nav_hl_label ); ?></span>
            <i class="fas fa-chevron-down mega-menu-arrow"></i>
          </a>
          <div class="mega-menu-dropdown">
            <div class="mega-menu-dropdown-inner">
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Treatments</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $hl_treatments as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_hl_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="mega-menu-section">
                <h3 class="mega-menu-section-title">Support</h3>
                <ul class="mega-menu-section-links">
                  <?php foreach ( $hl_support as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_hl_url;
                  ?>
                  <li><a href="<?php echo esc_url( $href ); ?>"><i class="<?php echo esc_attr( $link['icon'] ); ?>"></i> <?php echo esc_html( $link['label'] ); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <?php endif; ?>

        <?php // ── Health Hub (no dropdown) ───────────────────────────── ?>
        <?php if ( $nav_hh_show ) : ?>
        <li class="mega-menu-item">
          <a href="<?php echo esc_url( $nav_hh_url ); ?>" class="mega-menu-link">
            <span><?php echo esc_html( $nav_hh_label ); ?></span>
          </a>
        </li>
        <?php endif; ?>

        <?php // ── About (no dropdown) ────────────────────────────────── ?>
        <?php if ( $nav_ab_show ) : ?>
        <li class="mega-menu-item">
          <a href="<?php echo esc_url( $nav_ab_url ); ?>" class="mega-menu-link">
            <span><?php echo esc_html( $nav_ab_label ); ?></span>
          </a>
        </li>
        <?php endif; ?>

        <!-- Mobile Only Actions -->
        <li class="mega-menu-item mobile-nav-actions">
          <a href="<?php echo esc_url( $booking_url ); ?>" class="cta-button primary-cta mobile-nav-btn">
            Book Appointment
          </a>
          <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta mobile-nav-btn">
            <i class="fas fa-phone"></i> Call <?php echo esc_html( $phone ); ?>
          </a>
        </li>
      </ul>

      <div class="mega-menu-cta">
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="mega-menu-cta-phone">
          <i class="fas fa-phone"></i>
          <span class="desktop-only"><?php echo esc_html( $phone ); ?></span>
        </a>
        <a href="<?php echo esc_url( $booking_url ); ?>" class="mega-menu-cta-book">
          Book Now
        </a>
      </div>

      <button class="mega-menu-mobile-toggle" onclick="toggleMobileMenu()" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </nav>
