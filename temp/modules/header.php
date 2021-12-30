<?php
     ini_set('error_reporting', E_ALL);
	 ini_set('display_errors', 1);
	 ini_set('display_startup_errors', 1);
	require_once(__DIR__ . '/../configs/config.php');
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--    <link rel="stylesheet" href="./css/bootstrap-grid.min.css"> -->
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/fonts.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
		  rel="stylesheet">
	<title><?= $site_title ?></title>

</head>
<body class="flex_stretch">
    <? require_once(__DIR__ . '/burger-menu.php') ?>

	<header class="header">
		<div class="container">
			<div class="header__top">
				<a href="/">
					<picture>
						<source srcset="./images/webp/logo-white.webp" type="image/webp">
						<img src="./images/logo-white.png" alt="лого" class="logo header__logo header__logo_mobile">
					</picture>
				</a>
				<nav class="header__top-list header__top-list_mobile">
					<a href="tel:<?=$phone_link?>" class="header__top-list-item">
						<svg class="header__top-list-icon">
							<use xlink:href="./images/stack/sprite.svg#phone-call"></use>
						</svg>
					</a>
					<a href="/kontakty" class="header__top-list-item">
						<svg class="header__top-list-icon">
							<use xlink:href="./images/stack/sprite.svg#placeholder"></use>
						</svg>
					</a>
					<a href="/sign-in" class="header__top-list-item">
						<svg class="header__top-list-icon">
							<use xlink:href="./images/stack/sprite.svg#user"></use>
						</svg>
					</a>
					<a href="#" class="header__top-list-item">
						<svg class="header__top-list-icon">
							<use xlink:href="./images/stack/sprite.svg#shopping-cart"></use>
						</svg>
					</a>
				</nav>

				<nav class="header__top-list header__top-list_desktop">
					<a href="/dostavka" class="header__top-list-item">Доставка</a>
					<a href="/vozvrat" class="header__top-list-item">Возврат</a>
					<a href="/kontakty" class="header__top-list-item">Контакты</a>
				</nav>
			</div>

			<div class="header__main">
				<div class="header__col">
					<label for="check" class="burger-btn">
						<input type="checkbox" id="check"/>
						<span></span>
						<span></span>
						<span></span>
					</label>
					<a href="/">
						<picture>
							<source srcset="./images/webp/logo-white.webp" type="image/webp">
							<img src="./images/logo-white.png" alt="лого" class="logo header__logo header__logo_desktop">
						</picture>
					</a>
				</div>

				<a href="tel: <?= $phone_link?>" class="header__main-search header__search-phone_mobile">
					<?= $phone_format?>
					<svg class="header__main-search-icon">
						<use xlink:href="./images/stack/sprite.svg#phone-call"></use>
					</svg>
				</a>

				<nav class="header__contacts">
					<li class="header__contacts-item">
						<a href="tel:<?= $phone_link?>" class="header__contacts-link">
							<svg class="header__contacts-item-icon">
								<use xlink:href="./images/stack/sprite.svg#phone-call"></use>
							</svg>
							<span class="header__contacts-item-text"><?= $phone_format;?></span>
						</a>
					</li>
					<div class="header__contacts-item header__contacts-item">
						<svg class="header__contacts-item-icon">
							<use xlink:href="./images/stack/sprite.svg#user"></use>
						</svg>
						<span class="header__contacts-item-text">Аккаунт</span>

						<div class="header__contacts-popup">
							<nav class="header__contacts-popup-list">
								<a href="/profile" class="header__contacts-popup-list-link">Профиль</a>
								<a href="/profile-edit-goods" class="header__contacts-popup-list-link">Товары</a>
							</nav>
							<div class="header__contacts-popup-links">
								<a href="/sign-in" class="header__contacts-popup-link">Войти</a>
								<a href="/sign-up" class="header__contacts-popup-link header__contacts-popup-link_accent">Регистрация</a>
							</div>
						</div>
					</div>
					<a href="/cart" class="header__contacts-item">
						<svg class="header__contacts-item-icon">
							<use xlink:href="./images/stack/sprite.svg#shopping-cart"></use>
						</svg>
						<span class="header__contacts-item-text">Корзина</span>
					</a>
				</nav>
			</div>
		</div>
	</header>