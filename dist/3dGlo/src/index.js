'use strict';

import timer from './modules/timer';
import toggleMenu from './modules/toggleMenu';
import popupFunc from './modules/popupFunc';
import anchorsScroll from './modules/anchorsScroll';
import tabs from './modules/tabs';
import slider from './modules/slider';
import changePhotos from './modules/changePhotos';
import calcValidation from './modules/calcValidation';
import calculator from './modules/calculator';
import sendForm from './modules/sendForm';
import validationForm from './modules/validationForm';

//таймер
timer('17 november 2019', '#timer-hours', '#timer-minutes', '#timer-seconds');
// Меню
toggleMenu();
// Попап
popupFunc();
//якорный скролл
anchorsScroll();
//переключение табов
tabs();
//слайдер
slider();
//интерактивное изменение фото
changePhotos();
//валидация калькулятора
calcValidation();
//калькулятор
calculator();
//send-ajax-form
sendForm('form1');
sendForm('form2');
sendForm('form3');
//forms-validation
validationForm();
