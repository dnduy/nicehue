<?php
/*
Template name: Parents page
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
		<main id="main" class="site-main parents-page">
			<div id="slider-page">
		<?php 

		
				//get_post_meta($post_id, 'gallery_images', $single);
				$slide =  get_post_custom_values('gallery_images');

				//$slide['0'];
				echo do_shortcode( $slide['0'] );
				// get_template_part( 'template-parts/content', 'page' );

		 ?>
			</div> 



 			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
				<div class="entry-content">
					
					<?php 
					$args = array(
						'post_parent' => get_the_ID(),
						'post_type'   => 'page', 
						//'numberposts' => -1,
						//'post_status' => 'any' 
					);
					$children = get_children( $args ); 
					//print_r($children);
					foreach ($children as $childrens) {	?>
					<?php $page_id = $childrens->ID; ?>
						
						<div class="row">
							<div class="col-md-6 ">
								<?php echo get_the_post_thumbnail( $page_id, '', array( 'class' => 'aligncenter' ) ); ?>
							</div>
							<div class="col-md-6 content-wrapper">
								<div class="content">
									<h3 class="two-lines-title"> <a href="<?php echo get_the_permalink( $page_id ); ?>" title=""> <span><?php echo $childrens->post_title; ?> </span> </a></h3>
									<div class="text-appear on"><p class="description"><?php  echo $childrens->post_excerpt; ?></p></div>
									<div class="more"><a href="<?php echo get_the_permalink( $page_id ); ?>" title="Read more"><img src="<?php bloginfo( 'template_directory'); ?>/images/more-grey.png"></a></div>
								</div>
								<?php  ?>
							</div>
						</div>

				<?php	}

					 

					?>
					

				</div><!-- .entry-content -->

			
			</article><!-- #post-<?php the_ID(); ?> -->
	
		 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
