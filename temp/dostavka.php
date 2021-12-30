<? require_once(__DIR__ . '/modules/header.php') ?>

    <main class="container delivery">
        <h1 class="inner-page__title">
             Гарантия и возврат
        </h1>

		<div class="delivery__row">
			<div class="delivery__card">
				<h2 class="delivery__card-title">Доставка по СПб</h2>
				<div class="delivery__card-text">Мы осуществляем курьерскую доставку по СПб</div>
				<picture>
					<img src="./images/delivery.png" alt="курьер" class="delivery__card-img">
					<source srcset="./images/webp/delivery.webp" type="image/webp">
				</picture>
				<p class="delivery__card-text">
					В большинстве случаев доставка осуществляется в день заказа. После заказа, менеджер связывается с вами и уточняет
					примерное время доставки.
				</p>
				<div class="delivery__card-text delivery__card-text_notice">
					Стоимость доставка по СПб в пределах КАД - 350 рублей.
				</div>
				<div class="delivery__card-text">
					Также у нас есть быстрая доставка в течение 2 часов.
				</div>
				<div class="delivery__card-text delivery__card-text_notice">
					Стоимость доставки 700 рублей.
				</div>
			</div>

			<div class="delivery__card">
				<h2 class="delivery__card-title">Самовывоз</h2>
				<div class="delivery__card-text">Вы можете забрать свой заказ в одном из пунктов самовывоза.</div>
				<picture>
					<img src="./images/pickup.png" alt="корзина" class="delivery__card-img">
					<source srcset="./images/webp/pickup.webp" type="image/webp">
				</picture>
					<div class="delivery__card-text">Для этого необходимо оформить заказ.</div>
					<p class="delivery__card-text">
						Если вы планируете забрать заказ день в день, проверьте наличие товара на нужном для вас складе.
					</p>
					<p class="delivery__card-text">
						Если вы планируете забрать товар с пункта, в котором нужного товара нет в наличии, товар доставят в пункт только
						на следующий день.
					</p>
					<div class="delivery__card-text">Главный склад находится по адресу: <?= $general_addr?></div>
			</div>

			<div class="delivery__card">
				<h2 class="delivery__card-title">Доставка по России</h2>
				<div class="delivery__card-text">Мы работает с компанией СДЭК, которая осуществляет доставку по России и СНГ
					.<sup>*</sup></div>
				<picture>
					<img src="./images/country-delivery.png" alt="глобус" class="delivery__card-img">
					<source srcset="./images/webp/country-delivery.webp" type="image/webp">
				</picture>
					<p class="delivery__card-text">Мы ответственно относимся к упаковке товара. Также наш груз всегда застрахован.</p>
					<div class="delivery__card-text">Узнайте стоимость доставки онлайн. Просто начните оформлять заказ и в разделе
						"Способ получения" вы увидите стоимость доставки транспортной компанией до вашего пункта выдачи.</div>
					<div class="delivery__card-text"><sup>*</sup> - за исключением отдаленных населенных пунктов</div>
			</div>
		</div>

		<div class="delivery__payment">
			<h3 class="delivery__payment-title">Оплата заказа</h3>
			<div class="delivery__payment-block">
				<picture><img src="./images/pay_cash.png" alt="наличные" class="delivery__payment-block-img">
					<source srcset="./images/webp/pay_cash.webp">
				</picture>
				<div class="delivery__payment-block-info">
					<h3 class="delivery__payment-block-title">Наличным</h3>
					<div class="delivery__payment-block-text">Курьеру при получении (только СПб в пределах КАД) или при самовывозе</div>
				</div>
			</div>

			<div class="delivery__payment-block">
				<picture><img src="./images/pay_card.png" alt="банковская карты" class="delivery__payment-block-img">
					<source srcset="./images/webp/pay_card.webp">
				</picture>
				<div class="delivery__payment-block-info">
					<h3 class="delivery__payment-block-title">Оплата банковской картой</h3>
					<div class="delivery__payment-block-text">Оплата заказа картой при самовывозе или на сайте онлаайн. Оплата
						происходит через ПАО СБЕРБАНК с использованием банковских карту платежных систем VISA, MasterCard, МИР</div>
				</div>
			</div>

			<div class="delivery__payment-block">
				<picture><img src="./images/pay_bill.png" alt="счет" class="delivery__payment-block-img">
					<source srcset="./images/webp/pay_bill.webp">
				</picture>
				<div class="delivery__payment-block-info">
					<h3 class="delivery__payment-block-title">Оплата по счету</h3>
					<div class="delivery__payment-block-text">Такой расчет более всего подходит для организаций. Вы делаете заказ,
						указываете реквизиты и мы выставляем вам счет. Также мы можем оформить договор и любые другие необходимые
						документы.</div>
				</div>
			</div>

			<div class="delivery__payment-block">
				<picture><img src="./images/pay_mobile.png" alt="оплата со смартфона" class="delivery__payment-block-img">
					<source srcset="./images/webp/pay_mobile.webp">
				</picture>
				<div class="delivery__payment-block-info">
					<h3 class="delivery__payment-block-title">Оплата с мобильного телефона</h3>
					<div class="delivery__payment-block-text">Вы можете делать перевод с помощью Сбербанк-онлайн, а также оплатить на
						пункте самовывоза, прислонив ваш телефон к терминалу оплаты.</div>
				</div>
			</div>
		</div>
    </main>

    <? require_once(__DIR__ . '/modules/footer.php') ?>
</body>
</html>