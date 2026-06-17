<?php
/*
  Description: Webibazaar Default Homepage Slide Show for Webibazaar WordPress themes.
  Version: 1.0
  Author: Webibazaar
  Author URI: https://www.templatemonster.com/authors/webibazaar/
  @copyright  Copyright (c) 2022 Webibazaar.
  @license    https://www.webibazaar.com/license/
 */
?>
<?php 
//  Creating Widget 
// Reference : http://codex.wordpress.org/Widgets_API
/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override wntr_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 
 * @uses register_sidebar
 */
function wntr_register_sidebars() {
	register_sidebar( array(
		'name' => esc_html__( 'Header Shopping Cart Area', 'technivo' ),
		'id' => 'header-widget',
		'description' => esc_html__( 'The Cart on header', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">', 
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => esc_html__( 'Header currency Widget Area', 'cabana3' ),
		'id' => 'header-currency',
		'description' => esc_html__( 'The header currency widget area', 'cabana3' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Header Search Widget Area', 'technivo' ),
		'id' => 'header-search',
		'description' => esc_html__( 'The header search widget area', 'technivo' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'First Footer Widget Area', 'technivo' ),
		'id' => 'first-footer-widget-area',
		'description' => esc_html__( 'First Footer Widget Area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer Widget Area', 'technivo' ),
		'id' => 'second-footer-widget-area',
		'description' => esc_html__( 'Second Footer Widget Area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Third Footer Widget Area', 'technivo' ),
		'id' => 'third-footer-widget-area',
		'description' => esc_html__( 'Third Footer Widget Area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Fourth Footer Widget Area', 'technivo' ),
		'id' => 'fourth-footer-widget-area',
		'description' => esc_html__( 'Fourth Footer Widget Area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Fifth Footer Widget Area', 'technivo' ),
		'id' => 'fifth-footer-widget-area',
		'description' => esc_html__( 'Fifth Footer Widget Area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Logo Footer Widget Area', 'technivo' ),
		'id' => 'logo-footer-widget-area',
		'description' => esc_html__( 'logo Footer Widget Area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Home Category Widget Area', 'technivo' ),
		'id' => 'home-category',
		'description' => esc_html__( 'The home category widget area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Top Widget Area', 'technivo' ),
		'id' => 'footer-top-widget-area',
		'description' => esc_html__( 'Footer Top Widget Area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Bottom Widget Area', 'technivo' ),
		'id' => 'footer-bottom-widget-area',
		'description' => esc_html__( 'Footer Bottom Widget Area', 'technivo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer followus Widget Area', 'cabana3' ),
		'id' => 'fotter-followus-widget-area',
		'description' => esc_html__( 'Footer followus Widget Area', 'cabana3' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
/**
 * Register sidebars by running wntr_widgets_init() on the widgets_init hook. 
 */
add_action( 'widgets_init', 'wntr_register_sidebars' );
get_template_part('winter/widgets/wntr-follow-us');
get_template_part('winter/widgets/wntr-footer-aboutus');
get_template_part('winter/widgets/wntr-footer-services');
get_template_part('winter/widgets/wntr-advance-search');
?>