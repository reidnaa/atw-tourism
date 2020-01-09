<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e1507aac2c1c873"></script>
	</head>
	<body <?php body_class(); if (is_home()):?>id="blog"<?php endif; ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<?php if(is_home() && get_option('page_for_posts') ) : ?>
				<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id(get_option('page_for_posts')), 'full' ); ?>
				<?php $featured = $featured[0]; ?>
				<header class="header " role="banner" style="background-image:url(<?php echo $featured;?>);">
					<div class="header-container">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
					</div>
				
			</header>
			<?php elseif (is_front_page()): ?> 
				<header class="header " role="banner" >
					<section class="slider">
						<?php do_action('slider_index'); ?>
						<div class="header-container">
							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
								</a>
							</div>
							<!-- /logo -->

							<!-- nav -->
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->
						</div>
					</section>
			</header>
			<?php elseif(get_page('search')):?>
				<?php $featured = get_template_directory_uri() . '/img/joey.jpg'; ?>
				<?php $featured = $featured[0]; ?>
				<header class="header " role="banner" style="background-image:url(<?php echo $featured;?>);">
					<div class="header-container">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
					</div>
				
			</header>
			
			<?php  else : ?>
				<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
				<?php $featured = $featured[0]; ?>
				<header class="header " role="banner" style="background-image:url(<?php echo $featured;?>);">
					<div class="header-container">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
					</div>
				
			</header>
			
			<?php endif; ?> 
			

			
			<div class="searchform">
				<?php get_template_part('searchform');?>
			</div>
			<!-- /header -->