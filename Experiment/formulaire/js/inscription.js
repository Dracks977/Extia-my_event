$(document).ready( function () { 
    $("#connexionForm").submit( function() {                        
        $.ajax({ 
           type: "POST", 
           url: "php/Vreg.php", 
           data: "mail="+$("#mail").val()+"&pass="+$("#pass").val()+"&pass2="+$("#pass2").val()+"&nom="+$("#nom").val()+"&prenom="+$("#prenom").val(), 
           success: function(msg){ 
            console.log(msg);
                if(msg == "42") 
                {
                    alert("Vous etes inscrit.")
     
                }
                else if (msg == "24")  
                {
                    $("span#erreur").html("Erreur lors de la connexion a la base de donnée.");
                    
                }
                else if (msg == "200")  
                {
                    $("span#erreur").html("Veuillez entrer un Mail.");
                    
                }
                else if (msg =="201"){
                    $("span#erreur").html("Veuillez entrer un mot de passe.");
                }
                 else if (msg =="203"){
                    $("span#erreur").html("Veuillez entrer un nom.");
                }

                 else if (msg =="204"){
                    $("span#erreur").html("Veuillez entrer un prenom.");
                }

                 else if (msg =="205"){
                    $("span#erreur").html("Veuillez entrer la confirmation du mot de passe.");
                }

                 else if (msg =="206"){
                    $("span#erreur").html("Les mots de passe ne sont pas identiques");
                }
                 else if (msg =="207"){
                    $("span#erreur").html("Vous avez deja un compte.");
                }
                else if (msg =="101"){
                    $("span#erreur").html("Veuillez entrer la cle Extia.");
                }
                else if (msg =="102"){
                    $("span#erreur").html("La cle Extia ne correspond pas.");
                }

                            
           }
        });
        return false; 
});
});