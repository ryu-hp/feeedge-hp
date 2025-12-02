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
        <p class="mission__text">
          テクノロジーの力で、社会に新しい価値を創造し、<br>
          すべてのステークホルダーに幸せと成長をもたらす。<br><br>
          私たちは、革新的なソリューションを通じて、<br>
          お客様のビジネスの成功を実現し、<br>
          持続可能な社会の発展に貢献します。
        </p>
      </div>
    </div>
  </section>
  
  <!-- VISION（理念） -->
  <section class="vision" id="vision">
    <div class="vision__container">
      <h2 class="section-title">VISION</h2>
      <p class="section-subtitle">理念</p>
      <div class="vision__content">
        <p class="vision__text">
          自由な発想と確かな技術力で、<br>
          未来を切り拓くテクノロジーカンパニーへ。<br><br>
          2030年までに、国内トップクラスの<br>
          イノベーション創出企業として認知され、<br>
          グローバル市場でも存在感を発揮する企業を目指します。
        </p>
      </div>
    </div>
  </section>
  
  <!-- VALUE（行動指針） -->
  <section class="value" id="value">
    <div class="value__container">
      <h2 class="section-title">VALUE</h2>
      <p class="section-subtitle">行動指針</p>
      <div class="value__content">
        <p class="value__text">
          <strong>1. Challenge（挑戦）</strong><br>
          常に新しいことに挑戦し、失敗を恐れず前進する。<br><br>
          
          <strong>2. Innovation（革新）</strong><br>
          既成概念にとらわれず、革新的なアイデアを生み出す。<br><br>
          
          <strong>3. Collaboration（協働）</strong><br>
          チームワークを大切にし、多様性を尊重する。<br><br>
          
          <strong>4. Quality（品質）</strong><br>
          高品質なサービス提供にこだわり、お客様の期待を超える。<br><br>
          
          <strong>5. Growth（成長）</strong><br>
          個人と組織の継続的な成長を追求する。
        </p>
      </div>
    </div>
  </section>
  
  <!-- CONTACT（お問い合わせ） -->
  <?php get_template_part('template-parts/section', 'contact'); ?>
</main>

<?php
get_footer();
