<?php
 /*speakers*/

// Register Custom Post Type
add_action( 'init', 'bannerh', 0 );

function bannerh() {

	$labels = array(
		'name'                  => _x( 'banner', 'Post Type General Name', 'bannerh' ),
		'singular_name'         => _x( 'Charlista', 'Post Type Singular Name', 'bannerh' ),
		'menu_name'             => __( 'bannerh', 'bannerh' ),
		'name_admin_bar'        => __( 'bannerh', 'bannerh' ),
		'archives'              => __( 'bannerh', 'bannerh' ),
		'attributes'            => __( 'bannerh', 'bannerh' ),
		'parent_item_colon'     => __( 'Basado en:', 'bannerh' ),
		'all_items'             => __( 'Todos los bannerh', 'bannerh' ),
		'add_new_item'          => __( 'Agregar nuevo banner', 'bannerh' ),
		'add_new'               => __( 'Agregar nueva', 'bannerh' ),
		'new_item'              => __( 'nuevo banner', 'bannerh' ),
		'edit_item'             => __( 'editar banner', 'bannerh' ),
		'update_item'           => __( 'actualizar', 'bannerh' ),
		'view_item'             => __( 'Ver banner', 'bannerh' ),
		'view_items'            => __( 'ver el banner', 'bannerh' ),
		'search_items'          => __( 'buscar un banner', 'bannerh' ),
		'not_found'             => __( 'no se encuentra', 'bannerh' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'bannerh' ),
		'featured_image'        => __( 'imagen destacada', 'bannerh' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'bannerh' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'bannerh' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'bannerh' ),
		'insert_into_item'      => __( 'insertar en el item', 'bannerh' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'bannerh' ),
		'items_list'            => __( 'Lista de artículos', 'bannerh' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'bannerh' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'bannerh' ),
	);
	$args = array(
		'label'                 => __( 'bannerh', 'bannerh' ),
		'description'           => __( 'bannerh', 'bannerh' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt' ),
		'taxonomies'            => array( 'categoria-bannerh', 'etiqueta-bannerh', ), 
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-book-alt',
		'menu_position' => null,
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'bannerh', 'with_front' => FALSE)
		
	);




	register_post_type( 'bannerh', $args );

}

 /*categorias personalizadas para bannerh*/
 function categoria_bannerh() {

	register_taxonomy(
		'categoria-bannerh',
		'bannerh',
		array(
			'label' => __( 'Categoria bannerh' ),
			'rewrite' => array( 'slug' => 'categoria-bannerh' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_bannerh' );


function etiqueta_bannerh() {

register_taxonomy(
			'etiqueta-bannerh','bannerh',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta bannerh' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'bannerquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-bannerh' ),
		)
	);




}
add_action( 'init', 'etiqueta_bannerh' );

function display_bannerh( $bannerquery ) {
	if( is_category() || is_tag() && empty( $bannerquery->bannerquery_vars['bannerhfilter'] ) ) {
	$bannerquery->set( 'post_type', array(
	'post', 'nav_menu_item', 'banner', 
	'post', 'nav_menu_item', 'bannerh', 
	));
	return $bannerquery;
	}
   }
   
   add_filter( 'pre_get_posts', 'display_bannerh' );