<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package expanding
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer container-fluid pt-3">

<div class="container">

<div class="row">		
<div class="col-12 col-sm-12 col-md-12 col-lg-8">
<div class="row">	 
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				
				<?php
			endif;
			$fundacionoportunidad_description = get_bloginfo( 'description', 'display' );
			if ( $fundacionoportunidad_description || is_customize_preview() ) :
				?>

			<?php endif; ?> 
</div>  

<div class="col-12 col-sm-6 col-md-4 col-lg-3">
  
	<?php 
  if( is_active_sidebar('menu_uno_izquierdo') ) :
  dynamic_sidebar('menu_uno_izquierdo'); endif;?>    
</div>  
  
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
  
<?php 
  if( is_active_sidebar('menu_uno_derecho') ) :
  dynamic_sidebar('menu_uno_derecho'); endif;?> 
</div>  

<div class="col-12 col-sm-6 col-md-4 col-lg-3">
  
<?php 
  if( is_active_sidebar('menu_dos_derecho') ) :
  dynamic_sidebar('menu_dos_derecho'); endif;?> 
</div> 
<div class="col-12 col-sm-12 col-md-12 col-lg-12"> 
  
  <?php 
  if( is_active_sidebar('menu_logos') ) :
  dynamic_sidebar('menu_logos');
  
  endif; 
  ?>    
</div>
</div>
</div>  
 
<div class="col-12 col-sm-12 col-md-12 col-lg-4">

      
    <?php 
    if( is_active_sidebar('menu_derecho_form') ) :
    dynamic_sidebar('menu_derecho_form');
    endif; 
    ?>    

</div> 
</div>

<div class="menu-pie-pagina col-12 col-sm-12 col-md-12 col-lg-12">
<?php 
  if( is_active_sidebar('menu_pie_pagina') ) :
  dynamic_sidebar('menu_pie_pagina');
  
  endif; 
  ?> 
<?php 
if( is_active_sidebar('menu_pie-pagina') ) :
dynamic_sidebar('menu_pie-pagina');
endif; 
?>  

</div>   
 
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
