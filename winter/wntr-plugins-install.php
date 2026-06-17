<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.5.2 for parent theme wt for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require trailingslashit(get_template_directory()) . '/winter/class-tgm-plugin-activation.php' ;
add_action( 'tgmpa_register', 'wntr_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function wntr_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		// This is an example of how to include a plugin bundled with a theme.		
		array(
			'name'               => esc_html__( 'Winter MetaBox', 'technivo' ), // The plugin name.
			'slug'               => 'winter-metabox', // The plugin slug (typically the folder name).
			'source'             => get_template_directory().'/winter/plugins/winter-metabox.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.			
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),		
		array(
			'name'               => esc_html__( 'Winter Addon', 'technivo' ),
			'slug'               => 'winter-addon',
			'source'             => get_template_directory().'/winter/plugins/winter-addon.zip',
			'required'           => true,
			'version'            => '1.0',			
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'      		 => esc_html__( 'Ml slider pro', 'technivo' ),
			'slug'     			 => 'ml-slider-pro',
			'source'             => get_template_directory().'/winter/plugins/ml-slider-pro.zip',
			'required'           => true,
			'version'            => '',			
			'external_url'       => '',
			'is_callable'        => '',
		),			
		array(
			'name'      		 => esc_html__( 'Mega Menu', 'technivo' ),
			'slug'     			 => 'ap-mega-menu',
			'source'             => get_template_directory().'/winter/plugins/ap-mega-menu.zip',
			'required'           => true,
			'version'            => '',			
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'      		 => esc_html__( 'Elementskit', 'technivo' ),
			'slug'     			 => 'elementskit',
			'source'             => get_template_directory().'/winter/plugins/elementskit.zip',
			'required'           => true,
			'version'            => '',			
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'      => esc_html__( 'Elementskit Lite', 'technivo' ),
			'slug'      => 'elementskit-lite',			
			'required'  => false			
		),
		array(
			'name'     => esc_html__( 'Redux Framework', 'technivo' ),
			'slug'     => 'redux-framework',
			'required' => true,
		),	
    	array(
			'name'     => esc_html__( 'Elementor', 'technivo' ),
			'slug'     => 'elementor',
			'required' => true,
		),
		array(
			'name'      => esc_html__( 'Contact Form 7', 'technivo' ),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Customizer Export/Import', 'technivo' ),
			'slug'      => 'customizer-export-import',			
			'required'  => false			
		),
		array(
			'name'      => esc_html__( 'One Click Demo Import', 'technivo' ),
			'slug'      => 'one-click-demo-import',			
			'required'  => false			
		),
		array(
			'name'      => esc_html__( 'Woocommerce', 'technivo' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Woocommerce Grid List Toggle', 'technivo' ),
			'slug'      => 'woocommerce-grid-list-toggle',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Woosidebars', 'technivo' ),
			'slug'      => 'woosidebars',
			'required'  => false,
		),	
		array(
			'name'      => esc_html__( 'MetaSlider', 'technivo' ),
			'slug'      => 'ml-slider',
			'required'  => false,
		),	
		array(
			'name'      => esc_html__('Yith Woocommerce Quick View','technivo'),
			'slug'      => 'yith-woocommerce-quick-view',
			'required'  => false,
		),		
		array(
			'name'      => esc_html__( 'Products Compare for WooCommerce', 'technivo' ),
			'slug'      => 'products-compare-for-woocommerce',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Widget Importer & Exporter', 'technivo' ),
			'slug'      => 'widget-importer-exporter',
			'required'  => true,
		),
		array(
			'name'      => esc_html__( 'WordPress Importer', 'technivo' ),
			'slug'      => 'wordpress-importer',
			'required'  => true,
		),
		array(
			'name'      => esc_html__( 'Woo Multi Currency', 'cabana3' ),
			'slug'      => 'woo-multi-currency',
			'required'  => true,
		),
		array(
			'name'      => esc_html__( 'email subscription popup', 'technivo' ),
			'slug'      => 'email-subscribe',	
			'required'  => false	
		),
	);
	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'technivo',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'wntr-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);
	tgmpa( $plugins, $config );
}?>