<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage WebWorks Dreams
 * @since WebWorks Dreams 1.0
 */

?>

<div id="mobile-menu-btn" class="menu-button-container">
<button id="primary-mobile-menu" class="button Navbar__Link Navbar__Link-toggle" aria-controls="primary-menu-list" aria-expanded="false">
<span class="dropdown-icon open">
	<?php echo webworks_dreams_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
</span>
</button><!-- #primary-mobile-menu -->
</div><!-- .menu-button-container -->

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation Navbar__Items" aria-label="<?php esc_attr_e( 'Primary menu', 'webworksdreams' ); ?>">

		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'nav-menu',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
