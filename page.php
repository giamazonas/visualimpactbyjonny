<?php get_header(); ?>

<main style="padding: 2rem; font-family: system-ui;">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <h1 style="margin: 0 0 0.75rem 0;"><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
