<div class="container">
<div class="row">
<div class="col-md-3 d-flex justify-content-start align-items-start mt-3">

	<?php wp_nav_menu( array('theme_location' => 'menu-categoria','menu_id' => 'menu_categoria','menu_class' => 'm-0',) );?>
</div>
	
<div class="col-12 col-md-9">
	
	<!--Slider-->
<div id="carrusel_ofertas" class="carousel slide col-12 col-md-12  mt-3" data-ride="carousel" data-interval="5000">
   

<div class="carousel-inner"> 
      <?php $active=true;
          $temp = $wp_query;
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $post_per_page = 100; // -1 shows all posts
          $args=array(
            'post_type' => 'carrusel_ofertas',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
          );
            $wp_query = new WP_Query($args); 

            if( have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post();?>

            <div class="carousel-item <?php if ($active){print("active");}?>">  
<?php  
            $active=false; 
            $custom = get_post_custom($post->ID);
            $url = $custom["url"][0]; 
            $url_open = $custom["url_open"][0];
            $custom_title = "#".$post->ID; 
         ?>
 
        <?php if ($url != "") { ?>

       
    


    



      
            <?php 
$image = get_field('carrusel_uno_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div>


<?php 
$image = get_field('carrusel_dos_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div>


<?php 
$image = get_field('carrusel_tres_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div>
	<?php 
$image = get_field('carrusel_cuatro_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div>
	
<?php 
$image = get_field('carrusel_cinco_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div> 	
 
  </div>  

        <?php } 

        else { 
  
          ?>
        

        
        <?php }

        ?>
<?php 
$image = get_field('carrusel_uno_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div>


<?php 
$image = get_field('carrusel_dos_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div>


<?php 
$image = get_field('carrusel_tres_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div> 
	
	<?php 
$image = get_field('carrusel_cuatro_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div>
	
<?php 
$image = get_field('carrusel_cinco_oferta');
if( !empty( $image ) ): ?>
   <div class="carrusel-interior" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
 
<?php endif; ?>
</div> 	

 
  </div>  
        <?php endwhile; else: ?>
 
        <?php endif; wp_reset_query(); $wp_query = $temp ?> 
    
 

 <a class="carousel-control-prev" href="#carrusel_ofertas" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  
  </a> 
  <a class="carousel-control-next" href="#carrusel_ofertas" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  
  </a>
  </div>
	

	</div>	
	<?php require get_template_directory() .'/titan/banner-simple/caluga-ecommerce.php';?> 	
	
</div> 
</div> 



  
 