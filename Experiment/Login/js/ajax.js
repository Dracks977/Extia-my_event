$(document).ready( function () { 
    $("#connexionForm").submit( function() {    // à la soumission du formulaire                         
        $.ajax({ // fonction permettant de faire de l'ajax
           type: "POST", // methode de transmission des données au fichier php
           url: "php/Vlogin.php", // url du fichier php
           data: "mail="+$("#mail").val()+"&pass="+$("#pass").val(), // données à transmettre
           success: function(msg){ // si l'appel a bien fonctionné
                if(msg == "42") // si la connexion en php a fonctionnée
                {
                    $("span#erreur").html("Vous etes connecter.");
                    // on désactive l'affichage du formulaire et on affiche un message de bienvenue à la place
                }
                else if (msg == "24")  // si la connexion en php n'a pas fonctionnée
                {
                    $("span#erreur").html("Erreur lors de la connexion a la base de donnée.");
                    // on affiche un message d'erreur dans le span prévu à cet effet
                }
                else if (msg == "200")  // si la connexion en php n'a pas fonctionnée
                {
                    $("span#erreur").html("Veuillez entrer un Mail.");
                    // on affiche un message d'erreur dans le span prévu à cet effet
                }
                else if (msg =="201"){
                    $("span#erreur").html("Veuillez entrer un mot de passe.");
                }
                 else if (msg =="202"){
                    $("span#erreur").html("Mauvaise combinaison.");
                }

                            
           }
        });
        return false; // permet de rester sur la même page à la soumission du formulaire
    });
});
