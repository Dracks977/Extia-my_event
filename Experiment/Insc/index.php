<html>
    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <meta charset="utf-8" />
        <title>MyEvent</title>
    </head>
    <body>
<form name="connexionForm" id="connexionForm" action="#"><!-- début du formulaire de connexion -->   
	<span id="erreur"></span><br><!-- span qui contiendra les éventuels messages d'erreur -->
 
	    <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" /><br><br>

        <label for="prenom">Prenom :</label>
        <input type="prenom" name="prenom" id="prenom" /><br><br>

        <label for="mail">Mail :</label>
        <input type="text" name="mail" id="mail" /><br><br>

	    <label for="pass">Mot de passe :</label>
	    <input type="password" name="pass" id="pass" /><br><br>

        <label for="pass2">Verification Mot de passe :</label>
        <input type="password" name="pass2" id="pass2" />

        <input type="submit" value="Je me connecte" class="bouton" /><!-- bouton de connexion -->
</form>
     </form>
     <script type="text/javascript" src="js/inscription.js"></script>
    </body>
</html>