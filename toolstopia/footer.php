<?php
/**
 * Footer
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
</main><!-- #main -->

<footer class="ts-footer" role="contentinfo">
	<div class="ts-container">
		<div class="ts-footer__grid">
			<div class="ts-footer__brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ts-logo"><img src="<?php echo esc_url( TOOLSTOPIA_URI . '/assets/images/logo-white.png' ); ?>" alt="Toolstopia" width="190" height="41"></a>
				<p><?php esc_html_e( 'Toolstopia is a Kenya-based online retailer supplying tools, equipment and related products for homes, businesses, contractors and workshops. We provide product information, customer support and delivery services across Kenya.', 'toolstopia' ); ?></p>
				<div class="ts-footer__pay">
					<span>M-PESA</span><span>Bank Transfer</span><span>Cash on Delivery</span>
				</div>
			</div>

			<div>
				<h4><?php esc_html_e( 'Shop', 'toolstopia' ); ?></h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'All Products', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/brands/' ) ); ?>"><?php esc_html_e( 'Shop by Brand', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/deals/' ) ); ?>"><?php esc_html_e( "Today's Deals", 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/wholesale/' ) ); ?>"><?php esc_html_e( 'Wholesale & Bulk', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/request-quotation/' ) ); ?>"><?php esc_html_e( 'Request a Quote', 'toolstopia' ); ?></a></li>
				</ul>
			</div>

			<div>
				<h4><?php esc_html_e( 'Support', 'toolstopia' ); ?></h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/track-order/' ) ); ?>"><?php esc_html_e( 'Track Order', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/shipping-delivery/' ) ); ?>"><?php esc_html_e( 'Shipping & Delivery', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/returns-refunds/' ) ); ?>"><?php esc_html_e( 'Returns & Refunds', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/warranty/' ) ); ?>"><?php esc_html_e( 'Warranty', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/help-faq/' ) ); ?>"><?php esc_html_e( 'FAQ', 'toolstopia' ); ?></a></li>
				</ul>
			</div>

			<div>
				<h4><?php esc_html_e( 'Company', 'toolstopia' ); ?></h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About Us', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>"><?php esc_html_e( 'Careers', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/business-account/' ) ); ?>"><?php esc_html_e( 'Business Accounts', 'toolstopia' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/service-centre/' ) ); ?>"><?php esc_html_e( 'Service Centre', 'toolstopia' ); ?></a></li>
				</ul>
			</div>
		</div>

		<div class="ts-footer__contact" style="display:flex;gap:26px;flex-wrap:wrap;padding-bottom:26px;font-size:.9rem">
			<span><strong style="color:#fff"><?php esc_html_e( 'Call/WhatsApp:', 'toolstopia' ); ?></strong> <a href="<?php echo toolstopia_wa_url( 'Hello Toolstopia, I have a question.' ); ?>"><?php echo esc_html( toolstopia_phone() ); ?></a></span>
			<span><strong style="color:#fff"><?php esc_html_e( 'Email:', 'toolstopia' ); ?></strong> <a href="mailto:<?php echo esc_attr( toolstopia_email() ); ?>"><?php echo esc_html( toolstopia_email() ); ?></a></span>
			<span><strong style="color:#fff"><?php esc_html_e( 'Hours:', 'toolstopia' ); ?></strong> <?php echo esc_html( toolstopia_hours() ); ?></span>
			<span><strong style="color:#fff"><?php esc_html_e( 'Location:', 'toolstopia' ); ?></strong> <?php echo esc_html( toolstopia_location() ); ?></span>
		</div>

		<div class="ts-footer__bottom">
			<div>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Toolstopia. <?php esc_html_e( 'All rights reserved.', 'toolstopia' ); ?></div>
			<nav aria-label="<?php esc_attr_e( 'Legal', 'toolstopia' ); ?>" style="display:flex;gap:16px;flex-wrap:wrap">
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'toolstopia' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>"><?php esc_html_e( 'Terms & Conditions', 'toolstopia' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/payment-methods/' ) ); ?>"><?php esc_html_e( 'Payment Methods', 'toolstopia' ); ?></a>
			</nav>
		</div>
	</div>
</footer>

<!-- Floating WhatsApp order button -->
<a class="ts-wa-float" href="<?php echo toolstopia_wa_url( 'Hello Toolstopia! I would like to place an order / ask about a product.' ); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Order on WhatsApp', 'toolstopia' ); ?>">
	<svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.9 14.3c-.2.7-1.4 1.3-2 1.4-.5.1-1.2.1-1.9-.1-.4-.1-1-.3-1.8-.6-3-1.3-5-4.4-5.1-4.6-.2-.2-1.3-1.7-1.3-3.2s.8-2.3 1.1-2.6c.3-.3.6-.4.8-.4h.6c.2 0 .4 0 .7.5.2.6.8 2 .9 2.1.1.1.1.3 0 .5-.1.2-.2.4-.3.5l-.5.5c-.2.2-.3.3-.1.6.2.3.9 1.4 1.9 2.3 1.3 1.1 2.3 1.5 2.6 1.6.3.1.5.1.7-.1.2-.2.8-.9 1-1.2.2-.3.4-.2.7-.1.3.1 1.8.9 2.1 1 .3.2.5.2.6.4.1.1.1.7-.1 1.4Z"/></svg>
</a>

<!-- Mobile bottom navigation (thumb-friendly) -->
<nav class="ts-bottomnav" aria-label="<?php esc_attr_e( 'Mobile', 'toolstopia' ); ?>">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11 12 3l9 8"/><path d="M5 10v10h14V10"/></svg><?php esc_html_e( 'Home', 'toolstopia' ); ?></a>
	<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16l-1 13H5L4 7Z"/><path d="M9 7a3 3 0 0 1 6 0"/></svg><?php esc_html_e( 'Shop', 'toolstopia' ); ?></a>
	<a href="<?php echo toolstopia_wa_url( 'Hello Toolstopia! I would like to order.' ); ?>"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Z"/></svg><?php esc_html_e( 'WhatsApp', 'toolstopia' ); ?></a>
	<a href="<?php echo esc_url( home_url( '/wishlist/' ) ); ?>"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 1 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8Z"/></svg><?php esc_html_e( 'Saved', 'toolstopia' ); ?></a>
	<a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/my-account/' ) ); ?>"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-3.3 3.6-6 8-6s8 2.7 8 6"/></svg><?php esc_html_e( 'Account', 'toolstopia' ); ?></a>
</nav>

<?php wp_footer(); ?>
</body>
</html>
