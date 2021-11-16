<?php get_header();  ?>

<div class="post-cont">
	<section>
		<div class="posts">
			<?php 
				if ( have_posts() ) : ?>
				    <?php  while ( have_posts() ) : the_post(); ?>
				    	<?php if (has_post_thumbnail()): ?>
						 	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						 <?php endif ?>
				    	<a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a>
				    	<div class="bottom"><?php the_excerpt() ?></div>
				    <?php  endwhile; ?>
				    <?php echo paginate_links() ?>
				<?php else: 
					_e('No Posts Matched Your Criteria', 'chez-blog');
				endif; ?>
				
		</div>
	</section>
	<?php get_sidebar(); ?>	

</div>

<?php get_footer(); ?>
