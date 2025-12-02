<!-- 下層ページ共通ファーストビュー -->
<section class="page-fv">
  <div class="page-fv__container">
    <div class="page-fv__content">
      <h1 class="page-fv__title">
        <?php
        if (is_page('philosophy')) {
          echo 'PHILOSOPHY';
        } elseif (is_page('company')) {
          echo 'COMPANY';
        } elseif (is_page('services')) {
          echo 'SERVICES';
        } elseif (is_page('contact')) {
          echo 'CONTACT';
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
</section>
