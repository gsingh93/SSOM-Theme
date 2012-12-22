<?php get_header(); ?>

<div id="container">
	<?php get_sidebar(); ?>
	<div id="content">
		<?php
			$page_id = get_the_ID();
			$page_data = get_page($page_id);
		?>
                <div class="post_title"><?php echo $page_data->post_title; ?></div>
		<div class="post_content">
		 <?php echo $page_data->post_content; ?>
		</div>
	</div> <!-- #content -->
	
</div> <!-- #container -->

<?php get_footer(); ?>