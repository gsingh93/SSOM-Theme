<!DOCTYPE html>
<html>
	<head>
		<title>Sikh Society of Michigan</title>
 
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-37238415-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />			
		<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">

		<?php wp_head(); ?>

	</head>
	<body>
		<div id="wrapper">
			<div id="header">
<a href="http://twitter.com/SikhSocietyOfMi"><img style="float:right" src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.png"></a>
			  <a href="https://www.facebook.com/sikh.michigan"><img style="float:right;margin-right:4px" src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png"></a>
				<div id="branding">
					<a href="<?php bloginfo( 'url' ) ?>/" title="Sikh Society of Michigan" rel="home"><h1>Sikh Society of Michigan</h1></a>
					
					<h2>Sterling Heights Gurdwara</h2>
				</div> <!-- #branding -->
				
				<img id="logo" src="<?php bloginfo('template_directory'); ?>/images/khanda.png">
				
			</div> <!-- #header -->
			
                        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_id' => 'cssmenu')); ?>			
