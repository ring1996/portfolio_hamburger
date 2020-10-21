<?php
  /*======================================
    コンテンツ幅
  ======================================*/
  if ( !isset( $content_width ) ) {
    $content_width = 1553;
  }

  /*======================================
    初期設定
  ======================================*/
  function custom_theme_support() {

    /*
      title
    ----------------------------------- */
    add_theme_support('title-tag');

    /*
      thumbnails
    ----------------------------------- */
    add_theme_support('post-thumbnails');

    // 画像サイズを追加
    set_post_thumbnail_size(677, 471, true);

    /*
      menu
    ----------------------------------- */
    register_nav_menus([
      'category-menu' => '',
      'footer-menu' => ''
    ]);

    /*
      feed-link
    ----------------------------------- */
    add_theme_support('automatic-feed-links');

  }
  add_action('after_setup_theme', 'custom_theme_support');

  /*======================================
    スタイル・スクリプトの追加
  ======================================*/
  function read_script() {
    /*
      CSS
    ----------------------------------- */
    wp_enqueue_style('css', get_theme_file_uri() . '/assets/css/style.min.css');

    /*
      JS
    ----------------------------------- */
    wp_enqueue_script('js', get_theme_file_uri() . '/assets/js/main.js', '', '', true);
  }
  add_action('wp_enqueue_scripts', 'read_script');

  /*======================================
    スタイル・スクリプトの追加
  ======================================*/
  /*
    文字数の変更
  ----------------------------------- */
  function change_excerpt_length() {
    return 100;
  }
  add_filter('excerpt_length', 'change_excerpt_length', 999);

  function change_excerpt_more() {
    return '...';
  }
  add_filter('excerpt_more', 'change_excerpt_more');

  /*======================================
    ページネーションのカスタマイズ
  ======================================*/
  function custom_the_posts_pagination($template) {
    global $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $max_page = $wp_query->max_num_pages;
    $template = '
    <nav class="%1$s" role="navigation" aria-label="投稿">
      <h2 class="screen-reader-text">%2$s</h2>
      <div class="nav-links">
        <p class="current-number">page ' . $paged . '/' . $max_page . '</p>
        %3$s
      </div>
    ';
    return $template;
  }
  add_filter('navigation_markup_template', 'custom_the_posts_pagination');