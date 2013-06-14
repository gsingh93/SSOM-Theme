<?php
/*
Template Name: Committee Members
*/
?>

<?php get_header(); ?>

<div id="container">
	<div id="content">
                <?php get_sidebar(); ?>
                <div class="post">
                    <?php $post_data = get_post(get_the_ID()); ?>
		    <div class="post_title"><?php echo $post_data->post_title; ?></div>
		    <div class="post_content">
                       <?php
		          echo apply_filters('the_content', $post_data->post_content);
   		          $members = get_post_meta($post_data->ID, 'committee-members', true);
			  
			  echo "<h3>Executive Committee Members</h3>";
			  foreach ($members as $member) {
			     display_member($member, "Executive");
			  }
			  echo "<h3>Working Committee Members</h3>";
			  foreach ($members as $member) {
			     display_member($member, "Working");
			  }
			  function display_member($member, $executive) {
			      if ($member['executive'] == $executive) {
			      	 echo "<h4>" . $member['name'] . "</h4>";
			      	 if ($member['position'] != "") {
			      	    echo "<p style='margin-bottom:0.5em;'>" . $member['position'] . "</p>";
			      	    }
			      	 echo "<p>";
			      	 if ($member['email'] != "") {
			     	    echo "Email: <a href='mailto:" . $member['email'] . "'>" . $member['email'] . "</a>" . "<br>";
			      	 }
			      	 if ($member['cell'] != "") {
			      	    echo "Cell: " . $member['cell'] . "<br>";
			      	 }
			      	 if ($member['home-phone'] != "") {
			      	    echo "Home: " . $member['home-phone'] . "<br>";
			      	 } 
			      	 if ($member['image-url'] != "") {
			      	    echo "<image src='" . $member['image-url'] . "'/><br><br>";
			      	 }
			      	 echo "</p>";
			      }
			  }
                       ?>
		    </div>
		</div> <!-- .post -->
		
		<!-- This div is a hack that allows us to acheive a proper two column layout -->
		<div style="clear: both"></div>
	</div> <!-- #content -->
	
</div> <!-- #container -->
<div id="push"></div>
<?php get_footer(); ?>
