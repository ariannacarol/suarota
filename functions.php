<?php

	//Incluir estilos personalizados
	function estilos(){

		wp_enqueue_style('google-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,400');
		wp_enqueue_style('google-droid-sans', 'http://fonts.googleapis.com/css?family=Droid+Sans');
		wp_enqueue_style('google-lobster', 'http://fonts.googleapis.com/css?family=Lobster');
		wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');		
		wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
		wp_enqueue_style('main', get_template_directory_uri() . '/style.css');

		if( is_page('home') ){
			wp_enqueue_style('flexslider.css', get_template_directory_uri() . '/css/flexslider.css');	
		}
		
	}

	//Incluir scripts personalizados
	function scripts(){

		wp_register_script('flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true);

		if( is_page('home') ){
			wp_enqueue_script('flexslider', get_template_directory_uri() . '/css/flexslider.css');	
		}

		wp_register_script('flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true);
		wp_enqueue_script('tweet', get_template_directory_uri() . '/js/tweet.js', array('jquery'), '', true);
		wp_enqueue_script('jflickrfeed', get_template_directory_uri() . '/js/jflickrfeed.js', array('jquery'), '', true);
		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);
		wp_enqueue_script('script-tema', get_template_directory_uri() . '/js/script-tema.js', array('jquery'), '', true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true);
		wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);

	}

	add_action('wp_enqueue_scripts', 'scripts');

	add_action('wp_enqueue_scripts', 'estilos');

	//Activar menus personalizados

	add_theme_support( 'menus' );

?>