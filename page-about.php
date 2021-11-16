<?php get_header() ?>

<div class="about-us-cont">
	<div class="about-us">
		<img 
			src="<?php echo esc_url(get_theme_mod('sett_abtpage_image', get_template_directory_uri() . '/img/trainer.jpg')) ?>" 
			alt="<?php _e('who_we_are', 'chez-blog') ?>"
		>
		<div class="abt-text">
			<?php 
				if ( have_posts() ) : 
				    while ( have_posts() ) : the_post(); ?>
				        <?php the_content() ?>
				   <?php endwhile; 
				endif;
			?>	
			
		</div>
	</div>
</div>


<?php get_footer() ?>