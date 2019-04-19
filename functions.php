<?php
function theme_sources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_sources');
register_nav_menus(array(
  'main' =>  __('Main menu'),
  'footer' => __('Footer menu')
));
?>
