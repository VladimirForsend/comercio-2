<?php //OPCIÓN MENU 1 SIMPLE CON BOOTSTRAP
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-categoria',
                        'menu_id'        => 'navbar',
                        'menu_class'     => 'navbar-nav pop-menu',
                        'container_class' => 'nada'
                    )
                );
