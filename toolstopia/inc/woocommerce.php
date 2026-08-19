<?php
/**
 * WooCommerce integration: wrappers, tweaks and WhatsApp ordering.
 * All hooks are guarded so the theme is safe even if WooCommerce is not active.
 * @package Tooltopia Store
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Wrap Woo content in the theme container.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

add_action( 'woocommerce_before_main_content', function () {
	echo '<div class="ts-page"><div class="ts-container"><div class="ts-woo-wrap">';
}, 10 );

add_action( 'woocommerce_after_main_content', function () {
	echo '</div></div></div>';
}, 10 );

/**
 * Products per row / per page.
 */
add_filter( 'loop_shop_columns', function () { return 4; } );
add_filter( 'loop_shop_per_page', function () { return 24; }, 20 );

/**
 * WhatsApp "Order on WhatsApp" button on single product page.
 */
function toolstopia_wa_product_button() {
	if ( ! function_exists( 'wc_get_product' ) ) { return; }
	global $product;
	if ( ! $product ) { return; }

	$name  = $product->get_name();
	$url   = get_permalink( $product->get_id() );
	$price = wp_strip_all_tags( wc_price( $product->get_price() ) );
	$sku   = $product->get_sku();

	$msg  = "Hello Tooltopia Store! I would like to order:\n";
	$msg .= "• " . $name . ( $sku ? " (SKU: {$sku})" : '' ) . "\n";
	$msg .= "• Price: " . $price . "\n";
	$msg .= "• Link: " . $url . "\n\n";
	$msg .= "Please confirm availability and delivery.";

	echo '<a class="ts-btn ts-btn--wa" style="margin-top:12px" target="_blank" rel="noopener" href="' . toolstopia_wa_url( $msg ) . '">';
	echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Z"/></svg> ';
	echo esc_html__( 'Order on WhatsApp', 'toolstopia' );
	echo '</a>';
}
add_action( 'woocommerce_after_add_to_cart_button', 'toolstopia_wa_product_button', 20 );

/**
 * Trust / delivery reassurance under the add-to-cart area.
 */
add_action( 'woocommerce_single_product_summary', function () {
	echo '<ul class="ts-po-trust" style="list-style:none;display:grid;gap:8px;margin-top:18px;padding-top:16px;border-top:1px solid var(--ts-gray-200);font-size:.9rem">';
	echo '<li>Products sourced from established suppliers and distributors</li>';
	echo '<li>Kenya-wide delivery &mdash; typical times shown at checkout</li>';
	echo '<li>Pay via M-PESA, bank transfer or cash on delivery</li>';
	echo '<li>Warranty coverage varies by product and manufacturer</li>';
	echo '</ul>';
}, 45 );

/**
 * Change the "Add to cart" text for a more premium feel.
 */
add_filter( 'woocommerce_product_single_add_to_cart_text', function () { return __( 'Add to Cart', 'toolstopia' ); } );

/**
 * Breadcrumb separator to match the theme.
 */
add_filter( 'woocommerce_breadcrumb_defaults', function ( $defaults ) {
	$defaults['delimiter']   = ' <span style="color:var(--ts-gray-300)">/</span> ';
	$defaults['wrap_before'] = '<nav class="ts-breadcrumb woocommerce-breadcrumb">';
	$defaults['wrap_after']  = '</nav>';
	return $defaults;
} );

/**
 * Remove the default Woo sidebar on shop pages (we use a clean full-width grid);
 * theme users can re-enable by returning early.
 */
add_action( 'init', function () {
	if ( ! is_admin() ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	}
} );
