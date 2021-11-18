<?php  

// INCLUDING CSS STYLESHEET
function load_stylesheets() {
	wp_enqueue_style('style', get_stylesheet_uri() . '?v' . time() );

	wp_enqueue_style('wp-google-fonts','https://fonts.googleapis.com/css2?family=Allison&family=Crimson+Text:ital,wght@1,400;1,600&family=Noto+Serif&family=Nanum+Myeongjo&family=Scheherazade+New&display=swap', [],null);

	
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/b7fd1483d5.js');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// NAV MENUS
function reg_nav_menu() {
	register_nav_menus([
		'header_menu' => __('Nav Menu','chez-blog')
	]);
}

add_action('init', 'reg_nav_menu');

// SIDEBAR WIDGETS
function sidebar_widgets($id) {
	register_sidebar([
		'id'	=>	'right_sidebar',
		'name'	=> __('Right Sidebar', 'chez-blog'),
		'description' => __('Sidebar on the right side of the page', 'chez-blog'),
		'before_widget'	=>	'<li id="%1$s" class="sidebar %2$s">',
		'after_widget'	=>	'</li>',
		'before_title'	=>	'<h2 id="%1$s" class="widget %2$s">',
		'after_title'	=>	'</h2>',
		'before_sidebar'	=>	'<aside id="%1$s" class="widget %2$s">',
		'after_sidebar'	=>	'</aside>',
	]);

	register_sidebar([
		'id'	=>	'frontpage_icons',
		'name'	=> __('frontpage Icons', 'chez-blog'),
		'description' => __('Widgets on the frontpage', 'chez-blog'),
		'before_widget'	=>	'<nav>',
		'after_widget'	=>	'</nav>',
		'before_sidebar'	=>	'<div id="%1$s" class="widgets-cont %2$s">',
		'after_sidebar'	=>	'</div>',
	]);

	register_sidebar([
		'id'	=>	'services_widgets',
		'name'	=> __('Services Widgets', 'chez-blog'),
		'description' => __('Widgets in the Services page', 'chez-blog'),
		'before_widget'	=>	'<div id="%1$s" class="service-card %2$s">',
		'after_widget'	=>	'</div>',
		'before_sidebar'	=>	'<div id="%1$s" class="service-card-cont %2$s">',
		'after_sidebar'	=>	'</div>',
	]);
}

add_action('widgets_init', 'sidebar_widgets');

function theme_features() {
	
	// RESPONSIVE EMBEDS
	add_theme_support("responsive-embeds");

	// AUTOMATIC FEED LINKS
	add_theme_support('automatic-feed-links');
	
	// HTML5 FORM
	add_theme_support('html5',['search-form']);

	//TITLE TAG
	add_theme_support('title-tag');

	//POST THUMBNAILS
	add_theme_support('post-thumbnails');

	// THE CUSTOM LOGO
	add_theme_support('custom-logo', [
		'width'	=>	100,
		'height'	=>	100,
		'flex-width'	=>	true,
		'flex-height'	=>	true,
		'unlink-homepage-logo'	=>	false,
	]);

	// CUSTOM HEADER IMAGE
	add_theme_support('custom-header',[
		'default-image'	=>	get_template_directory_uri() . '/img/background.jpg',
		'height'	=>	300,
		'flex-width'	=>	true,
		'flex-height'	=>	true,	
	]);

	register_default_headers([
	'gym-bg'  => [
		'url'			=>	get_template_directory_uri() . '/img/background.jpg',
		'thumbnail'		=>	get_template_directory_uri() . '/img/background.jpg',
		'description'	=>	__('Weight Lift','chez-blog'),
		],
	]);

}

add_action('after_setup_theme','theme_features');


include_once get_template_directory() . '/inc/customizer.php';