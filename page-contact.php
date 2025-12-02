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
        
        <!-- お問い合わせフォーム -->
        <form class="contact-form__form" method="post" action="">
          <div class="form-group">
            <label for="company">会社名</label>
            <input type="text" id="company" name="company">
          </div>
          
          <div class="form-group">
            <label for="name">お名前 <span class="required">必須</span></label>
            <input type="text" id="name" name="name" required placeholder="山田 太郎">
          </div>
          
          <div class="form-group">
            <label for="email">メールアドレス <span class="required">必須</span></label>
            <input type="email" id="email" name="email" required placeholder="example@freedge.co.jp">
          </div>
          
          <div class="form-group">
            <label for="phone">電話番号</label>
            <input type="tel" id="phone" name="phone" placeholder="03-1234-5678">
          </div>
          
          <div class="form-group">
            <label for="subject">お問い合わせ件名 <span class="required">必須</span></label>
            <input type="text" id="subject" name="subject" required placeholder="サービスに関するお問い合わせ">
          </div>
          
          <div class="form-group">
            <label for="message">お問い合わせ内容 <span class="required">必須</span></label>
            <textarea id="message" name="message" rows="8" required placeholder="お問い合わせ内容をご記入ください"></textarea>
          </div>
          
          <div class="form-group">
            <label>
              <input type="checkbox" name="privacy" required style="width: auto; display: inline-block; margin-right: 8px;">
              <a href="<?php echo esc_url(home_url('/privacy')); ?>" target="_blank">プライバシーポリシー</a>に同意する
            </label>
          </div>
          
          <div class="form-submit">
            <button type="submit" class="button">送信する</button>
          </div>
        </form>
        
        <div class="contact-form__info" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #e0e0e0;">
          <h3 style="font-size: 20px; margin-bottom: 20px; text-align: center;">お電話でのお問い合わせ</h3>
          <p style="text-align: center; font-size: 24px; font-weight: bold; color: #025CB4; margin-bottom: 8px;">
            03-1234-5678
          </p>
          <p style="text-align: center; font-size: 14px; color: #666;">
            受付時間：平日 9:00〜18:00（土日祝日を除く）
          </p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
