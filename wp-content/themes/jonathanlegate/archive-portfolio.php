<?php get_header(); ?>

	<!--VIDEO-->
	<div class="video-container">
		<div class="video-inner-container">
			<div class="close-button">
				<i class="fa fa-close"></i>
			</div>
			<iframe width="100%" height="315" style="max-width: 600px;" id="yt-video" src="https://www.youtube.com/embed/cZV6ZLaSNpU?rel=0" frameborder="0" encrypted-media" allowfullscreen></iframe>
<div class="dxv-button"><a href="https://www.dxv.com/inspiration/design-panel/Jonathan-Legate/2018/09/13/Mid-Century-Sculpture-Garden" target="_blank">Read full article on DXV website</a></div>
		</div>
	</div>
	<!--/VIDEO-->

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
							<h1>Portfolio</h1>
							<?php get_template_part('includes/project_loop'); ?>
						</div>
				</article>
			</section>

<?php get_footer(); ?>