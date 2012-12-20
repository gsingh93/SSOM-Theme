<?php get_header(); ?>

<div id="container">
	<?php get_sidebar(); ?>
	<div id="content">
		<?php
			$page_id = get_the_ID();
			$page_data = get_page($page_id);
		?>
                <div class="title"><?php echo $page_data->post_title; ?></div>
                <?php echo $page_data->post_content; ?>
	</div> <!-- #content -->
	
	<div id="primary" class="widget-area">
	</div> <!-- #primary .widget-area -->
	
	<div id="secondary" class="widget-area">
	</div> <!-- #secondary .widget-area -->
</div> <!-- #container -->

<?php get_footer(); ?>