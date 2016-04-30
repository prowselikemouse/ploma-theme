<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
 <!--    <h2><?php the_title() ?></h2> -->
     <section class="recent-posts">
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
         <div class="individual-blog-post">
            <div class="blog-image">
              <?php $image = the_post_thumbnail( 'landscape' ); ?> 
            </div>
            <div class="blog-excerpt">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="post-details-container">
                <h4><?php the_author(); ?></h4>
                <h4 id="post-date"><?php the_date('F j, Y'); ?></h4>
              </div> <!--/.post-details-container-->
              <p><?php the_excerpt(); ?></p>
            </div> <!--/.blog-excerpt -->
          </div> <!--/.individual-blog-post-->
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