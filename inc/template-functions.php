
<?php
/**
 * Gets the SVG code for a given icon.
 *
 * @since WebWorks Dreams 1.0
 *
 * @param string $group The icon group.
 * @param string $icon  The icon.
 * @param int    $size  The icon size in pixels.
 * @return string
 */
function webworks_dreams_get_icon_svg( $group, $icon, $size = 24 ) {
	return Webworks_Dreams_SVG_Icons::get_svg( $group, $icon, $size );
}


/**
 * Detects the social network from a URL and returns the SVG code for its icon.
 *
 * @since WebWorks Dreams 1.0
 *
 * @param string $uri  Social link.
 * @param int    $size The icon size in pixels.
 * @return string
 */
function webworks_dreams_get_social_link_svg( $uri, $size = 24 ) {
	return Webworks_Dreams_SVG_Icons::get_social_link_svg( $uri, $size );
}


/**
 * Displays SVG icons in the social navigation.
 *
 * @since WebWorks Dreams 1.0
 *
 * @param string   $item_output The menu item's starting HTML output.
 * @param WP_Post  $item        Menu item data object.
 * @param int      $depth       Depth of the menu. Used for padding.
 * @param stdClass $args        An object of wp_nav_menu() arguments.
 * @return string The menu item output with social icon.
 */
function webworks_dreams_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
	// Change SVG icon inside social links menu if there is supported URL.
	if ( 'social' === $args->theme_location ) {
		$svg = webworks_dreams_get_social_link_svg( $item->url, 24 );
		if ( ! empty( $svg ) ) {
			$item_output = str_replace( $args->link_before, $svg, $item_output );
		}
	}

	return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'webworks_dreams_nav_menu_social_icons', 10, 4 );