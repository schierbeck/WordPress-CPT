<?php

/**
 * Custom Post Type - My Custom Post Type
 * Documentation: http://codex.wordpress.org/Function_Reference/register_post_type
 */

add_action('init', 'my_custom_post_type');
function my_custom_post_type() {
	register_post_type('my_cpt', array(
		'label' => 'My CPT', 
		'labels' => array (
		  'name' => 'My CPT', // general name for the post type, usually plural
		  'singular_name' => 'My CPT', // name for one object of this post type
		  'menu_name' => 'My CPT', // the menu name text
		  'add_new' => 'Lägg till', // the add new text
		  'add_new_item' => 'Lägg till My CPT', // the add new item text
		  'edit_item' => 'Redigera My CPT', // the edit item text
		  'new_item' => 'Ny My CPT', // the new item text
		  'view_item' => 'Titta på inlägget', // the view item text
		  'search_items' => 'Sök i My CPT', // the serach items text
		  'not_found' => 'Inget funnet bland My CPT', // the not found text
		  'not_found_in_trash' => 'Ingen My CPT i papperskorgen', // the not found in trash text
		  'parent' => 'Förälder My CPT', // the parent text. Not used in non-hierarchical types (like tags)
		),
		'description' => 'description...', // A short descriptive summary of what the post type is
		'public' => true, // Should post type be public in frontend and admin (almost always true)
		'exclude_from_search' => false, // Whether to exclude posts with this post type from front end search results
		'publicly_queryable' => true, // Whether queries can be performed on the front end as part of parse_request()
		'show_ui' => true, // Show post type UI managing in Admin
		'show_in_menu' => true, // Where to show the post type in the admin menu
		'show_in_admin_bar' => true, // Whether to make this post type available in the WordPress admin bar
		'menu_position' => '20',
		'menu_icon' => null, // The url to the icon to be used for this menu or the name of the icon from the iconfont
		'menu_position' => 20, // The position in the menu order the post type should appear
		'supports' => array('title','excerpt','custom-fields','thumbnail'), // An alias for calling add_post_type_support() directly
		// Support types, title, editor, author, thumbnail, excerpt, trackbacks, custom-fields, comments, revisions, page-attributes, post-formats
		'rewrite' => array('slug' => 'meny', 'with_front' => 1), // Triggers the handling of rewrites for this post type
		'query_var' => true, // Sets the query_var key for this post type
		'has_archive' => true, // Enables post type archives
		'can_export' => true, // Can this post_type be exported
	)); 
}

add_action('init', 'my_custom_post_type_cat');
function my_custom_post_type_cat() {
	register_taxonomy( 'my_cpt_cat', array (
	  0 => 'my_cpt',
	),
	array(
		'label' => 'My CPT taxonomy', // A plural descriptive name for the taxonomy marked for translation
		'labels' => array ( // An array of labels for this taxonomy
			'name' => 'My taxonomies', // general name for the taxonomy, usually plural
			'singular_name' => 'My taxonomy' // name for one object of this taxonomy
		  'all_items' => 'All My taxonomies', // the all items text
		  'edit_item' => 'Edit My taxonomy', // the edit item text
			'view_item' => 'View My taxonomy', // the view item text
			'update_item' => 'Update My taxonomy', // the update item text
		  'add_new_item' => 'Lägg till ny kategori', // the add new item text
		  'new_item_name' => 'New taxonomy' // the new item name text
		  'parent_item' => 'Parent taxonomy' // the parent item text. Only used when hierarchical is true	
		  'search_items' => 'Search taxonomies' // the search items text. 
		  'popular_items' => 'Populare taxonomies' // the popular items text
		  'add_or_remove_items' => 'Lägg till eller ta bort kategorier' //
		  'choose_from_most_used' => 'Choose from most used taxonomies' // he choose from most used text used in the taxonomy meta box. This string isn't used on hierarchical taxonomies
		),
		'public' => true, // Should this taxonomy be exposed in the admin UI
		'show_ui' => true, // Whether to generate a default UI for managing this taxonomy
		'hierarchical' => true, // Is this taxonomy hierarchical (have descendants) like categories or not hierarchical like tags
		'query_var' => true, // False to disable the query_var, set as string to use custom query_var instead of default which is $taxonomy, the taxonomy's "name"
		'rewrite' => false // Set to false to prevent automatic URL rewriting a.k.a. "pretty permalinks"
	)); 
}
