<?php 
/*
* Template Name: Testimonials
*
*/

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
        <h2 class="page-title"> <span><?php the_title(); ?></span></h2>
        

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="testimonials-excerpt"><?php the_content(); ?></div>
            <?php $args = array(
                'post_type' => 'atw_testimonials',
                'posts_per_page' => -1
            );

                $test = new WP_Query($args);

                while ($test->have_posts()): $test->the_post();

            ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <p class="test-title"><?php the_title();?></p>
                <blockquote class="single-testimonial"><?php the_content(); ?>
                    <p class="from"> - <?php echo get_field('name');?> from <?php echo get_field('from');?></p>
                </blockquote>
                
				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
        <?php endwhile; wp_reset_postdata();?>
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
