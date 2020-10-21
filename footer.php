  <!-- l-footer -->
  <footer class="l-footer">
    <div class="p-footer">
      <nav class="p-footer__nav">
        <?php
          $args = [
            'menu' => 'footer-menu',
            'container' => false
          ];
          wp_nav_menu($args);
        ?>
      </nav>
      <p class="p-footer__copy-right">
        <small>Copyright: <a href="<?php echo esc_url(home_url()); ?>">RaiseTech</a></small>
      </p>
    </div>
  </footer><!-- /l-footer -->
  <?php wp_footer(); ?>
</body>
</html>