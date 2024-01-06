<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Atella_Studio
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'atella-studio' ); ?></a>

	
	<header id="masthead" class="site-header fixed-top">
	
		<div class="container d-lg-none d-sm-block">
			<div class="row pt-4 pb-4 px-3 d-flex flex-row justify-content-between">
				<div class="col-3">
					<img id="menu-button" class="animate__animated" src="<?php echo get_template_directory_uri() ?>/img/menu.png" alt="">
				</div>
				<div class="col-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo();?></a>
					
				</div>
			</div>
		</div>
		<div class="container-fluid d-none d-sm-none d-lg-block">
			<div class="row pt-4 pb-4 mx-5 d-flex flex-row-reverse justify-content-between">
				<div class="col-1">
					<img class="w-75 float-end" src="<?php echo get_template_directory_uri() ?>/img/menu.png" alt="">
				</div>
				<div class="col-1">
					<a class="w-75" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo();?></a>
					
				</div>
			</div>
		</div>
		

		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="header-menu-mobile" class="header-menu-mobile fixed-top h-100 w-100 d-none animate__animated">
		<div class="container">
			<div class="header-menu-mobile__top row d-flex justify-content-center pt-4 pb-4 px-3">
				<div class="col-3">
					<img id="menu-close-button" class="animate__animated" src="<?php echo get_template_directory_uri() ?>/img/menuclose.png" alt="">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="header-menu-mobile__content row d-flex flex-column justify-content-center align-items-center">
				<div class="header-menu-mobile__content__wrapper d-flex flex-column w-50 gap-1">
					<div class="menu_item col-12 d-flex justify-content-start align-items-center gap-1">
						<img src="<?php echo get_template_directory_uri() ?>/img/home.png" alt=""> 
						<h4 class="text-white">Home</h4>
					</div>
					<div class="menu_item col-12 d-flex justify-content-start align-items-center gap-1">
						<img src="<?php echo get_template_directory_uri() ?>/img/pricing.png" alt=""> 
						<h4 class="text-white">Pricing</h4>
					</div>
					<div class="menu_item col-12 d-flex justify-content-start align-items-center gap-1">
						<img src="<?php echo get_template_directory_uri() ?>/img/how.png" alt=""> 
						<h4 class="text-white">How it Works</h4>
					</div>
				</div>
			</div>
		</div>
		

	</div>
