<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanguard-wachschutz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<header class="header">
	<div class="site-container">
		<div class="header__wrapper">
			<a href="#" class="header__logo">
				<!-- <img src="https://i.ibb.co/j6zHYS4/header-logo.png" alt=""> -->
			</a>
			<nav class="header__menu menu">
				<ul class="menu__list">
					<li class="menu__item">
						<a href="#" class="menu__link">Werkschutz</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">Objektschutz</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">Veranstaltungsschutz</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">Öffentliche Sicherheit</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">Öffentliche Sicherheit</a>
					</li>
				</ul>
			</nav>
			<nav class="header__side-menu side-menu">
				<div class="close-button"></div>
				<ul class="menu__list">
					<li class="menu__item">
						<a href="#" class="menu__link">Werkschutz</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">Objektschutz</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">Veranstaltungsschutz</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">Öffentliche Sicherheit</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">Öffentliche Sicherheit</a>
					</li>
				</ul>
				<div class="header__social">
					<a href="#" class="header__social-item">
						<img src="https://i.ibb.co/xMncycz/facebook.png" alt="facebook">
					</a>
					<a href="#" class="header__social-item">
						<img src="https://i.ibb.co/Thm4WSf/instagram.png" alt="instagram">
					</a>
					<a href="#" class="header__social-item">
						<img src="https://i.ibb.co/GcTvLqb/twitter.png" alt="twitter">
					</a>
				</div>
			</nav>
			<div class="header__menu-button">Menü</div>
		</div>
	</div>
</header>