<!DOCTYPE html>
<html>

<header>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Extia Events</title>
     <link rel='stylesheet' type='text/css' href='../css/stylins.css'>
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
    <a href="https://www.facebook.com/talentextia"><img id="facebook" class="img1" src="../img/facebook.png" alt="facebook"/></a>
    <a href="https://twitter.com/Extia_conseil"><img id="twitter" class="img1" src="../img/twitter.png" alt="twitter"/></a>
    <a href="https://www.youtube.com/user/TalentsExtia"><img id="youtube" class="img1" src="../img/youtube.png" alt="youtube"/></a>
          <a href="https://www.linkedin.com/company/extia"><img id="in" class="img1" src="../img/in.jpg" alt="linkedin"/></a>
          <a href="http://fr.viadeo.com/fr/company/extia"><img id="viadeo" class="img1" src="../img/viadeo.png" alt="viadeo"/></a>
          <img id="greatplace" class="img" src="../img/Gp2.png" alt="logoGreatPlace"/>
        </ul>
      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="../js/logohover2.js"></script>
  <script type="text/javascript" src="../js/inscription.js"></script>
  <script type="text/javascript" src="../js/finalfooter.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>