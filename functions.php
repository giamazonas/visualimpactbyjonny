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
add_shortcode('vi_signup', function () {
  ob_start(); ?>
    <form class="vi-signup" action="#" method="post" onsubmit="return false;">
      <label class="vi-label" for="vi-email">Get tutorials, gear tips, and BTS.</label>
      <div class="vi-row">
        <input id="vi-email" class="vi-input" type="email" placeholder="you@example.com" />
        <button class="vi-btn" type="submit">Join the List</button>
      </div>
      <p class="vi-help">Placeholder form... connect real email platform next here</p>
    </form>
  <?php
  return ob_get_clean();
});


