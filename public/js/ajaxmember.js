  $(function() {

    $('#pseudo').keyup(function(){ // Quand les touches sont relâchés, la fonction s'enclenche.

      let pseudo = $('#pseudo').val();
      $.get(
        'index.php?action=verifPseudo',
        {pseudo: pseudo},
        function(data){
           if(data === "1"){ 
            $('#ok').prev("#erreur").fadeIn().text('Pseudo Indisponible');
            $('#erreur').next('#ok').fadeOut();
            console.log("pseudo déjà pris");
          }
          else {
            $('#erreur').next('#ok').fadeIn().text('Pseudo disponible');
            $('#ok').next('#erreur').fadeOut();
            console.log("pseudo libre");

          }
        }
      );
    });
  });