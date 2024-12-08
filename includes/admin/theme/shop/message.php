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
        'title'      => esc_html__( 'Уведомления', 'your-textdomain-here' ),
        'id'         => 'message',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'message-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Уведомления Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => false,
            ),
        ),
    )
);