<?php
/* Template Name: Front Page */
get_header(); ?>
<div class="main smoothScroll" id="pageTop">
  <div class="container">

      <header class="clearfix">
         <div class="header-image">
              <img src="<?php echo get_featured_url($post, 'portrait') ?>" alt="">
        </div>
         
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <div class="front-page-header-text-box">    
            <h1 class="front-page-title"><?php the_title(); ?></h1>
            <div class="front-page-subtext">
                <div class="front-page-subtext1"><?php the_field('text1') ?></div>
                <div class="front-page-subtext2"><?php the_field('text2') ?></div>
                <div class="front-page-subtext3"><?php the_field('text3') ?></div>
            </div> <!--.front-page-subtext-->
          </div> <!--.header-text-box-->
      </header>
      <div class="front-page-content"><?php the_content(); ?></div>
      <?php endwhile; // end the loop?>



      <section class="featured-posts">
        <div class="wrapper clearfix">
         <h1 class="archive-title">featured works</h1>
            <?php $blogQuery = new WP_Query( 
              array(
                'posts_per_page' => 3,
                'post_type' => 'post'
              ) ); ?>
            <?php if ( $blogQuery->have_posts() ) : ?>
            <?php while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); ?>
          <div class="front-page-blog-post">
                <div class="front-page-blog-image">
                   <img src="<?php echo get_featured_url($post, 'landscape') ?>" alt="">


                 </div>
                <div class="front-page-blog-excerpt">
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="post-details-container">
                    <h4><?php the_author(); ?></h4>
                    <h4 id="post-date"><?php the_date('F j, Y'); ?></h4>
                    <?php the_excerpt(); ?>
                  </div> <!--/.post-details-container-->
              </div> <!--/.front-page-blog-excerpt-->
            </div> <!--/.blog-post--> 
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else:  ?>
                    <h3>No posts to display. ¯\_(ツ)_/¯</h3>
                <?php endif; ?>
        </div> <!--/.wrapper -->
      </section>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>