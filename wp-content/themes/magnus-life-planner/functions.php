<?php
/**
 * Magnus Life Planner theme functions.
 */

function magnus_life_planner_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'magnus_life_planner_setup' );

function magnus_life_planner_enqueue_assets() {
	wp_enqueue_style(
		'magnus-google-fonts',
		'https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Inter:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'magnus-life-planner-style',
		get_stylesheet_uri(),
		array( 'magnus-google-fonts' ),
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'magnus_life_planner_enqueue_assets' );
