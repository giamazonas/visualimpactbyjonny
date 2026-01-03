<?php get_header(); ?>

<main style="padding: 2rem; font-family: system-ui;">
  <section style="padding: 2rem; border: 1px solid #e5e5e5; border-radius: 12px;">
    <h1 style="margin-top: 0;">Visual Impact</h1>
    <p style="max-width: 60ch;">
      swap this
      placeholder for your real homepage layout.
    </p>
  </section>

  <section style="margin-top: 2rem;">
    <?php
      // Optional: show the Home page content you created in wp-admin
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    ?>
  </section>
</main>

<?php get_footer(); ?>
