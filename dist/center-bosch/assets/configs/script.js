'use-strict';

$(window).on('load', function() {
    $('input[name="user_phone"]').mask('+7 (999) 999-99-99');

    $('form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: './assets/configs/mail.php',
            method: 'POST',
            data: {
                user_name: $(this).find('input[name="user_name"]').val(),
                user_phone: $(this).find('input[name="user_phone"]').val(),
                user_device: $(this).find('select[name="user_device"]').val(),
                user_location: $(this).find('input[name="user_location"]').val(),
                user_message: $(this).find('textarea[name="user_message"]').val()
            },
            success() {
                $('.popup-thanks').fadeIn();
            }
        })
    });

    const errorCodesFilterInit = () => {
        $.ajax({
            url: './assets/configs/get_error_codes.php',
            method: 'GET',
            dataType: 'json',
            success(data) {
                $('.errors__code').remove();
                data.forEach(item => {
                    $('.errors__codes-select').append(`
                        <option value="${item['ERROR_CODE']}">${item['ERROR_CODE']}</option>
                    `)
                    $('.errors__codes').append(`
                        <button class="errors__code" value="${item['ERROR_CODE']}">${item['ERROR_CODE']}</button>
                    `)
                })
                $('.errors__code').first().addClass('errors__code_active');

                toggleErrorMessages()
            }
        })

        function toggleErrorMessages() {
            $.ajax({
                url: './assets/configs/get_error_messages.php',
                method: 'GET',
                dataType: 'json',
                success(data) {
                    if ($(window).width() > 576) {
                        $('.errors__code').on('click', function() {
                            $('.errors__code').removeClass('errors__code_active');
                            $(this).addClass('errors__code_active');
                            data.forEach(item => {
                                if ($(this).val() === item['ERROR_CODE']) {
                                    $('.errors__description-title').text(item['ERROR_TITLE']);
                                    $('.errors__description-text').text(item['ERROR_DESC']);
                                }
                            })
                        })
                    } else {
                        $('select.errors__codes-select').on('change', function() {
                            data.forEach(item => {
                                if ($(this).val() === item['ERROR_CODE']) {
                                    $('.errors__description-title').text(item['ERROR_TITLE']);
                                    $('.errors__description-text').text(item['ERROR_DESC']);
                                }
                            })
                        })
                    }
                }
            })
        }
    };
    errorCodesFilterInit();

    $('a[href^="#"]').click(function() {
        let link = $(this).attr('href');
        if($(this).is('.header__nav-item')) {
            $('.menu-toggle').removeClass('is-active');
            $('.header__logo_top').removeClass('header__logo_active');
        }
        $('html, body').animate({
            scrollTop: $(link).offset().top -120
        }, 700);
        return false;
    });

    $(document).on('click', function(e) {
        if ($(e.target).is('.open-popup-request')) {
            $('.popup-request').fadeIn();
        }
        if ( $(e.target).is('.popup, .popup__close, .popup-form-thanks__button') ) {
            $('.popup').fadeOut();
        }
    })

    $('.popup-form__close').on('click', function() {
        $('.popup').fadeOut();
    })

    $('.menu-toggle').on('click', function() {
      $(this).toggleClass('is-active');
      $('.header__logo_top').toggleClass('header__logo_active');
    });
})