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
		'title'            => esc_html__( 'Товары со скидкой', 'your-textdomain-here' ),
		'id'               => 'sale-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'sale-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Товары со скидкой', 'your-textdomain-here' ),
				'default'  => 'Товары со скидкой',
			),
            array(
				'id'       => 'sale-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
)
);