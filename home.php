<?php
/*
Template name: home page
*/
/**
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dnduy
 */
get_header();
get_sidebar();
?>
	<div id="primary" class="content-area sidebar-magin">
		<main id="main" class="site-main">

		<div id="slider"><?php
    echo do_shortcode("[metaslider id=784]");
?></div>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
			?>

			<?php
						$arr_receation = array(
				'title' => 'RECREATION',
				'page'=>110,
				'page_01'=>112,
				'page_02' =>116,
				'page_03'=>118
				);
			$array_special = array(
				'title' => 'SPECIAL OFFER',
				'page'=>134,
				'page_01'=>136,
				'page_02' =>138,
				'page_03'=>275
				 );
			$array_privileges = array(
				'title' => 'PRIVILEGES',
				'page'=>128,
				'page_01'=>130,
				'page_02' =>132

				 );
			boxcontent_special($array_special);
			//boxcontent_receation($arr_receation);

			boxcontent_privileges($array_privileges);

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
