<?php
/**
 * VIP Business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vip_Business
 */

/**
 * Returns theme mod value saved for option merging with default option if available.
 * @since 1.0
 */
function vip_business_gtm( $option ) {
	// Get our Customizer defaults
	$defaults = apply_filters( 'vip_business_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'vip_business_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vip_business_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on VIP Business, use a find and replace
		 * to change 'vip-business' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vip-business', get_template_directory() . '/languages' );

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

		// Used in archive content, featured content.
		set_post_thumbnail_size( 825, 620, false );

		// Used in slider.
		add_image_size( 'vip-business-slider', 1920, 1000, false );

		// Used in hero content.
		add_image_size( 'vip-business-hero', 600, 650, false );

		// Used in portfolio, team.
		add_image_size( 'vip-business-portfolio', 400, 450, false );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary Menu', 'vip-business' ),
			'social' => esc_html__( 'Social Menu', 'vip-business' ),
		) );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'vip_business_custom_background_args', array(
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

		// Add theme editor style
		add_editor_style( array( 'css/editor-style.css' ) );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'vip-business' ),
					'shortName' => __( 'S', 'vip-business' ),
					'size'      => 13,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'vip-business' ),
					'shortName' => __( 'M', 'vip-business' ),
					'size'      => 18,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'vip-business' ),
					'shortName' => __( 'L', 'vip-business' ),
					'size'      => 60,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'vip-business' ),
					'shortName' => __( 'XL', 'vip-business' ),
					'size'      => 90,
					'slug'      => 'huge',
				),
			)
		);

		// Add support for custom color scheme.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'White', 'vip-business' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
			array(
				'name'  => __( 'Black', 'vip-business' ),
				'slug'  => 'black',
				'color' => '#000000',
			),
			array(
				'name'  => __( 'Dark Gray', 'vip-business' ),
				'slug'  => 'dark-gray',
				'color' => '#333',
			),
			array(
				'name'  => __( 'Gray', 'vip-business' ),
				'slug'  => 'gray',
				'color' => '#eeeeee',
			),
			array(
				'name'  => __( 'Light Gray', 'vip-business' ),
				'slug'  => 'light-gray',
				'color' => '#f6f6f6',
			),
			array(
				'name'  => __( 'Blue', 'vip-business' ),
				'slug'  => 'blue',
				'color' => '#46aeff',
			),
		) );
	}
endif;
add_action( 'after_setup_theme', 'vip_business_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 */
function vip_business_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'vip_business_content_width', 1230 );
}
add_action( 'after_setup_theme', 'vip_business_content_width', 0 );

if ( ! function_exists( 'vip_business_custom_content_width' ) ) :
	/**
	 * Custom content width.
	 *
	 * @since 1.0
	 */
	function vip_business_custom_content_width() {
		$layout  = vip_business_get_theme_layout();

		if ( 'no-sidebar-full-width' !== $layout ) {
			$GLOBALS['content_width'] = apply_filters( 'vip_business_content_width', 890 );
		}
	}
endif;
add_filter( 'template_redirect', 'vip_business_custom_content_width' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vip_business_widgets_init() {
	$args = array(
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);

	register_sidebar( array(
		'name'        => esc_html__( 'Sidebar', 'vip-business' ),
		'id'          => 'sidebar-1',
		'description' => esc_html__( 'Add widgets here.', 'vip-business' ),
		) + $args
	);

	register_sidebar( array(
		'name'        => esc_html__( 'Footer 1', 'vip-business' ),
		'id'          => 'sidebar-2',
		'description' => esc_html__( 'Add widgets here to appear in your footer.', 'vip-business' ),
		) + $args
	);

	register_sidebar( array(
		'name'        => esc_html__( 'Footer 2', 'vip-business' ),
		'id'          => 'sidebar-3',
		'description' => esc_html__( 'Add widgets here to appear in your footer.', 'vip-business' ),
		) + $args
	);

	register_sidebar( array(
		'name'        => esc_html__( 'Footer 3', 'vip-business' ),
		'id'          => 'sidebar-4',
		'description' => esc_html__( 'Add widgets here to appear in your footer.', 'vip-business' ),
		) + $args
	);
}
add_action( 'widgets_init', 'vip_business_widgets_init' );

/**
 * Count the number of footer sidebars to enable dynamic classes for the footer
 *
 * @since 1.0
 */
function vip_business_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'sidebar-2' ) ) {
		$count++;
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		$count++;
	}

	if ( is_active_sidebar( 'sidebar-4' ) ) {
		$count++;
	}

	$class = '';

	switch ( $count ) {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
		case '4':
			$class = 'four';
			break;
	}

	if ( $class ) {
		echo 'class="widget-area footer-widget-area ' . $class . '"'; // WPCS: XSS OK.
	}
}

if ( ! function_exists( 'vip_business_fonts_url' ) ) :
	/**
	 * Register Google fonts for VIP Business
	 *
	 * Create your own vip_business_fonts_url() function to override in a child theme.
	 *
	 * @return string Google fonts URL for the theme.
	 *
	 * @since 0.1
	 */
	function vip_business_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Heebo, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$roboto = _x( 'on', 'Roboto font: on or off', 'vip-business' );
		$poppins = _x( 'on', 'Poppins font: on or off', 'vip-business' );

		if ( 'off' !== $roboto && 'off' !== $poppins ) {
			$font_families = array();

			if ( 'off' !== $roboto ) {
				$font_families[] = 'Roboto:300,400,500,600,700,900';
			}

			if ( 'off' !== $poppins ) {
				$font_families[] = 'Poppins:300,400,500,600,700,900';
			}

			$query_args = array(
				'family' => urlencode( implode( '|', $font_families ) ),
				'subset' => urlencode( 'latin,latin-ext' ),
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}

		return esc_url_raw( $fonts_url );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function vip_business_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/all' . $min . '.css', array(), '5.8.2', 'all' );

	// Theme stylesheet.
	wp_enqueue_style( 'vip-business-style', get_stylesheet_uri(), array(), vip_business_get_file_mod_date( get_template_directory() . '/style.css' ) );

	// Add google fonts.
	wp_enqueue_style( 'vip-business-fonts', vip_business_fonts_url(), array(), null );

	// Theme block stylesheet.
	wp_enqueue_style( 'vip-business-block-style', get_template_directory_uri() . '/css/blocks' . $min . '.css', array( 'vip-business-style' ), vip_business_get_file_mod_date( get_template_directory() . '/css/blocks' . $min . '.css' ) );

	wp_enqueue_script( 'vip-business-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix' . $min . '.js', array(), vip_business_get_file_mod_date( get_template_directory() . '/js/skip-link-focus-fix' . $min . '.js' ), true );

	wp_enqueue_script( 'vip-business-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation' . $min . '.js', array(), vip_business_get_file_mod_date( get_template_directory() . '/js/keyboard-image-navigation' . $min . '.js' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'vip-business-script', get_template_directory_uri() . '/js/functions' . $min . '.js', array( 'jquery', 'masonry'  ), vip_business_get_file_mod_date( get_template_directory() . '/js/functions' . $min . '.js' ), true );

	wp_localize_script( 'vip-business-script', 'vipBusinessScreenReaderText', array(
		'expand'   => esc_html__( 'expand child menu', 'vip-business' ),
		'collapse' => esc_html__( 'collapse child menu', 'vip-business' ),
	) );

	// Slider Scripts.
	$enable_slider      = vip_business_gtm( 'vip_business_slider_visibility' );
	$enable_testimonial = vip_business_gtm( 'vip_business_testimonial_visibility' );
	if ( vip_business_display_section( $enable_slider ) || vip_business_display_section( $enable_testimonial ) ) {
		wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/swiper' . $min . '.css', array(), vip_business_get_file_mod_date( get_template_directory() . '/css/swiper' . $min . '.css' ), false );

		wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper' . $min . '.js', array(), vip_business_get_file_mod_date( get_template_directory() . '/js/swiper' . $min . '.js' ), true );

		wp_enqueue_script( 'swiper-custom', get_template_directory_uri() . '/js/swiper-custom' . $min . '.js', array( 'swiper' ), vip_business_get_file_mod_date( get_template_directory() . '/js/swiper-custom' . $min . '.js' ), true );

		// Localize the script with new data.
		$slider_options = array(
			'slider'      => array(
				'speed'         => esc_js( vip_business_gtm( 'vip_business_slider_transition_speed' ) ),
				'effect'        => esc_js( vip_business_gtm( 'vip_business_slider_transition_effect' ) ),
				'loop'          => esc_js( vip_business_gtm( 'vip_business_slider_loop' ) ),
				'autoplay'      => esc_js( vip_business_gtm( 'vip_business_slider_autoplay' ) ),
				'autoplayDelay' => esc_js( vip_business_gtm( 'vip_business_slider_autoplay_delay' ) ),
				'pauseOnHover'  => esc_js( vip_business_gtm( 'vip_business_slider_pause_on_hover' ) ),
			)
		);

		wp_localize_script( 'swiper-custom', 'vipBusinessSliderOptions', $slider_options );
	}
}
add_action( 'wp_enqueue_scripts', 'vip_business_scripts' );

/**
 * Get file modified date
 */
function vip_business_get_file_mod_date( $file ) {
	return date( 'Ymd-Gis', filemtime( $file ) );
}

/**
 * Enqueue editor styles for Gutenberg
 */
function vip_business_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'vip-business-block-editor-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'css/editor-blocks.css' );

	// Add custom fonts.
	wp_enqueue_style( 'vip-business-fonts', vip_business_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'vip_business_block_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Breadcrumb.
 */
require get_template_directory() . '/inc/breadcrumb.php';

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
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Metabox additions.
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load Theme About Page
 */
require get_parent_theme_file_path( '/inc/theme-about.php' );
