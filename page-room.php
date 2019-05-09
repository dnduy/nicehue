<?php
/*
Template name: Room page
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

			<?php
			while ( have_posts() ) : the_post();?>

					

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
						
						<div class="entry-content">
							<div class="col-md-12">
								<div class="col-md-6"><div id="slider-page">
								<?php   $slide =  get_post_custom_values('gallery_images'); 
										echo do_shortcode( $slide['0'] );
								 ?>
									</div>
								</div>
								<div class="col-md-6">
									<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
	
							<?php
								the_content();

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dnduy' ),
									'after'  => '</div>',
								) );
							?>	
								</div>

							</div>
						</div><!-- .entry-content -->
 
					</article><!-- #post-<?php the_ID(); ?> -->
	<?php 	endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
