<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
  <div class="header__container">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
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
