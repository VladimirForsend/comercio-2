<?php

/**
 * Template part for displaying page content in home page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 categorias-home-page'); ?>>

<!--box categoria-->
<?php include get_template_directory() . '/titan/category-box/category-box.php'; ?>
<!--box categoria-->


</article><!-- #post-<?php the_ID(); ?> -->
<!-- #post-
<div class="col-12 col-md-4 col-lg-4 col-xl-4">
<?php //get_sidebar(); 
?>
</div> -->