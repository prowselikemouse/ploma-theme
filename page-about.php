<?php
/* Template Name: About */
get_header(); ?>

<div class="main">
  <div class="container">

      <?php $imageURL = get_thumbnail_url($post); ?>
     <img src="<?php echo $imageURL ?>" alt="">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>