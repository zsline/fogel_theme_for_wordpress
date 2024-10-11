<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fogel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'fogel'); ?></a>
		<div class="wrapper">
			<a href="#top" class="top-btn"></a>
			<div id="top"></div>
			<header class="header">
				<div class="container">
					<div class="header__wrapper">
						<a href="/">
							<picture>
								<source srcset="<?php echo carbon_get_theme_option('logo_header_mobile_img') ?>" media="(max-width:974px)">
								<source srcset="<?php echo carbon_get_theme_option('logo_header_mobile_img') ?>" media="(orientation: portrait)">
								<source srcset="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ?>" media="(orientation: landscape)">
								<img src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ?>" alt="Logo" />
							</picture>
						</a>
						<nav class="nav">
							<?php wp_nav_menu() ?>
							<a href="#" class="btn btn-contact btn-white">
								<p>Запланировать консультацию</p>
							</a>
						</nav>
						<div class="menu-btn">
							<span></span>
						</div>
					</div>
				</div>
			</header>