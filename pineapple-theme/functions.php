<?php add_theme_support( 'post-thumbnails'); 

	if (function_exists('register_sidebars')) register_sidebars(4);
	
	register_sidebar(array(
        'name' => __('Search widget'),
        'id' => 'header-widget-area',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
?>