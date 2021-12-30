<? require_once(__DIR__ . '/modules/header.php') ?>

    <main class="container about">
        <h1 class="inner-page__title about__promo-title">
            О компании
        </h1>

        <div class="about__row about__promo">
            <picture><img src="./images/about-avatar.png" alt="аватар" class="about__promo-img">
                <source srcset="./images/webp/about-avatar.webp" type="image/webp">
            </picture>

            <ul class="about__promo-list">
                <li class="about__promo-list-item">
                    Наша компания существует с 2013 года. Основным направлением является продажа запчастей и инструментов для ремонта.
                </li>
                <li class="about__promo-list-item">
                    Мы имеем самый крупный ассортимент запчастей Apple в России. Уважаем даже самые старые яблочные девайсы. Если запчасти еще есть на китайском рынке - мы стремимся тоже держать их в продаже.
                </li>
                <li class="about__promo-list-item">
                     Мы всегда заявляем честное качество - для нас важна репутация. Мы отбираем самых лучших поставщиков, а также работаем напрямую с заводами.
                </li>
                <li class="about__promo-list-item">
                    Мы всегда за нововедения, любим свежие взгляды и простоту взаимодействий с клиентами. Мы ценим время - на сайте всегда актуальные остатки, а доставить товар можно день в день.
                </li>
            </ul>
        </div>

		<div id="about-promo-map" class="about__row about__promo-map"></div>

		<div class="about__row about__promo-gallery">
			<div class="about__promo-gallery-card">
				<h4 class="about__promo-gallery-card-title">Вход</h4>
				<picture><img src="./images/entrance.jpg" alt="Вход" class="about__promo-gallery-card-img">
					<source srcset="./images/webp/entrance.webp" type="image/webp">
				</picture>
			</div>
			<div class="about__promo-gallery-card">
				<h4 class="about__promo-gallery-card-title">Наш офис</h4>
				<picture><img src="./images/office.jpg" alt="склад" class="about__promo-gallery-card-img">
					<source srcset="./images/webp/office.webp" type="image/webp">
				</picture>
			</div>
			<div class="about__promo-gallery-card">
				<h4 class="about__promo-gallery-card-title">Наш склад</h4>
				<picture><img src="./images/sklad.png" alt="склад" class="about__promo-gallery-card-img">
					<source srcset="./images/webp/sklad.webp" type="image/webp">
				</picture>
			</div>

			<div class="about__promo-gallery-card">
				<h4 class="about__promo-gallery-card-title">Наш склад</h4>
				<picture><img src="./images/sklad2.png" alt="склад" class="about__promo-gallery-card-img">
					<source srcset="./images/webp/sklad2.webp" type="image/webp">
				</picture>
			</div>
		</div>
    </main>

    <? require_once(__DIR__ . '/modules/footer.php') ?>


	<script>
		setTimeout(function() {
			let scriptTag = document.createElement('script');
			scriptTag.setAttribute('src', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=init')
			document.head.appendChild(scriptTag)
		}, 1500)
        ymaps.ready(init);
        function init(){
            // Создание карты.
            var myMap = new ymaps.Map("about-promo-map", {
                // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [59.926036369577616, 30.31827333897629],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 11
            });

            const headquarterGlyph = {
                iconLayout: 'default#image',
                iconImageHref: './images/svg/placeholder.svg',
                iconImageSize: [36, 36],
                iconImageOffset: [-18, -36]
            },
            serviceCentersGlyph = {
                iconLayout: 'default#image',
                iconImageHref: './img/placeholder.svg',
                iconImageSize: [36, 36],
                iconImageOffset: [-18, -36]
            };

             let servicePlacemarks = {
                headquarter: new ymaps.Placemark([59.926036369577616, 30.31827333897629], {
                balloonContentBody: 'Главный офис <?= $company_name;?>'
            }, headquarterGlyph)}


            //add placemarks on map
            for (let placemark in servicePlacemarks) {
                myMap.geoObjects.add(servicePlacemarks[placemark]);
            }

            myMap.events.add('click', () => {
                for (let placemark in servicePlacemarks) {
                    servicePlacemarks[placemark].balloon.close();
                }
            });

            myMap.behaviors.disable(['drag']);
            myMap.behaviors.disable(['scrollZoom']);
        }
    </script>
</body>
</html>