<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1 class="page-title"><span><?php _e( 'Blog', 'html5blank' ); ?></span></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
