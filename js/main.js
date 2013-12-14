;(function( $ ){

	$(function(){
		/* DROPDOWN */

		if($(window).width() < 940){
			$('.menuLink').on('click',openMenu);
			
			
		}
		else if($(window).width() > 940){
/*
			$('.invisible-link a.moreLink').on('mouseenter', showDropDown);
			$('.maxDev').on('mouseenter', showDropDown);
			$('.maxDev').on('mouseleave', hideDropDown);
			$('.invisible-link a.moreLink').on('mouseleave', hideDropDown);*/
		}
		$('.moreLink').on('click',openLink);

		$('.showItems').on('click',openBasket);

		/* END DROPDOWN */
		/*LINKOVER*/
		
		
		

		/*END LINKOVER*/
		if($(window).width() > 940){
			$('.invisible-link').css({display:"block"})
		}
		$(window).resize(function(){
			if($(window).width() >= 940){
				$('.invisible-link').css({display:"block"})
			}else{
				$('.invisible-link').css({display:"none"})
			}
		});

		$(window).load(function(){

			$('.intro .item1').css({
				"-webkit-transform":"translate3D(310px,0,0)",
				opacity:1,
			});
			$('.intro .item2').css({
				"-webkit-transform":"translate3D(-310px,0,0)",
				opacity:1,
			});
			/*$('.intro h3').css({
				"-webkit-transform":"translate3D(0,100px,0)",
				opacity:1,
			});*/

	})

	});
var showDropDown = function( e ){
	
	$(this).parent().find('.maxDev').slideDown();

};
var hideDropDown = function( e ){
	
	$(this).parent().find('.maxDev').slideUp();

};
var showDev = function( e ){

	$(this).css('opacity','1');
};
var openMenu = function( e ){
	e.preventDefault();
	$('.invisible-link').slideToggle();
};
var openLink = function( e ){
	var $findMenu = $(this).parent().find('.maxDev');
	e.preventDefault();
	$findMenu.slideToggle();
		//$findMenu.css('height','100%');
		if($(this).find('span').hasClass('icon icon-chevron-right-white') && $findMenu ){
			$(this).find('span').removeClass('icon icon-chevron-right-white').addClass('icon icon-chevron-bottom-white');
		}
		else
		{
			$(this).find('span').removeClass('icon icon-chevron-bottom-white').addClass('icon icon-chevron-right-white');	
		}

	};
	var openBasket = function( e ){
		e.preventDefault();
		$('.panierItem').slideToggle();
	};



}).call(this,jQuery);