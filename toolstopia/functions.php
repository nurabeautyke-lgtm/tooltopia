<?php
/**
 * Tooltopia Store theme functions
 *
 * @package Tooltopia Store
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'TOOLSTOPIA_VERSION', '1.2.0' );
define( 'TOOLSTOPIA_DIR', get_template_directory() );
define( 'TOOLSTOPIA_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function toolstopia_setup() {
	load_theme_textdomain( 'toolstopia', TOOLSTOPIA_DIR . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 220,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets',
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// WooCommerce
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 600,
		'single_image_width'    => 1000,
		'product_grid'          => array( 'default_columns' => 4, 'default_rows' => 3 ),
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	register_nav_menus( array(
		'primary'   => __( 'Primary Menu (Mega Menu)', 'toolstopia' ),
		'footer'    => __( 'Footer Menu', 'toolstopia' ),
		'top_bar'   => __( 'Top Bar Menu', 'toolstopia' ),
		'mobile'    => __( 'Mobile Bottom Nav', 'toolstopia' ),
	) );
}
add_action( 'after_setup_theme', 'toolstopia_setup' );

/**
 * Content width
 */
function toolstopia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'toolstopia_content_width', 1240 );
}
add_action( 'after_setup_theme', 'toolstopia_content_width', 0 );

/**
 * Enqueue styles & scripts (performance-first: Google Fonts via preconnect, deferred JS)
 */
function toolstopia_assets() {
	// Fonts
	wp_enqueue_style( 'toolstopia-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap', array(), null );

	// Main stylesheet
	wp_enqueue_style( 'toolstopia-main', TOOLSTOPIA_URI . '/assets/css/main.css', array(), TOOLSTOPIA_VERSION );
	// style.css (theme header) last so child theme can override
	wp_enqueue_style( 'toolstopia-style', get_stylesheet_uri(), array( 'toolstopia-main' ), TOOLSTOPIA_VERSION );

	// Main script (deferred)
	wp_enqueue_script( 'toolstopia-main', TOOLSTOPIA_URI . '/assets/js/main.js', array(), TOOLSTOPIA_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'toolstopia_assets' );

// Add defer to main script for performance
function toolstopia_defer_scripts( $tag, $handle ) {
	if ( 'toolstopia-main' === $handle ) {
		return str_replace( ' src', ' defer src', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'toolstopia_defer_scripts', 10, 2 );

// Preconnect to Google Fonts for LCP
function toolstopia_resource_hints( $hints, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' );
		$hints[] = 'https://fonts.googleapis.com';
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'toolstopia_resource_hints', 10, 2 );

/**
 * Widget areas
 */
function toolstopia_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Shop Sidebar', 'toolstopia' ),
		'id'            => 'shop-sidebar',
		'before_widget' => '<section id="%1$s" class="widget ts-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="ts-widget__title">',
		'after_title'   => '</h4>',
	) );
	for ( $i = 1; $i <= 4; $i++ ) {
		register_sidebar( array(
			/* translators: %d footer column number */
			'name'          => sprintf( __( 'Footer Column %d', 'toolstopia' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		) );
	}
}
add_action( 'widgets_init', 'toolstopia_widgets_init' );

/**
 * Business config helpers (edit these in one place)
 */
function toolstopia_phone()      { return apply_filters( 'toolstopia_phone', '0719 261277' ); }
function toolstopia_whatsapp()   { return apply_filters( 'toolstopia_whatsapp', '254719261277' ); } // international, no +
function toolstopia_email()      { return apply_filters( 'toolstopia_email', 'info@tooltopiastore.co.ke' ); }
function toolstopia_hours()      { return apply_filters( 'toolstopia_hours', 'Mon–Sat 7:00am–6:00pm' ); }
function toolstopia_location()   { return apply_filters( 'toolstopia_location', 'Royal Palms Mall, Shop No. BG 55, Nairobi, Kenya' ); }

/**
 * Build a WhatsApp click-to-chat URL with an optional pre-filled message.
 */
function toolstopia_wa_url( $message = '' ) {
	$base = 'https://wa.me/' . toolstopia_whatsapp();
	if ( $message ) {
		$base .= '?text=' . rawurlencode( $message );
	}
	return esc_url( $base );
}

/**
 * Load includes
 */
require_once TOOLSTOPIA_DIR . '/inc/megamenu-walker.php';
require_once TOOLSTOPIA_DIR . '/inc/template-functions.php';
require_once TOOLSTOPIA_DIR . '/inc/woocommerce.php';
require_once TOOLSTOPIA_DIR . '/inc/schema.php';
require_once TOOLSTOPIA_DIR . '/inc/performance.php';
