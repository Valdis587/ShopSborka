<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopStart
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php shopstart_post_thumbnail(); ?>

		<?php
		the_content(); ?>



	
</article><!-- #post-<?php the_ID(); ?> -->
