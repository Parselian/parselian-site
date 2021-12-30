'use-strict';

window.addEventListener('DOMContentLoaded', () => {

  const html = document.querySelector('html'),
        burgerMenu = document.querySelector('.burger'),
        burgerMenuBtn = burgerMenu.querySelector('.burger__button'),
        promoCardButton = document.querySelector('.promo__card-btn'),
        headerLocationLink = document.querySelector('.header__location-link'),
        map = document.getElementById('map'),
        promoCardText = document.querySelector('.promo__card-text'),
        popupRequest = document.querySelector('.popup-request'),
        popupRequestForm = popupRequest.querySelector('form'),
        popupThanks = document.querySelector('.popup-thanks');

  const toggleBurgerMenu = () => {
    burgerMenuBtn.addEventListener('click', () => {
      burgerMenu.classList.toggle('burger_show');
      burgerMenuBtn.classList.toggle('burger__button_toggled');
      html.classList.toggle('freezed');
    });
  };
  toggleBurgerMenu();

  const showCardTextBlock = () => {
    if (window.innerWidth > 991) {
      promoCardButton.addEventListener('mouseenter', () => {
        promoCardText.classList.add('promo__card-text_visible');
      });
      promoCardButton.addEventListener('mouseleave', () => {
        promoCardText.classList.remove('promo__card-text_visible');
      });
    } 
    
    if (window.innerWidth < 992){
      promoCardButton.addEventListener('click', () => {
        promoCardText.classList.toggle('promo__card-text_visible');
      });
    }
  };
  showCardTextBlock();

  const activateParallaxScenes = () => {
    let parallaxScenes = document.querySelectorAll('.promo__scene');

      parallaxScenes.forEach(item => {
        new Parallax(item, {
          clipRelativeInput: true
        });
      });
  };
  activateParallaxScenes();

  const togglePopups = () => {
    document.addEventListener('click', (e) => {
      const target = e.target;

      if (target.closest('.request__button')) {
        popupRequest.classList.toggle('visible');
      } else if (target.closest('.popup-block__close')) {
        target.closest('.popup').classList.remove('visible');
      }
    });

    popupRequestForm.addEventListener('submit', (e) => {
      const target = e.target;
      e.preventDefault();

      target.closest('.popup').classList.remove('visible');
      popupThanks.classList.add('visible');

      setTimeout(() => {
        popupThanks.classList.remove('visible');
      }, 3000)
    })
  };  
  togglePopups();
});