<?php
/**
 * Small template helpers used across the theme.
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Render a star-rating string from a 0-5 value (visual only).
 */
function toolstopia_stars( $value = 5 ) {
	$value = max( 0, min( 5, (float) $value ) );
	$full  = (int) floor( $value );
	$out   = '';
	for ( $i = 0; $i < 5; $i++ ) {
		$out .= $i < $full ? '&#9733;' : '&#9734;';
	}
	return '<span class="ts-product__rating" aria-label="' . esc_attr( sprintf( '%s out of 5', $value ) ) . '">' . $out . '</span>';
}

/**
 * Body classes for finer styling control.
 */
function toolstopia_body_classes( $classes ) {
	if ( is_front_page() ) { $classes[] = 'ts-front'; }
	if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) { $classes[] = 'ts-woo'; }
	return $classes;
}
add_filter( 'body_class', 'toolstopia_body_classes' );

/**
 * Trim the default excerpt and clean the "read more".
 */
add_filter( 'excerpt_more', function () { return '&hellip;'; } );
add_filter( 'excerpt_length', function () { return 24; } );

/**
 * Lazy-load and async decode for content images (perf).
 */
add_filter( 'wp_get_attachment_image_attributes', function ( $attr ) {
	if ( empty( $attr['loading'] ) ) { $attr['loading'] = 'lazy'; }
	$attr['decoding'] = 'async';
	return $attr;
} );
