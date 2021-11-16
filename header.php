<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    	.img-background {
    		display: flex;
    		flex-direction: column;
    		/*width: 1300px;
    		margin: auto;*/
			background: url(<?php header_image() ?>) no-repeat center center;
			height: 300px;
			background-size: 100% 100%;
			align-items: center;
			margin-bottom: 30px;
		}

		.not-found-img{
			background: url(<?php echo esc_url(get_template_directory_uri() . '/img/404.jpg') ?>) no-repeat;
			background-size: 100% 100%;
			height: 100%;
			width: 100%;
		}

    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

	<?php wp_body_open() ?>

	<div class="content">
		<div class="header-cont">
			<header>
				<a href="<?php echo esc_url(home_url()) ?>">
					<h1><?php echo bloginfo('name') ?></h1>
				</a>
				<?php if (function_exists('the_custom_logo')): ?>
					<?php the_custom_logo() ?>
				<?php endif ?>
			</header>
			<?php if (function_exists('wp_nav_menu')): ?>
				<?php wp_nav_menu([
					'theme_location' => 'header_menu',
					'container_class' => 'nav-links',

				]) ?>
			<?php endif ?>
		</div>

 