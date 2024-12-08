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
if($themeshop['count-on']) {

?>
<section class="actions caruselhome shop sidebar container">
    <div class="title-home-wrapper">
    <?php if($themeshop['actions-title-home']) {  ?>
        <h3 class="title-home"><?php echo $themeshop['actions-title-home']; ?></h3>
        <?php }  ?>
        <?php if($themeshop['actions-desc-home']) {  ?>
        <p class="desc-home"><?php echo $themeshop['actions-desc-home']; ?></p>
        <?php }  ?>
    </div>
        <?php 
         $query_args = array(
            'posts_per_page' => 400,
            'no_found_rows'  => 1,
            'post_status'    => 'publish',
            'post_type'      => 'product',
            'orderby'  => 'post__in',
        );
        $r = new WP_Query( $query_args  );
        if ( $r->have_posts() ) {
    do_action( 'start_wrapper_home_carousel' );
                 while ( $r->have_posts() ) {
                       global $product;
                       $r->the_post();
                       if($themeshop['count-on']) {
                        if($themeshop['count-year'] && $themeshop['count-mons'] && $themeshop['count-day']) {
                       wc_get_template_part( 'content', 'product' );
                       } } }
        do_action( 'end_wrapper_home_carousel' );
           ?>
        <?php }  wp_reset_postdata();
        ?> 
</section>
<?php } ?>