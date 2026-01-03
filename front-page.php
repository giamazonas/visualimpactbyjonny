<?php get_header(); ?>

<main class="vi-bleed">

  <!-- HERO: full bleed visual vibe (placeholder for later media) -->
  <section class="vi-hero">
    <div class="vi-wrap">
      <p class="vi-kicker">Multi-discipline visual mastery</p>
      <h1 class="vi-h1">Visual Impact</h1>
      <p class="vi-lead">
        Photo, video, drone, and editing—built as one continuous content engine
        that helps your brand look undeniable.
      </p>

      <div class="vi-actions">
        <a class="vi-btn" href="#join">Join the List</a>
        <a class="vi-btn vi-btn--ghost" href="<?php echo esc_url(home_url('/work')); ?>">View Work</a>
      </div>
    </div>
  </section>

  <!-- BOLD BLOCKS: service links -->
  <section class="vi-section">
    <div class="vi-wrap">
      <div class="vi-blockgrid">
        <a class="vi-block" href="<?php echo esc_url(home_url('/photography')); ?>">
          <strong>Photography</strong><span>Portrait - Brand - Product</span>
        </a>
        <a class="vi-block" href="<?php echo esc_url(home_url('/videography')); ?>">
          <strong>Videography</strong><span>Reels - Promos - Events</span>
        </a>
        <a class="vi-block" href="<?php echo esc_url(home_url('/drone')); ?>">
          <strong>Drone</strong><span>Aerial - Real estate - Venues</span>
        </a>
        <a class="vi-block" href="<?php echo esc_url(home_url('/media-editing')); ?>">
          <strong>Media Editing</strong><span>Color - Cuts - Delivery</span>
        </a>
      </div>
    </div>
  </section>

  <!-- PORTFOLIO STORY SCROLL / CONTINUOUS FEED (placeholder rows) -->
  <section class="vi-feed">
    <div class="vi-wrap">
      <div class="vi-feed-row">
        <h2 style="margin:0 0 .5rem;">Portfolio story scroll</h2>
        <p style="margin:0; opacity:.85;">Designed as one continuous feed. wire to real projects here</p>
      </div>

      <div class="vi-feed-row">
        <h3 style="margin:0 0 1rem;">Mixed media grid</h3>
        <div class="vi-mixed">
          <div class="vi-card">Image / video placeholder</div>
          <div class="vi-card">Image / video placeholder</div>
          <div class="vi-card">Image / video placeholder</div>
        </div>
      </div>
    </div>
  </section>

  <!-- LEAD MAGNET -->
  <section class="vi-section">
    <div class="vi-wrap">
      <div class="vi-card">
        <p class="vi-kicker" style="margin-top:0;">Free guide</p>
        <h2 style="margin:0 0 .75rem;">Improve your drone photography</h2>
        <p style="margin:0 0 1rem; max-width: 70ch;">
          Quick wins, settings, and composition tips that instantly level up your aerial shots.
        </p>
        <a class="vi-btn" href="<?php echo esc_url(home_url('/free-guide')); ?>">Get the free guide</a>
        <p class="vi-help">Later can connect this to a funnel? (WP Funnels) or email platform.</p>
      </div>
    </div>
  </section>

  <!-- SOCIAL PROOF (placeholders) -->
  <section class="vi-section">
    <div class="vi-wrap">
      <h2 style="margin-top:0;">Trusted by</h2>
      <div class="vi-mixed">
        <div class="vi-card">Google reviews carousel placeholder</div>
        <div class="vi-card">Brand logos row placeholder</div>
      </div>
    </div>
  </section>

  <!-- ABOUT TEASER -->
  <section class="vi-section">
    <div class="vi-wrap">
      <div class="vi-card">
        <h2 style="margin-top:0;">About</h2>
        <p style="margin:0 0 1rem; max-width: 75ch;">
          Brasil influence, artistic intelligence, and technical expertise...built for brands that
          want content with emotion and precision.
        </p>
        <a class="vi-btn vi-btn--ghost" href="<?php echo esc_url(home_url('/about')); ?>">Read the story</a>
      </div>
    </div>
  </section>

  <!-- FINAL CTA: email signup repeat -->
  <section id="join" class="vi-section vi-border-top">
    <div class="vi-wrap">
      <?php echo do_shortcode('[vi_signup]'); ?>
      <p style="margin-top:1rem; opacity:.85;">
        Follow along for tutorials, gear tips, and behind the scenes.
      </p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
