<!-- 下層ページ共通ファーストビュー -->
<section class="page-fv">
  <div class="page-fv__container">
    <div class="page-fv__content">
      <h1 class="page-fv__title">
        <?php
        if (is_page('philosophy')) {
          echo 'philosophy';
        } elseif (is_page('company')) {
          echo 'company';
        } elseif (is_page('services')) {
          echo 'services';
        } elseif (is_page('contact')) {
          echo 'contact';
        } else {
          the_title();
        }
        ?>
      </h1>
      <p class="page-fv__subtitle">
        <?php
        if (is_page('philosophy')) {
          echo '企業理念';
        } elseif (is_page('company')) {
          echo '会社概要';
        } elseif (is_page('services')) {
          echo '事業内容';
        } elseif (is_page('contact')) {
          echo 'お問い合わせ';
        }
        ?>
      </p>
    </div>
  </div>
  <div class="page-fv__image">
    <img src="<?php echo get_template_directory_uri(); ?>/image/shapes-01.webp" alt="背景装飾画像">
  </div>
</section>
