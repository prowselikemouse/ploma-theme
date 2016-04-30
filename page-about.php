<?php
/* Template Name: About */
get_header(); ?>

<div class="main">
  <div class="container">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	   <div class="about-content">
	   	 <h2 class="about-page-title"><?php the_title(); ?></h2> 
   			<div class="about-info">
   				<div class="about-image">
   				    <?php $image = the_post_thumbnail( 'landscape-large' ); ?>
   				</div>
   				<div class="about-paragraph"><?php the_content(); ?></div>
   			</div>
	   </div>

    <?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>