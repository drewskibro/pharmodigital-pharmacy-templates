<?php
/**
 * Template Name: Prices
 * @package Bowland_Pharmacy
 */

get_header();

$hero_badge       = bp_field( 'prices_hero_badge', 'OUR PRICING' );
$hero_title       = bp_field( 'prices_hero_title', 'Transparent Pricing' );
$hero_title_rest  = bp_field( 'prices_hero_title_rest', 'at Bowland Pharmacy' );
$hero_description = bp_field( 'prices_hero_description', 'Clear, upfront pricing across our weight loss treatments, travel vaccinations, private services and NHS care. No hidden fees, no surprises.' );

$disclaimer       = bp_field( 'prices_disclaimer', 'All prices shown are correct at time of publication and may be subject to change. Treatment is only available following a clinical consultation and where deemed appropriate by our pharmacist.' );

$book_url         = home_url( '/book-appointment/' );
$phone            = bp_phone();
$phone_link       = bp_phone_link();
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
      <button class="prices-tab" role="tab" aria-selected="false" aria-controls="prices-panel-private" id="prices-tab-private" data-tab="private" tabindex="-1" type="button">
        <i class="fas fa-user-doctor" aria-hidden="true"></i>
        <span>Private Services</span>
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
        <div class="prices-wl-grid">
          <?php while ( have_rows( 'prices_weight_loss' ) ) : the_row();
            $wl_name     = get_sub_field( 'wl_product_name' );
            $wl_strength = get_sub_field( 'wl_strength' );
            $wl_price    = get_sub_field( 'wl_price' );
            $wl_supply   = get_sub_field( 'wl_supply' );
            $wl_note     = get_sub_field( 'wl_note' );
          ?>
            <article class="prices-wl-card">
              <header class="prices-wl-card-head">
                <?php if ( $wl_name ) : ?>
                  <h3 class="prices-wl-card-name"><?php echo esc_html( $wl_name ); ?></h3>
                <?php endif; ?>
                <?php if ( $wl_strength ) : ?>
                  <span class="prices-wl-card-strength"><?php echo esc_html( $wl_strength ); ?></span>
                <?php endif; ?>
              </header>
              <?php if ( $wl_price ) : ?>
                <div class="prices-wl-card-price">
                  <span class="prices-wl-card-price-amount"><?php echo esc_html( $wl_price ); ?></span>
                  <?php if ( $wl_supply ) : ?>
                    <span class="prices-wl-card-price-supply"><?php echo esc_html( $wl_supply ); ?></span>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ( $wl_note ) : ?>
                <p class="prices-wl-card-note"><i class="fas fa-circle-info"></i> <?php echo esc_html( $wl_note ); ?></p>
              <?php endif; ?>
            </article>
          <?php endwhile; ?>
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

    <!-- Panel: Private Services -->
    <div class="prices-tab-panel" role="tabpanel" id="prices-panel-private" aria-labelledby="prices-tab-private" data-panel="private" hidden>
      <div class="prices-panel-header">
        <h2 class="prices-panel-title">Private Services</h2>
        <p class="prices-panel-subtitle">Self-funded healthcare services with no waiting list.</p>
      </div>

      <?php
      $private_groups = array();
      $private_order  = array();
      if ( have_rows( 'prices_private' ) ) :
        while ( have_rows( 'prices_private' ) ) : the_row();
          $pv_category = get_sub_field( 'private_category' );
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
        <div class="prices-private-groups">
          <?php foreach ( $private_order as $category ) : ?>
            <section class="prices-private-group">
              <h3 class="prices-private-group-title"><?php echo esc_html( $category ); ?></h3>
              <ul class="prices-private-list">
                <?php foreach ( $private_groups[ $category ] as $item ) : ?>
                  <li class="prices-private-row">
                    <div class="prices-private-row-text">
                      <span class="prices-private-row-name"><?php echo esc_html( $item['name'] ); ?></span>
                      <?php if ( $item['note'] ) : ?>
                        <span class="prices-private-row-note"><?php echo esc_html( $item['note'] ); ?></span>
                      <?php endif; ?>
                    </div>
                    <?php if ( $item['price'] ) : ?>
                      <span class="prices-private-row-price"><?php echo esc_html( $item['price'] ); ?></span>
                    <?php endif; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </section>
          <?php endforeach; ?>
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
        <div class="prices-nhs-grid">
          <?php while ( have_rows( 'prices_nhs' ) ) : the_row();
            $nhs_name        = get_sub_field( 'nhs_service_name' );
            $nhs_eligibility = get_sub_field( 'nhs_eligibility' );
          ?>
            <article class="prices-nhs-card">
              <span class="prices-nhs-card-tag"><i class="fas fa-check-circle"></i> Free on NHS</span>
              <h3 class="prices-nhs-card-name"><?php echo esc_html( $nhs_name ); ?></h3>
              <?php if ( $nhs_eligibility ) : ?>
                <p class="prices-nhs-card-eligibility"><?php echo esc_html( $nhs_eligibility ); ?></p>
              <?php endif; ?>
            </article>
          <?php endwhile; ?>
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
