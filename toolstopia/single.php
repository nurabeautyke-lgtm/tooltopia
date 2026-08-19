<?php
/**
 * Single blog post
 * @package Tooltopia Store
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<div class="ts-page">
	<div class="ts-container" style="max-width:840px">
		<?php while ( have_posts() ) : the_post(); ?>
			<nav class="ts-breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'toolstopia' ); ?></a> &nbsp;/&nbsp;
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'toolstopia' ); ?></a> &nbsp;/&nbsp; <?php the_title(); ?>
			</nav>
			<article <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<p class="ts-muted" style="font-size:.88rem"><?php echo esc_html( get_the_date() ); ?> · <?php the_author(); ?></p>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large', array( 'style' => 'border-radius:var(--ts-r-lg);margin:18px 0' ) ); ?>
				<?php endif; ?>
				<div class="ts-prose"><?php the_content(); ?></div>
				<?php wp_link_pages(); ?>
			</article>
			<?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>
