$(document).ready(() => {

  /* AJAX */
  $('form').submit(function(event) {
    event.preventDefault();

    const userName = $(this).find('[name="user-name"]').val(),
          userPhone = $(this).find('[name="user-phone"]').val(),
          userGift = $(this).find('[name="user_gift"]:checked').val();

    $.ajax({
      url: './mail.php',
      data: {
        user_name: userName,
        user_phone: userPhone,
        user_gift: userGift
      },
      method: 'POST',
      success: () => {
        $('.popup-thanks').fadeIn(300);
        $('.popup-thanks').addClass('popup_open');
        $('form input[type="text"]').val('');
        return;
      }
    });
  });

  const toggleBurger = () => {
    $('.burger-btn').on('click', function() {
      $('.burger-btn').toggleClass('active');
      $('.burger-btn').toggleClass('not-active');
      if ($('.burger-btn').hasClass('active')) {
        $('.burger-menu').slideDown()
      } else {
        $('.burger-menu').slideUp()
      }
    });
  };

  const smoothScroll = () => {
    $('a[href^="#"]').click(function () {
      const link = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(link).offset().top
      }, 700);

      if ($(this).parents().hasClass('burger-menu')) {
        $('.burger-menu').slideUp();
        $('.burger-btn').toggleClass('active');
        $('.burger-btn').toggleClass('not-active');
      }
      return false;
    });

    $('.mouse-scroll').click(function() {
      const link = $(this).attr('href');
      $('html, body').animation({
        scrollTop: $(link).offset().top
      })
    })
  };

  /* PRICELIST FUNCTIONALITY */
  const togglePricesItems = (selectDevicesVal = $('.prices__models').val()) => {
    const pricesItems = $('.prices__list-item');
    console.log(selectDevicesVal);
    excerptPriceList();
    $('.prices__controls-more').text('Показать больше');

    pricesItems.each(function() {
      $(this).removeClass('prices__list-item_active');
      
      if ($(this).attr('data-device') === selectDevicesVal) {
        $(this).addClass('prices__list-item_active');
      }
    });

    unfoldPriceList(); 
  };

  const showPricesSeparator = () => {
    $('.prices__list-item-name').each(function() {
      if ($(this).text().length > 37) {
        // $(this).css({'z-index': 0});
        // $(this).parent().css({'align-items': 'flex-end'});
      }
    })
  };

  const excerptPriceList = (slideUpOptions = 300) => {
    const showedPriceItems = $('.prices__list-item_active');

    $('.prices__controls-more').css({'display': 'none'});

    showedPriceItems.each(function(index) {
      if (index > 5) {
        $(this).removeClass('prices__list-item_active');
        $(this).slideUp(slideUpOptions);
        $('.prices__controls-more').css({'display': 'block'});
      }
    });
  };

  const unfoldPriceList = () => {
    $('.prices__controls-more').click(function() {
      const activeAttr = $('.prices__list-item_active').attr('data-device');

      if ($('.prices__controls-more').text() === 'Свернуть') {
        $('.prices__controls-more').text('Показать больше');
        excerptPriceList();
        return;
      }

      $('.prices__list-item').each(function() {
        if ($(this).attr('data-device') === activeAttr && !$(this).hasClass('prices__list-item_active')) {
          $(this).slideDown(300);
          $(this).addClass('prices__list-item_active');
          $('.prices__controls-more').text('Свернуть');
        }
      }); 
    }); 
  };

  const toggleSelects = (selectedGroup = 'iphone') => {
    $('.prices__models-wrapper').each(function() {
        // $(this).css({'display': 'none'});
        $(this).hide();
        // $(this).find('.prices__models').val('none')

        if ($(this).attr('data-group') === selectedGroup) {
          // $(this).css({'display': 'block'});
          $(this).show();
        } 
    });
  };

  const togglePricelistImg = (group = 'iphone') => {
    const selectVal = $(`.prices__models-wrapper[data-group="${group}"] .prices__models`).val();

    $('.prices__device-img').each(function() {
      $(this).removeClass('prices__device-img_visible');

      if ($(this).attr('data-device') === selectVal) {
        $(this).addClass('prices__device-img_visible');
      }
    });
  };



  /* SLIDER INIT */
  $('.faq__blocks').slick({
    dots: false,
    arrows: true,
    autoplay: true,
    slidesToShow: 1,
    // prevArrow: '<svg class="slick-arrow slick-prev"><use xlink:href="./images/symbol/sprite.svg#arrow"></use></svg>',
    // nextArrow: '<svg class="slick-arrow slick-next"><use xlink:href="./images/symbol/sprite.svg#arrow"></use></svg>',
    prevArrow: '<img class="slick-arrow slick-prev team__certificates-slider-arrow-prev" src="./images/svg/certificates__slider-arrow.svg">',
    nextArrow: '<img class="slick-arrow slick-next team__certificates-slider-arrow-next" src="./images/svg/certificates__slider-arrow.svg">',

    responsive: [
      {
        breakpoint: 576,
        settings: {
          autoplay: false,
          autoplaySpeed: 5000,
          adaptiveHeight: true,
          // arrows: false,
          prevArrow: '<img class="slick-arrow slick-prev team__certificates-slider-arrow-prev" src="./images/svg/faq-mobile-arrow.svg">',
          nextArrow: '<img class="slick-arrow slick-next team__certificates-slider-arrow-next" src="./images/svg/faq-mobile-arrow.svg">',
        }
      }
    ]
  });
  
  if($(window).width() < 768) {
    $('.promo__features').slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 1000,
      slidesToShow: 2,
      infinite: true,
      responsive: [{
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  }
  
  $('.team__certificates-slider').slick({
    fade: true,
    prevArrow: '<img class="slick-arrow slick-prev team__certificates-slider-arrow-prev" src="./images/svg/certificates__slider-arrow.svg">',
    nextArrow: '<img class="slick-arrow slick-next team__certificates-slider-arrow-next" src="./images/svg/certificates__slider-arrow.svg">'
  });
  
  $('.slick-dots li button').text('');

  /* PHONE MASKED INPUT */
  $('[name="user-phone"]').mask('+7 (999) 999-99-99');

  smoothScroll();
  toggleBurger();

  toggleSelects();
  togglePricesItems();
  excerptPriceList();
  // showPricesSeparator();
  togglePricelistImg();

  $(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {
      $('body > .header').fadeIn(300);
    } else if ($(this).scrollTop() < 80) {
      $('body > .header').fadeOut(300);
    }
  });

  $(document).click((e) => {
    const target = $(e.target);

    if (target.is('.open-callback-form')) {
      $('.popup-callback').fadeIn(300);
      $('.popup-callback').addClass('popup_open');
    } 
    if (target.is('.request__form-gift')) {
      $('.popup-gift').fadeIn(300).addClass('popup_open');
    }
    if ($('.popup').hasClass('popup_open') && target.is('.popup__form-close, .popup-thanks__button, .popup__wrap, .popup')) {
      $('.popup').fadeOut(300);
      $('.popup').removeClass('popup_open');
    }

    if (target.is('.prices__group')) {
      const selectedGroup = target.attr('data-group');

      $('.prices__controls-more').off('click');

      if (!target.hasClass('prices__group_active')) {
        togglePricesItems($(`[data-group="${target.data('group')}"] .prices__models`).val());
        excerptPriceList();
        togglePricelistImg(selectedGroup);
        toggleSelects(selectedGroup);
      }

      $('.prices__group').removeClass('prices__group_active');
      target.addClass('prices__group_active');
    }

    if (target.is('.team__certificates-wrap')) {
      $('.team__certificates-wrap').removeClass('team__certificates-wrap_active');
    }

    if (target.is('.team__block-button')) {
      $('.team__certificates-wrap').addClass('team__certificates-wrap_active');

      $('.team__certificates-slider').slick('slickGoTo', target.attr('data-slide'));
    }

    if (target.is('.popup__form-gift-input')) {
      $('.popup__form-gift').removeClass('popup__form-gift_active');
      target.parent().addClass('popup__form-gift_active');
    }
  });

  $('.prices__models').change(function() {
    const selectVal = $(this).val();

    $('.prices__controls-more').off('click');

    togglePricelistImg($(this).closest('.prices__models-wrapper').attr('data-group'));
    togglePricesItems(selectVal);
    excerptPriceList();
  });

  /* ACTIVATE PARALLAX */
  if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    let featuresScene = document.getElementById('features-scene'),
        stepsFirstScene = document.getElementById('steps-1-scene'),
        stepsSecondScene = document.getElementById('steps-2-scene'),
        stepsThirdScene = document.getElementById('steps-3-scene'),
        faqLeftScene = document.getElementById('faq-scene'),
        faqRightScene = document.getElementById('faq-scene-2');
    
    let parallaxFeaturesInstance = new Parallax(featuresScene, {
          relativeInput: true
        }),
        parallaxStepsInstance = new Parallax(stepsFirstScene, {
          relativeInput: true
        }),
        parallaxStepsSecondInstance = new Parallax(stepsSecondScene, {
          relativeInput: true
        }),
        parallaxStepsThirdInstance = new Parallax(stepsThirdScene, {
          relativeInput: true
        })
        parallaxfaqLeftInstance = new Parallax(faqLeftScene, {
          relativeInput: true
        }),
        parallaxfaqRightInstance = new Parallax(faqRightScene, {
          relativeInput: true
        });
  }

  // AOS.init();
});