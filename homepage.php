<?php 
/*
 * Template Name: Homepage
 */
?>
<?php get_header(); ?>

<div id="container">
	<div id="content" style="max-width:1000px">
                <?php get_sidebar(); ?>
                <div class="post">
		    <?php
		        $page_id = get_the_ID();
			$page_data = get_page($page_id);
		    ?>
		    <img src="http://www.michigangurudwara.com/wordpress/wp-content/themes/SSOM-Theme/images/khanda-small.png">
		    <img style="float:right" src="http://www.michigangurudwara.com/wordpress/wp-content/themes/SSOM-Theme/images/khanda-small.png">	
	    	    <h1 style="top:-50px; position:relative" id="title">Welcome to the Sikh Society of Michigan Website</h2>
		    <div style="top:-50px; position:relative" class="post_content">
			  <?php echo apply_filters('the_content', $page_data->post_content); ?>
		    </div>
		</div> <!-- .post -->
		
		<!-- This div is a hack that allows us to acheive a proper two column layout -->
		<div style="clear: both"></div>
	</div> <!-- #content -->
	
</div> <!-- #container -->
<div id="push"></div>
<?php get_footer(); ?>