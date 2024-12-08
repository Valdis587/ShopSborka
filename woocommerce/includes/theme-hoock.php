<?php
/**
 * ShopStart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ShopStart
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function start_sidebar_carousel(){ ?>
    <!--hoock-->
    <div class="swiper sidebar__carousel">
    <ul class="swiper-wrapper  sidebar__carousel-wrapp">
    <?php }
    
    add_action( 'start_wrapper_sidebar_carousel', 'start_sidebar_carousel' );

    function end_sidebar_carousel(){ ?>
    </ul>
    </div>
<?php }

add_action( 'end_wrapper_sidebar_carousel', 'end_sidebar_carousel' );

function start_home_carousel(){ ?>
    <!--hoock-->
    <div class="home-slider">
    <div class="swiper carousel-home">
    <ul class="swiper-wrapper carousel-home-wrapp products">
    <?php }
    
    add_action( 'start_wrapper_home_carousel', 'start_home_carousel' );

    function end_home_carousel(){ ?>
    </ul>
    <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    </div>
<?php }

add_action( 'end_wrapper_home_carousel', 'end_home_carousel' );