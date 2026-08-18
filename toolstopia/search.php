<?php
/**
 * Search results
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>
<div class="ts-page__hero">
	<div class="ts-container">
		<h1><?php printf( esc_html__( 'Results for "%s"', 'toolstopia' ), esc_html( get_search_query() ) ); ?></h1>
		<?php get_search_form(); ?>
	</div>
</div>
<div class="ts-page">
	<div class="ts-container">
		<?php if ( have_posts() ) : ?>
			<div class="ts-grid ts-products">
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'ts-card' ); ?> style="padding:16px">
						<h3 style="font-size:1.05rem"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="ts-muted" style="font-size:.85rem"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
					</article>
				<?php endwhile; ?>
			</div>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<div class="ts-card" style="padding:40px;text-align:center">
				<h2><?php esc_html_e( 'No matches found', 'toolstopia' ); ?></h2>
				<p class="ts-muted"><?php esc_html_e( 'Check the spelling or try a brand or part number. You can also ask us directly on WhatsApp.', 'toolstopia' ); ?></p>
				<a class="ts-btn ts-btn--wa" href="<?php echo toolstopia_wa_url( 'Hello Toolstopia, I am looking for a product.' ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Ask on WhatsApp', 'toolstopia' ); ?></a>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
