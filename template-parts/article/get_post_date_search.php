<?php
$args = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'option', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => 1,
	'echo'            => 1,
	'order'           => 'DESC',
	'post_type'     => 'post'
);
wp_get_archives( $args );
?>
<select name="article-archive" onChange='document.location.href=this.options[this.selectedIndex].value;'> 
  <option value="">月を選択</option> 
  <?php wp_get_archives( $args ); ?>
</select>