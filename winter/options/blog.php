<?php
/**
 * @author  Webibazaar
 * @since   1.0
 * @version 1.0
 */

$opt_name = 'webi';

Redux::setSection( $opt_name,
    array(
        'title' => esc_html__( 'Blog', 'technivo' ),
        'id'    => 'wntr_blog',
        'icon'  => 'el el-tags',
    )
);
Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Blog Settings', 'technivo' ),
        'id'      => 'wntr_blog_settings',
        'subsection' => true,
        'heading' => '',
        'fields'  => array(
            array(
                'id'       => 'wntr_blog_section_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Blog Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_blog_page_banner',
                'type'     => 'media',
                'title'    => esc_html__( 'Blog Page Banner', 'technivo' ),
                'default'  => '',
            ), 
            array(
                'id'       => 'wntr_background_color',
                'type'     => 'color',
                'transparent' => true,
                'title'    => esc_html__( 'Body Background Color', 'technivo' ),
                'default'  => '#ffffff',
                'subtitle' => esc_html__( 'Pick body background color', 'technivo' ),              
            ),
            array(
                'id'       => 'wntr_blog_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Blog Title', 'technivo' ),  
                'transparent' => false,              
                'subtitle' => esc_html__( 'Enter Blog Title here', 'technivo' ), 
                'default'  => esc_html__( 'All Blog', 'technivo' ),             
            ),
            array(
                'id'               => 'wntr_blog_style',
                'type'             => 'image_select',
                'title'            => esc_html__('Select Blog Layout', 'technivo'), 
                'subtitle'         => esc_html__('Select your blog layout', 'technivo'),
                'options'          => array(
                'full'             => array(
                'alt'              => 'Blog Style 1', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/1-Main-Only.png',                                      
            ),
                '2right'           => array(
                'alt'              => 'Blog Style 2', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/3-Right-Main-Sidebar.png'
            ),
                '2left'            => array(
                'alt'              => 'Blog Style 3', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/2-Left-Main-Sidebar.png',
            ),                                  
            ),
                'default'          => '2right'
            ),
            array(
                'id'       => 'wntr_blog_grid',
                'type'     => 'select',
                'title'    => esc_html__('Select Blog Gird', 'technivo'),                   
                'desc'     => esc_html__('Select your blog gird layout', 'technivo'),
                'options'      => array(
                    '12'       => esc_html__('1 Column','technivo'),                                   
                    '6'        => esc_html__('2 Column', 'technivo'),                                         
                    '4'        => esc_html__('3 Column', 'technivo'),
                    '3'        => esc_html__('4 Column', 'technivo'),
                ),  
                'default'          => '6'                             
            ),  
            array(
                'id'               => 'wntr-blog-author-post',
                'type'             => 'select',
                'title'            => esc_html__('Show Author Info ', 'technivo'),                   
                'desc'             => esc_html__('Select author info show or hide', 'technivo'),
                'options'          => array(                                            
                'show'             => esc_html__('Show','technivo'), 
                'hide'             => esc_html__('Hide', 'technivo'),
                ),
                'default'          => 'show',
                
                ),
                array(
                    'id'               => 'wntr-blog-category',
                    'type'             => 'select',
                    'title'            => esc_html__('Show Category', 'technivo'),                   
                    'options'          => array(                                            
                    'show'             => esc_html__('Show','technivo'), 
                    'hide'             => esc_html__('Hide', 'technivo'),
                    ),
                    'default'          => 'show',
                    ),  
                    array(
                        'id'               => 'wntr-show-date',
                        'type'             => 'switch',
                        'title'            => esc_html__('Show Date', 'technivo'),                   
                        'desc'             => esc_html__('You can show/hide date at blog page', 'technivo'),
                        'default'          => true,
                    ), 
            array(
                'id'       => 'wntr_blog_readmore_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Blog ReadMore Text', 'technivo' ),
                'default'  => 'Read More',  
                'subtitle' => esc_html__( 'Enter Blog ReadMore here', 'technivo' ),
            ),
        )
    ) 
);

Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Single Blog Settings', 'technivo' ),
        'id'      => 'wntr_single_blog_settings',
        'subsection' => true,
        'heading' => '',
        'fields'  => array(
            array(
                'id'       => 'wntr_single_blog_section_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Single Blog Settings', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'               => 'wntr_blog_single_layout',
                'type'             => 'image_select',
                'title'            => esc_html__('Blog Single Layout', 'technivo'), 
                'options'          => array(
                'full'             => array(
                'alt'              => 'Blog Style 1', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/1-Main-Only.png',                                      
            ),
                '2right'           => array(
                'alt'              => 'Blog Style 2', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/3-Right-Main-Sidebar.png',
            ),
                '2left'            => array(
                'alt'              => 'Blog Style 3', 
                'img'              => get_template_directory_uri().'/images/webi/colorpicker/pattern/2-Left-Main-Sidebar.png',
            ),                                  
            ),
                'default'          => '2right'
            ),            
        )
    ) 
);