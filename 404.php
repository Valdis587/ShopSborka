<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ShopStart
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
?>
<div class="page container">
	<div class="page__error">
		<h2 class="page__error-title">404</h2>
		<p class="page__error-desc">Страница не найдена!</p>
		<a class="page__error-button button" href="<?php echo home_url(); ?>">На главную</a>
	</div>
</div>
<?php
get_footer();
