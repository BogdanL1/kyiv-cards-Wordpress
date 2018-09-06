<?php
/**
 * kyiv-cards functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kyiv-cards
 */

if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
}

function wptuts_styles_with_the_lot()  
{  
    wp_register_style( 'font-awesome', get_template_directory_uri() . '/fonts/CenturyGothic.ttf', array(), '1', 'all' );
    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1', 'all' );  
    wp_enqueue_style( 'style' );      
    wp_enqueue_style( 'font-awesome' );  
}  
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );

remove_filter( 'the_content', 'wpautop' );

register_nav_menus( array(
		'top' => __( 'Меню Верхнее', 'kyiv-cards'),
	) );

register_nav_menus( array(
		'bot' => __( 'Меню Нижнее', 'kyiv-cards'),
	) );

function register_my_widgets(){
	register_sidebar( array(
		'name' => "Виджет в header",
		'id' => 'widget-header',
		'description' => 'Эти виджеты будут показаны с правой колонке сайта',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	) );
	register_sidebar( array(
		'name' => "Виджет_1 в footer",
		'id' => 'widget-footer1',
		'description' => 'Эти виджеты будут показаны с правой колонке сайта',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	) );
	register_sidebar( array(
		'name' => "Виджет_2 в footer",
		'id' => 'widget-footer2',
		'description' => 'Эти виджеты будут показаны с правой колонке сайта',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	) );
	register_sidebar( array(
		'name' => "Виджет_3 в footer",
		'id' => 'widget-footer3',
		'description' => 'Эти виджеты будут показаны с правой колонке сайта',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );