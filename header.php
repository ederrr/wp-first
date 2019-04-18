<!DOCTYPE html>
<html <?php bloginfo('language') ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta <?php bloginfo('charset') ?>>
	<?php wp_head() ?>
</head>

<body>
	<header>
		<div id="nav-logo">
			<img src="<?php echo get_template_directory_uri().'/assets/images/icons_logo@3x.png' ?>" alt="logo do de heus">
		</div>
		<div id="nav-menu">
			<img class="icons" src="<?php echo get_template_directory_uri().'/assets/images/Imagem2@3x.png' ?>" alt="busca">
			<img class="icons" src="<?php echo get_template_directory_uri().'/assets/images/Imagem2@3x.png' ?>" alt="planeta">
			<img class="icons" src="<?php echo get_template_directory_uri().'/assets/images/Imagem2@3x.png' ?>" alt="menu">
			<nav>
				<?php wp_nav_menu(
					array(
						'theme_location' => 'primary',
					)); 
				?>
				<?php get_search_form() ?>
			</nav>
			<!--<input type="search" name="s" id="search-header" placeholder="Search"> -->
		</div>
	</header>