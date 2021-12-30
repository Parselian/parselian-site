(function ($) {
    $(function () {
        $(window).load(function () {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;


            var d = new Date();
            d.setDate(d.getDate() + 1);
            d.setHours(0);
            d.setMinutes(0);
            d.setSeconds(0);

            var countDown = new Date(d).getTime(),
                x = setInterval(function () {

                    var now = new Date().getTime(),
                        distance = countDown - now;

                    $('#days').html(Math.floor(distance / (day))),
                        $('#hours').html(Math.floor((distance % (day)) / (hour))),
                        $('#minutes').html(Math.floor((distance % (hour)) / (minute))),
                        $('#seconds').html(Math.floor((distance % (minute)) / second));

                    //do something later when date is reached
                    //if (distance < 0) {
                    //  clearInterval(x);
                    //  'IT'S MY BIRTHDAY!;
                    //}

                }, second);


            $('.scrollbar').mCustomScrollbar({
                axis: "y", //set both axis scrollbars
                advanced: {autoExpandHorizontalScroll: true}, //auto-expand content to accommodate floated elements
                // change mouse-wheel axis on-the-fly
                callbacks: {
                    onOverflowY: function () {
                        var opt = $(this).data("mCS").opt;
                        if (opt.mouseWheel.axis !== "y") opt.mouseWheel.axis = "y";
                    }
                }
            });
        });
        $('.top-menu .navigation').on('click', function () {
            $('.burger').stop().slideToggle(500);
            return false;
        });
        $('#devices-scroll').affix({
            offset: {
                top: function () {
                    return (this.top = $('.header').outerHeight(true) + $('.change').outerHeight(true))
                },
                bottom: function () {
                    return (this.bottom = $('.footer').outerHeight(true))
                }
            }
        });

        $('.change').each(function () {
            var _el = $(this), _el1 = _el.find('.i1'), _el2 = _el.find('.i2');
            $(window).on('scroll ready load resize', function () {
                var x1 = $(window).scrollTop() + $(window).height(), x2 = _el.offset().top;
                _el1.css('background-position', 'left ' + parseInt((x1 - x2) / ($(window).height() / 100)) + 'px');
                _el2.css('background-position', 'right ' + parseInt((x2 - x1) / ($(window).height() / 100)) + 'px');
            });

            _el.find('.btn.btn-more').on('click', function () {
                _el.toggleClass('open');
                return false;
            })
        });
        $('.employees .owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            responsive: {
                768: {
                    margin: 30,
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    margin: 50,
                    items: 3
                }
            }
        });
        $('.index-carousel .owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            responsive: {
                768: {
                    margin: 30,
                    items: 3
                }
            }
        });


        $('.vacancies__list').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<svg class="slick-prev slider-arrow slider-arrow_prev"><use xlink:href="./images/sprite.svg#arrow"></use></svg>',
            nextArrow: '<svg class="slick-prev slider-arrow slider-arrow_next"><use xlink:href="./images/sprite.svg#arrow"></use></svg>',

            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        })


        $('a[href*="#"]:not([href="#"])').on('click', function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var _target = $(this.hash);
                var _dopheight = 0;
                _target = _target.length ? _target : $('[name=' + this.hash.slice(1) + ']');
                if (_target.length) {
                    $('html, body').animate({
                        scrollTop: _target.offset().top - _dopheight
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $('.malfunction').on('click', function() {
        console.log($(this));
    })

    $('form').submit(function(event) {
    event.preventDefault();

    const userName = $(this).find('[name="user_name"]').val(),
        userPhone = $(this).find('[name="phone"]').val(),
        userAddr = $(this).find('[name="addr"]').val(),
        userDevice = $(this).find('[name="selected-device"]').val(),
        userProblem = $(this).find('[name="selected-problem"]').val();

    $.ajax({
      url: './mail.php',
      data: {
        user_name: userName,
        user_phone: userPhone,
        user_addr: userAddr,
        user_device: userDevice,
        user_problem: userProblem
      },
      method: 'POST',
      success: () => {
          $('#thanksModal').modal('show');
          $('form input[type="text"]').val('');
          $('form textarea').val('');
          return;
      }
    });
  });

 $("input[name='phone']").mask("+7 (999) 999-99-99");
})(jQuery);