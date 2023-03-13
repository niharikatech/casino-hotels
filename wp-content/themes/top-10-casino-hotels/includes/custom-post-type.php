<?php 

add_action( 'init', 'casino_hotels_init' );
/**
 * Register a post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function casino_hotels_init() {
	$labels = array(
		'name'               => _x( 'Casino Hotels', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Casino Hotel', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Casino Hotels', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Service', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Hotel', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Hotel', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Hotel', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Hotel', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Casino Hotels', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Casino Hotels', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Casino Hotels:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Casino Hotels found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Casino Hotels found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'casino-hotels' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail'  )
	);

	register_post_type( 'casino_hotels', $args );
}
