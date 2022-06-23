<?php  /*  contador */

function contador_register() {

    $labels = array(
        'name' => _x('Promo Contador', 'post type general name'),
        'singular_name' => _x('Promo Contador', 'post type singular name'),
        'add_new' => _x('Agregar nueva promo', 'slideshow_two item'),
        'add_new_item' => __('Agregar nueva promo'),
        'edit_item' => __('Editar promocion'),
        'new_item' => __('Nueva promocion'),
        'view_item' => __('Ver la promocion'),
        'search_items' => __('Buscar promociones'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-clock',
        'hierarchical' => false,
        'menu_position' => null,
        /*'taxonomies'	=> array( 'categoria-contador', 'etiqueta-contador', ), */
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'contador', 'with_front' => false)
      ); 

    register_post_type( 'contador' , $args );
}

add_action('init', 'contador_register');

/*categorias personalizadas para inf
function categoria_contador() {
	register_taxonomy(
		'categoria-contador',
		'contador',
		array(
			'label' => __( 'Categoria contador' ),
			'rewrite' => array( 'slug' => 'categoria-contador' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}

add_action( 'init', 'categoria_contador' );

function etiqueta_contador() {
    register_taxonomy(
        'etiqueta-contador','contador',array(
        'hierarchical' => false,
        'label' => __( 'Etiqueta contador' ),
        // Allow automatic creation of taxonomy columns on associated post-types table?
        'show_admin_column'   => true,
        // Show in quick edit panel?
        'show_in_quick_edit'  => true,
        'update_count_callback' => '_update_post_term_count',
        'infquery_var' => true,
        'rewrite' => array( 'slug' => 'etiqueta-contador' ),
        )
    );
}

add_action( 'init', 'etiqueta_contador' );

/*function display_inf( $infquery ) { 
	if( is_category() || is_tag() && empty( $infquery->infquery_vars['contadorfilter'] ) ) {
	    $infquery->set( 'post_type', array(
        'post', 'nav_menu_item', 'contador', 
        'post', 'nav_menu_item', 'contador', 
	    ));
	    return $infquery;
	}
}
   
add_filter( 'pre_get_posts', 'display_inf' );*/