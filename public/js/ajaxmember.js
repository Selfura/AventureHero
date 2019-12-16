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
            $('#signin').prop("disabled", true);
            console.log("pseudo déjà pris");
           
          }
          else {
            $('#erreur').next('#ok').fadeIn().text('✓');
            $('#pseudo').next('#erreur').fadeOut();
            $('#signin').prop("disabled", false);
            console.log("pseudo libre");
          }
        }
      );
    });
  });
