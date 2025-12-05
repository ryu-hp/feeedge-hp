<?php
/**
 * Template Name: Search（検索結果）
 * 検索結果ページ用テンプレート
 */
get_header();
?>

<main class="main page-search">
  <!-- ファーストビュー -->
  <section class="page-fv">
    <div class="page-fv__container">
      <div class="page-fv__content">
        <h1 class="page-fv__title">search results</h1>
        <p class="page-fv__subtitle">検索結果</p>
      </div>
    </div>
  </section>

  <!-- 検索コンテンツ -->
  <section class="search-content" id="search-content">
    <div class="search-content__container container">
      <!-- 検索フォーム -->
      <div class="search-content__form">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
          <div class="search-form__input-group">
            <input type="search" class="search-form__input" placeholder="キーワードを入力..." value="<?php echo get_search_query(); ?>" name="s">
            <button type="submit" class="search-form__submit">
              <svg class="search-form__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.35-4.35"></path>
              </svg>
              <span>検索</span>
            </button>
          </div>
        </form>
      </div>

      <?php if (have_posts()) : ?>
        <div class="search-content__results">
          <p class="search-content__count">
            「<span class="search-content__keyword"><?php echo get_search_query(); ?></span>」の検索結果: 
            <strong><?php echo $wp_query->found_posts; ?></strong>件
          </p>
        </div>

        <div class="search-content__list">
          <?php while (have_posts()) : the_post(); ?>
            <article class="search-item">
              <a href="<?php the_permalink(); ?>" class="search-item__link">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="search-item__image">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
                <?php else : ?>
                  <div class="search-item__image search-item__image--noimage">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/noimage.webp" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
                
                <div class="search-item__content">
                  <div class="search-item__meta">
                    <time class="search-item__date" datetime="<?php echo get_the_date('c'); ?>">
                      <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <span class="search-item__type"><?php echo get_post_type_object(get_post_type())->labels->singular_name; ?></span>
                    <?php
                    $categories = get_the_category();
                    if ($categories) :
                      foreach ($categories as $category) :
                    ?>
                      <span class="search-item__category"><?php echo esc_html($category->name); ?></span>
                    <?php
                      endforeach;
                    endif;
                    ?>
                  </div>
                  
                  <h2 class="search-item__title"><?php the_title(); ?></h2>
                  
                  <div class="search-item__excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), 100, '...'); ?>
                  </div>
                  
                  <div class="search-item__more">
                    <span>続きを読む</span>
                    <svg class="search-item__arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                      <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                    </svg>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- ページネーション -->
        <div class="search-pagination">
          <?php
          the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => '&laquo; 前へ',
            'next_text' => '次へ &raquo;',
          ));
          ?>
        </div>

      <?php else : ?>
        <div class="search-content__no-results">
          <p class="search-content__no-results-message">
            「<span class="search-content__keyword"><?php echo get_search_query(); ?></span>」に一致する情報は見つかりませんでした。
          </p>
          <div class="search-content__suggestions">
            <p class="search-content__suggestions-title">検索のヒント:</p>
            <ul class="search-content__suggestions-list">
              <li>キーワードに誤字・脱字がないか確認してください</li>
              <li>別のキーワードを試してみてください</li>
              <li>より一般的なキーワードで検索してみてください</li>
              <li>キーワードの数を減らしてみてください</li>
            </ul>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php
get_footer();
