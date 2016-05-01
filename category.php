<?php get_header(); ?>
<div class="main">
  <div class="container">
    <div class="content">
      <h1 class="archive-title"><?php single_cat_title(); ?></h1>
    	<div class="archive-article"><?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?></div>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>