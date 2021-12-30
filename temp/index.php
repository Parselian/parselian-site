<?
	require_once(__DIR__ . '/modules/header.php');
	require_once(__DIR__ . '/configs/db-cfg.php');
?>

<main class="container">
	<div class="tile tile_big promo">
		<h1 class="page__title tile__title">Запчасти для всех устройств Apple</h1>
		<picture>
			<img src="./images/index-promo-tile-bg.png" alt="запчасти Apple" class="tile__bg">
			<source srcset="./images/webp/index-promo-tile-bg.webp" type="image/webp">
		</picture>
	</div>

    <section class="category-devices">
		<?
			$link = mysqli_connect($host, $username, $password, $database)
				or die('Error! ' . mysqli_error($link));
			$query = "SELECT * FROM DEVICE_GROUP";
			$result = mysqli_query($link, $query)
				or die('Error! ' . mysqli_error($link));

			if ($result)
			{
				for ($i = 0; $i < mysqli_num_rows($result); ++$i)
				{
					$row = mysqli_fetch_row($result);
					 /*
					  * $row[0] - device_group_id
					  * $row[1] - device_group_url
					  * $row[2] - device_group_name
					 */

					?>
						<a href="/<?echo $row[1]?>" class="tile tile_small" data-device="<?echo $row[1]?>">
							<svg class="tile__icon">
								<use xlink:href="./images/stack/sprite.svg#<?echo $row[1]?>"></use>
							</svg>
							<span class="tile__text">На <?echo $row[2]?></span>
						</a>
					<?
				}
			}
			mysqli_close($link);
		?>
	</section>

    <section class="category-common-parts">
		<a href="/macbook/macbook-batteries" class="tile tile_medium">
			<picture>
				<source srcset="./images/webp/macbook-batteries.webp" type="image/webp">
				<img src="./images/macbook-batteries.jpg" alt="Аккумуляторы на MacBook"
					 class="tile__bg">
			</picture>
			<span class="tile__title">Аккумуляторы на MacBook</span>
		</a>

		<a href="/iphone/iphone-batteries" class="tile tile_medium">
			<picture>
				<source srcset="./images/webp/iphone-batteries.webp" type="image/webp">
				<img src="./images/iphone-batteries.jpg" alt="Аккумуляторы на iPhone"
					 class="tile__bg">
			</picture>
			<span class="tile__title">Аккумуляторы на iPhone</span>
		</a>

		<a href="/ipad/ipad-batteries" class="tile tile_medium">
			<picture>
				<source srcset="./images/webp/ipad-batteries.webp" type="image/webp">
				<img src="./images/ipad-batteries.jpg" alt="Аккумуляторы на iPad"
					 class="tile__bg">
			</picture>
			<span class="tile__title">Аккумуляторы на iPad</span>
		</a>

		<a href="/watch/watch-batteries" class="tile tile_medium">
			<picture>
				<source srcset="./images/webp/watch-batteries.webp" type="image/webp">
				<img src="./images/watch-batteries.webp" alt=" Дисплеи на iPhone"
				class="tile__bg">
			</picture>
			<span class="tile__title">Аккумуляторы на Watch</span>
		</a>
	</section>

	<section class="about">
		<h2 class="title"><?= $company_name ?> - магазин запчастей Apple</h2>
		<p class="text">Интернет-магазин <?= $company_name ?> - крупная торговая площадка,
			специализирующаяся на продаже запчастей Apple. У нас вы сможете приобрести детали для
			MacBook, iMac, iPhone, iPad и другой техники Apple.</p>

		<h3 class="about__title">Запчасти для техники Apple</h3>
		<p class="text">Техника Apple сейчас очень популярна, поэтому и интернет-магазинов с запчастями для
			нее существует очень много. Тогда почему среди такого разнообразия стоит выбрать именно нас?</p>
		<div class="text">Причин несколько:</div>
		<ul class="list">
			<li class="list__item">у магазина самый крупный ассортимент оригинальных деталей для техники
				Apple, у нас вы точно найдете нужную запчасть для своего устройства;</li>
			<li class="list__item">мы предлагаем как оригинальные детали, так и практически ничем не
				отличимые от оригинала копии. Мы честно заявляем качество - наши изделия проходят технические
				проверки, чтобы на выходе мы могли быть уверены, что они точно подружатся с вашей техникой;</li>
			<li class="list__item">цены в <?= $company_name?> - доступные, наценки на представленный товар
				практически нет;</li>
			<li class="list__item">для оптовых клиентов мы предлагаем выгодные условия приобретения,
				сниженные цены, а также внутренние акции.</li>
		</ul>

		<h3 class="title">Как организована доставка</h3>
		<div class="text">Если вы находитесь в Санкт-Петербурге, получить свой заказ можно следующими
			способами:</div>
		<ul class="list">
			<li class="list__item">забрать в одном из пунктов самовывоза;</li>
			<li class="list__item">заказать курьерскую доставку по СПб.</li>
		</ul>

		<p class="text">А если запчасти нужны очень срочно, но возможности подъехатть на пункт самовывоза
			нет? В таком случае вы можете заказать сверхсрочную доставку в пределах СПб, согласно которой заказ
			доставляется в течение всего 2-х часов.
		</p>
		<p class="text">Купить запчасти Apple можно находясь в лубом регионе России и стран СНГ. На стоимость
			доставки влияет отдаленность места назначения и вес посылки. Для уточнения стоимости доставки следует
			написать нам на email или позвонить по телефону <a href="$phone_link" class="about__phone"><?=$phone_format?></a>
		</p>
	</section>
</main>

<? require_once(__DIR__ . '/modules/footer.php'); ?>
</body>
</html>