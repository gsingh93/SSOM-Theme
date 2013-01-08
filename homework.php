<?php
/*
Template Name: Homework List
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
                        $grade = get_post_meta(get_the_ID(), 'grade', true);
		        $posts = get_posts('post_type=homework&meta_key=grade&meta_value=' . $grade);
?>
<div class="post_content">
<?php echo $post_data->post_content; ?>
<table class="rounded-corners blue-table" id="langar">
<thead>
<tr>
<td>Date</td>
<td>Assignment</td>
</tr>
</thead>
<?php
foreach ($posts as $post) {
  // Date format is yyyyddmm
  $date = get_post_meta($post->ID, 'assign_date', true);
  $date = substr($date, 4);
  $date = substr($date, 0, 2) . '/' . substr($date, 2);

  echo "<tr>";
  echo "<td>" . $date . "</td>";
  echo "<td><a href='" . get_permalink($post->ID) . "'>Visit Assignment</a></td>";
  echo "</tr>";
}
                    ?>
</table>
</div>
		</div> <!-- .post -->
		
		<!-- This div is a hack that allows us to acheive a proper two column layout -->
		<div style="clear: both"></div>
	</div> <!-- #content -->
	
</div> <!-- #container -->
<div id="push"></div>
<?php get_footer(); ?>