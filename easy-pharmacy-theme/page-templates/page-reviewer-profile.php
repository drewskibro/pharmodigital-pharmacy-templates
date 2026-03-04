<?php
/**
 * Template Name: Reviewer Profile
 * @package Easy_Pharmacy
 */

get_header();

// Hero fields
$profile_image_id  = ep_field( 'rp_profile_image' );
if ( ! $profile_image_id ) {
    $profile_image_id = ep_option( 'pharmacist_image' );
}
$profile_image_url = $profile_image_id ? wp_get_attachment_image_url( $profile_image_id, 'large' ) : '';

$name        = ep_field( 'rp_name', 'Dilip Modhvadia' );
$title       = ep_field( 'rp_title', 'Lead Pharmacist & Independent Prescriber' );
$gphc_number = ep_field( 'rp_gphc_number', '2050606' );
$linkedin    = ep_field( 'rp_linkedin_url', 'https://uk.linkedin.com/in/dilip-modhvadia-60394a137' );

// Bio
$bio = ep_field( 'rp_bio', 'With over 15 years of experience, Dilip leads our clinical team across Ashford, Chertsey, and Walton-on-Thames. As an Independent Prescriber, he specialises in weight loss treatment, travel health, and ear wax removal—the services most patients wish they\'d accessed sooner. His approach is straightforward: no GP referral needed, no waiting lists, and treatment plans built around your life, not a system designed to make you wait.' );

// Highlight card
$highlight_number = ep_field( 'rp_highlight_number', '15+' );
$highlight_label  = ep_field( 'rp_highlight_label', 'Years of Clinical Experience' );

$default_highlight_stats = array(
    array( 'highlight_stat_icon' => 'fa-map-marker-alt', 'highlight_stat_text' => '3 locations across Surrey' ),
    array( 'highlight_stat_icon' => 'fa-prescription-bottle-medical', 'highlight_stat_text' => 'Independent Prescriber' ),
    array( 'highlight_stat_icon' => 'fa-user-group', 'highlight_stat_text' => '5,000+ patients treated' ),
);

$highlight_stats = array();
if ( function_exists( 'have_rows' ) && have_rows( 'rp_highlight_stats' ) ) {
    while ( have_rows( 'rp_highlight_stats' ) ) {
        the_row();
        $highlight_stats[] = array(
            'highlight_stat_icon' => get_sub_field( 'highlight_stat_icon' ) ?: 'fa-check',
            'highlight_stat_text' => get_sub_field( 'highlight_stat_text' ) ?: '',
        );
    }
}
if ( empty( $highlight_stats ) ) {
    $highlight_stats = $default_highlight_stats;
}

// Team members for highlight card
$team_label = ep_field( 'rp_team_label', 'Your Clinical Team' );

$team_members = array();
if ( function_exists( 'have_rows' ) && have_rows( 'rp_team_members' ) ) {
    while ( have_rows( 'rp_team_members' ) ) {
        the_row();
        $tm_photo_id = get_sub_field( 'team_member_photo' );
        $team_members[] = array(
            'team_member_name'  => get_sub_field( 'team_member_name' ) ?: '',
            'team_member_role'  => get_sub_field( 'team_member_role' ) ?: '',
            'team_member_photo' => $tm_photo_id ? wp_get_attachment_image_url( $tm_photo_id, 'thumbnail' ) : '',
        );
    }
}

// Specialisms (repeater with defaults)
$default_specialisms = array(
    array( 'specialism_title' => 'Weight Loss Treatment', 'specialism_detail' => 'Mounjaro, Wegovy, Saxenda' ),
    array( 'specialism_title' => 'Travel Health & Vaccinations', 'specialism_detail' => 'Yellow Fever, Hepatitis, Rabies, Typhoid & more' ),
    array( 'specialism_title' => 'Ear Wax Removal', 'specialism_detail' => 'Microsuction' ),
    array( 'specialism_title' => 'Independent Prescribing', 'specialism_detail' => 'No GP referral needed' ),
    array( 'specialism_title' => 'Clinical Consultations', 'specialism_detail' => 'Face-to-face expert advice' ),
);

$specialisms = array();
if ( function_exists( 'have_rows' ) && have_rows( 'rp_specialisms' ) ) {
    while ( have_rows( 'rp_specialisms' ) ) {
        the_row();
        $specialisms[] = array(
            'specialism_title'  => get_sub_field( 'specialism_title' ) ?: '',
            'specialism_detail' => get_sub_field( 'specialism_detail' ) ?: '',
        );
    }
}
if ( empty( $specialisms ) ) {
    $specialisms = $default_specialisms;
}

// Qualifications (repeater with defaults)
$default_qualifications = array(
    array( 'qual_name' => 'BPharm (Bachelor of Pharmacy)', 'qual_institution' => 'King\'s College London' ),
    array( 'qual_name' => 'PG Cert Non-Medical Prescribing', 'qual_institution' => 'London South Bank University' ),
    array( 'qual_name' => 'Master\'s in Medical Informatics', 'qual_institution' => 'City St George\'s, University of London' ),
    array( 'qual_name' => 'Diploma in Diabetes', 'qual_institution' => 'University of Warwick' ),
    array( 'qual_name' => 'Independent Prescriber Status', 'qual_institution' => '' ),
);

$qualifications = array();
if ( function_exists( 'have_rows' ) && have_rows( 'rp_qualifications' ) ) {
    while ( have_rows( 'rp_qualifications' ) ) {
        the_row();
        $qualifications[] = array(
            'qual_name'        => get_sub_field( 'qual_name' ) ?: '',
            'qual_institution' => get_sub_field( 'qual_institution' ) ?: '',
        );
    }
}
if ( empty( $qualifications ) ) {
    $qualifications = $default_qualifications;
}

// Lead magnet
$lm_heading     = ep_field( 'rp_lm_heading', 'Get Expert Health Advice Delivered to Your Inbox' );
$lm_subheading  = ep_field( 'rp_lm_subheading', 'Latest treatment updates, health tips, and appointment availability—no spam, just useful information.' );
$lm_disclaimer  = ep_field( 'rp_lm_disclaimer', 'Opt out at any time by clicking the unsubscribe link or by contacting us.' );
$lm_button_text = ep_field( 'rp_lm_button_text', 'Subscribe' );

// CTA
$cta_title       = ep_field( 'rp_cta_title', 'Ready to Book a Consultation?' );
$cta_description = ep_field( 'rp_cta_description', 'Speak directly with Dilip and our clinical team — no waiting lists, no referrals needed.' );
$cta_button_text = ep_field( 'rp_cta_button_text', 'Book an Appointment' );
$cta_button_url  = ep_field( 'rp_cta_button_url' );
if ( ! $cta_button_url ) {
    $cta_button_url = ep_booking_url();
}

$pharmacy_name = ep_pharmacy_name();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="rp-hero-section">
    <div class="rp-hero-glow-1"></div>
    <div class="rp-hero-glow-2"></div>
    <div class="section-container">
        <div class="rp-hero-inner">

            <!-- Profile Photo -->
            <div class="rp-hero-photo-wrap">
                <div class="rp-hero-photo-ring">
                    <?php if ( $profile_image_url ) : ?>
                        <img src="<?php echo esc_url( $profile_image_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="rp-hero-photo" />
                    <?php else : ?>
                        <div class="rp-hero-photo-placeholder">
                            <i class="fas fa-user-md"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <a href="https://www.pharmacyregulation.org/registers/pharmacist/<?php echo esc_attr( $gphc_number ); ?>" target="_blank" rel="noopener noreferrer" class="rp-hero-gphc-badge rp-hero-gphc-link">
                    <i class="fas fa-shield-halved"></i>
                    <span>GPhC: <?php echo esc_html( $gphc_number ); ?></span>
                    <i class="fas fa-external-link-alt rp-gphc-external"></i>
                </a>
            </div>

            <!-- Name & Title -->
            <h1 class="rp-hero-name"><?php echo esc_html( $name ); ?></h1>
            <p class="rp-hero-title"><?php echo esc_html( $title ); ?></p>

            <!-- Credential pills -->
            <div class="rp-hero-pills">
                <div class="rp-hero-pill">
                    <i class="fas fa-prescription-bottle-medical"></i>
                    <span>Independent Prescriber</span>
                </div>
                <div class="rp-hero-pill">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?php echo esc_html( ep_option( 'pharmacy_town', 'Ashford' ) ); ?></span>
                </div>
                <?php if ( $linkedin ) : ?>
                    <a href="<?php echo esc_url( $linkedin ); ?>" target="_blank" rel="noopener noreferrer" class="rp-hero-pill rp-hero-pill-link">
                        <i class="fab fa-linkedin-in"></i>
                        <span>LinkedIn</span>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- ============================================
     BIO SECTION
     ============================================ -->
<section class="rp-bio-section">
    <div class="section-container">
        <div class="rp-bio-inner">

            <!-- Left: highlight card -->
            <div class="rp-bio-highlight">
                <div class="rp-bio-highlight-card">
                    <div class="rp-bio-highlight-ring">
                        <div class="rp-bio-highlight-number"><?php echo esc_html( $highlight_number ); ?></div>
                    </div>
                    <div class="rp-bio-highlight-label"><?php echo esc_html( $highlight_label ); ?></div>
                    <div class="rp-bio-highlight-divider"></div>
                    <div class="rp-bio-highlight-stats">
                        <?php foreach ( $highlight_stats as $stat ) : ?>
                            <div class="rp-bio-highlight-stat">
                                <i class="fas <?php echo esc_attr( $stat['highlight_stat_icon'] ); ?>"></i>
                                <span><?php echo esc_html( $stat['highlight_stat_text'] ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Right: bio text + team -->
            <div class="rp-bio-content">
                <div class="section-badge rp-bio-badge">
                    <span class="pulse-dot"><span></span><span></span></span>
                    <span class="section-badge-text">About <?php echo esc_html( explode( ' ', $name )[0] ); ?></span>
                </div>
                <div class="rp-bio-text">
                    <?php echo wp_kses_post( wpautop( $bio ) ); ?>
                </div>
                <div class="rp-bio-accent-bar"></div>

                <?php if ( ! empty( $team_members ) ) : ?>
                    <!-- Team profiles -->
                    <div class="rp-bio-team-section">
                        <h3 class="rp-bio-team-heading"><?php echo esc_html( $team_label ); ?></h3>
                        <div class="rp-bio-team-grid">
                            <!-- Lead pharmacist card -->
                            <?php if ( $profile_image_url ) : ?>
                                <div class="rp-bio-team-card rp-bio-team-card-lead">
                                    <div class="rp-bio-team-card-photo">
                                        <img src="<?php echo esc_url( $profile_image_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" />
                                        <div class="rp-bio-team-card-badge">Lead</div>
                                    </div>
                                    <div class="rp-bio-team-card-info">
                                        <span class="rp-bio-team-card-name"><?php echo esc_html( $name ); ?></span>
                                        <span class="rp-bio-team-card-role"><?php echo esc_html( $title ); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- Colleague cards -->
                            <?php foreach ( $team_members as $member ) : ?>
                                <div class="rp-bio-team-card">
                                    <div class="rp-bio-team-card-photo">
                                        <?php if ( ! empty( $member['team_member_photo'] ) ) : ?>
                                            <img src="<?php echo esc_url( $member['team_member_photo'] ); ?>" alt="<?php echo esc_attr( $member['team_member_name'] ); ?>" />
                                        <?php else : ?>
                                            <div class="rp-bio-team-card-placeholder">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="rp-bio-team-card-info">
                                        <span class="rp-bio-team-card-name"><?php echo esc_html( $member['team_member_name'] ); ?></span>
                                        <?php if ( ! empty( $member['team_member_role'] ) ) : ?>
                                            <span class="rp-bio-team-card-role"><?php echo esc_html( $member['team_member_role'] ); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- ============================================
     SPECIALISMS SECTION
     ============================================ -->
<section class="rp-specialisms-section">
    <div class="section-container">
        <div class="rp-section-header">
            <div class="section-badge">
                <span class="pulse-dot"><span></span><span></span></span>
                <span class="section-badge-text">Areas of Expertise</span>
            </div>
            <h2 class="rp-section-title">Clinical <span class="gradient-text">Specialisms</span></h2>
        </div>
        <div class="rp-specialisms-grid">
            <?php
            $specialism_icons = array(
                'fa-weight-scale',
                'fa-plane-departure',
                'fa-ear-listen',
                'fa-file-prescription',
                'fa-stethoscope',
            );
            foreach ( $specialisms as $i => $spec ) :
                $icon = isset( $specialism_icons[ $i ] ) ? $specialism_icons[ $i ] : 'fa-check';
            ?>
                <div class="rp-specialism-card">
                    <div class="rp-specialism-icon">
                        <i class="fas <?php echo esc_attr( $icon ); ?>"></i>
                    </div>
                    <div class="rp-specialism-content">
                        <h3 class="rp-specialism-title"><?php echo esc_html( $spec['specialism_title'] ); ?></h3>
                        <?php if ( ! empty( $spec['specialism_detail'] ) ) : ?>
                            <p class="rp-specialism-detail"><?php echo esc_html( $spec['specialism_detail'] ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     QUALIFICATIONS SECTION
     ============================================ -->
<section class="rp-qualifications-section">
    <div class="section-container">
        <div class="rp-section-header">
            <div class="section-badge">
                <span class="pulse-dot"><span></span><span></span></span>
                <span class="section-badge-text">Education & Training</span>
            </div>
            <h2 class="rp-section-title">Qualifications & <span class="gradient-text">Credentials</span></h2>
        </div>
        <div class="rp-qualifications-grid">
            <?php foreach ( $qualifications as $i => $qual ) :
                $is_featured = empty( $qual['qual_institution'] );
                $card_class  = 'rp-qualification-card' . ( $is_featured ? ' rp-qualification-featured' : '' );
            ?>
                <div class="<?php echo esc_attr( $card_class ); ?>">
                    <div class="rp-qualification-number"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></div>
                    <div class="rp-qualification-icon">
                        <?php if ( $is_featured ) : ?>
                            <i class="fas fa-award"></i>
                        <?php else : ?>
                            <i class="fas fa-graduation-cap"></i>
                        <?php endif; ?>
                    </div>
                    <h3 class="rp-qualification-name"><?php echo esc_html( $qual['qual_name'] ); ?></h3>
                    <?php if ( ! empty( $qual['qual_institution'] ) ) : ?>
                        <p class="rp-qualification-institution">
                            <i class="fas fa-building-columns"></i>
                            <?php echo esc_html( $qual['qual_institution'] ); ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     LEAD MAGNET / NEWSLETTER SECTION
     ============================================ -->
<section class="rp-leadmagnet-section">
    <div class="section-container">
        <div class="rp-leadmagnet-card">
            <div class="rp-leadmagnet-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <h2 class="rp-leadmagnet-heading"><?php echo esc_html( $lm_heading ); ?></h2>
            <p class="rp-leadmagnet-subheading"><?php echo esc_html( $lm_subheading ); ?></p>
            <form class="rp-leadmagnet-form" action="#" method="post">
                <div class="rp-leadmagnet-fields">
                    <input type="text" name="first_name" placeholder="Your first name" class="rp-leadmagnet-input" required />
                    <input type="email" name="email" placeholder="Your email address" class="rp-leadmagnet-input" required />
                    <button type="submit" class="rp-leadmagnet-button">
                        <?php echo esc_html( $lm_button_text ); ?>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </form>
            <p class="rp-leadmagnet-disclaimer"><?php echo esc_html( $lm_disclaimer ); ?></p>
        </div>
    </div>
</section>

<!-- ============================================
     FINAL CTA SECTION
     ============================================ -->
<section class="rp-cta-section">
    <div class="section-container">
        <div class="rp-cta-inner">
            <h2 class="rp-cta-title"><?php echo esc_html( $cta_title ); ?></h2>
            <p class="rp-cta-description"><?php echo esc_html( $cta_description ); ?></p>
            <div class="rp-cta-actions">
                <a href="<?php echo esc_url( $cta_button_url ); ?>" class="cta-button primary-cta">
                    <?php echo esc_html( $cta_button_text ); ?>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:<?php echo esc_attr( ep_phone_link() ); ?>" class="cta-button secondary-cta">
                    <i class="fas fa-phone"></i>
                    <?php echo esc_html( ep_phone() ); ?>
                </a>
            </div>
            <div class="rp-cta-trust">
                <span class="rp-cta-trust-item"><i class="fas fa-shield-halved"></i> GPhC Registered</span>
                <span class="rp-cta-trust-item"><i class="fas fa-clock"></i> Same-Day Appointments</span>
                <span class="rp-cta-trust-item"><i class="fas fa-user-doctor"></i> No Referral Needed</span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
