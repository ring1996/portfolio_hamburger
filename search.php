<?php get_header(); ?>
      <!-- l-main -->
      <main class="l-main">
        <!-- p-main-visual -->
        <div class="p-sub-visual">
          <h1 class="p-sub-visual__ttl u-en">
            Search:<br>
            <span class="p-sub-visual__ttl__sub">
              <?php the_search_query(); ?>
            </span>
          </h1>
        </div><!-- /p-sub-visual -->
        <!-- l-under-content -->
        <div class="l-under-content">
          <!-- p-archive -->
          <div class="p-archive">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
                <article class="p-card">
                  <div class="p-card__content">
                    <h1 class="p-card__content__ttl"><?php the_title(); ?></h1>
                    <div class="p-card__content__inner">
                      <?php the_excerpt(); ?>
                      <p class="p-card__content__detail"><a href="<?php the_permalink(); ?>">詳しく見る</a></p>
                    </div>
                  </div>
                  <?php if(has_post_thumbnail()) : ?>
                  <figure class="p-card__img-box">
                    <?php the_post_thumbnail(); ?>
                  </figure>
                  <?php else : ?>
                  <figure class="p-card__img-box">
                    <img src="https://placehold.jp/1368x768.png" alt="画像がありません">
                  </figure>
                  <?php endif; ?>
                </article>
              <?php endwhile; ?>
              <?php
                // ページネーション
                $args = [
                  'prev_text' => '<span class="prev_text">前へ</span>',
                  'next_text' => '<span class="next_text">次へ</span>',
                  'mid_size' => '4'
                ];
                the_posts_pagination($args);
              ?>
            <?php else : ?>
              <p>検索結果がありません。</p>
            <?php endif; ?>
          </div><!-- /p-archive -->
        </div><!-- /l-under-content -->
      </main><!-- /l-main -->
    </div><!-- /l-main-area -->
    <?php get_sidebar(); ?>
  </div><!-- /l-site-box -->
<?php get_footer(); ?>