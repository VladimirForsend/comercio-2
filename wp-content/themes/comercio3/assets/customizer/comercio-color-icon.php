<?php
add_action('customize_register', 'color_icono');
function color_icono($wp_customize)
{


    //seccion customizer
    $wp_customize->add_section('color_icono', array(
        'title'      => 'configurar colores de comercio',
        'priority'   => 30,
    ));
    //seccion customizer

    $wp_customize->add_setting('color_iconos', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_iconos', array(
        'label'        => 'Color, íconos, botones, cajas',
        'section'    => 'color_icono',
        'settings'   => 'color_iconos',
    )));


    /*colores de texto del sitio web*/
    //seccion customizer

    $wp_customize->add_setting('color_texto_sitios', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_texto_sitios', array(
        'label'        => 'Color de texto del sitio',
        'section'    => 'color_icono',
        'settings'   => 'color_texto_sitios',
    )));
    /*colores de texto del sitio web*/

    /*colores de titulos del sitio web*/
    //seccion customizer

    $wp_customize->add_setting('color_titulos_sitio', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_titulos_sitio', array(
        'label'        => 'Color de titulos del sitio',
        'section'    => 'color_icono',
        'settings'   => 'color_titulos_sitio',
    )));
    /*colores de titulos del sitio web*/


    /*color de fondo botones*/
    //seccion customizer

    $wp_customize->add_setting('color_botones', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_botones', array(
        'label'        => 'Color fondo botones',
        'section'    => 'color_icono',
        'settings'   => 'color_botones',
    )));
    /*color de fondo botones*/

    /*color de texto botones*/
    //seccion customizer

    $wp_customize->add_setting('color_texto_botones', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_texto_botones', array(
        'label'        => 'Color de texto botones',
        'section'    => 'color_icono',
        'settings'   => 'color_texto_botones',
    )));
    /*color de texto botones*/

    /*color de cabecera*/
    //seccion customizer

    $wp_customize->add_setting('color_cabecera', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_cabecera', array(
        'label'        => 'Color cabecera',
        'section'    => 'color_icono',
        'settings'   => 'color_cabecera',
    )));
    /*color de cabecera*/

    /*color de texto cabecera*/
    //seccion customizer

    $wp_customize->add_setting('color_texto_cabecera', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_texto_cabecera', array(
        'label'        => 'Color textos cabecera',
        'section'    => 'color_icono',
        'settings'   => 'color_texto_cabecera',
    )));
    /*color de texto cabecera*/


    /* settings color_fondo_footer*/


    $wp_customize->add_setting('color_fondo_footer', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_fondo_footer', array(
        'label'        => 'Color fondo footer',
        'section'    => 'color_icono',
        'settings'   => 'color_fondo_footer',
    )));
    /* settings color_fondo_footer*/

    /* settings color_texto_footer*/


$wp_customize->add_setting('color_texto_footer', array(
    'default'     => '#43C6E4',
    'transport'   => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_texto_footer', array(
    'label'        => 'Color texto footer',
    'section'    => 'color_icono',
    'settings'   => 'color_texto_footer',
)));
/* settings color_texto_footer*/
}

add_action('wp_head', 'color_icono_titan');


function color_icono_titan()
{
?>
    <style type="text/css">
        .color_iconos {
            color: <?php echo get_theme_mod('color_iconos', '#161616'); ?>;
        }

        .color_texto_iconos h3 {
            color: <?php echo get_theme_mod('color_iconos', '#161616'); ?>;
        }

        .color_texto_iconos p {
            color: <?php echo get_theme_mod('color_iconos', '#000000'); ?>;
        }

        .titulo-carrusel-productos {
            background-color: <?php echo get_theme_mod('color_iconos', '#000000'); ?>;
        }


        .background-marca {
            background-color: <?php echo get_theme_mod('color_iconos', '#000000'); ?>;
        }


        .botones-customizer {
            background-color: <?php echo get_theme_mod('color_botones', '#000000'); ?>;

        }

        body,
        p,
        a {
            color: <?php echo get_theme_mod('color_texto_sitios', '#161616'); ?>;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: <?php echo get_theme_mod('color_titulos_sitio', '#161616'); ?>;
        }

        a.botones-customizer {
            background-color: <?php echo get_theme_mod('color_botones', '#000000'); ?>;
            color: <?php echo get_theme_mod('color_texto_botones', '#000000'); ?>;

        }

        header#masthead.comercio-header.site-header a,
        header#masthead.comercio-header.site-header p,
        .comercio-header.site-header span {
            color: <?php echo get_theme_mod('color_texto_cabecera', '#000000'); ?>;
            text-decoration: none;
        }


        footer.site-footer {
            
            text-decoration: none;
            border-top: 5px solid <?php echo get_theme_mod('color_cabecera', '#000000'); ?>;
            background-color: <?php echo get_theme_mod('color_fondo_footer', '#000000'); ?>;

        }

        footer .menu-footer.menu-tipo a{
            text-decoration: none;
            color: <?php echo get_theme_mod('color_texto_footer', '#000000'); ?>;
        }

        header.comercio-header.site-header{
            background-color: <?php echo get_theme_mod('color_cabecera', '#000000'); ?>;

        }
        

        .dropdown-menu.show {
            background-color: <?php echo get_theme_mod('color_cabecera', '#000000'); ?>;
        }

        .xoo-wsc-icon-basket1::before {
            background-color: <?php echo get_theme_mod('color_texto_cabecera', '#000000'); ?>;
            color: <?php echo get_theme_mod('color_cabecera', '#000000'); ?>;
        }

        .xoo-wsc-icon-basket1:hover::before {
            background-color: <?php echo get_theme_mod('color_cabecera', '#000000'); ?>;
        }

        .mini-carrito span.xoo-wsc-items-count {
            background-color: <?php echo get_theme_mod('color_texto_cabecera', '#000000'); ?>;
            color: <?php echo get_theme_mod('color_cabecera', '#000000'); ?>;
        }

        span.linea-hamburguesa {
            background-color: <?php echo get_theme_mod('color_texto_cabecera', '#000000'); ?>;

        }

        header.comercio-header.site-header .bg-light {
            background-color: <?php echo get_theme_mod('color_cabecera', '#000000'); ?>;

        }
    </style>
<?php
}
/**
 * customizar tus controles de settings. 
 */

add_action('customize_register', 'titan_customize_tema');

function titan_customize_tema($wp_customize)
{

    // Ajustar los componentes de la sección donde se muestran los controles.
    $wp_customize->get_control('blogdescription')->priority = 300;
    $wp_customize->get_control('display_header_text')->priority = 400;

    // Familia tipografica Settings
    $wp_customize->add_setting('site_title_font', array(
        // Save the users font choice as a site-wide 'option' rather than a 'theme_mod'.
        'type'              => 'option',
        // Nominate a default font.
        'default'        => __('Roboto'),
        // Check that the users font choice is valid.
        'sanitize_callback' => 'titan_sanitize_fuente',
    ));

    // Familia tipografica Settings.
    $wp_customize->add_control('site_title_font', array(
        // Attach our Control to the pre-existing 'title_tagline' Section.
        'section'           => 'title_tagline',
        'type'              => 'select',
        'label'             => __('Font Family'),
        // en este array mostramos las opciones.
        'choices'           => titan_customize_fuentes(),
        'priority'          => 100,
    ));

    // Tamaño de fuentes.
    $wp_customize->add_setting('site_title_size', array(
        // Salvamos el tamaño de la fuente del titulo
        'type'              => 'option',
        'default'           => 30,
        // Core WordPress function to ensure a positive number (interger) is returned.
        'sanitize_callback' => 'absint',
    ));

    // Tamaño de fuentes.
    $wp_customize->add_control('site_title_size', array(
        // Attach our Control to the pre-existing 'title_tagline' Section.
        'section'           => 'title_tagline',
        'type'              => 'range', // Selector de tamaño texto
        'label'             => __('Tamaño de texto'),
        'input_attrs'       => array(
            'min'     => 12,
            'max'     => 50,
            // Increment in units of 4 ... 20, 24, 28, 32, 36, 40 ... 80
            'step'    => 1,
        ),
        'priority'          => 200,
    ));
}
add_action('customize_register', 'titan_customize_tema');



/**
 * Crear listado de fuentes
 */
function titan_customize_fuentes()
{
    return apply_filters('titan_customize_fuentes', array(
        'Roboto'               => __('Roboto'),
        'Poppins'              => __('Poppins'),
        'Exo'                 => __('Exo'),
        'Lato'                 => __('Lato'),
        'Open Sans'            => __('Open+Sans'),
        'Montserrat'           => __('Montserrat'),

    ));
}



/**
 * nos aseguramos que le usuario elija la fuente corriente
 */
function titan_sanitize_fuente($value)
{
    // Traer la fuente.
    $choices = titan_customize_fuentes();

    // si el usuario no escoge fuente, 
    // volvemos a la fuente base del sitio.
    if (!array_key_exists($value, $choices)) {
        $value = 'Roboto';
    }

    // Return a valid font name.
    return $value;
}



/**
 * Register our required fonts.
 */
function titan_customize_fuentes_url()
{
    // Get the users chosen logo font. 
    $titan_fuente     = get_option('site_title_font');

    // If no Logo font has been selected, return early.
    if (!$titan_fuente) {
        return;
    }

    // fuente ...
    $fonts         = array();
    $subsets       = 'latin,latin-ext';
    $fonts[]     = $titan_fuente . ':400';

    return add_query_arg(array(
        'family' => urlencode(implode('|', $fonts)),
        'subset' => urlencode($subsets),
    ), '//fonts.googleapis.com/css');
}


/**
 * Enqueue fonts
 */
function mytheme_site_font_scripts_styles()
{
    wp_enqueue_style('site-fonts', titan_customize_fuentes_url(), array(), null);
}
add_action('wp_enqueue_scripts', 'mytheme_site_font_scripts_styles');



/**
 * Output CSS in document head.
 */
function mytheme_site_title_logo_css()
{
    $titan_fuente     = get_option('site_title_font');

    // If no Logo font has been selected, return early.
    if (!$titan_fuente) {
        return;
    }

    // We have a Logo font so now grab the logo size. Logo size defaults to 30 if no size is found.
    $font_size     = get_option('site_title_size', '30');
    // Append a font size measure. Possible values include: 'px', 'em', 'rem', '%'
    $font_size     = $font_size . 'px';
?>
    <style id='site-title-logo-css' type='text/css' media='all'>
        body,
        body a {

            font-size: <?php esc_html_e($font_size); ?>;
        }

        body p,
        body a,
        body span,
        body h1,
        body h2,
        body h3,
        body h4,
        body h5,
        body h6 {
            font-family: <?php esc_html_e($titan_fuente); ?>;

        }
    </style>
<?php
}
add_action('wp_head', 'mytheme_site_title_logo_css');


add_action('customize_register', 'color_ficha_producto');
function color_ficha_producto($wp_customize)
{


    //seccion customizer
    $wp_customize->add_section('color_ficha_producto', array(
        'title'      => 'Configuración ficha de producto',
        'priority'   => 30,
    ));

    /* settings color de texto botones ficha producto*/


    $wp_customize->add_setting('color_texto_producto', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_texto_producto', array(
        'label'        => 'colores textos ficha de productos',
        'section'    => 'color_ficha_producto',
        'settings'   => 'color_texto_producto',
    )));
    /* settings color de texto botones ficha producto*/


    /* settings color oferta*/


    $wp_customize->add_setting('color_fondo_onsale', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_fondo_onsale', array(
        'label'        => 'Color etiqueta ofertas',
        'section'    => 'color_ficha_producto',
        'settings'   => 'color_fondo_onsale',
    )));
    /* settings color oferta*/

    /* settings color_boton_carro*/


    $wp_customize->add_setting('color_boton_carro', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_boton_carro', array(
        'label'        => 'Color boton carro',
        'section'    => 'color_ficha_producto',
        'settings'   => 'color_boton_carro',
    )));
    /* settings color_boton_carro*/

    /* settings color_disponibilidad*/


    $wp_customize->add_setting('color_disponibilidad', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_disponibilidad', array(
        'label'        => 'Color etiqueta  disponibilidad',
        'section'    => 'color_ficha_producto',
        'settings'   => 'color_disponibilidad',
    )));
    /* settings color_disponibilidad*/


    /* settings color_categoria*/


    $wp_customize->add_setting('color_categoria', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_categoria', array(
        'label'        => 'Color etiqueta categorias',
        'section'    => 'color_ficha_producto',
        'settings'   => 'color_categoria',
    )));
    /* settings color_categoria*/

    /* settings color_texto_categoria*/


    $wp_customize->add_setting('color_texto_categoria', array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_texto_categoria', array(
        'label'        => 'Color texto, botón, disponibilidad, categoría',
        'section'    => 'color_ficha_producto',
        'settings'   => 'color_texto_categoria',
    )));
    /* settings color_texto_categoria*/
}

add_action('wp_head', 'color_producto_titan');


function color_producto_titan()
{
?>
    <style type="text/css">
        /*ficha de producto*/
        .tipo-entrega-nueva h5,
        .tipo-entrega-nueva h6,
        .tipo-entrega-nueva i,
        .tipo--entrega--in i,
        .single.single-product.woocommerce .product .product_titlel,
        .title-sku_wrapper,
        .single-product.single .price {
            color: <?php echo get_theme_mod('color_texto_producto', '#000000'); ?>;
        }

        .lista-productos .onsale,
        .single-product.single.woocommerce span.onsale, ul.products li.product .comercio-product-card .tarjeta-producto-superior .onsale{
            background-color: <?php echo get_theme_mod('color_fondo_onsale', '#000000'); ?>;

        }


        .woocommerce.single-product.single div.product form.cart .single_add_to_cart_button,
        .lista-productos a.button {
            background-color: <?php echo get_theme_mod('color_boton_carro', '#000000'); ?>;
        }

        .stock.in-stock {
            background-color: <?php echo get_theme_mod('color_disponibilidad', '#000000'); ?>;
        }

        .tagged_as a,
        .posted_in a,
        .tagged_as a:hover,
        .posted_in a:hover {
            background-color: <?php echo get_theme_mod('color_categoria', '#000000'); ?>;
        }

        .tagged_as a,
        .posted_in a,
        p.stock.in-stock,
        .woocommerce.single-product.single div.product form.cart .single_add_to_cart_button {
            text-decoration: none;
            color: <?php echo get_theme_mod('color_texto_categoria', '#000000'); ?>;
        }




        /*ficha de producto*/
    </style>
<?php
}
