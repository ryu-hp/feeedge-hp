<footer class="footer">
  <div class="footer__container container">
    <?php if (!is_page('contact')) : ?>
    <div class="footer__contact">
      <div class="footer__contact-columns">
        <div class="footer__contact-text">
          <div class="section-title-contents section-title-contents--recruit">
            <h2 class="section-title">contact</h2>
            <p class="section-subtitle">お問い合わせ</p>
          </div>
          <p class="footer__contact-description">
            ソリューションやサービスに関するご質問やご相談<br>
            株式会社FREEDGEについてご質問やお問い合わせはこちらから
          </p>
        </div>
        <div class="footer__contact-btn">
          <p class="button"></p>
        </div>
      </div>
      <div class="footer__contact-image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/shape-06.webp" alt="オフィスで働く社員の写真">
      </div>
    </div>
    <?php endif; ?>
    <div class="footer__content">
      <div class="footer__logo">
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
      
      <nav class="footer__nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container' => false,
          'menu_class' => 'footer__menu',
          'fallback_cb' => false
        ));
        ?>
      </nav>
    </div>
    
    <div class="footer__copy">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
