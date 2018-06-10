<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsidetheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="app">
	<header style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
	<div class="header-bg">
		<nav class="cf-navbar">
			 <div class="container-fluid">
				 <div class="col-xs-9 col-lg-1 cf-logo">
            <a href="/"> GI <?php the_custom_logo(); ?></a>
          </div>
					<div class="col-xs-3 cf-mobile-menu-open hidden-md hidden-lg">
            <a v-on:click="openMenu = !openMenu" href="javascript:;"><i class="fa fa-bars" aria-hidden="true"></i></a>
          </div>
						<div class="hidden-xs hidden-sm">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</div>

						<!-- Mobile Navigation -->
            <div class="cf-mobile-menu" v-bind:class="{'active': openMenu }">
            <div class="cf-mobile-menu-close" v-on:click="openMenu = !openMenu"><i class="fas fa-times-circle"></i></div>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
            </div>
            <!-- End Mobile Navigation -->
			</div>
		</nav><!-- #site-navigation -->

		<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="cf-banner-inner">
            <a href="javascript:;"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Home</a>
            <h1 class="text-center">Gi Conference</h1>
            <span>Don't miss it , hurryup and troll Gican</span>
            <a href="<?php echo get_permalink( get_page_by_path( 'Agenda' ) ) ?>" class="cf-btn cf-btn-register">Register</a>
          </div>
        </div>
      </div>
    </div>
	</div>
	</header><!-- #masthead -->

	<div>
