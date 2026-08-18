<?php
/**
 * Fallback index template
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<div class="ts-page">
	<div class="ts-container">
		<div class="ts-grid" style="grid-template-columns:1fr 320px;gap:40px;align-items:start">
			<div>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<article <?php post_class( 'ts-card' ); ?> style="padding:24px;margin-bottom:24px">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'style' => 'border-radius:var(--ts-r);margin-bottom:16px' ) ); ?></a>
							<?php endif; ?>
							<h2 style="font-size:1.4rem"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="ts-muted" style="font-size:.85rem"><?php echo esc_html( get_the_date() ); ?></p>
							<div class="ts-prose"><?php the_excerpt(); ?></div>
							<a class="ts-btn ts-btn--ghost ts-btn--sm" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'toolstopia' ); ?></a>
						</article>
					<?php endwhile; ?>
					<div class="ts-pagination"><?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?></div>
				<?php else : ?>
					<div class="ts-card" style="padding:40px;text-align:center">
						<h2><?php esc_html_e( 'Nothing here yet', 'toolstopia' ); ?></h2>
						<p class="ts-muted"><?php esc_html_e( 'Try searching or browse the shop.', 'toolstopia' ); ?></p>
						<a class="ts-btn" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Go to Shop', 'toolstopia' ); ?></a>
					</div>
				<?php endif; ?>
			</div>
			<aside class="ts-sidebar"><?php get_sidebar(); ?></aside>
		</div>
	</div>
</div>

<?php get_footer(); ?>
