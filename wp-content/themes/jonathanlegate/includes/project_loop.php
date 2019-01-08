<div class="grid">

<div class="grid-sizer"></div>
<div class="gutter-sizer"></div>

<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => -1 ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
	<div class="grid-item">
	
	<?php if ( has_post_thumbnail()) :  ?>
		
		<div class="product projects">
			<?php if( get_field('video_button') ): ?>
				<div class="video-button">
					<?php the_field('video_button'); ?>
				</div>
			<?php endif; ?>
			
			<?php 
			$images = get_field('project_gallery');
			
			if( $images ): ?>
				<?php foreach( $images as $image ): ?>
				<a class="gallery" href="<?php echo $image['url']; ?>" data-fancybox="<?php the_ID(); ?>" data-caption="<?php echo $image['title']; ?>" style="display: block;">
					<div class="product-more-icon"><i class="fa fa-plus"></i></div>
					<?php echo the_post_thumbnail(); ?>
				</a>
				<?php endforeach; 
			endif; ?>
				
			<h3 class="titles-below"><?php the_title(); ?></h3>
			
		</div><!--PRODUCT-->
		
		<?php endif; ?>
		
	</div><!--GRID ITEM-->
	
<?php endwhile; endif; wp_reset_postdata(); ?>
	
</div>