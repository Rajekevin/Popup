/*On met un évenement sur le lien qui déclenche 
la modale et fait "simuler le click en jquery via trigger*/		

$(function ($) {
	$("#demo01").animatedModal();
  $( "#demo01" ).trigger( "click" );
});
/*ANIMATEMODAL -> http://joaopereirawd.github.io/animatedModal.js */