<?php
/**
 * NHS prescription registration form: what happens to an answer once it is sent.
 *
 * The form itself is page-templates/page-nhs-prescriptions-register.php, posting to
 * admin-ajax.php (action dp_npreg_form) through assets/js/nhs-prescriptions-register.js.
 *
 * - Each registration is kept as a private dp_nhs_registration post. Only a WordPress
 *   administrator can open it (wp-admin > NHS registrations).
 * - The email to the pharmacy inbox says only that a new form is waiting. None of the
 *   answers are in it, because email is not a safe place for a date of birth, an NHS
 *   number or an exemption category (which can reveal a health condition).
 * - A stored registration is deleted DP_NPREG_KEEP_DAYS days after it arrives, by a daily
 *   WordPress scheduled task. The same clear-out also runs when a new form arrives and
 *   when the NHS registrations screen is opened, so a quiet site cannot hold one longer.
 *   By then the pharmacy has set the person up in its NHS system, which is the record that
 *   counts.
 *
 * Same approach as the Wilmslow Pharmacy registration form. The form no longer asks what
 * medication someone needs, the NHS number is optional (checked when given), and the
 * Summary Care Record permission box is optional.
 *
 * @package Denton_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'DP_NPREG_KEEP_DAYS' ) ) {
    define( 'DP_NPREG_KEEP_DAYS', 14 );
}
define( 'DP_NPREG_POST_TYPE', 'dp_nhs_registration' );
define( 'DP_NPREG_PURGE_HOOK', 'dp_npreg_purge' );
define( 'DP_NPREG_MAX_PER_HOUR', 5 );

/* ------------------------------------------------------------------ the answers */

/** Every stored answer, in the order it is asked, with the label staff see in wp-admin. */
function dp_npreg_fields() {
    return array(
        'name'             => 'Full name',
        'dob'              => 'Date of birth',
        'phone'            => 'Phone number',
        'email'            => 'Email address',
        'address'          => 'Home address',
        'postcode'         => 'Postcode',
        'nhs_number'       => 'NHS number',
        'gp_practice'      => 'GP practice',
        'exemption'        => 'Do they pay for prescriptions?',
        'collection'       => 'Collection or delivery',
        'order_management' => 'Repeat prescriptions',
        'scr_consent'      => 'Summary Care Record',
        'referral'         => 'How they heard about us',
        'comments'         => 'Other comments',
    );
}

function dp_npreg_exemption_labels() {
    return array(
        'pay' => 'I pay for my prescriptions (£9.90 per item)',
        'A'   => 'A — Aged 60 or over / under 16',
        'B'   => 'B — Aged 16–18 in full-time education',
        'D'   => 'D — Maternity Exemption Certificate (MatEx)',
        'E'   => 'E — Medical Exemption Certificate (MedEx)',
        'F'   => 'F — Prescription Prepayment Certificate (PPC)',
        'W'   => 'W — HRT Prescription Prepayment Certificate',
        'G'   => 'G — Ministry of Defence exemption',
        'L'   => 'L — HC2 certificate (full help)',
        'H'   => 'H — Income Support or income-related ESA',
        'K'   => "K — Income-based Jobseeker's Allowance",
        'M'   => 'M — Tax Credit exemption certificate',
        'S'   => 'S — Pension Credit Guarantee Credit',
        'U'   => 'U — Universal Credit (meets criteria)',
    );
}

/** Exactly 10 digits and the standard NHS Modulus 11 check digit. */
function dp_npreg_nhs_number_is_valid( $digits ) {
    $digits = (string) $digits;
    if ( ! preg_match( '/^\d{10}$/', $digits ) ) {
        return false;
    }
    $sum = 0;
    for ( $i = 0; $i < 9; $i++ ) {
        $sum += ( (int) $digits[ $i ] ) * ( 10 - $i );
    }
    $check = 11 - ( $sum % 11 );
    if ( 11 === $check ) {
        $check = 0;
    }
    if ( 10 === $check ) {
        return false;
    }
    return $check === (int) $digits[9];
}

/**
 * Reads, sanitises and checks one submission.
 *
 * @param array $raw The posted fields ($_POST).
 * @return array array( 'values' => field => string, 'error' => '' or a message for the person ).
 */
function dp_npreg_validate( array $raw ) {
    $raw = wp_unslash( $raw );

    $collection_labels = array(
        'collect'  => 'Will collect from the pharmacy',
        'delivery' => 'Would like home delivery',
    );
    $referral_labels = array(
        'social'  => 'Social Media (Facebook / Instagram)',
        'leaflet' => 'Leaflet Drop',
        'wom'     => 'Word of Mouth',
        'other'   => 'Other',
    );

    $exemption  = sanitize_text_field( $raw['npreg_exemption'] ?? '' );
    $collection = sanitize_text_field( $raw['npreg_collection'] ?? '' );
    $referral   = sanitize_text_field( $raw['npreg_referral'] ?? '' );
    $exemptions = dp_npreg_exemption_labels();

    $values = array(
        'name'             => sanitize_text_field( $raw['npreg_name'] ?? '' ),
        'dob'              => sanitize_text_field( $raw['npreg_dob'] ?? '' ),
        'phone'            => sanitize_text_field( $raw['npreg_phone'] ?? '' ),
        'email'            => sanitize_email( $raw['npreg_email'] ?? '' ),
        'address'          => sanitize_textarea_field( $raw['npreg_address'] ?? '' ),
        'postcode'         => strtoupper( sanitize_text_field( $raw['npreg_postcode'] ?? '' ) ),
        'nhs_number'       => preg_replace( '/\s+/', '', sanitize_text_field( $raw['npreg_nhs_number'] ?? '' ) ),
        'gp_practice'      => sanitize_text_field( $raw['npreg_gp_practice'] ?? '' ),
        'exemption'        => isset( $exemptions[ $exemption ] ) ? $exemptions[ $exemption ] : '',
        'collection'       => isset( $collection_labels[ $collection ] ) ? $collection_labels[ $collection ] : '',
        'order_management' => ( 'acknowledged' === ( $raw['npreg_order_management'] ?? '' ) ) ? 'Understands they order their own repeat prescriptions (NHS App or surgery)' : '',
        'scr_consent'      => empty( $raw['npreg_scr_consent'] ) ? 'Not given' : 'Permission given to look at their Summary Care Record when it helps their care (record it on the PMR)',
        'referral'         => isset( $referral_labels[ $referral ] ) ? $referral_labels[ $referral ] : '',
        'comments'         => sanitize_textarea_field( $raw['npreg_comments'] ?? '' ),
    );

    $required = array( 'name', 'dob', 'phone', 'email', 'address', 'postcode', 'gp_practice', 'exemption', 'collection' );
    foreach ( $required as $field ) {
        if ( '' === $values[ $field ] ) {
            return array( 'values' => $values, 'error' => 'Please fill in all required fields.' );
        }
    }

    if ( ! is_email( $values['email'] ) ) {
        return array( 'values' => $values, 'error' => 'Please enter a valid email address.' );
    }

    if ( '' !== $values['nhs_number'] && ! dp_npreg_nhs_number_is_valid( $values['nhs_number'] ) ) {
        return array( 'values' => $values, 'error' => 'That NHS number does not look right. Please check it, or leave it blank and we will find it.' );
    }

    if ( '' === $values['order_management'] ) {
        return array( 'values' => $values, 'error' => 'Please confirm you understand you will need to order your own repeat prescriptions.' );
    }

    return array( 'values' => $values, 'error' => '' );
}

/* ------------------------------------------------------------------ the store */

function dp_npreg_register_post_type() {
    register_post_type( DP_NPREG_POST_TYPE, array(
        'labels'              => array(
            'name'          => 'NHS registrations',
            'singular_name' => 'NHS registration',
            'menu_name'     => 'NHS registrations',
            'all_items'     => 'All NHS registrations',
            'edit_item'     => 'NHS registration',
            'search_items'  => 'Search NHS registrations',
            'not_found'     => 'No NHS registrations waiting.',
        ),
        'public'              => false,
        'publicly_queryable'  => false,
        'exclude_from_search' => true,
        'has_archive'         => false,
        'rewrite'             => false,
        'query_var'           => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => false,
        'show_in_rest'        => false,
        'delete_with_user'    => false,
        'menu_icon'           => 'dashicons-clipboard',
        'menu_position'       => 26,
        'supports'            => array( 'title' ),
        'map_meta_cap'        => false,
        'capabilities'        => array(
            'edit_post'              => 'manage_options',
            'read_post'              => 'manage_options',
            'delete_post'            => 'manage_options',
            'edit_posts'             => 'manage_options',
            'edit_others_posts'      => 'manage_options',
            'delete_posts'           => 'manage_options',
            'delete_others_posts'    => 'manage_options',
            'publish_posts'          => 'manage_options',
            'read_private_posts'     => 'manage_options',
            'edit_published_posts'   => 'manage_options',
            'delete_published_posts' => 'manage_options',
            'delete_private_posts'   => 'manage_options',
            'edit_private_posts'     => 'manage_options',
            'create_posts'           => 'do_not_allow',
        ),
    ) );
}
add_action( 'init', 'dp_npreg_register_post_type' );

/** Keeps one registration as a private post. Returns its ID, or 0 if it could not be saved. */
function dp_npreg_store( array $values ) {
    $title = ( '' === $values['name'] ? 'NHS registration' : $values['name'] ) . ' — ' . wp_date( 'j M Y' );
    $id    = wp_insert_post( array(
        'post_type'    => DP_NPREG_POST_TYPE,
        'post_status'  => 'private',
        'post_title'   => $title,
        'post_content' => '',
    ), true );
    if ( is_wp_error( $id ) || ! $id ) {
        return 0;
    }
    foreach ( array_keys( dp_npreg_fields() ) as $field ) {
        update_post_meta( $id, '_dp_npreg_' . $field, $values[ $field ] ?? '' );
    }
    return (int) $id;
}

/* ------------------------------------------------------------------ the alert */

function dp_npreg_alert_subject() {
    return '[' . dp_pharmacy_name() . '] New NHS registration form: log in to read it';
}

/** A short alert. Deliberately carries none of the answers, not even the name. */
function dp_npreg_alert_body( $post_id ) {
    $lines = array(
        'A new NHS prescription registration form is waiting on the ' . dp_pharmacy_name() . ' website.',
        '',
        'For privacy, the answers are not in this email. Log in to WordPress and open NHS registrations to read it:',
        admin_url( 'post.php?post=' . (int) $post_id . '&action=edit' ),
        '',
        'The website copy is deleted automatically ' . (int) DP_NPREG_KEEP_DAYS . ' days after it arrives, so please set the registration up before then.',
        '',
        'Received ' . wp_date( 'j F Y, H:i' ) . '.',
    );
    return implode( "\n", $lines );
}

function dp_npreg_send_alert( $post_id ) {
    $to = dp_option( 'pharmacy_email', 'info@dentonpharmacy.co.uk' );
    if ( ! is_email( $to ) ) {
        error_log( 'denton-pharmacy: pharmacy_email is not a valid address; NHS registration ' . (int) $post_id . ' was stored but no alert was sent.' );
        return false;
    }
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . dp_pharmacy_name() . ' <wordpress@' . wp_parse_url( home_url(), PHP_URL_HOST ) . '>',
    );
    return wp_mail( $to, dp_npreg_alert_subject(), dp_npreg_alert_body( $post_id ), $headers );
}

/* ------------------------------------------------------------------ the clear-out */

/** Deletes stored registrations older than DP_NPREG_KEEP_DAYS. Returns how many went. */
function dp_npreg_purge() {
    $days = (int) DP_NPREG_KEEP_DAYS;
    if ( $days <= 0 ) {
        return 0;
    }
    $cutoff  = gmdate( 'Y-m-d H:i:s', time() - $days * DAY_IN_SECONDS );
    $deleted = 0;
    for ( $batch = 0; $batch < 20; $batch++ ) {
        $old = get_posts( array(
            'post_type'        => DP_NPREG_POST_TYPE,
            'post_status'      => 'any',
            'date_query'       => array( array( 'before' => $cutoff, 'column' => 'post_date_gmt', 'inclusive' => true ) ),
            'fields'           => 'ids',
            'posts_per_page'   => 100,
            'no_found_rows'    => true,
            'suppress_filters' => true,
        ) );
        if ( empty( $old ) ) {
            break;
        }
        foreach ( $old as $id ) {
            if ( wp_delete_post( (int) $id, true ) ) {
                $deleted++;
            }
        }
    }
    return $deleted;
}
add_action( DP_NPREG_PURGE_HOOK, 'dp_npreg_purge' );

function dp_npreg_schedule_purge() {
    if ( ! wp_next_scheduled( DP_NPREG_PURGE_HOOK ) ) {
        wp_schedule_event( time() + HOUR_IN_SECONDS, 'daily', DP_NPREG_PURGE_HOOK );
    }
}
add_action( 'init', 'dp_npreg_schedule_purge' );

/** Never show staff a registration that is past its deletion date. */
function dp_npreg_purge_on_admin_screen() {
    $screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
    if ( $screen && DP_NPREG_POST_TYPE === $screen->post_type ) {
        dp_npreg_purge();
    }
}
add_action( 'current_screen', 'dp_npreg_purge_on_admin_screen' );

function dp_npreg_unschedule_purge() {
    wp_clear_scheduled_hook( DP_NPREG_PURGE_HOOK );
}
add_action( 'switch_theme', 'dp_npreg_unschedule_purge' );

/* ------------------------------------------------------------------ the form handler */

function dp_npreg_rate_ok() {
    $ip  = isset( $_SERVER['REMOTE_ADDR'] ) ? (string) $_SERVER['REMOTE_ADDR'] : '';
    $key = 'dp_npreg_rate_' . substr( wp_hash( $ip ), 0, 20 );
    $hits = (int) get_transient( $key );
    if ( $hits >= DP_NPREG_MAX_PER_HOUR ) {
        return false;
    }
    set_transient( $key, $hits + 1, HOUR_IN_SECONDS );
    return true;
}

/**
 * admin-ajax.php handler for the registration form. Replies in JSON for
 * assets/js/nhs-prescriptions-register.js.
 */
function dp_npreg_form_handler() {
    if ( ! isset( $_POST['dp_npreg_nonce'] ) || ! wp_verify_nonce( $_POST['dp_npreg_nonce'], 'dp_npreg_form_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed. Please refresh the page and try again.' ) );
    }

    if ( ! empty( $_POST['npreg_website'] ) ) {
        wp_send_json_error( array( 'message' => 'Spam detected.' ) );
    }

    $checked = dp_npreg_validate( $_POST );
    if ( '' !== $checked['error'] ) {
        wp_send_json_error( array( 'message' => $checked['error'] ) );
    }

    if ( ! dp_npreg_rate_ok() ) {
        wp_send_json_error( array( 'message' => 'We have had a lot of registrations from your connection. Please call us on ' . dp_phone() . ' instead.' ) );
    }

    $post_id = dp_npreg_store( $checked['values'] );
    if ( ! $post_id ) {
        wp_send_json_error( array( 'message' => 'Sorry, there was an error sending your registration. Please call us on ' . dp_phone() . ' instead.' ) );
    }

    dp_npreg_send_alert( $post_id );
    dp_npreg_purge();

    wp_send_json_success( array(
        'message' => 'Thank you for registering with ' . dp_pharmacy_name() . '. We will be in touch within 1 working day to confirm your registration.',
    ) );
}
add_action( 'wp_ajax_dp_npreg_form', 'dp_npreg_form_handler' );
add_action( 'wp_ajax_nopriv_dp_npreg_form', 'dp_npreg_form_handler' );

/* ------------------------------------------------------------------ wp-admin */

function dp_npreg_meta_box() {
    add_meta_box( 'dp-npreg-answers', 'What they told us', 'dp_npreg_meta_box_html', DP_NPREG_POST_TYPE, 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'dp_npreg_meta_box' );

function dp_npreg_deletion_date( $post ) {
    $arrived = strtotime( get_post_field( 'post_date_gmt', $post ) . ' UTC' );
    return wp_date( 'j F Y', $arrived + (int) DP_NPREG_KEEP_DAYS * DAY_IN_SECONDS );
}

function dp_npreg_meta_box_html( $post ) {
    echo '<p>This copy is deleted automatically on ' . esc_html( dp_npreg_deletion_date( $post ) ) . '.</p>';
    echo '<table class="widefat striped"><tbody>';
    foreach ( dp_npreg_fields() as $field => $label ) {
        $value = (string) get_post_meta( $post->ID, '_dp_npreg_' . $field, true );
        if ( '' === $value ) {
            continue;
        }
        echo '<tr><th scope="row" style="width:38%">' . esc_html( $label ) . '</th><td>' . nl2br( esc_html( $value ) ) . '</td></tr>';
    }
    echo '</tbody></table>';
}

function dp_npreg_columns( $columns ) {
    return array(
        'cb'              => isset( $columns['cb'] ) ? $columns['cb'] : '',
        'title'           => 'NHS registration',
        'dp_npreg_how'    => 'Collection or delivery',
        'dp_npreg_delete' => 'Deleted automatically on',
        'date'            => isset( $columns['date'] ) ? $columns['date'] : 'Date',
    );
}
add_filter( 'manage_' . DP_NPREG_POST_TYPE . '_posts_columns', 'dp_npreg_columns' );

function dp_npreg_column( $column, $post_id ) {
    if ( 'dp_npreg_how' === $column ) {
        echo esc_html( (string) get_post_meta( $post_id, '_dp_npreg_collection', true ) );
    } elseif ( 'dp_npreg_delete' === $column ) {
        echo esc_html( dp_npreg_deletion_date( get_post( $post_id ) ) );
    }
}
add_action( 'manage_' . DP_NPREG_POST_TYPE . '_posts_custom_column', 'dp_npreg_column', 10, 2 );
