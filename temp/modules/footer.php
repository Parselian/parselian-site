<footer class="footer">
	<div class="container footer__row footer__menu">
		<div class="footer__col">
			<div class="footer__col-title">
                Моя учетная запись
                <div class="footer__col-title-icon-wrap">
                    <svg class="footer__col-title-icon">
                        <use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
                    </svg>
                </div>
            </div>
			<ul class="footer__list">
				<li class="footer__list-item">
                    <a href="/sign-in" class="footer__link">Войти</a>
                </li>
				<li class="footer__list-item">
                    <a href="/sign-up" class="footer__link">Создать учетную запись</a>
                </li>
			</ul>
		</div>
		<div class="footer__col">
			<div class="footer__col-title">
                Магазин
                <div class="footer__col-title-icon-wrap">
                    <svg class="footer__col-title-icon">
                        <use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
                    </svg>
                </div>
            </div>
			<ul class="footer__list">
				<li class="footer__list-item">
                    <a href="/about" class="footer__link">О компании</a>
                </li>
				<li class="footer__list-item">
                    <a href="/vozvrat" class="footer__link">Гарантия и возврат</a>
                </li>
				<li class="footer__list-item">
                    <a href="/dostavka" class="footer__link">Оплата и доставка</a>
                </li>
				<li class="footer__list-item">
                    <a href="/privacy-policy" class="footer__link">Политика конфиденциальности</a>
                </li>
			</ul>
		</div>
		<div class="footer__col">
			<div class="footer__col-title">
                Контакты
                <div class="footer__col-title-icon-wrap">
                    <svg class="footer__col-title-icon">
                        <use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
                    </svg>
                </div>
            </div>
			<ul class="footer__list">
				<li class="footer__list-item">
                    г. Санкт-Петербург, Московский пр., д.8
                </li>
				<li class="footer__list-item">
                    <a href="<?= $phone_link?>" class="footer__link"><?= $phone_format?></a> (звонок бесплатный)
                </li>
				<li class="footer__list-item">
                    Без выходных: 9:00 - 23:00
                </li>
				<li class="footer__list-item">
                    <a href="mailto:<?= $email?>" class="footer__link"><?= $email?></a>
                </li>
			</ul>
		</div>
		<div class="footer__col">
			<ul class="footer__list">
				<li class="footer__list-item">
                    <span class="text_bold line-break">Фактический адрес(главный офис и магазин)</span>
                    г. Санкт-Петербург, Московский пр., д.8
                </li>
				<li class="footer__list-item">
                    <span class="line-break"><span class="text_bold">ИП</span> КАКОЙ-ТО ПЧЕЛ</span>
                    <span class="line-break"><span class="text_bold">ИНН</span> 12345678987654321</span>
                    <span class="line-break"><span class="text_bold">ОГРН</span> 12345678987654321</span>
                </li>
			</ul>
		</div>
	</div>

    <div class="footer__misc">
		<div class="container footer__row">
			<div class="footer__copyright">© <?= $company_name?> 2014 - 2021. Все права защищены.</div>
			<div class="footer__billings">
				<svg class="footer__billing">
					<use xlink:href="./images/stack/sprite.svg#visa"></use>
				</svg>
				<svg class="footer__billing">
					<use xlink:href="./images/stack/sprite.svg#mastercard"></use>
				</svg>
				<svg class="footer__billing">
					<use xlink:href="./images/stack/sprite.svg#maestro"></use>
				</svg>
				<svg class="footer__billing">
					<use xlink:href="./images/stack/sprite.svg#cash"></use>
				</svg>
			</div>
		</div>
    </div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="./configs/script.js"></script>