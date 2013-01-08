<?php

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
  register_nav_menus(array('header-menu' => 'Header Menu'));
}

if (function_exists('register_sidebar'))
	register_sidebar(array(
			'before_widget' => '<div class="sidebar-widget">',
			'after_widget' => '</div>',
			'before_title' => '<div class="sidebar-widget-title">',
			'after_title' => '</div><hr>',
	));

function get_title() {
	echo "";
}

function get_description() {
	echo "Madison Heights Gurdwara";
}

/*function my_remove_meta_box() { remove_meta_box('pageparentdiv', 'homework', 'normal'); };
function my_add_meta_box() { add_meta_box('chapter-parent', 'Part', 'chapter_attributes_meta_box', 'homework', 'side', 'high');};
add_action('admin_menu', 'my_remove_meta_box');
add_action('add_meta_boxes', 'my_add_meta_box');
  function chapter_attributes_meta_box($post) {
    $post_type_object = get_post_type_object($post->post_type);
    if ( $post_type_object->hierarchical ) {
      $pages = wp_dropdown_pages(array('post_type' => 'page', 'selected' => $post->post_parent, 'name' => 'parent_id', 'show_option_none' => __('(no parent)'), 'sort_column'=> 'menu_order, post_title', 'echo' => 0));
      if ( ! empty($pages) ) {
        echo $pages;
      } // end empty pages check
    } // end hierarchical check.
  }*/

register_post_type('homework', array(	'label' => 'Homework','description' => 'Punjabi class homework','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => true,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
  'name' => 'Homework',
  'singular_name' => 'Homework',
  'menu_name' => 'Homework',
  'add_new' => 'Add Homework',
  'add_new_item' => 'Add New Homework',
  'edit' => 'Edit',
  'edit_item' => 'Edit Homework',
  'new_item' => 'New Homework',
  'view' => 'View Homework',
  'view_item' => 'View Homework',
  'search_items' => 'Search Homework',
  'not_found' => 'No Homework Found',
  'not_found_in_trash' => 'No Homework Found in Trash',
  'parent' => 'Parent Homework',
),) );