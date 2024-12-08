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

function start_arhive_sidebar_right(){ ?>
    <!--hoock-->
        <div class="archive container">
        <div class="archive__sidebar-right">
        <div class="archive__content">
        <div class="archive__cart-col cart">
    <?php }
    
    add_action( 'start_wrapper_arhive_sidebar_right', 'start_arhive_sidebar_right' );
    
    function end_arhive_sidebar_right(){ ?>
            </div>
            <?php wp_main_pagination() ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php }
    
    add_action( 'end_wrapper_arhive_sidebar_right', 'end_arhive_sidebar_right' );

    function start_arhive_row_sidebar_right(){ ?>
        <!--hoock-->
        <div class="archive container">
        <div class="archive__sidebar-right">
        <div class="archive__content">
        <div class="archive__cart-row cart">
        <?php }
    
    add_action( 'start_wrapper_arhive_row_sidebar_right', 'start_arhive_row_sidebar_right' );	
    
    function end_arhive_row_sidebar_right(){ ?>
        </div>
            <?php wp_main_pagination() ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php }
    
    add_action( 'end_wrapper_arhive_row_sidebar_right', 'end_arhive_row_sidebar_right' );

    function start_arhive_sidebar_left(){ ?>
        <!--hoock-->
        <div class="archive container">
        <div class="archive__sidebar-left">
            <div class="archive__content">
                <div class="archive__cart-col cart">
        <?php }
    
    add_action( 'start_wrapper_arhive_sidebar_left', 'start_arhive_sidebar_left' );	
    
    function end_arhive_sidebar_left(){ ?>
              </div>
                <?php wp_main_pagination() ?>
            </div> 
           <div class="sidebar">
        <?php dynamic_sidebar( 'sidebar-catalog' ); ?>
    </div><!-- #secondary -->
        </div>
    </div>
    <?php }
    
    add_action( 'end_wrapper_arhive_sidebar_left', 'end_arhive_sidebar_left' );


    function start_single_sidebar_right(){ ?>
        <!--hoock-->
        <div class="archive container">
        <div class="archive__sidebar-right">
        <div class="archive__cart-row single">
        <?php }
        
    add_action( 'start_wrapper_single_sidebar_right', 'start_single_sidebar_right' );
    
    function end_single_sidebar_right(){ ?>
           </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php }
    
    add_action( 'end_wrapper_single_sidebar_right', 'end_single_sidebar_right' );