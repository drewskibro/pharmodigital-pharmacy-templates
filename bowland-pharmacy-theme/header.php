<?php
/**
 * Theme Header — Three-Tier Navigation
 *
 * Structure: trust bar + utility bar + menu bar.
 * Menu items are driven by ACF options (Pharmacy Settings > Navigation).
 * When no ACF values are saved, every link falls back to hardcoded defaults.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$pharmacy_name = bp_pharmacy_name();
$logo_url      = bp_logo_url();
$phone         = bp_phone();
$phone_link    = bp_phone_link();
$booking_url   = bp_booking_url();
$google_rating = bp_option( 'google_rating', '4.9' );
$google_count  = bp_option( 'google_review_count', '300+' );
$booking_text  = bp_option( 'booking_cta_text', 'Book Consultation' );
$trust_item_1  = bp_option( 'trust_bar_item_1', 'GPhC Registered' );
$trust_item_2  = bp_option( 'trust_bar_item_2', 'NHS Partner' );

// ---------------------------------------------------------------------------
// Helper: resolve a nav page-link option field, falling back to a slug.
// ACF page_link fields return a full URL when set; when empty we build one.
// ---------------------------------------------------------------------------
if ( ! function_exists( 'bp_nav_url' ) ) {
    function bp_nav_url( $field_name, $fallback_slug ) {
        $url = bp_option( $field_name );
        return $url ? $url : home_url( $fallback_slug );
    }
}

// ---------------------------------------------------------------------------
// Top-level menu item values (label, URL, visibility).
// ---------------------------------------------------------------------------
$nav_home_show  = bp_option( 'nav_home_show', '1' );
$nav_home_label = bp_option( 'nav_home_label', 'Home' );
$nav_home_url   = bp_nav_url( 'nav_home_url', '/' );

$nav_wl_show  = bp_option( 'nav_weight_loss_show', '1' );
$nav_wl_label = bp_option( 'nav_weight_loss_label', 'Weight Loss' );
$nav_wl_url   = bp_nav_url( 'nav_weight_loss_url', '/weight-loss/' );

$nav_th_show  = bp_option( 'nav_travel_health_show', '1' );
$nav_th_label = bp_option( 'nav_travel_health_label', 'Travel' );
$nav_th_url   = bp_nav_url( 'nav_travel_health_url', '/travel-health/' );

$nav_bt_show  = bp_option( 'nav_blood_testing_show', '1' );
$nav_bt_label = bp_option( 'nav_blood_testing_label', 'Blood Testing' );
$nav_bt_url   = bp_nav_url( 'nav_blood_testing_url', '/blood-testing/' );

$nav_ec_show  = bp_option( 'nav_ear_clinic_show', '1' );
$nav_ec_label = bp_option( 'nav_ear_clinic_label', 'Ear Clinic' );
$nav_ec_url   = bp_nav_url( 'nav_ear_clinic_url', '/ear-wax-removal/' );

$nav_sv_show  = bp_option( 'nav_services_show', '1' );
$nav_sv_label = bp_option( 'nav_services_label', 'NHS Services' );
$nav_sv_url   = bp_nav_url( 'nav_services_url', '/nhs-services/' );

$nav_ps_show  = bp_option( 'nav_private_services_show', '1' );
$nav_ps_label = bp_option( 'nav_private_services_label', 'Private Services' );
$nav_ps_url   = bp_nav_url( 'nav_private_services_url', '/weight-loss/' );

$nav_hh_show  = bp_option( 'nav_hub_show', '1' );
$nav_hh_label = bp_option( 'nav_hub_label', 'Hub' );
$nav_hh_url   = bp_nav_url( 'nav_hub_url', '/health-hub/' );

$nav_ct_show  = bp_option( 'nav_contact_show', '1' );
$nav_ct_label = bp_option( 'nav_contact_label', 'Contact' );
$nav_ct_url   = bp_nav_url( 'nav_contact_url', '/contact/' );

// ---------------------------------------------------------------------------
// Dropdown sub-links — repeater rows or hardcoded defaults.
// ---------------------------------------------------------------------------
$wl_links    = bp_option( 'nav_dd_wl_links' );
$th_services = bp_option( 'nav_dd_th_services' );
$th_dests    = bp_option( 'nav_dd_th_destinations' );
$sv_links    = bp_option( 'nav_dd_services_links' );
$ps_links    = bp_option( 'nav_dd_private_services_links' );

// Defaults — used when repeaters are empty (i.e. nothing saved in ACF yet).
$default_wl_links = array(
    array( 'label' => 'GLP-1 Treatments',  'description' => 'Prescription medications like Wegovy & Mounjaro', 'icon' => 'fas fa-check-circle', 'url' => '' ),
    array( 'label' => 'Personal Support',   'description' => 'Weekly check-ins with our expert pharmacist',     'icon' => 'fas fa-user',         'url' => '' ),
    array( 'label' => 'Free Consultation',  'description' => 'Book your no-obligation assessment today',        'icon' => 'fas fa-calendar',     'url' => $booking_url ),
);
$default_th_services = array(
    array( 'label' => 'All Vaccinations',    'description' => 'Hepatitis, Typhoid, Rabies, Japanese Encephalitis', 'icon' => 'fas fa-shield-virus',    'url' => '' ),
    array( 'label' => 'Yellow Fever Centre', 'description' => 'Official certificates for Africa & South America',  'icon' => 'fas fa-sun',             'url' => home_url( '/yellow-fever/' ) ),
    array( 'label' => 'Travel Advice',       'description' => 'Destination-specific health recommendations',        'icon' => 'fas fa-clipboard-check', 'url' => '' ),
);
$default_th_dests = array(
    array( 'name' => 'Thailand',   'flag_url' => 'https://flagcdn.com/w40/th.png', 'url' => home_url( '/travel-thailand/' ) ),
    array( 'name' => 'India',      'flag_url' => 'https://flagcdn.com/w40/in.png', 'url' => home_url( '/travel-india/' ) ),
    array( 'name' => 'Vietnam',    'flag_url' => 'https://flagcdn.com/w40/vn.png', 'url' => home_url( '/travel-vietnam/' ) ),
    array( 'name' => 'Kenya',      'flag_url' => 'https://flagcdn.com/w40/ke.png', 'url' => home_url( '/travel-kenya/' ) ),
    array( 'name' => 'Brazil',     'flag_url' => 'https://flagcdn.com/w40/br.png', 'url' => home_url( '/travel-brazil/' ) ),
    array( 'name' => 'Cape Verde', 'flag_url' => 'https://flagcdn.com/w40/cv.png', 'url' => home_url( '/travel-cape-verde/' ) ),
);
$default_sv_links = array(
    array( 'label' => 'NHS Prescriptions', 'description' => 'Free for eligible patients, fast delivery', 'icon' => 'fas fa-file-medical',         'url' => home_url( '/nhs-prescriptions/' ) ),
    array( 'label' => 'Pharmacy First',    'description' => '7 common conditions treated free',          'icon' => 'fas fa-hand-holding-medical', 'url' => home_url( '/pharmacy-first/' ) ),
    array( 'label' => 'Blister Packs',     'description' => 'Pre-packed medication made simple',         'icon' => 'fas fa-pills',                'url' => home_url( '/blister-packs/' ) ),
);
$default_ps_links = array(
    array( 'label' => 'Weight Loss',     'description' => 'GLP-1 treatments & clinical support',     'icon' => 'fas fa-weight-scale', 'url' => home_url( '/weight-loss/' ) ),
    array( 'label' => 'Travel Health',   'description' => 'Vaccinations & travel advice',            'icon' => 'fas fa-plane',        'url' => home_url( '/travel-health/' ) ),
    array( 'label' => 'Ear Wax Removal', 'description' => 'Professional microsuction clinic',         'icon' => 'fas fa-ear-listen',   'url' => home_url( '/ear-wax-removal/' ) ),
    array( 'label' => 'Hair Loss',       'description' => 'Treatments for male & female hair loss',   'icon' => 'fas fa-user-doctor',  'url' => home_url( '/hair-loss/' ) ),
    array( 'label' => 'Blood Testing',   'description' => 'Private health checks & diagnostic panels','icon' => 'fas fa-flask',        'url' => home_url( '/blood-testing/' ) ),
);

// Use ACF rows when available, otherwise defaults.
if ( ! is_array( $wl_links )    || empty( $wl_links ) )    { $wl_links    = $default_wl_links; }
if ( ! is_array( $th_services ) || empty( $th_services ) ) { $th_services = $default_th_services; }
if ( ! is_array( $th_dests )    || empty( $th_dests ) )    { $th_dests    = $default_th_dests; }
if ( ! is_array( $sv_links )    || empty( $sv_links ) )    { $sv_links    = $default_sv_links; }
if ( ! is_array( $ps_links )    || empty( $ps_links ) )    { $ps_links    = $default_ps_links; }
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
       DENTON PHARMACY THREE-TIER NAVIGATION
       ============================================ -->
  <nav class="bowland-nav">

    <!-- ── TIER 1: Trust Bar ── -->
    <div class="bowland-nav-trust-bar">
      <div class="denton-container">
        <div class="denton-trust-items">
          <div class="denton-trust-item">
            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <span><?php echo esc_html( $trust_item_1 ); ?></span>
          </div>
          <div class="denton-trust-divider"></div>
          <div class="denton-trust-item">
            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <span><?php echo esc_html( $trust_item_2 ); ?></span>
          </div>
          <div class="denton-trust-divider"></div>
          <div class="denton-trust-item denton-trust-item--rating">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
            <span><strong><?php echo esc_html( $google_rating ); ?></strong> Google Reviews</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ── TIER 2: Logo + Utility CTAs ── -->
    <div class="bowland-nav-top">
      <div class="denton-container">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="denton-logo">
          <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $pharmacy_name ); ?>" class="denton-logo-img" />
        </a>

        <!-- Desktop Top Actions -->
        <div class="denton-top-actions">
          <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="denton-top-link denton-top-link--phone">
            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <?php echo esc_html( $phone ); ?>
          </a>
          <a href="<?php echo esc_url( home_url( '/nhs-services/' ) ); ?>" class="denton-top-link denton-top-link--nhs">
            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            NHS Nominate
          </a>
          <a href="<?php echo esc_url( $booking_url ); ?>" class="denton-book-btn">
            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <?php echo esc_html( $booking_text ); ?>
          </a>
          <button class="denton-search-btn" id="denton-search-btn" aria-label="Search">
            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <span class="denton-search-btn-text">Search services&hellip;</span>
          </button>
        </div>

        <!-- Mobile Toggle -->
        <button class="denton-mobile-toggle" id="denton-mobile-btn" aria-label="Toggle menu" aria-expanded="false">
          <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
        </button>

      </div>
    </div>

    <!-- ── TIER 3: Bottom Nav Bar (Desktop Menu) ── -->
    <div class="bowland-nav-bottom">
      <div class="denton-container">
        <div class="denton-desktop-menu">

          <?php // ── Home (no dropdown) ────────────────────────────── ?>
          <?php if ( $nav_home_show ) : ?>
          <div class="denton-menu-item">
            <a href="<?php echo esc_url( $nav_home_url ); ?>" class="denton-menu-btn"><?php echo esc_html( $nav_home_label ); ?></a>
          </div>
          <?php endif; ?>

          <?php // ── Weight Loss (dropdown) ────────────────────────── ?>
          <?php if ( $nav_wl_show ) : ?>
          <div class="denton-menu-item">
            <button class="denton-menu-btn">
              <?php echo esc_html( $nav_wl_label ); ?>
              <svg class="arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </button>
            <div class="denton-dropdown">
              <div class="denton-dropdown-header">
                <h3>Medical Weight Loss</h3>
                <p>Evidence-based treatments that work</p>
              </div>
              <div class="denton-dropdown-content">
                <?php foreach ( $wl_links as $link ) :
                  $href = ! empty( $link['url'] ) ? $link['url'] : $nav_wl_url;
                  $icon = ! empty( $link['icon'] ) ? bp_fa_class( $link['icon'] ) : 'fas fa-check-circle';
                ?>
                <a href="<?php echo esc_url( $href ); ?>" class="denton-dropdown-link">
                  <div class="denton-link-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                  <div class="denton-link-text">
                    <h4><?php echo esc_html( $link['label'] ); ?></h4>
                    <?php if ( ! empty( $link['description'] ) ) : ?>
                    <p><?php echo esc_html( $link['description'] ); ?></p>
                    <?php endif; ?>
                  </div>
                </a>
                <?php endforeach; ?>
              </div>
              <div class="denton-dropdown-footer">
                <a href="<?php echo esc_url( $nav_wl_url ); ?>" class="denton-footer-link">
                  View all weight loss services
                  <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                </a>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <?php // ── Travel Health (wide dropdown) ─────────────────── ?>
          <?php if ( $nav_th_show ) : ?>
          <div class="denton-menu-item">
            <button class="denton-menu-btn">
              <?php echo esc_html( $nav_th_label ); ?>
              <svg class="arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </button>
            <div class="denton-dropdown wide">
              <div class="denton-dropdown-header teal">
                <h3>Travel Vaccinations</h3>
                <p>Official Yellow Fever Centre</p>
              </div>
              <div class="denton-dropdown-row">
                <div class="denton-dropdown-col">
                  <div class="denton-menu-section-title">Services</div>
                  <?php foreach ( $th_services as $link ) :
                    $href = ! empty( $link['url'] ) ? $link['url'] : $nav_th_url;
                    $icon = ! empty( $link['icon'] ) ? bp_fa_class( $link['icon'] ) : 'fas fa-syringe';
                  ?>
                  <a href="<?php echo esc_url( $href ); ?>" class="denton-dropdown-link">
                    <div class="denton-link-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                    <div class="denton-link-text">
                      <h4><?php echo esc_html( $link['label'] ); ?></h4>
                      <?php if ( ! empty( $link['description'] ) ) : ?>
                      <p><?php echo esc_html( $link['description'] ); ?></p>
                      <?php endif; ?>
                    </div>
                  </a>
                  <?php endforeach; ?>
                </div>
                <div class="denton-dropdown-col bg-gray">
                  <div class="denton-menu-section-title">Popular Destinations</div>
                  <div class="denton-destinations-grid">
                    <?php foreach ( $th_dests as $dest ) :
                      $href     = ! empty( $dest['url'] ) ? $dest['url'] : $nav_th_url;
                      $name     = ! empty( $dest['name'] ) ? $dest['name'] : '';
                      $flag_url = ! empty( $dest['flag_url'] ) ? $dest['flag_url'] : '';
                    ?>
                    <a href="<?php echo esc_url( $href ); ?>" class="denton-destination-link">
                      <?php if ( $flag_url ) : ?>
                      <img src="<?php echo esc_url( $flag_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="denton-destination-flag" loading="lazy">
                      <?php endif; ?>
                      <span><?php echo esc_html( $name ); ?></span>
                    </a>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
              <div class="denton-dropdown-footer">
                <a href="<?php echo esc_url( $nav_th_url ); ?>" class="denton-footer-link">
                  Explore all travel destinations
                  <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                </a>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <?php // ── Blood Testing (no dropdown) ───────────────────── ?>
          <?php if ( $nav_bt_show ) : ?>
          <div class="denton-menu-item">
            <a href="<?php echo esc_url( $nav_bt_url ); ?>" class="denton-menu-btn"><?php echo esc_html( $nav_bt_label ); ?></a>
          </div>
          <?php endif; ?>

          <?php // ── Ear Clinic (no dropdown) ──────────────────────── ?>
          <?php if ( $nav_ec_show ) : ?>
          <div class="denton-menu-item">
            <a href="<?php echo esc_url( $nav_ec_url ); ?>" class="denton-menu-btn"><?php echo esc_html( $nav_ec_label ); ?></a>
          </div>
          <?php endif; ?>

          <?php // ── NHS Services (dropdown) ───────────────────────── ?>
          <?php if ( $nav_sv_show ) : ?>
          <div class="denton-menu-item">
            <button class="denton-menu-btn">
              <?php echo esc_html( $nav_sv_label ); ?>
              <svg class="arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </button>
            <div class="denton-dropdown">
              <div class="denton-dropdown-header teal">
                <h3>NHS Services</h3>
                <p>Free care for eligible patients</p>
              </div>
              <div class="denton-dropdown-content">
                <?php foreach ( $sv_links as $link ) :
                  $href = ! empty( $link['url'] ) ? $link['url'] : $nav_sv_url;
                  $icon = ! empty( $link['icon'] ) ? bp_fa_class( $link['icon'] ) : 'fas fa-stethoscope';
                ?>
                <a href="<?php echo esc_url( $href ); ?>" class="denton-dropdown-link">
                  <div class="denton-link-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                  <div class="denton-link-text">
                    <h4><?php echo esc_html( $link['label'] ); ?></h4>
                    <?php if ( ! empty( $link['description'] ) ) : ?>
                    <p><?php echo esc_html( $link['description'] ); ?></p>
                    <?php endif; ?>
                  </div>
                </a>
                <?php endforeach; ?>
              </div>
              <div class="denton-dropdown-footer">
                <a href="<?php echo esc_url( $nav_sv_url ); ?>" class="denton-footer-link">
                  View all NHS services
                  <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                </a>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <?php // ── Private Services (dropdown) ───────────────────── ?>
          <?php if ( $nav_ps_show ) : ?>
          <div class="denton-menu-item">
            <button class="denton-menu-btn">
              <?php echo esc_html( $nav_ps_label ); ?>
              <svg class="arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </button>
            <div class="denton-dropdown">
              <div class="denton-dropdown-header">
                <h3>Private Services</h3>
                <p>Clinical care when you need it</p>
              </div>
              <div class="denton-dropdown-content">
                <?php foreach ( $ps_links as $link ) :
                  $href = ! empty( $link['url'] ) ? $link['url'] : $nav_ps_url;
                  $icon = ! empty( $link['icon'] ) ? bp_fa_class( $link['icon'] ) : 'fas fa-stethoscope';
                ?>
                <a href="<?php echo esc_url( $href ); ?>" class="denton-dropdown-link">
                  <div class="denton-link-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                  <div class="denton-link-text">
                    <h4><?php echo esc_html( $link['label'] ); ?></h4>
                    <?php if ( ! empty( $link['description'] ) ) : ?>
                    <p><?php echo esc_html( $link['description'] ); ?></p>
                    <?php endif; ?>
                  </div>
                </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <?php // ── Hub (no dropdown) ─────────────────────────────── ?>
          <?php if ( $nav_hh_show ) : ?>
          <div class="denton-menu-item">
            <a href="<?php echo esc_url( $nav_hh_url ); ?>" class="denton-menu-btn"><?php echo esc_html( $nav_hh_label ); ?></a>
          </div>
          <?php endif; ?>

          <?php // ── Contact (no dropdown) ─────────────────────────── ?>
          <?php if ( $nav_ct_show ) : ?>
          <div class="denton-menu-item">
            <a href="<?php echo esc_url( $nav_ct_url ); ?>" class="denton-menu-btn"><?php echo esc_html( $nav_ct_label ); ?></a>
          </div>
          <?php endif; ?>

        </div>
      </div>
    </div>

    <!-- ── MOBILE MENU ── -->
    <div class="denton-mobile-menu" id="denton-mobile-menu">

      <div class="denton-mobile-nav">

        <?php if ( $nav_home_show ) : ?>
        <a href="<?php echo esc_url( $nav_home_url ); ?>" class="denton-mobile-link"><?php echo esc_html( $nav_home_label ); ?></a>
        <?php endif; ?>

        <?php // ── Weight Loss Accordion ── ?>
        <?php if ( $nav_wl_show ) : ?>
        <div class="denton-mobile-accordion">
          <button class="denton-mobile-accordion-btn">
            <?php echo esc_html( $nav_wl_label ); ?>
            <svg class="denton-mobile-accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </button>
          <div class="denton-mobile-accordion-content">
            <?php foreach ( $wl_links as $link ) :
              $href = ! empty( $link['url'] ) ? $link['url'] : $nav_wl_url;
            ?>
            <a href="<?php echo esc_url( $href ); ?>" class="denton-mobile-sub-link"><?php echo esc_html( $link['label'] ); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php // ── Travel Accordion ── ?>
        <?php if ( $nav_th_show ) : ?>
        <div class="denton-mobile-accordion">
          <button class="denton-mobile-accordion-btn">
            <?php echo esc_html( $nav_th_label ); ?>
            <svg class="denton-mobile-accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </button>
          <div class="denton-mobile-accordion-content">
            <?php foreach ( $th_services as $link ) :
              $href = ! empty( $link['url'] ) ? $link['url'] : $nav_th_url;
            ?>
            <a href="<?php echo esc_url( $href ); ?>" class="denton-mobile-sub-link"><?php echo esc_html( $link['label'] ); ?></a>
            <?php endforeach; ?>
            <div class="denton-mobile-sub-divider">Popular Destinations</div>
            <?php foreach ( $th_dests as $dest ) :
              $href = ! empty( $dest['url'] ) ? $dest['url'] : $nav_th_url;
              $name = ! empty( $dest['name'] ) ? $dest['name'] : '';
            ?>
            <a href="<?php echo esc_url( $href ); ?>" class="denton-mobile-sub-link"><?php echo esc_html( $name ); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $nav_bt_show ) : ?>
        <a href="<?php echo esc_url( $nav_bt_url ); ?>" class="denton-mobile-link"><?php echo esc_html( $nav_bt_label ); ?></a>
        <?php endif; ?>

        <?php if ( $nav_ec_show ) : ?>
        <a href="<?php echo esc_url( $nav_ec_url ); ?>" class="denton-mobile-link"><?php echo esc_html( $nav_ec_label ); ?></a>
        <?php endif; ?>

        <?php // ── NHS Services Accordion ── ?>
        <?php if ( $nav_sv_show ) : ?>
        <div class="denton-mobile-accordion">
          <button class="denton-mobile-accordion-btn">
            <?php echo esc_html( $nav_sv_label ); ?>
            <svg class="denton-mobile-accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </button>
          <div class="denton-mobile-accordion-content">
            <?php foreach ( $sv_links as $link ) :
              $href = ! empty( $link['url'] ) ? $link['url'] : $nav_sv_url;
            ?>
            <a href="<?php echo esc_url( $href ); ?>" class="denton-mobile-sub-link"><?php echo esc_html( $link['label'] ); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php // ── Private Services Accordion ── ?>
        <?php if ( $nav_ps_show ) : ?>
        <div class="denton-mobile-accordion">
          <button class="denton-mobile-accordion-btn">
            <?php echo esc_html( $nav_ps_label ); ?>
            <svg class="denton-mobile-accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </button>
          <div class="denton-mobile-accordion-content">
            <?php foreach ( $ps_links as $link ) :
              $href = ! empty( $link['url'] ) ? $link['url'] : $nav_ps_url;
            ?>
            <a href="<?php echo esc_url( $href ); ?>" class="denton-mobile-sub-link"><?php echo esc_html( $link['label'] ); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $nav_hh_show ) : ?>
        <a href="<?php echo esc_url( $nav_hh_url ); ?>" class="denton-mobile-link"><?php echo esc_html( $nav_hh_label ); ?></a>
        <?php endif; ?>

        <?php if ( $nav_ct_show ) : ?>
        <a href="<?php echo esc_url( $nav_ct_url ); ?>" class="denton-mobile-link"><?php echo esc_html( $nav_ct_label ); ?></a>
        <?php endif; ?>

      </div>

      <!-- Mobile CTAs -->
      <div class="denton-mobile-cta">
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="denton-mobile-cta-phone">
          <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          <?php echo esc_html( $phone ); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/nhs-services/' ) ); ?>" class="denton-mobile-cta-nhs">NHS Nominate</a>
        <a href="<?php echo esc_url( $booking_url ); ?>" class="denton-mobile-cta-book"><?php echo esc_html( $booking_text ); ?></a>
      </div>

    </div>

  </nav>
