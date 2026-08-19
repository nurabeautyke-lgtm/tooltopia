<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( is_active_sidebar( 'shop-sidebar' ) ) {
	dynamic_sidebar( 'shop-sidebar' );
} else {
	echo '<div class="ts-card" style="padding:20px">';
	echo '<h4 class="ts-widget__title">' . esc_html__( 'Need help choosing?', 'toolstopia' ) . '</h4>';
	echo '<p class="ts-muted" style="font-size:.9rem">' . esc_html__( 'Talk to a tools expert on WhatsApp and get a recommendation in minutes.', 'toolstopia' ) . '</p>';
	echo '<a class="ts-btn ts-btn--wa ts-btn--sm" target="_blank" rel="noopener" href="' . toolstopia_wa_url( 'Hi Tooltopia Store, I need help choosing a tool.' ) . '">' . esc_html__( 'Chat now', 'toolstopia' ) . '</a>';
	echo '</div>';
}
