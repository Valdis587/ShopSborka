<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopStart
 */
get_header();
get_template_part( 'template-parts/content', 'head' );

do_action( 'start_wrapper_arhive_row_sidebar_right' );

                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'otzyvy',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
                                get_template_part( 'template-parts/content', 'reviews' );
			endwhile;
		endif;
        do_action( 'end_wrapper_arhive_row_sidebar_right' );
get_footer();