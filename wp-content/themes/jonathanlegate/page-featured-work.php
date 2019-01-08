<?php get_header();
/* Template Name: Featured Work */
 ?>

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
							if( have_rows('portal') ):
							
							 	// loop through the rows of data
							    while ( have_rows('portal') ) : the_row();
							    
								    $image = get_sub_field('portal_background_image');
								    
								    if( !empty($image) ):
								    ?>
								
									<div class="portal" style="background-image: url(<?php echo $image['url']; ?>);">
										<a href="<?php the_sub_field('portal_link'); ?>"></a>
										<div class="portal-title">
											<h2><a href="<?php the_sub_field('portal_link'); ?>"><?php the_sub_field('portal_title'); ?></a></h2>
										</div>
									</div>
								
									<?php
									endif;	
								
								endwhile;
							
							endif;
							?>
						</div>
				</article>
			</section>

<?php get_footer(); ?>
