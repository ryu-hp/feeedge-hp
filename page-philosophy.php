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
    <div class="mission__container container">
      <div class="section-title-contents">
        <h2 class="section-title">mission</h2>
        <p class="section-subtitle">ミッション</p>
      </div>
      <div class="mission__content">
        <p class="mission__catchphrase section-catchphrase">
          <span>関わるすべての人にとって、</span>
          <span><span class="color-theme">自由</span>への架け橋となる</span>
        </p>
        <p class="mission__text">
          FREEDGEは、「自由」をキーワードに、<br>
          社会・お客様・エンジニアのあらゆる可能性を広げることを使命とし、<br>
          求められるものを超えて“驚き”と“感動”を生み出すエンジニア集団として、<br>
          現在・過去・未来の流れを読み解きながら、<br>
          自らの道＝“自流”を切り拓いていきます。<br>
          関わるすべての人が、今よりも自由になれる社会の実現を、<br>
          ITの力で支えていきます。
        </p>
      </div>
    </div>
    <div class="mission__image">
      <img src="<?php echo get_template_directory_uri(); ?>/image/circle.webp" alt="MISSIONイメージ画像">
    </div>
  </section>
  
  <!-- VISION（理念） -->
  <section class="vision" id="vision">
    <div class="vision__container container">
      <div class="section-title-contents section-title-contents--vision">
        <h2 class="section-title">vision</h2>
        <p class="section-subtitle">理念</p>
      </div>
      <div class="vision__content">
        <p class="vision__text">
          私たちは、エンジニアが自分らしく挑戦し、<br>
          成長できる環境こそが、<br>
          価値あるソリューションを生み出す原動力だと考えています。
        </p>
        <p class="vision__text">
          ただ“求められたもの”を形にするだけでなく、<br>
          そこに<span class="weight-bold">「驚き」</span>と<span class="weight-bold">「感動」</span>を加え、期待を超える成果を追求する。
        </p>
        <p class="vision__text">
          そのために、過去と現在を学び、未来を見据えながら、<br>
          自分たちの“自流”を築いていく姿勢を大切にしています。<br>
          変化を恐れず、技術と価値を自ら創造する、<br>
          自由でしなやかなエンジニア集団を目指します。
        </p>
      </div>
    </div>
    <div class="vision__image">
      <img src="<?php echo get_template_directory_uri(); ?>/image/box.webp" alt="visionイメージ画像">
    </div>
  </section>
  
  <!-- VALUE（行動指針） -->
  <section class="value" id="value">
    <div class="value__container container">
      <div class="section-title-contents section-title-contents--value">
        <h2 class="section-title">value</h2>
        <p class="section-subtitle">行動指針</p>
      </div>
      <div class="value__content">
        <div class="value__columns">
          <div class="value__item">
            <div class="value__item-columns">
              <p class="value__item-number">01</p>
              <div class="value__item-image">
                <img src="<?php echo get_template_directory_uri(); ?>/image/value-image-01.webp" alt="be free">
              </div>
              <div class="value__item-text">
                <h3 class="value__item-title">be free</h3>
                <p class="value__item-description">
                  自ら自由を望み、皆で自由を叶える。
                </p>
              </div>
            </div>
          </div>
          <div class="value__item">
            <div class="value__item-columns">
              <p class="value__item-number">02</p>
              <div class="value__item-image">
                <img src="<?php echo get_template_directory_uri(); ?>/image/value-image-02.webp" alt="passion">
              </div>
              <div class="value__item-text">
                <h3 class="value__item-title">passion</h3>
                <p class="value__item-description">
                  情熱をもって取り組み、その情熱がかかわる人へ伝播し、想像以上の成果を分かち合える組織であり続ける。
                </p>
              </div>
            </div>
          </div>
          <div class="value__item">
            <div class="value__item-columns">
              <p class="value__item-number">03</p>
              <div class="value__item-image">
                <img src="<?php echo get_template_directory_uri(); ?>/image/value-image-03.webp" alt="responsibility">
              </div>
              <div class="value__item-text">
                <h3 class="value__item-title">responsibility</h3>
                <p class="value__item-description">
                  物事を他責ではなく、自責で捉え、自分事として行動する。
                </p>
              </div>
            </div>
          </div>
          <div class="value__item">
            <div class="value__item-columns">
              <p class="value__item-number">04</p>
              <div class="value__item-image">
                <img src="<?php echo get_template_directory_uri(); ?>/image/value-image-04.webp" alt="respect">
              </div>
              <div class="value__item-text">
                <h3 class="value__item-title">respect</h3>
                <p class="value__item-description">
                  いかなる関係や状況でも相手を敬う気持ちを忘れず、感謝と礼儀を大切にする。
                </p>
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
