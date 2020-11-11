<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<title>
		<?php bloginfo(''); ?>
	</title>
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?> /css/style.css" type="text/css">
</head>

<body <?php body_class(); ?>>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="/wordpress">

					<?php the_custom_logo(); ?>

				</a>
			</div>
			<?php wp_nav_menu(array(
				'theme_location' => 'header-menu',
				'menu_class' => 'nav navbar-nav',
				'menu_id' => 'menu-main-menu',



			));
			?>

			<?php get_search_form() ?>

		</div>