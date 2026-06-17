<?php
/**
 * @author  Webibazaar
 * @since   1.0
 * @version 1.0
 */

$opt_name = 'webi';

Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Footer', 'technivo' ),
        'id'      => 'wntr_footer_section',
        'heading' => '',
        'icon'    => 'el el-caret-down',
        'fields'  => array(
            array(
                'id'       => 'wntr_footer_top_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Footer Top Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_footer_top_background_upload',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Footer Background Image', 'technivo' ),
                'default'  => '',
                'subtitle' => esc_html__( 'Upload Your Footer Background Image', 'technivo' ),
            ),
            array(
                'id'       => 'wntr_footer_top_back_repeat',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Repeat', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Background repeat', 'technivo' ),
                'options'  => array(
                    'no-repeat' => esc_html__( 'no-repeat', 'technivo' ),
                    'repeat' => esc_html__( 'repeat', 'technivo' ),
                    'repeat-x' => esc_html__( 'repeat-x', 'technivo' ),
                    'repeat-y' => esc_html__( 'repeat-y', 'technivo' ),
                ),
                'default'  => 'repeat',
            ),
            array(
                'id'       => 'wntr_footer_top_back_position',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Position', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Backgroung position', 'technivo' ),
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
                'id'       => 'wntr_footer_top_back_attachment',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Attachment', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Background attachment', 'technivo' ),
                'options'  => array(
                    'scroll' => esc_html__( 'Scroll', 'technivo' ),
                    'fixed' => esc_html__( 'Fixed', 'technivo' ),
                ),
                'default'  => 'fixed',
            ),
            array(
                'id'       => 'wntr_footer_middle_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Footer Middle Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_footer_middle_background_upload',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Footer Background Image', 'technivo' ),
                'subtitle' => esc_html__( 'Upload Your Footer Background Image', 'technivo' ),
            ),
            array(
                'id'       => 'wntr_footer_middle_back_repeat',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Repeat', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Background repeat', 'technivo' ),
                'options'  => array(
                    'no-repeat' => esc_html__( 'no-repeat', 'technivo' ),
                    'repeat' => esc_html__( 'repeat', 'technivo' ),
                    'repeat-x' => esc_html__( 'repeat-x', 'technivo' ),
                    'repeat-y' => esc_html__( 'repeat-y', 'technivo' ),
                ),
                'default'  => 'repeat',
            ),
            array(
                'id'       => 'wntr_footer_middle_back_position',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Position', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Backgroung position', 'technivo' ),
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
                'default'  => 'center+center',
            ),
            array(
                'id'       => 'wntr_footer_middle_back_attachment',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Attachment', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Background attachment', 'technivo' ),
                'options'  => array(
                    'scroll' => esc_html__( 'Scroll', 'technivo' ),
                    'fixed' => esc_html__( 'Fixed', 'technivo' ),
                ),
                'default'  => 'fixed',
            ),
            array(
                'id'       => 'wntr_footer_bottom_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Footer Bottom Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_footer_bottom_background_upload',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Footer Background Image', 'technivo' ),
                'default'  => '',
                'subtitle' => esc_html__( 'Upload Your Footer Background Image', 'technivo' ),
            ),
            array(
                'id'       => 'wntr_footer_bottom_back_repeat',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Repeat', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Background repeat', 'technivo' ),
                'options'  => array(
                    'no-repeat' => esc_html__( 'no-repeat', 'technivo' ),
                    'repeat' => esc_html__( 'repeat', 'technivo' ),
                    'repeat-x' => esc_html__( 'repeat-x', 'technivo' ),
                    'repeat-y' => esc_html__( 'repeat-y', 'technivo' ),
                ),
                'default'  => 'repeat',
            ),
            array(
                'id'       => 'wntr_footer_bottom_back_position',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Position', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Backgroung position', 'technivo' ),
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
                'id'       => 'wntr_footer_bottom_back_attachment',
                'type'     => 'select',
                'title'    => esc_html__( 'Footer Image Background Attachment', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Footer Image Background attachment', 'technivo' ),
                'options'  => array(
                    'scroll' => esc_html__( 'Scroll', 'technivo' ),
                    'fixed' => esc_html__( 'Fixed', 'technivo' ),
                ),
                'default'  => 'fixed',
            ),
            array(
                'id'       => 'wntr_footer_bottom_bottom_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Footer Bottom Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_footer_slog',
                'type'     => 'text',
                'title'    => esc_html__( 'Footer copyright', 'technivo' ),                
                'default'  => 'Demo Theme',
                'subtitle' => esc_html__( 'Enter your copyright statement here', 'technivo' ),         
            ),
        )
    )
);