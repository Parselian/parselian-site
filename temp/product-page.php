<? require_once(__DIR__ . '/modules/header.php') ?>

<main class="container">
    <? require_once(__DIR__ . '/modules/breadcrumbs.php') ?>

    <div class="product">
        <div class="product__row product__general">
            <div class="product__col product__img-wrap">
                <picture>
                    <source srcset="./images/webp/keyboard-macbook-a1181.webp" type="image/webp">
                    <img src="./images/keyboard-macbook-a1181.jpg" alt="Клавиатура" class="product__img">
                </picture>
            </div>

			<div class="product__col product__form-wrap">
				<form action="" method="POST" class="product__form">
					<div class="product__form-vendor">Артикул: 000708</div>

					<div class="product__form-row">
						<div class="product__form-col">
							<div class="product__form-price">2 990 Р</div>
							<div class="product__form-wholesale">Опт 2 840 Р</div>

							<div class="amount-input__wrap">
								<span class="amount-input__label">Кол-во:</span>
								<input type="text" value="1" class="amount-input">
								<span class="amount-input__inc">+</span>
								<span class="amount-input__dec">-</span>
							</div>

							<button class="product__form-btn product__form-btn-cart">
								<svg class="product__form-btn-icon">
									<use xlink:href="./images/stack/sprite.svg#shopping-cart"></use>
									<span>В корзину</span>
								</svg>
							</button>

							<button type="submit" class="product__form-btn product__form-btn-now">Купить в 1 клик</button>
						</div>

						<div class="product__form-col">
							<div class="product__form-features">
								<div class="product__form-feature">
									<span class="product__form-feature-title">Гарантия</span>
									<span class="product__form-feature-separator"></span>
									<span class="product__form-feature-text">3 мес</span>
								</div>
							</div>

							<div class="product__form-availability">
								<h4 class="product__form-availability-title">Наличие в магазинах:</h4>

								<div class="product__form-availability-place">
									<svg class="product__form-availability-place-icon">
										<use xlink:href="./images/stack/sprite.svg#delivery-truck"></use>
									</svg>
									<span class="product__form-availability-place-name">Склад</span>
									<span class="product__form-availability-place-stock">6</span>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="product__row product__about">
			<div class="product__specifications">
				<h2 class="product__about-title">Характеристики</h2>

				<div class="product__specifications-wrap">
					<div class="product__specification">
						<span class="product__specification-title">Гарантия</span>
						<span class="product__specification-val">3 мес.</span>
					</div>
					<div class="product__specification">
						<span class="product__specification-title">Категория</span>
						<span class="product__specification-val">Аккумуляторы</span>
					</div>
					<div class="product__specification">
						<span class="product__specification-title">Качество</span>
						<span class="product__specification-val">ААА</span>
					</div>
					<div class="product__specification">
						<span class="product__specification-title">Модель</span>
						<span class="product__specification-val">А1181</span>
					</div>
					<div class="product__specification">
						<span class="product__specification-title">Напряжение</span>
						<span class="product__specification-val">10.8V</span>
					</div>
					<div class="product__specification">
						<span class="product__specification-title">Тип</span>
						<span class="product__specification-val">Li-ion</span>
					</div>
					<div class="product__specification">
						<span class="product__specification-title">Энергоёмкость</span>
						<span class="product__specification-val">55Wh / 5600mAh</span>
					</div>
				</div>
			</div>

			<div class="product__description">
				<h2 class="title product__about-title">Описание товара</h2>
				<p class="text product__description-text">
					Качество ААА - деталь, произведенная фабрикой без нарушения технологии производства, но не все
					оборудование и/или материалы соответствуют стандартам Apple. На практике это может означать, что
					часть производственного цикла не автоматизирована, используется материалы из более дешевого
					материала или более низкие заводские показатели. Таакой товар не будет иметь физических огрехов,
					но будет заметно уступать по характеристикам ОЕМ и оригинальным деталям.
					Новая аккумуляторная батарея А1181 для белого корпуса
				</p>
				<p class="text product__description-text">
					Батарея ноутбука ссчитается расходным материалом. Если вы часто пользуетесь макбуком без провода,
					на аккумулятор идет большая нагрузка; со временем он начинает разряжаться быстрее, это может
					доставлять большие неудобства. Как выбрать хороший аккумулятор, чтобы он проработал также долго
					как и родной? Энергоемкость самый важный показатель, поэтому в нашем магазине ведется строгий
					контроль качества продукции.
					Обращаем внимание, данный ремонот вы можете выполнить сами. Слева от аккумулятора находится
					фиксатор, который нужно повернуть, чтобы вынуть старую батарею. Это можно сделать обычной монетой.
				</p>
			</div>
		</div>
	</div>
</main>

<? require_once(__DIR__ . '/modules/footer.php'); ?>

</body>
</html>
