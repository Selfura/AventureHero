$(function(){
let erreur = $('#erreur');
let signin = $('#signin');
    if (erreur.css("display", "inline")) {
    	signin.prop("disabled", true);
    } else {
    	signin.prop("disabled", false);
    }

});