<?php
/**
 * Template Name: COMPANY（会社概要）
 * 会社概要ページ用テンプレート
 */
get_header();
?>

<main class="main page-company">
  <!-- ファーストビュー（下層ページ共通） -->
  <?php get_template_part('template-parts/page', 'fv'); ?>
  
  <!-- MESSAGE（代表メッセージ） -->
  <section class="message" id="message">
    <div class="message__container container">
      <div class="fade-in">
        <div class="section-title-contents section-title-contents--message">
          <h2 class="section-title">MESSAGE</h2>
          <p class="section-subtitle">代表メッセージ</p>
        </div>
        <div class="message__body">
          <div class="message__ceo-image">
            <img src="<?php echo get_template_directory_uri(); ?>/image/ceo-image.webp" alt="代表取締役社長　松原充芳">
          </div>
          <div class="message__content">
            <div class="message__left">
              <p class="message__catchphrase section-catchphrase">
                <span>ITの力で、</span>
                <span>人々をもっと自由に</span>
              </p>
              <div class="message__figure">
                <div class="message__circle-contents message__circle-contents--small message__circle-contents--left">
                  <div class="message__circle-text">
                    <p class="message__circle-text--main">freedom</p>
                    <p class="message__circle-text--sub">自由</p>
                  </div>
                </div>
                <div class="message__circle-contents message__circle-contents--small message__circle-contents--top">
                  <div class="message__circle-text">
                    <p class="message__circle-text--main">bridge</p>
                    <p class="message__circle-text--sub">架け橋</p>
                  </div>
                </div>
                <div class="message__circle-contents message__circle-contents--large message__circle-contents--bottom">
                  <div class="message__circle-text">
                    <p class="message__circle-text--main"><span class="message__circle-text--main--small">=</span>freedge</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="message__right">
              <p class="message__description">
                情報社会といわれる現代では、スマートフォンを始めいたるところにITが活用され、数年前まではできなかったことができるようになり、人々はより多くの選択肢を持つことで、より自由な生活を手にしています。<br><br>
                私自身、通信キャリアでエンジニアとして、様々な業界のお客様へITソリューションの提案や導入を行ってきた中で、今後もITによって社会が発展してくことを確信しています。<br><br>
                当社は無限の可能性を持つITの力を駆使し、ひとりひとりに今よりも多くの自由を提供します。一方、経済産業省の発表では、2030年には最大で約79万人のIT人材が不足すると報告されています。<br><br>
                そのため、ひとりでも多くの方にエンジニアになりたい、続けたいと思っていただけるよう、「エンジニアをもっと自由に」をスローガンに事業活動に専念してまいります。<br>
                すべての人にとっての自由の架け橋となる企業を目指します。
              </p>
              <div class="message__ceo-name">
                <span class="message__ceo-name--position">代表取締役社長</span>
                <span class="message__ceo-name--main"><img src="<?php echo get_template_directory_uri(); ?>/image/ceo-name.webp" alt="松原充芳"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- COMPANY（会社概要） -->
  <section class="company" id="company">
    <div class="company__container container">
      <div class="fade-in">
        <div class="section-title-contents section-title-contents--company">
          <h2 class="section-title">company</h2>
          <p class="section-subtitle">会社概要</p>
        </div>
        <div class="company__body">
          <div class="company__content">
            <table class="company__table">
              <?php
              // 会社概要カスタム投稿を取得
              $args = array(
                'post_type' => 'company_info',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
              );
              $company_info_query = new WP_Query($args);
              
              if ($company_info_query->have_posts()) :
                while ($company_info_query->have_posts()) : $company_info_query->the_post();
                  $label = get_field('company_info__label');
                  $content = get_field('company_info__content');
                  $content_map = get_field('company_info__content_map');
                  
                  if ($label && ($content || $content_map)) :
              ?>
              <tr class="company__table-item">
                <th class="company__table-head"><?php echo esc_html($label); ?></th>
                <td class="company__table-content">
                  <?php echo nl2br(esc_html($content)); ?>
                  <?php if ($content_map) : ?>
                    <div class="company__map">
                      <iframe src="<?php echo esc_url($content_map); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  <?php endif; ?>
                </td>
              </tr>
              <?php
                  endif;
                endwhile;
                wp_reset_postdata();
              else :
                // デフォルト表示（カスタム投稿がない場合）
              ?>
              <tr class="company__table-item">
                <th class="company__table-head">会社名</th>
                <td class="company__table-content">株式会社FREEDGE</td>
              </tr>
              <?php endif; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</main>

<?php
get_footer();
