<?php
/**
 * Visual Impact theme functions
 */

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'visual-impact-style',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
});
add_action('after_setup_theme', function () {
  register_nav_menus([
    'primary' => __('Primary Menu', 'visual-impact'),
  ]);
});
add_theme_support('menus');


