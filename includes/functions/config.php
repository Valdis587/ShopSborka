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

require get_template_directory() . '/includes/tgm/example.php';

require get_template_directory() . '/includes/functions/settings.php';

require get_template_directory() . '/includes/functions/scripts.php';

require get_template_directory() . '/includes/functions/breadcrumbs.php';

require get_template_directory() . '/includes/functions/paginations.php';

require get_template_directory() . '/includes/functions/sidebar.php';

require get_template_directory() . '/includes/functions/reviews.php';

require get_template_directory() . '/includes/functions/primary-menu.php';

require get_template_directory() . '/includes/functions/footer-menu.php';

require get_template_directory() . '/includes/functions/hoock.php';

require get_template_directory() . '/includes/admin/redux.php';

require get_template_directory() . '/includes/admin/theme/config.php';

require get_template_directory() . '/widgets/reviews.php';

require get_template_directory() . '/widgets/last-news.php';
/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/woocommerce/includes/woocommerce.php';

	require get_template_directory() . '/woocommerce/includes/theme-hoock.php';

	require get_template_directory() . '/woocommerce/includes/add-hoock-shop.php';

	require get_template_directory() . '/woocommerce/includes/add-hoock-loop.php';

	require get_template_directory() . '/woocommerce/includes/add-hoock-single.php';

	require get_template_directory() . '/woocommerce/includes/remove-hoock.php';

	require get_template_directory() . '/woocommerce/includes/shop-sidebar.php';

	require get_template_directory() . '/woocommerce/includes/count.php';

	require get_template_directory() . '/woocommerce/includes/quick.php';

	require get_template_directory() . '/woocommerce/includes/messages.php';

	require get_template_directory() . '/widgets/prosm.php';

	require get_template_directory() . '/widgets/featured.php';

	require get_template_directory() . '/widgets/new.php';

	require get_template_directory() . '/widgets/actions.php';

	require get_template_directory() . '/widgets/sale.php';

	require get_template_directory() . '/widgets/hit.php';

	require get_template_directory() . '/widgets/category.php';
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}