<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage WebWorks_Dreams
 * @since WebWorks Dreams 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->


	<footer id="colophon" class="site-footer">
        <div class="main-footer">
            <?php if ( has_nav_menu( 'footer' ) ) : ?>
            <div class="site-info">
                <div class="site-name">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="footer-site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
                            <?php if ( is_front_page() && ! is_paged() ) : ?>
                                <?php bloginfo( 'name' ); ?>
                            <?php else : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div><!-- .site-name -->
                <nav aria-label="<?php esc_attr_e( 'Footer menu', 'webworkdreams' ); ?>" class="footer-navigation">
                    <ul class="footer-navigation-wrapper">
                        <li>
                            <h3>Directory</h3>
                        </li>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'items_wrap'     => '%3$s',
                                'container'      => false,
                                'depth'          => 1,
                                'link_before'    => '<span>',
                                'link_after'     => '</span>',
                                'fallback_cb'    => false,
                            )
                        );
                        ?>
                    </ul><!-- .footer-navigation-wrapper -->
                </nav><!-- .footer-navigation -->
    
                <?php
                if ( function_exists( 'the_privacy_policy_link' ) ) {
                    the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
                }
                ?>

            </div><!-- .site-info -->
		<?php endif; ?>
        <?php if ( has_nav_menu( 'social' ) ) : ?>
	<nav id="site-navigation" class="footer-social-wrapper" aria-label="<?php esc_attr_e( 'Social menu', 'webworksdreams' ); ?>">

		<ul class="footer-social-menu footer-social reset-list-style footer-social-icons fill-children-current-color" >
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

        </div>
<div class="copyright">
<span>Copyright © 2022 WebWorksDreams</span>
</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
