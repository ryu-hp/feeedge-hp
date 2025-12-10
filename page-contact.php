<?php
/**
 * Template Name: CONTACT（お問い合わせ）
 * お問い合わせページ用テンプレート
 */
get_header();
?>

<main class="main page-contact">
  <!-- ファーストビュー（下層ページ共通） -->
  <?php get_template_part('template-parts/page', 'fv'); ?>
  
  <!-- お気軽にお問い合わせください。（お問い合わせフォーム） -->
  <section class="contact-form" id="contact-form">
    <div class="contact-form__container container">
      <h2 class="contact-form__title">お気軽に<br class="only-sp">お問い合わせください</h2>
      <p class="contact-form__description">
        ご質問・ご相談などがございましたら、<br class="only-sp">下記フォームよりお気軽にご連絡ください。<br>
        内容を確認のうえ、<br class="only-sp">担当者より折り返しご連絡いたします。
      </p>
      
      <div class="contact-form__content">
        <?php
        // Contact Form 7のショートコードを使用する場合
        echo do_shortcode('[contact-form-7 id="196863d" title="お問い合わせフォーム"]');
        ?>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
