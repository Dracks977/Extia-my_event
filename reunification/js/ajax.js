$(document).ready( function () { 
    $("#connexionForm").submit( function() {                        
        $.ajax({ 
           type: "POST", 
           url: "../php/Vlogin.php", 
           data: "mail="+$("#mail").val()+"&pass="+$("#pass").val(), 
           success: function(msg){
           console.log(msg)
                if(msg == "42")    
                {
                    $("span#erreur").html("Vous etes connect&eacute(e) !");
                    alert("Tu es connect&eacute;(e) !.");
                    var obj =  document.location.href= "../index.php"; 
                    setTimeout(obj,1000); 
                                   
     
                }
                else if (msg == "24")  
                {
                    $("span#erreur").html("Erreur lors de la connexion a la base de donnée.");
                    
                }
                else if (msg == "200")  
                {
                    $("span#erreur").html("Veuillez entrer une adresse mail.");
                    
                }
                else if (msg =="201"){
                    $("span#erreur").html("Veuillez entrer un mot de passe.");
                }
                 else if (msg =="202"){
                    $("span#erreur").html("Veuillez saisir un mot de passe ou une adresse mail correcte.");
                }

                            
           }
        });
        return false; 
});
})
