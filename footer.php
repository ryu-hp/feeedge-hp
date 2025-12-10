<footer class="footer">
  <div class="footer__container container">
    <?php if (!is_page('contact')) : ?>
    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer__contact">
      <div class="footer__contact-columns">
        <div class="footer__contact-text">
          <div class="section-title-contents section-title-contents--contact">
            <h2 class="section-title">contact</h2>
            <p class="section-subtitle">お問い合わせ</p>
          </div>
          <p class="footer__contact-description">
            ソリューションやサービスに関する<br class="only-sp">ご質問やご相談<br>
            株式会社FREEDGEについて<br class="only-sp">ご質問やお問い合わせはこちらから
          </p>
        </div>
        <div class="footer__contact-btn">
          <svg class="footer__contact-btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
            <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
          </svg>
        </div>
      </div>
      <div class="footer__contact-image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/shape-06.webp" alt="お問い合わせ">
      </div>
    </a>
    <?php endif; ?>
    <div class="footer__content">
      <div class="footer__columns">
        <div class="footer__company-info">
          <div class="footer__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/image/logo-white.webp" alt="FREEDGE">
            </a>
          </div>
          <div class="footer__address">
            <p>〒111-0053<br>東京都台東区浅草橋1-1-11 戸谷第3ビル6階</p>
          </div>
          <div class="footer__copy"><p>&copy; FREEDGE Inc. All rights reserved.</p></div>
        </div>
      
        <nav class="footer__nav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'footer__menu',
            'fallback_cb' => false,
            'depth' => 2, // 第2階層まで表示
            'walker' => new Footer_Walker_Nav_Menu() // カスタムウォーカー
          ));
          ?>
        </nav>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
