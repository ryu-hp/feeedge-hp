<?php
/**
 * FREEDGE WordPress Theme Functions
 * テーマの基本設定とカスタマイズ機能
 */

// テーマの基本設定
function freedge_setup() {
  // タイトルタグのサポート
  add_theme_support('title-tag');
  
  // アイキャッチ画像のサポート
  add_theme_support('post-thumbnails');
  
  // 自動フィード リンク
  add_theme_support('automatic-feed-links');
  
  // HTML5サポート
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  ));
  
  // ナビゲーションメニューの登録
  register_nav_menus(array(
    'header-menu' => 'ヘッダーメニュー',
    'footer-menu' => 'フッターメニュー'
  ));
}
add_action('after_setup_theme', 'freedge_setup');

// CSS・JavaScriptの読み込み
function freedge_scripts() {
  $css_version = date('YmdHis'); // キャッシュクリア用
  $js_version = wp_get_theme()->get('Version');
  
  // メインスタイルシート
  wp_enqueue_style(
    'freedge-style',
    get_template_directory_uri() . '/css/style.css',
    array(),
    $css_version
  );
  
  // JavaScriptファイル
  wp_enqueue_script(
    'freedge-script',
    get_template_directory_uri() . '/js/script.js',
    array(),
    $js_version,
    true
  );
}
add_action('wp_enqueue_scripts', 'freedge_scripts');

// Contact Form 7 の自動 <p><br> を削除
add_filter('wpcf7_autop_or_not', '__return_false');

// ウィジェットエリアの登録
function freedge_widgets_init() {
  register_sidebar(array(
    'name'          => 'サイドバー',
    'id'            => 'sidebar-1',
    'description'   => 'ウィジェットエリア',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'freedge_widgets_init');
