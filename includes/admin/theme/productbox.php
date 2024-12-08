<?php
/**
 * Redux Framework typography config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'product-img-theme',
        'title'      => esc_html__( 'Картинка', 'shopstart' ),
        'post_types' => array( 'product' ),
        'position'   => 'side', // normal, advanced, side.
        'priority'   => 'high', // high, core, default, low.
        'sections'   => array(
            array(
                'title'      => __( 'Картинка', 'shopstart' ),
                'id'     => 'product-img-loop',
                'fields'     => array(
                    array(
                        'id'       => 'media-product-on',
                        'type'     => 'switch',
                        'title'    => esc_html__( 'Картинка Вкл/Выкл', 'your-textdomain-here' ),
                        'default'  => false,
                    ),
                    array(
                        'id'       => 'media-product-dop',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Картинка', 'shopstart' ),
                        'url'      => false,
                        'preview'  => true,
                    ),
        ),
    
            ),
        ),
    ),
    );

    Redux_Metaboxes::set_box(
        $opt_name,
        array(
            'id'         => 'badgik',
            'title'      => esc_html__( 'Бэйджики', 'shopstart' ),
            'post_types' => array( 'product' ),
            'position'   => 'normal', // normal, advanced, side.
            'priority'   => 'high', // high, core, default, low.
            'sections'   => array(
                array(
                    'title'  => esc_html__( 'Бэйджики', 'shopstart' ),
                    'id'     => 'badgik-title',
                    'icon'   => 'el-icon-cogs',
                    'fields' => array(
                        array(
                            'id'       => 'badgik-new',
                            'type'     => 'checkbox',
                            'title'    => esc_html__( 'Бэйджик Новый товар', 'your-textdomain-here' ),
                            'default'  => false,
                        ),
                        array(
                            'id'       => 'badgik-hit',
                            'type'     => 'checkbox',
                            'title'    => esc_html__( 'Бэйджик Хит продаж', 'your-textdomain-here' ),
                            'default'  => false,
                        ),
                    ),
                ),
            ),
        )
    );

    Redux_Metaboxes::set_box(
        $opt_name,
        array(
            'id'         => 'count',
            'title'      => esc_html__( 'Акции', 'your-textdomain-here' ),
            'post_types' => array( 'product' ),
            'position'   => 'normal', // normal, advanced, side.
            'priority'   => 'default', // high, default, default, low.
            'sections'   => array(
                array(
                    'title'  => esc_html__( 'Дата окончания акции', 'your-textdomain-here' ),
                    'id'     => 'count-title',
                    'icon'   => 'el-icon-cogs',
                    'fields' => array(
                        array(
                            'id'       => 'count-year',
                            'type'     => 'text',
                            'title'    => esc_html__( 'Год', 'your-textdomain-here' ),
                            'placeholder'  => '2023',
                        ),
                        array(
                            'id'       => 'count-mons',
                            'type'     => 'text',
                            'title'    => esc_html__( 'Месяц', 'your-textdomain-here' ),
                            'placeholder'  => '4',
                        ),
                        array(
                            'id'       => 'count-day',
                            'type'     => 'text',
                            'title'    => esc_html__( 'День', 'your-textdomain-here' ),
                            'placeholder'  => '10',
                        ),
                    ),
                ),
            ),
        )
    );

    Redux_Metaboxes::set_box(
        $opt_name,
        array(
            'id'         => 'you-tube',
            'title'      => esc_html__( 'You Tube', 'your-textdomain-here' ),
            'post_types' => array( 'product' ),
            'position'   => 'normal', // normal, advanced, side.
            'priority'   => 'default', // high, default, default, low.
            'sections'   => array(
                array(
                    'title'  => esc_html__( 'You Tube ссылка', 'your-textdomain-here' ),
                    'id'     => 'you-tube-title',
                    'icon'   => 'el-icon-cogs',
                    'fields' => array(
                        array(
                            'id'       => 'you-tube-link',
                            'type'     => 'text',
                            'title'    => esc_html__( 'You Tube ссылка', 'your-textdomain-here' ),
                            'placeholder'  => 'https://www.youtube.com',
                        ),
                    ),
                ),
            ),
        )
    );

    Redux_Metaboxes::set_box(
        $opt_name,
        array(
            'id'         => 'otzyvy',
            'title'      => esc_html__( 'Доп. поле', 'your-textdomain-here' ),
            'post_types' => array( 'otzyvy' ),
            'position'   => 'normal', // normal, advanced, side.
            'priority'   => 'high', // high, core, default, low.
            'sections'   => array(
                array(
                    'title'      => __( 'Должность', 'your-textdomain-here' ),
                    'id'     => 'otzyvy-1',
                    'icon'   => 'el-icon-cogs',
                    'fields'     => array(
                array(
                    'id'       => 'otzyvy-job',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Должность', 'your-textdomain-here' ),
                    'default'  => '',
                ),
            ),
        
                ),
            ),
        ),
        );