<?php 
/*
 * Template Name: Homepage
 */
?>
<?php get_header(); ?>

<div id="container">
	<div id="content">
                <?php get_sidebar(); ?>
                <div class="post">
		    <?php
		        $page_id = get_the_ID();
			$page_data = get_page($page_id);
		    ?>
		    <h1 id="title">Welcome to the Sikh Society of Michigan Website</h2>
		    <div class="post_content">
			  <?php echo apply_filters('the_content', $page_data->post_content); ?>
		    </div>
		</div> <!-- .post -->
		
		<!-- This div is a hack that allows us to acheive a proper two column layout -->
		<div style="clear: both"></div>
	</div> <!-- #content -->
	
</div> <!-- #container -->
<div id="push"></div>
<?php get_footer(); ?>