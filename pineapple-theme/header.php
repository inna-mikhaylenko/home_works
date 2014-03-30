<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name');?><?php wp_title();?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div class="wrap">
	<div class="header">
		<h1><a href="/wordpress"><img src="http://localhost/wordpress/wp-content/uploads/2014/03/logotype.png" alt="Logotype Pineapple" /></a></h1>
		<?php wp_nav_menu(array(
				'container'      => ''
			)); ?>
	</div>