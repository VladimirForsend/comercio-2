
            <nav id="site-navigation" class="navbar navbar-expand-lg navbar-light">
                <div class="navbar-brand">

                    <?php
                    the_custom_logo();
                    if (is_front_page() && is_home()) :
                    ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php
                    else :
                    ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                    endif;
                    $fundaciones_description = get_bloginfo('description', 'display');
                    if ($fundaciones_description || is_customize_preview()) :
                    ?>
                        <p class="site-description"><?php echo $fundaciones_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                    ?></p>
                    <?php endif; ?>
                </div><!-- .navbar-brand -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-md-row no-gutters" id="navbarSupportedContent">

                    <ul id="navbar" class="navbar-nav col-md-8 m-0 flex-lg-column">

                        <div class="busqueda nav-item col-md-12">
                            <?php if (function_exists('aws_get_search_form')) {
                                aws_get_search_form();
                            } ?>

                        </div>



                    </ul>




                    <div class="col-md-2 d-flex justify-content-center align-items-center">

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-rrss',
                            'menu_id'        => 'navbar',
                            'menu_class' => 'navbar-nav m-0',
                        )); ?>

                    </div>

                    <!---<div class="col-md-1 d-flex justify-content-center align-items-center">
					<button type="button" class="nav-ecommerce navbar-toggler" data-container="body" data-toggle="popover" data-placement="bottom" data-content='<?php // wp_nav_menu( array('theme_location' => 'menu-categoria','menu_id' => 'menu_categoria','menu_class' => 'm-0',) );
                                                                                                                                                                    ?> '> 
			
					<i class="fas fa-bars"></i>
				  </button>
				  </div>-->

                    <div class="col-md-2 d-flex justify-content-center align-items-center mini-carrito"></div>



            </nav><!-- #site-navigation -->