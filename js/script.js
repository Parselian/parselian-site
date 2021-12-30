$(window).load(function () {
	/* Preloader */
	$(".preloader").delay(1000).removeClass('show');
	$('body').css('overflow-y', 'auto');

	/* filtration portfolio works */
	let mixer = mixitup('.portfolio-works', {
		animation: {
            effectsIn: 'fade translateY(-100%)',
            effectsOut: 'fade translateY(-100%)'
        }
	});

	/* send forms without reloading page */
	$('form').submit(function (event) {
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "mailer/smart.php",
			data: $(this).serialize()
		}).done(function () {
			$(this).find("input").val("");
			$('.popup-thanks').addClass('show');
			$("form").trigger("reset");
		});
		return false;
	});

	/* Slick reviews settings */
	$('.reviews-wrap').slick({
		arrows: false,
		dots: true
	});

	/* Burger-button settings */
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function () {
		$(this).toggleClass('open');
		$('.navbar-menu').toggleClass('show');
	});

	/* maskedInput */
	$("input[name='user_phone']").mask("(999) 999-9999");

	/* smooth srcoll for links */
	let $page = $('html, body');
	$('a[href*="#"]').click(function () {
		$page.animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 1000);
		$('.navbar-menu').removeClass('show');
		$('.navbar-burger').removeClass('open');
		return false;
	});

	/* open popups*/
	$('#help-button').click(function () {
		$('.popup-help').addClass('show');
	});
	$('#order-button').click(function () {
		$('.popup-order').addClass('show');
	});

	/* close popups */
	$('.popup-close').click(function () {
		$('.popup').removeClass('show');
	});
	$('.popup-close-button').click(function () {
		$('.popup').removeClass('show');
	});

	/* destroy video on mobile screens */
		if ($(window).width() < '993') {
			let instance = $('header').data('vide');
			instance.destroy();
			$('.header-fullbg').css('display', 'block');
		}

	/* Calculator */
	let btn = document.querySelector('.calculator-cost__button'),
		inputs = document.querySelectorAll('.calculator-main__input'),

		commonInput = document.querySelector('#common'),
		hardInput = document.querySelector('#hard'),
		interactiveInput = document.querySelector('#interactive'),
		slidersInput = document.querySelector('#sliders'),
		modalsInput = document.querySelector('#modals'),
		formsInput = document.querySelector('#forms'),

		switches = document.querySelectorAll('.calculator-additional__input > input'),
		adaptiveTablets = document.querySelector('#ckbx-style-8-1'),
		adaptiveSmartphones = document.querySelector('#ckbx-style-8-2'),
		YandexCounter = document.querySelector('#ckbx-style-8-3'),
		GoogleCounter = document.querySelector('#ckbx-style-8-4'),
		sendingForms = document.querySelector('#ckbx-style-8-5'),
		total = 0,
		costField = document.querySelector('.calculator-cost__field');

	btn.addEventListener('click', function() {

		inputs.forEach(function(item) {
			let currentItem = item,
				prosecutorial = 0;

			prosecutorial += Number(item.value);

			switch (currentItem) {
				case commonInput:
					total += prosecutorial * 300;
					break;
				case hardInput:
					total += prosecutorial * 500;
					break;
				case interactiveInput:
					total += prosecutorial * 600;
					break;
				case slidersInput:
					total += prosecutorial * 300;
					break;
				case modalsInput:
					total += prosecutorial * 200;
					break;
				case formsInput:
					total += prosecutorial * 100;
					break;
			}
			prosecutorial = 0;
		});

		let prosecutorial = total;

		if (total > 0 && adaptiveTablets.checked) {
			total += prosecutorial * 0.1;
		}
		if (total > 0 && adaptiveSmartphones.checked) {
			total += prosecutorial * 0.2;
		}
		if (total > 0 && YandexCounter.checked) {
			total += 300;
		}
		if (total > 0 && GoogleCounter.checked) {
			total += 400;
		}
		if (total > 0 && sendingForms.checked) {
			total += 200;
		}

		costField.textContent = total + ' руб.';
		total = 0;
	});
});