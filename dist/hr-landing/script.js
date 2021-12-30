'use-strict';

$(document).ready(() => {
    $('form').submit(function(e) {
        e.preventDefault();

        const username = $(this).find('[name="user_name"]').val(),
            userPhone = $(this).find('[name="user_phone"]').val();

        $.ajax({
            type: 'POST',
            url: './mail.php',
            data: {
                user_name: username,
                user_phone: userPhone,
            },
            success: function() {
                $(".popup-thanks").addClass('popup_active');
                $("form input").val('');
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

    toggleBurger();
    smoothScroll();


    /* ---------------- MASKED INPUT -------------------- */
    $("input[name='user_phone']").mask("(999) 999-9999");


    /* ----------------- SLIDERS INIT ------------------- */
    $('.vacancies__list').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<svg class="slick-prev slider-arrow slider-arrow_prev"><use xlink:href="./images/stack/sprite.svg#arrow"></use></svg>',
        nextArrow: '<svg class="slick-prev slider-arrow slider-arrow_next"><use xlink:href="./images/stack/sprite.svg#arrow"></use></svg>',

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

    $('.employees-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<svg class="slick-prev slider-arrow slider-arrow_prev"><use xlink:href="./images/stack/sprite.svg#arrow"></use></svg>',
        nextArrow: '<svg class="slick-prev slider-arrow slider-arrow_next"><use xlink:href="./images/stack/sprite.svg#arrow"></use></svg>',

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
    });

    $('.team__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: true,
        prevArrow: '<svg class="slick-prev slider-arrow slider-arrow_prev team__slider-arrow_prev"><use xlink:href="./images/stack/sprite.svg#arrow"></use></svg>',
        nextArrow: '<svg class="slick-prev slider-arrow slider-arrow_next team__slider-arrow_next"><use xlink:href="./images/stack/sprite.svg#arrow"></use></svg>',
    })
    /* -------------------------------------------------- */


    $(document).click((e) => {
        const target = e.target;

        switch(true) {
            case $(target).is('.open-popup'):
                $('.popup_call-master').addClass('popup_active')
                break;
            case $(target).is('.popup__form-close, .popup__wrap, .popup, .popup-thanks__form-btn'):
                $('.popup').removeClass('popup_active');
                break;
            default:
                return;
        }
    })
})