$(window).load(function () {
	$(".loader").delay(100).removeClass('loader_show')
});


/* AUDIO PLAYER INIT */
GreenAudioPlayer.init({
	selector: '.music-tracks__player', // inits Green Audio Player on each audio container that has class "player"
	stopOthersOnPlay: true
}); 

/* SMOOTH SCROLL */
let $page = $('html, body');
$('a[href*="#"]').click(function () {
		$page.animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 1000);
		$('.navbar-menu').removeClass('show');
		$('.navbar-burger').removeClass('open');
		return false;
	});
	
	
/* OPEN BURGER */
$('.burger__button').click(function () {
	$('.burger-menu').toggleClass('open');
  $('.burger__button').toggleClass('arrow-slide');
});

$('.burger-menu__item > a').click(function () {
	$('.burger__button').toggleClass('arrow-slide');  
  $('.burger-menu').toggleClass('open');
});

