<?php
/* Template Name: About */
get_header();
?>

<main class="vi-bleed">

  <!-- Visual intro (Brasil colors placeholder) -->
  <section class="vi-section vi-about-hero">
    <div class="vi-wrap">
      <p class="vi-kicker">About</p>
      <h1 class="vi-h1" style="margin-top: 0;">Jonny</h1>
      <p class="vi-lead">
        Confident, expressive visuals... where creative instinct meets technical mastery.
      </p>

      <!-- Placeholder for future photo/video -->
      <div class="vi-about-visual" aria-label="Visual intro placeholder"></div>
    </div>
  </section>

  <!-- Jonny’s story -->
  <section class="vi-section">
    <div class="vi-wrap">
      <h2 style="margin-top: 0;">Jonny’s story</h2>
      <div class="vi-card">
        <p style="margin-top: 0;">
          I grew up in Brazil and cultivated a love for beauty, developing a creative eye: always noticing light, color, movement, and mood.
          Over time, that instinct became a craft: photography, video, drone, and editing, built with
          equal parts taste and technical precision.
        </p>
        <p style="margin-bottom: 0;">
          Today, Visual Impact by Jonny is where that background flows into results: content that feels alive,
          looks premium, and represents the feeling you are trying to capture in each moment we work together!
        </p>
      </div>
    </div>
  </section>

  <!-- What it feels like to work with him -->
  <section class="vi-section">
    <div class="vi-wrap">
      <h2 style="margin-top: 0;">What it feels like to work together</h2>

      <div class="vi-mixed">
        <div class="vi-card">
          <h3 style="margin-top: 0;">Comfort & levity</h3>
          <p style="margin-bottom: 0;">
            You’ll feel relaxed on camera. I keep it light, give clear direction, and make sure you
            look and feel like yourself.
          </p>
        </div>

        <div class="vi-card">
          <h3 style="margin-top: 0;">Creative & technical</h3>
          <p style="margin-bottom: 0;">
            A strong creative eye backed by deep knowledge of gear, lighting, composition, and post-production.
          </p>
        </div>

        <div class="vi-card">
          <h3 style="margin-top: 0;">Professional & relentless</h3>
          <p style="margin-bottom: 0;">
            One of the hardest workers you’ll meet: fast, thorough, and serious about quality from capture to delivery. Let's make this moment your own!
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Light CTA to email signup -->
  <section class="vi-section vi-border-top">
    <div class="vi-wrap">
      <h2 style="margin-top: 0;">Stay in the loop</h2>
      <p style="max-width: 70ch;">
        Get updates on upcoming events, special offers, behind-the-scenes, and new work.
      </p>
      <?php echo do_shortcode('[vi_signup]'); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
