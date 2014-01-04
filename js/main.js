;(function( $ ){

	$(function(){ //dans config, on peut changer les couleurs, enregistrer dans un json et les recups ave un tit js
		var $Nav = $(".nav" ),
		cWeb = '#000',
		aCours = ["web"],
		$DaySceance = $('.day').find('.sceances');
		if($(window).width() >= 800){
			$(window).scroll(function () {
				if($( window).scrollTop() >= 200){
					$Nav.css({
						position:'fixed',
						top:0,
						bottom:'auto',
						backgroundColor:'rgba(80, 151, 189, 1)',
						boxShadow:'black 0 0 4px 0',
						'-webkit-boxShadow':'black 0 0 4px 0',
						'-moz-box-shadow':'black 0 0 4px 0',
						'-ms-box-shadow':'black 0 0 4px 0',
						'-o-box-shadow':'black 0 0 4px 0',
					});
				}else{
					$Nav.css({
						position:'absolute',
						top:'auto',
						bottom:0,
						backgroundColor:'rgba(80, 151, 189, 0.4)',
						boxShadow:'black 0 0 0px 0',
						'-webkit-boxShadow':'black 0 0 0px 0',
						'-moz-box-shadow':'black 0 0 0 0',
						'-ms-box-shadow':'black 0 0 0 0',
						'-o-box-shadow':'black 0 0 0 0',
					});
				}
			});
		}
		else if($(window).width() < 800)
		{
			$Nav.css({
				position:"fixed",
			});
		}
		$.each($('.mesCours').find('.cours'),function(){
			var $type = $(this).attr('data-type');
			if($type ==="web"){ //avec les données json on boucle pour changer la couleur
				$(this).find('.titre > h3').css({
					color:cWeb,
				});
			}
		});

		if($DaySceance){
			$.each($DaySceance,function(){

				$(this).parent('.day').find('.number').css({
					color:'white',
				});
			});
		}

		/* MENU */
		$('.menuLow').on('click',openMenu);

		/* MENU */

		/* POP UP */
		$('.popup .close').on('click','a',closePopup);
		/* END POP UP */
	});
var openMenu = function( e ){
	e.preventDefault();
	var $this = $(this).parent('.wrapper').find('.menu');
	$this.slideToggle().css({
		boxShadow:'rgba(0,0,0,0.4) 0 3px 3px 0',
		'-webkit-boxShadow':'rgba(0,0,0,0.4) 0 3px 3px 0',
		backgroundColor: '#5097bd',
	});
}
var closePopup = function( e ){
	console.log($(this));
	e.preventDefault();
	$(this).parent().parent('.popup').fadeOut('fast');
}


}).call(this,jQuery);