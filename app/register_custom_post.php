<?php
/**
 * カスタム投稿
 * 今後は custom post ui を使っていく予定
 * custom post ui
 * I plan to use custom post ui from now on.
**/
  // function create_post_type() {

  //   /**
  //    * カスタム投稿タイプ
  //    * custom post type
  //    * 
  //    */

  //   $Supports = [
  //     'title',
  //     'editor',
  //     'thumbnail',
  //     'custom-fields',
  //     'author',
  //   ];

  //   register_post_type( 'news',
  //       array(
  //           'label' => 'ニュース',
  //           'labels' => array(
  //             'all_items'     => 'ニュース'
  //           ),
  //           'public' => true,
  //           'has_archive' => true,
  //           'menu_position' => 5,
  //           'supports' => $Supports,
  //           'has_category' => true,
  //           'show_in_rest' => true,
  //           'rewrite' => array(
  //             'with_front' => false, 
  //           ),
  //       )
  //   );

  //   // register_taxonomy(
  //   //   'blog_category', //カテゴリー名（任意）// category name (optional)
  //   //   'blog', //カスタム投稿名 // custom post name
  //   //   array(
  //   //     'hierarchical' => true, //カテゴリータイプの指定 // specify category type
  //   //     'update_count_callback' => '_update_post_term_count',
  //   //     //ダッシュボードに表示させる名前 // name to display on dashboard
  //   //     'label' => 'カテゴリー',
  //   //     'public' => true,
  //   //     'show_ui' => true,
  //   //     'rewrite' => array(
  //   //       'slug' => 'type',
  //   //       'with_front' => true, 
  //   //       // 'hierarchical' => true, // 階層化したURL // hierarchical URL
  //   //     ),
  //   //     'show_in_rest' => true,
  //   //   )
  //   // );
    
  // }
  
// add_action( 'init', 'create_post_type' );