<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopStart
 * 
 */
global $themeshop; ?>

<section class="logo container">
    <div class="swiper logo__caruosel">
    <div class="swiper-wrapper logo__content">
        <?php 
             $myGalleryIDs = explode(',', $themeshop['logo-home-gallery']);
             foreach($myGalleryIDs as $myPhotoID) {
                $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
             ?>
                <div class="swiper-slide logo__item">
                <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
                </div>
                <?php } ?>
    </div>
    </div>
</section>