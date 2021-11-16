	<?php get_header(); ?>
	<div class="img-background">
		<h1><?php echo esc_html(get_theme_mod('sett_header_text',__('Header One','chez-blog'))) ?></h1>
		<p><?php echo esc_html(get_theme_mod('sett_paragraph_text',__('Paragraph One','chez-blog'))) ?></p>
		<a 
			href="<?php echo esc_url(get_theme_mod('sett_btn_url','#'))  ?>">
			<?php echo esc_html(get_theme_mod('sett_btn_text',__('Click Here','chez-blog'))) ?>
		</a>
	</div>

	<?php if (is_active_sidebar('frontpage_icons')): ?>
		<?php dynamic_sidebar('frontpage_icons') ?>
	<?php endif ?>

	<?php get_footer() ?>
</body>
</html>
