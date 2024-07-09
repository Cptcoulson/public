<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<footer class="bootscore-footer">

  <?php if (is_active_sidebar('footer-top')) : ?>
    <div class="<?= apply_filters('bootscore/class/footer/top', 'bg-body-tertiary border-bottom py-5'); ?> bootscore-footer-top">
      <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-top'); ?>">  
        <?php dynamic_sidebar('footer-top'); ?>
      </div>
    </div>
  <?php endif; ?>
  
  <div class="<?= apply_filters('bootscore/class/footer/columns', 'bg-body-tertiary pt-5 pb-4'); ?> bootscore-footer-columns">
    <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-columns'); ?>">  

      <div class="row">


      <div class="small bootscore-copyright text-center"><span class="cr-symbol">&copy;</span>&nbsp;<?= date('Y'); ?> Krayus Games</div>
  </div>
    </div>
  </div>


</footer>

<!-- To top button -->
<a href="#" class="<?= apply_filters('bootscore/class/footer/to_top_button', 'btn btn-primary shadow'); ?> position-fixed zi-1000 top-button"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>