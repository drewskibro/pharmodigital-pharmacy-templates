<?php
/**
 * Run: php tests/test-nhs-registration-store.php
 *
 * Denton and Bowland NHS prescription registration form (inc/nhs-registration.php):
 * answers are kept in a private record, the email carries none of them, the record
 * is deleted after 14 days by a daily scheduled task, and the medication question
 * has gone. WordPress is replaced by small in-memory fakes; each theme runs in its
 * own PHP process. The last part reads the changed templates as text and renders
 * the three legal pages, so no draft marker or third-party font address ships.
 */

$themes = array( 'denton' => 'dp', 'bowland' => 'bp' );

if ( 3 === $argc && 'theme' === $argv[1] ) {
    define( 'ABSPATH', __DIR__ . '/' );
    define( 'DAY_IN_SECONDS', 86400 );
    define( 'HOUR_IN_SECONDS', 3600 );
    $GLOBALS['T_SLUG']   = $argv[2];
    $GLOBALS['T_PREFIX'] = $themes[ $argv[2] ];
    exit( run_theme_cases( $argv[2], $themes[ $argv[2] ] ) );
}

$failed = 0;
foreach ( array_keys( $themes ) as $slug ) {
    $command = implode( ' ', array_map( 'escapeshellarg', array( PHP_BINARY, __FILE__, 'theme', $slug ) ) );
    $output  = array();
    $status  = 0;
    exec( $command . ' 2>&1', $output, $status );
    fwrite( STDOUT, implode( PHP_EOL, $output ) . PHP_EOL );
    // A theme passes only if it exits 0 AND reports that every case ran.
    if ( 0 !== $status || ! in_array( "done $slug: all cases passed", $output, true ) ) {
        $failed++;
    }
}
if ( $failed ) {
    fwrite( STDERR, "NHS registration tests failed.\n" );
    exit( 1 );
}
fwrite( STDOUT, "All NHS registration and legal page checks passed for both themes.\n" );
exit( 0 );

/* ======================================================================= fakes */

class T_Json_Exit extends Exception {
    public $success;
    public $data;
    public function __construct( $success, $data ) {
        parent::__construct( 'json' );
        $this->success = $success;
        $this->data    = $data;
    }
}

function t_reset() {
    $GLOBALS['T'] = array(
        'posts'      => array(),
        'meta'       => array(),
        'next_id'    => 100,
        'mail'       => array(),
        'events'     => array(),
        'transients' => array(),
        'actions'    => isset( $GLOBALS['T']['actions'] ) ? $GLOBALS['T']['actions'] : array(),
        'post_types' => isset( $GLOBALS['T']['post_types'] ) ? $GLOBALS['T']['post_types'] : array(),
        'insert_ok'  => true,
        'email_opt'  => null,
        'screen'     => null,
    );
    $_POST   = array();
    $_SERVER = array( 'REMOTE_ADDR' => '203.0.113.7' );
}

function add_action( $hook, $callback, $priority = 10, $args = 1 ) { $GLOBALS['T']['actions'][ $hook ][] = $callback; }
function add_filter( $hook, $callback, $priority = 10, $args = 1 ) { $GLOBALS['T']['actions'][ $hook ][] = $callback; }
function do_action( $hook ) {
    foreach ( isset( $GLOBALS['T']['actions'][ $hook ] ) ? $GLOBALS['T']['actions'][ $hook ] : array() as $cb ) {
        call_user_func( $cb );
    }
}
function register_post_type( $type, $args ) { $GLOBALS['T']['post_types'][ $type ] = $args; }
function wp_unslash( $value ) { return is_array( $value ) ? array_map( 'wp_unslash', $value ) : stripslashes( (string) $value ); }
function sanitize_text_field( $s ) { return trim( preg_replace( '/\s+/', ' ', strip_tags( (string) $s ) ) ); }
function sanitize_textarea_field( $s ) { return trim( strip_tags( (string) $s ) ); }
function sanitize_email( $s ) { return trim( (string) $s ); }
function is_email( $s ) { return (bool) filter_var( $s, FILTER_VALIDATE_EMAIL ); }
function wp_date( $format, $ts = null ) { return gmdate( $format, null === $ts ? time() : $ts ); }
function is_wp_error( $x ) { return false; }
function wp_insert_post( $args, $wp_error = false ) {
    if ( ! $GLOBALS['T']['insert_ok'] ) {
        return 0;
    }
    $id = $GLOBALS['T']['next_id']++;
    $GLOBALS['T']['posts'][ $id ] = array_merge( $args, array( 'ID' => $id, 'post_date_gmt' => gmdate( 'Y-m-d H:i:s' ) ) );
    return $id;
}
function update_post_meta( $id, $key, $value ) { $GLOBALS['T']['meta'][ $id ][ $key ] = $value; }
function get_post_meta( $id, $key, $single = false ) { return isset( $GLOBALS['T']['meta'][ $id ][ $key ] ) ? $GLOBALS['T']['meta'][ $id ][ $key ] : ''; }
function get_posts( $q ) {
    $before = $q['date_query'][0]['before'];
    if ( 'post_date_gmt' !== $q['date_query'][0]['column'] || true !== $q['date_query'][0]['inclusive'] ) {
        throw new Exception( 'purge must compare post_date_gmt inclusively' );
    }
    $ids = array();
    foreach ( $GLOBALS['T']['posts'] as $id => $p ) {
        if ( $p['post_type'] === $q['post_type'] && $p['post_date_gmt'] <= $before ) {
            $ids[] = $id;
        }
    }
    return array_slice( $ids, 0, $q['posts_per_page'] );
}
function wp_delete_post( $id, $force = false ) {
    if ( true !== $force ) {
        throw new Exception( 'registrations must be deleted outright, not sent to the bin' );
    }
    if ( ! isset( $GLOBALS['T']['posts'][ $id ] ) ) {
        return false;
    }
    unset( $GLOBALS['T']['posts'][ $id ], $GLOBALS['T']['meta'][ $id ] );
    return true;
}
function get_post_field( $field, $post ) { return $GLOBALS['T']['posts'][ is_object( $post ) ? $post->ID : $post ][ $field ]; }
function get_post( $id ) { return (object) $GLOBALS['T']['posts'][ $id ]; }
function wp_mail( $to, $subject, $body, $headers ) { $GLOBALS['T']['mail'][] = compact( 'to', 'subject', 'body', 'headers' ); return true; }
function admin_url( $path ) { return 'https://example.test/wp-admin/' . $path; }
function home_url( $path = '' ) { return 'https://example.test' . $path; }
function wp_parse_url( $url, $component ) { return parse_url( $url, $component ); }
function wp_next_scheduled( $hook ) { return isset( $GLOBALS['T']['events'][ $hook ] ) ? $GLOBALS['T']['events'][ $hook ]['ts'] : false; }
function wp_schedule_event( $ts, $recurrence, $hook ) {
    if ( isset( $GLOBALS['T']['events'][ $hook ] ) ) {
        throw new Exception( 'purge scheduled twice' );
    }
    $GLOBALS['T']['events'][ $hook ] = array( 'ts' => $ts, 'recurrence' => $recurrence );
    return true;
}
function wp_clear_scheduled_hook( $hook ) { unset( $GLOBALS['T']['events'][ $hook ] ); }
function get_transient( $k ) { return isset( $GLOBALS['T']['transients'][ $k ] ) ? $GLOBALS['T']['transients'][ $k ] : false; }
function set_transient( $k, $v, $ttl ) { $GLOBALS['T']['transients'][ $k ] = $v; return true; }
function wp_hash( $s ) { return hash( 'sha256', 'salt' . $s ); }
function wp_verify_nonce( $nonce, $action ) { return 'good-nonce' === $nonce && $GLOBALS['T_PREFIX'] . '_npreg_form_nonce' === $action; }
function wp_send_json_error( $data ) { throw new T_Json_Exit( false, $data ); }
function wp_send_json_success( $data ) { throw new T_Json_Exit( true, $data ); }
function get_current_screen() { return $GLOBALS['T']['screen']; }
function add_meta_box() {}
function esc_html( $s ) { return htmlspecialchars( (string) $s, ENT_QUOTES, 'UTF-8' ); }
function esc_attr( $s ) { return htmlspecialchars( (string) $s, ENT_QUOTES, 'UTF-8' ); }
function esc_url( $s ) { return htmlspecialchars( (string) $s, ENT_QUOTES, 'UTF-8' ); }
function get_header() {}
function get_footer() {}

// Theme helpers both themes provide in functions.php.
function t_site_name() { return 'denton' === $GLOBALS['T_SLUG'] ? 'Denton Pharmacy' : 'Bowland Pharmacy'; }
function t_option( $key, $default = null ) {
    if ( 'pharmacy_email' === $key && null !== $GLOBALS['T']['email_opt'] ) {
        return $GLOBALS['T']['email_opt'];
    }
    return $default;
}
function t_phone() { return 'denton' === $GLOBALS['T_SLUG'] ? '0161 336 2548' : '0161 998 7114'; }
function t_phone_link() { return str_replace( ' ', '', t_phone() ); }
function dp_pharmacy_name() { return t_site_name(); }
function bp_pharmacy_name() { return t_site_name(); }
function dp_option( $k, $d = null ) { return t_option( $k, $d ); }
function bp_option( $k, $d = null ) { return t_option( $k, $d ); }
function dp_phone() { return t_phone(); }
function bp_phone() { return t_phone(); }
function dp_phone_link() { return t_phone_link(); }
function bp_phone_link() { return t_phone_link(); }

/* ======================================================================= helpers */

function t_assert( $cond, $message ) {
    if ( ! $cond ) {
        throw new Exception( $message );
    }
}

function t_call( $suffix, ...$args ) {
    return call_user_func_array( $GLOBALS['T_PREFIX'] . '_' . $suffix, $args );
}

function t_good_post( $overrides = array() ) {
    $P = $GLOBALS['T_PREFIX'];
    return array_merge( array(
        $P . '_npreg_nonce'      => 'good-nonce',
        'npreg_name'             => 'Jane Testperson',
        'npreg_dob'              => '1970-02-03',
        'npreg_phone'            => '07700 900123',
        'npreg_email'            => 'jane@example.test',
        'npreg_address'          => '1 Sample Street, Testtown',
        'npreg_postcode'         => 'zz9 9zz',
        'npreg_nhs_number'       => '943 476 5919',
        'npreg_gp_practice'      => 'Sample Medical Practice',
        'npreg_exemption'        => 'E',
        'npreg_collection'       => 'delivery',
        'npreg_order_management' => 'acknowledged',
        'npreg_scr_consent'      => '1',
        'npreg_referral'         => 'leaflet',
        'npreg_comments'         => 'Please ring after 5pm',
        'npreg_medication'       => 'Ramipril 5mg',
    ), $overrides );
}

/** Posts a form through the real handler; returns array( success, message ). */
function t_submit( array $post ) {
    $_POST = $post;
    try {
        t_call( 'npreg_form_handler' );
    } catch ( T_Json_Exit $exit ) {
        return array( $exit->success, (string) $exit->data['message'] );
    }
    throw new Exception( 'handler returned without replying' );
}

function t_age_post( $id, $seconds_old ) {
    $GLOBALS['T']['posts'][ $id ]['post_date_gmt'] = gmdate( 'Y-m-d H:i:s', time() - $seconds_old );
}

/* ======================================================================= cases */

function run_theme_cases( $slug, $P ) {
    $C    = strtoupper( $P );
    $root = dirname( __DIR__ ) . '/' . $slug . '-pharmacy-theme';
    t_reset();
    require $root . '/inc/nhs-registration.php';

    $cases = array();

    $cases['keeps answers for 14 days, in a private admin-only type'] = function () use ( $P, $C ) {
        t_assert( 14 === constant( $C . '_NPREG_KEEP_DAYS' ), 'keep days must be 14' );
        do_action( 'init' );
        $type = $GLOBALS['T']['post_types'][ constant( $C . '_NPREG_POST_TYPE' ) ];
        t_assert( false === $type['public'] && false === $type['publicly_queryable'], 'type must not be public' );
        t_assert( false === $type['show_in_rest'], 'type must stay out of the REST API' );
        t_assert( 'do_not_allow' === $type['capabilities']['create_posts'], 'nobody may create one by hand' );
        foreach ( $type['capabilities'] as $cap => $needs ) {
            t_assert( in_array( $needs, array( 'manage_options', 'do_not_allow' ), true ), "capability $cap is not admin-only" );
        }
    };

    $cases['medication is not asked or stored, NHS number optional'] = function () use ( $P ) {
        t_assert( ! array_key_exists( 'medication', t_call( 'npreg_fields' ) ), 'medication must not be a stored field' );
        $ok = t_call( 'npreg_validate', t_good_post( array( 'npreg_nhs_number' => '' ) ) );
        t_assert( '' === $ok['error'], 'blank NHS number must be accepted: ' . $ok['error'] );
        $ok = t_call( 'npreg_validate', t_good_post( array( 'npreg_nhs_number' => '9434765919' ) ) );
        t_assert( '' === $ok['error'] && '9434765919' === $ok['values']['nhs_number'], 'valid NHS number 9434765919 must pass' );
        foreach ( array( '9434765918', '12345', 'abcdefghij', '94347659190' ) as $bad ) {
            $r = t_call( 'npreg_validate', t_good_post( array( 'npreg_nhs_number' => $bad ) ) );
            t_assert( '' !== $r['error'], "bad NHS number $bad must be rejected" );
        }
        foreach ( array( 'npreg_name', 'npreg_dob', 'npreg_phone', 'npreg_email', 'npreg_address', 'npreg_postcode', 'npreg_gp_practice', 'npreg_exemption', 'npreg_collection' ) as $field ) {
            $r = t_call( 'npreg_validate', t_good_post( array( $field => '' ) ) );
            t_assert( '' !== $r['error'], "$field must be required" );
        }
        $r = t_call( 'npreg_validate', t_good_post( array( 'npreg_medication' => '' ) ) );
        t_assert( '' === $r['error'], 'medication must not be required' );
        $r = t_call( 'npreg_validate', t_good_post( array( 'npreg_email' => 'not-an-email' ) ) );
        t_assert( '' !== $r['error'], 'bad email must be rejected' );
        $r = t_call( 'npreg_validate', t_good_post( array( 'npreg_exemption' => 'Z' ) ) );
        t_assert( '' !== $r['error'], 'unknown exemption code must be rejected' );
    };

    $cases['a good form is stored, and the alert email carries no answer'] = function () use ( $P ) {
        list( $ok, $msg ) = t_submit( t_good_post() );
        t_assert( $ok, 'good form must succeed: ' . $msg );
        t_assert( 1 === count( $GLOBALS['T']['posts'] ), 'exactly one record must be stored' );
        $id   = array_keys( $GLOBALS['T']['posts'] )[0];
        $post = $GLOBALS['T']['posts'][ $id ];
        t_assert( 'private' === $post['post_status'] && '' === $post['post_content'], 'record must be private with no body' );
        $meta = $GLOBALS['T']['meta'][ $id ];
        t_assert( '9434765919' === $meta[ '_' . $P . '_npreg_nhs_number' ], 'NHS number stored without spaces' );
        t_assert( 'ZZ9 9ZZ' === $meta[ '_' . $P . '_npreg_postcode' ], 'postcode stored in capitals' );
        t_assert( false === strpos( serialize( $meta ) . serialize( $post ), 'Ramipril' ), 'a posted medication answer must be ignored' );

        t_assert( 1 === count( $GLOBALS['T']['mail'] ), 'one alert email' );
        $mail = $GLOBALS['T']['mail'][0];
        t_assert( 'info@' . $GLOBALS['T_SLUG'] . 'pharmacy.co.uk' === $mail['to'], 'alert goes to the pharmacy inbox' );
        t_assert( false !== strpos( $mail['subject'], 'log in to read it' ), 'subject says to log in' );
        $everything = $mail['subject'] . "\n" . $mail['body'] . "\n" . implode( "\n", $mail['headers'] );
        foreach ( array( 'Jane', 'Testperson', '1970', '07700', 'jane@example', 'Sample Street', 'ZZ9', '9434765919', '943 476', 'Sample Medical', 'Medical Exemption', 'MedEx', 'delivery', 'after 5pm', 'Leaflet', 'Ramipril' ) as $answer ) {
            t_assert( false === stripos( $everything, $answer ), "alert email must not contain '$answer'" );
        }
        foreach ( $mail['headers'] as $h ) {
            t_assert( 0 !== stripos( $h, 'Reply-To' ), 'alert email must not reply to the patient' );
        }
        t_assert( false !== strpos( $mail['body'], 'post=' . $id . '&action=edit' ), 'alert links to the record' );
        t_assert( false !== strpos( $mail['body'], '14 days' ), 'alert says when the copy is deleted' );
    };

    $cases['security checks stop a form before anything is kept'] = function () use ( $P ) {
        $tries = array(
            'bad nonce'        => t_good_post( array( $P . '_npreg_nonce' => 'forged' ) ),
            'no nonce'         => array_diff_key( t_good_post(), array( $P . '_npreg_nonce' => 1 ) ),
            'honeypot'         => t_good_post( array( 'npreg_website' => 'http://spam.test' ) ),
            'bad NHS number'   => t_good_post( array( 'npreg_nhs_number' => '9434765918' ) ),
            'missing name'     => t_good_post( array( 'npreg_name' => '' ) ),
            'no ordering box'  => t_good_post( array( 'npreg_order_management' => '' ) ),
        );
        foreach ( $tries as $label => $post ) {
            list( $ok ) = t_submit( $post );
            t_assert( ! $ok, "$label must be refused" );
        }
        t_assert( 0 === count( $GLOBALS['T']['posts'] ) && 0 === count( $GLOBALS['T']['mail'] ), 'refused forms keep and send nothing' );
    };

    $cases['Summary Care Record permission is optional'] = function () use ( $P ) {
        $r = t_call( 'npreg_validate', t_good_post( array( 'npreg_scr_consent' => '' ) ) );
        t_assert( '' === $r['error'], 'a form without the SCR tick must pass validation: ' . $r['error'] );
        $post = t_good_post();
        unset( $post['npreg_scr_consent'] );
        list( $ok, $msg ) = t_submit( $post );
        t_assert( $ok, 'a form without the SCR tick must be accepted: ' . $msg );
        $id = array_keys( $GLOBALS['T']['posts'] )[0];
        t_assert( 'Not given' === $GLOBALS['T']['meta'][ $id ][ '_' . $P . '_npreg_scr_consent' ], 'staff see that permission was not given' );
        list( $ok ) = t_submit( t_good_post() );
        $id = array_keys( $GLOBALS['T']['posts'] )[1];
        t_assert( $ok && 0 === strpos( $GLOBALS['T']['meta'][ $id ][ '_' . $P . '_npreg_scr_consent' ], 'Permission given' ), 'a ticked box is recorded as permission given' );
    };

    $cases['five forms an hour from one connection'] = function () use ( $P ) {
        for ( $i = 1; $i <= 5; $i++ ) {
            list( $ok, $msg ) = t_submit( t_good_post() );
            t_assert( $ok, "form $i must succeed: $msg" );
        }
        list( $ok, $msg ) = t_submit( t_good_post() );
        t_assert( ! $ok && false !== strpos( $msg, t_phone() ), 'sixth form is refused with the phone number' );
        t_assert( 5 === count( $GLOBALS['T']['posts'] ), 'only five stored' );
        foreach ( array_keys( $GLOBALS['T']['transients'] ) as $key ) {
            t_assert( false === strpos( $key, '203.0.113.7' ), 'the internet address is not stored as it is' );
        }
    };

    $cases['a failed save tells the person to call'] = function () use ( $P ) {
        $GLOBALS['T']['insert_ok'] = false;
        list( $ok, $msg ) = t_submit( t_good_post() );
        t_assert( ! $ok && false !== strpos( $msg, t_phone() ), 'failed save must say to call' );
        t_assert( 0 === count( $GLOBALS['T']['mail'] ), 'no alert for a form that was not saved' );
    };

    $cases['a broken inbox setting still keeps the form'] = function () use ( $P ) {
        $GLOBALS['T']['email_opt'] = 'not an address';
        $old = ini_set( 'error_log', '/dev/null' );
        list( $ok ) = t_submit( t_good_post() );
        ini_set( 'error_log', $old );
        t_assert( $ok && 1 === count( $GLOBALS['T']['posts'] ) && 0 === count( $GLOBALS['T']['mail'] ), 'stored, no alert' );
    };

    $cases['clear-out deletes at 14 days and keeps younger forms'] = function () use ( $P ) {
        $values = t_call( 'npreg_validate', t_good_post() )['values'];
        $young  = t_call( 'npreg_store', $values );
        $edge   = t_call( 'npreg_store', $values );
        $old    = t_call( 'npreg_store', $values );
        t_age_post( $young, 14 * DAY_IN_SECONDS - 120 );
        t_age_post( $edge, 14 * DAY_IN_SECONDS );
        t_age_post( $old, 30 * DAY_IN_SECONDS );
        $gone = t_call( 'npreg_purge' );
        t_assert( 2 === $gone, "two must go, $gone went" );
        t_assert( isset( $GLOBALS['T']['posts'][ $young ] ), 'a form under 14 days old stays' );
        t_assert( ! isset( $GLOBALS['T']['posts'][ $edge ] ) && ! isset( $GLOBALS['T']['meta'][ $edge ] ), 'a form exactly 14 days old goes, answers too' );
        t_assert( ! isset( $GLOBALS['T']['posts'][ $old ] ), 'an older form goes' );
    };

    $cases['clear-out handles a backlog in batches'] = function () use ( $P ) {
        $values = t_call( 'npreg_validate', t_good_post() )['values'];
        for ( $i = 0; $i < 250; $i++ ) {
            t_age_post( t_call( 'npreg_store', $values ), 20 * DAY_IN_SECONDS );
        }
        t_assert( 250 === t_call( 'npreg_purge' ) && 0 === count( $GLOBALS['T']['posts'] ), 'all 250 old forms deleted' );
    };

    $cases['each new form and the admin screen run the clear-out'] = function () use ( $P, $C ) {
        $values = t_call( 'npreg_validate', t_good_post() )['values'];
        $stale  = t_call( 'npreg_store', $values );
        t_age_post( $stale, 15 * DAY_IN_SECONDS );
        list( $ok ) = t_submit( t_good_post() );
        t_assert( $ok && ! isset( $GLOBALS['T']['posts'][ $stale ] ), 'submitting a form clears stale ones' );

        $stale = t_call( 'npreg_store', $values );
        t_age_post( $stale, 15 * DAY_IN_SECONDS );
        $GLOBALS['T']['screen'] = (object) array( 'post_type' => 'page' );
        do_action( 'current_screen' );
        t_assert( isset( $GLOBALS['T']['posts'][ $stale ] ), 'other admin screens do not run it' );
        $GLOBALS['T']['screen'] = (object) array( 'post_type' => constant( $C . '_NPREG_POST_TYPE' ) );
        do_action( 'current_screen' );
        t_assert( ! isset( $GLOBALS['T']['posts'][ $stale ] ), 'opening NHS registrations clears stale ones' );
    };

    $cases['daily clear-out is scheduled once and removed on theme switch'] = function () use ( $P, $C ) {
        $hook = constant( $C . '_NPREG_PURGE_HOOK' );
        do_action( 'init' );
        do_action( 'init' );
        do_action( 'init' );
        t_assert( 1 === count( $GLOBALS['T']['events'] ), 'one scheduled event' );
        t_assert( 'daily' === $GLOBALS['T']['events'][ $hook ]['recurrence'], 'runs daily' );
        t_assert( in_array( $P . '_npreg_purge', $GLOBALS['T']['actions'][ $hook ], true ), 'event runs the clear-out' );
        do_action( 'switch_theme' );
        t_assert( 0 === count( $GLOBALS['T']['events'] ), 'switching theme removes the event' );
    };

    $cases['handler is wired for visitors'] = function () use ( $P ) {
        foreach ( array( 'wp_ajax_' . $P . '_npreg_form', 'wp_ajax_nopriv_' . $P . '_npreg_form' ) as $hook ) {
            t_assert( in_array( $P . '_npreg_form_handler', $GLOBALS['T']['actions'][ $hook ], true ), "$hook must be wired" );
        }
    };

    $cases['templates carry no draft markers, Google Fonts, cdnjs or flagcdn'] = function () use ( $P, $root ) {
        $banned = array( '[CHECK', 'PENDING', '[Delete', '[Option', 'by continuing to use', 'fonts.googleapis', 'fonts.gstatic', 'cdnjs', 'flagcdn' );
        $files  = array(
            'page-templates/page-privacy-policy.php', 'page-templates/page-cookie-policy.php',
            'page-templates/page-terms-conditions.php', 'page-templates/page-book-appointment.php',
            'page-templates/page-nhs-prescriptions-register.php', 'header.php', 'footer.php',
            'assets/fonts/fonts.css', 'assets/css/book-appointment.css',
        );
        foreach ( $files as $file ) {
            $text = file_get_contents( $root . '/' . $file );
            foreach ( $banned as $word ) {
                t_assert( false === stripos( $text, $word ), "$file contains '$word'" );
            }
        }
        $functions = file_get_contents( $root . '/functions.php' );
        foreach ( array( 'fonts.googleapis', 'fonts.gstatic', 'cdnjs.cloudflare.com', "'Medication list'", 'Medication:' ) as $word ) {
            t_assert( false === strpos( $functions, $word ), "functions.php still contains $word" );
        }
        t_assert( false !== strpos( $functions, "require_once get_theme_file_path( 'inc/nhs-registration.php' );" ), 'functions.php loads the registration module' );
        t_assert( 1 === substr_count( $functions, "'wp_ajax_nopriv_" . $P . "_npreg_form'" ) + substr_count( file_get_contents( $root . '/inc/nhs-registration.php' ), "'wp_ajax_nopriv_" . $P . "_npreg_form'" ), 'only one registration handler' );
        $form = file_get_contents( $root . '/page-templates/page-nhs-prescriptions-register.php' );
        t_assert( false === strpos( $form, 'npreg_medication' ), 'medication field removed' );
        t_assert( ! preg_match( '/name="npreg_nhs_number"[^>]*required/', $form ), 'NHS number not required' );
        t_assert( ! preg_match( '/name="npreg_scr_consent"[^>]*required/', $form ), 'SCR box not required' );
        t_assert( false !== strpos( $form, 'Optional: I give <?php echo esc_html( ' . $P . '_pharmacy_name() ); ?> permission to look at my Summary Care Record (my GP medication record) when it helps my care. I can change my mind at any time by telling the pharmacy.' ), 'SCR label wording' );
        t_assert( false !== strpos( $form, 'class="npreg-privacy"' ) && false !== strpos( $form, 'Information Commission (the ICO)' ), 'privacy line at the form' );
        $book = file_get_contents( $root . '/page-templates/page-book-appointment.php' );
        t_assert( false !== strpos( $book, '<p class="booking-terms-line">NHS services are free, apart from any NHS prescription charge for medicines you take away, unless you are exempt. For private services, you pay after your appointment. Nothing is paid in advance.' ), 'booking line present' );
        t_assert( false !== strpos( $book, 'There is no charge for cancelling or moving.' ), 'booking line says no charge' );
        t_assert( ( 'bowland' === $GLOBALS['T_SLUG'] ) === ( false !== strpos( $book, 'If the link does not work, please call us.' ) ), 'link fallback line only on Bowland' );
        t_assert( false === strpos( $book, 'Within 12 hours' ), 'old 12-hour wording gone' );
        $footer = file_get_contents( $root . '/footer.php' );
        t_assert( 2 === substr_count( $footer, "home_url( '/terms-conditions/' )" ), 'footer links Terms twice' );
        foreach ( array( 'dm-sans-latin.woff2', 'dm-sans-latin-ext.woff2', 'playfair-display-latin.woff2', 'playfair-display-latin-ext.woff2', 'syne-latin.woff2', 'syne-latin-ext.woff2', 'OFL-dmsans.txt', 'OFL-playfairdisplay.txt', 'OFL-syne.txt' ) as $f ) {
            t_assert( filesize( $root . '/assets/fonts/' . $f ) > 1000, "font file $f present" );
        }
        foreach ( array( 'css/all.min.css', 'LICENSE.txt', 'webfonts/fa-solid-900.woff2', 'webfonts/fa-regular-400.woff2', 'webfonts/fa-brands-400.woff2', 'webfonts/fa-v4compatibility.woff2' ) as $f ) {
            t_assert( is_file( $root . '/assets/vendor/fontawesome/' . $f ), "Font Awesome $f present" );
        }
        foreach ( array( 'th', 'in', 'vn', 'ke', 'br', 'cv' ) as $cc ) {
            t_assert( is_file( $root . '/assets/images/flags/' . $cc . '.png' ), "flag $cc present" );
        }
    };

    $cases['legal pages render with no square bracket and the agreed wording'] = function () use ( $P, $root ) {
        $want = array(
            'page-privacy-policy.php'   => array( 'privacy lead', 'Information Commission (the ICO)', 'Complaining to us first', 'id="nhs-registration-form"', 'deleted automatically 14 days after you send it', "We use Deltera (Deltera HealthTech Ltd) to run our private clinical services. When you fill in a health questionnaire or have a private consultation, your answers and record are stored on Deltera's system, on UK servers. Only authorised staff can see them. AT Health Ltd remains responsible for your information.", '<h2>AI Website Assistant</h2>
    <p>We switched this assistant off in November 2026. While it is off, it collects nothing.', 'Your data protection rights, and how to complain to us or to the Information Commission (the ICO), are described elsewhere in this policy.', 'Website statistics: Google Analytics keeps them for up to 14 months. Clarity keeps recordings for 30 days, and a small sample for up to 9 months.', 'Unsplash provides some of our photographs.', 'Registered office: Wilmslow Pharmacy', t_phone() ),
            'page-cookie-policy.php'    => array( $P . '_consent', 'Kept for 30 minutes.', '"Essential only" is just as easy', 'Google Maps' ),
            'page-terms-conditions.php' => array( 'id="appointments"', 'id="complaints"', 'There is no charge for cancelling or moving.', 'For private services, you pay after your appointment, at the pharmacy, for the service you receive. Nothing is paid in advance. NHS services are free, apart from any NHS prescription charge for medicines you take away, unless you are exempt.', 'If it has changed since you booked, we will tell you before your appointment starts, and you can cancel free.', 'NHS Greater Manchester Integrated Care Board', 'GB 429880260' ),
        );
        foreach ( $want as $file => $phrases ) {
            ob_start();
            include $root . '/page-templates/' . $file;
            $html = ob_get_clean();
            t_assert( false === strpos( $html, '[' ) && false === strpos( $html, ']' ), "$file renders a square bracket" );
            t_assert( false === stripos( $html, 'by continuing to use' ), "$file still says by continuing to use" );
            foreach ( $phrases as $phrase ) {
                t_assert( false !== strpos( $html, $phrase ), "$file is missing: $phrase" );
            }
            t_assert( false === strpos( $html, '14-16 Ashton Road' ), "$file default address must be 14 Ashton Road" );
            foreach ( array( "Information Commissioner's Office", 'may use them only on our instructions', 'on the day', 'Within 12 hours' ) as $gone ) {
                t_assert( false === strpos( $html, $gone ), "$file still says: $gone" );
            }
        }
    };

    $failed = 0;
    foreach ( $cases as $name => $case ) {
        t_reset();
        try {
            $case();
            fwrite( STDOUT, "ok $slug: $name\n" );
        } catch ( Throwable $e ) {
            $failed++;
            fwrite( STDOUT, "not ok $slug: $name: {$e->getMessage()}\n" );
        }
    }
    if ( ! $failed ) {
        fwrite( STDOUT, "done $slug: all cases passed\n" );
    }
    return $failed ? 1 : 0;
}
