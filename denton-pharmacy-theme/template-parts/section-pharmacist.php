<?php
/**
 * Template Part: Meet Your Clinical Team — 6-Card Grid
 *
 * Responsive team grid: 1 col mobile, 2 col tablet, 3 col desktop.
 * Five clinical profiles and a link to the full team.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// --- Section header ---
$badge_text   = dp_field( 'pharmacist_badge_text', 'YOUR LOCAL EXPERT' );
$section_title = dp_field( 'pharmacist_section_title', 'Meet Your Clinical Team' );
$section_sub   = dp_field( 'pharmacist_section_subtitle', 'Every patient is seen by the right person for their needs from our pharmacists and prescribers to our wider clinical team.' );

// --- CTAs ---
$cta_text   = dp_field( 'pharmacist_cta_text', 'Start Your Online Consultation' );
$pharm_cta_default = is_page_template( 'page-templates/page-weight-loss.php' )
    ? '#weight-loss-calendar'
    : dp_booking_url();
$cta_url    = dp_field( 'pharmacist_cta_url', $pharm_cta_default );
$phone      = dp_phone();
$phone_link = dp_phone_link();

// --- Trust checks ---
$default_trust_checks = array( 'Same-Day Appointments', 'No GP Referral Needed', 'Face-to-Face Consultations' );
$trust_checks = array();
if ( function_exists( 'have_rows' ) && have_rows( 'pharmacist_trust_checks' ) ) {
    while ( have_rows( 'pharmacist_trust_checks' ) ) {
        the_row();
        $text = get_sub_field( 'check_text' );
        if ( $text ) {
            $trust_checks[] = $text;
        }
    }
}
if ( empty( $trust_checks ) ) {
    $trust_checks = $default_trust_checks;
}

// --- Team members: per-page repeater → global options repeater → hardcoded defaults ---
$team = array();
if ( function_exists( 'have_rows' ) && have_rows( 'home_team_members' ) ) {
    while ( have_rows( 'home_team_members' ) ) {
        the_row();
        $tags = array();
        if ( have_rows( 'team_tags' ) ) {
            while ( have_rows( 'team_tags' ) ) {
                the_row();
                $label = get_sub_field( 'tag_label' );
                if ( $label ) {
                    $tags[] = $label;
                }
            }
        }
        $team[] = array(
            'photo_id' => get_sub_field( 'team_photo' ),
            'name'     => get_sub_field( 'team_name' ) ?: '',
            'role'     => get_sub_field( 'team_role' ) ?: '',
            'gphc'     => get_sub_field( 'team_gphc' ) ?: '',
            'tags'     => $tags,
        );
    }
}

if ( empty( $team ) && function_exists( 'have_rows' ) && have_rows( 'pharmacy_team_members', 'option' ) ) {
    while ( have_rows( 'pharmacy_team_members', 'option' ) ) {
        the_row();
        $tags = array();
        if ( have_rows( 'team_tags' ) ) {
            while ( have_rows( 'team_tags' ) ) {
                the_row();
                $label = get_sub_field( 'tag_label' );
                if ( $label ) {
                    $tags[] = $label;
                }
            }
        }
        $team[] = array(
            'photo_id' => get_sub_field( 'team_photo' ),
            'name'     => get_sub_field( 'team_name' ) ?: '',
            'role'     => get_sub_field( 'team_role' ) ?: '',
            'gphc'     => get_sub_field( 'team_gphc' ) ?: '',
            'tags'     => $tags,
        );
    }
}

if ( empty( $team ) ) {
    $team = array(
        array( 'photo_id' => 0, 'name' => 'Ahmed Al-Liabi', 'role' => 'Superintendent Pharmacist & Independent Prescriber', 'gphc' => '2208502', 'tags' => array( 'Independent Prescriber', 'Weight Loss Specialist' ) ),
        array( 'photo_id' => 0, 'name' => 'James Button', 'role' => 'Pharmacist Manager', 'gphc' => '2240147', 'tags' => array() ),
        array( 'photo_id' => 0, 'name' => 'Paula Gaunt', 'role' => 'Trainee Pharmacy Technician', 'gphc' => '', 'tags' => array( 'Ear Microsuction Specialist' ) ),
        array( 'photo_id' => 0, 'name' => 'Elisha Mackin', 'role' => 'Trainee Pharmacy Technician', 'gphc' => '', 'tags' => array() ),
        array( 'photo_id' => 0, 'name' => 'Joanne Tabberner', 'role' => 'Pharmacy Assistant', 'gphc' => '', 'tags' => array() ),
    );
}

// The homepage's saved list can be shorter than the published Team page.
// Reuse Elisha and Joanne's existing profiles without changing saved ACF data.
$team_page = get_page_by_path( 'team' );
$team_page_url = $team_page && 'publish' === $team_page->post_status ? get_permalink( $team_page ) : '';
if ( $team_page_url && function_exists( 'get_field' ) ) {
    $team_profiles = get_field( 'team_members', $team_page->ID );
    $additional_members = array( 'Elisha Mackin', 'Joanne Tabberner' );

    foreach ( $additional_members as $full_name ) {
        $aliases = array( strtolower( $full_name ), strtolower( strtok( $full_name, ' ' ) ) );
        foreach ( is_array( $team_profiles ) ? $team_profiles : array() as $profile ) {
            if ( ! in_array( strtolower( trim( $profile['name'] ?? '' ) ), $aliases, true ) ) {
                continue;
            }

            $existing_index = null;
            foreach ( $team as $index => $member ) {
                if ( in_array( strtolower( trim( $member['name'] ) ), $aliases, true ) ) {
                    $existing_index = $index;
                    break;
                }
            }

            if ( null !== $existing_index ) {
                // Keep any page-specific details, filling only a missing photo.
                if ( empty( $team[ $existing_index ]['photo_id'] ) ) {
                    $team[ $existing_index ]['photo_id'] = $profile['image'] ?? 0;
                }
                break;
            }

            $tags = array();
            foreach ( ( $profile['specialties'] ?? array() ) ?: array() as $specialty ) {
                if ( ! empty( $specialty['specialty'] ) ) {
                    $tags[] = $specialty['specialty'];
                }
            }
            $team[] = array(
                'photo_id' => $profile['image'] ?? 0,
                'name'     => $full_name,
                'role'     => $profile['role'] ?? '',
                'gphc'     => $profile['gphc_number'] ?? '',
                'tags'     => $tags,
            );
            break;
        }
    }
}

// Keep the homepage's confirmed role and specialties alongside saved profiles.
foreach ( $team as $index => $member ) {
    $profile_name = strtolower( trim( $member['name'] ) );
    $additional_tags = array();

    if ( in_array( $profile_name, array( 'ahmed', 'ahmed al-liabi' ), true ) ) {
        $additional_tags = array( 'Travel Health Specialist' );
    } elseif ( in_array( $profile_name, array( 'james', 'james button' ), true ) ) {
        $team[ $index ]['role'] = 'Pharmacy Manager';
        $additional_tags = array( 'Weight Loss Specialist', 'Travel Health Specialist', 'Phlebotomist' );
    } elseif ( in_array( $profile_name, array( 'paula', 'paula gaunt' ), true ) ) {
        $additional_tags = array( 'Phlebotomist' );
    }

    $team[ $index ]['tags'] = array_values( array_unique( array_merge( $member['tags'], $additional_tags ) ) );
}
?>

<section class="pharmacist-section" id="about">

    <div class="pharmacist-bg-glow pharmacist-bg-glow-1"></div>
    <div class="pharmacist-bg-glow pharmacist-bg-glow-2"></div>

    <div class="section-container">

        <!-- Section header -->
        <div class="pharmacist-header">
            <div class="section-badge">
                <svg class="section-badge-icon" width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span class="section-badge-text"><?php echo esc_html( $badge_text ); ?></span>
            </div>
            <h2 class="pharmacist-section-title"><?php echo esc_html( $section_title ); ?></h2>
            <p class="pharmacist-section-subtitle"><?php echo esc_html( $section_sub ); ?></p>
        </div>

        <!-- Team grid -->
        <div class="team-grid">
            <?php foreach ( $team as $member ) :
                $photo_url = ! empty( $member['photo_id'] ) ? wp_get_attachment_image_url( $member['photo_id'], 'medium' ) : '';
                $initials  = '';
                if ( empty( $photo_url ) ) {
                    $parts = explode( ' ', $member['name'] );
                    $initials = strtoupper( substr( $parts[0], 0, 1 ) . ( isset( $parts[1] ) ? substr( $parts[1], 0, 1 ) : '' ) );
                }
            ?>
                <article class="team-card">
                    <div class="team-card-identity">
                        <div class="team-card-photo">
                            <?php if ( $photo_url ) : ?>
                                <img src="<?php echo esc_url( $photo_url ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" width="80" height="80" loading="lazy" decoding="async" />
                            <?php else : ?>
                                <span class="team-card-initials"><?php echo esc_html( $initials ); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="team-card-details">
                            <h3 class="team-card-name"><?php echo esc_html( $member['name'] ); ?></h3>
                            <p class="team-card-role"><?php echo esc_html( $member['role'] ); ?></p>
                        </div>
                    </div>
                    <?php if ( ! empty( $member['gphc'] ) || ! empty( $member['tags'] ) ) : ?>
                        <div class="team-card-meta">
                            <?php if ( ! empty( $member['gphc'] ) ) : ?>
                                <a href="https://www.pharmacyregulation.org/registers/pharmacist" target="_blank" rel="noopener noreferrer" class="team-card-gphc">
                                    <i class="fas fa-shield-halved" aria-hidden="true"></i>
                                    GPhC: <?php echo esc_html( $member['gphc'] ); ?>
                                </a>
                            <?php endif; ?>
                            <?php if ( ! empty( $member['tags'] ) ) : ?>
                                <div class="team-card-tags">
                                    <?php foreach ( $member['tags'] as $tag ) : ?>
                                        <span class="team-card-tag"><?php echo esc_html( $tag ); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
            <?php if ( 5 === count( $team ) && $team_page_url ) : ?>
                <article class="team-card team-card-more">
                    <div class="team-card-identity">
                        <span class="team-card-more-icon" aria-hidden="true"><i class="fas fa-users"></i></span>
                        <div class="team-card-details">
                            <h3 class="team-card-name">More familiar faces</h3>
                            <p class="team-card-role">Get to know everyone who helps care for our Denton community.</p>
                        </div>
                    </div>
                    <a class="team-card-link" href="<?php echo esc_url( $team_page_url ); ?>">Meet the whole team <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </article>
            <?php endif; ?>
        </div>

        <!-- CTAs -->
        <div class="pharmacist-cta">
            <a href="<?php echo esc_url( $cta_url ); ?>" class="cta-button primary-cta">
                <?php echo esc_html( $cta_text ); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="cta-button secondary-cta">
                <i class="fas fa-phone"></i>
                <?php echo esc_html( 'Call ' . $phone ); ?>
            </a>
        </div>

        <!-- Trust checks -->
        <div class="pharmacist-trust-checks">
            <?php foreach ( $trust_checks as $check ) : ?>
                <span class="pharmacist-trust-item">
                    <i class="fas fa-check-circle"></i>
                    <?php echo esc_html( $check ); ?>
                </span>
            <?php endforeach; ?>
        </div>

    </div>
</section>
