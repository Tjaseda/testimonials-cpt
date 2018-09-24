<?php
/*
Plugin Name: Testimonials CPT
Plugin URI: https://github.com/Tjaseda/testimonials-cpt
Description: Simple plugin to register a Testimonials custom post type
Author: Tjasa Dobrilovic
Version: 1.0
Author URI: https://github.com/Tjaseda
*/

function testimonialscpt_register_testimonial_post_type() {

	$labels = array(
		'name'               => 'Testimonials',
		'singular_name'      => 'Testimonial',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Testimonial',
		'edit_item'          => 'Edit Testimonial',
		'new_item'           => 'New Testimonial',
		'all_items'          => 'All Testimonials',
		'view_item'          => 'View Testimonial',
		'search_items'       => 'Search Testimonial',
		'not_found'          => 'No testimonials found',
		'not_found_in_trash' => 'No testimonials found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
    'exclude_from_search'=> false,
		'publicly_queryable' => false,
    'menu_icon'          => 'dashicons-format-status',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
	);

	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonialscpt_register_testimonial_post_type' );

?>
