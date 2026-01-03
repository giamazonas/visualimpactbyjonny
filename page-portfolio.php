<?php
/* Template Name: Portfolio  */
get_header();

$active_tag = isset($_GET['tag']) ? sanitize_text_field($_GET['tag']) : '';
?>

<main class="vi-bleed">
  <section class="vi-section">
    <div class="vi-wrap">
      <p class="vi-kicker">Portfolio</p>
      <h1 class="vi-h1" style="margin-top:0;">One continuous feed.</h1>
      <p class="vi-lead">
        Photo, video, drone, and edits 
        Filter by vibe when you want
      </p>

      <?php
        // Tag "chips" for Phase 1 filtering (uses built-in WP tags)
        $tags = get_tags(['hide_empty' => true]);
        if (!empty($tags)) :
      ?>
        <div class="vi-tags" aria-label="Portfolio filters">
          <a class="vi-tag <?php echo $active_tag === '' ? 'is-active' : ''; ?>"
            href="<?php echo esc_url(get_permalink()); ?>">
            All
          </a>

          <?php foreach ($tags as $t) : ?>
            <a class="vi-tag <?php echo $active_tag === $t->slug ? 'is-active' : ''; ?>"
               href="<?php echo esc_url(add_query_arg('tag', $t->slug, get_permalink())); ?>">
              <?php echo esc_html($t->name); ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="vi-section vi-border-top">
    <div class="vi-wrap">
      <div class="vi-feed-grid">
        <?php
          // Phase 1 feed = regular Posts (or any post type you choose later)
          // Suggested: tag posts as photo / video / drone / editing, etc.
          $q_args = [
            'post_type'      => 'post',
            'posts_per_page' => 24,
            'paged'          => max(1, get_query_var('paged')),
          ];

          if ($active_tag) {
            $q_args['tag'] = $active_tag;
          }

          $q = new WP_Query($q_args);

          if ($q->have_posts()) :
            while ($q->have_posts()) : $q->the_post(); ?>
              <article <?php post_class('vi-feed-item'); ?>>
                <a class="vi-feed-link" href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="vi-thumb">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                  <?php else : ?>
                    <div class="vi-thumb vi-thumb--empty">
                      <span>Media placeholder</span>
                    </div>
                  <?php endif; ?>

                  <h2 class="vi-feed-title"><?php the_title(); ?></h2>

                  <div class="vi-feed-meta">
                    <?php
                      $post_tags = get_the_tags();
                      if ($post_tags) {
                        $names = array_map(fn($x) => $x->name, $post_tags);
                        echo esc_html(implode(' · ', array_slice($names, 0, 3)));
                      }
                    ?>
                  </div>
                </a>
              </article>
            <?php endwhile;

            // Pagination (simple)
            $links = paginate_links([
              'total'   => $q->max_num_pages,
              'current' => max(1, get_query_var('paged')),
              'type'    => 'list',
            ]);

            if ($links) : ?>
              <nav class="vi-pagination" aria-label="Portfolio pagination">
                <?php echo $links; ?>
              </nav>
            <?php endif;

          else : ?>
            <div class="vi-card">
              <h2 style="margin-top:0;">No posts yet</h2>
              <p style="margin-bottom:0;">
                Add posts and tag them (photo, video, drone, editing) to populate this feed.
              </p>
            </div>
          <?php endif;

          wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>

  <section class="vi-section">
    <div class="vi-wrap">
      <div class="vi-card">
        <h2 style="margin-top:0;">Want updates as new work drops?</h2>
        <p style="max-width:70ch;">
          Follow along for tutorials, gear tips, and behind-the-scenes, plus fresh releases.
        </p>
        <?php echo do_shortcode('[vi_signup]'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
