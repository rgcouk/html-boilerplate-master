<?php
/*
 * The Page template file
 */
get_header(); ?>

<section id="page-<?= the_ID(); ?>">
  <header>
    <h2><?= the_title(); ?></h2>
  </header>
  <div class="content">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</section>

<?php get_footer(); ?>
