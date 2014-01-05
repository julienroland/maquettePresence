;(function( $ ){
	var $Nav = $(".nav" ),
	cWeb = '#000',
	aCours = ["web"],
	$DaySceance = $('.day').find('.sceances'),
	$Overlay = $('.overlay'),
	$PopupCreerCours = $('.popupCreerCours'),
	$PopupModifierCours = $('.popupModifierCours'),
	$PopupSupprimerCours = $('.popupSupprimerCours'),
	$PopupVoirCours = $('.popupVoirCours');

	$(function(){ //dans config, on peut changer les couleurs, enregistrer dans un json et les recups ave un tit js
		
		
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
		$('#color').change(function(){
			console.log($('#color').val());
		});
		/* END COLOR*/
		/* OVERLAY */
		$Overlay.on('click',hideAll);
		/* END OVERLAY */
		/* HELPER VOIR COURS */
		$('.helper.voirCours .groupe li').on('click','a',showEleveGroupe);
		/* END HELPER VOIR COURS */

	});
var showEleveGroupe = function( e ){
	e.preventDefault();

	$('.helper.voirCours .groupe li.active').removeClass('active');
	$(this).parent().addClass('active');

	if($(this).attr('data-link') === 'tri'){
		if($(this).attr('data-groupe') !== 'all'){
			var $groupe = $(this).attr('data-groupe');
			var $this = $(this);
			$.each($('.elevesDuCours .eleve'),function(){

				if($(this).find('.groupe').attr('data-groupe') !== $groupe){

					$(this).fadeOut();
				}
				else{

					$(this).fadeIn();
				}
			});
		}
		else{
			$.each($('.elevesDuCours .eleve'),function(){
				$(this).fadeIn();
			});
		}
	}
};
var hideAll = function( e ){
	e.preventDefault();
	$Overlay.fadeOut();

	$PopupCreerCours.fadeOut();
	$PopupModifierCours.fadeOut();
	$PopupSupprimerCours.fadeOut();
	$PopupVoirCours.fadeOut();
};
var overlay = function( $Selector ){
	$('html, body').animate({
		scrollTop: $Selector.offset().top
	}, 1000,function(){
		$Overlay.css({
			height:$(window).height(),
			width:$(window).width(),
			display:"block",
		});
	});
};
var showCreerPopup = function( e ){
	e.preventDefault();
	$PopupCreerCours.fadeIn();
	overlay( $PopupCreerCours );


	$PopupModifierCours.hide();
	$PopupSupprimerCours.hide();
	$PopupVoirCours.hide();

};

var showModifierPopup = function( e ){
	e.preventDefault();
	$PopupModifierCours.fadeIn();
	overlay( $PopupModifierCours );


	$PopupCreerCours.hide();
	$PopupSupprimerCours.hide();
	$PopupVoirCours.hide();
};
var showSupprimerPopup = function( e ){
	e.preventDefault();
	$PopupSupprimerCours.fadeIn();
	overlay( $PopupSupprimerCours );

	$PopupModifierCours.hide();
	$PopupCreerCours.hide();
	$PopupVoirCours.hide();
};
var showVoirPopup = function( e ){
	e.preventDefault();
	$PopupVoirCours.fadeIn();
	overlay( $PopupVoirCours );

	$PopupModifierCours.hide();
	$PopupSupprimerCours.hide();
	$PopupCreerCours.hide();
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