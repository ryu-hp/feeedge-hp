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
        <?php
        // サービスの配列を定義（ID、スラッグ、クラス）
        $services = array(
          array('id' => 'service1', 'slug' => 'system-engineering', 'class' => 'active'),
          array('id' => 'service2', 'slug' => 'system-integration', 'class' => ''),
          array('id' => 'service3', 'slug' => 'facility', 'class' => '')
        );
        
        // 各サービスをループ
        foreach ($services as $service) :
          // スラッグでservices投稿を取得
          $args = array(
            'post_type' => 'services',
            'name' => $service['slug'],
            'posts_per_page' => 1
          );
          $service_query = new WP_Query($args);
          
          if ($service_query->have_posts()) :
            while ($service_query->have_posts()) : $service_query->the_post();
              // ACFフィールドを取得
              $feature_head_1 = get_field('service_feature_head_1');
              $feature_description_1 = get_field('service_feature_description_1');
              $feature_head_2 = get_field('service_feature_head_2');
              $feature_description_2 = get_field('service_feature_description_2');
              $feature_head_3 = get_field('service_feature_head_3');
              $feature_description_3 = get_field('service_feature_description_3');
              
              // サービスごとの固有情報を設定
              $service_data = array(
                'service1' => array(
                  'title' => 'SYSTEM ENGINEERING<br>SERVICES',
                  'subtitle' => 'システムエンジニアリング事業',
                  'description' => 'システムエンジニアリング事業とは、経験豊富なITエンジニアと技術を求める企業を最適にマッチングし、プロジェクト単位での技術支援・開発支援を行う常駐型のサービスです。<br><br>FREEDGEには、Web系・インフラ系をはじめとした多様な領域に対応できるエンジニアが在籍しており、お客様の課題やニーズに応じた柔軟な体制を構築することが可能です。<br><br>対応領域は、ネットワークやサーバー、データベース、セキュリティといったインフラ系から、フロントエンド・バックエンドなどのWeb系、さらにはシステム開発・運用などのソフトウェア領域、プロジェクトマネジメントまで、広範にわたります。',
                  'image' => 'service-image-01.webp',
                  'alt' => 'システムエンジニアリング事業イメージ'
                ),
                'service2' => array(
                  'title' => 'SYSTEM INTEGRATION<br>SERVICES',
                  'subtitle' => 'システムインテグレーション事業',
                  'description' => 'システムインテグレーション事業では、お客様が利用する情報システムの企画・設計から開発・導入・運用・保守まで、全工程を一貫してサポートしています。<br><br>単なる開発業務にとどまらず、課題の洗い出しや要件定義の段階から伴走し、将来を見据えたスケーラビリティや業務効率の向上まで考慮した最適なシステム構築を支援いたします。<br><br>システム開発の全体像を把握し、プロジェクトを円滑に進行するためのトータルなコーディネート力と柔軟な対応力が強みです。',
                  'image' => 'service-image-02.webp',
                  'alt' => 'システムインテグレーション事業イメージ'
                ),
                'service3' => array(
                  'title' => 'FACILITY<br>SERVICES',
                  'subtitle' => 'ファシリティ事業',
                  'description' => '働き方改革の進展やテレワークの普及により、オフィス環境が社員一人ひとりに与える影響は、これまで以上に大きなものとなっています。<br><br>FREEDGEでは、組織変更や人員の増減、作業効率の向上、働きやすさの確保、コミュニケーションの促進といった多様なニーズに対し、最適なレイアウト設計と設備ソリューションをご提案しています。<br><br>具体的には、CADによる施工図の作成をはじめ、電話やLAN・光回線などの通信インフラ工事、空調・セキュリティ・消防設備の設置および現場管理まで、オフィスづくりに必要な幅広い対応が可能です。',
                  'image' => 'service-image-03.webp',
                  'alt' => 'ファシリティ事業イメージ'
                )
              );
              
              $current_service = $service_data[$service['id']];
        ?>
        <div class="services-detail__panel <?php echo esc_attr($service['class']); ?>" id="<?php echo esc_attr($service['id']); ?>">
          <div class="services-detail__columns">
            <div class="services-detail__text">
              <div class="section-title-contents section-title-contents--services-detail">
                <h2 class="section-title"><?php echo $current_service['title']; ?></h2>
                <p class="section-subtitle"><?php echo esc_html($current_service['subtitle']); ?></p>
              </div>
              <p class="services-detail__description">
                <?php echo $current_service['description']; ?>
              </p>
            </div>
            <div class="services-detail__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/<?php echo $current_service['image']; ?>" alt="<?php echo esc_attr($current_service['alt']); ?>">
            </div>
          </div>
          <div class="services-detail__feature">
            <h3 class="services-detail__feature-title">features</h3>
            <p class="services-detail__feature-subtitle">特徴</p>
            <ul class="services-detail__feature-list">
              <?php if ($feature_head_1 && $feature_description_1) : ?>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">01</p>
                <p class="services-detail__feature-item-head">
                  <?php echo nl2br(esc_html($feature_head_1)); ?>
                </p>
                <p class="services-detail__feature-item-description">
                  <?php echo nl2br(esc_html($feature_description_1)); ?>
                </p>
              </li>
              <?php endif; ?>
              <?php if ($feature_head_2 && $feature_description_2) : ?>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">02</p>
                <p class="services-detail__feature-item-head">
                  <?php echo nl2br(esc_html($feature_head_2)); ?>
                </p>
                <p class="services-detail__feature-item-description">
                  <?php echo nl2br(esc_html($feature_description_2)); ?>
                </p>
              </li>
              <?php endif; ?>
              <?php if ($feature_head_3 && $feature_description_3) : ?>
              <li class="services-detail__feature-item">
                <p class="services-detail__feature-item-number">03</p>
                <p class="services-detail__feature-item-head">
                  <?php echo nl2br(esc_html($feature_head_3)); ?>
                </p>
                <p class="services-detail__feature-item-description">
                  <?php echo nl2br(esc_html($feature_description_3)); ?>
                </p>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
          endif;
        endforeach;
        ?>
      </div>
    </div>
  </section>
  

  <!-- プロジェクト実績 -->
  <section class="services-engagements" id="services-engagements">
    <div class="services-engagements__container container">
      <?php
      // サービスの配列を定義（ID、スラッグ、サブタイトル）
      $engagements_services = array(
        array('id' => 'services-engagements1', 'slug' => 'system-engineering', 'subtitle' => 'システムエンジニアリング事業のプロジェクト実績', 'class' => 'active'),
        array('id' => 'services-engagements2', 'slug' => 'system-integration', 'subtitle' => 'システムインテグレーション事業のプロジェクト実績', 'class' => ''),
        array('id' => 'services-engagements3', 'slug' => 'facility', 'subtitle' => 'ファシリティ事業のプロジェクト実績', 'class' => '')
      );
      
      // 各サービスをループ
      foreach ($engagements_services as $engagement_service) :
        // スラッグでservices投稿を取得
        $args = array(
          'post_type' => 'services',
          'name' => $engagement_service['slug'],
          'posts_per_page' => 1
        );
        $engagement_query = new WP_Query($args);
        
        if ($engagement_query->have_posts()) :
          while ($engagement_query->have_posts()) : $engagement_query->the_post();
      ?>
      <div class="sevices-engagements__contents <?php echo esc_attr($engagement_service['class']); ?>" id="<?php echo esc_attr($engagement_service['id']); ?>">
        <div class="section-title-contents section-title-contents--services-engagements">
          <h2 class="section-title">key engagements</h2>
          <p class="section-subtitle"><?php echo esc_html($engagement_service['subtitle']); ?></p>
        </div>
        <div class="services-engagements__body">
          <div class="services-engagements__columns">
            <?php
            // プロジェクト実績を1〜9までループ
            for ($i = 1; $i <= 9; $i++) :
              $title = get_field('service_engagements_title_' . $i);
              $development = get_field('service_engagements_development_' . $i);
              $flow = get_field('service_engagements_flow_' . $i);
              $period = get_field('service_engagements_period_' . $i);
              
              // タイトルがある場合のみ表示
              if ($title) :
            ?>
            <div class="services-engagements__item">
              <div class="services-engagements__item-columns">
                <h3 class="services-engagements__item-title"><?php echo esc_html($title); ?></h3>
                <div class="services-engagements__item-contents">
                  <?php if ($development) : ?>
                  <div class="services-engagements__item-content">
                    <p class="services-engagements__item-tag">開発環境</p>
                    <p class="services-engagements__item-description">
                      <?php echo esc_html($development); ?>
                    </p>
                  </div>
                  <?php endif; ?>
                  <?php if ($flow) : ?>
                  <div class="services-engagements__item-content">
                    <p class="services-engagements__item-tag">開発工程</p>
                    <p class="services-engagements__item-description">
                      <?php echo esc_html($flow); ?>
                    </p>
                  </div>
                  <?php endif; ?>
                  <?php if ($period) : ?>
                  <div class="services-engagements__item-content">
                    <p class="services-engagements__item-tag">対応期間</p>
                    <p class="services-engagements__item-description">
                      <?php echo esc_html($period); ?>
                    </p>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php
              endif;
            endfor;
            ?>
          </div>
        </div>
      </div>
      <?php
          endwhile;
          wp_reset_postdata();
        endif;
      endforeach;
      ?>
    </div>
  </section>
  
</main>

<?php
get_footer();
