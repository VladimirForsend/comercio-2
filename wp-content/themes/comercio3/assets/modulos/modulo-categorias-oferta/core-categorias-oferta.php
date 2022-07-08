<?php  /*  categoriaof */

function categoriaof_register() {

    $labels = array(
        'name' => _x('categoriaof', 'post type general name'),
        'singular_name' => _x('categoriaof', 'post type singular name'),
        'add_new' => _x('Agregar banner de categoría', 'slideshow_two item'),
        'add_new_item' => __('Agregar cat oferta'),
        'edit_item' => __('Editar cat oferta'),
        'new_item' => __('Nueva cat oferta'),
        'view_item' => __('Ver la cat oferta'),
        'search_items' => __('Buscar cat oferta'),
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
        /*'taxonomies'	=> array( 'categoria-categoriaof', 'etiqueta-categoriaof', ), */
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'categoriaof', 'with_front' => false)
      ); 

    register_post_type( 'categoriaof' , $args );
}

add_action('init', 'categoriaof_register');

/*categorias personalizadas para inf
function categoria_categoriaof() {
	register_taxonomy(
		'categoria-categoriaof',
		'categoriaof',
		array(
			'label' => __( 'Categoria categoriaof' ),
			'rewrite' => array( 'slug' => 'categoria-categoriaof' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}

add_action( 'init', 'categoria_categoriaof' );

function etiqueta_categoriaof() {
    register_taxonomy(
        'etiqueta-categoriaof','categoriaof',array(
        'hierarchical' => false,
        'label' => __( 'Etiqueta categoriaof' ),
        // Allow automatic creation of taxonomy columns on associated post-types table?
        'show_admin_column'   => true,
        // Show in quick edit panel?
        'show_in_quick_edit'  => true,
        'update_count_callback' => '_update_post_term_count',
        'infquery_var' => true,
        'rewrite' => array( 'slug' => 'etiqueta-categoriaof' ),
        )
    );
}

add_action( 'init', 'etiqueta_categoriaof' );

/*function display_inf( $infquery ) { 
	if( is_category() || is_tag() && empty( $infquery->infquery_vars['categoriaoffilter'] ) ) {
	    $infquery->set( 'post_type', array(
        'post', 'nav_menu_item', 'categoriaof', 
        'post', 'nav_menu_item', 'categoriaof', 
	    ));
	    return $infquery;
	}
}
   
add_filter( 'pre_get_posts', 'display_inf' );*/