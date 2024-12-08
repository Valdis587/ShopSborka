<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopStart
 */
?>
<div class="shop__cat-content">
<div class="swiper shop__category-carusel">
            <ul class="swiper-wrapper shop__carusel-list">
                <?php 
                   $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    //'parent' => 
                ) );
                if($terms) {
                    foreach($terms as $term) { ?>     
                <li class="swiper-slide shop__cat-item">
                    <div class="shop__carusel-img">
                        <?php 
                        $thumbnail_id =get_term_meta($term->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id);
                        ?>
                        <a href="<?php echo get_category_link($term->term_id);?>">
                        <img src="<?php echo $image; ?>" alt="<?php echo $term->name;?>">
                        </a>
                    </div>
                    <div class="shop__carusel-cat-name">
                        <a href="<?php echo get_category_link($term->term_id);?>"><?php echo $term->name;?></a>
                    </div>
                </li>
                <?php } } ?>
            </ul>
            <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    </div>