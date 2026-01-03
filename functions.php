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
