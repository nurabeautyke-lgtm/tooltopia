<?php
/**
 * 404 template
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>
<div class="ts-page" style="text-align:center">
	<div class="ts-container" style="max-width:640px;padding:60px 20px">
		<div style="font-family:var(--ts-font-head);font-weight:800;font-size:clamp(4rem,16vw,9rem);color:var(--ts-primary);line-height:1">404</div>
		<h1><?php esc_html_e( 'Page not found', 'toolstopia' ); ?></h1>
		<p class="ts-muted"><?php esc_html_e( 'The page you were looking for has moved or no longer exists. Let\'s get you back to work.', 'toolstopia' ); ?></p>
		<div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:22px">
			<a class="ts-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'toolstopia' ); ?></a>
			<a class="ts-btn ts-btn--ghost" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Browse the Shop', 'toolstopia' ); ?></a>
		</div>
		<div style="margin-top:30px"><?php get_search_form(); ?></div>
	</div>
</div>
<?php get_footer(); ?>
