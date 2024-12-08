<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Избранные товары', 'your-textdomain-here' ),
		'id'               => 'feutered-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'feutered-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Избранные товары', 'your-textdomain-here' ),
				'default'  => 'Избранные товары',
			),
            array(
				'id'       => 'feutered-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
)
);