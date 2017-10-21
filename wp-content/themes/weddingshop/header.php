<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage weddingshop
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<?php global $smof_data; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php
ftc_theme_favicon();
wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'weddingshop' ); ?></a>

	<header id="masthead" class="site-header">

                <div class="header-ftc header-<?php echo esc_attr($smof_data['ftc_header_layout']); ?>">
                    <div class="header-content">
                            <div class="container">

                                    <div class="logo-wrapper"><?php echo ftc_theme_logo(); ?></div>

																		<div class="group-meta-header">
																			<?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
																		</div>
                                    <div class="group-header">
                                        <?php if( $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                                        <?php echo ftc_tiny_cart(); ?>
                                        <?php endif; ?>


                            				</div>
                            </div>
                    </div>
                </div>
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
