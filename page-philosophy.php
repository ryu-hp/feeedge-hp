<?php
/**
 * Template Name: PHILOSOPHY（企業理念）
 * 企業理念ページ用テンプレート
 */
get_header();
?>

<main class="main page-philosophy">
  <!-- ファーストビュー（下層ページ共通） -->
  <?php get_template_part('template-parts/page', 'fv'); ?>
  
  <!-- MISSION（ミッション） -->
  <section class="mission" id="mission">
    <div class="mission__container">
      <h2 class="section-title">MISSION</h2>
      <p class="section-subtitle">ミッション</p>
      <div class="mission__content">
        <p class="mission__text">テスト内容です。ミッションのテキストがここに入ります。</p>
      </div>
    </div>
  </section>
  
  <!-- VISION（理念） -->
  <section class="vision" id="vision">
    <div class="vision__container">
      <h2 class="section-title">VISION</h2>
      <p class="section-subtitle">理念</p>
      <div class="vision__content">
        <p class="vision__text">テスト内容です。理念のテキストがここに入ります。</p>
      </div>
    </div>
  </section>
  
  <!-- VALUE（行動指針） -->
  <section class="value" id="value">
    <div class="value__container">
      <h2 class="section-title">VALUE</h2>
      <p class="section-subtitle">行動指針</p>
      <div class="value__content">
        <p class="value__text">テスト内容です。行動指針のテキストがここに入ります。</p>
      </div>
    </div>
  </section>
  
  <!-- CONTACT（お問い合わせ） -->
  <?php get_template_part('template-parts/section', 'contact'); ?>
</main>

<?php
get_footer();
