<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-multibanner3/multibanner3.css'; ?>
</style>

<div id="multibannerc" class="container-fluid">
<h2 class="multibanner-titulo"><?php the_field('titulo_multibannerc'); ?></h2>

<div class="multibanner-contenedor row">

<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; // -1 shows all posts
$args = array(
    'post_type' => 'multibannerc',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<?php 
$ancho = get_field('ancho_banner');
$alto = get_field('alto_banner');
if($ancho == '25%') {
    $col = 'col-12 col-md-3';
}else if($ancho == '50%'){
    $col = 'col-12 col-md-6';
}else if($ancho == '75%'){
    $col = 'col-12 col-md-9';
}else{
    $col = 'col-12';
}; 
?>
<div class="banner <?php echo $col; ?> mb-3">
    <a href="<?php the_field('link_banner',false,false); ?>" style="height:<?php echo $alto; ?>px;">  
        <?php $imagen = get_field('imagen_banner'); ?>
        <img class="imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
    </a>
</div>

<?php endwhile; ?>
<?php else : ?>
<p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
    
</div>
</div>