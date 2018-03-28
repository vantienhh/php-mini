$(document).ready(function() {

var search='<i class="fas fa-search color-white "></i>';
var cancel='<i class="fas fa-ban"></i>';


    $(document).on('click','.mobile-icon-search', function(){
        event.preventDefault();        if ($('.mobile-icon-search').html()==search) {
            alert('aaa');
        }
        // $('.mobile-icon-search').html(cancle);
    });

    $(".search1-input").attr('type','hidden');

    $(".right-search1").click(function(event) {
        if ($(".search1-input").attr('type','hidden')) {
            $(".search1-input").attr('type','text');
            // $(".bar-left").hide();
            $(".navbar-nav").css('width','0px');
        }
    });

     $(window).bind('resize', function(){
         if($(window).width()>767){
            $(".right-search1").click(function(event) {
              if ($(".search1-input").attr('type','hidden')) {
                $(".search1-input").attr('type','text');
                $(".bar-left").hide();
                $(".navbar-nav").css('width','0px');
                }
             });
         }
    });



    $(".right-seach2").click(function(event) {
        $(".search2-input").attr('type','text');
        $(".contact").hide();
        $(".coop").hide();
        $(".about").hide();
    });

    $(window).bind('resize', function(){
    if($(window).width() > 991)
        $(".title-btn").click(function(event) {
            $(".right-search1").hide();
        });
    });


     $('.owl-carousel-3').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
    })

    $('.owl-carousel-2').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
    })

});
