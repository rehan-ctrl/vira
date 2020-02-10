/* init Jarallax */
        // $('.jarallax').jarallax({
        //     // speed: 0.5,
        //     // imgWidth: 1024,
        //     // imgHeight: 800
        // })
        $(document).ready(function() {
  $( ".card" ).hover(
  function() {
    $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg');
  }
);
  
// document ready  
});
$('.menu__link').click(function(){
	$('.menu__item').removeClass('menu__item--current');
	$(this).closest('li').addClass('menu__item--current');
})

$(".mrq").kxbdMarquee({direction:"up",isEqual:false});

$(".ts-menu").mouseenter(function() {
    $('.menu-child').fadeIn();
});
$(".menu-child").mouseleave(function() {
    $('.menu-child').fadeOut();
});

var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('RESPONSIBLE')
    .pauseFor(2000)
    .deleteAll()
    .typeString('RELIABLE')
    .pauseFor(2000)
    .deleteAll()
    .typeString('CREATIVE')
    .pauseFor(2000)
    .deleteAll()
    .typeString('EXPERIENCED')
    .pauseFor(2000)
    .deleteAll()
    // .deleteChars(7)
    // .typeString('altered!')
    .start();