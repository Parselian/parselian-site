'use-strict';

$(window).on('load', function() {
    $('.burger-btn').on('click', function() {
        if ($(this).find('input').is(':checked')) {
            $('.burger-menu').toggleClass('burger-menu_open')
        }
    })

    if ($(window).width() < 900) {
        $('.footer__col-title').on('click', function() {
            const list = $(this).find('.footer__list');

            if (list.hasClass('footer__list_open')) {
                list.removeClass('footer__list_open').slideUp()
            } else {
                console.log(list)
                list.addClass('footer__list_open').slideDown()
            }

            $(this).find('.footer__col-title-icon').toggleClass('footer__col-title-icon_active')
        })
    }

    $('.header__contacts-item').on('click', function(e) {
        $(this).toggleClass('header__contacts-item_active')
        $(this).find('.header__contacts-popup').toggleClass('header__contacts-popup_open')
    })


    /*-------------- PROFILE EDIT GOODS PAGE FUNCS ---------------*/
    $(document).on('click', function(e) {
        const target = e.target;

        const toggleTiles = (parentSelector, hiddenInputId) => {
            if (target.closest('.tile') && target.closest(parentSelector)) {
                $('select[name="selected-part"]').prop('selectedIndex', 0);
                $(`${parentSelector} .tile`).removeClass('tile_small-active');
                $(target).closest('.tile').addClass('tile_small-active');

                $(hiddenInputId).attr('value', $(target).closest('.tile').attr('data-device'));
            }
        }

        toggleTiles('.category-devices', '#selected-device');
        toggleTiles('.category-parts', '#selected-part');
    })

    $('#selected-part').on('change', function(e) {
        const selectedDeviceVal = $('#selected-device').val(),
            selectedPartVal = $('#selected-part').val();


    })
});