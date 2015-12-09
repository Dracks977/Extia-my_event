<!DOCTYPE html>
<html>

<header>
	<title>Extia Events</title>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<div id="logo"
<a href="http://www.extia.fr"><img alt="Extia1" src="img/Logo_FINAL3.png" id="hover"></a>
</div>
<div id="co">
<a href="#"><img alt="Connexion" src="img/connexion1.png" id="connexion1"></a>
</div>
<nav id="menu_header">
  <ul id="head">
    <li class="h"><a href="#"><img alt="Extia1" src="img/accueil.png" id="acc" style="width:50px"></a></li>
    <li class="h"><a href="#"><img alt="Extia1" src="img/pro.png" id="pro" style="width:50px"></a></li>
    <li class="h"><a href="#"><img alt="Extia1" src="img/fun.png" id="fun" style="width:50px"></a></li>
    <li class="h"><a href="#"><img alt="Extia1" src="img/contact.png" id="cont" style="width:50px"></a></li>
  </ul>
</nav>
</header>

<body>
    <div id="ins">
    <img alt="inscription" src="img/inscription.png" id="inscription">
	<h1>Inscription</h1>
	<i>Veuillez saisir vos informations pour vous inscrire.</i></br></br>
	<label for='nom'>Nom * : </label><input id='nom' type='text' name='nom'></input></br>
	<label for='prenom'>Pr&eacutenom * : </label><input id='prenom' name='prenom' type='text'></input></br>
	<label for='mail'>Adresse mail * : </label><input id='mail' name='mail' type='text'></input></br>
	<label for='pass'>Mot de passe * : </label><input id='pass' type='password'></input></br>
	<label for='pass2'>Confirmation * : </label><input id='pass2' type='password'></input></br>
    Acceptez-vous les conditions g&eacuten&eacuterales ? *</br>
	<input id='oui2' type='checkbox'>Oui</input></br>
	<input id='non2' type='checkbox'>Non</input></br>
    </br><input type='submit' value='Envoyer'></br>
    <i>* Champs obligatoires</i>
    </div>
</body>

  <footer>
    <nav id="menu_footer">
      <div class="bloc_footer">
        <ul>
      <img id="flecheorange" class="img2" src="img/fc.svg" alt="flecheOrange"/>
      <a href="https://fr-fr.facebook.com"><img id="facebook" class="img1" src="img/facebook.png" alt="facebook"/></a>
      <a href="https://twitter.com/?lang=fr"><img id="twitter" class="img1" src="img/twitter.png" alt="twitter"/></a>
      <a href="https://www.youtube.com/?hl=fr&gl=FR"><img id="youtube" class="img1" src="img/youtube.png" alt="youtube"/></a>
          <img id="greatplace" class="img" src="img/Gp.png" alt="logoGreatPlace"/>
        </ul>
      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="js/logohover.js"></script>
  <script type="text/javascript" src="js/footer_fleche.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>