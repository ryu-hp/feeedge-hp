<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
