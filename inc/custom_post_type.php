<?php 


// programacion

function custom_post_type_programacion() {

	$labels = array(
		'name'                  => _x( 'programacion', 'Post Type General Name', 'programacion' ),
		'singular_name'         => _x( 'programacion', 'Post Type Singular Name', 'programacion' ),
		'menu_name'             => __( 'programacion', 'programacion' ),
		'name_admin_bar'        => __( 'programacion', 'programacion' ),
		'archives'              => __( 'List the programacion', 'programacion' ),
		'attributes'            => __( 'Atributos', 'programacion' ),
		'parent_item_colon'     => __( 'Categorias', 'programacion' ),
		'all_items'             => __( 'Todos los programacion', 'programacion' ),
		'add_new_item'          => __( 'Agregar nuevo programacion', 'programacion' ),
		'add_new'               => __( 'Agregar nuevo programacion', 'programacion' ),
		'new_item'              => __( 'Agregar nuevo programacion', 'programacion' ),
		'edit_item'             => __( 'Agregar nuevo programacion', 'programacion' ),
		'update_item'           => __( 'Actualiza los programacion', 'programacion' ),
		'view_item'             => __( 'Agregar nueva programacion', 'programacion' ),
		'view_items'            => __( 'See programacion', 'programacion' ),
		'search_items'          => __( 'See programacion', 'programacion' ),
		'not_found'             => __( 'product no encontrado', 'programacion' ),
		'not_found_in_trash'    => __( 'No hay programacion en la basura', 'programacion' ),
		'featured_image'        => __( 'Feature image', 'programacion' ),
		'set_featured_image'    => __( 'Set image destacada', 'programacion' ),
		'remove_featured_image' => __( 'RemoSee Feature image', 'programacion' ),
		'use_featured_image'    => __( 'Use asFeature image', 'programacion' ),
		'insert_into_item'      => __( 'Insert into del programacion', 'programacion' ),
		'uploaded_to_this_item' => __( 'Update a este programacion', 'programacion' ),
		'items_list'            => __( 'List of programacion', 'programacion' ),
		'items_list_navigation' => __( 'Items list navigation', 'programacion' ),
		'filter_items_list'     => __( 'Filter product en lista', 'programacion' ),
	);

	$args = array(
		'label'                 => __( 'programacion', 'programacion' ),
		'description'           => __( 'Detalles de los products', 'programacion' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'has_archive'           => true,       
		'publicly_queryable'    => true,
		'query_var'             => 'programacion',
		'rewrite'               => array('slug', 'programacion'),
		'capability_type'       => 'post',
	);


	register_post_type( 'programacion', $args );

}
add_action( 'init', 'custom_post_type_programacion', 0 );

// Categoría

function registrar_taxonomia_programacion() { 

//para las categorias

$labels = array ( 

'name' => 'Tipos de programacion',
'singular_name' => 'Tipo',
'search_items' => 'search_item',
'all_items' => 'Todos los programacion',
'parent_item' => 'Parent Item',
'parent_item_colon' => 'Parent Type:',
'edit_item' => 'Editar Categoría',
'update_item' => 'Actualizar Categoría',
'add_new_item' => 'Agregar nueva categoría',
'new_item_name' => 'Nombre de la nueva categoría',
'menu_name' => 'Tipo de programacion'
);	

$args = array ( 

'hierarchical' => true,
'labels' => $labels,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array ( 'slug' => 'tipos-programacion')

	);

register_taxonomy( 'tiposdeprogramacion', array( 'programacion' ), $args );

}

add_action( 'init', 'registrar_taxonomia_programacion' );

 ?>