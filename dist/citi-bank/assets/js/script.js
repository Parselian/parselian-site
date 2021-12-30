'use-strict';

document.addEventListener('DOMContentLoaded', () => {
    const popup = document.querySelector('.popup'),
        promoForm = document.getElementById('promo-form');

    /* Как вариант можно разбить одну функцию валидатора на две: проверка по маске ввода и проверка селектов и
     чекбоксов на NULL, т.к. текущий вариант не устраивает в плане гибкости и чистоты кода */

    const validator = (formItems) => {
        let flags = [];

        [...formItems].forEach(item => {
            if (item.getAttribute('type') === 'text') {
                if (item.name === 'user_email') {
                    flags.push(inputMaskValidate(item, /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/, 'Enter' +
                        ' correct E-Mail'));
                } else if (item.name === 'user_name') {
                    flags.push(inputMaskValidate(item, /^[a-z|A-Z|а-я|А-Я|\s]+$/, 'Enter correct name'));
                }
            } else if (item.tagName === 'SELECT') {
                if (item.value) {
                    flags.push(true);
                } else {
                    toggleErrorModal(item, 'Fill this field')
                    flags.push(false);
                }
            } else if (item.getAttribute('type') === 'checkbox') {
                if (item.checked) {
                    flags.push(true)
                } else {
                    toggleErrorModal(item, 'Check mark')
                    flags.push(false);
                }
            }
        })

        return !(flags.indexOf(false) != -1)
    }

    const inputMaskValidate = (elem, reg = null, errorMsg = 'Enter correct data') => {
        const testString = elem.value,
            isMaskValid = testString.match(reg) ? true : false;

        if (!isMaskValid) {
            toggleErrorModal(elem, errorMsg)
            return false;
        } else {
            return true;
        }
    }

    const toggleErrorModal = (elem, msg) => {
        const inputWrap = elem.parentNode;

        inputWrap.insertAdjacentHTML('beforeend', `
            <div class="form__error">${msg}</div>
        `)
        inputWrap.classList.add('form__input-wrap_error')

        setTimeout(() => {
            inputWrap.removeChild(document.querySelector('.form__error'))
            inputWrap.classList.remove('form__input-wrap_error')
        }, 1000)
        return false
    }

    promoForm.addEventListener('submit', (e) => {
        e.preventDefault();

        if (validator(promoForm.elements)) {
            promoForm.reset();
            alert('Success!')
        }
    });

    document.addEventListener('click', (e) => {
        const target = e.target;

        if (target.closest('.form__input-icon')) {
            target.closest('.form__input-icon').previousElementSibling.value = '';
        }

        if (target.closest('.steps__list-item')) {
            popup.classList.remove('popup_hidden');
        }

        if (target.matches('.popup, .popup-block__close, .popup-block__button')) {
            popup.classList.add('popup_hidden');
        }

    })
});