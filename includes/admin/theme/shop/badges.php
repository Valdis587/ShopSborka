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
        'title'      => esc_html__( 'Бэйджики', 'your-textdomain-here' ),
        'id'         => 'badges',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'badges-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Бэйжики Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'badges-new',
                'type'     => 'text',
                'title'    => esc_html__( 'Бэйжик Новый товар', 'your-textdomain-here' ),
                'default'  => 'Новый',
            ),
            array(
                'id'       => 'badges-hit',
                'type'     => 'text',
                'title'    => esc_html__( 'Бэйжик Хит', 'your-textdomain-here' ),
                'default'  => 'Хит',
            ),
        ),
        )
    );