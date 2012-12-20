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