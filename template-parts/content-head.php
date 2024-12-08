<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopStart
 */


	global $themeshop; ?>
	<section class="headpanel">
    <div class="headpanel__img">
    <img src="<?php echo $themeshop['head-page']['url']; ?>" alt="<?php wp_title(''); ?>">
    </div>
    <div class="headpanel__content">
        <div class="headpanel__text">
        <h1 class="headpanel__title"><?php wp_title(''); ?></h1>
        <?php breadcrumbs(); ?> 
        </div>
    </div>
</section><!--end headpanel-->