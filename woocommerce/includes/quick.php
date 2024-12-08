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

add_action( 'wp_ajax_quick_action', 'theme_popup_quick_view_callback' );
add_action( 'wp_ajax_nopriv_quick_action', 'theme_popup_quick_view_callback' );
function theme_popup_quick_view_callback() {
    if (!wp_verify_nonce($_POST['nonce'], 'quick_nonce')) {
        wp_die('Данные отправлены с левого адреса');
    }

    $product_id = (int) $_POST['id'];
    global $product;

    wp( 'p=' . $product_id . '&post_type=product' );

    ob_start();

   
    while ( have_posts() ) :
        the_post();
    ?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

        <?php do_action( 'woocommerce_before_single_product_summary' ); ?>


    <div class="summary entry-summary shop__summary ">
    <?php do_action( 'woocommerce_single_product_summary' ); ?>
    </div>
    </div>
               
           
    <?php

    endwhile;
 
    $data['product'] = ob_get_clean();
    wp_send_json($data);
    wp_die();
    // phpcs:enable WordPress.Security.NonceVerification.Recommended

}

add_action('wp_footer', 'pmqv_wc_atc_ajax');
function pmqv_wc_atc_ajax()
{
    wp_enqueue_script('wc-add-to-cart-variation', '/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.js');
    wp_enqueue_script('wc-add-to-cart-variation-col', '/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js');
}