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
		'title'            => esc_html__( 'Контакты', 'your-textdomain-here' ),
		'id'               => 'contacts',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'time-york',
				'type'     => 'text',
				'title'    => esc_html__( 'Время работы', 'your-textdomain-here' ),
				'default'  => 'c 9-00 до 21-00',
			),
            array(
				'id'       => 'time-york-desc',
				'type'     => 'text',
				'title'    => esc_html__( 'Время работы уточнение', 'your-textdomain-here' ),
				'default'  => '(ежедневно)',
			),
            array(
				'id'       => 'adres',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
				'default'  => 'Санкт-Петербург, Тихорецкий проспект, дом 6, корпус 2.',
			),
            array(
				'id'       => 'adres-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Адрес уточнение', 'your-textdomain-here' ),
				'default'  => 'Станция метро «Политехническая» - 5 минут пешком.',
			),
            array(
				'id'       => 'phone',
				'type'     => 'text',
				'title'    => esc_html__( 'Телефон', 'your-textdomain-here' ),
				'default'  => '+7 (812) 327-10-10',
			),
            array(
				'id'       => 'email',
				'type'     => 'text',
				'title'    => esc_html__( 'Почта', 'your-textdomain-here' ),
				'default'  => 'info@forsazh-spb.ru',
			),
            array(
				'id'       => 'tg',
				'type'     => 'text',
				'title'    => esc_html__( 'Телеграм', 'your-textdomain-here' ),
				'default'  => '#',
			),
            array(
				'id'       => 'sk',
				'type'     => 'text',
				'title'    => esc_html__( 'Скайп', 'your-textdomain-here' ),
				'default'  => '#',
			),
            array(
				'id'       => 'vb',
				'type'     => 'text',
				'title'    => esc_html__( 'Вайбер', 'your-textdomain-here' ),
				'default'  => '#',
			),
            array(
				'id'       => 'vk',
				'type'     => 'text',
				'title'    => esc_html__( 'ВКонтакте', 'your-textdomain-here' ),
				'default'  => '#',
			),
            array(
				'id'       => 'wh',
				'type'     => 'text',
				'title'    => esc_html__( 'Вотсапп', 'your-textdomain-here' ),
				'default'  => '#',
			),
            array(
				'id'       => 'map',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Карта', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
        )
    );