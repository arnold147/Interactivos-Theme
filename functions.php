<?php

// Registrar los menus en Wordpress
register_nav_menus(
	array(
		'menu' => 'Menu Superior', 
		'menu_footer' => 'Menu Footer' 
	)
);

// Agregar Areas para Widgets al Thema	
function add_widgets_area() {
	register_sidebar( array(
        'name'          => __( 'Top 1', 'interactivos' ),
        'id'            => 'top-sidebar',
        'before_widget' => '<aside id="%1$s" class="top-1">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'add_widgets_area' );


// Agregar soporte para logo al Thema
function interactivos_setup() {
	add_theme_support( 'custom-logo', array(
		'flex-width' => true,
	) );
}
add_action( 'after_setup_theme', 'interactivos_setup' );


// Agregar soporte para Post Thumbnails 
add_theme_support( 'post-thumbnails' );


// Remover el auto corrector de Tags del editor de contenido y agregarlo con otra prioridad de carga
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 13);      


// WordPress Titles
add_theme_support( 'title-tag' );


// Agregar archivos css y js del thema
add_action( 'wp_enqueue_scripts', 'interactivos_load_css_js' );

function interactivos_load_css_js() {   
   
   // Hoja style.css general
	wp_enqueue_style( 'interactivos-style', get_stylesheet_uri() );
   
   // Condicional para cargar estilos paginas interas y excluirla en el home
   if(!is_front_page()){wp_enqueue_style( 'interna-css', get_template_directory_uri() . '/css/internas.css');}
	   
	
	// Estilos especificos del home
	if(is_front_page()) {wp_enqueue_style( 'home-css', get_template_directory_uri() . '/css/home.css');}
	
	
	// Cargar js del Thema
	wp_register_script('mis-scripts-js', get_template_directory_uri() .'/js/mis-scripts.js' , array('jquery'), '', true);    
	wp_enqueue_script( 'mis-scripts-js' ); 
}