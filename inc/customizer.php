<?php

function customizer_props($wp_customizer) {
	$wp_customizer->add_section('sec_homepage_text', [
		'title'		=>	__('Homepage Texts', 'chez-blog'),
		'description'	=>	__('Texts inside the Homepage background', 'chez-blog'),
		'priority'		=>	130,
	]);

	// HEADER TEXT
	$wp_customizer->add_setting('sett_header_text', [
		'type'		=>	'theme_mod',
		'capability'	=>	'edit_theme_options',
		'default'		=>	__('Header One', 'chez-blog'),
		'sanitize_callback'	=>	'sanitize_text_field',
	]);

	$wp_customizer->add_control('sett_header_text', [
		'type'	=>	'text',
		'section'	=>	'sec_homepage_text',
		'priority'	=>	1,
		'label'		=>	__('Header Text','chez-blog'),
		'input_attrs'	=>	[
								'placeholder'	=>	__('Input a Header','chez-blog'),
		],
	]);

	// PARAGRAPH TEXT
	$wp_customizer->add_setting('sett_paragraph_text',[
		'type'	=>	'theme_mod',
		'capability'	=>	'edit_theme_options',
		'default'	=>	__('Paragraph One', 'chez-blog'),
		'sanitize_callback'	=>	'sanitize_text_field',
	]);

	$wp_customizer->add_control('sett_paragraph_text',[
		'type'	=>	'text',
		'section'	=>	'sec_homepage_text',
		'priority'	=>	2,
		'label'		=>	__('2nd Line Text','chez-blog'),
		'input_attrs'	=>	[
								'placeholder' =>   __('Input text', 'chez-blog'),
		],
	]);

	// BUTTON TEXT
	$wp_customizer->add_setting('sett_btn_text',[
		'type'	=>	'theme_mod',
		'capability'	=>	'edit_theme_options',
		'default'	=>	__('Click Here', 'chez-blog'),
		'sanitize_callback'	=>	'sanitize_text_field',
	]);

	$wp_customizer->add_control('sett_btn_text',[
		'type'	=>	'text',
		'section'	=>	'sec_homepage_text',
		'priority'	=>	3,
		'label'		=>	__('Button Text','chez-blog'),
		'input_attrs'	=>	[
								'placeholder' =>   __('Input Button Text', 'chez-blog'),
		],
	]);

	// BUTTON URL
	$wp_customizer->add_setting('sett_btn_url',[
		'type'	=>	'theme_mod',
		'capability'	=>	'edit_theme_options',
		'default'	=>	__('#', 'chez-blog'),
		'sanitize_callback'	=>	'sanitize_text_field',
	]);

	$wp_customizer->add_control('sett_btn_url',[
		'type'	=>	'text',
		'section'	=>	'sec_homepage_text',
		'priority'	=>	4,
		'label'		=>	__('Button Url','chez-blog'),
		'input_attrs'	=>	[
								'placeholder' =>   __('Button Link', 'chez-blog'),
		],
	]);

	// ABOUT PAGE IMAGE
	$wp_customizer->add_section('sec_about_page',[
		'title'	=>	__('AboutPage Image','chez-blog'),
		'priority'	=>	90,	
	]);

	$wp_customizer->add_setting('sett_abtpage_image',[
		'type'	=>	'theme_mod',
		'capability'	=>	'edit_theme_options',
		'default'	=>	get_template_directory_uri() . '/img/trainer.jpg',
		'sanitize_callback'	=>	'sanitize_text_field',
	]);

	$wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'sett_abtpage_image',[
		'section'	=>	'sec_about_page',
		'priority'	=>	1,
		'label'		=>	__('Edit Image','chez-blog'),
	]));

	// SERVICES PAGE IMAGE
	$wp_customizer->add_section('sec_serv_page',[
		'title'	=>	__('ServicesPage Image','chez-blog'),
		'priority'	=>	95,	
	]);

	$wp_customizer->add_setting('sett_servpage_image',[
		'type'	=>	'theme_mod',
		'capability'	=>	'edit_theme_options',
		'default'	=>	get_template_directory_uri() . '/img/services_bg.png',
		'sanitize_callback'	=>	'sanitize_text_field',
	]);

	$wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'sett_servpage_image',[
		'section'	=>	'sec_serv_page',
		'priority'	=>	1,
		'label'		=>	__('Edit Image','chez-blog'),
	]));

	// FOOTER
	$wp_customizer->add_section('sec_footer',[
		'title'		=>	__('Footer','chez-blog'),
		'priority'	=>	190,
	]);

	$wp_customizer->add_setting('sett_footer', [
		'type'		=>	'theme_mod',
		'capability'	=>	'edit_theme_options',
		'default'	=>	__('Copyright © Bosschez wordpress theme 2021', 'chez-blog'),
		'sanitize_callback'	=>	'sanitize_text_field',
	]);

	$wp_customizer->add_control('sett_footer',[
		'section'	=>	'sec_footer',
		'type'	=>	'text',
		'label'	=>	__('Edit Footer','chez-blog'),
		'input_attrs'	=>	[
								'placeholder'	=>	__('Input your footer', 'chez-blog'),
		],
	]);
}

add_action('customize_register', 'customizer_props');