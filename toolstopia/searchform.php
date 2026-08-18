<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<form role="search" method="get" class="ts-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="s-<?php echo esc_attr( uniqid() ); ?>"><?php esc_html_e( 'Search', 'toolstopia' ); ?></label>
	<input type="search" name="s" placeholder="<?php esc_attr_e( 'Search products…', 'toolstopia' ); ?>" value="<?php echo get_search_query(); ?>">
	<button type="submit" aria-label="<?php esc_attr_e( 'Search', 'toolstopia' ); ?>">
		<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.2-3.2"/></svg>
	</button>
</form>
