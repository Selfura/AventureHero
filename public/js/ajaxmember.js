  $(function() {

    $('#pseudo').keyup(function(){ // Quand les touches sont relâchés, la fonction s'enclenche.

      let pseudo = $('#pseudo').val();
      $.get(
        'membresManager.php', {pseudo: pseudo}, function(data){
           if(data === "1"){ 
            $('#pseudo').next("#erreur").fadeIn().text('Pseudo Indisponible');
            $('#erreur').next('#ok').fadeOut();
            console.log("pseudo déjà pris");
          }
          else {
            $('#erreur').next('#ok').fadeIn().text('Pseudo disponible');
            $('#pseudo').next('#erreur').fadeOut();
            console.log("pseudo libre");

          }
        }
      );
    });
  });