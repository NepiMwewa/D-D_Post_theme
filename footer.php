<footer class="footer-content">

  <div class="upper-footer-content">
  <?php wp_nav_menu(array(
      'theme_location' 	=> 'footer',
        'menu_id' 		 	=> 'footer-menu',
        'menu_class' 		=> 'menu-class',
        'container' 	 	=> 'nav',
        'container_class'	=> 'footer-menu-container',
        'depth'				=> 2,
        'fallback_cb' 		=> false
    ) ); 
  ?>
  <div class="form-div">
    <h3>Get Free Weekly Encounters</h3>
    <p>If you sign up for our free weekly newsletter, you’ll be notified when a new encounter releases, and you’ll receive additional details and resources for running that encounter, directly in your inbox.</p>
    <?php echo do_shortcode('[wpforms id="91"]'); ?>
  </div>
  </div>
  
  <div class="footer-copyright">
    <div class="copyright-info">
      <p><?php
        echo ('&copy; ' . date_i18n( 'Y' ) . ' The Quest Brothers' );
      ?></p>
    </div>
    <div class="privacy-menu-container">
      <?php
        wp_nav_menu( array(
          'theme_location' 	=> 'privacy',
          'menu_id' 		 	=> 'privacy-menu',
          'menu_class' 		=> '',
          'container' 	 	=> 'nav',
          'container_class'	=> '',
          'depth'				=> 1,
          'fallback_cb' 		=> false
        ) );
      ?>
    </div>
    <div class="credit">
      <p>Website Design by <a href="https://alexanderharmon.dev/">Alexander Harmon</a></p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
