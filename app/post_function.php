<?php

/**
 * 2022/04/10
 * 下記記述を使う&YoastSEOを使うと通常投稿一覧がnoindexになるので
 * WP設定＞表示設定から投稿ページを指定の上home.phpを作成して対応
 * 
 * If you use the following description & YoastSEO, the normal post list will be noindexed.
 * Create home.php file by specifying the post page from WP Settings > Display Settings.
 */
// 投稿アーカイブを有効にする // enable post archives
// add_filter('register_post_type_args', function ($args, $post_type) {
//   if ('post' == $post_type) {
//       $labels = array(
//           'name'               => '新着情報',
//           'singular_name'      => '新着情報',
//           'menu_name'          => '新着情報',
//       );
//       $args['rewrite']     = true;
//       $args['labels']      = $labels;
//       $args['has_archive'] = 'info';
//   }
//   return $args;
// }, 10, 2);

// pre_get_posts
//add_action('pre_get_posts', function ($query) {
//
//    // 管理画面は通さない // do not pass through the admin panel
//    if (is_admin() || !$query->is_main_query()) {
//        return $query;
//    }
//
//    return $query;
//});

//カテゴリー タグ無効化 // disable category tags
// function my_unregister_taxonomies()
// {
//     global $wp_taxonomies;
 
//     /*
//      * 投稿機能から「カテゴリー」を削除
//      * Remove "category" from post function
//      */
//     if (!empty($wp_taxonomies['category']->object_type)) {
//         foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
//             if ($object_type == 'post') {
//                 unset($wp_taxonomies['category']->object_type[$i]);
//             }
//         }
//     }
 
//     /*
//      * 投稿機能から「タグ」を削除
//      * Remove "tags" from the post function
//      */
//     if (!empty($wp_taxonomies['post_tag']->object_type)) {
//         foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
//             if ($object_type == 'post') {
//                 unset($wp_taxonomies['post_tag']->object_type[$i]);
//             }
//         }
//     }
 
//     return true;
// }
 
// add_action('init', 'my_unregister_taxonomies');

// // 表示数変更 // change number of posts displayed
// add_action( 'pre_get_posts', 'my_custom_query_vars' );
// function my_custom_query_vars( $query ) {
// 	/* @var $query WP_Query */
// 	if ( !is_admin() && $query->is_main_query()) {
// 		if ( is_post_type_archive('product') || is_tax('producttype') ) {
// 			$query->set( 'posts_per_page' , 50 );//表示したい数 // the number you want to display
// 		}
// 	}
// 	return $query;
// }
