
$(document).ready(function () {
    //preloader
    $(".loading-overlay .loader").fadeOut(2500,function (){
        $("body").css("overflow","auto");
       $(this).parent().fadeOut
       (500,function (){
        $(this).remove();
       });	
   	});

    /*=====menu=====*/
    var bottom=$("header").outerHeight();
	var header=$("header").offset().top + bottom;
     $(window).scroll(function(){
    /*intestazione riparata solo quando la larghezza della finestra è superiore a 991px */
         if($(window).width() > 991){
     	if($(window).scrollTop() >= header){
     		$("header").addClass("sticky");
     	}
     	else{
     	 $("header").removeClass("sticky");	
     	}
     }
     });
     // navbar active link
     $(".navbar ul li a").click(function(){
     	 $(".navbar ul li a").removeClass("active");
     	 $(this).addClass("active");
     });
  
    $(".ham-burger").click(function(){
    	$(this).toggleClass("active");
    	$(".navbar").toggleClass("open");
    });

    //barra scorimento
    $(window).scroll(function(){
        if($(this).scrollTop() > 600){
            $('.topbtn').fadeIn();
        }
        else{
            $('.topbtn').fadeOut();
        }
    });
    $('.topbtn').click(function(){
        $('html, body').animate({
            scrollTop:0
        },800);
    });

    //inserimento video
    $('.videoshow').hover(function(){
        $(this).children('video')[0].play();
    },function(){
        $(this).children('video')[0].pause();
    });
      
});
