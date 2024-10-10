<header class="header">
    <div class="container">
        <div class="d-flex d-between">
            <div class="header__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="header__menu">
                <?php 
                wp_nav_menu( array(
                   'theme_location'  => 'principal',
                   'container'         => 'nav', 
                   'container_id'      => 'menu',
                   'submenu_class' => 'customname',
                   'items_wrap'        => '<ul id="%1$s" class="navigation">%3$s</ul>',
                    ));
                   ?>
            </div>
        </div>
    </div>
</header>