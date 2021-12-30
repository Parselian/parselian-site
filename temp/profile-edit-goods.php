<? require_once(__DIR__ . '/modules/header.php') ?>

<main class="container profile-edit-goods">
	<h1 class="inner-page__title profile-edit-goods__page-title">
		Изменение данных о товарах
	</h1>

	<form action="#" method="POST" class="profile-edit-goods__page-form">
		<div class="profile-edit-goods__row">
			<h2 class="profile-edit-goods__title">Выберите тип устройства:</h2>
			<section class="category-devices">
				<input type="hidden" id="selected-device">
				<div class="tile tile_small" data-device="macbook">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#macbook"></use>
					</svg>
					<div class="tile__text">На MacBook</div>
				</div>

				<div class="tile tile_small" data-device="imac">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#imac"></use>
					</svg>
					<div class="tile__text">На iMac</div>
				</div>

				<div class="tile tile_small" data-device="iphone">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#iphone"></use>
					</svg>
					<div class="tile__text">На iPhone</div>
				</div>

				<div class="tile tile_small" data-device="ipad">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#ipad"></use>
					</svg>
					<div class="tile__text">На iPad</div>
				</div>

				<div class="tile tile_small" data-device="apple-watch">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#apple-watch"></use>
					</svg>
					<div class="tile__text">На Watch</div>
				</div>
			</section>
		</div>

		<div class="profile-edit-goods__row">
			<h2 class="profile-edit-goods__title">Выберите тип запчасти:</h2>

			<select name="selected-part" id="selected-part" class="profile-edit-goods__select profile-edit-goods__select_mobile">
				<option disabled selected>Выберите тип запчасти</option>
				<option val="">Аккумулятор</option>
				<option val="">Дисплей</option>
				<option val="">Клавиатура</option>
				<option val="">Зарядное ус-во</option>
			</select>

			<section class="category-parts">
				<input type="hidden" id="selected-part">
				<div class="tile tile_small" data-device="accumulator">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#accumulator"></use>
					</svg>
					<div class="tile__text">Аккумулятор</div>
				</div>

				<div class="tile tile_small" data-device="display">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#display-frame"></use>
					</svg>
					<div class="tile__text">Дисплей</div>
				</div>

				<div class="tile tile_small" data-device="cooling">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#cooling-system"></use>
					</svg>
					<div class="tile__text">Охлаждение</div>
				</div>

				<div class="tile tile_small" data-device="motherboard">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#motherboard"></use>
					</svg>
					<div class="tile__text">Плата</div>
				</div>

				<div class="tile tile_small" data-device="keyboard">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#keyboard"></use>
					</svg>
					<div class="tile__text">Клавиатура</div>
				</div>

				<div class="tile tile_small" data-device="charger">
					<svg class="tile__icon">
						<use xlink:href="./images/stack/sprite.svg#charger"></use>
					</svg>
					<div class="tile__text">зарядные ус-ва</div>
				</div>
			</section>
		</div>

		<div class="profile-edit-goods__row">
			<h2 class="profile-edit-goods__title">Выберите запчасть:</h2>

			<select name="selected-part" id="selected-part" class="profile-edit-goods__select">
				<option val="none" disabled selected>Выберите запчасть</option>
				<option val="1">Аккумулятор MacBook Air B11309</option>
				<option val="2">Аккумулятор MacBook Air B11309</option>
				<option val="3">Аккумулятор MacBook Air B11309</option>
				<option val="4">Аккумулятор MacBook Air B11309</option>
			</select>
				<!--<div class="profile-edit-goods__select">
					<div class="profile-edit-goods__select-input-wrap">
						<div class="profile-edit-goods__select-input" data-part="">Аккумулятор MacBook Air B11309</div>
						<svg class="profile-edit-goods__select-input-icon">
							<use xlink:href="./images/stack/sprite.svg#arrow"></use>
						</svg>
					</div>
					<ul class="profile-edit-goods__select-list">
						<li class="profile-edit-goods__select-list-item" data-val="">Аккумулятор MacBook Air B11309</li>
						<li class="profile-edit-goods__select-list-item" data-val="">Аккумулятор MacBook Air B11309</li>
						<li class="profile-edit-goods__select-list-item" data-val="">Аккумулятор MacBook Air B11309</li>
						<li class="profile-edit-goods__select-list-item" data-val="">Аккумулятор MacBook Air B11309</li>
					</ul>
				</div>-->
		</div>

		<div class="profile-edit-goods__row">
			<img src="./images/macbook-batteries.jpg" alt="" class="profile-edit-goods__img">
		</div>

		<div class="profile-edit-goods__row">
			<div class="profile-edit-goods__row-inputs">
				<div class="profile-edit-goods__input-wrap">
					<label for="old-price" class="form__label profile-edit-goods__label">Текущая цена</label>
					<input id="old-price" type="text" class="form__input profile-edit-goods__input" disabled>
				</div>
				<div class="profile-edit-goods__input-wrap">
					<label for="new-price" class="form__label profile-edit-goods__label">Новая цена</label>
					<input id="new-price" rows="10" type="text" class="form__input profile-edit-goods__input" placeholder="Введите цену">
				</div>
			</div>

			<div class="profile-edit-goods__row-inputs">
				<div class="profile-edit-goods__input-wrap">
					<label for="old-amount" class="form__label profile-edit-goods__label">Текущее кол-во</label>
					<input id="old-amount" type="text" class="form__input profile-edit-goods__input" disabled>
				</div>
				<div class="profile-edit-goods__input-wrap">
					<label for="new-amount" class="form__label profile-edit-goods__label">Новое кол-во</label>
					<input id="new-amount" rows="10" type="text" class="form__input profile-edit-goods__input" placeholder="Введите новое кол-во">
				</div>
			</div>

<!--			<div class="profile-edit-goods__row-inputs profile-edit-goods__row-edit-names">-->
<!--				<div class="profile-edit-goods__input-wrap">-->
<!--					<label for="old-name" class="form__label profile-edit-goods__label">Текущее название</label>-->
<!--					<textarea id="old-name" rows="5" type="text" class="form__textarea profile-edit-goods__input" disabled>Аккумулятор MacBook Air B11922 5000mAh новый</textarea>-->
<!--				</div>-->
<!--				<div class="profile-edit-goods__input-wrap">-->
<!--					<label for="new-name" class="form__label profile-edit-goods__label">Новое название</label>-->
<!--					<textarea id="new-name" rows="5" type="text" class="form__textarea profile-edit-goods__input"-->
<!--							  placeholder="Введите новое название"></textarea>-->
<!--				</div>-->
<!--			</div>-->
		</div>

		<button type="submit" class="form__submit profile-edit-goods__form-button">Обновить данные</button>
	</form>

</main>

<? require_once(__DIR__ . '/modules/footer.php') ?>
</body>
</html>
