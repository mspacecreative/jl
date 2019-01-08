<?php get_header(); ?>

	<!--FIXED SECTION-->
	<div class="left-col">
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" />
			</a>
		</div>
		<?php get_template_part('includes/navigation'); get_template_part('includes/mobile_navigation'); ?>
		<img src="<?php echo get_template_directory_uri(); ?>/img/jon-profile.jpg" alt="Jonathan Legate" class="profile-pic" />
	</div>
	<!--FIXED SECTION-->
	
	<!--SCROLLING SECTION-->
		<!--CONTENT-->
		<div id="content">
			<section class="inner">
				<article>
					<div class="tagline">
						<p>A home should be a sanctuary: tailored function realized through thoughtful design.</p>
					</div>
						<div id="main-content">
							<h1><?php the_title(); ?></h1>
							<?php 
							if ( have_posts() ) {
								while ( have_posts() ) {
									the_post(); 
									the_content();
								}
							}
							?>
						</div>
				</article>
			</section>

<?php get_footer(); ?>
