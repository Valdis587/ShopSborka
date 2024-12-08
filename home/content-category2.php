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
<section class="categoryflex caruselhome shop sidebar container">
    <div class="title-home-wrapper">
    <?php if($themeshop['category-title-home']) {  ?>
        <h3 class="title-home"><?php echo $themeshop['category-title-home']; ?></h3>
        <?php }  ?>
        <?php if($themeshop['category-desc-home']) {  ?>
        <p class="desc-home"><?php echo $themeshop['category-desc-home']; ?></p>
        <?php }  ?>
    </div>
        <div class="categoryflex__content">
        <?php 
                   $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    'parent' => 0
                ) );
                if($terms) {
                    foreach($terms as $term) {
                ?>
            <div class="categoryflex__item">
                <div class="categoryflex__img">
                <?php 
                        $thumbnail_id =get_term_meta($term->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id);
                        $tax = $term->taxonomy;
                        $children_terms = get_terms( array(
                            'taxonomy' => $tax,
                            'hide_empty' => true,
                            'parent' => $term->term_id
                        ) );
                        ?>
                    <a href="<?php echo get_category_link($term->term_id);?>"><img src="<?php echo $image; ?>" alt="<?php echo $term->name; ?>"></a>
                </div>
                <div class="categoryflex__info">
                    <a class="categoryflex__name" href="<?php echo get_category_link($term->term_id);?>"><?php echo $term->name;?></a>
                    <?php if($children_terms) { ?>
                        <ul class="categoryflex__list-subname">
                        <?php foreach ($children_terms as $children_term) { ?>
                            <li><a class="categoryflex__subname" href="<?php echo get_category_link($children_term->term_id);?>"><?php echo $children_term->name; ?></a></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <?php } } ?>
        </div> 
</section>