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

// var app = document.getElementById('app');

// var typewriter = new Typewriter(app, {
//     loop: true
// });

// typewriter.typeString('RESPONSIBLE')
//     .pauseFor(2000)
//     .deleteAll()
//     .typeString('RELIABLE')
//     .pauseFor(2000)
//     .deleteAll()
//     .typeString('CREATIVE')
//     .pauseFor(2000)
//     .deleteAll()
//     .typeString('EXPERIENCED')
//     .pauseFor(2000)
//     .deleteAll()
//     // .deleteChars(7)
//     // .typeString('altered!')
//     .start();

document.addEventListener('DOMContentLoaded',function(event){
  // array with texts to type in typewriter
  var dataText = [ "RESPONSIBLE", "RELIABLE", "CREATIVE", "EXPERIENCED"];
  
  // type one text in the typwriter
  // keeps calling itself until the text is finished
  function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    if (i < (text.length)) {
      // add next character to h1
     document.getElementById("app").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      setTimeout(function() {
        typeWriter(text, i + 1, fnCallback)
      }, 200);
    }
    // text finished, call callback if there is a callback function
    else if (typeof fnCallback == 'function') {
      // call callback after timeout
      setTimeout(fnCallback, 700);
    }
  }
  // start a typewriter animation for a text in the dataText array
   function StartTextAnimation(i) {
     if (typeof dataText[i] == 'undefined'){
        setTimeout(function() {
          StartTextAnimation(0);
        }, 200);
     }
     // check if dataText[i] exists
    if (i < dataText[i].length) {
      // text exists! start typewriter animation
     typeWriter(dataText[i], 0, function(){
       // after callback (and whole text has been animated), start next text
       StartTextAnimation(i + 1);
     });
    }
  }
  // start the text animation
  StartTextAnimation(0);
});