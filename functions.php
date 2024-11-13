<?php

////////////////////////////////////////////////////////
// WP/PHP Document Ver2.0 
////////////////////////////////////////////////////////

////////////////////////////////////// サイト設定 site setting ///////////////

require get_template_directory() . '/app/common.php';

////////////////////////////////////// Pre Get Post ///////////////

require get_template_directory() . '/app/post_function.php';

////////////////////////////////////// カスタム投稿 custom post ///////////////

require get_template_directory() . '/app/register_custom_post.php';

////////////////////////////////////// 権限 authority ///////////////

require get_template_directory() . '/app/register_auth.php';


/*
[注意 2019.10.9]
・「SiteGuard WP Plugin」を使うと「WP Super Cache」とぶつかる。When I use "SiteGuard WP Plugin", it conflicts with "WP Super Cache".
・「Custom Post Type UI」を利用すると「Category Order and Taxonomy Terms Order」とぶつかる。When "Custom Post Type UI" is used, it conflicts with "Category Order and Taxonomy Terms Order".
*/