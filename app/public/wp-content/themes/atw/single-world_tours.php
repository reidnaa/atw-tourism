<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="tour-top">
            <h2 class="page-title">
				<span><?php the_title(); ?></span>
			</h2>
            <!-- /post title -->
        
        </div>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            

			<!-- post title -->
			

            <div class="tour-information">
                <p><span>Leaving and Returning Date:</span> <?php echo get_field('leaving_date') . ' - ' . get_field('returning_date');?></p>
                <p><span>Location of departure:</span> <?php echo get_field('location_for_departure');?> </p>
                <p><span>Available Seats:</span> <?php echo get_field('available_seats');?> </p>
                <p><span>Price per seat:</span> <?php echo get_field('price');?> </p>
            </div>
            <div class="travel-itinerary">
                <h3>Itinerary:</h3>
                <p><?php echo get_field('travel_itinerary');?></p>
                <hr/>
                <p><span>Details:</span><br/><?php echo get_field('small_description');?></p>
            </div>
            

				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->
       
	<?php endif; ?>
    <?php get_sidebar(); ?>
	</section>
	<!-- /section -->
	</main>
        

<?php get_footer(); ?>
