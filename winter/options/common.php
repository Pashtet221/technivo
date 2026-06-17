<?php
/**
 * @author  technivoTheme
 * @since   1.0
 * @version 1.0
 */

$opt_name = 'webi';

Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Common', 'technivo' ),
        'id'      => 'wntr_common_section',
        'heading' => '',
        'icon'    => 'el el-cog',
        'fields'  => array(
            array(
                'id'       => 'wntr_common_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Common Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_container_size',
                'type'     => 'text',
                'title'    => esc_html__( 'Container Size', 'technivo' ),             
                'subtitle' => esc_html__( 'Container Size example(100%)', 'technivo' ),
                'default'  => '1400px'              
            ),
            array(
                'id'       => 'wntr_logo_image',
                'type'     => 'media',
                'title'    => esc_html__( 'Logo Image', 'technivo' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/webi/logo.svg'
                ),
                'subtitle' => esc_html__( 'Upload your Logo', 'technivo' ),
            ),
            array(
                'id'       => 'wntr_logo_image_alt',
                'type'     => 'text',
                'title'    => esc_html__( 'Logo Text', 'technivo' ),  
                'transparent' => false,              
                'default'  => 'technivo',
                'subtitle' => esc_html__( 'Set your logo text here', 'technivo' ),              
            ),
            array(
                'id'       => 'wntr_mob_logo_image',
                'type'     => 'media',
                'title'    => esc_html__( 'Mobile Logo Image', 'technivo' ),
                'transparent' => false,
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/webi/mob-logo.svg'
                ),
                'subtitle' => esc_html__( 'Upload Your Mobile Logo', 'technivo' ),
            ),
            array(
                'id'       => 'wntr_mob_logo_image_alt',
                'type'     => 'text',
                'title'    => esc_html__( 'Mobile Logo Text', 'technivo' ),                
                'default'  => 'technivo',
                'subtitle' => esc_html__( 'Set your Mobile logo text here', 'technivo' ),              
            ),
            array(
                'id'       => 'wntr_fav_site_icon',
                'type'     => 'media',
                'title'    => esc_html__( 'Favicon Icon', 'technivo' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/webi/favicon.png'
                ),
                'subtitle' => esc_html__( 'Define favicon icon path here', 'technivo' ),
            ),
            array(
                'id'       => 'wntr_showsite_description',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Show Site Description?', 'technivo'), 
                'subtitle' => esc_html__( 'Display Site Description or Not', 'technivo' ),
                'options'  => array(
                    'no' => esc_html__( 'No', 'technivo' ),
                    'yes' => esc_html__( 'Yes', 'technivo' ),
                ),
                'default'  => 'no',
            ),
            array(
                'id'       => 'wntr_background_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Background Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_background_image',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Background Image Setting', 'technivo'), 
                'subtitle' => esc_html__( 'Choose your body background', 'technivo' ),
                'options'  => array(
                    'predefined' => esc_html__( 'Predefined', 'technivo' ),
                    'custom' => esc_html__( 'Custom', 'technivo' ),
                ),
                'default'  => 'predefined',
            ),
            array(
                'id'       => 'wntr_texture',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Predefined Background Image', 'technivo' ),
                'default'  => 'body-bg.png',
                'options' => array(
                    'body-bg.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg0.png',
                    ),
                    'body-bg1.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg1.png',
                    ),
                    'body-bg2.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg2.png',
                    ),
                    'body-bg3.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg3.png',
                    ),
                    'body-bg4.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg4.png',
                    ),
                    'body-bg5.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg5.png',
                    ),
                    'body-bg6.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg6.png',
                    ),
                    'body-bg7.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg7.png',
                    ),
                    'body-bg8.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg8.png',
                    ),
                    'body-bg9.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg9.png',
                    ),
                    'body-bg10.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg10.png',
                    ),
                    'body-bg11.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg11.png',
                    ),
                    'body-bg12.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg12.png',
                    ),
                    'body-bg13.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg13.png',
                    ),
                    'body-bg14.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg14.png',
                    ),
                    'body-bg15.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg15.png',
                    ),
                    'body-bg16.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg16.png',
                    ),
                    'body-bg17.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg17.png',
                    ),
                    'body-bg18.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg18.png',
                    ),
                    'body-bg19.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg19.png',
                    ),
                    'body-bg20.png' => array(
                        'img'   => get_template_directory_uri() . '/images/webi/colorpicker/pattern/wntr-bg20.png',
                    ),
                ),
                'required' => array( 'wntr_background_image', 'equals', 'predefined' ),
            ),
            array(
                'id'       => 'wntr_background_upload',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Background Image', 'technivo' ),
                'default'  => '',
                'subtitle' => esc_html__( 'Upload Your Background', 'technivo' ),
                'required' => array( 'wntr_background_image', 'equals', 'custom' ),
            ),
            array(
                'id'       => 'wntr_back_repeat',
                'type'     => 'select',
                'title'    => esc_html__( 'Background Repeat', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Background repeat', 'technivo' ),
                'options'  => array(
                    'no-repeat' => esc_html__( 'no-repeat', 'technivo' ),
                    'repeat' => esc_html__( 'repeat', 'technivo' ),
                    'repeat-x' => esc_html__( 'repeat-x', 'technivo' ),
                    'repeat-y' => esc_html__( 'repeat-y', 'technivo' ),
                ),
                'default'  => 'repeat',
                'required' => array( 'wntr_background_image', 'equals', 'custom' ),
            ),
            array(
                'id'       => 'wntr_back_position',
                'type'     => 'select',
                'title'    => esc_html__( 'Background Position', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Backgroung position', 'technivo' ),
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
                'required' => array( 'wntr_background_image', 'equals', 'custom' ),
            ),
            array(
                'id'       => 'wntr_back_attachment',
                'type'     => 'select',
                'title'    => esc_html__( 'Background Attachment', 'technivo'), 
                'subtitle' => esc_html__( 'Choose Background attachment', 'technivo' ),
                'options'  => array(
                    'scroll' => esc_html__( 'Scroll', 'technivo' ),
                    'fixed' => esc_html__( 'Fixed', 'technivo' ),
                ),
                'default'  => 'fixed',
                'required' => array( 'wntr_background_image', 'equals', 'custom' ),
            ),
        )         
    ) 
);