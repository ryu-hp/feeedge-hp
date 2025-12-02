<?php
/**
 * Template Name: COMPANY（会社概要）
 * 会社概要ページ用テンプレート
 */
get_header();
?>

<main class="main page-company">
  <!-- ファーストビュー（下層ページ共通） -->
  <?php get_template_part('template-parts/page', 'fv'); ?>
  
  <!-- MESSAGE（代表メッセージ） -->
  <section class="message" id="message">
    <div class="message__container">
      <h2 class="section-title">MESSAGE</h2>
      <p class="section-subtitle">代表メッセージ</p>
      <div class="message__content">
        <p class="message__text">テスト内容です。代表メッセージのテキストがここに入ります。</p>
      </div>
    </div>
  </section>
  
  <!-- COMPANY（会社概要） -->
  <section class="company" id="company">
    <div class="company__container">
      <h2 class="section-title">COMPANY</h2>
      <p class="section-subtitle">会社概要</p>
      <div class="company__content">
        <table class="company__table">
          <tr>
            <th>会社名</th>
            <td>テスト株式会社</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>テスト住所</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2020年1月1日</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  
  <!-- CONTACT（お問い合わせ） -->
  <?php get_template_part('template-parts/section', 'contact'); ?>
</main>

<?php
get_footer();
