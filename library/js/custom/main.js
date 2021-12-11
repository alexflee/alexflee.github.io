
$(window).on('scroll', function() {
    var scrollTop = $(this).scrollTop();

    $('.to-fade-in').each(function() {
      var topDistance = $(this).offset().top;
      if ( (topDistance-500) < scrollTop ) {
        $(this).addClass('fade-in');
      }
    });

    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".header").addClass("header--reduce");
    } else {
        $(".header").removeClass("header--reduce");
    }

});

function initMap() {}

$(document).ready(function(){

    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".header").addClass("header--reduce");
    }


    //mobile nav switch
    $('#nav-icon').click(function(){
        $(this).toggleClass('open');
        $('.main-nav__navigation').toggleClass('main-nav__navigation--active');
        $('.main-nav').toggleClass('add-bg');
    });

    //open sub nav
    $('.nav--plus').click(function(){
        if ($(this ).hasClass( "open-nav" )){
            $(this).parent().find('.mobile-nav').toggleClass('mobile-nav--active');
        }
    });

    //mobile hide classes
    function screenClass() {
        if($(window).innerWidth() > 768) {
            $('.main-nav__navigation').removeClass('main-nav__navigation--active');
            $('.main-nav').removeClass('add-bg');
            $('#nav-icon').removeClass('open');
            $('.nav--plus').removeClass('open-nav');
            $('.mobile-nav').removeClass('mobile-nav--active');
        }else{
            $('.nav--plus').addClass('open-nav');
        }
    }

    // Fire.
    screenClass();

    // And recheck if window gets resized.
    $(window).bind('resize',function(){
        screenClass();
    });

    if($('#map').length){

      //google maps
      var map;
      function initMap() {
        var center = {lat: 53.820480, lng: -1.251990};
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 53.820480, lng: -1.251990},
          zoom: 9
        });
        var marker = new google.maps.Marker({position: center, map: map});
      }

      window.initMap = initMap;

    }else{
      function initMap() {}
    }



});
