<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-categorias-oferta/categorias-oferta.css'; ?>
   
</style>

<div class="container-fluid mt-3 contenedor-productos-home carusel--productos">


    <!--productos destacados-->
    <ul class="row p-0">

        <?php $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 12; // -1 shows all posts
        $args = array(
            'post_type' => 'categoriaof',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);

        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="tarjeta-carr-cat col-12 col-md-<?php the_field('columnas');?>">
                   
                     <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="<?php echo get_the_title();?>">
                     
    
                        <a class="botones-customizer" href="#">ver más</a>
                    
                </div>



               

        <?php
            endwhile;
        endif;
        wp_reset_query();
        $wp_query = $temp ?>


</div>