<?php
/**
 * Redux Framework typography config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'  => esc_html__( 'Шрифт', 'your-textdomain-here' ),
		'id'     => 'fonts',
		'icon'   => 'el el-font',
		'fields' => array(
            array(
				'id'                => 'fonts-body',
				'type'              => 'typography',
				'title'             => esc_html__( 'Шрифт', 'your-textdomain-here' ),
				'google'            => true,
				'font_family_clear' => false,
				'default'           => array(
					'color'       => '#555555',
					'font-size'   => '16px',
					'font-family' => 'Roboto',
					'font-weight' => 'Normal',
				),
				'output'            => array( 'body' ),
			),
        ),
        )
    );