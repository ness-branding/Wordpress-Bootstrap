<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">

        <header id="masthead" class="site-header">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--If the meu (WP admin area) is not set, then the 'menu_class' is applied to 'container.  In other words, it overwrites the 'container_class./ ref: http://wordpress.org/suipport/topic/wp_nav_menu-menu_cloass-usage-bug?replies=4-->

                <?php 
			wp_nav_menu( array(
			
				'theme_location'	=> 'primary',
				'depth'	          	=> 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'			=> 'nav',
				'container_class'	=> 'collapse navbar-collapse',
				'container_id'   	=> 'navbarSupportedContent',
				'menu_class'		=> 'navbar-nav ml-auto text-uppercase',
				'fallback_cb'    	=> 'WP_Bootstrap_Navwalker::fallback',
				'walker'          	=> new WP_Bootstrap_Navwalker(),
			));
		?>


            </nav>
        </header><!-- #masthead -->

        <div id="content" class="site-content">
