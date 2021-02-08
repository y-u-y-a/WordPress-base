<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php while (have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>

      <ul>
        <li>筆者：<?php the_field('contributor'); ?></li>
        <li>日付：<?php the_field('date'); ?></li>
      </ul>

    <?php endwhile; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
