
<?php
$args = array(
    'u-hide_empty' => false
);
foreach (get_categories($args) as $cat) {
    echo '<li class="c-categoryList__item"><a href="' . get_category_link($cat) . '">' . $cat->name . '</a></li>';
}
