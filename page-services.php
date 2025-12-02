<?php
/**
 * Template Name: SERVICES（事業内容）
 * 事業内容ページ用テンプレート
 */
get_header();
?>

<main class="main page-services">
  <!-- ファーストビュー（下層ページ共通） -->
  <?php get_template_part('template-parts/page', 'fv'); ?>
  
  <!-- FREEDGEの3つの事業領域 -->
  <section class="services-intro" id="services-intro">
    <div class="services-intro__container">
      <h2 class="section-title">FREEDGEの3つの事業領域</h2>
      <div class="services-intro__content">
        <p class="services-intro__text">テスト内容です。3つの事業領域の説明がここに入ります。</p>
      </div>
    </div>
  </section>
  
  <!-- サービスごとの説明（タブで3つ出し分ける） -->
  <section class="services-detail" id="services-detail">
    <div class="services-detail__container">
      <div class="services-detail__tabs">
        <button class="services-detail__tab active" data-tab="service1">サービス1</button>
        <button class="services-detail__tab" data-tab="service2">サービス2</button>
        <button class="services-detail__tab" data-tab="service3">サービス3</button>
      </div>
      
      <div class="services-detail__content">
        <div class="services-detail__panel active" id="service1">
          <h3>サービス1</h3>
          <p>テスト内容です。サービス1の説明がここに入ります。</p>
        </div>
        <div class="services-detail__panel" id="service2">
          <h3>サービス2</h3>
          <p>テスト内容です。サービス2の説明がここに入ります。</p>
        </div>
        <div class="services-detail__panel" id="service3">
          <h3>サービス3</h3>
          <p>テスト内容です。サービス3の説明がここに入ります。</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- CONTACT（お問い合わせ） -->
  <?php get_template_part('template-parts/section', 'contact'); ?>
</main>

<?php
get_footer();
