<?php

	function deheustheme_setup_theme(){
		wp_enqueue_style('footer-style', get_template_directory_uri().'/assets/css/footer.css');
		wp_enqueue_style('serchform-style', get_template_directory_uri().'/assets/css/search-form.css');
		wp_enqueue_style('header-style', get_template_directory_uri().'/assets/css/header.css');
		wp_enqueue_style('reset-style', get_template_directory_uri().'/assets/css/reset.css');

	}

	function deheustheme_register_menus(){
	
		register_nav_menus ( 
			array(
			'primary'=> __('Menu Principal'),
			)
		);
	}

	add_action('after_setup_theme', 'deheustheme_setup_theme');
	add_action('after_setup_theme', 'deheustheme_register_menus');
?>