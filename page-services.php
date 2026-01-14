<?php
/* Template Name: Services Hub */
get_header();
?>

<main class="vi-bleed">

  <section class="vi-section">
    <div class="vi-wrap">
      <p class="vi-kicker">Services</p>
      <h1 class="vi-h1" style="margin-top:0;">Custom-built media services for events and brands.</h1>
      <p class="vi-lead">
        Book a session, or connect to plan your event and services needed across photo, video, drone, and editing.
      </p>
    </div>
  </section>

  <section class="vi-section vi-border-top">
    <div class="vi-wrap">
      <div class="vi-blockgrid">
        <a class="vi-block" href="<?php echo esc_url(home_url('/photography')); ?>">
          <strong>Photography</strong><span>Events - Brand - Lifestyle</span>
        </a>
        <a class="vi-block" href="<?php echo esc_url(home_url('/videography')); ?>">
          <strong>Videography</strong><span>Reels - Promos - Events</span>
        </a>
        <a class="vi-block" href="<?php echo esc_url(home_url('/drone')); ?>">
          <strong>Drone</strong><span>Aerial - Venues - Real estate</span>
        </a>
        <a class="vi-block" href="<?php echo esc_url(home_url('/media-editing')); ?>">
          <strong>Media Editing</strong><span>Color - Cuts - Delivery</span>
        </a>
      </div>
    </div>
  </section>

  <section class="vi-section">
    <div class="vi-wrap">
      <div class="vi-card">
        <p style="margin:0;">
          <strong>Looking for ongoing content or subscription-style support?</strong>
          Reach out to discuss.
        </p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
