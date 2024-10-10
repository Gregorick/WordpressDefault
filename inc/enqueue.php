<?php 
/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function theme_name_scripts() {
	wp_enqueue_style( 'estilos', get_template_directory_uri() . '/sass/estilos.css', array(), '1.0.0', 'all' );	
	wp_enqueue_style( 'Bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.0', 'all' );
    wp_enqueue_style( 'swiperslider', get_template_directory_uri() . '/css/swiper.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_script( 'BootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '5.0.0', true );
	wp_enqueue_script( 'swipersliderjs', get_template_directory_uri() .  '/js/swiper.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_script( 'ScrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js');
    wp_enqueue_script( 'animationGSAP', get_template_directory_uri() . '/js/animation.gsap.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'tweenMaxJs', get_template_directory_uri() . '/js/TweenMax.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'TimelineLite', get_template_directory_uri() . '/js/TimelineLite.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'TweenLite', get_template_directory_uri() . '/js/TweenLite.min.js', array( 'jquery' ), '1.0.0', true );	
	wp_enqueue_script( 'fsLightBox', get_template_directory_uri() . '/js/fslightbox.js', array( 'jquery' ), '1.0.0', true );			
	wp_enqueue_script( 'generales', get_template_directory_uri() . '/js/generales.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );