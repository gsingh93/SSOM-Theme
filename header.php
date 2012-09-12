<!DOCTYPE html>
<html>
	<head>
		<title><?php get_title(); ?></title>
	
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
		<?php wp_head(); ?>
		
		<link type="text/css" rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				
				<div id="branding">
					<a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><h1><?php bloginfo( 'name' ) ?></h1></a>
					
					<h2><?php get_description(); ?></h2>
				</div> <!-- #branding -->
				
			</div> <!-- #header -->
			
			<div id="cssmenu">
				<?php wp_page_menu( 'sort_column=menu_order' ); ?>
			</div> <!-- #cssmenu -->
			