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

add_action('woocommerce_before_shop_loop_item_title', 'theme_template_loop_product_thumbnail', 10);

function theme_template_loop_product_thumbnail() { ?>
<div class="shop__cart-left">
<?php
global $themeshop;
global $product;
$value = redux_post_meta( 'themeshop', 'product-img-loop' );
                $id = get_post_thumbnail_id();
                $main=wp_get_attachment_image_src( $id, 'blog' );
                ?>
        <a href="<?php the_permalink(); ?>">         
    <img  src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    <?php if($value['media-product-on']) { ?> 
    <img class="shop__dop-img"  src="<?php echo $value['media-product-dop']['url']; ?>" alt="<?php the_title(''); ?>">
    <?php } ?>
    </a>
    <?php   if($themeshop['quick-on']) { ?>
    <a href="javascript:void(0)" id="shop__cart-quick" data-product-id="<?php echo get_the_ID() ?>" class="shop__quick"><i class="icon-search"></i></a>
    <?php  }
       if($themeshop['you-tube-on']) { 
        if($themeshop['you-tube-link']) { 
        ?>
     <a class="shop__youtube" aria-label="youtube" title="You Tube" href="<?php echo $themeshop['you-tube-link']; ?>"><i class="icon-youtube"></i></a>
        <?php } } 
    if($themeshop['badges-on']) { 
        if($value['badgik-new']) { ?>
    <span class="label-product label-new"><?php if($themeshop['badges-new']) { echo $themeshop['badges-new']; } ?></span>
    <?php } 
    $regulare_price=wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price()) );
    $sale_price=wc_get_price_to_display( $product, array( 'price' => $product->get_sale_price() ) );
    $percentage = round( ( ( $regulare_price -  $sale_price ) / $regulare_price ) * 100 );
    if($percentage) {
    ?>
    <span  class="label-product label-hit">-<?php echo $percentage; ?>%</span>
    <?php if($value['badgik-hit']) { ?>
    <span  class="label-product  label-sale label-hit-margin"><?php if($themeshop['badges-hit']) { echo $themeshop['badges-hit']; } ?></span>
    <?php } } else {
       if($value['badgik-hit']) { ?>
    <span  class="label-product  label-sale"><?php if($themeshop['badges-hit']) { echo $themeshop['badges-hit']; } ?></span>
      <?php  } 
    }  }
    ?>

    <?php 
      if($themeshop['count-on']) {
        if($themeshop['count-year'] && $themeshop['count-mons'] && $themeshop['count-day']) {
        ?>
          <div id="<?php echo get_the_ID() ?>" class="product__count countdown_box main-action<?php echo get_the_ID() ?>" data-year="<?php echo $themeshop['count-year']; ?>" data-mons="<?php echo $themeshop['count-mons']; ?>" data-day="<?php echo $themeshop['count-day']; ?>">
                        <div class="countdown_inner">
                            <h3 class="product__count-title">До конца акции осталось:</h3>
                            <div class="defaultCountdown-<?php echo get_the_ID() ?> countdown-row"></div>
                        </div>
                    </div>
        <?php } } 
    ?>
</div>

<?php }

add_action('woocommerce_shop_loop_item_title', 'theme_loop_right_wrapper', 5);
function theme_loop_right_wrapper() { ?>
<div class="shop__cart-right">
<?php }

add_action('woocommerce_after_shop_loop_item', 'theme_loop_right_wrapper_end', 15);
function theme_loop_right_wrapper_end() { ?>
    </div><!--shop__cart-right-end-->
    <?php }

add_action('woocommerce_after_shop_loop_item_title', 'theme_star_wraper', 4);  
function theme_star_wraper() { ?>
<div class="shop__star">
<?php }
add_action('woocommerce_after_shop_loop_item_title', 'theme_star_wraper_end', 6);
function theme_star_wraper_end() { ?>
    </div><!--shop__star-end-->
    <?php }

add_action('woocommerce_after_shop_loop_item_title', 'theme_desck', 7);
function theme_desck() { ?>
    <p class="shop__cart-desc"><?php do_excerpt(get_the_excerpt(), 22); ?> ...</p>
<?php }

add_action('woocommerce_shop_loop_item_title', 'theme_link_title', 9);
function theme_link_title() { ?>
    <a href="<?php the_permalink(); ?>">
<?php }
add_action('woocommerce_shop_loop_item_title', 'theme_link_title_end', 11);
function theme_link_title_end() { ?>
    </a>
<?php }


// footer popup//

add_action('wp_footer', 'pop_quick');
function pop_quick() { ?>
 <div class="footer__back"><i class="icon-angle-down"></i></div>
   <?php global $themeshop;
    if($themeshop['quick-on']) {
    ?>
    <div id="quick-modal" class="themeModal">
        <div class="themeModal__body">
        <div class="themeModal__header">
            <button class="modal-close"><i class="icon-plus"></i></button>
                </div>
                    <div class="shop">
                        <div class="shop__pop-content single-product">
                        </div>
                    </div>
        </div>
    </div>
    <?php }
 }




