<?php
/* Template Name: Contact */
get_header(); ?>

<div class="main">
  <div class="container">


    	<?php // Start the loop ?>
      	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="contact-content">
			<h2 class="contact-page-title"><?php the_title(); ?></h2>
	    	<div class="contact-info">
	    		<div class='contact-image'>
		    		<img src="<?php echo get_featured_url($post, 'landscape-large') ?>" alt="">
	    		</div>
	    		<div class="contact-form"><?php the_content(); ?></div>
	    	</div>
		</div>

      <?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>