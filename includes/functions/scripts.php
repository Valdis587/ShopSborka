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

/**
 * Enqueue scripts and styles.
 */
function shopstart_scripts() {
	global $themeshop;

	wp_enqueue_style('woo-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION,);

	wp_enqueue_style( 'shopstart-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'woo-swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'woo-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'woo-jQuery', get_template_directory_uri() . '/assets/js/jQuery.min.js', array(), _S_VERSION, true );

	if($themeshop['you-tube-on']) {
	wp_enqueue_script( 'woo-magnific', get_template_directory_uri() . '/assets/js/magnific.min.js', array(), _S_VERSION, true );
	}
	wp_enqueue_script( 'woo-woo', get_template_directory_uri() . '/assets/js/woo.min.js', array(), _S_VERSION, true );

	
	if($themeshop['quick-on']) {
		wp_enqueue_script( 'theme-quick', get_template_directory_uri() . '/assets/js/quick.min.js', array(), _S_VERSION, true );
		wp_localize_script('theme-quick', 'quick', array(
		   'url' => admin_url('admin-ajax.php'),
		   'nonce' => wp_create_nonce('quick_nonce')
	   ));
		}

	if($themeshop['count-on']) {
	wp_enqueue_script( 'woo-date', get_template_directory_uri() . '/assets/js/date.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'count-js', get_template_directory_uri() . '/assets/js/count.min.js', array(), _S_VERSION, true );
		wp_localize_script('count-js', 'count', array(
			'url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('count_nonce')
		));
	}

		if($themeshop['message-on']) {
			wp_enqueue_script( 'lib-js', get_template_directory_uri() . '/assets/js/message.min.js', array(), _S_VERSION, true );
			wp_enqueue_script( 'message-js', get_template_directory_uri() . '/assets/js/lib.min.js', array(), _S_VERSION, true );
			wp_localize_script('message-js', 'messages', array(
				'url' => admin_url('admin-ajax.php'),
				'nonce' => wp_create_nonce('messages_nonce')
			));
			wp_localize_script('message-js', 'addwishlist', array(
				'url' => admin_url('admin-ajax.php'),
				'nonce' => wp_create_nonce('addwishlist_nonce')
			));
			wp_localize_script('message-js', 'removewishlist', array(
				'url' => admin_url('admin-ajax.php'),
				'nonce' => wp_create_nonce('removewishlist_nonce')
			));
			}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shopstart_scripts' );