<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dnduy
 */

get_header(); ?>
<?php get_sidebar(); ?>
	<div id="primary" class="content-area sidebar-magin">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				//get_post_meta($post_id, 'gallery_images', $single);
				// $slide =  get_post_custom_values('gallery_images');

				// //$slide['0'];
				// echo do_shortcode( $slide['0'] );
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
