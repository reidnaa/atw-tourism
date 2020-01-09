<?php 
/*
* Template Name: Tours
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
                <ul>
                    <?php $args = array(
                        'posts_per_page' => 4,    
                        'post_type' => 'world_tours'
                    );

                        $tour = new WP_Query($args);

                        while ($tour->have_posts()) : $tour->the_post();
                    ?>
                        <li>
                            
                                <div class="single-tour">
                                    <?php the_post_thumbnail('tour');?>
                                    <a class="more-info" href="<?php the_permalink();?>">
                                        <img src="<?php echo get_template_directory_uri() . '/img/moreinfo.png';?>" />
                                    </a>
                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                    <?php $format = 'd F, Y'; ?>
                                     <?php $date = strtotime(get_field('leaving_date')); 
                                        $leavingDate = date_i18n($format, $date);

                                        

                                        $date = strtotime(get_field('returning_date')); 
                                        $returningDate = date_i18n($format, $returningDate);
                                    ?> 
                                    <div class="date-price">
                                        <p class="date">
                                            <?php echo $leavingDate . ' - ' . $returningDate;?>

                                        </p>
                                        <p class="price">
                                            <?php echo get_field('price'); ?>
                                        </p>
                                    </div>

                                    <div class="tour-desc">
                                        <p><?php echo get_field('small_description');?></p>
                                    </div>
                                </div>
                             
                        </li>
                    <?php endwhile; wp_reset_postdata(); ?>

                </ul>
				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
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
