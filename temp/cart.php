<? require_once(__DIR__ . '/modules/header.php') ?>

<main class="container">
	<form class="cart">
		<h1 class="inner-page__title">Содержание корзины</h1>
		<table class="cart__goods">
			<thead>
			<tr>
				<th>Товар</th>
				<th></th>
				<th>Цена за ед.</th>
				<th>Кол-во</th>
				<th>Итого</th>
			</tr>
			</thead>

			<tbody>
				<tr>
					<td>
						<div class="cart__goods-item-label">Товар</div>
						<picture>
							<source srcset="./images/webp/keyboard-macbook-a1181.webp" type="images/webp">
							<img src="./images/keyboard-macbook-a1181.jpg" alt="" class="cart__goods-item-img">
						</picture>
					</td>
					<td>
						<a href="#" class="cart__goods-item-title">
							Аккумулятор Apple Watch Series 1 [42mm] / оригинал
							<svg class="cart__goods-item-delete">
								<use xlink:href="./images/stack/sprite.svg#remove"></use>
							</svg>
						</a>
						<div class="cart__goods-item-vendor">
							Артикул: <span class="cart__goods-vendor-num">003645</span>
						</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Цена за ед.</div>
						<div class="cart__goods-price">320 Р</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Кол-во</div>
						<div class="amount-input__wrap cart__goods-item-amount">
							<input type="text" value="1" class="amount-input">
							<span class="amount-input__inc">+</span>
							<span class="amount-input__dec">-</span>
						</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Итого</div>
						320 Р
					</td>
						</tr>
				<tr>
					<td>
						<div class="cart__goods-item-label">Товар</div>
						<picture>
							<source srcset="./images/webp/keyboard-macbook-a1181.webp" type="images/webp">
							<img src="./images/keyboard-macbook-a1181.jpg" alt="" class="cart__goods-item-img">
						</picture>
					</td>
					<td>
						<a href="#" class="cart__goods-item-title">
							Аккумулятор Apple Watch Series 1 [42mm] / оригинал
							<svg class="cart__goods-item-delete">
								<use xlink:href="./images/stack/sprite.svg#remove"></use>
							</svg>
						</a>
						<div class="cart__goods-item-vendor">
							Артикул: <span class="cart__goods-vendor-num">003645</span>
						</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Цена за ед.</div>
						<div class="cart__goods-price">320 Р</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Кол-во</div>
						<div class="amount-input__wrap cart__goods-item-amount">
							<input type="text" value="1" class="amount-input">
							<span class="amount-input__inc">+</span>
							<span class="amount-input__dec">-</span>
						</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Итого</div>
						320 Р
					</td>
				</tr>
				<tr>
					<td>
						<div class="cart__goods-item-label">Товар</div>
						<picture>
							<source srcset="./images/webp/keyboard-macbook-a1181.webp" type="images/webp">
							<img src="./images/keyboard-macbook-a1181.jpg" alt="" class="cart__goods-item-img">
						</picture>
					</td>
					<td>
						<a href="#" class="cart__goods-item-title">
							Аккумулятор Apple Watch Series 1 [42mm] / оригинал
							<svg class="cart__goods-item-delete">
								<use xlink:href="./images/stack/sprite.svg#remove"></use>
							</svg>
						</a>
						<div class="cart__goods-item-vendor">
							Артикул: <span class="cart__goods-vendor-num">003645</span>
						</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Цена за ед.</div>
						<div class="cart__goods-price">320 Р</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Кол-во</div>
						<div class="amount-input__wrap cart__goods-item-amount">
							<input type="text" value="1" class="amount-input">
							<span class="amount-input__inc">+</span>
							<span class="amount-input__dec">-</span>
						</div>
					</td>
					<td>
						<div class="cart__goods-item-label">Итого</div>
						320 Р
					</td>
				</tr>
			</tbody>
		</table>

		<div class="cart-total">
			<ul class="cart-total__statistics">
				<li class="cart-total__statistics-item">
					<span class="cart-total__statistics-item-title">Сумма</span>
					<span class="cart-total__statistics-item-val">320 Р</span>
				</li>
				<li class="cart-total__statistics-item">
					<span class="cart-total__statistics-item-title">Самовывоз</span>
					<span class="cart-total__statistics-item-val">0 Р</span>
				</li>
				<li class="cart-total__statistics-item">
					<span class="cart-total__statistics-item-title">Итоговая стоимость</span>
					<span class="cart-total__statistics-item-val">320 Р</span>
				</li>
			</ul>
		</div>

		<div class="cart__controls">
			<div class="cart__controls-col">
				<a class="cart__controls-btn cart__controls-btn_continue">Продолжить покупки</a>
				<button class="cart__controls-btn cart__controls-btn_clear">Очистить корзину</button>
			</div>
			<div class="cart__controls-col">
				<button class="cart__controls-btn cart__controls-btn_now">Купить в 1 клик</button>
				<a href="#" class="cart__controls-btn cart__controls-btn_order">Оформить заказ</a>
			</div>
		</div>
	</form>
</main>

<? require_once(__DIR__ . '/modules/footer.php') ?>
</body>
</html>