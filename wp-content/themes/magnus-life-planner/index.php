<?php
/**
 * Fallback template.
 *
 * @package Magnus_Life_Planner
 */

if ( is_front_page() ) {
	require get_template_directory() . '/front-page.php';
	return;
}

if ( is_page() ) {
	require get_template_directory() . '/page.php';
	return;
}

require get_template_directory() . '/page.php';
