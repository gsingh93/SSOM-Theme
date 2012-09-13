<!DOCTYPE html>
<html>
	<head>
		<title><?php get_title(); ?></title>
	
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
			
		<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">

		<?php wp_head(); ?>

	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				
				<div id="branding">
					<a href="<?php bloginfo( 'url' ) ?>/" title="Sikh Society of Michigan" rel="home"><h1>Sikh Society of Michigan</h1></a>
					
					<h2>Sterling Heights Gurdwara</h2>
				</div> <!-- #branding -->
				
				<img id="logo" src="<?php bloginfo('template_directory'); ?>/images/khanda.png">
				
			</div> <!-- #header -->
			
			<div id="cssmenu">
				<?php wp_page_menu( 'sort_column=menu_order' ); ?>
			</div> <!-- #cssmenu -->
			