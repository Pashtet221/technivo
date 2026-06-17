<?php
/**
 * @author  Webibazaar
 * @since   1.0
 * @version 1.0
 */

$opt_name = 'webi';

Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Header', 'technivo' ),
        'id'      => 'nwtr_header_section',
        'heading' => '',
        'icon'    => 'el el-flag',
        'fields'  => array(
            array(
                'id'       => 'wntr_header_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Header Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_sticky_header',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sticky Header', 'technivo' ),
                'on'       => esc_html__( 'Yes', 'technivo' ),
                'off'      => esc_html__( 'No', 'technivo' ),
                // 'default'  => true,
                'subtitle' => esc_html__( 'Show header at the top when scrolling down', 'technivo' ),
            ),
            array(
                'id'               => 'wntr_header_grid',
                'type'             => 'select',
                'title'            => esc_html__('Header Area Width', 'technivo'),                  
                'options'          => array(                                     
                    'container'            => esc_html__('Container', 'technivo'),
                    'container-fluid'      => esc_html__('Container Fluid', 'technivo'),
                ),
                'default'          => 'container',            
            ),
           
            array(
                'id'       => 'wntr_navbar_category_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Header Category Title', 'technivo' ),                
                'default'  => 'All Categories',
                'subtitle' => esc_html__( 'Set Your Header Category Title', 'technivo' ),         
            ),


            array(
                'id'       => 'wntr_header_background_upload',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Header Background Image', 'technivo' ),
                'default'  => '',
                'subtitle' => esc_html__( 'Upload Your Header Background Image', 'technivo' ),
            ),
            array(
                'id'       => 'wntr_header_back_repeat',
                'type'     => 'select',
                'title'    => esc_html__( 'Header Image Background Repeat', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Header Image Background repeat', 'technivo' ),
                'options'  => array(
                    'no-repeat' => esc_html__( 'no-repeat', 'technivo' ),
                    'repeat' => esc_html__( 'repeat', 'technivo' ),
                    'repeat-x' => esc_html__( 'repeat-x', 'technivo' ),
                    'repeat-y' => esc_html__( 'repeat-y', 'technivo' ),
                ),
                'default'  => 'repeat',
            ),
            array(
                'id'       => 'wntr_header_back_position',
                'type'     => 'select',
                'title'    => esc_html__( 'Header Image Background Position', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Header Image Backgroung position', 'technivo' ),
                'options'  => array(
                    'top+left' => esc_html__( 'top left', 'technivo' ),
                    'top+center' => esc_html__( 'top center', 'technivo' ),
                    'top+right' => esc_html__( 'top right', 'technivo' ),
                    'center+right' => esc_html__( 'center right', 'technivo' ),
                    'center+left' => esc_html__( 'center left', 'technivo' ),
                    'center+center' => esc_html__( 'center center', 'technivo' ),
                    'bottom+right' => esc_html__( 'bottom right', 'technivo' ),
                    'bottom+center' => esc_html__( 'bottom center', 'technivo' ),
                    'bottom+left' => esc_html__( 'bottom left', 'technivo' ),
                ),
                'default'  => 'top+left',
            ),
            array(
                'id'       => 'wntr_header_back_attachment',
                'type'     => 'select',
                'title'    => esc_html__( 'Header Image Background Attachment', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Header Image Background attachment', 'technivo' ),
                'options'  => array(
                    'scroll' => esc_html__( 'Scroll', 'technivo' ),
                    'fixed' => esc_html__( 'Fixed', 'technivo' ),
                ),
                'default'  => 'fixed',
            ),
            array(
                'id'       => 'wntr_header_bottom_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Header Bottom Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_show_headerbottom_text',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Show Header Bottom Text?', 'technivo'), 
                'subtitle' => esc_html__( 'Displays Header bottom Text', 'technivo' ),
                'options'  => array(
                    'no' => esc_html__( 'No', 'technivo' ),
                    'yes' => esc_html__( 'Yes', 'technivo' ),
                ),
                'default'  => 'yes',
            ),
            array(
                'id'       => 'wntr_headerbottom_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Header Bottom Text', 'technivo' ),                
                'default'  => 'Top Salling Products',
                'subtitle' => esc_html__( 'Set Your Header Bottom Text', 'technivo' ),
                'required' => array( 'wntr_show_headerbottom_text', 'equals', 'yes' ),          
            ),
            array(
                'id'       => 'wntr_headerbottom_sec_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Header Bottom sec Text', 'technivo' ),                
                'default'  => 'Shop Best Offers',
                'subtitle' => esc_html__( 'Set Your Offers', 'technivo' ),
                'required' => array( 'wntr_show_headerbottom_text', 'equals', 'yes' ),          
            ),
            array(
                'id'       => 'wntr_topbar_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Topbar Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_show_topbanner',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Show Topbar?', 'technivo'), 
                'subtitle' => esc_html__( 'Displays Topbar', 'technivo' ),
                'options'  => array(
                    'no' => esc_html__( 'No', 'technivo' ),
                    'yes' => esc_html__( 'Yes', 'technivo' ),
                ),
                'default'  => 'yes',
            ),
            array(
                'id'       => 'wntr_show_topbanner_text',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Show Topbar Text?', 'technivo'), 
                'subtitle' => esc_html__( 'Displays Topbar Text', 'technivo' ),
                'options'  => array(
                    'no' => esc_html__( 'No', 'technivo' ),
                    'yes' => esc_html__( 'Yes', 'technivo' ),
                ),
                'default'  => 'yes',
                'required' => array( 'wntr_show_topbanner', 'equals', 'yes' ),
            ),
            array(
                'id'       => 'wntr_top_cms_banner_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Topbar Text', 'technivo' ),                
                'default'  => 'Get 30% Off On Selected Items',
                'subtitle' => esc_html__( 'Upload Your Topbar Banner Text', 'technivo' ),
                'required' => array( 'wntr_show_topbanner_text', 'equals', 'yes' ),          
            ),
            array(
                'id'       => 'wntr_top_cms_banner_text_link',
                'type'     => 'text',
                'title'    => esc_html__( 'Topbar Middle Text', 'technivo' ),                
                'default'  => '',
                'subtitle' => esc_html__( 'Upload Your Topbar Middle Banner Text', 'technivo' ),
                'required' => array( 'wntr_show_topbanner_text', 'equals', 'yes' ),          
            ),
            array(
                'id'       => 'wntr_Offer',
                'type'     => 'text',
                'title'    => esc_html__( 'Offers', 'technivo' ),                
                'default'  => 'On Offer Products',
                'subtitle' => esc_html__( 'Set Your Offers', 'technivo' ),
                'required' => array( 'wntr_show_topbanner_text', 'equals', 'yes' ),             
            ),
            array(
                'id'       => 'wntr_contact_phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Simple text', 'technivo' ),                
                'default'  => '',
                'subtitle' => esc_html__( 'Set Your text', 'technivo' ),
                'required' => array( 'wntr_show_topbanner_text', 'equals', 'yes' ),             
            ),
        )
    ) 
);