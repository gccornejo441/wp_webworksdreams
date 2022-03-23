<?php
/**
 * Displays the site banner.
 *
 * @package WordPress
 * @subpackage WebWorks Dreams
 * @since WebWorks Dreams 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-banner" class="main-banner">
                           <?php echo webworks_dreams_get_icon_svg( 'ui', 'menu' ); ?>
<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'webworksdreams' ); ?>
					<?php echo webworks_dreams_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
	</nav><!-- #site-navigation -->
<?php endif; ?>
