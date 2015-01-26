<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package rdmgumby
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
add_action( 'after_setup_theme', 'rdmgumby_jetpack_setup' );
function rdmgumby_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
