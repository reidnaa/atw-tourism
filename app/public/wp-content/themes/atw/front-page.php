<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="upcoming-tours" >
			<h2 class="page-title"><span>Upcoming Tours</span></h2>
			<ul>
				<?php

				$args = array(
					'post_type' => "world_tours",
					'posts_per_page' => '3'
				);

				$upcomingTours =  new WP_Query($args);

				while($upcomingTours->have_posts()): $upcomingTours->the_post();
				?>
				<li>
					<a href="<?php the_permalink();?>">
						<?php the_post_thumbnail('small'); ?>
						<img class="frontpage-more-info" src="<?php echo get_template_directory_uri() . '/img/moreinfo.png';?>" />
						<div class="front-tours-content">
							<h2><?php the_title(); ?></h2>
							<p><?php the_field('leaving_date') ;?> - <?php the_field('returning_date');?></p>
						</div>
					</a>
				</li>
				<?php endwhile; wp_reset_postdata();?>
				
		
			</ul>
		</section>
		<!-- /section -->

		<section class="bottom-content">
				<div class="blog-entries">
				
					<h2 class="page-title"><span>Travel Tips From Our Blog</span></h2>
					<ul>
						
						<?php $args = array(
							'post_type' => 'post',
							'posts_per_page' => 2
						);

							$frontPosts = new WP_Query($args);

							while($frontPosts->have_posts()): $frontPosts->the_post();
						?>
							<li>
								
									<?php the_post_thumbnail('smaller');?>
									<div class="blog-entries-content">
									<h3><?php the_title(); ?></h3>
									<p><?php html5wp_excerpt('html5wp_custom_post'); ?></p>	
								</div>
							</li>

							<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				</div>
				<div class="front-testimonials">
					<h2 class="page-title"><span>Testimonials</span></h2>
					<ul>
					<?php $args = array(
							'post_type' => 'atw_testimonials',
							'posts_per_page' => 2
						);

							$frontTests = new WP_Query($args);

							while($frontTests->have_posts()): $frontTests->the_post();
						?>
							<li>
								<div class="single-test">
									<a href="<?php the_permalink();?>">
										<h3><?php the_title(); ?></h3>
										<p><?php the_excerpt(); ?></p>	
									</a>
								</div>
							</li>
					<?php endwhile; wp_reset_postdata();?>
					</ul>
				</div>
		</section>
	</main>


<?php get_footer(); ?>
