/* ---------------------------------
Javascript(jQuery)

version: 1.0
author : Fathan Rohman
email  : karir.fathan@gmail.com
-----------------------------------*/

$(window).on('load', function(){
  $("#spinner").fadeOut("slow");
});

// $(document).on("scroll", function() {
//   if($(document).scrollTop()>0) {
//     $("#resize-menu").removeClass("navbar--no-color").addClass("navbar--is-color");
//   } else {
//     $("#resize-menu").removeClass("navbar--is-color").addClass("navbar--no-color");
//   }  
// });

$(document).ready(function () {
	// new WOW().init();
  // BACK TO TOP
  if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
    backToTop = function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > scrollTrigger) {
        $('#back-to-top').addClass('show');
      } else {
        $('#back-to-top').removeClass('show');
      }
    };
    
    backToTop();
    $(window).on('scroll', function () {
      backToTop();
    });

    $('#back-to-top').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 700);
    });
  }

	// TOOLTIP
	$('[data-toggle="tooltip"]').tooltip()

	// SCROLL TO FIXED
	$('#header-corporate').scrollToFixed();

  // PROGRESS SLIDER Home
  var percent = 0, bar = $('.transition-timer-carousel-progress-bar'), crsl = $('#bootstrap-touch-slider');
  
  function progressBarCarousel() {
    bar.css({width:percent+'%'});
    percent = percent +0.5;
    if (percent>100) {
      percent=0;
      crsl.carousel('next');
    }      
  }

  crsl.carousel({
    interval: false,
    pause: true
  }).on('slid.bs.carousel', function () {});

  var barInterval = setInterval(progressBarCarousel, 30);

  crsl.hover(
    function(){
      clearInterval(barInterval);
    },
    function(){
      barInterval = setInterval(progressBarCarousel, 30);
    }
  )

	// SET HEIGHT CAROUSEL HOME
	// $('.body-carousel .carousel-corporate').each(function(){
	// 	var topSlider = $('.body-carousel').outerWidth() / 1.0;
	// 	$(this).css('height', topSlider);
	// });


	// CAROUSEL HOME NEWS
  // var owl = $(".owl-carousel");
  // owl.owlCarousel({
  //     items : 1, //10 items above 1000px browser width
  //     itemsDesktop : [1000,1], //5 items between 1000px and 901px
  //     itemsDesktopSmall : [900,1], // betweem 900px and 601px
  //     itemsTablet: [600,1], //2 items between 600 and 0
  //     itemsMobile : [400,1] // itemsMobile disabled - inherit from itemsTablet option
  // });
  // $(".next").click(function(){
  //   owl.trigger('owl.next');
  // })
  // $(".prev").click(function(){
  //   owl.trigger('owl.prev');
  // })

  // NAVBAR HOVER OVERLAY
  // $(".dropdown").hover(function(){
  //   $("#cover").toggleClass('overlay');
  // });

  // FANCYBOX
  // $('.fancybox-media').fancybox({
  //   openEffect  : 'none',
  //   closeEffect : 'none',
  //   helpers : {
  //     media : {}
  //   }
  // });
});