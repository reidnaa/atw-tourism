<?php 
	
	if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php if(get_post_type() === 'world_tours'|| get_post_type() === 'post' || get_post_type() === 'atw_testimonials'):  ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('custom-size'); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif;?>
		
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<?php echo the_excerpt(); ?>

		

	</article>
<?php endif; ?>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif;?>
