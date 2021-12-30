'use strict';

class SliderCarousel {
  constructor({
    main, 
    wrap, 
    prev, 
    next, 
    infinity = false, 
    position = 0, 
    slidesToShow = 3,
    responsive = []
  }) {
    if(!main || !wrap) {
      console.warn('slider-carousel: необходимо 2 свойства, "main и" "wrap"');
    }

    this.main = document.querySelector(main); //получаем обертку всего слайдера
    this.wrap = document.querySelector(wrap); //получаем обертку итемов(картинок)
    this.prev = document.querySelector(prev); //получаем кнопку "назад"
    this.next = document.querySelector(next); //получаем кнопку "веперед"
    this.slides = document.querySelector(wrap).children; //
    this.slidesToShow = slidesToShow; // его зн. == кол-ву отобр. слайдов
    this.options = {
      position,
      infinity,
      slidesWidth : Math.floor(100 / this.slidesToShow)
    };
    this.responsive = responsive;
  }

  init() { // в нем просто вызываем все методы нашего объекта
    this.addClassSlider(); //зап. ф-цию добавления классов на эл-ты слайдера
    this.addStyles(); // зап ф-цию добавления стилей к эл-там слайдера
    
    if( this.prev && this.next ) { //if нажали на btn в слайдере => start func
      this.controlSlider();
    } else { // иначе запускаем ф-цию добавления кнопок перекл. слайдов
      this.addArrow();
      this.controlSlider();
    }

    if( this.responsive ) {
      this.responseInit();
    }
  }

  addClassSlider() {
    this.main.classList.add('glo-slider'); //вешаем класс на main
    this.wrap.classList.add('glo-slider__wrap'); //вешаем класс на wrap

    for ( const key of this.slides ) {
      key.classList.add('glo-slider__item'); //вешаем класс на кажд. итем(карт.)
    }
  }

  addStyles() {
    let style = document.querySelector('#glo-style');

    if (!style) {
      style = document.createElement('style');//переменная для стилей слайдера
      style.id = 'glo-style'; //добавляем ей id
    }

    //прописываем все стили, которые будут применяться ко всем эл-там слайдера
    style.textContent = `
      .glo-slider {
        overflow: hidden !important
      }

      .glo-slider__wrap {
        display: flex !important;
        transition: transform 0.5s !important;
        will-change: transform !important
      }

      .glo-slider__item {
        flex: 0 0 ${this.options.slidesWidth}% !important;
        margin: auto 0 !important
      }

      .glo-slider__prev, 
      .glo-slider__next {
        margin: 0 20px;
        border: 20px solid transparent;
        background: transparent;
      }

      .glo-slider__prev {
        border-left-color: #19bbff;
        transform: rotate(180deg);
      }

      .glo-slider__next {
        border-left-color: #19bbff
      } 

      .glo-slider__prev:hover,
      .glo-slider__next:focus,
      .glo-slider__prev:focus,
      .glo-slider__next:hover {
        background: transparent;
        outline: none;
      }
    `; 

    document.head.appendChild(style); //добавляем эл-т со стилями во внутрь head
  }

  controlSlider() { //навешиваем обработчики соб. на кнопки упр. слайдером
    this.prev.addEventListener('click', this.prevSlider.bind(this));
    this.next.addEventListener('click', this.nextSlider.bind(this));
  }

  prevSlider() { //if нажали на кнопку назад => пролистываем на 1 слайд назад
    if(this.options.infinity || this.options.position > 0 ) { //if pos > 0 => можно листать назад
      --this.options.position; // с кажд. кликом отнимаем 1 из знач. position

      if( this.options.position < 0) {
        this.options.position = this.slides.length - this.slidesToShow;
      }

      this.wrap.style.transform = `translateX(-${this.options.position * this.options.slidesWidth}%)`;
    }
  }

  nextSlider() { //if нажали на кнопку next => пролистываем на 1 слайд dgthtl
    if(this.options.infinity || this.options.position < this.slides.length - this.slidesToShow) {
      ++this.options.position;

      if( this.options.position > this.slides.length - this.slidesToShow) {
        this.options.position = 0;
      }
      
      this.wrap.style.transform = `translateX(-${this.options.position * this.options.slidesWidth}%)`;
    }
  }

  addArrow(){
    this.prev = document.createElement('button');
    this.next = document.createElement('button');

    this.prev.className = 'glo-slider__prev';
    this.next.className = 'glo-slider__next';

    this.main.appendChild(this.prev);
    this.main.appendChild(this.next);
  }

  responseInit() {
    const slidesToShowDefault = this.slidesToShow,
          allResponse = this.responsive.map(item => item.breakpoint),
          maxResponse = Math.max(...allResponse);

    const checkResponse = () => {
      const windowWidth = document.documentElement.clientWidth;

      if( windowWidth < maxResponse ) {
        for ( let i = 0; i < allResponse.length; i++ ) {
          if( windowWidth < allResponse[i] ) {
            this.slidesToShow = this.responsive[i].slideToShow;
            this.options.slidesWidth = Math.floor( 100 / this.slidesToShow );
            this.addStyles();
          }
        } 
      } else {
        this.slidesToShow = slidesToShowDefault;
        this.options.slidesWidth = Math.floor( 100 / this.slidesToShow );
        this.addStyles();
      }
    };

    checkResponse();

    window.addEventListener('resize', checkResponse);
  }
}