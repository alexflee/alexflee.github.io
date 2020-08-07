


$(document).ready(function(){

    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".header").addClass("header--reduce");
    }


    //mobile nav switch
    $('#information').click(function(){
        $('.information-more').toggleClass('active');
        $(this).toggleClass('active');

        if ($(this ).hasClass( "active" )){
          $(this).attr('aria-expanded', 'true');
          $('.information-more').data('hidden', 'false');
        }else{
          $(this).attr('aria-expanded', 'false');
          $('.information-more').data('hidden', 'true');
        }
    });

    //open sub nav
    $('.nav--plus').click(function(){
        if ($(this ).hasClass( "open-nav" )){
            $(this).parent().find('.mobile-nav').toggleClass('mobile-nav--active');
        }
    });

});
