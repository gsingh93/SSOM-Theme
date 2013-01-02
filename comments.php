<?php 
      comments_number();
      wp_list_comments(array('style' => 'div'));
?>

<div id="comment-form">
   <?php 
   $args = array(
		 'id_form' => 'commentform',
		 'id_submit' => 'submit',
		 'title_reply' => 'Post a comment',
		 'title_reply_to' => 'Post a comment',
		 'comment_notes_before' => '',
		 'comment_field' => get_comment_html());

    add_filter('comment_form_default_fields', 'my_comment_form_default_fields');

    comment_form($args);

    function my_comment_form_default_fields( $fields ) {
    	     $fields['url'] = '';
	     $fields['email'] = '';
	     $fields['author'] = str_replace('*', '', $fields['author']);
	     return $fields;
    }

function get_comment_html() {
   return "
   <p class='comment-form-comment'>
     <label for='comment'>Comment</label>
     <textarea id='comment' name='comment' cols='100' rows='8' aria-required='true'></textarea>
   </p>";
}

function get_author_html() {
   return "
   <p class='comment-form-author'>
     <label for='author'>Name</label>
     <input id='author' name='author' type='text' value='" . esc_attr($commenter['comment_author']) . "' size='30'" . $aria_req . " />
   </p>";
}
?>
</div>
