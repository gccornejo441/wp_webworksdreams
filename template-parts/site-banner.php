<?php
/**
 * Displays the site banner.
 *
 * @package WordPress
 * @subpackage WebWorks Dreams
 * @since WebWorks Dreams 1.0
 */

?>


<?php if ( has_nav_menu( 'social' ) ) : ?>
	<nav id="site-navigation" class="banner-social-wrapper" aria-label="<?php esc_attr_e( 'Social menu', 'webworksdreams' ); ?>">

		<ul class="social-menu banner-social reset-list-style social-icons fill-children-current-color" >
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'social',
				'menu_class'      => '',
				'depth' => 1, // No need to allow sub-menu for social icons
				'items_wrap'      => '%3$s',
				'fallback_cb'     => false,
				'depth'           => 1,
				'link_before' => '<span class="screen-reader-text">', // Hide the social links text
                'link_after' => '</span>', // Hide the social links text
			)
		);
		?>
		</ul>
	</nav><!-- #site-navigation -->
<?php endif; ?>
