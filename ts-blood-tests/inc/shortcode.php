<?php
/**
 * [ts_blood_tests] shortcode — searchable catalogue.
 *
 * @package TS_Blood_Tests
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_shortcode( 'ts_blood_tests', 'tsbt_render_shortcode' );

function tsbt_render_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'show_wholesale' => 'no',
    ), $atts, 'ts_blood_tests' );

    wp_enqueue_style( 'tsbt-frontend', TSBT_URL . 'assets/css/frontend.css', array(), TSBT_VERSION );
    wp_enqueue_script( 'tsbt-frontend', TSBT_URL . 'assets/js/frontend.js', array(), TSBT_VERSION, true );

    $posts = get_posts( array(
        'post_type'   => 'blood_test',
        'numberposts' => -1,
        'orderby'     => 'title',
        'order'       => 'ASC',
    ) );

    $data = array();
    foreach ( $posts as $p ) {
        $data[] = array(
            'code'       => get_post_meta( $p->ID, 'tsbt_code', true ),
            'name'       => $p->post_title,
            'retail'     => get_post_meta( $p->ID, 'tsbt_retail', true ),
            'wholesale'  => get_post_meta( $p->ID, 'tsbt_wholesale', true ),
            'turnaround' => get_post_meta( $p->ID, 'tsbt_turnaround', true ),
            'tests'      => get_post_meta( $p->ID, 'tsbt_tests', true ),
        );
    }

    $show_wholesale = ( $atts['show_wholesale'] === 'yes' );

    ob_start();
    ?>
    <div class="tsbt-wrap" data-show-wholesale="<?php echo $show_wholesale ? '1' : '0'; ?>">
        <div class="tsbt-search">
            <input type="search" id="tsbt-search-input" placeholder="Search by name or code…" autocomplete="off">
            <span class="tsbt-count"><span id="tsbt-count"><?php echo count( $data ); ?></span> tests available</span>
        </div>

        <div class="tsbt-list" id="tsbt-list">
            <?php foreach ( $data as $row ) : ?>
                <article class="tsbt-card"
                         data-code="<?php echo esc_attr( strtolower( $row['code'] ) ); ?>"
                         data-name="<?php echo esc_attr( strtolower( $row['name'] ) ); ?>"
                         data-tests="<?php echo esc_attr( strtolower( $row['tests'] ) ); ?>">
                    <header class="tsbt-card-head">
                        <span class="tsbt-code"><?php echo esc_html( $row['code'] ); ?></span>
                        <h3 class="tsbt-name"><?php echo esc_html( $row['name'] ); ?></h3>
                    </header>

                    <dl class="tsbt-meta">
                        <?php if ( $row['retail'] ) : ?>
                            <div><dt>Price</dt><dd><?php echo esc_html( $row['retail'] ); ?></dd></div>
                        <?php endif; ?>
                        <?php if ( $show_wholesale && $row['wholesale'] ) : ?>
                            <div><dt>Wholesale</dt><dd><?php echo esc_html( $row['wholesale'] ); ?></dd></div>
                        <?php endif; ?>
                        <?php if ( $row['turnaround'] ) : ?>
                            <div><dt>Turnaround</dt><dd><?php echo esc_html( $row['turnaround'] ); ?></dd></div>
                        <?php endif; ?>
                    </dl>

                    <?php if ( $row['tests'] ) : ?>
                        <details class="tsbt-tests">
                            <summary>What's included</summary>
                            <p><?php echo esc_html( $row['tests'] ); ?></p>
                        </details>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>

        <p class="tsbt-empty" id="tsbt-empty" hidden>No tests match your search.</p>
    </div>
    <?php
    return ob_get_clean();
}
