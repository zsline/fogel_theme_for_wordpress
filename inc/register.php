<?php 
add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'result', [
		'taxonomies' => [], // post related taxonomies
		'label'  => null,
		'labels' => [
			'name'               => esc_html__('Results', 'fogel'), // name for the post type.
			'singular_name'      => esc_html__('Result', 'fogel'), // name for single post of that type.
			'add_new'            => esc_html__('Add Result', 'fogel'), // to add a new post.
			'add_new_item'       => esc_html__('Adding Result', 'fogel'), // title for a newly created post in the admin panel.
			'edit_item'          => esc_html__('Edit Result', 'fogel'), // for editing post type.
			'new_item'           => esc_html__('New Result', 'fogel'), // new post's text.
			'view_item'          => esc_html__('See Result', 'fogel'), // for viewing this post type.
			'search_items'       => esc_html__('Search Result', 'fogel'), // search for these post types.
			'not_found'          => esc_html__('Not Found', 'fogel'), // if search has not found anything.
			'parent_item_colon'  => '', // for parents (for hierarchical post types).
			'menu_name'          => esc_html__('Results', 'fogel'), // menu name.
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // whether to in admin panel menu
		'show_in_rest'        => null, // Add to REST API. WP 4.7.
		'rest_base'           => null, // $post_type. WP 4.7.
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-clipboard',
		'hierarchical'        => false,
		// [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
		'supports'            => [ 'title', 'editor','excerpt' ],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}
function true_register_wp_sidebars() {
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Боковая колонка', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="blog__sidebar--item %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</div>'
		)
	);
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );