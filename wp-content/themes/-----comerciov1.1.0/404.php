<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ecommerce
 */

get_header();
?>

<section class="section-404 py-5">
<div class="fondo-404 mb-5" style="background-image:url('https://www.crazyoutlets.cl/wp-content/uploads/2021/10/torn-paper-bg-scaled.jpg');">
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="col-8 col-md-6 col-lg-7 d-none d-md-block"></div>
			<div class="col-12 col-md-6 col-lg-5">
				<h2 class="titulo-404">ERROR 404</h2>
				<p class="sorry-404">Lo sentimos! No pudimos encontrar lo que estabas buscando</p>
				<a class="d-inline-block mb-5" href="<?php echo get_home_url();?>">
					<div class="boton-404">volver</div>
				</a>
				<p class="text-404">...Alternativamente, talvez te interese:</p>
			</div>
		</div>
	</div>
</div>
<!-- slider de productos destacados -->
	<?php include get_template_directory() . '/titan/productos/producto-destacados-post-type.php'; ?>
<!-- fin de slider de productos destacados -->
</section>

<?php
get_footer();
