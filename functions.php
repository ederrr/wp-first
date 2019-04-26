<?php

	function deheustheme_setup_theme(){
		wp_enqueue_style('single-style', get_template_directory_uri().'/assets/css/single.css');
		wp_enqueue_style('slide-style', get_template_directory_uri().'/assets/css/slide.css');
		wp_enqueue_style('404-style', get_template_directory_uri().'/assets/css/404.css');
		wp_enqueue_style('general-style', get_template_directory_uri().'/assets/css/general.css');
		wp_enqueue_style('post-icon-style', get_template_directory_uri().'/assets/css/post-icon.css');
		wp_enqueue_style('footer-style', get_template_directory_uri().'/assets/css/footer.css');
		wp_enqueue_style('serchform-style', get_template_directory_uri().'/assets/css/search-form.css');
		wp_enqueue_style('sidebar-style', get_template_directory_uri().'/assets/css/sidebar.css');
		wp_enqueue_style('index-style', get_template_directory_uri().'/assets/css/index.css');
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

	function deheus_support() {
		add_theme_support( 'post-thumbnails' ); 
	}

	function custom_excerpt_length( $length ) {
		return 25;
	}


	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	add_action('after_setup_theme', 'deheustheme_setup_theme');
	add_action('after_setup_theme', 'deheustheme_register_menus');
	add_action('init', 'deheus_support');
?>