<?php
/**
 * Archive / blog index
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>
<div class="ts-page__hero">
	<div class="ts-container">
		<h1><?php the_archive_title(); ?></h1>
		<?php the_archive_description( '<p class="ts-muted">', '</p>' ); ?>
	</div>
</div>
<div class="ts-page">
	<div class="ts-container">
		<div class="ts-grid ts-products">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'ts-card' ); ?> style="padding:14px">
					<?php if ( has_post_thumbnail() ) : ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'style' => 'border-radius:var(--ts-r);margin-bottom:12px' ) ); ?></a><?php endif; ?>
					<h3 style="font-size:1.05rem"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="ts-muted" style="font-size:.85rem"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
				</article>
			<?php endwhile; the_posts_pagination(); else : ?>
				<p><?php esc_html_e( 'No posts found.', 'toolstopia' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
