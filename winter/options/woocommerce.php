<?php
/**
 * @author  Webibazaar
 * @since   1.0
 * @version 1.0
 */
$opt_name = 'webi';

Redux::setSection( $opt_name,
    array(
        'title' => esc_html__( 'Shop', 'technivo' ),
        'icon'  => 'el el-shopping-cart',
        'title'   => esc_html__( 'Shop', 'technivo' ),
        'id'      => 'wntr_section_shop',
        'heading' => '',
        'fields'  => array(
            array(
                'id'       => 'wntr_shop_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Shop Page', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_shop_banner',
                'type'     => 'media',
                'title'    => esc_html__( 'Shop Page Banner', 'technivo' ),
            ),
            array(
                'id'               => 'wntr_shop_page_layout',
                'type'             => 'image_select',
                'title'            => esc_html__('Select Shop Layout', 'technivo'), 
                'options'          => array(
                'full'             => array(
                'alt'              => 'Blog Style 1', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/3-No-side-bar.png',                                      
            ),
                '2right'           => array(
                'alt'              => 'Blog Style 2', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/2-Right-side-bar.png',
            ),
                '2left'            => array(
                'alt'              => 'Blog Style 3', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/1-Left-side-bar.png',
            ),                                  
            ),
                'default'          => '2left'
            ),
            array(
                'id'       => 'wntr_no_product_per_page',
                'type'     => 'text',
                'title'    => esc_html__( 'Number of Products Per Page', 'technivo' ),  
                'transparent' => false,              
                'default'  => 12,            
            ),
            array(
                'id'       => 'wntr_product_per_row_shop',
                'type'     => 'text',
                'title'    => esc_html__( 'Number of Products Per Row', 'technivo' ),  
                'transparent' => false,              
                'default'  => 4,            
            ),
            array(
                'id'       => 'wntr_show_cart_icon_menu',
                'type'     => 'switch',
                'title'    => esc_html__( 'Cart Icon Show at Menu Area', 'technivo' ),
                'on'       => esc_html__( 'Enabled', 'technivo' ),
                'off'      => esc_html__( 'Disabled', 'technivo' ),
            ),
            array(
                'id'       => 'wntr_sidebar_disable_single_page',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sidebar Disabled For Single Product Page', 'technivo' ),
                'options'          => array(                                     
                    'on'       => esc_html__( 'On', 'technivo' ),
                    'off'      => esc_html__( 'Off', 'technivo' ),
                ),
                'default'  => 'off',
            ),
        )
    )
);
