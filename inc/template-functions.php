
<?php
/**
 * Gets the SVG code for a given icon.
 *
 * @since Twenty Twenty-One 1.0
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
 * Changes the default navigation arrows to svg icons
 *
 * @since Twenty Twenty-One 1.0
 *
 * @param string $calendar_output The generated HTML of the calendar.
 * @return string
 */
function webworks_dreams_change_calendar_nav_arrows( $calendar_output ) {
	$calendar_output = str_replace( '&laquo; ', is_rtl() ? webworks_dreams_get_icon_svg( 'ui', 'arrow_right' ) : webworks_dreams_get_icon_svg( 'ui', 'arrow_left' ), $calendar_output );
	$calendar_output = str_replace( ' &raquo;', is_rtl() ? webworks_dreams_get_icon_svg( 'ui', 'arrow_left' ) : webworks_dreams_get_icon_svg( 'ui', 'arrow_right' ), $calendar_output );
	return $calendar_output;
}
add_filter( 'get_calendar', 'webworks_dreams_change_calendar_nav_arrows' );
