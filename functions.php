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
  
  // カスタムロゴのサポート
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
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

// ナビゲーションメニューにカスタムクラスを追加
function freedge_nav_menu_css_class($classes, $item, $args, $depth) {
  // 現在のサイトのドメインを取得
  $current_domain = parse_url(home_url(), PHP_URL_HOST);
  
  // メニューアイテムのURLを取得
  $item_url = $item->url;
  $item_domain = parse_url($item_url, PHP_URL_HOST);
  
  // 外部リンク（異なるドメイン）の場合
  if ($item_domain && $item_domain !== $current_domain) {
    $classes[] = 'external-link';
  }
  
  // /contact/ ページの場合
  if (strpos($item_url, '/contact') !== false) {
    $classes[] = 'contact-link';
  }
  
  return $classes;
}
add_filter('nav_menu_css_class', 'freedge_nav_menu_css_class', 10, 4);

// ナビゲーションメニューのリンクに外部リンクアイコンを追加
function freedge_nav_menu_link_attributes($atts, $item, $args, $depth) {
  // 現在のサイトのドメインを取得
  $current_domain = parse_url(home_url(), PHP_URL_HOST);
  
  // メニューアイテムのURLを取得
  $item_url = $item->url;
  $item_domain = parse_url($item_url, PHP_URL_HOST);
  
  // 外部リンク（異なるドメイン）の場合、新しいタブで開く
  if ($item_domain && $item_domain !== $current_domain) {
    $atts['target'] = '_blank';
    $atts['rel'] = 'noopener noreferrer';
  }
  
  return $atts;
}
add_filter('nav_menu_link_attributes', 'freedge_nav_menu_link_attributes', 10, 4);
