<?php

/**
 * Theme functions and definitions.
 */

// 主题支持
add_theme_support( 'title-tag' );

// 启用jQuery懒加载
function add_lazyload_script() {
  wp_enqueue_script( 'jquery-lazyload', get_template_directory_uri() . '/js/jquery.lazyload.min.js', array( 'jquery' ), '1.9.7', true );
}
add_action( 'wp_enqueue_scripts', 'add_lazyload_script' );

// 设置博客文章的懒加载图像
function set_lazyload_images() {
  ?>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('img').lazyload({
        effect: 'fadeIn',
        placeholder: '<?php echo get_template_directory_uri() . '/images/loading.gif'; ?>',
      });
    });
  </script>
  <?php
}
add_action( 'wp_footer', 'set_lazyload_images' );

?>
