<?php get_header();  ?>

<div class="main">
  <div class="container">
<p>hi this is the blog listing page
</p>
    <div class="content">
      <!-- <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

      <?php endwhile; // end the loop?> -->
     <section class="featured-blogs">
       <div class="wrapper clearfix">
         <div class="blog-post">
         <?php $blogQuery = new WP_Query( 
             array(
               'posts_per_page' => 5,
               'post_type' => 'post'
             )
          ); ?>
         <?php if ( $blogQuery->have_posts() ) : ?>

         <?php while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); ?>
         <div class="blog-thumbnail">
            <?php $imageURL = get_thumbnail_url($post); ?>
            <img src="<?php echo $imageURL ?>" alt="">
         </div>
         <div class="blog-excerpt">
           <h3><a href="<?php the_permalink(); ?>">
               <?php the_title(); ?>
           </a></h3>
           <div class="post-details-container">
             <h4><?php the_author(); ?></h4>
             <h4 id="post-date"><?php the_date('F j, Y'); ?></h4>
           </div> <!--/.post-details-container-->
           <p><?php the_excerpt(); ?></p>
         </div> <!--/.blog-excerpt -->
           <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
           <?php else:  ?>
               <h3>No posts to display. ¯\_(ツ)_/¯</h3>
           <?php endif; ?>
           </div> <!--/.blog-post -->
     </div> <!--/.wrapper -->
   </section>
    </div> <!-- /.content -->


    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>