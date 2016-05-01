<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) the_post(); ?>

      <h1 class="archive-title">
        <?php if ( is_day() ) : ?>
          <?php the_date(); ?>
        <?php elseif ( is_month() ) : ?>
          <?php the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
          </span><?php the_date('Y'); ?>
        <?php else : ?>
          blog archives
        <?php endif; ?>
      </h1>

      <div class="archive-article"><?php
    	/* Since we called the_post() above, we need to
    	 * rewind the loop back to the beginning that way
    	 * we can run the loop properly, in full.
    	 */
    	rewind_posts();

    	/* Run the loop for the archives page to output the posts.
    	 * If you want to overload this in a child theme then include a file
    	 * called loop-archives.php and that will be used instead.
    	 */
      get_template_part( 'loop', 'archive' );
      ?></div>

    </div><!--/content-->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>