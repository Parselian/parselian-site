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

  const experienceSlider = () => {
    const pagination = document.querySelector('.experience__slider-dots'),
      dots = pagination.querySelectorAll('.experience__slider-dot'),
      paginationMobile = document.querySelector('.experience__select'),
      paginationListMobile = paginationMobile.querySelector('.experience__select-list'),
      paginationSelectedSubtitle = paginationMobile.querySelector('.select-box__selected-text-subtitle'),
      paginationSelectedTitle = paginationMobile.querySelector('.select-box__selected-text-title'),
      paginationListItems = paginationListMobile.querySelectorAll('.select-box__list-item'),
      slides = document.querySelectorAll('.experience__slide')

    const slideToggle = (activeDot) => {
      slides.forEach((slide, slideID) => {
        slide.classList.remove('experience__slide_active')
        if (slideID === activeDot) {
          slide.classList.add('experience__slide_active')
        }
      })
    }

    pagination.addEventListener('click', (e) => {
      const target = e.target

      if (target.closest('.experience__slider-dot')) {
        dots.forEach((dot, activeDot) => {
          dot.classList.remove('experience__slider-dot_active')

          if (target === dot) {
            dot.classList.add('experience__slider-dot_active')

            slideToggle(activeDot)
          }
        })
      }
    })

    paginationMobile.addEventListener('click', (e) => {
      const target = e.target,
        icon = document.querySelector('.select-box__selected-icon')

      if (target.closest('.experience__select-active')) {
        paginationListMobile.classList.toggle('select-box__list_visible')
        icon.classList.toggle('select-box__selected-icon_rotated')
      } else if (target.closest('.select-box__list-item')) {
        paginationListMobile.classList.remove('select-box__list_visible')
        icon.classList.remove('select-box__selected-icon_rotated')

        paginationSelectedSubtitle.textContent = target.closest('.select-box__list-item').children[0].textContent
        paginationSelectedTitle.textContent = target.closest('.select-box__list-item').children[1].textContent

        paginationListItems.forEach((item, activeItem) => {
          item.classList.remove('select-box__list-item_selected')

          if (item === target.closest('.select-box__list-item')) {
            item.classList.add('select-box__list-item_selected')

            slideToggle(activeItem)
          }
        })
      }
    })
  }
  experienceSlider()

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