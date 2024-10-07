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
								<source srcset="assets/img/icons/logo-gold.svg" media="(max-width:974px)">
								<source srcset="assets/img/icons/logo-gold.svg" media="(orientation: portrait)">
								<source srcset="assets/img/icons/logo-white.svg" media="(orientation: landscape)">
								<img src="assets/img/icons/logo-white.svg" alt="" />
							</picture>
						</a>
						<nav class="nav">
							<ul>
								<li><a href="methods.html">с чем работаю</a></li>
								<li><a href="services.html">услуги</a></li>
								<li><a href="result.html">результаты</a></li>
								<li><a href="index.html#reviews">отзывы</a></li>
								<li><a href="blog.html">блог</a></li>
							</ul>
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
			<main class="main">