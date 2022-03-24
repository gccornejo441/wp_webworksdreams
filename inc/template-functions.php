
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
 * @since Twenty Twenty-One 1.0
 *
 * @param string $uri  Social link.
 * @param int    $size The icon size in pixels.
 * @return string
 */
function webworks_dreams_get_social_link_svg( $uri, $size = 24 ) {
	return Webworks_Dreams_SVG_Icons::get_social_link_svg( $uri, $size );
}
