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
		'title'            => esc_html__( 'Логотипы', 'your-textdomain-here' ),
		'id'               => 'logo-home',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
                'id'       => 'logo-home-gallery',
                'type'     => 'gallery',
                'title'    => esc_html__( 'Добавить/редактировать галерею', 'your-textdomain-here' ),
            ),
        ),
        )
    );