<?php

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
  register_nav_menus(array('header-menu' => 'Header Menu'));
}

if (function_exists('register_sidebar'))
	register_sidebar(array(
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
	));

function get_title() {
	echo "";
}

function get_description() {
	echo "Madison Heights Gurdwara";
}