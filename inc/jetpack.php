<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package SW Wordpress Blog Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function sw_wordpress_blog_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'sw_wordpress_blog_theme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function sw_wordpress_blog_theme_jetpack_setup
add_action( 'after_setup_theme', 'sw_wordpress_blog_theme_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function sw_wordpress_blog_theme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function sw_wordpress_blog_theme_infinite_scroll_render
