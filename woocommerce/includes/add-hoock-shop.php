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

add_action('woocommerce_before_main_content', 'theme_output_content_wrapper', 5);
function theme_output_content_wrapper() { ?>
<div class="shop">
<?php }
add_action('woocommerce_after_main_content', 'theme__output_content_wrapper_end', 11);
function theme__output_content_wrapper_end() { ?>
</div><!--end shop-->
<?php }
add_action('woocommerce_before_main_content', 'theme_headpanel', 7);
function theme_headpanel() { 
    get_template_part( 'template-parts/content', 'head' );
 }

add_action('woocommerce_before_main_content', 'theme__content_sidebar_left', 10);
function theme__content_sidebar_left() { ?>
<div class="shop__sidebar-left container">
<?php }

add_action('woocommerce_after_main_content', 'theme__content_sidebar_left_end', 9);
function theme__content_sidebar_left_end() { ?>
</div><!--content_sidebar_left_end-->
<?php }

add_action('woocommerce_after_main_content', 'theme__sidebar', 8);
function theme__sidebar() { ?>
    <div class="shop__sidebar sidebar">
    <?php dynamic_sidebar( 'sidebar-shop' ); ?>
    </div><!--shop__sidebar-end-->
<?php }

add_action('woocommerce_before_shop_loop', 'theme__loop_row', 8);
function theme__loop_row() { ?>
<div class="shop__right-content">
<?php }
add_action('woocommerce_after_shop_loop', 'theme__loop_row_end', 12);
function theme__loop_row_end() { ?>
</div><!--shop__right-content-end-->
<?php }

add_action('woocommerce_before_shop_loop', 'theme_category_carousel', 14);

function theme_category_carousel() { 
    global $themeshop;
    if($themeshop['carusel-cat-on']) {
        get_template_part( 'template-parts/category', 'carousel' );
} }

add_action('woocommerce_before_shop_loop', 'theme_filter_wrapper', 15);

function theme_filter_wrapper() { ?>
<div class="shop__filter_wrapper">
    <div class="shop__filter_button">
        <button class="shop__filter-grid"><i class="icon-th"></i></button>
        <button class="shop__filter-list"><i class="icon-th-list"></i></button>
    </div>
<?php }

add_action('woocommerce_before_shop_loop', 'theme_filter_wrapper_end', 32);

function theme_filter_wrapper_end() { ?>
</div><!--shop__filter_wrapper-end-->
<?php }

add_action('woocommerce_before_shop_loop', 'theme_loop_wrapper', 50);
function theme_loop_wrapper() { ?>
<div class="shop__loop-wrapper">
<?php }
add_action('woocommerce_after_shop_loop', 'theme_loop_wrapper_end', 10);
function theme_loop_wrapper_end() { ?>
</div><!--shop__loop-wrapper-end-->
<?php }

add_action('woocommerce_after_shop_loop', 'theme__paginations', 11);
function theme__paginations() {
    wp_main_pagination();
}








