					<!--FOOTER-->
						<footer>
							<div class="inner">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jl-icon.svg" alt="Jonathan Legate Interior Consultation" />
								<p style="margin-right: -5px;">&copy; <?php echo date('Y'); ?> Jonathan Legate Interior Consultation.<br />All rights reserved.</p>
							</div>
						</footer>
						<!--FOOTER-->
				
				</div><!--INNER-->
				
			</div>
			<!--SITE WRAP-->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		
		<script>
		// MASONRY
		var $grid = $('.grid').imagesLoaded( function() {
		$grid.masonry({
			itemSelector: '.grid-item',
			columnWidth: '.grid-sizer',
			percentPosition: true,
			gutter: '.gutter-sizer'
			});
		});
		</script>

	</body>
</html>
