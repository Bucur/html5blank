<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Html5
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function html5_blank_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'wrapper',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'html5_blank_jetpack_setup' );
