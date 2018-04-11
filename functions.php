<?php


function zboom_setup(){

	add_theme_support('title-tag');
	add_theme_support( 'custom-background');
	add_theme_support('post-thumbnails');
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video' ) );

	if(function_exists(register_nav_menu)){
	register_nav_menu('main_menu', 'Main menu');
	}

	add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

	function read_more($limit){
		$the_contents = explode(' ', get_the_content());

		$less_content = array_slice($the_contents, 0, $limit);

		echo $less_content= implode(' ', $less_content);
			}

		register_post_type('zboomslider', array(
		'labels' => array(
			'name' => 'Sliders',
			'add_new_item' => 'Add new slider'
		),
		'public'=> true,
		'supports' => array('title', 'thumbnail'),
		'menu_icon' => 'dashicons-welcome-widgets-menus'	
	));


		register_post_type('zblock', array(
		'labels' => array(
			'name' => 'Services',
			'add_new_item' => 'Add new Service'
		),
		'public'=> true,
		'supports' => array('title', 'editor'),
		'menu_icon' => 'dashicons-images-alt'	
	));



		register_post_type('zblockgellary', array(
		'labels' => array(
			'name' => 'Gellary',
			'add_new_item' => 'Add new gellery item'
		),
		'public'=> true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-format-gallery'
	));
		
}

add_action( 'after_setup_theme', 'zboom_setup');

function zboom_sidebar() {

	register_sidebar(array(
		'name'          => 'Right Sidebar',
		'id'            => 'right-sidebar',    
		'description'   => 'Add widgets here',
		'before_widget' => '<div class="box">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   => '</h2></div><div class="content">' 
	));

	register_sidebar(array(
		'name'          => 'Footer Widget',
		'id'            => 'footer-widget',    
		'description'   => 'Add widgets here',
		'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
		'after_widget'  => '</div></div></div></div>',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   => '</h2></div><div class="content">' 
	));

	register_sidebar(array(
		'name'          => 'Contect sidebar',
		'id'            => 'contect-sidebar',    
		'description'   => 'Add Contect sidebar',
		'before_widget' => '<div class="box right-sidebar">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   => '</h2></div><div class="content">' 
	));
}

add_action('widgets_init', 'zboom_sidebar');
