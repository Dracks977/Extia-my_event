<!DOCTYPE html>
<html>

<header>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Extia Events</title>
    <link rel='stylesheet' type='text/css' href='../css/styleconex.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php include("headerconnect.php"); ?>
</header>

<body>
    <div id="ins">
    <img alt="inscription" src="../img/inscription.png" id="inscription">
	<h1>Inscription</h1>
	<i>Veuillez saisir vos informations pour vous inscrire.</i></br></br>
  <form name="connexionForm" id="connexionForm" action="#">
	<label for='nom'>Nom * : </label><input id='nom' type='text' name='nom'></input></br>
	<label for='prenom'>Pr&eacutenom * : </label><input id='prenom' name='prenom' type='text'></input></br>
	<label for='mail'>Adresse mail * : </label><input id='mail' name='mail' type='text'></input></br>
	<label for='pass'>Mot de passe * : </label><input id='pass' name='pass' type='password'></input></br>
	<label for='pass2'>Confirmation * : </label><input id='pass2' name='pass2' type='password'></input></br>
  <label for='cle'>Clé Extia * : </label><input id='cle' name='cle' type='password'></input></br>
    </br><input type='submit' value='Envoyer' id="bouton11"></input></br><br>
    </form>

    <i>* Champs obligatoires</i>
    <span id="erreur"></span><br>
    </div>
</body>

  <footer>
    <nav id="menu_footer">
      <div class="bloc_footer">
        <ul>
      <img id="flecheorange" class="img2" src="../img/fc.svg" alt="flecheOrange"/>
      <a href="https://fr-fr.facebook.com"><img id="facebook" class="img1" src="../img/facebook.png" alt="facebook"/></a>
      <a href="https://twitter.com/?lang=fr"><img id="twitter" class="img1" src="../img/twitter.png" alt="twitter"/></a>
      <a href="https://www.youtube.com/?hl=fr&gl=FR"><img id="youtube" class="img1" src="../img/youtube.png" alt="youtube"/></a>
          <img id="greatplace" class="img" src="../img/Gp.png" alt="logoGreatPlace"/>
        </ul>
      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="../js/logohover2.js"></script>
  <script type="text/javascript" src="../js/inscription.js"></script>
  <script type="text/javascript" src="../js/footer_fleche.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>
