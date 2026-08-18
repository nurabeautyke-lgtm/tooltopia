<?php
/**
 * Mega-menu nav walker.
 * Adds a11y attributes and supports a "mega" menu column layout when a top-level
 * item is given the CSS class "mega" in Appearance > Menus.
 *
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

class Toolstopia_Mega_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"sub-menu\">\n";
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$class_str = join( ' ', array_filter( array_map( 'sanitize_html_class', $classes ) ) );
		$class_str = $class_str ? ' class="' . esc_attr( $class_str ) . '"' : '';

		$has_children = in_array( 'menu-item-has-children', $classes, true );

		$output .= '<li' . $class_str . '>';

		$atts           = array();
		$atts['href']   = ! empty( $item->url ) ? $item->url : '';
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		if ( $has_children && 0 === $depth ) {
			$atts['aria-haspopup'] = 'true';
		}

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( '' !== $value ) {
				$attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
			}
		}

		$title       = apply_filters( 'the_title', $item->title, $item->ID );
		$item_output = ( $args->before ?? '' ) . '<a' . $attributes . '>' . ( $args->link_before ?? '' ) . esc_html( $title ) . ( $args->link_after ?? '' ) . '</a>' . ( $args->after ?? '' );

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
