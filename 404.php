<?php get_header(); ?>

<div id="container">
	<div id="content">
                <?php get_sidebar(); ?>
                <div class="post">
                    <div class="post_title">Page Not Found</div>
		    <div class="post_content">
                        <p>Sorry, we couldn't find the page you requested.</p>
		    </div>
		</div> <!-- .post -->
		
		<!-- This div is a hack that allows us to acheive a proper two column layout -->
		<div style="clear: both"></div>
	</div> <!-- #content -->
	
</div> <!-- #container -->

<?php get_footer(); ?>