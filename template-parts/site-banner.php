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
		<div>
			<a class="dropdown-icon open"><?php esc_html_e( 'Menu', 'twentytwentyone' ); ?>
				<?php echo webworks_dreams_get_social_link_svg("mailto:webworksdreams@gmail.com", 24) ?>
			</a>
		</div>
		<div class="social-media-icons">
			<a class="dropdown-icon open"><?php esc_html_e( 'Menu', 'twentytwentyone' ); ?>
				<?php echo webworks_dreams_get_social_link_svg("https://www.youtube.com/channel/UC3RM0Ic1ERezJNHYNwXwa2A", 24) ?>
			</a>
			<a class="dropdown-icon close"><?php esc_html_e( 'Close', 'twentytwentyone' ); ?>
				<?php echo webworks_dreams_get_social_link_svg("https://www.facebook.com/WebWorksDreams", 24) ?>
			</a>
				</div>
	</nav><!-- #site-navigation -->
<?php endif; ?>


<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav id="site-navigation" class="secondary-navigation" aria-label="<?php esc_attr_e( 'Secondary menu', 'webworksdreams' ); ?>">

		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'secondary',
				'menu_class'      => 'nav-menu',
				'container_class' => 'secondary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>