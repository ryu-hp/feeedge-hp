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
    <div class="contact-form__container">
      <h2 class="section-title">お気軽にお問い合わせください。</h2>
      
      <div class="contact-form__content">
        <?php
        // Contact Form 7のショートコードを使用する場合
        // echo do_shortcode('[contact-form-7 id="1" title="お問い合わせフォーム"]');
        ?>
        
        <!-- テスト用フォーム -->
        <form class="contact-form__form" method="post" action="">
          <div class="form-group">
            <label for="name">お名前 <span class="required">必須</span></label>
            <input type="text" id="name" name="name" required>
          </div>
          
          <div class="form-group">
            <label for="email">メールアドレス <span class="required">必須</span></label>
            <input type="email" id="email" name="email" required>
          </div>
          
          <div class="form-group">
            <label for="message">お問い合わせ内容 <span class="required">必須</span></label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          
          <div class="form-submit">
            <button type="submit" class="button">送信する</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
