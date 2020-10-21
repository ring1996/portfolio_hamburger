<!-- l-aside -->
<aside class="l-aside">
  <div class="p-aside">
    <h2 class="p-aside__ttl u-en">Menu</h2>
    <button class="p-aside__btn js-menu-close"></button>
    <?php
      $args = [
        'menu' => 'category-menu',
        'container' => false,
        'menu_class' => 'p-aside__content'
      ];
      wp_nav_menu($args);
    ?>
  </div>
</aside><!-- l-aside -->