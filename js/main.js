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
	$sceanceId,
	$slugEleve,
	$groupeEleve,
	$presenceId,
	$search = $('.search').find('#search'),
	oMyCoursColors = [],
	oMyPresenceColors = [],
	oMyGroupeColors = [],
	mouseX,
	mouseY;

	$(function(){ //dans config, on peut changer les couleurs, enregistrer dans un json et les recups ave un tit js
		
		getPref();
		putColorSceances();
		putColorGroupeEleves();
		putColorGroupe();
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

		$('.sceancesMois li').on('click','a',function( e ){
			e.preventDefault();
			mouseX = e.pageX; 
			mouseY = e.pageY;
			var $id = $(this).attr('data-sceance');
			showActions($id,mouseX,mouseY);
		});

		$actions.on('click','a.modifier',showModifierLignePopup);
		$actions.on('click','a.supprimer',showSupprimerLignePopup);
		$actionsPresence.find('.present').on('click',putPresent);
		$actionsPresence.find('.justifier').on('click',putJustifier);
		$actionsPresence.find('.absent').on('click',putAbsent);
		$actionsPresence.find('.aucune').on('click',putAucune);

		/* END LIGNE */
		/* PRESENCE */
		$('.elevesDuCours.presenceCours .eleve').on('click','a',showActionsPresence);
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
		/* ELEVES */
		
		$search.keydown(function(){
			setTimeout(function() {
				var $value = $search.val();
				listEleves( $value );

			}, 50);
		});
		$('.eleves li').on('click','a',function( e ){
			e.preventDefault();
			mouseX = e.pageX; 
			mouseY = e.pageY;
			var $slug = $(this).parent().attr('data-slug');
			showActions($slug,mouseX,mouseY);
		});
		
		
		/* END ELEVES */
		/* GROUPE */
		$('.listGroupes .groupe').on('click','a',function( e ){
			e.preventDefault();
			mouseX = e.pageX; 
			mouseY = e.pageY;
			var $id = $(this).attr('data-groupe');
			showActions($id,mouseX,mouseY);
		});
		/* END GROUPE */


	});
var goToEleve = function( e ){
	e.preventDefault();
	$slug = $(this).attr('data-slug');
	$that = $('.list .range li[data-slug="'+$slug+'"]');
	goTo($that);
	$that.find('.nom a').focus();

	
};
var goTo = function($selector){
	$('html, body').animate({
		scrollTop: $selector.offset().top
	}, 400);
};
var putColorSceances  = function(){
	$.each($('.sceances li'),function(){
		var $sceance = $(this).attr('data-cours');

		if( oMyCoursColors[$sceance]){
			$(this).css({
				backgroundColor:oMyCoursColors[$sceance],
			})
		}
	});
	

};
var putColorGroupeEleves = function(){

	$.each($('.eleves li'),function(){
		var $groupe = $(this).find('.groupe').attr('data-groupe');

		if( oMyGroupeColors[$groupe]){
			$(this).css({
				backgroundColor:oMyGroupeColors[$groupe],
				color:"white",

			});
			$(this).find('span > a').css({
				color:"white",
				borderBottom:"1px dotted white",
				borderTop:0,
			});
		}
	});
};
var putColorGroupe = function(){

	$.each($('.listGroupes .groupe'),function(){
		var $groupe = $(this).find('.nom').attr('data-groupe');

		if( oMyGroupeColors[$groupe]){
			console.log($(this));
			$(this).find('a').css({
				backgroundColor:oMyGroupeColors[$groupe],
				color:"white",

			});
			$(this).find('span > a').css({
				color:"white",
				borderBottom:"1px dotted white",
				borderTop:0,
			});
		}
	});
};

var listEleves = function( value ){
	var value = value.toLowerCase();
	if($.type(value)==="string"){
		autocompleteEleves( value );
		$('.listAutocomplete li').on('click','a',goToEleve);
	}
	
};
var addNameToList = function( sNom ,sSlug ){
	var $inSide = $('.search .listAutocomplete li');
	var bExist = false;
	if($inSide.length > 0){
		$.each($inSide,function(){
			
			if($(this).find('a').attr('data-slug') === sSlug){
				bExist = true;
			}
			
		});
		if(!bExist){
			$('.search .autoCompletionEleves').show();
			$('.search .listAutocomplete').append('<li><a href="voirEleve.php" data-slug="'+sSlug+'" title="Voir la fiche de l\'élève">'+sNom+'</a></li>');
		}
	}
	else{

		if(!bExist){
			$('.search .autoCompletionEleves').show();
			$('.search .listAutocomplete').append('<li><a href="voirEleve.php" data-slug="'+sSlug+'" title="Voir la fiche de l\'élève">'+sNom+'</a></li>');
		}
	}
	
};
var removeNameToList = function( sSlug ){

	var $inSide = $('.search .listAutocomplete li');
	if(sSlug !== "all"){
		$.each($inSide,function(){
			
			if($(this).find('a').attr('data-slug') === sSlug){
				$(this).remove();
			}
			
		});
	}else{
		$inSide.remove();
	}
	
};
var autocompleteEleves = function( value ){
	if(value !== ""){
		aData = dataAutocompleteEleves();

		for(var i=0;i<aData.length;i++){

			if( aData[i].indexOf(value) >= 0){

				var sNomReplace = aData[i].replace('-'," ");
				var sNomWellDisplay = sNomReplace.ucwords();
				addNameToList(sNomWellDisplay, aData[i]);

			}
			else{
				removeNameToList( aData[i]);
			}

		}
	}
	else{
		removeNameToList( "all");
	}
};
var dataAutocompleteEleves = function(){
	var aDataNom = [],
	aDataAnneeLevel = [],
	aDataGroupe = [],
	aDataOption = [],
	$nom,
	$anneeLevel,
	$groupe,
	$option;

	$.each($('.range'),function(){
		$.each($('.eleves .etudiant'),function(){
			$nom = $(this).find('.nom').attr('data-slug');
			var ok = $.inArray($nom, aDataNom);
			if(ok < 0){
				aDataNom.push($nom);
			}

			$anneeLevel = $(this).find('.anneeLevel').attr('data-slug');
			var ok = $.inArray($anneeLevel, aDataAnneeLevel);
			if(ok < 0){
				aDataAnneeLevel.push($anneeLevel);
			}


			$groupe = $(this).find('.groupe').text();
			var ok = $.inArray($groupe, aDataGroupe);
			if(ok < 0){
				aDataGroupe.push($groupe);
			}


			$option = $(this).find('.option').text();
			var ok = $.inArray($option, aDataOption);
			if(ok < 0){
				aDataOption.push($option);
			}

		});
	});
	
	return aDataNom;
};

var putPresent = function( e ){
	e.preventDefault();
	//requete ajax pour changer la presence
	if(ajaxChangePresence( $slugEleve, $sceanceId, $(this).attr('data-presence'))){
		
		$that = $eleve.find('.nom[data-slug="'+$slugEleve+'"]');
		$presenceId = $(this).attr('data-presence');

		$that.css({
			color:oMyPresenceColors[$presenceId],
		});
	}
	
};
var putJustifier = function( e ){
	e.preventDefault();
	//requete ajax pour changer la presence
	if(ajaxChangePresence( $slugEleve, $sceanceId, $(this).attr('data-presence'))){
		
		$that = $eleve.find('.nom[data-slug="'+$slugEleve+'"]');
		$presenceId = $(this).attr('data-presence');

		$that.css({
			color:oMyPresenceColors[$presenceId],
		});
	}
	
};
var putAbsent = function( e ){
	e.preventDefault();
	//requete ajax pour changer la presence
	if(ajaxChangePresence( $slugEleve, $sceanceId, $(this).attr('data-presence'))){
		
		$that = $eleve.find('.nom[data-slug="'+$slugEleve+'"]');
		$presenceId = $(this).attr('data-presence');

		$that.css({
			color:oMyPresenceColors[$presenceId],
		});
	}
	
};
var putAucune = function( e ){
	e.preventDefault();
	//requete ajax pour changer la presence
	if(ajaxChangePresence( $slugEleve, $sceanceId, $(this).attr('data-presence'))){
		
		$that = $eleve.find('.nom[data-slug="'+$slugEleve+'"]');
		$presenceId = $(this).attr('data-presence');

		$that.css({
			color:oMyPresenceColors[$presenceId],
		});
	}
	
};
var getPref= function(  ){
	$.ajax({
		async: false,
		url: "config.json",
		success: function( data ) {
			var oColorCours = data.color.cours;
			var oColorPresence = data.color.presence;
			var oColorGroupe = data.color.groupe;

			for(var i = 0;i <= oColorCours.length-1;i++){

				oMyCoursColors[oColorCours[i].cours] = oColorCours[i].color;	
			}
			for(var i = 0;i <= oColorPresence.length-1;i++){

				oMyPresenceColors[oColorPresence[i].presence] = oColorPresence[i].color;	
			}
			for(var i = 0;i <= oColorGroupe.length-1;i++){

				oMyGroupeColors[oColorGroupe[i].groupe] = oColorGroupe[i].color;	
			}
		}
	})

	
	
};
var ajaxChangePresence = function( $eleve, $sceance , $presence){
	/*$.ajax({
		url:"",
		dataType:"json",
		success:function( data ){
			return true;
		};
	});*/
return true;
};
var showSupprimerLignePopup = function( e ){
	e.preventDefault();
	mouseX = e.pageX; 
	mouseY = e.pageY;

	$popupSupprimerSceanceLigne.css({'top':mouseY+125,'left':+130}).fadeIn();
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
var showSupprimerElevePopup = function( e ){
	e.preventDefault();
	mouseX = e.pageX; 
	mouseY = e.pageY;

	$('.popupSupprimerEleves').css({'top':mouseY+125,'left':+130}).fadeIn();
	overlay( $popupSupprimerSceanceLigne );


	$popupModifierSceanceLigne.hide();
};
var showModifierElevePopup = function( e ){
	e.preventDefault();
	mouseX = e.pageX; 
	mouseY = e.pageY;

	$('.popupModifierEleves').css({'top':mouseY+125,'left':0}).fadeIn();
	overlay( $popupModifierSceanceLigne );


	$popupSupprimerSceanceLigne.hide();
};
var showActions = function($selector, x, y){

	$actions.attr('data-id',$selector);

	$actions.css({'top':y+25,'left':x-100}).fadeIn('fast');
	
};
var showActionsPresence = function( e ){
	e.preventDefault();
	mouseX = e.pageX; 
	mouseY = e.pageY;

	$slugEleve = $(this).find('.nom').attr('data-slug');
	$groupeEleve = $(this).find('.groupe').attr('data-groupe');
	$sceanceId = Number($('.gererMaSceance').attr('data-sceance'));
	$actionsPresence.css({'top':mouseY+50,'left':mouseX}).fadeIn('fast');
	
};
var showPresenceEleveGroupe = function( e ){
	e.preventDefault();
	if($(this).attr('data-link') === 'presence'){
		$(this).attr('data-link','image');
		$(this).html('Revoir les photos');

		$('.presenceGroupe').fadeIn();
		
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

		$('.presenceGroupe').fadeOut();
		
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
};
String.prototype.ucwords = function() {
	var words = this.split(' '),
	i = 0,
	l = words.length;
	for( ; i < l; i++) {
		words[i] = words[i].charAt(0).toUpperCase() + 
		words[i].slice(1);
	}
	return(words.join(' '));
};

}).call(this,jQuery);