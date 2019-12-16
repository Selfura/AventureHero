$(function(){
let erreur = $('#erreur');
let signin = $('#signin');
    if ($('#erreur:contains("✘")') && $('#ok:contains("")')) {
    	signin.prop("disabled", true);
    	console.log('Impossible de Choisir ce pseudo');
    } if ($('#ok:contains("✓")') && $('#erreur:contains("")') ) {
    	signin.prop("disabled", false);
    	console.log('Pseudo Ok');
    }

});