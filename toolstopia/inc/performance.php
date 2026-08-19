<?php
/**
 * Front-end performance hardening for Tooltopia Store.
 *
 * Conservative, safe optimizations aimed at a fast (1-3s) load:
 *   - remove the emoji detection script + styles (unused everywhere)
 *   - drop the wp-embed script on the front end
 *   - remove jQuery Migrate (only old plugins need it)
 *   - tidy the document head of tags that add weight but no value here
 *   - skip the WooCommerce cart-fragments AJAX request when the cart is empty
 *
 * Everything is guarded so nothing breaks if WooCommerce is inactive.
 *
 * @package Tooltopia Store
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Disable the WordPress emoji detection script and inline styles.
 * These load on every page and are not used by the theme.
 */
add_action( 'init', function () {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'emoji_svg_url', '__return_false' );
} );

/**
 * Remove the wp-embed script on the front end (oEmbed host helper most sites never use).
 */
add_action( 'wp_footer', function () {
	if ( is_admin() ) { return; }
	wp_dequeue_script( 'wp-embed' );
} );

/**
 * Remove jQuery Migrate from the front-end jQuery dependency chain.
 */
add_action( 'wp_default_scripts', function ( $scripts ) {
	if ( is_admin() ) { return; }
	if ( ! empty( $scripts->registered['jquery'] ) ) {
		$deps = $scripts->registered['jquery']->deps;
		$scripts->registered['jquery']->deps = array_diff( $deps, array( 'jquery-migrate' ) );
	}
} );

/**
 * Tidy the document head: drop tags that add weight but no SEO value for this store.
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

/**
 * WooCommerce: skip the cart-fragments AJAX refresh when the cart is empty.
 * This removes an extra request on most visits. The mini-cart count still works
 * as soon as an item is added, and the script always loads on cart/checkout.
 */
add_action( 'wp_enqueue_scripts', function () {
	if ( is_admin() ) { return; }
	if ( ! function_exists( 'is_cart' ) || ! function_exists( 'WC' ) ) { return; }
	if ( is_cart() || is_checkout() ) { return; }
	$cart = WC()->cart;
	if ( $cart && $cart->is_empty() ) {
		wp_dequeue_script( 'wc-cart-fragments' );
	}
}, 99 );
