<?php
/**
 * @author  Webibazaar
 * @since   1.0
 * @version 1.0
 */

$opt_name = 'webi';

Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Typography', 'technivo' ),
        'id'      => 'wntr_typo_section',
        'heading' => '',
        'icon'    => 'el el-text-width',
        'fields'  => array(
            array(
                'id'       => 'wntr_typography_settings',
                'type'     => 'section',
                'title'    => esc_html__( 'Typography', 'technivo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'wntr_bodyfont',
                'type'     => 'typography',
                'title'    => esc_html__( 'Body', 'technivo' ),
                'text-align'  => false,
                'font-weight' => false,
                'color'   => false,
                'subsets'  => false,
                'default' => array(
                    'google'      => true,
                    'font-family' => 'Fira Sans',
                    'font-weight' => '',
                    'font-size'   => '',
                    'line-height' => '',
                ),
             ),
        )
    )
);