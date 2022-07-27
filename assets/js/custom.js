
$(document).ready(function() {
	"use strict";
	
	/*SCROLl a div Script*/
	
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 1000);
	});
		function scrollToID(id, speed){
		var offSet = 87;
		var targetOffset = $(id).offset().top - offSet;
		$('html,body').animate({scrollTop:targetOffset}, speed);
	}
	/*SCROLl a div Script END*/
	
	
$('.enq_btn').click( function() {
	$(".form_wrapper").toggleClass("active");
});
	
$('.bottom_fixed ul > li.enq a').click( function() {
	$(".form_wrapper").toggleClass("active");
});
$('.close_form').click( function() {
	$(".form_wrapper").removeClass("active");
});	

if($(window).width() > 1023){
   $(window).bind("scroll", function () {
        if ($(this).scrollTop() > 200) {
            $("header").addClass('active');
        } 
        else {
            $('header').removeClass('active');
        }  
    });
}	
	
	
if ((screen.width<=767)){
    $(".flexbox > .col-3 > h3").click(function(){
        if($(this).next("footer .accrd_body").is(":visible")){
            $(this).next("footer .accrd_body").slideUp();
			$(this).prev(".flexbox > .col-3").addClass('active');
        }
        else{
            $("footer .accrd_body").slideUp();
            $(this).next("footer .accrd_body").slideDown();
        }
     });	
}	
	
	
		
	
$('.hamburger').click(function(){
    $(this).toggleClass('open');
    $(".navigation").toggleClass("open");
});	
	
$('.product_carousel').owlCarousel({
    margin:1,
    responsiveClass:true,
	autoplay:false,
    autoplayTimeout:5000,
	smartSpeed: 1000,
	nav:true,
	navText: [ '<img src="images/arrow-left.webp" alt="">', '<img src="images/arrow-right.webp" alt="">' ],
	dots:true,
	loop:false,
	lazyLoad:true,
    responsive:{
        0:{
        	items:1,
			nav:false
        },
        480:{
        	items:1,
			nav:false
        },
        768:{
        	items:1
        },
        1024:{
        	items:1
        }
      }
	}); 	

	
	$('.story_carousel').owlCarousel({
    margin:1,
    responsiveClass:true,
	autoplay:false,
    autoplayTimeout:5000,
	smartSpeed: 1000,
	nav:true,
	navText: [ '<img src="images/arrow-left.webp" alt="">', '<img src="images/arrow-right.webp" alt="">' ],
	dots:true,
	loop:false,
	lazyLoad:true,
    responsive:{
        0:{
        	items:1,
        },
        480:{
        	items:1
        },
        768:{
        	items:1
        },
        1024:{
        	items:1
        }
      }
	}); 
	
$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		focusOnSelect: true,
		arrows: true,
		dots: false,
    });	
	
	

	
	
 
	
AOS.init();	
	
});// End of Document.ready


// Detect request animation frame
var scroll = window.requestAnimationFrame ||
function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll'); 
function loop() {
    Array.prototype.forEach.call(elementsToShow, function(element){
      if (isElementInViewport(element)) {
        element.classList.add('is-visible');
      } else {
        element.classList.remove('is-visible');
      }
    });

    scroll(loop);
}

loop();
function isElementInViewport(el) {
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}
// END Detect request animation frame



document.addEventListener("mousemove", parallax);
function parallax(e){
    this.querySelectorAll('.layer').forEach(layer => {
        const speed = layer.getAttribute('data-speed')

        const x = (window.innerWidth - e.pageX*speed)/100
        const y = (window.innerHeight - e.pageY*speed)/100

        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}


