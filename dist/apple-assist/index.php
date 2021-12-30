<?php
require_once(__DIR__ . '/assets/configs/config.php');
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= './assets/css/bootstrap-grid.min.css' ?>">
	<link rel="stylesheet" href="<?= './assets/css/reset.css' ?>">
	<link rel="stylesheet" href="<?= './assets/css/style.css?' . time() ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
		  integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
		  integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?=$company_name?> | Ремонт iPhone в СПб</title>

	<!--	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">-->
	<!--	</script>-->
</head>
<body>

<div class="overlay"></div>

<div class="burger-menu">
	<div class="burger-btn">
		<div class="burger-btn-center"></div>
		<div class="burger-btn__bg"></div>
	</div>

	<nav class="burger-menu__list">
		<a href="#features" class="burger-menu__list-link">Преимущества</a>
		<a href="#prices" class="burger-menu__list-link">Цены</a>
		<a href="#about" class="burger-menu__list-link">О нас</a>
		<a href="#reviews" class="burger-menu__list-link">Отзывы</a>
		<a href="#contacts" class="burger-menu__list-link">Контакты</a>
	</nav>
</div>

<section class="promo">
	<header class="header">
		<div class="container header__wrap">
			<svg class="logo header-logo">
				<use xlink:href="<?= './assets/stack/sprite.svg#logo' ?>"></use>
			</svg>
			<nav class="header__menu">
				<a href="#about" class="header__menu-item">О нас</a>
				<a href="#prices" class="header__menu-item">Услуги</a>
				<a href="#contacts" class="header__menu-item">Контакты</a>
			</nav>
			<div class="header__contacts">
				<button class="callback-button header__contacts-btn open-popup-call-master">Нужна консультация</button>
				<div class="header__contacts-col">
					<a href="tel: <?= $phone_link ?>" class="header__contacts-phone"><?= $phone_format ?></a>
					<div class="header__contacts-worktime">8:00 — 23:00 Без выходных</div>
				</div>
				<div class="burger-btn">
					<div class="burger-btn-center"></div>
					<div class="burger-btn__bg"></div>
				</div>
			</div>
		</div>
	</header>

	<div class="container promo__wrap">
		<div class="promo__collage promo__collage_left">
			<div class="promo__collage_left-circle"></div>
			<div class="promo__collage_left-pattern">
				<div class="promo__collage_left-pattern-line"></div>
				<div class="promo__collage_left-pattern-line"></div>
				<div class="promo__collage_left-pattern-line"></div>
				<div class="promo__collage_left-pattern-line"></div>
				<div class="promo__collage_left-pattern-line"></div>
				<div class="promo__collage_left-pattern-line"></div>
			</div>
		</div>
		<div class="promo__collage promo__collage_right">
			<div class="promo__collage_right-square">
			</div>
				<div class="promo__collage_right-circle"></div>
			<div class="promo__collage_right-circle promo__collage_right-smallcircle"></div>
			<div class="promo__collage_right-fatline"></div>
			<div class="promo__collage_right-thinline"></div>
			<div class="promo__collage_right-dot"></div>
		</div>
		<div class="promo__col">
			<h1 class="promo__title">
				Ремонт <span class="text_accent">iPhone</span>
				<span class="line-break"></span>
				в Санкт-Петербурге
			</h1>
			<ul class="promo__list">
				<li class="promo__list-item">
					<svg class="promo__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					Бесплатная доставка
				</li>
				<li class="promo__list-item">
					<svg class="promo__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					Пожизненная гарантия
				</li>
				<li class="promo__list-item">
					<svg class="promo__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					Оригинальные запчасти
				</li>
			</ul>

			<button class="callback-button promo__button open-popup-call-master">Вызвать инженера</button>
		</div>


		<picture>
			<source srcset="./assets/images/webp/promo-man.webp" type="image/webp">
			<img src="./assets/images/promo-man.png" alt="Парень с айфоном" class="promo__man">
		</picture>
	</div>
</section>

<section id="features" class="features">
	<div class="container features__wrap">
		<div class="features__col">
			<h2 class="section__title section__title_tail features__title">
				Почему нас выбирают?
				<svg class="features__title-icon">
					<use xlink:href="./assets/stack/sprite.svg#cup"></use>
				</svg>
			</h2>

			<ul class="features__list">
				<li class="features__list-item">
					<svg class="features__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#delivery"></use>
					</svg>
					<div class="features__list-item-col">
						<h3 class="features__list-item-title">Бесплатный выезд мастера</h3>
						<div class="features__list-item-text">
							Наш сотрудник в течение часа со всеми необходимыми документами выедет на указанный адрес.
						</div>
					</div>
				</li>
				<li class="features__list-item">
					<svg class="features__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#warehouse"></use>
					</svg>
					<div class="features__list-item-col">
						<h3 class="features__list-item-title">Оригинальные запчасти</h3>
						<div class="features__list-item-text">
							Мы устанавливаем только оригинальные компоненты, которые поступают с завода-изготовителя напрямую по минимальной
							цене
						</div>
					</div>
				</li>
				<li class="features__list-item">
					<svg class="features__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#24-hours"></use>
					</svg>
					<div class="features__list-item-col">
						<h3 class="features__list-item-title">Работаем без выходных</h3>
						<div class="features__list-item-text">
							Мастера сервисного центра <?= $company_name ?> работают 7 дней в неделю, чтобы оперативно оказывать Вам помощь с
							Вашим iPhone
						</div>
					</div>
				</li>
				<li class="features__list-item">
					<svg class="features__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#guarantee"></use>
					</svg>
					<div class="features__list-item-col">
						<h3 class="features__list-item-title">Пожизненная гарантия</h3>
						<div class="features__list-item-text">
							Мы полностью уверены в качестве своей работы, и поэтому даем пожизненную гарантию на все виды работ.
						</div>
					</div>
				</li>
			</ul>

			<form action="./assets/configs/mail.php" method="POST" class="form features__form">
				<div class="form__inputs features__form-inputs">
					<input type="text" class="form__input features__form-input" name="user_phone" placeholder="+7 (999) 999-99-99" required>
					<button class="callback-button form__button features__form-button">Вызвать мастера</button>
				</div>
				<div class="form__footnote features__form-footnote">
					Нажимая на кнопку “Вызвать мастера” я соглашаюсь с <a href="./politika.html" target="_blank"
																		  class="form__footnote-link">политикой обработки
						персональных данных</a>
				</div>
			</form>
		</div>

		<div class="features__col features__collage-wrap">
			<picture><img src="./assets/images/blob.png" alt="Ремонт за 15 минут!" class="features__collage-blob"></picture>
			<picture>
				<img src="./assets/images/features-iphone.png" alt="iPhone" class="features__iphone">
				<source srcset="./assets/images/webp/features-iphone.webp" type="image/webp">
			</picture>
			<picture>
				<source srcset="./assets/images/webp/features-collage.webp" type="image/webp">
				<img src="./assets/images/features-collage.png" alt="pattern" class="features__collage"></picture>
			<!--			<svg class="features__collage">-->
			<!--				<use xlink:href="./assets/stack/sprite.svg#features-collage"></use>-->
			<!--			</svg>-->
		</div>
	</div>
</section>

<section id="prices" class="prices">
	<div class="prices__collage prices__collage_left">
		<div class="prices__collage_left-rect"></div>
	</div>
	<div class="prices__collage prices__collage_right">
		<div class="prices__collage_right-circle"></div>
	</div>
	<div class="container prices__wrap">
		<div class="prices__collage prices__collage_right"></div>
		<h2 class="section__title prices__title">Выберите ваше устройство</h2>

		<!--<div class="prices__devices">
			<div class="prices__device" data-device="iphone">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#iphone-icon"></use>
				</svg>
				<div class="prices__device-name">iPhone</div>
			</div>

			<div class="prices__device prices__device_active" data-device="ipad">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#ipad-icon"></use>
				</svg>
				<div class="prices__device-name">iPad</div>
			</div>

			<div class="prices__device" data-device="macbook">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#macbook-icon"></use>
				</svg>
				<div class="prices__device-name">MacBook</div>
			</div>

			<div class="prices__device" data-device="imac">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#imac-icon"></use>
				</svg>
				<div class="prices__device-name">iMac</div>
			</div>

			<div class="prices__device" data-device="watch">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#apple-watch-icon"></use>
				</svg>
				<div class="prices__device-name">Watch</div>
			</div>
		</div>-->

		<div class="prices__models">
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
		</div>

		<button class="button prices__models-button">Показать все</button>

		<div id="pricelist" class="prices__pricelist-wrap">
			<table class="prices__pricelist" cellpadding="15">
				<thead class="prices__pricelist-headings">
				<th>Услуга</th>
				<th>Сроки</th>
				<th>Цена</th>
				<th></th>
				</thead>
			</table>
			<div class="prices__pricelist-scroll">
				<table class="prices__pricelist" cellpadding="10">
				</table>
			</div>
			<span class="prices__pricelist-unroll">
				<div class="prices__pricelist-unroll-text">Развернуть прайс-лист</div>
				<div class="prices__pricelist-unroll-text prices__pricelist-unroll-text_excerpt">Свернуть прайс-лист</div>
				<svg class="prices__pricelist-unroll-icon">
					<use xlink:href="./assets/stack/sprite.svg#pricelist-arrow"></use>
				</svg>
			</span>
		</div>
	</div>
</section>

<section class="gift">
	<div class="container gift__wrap">
		<div class="gift__border gift__border_top"></div>
		<div class="gift__border gift__border_top-right"></div>
		<div class="gift__border gift__border_bottom"></div>
		<div class="gift__border gift__border_bottom-left"></div>

		<h2 class="section__title_alt gift__title">
			Дарим <span class="text_accent">скидку</span>
			<span class="line-break"></span>
			на <span class="text_underline">первый</span> ремонт
		</h2>
		<div class="gift__subtitle">
			Оставьте свой номер телефона
			<span class="line-break"></span>
			и наш менеджер свяжется с вами через 2 минуты
		</div>

		<form action="./assets/configs/mail.php" method="POST" class="form gift__form">
			<div class="form__inputs gift__form-inputs">
				<input type="text" class="form__input gift__form-input" name="user_phone" placeholder="+7 (999) 999-99-99" required>
				<button class="callback-button form__button gift__form-button">Вызвать мастера</button>
			</div>
		</form>

		<div class="gift__img-wrap">
			<picture>
				<source srcset="./assets/images/webp/gift.webp" type="image/webp">
				<img src="./assets/images/gift.png" alt="подарок" class="gift__img">
			</picture>
		</div>
	</div>
</section>

<section class="common">
	<div class="container common__wrap">
		<div class="common__bg"></div>
		<div class="common__col common__filter">
			<h2 class="section__title section__title_tail common__title">Типовые неисправности iPhone</h2>
			<div class="common__select-wrap">
				<svg class="common__select-arrow">
					<use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
				</svg>
				<select name="common_problems_list" class="common__select">
					<option value="1" selected>Замена аккумулятора</option>
					<option value="2">Замена стекла</option>
					<option value="3">Не включается</option>
					<option value="4">Ремонт после воды</option>
					<option value="5">Замена дисплея</option>
					<option value="6">Замена корпуса</option>
				</select>
			</div>
			<div class="common__blocks">
				<div class="common__block common__block_active" data-problem-btn="1">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#battery"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Аккумулятор</h4>
						Замена аккумулятора
					</div>
				</div>
				<div class="common__block" data-problem-btn="2">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#broken-screen"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Экран</h4>
						Замена стекла
					</div>
				</div>
				<div class="common__block" data-problem-btn="3">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#power-button"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Питание</h4>
						Не включается
					</div>
				</div>
				<div class="common__block" data-problem-btn="4">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#drop"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Залитие</h4>
						Ремонт после воды
					</div>
				</div>
				<div class="common__block" data-problem-btn="5">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#broken-screen"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Экран</h4>
						Замена дисплея
					</div>
				</div>
				<div class="common__block" data-problem-btn="6">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#broken-screen"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Корпус</h4>
						Замена корпуса
					</div>
				</div>
			</div>
		</div>
		<div class="common__col common__info">
			<div class="common__info-slider">
				<div class="common__info-slide" data-problem-info="Замена аккумулятора">
					<p class="common__info-text">
						Ваш iPhone не держит заряд как прежде и вы вынуждены заряжать его по несколько раз в день? Вероятно, ресурс вашей
						аккумуляторной батареи подошел к концу. Срок службы аккумуляторы современных
						телефонов, в среднем, составляет 2 года. По его истечении, а в случае активного использования гаджета
						и раньше, должна быть произведена его замена на новый.
					</p>

					<div class="common__info-row">
						<div class="common__info-price">
							<span class="text_accent text_bold">790 руб.</span>
						</div>
						<button class="callback-button common__info-button open-popup-call-master">Вызвать мастера</button>
					</div>
				</div>
				<div class="common__info-slide" data-problem-info="Замена стекла">
					<p class="common__info-text">
						Довольно распространенной поломкой iPhone является повреждение стекла. Причиной обычно является падение или удар.
						Что бы ни послужило причиной поломки, надо как можно раньше обратиться в сервисный
						центр.
						<br>
						<br>
						Мастера сервисного центра <?= $company_name ?> произведут профессиональную замену дисплея вашего iPhone в кратчайшие
						сроки с пожизненной гарантией
					</p>

					<div class="common__info-row">
						<div class="common__info-price">
							<span class="text_accent text_bold">790 руб.</span>
						</div>
						<button class="callback-button common__info-button open-popup-call-master">Вызвать мастера</button>
					</div>
				</div>
				<div class="common__info-slide" data-problem-info="Не включается">
					<p class="common__info-text">
						Если iPhone выключился и не реагирует на нажатие кнопки включения, перед обращением в сервисный центр проверьте
						заряд аккумулятора. Если вы уверены, что батарея заряжена, но iPhone не включается, выполните принудительную
						перезагрузку.
						<br>
						<br>
						Если iPhone не удалось включить, вызовите сервисного инженера <?= $company_name ?>. Он проведет диагностику,
						определим точную причину поломки и при необходимости быстро починит ваш iPhone.
					</p>

					<div class="common__info-row">
						<div class="common__info-price">
							<span class="text_accent text_bold">790 руб.</span>
						</div>
						<button class="callback-button common__info-button open-popup-call-master">Вызвать мастера</button>
					</div>
				</div>
				<div class="common__info-slide" data-problem-info="Ремонт после залития">
					<p class="common__info-text">
						Случаются ситуации, когда в iPhone попадает вода. Возможно он упал в снег или ванную, был постиран вместе с вещами,
						намок под дождем, был взят мокрыми руками или залит напитком. Любая жидкость, попавшая внутрь аппарата, несет
						существенную угрозу его дальнейшей работоспособности. В любом случае необходимо незамедлительно обратиться в
						сервисный центр дабы предотвратить непоправимый ущерб вашему гаджету.
						<br>
						<br>
						Мастера сервисного центра <?= $company_name ?> произведут профессиональный ремонт вашего iPhone в кратчайшие сроки с
						пожизненной гарантией
					</p>

					<div class="common__info-row">
						<div class="common__info-price">
							<span class="text_accent text_bold">790 руб.</span>
						</div>
						<button class="callback-button common__info-button open-popup-call-master">Вызвать мастера</button>
					</div>
				</div>
				<div class="common__info-slide" data-problem-info="Замена дисплея">
					<p class="common__info-text">
						Довольно распространенной поломкой iPhone является повреждение дисплея. Причиной обычно является падение, удар,
						попадание внутрь изделия влаги. Что бы ни послужило причиной поломки, надо как можно раньше обратиться в сервисный
						центр.
						<br>
						<br>
						Мастера сервисного центра <?= $company_name ?> произведут профессиональную замену дисплея вашего iPhone в кратчайшие
						сроки с
						пожизненной гарантией
					</p>

					<div class="common__info-row">
						<div class="common__info-price">
							<span class="text_accent text_bold">790 руб.</span>
						</div>
						<button class="callback-button common__info-button open-popup-call-master">Вызвать мастера</button>
					</div>
				</div>
				<div class="common__info-slide" data-problem-info="Замена корпуса">
					<p class="common__info-text">
						На корпусе iPhone вмятины и сколы?
						<br>
						Каждый день мы носим iPhone в кармане, сумке с ключами, в следствии чего случаются неожиданные удары по корпусу
						айфона — все эти события оставляют не только царапины, но и повреждения корпуса, вмятины и сколы.
						<br>
						<br>
						Мастера сервисного центра <?= $company_name ?> произведут профессиональную замену корпуса вашего iPhone в кратчайшие
						сроки с
						пожизненной гарантией
					</p>

					<div class="common__info-row">
						<div class="common__info-price">
							<span class="text_accent text_bold">790 руб.</span>
						</div>
						<button class="callback-button common__info-button open-popup-call-master">Вызвать мастера</button>
					</div>
				</div>
			</div>
		</div>

		<picture>
			<source srcset="./assets/images/webp/iphone_front.webp" type="image/webp">
			<img src="./assets/images/iphone_front.png" alt="iPhone" class="common__img">
		</picture>
	</div>
</section>

<section id="about" class="about-us">
	<div class="container about-us__wrap">
		<div class="about-us__col">
			<picture>
				<source srcset="./assets/images/webp/about-us-man.webp" type="image/webp">
				<img class="about-us__img" src="./assets/images/about-us-man.png" alt="Руководитель сервисного центра">
			</picture>
			<div class="about-us__blob">
				<h4 class="about-us__blob-title">Евгений Пригожин</h4>
				<div class="about-us__blob-subtitle">Основатель <?= $company_name ?></div>
				<div class="about-us__blob-text">
					Принцип работы <?= $company_name ?> — фиксированная цена и честный расчёт.
				</div>
			</div>
		</div>
		<div class="about-us__col about-us__info">
			<h2 class="section__title_alt about-us__title">
				Знаем <span class="text_accent text_bold">всё</span>
				<span class="line-break"></span>
				о ремонте <span class="text_accent text_bold">iPhone</span>
			</h2>
			<p class="about-us__text">
				Принимаем iPhone в любом виде: залитые, с трещинами на корпусе или разбитым экраном.
				<br>
				<br>
				Устраняем любые механические поломки: от залипшей кнопки до разбитого дисплея.
				<br>
				<br>
				Ликвидируем программные неполадки.
				<br>
				<br>
				Бесплатно проконсультируем, если iPhone у вас недавно.
				<br>
				<br>
				Работаем 7 дней в неделю, без праздников и выходных.
			</p>
		</div>
	</div>
</section>

<section id="reviews" class="reviews">
	<div class="reviews__bg"></div>

	<div class="container reviews__wrap">
		<div class="reviews__collage reviews__collage_left">
			<svg class="reviews__collage_left-quote">
				<use xlink:href="./assets/stack/sprite.svg#quote"></use>
			</svg>
		</div>

		<div class="reviews__collage reviews__collage_right">
			<svg class="reviews__collage_right-quote">
				<use xlink:href="./assets/stack/sprite.svg#quote"></use>
			</svg>
		</div>
		<div class="reviews__col">
			<h2 class="section__title_alt reviews__title">Клиенты <span class="text_accent text_bold">доверяют</span> нам</h2>

			<div class="reviews__slider">
				<div class="reviews__slide">
					<div class="reviews__slide-row">
						<div class="reviews__slide-col">
							<picture>
								<source srcset="./assets/images/webp/reviewer_1.webp" type="image/webp">
								<img src="./assets/images/reviewer_1.jpg" alt="фото клиента" class="reviews__slide-photo">
							</picture>
							<div class="reviews__slide-reviewer">
								Евгения В.
								<span class="reviews__slide-problem">
									Замена дисплея iPhone 11
								</span>
							</div>
						</div>
						<div class="reviews__slide-rating">4.7</div>
					</div>
					<div class="reviews__slide-text">
						Великолепное обслуживание! Пишу этот отзыв с только что отремонтированного телефона) Переживала по поводу
						предстоящего обращения в сервис, т.к. совсем не разбираюсь в технике, но мастер Андрей очень подробно объяснил мне
						по телефону все нюансы починки, после чего смогла решиться на ремонт своего айфона) Спасибо вам!
					</div>
				</div>
				<div class="reviews__slide">
					<div class="reviews__slide-row">
						<div class="reviews__slide-col">
							<picture>
								<source srcset="./assets/images/webp/reviewer_2.webp" type="image/webp">
								<img src="./assets/images/reviewer_2.jpg" alt="фото клиента" class="reviews__slide-photo">
							</picture>
							<div class="reviews__slide-reviewer">
								Наталия К.
								<span class="reviews__slide-problem">
									Замена стекла iPhone X
								</span>
							</div>
						</div>
						<div class="reviews__slide-rating">4.8</div>
					</div>
					<div class="reviews__slide-text">
						Быстро заменили стекло на телефоне (ребёнок уронил телефон на кафельный пол). Мастер Никита был очень приятен в
						общении. Теперь в случае чего буду обращаться только сюда. Рекомендую на все 100%
					</div>
				</div>
				<div class="reviews__slide">
					<div class="reviews__slide-row">
						<div class="reviews__slide-col">
							<picture>
								<source srcset="./assets/images/webp/reviewer_3.webp" type="image/webp">
								<img src="./assets/images/reviewer_3.jpg" alt="фото клиента" class="reviews__slide-photo">
							</picture>
							<div class="reviews__slide-reviewer">
								Татьяна А.
								<span class="reviews__slide-problem">
									Замена дисплея iPhone 8
								</span>
							</div>
						</div>
						<div class="reviews__slide-rating">4.3</div>
					</div>
					<div class="reviews__slide-text">
						Подскользнулась и упала, извиняюсь, задом на сумочку, в которой лежал Айфон. В результате все стекло в трещинку и
						погнулся корпус. Айфон на гарантии, но на официальном сайте цена замены корпуса 26 тысяч. Рискнула обратиться в этот
						сервис, и корпус получилось даже выправить, а не поменять. Крышку и дисплей конечно пришлось поменять, но заплатила
						в районе 10-ки. И сделали быстро! Хороший сервис, хорошие мастера.
					</div>
				</div>
			</div>
		</div>

		<!--<div class="reviews__col">
			<picture>
				<source srcset="./assets/images/webp/about-us-man.webp" type="image/webp">
				<img src="./assets/images/about-us-man.png" alt="фото" class="reviews__img">
			</picture>
		</div>-->
	</div>

	<button class="callback-button reviews__button open-popup-call-master">Вызвать мастера</button>
</section>

<section class="steps">
	<div class="container steps__wrap">
		<div class="steps__col">
			<h2 class="section__title section__title_tail steps__title">Как происходит ремонт?</h2>

			<ul class="steps__list">
				<li class="steps__list-item steps__list-item_active" data-step="request">
					<svg class="steps__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#call"></use>
					</svg>
					<div class="steps__list-item-text">
						<span class="steps__list-item-title">Заявка</span>
						Вы оставляете заявку на выезд мастера или выезд курьера для доставки техники к нам в сервис
					</div>
				</li>
				<li class="steps__list-item" data-step="diagnostics">
					<svg class="steps__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#search"></use>
					</svg>
					<div class="steps__list-item-text">
						<span class="steps__list-item-title">Диагностика</span>
						Мы проводим диагностику, после которой станут известны сроки и стоимость работ
					</div>
				</li>
				<li class="steps__list-item" data-step="repair">
					<svg class="steps__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#gear"></use>
					</svg>
					<div class="steps__list-item-text">
						<span class="steps__list-item-title">Ремонт</span>
						Оповещаем Вас и после вашего подтверждения проводим ремонт
					</div>
				</li>
				<li class="steps__list-item" data-step="warranty">
					<svg class="steps__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#guarantee"></use>
					</svg>
					<div class="steps__list-item-text">
						<span class="steps__list-item-title">Гарантия</span>
						Вы забираете свой гаджет и получаете пожизненную гарантию
					</div>
				</li>
			</ul>
		</div>

		<div class="steps__col steps__img-wrap">
			<picture>
				<source srcset="./assets/images/webp/steps-img_request.webp" type="image/webp">
				<img src="./assets/images/steps-img_request.png" alt="Заявка на ремонт" class="steps__img" data-step-img="request">
			</picture>
			<picture>
				<source srcset="./assets/images/webp/steps-img_diagnostics.webp" type="image/webp">
				<img src="./assets/images/steps-img_diagnostics.png" alt="Диагностика" class="steps__img steps__img_hidden"
					 data-step-img="diagnostics">
			</picture>
			<picture>
				<source srcset="./assets/images/webp/steps-img_repair.webp" type="image/webp">
				<img src="./assets/images/steps-img_repair.png" alt="Ремонт" class="steps__img steps__img_hidden" data-step-img="repair">
			</picture>
			<picture>
				<source srcset="./assets/images/webp/steps-img_warranty.webp" type="image/webp">
				<img src="./assets/images/steps-img_warranty.png" alt="Гарантия" class="steps__img steps__img_hidden"
					 data-step-img="warranty">
			</picture>
		</div>
	</div>
</section>

<section id="contacts" class="contacts">
	<div class="container contacts__wrap">
		<div class="contacts__block">
			<div class="section__title_alt contacts__block-title">
				Ремонт <span class="text_accent text_bold">iPhone</span> в
				<span class="line-break"></span>
                <?= $company_name ?>
			</div>
			<p class="contacts__block-text">
				Команда Apple Assist работает с 2009 года. Мы всегда делаем все возможносе, чтобы в случае неудачи вы могли недорого
				починить своё устройство. Мы любим технику Apple, но еще больше любим свою работу, поэтому всё делаем на совесть.
				<span class="line-break"></span>
				80% наших клиентов приходят по рекомендации от друзей.
			</p>

			<div class="contacts__block-worktime">
				Более 12 сервисных центров в СПБ
				<span class="line-break"></span>
				Работаем с 8:00 до 23:00 <span class="text_accent text_bold">Без выходных</span>
			</div>

			<a href="tel: <?= $phone_link ?>" class="contacts__block-phone"><?= $phone_format ?></a>
			<button class="callback-button contacts__block-button open-popup-call-master">Вызвать мастера</button>
			<!--<ul class="contacts__block-list">
				<li class="contacts__block-list-item">
					<span class="text_bold">Адрес:</span> 190005, Санкт - Петербург, Московский проспект д.7 (ст. м. Садовая)
				</li>
				<li class="contacts__block-list-item">
					<span class="text_bold">Телефон:</span>
					<a href="tel: <? /*= $phone_link */ ?>" class="contacts__block-phone"><? /*= $phone_format */ ?></a>
				</li>
				<li class="contacts__block-list-item">
					<span class="text_bold">Время работы:</span>
					с 8:00 до 23:00 без выходных
				</li>
			</ul>-->
		</div>
	</div>

	<div id="map" class="contacts__map"></div>
</section>

<section class="faq">
	<div class="faq__bg"></div>
	<div class="container faq__wrap">
		<div class="faq__collage faq__collage_left">
			<svg class="faq__collage_left-question">
				<use xlink:href="./assets/stack/sprite.svg#question"></use>
			</svg>
		</div>
		<div class="faq__collage faq__collage_right">
			<svg class="faq__collage_right-message">
				<use xlink:href="./assets/stack/sprite.svg#chat"></use>
			</svg>
		</div>

		<h2 class="faq__title">Остались вопросы?</h2>
		<div class="faq__subtitle">
			Оставьте свой номер телефона.
			<span class="line-break"></span>
			Наш менеджер свяжется с вами через 2 минуты
		</div>
		<form action="./assets/config/mail.php" method="POST" class="faq__form">
			<div class="form__inputs faq__form-inputs">
				<input type="text" class="form__input faq__form-input" name="user_phone" placeholder="+7 (999) 999-99-99" required>
				<button class="callback-button form__button faq__form-button">Перезвоните мне</button>
			</div>
		</form>
	</div>
</section>

<footer class="footer">
	<div class="container footer__wrap">
		<div class="footer__col">
			<img src="./assets/svg/logo.svg" alt="logo" class="footer__logo">
			<!--<div class="footer__billings">
				<img src="./assets/svg/visa.svg" alt="visa" class="footer__billing">
				<img src="./assets/svg/mastercard.svg" alt="mastercard" class="footer__billing">
				<img src="./assets/images/sber.png" alt="sberbank" class="footer__billing">
				<img src="./assets/images/rub.png" alt="cash" class="footer__billing">
			</div>-->
		</div>
		<nav class="footer__col footer__nav">
			<a href="#about" class="footer__nav-link">О нас</a>
			<a href="#prices" class="footer__nav-link">Цены</a>
			<a href="#reviews" class="footer__nav-link">Отзывы</a>
			<a href="#contacts" class="footer__nav-link">Контакты</a>
		</nav>
		<div class="footer__col footer__contacts">
			<a href="tel:<?= $phone_link ?>" class="footer__phone"><?= $phone_format ?></a>
			<div class="footer__worktime">C 8:00 до 23:00 без выходных</div>
		</div>
	</div>
	<div class="container footer__footnote">
		Компания <?= $company_name ?>. Все права защищены. Apple, Mac, Mac OS, MacBook, MacBook Pro, iPhone, iPad, iPad Air и их логотипы
		являются зарегистрированными товарными знаками Apple Inc. в США и других странах. Информация опубликованная на сайте не является
		публичной офертой, определяемой положениями Статьи 437 ГК РФ. Цены указаны за услугу, запчасти в эту стоимость не входят.
	</div>
</footer>

<div class="popups popups_hidden">
	<div class="popup popup-call-master popup_close">
		<div class="popup__form-close">
			<svg class="popup__form-close-icon">
				<use xlink:href="./assets/stack/sprite.svg#close"></use>
			</svg>
		</div>
		<div class="popup__wrap">
			<form action="./assets/configs/mail.php" method="POST" class="popup__form">
				<h2 class="popup__form-title">Вызвать <span class="text_accent text_bold">мастера</span></h2>
				<div class="popup__form-subtitle">Оставьте ваши контактные данные и мы свяжемся с вами через 2 минуты</div>
				<div class="popup__form-inputs">
					<div class="popup__form-input-wrap">
						<label for="popup-call-master_name" class="popup__form-input-label">Ваше имя:</label>
						<input id="popup-call-master_name" type="text" name="user_name" class="form__input popup__form-input"
							   placeholder="Ваше имя:">
					</div>
					<div class="popup__form-input-wrap">
						<label for="popup-call-master_phone" class="popup__form-input-label">Ваш телефон: <span class="text_alert">*</span></label>
						<input id="popup-call-master_phone" type="text" name="user_phone" class="form__input popup__form-input"
							   placeholder="+7 (999) 999-99-99" required>
					</div>
				</div>
				<button class="popup__form-button">Отправить</button>
				<div class="popup__form-footnote">
					Нажимая на кнопку "Отправить" я соглашаюсь с
					<a href="./politika.html" target="_blank" class="popup__form-link">политикой обработки персональных данных</a>
				</div>
				<picture>
					<source srcset="./assets/images/webp/iphone_front.webp" type="image/webp">
					<img src="./assets/images/iphone_front.png" alt="iPhone" class="popup__form-img">
				</picture>
			</form>
		</div>
	</div>

	<div class="popup popup-thanks popup_close">
		<div class="popup__form-close">
			<svg class="popup__form-close-icon">
				<use xlink:href="./assets/stack/sprite.svg#close"></use>
			</svg>
		</div>
		<div class="popup__wrap">
			<div class="popup__form">
				<h2 class="popup__form-title">Спасибо!</h2>
				<div class="popup__form-subtitle">Наш оператор скоро с вами свяжется</div>

				<button class="popup__form-button popup-thanks__button">Закрыть</button>
			</div>
		</div>
	</div>
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
<script defer>
    // ymaps.ready(init);

    setTimeout(() => {
        let elem = document.createElement('script');


        elem.src =
            'https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=init';
        document.getElementsByTagName('body')[0].appendChild(elem);
    }, 2500);

    function init() {
        let mainCoords = [59.924826, 30.487046];

        if ($(window).width() < 992) {
            mainCoords = [59.936726, 30.317046]
        }
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: mainCoords,
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
            fillColor: '#98989850',
            // Ширина обводки.
            strokeWidth: 1,
            strokeColor: '#989898FF'
        });

        // Добавляем многоугольник на карту.
        myMap.geoObjects.add(myPolygon);

        const glyphServicesParams = {
            iconLayout: 'default#image',
            iconImageHref: './assets/svg/placeholder.svg',
            iconImageSize: [35, 35]
        }

        // const glyphEngineersParams = {
        //     iconLayout: 'default#image',
        //     // iconImageHref: './img/placeholder-engineer.png',
        //     iconImageHref: './img/ifixit-engineer-placeholder.svg',
        //     iconImageSize: [40, 40]
        // }

        let servicePlacemarks = {
            sadovaya: new ymaps.Placemark([59.924726, 30.317046], {
                balloonContentHeader: '<?=$company_name?> на м. Садовая',
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