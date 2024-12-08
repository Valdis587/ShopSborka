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
		'title'            => esc_html__( 'О нас', 'your-textdomain-here' ),
		'id'               => 'onas',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'onas-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'О нас', 'your-textdomain-here' ),
				'default'  => '',
			),
            array(
				'id'       => 'onas-img',
				'type'     => 'media',
				'title'    => esc_html__( 'О нас картинка', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );