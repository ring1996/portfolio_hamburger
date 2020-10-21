<?php get_header(); ?>
      <!-- l-main -->
      <main class="l-main">
        <!-- p-article -->
        <?php the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class("p-article"); ?>>
          <header class="p-article__header">
            <h1 class="p-article__title"><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail()) : ?>
            <figure class="p-article__thumbnail">
              <?php the_post_thumbnail(); ?>
            </figure>
            <?php else : ?>
            <figure class="p-article__thumbnail">
              <img src="https://placehold.jp/1368x768.png" alt="画像がありません">
            </figure>
            <?php endif; ?>
          </header>
          <section class="p-article__body">
            <?php the_content(); ?>
            <?php $args = array (
                'before' => '<div class="page-split">',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
                );
                wp_link_pages($args);
            ?>
          </section>
        </div><!-- /p-article -->
      </main><!-- /l-main -->
    </div><!-- /l-main-area -->
    <?php get_sidebar(); ?>
  </div><!-- /l-site-box -->
<?php get_footer(); ?>