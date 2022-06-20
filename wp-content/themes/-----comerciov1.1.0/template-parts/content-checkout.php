<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php /*
	<!-- .<header class="entry-header">
    the_title( '<h1 class="titulo h1">', '</h1>' ); 
	</header>entry-header --> */
    ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

    <footer class="entry-footer">
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
