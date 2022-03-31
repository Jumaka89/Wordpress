<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Travel Trip Lite
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function travel_trip_lite_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'site_container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'travel_trip_lite_jetpack_setup' );
