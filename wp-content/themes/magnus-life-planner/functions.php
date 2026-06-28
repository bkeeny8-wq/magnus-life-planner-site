<?php
/**
 * Magnus Life Planner theme functions (Calm & Balanced identity).
 */

function magnus_life_planner_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'magnus_life_planner_setup' );

function magnus_life_planner_enqueue_assets() {
	wp_enqueue_style(
		'magnus-google-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'magnus-life-planner-style',
		get_stylesheet_uri(),
		array( 'magnus-google-fonts' ),
		'2.1.1'
	);
}
add_action( 'wp_enqueue_scripts', 'magnus_life_planner_enqueue_assets' );

/**
 * Force the theme's front-page.php for the site front page.
 *
 * On WordPress.com the homepage can be set to a static Page (or a page
 * builder layout) whose stored content masks the theme template. This
 * guarantees our hardcoded landing always renders on the front page,
 * regardless of the Reading settings.
 */
function magnus_life_planner_force_front_page( $template ) {
	if ( is_front_page() ) {
		$front = locate_template( 'front-page.php' );
		if ( $front ) {
			return $front;
		}
	}
	return $template;
}
add_filter( 'template_include', 'magnus_life_planner_force_front_page', 99 );

function magnus_life_planner_favicons() {
	$asset_url = trailingslashit( get_template_directory_uri() ) . 'assets/images/';
	echo '<link rel="icon" href="' . esc_url( $asset_url . 'favicon.svg' ) . '" type="image/svg+xml">' . "\n";
	echo '<link rel="icon" href="' . esc_url( $asset_url . 'favicon-32.png' ) . '" sizes="32x32">' . "\n";
	echo '<link rel="apple-touch-icon" href="' . esc_url( $asset_url . 'apple-touch-icon-180.png' ) . '">' . "\n";
}
add_action( 'wp_head', 'magnus_life_planner_favicons' );

/**
 * Render the mark as inline SVG (Calm Blue arc, Warm Coral sun). No image assets.
 *
 * @param int $size Pixel size of the square mark.
 */
function magnus_life_planner_mark( $size = 34 ) {
	printf(
		'<svg class="brand-mark" width="%1$d" height="%1$d" viewBox="0 0 52 52" fill="none" aria-hidden="true">'
		. '<rect x="1" y="1" width="50" height="50" rx="14" fill="#E6EEF3"/>'
		. '<path d="M7.9 27.8 A21.3 21.3 0 0 1 37.3 21" stroke="#457B9D" stroke-width="1.8" stroke-linecap="round"/>'
		. '<line x1="10" y1="34.1" x2="42" y2="34.1" stroke="#2D3A42" stroke-width="1.8" stroke-linecap="round"/>'
		. '<circle cx="37.3" cy="21" r="3.6" fill="#FF8C42"/></svg>',
		(int) $size
	);
}

/**
 * Brand lockup: mark plus the Magnus wordmark.
 */
function magnus_life_planner_brand( $size = 34 ) {
	magnus_life_planner_mark( $size );
	echo '<span class="brand-word">Magnus</span>';
}
