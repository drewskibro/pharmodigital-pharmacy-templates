<?php
/**
 * Template Name: Prices
 * @package Bowland_Pharmacy
 */

get_header();

$hero_badge       = bp_field( 'prices_hero_badge', 'OUR PRICING' );
$hero_title       = bp_field( 'prices_hero_title', 'Transparent Pricing' );
$hero_title_rest  = bp_field( 'prices_hero_title_rest', 'at Denton Pharmacy' );
$hero_description = bp_field( 'prices_hero_description', 'Clear, upfront pricing across our weight loss treatments, travel vaccinations, private services and NHS care. No hidden fees, no surprises.' );

$disclaimer       = bp_field( 'prices_disclaimer', 'All prices shown are correct at time of publication and may be subject to change. Treatment is only available following a clinical consultation and where deemed appropriate by our pharmacist.' );

$book_url         = home_url( '/book-appointment/' );
$phone            = dp_phone();
$phone_link       = dp_phone_link();
?>

<!-- ============================================
     N1. HERO
     ============================================ -->
<section class="prices-hero-section">
  <div class="prices-hero-glow-1"></div>
  <div class="prices-hero-glow-2"></div>

  <div class="section-container">
    <div class="prices-hero-content">

      <div class="section-badge">
        <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
          <path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/>
          <path d="M7 7h.01"/>
        </svg>
        <span class="section-badge-text"><?php echo esc_html( $hero_badge ); ?></span>
      </div>

      <h1 class="prices-hero-title">
        <span class="gradient-text"><?php echo esc_html( $hero_title ); ?></span>
        <?php if ( $hero_title_rest ) : ?>
          <span class="prices-hero-title-rest"><?php echo esc_html( $hero_title_rest ); ?></span>
        <?php endif; ?>
      </h1>

      <p class="prices-hero-description"><?php echo esc_html( $hero_description ); ?></p>

      <div class="prices-hero-actions">
        <a href="<?php echo esc_url( $book_url ); ?>" class="cta-button primary-cta">
          Book a Consultation
          <i class="fas fa-arrow-right"></i>
        </a>
        <?php if ( $phone_link ) : ?>
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta">
          <i class="fas fa-phone icon-small"></i>
          Call <?php echo esc_html( $phone ); ?>
        </a>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<!-- ============================================
     N2. TABBED PRICING
     ============================================ -->
<section class="prices-tabs-section">
  <div class="section-container">

    <div class="prices-tabs-nav" role="tablist" aria-label="Pricing categories">
      <button class="prices-tab is-active" role="tab" aria-selected="true" aria-controls="prices-panel-weight-loss" id="prices-tab-weight-loss" data-tab="weight-loss" tabindex="0" type="button">
        <i class="fas fa-weight-scale" aria-hidden="true"></i>
        <span>Weight Loss</span>
      </button>
      <button class="prices-tab" role="tab" aria-selected="false" aria-controls="prices-panel-travel" id="prices-tab-travel" data-tab="travel" tabindex="-1" type="button">
        <i class="fas fa-plane-departure" aria-hidden="true"></i>
        <span>Travel Health</span>
      </button>
      <button class="prices-tab" role="tab" aria-selected="false" aria-controls="prices-panel-blood" id="prices-tab-blood" data-tab="blood" tabindex="-1" type="button">
        <i class="fas fa-vial" aria-hidden="true"></i>
        <span>Blood Testing</span>
      </button>
      <button class="prices-tab" role="tab" aria-selected="false" aria-controls="prices-panel-ear" id="prices-tab-ear" data-tab="ear" tabindex="-1" type="button">
        <i class="fas fa-ear-listen" aria-hidden="true"></i>
        <span>Ear Clinic</span>
      </button>
      <button class="prices-tab" role="tab" aria-selected="false" aria-controls="prices-panel-private" id="prices-tab-private" data-tab="private" tabindex="-1" type="button">
        <i class="fas fa-user-doctor" aria-hidden="true"></i>
        <span>Other Private Services</span>
      </button>
      <button class="prices-tab" role="tab" aria-selected="false" aria-controls="prices-panel-nhs" id="prices-tab-nhs" data-tab="nhs" tabindex="-1" type="button">
        <i class="fas fa-hand-holding-medical" aria-hidden="true"></i>
        <span>NHS Services</span>
      </button>
    </div>

    <!-- Panel: Weight Loss -->
    <div class="prices-tab-panel is-active" role="tabpanel" id="prices-panel-weight-loss" aria-labelledby="prices-tab-weight-loss" data-panel="weight-loss">
      <div class="prices-panel-header">
        <h2 class="prices-panel-title">Weight Loss Treatments</h2>
        <p class="prices-panel-subtitle">GLP-1 prescription weight loss treatments, dispensed following a clinical consultation.</p>
      </div>

      <?php if ( have_rows( 'prices_weight_loss' ) ) : ?>
        <div class="prices-table-wrap">
          <table class="prices-table">
            <thead>
              <tr>
                <th scope="col">Treatment</th>
                <th scope="col">Strength</th>
                <th scope="col" class="prices-table-num">Price</th>
                <th scope="col" class="prices-table-note">Notes</th>
              </tr>
            </thead>
            <tbody>
              <?php while ( have_rows( 'prices_weight_loss' ) ) : the_row();
                $wl_name     = get_sub_field( 'wl_product_name' );
                $wl_strength = get_sub_field( 'wl_strength' );
                $wl_price    = get_sub_field( 'wl_price' );
                $wl_supply   = get_sub_field( 'wl_supply' );
                $wl_note     = get_sub_field( 'wl_note' );
                $wl_notes    = trim( implode( ' — ', array_filter( array( $wl_supply, $wl_note ) ) ) );
              ?>
                <tr>
                  <td data-label="Treatment"><?php echo esc_html( $wl_name ); ?></td>
                  <td data-label="Strength"><?php echo $wl_strength ? esc_html( $wl_strength ) : '<span class="prices-dash">—</span>'; ?></td>
                  <td data-label="Price" class="prices-table-num"><?php echo $wl_price ? esc_html( $wl_price ) : '<span class="prices-dash">—</span>'; ?></td>
                  <td data-label="Notes" class="prices-table-note"><?php echo $wl_notes ? esc_html( $wl_notes ) : ''; ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      <?php else : ?>
        <p class="prices-empty">Weight loss pricing will appear here once added.</p>
      <?php endif; ?>
    </div>

    <!-- Panel: Travel Health -->
    <div class="prices-tab-panel" role="tabpanel" id="prices-panel-travel" aria-labelledby="prices-tab-travel" data-panel="travel" hidden>
      <div class="prices-panel-header">
        <h2 class="prices-panel-title">Travel Vaccinations</h2>
        <p class="prices-panel-subtitle">Vaccines and antimalarials for safe travel, administered by our trained pharmacist.</p>
      </div>

      <?php if ( have_rows( 'prices_travel' ) ) : ?>
        <div class="prices-table-wrap">
          <table class="prices-table">
            <thead>
              <tr>
                <th scope="col">Vaccine</th>
                <th scope="col" class="prices-table-num">Per dose</th>
                <th scope="col" class="prices-table-num">Full course</th>
                <th scope="col">Notes</th>
              </tr>
            </thead>
            <tbody>
              <?php while ( have_rows( 'prices_travel' ) ) : the_row();
                $tv_name    = get_sub_field( 'travel_vaccine_name' );
                $tv_perdose = get_sub_field( 'travel_price_per_dose' );
                $tv_course  = get_sub_field( 'travel_course_price' );
                $tv_note    = get_sub_field( 'travel_notes' );
              ?>
                <tr>
                  <td data-label="Vaccine"><strong><?php echo esc_html( $tv_name ); ?></strong></td>
                  <td data-label="Per dose" class="prices-table-num"><?php echo $tv_perdose ? esc_html( $tv_perdose ) : '<span class="prices-dash">—</span>'; ?></td>
                  <td data-label="Full course" class="prices-table-num"><?php echo $tv_course ? esc_html( $tv_course ) : '<span class="prices-dash">—</span>'; ?></td>
                  <td data-label="Notes" class="prices-table-note"><?php echo $tv_note ? esc_html( $tv_note ) : ''; ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      <?php else : ?>
        <p class="prices-empty">Travel pricing will appear here once added.</p>
      <?php endif; ?>
    </div>

    <!-- Panel: Blood Testing -->
    <div class="prices-tab-panel" role="tabpanel" id="prices-panel-blood" aria-labelledby="prices-tab-blood" data-panel="blood" hidden>
      <div class="prices-panel-header">
        <h2 class="prices-panel-title">Blood Testing</h2>
        <p class="prices-panel-subtitle">Our most requested blood test panels — browse 400+ tests on our Blood Testing page.</p>
      </div>

      <?php
      $bt_featured = new WP_Query( array(
        'post_type'      => 'blood_test',
        'posts_per_page' => 30,
        'meta_key'       => 'tsbt_featured',
        'meta_value'     => '1',
        'orderby'        => 'title',
        'order'          => 'ASC',
        'no_found_rows'  => true,
      ) );
      ?>
      <?php if ( $bt_featured->have_posts() ) : ?>
        <div class="prices-table-wrap">
          <table class="prices-table">
            <thead>
              <tr>
                <th scope="col">Test</th>
                <th scope="col" class="prices-table-num">Price</th>
                <th scope="col" class="prices-table-note">Turnaround</th>
              </tr>
            </thead>
            <tbody>
              <?php while ( $bt_featured->have_posts() ) : $bt_featured->the_post();
                $bt_price = get_post_meta( get_the_ID(), 'tsbt_retail', true );
                $bt_turn  = get_post_meta( get_the_ID(), 'tsbt_turnaround', true );
              ?>
                <tr>
                  <td data-label="Test"><?php echo esc_html( get_the_title() ); ?></td>
                  <td data-label="Price" class="prices-table-num"><?php echo $bt_price ? esc_html( $bt_price ) : '<span class="prices-dash">—</span>'; ?></td>
                  <td data-label="Turnaround" class="prices-table-note"><?php echo $bt_turn ? esc_html( $bt_turn ) : ''; ?></td>
                </tr>
              <?php endwhile; wp_reset_postdata(); ?>
            </tbody>
          </table>
        </div>
        <div class="prices-blood-viewall">
          <a href="<?php echo esc_url( home_url( '/blood-testing/' ) ); ?>" class="prices-viewall-btn">View all blood tests <i class="fas fa-arrow-right"></i></a>
        </div>
      <?php else : ?>
        <p class="prices-empty">Most requested tests will appear here. <a href="<?php echo esc_url( home_url( '/blood-testing/' ) ); ?>">View all blood tests</a>.</p>
      <?php endif; ?>
    </div>

    <!-- Panel: Ear Clinic -->
    <div class="prices-tab-panel" role="tabpanel" id="prices-panel-ear" aria-labelledby="prices-tab-ear" data-panel="ear" hidden>
      <div class="prices-panel-header">
        <h2 class="prices-panel-title">Ear Clinic</h2>
        <p class="prices-panel-subtitle">Microsuction ear wax removal by our trained pharmacist.</p>
      </div>

      <?php
      $ear_items = array();
      if ( have_rows( 'prices_private' ) ) :
        while ( have_rows( 'prices_private' ) ) : the_row();
          if ( strcasecmp( (string) get_sub_field( 'private_category' ), 'Ear Wax Removal' ) === 0 ) {
            $ear_items[] = array(
              'name'  => get_sub_field( 'private_service_name' ),
              'price' => get_sub_field( 'private_price' ),
              'note'  => get_sub_field( 'private_notes' ),
            );
          }
        endwhile;
      endif;
      ?>
      <?php if ( ! empty( $ear_items ) ) : ?>
        <div class="prices-table-wrap">
          <table class="prices-table">
            <thead>
              <tr>
                <th scope="col">Service</th>
                <th scope="col" class="prices-table-num">Price</th>
                <th scope="col" class="prices-table-note">Notes</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ( $ear_items as $item ) : ?>
                <tr>
                  <td data-label="Service"><?php echo esc_html( $item['name'] ); ?></td>
                  <td data-label="Price" class="prices-table-num"><?php echo $item['price'] ? esc_html( $item['price'] ) : '<span class="prices-dash">—</span>'; ?></td>
                  <td data-label="Notes" class="prices-table-note"><?php echo $item['note'] ? esc_html( $item['note'] ) : ''; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php else : ?>
        <p class="prices-empty">Ear clinic pricing will appear here once added.</p>
      <?php endif; ?>
    </div>

    <!-- Panel: Private Services -->
    <div class="prices-tab-panel" role="tabpanel" id="prices-panel-private" aria-labelledby="prices-tab-private" data-panel="private" hidden>
      <div class="prices-panel-header">
        <h2 class="prices-panel-title">Other Private Services</h2>
        <p class="prices-panel-subtitle">Self-funded healthcare services with no waiting list.</p>
      </div>

      <?php
      $private_groups = array();
      $private_order  = array();
      if ( have_rows( 'prices_private' ) ) :
        while ( have_rows( 'prices_private' ) ) : the_row();
          $pv_category = get_sub_field( 'private_category' );
          if ( in_array( strtolower( (string) $pv_category ), array( 'ear wax removal', 'blood testing' ), true ) ) { continue; }
          $cat_key     = $pv_category ?: 'Other Services';
          if ( ! isset( $private_groups[ $cat_key ] ) ) {
            $private_groups[ $cat_key ] = array();
            $private_order[]            = $cat_key;
          }
          $private_groups[ $cat_key ][] = array(
            'name'  => get_sub_field( 'private_service_name' ),
            'price' => get_sub_field( 'private_price' ),
            'note'  => get_sub_field( 'private_notes' ),
          );
        endwhile;
      endif;
      ?>

      <?php if ( ! empty( $private_order ) ) : ?>
        <div class="prices-table-wrap">
          <table class="prices-table">
            <thead>
              <tr>
                <th scope="col">Service</th>
                <th scope="col" class="prices-table-num">Price</th>
                <th scope="col" class="prices-table-note">Notes</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ( $private_order as $category ) : ?>
                <tr class="prices-table-group"><th colspan="3" scope="colgroup"><?php echo esc_html( $category ); ?></th></tr>
                <?php foreach ( $private_groups[ $category ] as $item ) : ?>
                  <tr>
                    <td data-label="Service"><?php echo esc_html( $item['name'] ); ?></td>
                    <td data-label="Price" class="prices-table-num"><?php echo $item['price'] ? esc_html( $item['price'] ) : '<span class="prices-dash">—</span>'; ?></td>
                    <td data-label="Notes" class="prices-table-note"><?php echo $item['note'] ? esc_html( $item['note'] ) : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php else : ?>
        <p class="prices-empty">Private service pricing will appear here once added.</p>
      <?php endif; ?>
    </div>

    <!-- Panel: NHS Services -->
    <div class="prices-tab-panel" role="tabpanel" id="prices-panel-nhs" aria-labelledby="prices-tab-nhs" data-panel="nhs" hidden>
      <div class="prices-panel-header">
        <h2 class="prices-panel-title">NHS Services</h2>
        <p class="prices-panel-subtitle">Free services for eligible patients, funded by the NHS.</p>
      </div>

      <?php if ( have_rows( 'prices_nhs' ) ) : ?>
        <div class="prices-table-wrap">
          <table class="prices-table">
            <thead>
              <tr>
                <th scope="col">Service</th>
                <th scope="col" class="prices-table-num">Cost</th>
                <th scope="col" class="prices-table-note">Notes</th>
              </tr>
            </thead>
            <tbody>
              <?php while ( have_rows( 'prices_nhs' ) ) : the_row();
                $nhs_name        = get_sub_field( 'nhs_service_name' );
                $nhs_eligibility = get_sub_field( 'nhs_eligibility' );
              ?>
                <tr>
                  <td data-label="Service"><?php echo esc_html( $nhs_name ); ?></td>
                  <td data-label="Cost" class="prices-table-num"><span class="prices-free-tag"><i class="fas fa-check-circle"></i> Free on NHS</span></td>
                  <td data-label="Notes" class="prices-table-note"><?php echo $nhs_eligibility ? esc_html( $nhs_eligibility ) : ''; ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      <?php else : ?>
        <p class="prices-empty">NHS services will appear here once added.</p>
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- ============================================
     N3. DISCLAIMER
     ============================================ -->
<?php if ( $disclaimer ) : ?>
<section class="prices-disclaimer-section">
  <div class="section-container">
    <div class="prices-disclaimer-card">
      <div class="prices-disclaimer-icon"><i class="fas fa-circle-info"></i></div>
      <div class="prices-disclaimer-body">
        <h3 class="prices-disclaimer-title">Important Information</h3>
        <p class="prices-disclaimer-text"><?php echo esc_html( $disclaimer ); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============================================
     N4. FINAL CTA
     ============================================ -->
<section class="prices-cta-section">
  <div class="prices-cta-glow-1"></div>
  <div class="prices-cta-glow-2"></div>
  <div class="section-container">
    <div class="prices-cta-content">
      <h2 class="prices-cta-title">Ready to get started?</h2>
      <p class="prices-cta-description">Speak to our pharmacist for a clinical consultation and tailored advice on the best treatment for you.</p>
      <div class="prices-cta-actions">
        <a href="<?php echo esc_url( $book_url ); ?>" class="cta-button primary-cta prices-cta-button-white">
          Book a Consultation
          <i class="fas fa-arrow-right"></i>
        </a>
        <?php if ( $phone_link ) : ?>
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta prices-cta-button-outline">
          <i class="fas fa-phone"></i>
          Call <?php echo esc_html( $phone ); ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
