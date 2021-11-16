<?php get_header() ?>

<div class="single-cont">
	<div id="post-<?php the_ID(); ?>" <?php post_class("single-page-section"); ?> >
		<?php if ( have_posts() ) : ?>
		    <?php while ( have_posts() ) : the_post(); ?>
		    	<?php if (has_post_thumbnail()): ?>
				 	<?php the_post_thumbnail(); ?>
				 <?php endif ?>
				 <div class="metas">
				 	<p><?php _e('Posted by: ', 'chez-blog') ?><?php the_author() ?></p>
				 	<p id="tag"><?php the_tags() ?></p>
				 	<pre><?php the_time('F j, Y') ?></pre>
				 </div>
		    	<h1><?php the_title() ?></h1>
		    	<p><?php the_content() ?></p>
		    <?php  endwhile; 
		endif; ?>
	</div>

	<?php get_sidebar() ?>
</div>

<?php comments_template() ?>
<?php get_footer() ?>