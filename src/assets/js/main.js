'use-strict'

document.addEventListener('DOMContentLoaded', () => {
  const portfolioSlider = new Swiper('.info-slider', {
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    pagination: {
      el: '.swiper-pagination',
      bulletClass: 'info-slider__dot',
      bulletActiveClass: 'info-slider__dot_active',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })

  const portfolioGallerySlider = new Swiper('.gallery__slider', {
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    }
  })

  portfolioSlider.controller.control = portfolioGallerySlider;
  document.addEventListener('click', (e) => {
  })
})