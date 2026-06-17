<?php
/**
 * @author  Webibazaar
 * @since   1.0
 * @version 1.0
 */

$opt_name = 'webi';

Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Colors', 'technivo' ),
        'id'      => 'wntr_color_section',
        'heading' => '',
        'icon'    => 'el el-eye-open',
        'fields'  => array(
           
            array(
                'id'       => 'wntr_section_color_body',
                'type'     => 'section',
                'title'    => esc_html__( 'Body Colors', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_bkg_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Body Background Color', 'technivo' ),
                'default'  => '#ffffff',
            ),
            array(
                'id'       => 'wntr_hoverlink_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Body Main Color', 'technivo' ),
                'default'  => '#0070DC',
            ),
            array(
                'id'       => 'wntr_section_color_button',
                'type'     => 'section',
                'title'    => esc_html__( 'Button Colors', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_button_text_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Buttons Text Color', 'technivo' ),
                'default'  => '#ffffff',
            ),
            array(
                'id'       => 'wntr_button_hover_text_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Buttons hover Text Color', 'technivo' ),
                'default'  => '#ffffff',
            ),
            array(
                'id'       => 'wntr_button_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Buttons Background Color', 'technivo' ),
                'default'  => '#0070DC',
            ),
            array(
                'id'       => 'wntr_button_hover_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Buttons Background Hover Color', 'technivo' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'wntr_button_border_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Buttons Border Color', 'technivo' ),
                'default'  => '#0070DC',
            ),
            array(
                'id'       => 'wntr_button_hover_border_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Buttons Hover Border Color', 'technivo' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'wntr_section_color_header',
                'type'     => 'section',
                'title'    => esc_html__( 'Header Colors', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_header_bkg_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Header Background Color', 'technivo' ),
                'default'  => '#ffffff',
            ),
            
            array(
                'id'       => 'wntr_top_menu_text_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Navigation and Top Menu text color', 'technivo' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'wntr_top_menu_texthover_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Navigation and Top Menu text hover color', 'technivo' ),
                'default'  => '#0070DC',
            ),
            array(
                'id'       => 'wntr_sub_menu_link_text_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Navigation and Top Sub Menu Links text color', 'technivo' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'wntr_sub_menu_link_text_hover_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Navigation and Top Sub Menu Links text hover color', 'technivo' ),
                'default'  => '#0070DC',
            ),
           
            array(
                'id'       => 'wntr_section_color_topbar',
                'type'     => 'section',
                'title'    => esc_html__( 'Topbar Colors', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_topbar_text_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Topbar Text Color', 'technivo' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'wntr_topbar_link_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Topbar Link Color', 'technivo' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'wntr_topbar_hover_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Topbar Link Hover Color', 'technivo' ),
                'default'  => '#0070DC',
            ),
            array(
                'id'       => 'wntr_topbar_bkg_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Topbar background color', 'technivo' ),
                'default'  => '#ffffff',
            ),
            
            array(
                'id'       => 'wntr_section_color_footer',
                'type'     => 'section',
                'title'    => esc_html__( 'Footer Colors', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_footer_bkg_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Footer Background Color', 'technivo' ),
                'default'  => '#F5F5F5',
            ),
            array(
                'id'       => 'wntr_footer_title_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Footer Title Color', 'technivo' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'wntr_footerlink_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Footer Link Color', 'technivo' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'wntr_section_color_top_footer',
                'type'     => 'section',
                'title'    => esc_html__( 'Top Footer Colors', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_footer_top_bkg_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Footer Top Background Color', 'technivo' ),
                'default'  => '#F5F5F5',
            ),
            array(
                'id'       => 'wntr_section_color_bottom_footer',
                'type'     => 'section',
                'title'    => esc_html__( 'Bottom Footer Colors', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_footer_bottom_bkg_color',
                'type'     => 'color',
                'transparent' => false,
                'title'    => esc_html__( 'Footer Bottom Background Color', 'technivo' ),
                'default'  => '#ffffff',
            ),
        )
    )
);