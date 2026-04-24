<?php
/**
 * Template Name: NHS Prescriptions
 *
 * Page template for the NHS Prescriptions service. 100% ACF-driven —
 * sections render only if their ACF data exists. Content is seeded in
 * the DB (never hardcoded here).
 *
 * @package Bowland_Pharmacy
 */

get_header();

// --- Hero ---
$hero_badge         = bp_field( 'np_hero_badge' );
$hero_title_accent  = bp_field( 'np_hero_title_accent' );
$hero_title_rest    = bp_field( 'np_hero_title_rest' );
$hero_description   = bp_field( 'np_hero_description' );
$hero_cta_primary   = bp_field( 'np_hero_cta_primary' );
$hero_cta_secondary = bp_field( 'np_hero_cta_secondary' );

$hero_cta_p_text = ( is_array( $hero_cta_primary ) && ! empty( $hero_cta_primary['title'] ) ) ? $hero_cta_primary['title'] : '';
$hero_cta_p_url  = ( is_array( $hero_cta_primary ) && ! empty( $hero_cta_primary['url'] ) )   ? $hero_cta_primary['url']   : '';
$hero_cta_p_tgt  = ( is_array( $hero_cta_primary ) && ! empty( $hero_cta_primary['target'] ) ) ? $hero_cta_primary['target'] : '';

$hero_cta_s_text = ( is_array( $hero_cta_secondary ) && ! empty( $hero_cta_secondary['title'] ) ) ? $hero_cta_secondary['title'] : '';
$hero_cta_s_url  = ( is_array( $hero_cta_secondary ) && ! empty( $hero_cta_secondary['url'] ) )   ? $hero_cta_secondary['url']   : '';
$hero_cta_s_tgt  = ( is_array( $hero_cta_secondary ) && ! empty( $hero_cta_secondary['target'] ) ) ? $hero_cta_secondary['target'] : '';

// Trust pills (repeater)
$trust_pills = array();
if ( have_rows( 'np_hero_trust_pills' ) ) {
    while ( have_rows( 'np_hero_trust_pills' ) ) {
        the_row();
        $trust_pills[] = array(
            'icon' => get_sub_field( 'icon' ),
            'text' => get_sub_field( 'text' ),
        );
    }
}

// Info card (price/eligibility summary)
$card_label  = bp_field( 'np_hero_card_label' );
$card_price  = bp_field( 'np_hero_card_price' );
$card_sub    = bp_field( 'np_hero_card_sub' );
$card_checks = array();
if ( have_rows( 'np_hero_card_checks' ) ) {
    while ( have_rows( 'np_hero_card_checks' ) ) {
        the_row();
        $txt = get_sub_field( 'text' );
        if ( $txt ) {
            $card_checks[] = $txt;
        }
    }
}

$show_hero = $hero_badge || $hero_title_accent || $hero_title_rest || $hero_description;
?>

<?php if ( $show_hero ) : ?>
<!-- HERO -->
<section class="npres-hero-section">
    <div class="npres-hero-bg"></div>
    <div class="npres-hero-dots"></div>
    <div class="npres-hero-glow-1"></div>
    <div class="npres-hero-glow-2"></div>
    <div class="section-container">
        <div class="npres-hero-grid">

            <!-- Left: Content -->
            <div class="npres-hero-content">
                <?php if ( $hero_badge ) : ?>
                <div class="section-badge">
                    <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span class="section-badge-text"><?php echo esc_html( $hero_badge ); ?></span>
                </div>
                <?php endif; ?>

                <?php if ( $hero_title_accent || $hero_title_rest ) : ?>
                <h1 class="npres-hero-title">
                    <?php if ( $hero_title_accent ) : ?><span class="gradient-text"><?php echo esc_html( $hero_title_accent ); ?></span><?php endif; ?>
                    <?php if ( $hero_title_rest ) : ?><?php echo esc_html( $hero_title_rest ); ?><?php endif; ?>
                </h1>
                <?php endif; ?>

                <?php if ( $hero_description ) : ?>
                <p class="npres-hero-description"><?php echo esc_html( $hero_description ); ?></p>
                <?php endif; ?>

                <?php if ( $hero_cta_p_text || $hero_cta_s_text ) : ?>
                <div class="npres-hero-actions">
                    <?php if ( $hero_cta_p_text ) : ?>
                    <a href="<?php echo esc_url( $hero_cta_p_url ); ?>" class="cta-button primary-cta"<?php echo $hero_cta_p_tgt ? ' target="' . esc_attr( $hero_cta_p_tgt ) . '" rel="noopener"' : ''; ?>>
                        <?php echo esc_html( $hero_cta_p_text ); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <?php endif; ?>
                    <?php if ( $hero_cta_s_text ) : ?>
                    <a href="<?php echo esc_url( $hero_cta_s_url ); ?>" class="cta-button secondary-cta"<?php echo $hero_cta_s_tgt ? ' target="' . esc_attr( $hero_cta_s_tgt ) . '" rel="noopener"' : ''; ?>>
                        <?php echo esc_html( $hero_cta_s_text ); ?>
                        <i class="fas fa-phone"></i>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if ( ! empty( $trust_pills ) ) : ?>
                <div class="npres-hero-trust">
                    <?php foreach ( $trust_pills as $pill ) : if ( ! $pill['text'] ) continue; ?>
                    <div class="npres-hero-trust-item">
                        <i class="<?php echo esc_attr( bp_fa_class( $pill['icon'] ?: 'fa-check-circle' ) ); ?>"></i>
                        <span><?php echo esc_html( $pill['text'] ); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Right: Info card -->
            <?php if ( $card_label || $card_price || ! empty( $card_checks ) ) : ?>
            <div class="npres-hero-visual">
                <div class="npres-trust-card">
                    <div class="npres-trust-card-glow"></div>
                    <div class="npres-trust-card-inner">
                        <?php if ( $card_label ) : ?>
                        <div class="npres-trust-card-header">
                            <div class="npres-trust-card-nhs-icon">
                                <i class="fas fa-prescription"></i>
                            </div>
                            <span class="npres-trust-card-label"><?php echo esc_html( $card_label ); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if ( $card_price ) : ?>
                        <div class="npres-trust-card-free">
                            <span class="npres-trust-card-amount"><?php echo esc_html( $card_price ); ?></span>
                            <?php if ( $card_sub ) : ?>
                            <span class="npres-trust-card-sub"><?php echo esc_html( $card_sub ); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <?php if ( ! empty( $card_checks ) ) : ?>
                        <div class="npres-trust-card-divider"></div>
                        <ul class="npres-trust-card-list">
                            <?php foreach ( $card_checks as $check ) : ?>
                            <li><i class="fas fa-check"></i> <span><?php echo esc_html( $check ); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                        <?php
                        $gphc_num = bp_option( 'gphc_registration', '1033447' );
                        $gphc_url = bp_option( 'gphc_register_url' ) ?: 'https://www.pharmacyregulation.org/registers/pharmacy/registrationnumber/' . $gphc_num;
                        ?>
                        <a href="<?php echo esc_url( $gphc_url ); ?>" class="npres-trust-card-footer" target="_blank" rel="noopener" title="Verify on the GPhC register">
                            <i class="fas fa-shield-halved"></i>
                            <span>GPhC Registered Pharmacy</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>


<?php
// --- Eligibility Grid ---
$elig_badge = bp_field( 'np_elig_badge' );
$elig_title = bp_field( 'np_elig_title' );
$elig_desc  = bp_field( 'np_elig_description' );

$elig_items = array();
if ( have_rows( 'np_elig_items' ) ) {
    while ( have_rows( 'np_elig_items' ) ) {
        the_row();
        $elig_items[] = array(
            'icon'  => get_sub_field( 'icon' ),
            'title' => get_sub_field( 'title' ),
            'desc'  => get_sub_field( 'description' ),
        );
    }
}

if ( $elig_title || ! empty( $elig_items ) ) :
?>
<!-- ELIGIBILITY -->
<section class="npres-conditions-section npres-reveal">
    <div class="section-container">
        <div class="npres-conditions-header">
            <?php if ( $elig_badge ) : ?>
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span class="section-badge-text"><?php echo esc_html( $elig_badge ); ?></span>
            </div>
            <?php endif; ?>
            <?php if ( $elig_title ) : ?>
            <h2 class="npres-conditions-title"><?php echo esc_html( $elig_title ); ?></h2>
            <?php endif; ?>
            <?php if ( $elig_desc ) : ?>
            <p class="npres-conditions-description"><?php echo esc_html( $elig_desc ); ?></p>
            <?php endif; ?>
        </div>

        <?php if ( ! empty( $elig_items ) ) : ?>
        <div class="npres-conditions-grid">
            <?php foreach ( $elig_items as $item ) : if ( ! $item['title'] ) continue; ?>
            <div class="npres-condition-card">
                <div class="npres-condition-icon"><i class="<?php echo esc_attr( bp_fa_class( $item['icon'] ?: 'fa-check' ) ); ?>"></i></div>
                <h3 class="npres-condition-title"><?php echo esc_html( $item['title'] ); ?></h3>
                <?php if ( $item['desc'] ) : ?>
                <p class="npres-condition-desc"><?php echo esc_html( $item['desc'] ); ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php
// --- Process Steps ---
$proc_badge = bp_field( 'np_process_badge' );
$proc_title = bp_field( 'np_process_title' );
$proc_desc  = bp_field( 'np_process_description' );

$proc_steps = array();
if ( have_rows( 'np_process_steps' ) ) {
    while ( have_rows( 'np_process_steps' ) ) {
        the_row();
        $proc_steps[] = array(
            'icon'  => get_sub_field( 'icon' ),
            'title' => get_sub_field( 'title' ),
            'desc'  => get_sub_field( 'description' ),
        );
    }
}

if ( $proc_title || ! empty( $proc_steps ) ) :
?>
<!-- PROCESS -->
<section class="npres-process-section npres-reveal">
    <div class="section-container">
        <div class="npres-process-header">
            <?php if ( $proc_badge ) : ?>
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span class="section-badge-text"><?php echo esc_html( $proc_badge ); ?></span>
            </div>
            <?php endif; ?>
            <?php if ( $proc_title ) : ?>
            <h2 class="npres-process-title"><?php echo esc_html( $proc_title ); ?></h2>
            <?php endif; ?>
            <?php if ( $proc_desc ) : ?>
            <p class="npres-process-description"><?php echo esc_html( $proc_desc ); ?></p>
            <?php endif; ?>
        </div>

        <?php if ( ! empty( $proc_steps ) ) : ?>
        <div class="npres-process-steps">
            <?php foreach ( $proc_steps as $i => $step ) : if ( ! $step['title'] ) continue; ?>
            <div class="npres-process-card">
                <div class="npres-process-card-number"><?php echo esc_html( $i + 1 ); ?></div>
                <div class="npres-process-card-icon">
                    <i class="<?php echo esc_attr( bp_fa_class( $step['icon'] ?: 'fa-check' ) ); ?>"></i>
                </div>
                <div class="npres-process-card-body">
                    <h3 class="npres-process-card-title"><?php echo esc_html( $step['title'] ); ?></h3>
                    <?php if ( $step['desc'] ) : ?>
                    <p class="npres-process-card-desc"><?php echo esc_html( $step['desc'] ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php
// --- FAQ ---
$faq_badge = bp_field( 'np_faq_badge' );
$faq_title = bp_field( 'np_faq_title' );

$faqs = array();
if ( have_rows( 'np_faqs' ) ) {
    while ( have_rows( 'np_faqs' ) ) {
        the_row();
        $faqs[] = array(
            'q' => get_sub_field( 'question' ),
            'a' => get_sub_field( 'answer' ),
        );
    }
}

if ( $faq_title || ! empty( $faqs ) ) :
?>
<!-- FAQ -->
<section class="npres-faq-section npres-reveal">
    <div class="section-container">
        <div class="npres-faq-header">
            <?php if ( $faq_badge ) : ?>
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span class="section-badge-text"><?php echo esc_html( $faq_badge ); ?></span>
            </div>
            <?php endif; ?>
            <?php if ( $faq_title ) : ?>
            <h2 class="npres-faq-title"><?php echo esc_html( $faq_title ); ?></h2>
            <?php endif; ?>
        </div>

        <?php if ( ! empty( $faqs ) ) : ?>
        <div class="npres-faq-list">
            <?php foreach ( $faqs as $i => $faq ) : if ( ! $faq['q'] ) continue; ?>
            <div class="npres-faq-item">
                <button class="npres-faq-question" onclick="toggleNpresFAQ(this)">
                    <span class="npres-faq-number"><?php echo esc_html( $i + 1 ); ?></span>
                    <span class="npres-faq-text"><?php echo esc_html( $faq['q'] ); ?></span>
                    <i class="fas fa-plus npres-faq-icon"></i>
                </button>
                <div class="npres-faq-answer">
                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php
// --- Final CTA ---
$cta_title       = bp_field( 'np_cta_title' );
$cta_description = bp_field( 'np_cta_description' );
$cta_primary     = bp_field( 'np_cta_primary' );
$cta_secondary   = bp_field( 'np_cta_secondary' );

$cta_p_text = ( is_array( $cta_primary ) && ! empty( $cta_primary['title'] ) ) ? $cta_primary['title'] : '';
$cta_p_url  = ( is_array( $cta_primary ) && ! empty( $cta_primary['url'] ) )   ? $cta_primary['url']   : '';
$cta_p_tgt  = ( is_array( $cta_primary ) && ! empty( $cta_primary['target'] ) ) ? $cta_primary['target'] : '';
$cta_s_text = ( is_array( $cta_secondary ) && ! empty( $cta_secondary['title'] ) ) ? $cta_secondary['title'] : '';
$cta_s_url  = ( is_array( $cta_secondary ) && ! empty( $cta_secondary['url'] ) )   ? $cta_secondary['url']   : '';
$cta_s_tgt  = ( is_array( $cta_secondary ) && ! empty( $cta_secondary['target'] ) ) ? $cta_secondary['target'] : '';

$cta_badges = array();
if ( have_rows( 'np_cta_badges' ) ) {
    while ( have_rows( 'np_cta_badges' ) ) {
        the_row();
        $t = get_sub_field( 'text' );
        if ( $t ) {
            $cta_badges[] = $t;
        }
    }
}

if ( $cta_title || $cta_description || $cta_p_text ) :
?>
<!-- FINAL CTA -->
<section class="npres-cta-section npres-reveal">
    <div class="npres-cta-glow-1"></div>
    <div class="npres-cta-glow-2"></div>
    <div class="npres-cta-dots"></div>
    <div class="section-container">
        <div class="npres-cta-content">
            <?php if ( ! empty( $cta_badges ) ) : ?>
            <div class="npres-cta-badges">
                <?php foreach ( $cta_badges as $b ) : ?>
                <div class="npres-cta-badge"><span><?php echo esc_html( $b ); ?></span></div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php if ( $cta_title ) : ?>
            <h2 class="npres-cta-title"><?php echo esc_html( $cta_title ); ?></h2>
            <?php endif; ?>
            <?php if ( $cta_description ) : ?>
            <p class="npres-cta-description"><?php echo esc_html( $cta_description ); ?></p>
            <?php endif; ?>
            <?php if ( $cta_p_text || $cta_s_text ) : ?>
            <div class="npres-cta-actions">
                <?php if ( $cta_p_text ) : ?>
                <a href="<?php echo esc_url( $cta_p_url ); ?>" class="cta-button primary-cta npres-cta-button-white"<?php echo $cta_p_tgt ? ' target="' . esc_attr( $cta_p_tgt ) . '" rel="noopener"' : ''; ?>>
                    <?php echo esc_html( $cta_p_text ); ?>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <?php endif; ?>
                <?php if ( $cta_s_text ) : ?>
                <a href="<?php echo esc_url( $cta_s_url ); ?>" class="cta-button secondary-cta npres-cta-button-outline"<?php echo $cta_s_tgt ? ' target="' . esc_attr( $cta_s_tgt ) . '" rel="noopener"' : ''; ?>>
                    <i class="fas fa-phone"></i>
                    <?php echo esc_html( $cta_s_text ); ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer();
