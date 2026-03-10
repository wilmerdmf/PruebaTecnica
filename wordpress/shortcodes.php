<?php

if ( ! defined( 'ABSPATH' ) ) exit;


// Punto 1
/**
 * Shortcode: [titulo_post]
 * Muestra el título del post actual.
 *
 * Error original: se usaba $posts->ID en lugar de $post->ID
 * La variable global correcta es $post.
 */
add_shortcode( 'titulo_post', 'titulo_post_fn' );

function titulo_post_fn( $atts ) {
    global $post;
    if ( ! $post ) return '';
    return get_the_title( $post->ID );
}


// Punto 2
/**
 * Shortcode: [lista_posts]
 * Muestra todos los posts publicados en una lista <ul>
 * con formato: Título : DD-MM-AAAA
 */
add_shortcode( 'lista_posts', 'lista_posts_fn' );

function lista_posts_fn( $atts ) {

    $posts = get_posts( array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ) );

    if ( empty( $posts ) ) {
        return '<p>No hay entradas disponibles.</p>';
    }

    $output = '<ul>';

    foreach ( $posts as $post ) {
        $titulo = get_the_title( $post->ID );
        $fecha  = date_i18n( 'd-m-Y', strtotime( $post->post_date ) );
        $output .= '<li>' . esc_html( $titulo ) . ' : ' . esc_html( $fecha ) . '</li>';
    }

    $output .= '</ul>';

    return $output;
}


// Punto 3
/**
 * Shortcode: [boton_popup]
 * Muestra un botón que abre el popup de bienvenida.
 */
add_shortcode( 'boton_popup', 'boton_popup_fn' );

function boton_popup_fn( $atts ) {
    return '<button onclick="document.getElementById(\'prueba-overlay\').style.display=\'flex\'" 
            style="background:#2E75B6;color:#fff;border:none;border-radius:6px;padding:12px 28px;font-size:15px;font-weight:bold;cursor:pointer;">
            Abrir Popup
            </button>';
}