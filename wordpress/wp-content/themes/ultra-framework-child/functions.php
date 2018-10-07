<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
add_action( 'init', 'cptui_register_my_cpts_films' );
add_shortcode( 'film_posts_list', 'display_film_post_type' );

function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function cptui_register_my_cpts_films() {

	/**
	 * Post Type: Films.
	 */

	$labels = array(
		"name" => __( "Films", "" ),
		"singular_name" => __( "FIlm", "" ),
		"menu_name" => __( "Films", "" ),
		"all_items" => __( "FIlms", "" ),
		"add_new" => __( "New Film", "" ),
		"add_new_item" => __( "New FIlm", "" ),
		"edit_item" => __( "Edit Film", "" ),
		"new_item" => __( "New Film", "" ),
		"view_item" => __( "View Film", "" ),
		"view_items" => __( "View Films", "" ),
		"search_items" => __( "Search Films", "" ),
		"not_found" => __( "Film not found", "" ),
		"not_found_in_trash" => __( "No Films found in Trash", "" ),
		"parent_item_colon" => __( "Parent Film", "" ),
		"featured_image" => __( "Featured Image of Film", "" ),
		"set_featured_image" => __( "Set Featured image for this Fil,", "" ),
		"remove_featured_image" => __( "Remove Featured Image for this Film", "" ),
		"use_featured_image" => __( "Use as featured image for this fil,", "" ),
		"archives" => __( "FIlm archives", "" ),
		"insert_into_item" => __( "Insert into Film", "" ),
		"uploaded_to_this_item" => __( "Uploaded to this FIlm", "" ),
		"filter_items_list" => __( "Filter items in this FIlm", "" ),
		"items_list_navigation" => __( "Films in list investigation", "" ),
		"items_list" => __( "Films List", "" ),
		"attributes" => __( "Film Attributes", "" ),
		"parent_item_colon" => __( "Parent Film", "" ),
	);

	$args = array(
		"label" => __( "Films", "" ),
		"labels" => $labels,
		"description" => "FIlms",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "films", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "films", $args );
}


function display_film_post_type(){
	$args = array(
	    'post_type'      => 'films',
	    'post_status'    => 'publish',
	    'posts_per_page' => '5',
            'order'          => 'DESC',
	);

	$string = '';
	$query = new WP_Query( $args );
	if( $query->have_posts() ){
	    $string .= '<ul>';
	    while( $query->have_posts() ){
		$query->the_post();
		$string .= '<li>' . get_the_title() . '</li>';
	    }
	    $string .= '</ul>';
	}
	wp_reset_postdata();
	return $string;
}
?>
