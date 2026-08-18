<?php
/**
 * Header
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta name="theme-color" content="#0F172A">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'toolstopia' ); ?></a>

<header class="ts-header" id="site-header">

	<!-- Top bar -->
	<div class="ts-topbar">
		<div class="ts-container">
			<div class="ts-topbar__promo">
				<?php
				printf(
					/* translators: 1: truck emoji removed for a11y */
					esc_html__( 'Free delivery within Nairobi on orders over KSh 10,000 · Nationwide 2–5 days', 'toolstopia' )
				);
				?>
			</div>
			<nav class="ts-topbar__links" aria-label="<?php esc_attr_e( 'Utility', 'toolstopia' ); ?>">
				<a href="<?php echo esc_url( home_url( '/track-order/' ) ); ?>"><?php esc_html_e( 'Track Order', 'toolstopia' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/help-faq/' ) ); ?>"><?php esc_html_e( 'Help', 'toolstopia' ); ?></a>
				<a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', toolstopia_phone() ) ); ?>"><?php echo esc_html( toolstopia_phone() ); ?></a>
			</nav>
		</div>
	</div>

	<!-- Main bar -->
	<div class="ts-container">
		<div class="ts-header__bar">
			<div class="ts-logo">
				<?php if ( has_custom_logo() ) { the_custom_logo(); } else { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ts-logo"><img src="<?php echo esc_url( TOOLSTOPIA_URI . '/assets/images/logo.png' ); ?>" alt="Toolstopia" width="200" height="43"></a>
				<?php } ?>
			</div>

			<div class="ts-search" role="search">
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
					<label class="screen-reader-text" for="ts-search-field"><?php esc_html_e( 'Search products', 'toolstopia' ); ?></label>
					<input id="ts-search-field" type="search" name="s" placeholder="<?php esc_attr_e( 'Search 1,300+ tools, brands, part numbers…', 'toolstopia' ); ?>" value="<?php echo get_search_query(); ?>" autocomplete="off">
					<?php if ( class_exists( 'WooCommerce' ) ) { ?><input type="hidden" name="post_type" value="product"><?php } ?>
					<button type="submit" aria-label="<?php esc_attr_e( 'Search', 'toolstopia' ); ?>">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.2-3.2"/></svg>
					</button>
				</form>
			</div>

			<div class="ts-header__actions">
				<a class="ts-iconbtn" href="<?php echo esc_url( home_url( '/wishlist/' ) ); ?>" aria-label="<?php esc_attr_e( 'Wishlist', 'toolstopia' ); ?>">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 1 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8Z"/></svg>
				</a>
				<?php if ( is_user_logged_in() ) { $acct = wc_get_page_permalink( 'myaccount' ); } else { $acct = wc_get_page_permalink( 'myaccount' ); } ?>
				<a class="ts-iconbtn" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/my-account/' ) ); ?>" aria-label="<?php esc_attr_e( 'My account', 'toolstopia' ); ?>">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-3.3 3.6-6 8-6s8 2.7 8 6"/></svg>
				</a>
				<a class="ts-iconbtn" href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' ) ); ?>" aria-label="<?php esc_attr_e( 'Cart', 'toolstopia' ); ?>">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 4h2l2.4 12.2a2 2 0 0 0 2 1.8h7.7a2 2 0 0 0 2-1.6L21 8H6"/><circle cx="10" cy="21" r="1"/><circle cx="18" cy="21" r="1"/></svg>
					<?php if ( class_exists( 'WooCommerce' ) && WC()->cart ) : ?>
						<span class="ts-iconbtn__count" data-ts-cart-count><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
					<?php endif; ?>
				</a>
			</div>
		</div>
	</div>

	<!-- Primary nav -->
	<nav class="ts-nav" aria-label="<?php esc_attr_e( 'Primary', 'toolstopia' ); ?>">
		<div class="ts-container">
			<div class="ts-nav__inner">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'menu',
						'walker'         => new Toolstopia_Mega_Walker(),
						'fallback_cb'    => false,
					) );
				} else {
					echo '<ul class="menu">';
					echo '<li class="menu-item"><a href="' . esc_url( home_url( '/shop/' ) ) . '">' . esc_html__( 'Shop All', 'toolstopia' ) . '</a></li>';
					echo '<li class="menu-item"><a href="' . esc_url( home_url( '/brands/' ) ) . '">' . esc_html__( 'Brands', 'toolstopia' ) . '</a></li>';
					echo '<li class="menu-item"><a href="' . esc_url( home_url( '/wholesale/' ) ) . '">' . esc_html__( 'Wholesale', 'toolstopia' ) . '</a></li>';
					echo '<li class="menu-item"><a href="' . esc_url( home_url( '/request-quotation/' ) ) . '">' . esc_html__( 'Request a Quote', 'toolstopia' ) . '</a></li>';
					echo '<li class="menu-item"><a href="' . esc_url( home_url( '/about-us/' ) ) . '">' . esc_html__( 'About', 'toolstopia' ) . '</a></li>';
					echo '<li class="menu-item"><a href="' . esc_url( home_url( '/contact-us/' ) ) . '">' . esc_html__( 'Contact', 'toolstopia' ) . '</a></li>';
					echo '</ul>';
				}
				?>
			</div>
		</div>
	</nav>
</header>

<main id="main" class="site-main">
