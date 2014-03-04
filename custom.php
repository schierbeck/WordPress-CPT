<?php

add_action('init', 'cpt_register_food_drink');
function cpt_register_food_drink() {
	register_post_type('food_drink', array(
		'label' => 'Mat & Dryck',
		'description' => 'Mat och Dryck som syns under "Meny" i menyn',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'meny', 'with_front' => 1),
		'has_archive' => true,
		'query_var' => true,
		'menu_position' => '20',
		'supports' => array('title','excerpt','custom-fields','thumbnail'),
		'labels' => array (
		  'name' => 'Mat & Dryck',
		  'singular_name' => 'Mat & Dryck',
		  'menu_name' => 'Mat & Dryck',
		  'add_new' => 'Lägg till',
		  'add_new_item' => 'Lägg till Mat & Dryck',
		  'edit' => 'Redigera',
		  'edit_item' => 'Redigera Mat & Dryck',
		  'new_item' => 'Ny Mat & Dryck',
		  'view' => 'Titta på inlägget',
		  'view_item' => 'Titta på inlägget',
		  'search_items' => 'Sök i Mat & Dryck',
		  'not_found' => 'Inget funnet bland Mat & Dryck',
		  'not_found_in_trash' => 'Ingen Mat & Dryck i papperskorgen',
		  'parent' => 'Förälder Mat & Dryck',
			)
		) 
	); 
}

add_action('init', 'cpt_register_food_drink_cat');
function cpt_register_food_drink_cat() {
	register_taxonomy( 'food_drink_cat', array (
	  0 => 'food_drink',
	),
	array( 'hierarchical' => true,
		'label' => 'Kategorier',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'kategori' ),
		'show_admin_column' => false,
		'labels' => array (
		  'search_items' => 'Kategori',
		  'popular_items' => 'Populära kategorier',
		  'all_items' => 'Alla kategorier',
		  'parent_item' => 'Förälder kategori',
		  'parent_item_colon' => 'Förälder kategori',
		  'edit_item' => 'Redigera kategori',
		  'update_item' => 'Uppdatera kategori',
		  'add_new_item' => 'Lägg till ny kategori',
		  'new_item_name' => 'Ny kategori',
		  'separate_items_with_commas' => 'Separera kategorier med komma',
		  'add_or_remove_items' => 'Lägg till eller ta bort kategorier',
		  'choose_from_most_used' => 'Välj bland de vanligaste kategorierna',
			)
		) 
	); 
}
