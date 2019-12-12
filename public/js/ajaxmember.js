  $(function() {

    $('#pseudo').keyup(function(){ // Quand les touches sont relâchés, la fonction s'enclenche.

      let pseudo = $('#pseudo').val();
      $.get(
        'index.php?action=verifPseudo',
        {pseudo: pseudo},
        function(data){
           if(data === "1"){ 
            $('#pseudo').next("#erreur").fadeIn().text('✘');
            $('#erreur').next('#ok').fadeOut();
            console.log("pseudo déjà pris");
           
          }
          else {
            $('#erreur').next('#ok').fadeIn().text('✓');
            $('#pseudo').next('#erreur').fadeOut();
            console.log("pseudo libre");
          }
        }
      );
    });
  });




/*$(function(){
let erreur = $('#erreur').text();
let signin = $('#signin');
    if (!($('#erreur').text(""))) {
       $('#signin').prop("disabled", true);
    } else {
      $('#signin').prop("disabled", false);
    }

});*/