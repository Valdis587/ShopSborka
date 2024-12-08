<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopStart
 * 
 */
global $themeshop;
?>
<section class="category caruselhome shop sidebar container">
    <div class="title-home-wrapper">
    <?php if($themeshop['category-title-home']) {  ?>
        <h3 class="title-home"><?php echo $themeshop['category-title-home']; ?></h3>
        <?php }  ?>
        <?php if($themeshop['category-desc-home']) {  ?>
        <p class="desc-home"><?php echo $themeshop['category-desc-home']; ?></p>
        <?php }  ?>
    </div>
 <?php get_template_part( 'template-parts/category', 'carousel' ); ?>
</section>