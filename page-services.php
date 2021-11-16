
<?php get_header() ?>

<div class="extra-services-header">
		<h2>Our Services</h2>
</div>
<div class="services-cont">
	<div class="services" >
		<img 
			src="<?php echo esc_url(get_theme_mod('sett_servpage_image',get_template_directory_uri() . '/img/services_bg.png'))  ?>" 
			alt="<?php _e('services_bg', 'chez-blog') ?>"
		>
	</div>
	
	<?php if (is_active_sidebar('services_widgets')): ?>
		<?php dynamic_sidebar('services_widgets') ?>
	<?php endif ?>

	</div>

<?php get_footer() ?>