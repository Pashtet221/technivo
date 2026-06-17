<?php
/**
 * @author  Webibazaar
 * @since   1.0
 * @version 1.0
 */

$opt_name = 'webi';

Redux::setSection( $opt_name,
    array(
        'title' => esc_html__( 'Social Icon', 'technivo' ),
        'icon'  => 'el el-twitter',
        'title'   => esc_html__( 'Social Icon', 'technivo' ),
        'id'      => 'wntr_section_social_icon',
        'heading' => '',
        'fields'  => array(
            array(
                'id'       => 'wntr_social_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Social Icon', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_social_facebook',
                'type'     => 'text',
                'title'    => esc_html__( 'Facebook', 'technivo' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'wntr_social_twitter',
                'type'     => 'text',
                'title'    => esc_html__( 'Twitter', 'technivo' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'wntr_social_rss',
                'type'     => 'text',
                'title'    => esc_html__( 'RSS', 'technivo' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'wntr_social_pinterest',
                'type'     => 'text',
                'title'    => esc_html__( 'Pinterest', 'technivo' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'wntr_social_linkedin',
                'type'     => 'text',
                'title'    => esc_html__( 'Linkedin', 'technivo' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'wntr_social_instagram',
                'type'     => 'text',
                'title'    => esc_html__( 'Instagram', 'technivo' ),
                'default'  => '',
            ),
            array(
                'id'       => 'wntr_social_youtube',
                'type'     => 'text',
                'title'    => esc_html__( 'Youtube', 'technivo' ),
                'default'  => '',
            ),
            
            array(
                'id'       => 'wntr_social_tumblr',
                'type'     => 'text',
                'title'    => esc_html__( 'Tumblr', 'technivo' ),
                'default'  => '',
            ),
            array(
                'id'       => 'wntr_social_vimeo',
                'type'     => 'text',
                'title'    => esc_html__( 'Vimeo', 'technivo' ),
                'default'  => '',
            ),
            
        )
    )
);
