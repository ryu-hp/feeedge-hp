<?php
/**
 * Template Name: Taxonomy（タクソノミー）
 * カスタムタクソノミーアーカイブページ用テンプレート
 */
get_header();
?>

<main class="main page-taxonomy">
  <!-- ファーストビュー -->
  <section class="page-fv">
    <div class="page-fv__container">
      <div class="page-fv__content">
        <h1 class="page-fv__title"><?php single_term_title(); ?></h1>
        <p class="page-fv__subtitle">
          <?php
          $term = get_queried_object();
          $taxonomy = get_taxonomy($term->taxonomy);
          echo esc_html($taxonomy->label);
          ?>
        </p>
      </div>
    </div>
  </section>

  <!-- タクソノミーコンテンツ -->
  <section class="taxonomy-content" id="taxonomy-content">
    <div class="taxonomy-content__container container">
      <?php if (have_posts()) : ?>
        <?php
        $term_description = term_description();
        if ($term_description) :
        ?>
          <div class="taxonomy-content__description">
            <?php echo $term_description; ?>
          </div>
        <?php endif; ?>

        <div class="taxonomy-content__list">
          <?php while (have_posts()) : the_post(); ?>
            <article class="taxonomy-item">
              <a href="<?php the_permalink(); ?>" class="taxonomy-item__link">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="taxonomy-item__image">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
                <?php else : ?>
                  <div class="taxonomy-item__image taxonomy-item__image--noimage">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/noimage.webp" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
                
                <div class="taxonomy-item__content">
                  <div class="taxonomy-item__meta">
                    <time class="taxonomy-item__date" datetime="<?php echo get_the_date('c'); ?>">
                      <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <span class="taxonomy-item__type"><?php echo get_post_type_object(get_post_type())->labels->singular_name; ?></span>
                  </div>
                  
                  <h2 class="taxonomy-item__title"><?php the_title(); ?></h2>
                  
                  <div class="taxonomy-item__excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), 80, '...'); ?>
                  </div>
                  
                  <div class="taxonomy-item__more">
                    <span>詳しく見る</span>
                    <svg class="taxonomy-item__arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.42 8.25">
                      <path d="M13.29,8.25l-1.31-1.28,1.92-1.92H0v-1.83h13.91l-1.9-1.92,1.31-1.28,4.1,4.12-4.13,4.13Z"/>
                    </svg>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- ページネーション -->
        <div class="taxonomy-pagination">
          <?php
          the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => '&laquo; 前へ',
            'next_text' => '次へ &raquo;',
          ));
          ?>
        </div>

      <?php else : ?>
        <div class="taxonomy-content__no-posts">
          <p>投稿が見つかりませんでした。</p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php
get_footer();
