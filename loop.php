<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php echo get_the_post_thumbnail($post->ID , 'landscape') ?>
			<div class="entry-details-container">
				<div class="entry-details">
					<h4><?php the_date('F j, Y'); ?></h4>
					<h4><?php the_tags('Tags: ', ', ', '<br>'); ?></h4>
					<p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
				</div>
				<div class="entry-content">
					<h3 class="entry-title">
		        		<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
			          	<?php the_title(); ?>
				        </a>
			      	</h3>
			      	<p><?php the_excerpt(); ?></p>		
				</div>
			</div>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
