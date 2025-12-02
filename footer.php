<footer class="footer">
  <div class="footer__container">
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
