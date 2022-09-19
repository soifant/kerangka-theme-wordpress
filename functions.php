<?php

function load_file(){

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'load_file');


register_nav_menus(array(
'main_menu' => 'Main menu',
'main_footer' => 'Main footer'
));


//----the_excerpt
function get_excerpt_length(){
	return 5;
}

function return_excerpt_text(){
	return '';
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');


function init_setup(){

	register_nav_menus(array(
	'main_menu' => 'Main menu',
	'main_footer' => 'Main footer'
	));
	
	add_theme_support('post-thumbnails');
	add_image_size('small_thumb', 150, 150, true);
	
	add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'init_setup');


function widget_setup(){

	register_sidebar(array(
		'name' => 'Sidebar satu',
		'id' => 'sidebar1'
	));
}
add_action('widgets_init', 'widget_setup');


?>