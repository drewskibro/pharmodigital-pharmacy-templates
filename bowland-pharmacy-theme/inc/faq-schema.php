<?php
/**
 * FAQPage structured data (schema.org JSON-LD) for pages.
 *
 * The visible FAQ on each page is built by the page templates from saved ACF
 * data (a saved value overrides the template fallback). Instead of repeating
 * those field reads in 30+ templates, this reads the FAQ items from the HTML
 * the template actually rendered, so the markup can never differ from what
 * a visitor sees. Nothing is invented: a page with no FAQ items gets no markup.
 *
 * @package Bowland_Pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Collapse whitespace (including non-breaking spaces) to single spaces.
 */
function bowland_pharmacy_faq_clean_text( $text ) {
    $text = html_entity_decode( wp_strip_all_tags( $text ), ENT_QUOTES | ENT_HTML5, 'UTF-8' );
    $text = preg_replace( '/[\s\x{00A0}]+/u', ' ', $text );
    return trim( (string) $text );
}

/**
 * True when a class attribute holds a token ending in "faq-item"
 * (for example "dengue-faq-item" or "bpack-faq-item").
 */
function bowland_pharmacy_faq_is_item_class( $class ) {
    return (bool) preg_match( '/(^|\s)[\w-]*faq-item(\s|$)/', (string) $class );
}

/**
 * Pull question and answer pairs out of rendered page HTML.
 *
 * Every FAQ item in the theme is a "*-faq-item" element holding one button
 * (the question, with a number and an icon beside it) and one answer panel.
 *
 * @param string $html Full rendered page HTML.
 * @return array[] List of array( 'q' => string, 'a' => string ).
 */
function bowland_pharmacy_extract_faqs_from_html( $html ) {
    if ( ! class_exists( 'DOMDocument' ) || stripos( $html, 'faq-item' ) === false ) {
        return array();
    }

    $previous = libxml_use_internal_errors( true );
    $doc      = new DOMDocument();
    $loaded   = $doc->loadHTML( '<?xml encoding="utf-8"?>' . $html );
    libxml_clear_errors();
    libxml_use_internal_errors( $previous );
    if ( ! $loaded ) {
        return array();
    }

    $xpath = new DOMXPath( $doc );
    $faqs  = array();

    foreach ( $xpath->query( '//*[contains(@class, "faq-item")]' ) as $item ) {
        if ( ! bowland_pharmacy_faq_is_item_class( $item->getAttribute( 'class' ) ) ) {
            continue;
        }

        $button = $xpath->query( './/button', $item )->item( 0 );
        if ( ! $button ) {
            continue;
        }

        // Question: the button text without its number and icon.
        $question_node = $button->cloneNode( true );
        $remove        = array();
        foreach ( ( new DOMXPath( $doc ) )->query( './/*', $question_node ) as $child ) {
            $name  = strtolower( $child->nodeName );
            $class = $child->getAttribute( 'class' );
            if ( in_array( $name, array( 'i', 'svg' ), true ) || preg_match( '/(^|[\s-])(num|number|icon|toggle)(\s|$)/', $class ) ) {
                $remove[] = $child;
            }
        }
        foreach ( $remove as $node ) {
            if ( $node->parentNode ) {
                $node->parentNode->removeChild( $node );
            }
        }
        $question = bowland_pharmacy_faq_clean_text( $question_node->textContent );

        // Answer: everything in the item that is not the question button.
        $answer_html = '';
        foreach ( $item->childNodes as $child ) {
            if ( $child === $button || ( $child->nodeType === XML_ELEMENT_NODE && $child->getElementsByTagName( 'button' )->length ) ) {
                continue;
            }
            $answer_html .= $doc->saveHTML( $child ) . ' ';
        }
        // Keep paragraph and list breaks as spaces so words do not run together.
        $answer_html = preg_replace( '#</?(p|br|li|ul|ol|div|h[1-6])\b[^>]*>#i', ' ', $answer_html );
        $answer      = bowland_pharmacy_faq_clean_text( $answer_html );

        if ( '' === $question || '' === $answer ) {
            continue;
        }

        $faqs[] = array(
            'q' => $question,
            'a' => $answer,
        );
    }

    return $faqs;
}

/**
 * Build the FAQPage schema array, or null when there is nothing to mark up.
 */
function bowland_pharmacy_build_faq_schema( array $faqs ) {
    if ( empty( $faqs ) ) {
        return null;
    }

    $entities = array();
    foreach ( $faqs as $faq ) {
        $entities[] = array(
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text'  => $faq['a'],
            ),
        );
    }

    return array(
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $entities,
    );
}

/**
 * Output-buffer callback: add one FAQPage script to the page head.
 */
function bowland_pharmacy_faq_schema_buffer( $html ) {
    try {
        // Nothing to do, or a FAQPage is already present (avoid duplicates).
        if ( stripos( $html, 'faq-item' ) === false || stripos( $html, '"FAQPage"' ) !== false ) {
            return $html;
        }

        $head_end = stripos( $html, '</head>' );
        if ( false === $head_end ) {
            return $html;
        }

        $schema = bowland_pharmacy_build_faq_schema( bowland_pharmacy_extract_faqs_from_html( $html ) );
        if ( null === $schema ) {
            return $html;
        }

        $json = wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG );
        if ( ! $json ) {
            return $html;
        }

        $script = '<script type="application/ld+json">' . $json . '</script>' . "\n";
        return substr( $html, 0, $head_end ) . $script . substr( $html, $head_end );
    } catch ( \Throwable $e ) {
        return $html;
    }
}

/**
 * Start buffering on front-end pages. Blog posts already output their own
 * FAQPage (see bowland_pharmacy_post_schema), so only pages are handled here.
 */
function bowland_pharmacy_start_faq_schema_buffer() {
    if ( is_admin() || is_feed() || is_embed() || is_preview() || wp_doing_ajax() || ! is_page() ) {
        return;
    }
    ob_start( 'bowland_pharmacy_faq_schema_buffer' );
}
add_action( 'template_redirect', 'bowland_pharmacy_start_faq_schema_buffer', 20 );
