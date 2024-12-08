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

add_action('woocommerce_before_single_product_summary', 'woocommerce_output_all_notices', 3);

add_action('woocommerce_before_single_product_summary', 'theme_single_wrapper', 5);
function theme_single_wrapper() { ?>
<div class="shop__single-wrapper">
<?php }

add_action('woocommerce_after_single_product_summary', 'theme_single_wrapper_end', 5);

function theme_single_wrapper_end() { ?>
    </div><!--shop__single-wrapper-end-->
    <?php }

add_action('woocommerce_before_single_product_summary', 'theme_show_product_img', 10); 
function  theme_show_product_img() { ?>
    <div class="shop__img-single">
    <?php
     global $product;
     $attachment_ids = $product->get_gallery_image_ids();
     global $themeshop;
   //  $value = redux_post_meta( 'themeshop', 'you-tube-title' );
    if($attachment_ids) { ?>
    <div class="swiper shop__img-big">
        <div class="swiper-wrapper shop__img-big-wrap">
        <?php
        $item=0;
        foreach ( $attachment_ids as $post)  {
            $item++;
            $image = wp_get_attachment_image_src($post, 'product-min');
            ?>
            <div class="swiper-slide shop__img-big-slide">
               <img src="<?php echo $image['0']; ?>" alt="<?php the_title(''); ?>">
            </div>
            <?php } ?>
        </div>
        <?php if($themeshop['you-tube-on']) { 
            if($themeshop['you-tube-link']) { 
            ?>
        <a class="shop__youtube" aria-label="youtube" title="You Tube" href="<?php echo $themeshop['you-tube-link']; ?>"><i class="icon-youtube"></i></a>
            <?php } } ?>
    </div>
    <div class="swiper shop__img-sm">
    <div class="swiper-wrapper shop__img-sm-wrap">        
            <?php
        $item=0;
        foreach ( $attachment_ids as $post)  {
            $item++;
            $image = wp_get_attachment_image_src($post, 'product-min');  ?>
              <div class="swiper-slide shop__img-sm-slide">
                 <img  src="<?php echo $image['0']; ?>" alt="<?php the_title(''); ?>">
                 </div>
  <?php } ?>
</div>
    </div>
    <?php } else { 
           $main=$product->get_image_id();
           $thumbs=wp_get_attachment_image_src($main, 'product-single');
        ?>
        <img src="<?php echo $thumbs['0']; ?>" alt="<?php the_title(''); ?>">
        <?php } ?>
    </div>
<?php }  

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 10);  




