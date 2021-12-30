'use-strict';

window.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelector('.cards'),
        cardsMoreBtns = cards.querySelectorAll('.section-link'),
        cardsCloseBtns = cards.querySelectorAll('.up-close'),
        cardsMoreSections = cards.querySelectorAll('.more'),
        cardsTablet = document.querySelector('.tablet-cards'),
        cardsTabletMoreBtns = cardsTablet.querySelectorAll('.section-link'),
        cardsTabletCloseBtns = cardsTablet.querySelectorAll('.up-close'),
        cardsTabletMoreSections = cardsTablet.querySelectorAll('.more');

  const processDesktop = document.querySelector('.process'),
        processTablet = document.querySelector('.process-tablet'),
        headerDesktop = document.querySelector('.header'),
        headerMobile = document.querySelector('.header-mobile');

  const swiperSlides = document.querySelectorAll('.swiper-slide'),
        swiperContainer = document.querySelector('.slider-tablet .swiper-container');

  /* SVG pictures for animation */
  const darts = document.getElementById('darts'),
        dartsMobile = document.querySelector('.slider-icon__darts'),
        pie = document.getElementById('pie'),
        pieMobile = document.querySelector('.slider-icon__pie'),
        diagram = document.getElementById('diagram'),
        diagramMobile = document.querySelector('.diagram_mobile'),
        chat = document.getElementById('chat'),
        chatMobile = document.querySelector('.chat_mobile');

  const smoothAnchorScroll = () => {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(anchor => {
      anchor.addEventListener('click', (e) => {
        e.preventDefault();

        document.querySelector(anchor.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  };
  smoothAnchorScroll();

  const cardsAccordeon = (selector, moreBtns, closeBtns, moreSections) => {
    selector.addEventListener('click', (e) => {
      e.preventDefault();
      const target = e.target;
      if (target.matches('.up')) {
        closeBtns.forEach((item, i) => {
          if (item === target.parentNode) {
            moreBtns[i].classList.toggle('close-more');
            moreSections[i].style.height = `0px`;
          }
        });
      }
      if (target.matches('.test')) {
        moreBtns.forEach((item, i) => {
          if (item === target) {
            moreBtns[i].classList.toggle('close-more');
            moreSections[i].style.height = `${moreSections[i].scrollHeight}px`;
          }
        });
      }
      if (target.closest('.up-close')) {
        closeBtns.forEach((item, i) => {
          if (item === target) {
            moreBtns[i].classList.toggle('close-more');
            moreSections[i].style.height = `0px`;
          }
        });
      } 
      if (target.closest('.swiper-button-next') || target.closest('.swiper-button-prev')) {
        moreSections.forEach(item => {
          item.style.height = 0;
        });
        moreBtns.forEach(item => {
          item.classList.remove('close-more');
        });
      }
    });
  };
  cardsAccordeon(cards, cardsMoreBtns, cardsCloseBtns, cardsMoreSections);
  cardsAccordeon(cardsTablet, cardsTabletMoreBtns, cardsTabletCloseBtns, cardsTabletMoreSections);

  const swapBlocksId = () => {
    if (window.innerWidth <= 768) {
      processDesktop.removeAttribute('id');
      processTablet.setAttribute('id', 'steps');
    } else {
      processTablet.removeAttribute('id');
      processDesktop.setAttribute('id', 'steps');
    }
    if (window.innerWidth <= 576) {
      headerDesktop.removeAttribute('id');
      headerMobile.setAttribute('id', 'header');
    } else {
      headerMobile.removeAttribute('id');
      headerDesktop.setAttribute('id', 'header');
    }
  };
  swapBlocksId();

  const changeSlideHeight = () => {
    swiperSlides.forEach(item => {
      item.style.minHeight = `${swiperContainer.clientHeight}px`;
    });
  };
  changeSlideHeight();

  window.addEventListener('resize', () => {
    swapBlocksId();
  });

  let mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    loop: true,
    allowTouchMove: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    }
  });

  AOS.init();
});