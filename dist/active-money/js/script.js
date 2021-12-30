$(document).ready(function(){
  $('.header-contacts__button, .main-text__button, .features-button, .reservation-button, .service-block__button, .contacts-block__button, .footer-contacts__button').on('click', function(){
    $('.overlay').css({'display': 'flex'});
  });
  $('.popup-close, .thanks-close').on('click', function(){
    $('.overlay, .wrap').css({'display': 'none'});
  });

  var link = $('.header-title__burger');
  var link_active = $('.header-title__active');
  var menu = $('.burger-menu');
  var nav_link = $('.burger-menu a');

  link.click(function(){
    link.toggleClass('header-title__active');
    menu.toggleClass('burger-menu__active');
  });
  nav_link.click(function () {
    link.toggleClass('header-title__active');
    menu.toggleClass('burger-menu__active');
  });

  $('.main-arrow').on('click', function (e) {
    $('html,body').stop().animate({
      scrollTop: $('#aboutUs').offset().top
    }, 1000);
    e.preventDefault();
  });

  $('#certificate').on('click', function (){
    $('.wrapper-сertificate__close').css({'display': 'block'});
    $('.wrapper').css({'display': 'flex' });
    return false;
  });

  $('.wrapper-сertificate__close').click(function () {
    $(".wrapper").css({'display': 'none' });
    $('.wrapper-сertificate__close').css({ 'display': 'none' });
  });

  jQuery(function($){
    $(".main-form__input-phone").mask("+7 (999) 999-99-99");
    $(".questions-form__input_phone").mask("+7 (999) 999-99-99");
    $(".popup-form__input-phone").mask("+7 (999) 999-99-99");
  });

  $('form').submit(function (event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      data: $(this).serialize()
    }).done(function () {
      $(this).find("input").val("");
      $(".wrap").css({'display': 'flex'});
      $("form").trigger("reset");
    });
    return false;
  });

  new WOW().init();
});


$('.feedback-slider__top').slick({
  arrows: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.feedback-slider__bottom',
  prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
  nextArrow: '<div class="slider-arrow slider-arrow_right"></div>',
});

$('.feedback-slider__bottom').slick({
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.feedback-slider__top',
  prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
  nextArrow: '<div class="slider-arrow slider-arrow_right"></div>',
});

window.addEventListener('scroll', () => {
  var fired = false;
  if (fired === false) {
    fired = true;

    setTimeout(() => {
      // Здесь все эти тормознутые трекеры, чаты и прочая ересь,
      // без которой жить не может отдел маркетинга, и которые
      // дико бесят разработчиков, когда тот же маркетинг приходит
      // с вопросом "почему сайт медленно грузится, нам гугл сказал"
      

      // Metrika

      (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
          try {
            w.yaCounter50820922 = new Ya.Metrika2({
              id: 50820922,
              clickmap: true,
              trackLinks: true,
              accurateTrackBounce: true,
              webvisor: true,
              trackHash: true,
              ut: "noindex",
              ecommerce: "dataLayer"
            });
          } catch (e) {}
        });
        var n = d.getElementsByTagName("script")[0],
          s = d.createElement("script"),
          f = function () {
            n.parentNode.insertBefore(s, n);
          };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";
        if (w.opera == "[object Opera]") {
          d.addEventListener("DOMContentLoaded", f, false);
        } else {
          f();
        }
      })(document, window, "yandex_metrika_callbacks2");
    }, 1000);
  }
});
