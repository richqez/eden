<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package edenBuild0.1
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function edenbuild0_1_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'edenbuild0_1_jetpack_setup' );
