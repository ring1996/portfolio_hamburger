<?php get_header(); ?>
      <!-- l-main -->
      <main class="l-main">
        <!-- p-main-visual -->
        <div class="p-sub-visual">
          <h1 class="p-sub-visual__ttl u-en">
            Menu:<br>
            <span class="p-sub-visual__ttl__sub"><?php single_term_title(); ?></span>
          </h1>
        </div><!-- /p-sub-visual -->
        <!-- l-under-content -->
        <div class="l-under-content">
          <?php if(have_posts()) : ?>
          <!-- p-archive -->
          <section class="p-archive">
            <?php if(in_category('バーガー')) : ?>
              <h2 class="p-archive__ttl">バーガーの小見出しが入ります</h2>
              <p class="p-archive__txt">バーガーのテキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <?php elseif(in_category('サイド')) : ?>
              <h2 class="p-archive__ttl">サイドの小見出しが入ります</h2>
              <p class="p-archive__txt">サイドのテキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <?php elseif(in_category('ドリンク')) : ?>
              <h2 class="p-archive__ttl">ドリンクの小見出しが入ります</h2>
              <p class="p-archive__txt">ドリンクのテキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <?php endif; ?>

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
          </section><!-- /p-archive -->
          <?php else : ?>
            <p>メニューがありません。</p>
          <?php endif; ?>
        </div><!-- /l-under-content -->
      </main><!-- /l-main -->
    </div><!-- /l-main-area -->
    <?php get_sidebar(); ?>
  </div><!-- /l-site-box -->
<?php get_footer(); ?>