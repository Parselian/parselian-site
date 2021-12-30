<?php
require_once(__DIR__ . '/assets/configs/config.php');
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./assets/css/reset.css">
	<link rel="stylesheet" href="./assets/css/style.css?<?= time(); ?>">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?= $title ?></title>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(82321684, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>
<noscript><div><img src="https://mc.yandex.ru/watch/82321684" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<script src="//code-eu1.jivosite.com/widget/DBmXZRqdcn" async></script>
</head>
<body>

<header class="header">
	<div class="container header__wrap header__wrap_top">
		<button class="menu-toggle">
			<span class="menu-toggle__border"></span>
			Menu
		</button>
		<div class="header__logo header__logo_top">
			<span class="line-break">Постгарантийный</span>
			сервис <span class="text_accent text_bold"><?= $brand_name; ?></span>

			<nav class="header__nav">
				<a href="#features" class="header__nav-item">Преимущества</a>
				<a href="#services" class="header__nav-item">Услуги</a>
				<a href="#errors" class="header__nav-item">Коды ошибок</a>
				<a href="#contacts" class="header__nav-item">Контакты</a>
				<a href="#request" class="header__nav-item">Обратная связь</a>
			</nav>
		</div>
		<div class="header__contacts header__contacts_top">
			<div class="header__contacts-block">
				<svg class="header__contacts-block-icon">
					<use xlink:href="./assets/stack/sprite.svg#call"></use>
				</svg>
				<div class="header__contacts-block-label">Наш телефон:</div>
				<a href="tel:<?= $phone_link ?>" class="header__contacts-block-info"><?= $phone_format ?></a>
			</div>
			<div class="header__contacts-block">
				<svg class="header__contacts-block-icon">
					<use xlink:href="./assets/stack/sprite.svg#clock"></use>
				</svg>
				<div class="header__contacts-block-label">Мы работаем:</div>
				<div class="header__contacts-block-info header__contacts-block-info_top">Ежедневно: 8:00 — 23:00</div>
			</div>
		</div>
		<button class="button button_accent header__button open-popup-request">Вызвать мастера</button>
	</div>
</header>

<section class="promo">
	<div class="container promo__wrap">
		<h1 class="promo__title">
			Ремонт бытовой
			<span class="line-break"></span>
			техники <span class="text_accent text_bold"><?= $brand_name ?></span>
			<span class="line-break"></span>
			в Санкт-Петербурге
		</h1>
		<div class="promo__subtitle">Представитель <?= $brand_name ?> в г. Санкт-Петербург</div>
		<button class="button button_accent promo__button open-popup-request">Заказать ремонт</button>
		<div class="promo__footfeatures">
			<div class="promo__footfeature">
				<svg class="promo__footfeature-icon">
					<use xlink:href="./assets/stack/sprite.svg#truck"></use>
				</svg>

				Бесплатный выезд мастера
			</div>
			<div class="promo__footfeature">
				<svg class="promo__footfeature-icon">
					<use xlink:href="./assets/stack/sprite.svg#search"></use>
				</svg>

				Бесплатная диагностика
			</div>
		</div>
		<picture>
			<source srcset="./assets/images/webp/promo-collage.webp" type="image/webp">
			<img src="./assets/images/promo-collage.png" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб" class="promo__collage">
		</picture>
	</div>
</section>

<section id="features" class="features">
	<div class="container features__wrap">
		<div class="features__block">
			<svg class="features__block-icon">
				<use xlink:href="./assets/stack/sprite.svg#stopwatch"></use>
			</svg>
			<h3 class="features__block-title">Сроки</h3>
			<div class="features__block-text">
				Мастер выезжает к Вам в течение 20 минут после вызова и ремонтирует вашу стиральную машину от 20 минут
			</div>
		</div>
		<div class="features__block">
			<svg class="features__block-icon">
				<use xlink:href="./assets/stack/sprite.svg#washing-machine"></use>
			</svg>
			<h3 class="features__block-title">Бесплатная диагностика</h3>
			<div class="features__block-text">
				Бесплатно продиагностируем Вашу стиральную машинку от 20 минут. Несём полную материальную ответственность.
			</div>
		</div>
		<div class="features__block">
			<svg class="features__block-icon">
				<use xlink:href="./assets/stack/sprite.svg#wrench"></use>
			</svg>
			<h3 class="features__block-title">Оригинальные запчасти</h3>
			<div class="features__block-text">
			Для ремонта стиральных машин <?= $brand_name ?> на нашем складе имеется более 8 000 наименований оригинальных запчастей.
			</div>
		</div>
		<div class="features__block">
			<svg class="features__block-icon">
				<use xlink:href="./assets/stack/sprite.svg#warranty"></use>
			</svg>
			<h3 class="features__block-title">Гарантия <?= $brand_name?></h3>
			<div class="features__block-text">
				На ремонт стиральных машин <?= $brand_name?> распространяется гарантия на 1 год.
			</div>
		</div>
	</div>
</section>

<section id="services" class="devices">
	<div class="container devices__wrap">
		<h2 class="section__title">Виды обслуживаемой техники <?= $brand_name ?></h2>
		<div class="devices__cards">
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Стиральные</span> машины</div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/washing-machine.webp" type="image/webp">
					<img src="./assets/images/washing-machine.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб"
						 class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Посудомоечные</span> машины</div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/dishwasher.webp" type="image/webp">
					<img src="./assets/images/dishwasher.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб"
						 class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Варочные</span> панели</div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/hob.webp" type="image/webp">
					<img src="./assets/images/hob.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Духовые</span>шкафы</div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/oven-cabinet.webp" type="image/webp">
					<img src="./assets/images/oven-cabinet.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб"
						 class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Сушильные</span> машины</div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/drying-machine.webp" type="image/webp">
					<img src="./assets/images/drying-machine.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб"
						 class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Микроволновые</span> печи</div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/microoven.webp" type="image/webp">
					<img src="./assets/images/microoven.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб"
						 class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold">Кофемашины</span></div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/coffee-machine.webp" type="image/webp">
					<img src="./assets/images/coffee-machine.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб"
						 class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold">Холодильники</span></div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/fridge.webp" type="image/webp">
					<img src="./assets/images/fridge.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold">Вытяжки</span></div>
				<button class="button button_accent devices__card-button open-popup-request">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/range-hood.webp" type="image/webp">
					<img src="./assets/images/range-hood.jpg" alt="Ремонт бытовой техники <?= $brand_name ?> в СПб"
						 class="devices__card-img">
				</picture>
			</div>
		</div>
	</div>
</section>

<div id="errors" class="errors">
	<div class="container errors__wrap">
		<h2 class="section__title request__title">Коды ошибок стиральных машин Bosch</h2>
		<div class="errors__row">
			<select name="error_code" id="" class="errors__codes-select" placeholder="Выберите ваш код ошибки">
				<option value="F01">F01</option>
			</select>

			<div class="errors__codes">
				<button value="F01" class="errors__code">F01</button>
			</div>
			<div class="errors__description">
				<h4 class="errors__description-title">Дверь не закрыта</h4>
				<p class="errors__description-text">
					Эта ошибка возникает в том случае, если дверца стиральной машины не закрыта, или закрыта не плотно. Попробуйте открыть и
					снова закрыть люк машинки. Проверьте, не мешает ли загруженное в машинку бельё закрытию крышки люка.
				</p>
				<button class="button button_accent errors__description-button open-popup-request">Вызвать инженера</button>
			</div>
		</div>
	</div>
</div>

<section class="steps">
	<h2 class="section__title">Как происходит ремонт</h2>
	<div class="container steps__wrap">
		<div class="steps__block">
			<div class="steps__block-count">01</div>
			<div class="steps__block-text">
				Оставляете заявку на сайте или по телефону
			</div>
		</div>
		<div class="steps__block">
			<div class="steps__block-count">02</div>
			<div class="steps__block-text">
				В течение <span class="text_accent">5 минут</span> с Вами связывается Ваш мастер и конслультирует по поломке
			</div>
		</div>
		<div class="steps__block">
			<div class="steps__block-count">03</div>
			<div class="steps__block-text">
				В течение <span class="text_accent">20 минут</span> Ваш мастер будет у вас со всем нужным оборудованием
			</div>
		</div>
		<div class="steps__block">
			<div class="steps__block-count">04</div>
			<div class="steps__block-text">
				После ремонта Вы получаете комплект документов с гарантией на ремонт
			</div>
		</div>
	</div>
</section>

<section id="contacts" class="contacts">
	<h2 class="section__title">Контакты</h2>
	<div class="container contacts__wrap">
		<div class="contacts__col contacts__block">
			<div class="contacts__block-item">
				<h3 class="contacts__block-item-title">Телефон:</h3>
				<div class="contacts__block-item-text">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#telephone"></use>
					</svg>
					<a href="tel: <?= $phone_link ?>" class="contacts__block-item-link"><?= $phone_format ?></a>
				</div>
			</div>
			<div class="contacts__block-item">
				<h3 class="contacts__block-item-title">Время работы:</h3>
				<div class="contacts__block-item-text">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#truck"></use>
					</svg>
					Ежедневно: с 8:00 до 23:00
				</div>
			</div>
			<div class="contacts__block-item">
				<h3 class="contacts__block-item-title">Адрес:</h3>
				<div class="contacts__block-item-text">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#placeholder"></use>
					</svg>
					<div>Санкт-Петербург, улица Ефимова, 1/4</div>
				</div>
			</div>
		</div>
		<div id="map" class="contacts__col contacts__map"></div>
	</div>
</section>

<section id="request" class="request">
	<div class="container request__wrap">
		<h2 class="section__title request__title">Заказать ремонт</h2>
		<form action="" class="request__form">
			<div class="request__form-row">
				<div class="request__form-input-wrap">
					<label for="user-name" class="request__form-input-label">
						Ваше имя:
						<svg class="request__form-input-icon">
							<use xlink:href="./assets/stack/sprite.svg#user"></use>
						</svg>
					</label>
					<input id="user-name" type="text" name="user_name" class="request__form-input" placeholder="Ваше имя">
				</div>

				<div class="request__form-input-wrap">
					<label for="user-phone" class="request__form-input-label">Ваш телефон:*</label>
					<input id="user-phone" type="text" name="user_phone" class="request__form-input" placeholder="+7 (999) 999-99-99"
						   required>
					<svg class="request__form-input-icon">
						<use xlink:href="./assets/stack/sprite.svg#call"></use>
					</svg>
				</div>
				<button type="submit" class="button button_accent request__form-button">Вызвать мастера</button>
			</div>

			<div class="request__form-text">
				Чтобы мастер смог определить вашу проблему как можно точнее оставьте дополнительные данные:
			</div>

			<div class="request__form-row">
				<div class="request__form-col">
					<div class="request__form-select-wrap">
						<label for="device-select" class="request__form-select-label">Какая техника:</label>
						<select id="device-select" name="user_device" class="request__form-select">
							<option value="Стиральная машина" selected>Стиральная машина</option>
							<option value="Посудомоечная машина">Посудомоечная машина</option>
							<option value="Варочная панель">Варочная панель</option>
							<option value="Духовой шкаф">Духовой шкаф</option>
							<option value="Сушильная машина">Сушильная машина</option>
							<option value="Микроволновая печь">Микроволновая печь</option>
							<option value="Кофемашина">Кофемашина</option>
							<option value="Холодильник">Холодильник</option>
							<option value="Вытяжка">Вытяжка</option>
						</select>
						<svg class="request__form-select-icon">
							<use xlink:href="./assets/stack/sprite.svg#bookmark"></use>
						</svg>
					</div>
					<div class="request__form-select-wrap">
						<label for="user-address" class="request__form-input-label">Расположение (метро, район):</label>
						<input id="user-address" type="text" name="user_location" class="request__form-input" placeholder="Ваш адрес">
						<svg class="request__form-input-icon">
							<use xlink:href="./assets/stack/sprite.svg#placeholder"></use>
						</svg>
					</div>
					<div class="request__form-footnote">
						Нажимая кнопку "Вызвать мастера" я соглашаюсь с
						<a href="./politika.html" target="_blank" class="request__form-footnote-link">политикой обработки персональных
							данных</a>
					</div>
				</div>
				<div class="request__form-textarea-wrap">
					<textarea name="user_message" class="request__form-textarea" placeholder="Опишите вашу проблему"></textarea>
					<svg class="request__form-textarea-icon">
						<use xlink:href="./assets/stack/sprite.svg#chat"></use>
					</svg>
				</div>
				<div class="request__form-footnote request__form-footnote_mobile">
					Нажимая кнопку "Вызвать мастера" я соглашаюсь с
					<a href="./politika.html" target="_blank" class="request__form-footnote-link">политикой обработки персональных
						данных</a>
				</div>
			</div>
		</form>
	</div>
</section>

<footer class="header">
	<div class="container header__wrap footer__wrap">
		<div class="header__logo footer__logo">
			<span class="line-break">Постгарантийный</span>
			сервис <span class="text_accent text_bold"><?= $brand_name; ?></span>
		</div>
		<div class="header__contacts footer__contacts">
			<div class="header__contacts-block">
				<svg class="header__contacts-block-icon">
					<use xlink:href="./assets/stack/sprite.svg#call"></use>
				</svg>
				<div class="header__contacts-block-label">Наш телефон:</div>
				<a href="tel: <?= $phone_link ?>" class="header__contacts-block-info"><?= $phone_format ?></a>
			</div>
			<div class="header__contacts-block">
				<svg class="header__contacts-block-icon">
					<use xlink:href="./assets/stack/sprite.svg#clock"></use>
				</svg>
				<div class="header__contacts-block-label">Мы работаем:</div>
				<div class="header__contacts-block-info">Ежедневно: 8:00 — 23:00</div>
			</div>
			<a href="./politika.html" target="_blank" class="footer__policy">Политика <span class="line-break"></span> конфиденциальности</a>
		</div>
	</div>
</footer>

<div class="popup popup-request">
	<form action="./assets/configs/mail.php" method="POST" class="popup-form">
		<svg class="popup-form__close">
			<use xlink:href="./assets/stack/sprite.svg#popup-close"></use>
		</svg>
		<h2 class="popup-form__title">Заявка на ремонт</h2>
		<div class="popup-form__subtitle">
			Оставьте свои контактные данные и мы свяжемся с вами через 2 минуты
		</div>
		<div class="request__form-input-wrap popup-form__input-wrap">
			<label for="popup-user-name" class="request__form-input-label">
				Ваше имя:
				<svg class="request__form-input-icon">
					<use xlink:href="./assets/stack/sprite.svg#user"></use>
				</svg>
			</label>
			<input id="popup-user-name" type="text" name="user_name" class="request__form-input" placeholder="Ваше имя">
		</div>

		<div class="request__form-input-wrap popup-form__input-wrap">
			<label for="popup-user-phone" class="request__form-input-label">Ваш телефон:*</label>
			<input id="popup-user-phone" type="text" name="user_phone" class="request__form-input" placeholder="+7 (999) 999-99-99"
				   required>
			<svg class="request__form-input-icon">
				<use xlink:href="./assets/stack/sprite.svg#call"></use>
			</svg>
		</div>

		<button type="submit" class="button button_accent popup-form__button">Вызвать мастера</button>

		<div class="request__form-footnote popup-form__footnote">
			Нажимая кнопку "Вызвать мастера" я соглашаюсь с
			<a href="./politika.html" target="_blank" class="request__form-footnote-link">политикой обработки персональных данных</a>
		</div>
	</form>
</div>

<div class="popup popup-thanks">
	<div class="popup-form">
		<svg class="popup-form__close">
			<use xlink:href="./assets/stack/sprite.svg#popup-close"></use>
		</svg>
		<h2 class="popup-form__title">Спасибо!</h2>
		<div class="popup-form__subtitle">
			Наш оператор свяжется с вами через 2 минуты
		</div>

		<button type="submit" class="button button_accent popup-form__button popup-form-thanks__button">Закрыть</button>

	</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"
		integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous"
		referrerpolicy="no-referrer"></script>
<script src="./assets/configs/script.js?<?= time(); ?>"></script>
<script defer>
    setTimeout(() => {
        let elem = document.createElement('script');


        elem.src =
            'https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=init';
        document.getElementsByTagName('body')[0].appendChild(elem);
    }, 2500);

    function init() {
        let mainCoords = [59.926206, 30.319434];

        if ($(window).width() < 992) {
            mainCoords = [59.926206, 30.319434]
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
            zoom: 9
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
            fillColor: '#98989840',
            // Ширина обводки.
            strokeWidth: 1,
            strokeColor: '#989898FF'
        });

        // Добавляем многоугольник на карту.
        myMap.geoObjects.add(myPolygon);

        const glyphServicesParams = {
            iconLayout: 'default#image',
            iconImageHref: './assets/svg/map-placeholder.svg',
            iconImageSize: [35, 35]
        }

        // const glyphEngineersParams = {
        //     iconLayout: 'default#image',
        //     // iconImageHref: './img/placeholder-engineer.png',
        //     iconImageHref: './img/ifixit-engineer-placeholder.svg',
        //     iconImageSize: [40, 40]
        // }

        let servicePlacemarks = {
            sadovaya: new ymaps.Placemark([59.926206, 30.319434], {
                balloonContentHeader: 'Главный офис <?=$brand_name?> на м. Садовая',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            narvskaya: new ymaps.Placemark([59.902233, 30.275241], {
                balloonContentHeader: 'СЦ <?=$brand_name?> на м. Нарвская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            politehnicheskaya: new ymaps.Placemark([60.009964, 30.375913], {
                balloonContentHeader: 'СЦ <?=$brand_name?> на м. Политехническая',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            mezhdunarodnaya: new ymaps.Placemark([59.868533, 30.383514], {
                balloonContentHeader: 'СЦ <?=$brand_name?> на м. Международная',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            primorskaya: new ymaps.Placemark([59.938334, 30.240725], {
                balloonContentHeader: 'СЦ <?=$brand_name?> на м. Приморская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            bolshevikov: new ymaps.Placemark([59.916408, 30.474775], {
                balloonContentHeader: 'СЦ <?=$brand_name?> на м. пр. Большевиков',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            chkalovskaya: new ymaps.Placemark([59.960618, 30.288050], {
                balloonContentHeader: 'СЦ <?=$brand_name?> на м. Чкаловская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            komenda: new ymaps.Placemark([60.013524, 30.253756], {
                balloonContentHeader: 'СЦ <?=$brand_name?> на м. Комендантский пр.',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
            novocherkasskaya: new ymaps.Placemark([59.943851, 30.412856], {
                balloonContentHeader: 'СЦ <?=$brand_name?> на Маршала Блюхера',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),

        };

        myMap.geoObjects.add(servicePlacemarks['sadovaya']);
        myMap.geoObjects.add(servicePlacemarks['narvskaya']);
        myMap.geoObjects.add(servicePlacemarks['politehnicheskaya']);
        myMap.geoObjects.add(servicePlacemarks['mezhdunarodnaya']);
        myMap.geoObjects.add(servicePlacemarks['primorskaya']);
        myMap.geoObjects.add(servicePlacemarks['bolshevikov']);
        myMap.geoObjects.add(servicePlacemarks['chkalovskaya']);
        myMap.geoObjects.add(servicePlacemarks['komenda']);
        myMap.geoObjects.add(servicePlacemarks['novocherkasskaya']);

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