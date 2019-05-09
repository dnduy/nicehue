<?php
/**
 * dnduy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dnduy
 */

if ( ! function_exists( 'dnduy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dnduy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dnduy, use a find and replace
		 * to change 'dnduy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dnduy', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'dnduy' ),
		) );
		// left main menu
		register_nav_menus( array (
			'menu-left' => esc_html( 'Left menu', 'dnduy' ),
		));
		// right menu
		register_nav_menus( array(
			'mene-right' =>esc_html( 'right menu', 'dnduy' )
		) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-12' => esc_html__( 'mobile', 'dnduy' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'dnduy_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'dnduy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dnduy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dnduy_content_width', 640 );
}
add_action( 'after_setup_theme', 'dnduy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dnduy_left_menu() {
	register_sidebar( array(
		'name'          => esc_html__( 'Left menu', 'dnduy' ),
		'id'            => 'left-menu',
		'description'   => esc_html__( 'Add widgets here.', 'dnduy' ),
		'before_widget' => '<nav id="left-menu" class="menu-header left-menu">',
		'after_widget'  => '</nav>',

	) );
}
add_action( 'widgets_init', 'dnduy_left_menu' );
function dnduy_right_menu() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right menu', 'dnduy' ),
		'id'            => 'right-menu',
		'description'   => esc_html__( 'Add widgets here.', 'dnduy' ),
		'before_widget' => '<nav id="right-menu" class="menu-header right-menu">',
		'after_widget'  => '</nav>',

	) );
}
add_action( 'widgets_init', 'dnduy_right_menu' );


function dnduy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dnduy' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dnduy' ),
		'before_widget' => '<nav id="site-navigation-sidebar" class="widget %2$s main-navigation-sidebar">',
		'after_widget'  => '</nav>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dnduy_widgets_init' );

// register footer widget

function footer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer widget', 'dnduy' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'dnduy' ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		//'before_title'  => '<h2 class="widget-title">',
		//'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_widgets_init' );

// register footer widget

function header_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'header widget', 'dnduy' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'dnduy' ),
		'before_widget' => '<div id="%1$s" class="header-widget %2$s">',
		'after_widget'  => '</div>',
		//'before_title'  => '<h2 class="widget-title">',
		//'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'header_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function dnduy_scripts() {
	wp_enqueue_style( 'dnduy-style', get_stylesheet_uri() );

	wp_enqueue_script( 'dnduy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'dnduy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dnduy_scripts' );


// add except in page

add_post_type_support( 'page', 'excerpt' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function boxcontent_receation($arr){

	//print_r($arr);

?>
<div class="row">
	<div class="col-md-12">
		<div>
			<h2 class="modal-title home-title text-center"><?php echo $arr['title']; ?></h2>
			<div class="text-center bootstrap_tabs_custom-link"><a class="btn btn-info " href="<?php the_permalink( $arr['page'] ) ?>"><span>See all</span></a></div>
		</div>
		<div class="col-md-4">

			<?php echo get_the_post_thumbnail( $arr['page_01'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_01'])   ?>
				</h3>
				<div class=""><?php // echo $content; ?>
					<?php echo get_the_excerpt( $arr['page_01'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_01'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>
		<div class="col-md-4">

			<?php echo get_the_post_thumbnail( $arr['page_02'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_02'])   ?>
				</h3>
				<div class=""><?php // echo $content; ?>
					<?php echo get_the_excerpt( $arr['page_02'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_02'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>
		<div class="col-md-4">

			<?php echo get_the_post_thumbnail( $arr['page_03'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_03'])   ?>
				</h3>
				<div class=""><?php // echo $content; ?>
					<?php echo get_the_excerpt( $arr['page_03'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_03'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>
	</div>
</div>

<?php }
function boxcontent_special($arr){
	//print_r($arr);

?>
<div class="row">
	<div class="col-md-12">
		<div>
			<h2 class="modal-title home-title text-center"><?php echo $arr['title']; ?></h2>
			<div class="text-center bootstrap_tabs_custom-link"><a class="btn btn-info " href="<?php the_permalink( $arr['page'] ) ?>"><span>See all</span></a></div>
		</div>

		<div class="col-md-4">

			<div class="border-radius text-center col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">

				<img src="<?php bloginfo( 'template_directory' ) ?>/images/cafe.png" alt="">
			</div>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_02'])   ?>
				</h3>
				<div class=""><?php // echo $content; ?>
					<?php echo get_the_excerpt( $arr['page_02'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_02'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>

		<div class="col-md-4">

			<?php // echo get_the_post_thumbnail( $arr['page_01'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="border-radius text-center col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
				<img src="<?php bloginfo( 'template_directory' ) ?>/images/bus.png" alt="">
			</div>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_01'])   ?>
				</h3>
				<div class=""><?php // echo $content; ?>
					<?php echo get_the_excerpt( $arr['page_01'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_01'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>

		<div class="col-md-4">

			<div class="border-radius text-center col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
				<img src="<?php bloginfo( 'template_directory' ) ?>/images/tour.png" alt="">
			</div>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_03'])   ?>
				</h3>
				<div class=""><?php // echo $content; ?>
					<?php echo get_the_excerpt( $arr['page_03'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_03'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>
	</div>
</div>

<?php }
function boxcontent_privileges($arr){ ?>
<div class="row">
	<div class="col-md-12">
		<div>
			<h2 class="modal-title home-title text-center"><?php echo $arr['title']; ?></h2>
			<div class="text-center bootstrap_tabs_custom-link"><a class="btn btn-info " href="<?php the_permalink( $arr['page'] ) ?>"><span>See all</span></a></div>
		</div>
		<div class="col-md-6">

			<?php echo get_the_post_thumbnail( $arr['page_01'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="text-center">
				<h3 class="modal-title">
				  <?php echo get_the_title($arr['page_01'])   ?>
				</h3>
				<div class=""><?php // echo $content; ?>
					<?php echo get_the_excerpt( $arr['page_01'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_01'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>
		<div class="col-md-6">

			<?php echo get_the_post_thumbnail( $arr['page_02'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="text-center">
				<h3 class="modal-title">
				  <?php echo get_the_title($arr['page_02'])   ?>
				</h3>
				<div class=""><?php // echo $content; ?>
					<?php echo get_the_excerpt( $arr['page_02'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_02'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>

	</div>
</div>
<?php }
