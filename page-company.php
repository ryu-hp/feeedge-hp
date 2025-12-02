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
    <div class="message__container">
      <h2 class="section-title">MESSAGE</h2>
      <p class="section-subtitle">代表メッセージ</p>
      <div class="message__content">
        <p class="message__text">
          デジタル技術の急速な進化により、ビジネス環境は日々変化しています。<br>
          この変化の激しい時代において、FREEDGEは常に一歩先を見据え、<br>
          お客様のビジネスの成長を支援することを使命としています。<br><br>
          
          私たちが大切にしているのは、「自由な発想」と「確かな技術力」です。<br>
          既成概念にとらわれない柔軟な思考と、最新のテクノロジーを駆使した<br>
          ソリューションで、お客様の課題解決に全力で取り組みます。<br><br>
          
          これからも、お客様、パートナー、そして社員全員と共に成長し、<br>
          社会に価値を提供し続ける企業であり続けます。<br><br>
          
          <strong>代表取締役社長　山田 太郎</strong>
        </p>
      </div>
    </div>
  </section>
  
  <!-- COMPANY（会社概要） -->
  <section class="company" id="company">
    <div class="company__container">
      <h2 class="section-title">COMPANY</h2>
      <p class="section-subtitle">会社概要</p>
      <div class="company__content">
        <table class="company__table">
          <tr>
            <th>会社名</th>
            <td>株式会社FREEDGE</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2015年4月1日</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>代表取締役社長　山田 太郎</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>5,000万円</td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td>120名（2024年12月現在）</td>
          </tr>
          <tr>
            <th>本社所在地</th>
            <td>〒100-0001<br>東京都千代田区千代田1-1-1<br>FREEDGEビル 10F</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>
              ・システム開発・運用保守<br>
              ・Webソリューション開発<br>
              ・AI・データ分析サービス<br>
              ・クラウドインフラ構築<br>
              ・ITコンサルティング
            </td>
          </tr>
          <tr>
            <th>取引銀行</th>
            <td>
              みずほ銀行 本店<br>
              三菱UFJ銀行 東京営業部
            </td>
          </tr>
          <tr>
            <th>主要取引先</th>
            <td>
              大手製造業、金融機関、官公庁、通信キャリア、<br>
              小売・流通業、医療機関 他多数
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  
  <!-- CONTACT（お問い合わせ） -->
  <?php get_template_part('template-parts/section', 'contact'); ?>
</main>

<?php
get_footer();
