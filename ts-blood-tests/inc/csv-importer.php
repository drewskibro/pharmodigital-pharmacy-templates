<?php
/**
 * CSV Importer: admin page to upload the LML sheet and create/update blood_test posts.
 *
 * Expected columns: Code, Product name, 2026 WholesalePrice, 2026 RRP, TAT, Tests
 *
 * @package TS_Blood_Tests
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'admin_menu', function () {
    add_submenu_page(
        'edit.php?post_type=blood_test',
        'Import CSV',
        'Import CSV',
        'manage_options',
        'tsbt-import',
        'tsbt_render_import_page'
    );
} );

function tsbt_render_import_page() {
    $result = null;

    if ( isset( $_POST['tsbt_import_nonce'] ) && wp_verify_nonce( $_POST['tsbt_import_nonce'], 'tsbt_import' ) ) {
        if ( ! empty( $_FILES['tsbt_csv']['tmp_name'] ) ) {
            $result = tsbt_process_csv( $_FILES['tsbt_csv']['tmp_name'], ! empty( $_POST['tsbt_wipe'] ) );
        }
    }
    ?>
    <div class="wrap">
        <h1>Import Blood Tests from CSV</h1>
        <p>Upload the LML price list CSV. Expected columns: <code>Code</code>, <code>Product name</code>, <code>2026 WholesalePrice</code>, <code>2026 RRP</code>, <code>TAT</code>, <code>Tests</code>.</p>
        <p>Existing tests are matched by <strong>Code</strong>. New codes create new posts, existing codes are updated.</p>

        <?php if ( $result ) : ?>
            <div class="notice notice-success"><p>
                <strong><?php echo (int) $result['created']; ?></strong> created,
                <strong><?php echo (int) $result['updated']; ?></strong> updated,
                <strong><?php echo (int) $result['skipped']; ?></strong> skipped.
            </p></div>
            <?php if ( ! empty( $result['errors'] ) ) : ?>
                <div class="notice notice-warning"><p><strong>Errors:</strong></p>
                    <ul style="list-style:disc;padding-left:20px;">
                        <?php foreach ( $result['errors'] as $err ) : ?>
                            <li><?php echo esc_html( $err ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data" style="background:#fff;padding:20px;border:1px solid #ccd0d4;margin-top:20px;max-width:600px;">
            <?php wp_nonce_field( 'tsbt_import', 'tsbt_import_nonce' ); ?>
            <p>
                <label><strong>CSV file</strong></label><br>
                <input type="file" name="tsbt_csv" accept=".csv" required>
            </p>
            <p>
                <label><input type="checkbox" name="tsbt_wipe" value="1"> Wipe all existing blood tests before import (destructive)</label>
            </p>
            <p><button type="submit" class="button button-primary">Import</button></p>
        </form>
    </div>
    <?php
}

function tsbt_process_csv( $filepath, $wipe = false ) {
    $result = array( 'created' => 0, 'updated' => 0, 'skipped' => 0, 'errors' => array() );

    if ( $wipe ) {
        $existing = get_posts( array( 'post_type' => 'blood_test', 'numberposts' => -1, 'fields' => 'ids' ) );
        foreach ( $existing as $id ) {
            wp_delete_post( $id, true );
        }
    }

    $handle = fopen( $filepath, 'r' );
    if ( ! $handle ) {
        $result['errors'][] = 'Could not open file.';
        return $result;
    }

    $header = fgetcsv( $handle );
    if ( ! $header ) {
        $result['errors'][] = 'Empty CSV.';
        fclose( $handle );
        return $result;
    }

    $map = array();
    foreach ( $header as $idx => $col ) {
        $key = strtolower( trim( $col ) );
        if ( $key === 'code' )                                $map['code'] = $idx;
        elseif ( $key === 'product name' )                    $map['name'] = $idx;
        elseif ( strpos( $key, 'wholesale' ) !== false )      $map['wholesale'] = $idx;
        elseif ( strpos( $key, 'rrp' ) !== false )            $map['retail'] = $idx;
        elseif ( $key === 'tat' )                             $map['tat'] = $idx;
        elseif ( $key === 'tests' )                           $map['tests'] = $idx;
    }

    foreach ( array( 'code', 'name' ) as $required ) {
        if ( ! isset( $map[ $required ] ) ) {
            $result['errors'][] = "Missing required column: {$required}";
            fclose( $handle );
            return $result;
        }
    }

    while ( ( $row = fgetcsv( $handle ) ) !== false ) {
        $code = isset( $map['code'] ) ? trim( $row[ $map['code'] ] ) : '';
        $name = isset( $map['name'] ) ? trim( $row[ $map['name'] ] ) : '';

        if ( ! $code || ! $name ) {
            $result['skipped']++;
            continue;
        }

        $existing = get_posts( array(
            'post_type'   => 'blood_test',
            'numberposts' => 1,
            'meta_key'    => 'tsbt_code',
            'meta_value'  => $code,
            'fields'      => 'ids',
        ) );

        $post_data = array(
            'post_type'   => 'blood_test',
            'post_title'  => $name,
            'post_status' => 'publish',
        );

        if ( $existing ) {
            $post_data['ID'] = $existing[0];
            $post_id = wp_update_post( $post_data );
            $result['updated']++;
        } else {
            $post_id = wp_insert_post( $post_data );
            $result['created']++;
        }

        if ( is_wp_error( $post_id ) || ! $post_id ) {
            $result['errors'][] = "Failed: {$code} — {$name}";
            continue;
        }

        update_post_meta( $post_id, 'tsbt_code',       $code );
        update_post_meta( $post_id, 'tsbt_wholesale',  isset( $map['wholesale'] ) ? trim( $row[ $map['wholesale'] ] ) : '' );
        update_post_meta( $post_id, 'tsbt_retail',     isset( $map['retail'] )    ? trim( $row[ $map['retail'] ] )    : '' );
        update_post_meta( $post_id, 'tsbt_turnaround', isset( $map['tat'] )       ? trim( $row[ $map['tat'] ] )       : '' );
        update_post_meta( $post_id, 'tsbt_tests',      isset( $map['tests'] )     ? trim( $row[ $map['tests'] ] )     : '' );
    }

    fclose( $handle );
    return $result;
}
