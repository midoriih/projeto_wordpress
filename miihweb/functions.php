<?php 

// Inluir os arquivos da TGM
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

//Requerendo o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

//carregar os scripts bootstrap
function load_scripts(){
	wp_enqueue_script(	'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

//Função de configuração de tema
function miihweb_config(){
		//registro de menu
	register_nav_menus(
	array(
		'my_main_menu' => __( 'Main Menu', 'miihweb' ),
		'footer_menu' => __( 'Bot Menu', 'miihweb' )
		)

	);

	$args = array(
		'height' =>225,
		'width' => 1920 
	);


	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array( 'height' => 110, 'width' => 200 ));

	//Habilitando suporte à tradução
	$textdomain = "miihweb";
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

	// Suporte ao Gutenberg

	add_theme_support( 'aling-wide' );
	
}
add_action( 'after_setup_theme', 'miihweb_config', 0);

add_action( 'widgets_init', 'miihweb_sidebars' );
function miihweb_sidebars(){
	register_sidebar(
		array(
			'name' => __( 'Home Page Sidebar', 'miihweb' ),
			'id' => 'sidebar-1',
			'description' => __( 'Sidebar to be used on Home Page', 'miihweb' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Blog Sidebar', 'miihweb' ),
			'id' => 'sidebar-2',
			'description' => __( 'Sidebar to be used on Blog', 'miihweb' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Services 1', 'miihweb' ),
			'id' => 'services-1',
			'description' => __( 'Frist Services Area.', 'miihweb' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Services 2', 'miihweb' ),
			'id' => 'services-2',
			'description' => __( 'Secund Services Area.', 'miihweb' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Services 3', 'miihweb' ),
			'id' => 'services-3',
			'description' => __( 'Thrid Services Area.', 'miihweb' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Social Icons', 'miihweb' ),
			'id' => 'social-media',
			'description' => __( 'Place your media icons here.', 'miihweb' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);



}
