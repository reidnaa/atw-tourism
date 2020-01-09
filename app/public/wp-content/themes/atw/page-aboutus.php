<?php 

/*
* Template Name: About Us
*
*
*/
get_header(); ?>

	<main role="main">

    <h1 class="page-title"><span><?php the_title(); ?></span></h1>
		<!-- section -->
		<section>
        

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
          
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				<br class="clear">

				<?php edit_post_link(); ?>

            </article>
            

            
            <div class="side-images">
                <?php $image_id = get_field('image_1');?>

                <?php echo wp_get_attachment_image($image_id, 'small', false, false) ?>
                <?php $image_id_2 = get_field('image_2');?>

                <?php echo wp_get_attachment_image($image_id_2, 'small', false, false) ?>
            </div>
			<!-- /article -->

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
