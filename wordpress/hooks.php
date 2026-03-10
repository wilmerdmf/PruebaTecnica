<?php

if ( ! defined( 'ABSPATH' ) ) exit;

// Punto 3

/**
 * Popup de bienvenida.
 * Incluye HTML, CSS y JS en el footer del sitio.
 * Se puede cerrar con el botón X o haciendo clic fuera del popup.
 */
add_action( 'wp_footer', 'prueba_popup_bienvenida' );

function prueba_popup_bienvenida() {

    $meses = array(
        1  => 'enero',    2  => 'febrero',  3  => 'marzo',
        4  => 'abril',    5  => 'mayo',     6  => 'junio',
        7  => 'julio',    8  => 'agosto',   9  => 'septiembre',
        10 => 'octubre',  11 => 'noviembre', 12 => 'diciembre',
    );

    $dia   = (int) date_i18n( 'j' );
    $mes   = $meses[ (int) date_i18n( 'n' ) ];
    $fecha = $dia . ' de ' . $mes;

    ?>

    <!-- Estructura del Popup -->
    <div id="prueba-overlay">
        <div id="prueba-popup">

            <button id="prueba-popup-close" aria-label="Cerrar">&#10005;</button>

            <h2>Bienvenido a las acacias.</h2>
            <p class="prueba-popup-subtitle">
                El día de hoy <strong>"<?php echo esc_html( $fecha ); ?>"</strong>
                obtén un 10% en tu primera consulta al dejarnos tus datos.
            </p>

            <button id="prueba-popup-cta">Quiero Registrarme</button>

        </div>
    </div>

        <!-- Estilos del Popup -->
    <style>
        #prueba-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 99999;
        }

        #prueba-popup {
            position: relative;
            background: #ffffff;
            border-radius: 10px;
            padding: 40px 36px 32px;
            max-width: 460px;
            width: 90%;
            text-align: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.18);
            font-family: Arial, sans-serif;
        }

        #prueba-popup h2 {
            margin: 0 0 12px;
            font-size: 22px;
            color: #1F3864;
        }

        .prueba-popup-subtitle {
            font-size: 15px;
            color: #444444;
            line-height: 1.6;
            margin: 0 0 24px;
        }

        #prueba-popup-cta {
            background: #2E75B6;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            padding: 12px 28px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        #prueba-popup-cta:hover {
            background: #1F3864;
        }

        #prueba-popup-close {
            position: absolute;
            top: 12px;
            right: 14px;
            background: none;
            border: none;
            font-size: 18px;
            color: #999999;
            cursor: pointer;
            line-height: 1;
        }

        #prueba-popup-close:hover {
            color: #333333;
        }
    </style>

    <!-- Lógica del Popup -->
    <script>
        (function () {
            const overlay = document.getElementById('prueba-overlay');
            const btnClose = document.getElementById('prueba-popup-close');
            const btnCta   = document.getElementById('prueba-popup-cta');

            function closePopup() {
                overlay.style.display = 'none';
            }

            btnClose.addEventListener('click', closePopup);

            overlay.addEventListener('click', function (e) {
                if (e.target === overlay) closePopup();
            });

            btnCta.addEventListener('click', function () {
                closePopup();
            });
        })();
    </script>

    <?php
}