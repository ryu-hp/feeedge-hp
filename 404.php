<?php
/**
 * Template Name: 404（ページが見つかりません）
 * 404エラーページ用テンプレート
 */
get_header();
?>

<main class="main page-404">
  <!-- ファーストビュー -->
  <section class="page-fv page-fv--404">
    <div class="page-fv__container">
      <div class="page-fv__content">
        <h1 class="page-fv__title">404</h1>
        <p class="page-fv__subtitle">Page Not Found</p>
      </div>
    </div>
  </section>

  <!-- 404コンテンツ -->
  <section class="error-content" id="error-content">
    <div class="error-content__container container">
      <div class="error-content__body">
        <div class="error-content__message">
          <p class="error-content__text">
            お探しのページは見つかりませんでした。<br>
            URLが間違っているか、ページが移動・削除された可能性があります。
          </p>
        </div>

        <!-- 検索フォーム -->
        <div class="error-content__search">
          <h2 class="error-content__search-title">ページを検索</h2>
          <form role="search" method="get" class="error-search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="error-search-form__input-group">
              <input type="search" class="error-search-form__input" placeholder="キーワードを入力..." name="s">
              <button type="submit" class="error-search-form__submit">
                <svg class="error-search-form__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="m21 21-4.35-4.35"></path>
                </svg>
                <span>検索</span>
              </button>
            </div>
          </form>
        </div>

        <!-- おすすめリンク -->
        <div class="error-content__links">
          <h2 class="error-content__links-title">おすすめページ</h2>
          <nav class="error-content__nav">
            <ul class="error-content__list">
              <li class="error-content__item">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="error-content__link">
                  <svg class="error-content__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                    <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                  </svg>
                  <span>トップページ</span>
                </a>
              </li>
              <li class="error-content__item">
                <a href="<?php echo esc_url(home_url('/philosophy')); ?>" class="error-content__link">
                  <svg class="error-content__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                    <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                  </svg>
                  <span>企業理念</span>
                </a>
              </li>
              <li class="error-content__item">
                <a href="<?php echo esc_url(home_url('/company')); ?>" class="error-content__link">
                  <svg class="error-content__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                    <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                  </svg>
                  <span>会社概要</span>
                </a>
              </li>
              <li class="error-content__item">
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="error-content__link">
                  <svg class="error-content__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                    <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                  </svg>
                  <span>事業内容</span>
                </a>
              </li>
              <li class="error-content__item">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="error-content__link">
                  <svg class="error-content__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                    <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                  </svg>
                  <span>お問い合わせ</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <!-- ホームへ戻るボタン -->
        <div class="error-content__button">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="error-button">
            <span>トップページへ戻る</span>
            <svg class="error-button__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
              <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
