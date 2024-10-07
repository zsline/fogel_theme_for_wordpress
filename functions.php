<?php
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}
function fogel_setup() {
	load_theme_textdomain( 'fogel', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'fogel' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'fogel_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'fogel_setup' );
function fogel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fogel_content_width', 640 );
}
add_action( 'after_setup_theme', 'fogel_content_width', 0 );
function fogel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fogel' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fogel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fogel_widgets_init' );
function fogel_scripts() {
	wp_enqueue_style( 'fogel-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'fogel-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'fogel-style', 'rtl', 'replace' );

	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'fogel-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'fogel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fogel_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/register.php';
require get_template_directory() . '/inc/buttons/buttons.php';
require get_template_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';


require get_template_directory() . '/inc/custom-fields/theme-options.php';
require get_template_directory() . '/inc/custom-fields/post-meta.php';

add_action( 'carbon_fields_register_fields', 'fogel_set_attach_post_meta' );
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
