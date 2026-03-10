<?php
/**
 * Plugin Name: Prueba Technical Plugin
 * Description: Funcionalidades personalizadas.
 * Version:     1.0
 * Author:      Wilmer Medina
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once plugin_dir_path( __FILE__ ) . 'shortcodes.php';
require_once plugin_dir_path( __FILE__ ) . 'hooks.php';

add_action( 'wp_head', 'prueba_add_gtm_head' );

function prueba_add_gtm_head() {
    ?>
    <!-- Google Tag Manager -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id=GTM-5FWVPDRS'+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5FWVPDRS');
    </script>
    <?php
}

add_action( 'wp_body_open', 'prueba_add_gtm_body' );

function prueba_add_gtm_body() {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FWVPDRS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <?php
}