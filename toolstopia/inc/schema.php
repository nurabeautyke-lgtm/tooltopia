<?php
/**
 * JSON-LD structured data (Organization + WebSite search).
 * Product / Article / FAQ / Breadcrumb schema is emitted by WooCommerce and
 * recommended SEO plugins; this adds site-wide Organization + Sitelinks search.
 * @package Tooltopia Store
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_head', function () {
	$org = array(
		'@context' => 'https://schema.org',
		'@type'    => 'Store',
		'name'     => get_bloginfo( 'name' ),
		'url'      => home_url( '/' ),
		'image'    => TOOLSTOPIA_URI . '/assets/images/og.jpg',
		'telephone'=> '+254719261277',
		'email'    => toolstopia_email(),
		'priceRange' => 'KSh',
		'address'  => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => 'Royal Palms Mall, Shop No. BG 55, Ronald Ngala Street',
			'addressLocality' => 'Nairobi',
			'addressRegion'   => 'Nairobi',
			'addressCountry'  => 'KE',
		),
		'openingHoursSpecification' => array(
			'@type'     => 'OpeningHoursSpecification',
			'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ),
			'opens'     => '07:00',
			'closes'    => '18:00',
		),
		'areaServed' => 'KE',
		'sameAs'     => array(
			'https://www.facebook.com/toolstopia',
		),
	);

	$website = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'WebSite',
		'url'             => home_url( '/' ),
		'name'            => get_bloginfo( 'name' ),
		'potentialAction' => array(
			'@type'       => 'SearchAction',
			'target'      => array(
				'@type'       => 'EntryPoint',
				'urlTemplate' => home_url( '/?s={search_term_string}&post_type=product' ),
			),
			'query-input' => 'required name=search_term_string',
		),
	);

	echo "\n<script type=\"application/ld+json\">" . wp_json_encode( $org ) . "</script>\n";
	echo "<script type=\"application/ld+json\">" . wp_json_encode( $website ) . "</script>\n";
}, 20 );

/**
 * Open Graph + Twitter card basics (SEO plugins will override if present).
 */
add_action( 'wp_head', function () {
	if ( is_admin() ) { return; }
	$title = wp_get_document_title();
	$desc  = get_bloginfo( 'description' );
	$img   = TOOLSTOPIA_URI . '/assets/images/og.jpg';
	$url   = home_url( add_query_arg( array(), $GLOBALS['wp']->request ) );
	echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
	echo '<meta property="og:image" content="' . esc_url( $img ) . '">' . "\n";
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
}, 5 );
