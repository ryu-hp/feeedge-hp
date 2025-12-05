<?php
/**
 * Template Name: Single（シングル投稿）
 * 個別投稿ページ用テンプレート
 */
get_header();
?>

<main class="main page-single">
  <?php while (have_posts()) : the_post(); ?>
    <!-- ファーストビュー -->
    <section class="single-fv">
      <div class="single-fv__container">
        <div class="single-fv__content">
          <div class="single-fv__meta">
            <time class="single-fv__date" datetime="<?php echo get_the_date('c'); ?>">
              <?php echo get_the_date('Y.m.d'); ?>
            </time>
            <?php
            $categories = get_the_category();
            if ($categories) :
              foreach ($categories as $category) :
            ?>
              <span class="single-fv__category"><?php echo esc_html($category->name); ?></span>
            <?php
              endforeach;
            endif;
            ?>
          </div>
          <h1 class="single-fv__title"><?php the_title(); ?></h1>
        </div>
        <?php if (has_post_thumbnail()) : ?>
          <div class="single-fv__image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <!-- 投稿コンテンツ -->
    <article class="single-content">
      <div class="single-content__container container">
        <div class="single-content__body">
          <?php the_content(); ?>
          
          <?php
          wp_link_pages(array(
            'before' => '<div class="page-links"><span class="page-links-title">ページ:</span>',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
          ));
          ?>
        </div>

        <?php
        $tags = get_the_tags();
        if ($tags) :
        ?>
          <div class="single-content__tags">
            <p class="single-content__tags-label">タグ:</p>
            <ul class="single-content__tags-list">
              <?php foreach ($tags as $tag) : ?>
                <li class="single-content__tag">
                  <a href="<?php echo get_tag_link($tag->term_id); ?>">
                    #<?php echo esc_html($tag->name); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- 前後の記事ナビゲーション -->
        <nav class="single-navigation">
          <div class="single-navigation__prev">
            <?php
            $prev_post = get_previous_post();
            if ($prev_post) :
            ?>
              <a href="<?php echo get_permalink($prev_post); ?>" class="single-navigation__link">
                <span class="single-navigation__label">前の記事</span>
                <span class="single-navigation__title"><?php echo esc_html($prev_post->post_title); ?></span>
              </a>
            <?php endif; ?>
          </div>
          <div class="single-navigation__next">
            <?php
            $next_post = get_next_post();
            if ($next_post) :
            ?>
              <a href="<?php echo get_permalink($next_post); ?>" class="single-navigation__link">
                <span class="single-navigation__label">次の記事</span>
                <span class="single-navigation__title"><?php echo esc_html($next_post->post_title); ?></span>
              </a>
            <?php endif; ?>
          </div>
        </nav>

        <!-- 関連記事 -->
        <?php
        $categories = get_the_category();
        if ($categories) :
          $category_ids = array();
          foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
          }
          
          $args = array(
            'category__in' => $category_ids,
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => 3,
            'orderby' => 'rand'
          );
          
          $related_query = new WP_Query($args);
          
          if ($related_query->have_posts()) :
        ?>
          <div class="single-related">
            <h2 class="single-related__title">関連記事</h2>
            <div class="single-related__list">
              <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                <article class="single-related__item">
                  <a href="<?php the_permalink(); ?>" class="single-related__link">
                    <?php if (has_post_thumbnail()) : ?>
                      <div class="single-related__image">
                        <?php the_post_thumbnail('medium'); ?>
                      </div>
                    <?php else : ?>
                      <div class="single-related__image single-related__image--noimage">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/noimage.webp" alt="<?php the_title(); ?>">
                      </div>
                    <?php endif; ?>
                    <div class="single-related__content">
                      <time class="single-related__date" datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                      </time>
                      <h3 class="single-related__item-title"><?php the_title(); ?></h3>
                    </div>
                  </a>
                </article>
              <?php endwhile; ?>
            </div>
          </div>
        <?php
          endif;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php
get_footer();
