<?php
/**
 * Visual Impact theme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>

  <main style="padding: 2rem; font-family: system-ui;">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?> style="margin-bottom: 2rem;">
        <h1 style="margin: 0 0 0.5rem 0;">
          <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
            <?php the_title(); ?>
          </a>
        </h1>

        <div>
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No content found.</p>
  <?php endif; ?>
</main>
  <?php get_footer(); ?>
</body>
</html>
