<?php  /*  Multibanners */

function multibannerc_register() {

    $labels = array(
        'name' => _x('MultiBanners Inferior', 'post type general name'),
        'singular_name' => _x('Multibanner Inferior', 'post type singular name'),
        'add_new' => _x('Agregar nuevo banner', 'slideshow_two item'),
        'add_new_item' => __('Agregar nuevo banner'),
        'edit_item' => __('Editar banner'),
        'new_item' => __('Nuevo banner'),
        'view_item' => __('Ver el banner'),
        'search_items' => __('Buscar banner'),
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
        'menu_icon'  => 'dashicons-images-alt',
        'hierarchical' => false,
        'menu_position' => null,
        /*'taxonomies'	=> array( 'categoria-multibanner', 'etiqueta-multibanner', ), */
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'multibannerc', 'with_front' => false)
      ); 

    register_post_type( 'multibannerc' , $args );
}

add_action('init', 'multibannerc_register');

/*categorias personalizadas para inf
function categoria_multibanner() {
	register_taxonomy(
		'categoria-multibanner',
		'multibanner',
		array(
			'label' => __( 'Categoria multibanner' ),
			'rewrite' => array( 'slug' => 'categoria-multibanner' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}

add_action( 'init', 'categoria_multibanner' );

function etiqueta_multibanner() {
    register_taxonomy(
        'etiqueta-multibanner','multibanner',array(
        'hierarchical' => false,
        'label' => __( 'Etiqueta multibanner' ),
        // Allow automatic creation of taxonomy columns on associated post-types table?
        'show_admin_column'   => true,
        // Show in quick edit panel?
        'show_in_quick_edit'  => true,
        'update_count_callback' => '_update_post_term_count',
        'infquery_var' => true,
        'rewrite' => array( 'slug' => 'etiqueta-multibanner' ),
        )
    );
}

add_action( 'init', 'etiqueta_multibanner' );

/*function display_inf( $infquery ) { 
	if( is_category() || is_tag() && empty( $infquery->infquery_vars['multibannerfilter'] ) ) {
	    $infquery->set( 'post_type', array(
        'post', 'nav_menu_item', 'multibanner', 
        'post', 'nav_menu_item', 'multibanner', 
	    ));
	    return $infquery;
	}
}
   
add_filter( 'pre_get_posts', 'display_inf' );*/