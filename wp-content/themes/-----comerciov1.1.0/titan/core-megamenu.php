<?php 
/*mega menu*/
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	
	// loop
	foreach( $items as &$item ) {
		
		// vars
		$imagen_menu = $image = get_field('imagen_menu', $item);
		
	
		// append imagen_menu 
		if( $imagen_menu ) {
			
			$item->title .= ' <img src="'.$image['url'].'">';
			
		}
		
	}
	
	
	// return
	return $items;
	
}
/*mega menu*/ 