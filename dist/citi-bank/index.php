<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./assets/css/reset.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>Citi Bank</title>
</head>
<body>
<section class="promo">
	<div class="container promo__wrap">
		<div class="promo__info">
			<h1 class="promo__title">Banner header</h1>
			<div class="promo__subtitle">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur deserunt doloribus et
				expedita fugit, illo iste iusto minus mollitia, nisi, nostrum perspiciatis porro ratione tempora totam unde veritatis
				voluptatum.
			</div>
		</div>
		<form id="promo-form" action="#" method="POST" class="form promo__form">
			<h3 class="form__title">Request form</h3>

			<div class="form__input-wrap">
				<label for="promo-form-email" class="form__input-label">Enter your E-Mail</label>
				<input id="promo-form-email" type="text" name="user_email" class="form__input" >
				<svg class="form__input-icon">
					<use xlink:href="./assets/stack/sprite.svg#cross"></use>
				</svg>
			</div>

			<div class="form__input-wrap">
				<label for="promo-form-name" class="form__input-label">Enter your name</label>
				<input id="promo-form-name" type="text" name="user_name" class="form__input" >
				<svg class="form__input-icon">
					<use xlink:href="./assets/stack/sprite.svg#cross"></use>
				</svg>
			</div>

			<div class="form__select-wrap">
				<select name="user_country" id="promo-form-country" class="form__select" >
					<option value="" disabled selected>Select your country</option>
					<option value="Canada">Canada</option>
					<option value="Czech Republic">Czech Republic</option>
					<option value="Russia">Russia</option>
				</select>
				<svg class="form__select-icon">
					<use xlink:href="./assets/stack/sprite.svg#triangle"></use>
				</svg>
			</div>

			<div class="form__checkbox-wrap">
				<input id="promo-form-policy" type="checkbox" name="privacy_check" class="form__checkbox" >
				<label for="promo-form-policy" class="form__checkbox-text">I agree with Terms & Conditions</label>
			</div>

			<div class="form__buttons promo__form-buttons">
				<button class="button form__button">Submit</button>
				<a href="#" class="button button_alt form__link">Hyperlink</a>
			</div>
		</form>

		<picture>
			<source srcset="./assets/images/webp/promo-bg.webp" type="image/webp">
			<img class="promo__bg" src="./assets/images/promo-bg.jpg" alt="Credit card">
		</picture>
	</div>
</section>

<section class="posts">
	<div class="container posts__wrap">
		<div class="posts__card posts__card_sm">
			<div class="posts__card-info">
				<h3 class="posts__card-title">
					Post header 1
					<svg class="posts__card-title-icon">
						<use xlink:href="./assets/stack/sprite.svg#posts-card-icon"></use>
					</svg>
				</h3>
				<p class="posts__card-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cumque dolor expedita explicabo, hic itaque labore
					laborum
					magni maiores nostrum optio pariatur quam, qui quidem quod rem reprehenderit, unde voluptate?
				</p>
			</div>
			<picture>
				<source srcset="./assets/images/webp/post-card-img_1.webp" type="image/webp">
				<img src="./assets/images/post-card-img_1.jpg" alt="credit card" class="posts__card-bg">
			</picture>
		</div>
		<div class="posts__card posts__card_sm">
			<div class="posts__card-info">
				<h3 class="posts__card-title">
					Post header 2
					<svg class="posts__card-title-icon">
						<use xlink:href="./assets/stack/sprite.svg#posts-card-icon"></use>
					</svg>
				</h3>
				<p class="posts__card-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cumque dolor expedita explicabo, hic itaque labore
					laborum
					magni maiores nostrum optio pariatur quam, qui quidem quod rem reprehenderit, unde voluptate?
				</p>
			</div>
			<picture>
				<source srcset="./assets/images/webp/post-card-img_2.webp" type="image/webp">
				<img src="./assets/images/post-card-img_2.jpg" alt="credit card" class="posts__card-bg">
			</picture>
		</div>
		<div class="posts__card posts__card_sm">
			<div class="posts__card-info">
				<h3 class="posts__card-title">
					Post header 3
					<svg class="posts__card-title-icon">
						<use xlink:href="./assets/stack/sprite.svg#posts-card-icon"></use>
					</svg>
				</h3>
				<p class="posts__card-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cumque dolor expedita explicabo, hic itaque labore
					laborum
					magni maiores nostrum optio pariatur quam, qui quidem quod rem reprehenderit, unde voluptate?
				</p>
			</div>
			<picture>
				<source srcset="./assets/images/webp/post-card-img_3.webp" type="image/webp">
				<img src="./assets/images/post-card-img_3.jpg" alt="credit card" class="posts__card-bg">
			</picture>
		</div>
		<div class="posts__card posts__card_md">
			<div class="posts__card-info">
				<h3 class="posts__card-title">
					Post header 4
					<svg class="posts__card-title-icon">
						<use xlink:href="./assets/stack/sprite.svg#posts-card-icon"></use>
					</svg>
				</h3>
				<p class="posts__card-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cumque dolor expedita explicabo, hic itaque labore
					laborum
					magni maiores nostrum optio pariatur quam, qui quidem quod rem reprehenderit, unde voluptate?
				</p>
			</div>
			<picture>
				<source srcset="./assets/images/webp/post-card-img_4.webp" type="image/webp">
				<img src="./assets/images/post-card-img_4.jpg" alt="credit card" class="posts__card-bg">
			</picture>
		</div>
		<div class="posts__card posts__card_md">
			<div class="posts__card-info">
				<h3 class="posts__card-title">
					Post header 5
					<svg class="posts__card-title-icon">
						<use xlink:href="./assets/stack/sprite.svg#posts-card-icon"></use>
					</svg>
				</h3>
				<p class="posts__card-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cumque dolor expedita explicabo, hic itaque labore
					laborum
					magni maiores nostrum optio pariatur quam, qui quidem quod rem reprehenderit, unde voluptate?
				</p>
			</div>
			<picture>
				<source srcset="./assets/images/webp/post-card-img_5.webp" type="image/webp">
				<img src="./assets/images/post-card-img_5.jpg" alt="credit card" class="posts__card-bg">
			</picture>
		</div>
	</div>
</section>

<section class="steps">
	<div class="container steps__wrap">
		<picture>
			<source srcset="./assets/images/webp/imac.webp" type="image/webp">
			<img class="steps__img" src="./assets/images/imac.png" alt="iMac">
		</picture>
		<div class="steps__info">
			<h2 class="steps__title">Title text</h2>
			<ul class="steps__list">
				<li class="steps__list-item">
					<div class="steps__list-item-icon">1</div>
					<span class="steps__list-item-text">
						Duis aute irure dolor in reprehenderit<sup>1</sup> in voluptate velit
					</span>
				</li>
				<li class="steps__list-item">
					<div class="steps__list-item-icon">2</div>
					<span class="steps__list-item-text">
						Ullamco laboris nisi ut aliquip ex ea commodo consequat
					</span>
				</li>
				<li class="steps__list-item">
					<div class="steps__list-item-icon">3</div>
					<span class="steps__list-item-text">
						Ut enim ad minim veniam, quis nostrud exercitation
					</span>
				</li>
				<li class="steps__list-item">
					<div class="steps__list-item-icon">4</div>
					<span class="steps__list-item-text">
						Et dolore magna aliqua
					</span>
				</li>
				<li class="steps__list-item">
					<div class="steps__list-item-icon">5</div>
					<span class="steps__list-item-text">
						Sed do eiusmod tempor<sup>2</sup> incididunt ut labore
					</span>
				</li>
				<li class="steps__list-item">
					<div class="steps__list-item-icon">6</div>
					<span class="steps__list-item-text">
						Lorem ipsum dolor sit amet<sup>3</sup> consectetur adipisicing elit
					</span>
				</li>
			</ul>
		</div>
	</div>
</section>

<footer class="footer">
	<div class="container footer__wrap">
		<ul class="footer__list">
			<li class="footer__list-item">
				<sup>1</sup> Reprehenderit - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
				labore
			</li>
			<li class="footer__list-item">
				<sup>2</sup> Tempor - Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</li>
			<li class="footer__list-item">
				<sup>3</sup> Amet - Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
			</li>
		</ul>
	</div>
</footer>

<div class="popup popup_hidden">
	<div class="popup-block">
		<h3 class="popup-block__title">External link</h3>
		<svg class="popup-block__close">
			<use xlink:href="./assets/stack/sprite.svg#close"></use>
		</svg>
		<p class="popup-block__text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
			enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
			in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
			sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
			accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
		</p>
		<div class="popup-block__buttons">
			<button class="button button_alt popup-block__button">Cancel</button>
			<button class="button popup-block__button">Accept</button>
		</div>
	</div>
</div>

<script src="./assets/js/script.js"></script>
</body>
</html>