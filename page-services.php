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
    <div class="services-intro__container container">
      <div class="services-intro__columns">
        <div class="services-intro__text">
          <h2 class="services-intro__catchphrase section-catchphrase">
            <span>FREEDGEの</span>
            <span><span class="color-theme">3つ</span>の事業領域</span>
          </h2>
          <p class="services-intro__description">
            FREEDGEは、ITを軸に3つの領域で事業を展開しています。<br>
            それぞれの専門性を活かしながら、お客様や社会の課題に対して、<br>
            柔軟で実効性のあるソリューションを提供しています。
          </p>
        </div>
        <div class="services-intro__image">
          <img src="<?php echo get_template_directory_uri(); ?>/image/services-intro-image.webp" alt="FREEDGEの3つの事業領域">
        </div>
      </div>
      <div class="services-intro__tabs">
        <div class="services-intro__tabs-columns">
          <div class="services-intro__tab active" data-target="service1">
            <div class="services-intro__tab-head">
              <div class="services-intro__tab-image">
                <img src="<?php echo get_template_directory_uri(); ?>/image/service-tab-image-01.webp" alt="システムエンジニアリング事業">
              </div>
              <p class="services-intro__tab-title">
                system engineering<br>services
              </p>
            </div>
            <div class="services-intro__tab-body">
              <p class="services-intro__tab-name">システムエンジニアリング事業</p>
              <div class="services-intro__tab-arrow">
                <svg class="services-intro__tab-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                  <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                </svg>
              </div>
            </div>
          </div>
          <div class="services-intro__tab" data-target="service2">
            <div class="services-intro__tab-head">
              <div class="services-intro__tab-image">
                <img src="<?php echo get_template_directory_uri(); ?>/image/service-tab-image-02.webp" alt="システムインテグレーション事業">
              </div>
              <p class="services-intro__tab-title">
                system engineering<br>services
              </p>
            </div>
            <div class="services-intro__tab-body">
              <p class="services-intro__tab-name">システムインテグレーション事業</p>
              <div class="services-intro__tab-arrow">
                <svg class="services-intro__tab-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                  <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                </svg>
              </div>
            </div>
          </div>
          <div class="services-intro__tab" data-target="service3">
            <div class="services-intro__tab-head">
              <div class="services-intro__tab-image">
                <img src="<?php echo get_template_directory_uri(); ?>/image/service-tab-image-03.webp" alt="ファシリティ事業">
              </div>
              <p class="services-intro__tab-title">
                facility services
              </p>
            </div>
            <div class="services-intro__tab-body">
              <p class="services-intro__tab-name">ファシリティ事業</p>
              <div class="services-intro__tab-arrow">
                <svg class="services-intro__tab-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                  <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- サービスごとの説明（タブで3つ出し分ける） -->
  <section class="services-detail" id="services-detail">
    <div class="services-detail__container container">
      <div class="services-detail__content">
        <div class="services-detail__panel active" id="service1">
          <div class="services-detail__columns">
            <div class="services-detail__text">
              <div class="section-title-contents section-title-contents--services-detail">
                <h2 class="section-title">SYSTEM ENGINEERING<br>SERVICES</h2>
                <p class="section-subtitle">システムエンジニアリング事業</p>
              </div>
              <p class="services-detail__description">
                システムエンジニアリング事業とは、経験豊富なITエンジニアと技術を求める企業を最適にマッチングし、プロジェクト単位での技術支援・開発支援を行う常駐型のサービスです。<br><br>
                FREEDGEには、Web系・インフラ系をはじめとした多様な領域に対応できるエンジニアが在籍しており、お客様の課題やニーズに応じた柔軟な体制を構築することが可能です。<br><br>
                対応領域は、ネットワークやサーバー、データベース、セキュリティといったインフラ系から、フロントエンド・バックエンドなどのWeb系、さらにはシステム開発・運用などのソフトウェア領域、プロジェクトマネジメントまで、広範にわたります。
              </p>
            </div>
            .<div class="services-detail__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/service-image-01.webp" alt="システムエンジニアリング事業イメージ">
            </div>
          </div>
          <div class="services-detail__feature">
            <h3 class="services-detail__feature-title">features</h3>
            <p class="services-detail__feature-subtitle">特徴</p>
            <ul class="services-detail__feature-list">
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">01</p>
                <p class="services-detail__feature-item-head">
                  豊富な人材と<br>広範な技術領域への対応
                </p>
                <p class="services-detail__feature-item-description">
                  Web系からインフラ、ソフトウェア開発、プロジェクトマネジメントまで、幅広い分野に精通したエンジニアが在籍。多様な案件に対して最適な人材をアサイン可能です。
                </p>
              </li>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">02</p>
                <p class="services-detail__feature-item-head">
                  企業ごとの課題に応じた<br>柔軟なチーム編成
                </p>
                <p class="services-detail__feature-item-description">
                  常駐型の体制だからこそ、プロジェクト単位で企業のニーズに合わせた最適なチーム構成が可能。必要なスキルセットや開発フェーズに応じて柔軟に対応します。
                </p>
              </li>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">03</p>
                <p class="services-detail__feature-item-head">
                  経験に裏打ちされた<br>安心のマッチング体制
                </p>
                <p class="services-detail__feature-item-description">
                  経験豊富なエンジニアのリソースと、現場理解のあるマッチング体制により、技術力だけでなく“現場で本当に活躍できる人材”をご提案します。
                </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="services-detail__panel" id="service2">
          <div class="services-detail__columns">
            <div class="services-detail__text">
              <div class="section-title-contents section-title-contents--services-detail">
                <h2 class="section-title">SYSTEM ENGINEERING<br>SERVICES</h2>
                <p class="section-subtitle">システムエンジニアリング事業</p>
              </div>
              <p class="services-detail__description">
                システムエンジニアリング事業とは、経験豊富なITエンジニアと技術を求める企業を最適にマッチングし、プロジェクト単位での技術支援・開発支援を行う常駐型のサービスです。<br><br>
                FREEDGEには、Web系・インフラ系をはじめとした多様な領域に対応できるエンジニアが在籍しており、お客様の課題やニーズに応じた柔軟な体制を構築することが可能です。<br><br>
                対応領域は、ネットワークやサーバー、データベース、セキュリティといったインフラ系から、フロントエンド・バックエンドなどのWeb系、さらにはシステム開発・運用などのソフトウェア領域、プロジェクトマネジメントまで、広範にわたります。
              </p>
            </div>
            .<div class="services-detail__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/service-image-01.webp" alt="システムエンジニアリング事業イメージ">
            </div>
          </div>
          <div class="services-detail__feature">
            <h3 class="services-detail__feature-title">features</h3>
            <p class="services-detail__feature-subtitle">特徴</p>
            <ul class="services-detail__feature-list">
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">01</p>
                <p class="services-detail__feature-item-head">
                  豊富な人材と<br>広範な技術領域への対応
                </p>
                <p class="services-detail__feature-item-description">
                  Web系からインフラ、ソフトウェア開発、プロジェクトマネジメントまで、幅広い分野に精通したエンジニアが在籍。多様な案件に対して最適な人材をアサイン可能です。
                </p>
              </li>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">02</p>
                <p class="services-detail__feature-item-head">
                  企業ごとの課題に応じた<br>柔軟なチーム編成
                </p>
                <p class="services-detail__feature-item-description">
                  常駐型の体制だからこそ、プロジェクト単位で企業のニーズに合わせた最適なチーム構成が可能。必要なスキルセットや開発フェーズに応じて柔軟に対応します。
                </p>
              </li>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">03</p>
                <p class="services-detail__feature-item-head">
                  経験に裏打ちされた<br>安心のマッチング体制
                </p>
                <p class="services-detail__feature-item-description">
                  経験豊富なエンジニアのリソースと、現場理解のあるマッチング体制により、技術力だけでなく“現場で本当に活躍できる人材”をご提案します。
                </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="services-detail__panel" id="service3">
          <div class="services-detail__columns">
            <div class="services-detail__text">
              <div class="section-title-contents section-title-contents--services-detail">
                <h2 class="section-title">SYSTEM ENGINEERING<br>SERVICES</h2>
                <p class="section-subtitle">システムエンジニアリング事業</p>
              </div>
              <p class="services-detail__description">
                システムエンジニアリング事業とは、経験豊富なITエンジニアと技術を求める企業を最適にマッチングし、プロジェクト単位での技術支援・開発支援を行う常駐型のサービスです。<br><br>
                FREEDGEには、Web系・インフラ系をはじめとした多様な領域に対応できるエンジニアが在籍しており、お客様の課題やニーズに応じた柔軟な体制を構築することが可能です。<br><br>
                対応領域は、ネットワークやサーバー、データベース、セキュリティといったインフラ系から、フロントエンド・バックエンドなどのWeb系、さらにはシステム開発・運用などのソフトウェア領域、プロジェクトマネジメントまで、広範にわたります。
              </p>
            </div>
            .<div class="services-detail__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/service-image-01.webp" alt="システムエンジニアリング事業イメージ">
            </div>
          </div>
          <div class="services-detail__feature">
            <h3 class="services-detail__feature-title">features</h3>
            <p class="services-detail__feature-subtitle">特徴</p>
            <ul class="services-detail__feature-list">
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">01</p>
                <p class="services-detail__feature-item-head">
                  豊富な人材と<br>広範な技術領域への対応
                </p>
                <p class="services-detail__feature-item-description">
                  Web系からインフラ、ソフトウェア開発、プロジェクトマネジメントまで、幅広い分野に精通したエンジニアが在籍。多様な案件に対して最適な人材をアサイン可能です。
                </p>
              </li>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">02</p>
                <p class="services-detail__feature-item-head">
                  企業ごとの課題に応じた<br>柔軟なチーム編成
                </p>
                <p class="services-detail__feature-item-description">
                  常駐型の体制だからこそ、プロジェクト単位で企業のニーズに合わせた最適なチーム構成が可能。必要なスキルセットや開発フェーズに応じて柔軟に対応します。
                </p>
              </li>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">03</p>
                <p class="services-detail__feature-item-head">
                  経験に裏打ちされた<br>安心のマッチング体制
                </p>
                <p class="services-detail__feature-item-description">
                  経験豊富なエンジニアのリソースと、現場理解のあるマッチング体制により、技術力だけでなく“現場で本当に活躍できる人材”をご提案します。
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!-- FREEDGEの3つの事業領域 -->
  <section class="services-engagements" id="services-engagements">
    <div class="services-engagements__container container">
      <div class="section-title-contents section-title-contents--services-engagements">
        <h2 class="section-title">key engagements</h2>
        <p class="section-subtitle">システムエンジニアリング事業のプロジェクト実績</p>
      </div>
      <div class="services-engagements__body">
        <div class="services-engagements__columns">
          <div class="services-engagements__item">
            <div class="services-engagements__item-columns">
              <h3 class="services-engagements__item-title">某通信キャリア向けインフラ構築支援</h3>
              <div class="services-engagements__item-contents">
                <div class="services-engagements__item-content">
                  <p class="services-engagements__item-tag">開発環境</p>
                  <p class="services-engagements__item-description">
                    JavaScript / TypeScript / Vue.js / React  
                  </p>
                </div>
                <div class="services-engagements__item-content">
                  <p class="services-engagements__item-tag">開発工程</p>
                  <p class="services-engagements__item-description">
                    基本設計 / 詳細設計 / 検証 / 構築    
                  </p>
                </div>
                <div class="services-engagements__item-content">
                  <p class="services-engagements__item-tag">対応期間  </p>
                  <p class="services-engagements__item-description">
                    6ヶ月  
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</main>

<?php
get_footer();
