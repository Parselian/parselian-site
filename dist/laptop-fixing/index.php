<?php
require_once(__DIR__ . '/assets/configs/config.php');
require_once(__DIR__ . '/assets/configs/db-cfg.php');

$get_devices_data = mysqli_query($connect, 'SELECT * FROM devices')
or die('GET devices data failed' . mysqli_error($connect));
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./assets/css/reset.css">
	<link rel="stylesheet" href="./assets/css/fonts.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
		  integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
		  integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel="stylesheet" href="./assets/css/style.css?<?= time(); ?>">
	<title>Laptop Power</title>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
</head>
<body>
<div class="burger-menu">
	<ul class="burger-menu__list">
		<li class="burger-menu__list-item">
			<a href="#prices" class="burger-menu__list-link">Цены</a>
			<svg class="burger-menu__list-item-icon">
				<use xlink:href="./assets/images/stack/sprite.svg#right-arrow"></use>
			</svg>
		</li>
		<li class="burger-menu__list-item">
			<a href="#advantages" class="burger-menu__list-link">О нас</a>
			<svg class="burger-menu__list-item-icon">
				<use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
			</svg>
		</li>
		<li class="burger-menu__list-item">
			<a href="#reviews" class="burger-menu__list-link">Отзывы</a>
			<svg class="burger-menu__list-item-icon">
				<use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
			</svg>
		</li>
		<li class="burger-menu__list-item">
			<a href="#contacts" class="burger-menu__list-link">Контакты</a>
			<svg class="burger-menu__list-item-icon">
				<use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
			</svg>
		</li>
	</ul>
	<div class="header__contacts burger-menu__contacts">
		<a href="tel: <?= $phone_link; ?> " class="header__contacts-phone burger-menu__contacts-phone"><?= $phone_format ?></a>
		<div class="header__contacts-worktime">8:00 — 23:00 без выходных</div>
	</div>
</div>

<section class="promo">
	<header class="header header_scrolled">
		<div class="container header__wrap">
			<svg class="header__col header__logo">
				<use xlink:href="./assets/stack/sprite.svg#logo"></use>
			</svg>
			<nav class="header__col header__nav">
				<a href="#prices" class="header__nav-item">Цены</a>
				<a href="#advantages" class="header__nav-item">О нас</a>
				<a href="#reviews" class="header__nav-item">Отзывы</a>
				<a href="#contacts" class="header__nav-item">Контакты</a>
			</nav>
			<div class="header__col">
				<div class="header__contacts">
					<a href="tel: <?= $phone_link; ?> " class="header__contacts-phone"><?= $phone_format ?></a>
					<div class="header__contacts-worktime">8:00 — 23:00 без выходных</div>
				</div>
				<label for="check" class="burger-btn">
					<input type="checkbox" id="check"/>
					<span></span>
					<span></span>
					<span></span>
				</label>
			</div>
		</div>
	</header>

	<div class="container promo__wrap">
		<h1 class="promo__title">
			Ремонт компьютерной техники <span class="line-break">в СПб</span>
		</h1>
		<ul class="promo__list">
			<li class="promo__list-item">— Профессиональные мастера</li>
			<li class="promo__list-item">— Ремонт любой сложности</li>
			<li class="promo__list-item">— Бесплатный выезд и диагностика</li>
		</ul>
		<div class="promo__buttons">
			<button class="button button_callback promo__button open-order-form">Срочный ремонт</button>
			<button class="button button_accent-transparent promo__button open-discount-form">Получить скидку</button>
		</div>
	</div>
</section>

<section class="features">
	<div class="container features__wrap">
		<div class="features__feature">
			<svg class="features__feature-icon">
				<use xlink:href="./assets/stack/sprite.svg#guarantee"></use>
			</svg>
			<div class="features__feature-title">Гарантия <span class="line-break">2 года</span></div>
		</div>
		<div class="features__feature">
			<svg class="features__feature-icon">
				<use xlink:href="./assets/stack/sprite.svg#health-report"></use>
			</svg>
			<div class="features__feature-title">Бесплатная <span class="line-break">диагностика</span></div>
		</div>
		<div class="features__feature">
			<svg class="features__feature-icon">
				<use xlink:href="./assets/stack/sprite.svg#gear"></use>
			</svg>
			<div class="features__feature-title">Ремонт <span class="line-break">любой сложности</span></div>
		</div>
	</div>
</section>

<section id="prices" class="prices">
	<div class="container prices__wrap">
		<h2 class="section__title section__title_alt prices__title">Услуги сервисного центра <?= $company_name; ?></h2>

		<div class="prices__devices">

		</div>

		<div class="prices__models">

		</div>

		<div class="prices__common-blocks">

		</div>

		<div class="prices__pricelist-wrap">
			<ul class="prices__pricelist">

			</ul>
		</div>

		<button class="button button_accent prices__pricelist-unroll">Показать всё</button>
	</div>

	<div class="container">
		<div class="delivery-form">
			<div class="delivery-form__title">Приедем к вам за 30 минут <span class="line-break">Бесплатно!</span></div>
			<div class="delivery-form__subtitle">Оставьте свой номер телефона <span class="line-break">перезвоним через 2 минуты</span>
			</div>
			<form action="./assets/configs/mail.php" method="POST">
				<input type="text" name="user_phone" class="delivery-form__input" placeholder="+7 (___) ___-__-__" required>
				<button type="submit" class="button button_callback delivery-form__button">Перезвоните мне</button>
			</form>
			<picture>
				<source srcset="./assets/images/webp/delivery-car.webp" type="image/webp">
				<img src="./assets/images/delivery-car.png" alt="Машина" class="delivery-form__img">
			</picture>
		</div>
	</div>

	<img src="./assets/images/prices-bg.png" alt="lines" class="prices__bg">
</section>

<section id="advantages" class="advantages">
	<div class="container advantages__wrap">

		<div class="advantages__col advantages__info">
			<h3 class="advantages__title">Наши преимущества</h3>
			<div class="advantages__slider">
				<div class="advantages__slide" data-slide="diagnostics">
					<picture>
						<source srcset="./assets/images/webp/advantage-diagnostics.webp" type="image/webp">
						<img src="./assets/images/advantage-diagnostics.jpg" alt="Бесплатная диагностика" class="advantages__slide-img">
					</picture>
					<div class="advantages__slide-info">
						<h4 class="advantages__slide-title">Бесплатная диагностика</h4>
						<p class="advantages__slide-text">
							Диагностика необходима для того, чтобы определить точную причину неисправности. Только после диагностики будет
							известен
							срок и стоимость ремонта. Если вас интересует типичная услуга (например, замена клавиши ноутбука), то инженер
							выполнит
							осмотр техники на возможность оказания данной услуги, назовет стоимость, заполнит договор и после этого начнется
							ремонт.
						</p>
					</div>
				</div>
				<div class="advantages__slide advantages__slide_active" data-slide="deadlines">
					<picture>
						<source srcset="./assets/images/webp/advantage-deadlines.webp" type="image/webp">
						<img src="./assets/images/advantage-deadlines.jpg" alt="Срочный ремонт" class="advantages__slide-img">
					</picture>
					<div class="advantages__slide-info">
						<h4 class="advantages__slide-title">Срочный ремонт</h4>
						<p class="advantages__slide-text">
							Выявив типовые неполадки, мы произведем срочный ремонт Вашей компьютерной техники. Это означает что все
							восстановительные операции займут не более 3 часов. Стоимость починки в экспресс-режиме является разумной и
							устроит заказчиков с разным финансовым положением. Проблемы, которые требуют применения сложной паяльной
							аппаратуры, устраняются в заранее оговоренные сроки. Мы не используем наценок и не гонимся за большим
							количеством клиентов, поэтому все предоставляемые услуги являются эффективными и качественными.
						</p>
					</div>
				</div>
				<div class="advantages__slide" data-slide="delivery">
					<picture>
						<source srcset="./assets/images/webp/advantage-vyezd.webp" type="image/webp">
						<img src="./assets/images/advantage-vyezd.jpg" alt="Бесплатный выезд" class="advantages__slide-img">
					</picture>
					<div class="advantages__slide-info">
						<h4 class="advantages__slide-title">Бесплатный выезд</h4>
						<p class="advantages__slide-text">
							Если ваша техника нуждается в квалифицированном обслуживании или ремонте, вы можете вернуть ей
							функциональность, не выходя из дома. Для этого свяжитесь с менеджером по контактному телефону, оформите заказ и
							воспользуйтесь доставкой, которую осуществляет наша курьерская служба. Наш сотрудник в течение часа со всеми
							необходимыми документами выедет на указанный адрес. Доставка техники в мастерскую производится на бесплатной
							основе.
						</p>
					</div>
				</div>
				<div class="advantages__slide" data-slide="parts">
					<picture>
						<source srcset="./assets/images/webp/advantage-parts.webp" type="image/webp">
						<img src="./assets/images/advantage-parts.jpg" alt="Оффициальные поставщики" class="advantages__slide-img">
					</picture>
					<div class="advantages__slide-info">
						<h4 class="advantages__slide-title">Оффициальные поставщики</h4>
						<p class="advantages__slide-text">
							Мы устанавливаем только оригинальные компоненты, которые поступают с завода-изготовителя напрямую. Налаженная
							связь с производителем дает возможность заменять модули и узлы по минимальной цене. Для проведения быстрых и
							надежных восстановительных работ мы заранее сформировали на складе большой ассортимент комплектующих. Выполняя
							их установку мы обеспечиваем Вашей технике стабильную и долгую службу. На все запчасти предоставляется
							гарантия 2 года.
						</p>
					</div>
				</div>
				<div class="advantages__slide" data-slide="warranty">
					<picture>
						<source srcset="./assets/images/webp/advantage-warranty.webp" type="image/webp">
						<img src="./assets/images/advantage-warranty.jpg" alt="Ремонт ноутбуков в СПб" class="advantages__slide-img">
					</picture>
					<div class="advantages__slide-info">
						<h4 class="advantages__slide-title">Гарантия 2 года</h4>
						<p class="advantages__slide-text">
							Сервисный центр <?= $company_name ?> производит ремонт комьпютерной техники любой сложности на дому и в офисе у
							заказчика, а также в мастерских сервисного центра <?= $company_name ?>. Мы полностью уверены в качестве своей
							работы, и поэтому даем гарантию 2 года на все виды работ.
						</p>
					</div>
				</div>
			</div>
			<div class="advantages__static">
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Фиксированные цены</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Бесплатный выезд</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Гарантия 2 года</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Срочный ремонт</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Оригинальные запчасти</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Бесплатная диагностика</div>
				</div>

			</div>
			<button class="button button_callback advantages__button open-order-form">Вызвать мастера</button>
		</div>

		<div class="advantages__col advantages__controls">
			<h3 class="advantages__controls-title">Преимущества</h3>
			<div class="advantages__controls-buttons">
				<div class="advantages__controls-button advantages__controls-button_active" data-btn-slide="deadlines">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#clock"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Сроки</h5>
						<div class="advantages__controls-button-text">Ремонт от 20 минут</div>
					</div>
				</div>
				<div class="advantages__controls-button" data-btn-slide="warranty">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#guarantee"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Гарантия</h5>
						<div class="advantages__controls-button-text">Гарантия 2 года</div>
					</div>
				</div>
				<div class="advantages__controls-button" data-btn-slide="delivery">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#delivery"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Доставка</h5>
						<div class="advantages__controls-button-text">Выезд и доставка</div>
					</div>
				</div>
				<div class="advantages__controls-button" data-btn-slide="diagnostics">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#search"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Диагностика</h5>
						<div class="advantages__controls-button-text">Бесплатная диагностика</div>
					</div>
				</div>
				<div class="advantages__controls-button" data-btn-slide="parts">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#puzzle"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Запчасти</h5>
						<div class="advantages__controls-button-text">Оригинальные запчасти</div>
					</div>
				</div>
			</div>

			<svg class="advantages__controls-more">
				<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
			</svg>
		</div>
	</div>
</section>

<section class="steps">
	<div class="container steps__wrap">
		<h2 class="section__title section__title_alt steps__title">Как мы работаем?</h2>
		<div class="steps__blocks">
			<div class="steps__block">
				<div class="steps__block-number">1</div>
				<div class="steps__block-text">
					<span class="text_accent">Оставьте заявку</span> на ремонт по телефону или на сайте
				</div>
			</div>
			<div class="steps__block">
				<div class="steps__block-number">2</div>
				<div class="steps__block-text">
					Ожидайте мастера. выезд и диагностика - <span class="text_accent">бесплатно</span>
				</div>
			</div>
			<div class="steps__block">
				<div class="steps__block-number">3</div>
				<div class="steps__block-text">
					Ремонтируем Ваше устройство. Ремонт занимает <span class="text_accent">от 30 минут</span>
				</div>
			</div>
			<div class="steps__block">
				<div class="steps__block-number">4</div>
				<div class="steps__block-text">
					Проверяете качество ремонта и получаете гарантию <span class="text_accent">2 года</span>
				</div>
			</div>
		</div>
	</div>
	<picture>
		<source srcset="./assets/images/webp/steps-bg.webp" type="image/webp">
		<img src="./assets/images/steps-bg.jpg" alt="Материнская плата MacBook" class="steps__bg">
	</picture>
</section>

<section class="team">
	<div class="container team__wrap">
		<h2 class="section__title">Опытные мастера</h2>
		<div class="section__subtitle">
			В сервисном центре <?= $company_name ?> работают только <span class="line-break">мастера с опытом работы от 3-х лет.</span>
		</div>

		<div class="team__certificates-wrap">
			<div class="team__certificates-slider">
				<img src="./assets/images/certificate_1.jpg" alt="сертификат 1" class="team__certificates-slide">
				<img src="./assets/images/certificate_2.jpg" alt="сертификат 2" class="team__certificates-slide">
				<img src="./assets/images/certificate_3.jpg" alt="сертификат 3" class="team__certificates-slide">
				<img src="./assets/images/certificate_4.jpg" alt="сертификат 4" class="team__certificates-slide">
			</div>
		</div>

		<div class="team__cards">
			<div class="team__card">
				<picture>
					<source srcset="./assets/images/webp/engineer_1.webp" type="image/webp">
					<img src="./assets/images/engineer_1.jpg" alt="Фото инженера" class="team__card-img">
				</picture>
				<h3 class="team__card-name">Владимир Сухорослов</h3>
				<h3 class="team__card-position">Старший инженер</h3>
				<div class="team__card-experience">Ремонтирует компьютерную технику с 2014 г.</div>
				<a href="#" class="team__card-link" data-slide-ind="0">Посмотреть сертификат</a>
			</div>

			<div class="team__card">
				<picture>
					<source srcset="./assets/images/webp/engineer_2.webp" type="image/webp">
					<img src="./assets/images/engineer_2.jpg" alt="Фото инженера" class="team__card-img"></picture>
				<h3 class="team__card-name">Андрей Бондарев</h3>
				<h3 class="team__card-position">Инженер</h3>
				<div class="team__card-experience">Ремонтирует компьютерную технику с 2017 г.</div>
				<a href="#" class="team__card-link" data-slide-ind="1">Посмотреть сертификат</a>
			</div>

			<div class="team__card">
				<picture>
					<source srcset="./assets/images/webp/engineer_3.webp" type="image/webp">
					<img src="./assets/images/engineer_3.jpg" alt="Фото инженера" class="team__card-img"></picture>
				<h3 class="team__card-name">Александр Беляшов</h3>
				<h3 class="team__card-position">Инженер</h3>
				<div class="team__card-experience">Ремонтирует компьютерную технику с 2018 г.</div>
				<a href="#" class="team__card-link" data-slide-ind="2">Посмотреть сертификат</a>
			</div>

			<div class="team__card">
				<picture>
					<source srcset="./assets/images/webp/engineer_4.webp" type="image/webp">
					<img src="./assets/images/engineer_4.jpg" alt="Фото инженера" class="team__card-img"></picture>
				<h3 class="team__card-name">Глеб Гурдынов</h3>
				<h3 class="team__card-position">Инженер</h3>
				<div class="team__card-experience">Ремонтирует компьютерную технику с 2016 г.</div>
				<a href="#" class="team__card-link" data-slide-ind="3">Посмотреть сертификат</a>
			</div>
		</div>
		<button class="button button_callback team__button open-order-form">Вызвать мастера</button>
	</div>
</section>

<section id="reviews" class="reviews">
	<div class="container reviews__wrap">
		<h2 class="section__title">Нас выбирают клиенты</h2>
		<div class="section__subtitle">
			Наши квалифицированные мастера дарят
			<span class="line-break">Вашим устройствам вторую жизнь</span>
		</div>
		<div class="reviews__slider">
			<div class="reviews__slide">
				<p class="reviews__slide-text">
					Нужно было быстро починить ноутбук, в нём вся моя работа и все данные, времени ехать в сервис у меня не было, решила
					вызвать мастера прямо в офис, через 20 минут прибыл инженер, настоящий профессионал! При мне провёл диагностику и
					устранил проблему, заменил клавиатуру за 25 минут. Даже не думала, что можно решить все проблемы с ноутбуком меньше
					чем за час! Удобный сервис, бесплатно приедут в любое место в городе, будь то квартира, офис или кафе, всё на высшем
					уровне!
				</p>
				<div class="reviews__slide-info">
					<div class="reviews__slide-rating">
						<div class="reviews__slide-rating-title">Рейтинг:</div>
						<div class="reviews__slide-rating-number">4.7</div>
					</div>
					<div class="reviews__slide-reviewer">
						<div class="reviews__slide-reviewer-info">
							<div class="reviews__slide-reviewer-name">Евгения З.</div>
							<div class="reviews__slide-reviewer-problem">Замена клавиатуры на ноутбуке</div>
						</div>
						<picture>
							<source srcset="./assets/images/webp/reviewer_1.webp" type="image/webp">
							<img src="./assets/images/reviewer_1.jpg" alt="фото клиента" class="reviews__slide-reviewer-img">
						</picture>
					</div>
				</div>
			</div>
			<div class="reviews__slide">
				<p class="reviews__slide-text">
					Классно! Обращался для замены разбитого экрана на ноутбуке, инженер приехал через 30 минут после заявки, очень
					вежливый и пунктуальный мастер, ремонт проводился при мне, для меня это важно! Ребята используют только
					оригинальные комплектующие, и дают бессрочную гарантию. Я доволен!
				</p>
				<div class="reviews__slide-info">
					<div class="reviews__slide-rating">
						<div class="reviews__slide-rating-title">Рейтинг:</div>
						<div class="reviews__slide-rating-number">4.9</div>
					</div>
					<div class="reviews__slide-reviewer">
						<div class="reviews__slide-reviewer-info">
							<div class="reviews__slide-reviewer-name">Кирилл М.</div>
							<div class="reviews__slide-reviewer-problem">Замена матрицы на ноутбуке</div>
						</div>
						<picture>
							<source srcset="./assets/images/webp/reviewer_2.webp" type="image/webp">
							<img src="./assets/images/reviewer_2.jpg" alt="фото клиента" class="reviews__slide-reviewer-img">
						</picture>
					</div>
				</div>
			</div>
			<div class="reviews__slide">
				<p class="reviews__slide-text">
					В Питере в этом году уже 2 раза обращался в данный сервис, первый раз менял аккумулятор на MacBook, второй раз
					чистил ноутбук, все два ремонта прошли быстро, мастера работают аккуратно и
					заключают гарантийный договор на работу. Если какие-то проблемы с гаджетами, то всем советую!
				</p>
				<div class="reviews__slide-info">
					<div class="reviews__slide-rating">
						<div class="reviews__slide-rating-title">Рейтинг:</div>
						<div class="reviews__slide-rating-number">4.6</div>
					</div>
					<div class="reviews__slide-reviewer">
						<div class="reviews__slide-reviewer-info">
							<div class="reviews__slide-reviewer-name">Виктор П.</div>
							<div class="reviews__slide-reviewer-problem">Чистка от пыли</div>
						</div>
						<picture>
							<source srcset="./assets/images/webp/reviewer_3.webp" type="image/webp">
							<img src="./assets/images/reviewer_3.jpg" alt="фото клиента" class="reviews__slide-reviewer-img">
						</picture>
					</div>
				</div>
			</div>
			<div class="reviews__slide">
				<p class="reviews__slide-text">
					Довольна. Добросовестный, вежливый мастер Сергей Титов. Ремонт произвели в моём присутствии с подробным
					пояснением о проблеме, что для меня очень важно! Теперь только к вам буду обращаться, спасибо!!!
				</p>
				<div class="reviews__slide-info">
					<div class="reviews__slide-rating">
						<div class="reviews__slide-rating-title">Рейтинг:</div>
						<div class="reviews__slide-rating-number">4.4</div>
					</div>
					<div class="reviews__slide-reviewer">
						<div class="reviews__slide-reviewer-info">
							<div class="reviews__slide-reviewer-name">Александра Р.</div>
							<div class="reviews__slide-reviewer-problem">Замена дисплея на iMac</div>
						</div>
						<picture>
							<source srcset="./assets/images/webp/reviewer_4.webp" type="image/webp">
							<img src="./assets/images/reviewer_4.jpg" alt="фото клиента" class="reviews__slide-reviewer-img">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="misc">
	<div class="container misc__wrap">
		<div class="faq">
			<h2 class="section__title faq__title">Ответы на частые вопросы</h2>
			<ul class="faq__list">
				<li class="faq__list-item">
					<div class="faq__list-item-title">
						Сколько длится ремонт?
						<svg class="faq__list-item-title-icon">
							<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
						</svg>
					</div>
					<p class="faq__list-item-text">
						Допустим ноутбук перегревался и мы заменили кулер. Проверка показала, что перегрев снизился, но не исчез.
						Это значит, что не справляются 4 возможные детали: кулер, процессор, видеочип, ОЗУ.
						Мастер разобрал ноутбук еще раз и выяснил, что на видеочипе высохла термопаста. После замены термопасты ноутбук
						окончательно перестал перегреваться. Отдел контроля качества справился с задачей.
					</p>
				</li>
				<li class="faq__list-item">
					<div class="faq__list-item-title">
						Как проверяете качество ремонта?
						<svg class="faq__list-item-title-icon">
							<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
						</svg>
					</div>
					<p class="faq__list-item-text">
						Допустим ноутбук перегревался и мы заменили кулер. Проверка показала, что перегрев снизился, но не исчез.
						Это значит, что не справляются 4 возможные детали: кулер, процессор, видеочип, ОЗУ.
						Мастер разобрал ноутбук еще раз и выяснил, что на видеочипе высохла термопаста. После замены термопасты ноутбук
						окончательно перестал перегреваться. Отдел контроля качества справился с задачей.
					</p>
				</li>
				<li class="faq__list-item">
					<div class="faq__list-item-title">
						Как проходит ремонт устройства в СЦ?
						<svg class="faq__list-item-title-icon">
							<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
						</svg>
					</div>
					<p class="faq__list-item-text">
						Допустим ноутбук перегревался и мы заменили кулер. Проверка показала, что перегрев снизился, но не исчез.
						Это значит, что не справляются 4 возможные детали: кулер, процессор, видеочип, ОЗУ.
						Мастер разобрал ноутбук еще раз и выяснил, что на видеочипе высохла термопаста. После замены термопасты ноутбук
						окончательно перестал перегреваться. Отдел контроля качества справился с задачей.
					</p>
				</li>
				<li class="faq__list-item">
					<div class="faq__list-item-title">
						Какие бренды ноутбуков вы ремонтируете?
						<svg class="faq__list-item-title-icon">
							<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
						</svg>
					</div>
					<p class="faq__list-item-text">
						Допустим ноутбук перегревался и мы заменили кулер. Проверка показала, что перегрев снизился, но не исчез.
						Это значит, что не справляются 4 возможные детали: кулер, процессор, видеочип, ОЗУ.
						Мастер разобрал ноутбук еще раз и выяснил, что на видеочипе высохла термопаста. После замены термопасты ноутбук
						окончательно перестал перегреваться. Отдел контроля качества справился с задачей.
					</p>
				</li>
			</ul>
		</div>

		<div class="gallery">
			<h2 class="section__title gallery__title">
				Галерея
			</h2>

			<div class="gallery__slider-wrap">
				<svg class="gallery__slider-close">
					<use xlink:href="./assets/stack/sprite.svg#close"></use>
				</svg>
				<div class="gallery__slider">
					<picture>
						<source srcset="./assets/images/webp/gallery_1.webp" type="image/webp">
						<img src="./assets/images/gallery_1.jpg" alt="Процесс работы" class="gallery__slide"></picture>
					<picture>
						<source srcset="./assets/images/webp/gallery_2.webp" type="image/webp">
						<img src="./assets/images/gallery_2.jpg" alt="Процесс работы" class="gallery__slide"></picture>
					<picture>
						<source srcset="./assets/images/webp/gallery_3.webp" type="image/webp">
						<img src="./assets/images/gallery_3.jpg" alt="Процесс работы" class="gallery__slide"></picture>
					<picture>
						<source srcset="./assets/images/webp/gallery_4.webp" type="image/webp">
						<img src="./assets/images/gallery_4.jpg" alt="Процесс работы" class="gallery__slide"></picture>
					<picture>
						<source srcset="./assets/images/webp/gallery_5.webp" type="image/webp">
						<img src="./assets/images/gallery_5.jpg" alt="Процесс работы" class="gallery__slide"></picture>
					<picture>
						<source srcset="./assets/images/webp/gallery_6.webp" type="image/webp">
						<img src="./assets/images/gallery_6.jpg" alt="Процесс работы" class="gallery__slide"></picture>
				</div>

			</div>

			<div class="gallery__images">
				<picture>
					<source srcset="./assets/images/webp/gallery_1.webp" type="image/webp">
					<img src="./assets/images/gallery_1.jpg" alt="Процесс работы" class="gallery__image" data-slide-ind="0"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery_2.webp" type="image/webp">
					<img src="./assets/images/gallery_2.jpg" alt="Процесс работы" class="gallery__image" data-slide-ind="1"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery_3.webp" type="image/webp">
					<img src="./assets/images/gallery_3.jpg" alt="Процесс работы" class="gallery__image" data-slide-ind="2"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery_4.webp" type="image/webp">
					<img src="./assets/images/gallery_4.jpg" alt="Процесс работы" class="gallery__image" data-slide-ind="3"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery_5.webp" type="image/webp">
					<img src="./assets/images/gallery_5.jpg" alt="Процесс работы" class="gallery__image" data-slide-ind="4"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery_6.webp" type="image/webp">
					<img src="./assets/images/gallery_6.jpg" alt="Процесс работы" class="gallery__image" data-slide-ind="5"></picture>
			</div>
		</div>
	</div>
</section>

<section class="questions">
	<div class="container questions__wrap">
		<h2 class="section__title questions__title">Остались вопросы?</h2>
		<div class="section__subtitle questions__subtitle">Оставьте свой номер телефона, мы свяжемся с вами через 2 минуты</div>
		<form action="" class="questions__form">
			<input type="text" name="user_phone" class="questions__form-input" placeholder="+7 (___) ___-__-__" required>
			<button type="submit" class="button questions__form-button">Перезвоните мне</button>
		</form>
		<div class="questions__form-footnote">Нажимая на кнопку "Перезвоните мне" вы соглашаетесь с политикой обработки
			<a href="politika.html" target="_blank" class="text_accent questions__form-link">персональных данных</a></div>
	</div>
</section>

<section id="contacts" class="contacts">
	<div class="container contacts__wrap">
		<div class="contacts__block">
			<div class="contacts__block-wrap">
				<h3 class="contacts__block-title">Наши контакты:</h3>
				<div class="contacts__block-item">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#placeholder"></use>
					</svg>
					<div class="contacts__block-item-text">
						190015, Санкт-Петербург, Московский пр-т д.7
					</div>
				</div>
				<div class="contacts__block-item">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#phone-call"></use>
					</svg>
					<a href="tel:<?= $phone_link ?>" class="contacts__block-item-link"><?= $phone_format ?></a>
				</div>
			</div>


			<div class="contacts__block-wrap">
				<h3 class="contacts__block-title">Мы работаем:</h3>
				<div class="contacts__block-item">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#clock"></use>
					</svg>
					<div class="contacts__block-item-text">
						с 8:00 до 23:00 <span class="line-break">Без выходных</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="map" class="contacts__map"></div>
</section>

<footer class="footer">
	<div class="container footer__wrap">
		<div class="footer__col">
			<img src="./assets/images/svg/logo.svg" alt="logo" class="footer__logo">
			<div class="footer__billings">
				<img src="./assets/images/svg/visa.svg" alt="visa" class="footer__billing">
				<img src="./assets/images/svg/mastercard.svg" alt="mastercard" class="footer__billing">
				<img src="./assets/images/sber.png" alt="sber" class="footer__billing">
				<img src="./assets/images/rub.png" alt="cash" class="footer__billing">
			</div>
		</div>
		<nav class="footer__col footer__nav">
			<a href="#prices" class="footer__nav-link">Цены</a>
			<a href="#advantages" class="footer__nav-link">О нас</a>
			<a href="#reviews" class="footer__nav-link">Отзывы</a>
			<a href="#contacts" class="footer__nav-link">Контакты</a>
		</nav>
		<div class="footer__col footer__contacts">
			<a href="tel:<?= $phone_link ?>" class="footer__phone"><?= $phone_format ?></a>
			<div class="footer__worktime">C 8:00 до 23:00 без выходных</div>
		</div>
	</div>
	<div class="container footer__footnote">
		Сервисный центр <?= $company_name ?>. Acer, Asus, HP, Apple, Lenovo, MSI, Dell, Xiaomi, Sony, Samsung, LG, Honor, Huawei, Prettec,
		Irbis и их логотипы являются зарегистрированными товарными знаками в США и других странах. Информация опубликованная на сайте не
		является публичной офертой, определяемой положениями Статьи 437 ГК РФ. Цены указаны за услугу, запчасти в эту стоимость не входят.
	</div>
</footer>

<div class="popup popup-order">
	<form action="" method="POST" class="popup-form popup-form_order">
		<h2 class="popup-form__title">Заказать ремонт <span class="popup-form__title-device">ноутбука</span> со <span class="text_accent">cкидкой 20%</span></h2>
		<div class="popup-form__subtitle">Оставьте свой номер телефона <span class="line-break">Мы свяжемся с вами через 2 минуты</span>
		</div>
		<svg class="popup-form__close">
			<use xlink:href="./assets/stack/sprite.svg#close"></use>
		</svg>
		<div class="popup-form__row">
			<div class="popup-form__col">
				<div class="popup-form__input-wrap">
					<label for="" class="popup-form__input-label">Ваше имя:</label>
					<input type="text" name="user_name" class="popup-form__input" placeholder="Ваше имя">
				</div>
				<div class="popup-form__input-wrap">
					<label for="" class="popup-form__input-label">Ваш телефон</label>
					<input type="text" name="user_phone" class="popup-form__input" placeholder="+7 (___) ___-__-__" required>
				</div>
				<button type="submit" class="button button_callback popup-form__button">Оставить заявку</button>
				<div class="popup-form__footnote">
					Нажимая на кнопку "Оставить заявку" я даю согласие на
					<a href="politika.html" target="_blank" class="popup-form__footnote-link">обработку персональных данных</a>
				</div>
			</div>
			<div class="popup-form__col">
				<div class="popup-form__phone-wrap">
					<div class="popup-form__phone-label">Или позвоните нам:</div>
					<a href="tel: <?= $phone_link ?>" class="popup-form__phone"><?= $phone_format ?></a>
				</div>
				<picture>
					<source srcset="./assets/images/webp/asus-laptop.webp" type="image/webp">
					<img src="./assets/images/asus-laptop.jpg" alt="Заказать ремонт" class="popup-form__img">
				</picture>
			</div>
		</div>
	</form>
	<div class="popup__bg"></div>
</div>

<div class="popup popup-discount">
	<form action="" method="POST" class="popup-form popup-form_order">
		<h2 class="popup-form__title">Получить <span class="text_accent">cкидку 20%</span> на первый ремонт</h2>
		<div class="popup-form__subtitle">Оставьте свой номер телефона <span class="line-break">Мы свяжемся с вами через 2 минуты</span>
		</div>
		<svg class="popup-form__close">
			<use xlink:href="./assets/stack/sprite.svg#close"></use>
		</svg>
		<div class="popup-form__row">
			<div class="popup-form__col">
				<div class="popup-form__input-wrap">
					<label for="" class="popup-form__input-label">Ваше имя:</label>
					<input type="text" name="user_name" class="popup-form__input" placeholder="Ваше имя">
				</div>
				<div class="popup-form__input-wrap">
					<label for="" class="popup-form__input-label">Ваш телефон</label>
					<input type="text" name="user_phone" class="popup-form__input" placeholder="+7 (___) ___-__-__" required>
				</div>
				<button type="submit" class="button button_callback popup-form__button">Оставить заявку</button>
				<div class="popup-form__footnote">
					Нажимая на кнопку "Оставить заявку" я даю согласие на
					<a href="politika.html" target="_blank" class="popup-form__footnote-link">обработку персональных данных</a>
				</div>
			</div>
			<div class="popup-form__col">
				<div class="popup-form__phone-wrap">
					<div class="popup-form__phone-label">Или позвоните нам:</div>
					<a href="tel: <?= $phone_link ?>" class="popup-form__phone"><?= $phone_format ?></a>
				</div>
				<picture>
					<source srcset="./assets/images/webp/asus-laptop.webp" type="image/webp">
					<img src="./assets/images/asus-laptop.jpg" alt="Заказать ремонт" class="popup-form__img">
				</picture>
			</div>
		</div>
	</form>
	<div class="popup__bg"></div>
</div>

<div class="popup popup-thanks">
	<div class="popup-form popup-form_thanks">
		<svg class="popup-form__close">
			<use xlink:href="./assets/stack/sprite.svg#close"></use>
		</svg>
		<h2 class="popup-form__title popup-form__title_thanks">Спасибо!</h2>
		<div class="popup-form__subtitle">Мы свяжемся с вами через 2 минуты</div>
		<button class="button button_callback popup-form__button popup-form__button_thanks">Закрыть</button>
	</div>
	<div class="popup__bg"></div>
</div>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"
		integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous"
		referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
		integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"
		referrerpolicy="no-referrer"></script>
<script src="./assets/js/script.js"></script>
<script>
    ymaps.ready(init);

    function init() {
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [59.952730, 30.305410],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 10
        });

        // Создаем многоугольник, используя вспомогательный класс Polygon.
        var myPolygon = new ymaps.Polygon([
            // Указываем координаты вершин многоугольника.
            // Координаты вершин внешнего контура.
            [
                [60.014230, 29.719458],

                [60.019462, 29.731581],
            	[60.021412, 29.777394],
            	[60.038908, 29.981690],
          		[60.058899, 30.143168],
				[60.063141, 30.161210],
           		[60.079941, 30.190036],
           		[60.083940, 30.211899],
            	[60.086185, 30.229413],
				[60.094913, 30.252472],
            	[60.099277, 30.276905],
            	[60.093453, 30.359157],
            	[60.085557, 30.377068],
				[60.060120, 30.388632],
            	[60.054041, 30.399599],
				[60.044086, 30.433701],
            	[60.019732, 30.456316],
				[60.012286, 30.472262],
            	[59.990497, 30.482560],
            	[59.984083, 30.496820],
            	[59.980824, 30.519133],
            	[59.970582, 30.549419],
            	[59.960150, 30.553536],
           		[59.919811, 30.526517],
            	[59.887776, 30.524808],
            	[59.870427, 30.531515],
            	[59.864998, 30.527082],
            	[59.854307, 30.503237],
            	[59.853142, 30.479460],
            	[59.847328, 30.460049],
            	[59.826761, 30.436359],
            	[59.826761, 30.436359],
            	[59.810296, 30.328055],
            	[59.834848, 30.272369],
            	[59.809960, 30.184816],
            	[59.800801, 30.168586],
            	[59.800689, 30.150496],
            	[59.813667, 30.112565],
				[59.816688, 30.012495],
            	[59.822003, 29.984765],
            	[59.821632, 29.961595],
            	[59.812371, 29.899640],
            	[59.815206, 29.847692],
            	[59.830591, 29.820214],
            	[59.860416, 29.800278],
            	[59.868349, 29.776269],
            	[59.870132, 29.745325],
            	[59.885111, 29.682254],
            	[59.897863, 29.662322],
            	[59.912875, 29.659408],
            	[59.981571, 29.689721],
            	[60.000950, 29.702796],

				[60.014230, 29.719458]
            ]
        ], {
            // Описываем свойства геообъекта.
            // Содержимое балуна.
        }, {
            // Задаем опции геообъекта.
            // Цвет заливки.
            fillColor: '#B3FEBFA0',
            // Ширина обводки.
            strokeWidth: 1,
            strokeColor: '#26CF41FF'
        });

        // Добавляем многоугольник на карту.
        myMap.geoObjects.add(myPolygon);

        const glyphServicesParams = {
            iconLayout: 'default#image',
            iconImageHref: './assets/images/svg/map-placeholder.svg',
            iconImageSize: [35, 35]
        }

        // const glyphEngineersParams = {
        //     iconLayout: 'default#image',
        //     // iconImageHref: './img/placeholder-engineer.png',
        //     iconImageHref: './img/ifixit-engineer-placeholder.svg',
        //     iconImageSize: [40, 40]
        // }

        let servicePlacemarks = {
            sadovaya: new ymaps.Placemark([59.925331, 30.318518], {
                balloonContentHeader: 'Главный офис <?=$company_name?> на м. Садовая',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            gorkovskaya: new ymaps.Placemark([59.957081, 30.319257], {
                balloonContentHeader: '<?=$company_name?> на м. Горьковская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            petrogradskaya: new ymaps.Placemark([59.965483, 30.313301], {
                balloonContentHeader: '<?=$company_name?> на м. Петроградская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            gostinyDvor: new ymaps.Placemark([59.935262, 30.335110], {
                balloonContentHeader: '<?=$company_name?> на м. Гостиный двор',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            vosstaniya: new ymaps.Placemark([59.927122, 30.359359], {
                balloonContentHeader: '<?=$company_name?> на м. Площадь Восстания',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            vasileostrovskaya: new ymaps.Placemark([59.940976, 30.280436], {
                balloonContentHeader: '<?=$company_name?> на м. Василеостровская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            technolozhka: new ymaps.Placemark([59.915926, 30.312586], {
                balloonContentHeader: '<?=$company_name?> на м. Технологический Институт',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            narvskaya: new ymaps.Placemark([59.899923, 30.273741], {
                balloonContentHeader: '<?=$company_name?> на м. Нарвская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            mezhdunarodnaya: new ymaps.Placemark([59.875975, 30.376100], {
                balloonContentHeader: '<?=$company_name?> на м. Международная',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            moskovskaya: new ymaps.Placemark([59.859279, 30.320540], {
                balloonContentHeader: '<?=$company_name?> на м. Московская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            novocherkasskaya: new ymaps.Placemark([59.930182, 30.416796], {
                balloonContentHeader: '<?=$company_name?> на м. Новочеркасская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            bolshevikov: new ymaps.Placemark([59.917443, 30.473776], {
                balloonContentHeader: '<?=$company_name?> на м. Проспект Большевиков',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            muzhestva: new ymaps.Placemark([59.999980, 30.352904], {
                balloonContentHeader: '<?=$company_name?> на м. Площадь Мужества',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            lenina: new ymaps.Placemark([59.960110, 30.345721], {
                balloonContentHeader: '<?=$company_name?> на м. Площадь Ленина',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            energetikov: new ymaps.Placemark([59.959632, 30.436838], {
                balloonContentHeader: '<?=$company_name?> на пр. Энергетиков',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            pionerskaya: new ymaps.Placemark([60.001014, 30.299878], {
                balloonContentHeader: '<?=$company_name?> на м. Пионерская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            komendantskiy: new ymaps.Placemark([60.014319, 30.252404], {
                balloonContentHeader: '<?=$company_name?> на м. Комендантский проспект',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            ozerki: new ymaps.Placemark([60.039802, 30.324872], {
                balloonContentHeader: '<?=$company_name?> на м. Озерки',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            avtovo: new ymaps.Placemark([59.866627, 30.264984], {
                balloonContentHeader: '<?=$company_name?> на м. Автово',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            zvezdnaya: new ymaps.Placemark([59.832183, 30.363087], {
                balloonContentHeader: '<?=$company_name?> на м. Звёздная',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            proletarskaya: new ymaps.Placemark([59.869139, 30.460047], {
                balloonContentHeader: '<?=$company_name?> на м. Пролетарская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            begovaya: new ymaps.Placemark([59.989656, 30.205812], {
                balloonContentHeader: '<?=$company_name?> на м. Беговая',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            primorskaya: new ymaps.Placemark([59.947552, 30.239507], {
                balloonContentHeader: '<?=$company_name?> на м. Приморская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            dibenko: new ymaps.Placemark([59.900370, 30.486519], {
                balloonContentHeader: '<?=$company_name?> на м. Дыбенко',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            elizarovskaya: new ymaps.Placemark([59.889285, 30.426827], {
                balloonContentHeader: '<?=$company_name?> на м. Елизаровская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            grazhdanka: new ymaps.Placemark([60.038807, 30.402445], {
                balloonContentHeader: '<?=$company_name?> на м. Гражданский проспект',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            kondratievskiy: new ymaps.Placemark([59.973282, 30.389281], {
                balloonContentHeader: '<?=$company_name?> на Кондратьевском пр.',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            moskVorota: new ymaps.Placemark([59.888972, 30.327267], {
                balloonContentHeader: '<?=$company_name?> на м. Московские ворота',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            parnas: new ymaps.Placemark([60.058574, 30.337453], {
                balloonContentHeader: '<?=$company_name?> на м. Парнас',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            obvodnyKanal: new ymaps.Placemark([59.908715, 30.346258], {
                balloonContentHeader: '<?=$company_name?> на м. Обводный канал',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            krestOstrov: new ymaps.Placemark([59.972065, 30.273265], {
                balloonContentHeader: '<?=$company_name?> на м. Крестовский остров',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            akademicheskaya: new ymaps.Placemark([60.010809, 30.398610], {
                balloonContentHeader: '<?=$company_name?> на м. Академическая',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            dunayskaya: new ymaps.Placemark([59.846634, 30.406242], {
                balloonContentHeader: '<?=$company_name?> на м. Дунайская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            frunzenskaya: new ymaps.Placemark([59.904083, 30.323250], {
                balloonContentHeader: '<?=$company_name?> на м. Фрунзенская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            chkalovskaya: new ymaps.Placemark([59.959321, 30.290739], {
                balloonContentHeader: '<?=$company_name?> на м. Чкаловская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            udelnaya: new ymaps.Placemark([60.014788, 30.323675], {
                balloonContentHeader: '<?=$company_name?> на м. Удельная',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            lesnaya: new ymaps.Placemark([59.988010, 30.353747], {
                balloonContentHeader: '<?=$company_name?> на м. Лесная',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            petergof: new ymaps.Placemark([59.848085, 30.148520], {
                balloonContentHeader: '<?=$company_name?> на Петергофском ш.',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
        };

        myMap.geoObjects.add(servicePlacemarks['sadovaya']);
        myMap.geoObjects.add(servicePlacemarks['gorkovskaya']);
        myMap.geoObjects.add(servicePlacemarks['petrogradskaya']);
        myMap.geoObjects.add(servicePlacemarks['gostinyDvor']);
        myMap.geoObjects.add(servicePlacemarks['vosstaniya']);
        myMap.geoObjects.add(servicePlacemarks['vasileostrovskaya']);
        myMap.geoObjects.add(servicePlacemarks['technolozhka']);
        myMap.geoObjects.add(servicePlacemarks['narvskaya']);
        myMap.geoObjects.add(servicePlacemarks['mezhdunarodnaya']);
        myMap.geoObjects.add(servicePlacemarks['moskovskaya']);
        myMap.geoObjects.add(servicePlacemarks['novocherkasskaya']);
        myMap.geoObjects.add(servicePlacemarks['bolshevikov']);
        myMap.geoObjects.add(servicePlacemarks['muzhestva']);
        myMap.geoObjects.add(servicePlacemarks['lenina']);
        myMap.geoObjects.add(servicePlacemarks['energetikov']);
        myMap.geoObjects.add(servicePlacemarks['pionerskaya']);
        myMap.geoObjects.add(servicePlacemarks['komendantskiy']);
        myMap.geoObjects.add(servicePlacemarks['ozerki']);
        myMap.geoObjects.add(servicePlacemarks['avtovo']);
        myMap.geoObjects.add(servicePlacemarks['zvezdnaya']);
        myMap.geoObjects.add(servicePlacemarks['proletarskaya']);
        myMap.geoObjects.add(servicePlacemarks['begovaya']);
        myMap.geoObjects.add(servicePlacemarks['primorskaya']);
        myMap.geoObjects.add(servicePlacemarks['dibenko']);
        myMap.geoObjects.add(servicePlacemarks['elizarovskaya']);
        myMap.geoObjects.add(servicePlacemarks['grazhdanka']);
        myMap.geoObjects.add(servicePlacemarks['kondratievskiy']);
        myMap.geoObjects.add(servicePlacemarks['moskVorota']);
        myMap.geoObjects.add(servicePlacemarks['parnas']);
        myMap.geoObjects.add(servicePlacemarks['obvodnyKanal']);
        myMap.geoObjects.add(servicePlacemarks['krestOstrov']);
        myMap.geoObjects.add(servicePlacemarks['akademicheskaya']);
        myMap.geoObjects.add(servicePlacemarks['dunayskaya']);
        myMap.geoObjects.add(servicePlacemarks['frunzenskaya']);
        myMap.geoObjects.add(servicePlacemarks['chkalovskaya']);
        myMap.geoObjects.add(servicePlacemarks['udelnaya']);
        myMap.geoObjects.add(servicePlacemarks['lesnaya']);
        myMap.geoObjects.add(servicePlacemarks['petergof']);

        myMap.events.add('click', () => {
            for (let placemark in servicePlacemarks) {
                servicePlacemarks[placemark].balloon.close();
            }
            for (let placemark in engineerPlacemarks) {
                engineerPlacemarks[placemark].balloon.close();
            }
        });

        if (document.documentElement.clientWidth < 992) {
            myMap.behaviors.disable(['drag']);
        }
    }
</script>
</body>
</html>