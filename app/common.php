<?php

// テーマ機能
// theme function
add_action('after_setup_theme', function () {
    // タイトル表示
    // Title display
    add_theme_support('title-tag');
    // アイキャッチを利用する
    // Use eye-catching
    add_theme_support('post-thumbnails');
    // RSSフィード
    // RSS feeds
    add_theme_support('automatic-feed-links');
    // ビジュアルエディター
    // Visual editor
    add_editor_style('assets/css/editor-style.css');
    add_theme_support('editor-styles');
});


// 不要 head
// generatorを非表示にする
// Unnecessary head
// hide the generator
remove_action('wp_head', 'wp_generator');
// EditURIを非表示にする
// hide the EditURI
remove_action('wp_head', 'rsd_link');
// wlwmanifestを非表示にする
// hide wlwmanifest
remove_action('wp_head', 'wlwmanifest_link');
// 短縮URLを非表示にする
// hide shortened url
remove_action('wp_head', 'wp_shortlink_wp_head');
// コメントフィードを非表示にする
// hide the comment feed
remove_action('wp_head', 'feed_links_extra', 3);


// CSS・JSファイル読み込み
// load css and js files
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');

    $css = '/assets/css/style.css';
    wp_enqueue_style('theme-style', get_template_directory_uri() . $css, array(), date_i18n('YmdHis', filemtime(dirname(__DIR__) . $css)));

    wp_enqueue_script('lazysizes', 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js', array('jquery'), '5.2.0', true);
    wp_enqueue_script('ofi', 'https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js', array('jquery'), '3.2.4', true);

    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), 8.0, true);

    $effectjs = '/assets/js/min/effect.min.js';
    wp_enqueue_script('effect', get_template_directory_uri() . $effectjs, array('jquery'), date_i18n('YmdHis', filemtime(dirname(__DIR__) . $effectjs)), true);

    if(is_front_page()){
        wp_enqueue_script('loading', get_template_directory_uri() . '/assets/js/min/loading.min.js', array('jquery'), '1.1', true);
    }
    wp_enqueue_script('scroll', get_template_directory_uri() . '/assets/js/min/scrollEffect.min.js', array('jquery'), '1.1', false);
    wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array('jquery'), '1.1', false);
});


// deferを追加
// Add defer
add_filter('script_loader_tag', function ($tag, $handle) {
    if (
        'ofi' === $handle
        || 'effect' === $handle
        || 'loading' === $handle
        || 'scroll' === $handle
        || 'swiper' === $handle
    ) {
        return str_replace("'></script>", "' defer></script>", $tag);
    }
    return $tag;
}, 10, 2);

// qualityは100%
// quality is 100%.
add_filter('jpeg_quality', function ($arg) {
    return 100;
});

// SVGも許可する
// Allow SVG as well
add_filter('upload_mimes', function ($arg) {
    $arg['svg'] = 'image/svg';
    return $arg;
});


// 文末文字を変更する
// change the end-of-sentence character
add_filter('excerpt_more', function ($arg) {
    return '...';
});


// 抜粋の文字数
// Number of characters in excerpt
add_filter('excerpt_length', function ($arg) {
    return 80;
}, 999);

// カテゴリの親子階層は崩さない
// parent-child hierarchy of categories is not broken
add_action('wp_terms_checklist_args', function ($args) {
    $args['checked_ontop'] = false;
    return $args;
});


// コンテンツ幅
// width of content
if (!isset($content_width)) {
    $content_width = 1166;
}

// 投稿のNEWチェック、NEWが付く時にTRUE
// check for new posts, set to true when new is added
if (!function_exists('eqn5_thema_is_new_post')) {
    function eqn5_thema_is_new_post($date)
    {
        $today = new DateTime(date('Y-m-d'));
        $date  = new DateTime($date);
        $interval = $today->diff($date);
        if ($interval->format('%r%a') <= -7) { // 7日以内
            return false;
        } else {
            return true;
        }
    }
}

/**
 * 管理画面カスタマイズ
 * editor権限のアカウントを制御
 * Administration customization
 * Account control of editor privileges.
 */
// function remove_menus(){
//     if( current_user_can( 'editor' ) ){
//         remove_menu_page( 'index.php' ); //ダッシュボード // dashboard
//         remove_menu_page( 'edit-comments.php' ); //コメントメニュー // comment menu
//         remove_menu_page( 'plugins.php' ); //プラグインメニュー // plugin menu
//         remove_menu_page( 'tools.php' ); //ツールメニュー // tools menu
//         remove_menu_page( 'options-general.php' ); //設定メニュー // settings menu
//     }
// }
// add_action( 'admin_menu', 'remove_menus' );


// 管理画面スタイル適用 // apply admin style
// function admin_style(){
//   wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/assets/css/admin_style.css' );
// }
// add_action( 'admin_enqueue_scripts', 'admin_style', 999, 2 );

// loginスタイル // login style
// function login_css() {
//   echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/assets/css/login.css">';
// }
// add_action('login_head', 'login_css');


// 定数利用したい場合 // If you want to use constants
//add_action('wp', function() {
//    if (!defined('EQN5_ANIMATION')) define('EQN5_ANIMATION', $bool);
//});


// Yoast SEO デフォルト対応 // Yoast SEO default support
//if (eqn5_thema_is_plugin_active('wordpress-seo/wp-seo.php')) {
//    // og:description
//    add_filter('wpseo_opengraph_desc', function($desc) {
//        if (empty($desc)) {
//            $desc = '';
//        }
//        return $desc;
//    });
//}

// おまじない // Spell（?author=1）
//add_filter('parse_query', function($query) {
//    if (!is_admin() && is_author()) {
//        $query->set_404();
//        status_header(404);
//        nocache_headers();
//    }
//});

//固定ページで抜粋を使えるようにする
add_post_type_support('page', 'excerpt');
