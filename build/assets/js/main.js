'use-strict'

document.addEventListener('DOMContentLoaded', () => {
  const portfolioSliderInit = () => {
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
  }

  portfolioSliderInit();

  const toggleLabels = (selector) => {
    const inputs = document.querySelectorAll(selector)

    inputs.forEach(item => {
      item.addEventListener('focusin', (e) => {
        e.target.parentNode.querySelector('label').classList.add(`form__${selector}-label_focused`)
      })
    })

    inputs.forEach(item => {
      item.addEventListener('focusout', (e) => {
        e.target.parentNode.querySelector('label').classList.remove(`form__${selector}-label_focused`)
      })
    })
  }
  toggleLabels('input')
  toggleLabels('textarea')
})