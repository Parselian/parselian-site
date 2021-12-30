'use-strict';

$(window).on('load', function() {
    $('input[name="user_phone"]').mask('+7 (999) 999-99-99');

    const advantagesSliderInit = () => {
        const setAdvantagesSliderHeight = () => {
            $('.advantages__slider').height($('.advantages__slide_active').height())
        }

        const toggleAdvantagesSlides = (selectedSlide) => {

            $('.advantages__slide').removeClass('advantages__slide_active').fadeOut();

            $(`.advantages__slide[data-slide="${selectedSlide}"]`).fadeIn({
                duration: 200,
                start() {
                    $(`.advantages__slide[data-slide="${selectedSlide}"]`).css('display', 'flex');
                }
            });

            return;
        }

        const toggleFilterBtns = (context) => {
            $('.advantages__controls-button').removeClass('advantages__controls-button_active');
            context.addClass('advantages__controls-button_active');
            // autoplaySlides();
        }

        const autoplaySlides = () => {
            let toggleSlidesInterval = null;
            let buttonIndex = $('.advantages__controls-button_active').index();


            clearInterval(toggleSlidesInterval);

            toggleSlidesInterval = setInterval(() => {
                console.log(buttonIndex)
                let buttons = $('.advantages__controls-button');

                if (buttons.eq(buttonIndex).hasClass('advantages__controls-button_active')) {
                    buttons.removeClass('advantages__controls-button_active');
                    buttons.eq(buttonIndex + 1).addClass('advantages__controls-button_active');
                }

                buttonIndex++;

                if (buttonIndex === buttons.length) {
                    buttonIndex = 0;
                    buttons.removeClass('advantages__controls-button_active');
                    buttons.eq(0).addClass('advantages__controls-button_active');
                }

                toggleAdvantagesSlides($('.advantages__controls-button_active').data('btn-slide'));
            }, 3000)
        }


        setAdvantagesSliderHeight();

        $('.advantages__controls-button').on('click', function() {
            const selectedSlide = $(this).data('btn-slide');

            toggleFilterBtns($(this));

            toggleAdvantagesSlides(selectedSlide);
        })

        // autoplaySlides();
    }

    const priceFilterInit = () => {
        const buildDevicesBtns = () => {
            $.ajax({
                url: './assets/functions/get_devices.php',
                method: 'GET',
                dataType: 'json',
                success(data) {
                    let uniqueClass = '';

                    $('.prices__devices-button').remove();
                    data.forEach((item) => {
                        uniqueClass = item[2] === 'laptops' ? 'prices__devices-button_active' : '';

                        $('.prices__devices').append(`
                            <button data-device="${item[2]}" class="prices__devices-button ${uniqueClass}">
                                ${item[1]}
                            </button>
                        `)
                    })

                    toggleDevicesBtns();
                }
            })
        };
        const toggleDevicesBtns = () => {
            $('.prices__devices-button').on('click', function() {
                $('.prices__devices-button').removeClass('prices__devices-button_active');
                $(this).addClass('prices__devices-button_active');


                buildModelsBtns($(this).data('device'));
            })
        };
        const buildModelsBtns = (device) => {
            $.ajax({
                method: 'GET',
                dataType: 'json',
                data: {
                  selected_device: device
                },
                url: './assets/functions/get_models.php',
                success(data) {
                    let uniqueClass = '';

                    $('.prices__models-button').remove();
                    if (device !== 'computers') {
                        data.forEach((item, i) => {
                            uniqueClass = i === 0 ? 'prices__models-button_active' : ''

                            $('.prices__models').append(`
                                <button data-model="${item[2]}" class="prices__models-button ${uniqueClass}">
                                    ${item[1]}
                                </button>
                            `)
                        })
                    }

                    toggleModelsBtns();
                    buildCommonProblemsCards(data[0][2]);
                    buildPricelist(data[0][2]);
                }
            })
        };
        const toggleModelsBtns = () => {
            $('.prices__models-button').on('click', function() {
                $('.prices__models-button').removeClass('prices__models-button_active');
                $(this).addClass('prices__models-button_active');

                buildCommonProblemsCards($(this).data('model'));
                buildPricelist($(this).data('model'));
            })
        };
        const buildCommonProblemsCards = (selectedModel) => {
            $.ajax({
                url: './assets/functions/get_common_problems.php',
                method: 'GET',
                dataType: 'json',
                data: {
                    selected_model: selectedModel
                },
                success(data) {
                    $('.prices__common-block').fadeOut().remove();

                    data.forEach((item) => {
                        $('.prices__common-blocks').append(`
                            <div class="prices__common-block" data-problem="${item[1]}">
                                <picture>
                                    <source srcset="./assets/images/webp/${item[4]}.webp" type="image/webp">
                                    <img src="./assets/images/${item[4]}.jpg" alt="${item[1]}" 
                                    class="prices__common-block-img">
                                </picture>
                                <div class="prices__common-block-info">
                                    <span class="prices__common-block-name">${item[1]}</span>
                                    <span class="prices__common-block-price">${item[2]} ₽</span>
                                </div>
                            </div>
                        `)
                    })

                    $('.prices__common-block').fadeIn();
                }
            })
        }
        const buildPricelist = (selectedModel) => {
            $.ajax({
                url: './assets/functions/get_services.php',
                method: 'GET',
                dataType: 'json',
                data: {
                    selected_model: selectedModel
                },
                success(data) {
                    $('.prices__pricelist').fadeOut();
                    $('.prices__pricelist-item').remove();

                    data.forEach((item) => {
                        $('.prices__pricelist').append(`
                            <li class="prices__pricelist-item" data-problem="${item[1]}">
                                <span class="prices__pricelist-item-name">${item[1]}</span>
                                <div class="prices__pricelist-item-wrap">
                                    <div class="prices__pricelist-item-label">+ скидка 20%</div>
                                    <button class="prices__pricelist-item-button open-order-form">
                                        Вызвать мастера
                                    </button>
                                    <div class="prices__pricelist-item-price">${item[2]} ₽</div>
                                </div>
                            </li>
                        `)
                    })

                    $('.prices__pricelist').fadeIn();
                    togglePricelist();
                }
            })
        }
        const togglePricelist = () => {
            $('.prices__pricelist').removeClass('prices__pricelist_excerpt').css('height', ``);
            $('.prices__pricelist-unroll').text('Показать всё');

            function toggleShowMoreBtn() {
                if (!!$('.prices__pricelist').hasClass('prices__pricelist_excerpt')) {
                    $('.prices__pricelist').removeClass('prices__pricelist_excerpt');
                    $('.prices__pricelist').css('height', `${pricelistFullHeight}px`);
                    $('.prices__pricelist-unroll').text('Свернуть');
                    $('.prices__pricelist-unroll').css('margin-top', '-50px');
                } else {
                    $('.prices__pricelist').addClass('prices__pricelist_excerpt');
                    $('.prices__pricelist').css('height', ``);
                    $('.prices__pricelist-unroll').text('Показать всё');
                    $('.prices__pricelist-unroll').css('margin-top', '');
                }
            }

            let pricelistFullHeight = $('.prices__pricelist').height() + 26;

            if ($('.prices__pricelist-item').length < 10) {
                $('.prices__pricelist-unroll').fadeOut();
                $('.prices__pricelist').removeClass('prices__pricelist_excerpt');
                $('.prices__pricelist').css('height', `${pricelistFullHeight}px`);
            } else {
                $('.prices__pricelist').addClass('prices__pricelist_excerpt');
                $('.prices__pricelist').css('height', ``);
                $('.prices__pricelist-unroll').fadeIn();
            }

            $('.prices__pricelist-unroll').unbind('click');

            $('.prices__pricelist-unroll').on('click', () => {
                toggleShowMoreBtn();
            })
        }


        buildDevicesBtns();
        buildModelsBtns('laptops');
        buildCommonProblemsCards('acer-laptops');
    }

    advantagesSliderInit();
    priceFilterInit();

    const togglePopups = (selector) => {
        $(selector).fadeIn({
            duration: 400,
            start() {
                $(selector).css('display', 'flex')
            }
        });
        $('body').css('overflow-y', 'hidden');

        let string = $('.prices__devices-button_active').text().trim().slice(0, -1).toLowerCase();

        $(selector).find('.popup-form__title-device').text(`${string}а`);

        return;
    }

    const smoothScroll = () => {
        $('a[href^="#"]').click(function() {
            let link = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(link).offset().top -120
            }, 700);
            return false;
        });
    }

    smoothScroll();



    $('.reviews__slider').slick({
        dots: true,
        fade: true,
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:
            `<svg class="reviews__slider-arrow reviews__slider-arrow_prev">
                <use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
            </svg>`,
        nextArrow:
            `<svg class="reviews__slider-arrow reviews__slider-arrow_next">
                <use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
            </svg>`,
        dotsClass: 'reviews__slider-dots'
    })

    $('.gallery__slider').slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        // adaptiveHeight: true,
        arrows: true,
        fade: true,
        prevArrow:
            `<svg class="gallery__slider-arrow gallery__slider-arrow_prev">
                <use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
            </svg>`,
        nextArrow:
            `<svg class="gallery__slider-arrow gallery__slider-arrow_next">
                <use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
            </svg>`,
    })

    $('.team__certificates-slider').slick({
        fade: true,
        prevArrow: `
            <svg class="gallery__slider-arrow gallery__slider-arrow_prev">
                <use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
            </svg>
            `,
        nextArrow: `
            <svg class="gallery__slider-arrow gallery__slider-arrow_next">
                <use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
            </svg>
        `
      });



    const toggleAdvantagesSliderBtns = () => {
        function toggleBtns() {
            $('.advantages__controls-button').each(function(i, item) {
                if (!$(item).hasClass('advantages__controls-button_active')) {
                    $(item).slideToggle();
                }
            })
        }

        toggleBtns();

        $('.advantages__controls-more').on('click', function() {
            toggleBtns();
            $(this).toggleClass('advantages__controls-more_active');
        })

        $('.advantages__controls-button').on('click', function() {
            toggleBtns();
            $('.advantages__controls-more').toggleClass('advantages__controls-more_active');
        })
    }

    if ($(window).width() < 480) {
        toggleAdvantagesSliderBtns();
    }

    /*---------------------- EVENT LISTENERS ----------------------------*/
    $('form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: './assets/configs/mail.php',
            method: 'POST',
            data: {
                user_phone: $(this).find('input[name="user_phone"]').val(),
                user_name: $(this).find('input[name="user_name"]').val()
            },
            success() {
                togglePopups('.popup-thanks');
                return;
            }
        })
    })
    $('.burger-btn').on('click', function() {
        if ($(this).find('input').is(':checked')) {
            $('.burger-menu').toggleClass('burger-menu_open');
        }
    })

    $(document).on('click', function(e) {
        const target = $(e.target);

        switch (true) {
            case target.is('.open-order-form, .prices__pricelist-item, .prices__pricelist-item-name, .prices__common-block-info'):
                togglePopups('.popup-order');
                break;
            case target.is('.open-discount-form'):
                togglePopups('.popup-discount');
                break;
            case target.is('.faq__list-item'):
                target.find('.faq__list-item-text').slideToggle();
                target.find('.faq__list-item-title-icon').toggleClass('faq__list-item-title-icon_active');
                break;
            case target.is('.gallery__image'):
                $('.gallery__slider').slick('slickGoTo', target.data('slide-ind'));
                $('.gallery__slider-wrap').fadeIn();
                break;
            case target.is('.gallery__slider-wrap, .gallery__slider-close'):
                $('.gallery__slider-wrap').fadeOut();
                break;
            case target.is('.team__card-link'):
                e.preventDefault();
                $('.team__certificates-wrap').addClass('team__certificates-wrap_active');
                $('.team__certificates-slider').slick('slickGoTo', target.data('slide-ind'));
                break;
            case target.is('.team__certificates-wrap'):
                $('.team__certificates-wrap').removeClass('team__certificates-wrap_active');
                break;
            default:
                break;
        }

        return;
    })

    $('.popup-form__close, .popup__bg, .popup-form__button_thanks').on('click', function() {
        $('.popup').fadeOut({
            duration: 400,
        });
        $('body').css('overflow-y', 'auto');
    })
})
