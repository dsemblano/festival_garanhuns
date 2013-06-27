<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package garanhuns
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function garanhuns_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'garanhuns_jetpack_setup' );
