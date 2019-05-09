<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dnduy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- <link rel='stylesheet' id='sb_instagram_styles-css'  href='http://maiadanang.fusion-resorts.com/wp-content/plugins/instagram-feed/css/sb-instagram.min.css?ver=1.4.8' type='text/css' media='all' />
<link rel='stylesheet' id='sb_instagram_icons-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' type='text/css' media='all' /> -->
	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">
 <script type='text/javascript' src='<?php bloginfo( 'template_directory' ); ?>/js/bootstrap-datepicker.min.js'></script>
<link rel='stylesheet'   href='<?php bloginfo( 'template_directory' ); ?>/css/bootstrap-datepicker.min.css' type='text/css' media='all' />
<link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dnduy' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="col-md-4 col-xs-6">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">NICE HUE HOTEL
					</a></div>

				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">NICE HUE HOTEL </a></p>
				<?php
				endif;
	 ?>
			</div><!-- .site-branding -->
			<div class="site-branding-small">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo bloginfo('template_directory');?>/images/logo.png" alt=""></a>
			</div><!-- .site-branding-small -->
		</div>
		<div class="col-md-8 col-xs-6">

			<div class="language-switcher">
				<?php  // pll_the_languages($args); ?>
			</div>
			<div class="hidden-sm hidden-xs"> <?php dynamic_sidebar( 'sidebar-3' ); ?> </div>
			</div>
		<!--
		<img id="mobile-menu-button" src="http://maiadanang.fusion-resorts.com/wp-content/themes/serenity-project/images/menu-button.png" alt="">
		<nav id="site-navigation-mobile" class="main-navigation-mobile" role="navigation">
			<div class="menu-mobile-menu-container">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-12',
					'menu_id'        => 'mobile-menu',
				) );
			?>
			</div>
		</nav>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true"><?php esc_html_e( 'Primary Menu', 'dnduy' ); ?></button>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
