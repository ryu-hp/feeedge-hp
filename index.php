<?php
/**
 * トップページテンプレート
 */
get_header();
?>

<main class="main">
  <!-- ファーストビュー -->
  <?php get_template_part('template-parts/section', 'fv'); ?>
  
  <!-- PHILOSOPHY（企業理念） -->
  <?php get_template_part('template-parts/section', 'philosophy'); ?>
  
  <!-- SERVICES（事業内容） -->
  <?php get_template_part('template-parts/section', 'services'); ?>
  
  <!-- RECRUIT（採用情報） -->
  <?php get_template_part('template-parts/section', 'recruit'); ?>
  
</main>

<?php
get_footer();
