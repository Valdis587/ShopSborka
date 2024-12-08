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
		'title'            => esc_html__( 'Хиты продаж', 'your-textdomain-here' ),
		'id'               => 'hit-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'hit-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Хиты продаж', 'your-textdomain-here' ),
				'default'  => 'Хиты продаж',
			),
            array(
				'id'       => 'hit-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
)
);