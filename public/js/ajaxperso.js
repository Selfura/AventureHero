  $(function() {

    $('#Nom_perso').keyup(function(){ // Quand les touches sont relâchés, la fonction s'enclenche.

      let Nom_perso = $('#Nom_perso').val();
      $.get(
        'index.php?action=verifNom',
        {Nom_perso: Nom_perso},
        function(data){
           if(data === "1"){ 
            $('#Nom_perso').next("#error").fadeIn().text('✘');
            $('#error').next('#okay').fadeOut();
            $('#send').prop("disabled", true);
            console.log("pseudo déjà pris");
           
          }
          else {
            $('#error').next('#okay').fadeIn().text('✓');
            $('#Nom_perso').next('#error').fadeOut();
            $('#send').prop("disabled", false);
            console.log("pseudo libre");
          }
        }
      );
    });
  });
