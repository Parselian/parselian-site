<? require_once(__DIR__ . '/modules/header.php') ?>

    <main class="container contacts">
        <h1 class="inner-page__title">
            Контакты
        </h1>

        <ul class="contacts-list">
            <li class="contacts-list__item">
                <svg class="contacts-list__item-icon">
                    <use xlink:href="./images/stack/sprite.svg#mail"></use>
                </svg>

                <a href="mailto:<?=$email?>" class="contacts-list__item-link"><?= $email?></a>
            </li>
            <li class="contacts-list__item">
                <svg class="contacts-list__item-icon">
                    <use xlink:href="./images/stack/sprite.svg#phone-call"></use>
                </svg>

                <a href="tel:<?=$phone_link?>" class="contacts-list__item-link"><?= $phone_format?></a>
            </li>
            <li class="contacts-list__item">
                <svg class="contacts-list__item-icon">
                    <use xlink:href="./images/stack/sprite.svg#whatsapp"></use>
                </svg>

                <a href="tel:<?=$phone_link?>" class="contacts-list__item-link"><?= $phone_format?></a>
            </li>
        </ul>

        <div class="contacts-location">
            <div class="contacts-location__info">
                <h2 class="contacts-location__info-title">Главный склад - офис - сервисный центр</h2>
                <div class="contacts-location__info-address">
                    <svg class="contacts-location__info-icon">
                        <use xlink:href="./images/stack/sprite.svg#placeholder"></use>
                    </svg>
                    <div class="contacts-location__info-text">
                        м. Садовая, Московский пр. 8
                    </div>
                </div>

                <div class="contacts-location__info-worktime">
                    <h3 class="contacts-location__info-worktime-title">Рабочее время</h3>
                    <div class="contacts-location__info-text">Без выходных: 10:00 - 23:00</div>
                </div>
            </div>

            <div id="map" class="contacts-location__map"></div>
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
            var myMap = new ymaps.Map("map", {
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