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
      <div class="section-title-contents section-title-contents--services-intro">
        <h2 class="section-title">FREEDGEの3つの事業領域</h2>
        <p class="section-subtitle">事業内容</p>
      </div>
      <div class="services-intro__content">
        <p class="services-intro__text">
          システム開発からAI活用まで、幅広いテクノロジー領域で<br>
          お客様のビジネス課題を解決する総合的なITソリューションを提供しています。<br>
          最新の技術トレンドを常にキャッチアップし、<br>
          お客様のビジネスに最適な提案を行います。
        </p>
      </div>
    </div>
  </section>
  
  <!-- サービスごとの説明（タブで3つ出し分ける） -->
  <section class="services-detail" id="services-detail">
    <div class="services-detail__container">
      <div class="services-detail__tabs">
        <button class="services-detail__tab active" data-tab="service1">システム開発</button>
        <button class="services-detail__tab" data-tab="service2">Webソリューション</button>
        <button class="services-detail__tab" data-tab="service3">AI・データ活用</button>
      </div>
      
      <div class="services-detail__content">
        <div class="services-detail__panel active" id="service1">
          <h3>システム開発</h3>
          <p>
            業務システム、基幹系システムの設計・開発から運用保守まで、<br>
            ワンストップでサポートします。<br><br>
            
            <strong>主なサービス内容：</strong><br>
            ・業務システム開発（販売管理、在庫管理、会計システム等）<br>
            ・基幹システムの刷新・マイグレーション<br>
            ・モバイルアプリケーション開発<br>
            ・システム運用・保守サポート<br>
            ・レガシーシステムのモダナイゼーション<br><br>
            
            お客様の業務フローを深く理解し、<br>
            効率化と生産性向上を実現するシステムを構築します。
          </p>
        </div>
        <div class="services-detail__panel" id="service2">
          <h3>Webソリューション</h3>
          <p>
            企業サイト、ECサイト、Webアプリケーションなど、<br>
            目的に応じた最適なWeb戦略を提案します。<br><br>
            
            <strong>主なサービス内容：</strong><br>
            ・コーポレートサイト制作<br>
            ・ECサイト構築・運用支援<br>
            ・Webアプリケーション開発<br>
            ・CMS導入・カスタマイズ<br>
            ・UI/UXデザイン<br>
            ・SEO対策・Webマーケティング支援<br><br>
            
            ユーザー体験を重視した設計で、<br>
            ビジネスの成果につながるWebサイトを実現します。
          </p>
        </div>
        <div class="services-detail__panel" id="service3">
          <h3>AI・データ活用</h3>
          <p>
            AI技術とデータ分析を活用し、<br>
            ビジネスの意思決定を支援します。<br><br>
            
            <strong>主なサービス内容：</strong><br>
            ・機械学習モデルの開発・導入<br>
            ・ビッグデータ分析・可視化<br>
            ・予測分析・需要予測<br>
            ・画像認識・自然言語処理<br>
            ・データ基盤構築<br>
            ・AIチャットボット開発<br><br>
            
            蓄積されたデータから価値を引き出し、<br>
            新たなビジネス機会の創出をサポートします。
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- CONTACT（お問い合わせ） -->
  <?php get_template_part('template-parts/section', 'contact'); ?>
</main>

<?php
get_footer();
