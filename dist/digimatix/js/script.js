'use-strict';

document.addEventListener('DOMContentLoaded', function () {
    let inactiveSlides = [];
    const sliderFilterBtns = document.querySelectorAll('.about-slider__filter-button'),
        formInputs = document.querySelectorAll('.form__input'),
        sliderFilterSelect = document.querySelector('.about-slider__filter-select');

    function checkBrowserVersion() {
        let $buoop = {
            required: {e: -2, f: -1, o: -1, s: -1, c: -1},
            insecure: true,
            unsupported: true,
            style: "bottom",
            api: 2021.07
        };

        function $buo_f() {
            let e = document.createElement("script");
            e.src = "//browser-update.org/update.min.js";
            document.body.appendChild(e);
        };
        try {
            document.addEventListener("DOMContentLoaded", $buo_f, false)
        } catch (e) {
            window.attachEvent("onload", $buo_f)
        }
    }

    checkBrowserVersion()

    const aboutSlider = new Swiper('.about-slider', {
        autoplay: true,
        speed: 300,
        loop: 'true',
        slidesPerView: 4,
        slidesPerScroll: 1,
        pagination: {
            el: '.about-slider__dots',
            bulletClass: 'about-slider__dot',
            bulletActiveClass: 'about-slider__dot_active'
        },
        // Navigation arrows
        navigation: {
            prevEl: '.about-slider__arrow_prev',
            nextEl: '.about-slider__arrow_next',
        },
        breakpoints: {
            1200: {
                spaceBetween: 64
            },
            992: {
                autoplay: false,
                spaceBetween: 32,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 25,
                autoplay: {
                    delay: 5000
                },
            },
            420: {
                slidesPerView: 2,
                spaceBetween: 25
            },
            0: {
                autoplay: {
                    delay: 3000
                },
                slidesPerView: 1,
                spaceBetween: 15
            }
        }
    });

    function maskPhone(selector, masked) {
        const elems = document.querySelectorAll(selector);

        function mask(event) {
            const keyCode = event.keyCode;
            const template = masked,
                def = template.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, "");

            let i = 0,
                newValue = template.replace(/[_\d]/g, function (a) {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
                });
            i = newValue.indexOf("_");
            if (i !== -1) {
                newValue = newValue.slice(0, i);
            }
            let reg = template.substr(0, this.value.length).replace(/_+/g,
                function (a) {
                    return "\\d{1," + a.length + "}";
                }).replace(/[+()]/g, "\\$&");
            reg = new RegExp("^" + reg + "$");
            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) {
                this.value = newValue;
            }
            if (event.type === "blur" && this.value.length < 31) {
                this.value = "";
            }

        }

        for (let i = 0; i < elems.length; i++) {
            elems[i].addEventListener("input", mask);
            elems[i].addEventListener("focus", mask);
            elems[i].addEventListener("blur", mask);
        }
    }

    maskPhone('input[name="user_phone"]', '+ 7 ( _ _ _ ) _ _ _ - _ _ - _ _')

    function maskEmail(selector) {
        const email_regexp = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/i;
        const inputs = document.querySelectorAll(selector);

        inputs.forEach(function (item) {
            item.addEventListener('change', function () {
                if (!item.value.match(email_regexp)) {
                    item.value = '';
                }
            });
        })
    }

    maskEmail('input[name="user_email"]')

    function toggleActiveFormInputs() {
        formInputs.forEach(function (item) {
            item.addEventListener('focusin', function () {
                item.parentNode.classList.add('form__input-wrap_active')
            })
            item.addEventListener('focusout', function () {
                item.parentNode.classList.remove('form__input-wrap_active')
            })
        })
    }

    toggleActiveFormInputs();

    function filterSlides(wrapper, selector, group) {
        const allSlides = document.querySelectorAll(selector);

        inactiveSlides.forEach(function (item) {
            document.querySelector(wrapper).insertAdjacentElement('beforeend', item);
        })
        inactiveSlides = [];

        allSlides.forEach(function (item) {
            if (item.dataset.group !== 'all' && item.dataset.group === group &&
                !item.classList.contains('swiper-slide-duplicate')) {
                inactiveSlides.push(item.parentNode.removeChild(item));
            }
        })

        aboutSlider.update();
    }

    sliderFilterSelect.addEventListener('change', function (e) {
        filterSlides('.about-slider__slides', '.about-slider__slide', e.target.value)
    })

    document.addEventListener('click', function (e) {
        const target = e.target;

        if (target.classList.contains('about-slider__filter-button')) {
            sliderFilterBtns.forEach(function (item) {
                item.classList.remove('about-slider__filter-button_active')
            });
            target.classList.add('about-slider__filter-button_active');

            filterSlides('.about-slider__slides', '.about-slider__slide', target.dataset.group)
        }
    })


})