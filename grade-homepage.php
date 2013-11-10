<?php
/*
Template Name: Grade Homepage
*/
?>

<?php get_header(); ?>

<div id="container">
	<div id="content">
                <?php get_sidebar(); ?>
                <div class="post">
                    <?php $post_data = get_post(get_the_ID()); ?>
		    <div class="post_title"><?php echo $post_data->post_title; ?></div>
		    <?php
		        $id = $wp_query->post->ID;
			$teachers = get_post_meta($id, 'teachers', true);
                        $grade = get_post_meta($id, 'grade', true);
			$startDate = get_post_meta($id, 'school_year_start', true);
			$endDate = get_post_meta($id, 'school_year_end', true);
		        $posts = get_posts('posts_per_page=-1&post_type=homework&meta_key=grade&meta_value=' . $grade); 			
			$posts_dates = array();
			foreach ($posts as $post) {
			    $date = get_post_meta($post->ID, 'assign_date', true);
			    if ($date > $startDate && $date < $endDate) {
			       $posts_dates[$date] = $post;
			    }
			}
			krsort($posts_dates);
		    ?>
		    <div class="post_content">
		    <div id="teachers">
		      <?php foreach($teachers as $teacher): ?>
		      <div class="teacher">
		      <img width="150px" height="200px" src="<?php echo $teacher["picture"] ?>">
		      <p>
		      <?php echo $teacher["name"];?><br>
		      <?php
			if ($teacher["email"] != "") {
			   echo "<a href='mailto:" . $teacher['email'] . "'>" . $teacher['email'] . "</a>";
			   echo "<br>";
			}
		      	if ($teacher["phone-number"] != "") {
			   echo $teacher["phone-number"];
			   echo "<br>";
			}
			echo "</div>";
		 	endforeach;
		      ?>
		   </div>
		      <?php
			echo apply_filters('the_content', $post_data->post_content);
		      	if (!empty($posts_dates)):
		      ?>
		      <h2>Homework</h2>
		      <table class="rounded-corners blue-table two-column">
			<thead>
			  <tr>
			    <td>Date</td>
			    <td>Assignment</td>
			  </tr>
			</thead>
			<?php
			   foreach ($posts_dates as $date=>$post) {
			   // Date format is yyyyddmm
			$date = substr($date, 4);
			$date = substr($date, 0, 2) . '/' . substr($date, 2);
			
			echo "<tr>";
			  echo "<td>" . $date . "</td>";
			  echo "<td><a href='" . get_permalink($post->ID) . "'>View Assignment</a></td>";
			  echo "</tr>";
			}
			?>
		      </table>
		      <?php endif; ?>
		    </div>
		    <?php echo get_post_meta($id, 'homework_below', true); ?>
		</div> <!-- .post -->
		
		<!-- This div is a hack that allows us to acheive a proper two column layout -->
		<div style="clear: both"></div>
	</div> <!-- #content -->
	
</div> <!-- #container -->
<div id="push"></div>
<?php get_footer(); ?>
