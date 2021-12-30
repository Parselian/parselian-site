$(document).ready(function () {

  $('.goods-card__button, .header-contacts__button, .contacts-block__button').on("click", function () {
    $('.overlay').show();
  });

  $('.popup__close').on("click", function () {
    $('.overlay').hide();
  });

});

/* MASKED-INPUT */
jQuery(function ($) {
  $(".popup-form__input").mask("+7 (999) 999-9999");
  $(".main-form__input").mask("+7 (999) 999-9999");
  $(".mobile-form__input").mask("+7 (999) 999-9999");
});

$(document).ready(function () {
  var link = $('.header-logo__menu');
  var link_active = $('.header-logo__active');
  var menu = $('.burger-menu');
  var nav_link = $('.burger-menu a')

  link.click(function () {
    link.toggleClass('header-logo__active');
    menu.toggleClass('burger-menu_active');
  });
  nav_link.click(function () {
    link.toggleClass('header-logo__active');
    menu.toggleClass('burger-menu_active');
  });
});
new WOW().init();

$('.production-slider_top').slick({
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.production-slider_bottom',
  responsive: [{
    breakpoint: 768,
    settings: {
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
      nextArrow: '<div class="slider-arrow slider-arrow_right"></div>'
    },

    breakpoint: 576,
    settings: {
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
      nextArrow: '<div class="slider-arrow slider-arrow_right"></div>'
    },
  }, ]
});

$('.production-slider_bottom').slick({
  arrows: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_left"></div>',
  nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_right"></div>',
  asNavFor: '.production-slider_top',
});

$('.feedback-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: '<div class="slider-arrow slider-arrow_feed slider-arrow_left"></div>',
  nextArrow: '<div class="slider-arrow slider-arrow_feed slider-arrow_right"></div>',
  responsive: [{
    breakpoint: 991,
    settings: {
      arrows: true,
      slidesToShow: 2,
    },
  }, {
    breakpoint: 769,
    settings: {
      slidesToShow: 1,
    },
  }, ]
});

ymaps.ready(function () {
  var myMap = new ymaps.Map('map', {
    center: [54.752656, 56.002053],
    zoom: 17
  }, {
    searchControlProvider: 'yandex#search'
  });

  myMap.behaviors.disable('scrollZoom'),

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    ),
    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      hintContent: 'Добрый картон',
      balloonContent: 'Добрый картон'
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image',
      // Своё изображение иконки метки.
      iconImageHref: 'img/pin.png',
      // Размеры метки.
      iconImageSize: [30, 30],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-15, -30]
    });

  myMap.geoObjects
    .add(myPlacemark)
    .add(myPlacemarkWithContent);
});
