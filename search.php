<?php get_header() ?>

<form action="<?php echo get_home_url() ?>" method="GET" class="form-control">
	<input 
		type="search" 
		class="search-form" 
		placeholder="<?php _e('Search','chez-blog') ?>" 
		value="<?php echo get_search_query() ?>" 
		name="s" 
		title="Search"
		spellcheck="false"
	>
	<button><?php _e('Search', 'chez-blog') ?></button>
</form>

<div class="search-query">
	<h2>Showing Results For: <?php echo esc_html(get_search_query()) ?></h2>
</div>
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