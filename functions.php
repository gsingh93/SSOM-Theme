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

add_filter( 'nav_menu_css_class', 'check_for_submenu', 10, 2);
function check_for_submenu($classes, $item) {
    global $wpdb;
    $has_children = $wpdb->get_var("SELECT COUNT(meta_id) FROM wp_postmeta WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='".$item->ID."'");
    if ($has_children > 0) array_push($classes,'has-sub'); // add the class dropdown to the current list
    return $classes;
}