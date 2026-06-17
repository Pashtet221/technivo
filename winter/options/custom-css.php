<?php
/**
 * @author  Webibazaar
 * @since   1.0
 * @version 1.0
 */

$opt_name = 'webi';

Redux::setSection( $opt_name, array(
    'title'     => esc_html__('Custom CSS/JS', 'technivo'),
    'icon'      => 'el el-icon-bookmark',
    'icon_class' => 'el-icon-large',
    'fields'    => array(
        array(
            'id'        => 'custom-css',
            'type'      => 'ace_editor',
            'mode'      => 'css',
            'title'     => esc_html__('Custom CSS', 'technivo'),
            'subtitle' => esc_html__('you can add here your custom css code', 'technivo'),
            'default'   => '',
        ),  
        array(
            'id'        => 'custom-js',
            'type'      => 'ace_editor',
            'mode'      => 'js',
            'title'     => esc_html__('Custom Js', 'technivo'),
            'subtitle' => esc_html__('you can add here your custom js code', 'technivo'),
            'default'   => '',
        ),                                                                         

    ) 
 ) 
);   