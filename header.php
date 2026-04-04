<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SRFS3H1TJG"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-SRFS3H1TJG');
  </script>
  <!-- End Google Analytics -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title> -->
  <title>FREEDGEコーポレートサイト</title>
  <meta name="description" content="デジタルでひろがる、自由な未来">
  <meta name="keywords" content="FREEDGE,エンジニア,IT,情報,システム,自由,本気">
  
  <!-- OGP設定 -->
  <meta property="og:title" content="FREEDGEコーポレートサイト">
  <meta property="og:description" content="デジタルでひろがる、自由な未来">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.freedge.co.jp">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/image/logo-squeare.webp">
  <meta property="og:site_name" content="FREEDGEコーポレートサイト">
  <meta property="og:locale" content="ja_JP">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="FREEDGEコーポレートサイト">
  <meta name="twitter:description" content="デジタルでひろがる、自由な未来">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/image/logo-squeare.webp">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Bebas+Neue&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-theme-url="<?php echo esc_url(get_template_directory_uri()); ?>">
<?php wp_body_open(); ?>

<header class="header">
  <div class="header__container">
    <div class="header__logo">
      <?php
      if (has_custom_logo()) {
        the_custom_logo();
      } else {
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php bloginfo('name'); ?>
        </a>
        <?php
      }
      ?>
    </div>
    
    <nav class="header__nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container' => false,
        'menu_class' => 'header__menu',
        'fallback_cb' => false
      ));
      ?>
    </nav>
    
    <button class="header__toggle" aria-label="メニュー">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>

<!-- モバイルメニュー -->
<div class="mobile-menu">
  <?php
  wp_nav_menu(array(
    'theme_location' => 'drawer-menu',
    'container' => false,
    'menu_class' => 'mobile-menu__list',
    'fallback_cb' => false,
    'walker' => new Mobile_Menu_Walker()
  ));
  ?>
</div>
