<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1,maximum-scale=1,target-densitydpi=device-dpi"/>
<header>
<title>Se connecter</title>
    <link rel='stylesheet' type='text/css' href='../css/styleconex.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php include("headerconnect.php"); ?>
</header>

<body>
	<div id="ins">
		<img alt="connexion" src="../img/connexion.png" id="inscription">
		<h1>Connexion</h1>
		<i>Veuillez remplir les champs ci-dessous pour vous connecter.</i></br></br>
<form name="connexionForm" id="connexionForm" action="#">
			<label for='mail'>Adresse mail * : </label><input id='mail' name='mail' type='text'></input></br>
	        <label for='pass'>Mot de passe * : </label><input id='pass' name='pass' type='password'></input></br>
		    </br><input type="submit" value="Je me connecte" class="bouton" /></br>
</form>
    <h5><i>* Champs obligatoires</i></h5><br><br><br>
    <span id="erreur"></span></br>
    <a href="inscription.php/">Tu n'es pas encore inscrit ?</a></br>
    <a href="../Admin/">Panel admin</a></br>
    <a href="mdp_oublie.php">Mot de passe oubli&eacute; ?</a>
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
  <script type="text/javascript" src="../js/ajax.js"></script>
  <script type="text/javascript" src="../js/finalfooter.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>