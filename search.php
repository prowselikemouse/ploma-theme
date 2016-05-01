<?php get_header(); ?>
<div class="main">
	<div class="container">

		<div class="content">
			<?php if ( have_posts() ) : ?>

				<h1 class="archive-title">search results for: <?php echo get_search_query(); ?></h1>
				<div class="archive-article"><?php get_template_part( 'loop', 'search' ); ?></div>

			<?php else : ?>

				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div> <!-- /.content -->

		<?php get_sidebar(); ?>

	</div><!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
