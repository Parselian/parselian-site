'use-strict';

$(window).on('load', function () {
    $('picture').lazy();


    /*------------------ SLICK SLIDERS --------------------*/
    $('.reviews__slider').slick({
        prevArrow: `
            <div class="reviews__slider-arrow-wrap reviews__slider-arrow_left">
				<svg class="reviews__slider-arrow">
					<use xlink:href="./assets/stack/sprite.svg#arrow"></use>
				</svg>
			</div>
        `,
        nextArrow: `
            <div class="reviews__slider-arrow-wrap reviews__slider-arrow_right">
				<svg class="reviews__slider-arrow">
					<use xlink:href="./assets/stack/sprite.svg#arrow"></use>
				</svg>
			</div>
        `,
        dots: true,
        dotsClass: 'reviews__slider-dots'
    });

    $('.reviews__slide-info-gallery').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 405,
                settings: {
                    slidesToShow: 1,
                    centerMode: true
                }
            }
        ]
    })

    $('.codes__modal').slick({
        fade: true,
        swipe: false,
        arrows: false,
        adaptiveHeight: true
    })

    $('.steps__info-blocks').slick({
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        asNavFor: '.steps__icon-wrap',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    asNavFor: null
                }
            }
        ]
    })


    /*----------------- FUNCTIONS -----------------------*/
    const accordeon = () => {
        $('.faq__list_item').click(function () {
            if ($(this).closest('.faq__list_item').find('.faq__item_answer').hasClass('faq__list_item_close')) {
                $(this).closest('.faq__list_item').find('.faq__item_answer').removeClass('faq__list_item_close').slideDown(300);
            } else {
                $(this).closest('.faq__list_item').find('.faq__item_answer').addClass('faq__list_item_close').slideUp(300);
            }

            $(this).closest('.faq__list_item').find('.faq__right_arrow').toggleClass('faq__right_arrow_rotated');
        });
    }
    accordeon()

    const errorCodes = () => {
        function toggleModalSlider(data) {
            let slideInd = $(`.codes__modal-slide[data-brand="${data.brand}"][data-code="${data.errorCode}"]`).data('slick-index')
            $('.codes__modal').slick('slickGoTo', slideInd)
        }

        function changeVisibleErrorCodeBtns(selectedBrand) {
            $('.codes__btn').removeClass('codes__btn_active').addClass('codes__btn_hidden')

            $(`.codes__btn[data-brand="${selectedBrand}"]`).removeClass('codes__btn_hidden')
            $(`.codes__btn[data-brand="${selectedBrand}"]`).first().addClass('codes__btn_active')

            let activeBtnInfo = {
                brand: $(`.codes__btn[data-brand="${selectedBrand}"]`).first().data('brand'),
                errorCode: $(`.codes__btn[data-brand="${selectedBrand}"]`).first().val()
            }
            toggleModalSlider(activeBtnInfo)
        }

        function changeVisibleErrorCodeOptions(selectedBrand) {
            $(`#codes-select-error option`).addClass('codes__btn_hidden').removeAttr('selected')
            $(`#codes-select-error option[data-brand="${selectedBrand}"]`).removeClass('codes__btn_hidden')
            $(`#codes-select-error option[data-brand="${selectedBrand}"]`).first().attr('selected', 'selected')
        }

        $('#codes-select-error').on('change', function () {
            let activeBtnInfo = {
                brand: $(`#codes-select-error option:selected`).data('brand'),
                errorCode: $(this).val()
            }
            toggleModalSlider(activeBtnInfo)

            $(`.codes__btn`).removeClass('codes__btn_active')
            $(`.codes__btn[data-brand="${$(this).find('option:selected').data('brand')}"][value="${$(this).val()}"]`).addClass('codes__btn_active')
        })

        $('#codes-select-brand').on('change', function () {
            changeVisibleErrorCodeBtns($(this).val())

            changeVisibleErrorCodeOptions($(this).val());
        })

        $('.codes__btn').on('click', function () {
            $('.codes__btn').removeClass('codes__btn_active')
            $(this).addClass('codes__btn_active')
            let activeBtnInfo = {
                brand: $(this).data('brand'),
                errorCode: $(this).val()
            }
            toggleModalSlider(activeBtnInfo)

            $(`#codes-select-error option`).removeAttr('selected')
            $(`#codes-select-error option[data-brand="${$(this).data('brand')}"][value="${$(this).val()}"]`).attr('selected', 'selected')
        })
    }
    errorCodes();

    const togglePricelistCards = () => {
        $('.pricelist__unroll').on('click', function() {
            $('.pricelist__card').each((i, item) => {
                if (i > 4) {
                    $(item).slideToggle(0);
                }
            })
            $('.pricelist__unroll_rolled').fadeToggle(0)
            $('.pricelist__unroll_unrolled').fadeToggle(0)
        })
    }
    togglePricelistCards()

    /*----------------- MEDIA QUERIES ----------------*/
    if ($(window).width() > 992) {
        $('.steps__icon-wrap').slick({
            arrows: false,
            fade: true,
            asNavFor: '.steps__info-blocks'
        });
    }


    /*------------------ EVENT LISTENTERS -------------------*/
    $('.steps__info-blocks').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $('.steps__nav-button').removeClass('steps__nav-button_active');
        $('.steps__nav-button').eq(nextSlide).addClass('steps__nav-button_active');
    })

    $('.burger-btn').on('click', function () {
        $(this).toggleClass('is-active');
        $('.burger-menu').toggleClass('burger-menu_visible')
    })

    $(document).on('click', function(e) {
        console.log($(e.target))

        switch(true) {
            case $(e.target).is('.steps__nav-button'):
                $('.steps__nav-button').removeClass('steps__nav-button_active');
                $(e.target).addClass('steps__nav-button_active');
                $('.steps__info-blocks').slick('slickGoTo', $(e.target).data('slide'));
                break;
            case $(e.target).is('.popups'):
                $('.popups').fadeToggle({
                    duration: 400,
                })
                $('.popup__wrap').fadeOut(400)
                break;
        }
    })

    $('.open-call-master-popup').on('click', function() {
        $('.popups').fadeToggle({
            duration: 400,
            start() {
                $(this).css({'display': 'flex'})
            }
        })
        $('.popup_call-master').fadeToggle(0)
    })
    $('.open-order-repair-popup').on('click', function() {
        $('.popups').fadeToggle({
            duration: 400,
            start() {
                $(this).css({'display': 'flex'})
            }
        })
        $('.popup_order-repair').fadeToggle(0)
    })
    $('.popup__close-wrap').on('click', function() {
        $('.popups').fadeToggle({
            duration: 400,
        })
        $('.popup__wrap').fadeOut(400)
    });
})
