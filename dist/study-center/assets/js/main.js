'use-strict';

window.addEventListener('DOMContentLoaded', () => {
  const burgerBtn = document.querySelector('header .burger-button'),
        studyCardsSlider = document.getElementById('study-cards-slider'),
        studyCardAmounts = document.querySelectorAll('.study__card-amount'),
        studyCards = studyCardsSlider.querySelectorAll('.study__card'),
        servicesCardsSlider = document.getElementById('services-cards__slider'),
        servicesCards = servicesCardsSlider.querySelectorAll('.services__card'),
        articlesSlider = document.getElementById('articles-slider'),
        articlesCards = articlesSlider.querySelectorAll('.articles__card');

  burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('burger-button_open');
  });

  /* SLIDERS */
  const activatePromoSlider = () => {
    $('#promo-slider').slick({
      prevArrow: '<svg class="slider__arrow-prev slick-prev slick-arrow"><use xlink:href="./assets/images/svg/symbol/sprite.svg#arrow"></use></svg>',
      nextArrow: '<svg class="slider__arrow-next slick-next slick-arrow"><use xlink:href="./assets/images/svg/symbol/sprite.svg#arrow"></use></svg>',
  
      responsive: [{
        breakpoint: 768,
        settings: {
          arrows: false,
          dots: true
        }
      }]
    });
  };
  activatePromoSlider();

  const activateStudyCardsSlider = () => {
    $('#study-cards-slider').slick({
      prevArrow: '<svg class="study-cards__controls-prev slick-prev slick-arrow"><use xlink:href="./assets/images/svg/symbol/sprite.svg#arrow"></use></svg>',
      nextArrow: '<svg class="study-cards__controls-next slick-next slick-arrow"><use xlink:href="./assets/images/svg/symbol/sprite.svg#arrow"></use></svg>',
      slidesToShow: 1,
    });
  };
  
  const activateServicesCardsSlider = () => {
    $('#services-cards__slider').slick({
      prevArrow: '<svg class="services-cards__slider-prev slick-prev slick-arrow"><use xlink:href="./assets/images/svg/symbol/sprite.svg#arrow"></use></svg>',
      nextArrow: '<svg class="services-cards__slider-next slick-next slick-arrow"><use xlink:href="./assets/images/svg/symbol/sprite.svg#arrow"></use></svg>',
    });
  };

  const activateArticlesSlider = () => {
    $('#articles-slider').slick({
      arrows: false,
      dots: true,
      // autoplay: true,
      autoplaySpeed: 3000
    });
  };

  const correctElemPosition = () => {
    studyCardAmounts.forEach(item => {
      if (!item.textContent.includes('п', 3)) {
        item.style.right = '-6%';
      }
    });
  };
  correctElemPosition();



  const adaptSlides = (sliderWrap, selector, sliderCards, xlAmount, lgAmount, mdAmount, smAmount, xsAmount, startSlider) => {
    let slideWrap = document.createElement('div'),
        counter = 0;

    slideWrap.classList.add(selector);

    function removeSlides() {
      sliderWrap.childNodes.forEach(item => {
        if (item.classList && item.classList.contains(selector)) {
          item.remove();
        }
      });
      assemblySlides();
    }

    function assemblySlides() {
      let clonedSlideWrap = slideWrap.cloneNode(true);

      const resetClonedSlide = (amount, i) => {
        if (counter === amount || (counter <= amount && sliderCards.length - 1 === i)) {
          sliderWrap.insertAdjacentElement('beforeend', clonedSlideWrap);
          clonedSlideWrap = slideWrap.cloneNode(true);
          counter = 0;
        }
      }

      sliderCards.forEach((item, i) => {
        if (!item.matches('.hidden')) {
          clonedSlideWrap.insertAdjacentElement('beforeend', item);
        }
        counter++;

        if (window.innerWidth > 992) {
          resetClonedSlide(xlAmount, i);
        } else if (window.innerWidth <= 992 && window.innerWidth > 768) {
          resetClonedSlide(lgAmount, i);
        } else if (window.innerWidth <= 768 && window.innerWidth > 576) {
          resetClonedSlide(mdAmount, i);
        } else if (window.innerWidth <= 576 && window.innerWidth > 460) {
          resetClonedSlide(smAmount, i);
        } else if (window.innerWidth <= 460) {
          resetClonedSlide(xsAmount, i);
        }
      });

      startSlider();
    }

    removeSlides();
  };
  adaptSlides(studyCardsSlider, 'study-cards__slide', studyCards, 6, 6, 4, 2, 2, activateStudyCardsSlider);
  adaptSlides(servicesCardsSlider, 'services-cards__slide', servicesCards, 4, 3, 2, 2, 1, activateServicesCardsSlider);
  adaptSlides(articlesSlider, 'articles__slide', articlesCards, 3, 3, 2, 2, 1, activateArticlesSlider);



  const toggleSliderCategories = (sliderId) => {
    const articles = document.querySelector('.articles');

    articles.addEventListener('click', (e) => {
      const target = e.target;

      if (target.matches('.articles__button')) {
        slidesFiltration(target.getAttribute('data-cat'));
      }
    });
    
    const slidesFiltration = (attr) => {
      $(sliderId).slick('unslick');

      articlesCards.forEach(item => {
        if (item.getAttribute('data-cat') === attr || attr === 'all') {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });
    };
  };
  // toggleSliderCategories('#articles-slider');
});