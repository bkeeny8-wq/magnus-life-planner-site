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
		'1.0.4'
	);
}
add_action( 'wp_enqueue_scripts', 'magnus_life_planner_enqueue_assets' );

/**
 * Logo asset URL.
 *
 * @param string $variant Logo variant: dark (light artwork) or light (dark artwork).
 * @param string $type    Logo type: full (icon + wordmark) or mark (compass only).
 */
function magnus_life_planner_logo_url( $variant = 'dark', $type = 'full' ) {
	if ( 'mark' === $type ) {
		$file = ( 'light' === $variant ) ? 'magnus-mark-light.png' : 'magnus-mark-dark.png';
	} else {
		$file = ( 'light' === $variant ) ? 'magnus-logo-light.png' : 'magnus-logo-dark.png';
	}

	return get_template_directory_uri() . '/assets/images/' . $file;
}

/**
 * Render the Magnus logo image.
 *
 * @param string $variant Logo variant: dark (light artwork) or light (dark artwork).
 * @param string $class   CSS class for the image element.
 * @param string $type    Logo type: full (icon + wordmark) or mark (compass only).
 */
function magnus_life_planner_logo_img( $variant = 'dark', $class = 'brand-logo', $type = 'full' ) {
	$is_mark = ( 'mark' === $type );
	$width   = $is_mark ? 72 : 210;
	$height  = $is_mark ? 72 : 200;

	printf(
		'<img class="%1$s" src="%2$s" alt="%3$s" width="%4$d" height="%5$d" decoding="async" />',
		esc_attr( $class ),
		esc_url( magnus_life_planner_logo_url( $variant, $type ) ),
		esc_attr__( 'Magnus Life Planner — Your life, organized.', 'magnus-life-planner' ),
		(int) $width,
		(int) $height
	);
}
