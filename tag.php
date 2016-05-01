<?php get_header(); ?>
<div class="main">
  <div class="container">

    <div class="content">
      <h1 class="archive-title"><?php single_tag_title(); ?></h1>
      <div class="archive-article"><?php get_template_part( 'loop', 'tag' ); ?></div>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>