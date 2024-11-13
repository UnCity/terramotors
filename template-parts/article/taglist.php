
<?php
$args = array(
    'hide_empty' => false
);
foreach (get_tags($args) as $tag) {
    echo '<li class="c-articleTag__item"><a href="' . get_tag_link($tag) . '">' . $tag->name . '</a></li>';
}
