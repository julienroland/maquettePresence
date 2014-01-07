;(function( $ ){
	var $Nav = $(".nav" ),
	cWeb = '#000',
	aCours = ["web"],
	$DaySceance = $('.day').find('.sceances'),
	$Overlay = $('.overlay'),
	$PopupCreerCours = $('.popupCreerCours'),
	$PopupModifierCours = $('.popupModifierCours'),
	$PopupSupprimerCours = $('.popupSupprimerCours'),
	$PopupVoirCours = $('.popupVoirCours'),
	$eleve = $('.elevesDuCours .eleve'),
	$actions = $('.actions'),
	$actionsPresence = $('.actionsPresence'),
	$ligne = $('.ligneSceances'),
	$popupModifierSceanceLigne = $('.popupModifierSceanceLigne'),
	$popupSupprimerSceanceLigne = $('.popupSupprimerSceanceLigne'),
	mouseX,
	mouseY;

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
		$('.close').on('click','a',closePopup);
		$('.delete').on('click',closeActions);

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

		/* HELPER PRESENCE COURS */

		$('.helper.voirCours .presence li').on('click','a',showPresenceEleveGroupe);

		/* END HELPER PRESENCE COURS */

		/* SCEANCES */

		/* LIGNE */

		$('.sceancesMois li').on('click','a',showActions);

		$actions.on('click','a.modifier',showModifierLignePopup);
		$actions.on('click','a.supprimer',showSupprimerLignePopup);

		/* END LIGNE */
		/* PRESENCE */
		$('.elevesDuCours .eleve').on('click','a',showActionsPresence);
		/* END PRESENCE */
		/* END SCEANCES */

		/* ANCRES */
		$('a[href^="#"]').click(function(){
			var the_id = $(this).attr("href");
			$('html, body').animate({
				scrollTop:$(the_id).offset().top
			}, 'slow');
			return false;
		});
		/* END ANCRES */

	});
var showSupprimerLignePopup = function( e ){
	e.preventDefault();
	mouseX = e.pageX; 
	mouseY = e.pageY;

	$popupSupprimerSceanceLigne.css({'top':mouseY+125,'left':0}).fadeIn();
	overlay( $popupSupprimerSceanceLigne );


	$popupModifierSceanceLigne.hide();
};
var showModifierLignePopup = function( e ){
	e.preventDefault();
	mouseX = e.pageX; 
	mouseY = e.pageY;

	$popupModifierSceanceLigne.css({'top':mouseY+125,'left':0}).fadeIn();
	overlay( $popupModifierSceanceLigne );


	$popupSupprimerSceanceLigne.hide();
};
var showActions = function( e ){
	e.preventDefault();
	mouseX = e.pageX; 
	mouseY = e.pageY;

	$actions.css({'top':mouseY+25,'left':mouseX-100}).fadeIn();
	
};
var showActionsPresence = function( e ){
	e.preventDefault();
	mouseX = e.pageX; 
	mouseY = e.pageY;

	$actionsPresence.css({'top':mouseY+25,'left':mouseX-100}).fadeIn();
	
};
var showPresenceEleveGroupe = function( e ){
	e.preventDefault();
	if($(this).attr('data-link') === 'presence'){
		$(this).attr('data-link','image');
		$(this).html('Revoir les photos');

		
		$.each($eleve,function(){
			$(this).find('img').hide();

			$(this).find('.percent span').html('70%');
			$(this).find('.percent').show();

		});
	}
	else
	{
		$(this).attr('data-link','presence');
		$(this).html('Voir les présences');

		
		$.each($eleve,function(){
			$(this).find('.percent').hide();	
			$(this).find('img').show();
		});
	}
};
var showEleveGroupe = function( e ){
	e.preventDefault();

	$('.helper.voirCours .groupe li.active').removeClass('active');
	$(this).parent().addClass('active');

	$('.helper.voirCours .presence li > a').attr('data-groupe',$(this).attr('data-groupe'));

	if($(this).attr('data-link') === 'tri'){
		if($(this).attr('data-groupe') !== 'all'){
			var $groupe = $(this).attr('data-groupe');
			var $this = $(this);
			$.each($eleve,function(){

				if($(this).find('.groupe').attr('data-groupe') !== $groupe){

					$(this).fadeOut();
				}
				else{

					$(this).fadeIn();
				}
			});
		}
		else{
			$.each($eleve,function(){
				$(this).fadeIn();
			});
		}
	}
};
var hideAll = function( e ){
	e.preventDefault();
	$Overlay.fadeOut();
	$actions.fadeOut();

	$popupModifierSceanceLigne.fadeOut();
	$popupSupprimerSceanceLigne.fadeOut();
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
	$Overlay.fadeOut();
	$actions.fadeOut();
};
var closeActions = function( e ){
	e.preventDefault();
	$(this).parent().fadeOut();
}

}).call(this,jQuery);