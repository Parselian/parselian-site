
$(window).load(function () {
  $(".transition-loader").delay(3000).addClass('inactive');
  $('html').css('overflow-y', 'auto');
  
  /* SLIDER */
  $('.main').slick({
    dots: true,
    fade: true,
    infinite: true,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 3000
  });
  $('.main__slide').each(function() {
    $(this).removeClass('inactive');
  });

  

  /* MASKED INPUT */
  $("input[name='user_phone']").mask("(999) 999-9999");

  /* OPEN MODALS */
  $('.button__alternative-action, .certificates__info-button').click(() => {
    $('.popup-order-call').toggleClass('open');
  });
  $('.open-order-scan, .prices__list-button').click(() => {
    $('.popup-order-scan').toggleClass('open');
  });
  $('.popup__close').click(() => {
    $('.popup').removeClass('open');
  });



  /* AJAX */
  $('form').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      data: $(this).serialize()
    }).done(function() {
      $(this).find("input").val("");
      console.log('done');
      $('.popup-thanks').addClass('open');
      $("form").trigger("reset");
    });
    return false;
  });

  new WOW().init();
});