  window.addEventListener('DOMContentLoaded', () => {
    const disablePreloader = () => {
      setTimeout(() => {
        document.querySelector('.preloader').classList.remove('preloader_visible');
      }, 1000);
    };
    disablePreloader();
  });
  
  // Popups interactive
  $('.header-contacts_button').on('click', function() {
    $('.call-popup').css({display: 'block'});
    $('body').css({overflow: 'hidden'});
  });
  
  $('.header-text_button, .locations-text_button').on('click', function() {
    $('.quick-request').css({display: 'block'});
    $('body').css({overflow: 'hidden'});
  });
  
  $('.section-popup-block__close, .thanks-popup-block__button').on('click', function() {
    $('.section-popup').css({display: 'none'});
    $('body').css({overflow: 'visible'});
  });
  
  $('.thanks-popup-block__button').on('click', function() {
    $('.section-popup').css({display: 'none'});
  });
  
  // Menu interactive
  
  $('.services-burger').on('click', function() {
    if ($('.section-hamburger-menu').css('left') == "-1000px") {
      $('.section-hamburger-menu').css({left: '0'});
    } else if ($('.section-hamburger-menu').css('left') == "0px") {
      $('.section-hamburger-menu').css({left: '-1000px'});
    }
  });

  // Phone mask
  
  $('.section-popup-input__phone').mask('+7 (999) 999 99-99');
  
  // AJAX
  
  $('form').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      data: $(this).serialize()
    }).done(function() {
      $(this).find("input").val("");
      $('.thanks-popup').css({display: 'block'});
      $('body').css({overflow: 'hidden'});
      $("form").trigger("reset");
    });
    return false;
  });

  // Sliders

  $('.header-backgrounds').slick({
    dots: true,
    infinity: true,
    fade: true,
    cssEase: 'linear',
    arrows: true,
    prevArrow: '<div class="slider-arrow slider-arrow__left"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow__right"></div>',
    responsive: [
      {
        breakpoint: 991,
        settings: {
          dots: false,
          arrows: false,
          autoplay: true, 
          autoplaySpeed: 3000,
        }
      },
    {
      breakpoint: 768,
      settings: {
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
      }
    },
  ]
  });
  
  $('.locations-backgrounds').slick({
    dots: false,
    infinity: true,
    fade: true,
    cssEase: 'linear',
    arrows: true,
    prevArrow: '<div class="slider-arrow slider-arrow__left"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow__right"></div>',
    responsive: [
      {
        breakpoint: 991,
        settings: {
          arrows: false,
          autoplay: true, 
          autoplaySpeed: 3000,
        }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
      }
    },
  ]
  });

  // WOW activate

  new WOW().init();

  window.addEventListener('scroll', () => {
    let fired = false;
    if (fired === false) {
      fired = true;

      setTimeout(() => {
        // Здесь все эти тормознутые трекеры, чаты и прочая ересь,
        // без которой жить не может отдел маркетинга, и которые
        // дико бесят разработчиков, когда тот же маркетинг приходит
        // с вопросом "почему сайт медленно грузится, нам гугл сказал"
        

        // Metrika

        (function (m, e, t, r, i, k, a) {
          m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
          };
          m[i].l = 1 * new Date();
          k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

        ym(52696405, "init", {
          clickmap: true,
          trackLinks: true,
          accurateTrackBounce: true,
          webvisor: true,
          trackHash: true
        });
      }, 1000);
    }
  });
  
  