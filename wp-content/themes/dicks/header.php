<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" type="image/x-icon">
		
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css" rel="stylesheet" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/developer.css" rel="stylesheet" />
</head>

<body <?php body_class(); ?>>
<header class="header_container">
			<div class="container">
				<div class="header_logo_part clearfix">
					<?php if ( get_header_image() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
					<?php endif; ?>
					<div class="phone_cell">
						<?php dynamic_sidebar('sidebar-4');?>
					</div>
			        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			            <span class="sr-only">Toggle navigation</span>					
			            <span class="icon-bar"></span>					
			            <span class="icon-bar"></span>					
			            <span class="icon-bar"></span>					
			        </button>
				</div>
			    <div id="navbarCollapse" class="collapse navbar-collapse nav_outer">
			    	<!-- <ul class="main_menu">
			    		<li class="active"><a href="#">STARTSIDA</a></li>
			    		<li><a href="#">OM FÖRETAGET</a></li>
			    		<li><a href="#">SORTIMENT</a></li>
			    		<li><a href="#">TJÄNSTER</a></li>
			    		<li><a href="#">LÄNKAR</a></li>
			    		<li><a href="#">FELANMÄLAN</a></li>
			    		<li><a href="#">KONTAKT</a></li>
			    	</ul> -->
			    	<?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             =>  2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		        		'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'main_menu',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
			    	<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main_menu' ) ); ?>	
			    </div>	
			</div>
		</header>