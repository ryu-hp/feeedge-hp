<?php
/**
 * Template Name: PHILOSOPHY（企業理念）
 * 企業理念ページ用テンプレート
 */
get_header();
?>

<main class="main page-philosophy">
  <?php
  // m_v投稿タイプから最新の投稿を取得
  $args = array(
    'post_type' => 'm_v',
    'posts_per_page' => 1,
  );
  $m_v_query = new WP_Query($args);
  
  if ($m_v_query->have_posts()) :
    while ($m_v_query->have_posts()) : $m_v_query->the_post();
      $misition_head = get_field('misition_head');
      $misition_概要 = get_field('misition_概要');
      $visition_head = get_field('visition_head');
      $visition_概要 = get_field('visition_概要');
    endwhile;
    wp_reset_postdata();
  endif;
  
  // value投稿タイプから投稿を取得（最大9件）
  $value_args = array(
    'post_type' => 'value',
    'posts_per_page' => 9,
    'orderby' => 'menu_order',
    'order' => 'ASC',
  );
  $value_query = new WP_Query($value_args);
  ?>
  
  <!-- ファーストビュー（下層ページ共通） -->
  <?php get_template_part('template-parts/page', 'fv'); ?>
  
  <!-- MISSION（ミッション） -->
  <section class="mission" id="mission">
    <div class="mission__container container">
      <div class="fade-in">
        <div class="section-title-contents">
          <h2 class="section-title">mission</h2>
          <p class="section-subtitle">ミッション</p>
        </div>
        <div class="mission__content">
          <?php if (isset($misition_head) && $misition_head) : ?>
          <div class="mission__catchphrase section-catchphrase">
            <?php echo $misition_head; ?>
          </div>
          <?php endif; ?>
          <?php if (isset($misition_概要) && $misition_概要) : ?>
          <div class="mission__text">
            <?php echo $misition_概要; ?>
          </div>
          <?php else : ?>
          <p class="mission__text">
            FREEDGEは、「自由」をキーワードに、<br>
            社会・お客様・エンジニアの<br class="only-sp">あらゆる可能性を広げることを<br class="only-sp">使命とし、<br>
            求められるものを超えて<br class="only-sp">“驚き”と“感動”を生み出す<br class="only-sp">エンジニア集団として、<br>
            現在・過去・未来の流れを<br class="only-sp">読み解きながら、<br>
            自らの道＝“自流”を切り拓いていきます。<br>
            関わるすべての人が、<br class="only-sp">今よりも自由になれる社会の実現を、<br>
            ITの力で支えていきます。
          </p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="mission__image">
      <img src="<?php echo get_template_directory_uri(); ?>/image/circle.webp" alt="MISSIONイメージ画像">
    </div>
  </section>
  
  <!-- VISION（理念） -->
  <section class="vision" id="vision">
    <div class="vision__container container">
      <div class="fade-in">
        <div class="section-title-contents section-title-contents--vision">
          <h2 class="section-title">vision</h2>
          <p class="section-subtitle">理念</p>
        </div>
        <div class="vision__content">
          <?php if (isset($visition_head) && $visition_head) : ?>
          <div class="vision__catchphrase section-catchphrase">
            <?php echo $visition_head; ?>
          </div>
          <?php endif; ?>
          <?php if (isset($visition_概要) && $visition_概要) : ?>
          <div class="vision__text">
            <?php echo $visition_概要; ?>
          </div>
          <?php else : ?>
          <div class="vision__text">
            <p>
              私たちは、<br class="only-sp">エンジニアが自分らしく挑戦し、<br>
              成長できる環境こそが、<br>
              価値あるソリューションを生み出す原動力だと考えています。
            </p>
            <p>
              ただ“求められたもの”を<br class="only-sp">形にするだけでなく、<br>
              そこに<span class="weight-bold">「驚き」</span>と<span class="weight-bold">「感動」</span>を加え、期待を超える成果を追求する。
            </p>
            <p>
              そのために、過去と現在を学び、<br class="only-sp">未来を見据えながら、<br>
              自分たちの“自流”を築いていく姿勢を<br class="only-sp">大切にしています。<br>
              変化を恐れず、<br class="only-sp">技術と価値を自ら創造する、<br>
              自由でしなやかなエンジニア集団を<br class="only-sp">目指します。
            </p>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="vision__image">
      <img src="<?php echo get_template_directory_uri(); ?>/image/box.webp" alt="visionイメージ画像">
    </div>
  </section>
  
  <!-- VALUE（行動指針） -->
  <section class="value" id="value">
    <div class="value__container container">
      <div class="fade-in">
        <div class="section-title-contents section-title-contents--value">
          <h2 class="section-title">value</h2>
          <p class="section-subtitle">行動指針</p>
        </div>
        <div class="value__content">
          <div class="value__columns">
            <?php
            if ($value_query->have_posts()) :
              $counter = 1;
              while ($value_query->have_posts()) : $value_query->the_post();
                $value_description = get_field('value_description');
                $value_icon = get_field('value_icon');
                $number = str_pad($counter, 2, '0', STR_PAD_LEFT);
            ?>
            <div class="value__item">
              <div class="value__item-columns">
                <p class="value__item-number"><?php echo $number; ?></p>
                <?php if ($value_icon) : ?>
                <div class="value__item-image">
                  <img src="<?php echo esc_url($value_icon); ?>" alt="<?php the_title(); ?>">
                </div>
                <?php endif; ?>
                <div class="value__item-text">
                  <h3 class="value__item-title"><?php the_title(); ?></h3>
                  <?php if ($value_description) : ?>
                  <p class="value__item-description">
                    <?php echo esc_html($value_description); ?>
                  </p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php
                $counter++;
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
