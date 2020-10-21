<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- basic -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="email=no, telephone=no, address=no">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- l-site-box -->
  <div class="l-site-box">
    <!-- l-main-area -->
    <div class="l-main-area">
      <!-- l-header -->
      <header class="l-header">
        <div class="p-header">
          <h1 class="p-header__logo">
            <span class="u-screen-reader-text">Hamburger</span>
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/common_logo.svg" alt="Hamburger"></a>
          </h1>
          <?php get_search_form(); ?>
          <button class="p-header__btn u-en js-menu-open">Menu</button>
        </div>
      </header><!-- /l-header -->