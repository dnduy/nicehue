<?php
/*
Template name: contact page
*/
/**
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dnduy
 */

get_header(); ?>
<?php get_sidebar(); ?>
	<div id="primary" class="content-area sidebar-magin">
		<main id="main" class="site-main">
			<div id="maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.2933664839484!2d107.5871037148779!3d16.46067643320051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a141eb8b81cb%3A0xcb41a13e2c007d5e!2sNice+Hue+Hotel!5e0!3m2!1svi!2s!4v1541994657486" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>

			<?php
			while ( have_posts() ) : the_post(); ?>

 			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dnduy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'dnduy' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->


		<?php	endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
