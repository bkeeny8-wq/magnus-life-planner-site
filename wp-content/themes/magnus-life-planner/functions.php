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
		'1.0.2'
	);
}
add_action( 'wp_enqueue_scripts', 'magnus_life_planner_enqueue_assets' );

/**
 * Logo asset URL.
 *
 * @param string $variant Logo variant: dark (light text) or light (dark text).
 */
function magnus_life_planner_logo_url( $variant = 'dark' ) {
	$file = ( 'light' === $variant ) ? 'magnus-logo-light.png' : 'magnus-logo-dark.png';

	return get_template_directory_uri() . '/assets/images/' . $file;
}

/**
 * Render the Magnus logo image.
 *
 * @param string $variant Logo variant: dark (light text) or light (dark text).
 * @param string $class   CSS class for the image element.
 */
function magnus_life_planner_logo_img( $variant = 'dark', $class = 'brand-logo' ) {
	printf(
		'<img class="%1$s" src="%2$s" alt="%3$s" width="180" height="170" decoding="async" />',
		esc_attr( $class ),
		esc_url( magnus_life_planner_logo_url( $variant ) ),
		esc_attr__( 'Magnus Life Planner — Your life, organized.', 'magnus-life-planner' )
	);
}
