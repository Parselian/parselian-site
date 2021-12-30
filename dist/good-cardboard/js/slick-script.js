$('.production-slider_top').slick({
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.production-slider_bottom',
  responsive: [{
    breakpoint: 768,
      settings: {
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
      nextArrow: '<div class="slider-arrow slider-arrow_right"></div>'
      },

    breakpoint: 576,
    settings: {
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
      nextArrow: '<div class="slider-arrow slider-arrow_right"></div>'
    },
  }, ]
});

$('.production-slider_bottom').slick({
  arrows: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_left"></div>',
  nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_right"></div>',
  asNavFor: '.production-slider_top',
});

$('.feedback-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: '<div class="slider-arrow slider-arrow_feed slider-arrow_left"></div>',
  nextArrow: '<div class="slider-arrow slider-arrow_feed slider-arrow_right"></div>',
  responsive: [{
    breakpoint: 991,
      settings: {
        arrows: true,
        slidesToShow: 2,
      },
    }, {
    breakpoint: 769,
      settings: {
        slidesToShow: 1,
      },
  }, ]
});