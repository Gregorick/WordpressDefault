<?php 

/* REGISTRAR MENUS */

register_nav_menu( 'principal', 'Menu Principal' );
register_nav_menu( 'footer', 'Menu Footer' );

/*  REGISTRAR HEADER BACKGROUND  */

add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-logo' );

/* REGISTRAR IMAGENES EN LAS ENTRADAS */ 

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 350, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-general', 1200, 350 ); //300 pixels wide (and unlimited height)
    add_image_size( 'principal-banner', 760, 450 ); //300 pixels wide (and unlimited height)
    add_image_size( 'principal-right', 100, 75 ); //300 pixels wide (and unlimited height)
    add_image_size( 'carousel-blog', 253, 142 ); //300 pixels wide (and unlimited height)
    add_image_size( 'portada-noticias', 340, 191 ); //300 pixels wide (and unlimited height)
    add_image_size( 'noticias-home', 94, 44 ); //300 pixels wide (and unlimited height)
    add_image_size( 'category-sidebar', 350 ); //300 pixels wide (and unlimited height)
    add_image_size( 'desktop-cell', 1080, 512 ); //1080 x 623 pixels wide (and unlimited height)

}

// ACTIVANDO SIDEBAR

$args = array(
    'name'          => __( 'Columna Derecha', 'cderecha' ),
    'id'            => 'cderecha',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1" class="widget %2">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);

register_sidebar( $args );


/* EXTRATOS DE TEXTOS Y LEER MAS */

function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 30 );

//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

 ?>