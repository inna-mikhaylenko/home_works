<?php

	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
						 ));}
					 
	add_theme_support( 'post-thumbnails');
	
	add_theme_support( 'post-formats', array( 'aside','quote' ) );
?>