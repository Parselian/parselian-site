    /**
 * jQuery.browser.mobile (http://detectmobilebrowser.com/) */
// (function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);



$(function(){

  // $("img.lazy").lazyload();
	// $('.color-overlay').height($('.bg1').outerHeight());
	new WOW().init();
	// if($(window).outerWidth()<=991){
	// 	$('input[name="phone"]').removeClass('phone');
	// }
	
	$('.contactform1').submit(function() { 
	  if ( $(this).validationEngine('validate') ) {
	      $(this).ajaxSubmit();
	      // var goal = $(this).data('goal');
	      $(this).clearForm();
	      $.arcticmodal('close');	      
	      $(".thanks").arcticmodal();
	  }
	  return false;
	}); 



	// function alturaMaxima() {
	//   var altura = $(window).height();
	//   $(".full-screen").css('height',altura); 
	  
	// }

	// $(document).ready(function() {
	//   if(jQuery.browser.mobile){
	//   	$('.bg1').css('height','700px');
	//   	$('.bg1').css('min-height','700px');
	//   } else {
	//   	alturaMaxima();
	//   	$(window).bind('resize', alturaMaxima);
	//   }
	// });


	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	  var msViewportStyle = document.createElement('style')
	  msViewportStyle.appendChild(
	    document.createTextNode(
	      '@-ms-viewport{width:auto!important}'
	    )
	  )
	  document.querySelector('head').appendChild(msViewportStyle)
	}

	$(".callback1").on("click", function(){
	    $(".popup1").arcticmodal();
	    return false;
	});
	$(".callback2").on("click", function(){
	    $(".popup2").arcticmodal();
	    return false;
	});
	$(".callback3").on("click", function(){
	    $(".popup3").arcticmodal();
	    return false;
	});
	$(".callback4").on("click", function(){
	    $(".popup4").arcticmodal();
	    return false;
	});
	$(".callback5").on("click", function(){
	    $(".popup5").arcticmodal();
	    return false;
	});
	$(".callback6").on("click", function(){
	    $(".popup6").arcticmodal();
	    return false;
	});
	
	$('.bg2 .btn-group1 button').on('click', function(event) {
		var device = $(this).data('device');
		$('.bg2 .devices').fadeOut(0);
		$('.bg2 .' + device).fadeIn(300);
		$(this).closest('.devices').removeClass('active');
		$(this).addClass('active');
		$('.bg2 .btn-group1 button').removeClass('active');
		$(this).addClass('active');
		new WOW().init();
	});

	$('.bg2 .btn-group2 button').on('click', function(event) {
		var btn = $(this).data('btn');
		$(this).closest('.devices').find('.models').fadeOut(0);
		$('.bg2 .models[data-model="' + btn + '"]').fadeIn(300);
		$(this).closest('.devices').find('.btn-group2').find('button').removeClass('active');
		$(this).addClass('active');
		new WOW().init();
	});


	$.each($('.minconf span.textbtn'), function(index, val) {
        $(val).text($(val).closest('form').find('button, input[type="submit"]').text());
    });



	$("a[href='#gift']").click(function() {
		var link = $(this).attr('href');
	    $('html, body').animate({
	        scrollTop: $('#gift').offset().top
	    }, 700);
	    return false;
 	 });
	

	$(".mouse").click(function() {
		var link = $(this).attr('href');
	    $('html, body').animate({
	        scrollTop: $('.bg2').offset().top
	    }, 700);
	    return false;
 	 });
	

	$("header ul li a").click(function() {
		var link = $(this).attr('href');
	    $('html, body').animate({
	        scrollTop: $(link).offset().top
	    }, 700);
	    return false;
 	 });
	

	// var owl = $("#carous1");

	// owl.owlCarousel({
	//     loop:true,
	//     items:1,
	//     margin:0,
	//     nav:false,
	//     mouseDrag:true,
	//     touchDrag:true,
	//     dots:true,
	//     animateOut: 'fadeOut',
 //      autoplay:true,
 //      autoplayTimeout:7000,
 //      autoplayHoverPause:true,
	//     dotsEach:false
	// });

	// $('.bg5 .fa-angle-left').click(function() {
	//   owl2.trigger('prev.owl.carousel');
	// });
	// $('.bg5 .fa-angle-right').click(function() {
	//   owl2.trigger('next.owl.carousel');
	// });


});