<?php
function lm_feedge_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'lm_feedge_setup');

function lm_feedge_scripts() {
  // CSSは常にキャッシュクリア、JSはテーマバージョン使用
  $css_version = date('YmdHis');
  $js_version = wp_get_theme()->get('Version');
  
  // Swiperを確実に読み込み
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);
  
  // カスタムCSS/JS（キャッシュクリア用パラメータ付き）
  $cache_param = '?v=' . date('YmdHis');
  wp_enqueue_style('lm-feedge-style', get_template_directory_uri() . '/css/style.css' . $cache_param, array(), $css_version);
  wp_enqueue_script('lm-feedge-script', get_template_directory_uri() . '/js/script.js' . $cache_param, array('swiper'), $js_version, true);
  
  // SpeakerDeck埋め込みスクリプト
  wp_enqueue_script('speakerdeck-embed', 'https://speakerdeck.com/assets/embed.js', array(), null, true);
  
  // デバッグ情報をブラウザに渡す
  wp_localize_script('lm-feedge-script', 'themeData', array(
    'debug' => WP_DEBUG,
    'templateUrl' => get_template_directory_uri(),
    'ajaxUrl' => admin_url('admin-ajax.php'),
  ));
}
add_action('wp_enqueue_scripts', 'lm_feedge_scripts');

// Contact Form 7 の自動 <p><br> を削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
}

// 画像スライドをドラック移動できるようにする
function register_image_slide_post_type() {
  register_post_type('image_slide', [
    'labels' => [
      'name' => 'スライド画像',
      'singular_name' => 'スライド画像',
    ],
    'public' => true,
    'menu_position' => 5,
    'supports' => ['title', 'thumbnail', 'page-attributes'], // ← ココ重要
    'show_in_rest' => true,
  ]);
}
add_action('init', 'register_image_slide_post_type');

// ACFで作成されたカスタム投稿タイプに順序フィールド（page-attributes）サポートを追加
function add_custom_post_types_menu_order_support() {
  // FAQカスタム投稿タイプに順序フィールドを追加
  add_post_type_support('faq', 'page-attributes');
  // JOBSカスタム投稿タイプに順序フィールドを追加
  add_post_type_support('jobs', 'page-attributes');
  // SERVICESカスタム投稿タイプに順序フィールドを追加
  add_post_type_support('our_services', 'page-attributes');
  // WORK STYLEカスタム投稿タイプに順序フィールドを追加
  add_post_type_support('work_style', 'page-attributes');
  // INTERVIEWカスタム投稿タイプに順序フィールドを追加
  add_post_type_support('interview', 'page-attributes');
  // COMPANY NUMBERSカスタム投稿タイプに順序フィールドを追加（既に使用中だが念のため）
  add_post_type_support('company_numbers', 'page-attributes');
}
add_action('init', 'add_custom_post_types_menu_order_support');

// メニュー機能を有効化
add_action('after_setup_theme', function() {
  register_nav_menus([
    'header-menu' => 'ヘッダーメニュー',
    'footer-menu' => 'フッターメニュー'
  ]);
});

// ウィジェット機能を有効化
add_action('widgets_init', function() {
  register_sidebar([
    'name'          => 'サイドバー',
    'id'            => 'sidebar-1',
    'description'   => 'メインサイドバーに表示されます。',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ]);
});
