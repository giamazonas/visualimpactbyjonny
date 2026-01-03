<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header style="padding: 1.5rem 2rem; border-bottom: 1px solid #e5e5e5;">
  <strong>Visual Impact</strong>
  <nav style="margin-top: 0.75rem;">
  <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => false,
      'fallback_cb'    => 'wp_page_menu',
      'menu_class'     => 'vi-menu',
    ]);
  ?>
</nav>

</header>
