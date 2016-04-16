<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php $imageURL = hackeryou_get_thumbnail_url($post); ?>
      <img src="<?php echo $imageURL ?>" alt="">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
      <section class="featured-blogs">
        <div class="wrapper clearfix">
          <ul>
          <?php $blogQuery = new WP_Query( 
            array(
              'posts_per_page' => 3,
              'post_type' => 'post',
            )
           ); ?>
          <?php if ( $blogQuery->have_posts() ) : ?>
          <?php while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); ?>
            <li class="blog-thumbnail">
              <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?> 
            </li>
            <li class="blog-excerpt">
              <h3><a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
              </a></h3>
              <div class="post-details-container">
                <h4><?php the_author(); ?></h4>
                <h4 id="post-date"><?php the_date('F j, Y'); ?></h4>
              </div>
              <p><?php the_excerpt(); ?></p>
            </li>
              <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
              <?php else:  ?>
                  <h3>No posts to display. ¯\_(ツ)_/¯</h3>
              <?php endif; ?>
              </ul>
        </div>
      </section>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>