<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage WebWorks Dreams
 * @since WebWorks Dreams 1.0
 */

$wrapper_classes  = 'site-header Navbar';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>


<div class="banner">
    <?php get_template_part( 'template-parts/site-banner' ); ?>
</div>
<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">
    <?php get_template_part( 'template-parts/site-branding' ); ?>
	<?php get_template_part( 'template-parts/site-nav' ); ?>
</header><!-- #masthead -->
