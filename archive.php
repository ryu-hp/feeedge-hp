<?php
/**
 * Template Name: Archive（アーカイブ）
 * アーカイブページ用テンプレート
 */
get_header();
?>

<main class="main page-archive">
  <!-- ファーストビュー -->
  <section class="page-fv">
    <div class="page-fv__container">
      <div class="page-fv__content">
        <h1 class="page-fv__title">
          <?php
          if (is_category()) {
            single_cat_title();
          } elseif (is_tag()) {
            single_tag_title();
          } elseif (is_author()) {
            the_author();
          } elseif (is_date()) {
            echo get_the_date('Y年n月');
          } elseif (is_post_type_archive()) {
            post_type_archive_title();
          } else {
            echo 'archive';
          }
          ?>
        </h1>
        <p class="page-fv__subtitle">
          <?php
          if (is_category()) {
            echo 'カテゴリー';
          } elseif (is_tag()) {
            echo 'タグ';
          } elseif (is_author()) {
            echo '投稿者';
          } elseif (is_date()) {
            echo '日付別アーカイブ';
          } elseif (is_post_type_archive()) {
            echo 'アーカイブ';
          } else {
            echo 'アーカイブ';
          }
          ?>
        </p>
      </div>
    </div>
  </section>

  <!-- アーカイブコンテンツ -->
  <section class="archive-content" id="archive-content">
    <div class="archive-content__container container">
      <?php if (have_posts()) : ?>
        <?php if (is_category() || is_tag()) : ?>
          <div class="archive-content__description">
            <?php echo term_description(); ?>
          </div>
        <?php endif; ?>

        <div class="archive-content__list">
          <?php while (have_posts()) : the_post(); ?>
            <article class="archive-item">
              <a href="<?php the_permalink(); ?>" class="archive-item__link">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="archive-item__image">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
                <?php else : ?>
                  <div class="archive-item__image archive-item__image--noimage">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/noimage.webp" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
                
                <div class="archive-item__content">
                  <div class="archive-item__meta">
                    <time class="archive-item__date" datetime="<?php echo get_the_date('c'); ?>">
                      <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <?php
                    $categories = get_the_category();
                    if ($categories) :
                      foreach ($categories as $category) :
                    ?>
                      <span class="archive-item__category"><?php echo esc_html($category->name); ?></span>
                    <?php
                      endforeach;
                    endif;
                    ?>
                  </div>
                  
                  <h2 class="archive-item__title"><?php the_title(); ?></h2>
                  
                  <div class="archive-item__excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), 80, '...'); ?>
                  </div>
                  
                  <div class="archive-item__more">
                    <span>続きを読む</span>
                    <svg class="archive-item__arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                      <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                    </svg>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- ページネーション -->
        <div class="archive-pagination">
          <?php
          the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => '&laquo; 前へ',
            'next_text' => '次へ &raquo;',
          ));
          ?>
        </div>

      <?php else : ?>
        <div class="archive-content__no-posts">
          <p>投稿が見つかりませんでした。</p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php
get_footer();
