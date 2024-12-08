<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Картинки карточки товара', 'your-textdomain-here' ),
        'id'         => 'single-img',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'single-img-width',
                'type'     => 'text',
                'title'    => esc_html__( 'Ширина', 'your-textdomain-here' ),
                'default'  => '200',
            ),
            array(
                'id'       => 'single-img-height',
                'type'     => 'text',
                'title'    => esc_html__( 'Высота', 'your-textdomain-here' ),
                'default'  => '200',
            ),
            array(
                'id'       => 'single-img-width-sm',
                'type'     => 'text',
                'title'    => esc_html__( 'Ширина миниатюры', 'your-textdomain-here' ),
                'default'  => '90',
            ),
            array(
                'id'       => 'single-img-height-sm',
                'type'     => 'text',
                'title'    => esc_html__( 'Высота миниатюры', 'your-textdomain-here' ),
                'default'  => '90',
            ),
        ),
        )
    );