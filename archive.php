<?php get_header() ?>

<div class="search-cont">
	<div class="search-items">
		<?php 
		if ( have_posts() ) : 
		    while ( have_posts() ) : the_post(); ?>
		    	<?php if (has_post_thumbnail()): ?>
				 	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php endif ?>
				<div class="date-title">
			    	<a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a>
			    	<span><?php  the_date() ?></span>
			    </div>
				<p><?php the_excerpt() ?></p>
		    
		    <?php endwhile; ?>
		    <?php else: ?>
		    	<div class="not-found">
			    	<span><?php _e('Sorry, No Posts Found...','chez-blog') ?></span>
			    </div>
		<?php endif; ?>
	</div>

	<?php get_sidebar() ?>
</div>


<?php get_footer() ?>

