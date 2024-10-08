<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Fogel
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function fogel_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'fogel_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function fogel_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'fogel_pingback_header' );

function morePosts($post, $title){
	echo '<div class="more-posts">';
	echo '<h4>'.$title.'</h4>';
	echo '<ul class="list dark">';
		$args = array(
			'post_type' => $post,
			'post_per_pages' => 3
		);
		$recent_posts_array = get_posts($args); // получаем массив постов
		foreach ($recent_posts_array as $recent_post_single) : // для каждого поста из массива
			echo '<li><a href="' . get_permalink($recent_post_single) . '">' . $recent_post_single->post_title . '</a></li>'; // выводим ссылку
		endforeach;
	echo '</ul>';
	echo '</div>';
}
