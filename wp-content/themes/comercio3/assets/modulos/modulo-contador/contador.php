<?php $contador = get_field('seccion_contador'); if(empty($contador)) {?>
<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-contador/contador.css'; ?>
</style>
<script>
    <?php include get_template_directory() . '/assets/modulos/modulo-contador/contador.js'; ?>
</script>

<div id="contador" class="container-fluid mb-4">
<div class="contador-contenedor row">
<div class="col-12 col-lg-5 contador">
    <h3 class="demititulo"><?php the_field('contador_texto'); ?></h3>
    <!-- contador -->
    <div class="tiempo">
        <div id="hiddendate" class="d-none"><?php the_field('contador_fecha'); ?></div>
        <div id="demo"></div>
    </div>
    <!-- contador -->
</div>
<div class="col-12 col-lg-7">
<div class="container">
<div class="row justfiy-content-center pt-4 pb-2">

<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; // -1 shows all posts
$args = array(
    'post_type' => 'contador',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="col-12 col-md-6 tarjeta mb-3">
    <?php $link = get_field('link'); $imagen = get_field('imagen'); ?>
    <a class="link" href="<?php the_field('link',false,false); ?>">
        <img class="imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
    </a>
</div>

<?php endwhile; ?>
<?php else : ?>
<p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>

<?php $vigencia = get_field('contador_vigencia'); if(!empty($vigencia)) {?>
    <div class="col-12 vigencia">Vigencia: <?php the_field('contador_vigencia'); ?></div>
<?php }; ?>
</div>
</div>
</div> 
</div>
</div>
<?php }; ?>