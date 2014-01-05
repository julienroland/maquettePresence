;(function( $ ){

	$(function(){ //dans config, on peut changer les couleurs, enregistrer dans un json et les recups ave un tit js
		var $Nav = $(".nav" ),
		cWeb = '#000',
		aCours = ["web"],
		$DaySceance = $('.day').find('.sceances');
		
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
		$('.popupCreerCours .close').on('click','a',closePopup);
		$('.popupModifierCours .close').on('click','a',closePopup);
		$('.popupSupprimerCours .close').on('click','a',closePopup);
		$('.popupVoirCours .close').on('click','a',closePopup);

		$('.helper a[data-link="creer"').on('click',showCreerPopup);
		$('.helper a[data-link="modifier"').on('click',showModifierPopup);
		$('.helper a[data-link="supprimer"').on('click',showSupprimerPopup);
		$('.helper a[data-link="voir"').on('click',showVoirPopup);
		/* END POP UP */
		/* COLOR */
		/*$('#color').change(function(){
			console.log($('#color').val());
		});*/
		/* END COLOR*/
		
	});
var showCreerPopup = function( e ){
	e.preventDefault();
	$('.popupCreerCours').fadeIn();
};
var showModifierPopup = function( e ){
	e.preventDefault();
	$('.popupModifierCours').fadeIn();
};
var showSupprimerPopup = function( e ){
	e.preventDefault();
	$('.popupSupprimerCours').fadeIn();
};
var showVoirPopup = function( e ){
	e.preventDefault();
	$('.popupVoirCours').fadeIn();
};
var openMenu = function( e ){
	e.preventDefault();
	var $this = $(this).parent('.wrapper').find('.menu');
	$this.slideToggle().css({
		boxShadow:'rgba(0,0,0,0.4) 0 3px 3px 0',
		'-webkit-boxShadow':'rgba(0,0,0,0.4) 0 3px 3px 0',
		backgroundColor: '#5097bd',
	});
};
var closePopup = function( e ){
	e.preventDefault();
	$(this).parent().parent().fadeOut('fast');
};


}).call(this,jQuery);