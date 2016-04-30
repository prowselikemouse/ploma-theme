<?php get_header(); ?>
<div class="main">
  <div class="container">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h1 class="entry-title-top"><?php the_title(); ?></h1>
    <div class="single-main"> 
        <div class="single-image">
          <?php $image = the_post_thumbnail( 'landscape-large' ); ?> 
        </div>
      <div class="single-below">
        <div class="single-content">
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h1 class="entry-title"><?php the_title(); ?></h1>
        
              <div class="entry-meta">
                <?php hackeryou_posted_on(); ?>
              </div><!-- .entry-meta -->
        
              <div class="entry-content">
                <?php the_content(); ?>
              </div><!-- .entry-content -->
            </div><!-- #post-## -->
        <?php endwhile; // end of the loop. ?>
        </div> <!-- /.single-content -->
        <div class="single-sidebar"><?php get_sidebar(); ?></div>
      </div>
    </div> <!--/.single-main-->

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="entry-utility">
      <?php hackeryou_posted_in(); ?>
      <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-utility -->
      <?php wp_link_pages(array(
        'before' => '<div class="page-link"> Pages: ',
        'after' => '</div>'
      )); ?>

    <div id="nav-below" class="navigation">
      <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
      <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
    </div><!-- #nav-below -->

    <div class="single-comments"><?php comments_template( '', true ); ?></div>

  <?php endwhile; // end of the loop. ?>



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>