<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package comercio2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	        <!-- slider de productos destacados -->
			<?php include get_template_directory() . '/assets/modulos/modulo-productos/producto-destacados-post-type.php'; ?>
        <!-- fin de slider de productos destacados -->
		
		<!-- slider de productos destacados -->
			<?php include get_template_directory() . '/assets/modulos/modulo-productos/producto-post-type.php'; ?>
        <!-- fin de slider de productos destacados -->
		<div class="col-12 text-white mb-3">
			<a class="w-100 btn background-marca" href="<?php the_field('ver_todos_los_productos');?>">Ver todos los productos</a>
		</div>

        <!-- contador -->
        <?php include get_template_directory() . '/assets/modulos/modulo-contador/contador.php'; ?>
        <!-- contador -->
		<!-- multibanners -->
        <?php include get_template_directory() . '/assets/modulos/modulo-multibanner2/multibanner2.php'; ?>
        <!-- multibanners -->
        <!-- multibanners 2 -->
        <?php include get_template_directory() . '/assets/modulos/modulo-multibanner/multibanner.php'; ?>
        <!-- multibanners 2 -->
		<!-- multibanners 3 -->
        <?php include get_template_directory() . '/assets/modulos/modulo-multibanner3/multibanner3.php'; ?>
        <!-- multibanners 3 -->
</article><!-- #post-<?php the_ID(); ?> -->
