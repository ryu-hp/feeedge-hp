<?php
/**
 * Template Name: Page（固定ページ）
 * 基本的な固定ページ用テンプレート
 */
get_header();
?>

<main class="main page-default">
  <?php while (have_posts()) : the_post(); ?>
    <!-- ファーストビュー（下層ページ共通） -->
    <section class="page-fv">
      <div class="page-fv__container">
        <div class="page-fv__content">
          <h1 class="page-fv__title"><?php the_title(); ?></h1>
          <?php if (get_field('page_subtitle')) : ?>
            <p class="page-fv__subtitle"><?php echo esc_html(get_field('page_subtitle')); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- ページコンテンツ -->
    <article class="page-content">
      <div class="page-content__container container">
        <div class="fade-in">
          <div class="page-content__body">
            <?php
            // アイキャッチ画像がある場合表示
            if (has_post_thumbnail()) :
            ?>
              <div class="page-content__thumbnail">
                <?php the_post_thumbnail('large'); ?>
              </div>
            <?php endif; ?>
  
            <?php the_content(); ?>
  
            <?php
            // ページリンク（複数ページに分割された場合）
            wp_link_pages(array(
              'before' => '<div class="page-links"><span class="page-links-title">ページ:</span>',
              'after' => '</div>',
              'link_before' => '<span>',
              'link_after' => '</span>',
            ));
            ?>
          </div>
        </div>
        <div class="fade-in">
          <?php
          // 子ページがある場合、子ページ一覧を表示
          $child_pages = get_pages(array(
            'child_of' => get_the_ID(),
            'sort_column' => 'menu_order'
          ));
  
          if ($child_pages) :
          ?>
            <div class="page-content__children">
              <h2 class="page-content__children-title">関連ページ</h2>
              <ul class="page-content__children-list">
                <?php foreach ($child_pages as $child) : ?>
                  <li class="page-content__child-item">
                    <a href="<?php echo get_permalink($child->ID); ?>" class="page-content__child-link">
                      <?php if (has_post_thumbnail($child->ID)) : ?>
                        <div class="page-content__child-image">
                          <?php echo get_the_post_thumbnail($child->ID, 'medium'); ?>
                        </div>
                      <?php endif; ?>
                      <div class="page-content__child-content">
                        <h3 class="page-content__child-title"><?php echo esc_html($child->post_title); ?></h3>
                        <?php if ($child->post_excerpt) : ?>
                          <p class="page-content__child-excerpt"><?php echo esc_html($child->post_excerpt); ?></p>
                        <?php endif; ?>
                      </div>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php
get_footer();
