<?php
/**
 * Public travel booking links. Both branch themes ship this file independently.
 * Only a known route can select an appointment. The calendar belongs to the theme.
 */

function at_travel_appointments() {
    return array(
        'v1'  => array( 'Yellow fever vaccination', array( 47108784 ) ),
        'v2'  => array( 'Pre-travel rabies vaccination', array( 47536474, 95877384 ) ),
        'v3'  => array( 'Japanese encephalitis vaccination', array( 47536440 ) ),
        'v4'  => array( 'Chikungunya vaccination', array( 80401258 ) ),
        'v5'  => array( 'Hepatitis B vaccination (adult or child)', array( 47536429, 81305482 ) ),
        'v6'  => array( 'Typhoid vaccination (injection or capsules)', array( 47536495, 81305704 ) ),
        'v7'  => array( 'Hepatitis A vaccination (adult or child)', array( 47536344, 76989657 ) ),
        'v8'  => array( 'Diphtheria, tetanus and polio booster', array( 47536407 ) ),
        't1'  => array( 'Travel consultation', array( 86813138 ) ),
        'c1'  => array( 'Yellow fever replacement or exemption certificate', array( 58201970, 81305610 ) ),
        'c2'  => array( 'Occupational hepatitis B vaccination', array( 47109341 ) ),
        'c3'  => array( 'Hepatitis B immunity blood test', array( 59509619 ) ),
        'v5c' => array( 'Hepatitis B vaccination for a child', array( 81305482 ) ),
    );
}

function at_travel_booking_url( $route, $placement ) {
    return add_query_arg( 'via', $route . '-' . $placement, home_url( '/book-appointment/' ) ) . '#booking-widget';
}

function at_travel_selected_route( $marker ) {
    if ( ! is_string( $marker ) || false === strpos( $marker, '-' ) ) {
        return '';
    }
    list( $route, $placement ) = explode( '-', $marker, 2 );
    $placements = array( 'service-hero', 'service-body', 'service-price', 'service-footer', 'article-summary', 'article-body' );
    return isset( at_travel_appointments()[ $route ] ) && in_array( $placement, $placements, true ) ? $route : '';
}

function at_travel_calendar_url( $route ) {
    $url = 'https://app.acuityscheduling.com/schedule.php?owner=29286426&calendarID=' . AT_TRAVEL_CALENDAR_ID . '&ref=embedded_csp';
    $appointments = at_travel_appointments();
    if ( ! isset( $appointments[ $route ] ) ) {
        return $url;
    }
    $ids = $appointments[ $route ][1];
    $parameter = 1 === count( $ids ) ? '&appointmentType=' : '&appointmentType[]=';
    foreach ( $ids as $id ) {
        $url .= $parameter . $id;
    }
    return $url;
}

/** Content scopes are explicit; unrelated Health Hub posts keep their existing booking behaviour. */
function at_travel_article_route() {
    $routes = AT_TRAVEL_ARTICLE_ROUTES;
    return $routes[ get_post_field( 'post_name', get_the_ID() ) ] ?? '';
}

function at_travel_article_booking() {
    $route = at_travel_article_route();
    if ( ! $route ) {
        return;
    }
    $slug = get_post_field( 'post_name', get_the_ID() );
    $appointments = at_travel_appointments();
    $general_guide = in_array( $slug, array( 'the-ultimate-pre-travel-health-checklist', 'how-to-read-a-travel-vaccination-price-list-before-you-book', 'travel-health-consultation-wythenshawe' ), true );
    ?>
    <div class="article-travel-booking">
      <?php if ( 'travel-vaccination-records-denton' === $slug ) : ?>
        <p>Looking for a record from this pharmacy? <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Denton Pharmacy</a>.</p>
      <?php endif; ?>
      <?php if ( 'v1' === $route ) : // The existing Bowland vaccination button is directly above. ?>
        <a class="cta-button secondary-cta" href="<?php echo esc_url( at_travel_booking_url( 'c1', 'article-summary' ) ); ?>">Replacement or exemption certificate</a>
      <?php else : ?>
        <a class="cta-button primary-cta" href="<?php echo esc_url( at_travel_booking_url( $route, 'article-summary' ) ); ?>"><?php echo 't1' === $route ? 'Discuss my itinerary with a pharmacist' : 'Book the diphtheria, tetanus and polio booster'; ?></a>
      <?php endif; ?>
      <?php if ( 'v8' === $route ) : ?>
        <a class="cta-button secondary-cta" href="<?php echo esc_url( at_travel_booking_url( 't1', 'article-summary' ) ); ?>">Discuss my itinerary</a>
      <?php endif; ?>
      <?php if ( $general_guide ) : ?>
        <details class="article-vaccine-options">
          <summary>Choose a specific vaccine appointment</summary>
          <ul>
            <?php foreach ( array( 'v1', 'v2', 'v3', 'v4', 'v5', 'v6', 'v7', 'v8' ) as $key ) : ?>
              <li><a href="<?php echo esc_url( at_travel_booking_url( $key, 'article-summary' ) ); ?>"><?php echo esc_html( $appointments[ $key ][0] ); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </details>
      <?php endif; ?>
    </div>
    <?php
}

function at_travel_article_content_links( $content ) {
    if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
        return $content;
    }
    $route = at_travel_article_route();
    if ( ! $route ) {
        return $content;
    }
    $links = new WP_HTML_Tag_Processor( $content );
    while ( $links->next_tag( 'A' ) ) {
        $href = $links->get_attribute( 'href' );
        if ( in_array( $href, array( home_url( '/book-appointment/' ), '/book-appointment/' ), true ) ) {
            $links->set_attribute( 'href', at_travel_booking_url( $route, 'article-body' ) );
        }
    }
    return $links->get_updated_html();
}
add_filter( 'the_content', 'at_travel_article_content_links', 20 );
