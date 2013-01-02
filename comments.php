<?php
function my_comment_layout($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);

  if ( 'div' == $args['style'] ) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }
  ?>
  <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
       <?php if ( 'div' != $args['style'] ) : ?>
       <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
       <?php endif; ?>
       <div class="comment-author vcard">
       <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
       <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
       </div>
       <?php if ($comment->comment_approved == '0') : ?>
       <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
       <br />
       <?php endif; ?>

       <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
       <?php
       /* translators: 1: date, 2: time */
       printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
  ?>
  </div>

      <?php comment_text() ?>

      <div class="reply">
      <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
      <?php if ( 'div' != $args['style'] ) : ?>
      </div>
      <?php endif; ?>
      <?php
}
?>

<h2><?php comments_number(); ?></h2>
<?php      wp_list_comments(array('style' => 'div', 'callback' => 'my_comment_layout'));
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
