'use-strict';

window.addEventListener('DOMContentLoaded', () => {
  const disablePreloader = () => {
    setTimeout(() => {
      document.querySelector('.preloader').classList.remove('preloader_visible');
    }, 1000);
  };
  disablePreloader();

  const toggleBurgerMenu = () => {
    const burger = document.querySelector('.burger'),
          burgerBtn = burger.querySelector('.burger__button');

    burger.addEventListener('click', (e) => {
      const target = e.target;

      if (target.closest('.burger__button') || target.closest('.burger__menu-link')) {
        burger.classList.toggle('burger_show');
        burgerBtn.classList.toggle('burger__button_show');
      }
    });
  };
  toggleBurgerMenu();

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

  const portfolioSlider = () => {
    const portfolio = document.querySelector('.portfolio'),
          catMenuItems = portfolio.querySelectorAll('.portfolio__menu-item'),
          portfolioCardsWrap = document.querySelector('.portfolio__cards-wrap'),
          portfolioCards = document.querySelectorAll('.portfolio__card'),
          sliderDotsWrap = document.querySelector('.portfolio__controls-dots');

    let counter = 0;

    function checkWindowWidth (dataset) {
      if (window.innerWidth > 991) {
        splittingIntoBlocks(dataset, 3);
      }
      if (window.innerWidth <= 991) {
        splittingIntoBlocks(dataset, 2);
      } 
      if (window.innerWidth <= 576) {
        splittingIntoBlocks(dataset, 1);
      } 
    }
    checkWindowWidth('economical');

    function toggleActiveCategory(target) {      
      catMenuItems.forEach(item => {
        if (item.matches('.portfolio__menu-item_active')) {
          item.classList.remove('portfolio__menu-item_active');
        }
      });

      target.classList.add('portfolio__menu-item_active');
      portfolioCardsWrap.style.transform = `translateX(0)`;
    }

    function splittingIntoBlocks (dataset = 'economical', breakpoint = 3) {
      let assembledBlock = document.createElement('div'),
          counter = 0;

      assembledBlock.classList.add('portfolio__cards-group');

      /* Remove all portfolio cards from a page */
      while (portfolioCardsWrap.firstChild) {
        portfolioCardsWrap.removeChild(portfolioCardsWrap.firstChild);
      }
      
      /* Splitting cards on a groups */
      for(let i = 0; i < portfolioCards.length; i++) {
        if (dataset === portfolioCards[i].dataset.cat || dataset === null) {
          assembledBlock.insertAdjacentElement('beforeend', portfolioCards[i]);
          counter++;
        }

        if (portfolioCards.length - i <= 1 || counter === breakpoint){
          if (assembledBlock.childNodes.length !== 0) {
            portfolioCardsWrap.insertAdjacentElement('beforeend', assembledBlock);
          }

          assembledBlock = document.createElement('div');
          assembledBlock.classList.add('portfolio__cards-group');

          counter = 0;
        }
      }

      addSliderDots();
    }

    function addSliderDots () {
      const portfolioGroups = document.querySelectorAll('.portfolio__cards-group'),
            sliderDot = document.createElement('li');
      
      sliderDot.classList.add('portfolio__controls-dot');

      /* Remove all slider dots from a page */
      while (sliderDotsWrap.firstChild) {
        sliderDotsWrap.removeChild(sliderDotsWrap.firstChild);
      }

      /* Adding dots */
      for (let i = 0; i < portfolioGroups.length; i++) {
        let clonedDot = sliderDot.cloneNode();

        if (i === 0) {
          clonedDot.classList.add('portfolio__controls-dot_active');
        }

        sliderDotsWrap.insertAdjacentElement('beforeend', clonedDot);
      }
    }

    function nextSlide(dotsValue) {
      if (counter < dotsValue - 1) {
        counter++;

        portfolioCardsWrap.style.transform = `translateX(-${100 * counter}%)`;
      } else if (counter === dotsValue - 1) {
        counter = 0;
        portfolioCardsWrap.style.transform = 'translateX(0)';
      }

      changeActiveDot(null, counter);
    }

    function prevSlide(dotsValue) {
      if (counter > 0) {
        counter--;

        portfolioCardsWrap.style.transform = `translateX(-${100 * counter}%)`;
      } else if (counter === 0) {
        counter = dotsValue - 1;
        portfolioCardsWrap.style.transform = `translateX(-${100 * counter}%)`;
      }

      changeActiveDot(null, counter);
    }

    function changeActiveDot(target, index) {
      const sliderDots = sliderDotsWrap.querySelectorAll('.portfolio__controls-dot');

      sliderDots.forEach((item, i) => {
        item.classList.remove('portfolio__controls-dot_active');

        if (index === i || target === item ) {
          item.classList.add('portfolio__controls-dot_active');
          portfolioCardsWrap.style.transform = `translateX(-${100 * i}%)`;
        }
      });
    }
    
    portfolio.addEventListener('click', (e) => {
      const target = e.target,
            dotsValue = sliderDotsWrap.querySelectorAll('li').length;

      if (target.closest('.portfolio__menu-item')) {
        toggleActiveCategory(target);
        checkWindowWidth(target.dataset.cat);
      } else if (target.closest('.portfolio__controls-arrow_left')) {
        prevSlide(dotsValue);
      } else if (target.closest('.portfolio__controls-arrow_right')) {
        nextSlide(dotsValue);
      } else if (target.closest('.portfolio__controls-dot')) {
        changeActiveDot(target);
      }
    });
  };
  portfolioSlider();

  const sliderCarousel = (wrap) => {
    const slider = document.querySelector(wrap),
          sliderWrap = slider.querySelector('.slider__wrap'),
          slides = sliderWrap.querySelectorAll('img'),
          scrolledWidth = slides[0].getBoundingClientRect().width + 30;

    let counter = 0;

    function slideToLeft() {
      if (counter < slides.length - 3) {
        counter++;

        sliderWrap.style.transform = `translateX(-${scrolledWidth * counter}px)`;
      } else if (counter === slides.length - 3) {
        counter = 0;
        sliderWrap.style.transform = 'translateX(0)';
      }
    }

    function slideToRight() {
      if (counter > 0) {
        counter--;

        sliderWrap.style.transform = `translateX(-${scrolledWidth * counter}px)`;
      } else if (counter === 0) {
        counter = slides.length - 3;
        sliderWrap.style.transform = `translateX(-${scrolledWidth * counter}px)`;
      }
    }

    slider.addEventListener('click', (e) => {
      const target = e.target;

      if (target.closest('.slider__arrow_right')) {
        slideToLeft();
      } else if (target.closest('.slider__arrow_left')) {
        slideToRight();
      }
    });
    
  };
  sliderCarousel('#carousel-1');
  sliderCarousel('#carousel-2');

  const controlVideoplayer = () => {
    const playerWrap = document.querySelector('.video__mediaplayer'),
        player = playerWrap.querySelector('video'),
        playerBtn = playerWrap.querySelector('.video__mediaplayer-playbutton');

    playerWrap.addEventListener('click', e => {
      const target = e.target;

      if (target === playerBtn && player.paused) {
        player.play();
        playerBtn.style.display = 'none';
        player.style.cursor = 'pointer';
      } else {
        player.pause();
        playerBtn.style.display = 'unset';
        player.style.cursor = 'unset';
      }
    });
  };
  controlVideoplayer();

  const activateAccordeon = () => {
    const faqWrap = document.querySelector('.faq__wrap');

    faqWrap.addEventListener('click', (e) => {
      const target = e.target;

      if (target.closest('.faq__wrap-question')) {
        target.nextElementSibling.classList.toggle('faq__wrap-answer_show');
      }
    });
  };
  activateAccordeon();

  const validateNameInputs = (selector) => {
    const input = document.querySelector(selector);

    input.addEventListener('input', () => {
      input.value = input.value.replace(/[a-zA-Z]/, '');
    });
  };
  validateNameInputs('#main__input-name');

  const sendForm = (selector) => {
    const form = document.querySelector(selector),
          loaderIcon = document.createElement('div'),
          successPopup = document.querySelector('.popup-thanks');

    let intervalId;
    
    const loader = () => {
      let angleCount = 0;

      loaderIcon.style.cssText = `
        position: absolute;
        width: 30px;
        height: 30px;
        left: 50%;
        bottom: 40px;
        border: 2px dotted gray;
        border-radius: 15px;
        z-index: 12;
      `;

      intervalId = setInterval(() => {
        if( angleCount >= 360 ) {
          angleCount = 0;
        }

        loaderIcon.style.transform = `translateX(-50%) rotate(${angleCount}deg)`;

        angleCount++;
      }, 10);

      form.insertAdjacentElement('beforeend', loaderIcon);
    };

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      loader();

      const formData = new FormData(form);

      let body = {};

      formData.forEach((val, key) => {
        body[key] = val;
      });

      return fetch('server.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(body)
      })
        .then((response) => {
          loaderIcon.remove();

          if (response.status !== 200) {
            throw new Error('Error! network status not 200');
          }

          successPopup.classList.add('popup_show');
        })
        .catch(error => console.error(error));
    });
  };
  sendForm('#main-form');
  sendForm('#projects-form');
  sendForm('#request-form');

  const togglePopup = () => {
    document.addEventListener('click', (e) => {
      const target = e.target;

      if (target.matches('.popup__button') || target.matches('.popup')) {
        target.closest('.popup').classList.remove('popup_show');
      }
    });
  };
  togglePopup();
});