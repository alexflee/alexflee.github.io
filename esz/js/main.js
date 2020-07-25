///////////////////////////////

//do the circle icon animations

///////////////////////////////
/*
var num = -1;
var cont = 3;

window.setInterval(function () {

  // if 4 then reset
  if(num == 5){
    num = -1;
    $('#item1, #item2, #item3, #item4').removeClass();
  }
  if(cont == 9){
    cont = 3;
    $('#item5, #item6, #item7, #item8').removeClass();
  }
  //add so we cycle through items
  num = num + 1;
  cont = cont + 1;

  //get a random 1-8 1-6 what we do
  var random = 1 + Math.floor(Math.random() * 8);
  var random2 = 1 + Math.floor(Math.random() * 6);

  //get a random 1-8 1-6 contact
  var random3 = 1 + Math.floor(Math.random() * 5);

  //add random class animation to item
  $("#item" + num).addClass('direction' + random);
  $("#item" + num).addClass('skill' + random2);
  $("#item" + cont).addClass('direction' + random);
  $("#item" + cont).addClass('contact' + random3);

}, 1000);
*/


///////////////////////////////

//parralax

///////////////////////////////

(function(){

  var parallax = document.querySelectorAll(".parra"),
      speed = 0.03;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "100% " + (windowYOffset * speed) + "px";

      el.style.backgroundPosition = elBackgrounPos;

    });
  };

})();

///////////////////////////////

//REMOVE PARA ON MOBILE

///////////////////////////////

jQuery(document).resize(function () {
    var screen = $(window)    
    if (screen.width() < 600) {
        $(".office").removeClass('parra');
    }
    else {
        $(".office").addClass('parra');
    }
});


///////////////////////////////

//HEADER ON SCROLL

///////////////////////////////

function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 40,
            header = document.querySelector("nav");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();

///////////////////////////////

//SCROLL TO SECTION

///////////////////////////////

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


  //safe
  $('a').on('click touchend', function(e) {
    var el = $(this);
    var link = el.attr('href');

    $('html, body').animate({
        scrollTop: $( $.attr(this, link) ).offset().top
    }, 800);
  });

});


$(document).on('scroll', function() {
    if($(this).scrollTop()>=$('#who').position().top -10){
    	$('.who').addClass('here');
    	$('.what').removeClass('here');
    	$('.contact').removeClass('here');
    }
    if($(this).scrollTop()>=$('#whatwedo').position().top -10){
    	$('.what').addClass('here');
    	$('.who').removeClass('here');
    	$('.contact').removeClass('here');
    }
    if($(this).scrollTop()>=$('#office').position().top -10){
    	$('.contact').addClass('here');
     	$('.what').removeClass('here');
     	$('.who').removeClass('here');
   }
})

///////////////////////////////

//FORM CONFIRMATION

///////////////////////////////

$(document).ready(function() {
    
    if (window.location.href.indexOf("contactdone") > -1) { // etc
      $('#contactdone').addClass('show');
    }

});