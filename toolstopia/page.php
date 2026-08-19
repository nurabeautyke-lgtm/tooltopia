<?php
/**
 * Default page template (prose pages: About, Policies, FAQ, etc.)
 * @package Tooltopia Store
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<div class="ts-page__hero">
	<div class="ts-container">
		<nav class="ts-breadcrumb" aria-label="Breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'toolstopia' ); ?></a> &nbsp;/&nbsp; <?php the_title(); ?>
		</nav>
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<div class="ts-page">
	<div class="ts-container">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'ts-prose' ); ?>>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>

		<div class="ts-card" style="padding:24px;margin-top:34px;display:flex;gap:16px;align-items:center;flex-wrap:wrap">
			<div style="flex:1;min-width:220px">
				<strong style="font-family:var(--ts-font-head)"><?php esc_html_e( 'Still have questions?', 'toolstopia' ); ?></strong>
				<div class="ts-muted" style="font-size:.9rem"><?php esc_html_e( 'Our team replies fast on WhatsApp during business hours.', 'toolstopia' ); ?></div>
			</div>
			<a class="ts-btn ts-btn--wa" href="<?php echo toolstopia_wa_url( 'Hello Tooltopia Store, I have a question.' ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Chat on WhatsApp', 'toolstopia' ); ?></a>
			<a class="ts-btn ts-btn--ghost" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'toolstopia' ); ?></a>
		</div>
	</div>
</div>

<?php get_footer(); ?>
