<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gcc-starterkit
*/
?>
<!-- Contact Section -->
<section class="contact-section bg-light pt-4">
  <div class="container">
    <div class="social d-flex justify-content-center">
      
      <a href="<?php echo esc_html('https://www.facebook.com/gccva'); ?>" class="mx-2">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="<?php echo esc_html('https://twitter.com/germannacc'); ?>" class="mx-2">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="<?php echo esc_html('https://www.instagram.com/germanna_cc'); ?>" class="mx-2">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="<?php echo esc_html('https://www.youtube.com/user/GCCVA'); ?>" class="mx-2">
        <i class="fa fa-youtube"></i>
      </a>
      <a href="<?php echo esc_html('https://www.flickr.com/photos/germannacommunitycollege'); ?>" class="mx-2">
        <i class="fa fa-flickr"></i>
      </a>

    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-light small text-center">
  <div class="container copyright">
    
    <p><?php _e('&copy; ', 'gcc-starterkit'); echo get_the_date('Y'); ?> <a href="<?php esc_html('https://www.germanna.edu/', 'gcc-starterkit'); ?>"><?php _e('Germanna Community College', 'gcc-starterkit'); ?></a><br/>
      
    <?php the_field( 'copyright_text', 'options' ); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>